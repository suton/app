<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of _room_type_monthly
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
?>
<?php foreach ($fee_item_monthly as $index=>$item_row): ?>

    <?php echo $item_row->RoomTypeFeeID->fee_name; ?>
    <?php echo $form->textField($item_row,"[1][$index]fee_value");?>
    <?php echo "<br/>"; ?>

<?php endforeach; ?>