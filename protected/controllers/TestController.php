<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of test
 *
 * @author SHI
 */
//$layout='column2';
class TestController extends Controller{
    public function actionNumGallery(){
        $model=  GalleryPhoto::model()->findAllByAttributes(array('gallery_id'=>117));
        echo count($model);
    }

    public function actionRating() {
//        $r=array(6,6,6,6,1,1,2,8,7,3,4,5,8,9,10);
//        $count=  count($r);
//        $sum=  array_sum($r);
//        $avg=$sum/$count;
//        $abAvg= round($avg,0);
//        echo $sum.'/'.$count.'/'.$avg.'/'.$abAvg;
        $this->render('rating');
    }
    public function actionAjaxValidate(){
        $b=new Building();
        
        if(isset($_POST['ajax']) && $_POST['ajax']==='ajaxvalidate')
        {
                echo CActiveForm::validate($b);
                Yii::app()->end();
        }
        
        if(isset($_POST['Building'])){
            $b->attributes=$_POST['Building'];
            
            if($b->save())$this->redirect (array('site/index'));
        }
        $this->render('ajaxvalidate',array('b'=>$b));
    }

    public function actionCookie(){
//        $cookie=new CHttpCookie('vot1',TRUE);
//        $cookie->expire=  time()+60;
//       // echo time();
//        Yii::app()->request->cookies['vot1']=$cookie;
        //เช็คว่าเคยโหวตแล้วหรือยัง
        if(isset(Yii::app()->request->cookies['vot1'])){
            echo 'คุณโหวตแล้ว';
        }else{
            echo 'คุณยังไม่ได้โหวต';
        }
        //echo Yii::app()->request->cookies['mycookie'];
    }

    public function actionGo() {
        //echo Yii::app()->request->csrfToken;
        $xxx=new CDbExpression('NOW()');
        echo date('Y-m-d H:i:s');
    }
    
    // ฟังก์ชันสำหรับหา IP Address 
    function getIP(){
        // ตรวจสอบ IP กรณีการใช้งาน share internet
        if(!empty($_SERVER['HTTP_CLIENT_IP'])){
          $ip=$_SERVER['HTTP_CLIENT_IP'];
        }else{
          $ip=$_SERVER['REMOTE_ADDR'];
        }
            return $ip;
    }


    public function actionNews(){
        $this->render("news");
    }
    public function actionMap(){
        if($_POST){
            echo 'xxxxxxxxxxxx';
            echo $_POST['Map']['ce_lat'];
            echo $_POST['Map']['ce_lon'];
            echo $_POST['Map']['ne_lat'];
            echo $_POST['Map']['ne_lon'];
            echo $_POST['Map']['sw_lat'];
            echo $_POST['Map']['sw_lon'];
            echo $_POST['Map']['zoom'];
        }
        $this->render('map');
    }

    public function actionAdd(){
//        $Corporation=new Corporation();
//        $code=new KDate();
//        $Corporation->code=$code->getApartmentCode(11223);
//        $Corporation->owner_id='92';
//        if($Corporation->save()){
//            echo 'save';
//        }else{
//            echo 'no save';
//        }
//        echo $code->getApartmentCode(11223);
//        
        $c=new Corporation();
        $c->code='sl';
        if($c->save()){
            echo 'save';
        }else{
                        echo 'no save';
        }
//        $x=new Usertable();
//        $x->username='xxjsdfk';
//        $x->email='sdfkkk@df.com';
//        $x->password='a';
//        if($x->save()){
//            echo 'save';
//        }else{
//                        echo 'no save';
//        }
        
    }

    public function actionMSG() {
        Yii::app()->user->setFlash('success', 'เปลี่ยนรหัสผ่าสำเร็จ');
        $this->render('t');
    }
    public function actionHasmany(){
        $cor=  Corporation::model()->findByAttributes(array('owner_id'=>46));
        $modelBuilding=  Building::model()->findAllByAttributes(array('corporate_id'=> $cor->id));
        foreach ($modelBuilding as $row){
            echo $row->name;
            echo "</br>";
            foreach ($row->floor as $r) {
                echo $r->floor_name;
                echo "</br>";
            }
            echo "-------------------------------</br>";

            foreach ($row->floor as $key => $value) {
                echo 'key['.$key.']'.$value->floor_name;
                echo "</br>";
            }
            echo "-------------------------------key</br>";
        }
        
//        $model=  Building::model()->findByPk(41);
//        $this->render("hasmany",array(
//            'model'=>$model
//        ));
    }

