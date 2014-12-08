<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tabDialog
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
?>
<?php /*
$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
        'id'=>'tabDialog',
        'options'=>array(
            'autoOpen'=>true,
            'width'=>'500',
            'height'=>'500',
            'resizable'=>false,
            'modal'=>TRUE
        )
));

$this->widget('zii.widgets.jui.CJuiTabs',array(
    'tabs'=>array(
        'StaticTab 1'=>'Content for tab 1',
        'StaticTab 2'=>array('content'=>'Content for tab 2', 'id'=>'tab2'),

    ),
    // additional javascript options for the tabs plugin
    'options'=>array(
        'collapsible'=>true,
    ),
));

$this->endWidget();*/
?>

<?php $this->beginWidget('bootstrap.widgets.TbModal',array(
        'id' => 'myModal',
        'autoOpen'=>TRUE
));?>
    
<div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h4>Modal header</h4>
</div>

<div class="modal-body">
    <?php
        $this->widget('zii.widgets.jui.CJuiTabs',array(
            'tabs'=>array(
                'StaticTab 1'=>'Content for tab 1',
                'StaticTab 2'=>array('content'=>'Content for tab 2', 'id'=>'tab2'),

            ),
            // additional javascript options for the tabs plugin
            'options'=>array(
                'collapsible'=>true,
            ),
        ));
        
        $form=$this->beginWidget('CActiveForm');
            echo $form->textField($model,'room_type_name');
        $this->endWidget();
    ?>
</div>

<div class="modal-footer">
   
<?php $this->widget('bootstrap.widgets.TbButton',array(
        'type' => 'primary',
        'label' => 'Save changes',
        'url' => '#',
        'htmlOptions' => array('data-dismiss' => 'modal'),
)); ?>

<?php $this->widget('bootstrap.widgets.TbButton',array(
        'label' => 'Close',
        'url' => '#',
        'htmlOptions' => array('data-dismiss' => 'modal'),
)); ?>
</div>

<?php $this->endWidget(); ?>