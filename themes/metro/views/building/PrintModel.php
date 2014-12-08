<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PrintModel
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
?>
<?php
    $this->widget('zii.widgets.grid.CGridView',array(
        'dataProvider'=>$data,
        
    ));
?>