    public function actionNum(){
        $model= Building::model()->findAllByAttributes(array('corporate_id'=>'2'));
        echo count($model);
    }

    public function filters()
     {
//        return array(
//            'accessControl',
//            'postOnly + delete',
//            array('ext.bootstrap.filters.BootstrapFilter')
//        );
     }
     
     public function actionE(){
         $td=new KDate();
         echo $td->getThaiDate('1989-10-28');
     }

     public function actionChangePassword()
     {
      $model = new ChangePasswordForm;
      if(isset($_POST['ajax']) && $_POST['ajax']==='changePassword-form')
      {
        echo CActiveForm::validate($model);
        Yii::app()->end();
      }

      // collect user input data
      if(isset($_POST['ChangePasswordForm']))
      {
        $model->attributes=$_POST['ChangePasswordForm'];
        
//        echo $_POST['ChangePasswordForm']['currentPassword'].'<br>';
//        echo $_POST['ChangePasswordForm']['newPassword'].'<br>';
//        echo $_POST['ChangePasswordForm']['newPassword_repeat'].'<br>';
  
        // Validar input del usuario y cambiar contraseña.
        if($model->validate() && $model->changePassword())
        {
         Yii::app()->user->setFlash('success', '<strong>Éxito!</strong> Su contraseña fue cambiada.');
         //$this->redirect( $this->action->id );
         echo 'ChangePassword';
        }else{
            echo 'NOT ChangePassword';
        }
      }
      // Mostrar formulario de cambio de contraseña.
      $this->render('changePassword',array('model'=>$model));
    }
    public function actionUser(){
        echo 'xxxxxxxxxx';
        echo Yii::app()->user->id;
    }

    public function actionEqdlg(){
        $this->render('EQuickDlgs');
    }
    
    public function actionEqdlgView($id)
    {
        EQuickDlgs::render('Eqdlgview');
        //$this->render('view',array('model'=>$this->loadModel($id)));
    }
            
    public function actionGridview(){
        $model=new Usertable();
        $this->render('gridview',array(
            'model'=>$model
        ));
    }
    public function actionUpdate2($id){
        if(!empty($_POST['Usertable'])){
            $model=  $this->loadModelUser($_GET['id']);
            $model->attributes=$_POST['Usertable'];
            if($model->validate()&&$model->save()){
                $this->redirect (array('//Test/gridview'));
            }  else {
                $this->redirect (array('//Test/gridview'));
            }
        }
        
        if (Yii::app()->request->isAjaxRequest) 
        {//echo "xxxxx";
           $this->renderPartial('update2', array(
                                          'model'=>$this->loadModelUser($id),
                                          'asDialog'=>!empty($_GET['asDialog']),
                                        ),
                                 false,true);
            Yii::app()->end();
        }
        else{//echo "yyyyyy";
           $this->render('update2', array(
              'model'=>$this->loadModelUser($id),
            ));
        }

    }
    
    public function actionIModal($id){

        if(!empty($_POST['Usertable'])){
            $model=  $this->loadModelUser($_GET['id']);
            $model->attributes=$_POST['Usertable'];
            if($model->validate()&&$model->save()){
                $this->redirect (array('//Test/gridview'));
            }  else {
                $this->redirect (array('//Test/gridview'));
            }
        }
        
        if (Yii::app()->request->isAjaxRequest) 
        {
            Yii::app()->clientScript->scriptMap['jquery.js'] = false;
            Yii::app()->clientScript->scriptMap['jquery.min.js'] = false;
           $this->renderPartial('modal_dialog', array(
                                          'model'=>$this->loadModelUser($id),
                                          'asDialog'=>!empty($_GET['asDialog']),
                                        ),
                                 false,true);
            Yii::app()->end();
        }
        else{
           $this->render('modal_dialog', array(
              'model'=>$this->loadModelUser($id),
            ));
        }

    }

