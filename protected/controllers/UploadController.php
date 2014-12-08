<?php
@session_start();
@ob_start();
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UploadController
 *
 * @author SHI
 */
class UploadController extends CController{
    public function actions()
    {
        return array(
            'upload'=>array(
                'class'=>'xupload.actions.XUploadAction',
                'path' =>Yii::app() -> getBasePath() . "/../uploads",
                'publicPath' => Yii::app() -> getBaseUrl() . "/uploads",
                'subfolderVar' => 'parent_id',
            ),
        );
    }
     public function actionP() {
     //echo Yii::app()->basePath;
         echo Yii::app()->basePath.'/../';
         
     }
    public function actionIndex() {
            // befor upload should be authen to make directory
            Yii::import("xupload.models.XUploadForm");
            $model = new XUploadForm;
            $this -> render('index', array(
                        'model' => $model, 
                ));
    }
    public function actionA() {
        // befor upload should be authen to make directory
        Yii::import("xupload.models.XUploadForm");
        $model = new XUploadForm;
        $this -> render('index', array(
                    'model' => $model, 
            ));
    }
    public function actionU(){
        Yii::import("xupload.models.XUploadForm");
            $model = new Image;
            $this -> render('index', array(
                        'model' => $model, 
                ));
    }
    public function actionResize(){
            $modelProfile=  Profile::model()->findByPk('67');
            
//            if($modelProfile->validate()){
//                echo "have file";
//                $f= EUploadedImage::getInstance($modelProfile,'img');
//            }  else {
//                echo "no file";
//            }
            if($_POST){
                $modelProfile->_attributes=$_POST['Profile'];
                
//                $modelProfile->img= EUploadedImage::getInstance($modelProfile,'img');
//                $modelProfile->img->maxWidth=100;
//                $modelProfile->img->maxHeight=100;
//                if($modelProfile->img!=0){
//                $modelProfile->img->saveAs(Yii::app()->basePath.'/../images/Profile/'.$modelProfile->img);
//                }
                $fimg=  EUploadedImage::getInstance($modelProfile,'img');
                echo $fimg.'xxxxxx';
                if($fimg!=0){
                    
                    $fimg->maxWidth=100;
                    $fimg->maxHeight=100;
                    $fimg->saveAs(Yii::app()->basePath.'/../images/profile/'.$fimg);
                }
//                if($modelProfile->save()){
//                    $this->redirect(array("site/index"));
//                }
            }
            $this->render("resize",array(
                'model'=>$modelProfile
            ));
    }
    

    public function actionJ2(){
        $this->render("j2");
    }
    public function actionJ3(){
        $this->render("j3");
    }
    public function actionJ4(){
        $this->render("uploadphp");
    }
    public function actionJ5(){
        // befor upload should be authen to make directory
        Yii::import("xupload.models.XUploadForm");
        $model=new XUploadForm;
        $this->render("j5",array(
            "model"=>$model
        ));
    }
    public function actionG6(){
        $gallery = Gallery::model()->findByPk(1);
        echo $gallery->description."xxx";
//        if (empty($gallery)) {
//            $gallery = new Gallery();
//            $gallery->name = true;
//            $gallery->description = true;
//            $gallery->versions = array(
//                'small' => array(
//                    'resize' => array(200, null),
//                ),
//                'medium' => array(
//                    'resize' => array(800, null),
//                )
//            );
//            $gallery->save();
//        }
//        $this->render('g6', array('gallery' => $gallery));
    }
    public function actionG1(){
//        $image = Yii::app()->image->load('images/project_img3.jpg');
//        $image->resize(400, 100)->rotate(-45)->quality(75)->sharpen(20);
//        // $image->save(); 
//        // or 
//        $image->save('images/small.jpg');
        
//        Yii::import('application.extensions.image.Image');
//        $image = new Image('images/project_img3.jpg');
//        $image->resize(400, 100)->rotate(-45)->quality(75)->sharpen(20);
//        $image->render();
    }
}
?>
