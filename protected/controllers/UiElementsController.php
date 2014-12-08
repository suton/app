<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UiElementsController
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
Yii::app()->theme="metro";
class UiElementsController extends Controller{
    public function actionElements(){
        $this->render("elements");
    }
    
    public function actionIndex(){
        $this->render('index');
    }
}

?>