    public function actionView($id)
    {
                //$this->render("1");
     if (Yii::app()->request->isAjaxRequest) 
      {//echo "xxxxx";
        $this->renderPartial('view', array(
                                       'model'=>$this->loadModelUser($id),
                                       'asDialog'=>!empty($_GET['asDialog']),
                                     ),
                              false,true);
         Yii::app()->end();
       }
     else{//echo "yyyyyy";
        $this->render('view', array(
           'model'=>$this->loadModelUser($id),
         ));
     }

    }
    
    public function loadModelUser($id){
        
            $model= Usertable::model()->findByPk($id);
            if($model===null)
                    throw new CHttpException(404,'The requested page does not exist.');
            return $model;
    }

    public function actionTabDialog(){
        $model=  RoomTypeFeeGroup::model()->findByPk(73);
        $this->render('tabDialog',array('model'=>$model));
    }
    public function actionDialog(){
        $model=new RoomTypeFeeGroup();
        $this->render("dialog",array('model'=>$model));
    }
    
    public function actionD_View($id)
    {
        $this->layout ="//layouts/iframe";
        $this->render('d_view',array('model'=>$this->loadModel($id)));
        //$this->render('view',array('model'=>$this->loadModel($id)));
    }
            
    public function actionModal(){
        $this->render('modal');
        
    }
    
    public function actionIndex(){
        $this->render("index");
       
    }
    public function actionMicrotime(){
        echo microtime();
    }
    public function actionEcho(){
        //print_r('xxxxvvv');
        $role = Rights::getAssignedRoles(Yii::app() -> user -> Id);
            foreach ($role as $role)
                echo $role -> name."<br/>";
            
            
//            $role = Rights::getAssignedRoles(Yii::app() -> user -> Id);
//            foreach ($role as $role)
//                $role->name;
//            if ($role->name == 'Manager' or Yii::app()->user->isSuperuser) {
//                $this->widget('ext.cssmenu.CssMenu', array('items' => array(array('url' => array('/user/general/index'), 'label' => "General", 'visible' => Yii::app()->user->checkAccess('general')), array('url' => array('/data'), 'label' => "Data", 'visible' => Yii::app()->user->checkAccess('data')), array('url' => Yii::app()->getModule('user')->clientsUrl, 'label' => "Clients", 'visible' => Yii::app()->user->checkAccess('clients')), array('url' => Yii::app()->getModule('user')->providersUrl, 'label' => "Data Providers", 'visible' => Yii::app()->user->checkAccess('providers')), array('url' => Yii::app()->getModule('user')->ordersUrl, 'label' => "Orders", 'visible' => Yii::app()->user->checkAccess('orders')), array('url' => Yii::app()->getModule('user')->profileUrl, 'label' => "Tools", 'visible' => Yii::app()->user->checkAccess('tools')), array('url' => Yii::app()->getModule('user')->logoutUrl, 'label' => Yii::app()->getModule('user')->t("Logout"), 'visible' => !Yii::app()->user->isGuest)),));
//            } elseif ($role->name == 'Client') {
//                $this->widget('ext.cssmenu.CssMenu', array('items' => array(array('url' => array('/user/general/index'), 'label' => "General", 'visible' => Yii::app()->user->checkAccess('general')), array('url' => array('/user/data'), 'label' => "Data", 'visible' => Yii::app()->user->checkAccess('data')), array('url' => array('/user/client/lists'), 'label' => 'Lists', 'visible' => Yii::app()->user->checkAccess('User.Client.Lists')), array('url' => array('/user/orders/index', "id" => Yii::app()->user->Id), 'label' => 'Orders', 'visible' => Yii::app()->user->checkaccess('User.Orders.Index')), array('url' => Yii::app()->getModule('user')->profileUrl, 'label' => "Profile", 'visible' => Yii::app()->user->checkAccess('tools')), array('url' => Yii::app()->getModule('user')->logoutUrl, 'label' => Yii::app()->getModule('user')->t("Logout"), 'visible' => !Yii::app()->user->isGuest))));
//            }
//            ;
//            if ($role->name == 'Provider') {
//                $this->widget('ext.cssmenu.CssMenu', array('items' => array(array('url' => array('/user/general/index'), 'label' => "General", 'visible' => Yii::app()->user->checkAccess('general')), array('url' => array('/user/data'), 'label' => "Data", 'visible' => Yii::app()->user->checkAccess('data')), array('url' => array('/user/provider/data', "id" => Yii::app()->user->Id), 'label' => 'Data', 'visible' => Yii::app()->user->checkAccess('User.Feeds.Feeds')), array('url' => array('/user/feeds/feeds', "id" => Yii::app()->user->Id), 'label' => 'Feeds', 'visible' => Yii::app()->user->checkAccess('User.Feeds.Feeds')), array('url' => array('/user/payments', "id" => Yii::app()->user->Id), 'label' => 'Payments', 'visible' => Yii::app()->user->checkAccess('User.Feeds.Feeds')), array('url' => Yii::app()->getModule('user')->logoutUrl, 'label' => Yii::app()->getModule('user')->t("Logout"), 'visible' => !Yii::app()->user->isGuest))));
//            }
                
    }
    public function actionImodel(){
        $model = Usertable::model()->findByAttributes(array('email'=>'prasuton_123@hotmail.com'));
        //$model=Usertable::model()->findAll();

        echo $model->username;
        $model->user_status_id=4;
        $model->save();
        echo $model->user_status_id;
    }
    public function actionAdmin(){
        $model=new RoomTypeFeeGroup("search");
        $model->unsetAttributes();
        if(isset($_GET["RoomTypeFeeGroup"])){
            $model->attributes=$_GET["RoomTypeFeeGroup"];
        }
        $this->render("admin",array(
            'model'=>$model
        ));
    }
    
