<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TabView
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
?>
<?php

    $this->beginWidget('zii.widgets.jui.CJuiDialog', array( // the dialog
        'id'=>'roomTypeEditDialog',
        'options'=>array(
            'title'=>'แก้ไขประเภทห้อง',
            'autoOpen'=>true,
            'modal'=>true,
            'width'=>550,
            'height'=>470,
            'buttons' => array(
                'OK'=>'js:function(){
                $("#roomTypeEditForm").submit();
                }',
                'CANCEL'=>'js:function(){$(this).dialog("close")}'),
        )
        ));
        
$this->widget('bootstrap.widgets.TbTabs',array(
        'id'=>'mytab',
        'type' => 'pills', // 'tabs' or 'pills'
        'tabs' =>array(
            array('label'=>'tab1','content'=>'content1'),
            array('label'=>'tab2','content'=>'content2')
        )
    ));
    
    $this->endWidget();
?>