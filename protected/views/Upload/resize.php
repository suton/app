<?php $form=$this->beginWidget('CActiveForm',array(
    'enableAjaxValidation'=>true,
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
    ),
)); ?>
<?php echo $form->textField($model,'username'); ?>
<?php echo $form->fileField($model,'img');?>
<?php echo CHtml::submitButton('send');?>
<?php $this->endWidget(); ?>