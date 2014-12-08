<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of view
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
?>
<?php
Yii::app()->clientScript->scriptMap=array(
         //scripts that you don’t need inside this view
        'jquery.js'=>false,
);
//------------ add the CJuiDialog widget -----------------
if (!empty($asDialog)):
    $this->beginWidget('zii.widgets.jui.CJuiDialog', array( // the dialog
        'id'=>'updateDialog',
        'options'=>array(
            'title'=>'update Address #',
            'autoOpen'=>true,
            'modal'=>false,
            'width'=>550,
            'height'=>470,
        ),
 ));
 
else:
?>
<?php endif; ?>
<?php
$this->widget(
    'bootstrap.widgets.TbTabs',
    array(
        'type' => 'pills', // 'tabs' or 'pills'
        'tabs' => array(
            array(
                'label' => 'Home',
                'content' => 'Home Content',
                'active' => true
            ),
            array('label' => 'Profile', 'content' => 'Profile Content'),
            array('label' => 'Messages', 'content' => 'Messages Content'),
        ),
    )
);

?>
<?php
//    $this->widget('zii.widgets.jui.CJuiTabs',array(
//            //'type'=>'pills',
//            'tabs'=>array(
//                'StaticTab 1'=>'Content for tab 1xxxxxxxxxxxxx',
//                'StaticTab 2'=>array('content'=>'Content for tab 2', 'id'=>'tab2'),
//
//            ),
//            // additional javascript options for the tabs plugin
//            'options'=>array(
//                'collapsible'=>true,
//            ),
//        ));
?>
<?php 

$form=$this->beginWidget('CActiveForm');
        echo $form->textField($model,'fname');
        echo $form->textField($model,'lname');
        echo CHtml::submitButton();
 $this->endWidget();

?>
 
<?php 
  //----------------------- close the CJuiDialog widget ------------
  if (!empty($asDialog)) $this->endWidget();
?>