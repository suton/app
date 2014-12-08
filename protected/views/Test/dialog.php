<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dialog
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
?>
<?php


$this->widget('zii.widgets.grid.CGridView',array(
    'id'=>'group-grid',
    'dataProvider'=>$model->search(),
    'columns'=>array(
            'room_type_name',
           
    ),
));
?>
