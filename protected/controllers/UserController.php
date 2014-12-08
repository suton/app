<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserController
 *
 * @author SHI
 */
class UserController extends Controller{
    //put your code here
    public function actionUpdateAmphur(){
        $amphure=  Amphur::model()->findAll('PROVINCE_ID=:id',array(':id'=>(int)$_POST['Apartment']['province_id']));
        $return=  CHtml::listData($amphure, 'AMPHURE_ID', 'AMPHURE_NAME');
        foreach ($return as $amphure_id=>$amphure_name){
            echo CHtml::tag('option',array('value'=>$amphure_id),  CHtml::encode($amphure_name),TRUE);
        }
    }

    public function actionUpdateCities()
    {
            //Cities
            $data = City::model()->findAll('idProvince=:idProvince', array(':idProvince'=>(int) $_POST['idProvince']));
            $data = CHtml::listData($data,'idCity','name');
            $dropDownCities = "<option value=''>Select City</option>"; 
            foreach($data as $value=>$name)
                $dropDownCities .= CHtml::tag('option', array('value'=>$value),CHtml::encode($name),true);
 
            //District
            $dropDownDistricts = "<option value='null'>Select District</option>";
 
            // return data (JSON formatted)
            echo CJSON::encode(array(
              'dropDownCities'=>$dropDownCities,
              'dropDownDistricts'=>$dropDownDistricts
            ));
    }
 
    public function actionUpdateDistricts()
    {
            $data = District::model()->findAll('idCity=:idCity', array(':idCity'=>(int) $_POST['idCity']));
            $data = CHtml::listData($data,'idDistrict','name');
            echo "<option value=''>Select District</option>";
            foreach($data as $value=>$name)
                echo CHtml::tag('option', array('value'=>$value),CHtml::encode($name),true);
    }
}

?>
