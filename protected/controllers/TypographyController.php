<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TypographyController
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
Yii::app()->theme = 'metro';
class TypographyController extends Controller{
    public function actionIndex(){
        $this->render('index');
    }
}

?>
