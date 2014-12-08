<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MetroController
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
Yii::app()->theme = 'metro';
class DashboardController extends Controller{
 
    /**
    * @return array action filters
    */
    public function filters()
    {
            return array(
                    'rights',
            );
    }
        
    public function actionIndex(){
        $this->render("index");
    }
    
    public function actionX(){
        echo "xxxx";
    }
}

?>
