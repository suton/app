<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of update
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
?>
<?php 
Yii::app()->clientScript->registerCss('checkbox','
    input[type=checkbox] {
        opacity:100 !important;
    }
    '); 
?>

<?php echo $this->renderPartial("_form",array('model'=>$model,'amenity'=>$amenity,'map'=>$map));?>