    public function loadModel($id)
    {
            $model= RoomTypeFeeGroup::model()->findByPk($id);
            if($model===null)
                    throw new CHttpException(404,'The requested page does not exist.');
            return $model;
    }
    
    public function actionUpdate($id)
    {
        $model=$this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        //$this->performAjaxValidation($model);

        if(isset($_POST['RoomTypeFeeGroup']))
        {
            $model->attributes=$_POST['RoomTypeFeeGroup'];
            if($model->save())
                //----- begin new code --------------------
                if (!empty($_GET['asDialog']))
                {
                    //Close the dialog, reset the iframe and update the grid
                    echo CHtml::script("window.parent.$('#cru-dialog').dialog('close');window.parent.$('#cru-frame').attr('src','');window.parent.$.fn.yiiGridView.update('{$_GET['gridId']}');");
                    Yii::app()->end();
                }
                else
                //----- end new code --------------------

                $this->redirect(array('view','id'=>$model->ADDRESS));
        }

        //----- begin new code --------------------
        if (!empty($_GET['asDialog']))
            $this->layout = '//layouts/iframe';
        //----- end new code --------------------

        $this->render('update',array(
            'model'=>$model,
        ));
    }
    public function actionGetcode(){
       
        $model=  Apartment::model()->findByAttributes(array('owner_id'=>'46'));
        echo $model->code;
        //echo "xxx";
    }
    public function actionG(){
          $gallery = Gallery::model()->findByPk(1);
        if (empty($gallery)) {
            $gallery = new Gallery();
            $gallery->name = true;
            $gallery->description = true;
            $gallery->versions = array(
                'small' => array(
                    'resize' => array(200, null),
                ),
                'medium' => array(
                    'resize' => array(800, null),
                )
            );
            $gallery->save();
        }
        $gallery->name = true;
        $gallery->description = true;
        $gallery->versions = array(
            'small' => array(
                'resize' => array(200, null),
            ),
            'medium' => array(
                'resize' => array(800, null),
            )
        );
        $gallery->save();
        $this->render('g', array('gallery' => $gallery));
    }
    public function actionA(){
//        $id=56;
//        $modelApmt=new Apartment();
//        $code= new KDate();
//        //generate Apartment Code (format MKddmmyyID)
//        $modelApmt->code=$code->getApartmentCode($id);
//        $modelApmt->owner_id=$id;
//        echo $code->getApartmentCode($id);
//        echo $id;
//        if($modelApmt->save()){
//            echo "save";
//        }
        $a=new Apartment();
        $a->save();
    }
}

?>
