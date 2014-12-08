<?php

/**
 * Description of _addRoom
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
?>
<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
    'id'=>'addRoomDlg'.  rand(1, 100),
    'options'=>array(
        'title'=>'สร้างห้องพัก',
        'autoOpen'=>true,
        'modal'=>true,
        'width'=>400,
        'height'=>300
    )
));
//echo $building_id.'dddd'.$floor_id;
    $form=$this->beginWidget('CActiveForm',array(
        'id'=>'addRoom-form'.  rand(1, 100),
        'enableClientValidation' => true,
        'clientOptions' => array(
                'validateOnSubmit' => true,
        ),
        'action'=>array('building/addroom','building_id'=>$building_id,'floor_id'=>$floor_id)
        //'action'=>array('building/addroom')
    ));
    
    echo $form->labelEx($room,'room_code');
    echo $form->textField($room,'room_code');
    echo $form->error($room,'room_code',array('style'=>'color:red'));
    
    echo $form->labelEx($room,'fee_group_id');
    $feeGroup= CHtml::listData(RoomTypeFeeGroup::model()->findAllByAttributes(array('building_id'=>$building_id)),
            'fee_group_id','room_type_name');
    echo $form->dropDownList($room,'fee_group_id',$feeGroup,array(
        'prompt'=>'--เลือกประเภทห้องพัก--'
    ));
    echo $form->error($room,'fee_group_id',array('style'=>'color:red'));
    echo '<br>';
    
    echo CHtml::hiddenField('floor_id',$floor_id);
    echo CHtml::hiddenField('building_id',$building_id);
    echo CHtml::submitButton('บันทึก',array('class'=>'btn btn-mini'));
    $this->endWidget();
$this->endWidget();
?>