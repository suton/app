<?php

/**
 * Description of ajaxController
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
?>
<?php
Yii::app()->theme = 'metro';
class AjaxController extends Controller{
    public function actionGetDistrict(){
        $district=  District::model()->findAll('province_id=:province_id',array(':province_id'=>(int)$_POST['Userbio']['province_id']));
        $data=  CHtml::listData($district,'DISTRICT_ID','DISTRICT_NAME');
        foreach ($data as $key=>$value){
            echo CHtml::tag('option',array('value'=>$key),  CHtml::encode($value),TRUE);
        }
    }
    
    public function actionUpdateDistrict() {
        $district=  Districts::model()->findAll('AMPHUR_ID=:AMPHUR_ID AND PROVINCE_ID=:PROVINCE_ID',
                array(
                    ':AMPHUR_ID'=>(int)$_POST['Building']['amphur_id'],
                    ':PROVINCE_ID'=>(int)$_POST['Building']['province_id']
                ));
        $data=  CHtml::listData($district, 'DISTRICT_ID', 'DISTRICT_NAME');
        echo CHtml::tag('option',array('value'=>''),'--กรุณาเลือกตำบล--',TRUE);
        foreach ($data as $key => $value) {
            echo CHtml::tag('option',array('value'=>$key),  CHtml::encode($value),TRUE);
        }
    }
    
    public function actionUpdateAmphur() {
        $amphur= Amphur::model()->findAll('PROVINCE_ID=:PROVINCE_ID',array(':PROVINCE_ID'=>$_POST['PROVINCE_ID']));
        $data=  CHtml::listData($amphur, 'AMPHUR_ID', 'AMPHUR_NAME');
        echo CHtml::tag('option',array('value'=>''),'--กรุณาเลือกอำเภอ--',TRUE);
        foreach ($data as $key => $value) {
            echo CHtml::tag('option',array('value'=>$key),  CHtml::encode($value),TRUE);
        }
    }
    
    public function actionRating(){
        if(isset($_POST['rating'])){
            
            $ratingVal= $_POST['rating'];
            $buildingID= $_POST['building_id'];
            
            $rating=  new Rating();
            $rating->building_id=$buildingID;
            $rating->rating=$ratingVal;
            
            if(isset(Yii::app()->request->cookies['vote'.$rating->building_id])&&Yii::app()->request->cookies['vote'.$rating->building_id]){
                echo 'คุณสามารถโหวตได้วันละครั้ง';
            }  else {
                if($rating->save()){
                    $cookie=new CHttpCookie('vote'.$rating->building_id,TRUE);
                    $cookie->expire=  time()+60*60*24;
                    Yii::app()->request->cookies['vote'.$rating->building_id]=$cookie;
                         
                    echo 'ขอบคุณทีโหวดให้ '.$ratingVal.' คะแนน';
                }
            }
            
        }
    }
}
?>