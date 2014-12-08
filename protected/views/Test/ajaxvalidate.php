<?php

/**
 * Description of ajaxvalidate
 *
 * @Suton Charoensiri <prasuton_123@hotmail.com>
 */
echo 'ajaxvalidate';

$form=$this->beginWidget('CActiveForm',array(
    'id'=>'ajaxvalidate',
    'enableAjaxValidation'=>true,
));

   echo  $form->textField($b,'name');
   echo  $form->error($b,'name');
   echo  $form->textField($b,'phone');
   echo  $form->error($b,'phone');
   echo  $form->textField($b,'email');
   echo  $form->error($b,'email');
   echo  CHtml::submitButton('xxxx');
$this->endWidget();
?>