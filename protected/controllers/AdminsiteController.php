<?php
@session_start();
@ob_start();
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminController
 *
 * @author SHI
 */
Yii::app()->theme = 'backend';
class AdminSiteController extends Controller{
    public function filters()
    {
        return array(
            'rights',
            'postOnly + delete',
            array('ext.bootstrap.filters.BootstrapFilter - delete')
        );
    }
    public function actionIndex(){

        $this->render("index");
    }
    public function actionP(){
//        echo yii::app()->theme->baseUrl.'/images/Profile/';
//        echo "<br>";
//        echo Yii::app()->theme->getBasePath().'/images/Profile/';
//        echo "<br>";
//        echo realpath( Yii::app( )->getBasePath( )."/../uploads" );
//        echo "<br>";
//        echo realpath( Yii::app( )->getBasePath( ));
        
        /*
         if(file_exists(yii::app()->theme->basePath.'/images/Profile/8.jpg')){
             echo "have file";
         }  else {
          echo "no";
         }
         * 
         */
        
        $this->render("p");
    }
    public function actionChangePassword(){
        $model=  Usertable::model()->findByPk($_SESSION['id']);
        if(!empty($_POST)){
            $oldpass=  md5($_POST['oldPass']);
            if($model->password==$oldpass){
                //echo "$oldpass true";
                if($_POST['newPass']==$_POST['confirmPass']&&!NULL){
                    $model->password=  md5($_POST['newPass']);
                    if($model->save()){
                        $this->redirect(array('adminsite/index'));
                    }
                }
            }
        }
        $this->render('changepassword',array('model'=>$model));
    }

    public function actionDashboard(){
        $this->render("Dashboard");
    }
    public function actionProfile(){
            
            $modelUser= Profile::model()->findByPk($_SESSION['id']);
         
            if(!empty($_POST)){    
                
                $modelUser->fname=$_POST['Profile']['fname'];
                $modelUser->lname=$_POST['Profile']['lname'];
                $modelUser->email=$_POST['Profile']['email'];
                $modelUser->sex=$_POST['Profile']['sex'];
                $checkHaveFile=CUploadedFile::getInstance($modelUser, 'img');
                 
                 if(!empty($checkHaveFile)){//echo 'have file';
                     $f= EUploadedImage::getInstance($modelUser,'img');
                     $f->maxWidth=80;
                     $f->maxHeight=80;
                     $modelUser->img=$_SESSION['id'].'.'.$f->getExtensionName();
                     $f->saveAs(Yii::app()->theme->basePath.'/images/Profile/'.$_SESSION['id'].'.'.$f->getExtensionName());
                 }else {
                     //echo 'no file'    ;
                 }
                // save()
                if($modelUser->validate()&&$modelUser->save()){ 
                     $this->redirect(array('index'));
                }
            }
            $this->render("profile",array(
                'model'=>$modelUser
            ));
    }
    public function actionLogout()
    {
            unset( Yii::app()->session['id']);
            unset( Yii::app()->session['username']);
            Yii::app()->user->logout();
            Yii::app()->user->clearStates();
            //$this->redirect(Yii::app()->homeUrl);
            $this->redirect(array("site/index"));
    }
}

?>
