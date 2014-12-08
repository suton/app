<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BnavbarController
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
Yii::app()->theme = 'metro';
class BnavbarController extends Controller{
    
    public function filters()
    {
            return array(
                'rights'
//                    'accessControl', // perform access control for CRUD operations
//                    'postOnly + delete', // we only allow deletion via POST request
            );
    }
        
    public function accessRules()
    {
            return array(
//                    array('allow',  // allow all users to perform 'index' and 'view' actions
//                            'actions'=>array('profile','view'),
//                            'users'=>array('*'),
//                    ),
//                    array('allow', // allow authenticated user to perform 'create' and 'update' actions
//                            'actions'=>array('create','update'),
//                            'users'=>array('@'),
//                    ),
//                    array('allow', // allow admin user to perform 'admin' and 'delete' actions
//                            'actions'=>array('admin','delete'),
//                            'users'=>array('admin'),
//                    ),
//                    array('deny',  // deny all users
//                            'users'=>array('*'),
//                    ),
            );
    }
    
    public function actionTest(){
        $modelUser= Profile::model()->findByPk($_SESSION['id']);
        $this->render('test',array('model'=>$modelUser));
    }
    
//    public function actionChangePassword(){
//        $model=  Usertable::model()->findByPk($_SESSION['id']);
//        if(!empty($_POST)){
//            $oldpass=  md5($_POST['oldPass']);
//            if($model->password==$oldpass){
//                //echo "$oldpass true";
//                if($_POST['newPass']==$_POST['confirmPass']&&!NULL){
//                    $model->password=  md5($_POST['newPass']);
//                    if($model->save()){
//                        $this->redirect(array('adminsite/index'));
//                    }
//                }
//            }
//        }
//        $this->render('changepassword',array('model'=>$model));
//    }
    public function actionBasic(){
         
        $modelUser= Profile::model()->findByPk($_SESSION['id']);
        $modelPass = new ChangePasswordForm;
        
        if(!empty($_POST['Profile'])){  
            //Gerneral
            $modelUser->attributes=$_POST['Profile'];
            $modelUser->userinfo->attributes=$_POST['UserInfo'];
            $modelUser->birthdate=  date('Y-m-d',strtotime($_POST['Profile']['birthdate']));
             
            // save()
            if($modelUser->validate()&&$modelUser->save()&&$modelUser->userinfo->save()){ 
                $this->redirect(array('Bnavbar/settings'));
            }else{
                $this->render('settings',array(
                    'modelUser'=>$modelUser,
                    'modelPass'=>$modelPass
                ));
            }
                
        }
        
        
        
    }
    
    public function actionSettings(){
        
        $modelUser= Profile::model()->findByPk($_SESSION['id']);
        $modelPass = new ChangePasswordForm;
        
        
//        if(!empty($_POST['Profile'])){  
//            //Gerneral
//            $modelUser->attributes=$_POST['Profile'];
//            $modelUser->userinfo->attributes=$_POST['UserInfo'];
//            $modelUser->birthdate=  date('Y-m-d',strtotime($_POST['Profile']['birthdate']));
//             
//            // save()
//            if($modelUser->validate()&&$modelUser->save()&&$modelUser->userinfo->save()){ 
//                //$this->redirect(array('settings'));
//            }
//        }
//        
//        //change password form model
//        if(isset($_POST['ChangePasswordForm']))
//        {
//            $modelPass->attributes=$_POST['ChangePasswordForm'];
//
//            // Validar input del usuario y cambiar contraseña.
//            if($modelPass->validate() && $modelPass->changePassword())
//            {
//             Yii::app()->user->setFlash('success', 'เปลี่ยนรหัสผ่าสำเร็จ');
//             //$this->redirect( $this->action->id );
//                //echo 'ChangePassword';
//            }else{
//                //echo 'NOT ChangePassword';
//            }
//        }
//        
//        
//        if(!empty($_POST['oldPass'])||!empty($_POST['newPass'])||!empty($_POST['confirmPass'])){
//            $modelPass=  Usertable::model()->findByPk($_SESSION['id']);
//            //change pass
//            $oldpass=  md5($_POST['oldPass']);
//            if($modelPass->password==$oldpass){
//                if($_POST['newPass']==$_POST['confirmPass']){
//                    $modelPass->password=  md5($_POST['newPass']);
//                    if($modelPass->save()){
//                        Yii::app()->user->setFlash('success', 'เปลี่ยนรหัสผ่าสำเร็จ');
//                        //$this->redirect(array('settings'));
//                    }
//                }
//            }else {
//                Yii::app()->user->setFlash('error', 'รหัสผ่านเดิมไม่ถูกต้อง');
//            }
//        }

        $this->render('settings',array(
            'modelUser'=>$modelUser,
            'modelPass'=>$modelPass
        ));
    }
    
    public function actionChangePass(){
        
        $modelUser= Profile::model()->findByPk($_SESSION['id']);
        $modelPass = new ChangePasswordForm;
        //echo $modelPass->currentPassword.'xxxxxxxxxxxxxxx';
        
         //change password form model
        if(!empty($_POST['ChangePasswordForm']))
        {
            $modelPass->attributes=$_POST['ChangePasswordForm'];
            //echo $_POST['oldPass'].'dddddddddddeeeeeeeeeeeee';
            // Validar input del usuario y cambiar contraseña.
            if($modelPass->validate() && $modelPass->changePassword())
            {
             Yii::app()->user->setFlash('success', 'เปลี่ยนรหัสผ่าสำเร็จ');
                $this->redirect(array('bnavbar/settings'));
                //echo 'ChangePassword';
            }else{
                //echo 'NOT ChangePassword';
                //$this->redirect(array('settings'));
                
                 $this->render('settings',array(
                    'modelUser'=>$modelUser,
                    'modelPass'=>$modelPass
                 ));
            }
        }
    }
    
    public function actionProfile(){
        $modelUser= Profile::model()->findByPk($_SESSION['id']);
        $this->render('profile',array('modelUser'=>$modelUser));
    }
    public function actionProfile1(){
        $this->render('profile_1');
    }

    public function actionLogOut(){
        $this->render('logout');
    }
    
    public function actionTab(){
        $this->render('tab');
    }
}

?>
