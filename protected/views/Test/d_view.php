<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of d_view
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
?>
<?php
echo "form";
$form=$this->beginWidget('CActiveForm');
    echo $form->textField($model,'room_type_name');
$this->endWidget();
?>