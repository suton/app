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
//------------ add the CJuiDialog widget -----------------
if (!empty($asDialog)):
    $this->beginWidget('zii.widgets.jui.CJuiDialog', array( // the dialog
        'id'=>'dlg-address-view-',
        'options'=>array(
            'title'=>'View Address #',
            'autoOpen'=>true,
            'modal'=>false,
            'width'=>550,
            'height'=>470,
        ),
 ));
 
else:
//-------- default code starts here ------------------
?>
<?php endif; ?>
 
<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        'username',
        'fname',
        'lname',
        //... all record attributes
    ),
)); 
//-------- end of default code  ------------------
?>
 
<?php 
  //----------------------- close the CJuiDialog widget ------------
  if (!empty($asDialog)) $this->endWidget();
?>