<h3><?php echo Yii::t('ui','Ex 4: ขอนแก่น');?></h3>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mapC-form',
	'enableAjaxValidation'=>false,
)); ?>
	<?php $this->widget('ext.widgets.google.XGoogleInputMap', array(
		'googleApiKey'=>Yii::app()->params['googleApiKey'],
		'form'=>$form,
		'model'=>new Map('test3')
	)); ?>
        <?php echo CHtml::submitButton(); ?>
<?php $this->endWidget(); ?>
<br />