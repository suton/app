<?php

/**
 * Description of _editRoomDlg
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
?>
<?php
    //$room=  Room::model()->findByPk($_GET['room_id']);
    $form=$this->beginWidget('CActiveForm',array(
        'id'=>'editRoom',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true
        ),
        'action'=>array('building/editroom','room_id'=>$room->id)
    ));
        echo $room->id;
        echo $form->textField($room,'room_code');
        echo CHtml::submitButton('บันทึก',array('class'=>'btn btn-mimi'));
    $this->endWidget();
?>