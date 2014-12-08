<?php

/**
 * Description of B_ReportController
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
Yii::app()->theme='metro';
class BreportController extends Controller{
    
    public function filters() {
        return array(
            'rights'
        );
    }

    public function actionCorUser(){
        $this->render("cor_user");
    }
    public function actionGenReport(){
       $this->redirect(Yii::app()->baseUrl.'/report/genreport.php?rname='.$_GET['rname']);
        //echo Yii::app()->baseUrl;
    }
}
?>
