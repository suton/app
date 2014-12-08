<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SidebarController
 *
 * @author SHI
 */ 
Yii::app()->theme = 'backend';
class SidebarController extends Controller{
    public function filters()
    {
        return array(
            'rights',
            'postOnly + delete',
            array('ext.bootstrap.filters.BootstrapFilter - delete')
        );
    }    
    public function loadModelUser($id){
        
            $model= Usertable::model()->findByPk($id);
            if($model===null)
                    throw new CHttpException(404,'The requested page does not exist.');
            return $model;
    }
    public function actionUpdate2($id){
        if(!empty($_POST['Usertable'])){
            $model=  $this->loadModelUser($_GET['id']);
            $model->attributes=$_POST['Usertable'];
            if($model->validate()&&$model->save()){
                $this->redirect (array('//Sidebar/roomlist'));
            }  else {
                $this->redirect (array('//Sidebar/roomlist'));
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
    
    public function actionTest(){
        
        $building=new Building;
        $this->render('test',array('model'=>$building));
        
    }
    
    public function actionAdmin(){
            $model=new Building('search');
            if(isset($_GET['Building']))
                    $model->attributes=$_GET['Building'];
            $this->render('admin',array(
                    'model'=>$model,
            ));
    }
        
    public function actionRoomList(){
        
        $building=new Building('search');
        
        //tab roomType
        $roomtype=new RoomTypeFeeGroup();
        
        if(isset($_GET['Building'])){
            $building->attributes=$_GET['Building'];
            if($building->save()){
                $this->redirect(array('/sidebar/roomlist'));
            }
        }
        $this->render('room_list',array(
            'model'=>$building,
            'roomtype'=>$roomtype,
        ));
        
        
        
    }
    public function actionConfigCorporation(){
        
        $model=  Corporation::model()->findByAttributes(array('owner_id'=>  Yii::app()->session['id']));
        if(!empty($_POST)){
            $model->_attributes=$_POST['Corporation'];
            if($model->save()){                   
                $this->redirect(array('AdminSite/index'));
            }
        }
        $this->render("corporation",array(
            'model'=>$model
        ));
        
    }

    public function actionUpdateAmphur(){
        
        $amphur=  Amphur::model()->findAll('PROVINCE_ID=:PROVINCE_ID',array(':PROVINCE_ID'=>(int)$_POST['Corporation']['province_id']));
        $return= CHtml::listData($amphur,'AMPHUR_ID','AMPHUR_NAME');
        echo CHtml::tag('option',array('value'=>''),'-กรุณาเลือกอำเภอ-',TRUE);
        foreach ($return as $amphureid=>$amphurname){
            echo CHtml::tag('option',array('value'=>$amphureid),CHtml::encode($amphurname),TRUE);
        }
        
    }
    
    public function actionUpdateAmphur2(){
        
        $amphur=  Amphur::model()->findAll('PROVINCE_ID=:PROVINCE_ID',array(':PROVINCE_ID'=>(int)$_POST['Building']['province_id']));
        $return= CHtml::listData($amphur,'AMPHUR_ID','AMPHUR_NAME');
        echo CHtml::tag('option',array('value'=>''),'-กรุณาเลือกอำเภอ-',TRUE);
        foreach ($return as $amphureid=>$amphurname){
            echo CHtml::tag('option',array('value'=>$amphureid),CHtml::encode($amphurname),TRUE);
        }
        
    }
}

?>
