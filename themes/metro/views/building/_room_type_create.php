<?php
/**
 * Description of _room_type_create
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
?>
<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
    'id'=>'RoomTypeCreate',
    'options'=>array(
        'title'=>'เพิ่มประเภทห้อง',
        'autoOpen'=>true,
        'modal'=>true,
        'width'=>300,
        'height'=>200,
    )
    
));
        $form=$this->beginWidget('CActiveForm',array(
            'id'=>'feegoup',
            'enableClientValidation' => true,
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
            'action' => array('building/roomtypecreate'),
        ));

        $cor_id=  Corporation::model()->findByAttributes(array('owner_id'=>  Yii::app()->session["id"]));

        $building_id=  CHtml::listData(Building::model()->findAll('corporate_id=:corporate_id',array(':corporate_id'=>$cor_id->id)),'id', 'name');

        echo $form->dropDownList($roomtype,'building_id',$building_id,array(
                                    //'empty'=>'--กรุณาเลือกอาคาร--'
                                ));

        echo $form->error($roomtype,'room_type_name',array('style'=>'color:red'));

        echo $form->textField($roomtype,'room_type_name',array('class'=>'input-xlarge'));

        echo CHtml::submitButton("บันทึก",array('class'=>'btn btn-gebo'));

        $this->endWidget();
        
$this->endWidget();
?>