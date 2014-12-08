<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Cambiar contraseña.';
?>
<div id='box-logo'>
  <div id='logo-sw-270x60'></div>
</div>
<h2>Cambiar contraseña</h2>
<?php /** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'changePassword-form',
    'inlineErrors'=>true,
    'enableClientValidation'=>true,
    'clientOptions'=>array(
      'validateOnSubmit'=>true,
    ),
    'htmlOptions'=>array('class'=>'well'),
)); ?>


<?php echo $form->passwordFieldRow($model, 'currentPassword', array('class'=>'span3','placeholder'=>'Contraseña actual...')); ?>
<?php echo $form->passwordFieldRow($model, 'newPassword', array('class'=>'span3','placeholder'=>'Contraseña nueva...')); ?>
<?php echo $form->passwordFieldRow($model, 'newPassword_repeat', array('class'=>'span3','placeholder'=>'Contraseña nueva (repetir)...')); ?>
</br>
<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Enviar', 'type'=>'primary')); ?>
<?php $this->endWidget(); ?>
<?php 
  $this->widget('bootstrap.widgets.TbAlert', array(
      'block'=>true, // display a larger alert block?
      'fade'=>true, // use transitions?
      'closeText'=>'&times;', // close link text - if set to false, no close link is displayed
      'alerts'=>array( // configurations per alert type
        'success'=>array(
          'block'=>true,
          'fade'=>true,
          'closeText'=>'&times;',
        ), // success, info, warning, error or danger
      ),
    )
  );
?>