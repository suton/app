<?php
@session_start();
@ob_start();
class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
         //ใช้ filters Rights แทน  public function accessRules()
         //แต่ห้าม filter rights ที่ sitecontroller
        public function filters() {
            return array(
                //'accessControl', 
                    //'rights',
            );
        }

        /**
	* Actions that are always allowed.
	*/
	public function allowedActions()
	{
	 	//return 'index,login';
	}
        
//        public function filters()
//        {
//            return array(
//                'accessControl',
//                'postOnly + delete',
//                array('ext.bootstrap.filters.BootstrapFilter - delete')
//            );
//        }
    
    public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
//                        'upload'=>array(
//                            'class'=>'xupload.actions.XUploadAction',
//                            'path' =>Yii::app() -> getBasePath() . "/../uploads",
//                            'publicPath' => Yii::app() -> getBaseUrl() . "/uploads",
//                            'subfolderVar' => "parent_id",
//                           // 'thumbnailUrl'=>Yii::app() -> getBasePath() . "/../uploads/thumbnail",
//                        ),
		);
	}
        
        public function actionSearch() {
            //echo '55++actionSearch'.$_GET['Building']['building_type_id'];
            $criteria=new CDbCriteria();
            $criteria->order='id desc';
            $criteria->condition='status=2';
            $criteria->addSearchCondition('building_type_id',(isset($_GET['building_type_id']))?$_GET['building_type_id']:'',TRUE,'AND');
            $criteria->addSearchCondition('province_id',(isset($_GET['province_id'])?$_GET['province_id']:''),TRUE,'AND');
            $criteria->addSearchCondition('amphur_id',(isset($_GET['amphur_id'])?$_GET['amphur_id']:''),TRUE,'AND');

            $dataProvider=new CActiveDataProvider('Building',array(
                'pagination'=>array('pageSize'=>10),
                'criteria'=>$criteria
            ));
            
            $this->render('f_search_list',array('dataProvider'=>$dataProvider));
            
        }
        
        public function actionFdetail($id) {
                        
            $building=  Building::model()->findByPk($id);
            //onclick update view
            $building->view+=1;
            $building->save();
            
            $amenity=  Amenities::model()->findByPk($id);
            $map=  Map::model()->findByPk($id);
            
            $comment=$this->newComment($building);
            $rating=new Rating();
            
            $dataComment=new CActiveDataProvider('Comment',array(
                'pagination'=>array(
                    'pageSize'=>5
                ),
                'criteria'=>array(
//                    'with'=>array(
//                        'post'=>array(
//                            'condition'=>'building_id='.$building->id,
//                        ),
//                    ),
                    'with'=>array('post'),
                    'condition'=>'building_id='.$building->id,
                    'order'=>'t.id DESC'
                ),
                
            ));
            $this->render('fdetail',array(
                'building'=>$building,
                'amenity'=>$amenity,
                'map'=>$map,
                'comment'=>$comment,
                'dataComment'=>$dataComment,
                'rating'=>$rating));
        }
        
        public function actionAvgRating($building_id){
            $total=  Yii::app()->db->createCommand()
                    ->select('avg(rating) as avg')
                    ->from('rating')
                    ->where('building_id='.$building_id)
                    ->queryRow();
            //print_r($avg);
            echo round($total['avg']);
            return round($total['avg']);
        }

        protected function newComment($post)
        {
                $comment=new Comment;
                if(isset($_POST['ajax']) && $_POST['ajax']==='comment-form')
                {
                        echo CActiveForm::validate($comment);
                        Yii::app()->end();
                }
                if(isset($_POST['Comment']))
                {
                        $comment->attributes=$_POST['Comment'];
                        if($post->addComment($comment))
                        {
                                if($comment->status==Comment::STATUS_PENDING)
                                        Yii::app()->user->setFlash('commentSubmitted','Thank you for your comment. Your comment will be posted once it is approved.');
                                $this->refresh();
                        }
                }
                return $comment;
        }
        
        public function actionRecentList(){
            $dataProvider=new CActiveDataProvider('Building',array(
                'pagination'=>array(
                    'pageSize'=>10
                ),
                'criteria'=>array(
                    'order'=>'id desc',
                    'condition'=>'status=2'
                )
            ));
            $this->render('f_recent_list',array('dataProvider'=>$dataProvider));
        }
        
        public function actionRecentGrid(){
            $dataProvider=new CActiveDataProvider('Building',array(
                'pagination'=>array(
                    'pageSize'=>12
                ),
                'criteria'=>array(
                    'order'=>'id desc',
                    'condition'=>'status=2'
                )
            ));
            $this->render('f_recent_grid',array('dataProvider'=>$dataProvider));
        }
        /**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
                //echo Yii::app()->user->isGuest.'555';
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
                //echo $buildingType.'zzz';
                $criteria=new CDbCriteria();
                $criteria->order='id desc';
                $criteria->condition='status=2';
                
                $dataProvider=new CActiveDataProvider('Building',array(
                    'pagination'=>array('pageSize'=>8),
                    'criteria'=>$criteria
                ));
                
		$this->render('f_index',array(
                    'dataProvider'=>$dataProvider,
                ));
                
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}
        public function actionForm(){
            $this->render('form');
        }

        /**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}
        
        /**
	 * Activation user account
	 */
	public function actionActivation () {
		$email = $_GET['email'];
		$activekey = $_GET['activekey'];
                //echo 'ssssssssssssssssssssssssss';
		if ($email&&$activekey) {
			$find = Usertable::model()->findByAttributes(array('email'=>$email));
			if (isset($find)&&$find->user_status_id) {
			     Yii::app()->user->setFlash('Success', 'บัญชีของคุณถูกเปิดใช้งานอยู่แล้ว');
			} elseif(isset($find->activekey) && ($find->activekey==$activekey)) {
				$find->activekey = md5(microtime());
				$find->user_status_id = 1;
				$find->save();
			    Yii::app()->user->setFlash('Success', 'บัญชีของคุณถูกเปิดใช้งานแล้วครับ');
			} else {
			    Yii::app()->user->setFlash('error', 'การเปิดใช้งานบัญชีผิดพลาด');
			}
		} else {
			Yii::app()->user->setFlash('error', 'การเปิดใช้งานบัญชีผิดพลาดxx');
		}
                $this->redirect(array('site/index'));
	}
        /**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;
                $modelRegis=new Usertable('register');
		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
                if(isset($_POST['ajax']) && $_POST['ajax']==='register-form')
		{
			echo CActiveForm::validate($modelRegis);
			Yii::app()->end();
		}
                
		// เช็คการ login
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login()){
                             Yii::app()->session['id']=$model->id;
                             Yii::app()->session['username']=$_POST['LoginForm']['username'];
                             //$this->redirect(Yii::app()->user->returnUrl);
                             $this->redirect(array('dashboard/index'));
                        }
		}
                
                 if(isset($_POST['Usertable'])){
                    //echo $_POST['Usertable']['email'];
                    $modelRegis->attributes=$_POST['Usertable'];
                    //$modelRegis->repeatpassword=$modelRegis->password;
                    
                    //ตรวจว่ากรอกข้อมูลครบทุกช่องแล้วจึง hash
                    if($modelRegis->validate()) {                        
                        //$modelRegis->password=$modelRegis->hashPassword($_POST['Usertable']['password']);
                        //$modelRegis->repeatpassword=$modelRegis->password;
                        $modelRegis->activekey=$modelRegis->hashPassword(microtime().$modelRegis->password);
                    }
                    
                    if($modelRegis->save()){
                        
                          $lastUid=$modelRegis->getLastID();
                          $Corporation=new Corporation();
                          $code=new KDate();
                          $Corporation->code=$code->getApartmentCode($lastUid);
                          $Corporation->owner_id=$lastUid;
                          $Corporation->save();
                        
                        Yii::app()->user->setFlash('success', 'ขอบคุณสำหรับการสมัครสมาชิก โปรดยืนยันการใช้งานใน email ของท่านอีกครั้ง');
                        $link="http://".$_SERVER['HTTP_HOST'].Yii::app()->homeUrl."Site/Activation?activekey=$modelRegis->activekey&email=$modelRegis->email";
                        $message= "<a href=$link target='_blank'>คลิกที่นี่เพื่อเปิดการใช้งาน</a>";
                        Email::sendGmail('TheRoom', 'songkaw@gmail.com',$modelRegis->username,$modelRegis->email, 'ยืนยันการเปิดใช้งานบัญชีผู้ใช้',$message);
                        $this->redirect(array('index'));
                        
                    }
                }
                
		// display the login form
		$this->render('f_login',array(
                    'model'=>$model,
                    'modelRegis'=>$modelRegis
                    ));
	}
        public function actionHash(){
           
            $password='a';
            echo md5($password);
            
        }

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
                unset( Yii::app()->session['id']);
                unset( Yii::app()->session['username']);
		Yii::app()->user->logout();
		//$this->redirect(Yii::app()->homeUrl);
                $this->redirect(array('site/login'));
	}
        
        public function actionProducts(){
            $this->render("products");
        }
        public function actionCart(){
            $this->render("Cart");
        }
        public function actionCheckOut(){
            $this->render("checkout");
        }

        public function actionProduct_detail(){
            $this->render("product_detail");
        }
        public function actionTest($id=NULL){
            $mk=new Apartment();
            
            //$model=  Apartment::model()->findByPk($id);
            $attributes=array();
            $attributes["user_id"]=43;
            //$mk=  Apartment::model()->find
            //echo $att["user_id"];
            $this->render("test",array(
                'model'=>$mk
            ));
        }

        public function actionAccount(){
            $user_id=yii::app()->session["id"];   
            $attributes=array();
            $attributes["owner_id"]=$user_id;
            $modelApmt=  Apartment::model()->findByAttributes($attributes);
           // save()
            if(!empty($_POST)){    
                  
                $apartment_id=$_POST['Apartment']['id'];              
            
                if(!empty($apartment_id)){
                    $modelApmt=  Apartment::model()->findByPk($apartment_id);
                }
                
                $modelApmt->_attributes=$_POST['Apartment'];
               // $modelApmt->owner_id=$user_id;              
  
                if($modelApmt->save()){                   
                    $this->redirect(array('index'));
                }
            }
            $this->render("account",array(
                'model'=>$modelApmt
            ));
        }
}