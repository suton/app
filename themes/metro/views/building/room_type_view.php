<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of room_type_view
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
?>
<?php
    $this->beginWidget('zii.widgets.jui.CJuiDialog',array(
            'id'=>'viewRoomType',
            'options'=>array(
                 'model'=>true,
                 'autoOpen'=>FALSE,
                 'resizable'=>FALSE,
                 'title'=>'ประเภทห้อง'
            )
    ));
    echo $roomtype->room_type_name;
    $this->endWidget();
    echo 'xxx';
     echo $roomtype->room_type_name;
?>
