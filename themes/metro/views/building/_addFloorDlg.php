<?php

/**
 * Description of _addFloorDlg
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
?>
<?php
$building=  Building::model()->findByPk($building_id);
$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
    'id'=>'addFloor',
    'options'=>array(
        'title'=>'เพิ่มชั้นบนอาคาร['.$building->name.']',
        'modal'=>TRUE,
        'autoOpen'=>TRUE,
        'width'=>300,
        'height'=>200,
        'show'=>array(
            'effect'=>'blind',
            'duration'=>1000,
        ),
        'hide'=>array(
            'effect'=>'explode',
            'duration'=>1000,
        ),   
    )
));
    $form=$this->beginWidget('CActiveForm',array(
        'id'=>'addFloor-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>TRUE
        ),
        'action'=>array('building/AddFloor')
    ));
    echo $form->textField($floor,'floor_name');
    echo $form->error($floor,'floor_name');
    echo "<br>";
    echo CHtml::submitButton('บันทึก',array('class'=>'btn btn-mini'));
    echo CHtml::hiddenField('building_id',$building->id);
    $this->endWidget();
$this->endWidget();
?>