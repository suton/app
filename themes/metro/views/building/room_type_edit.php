<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of room_type_edit
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
        'id'=>'roomTypeEditDialog',
        'options'=>array(
            'title'=>'แก้ไขประเภทห้อง',
            'autoOpen'=>true,
            'modal'=>true,
            'width'=>650,
            'height'=>600,
            'buttons' => array(
                'OK'=>'js:function(){
                    $("#roomTypeEditForm").submit();
                }',
                'CANCEL'=>'js:function(){
                    $(this).dialog("close");
                    $("#roomTypeEditForm").removeAttr("id");
                }'),
            'close'=>'js:function(){ $("#roomTypeEditForm").removeAttr("id"); }',
        ),
 ));
else:
?>
<?php endif; ?>

<?php
$form=$this->beginWidget('CActiveForm',array(
    'id'=>'roomTypeEditForm',
    //'action'=>array('butilding/roomtypesave')
));
?>

    <?php echo $form->labelEx($model,'room_type_name');?>
    <?php echo $form->textField($model,'room_type_name');?>

<?php

 $tabs=array();
 
 $tabs['monthly'.  uniqid()]=array(
     'title'=>'อัตรารายเดือน',
     'content'=>$this->renderPartial('_room_type_monthly',array('fee_item_monthly'=>$fee_item_monthly,'form'=>$form),true),
     'active'=>true,
 );
 
 $tabs['daily'.  uniqid()]=array(
     'title'=>'อันตรารายวัน',
     'content'=>$this->renderPartial('_room_type_daily',array('fee_item_daily'=>$fee_item_daily,'form'=>$form),true)
 );
$this->widget('CTabView',array(
        'id'=>'ctab'.  uniqid(),
        'tabs' =>$tabs,
    ));

$this->endWidget();
?>

<?php 
  //----------------------- close the CJuiDialog widget ------------
  if (!empty($asDialog)) $this->endWidget();
?>