<?php

/**
 * Description of _editFloorDlg
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
?>
<?php
Yii::app()->clientScript->scriptMap=array(
         //scripts that you don’t need inside this view
        'jquery.js'=>false,
);

$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
    'id'=>'editFloorDlg',
    'options'=>array(
        'title'=>'แก้ไขชื่อชั้น',
        'modal'=>TRUE,
        'autoOpen'=>TRUE,
        'width'=>300,
        'height'=>200,
    )
));
    $form=$this->beginWidget('CActiveForm',array(
        'id'=>'editFloorFormDlg',
        'enableClientValidation'=>TRUE,
        'clientOptions'=>array(
            'validateOnSubmit'=>TRUE
        ),
        'action'=>array('building/editfloor','floor_id'=>$floor->floor_id)
    ));
    echo $form->textField($floor,'floor_name');
    echo $form->error($floor,'floor_name');
    echo '<br>';
    echo CHtml::submitButton('บันทึก',array('class'=>'btn btn-mini'));
    $this->endWidget();
$this->endWidget();
?>