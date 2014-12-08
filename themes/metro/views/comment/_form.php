
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comment-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

        <?php echo $form->labelEx($model,'author'); ?>
        <?php echo $form->textField($model,'author',array('size'=>60,'maxlength'=>128)); ?>
        <?php echo $form->error($model,'author'); ?>

        <?php echo $form->labelEx($model,'email'); ?>
        <?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
        <?php echo $form->error($model,'email'); ?>

        <?php echo $form->labelEx($model,'url'); ?>
        <?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>128)); ?>
        <?php echo $form->error($model,'url'); ?>

        <?php echo $form->labelEx($model,'content'); ?>
        <?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
        <?php echo $form->error($model,'content'); ?>

        <p><?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Save'); ?></p>

<?php $this->endWidget(); ?>
