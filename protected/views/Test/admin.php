<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
?>
<?php
    
    $this->widget('zii.widgets.grid.CGridView',array(
        'id'=>'theroomType',
        'dataProvider'=>$model->search(),
        'filter'=>$model,
        'columns'=>array(
            'fee_group_id',
            'room_type_name',
            'building_id',
            array(
                'class'=>'CButtonColumn',
                'buttons'=>array(
                      'update'=>
                          array(
                                  'url'=>'$this->grid->controller->createUrl("update", array("id"=>$data->primaryKey,"asDialog"=>1,"gridId"=>$this->grid->id))',
                                  'click'=>'function(){$("#cru-frame").attr("src",$(this).attr("href")); $("#cru-dialog").dialog("open");  return false;}',
                              ),
                          ),
            )
        )
    ));
?>
<?php
//--------------------- begin new code --------------------------
   // add the (closed) dialog for the iframe
    $this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id'=>'cru-dialog',
    'options'=>array(
        'title'=>'Detail view',
        'autoOpen'=>false,
        'modal'=>false,
        'width'=>300,
        'height'=>300,
    ),
    ));
?>
<iframe id="cru-frame" width="100%" height="100%"></iframe>
<?php
 
$this->endWidget();
//--------------------- end new code --------------------------
?>