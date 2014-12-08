<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TraderController
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
Yii::app()->theme = 'metro';
class BtraderController extends Controller{
    
    public function filters() {
        return array(
            'rights'
        );
    }

    public function actionA(){
        $this->render('a');
    }

    public function actionCorporate(){
        
        $model=  Corporation::model()->findByAttributes(array('owner_id'=>  Yii::app()->session['id']));
        
        if(!empty($_POST)){
            $model->_attributes=$_POST['Corporation'];
            if($model->validate()&&$model->save()){                   
                $this->redirect(array('Btrader/Corporate'));
            }
        }
        $this->render("corporation",array(
            'model'=>$model
        ));
    }

    public function actionRoomType(){
        
        $building=new Building('search');
        
        //tab roomType
        $roomtype=new RoomTypeFeeGroup();
        
        if(isset($_GET['Building'])){
            $building->attributes=$_GET['Building'];
            if($building->save()){
                $this->redirect(array('/sidebar/roomlist'));
            }
        }
        $this->render('roomtype',array(
            'model'=>$building,
            'roomtype'=>$roomtype,
        ));
    }
    
    public function actionUpdateAmphur(){
        
        $amphur=  Amphur::model()->findAll('PROVINCE_ID=:PROVINCE_ID',array(':PROVINCE_ID'=>(int)$_POST['Corporation']['province_id']));
        $return= CHtml::listData($amphur,'AMPHUR_ID','AMPHUR_NAME');
        echo CHtml::tag('option',array('value'=>''),'--กรุณาเลือกอำเภอ--',TRUE);
        foreach ($return as $amphureid=>$amphurname){
            echo CHtml::tag('option',array('value'=>$amphureid),CHtml::encode($amphurname),TRUE);
        }
        
    }
    
}

?>
