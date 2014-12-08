<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of update
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
?>
<div class="row buttons">
        <?php $form=$this->beginWidget('CActiveForm');?>
        <?php echo $form->textField($model,'room_type_name');?>
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
        <?php echo CHtml::button('Cancel',array('onclick'=>"window.parent.$('#cru-dialog').dialog('close');window.parent.$('#cru-frame').attr('src','');")); ?>
        <?php $this->endWidget();?>
</div>