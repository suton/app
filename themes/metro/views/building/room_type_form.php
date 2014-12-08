<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of room_type_form
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
?>
<?php
/*
Yii::app()->clientScript->scriptMap=array(
         //scripts that you don’t need inside this view
        'jquery-ui.min.js'=>false,
        'jquery.js'=>false,
);
*/
?>
<?php
    $this->widget('zii.widgets.jui.CJuiTabs',array(
            'tabs'=>array(
                'StaticTab 1'=>'Content for tab 1xxxxxxxxxxxxx',
                'StaticTab 2'=>array('content'=>'Content for tab 2', 'id'=>'tab2'),

            ),
            // additional javascript options for the tabs plugin
            'options'=>array(
                'collapsible'=>true,
            ),
        ));
?>
  <?php $form=$this->beginWidget('CActiveForm',array(
                        'id'=>'formID',
                        'enableAjaxValidation'=>false,
                        'htmlOptions' => array('enctype' => 'multipart/form-data'),
                ));?>

    <?php echo "ชื่อประเภทห้อง"; ?>
    <?php echo $form->textField($feeGroup,'room_type_name'); ?>
    <?php echo "<br/>"; ?>

    <?php foreach ($feeGroup->roomTypeFeeItem as $index=>$item_row): ?>

        <?php echo $item_row->RoomTypeFeeID->fee_name; ?>
        <?php echo $form->textField($item_row,"[$index]fee_value");?>
        <?php echo "<br/>"; ?>

    <?php endforeach; ?>
    <?php echo CHtml::submitButton('save'); ?>
    
    
<?php $this->endWidget();?>