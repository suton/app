<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FormsController
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
Yii::app()->theme="metro";
class FormsController extends Controller{
    
    public function filters()
    {
            return array(
                    'rights',
            );
    }
    
    public function actionForm(){
        $this->render("index");
    }
    
    public function actionWysiwyg(){
        $this->render("wysiwyg");
    }
    
    public function actionWizard(){
        $this->render("wizard");
    }
}

?>
