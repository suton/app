<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of modal_dialog
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */

?>
<?php if(!empty($asDialog)):?>

<?php $this->beginWidget('bootstrap.widgets.TbModal',array(
        'id' => 'myModal',
));?>
<?php endif;?>

<div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h4>Modal header</h4>
</div>

<div class="modal-body">
xxx
</div>

<div class="modal-footer">
   
<?php $this->widget('bootstrap.widgets.TbButton',array(
        'type' => 'primary',
        'label' => 'Save changes',
        'url' => '#',
        'htmlOptions' => array('data-dismiss' => 'modal','onclick' => 'ss()'),
)); ?>

<?php $this->widget('bootstrap.widgets.TbButton',array(
        'label' => 'Close',
        'url' => '#',
        'htmlOptions' => array('data-dismiss' => 'modal'),
)); ?>
</div>

<?php if(!empty($asDialog)) $this->endWidget(); ?>
