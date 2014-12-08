<?php

/**
 * Description of hasmany
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
?>
<?php
echo 'test hasmany';
echo "<br>";
echo $model->name;
echo "<br>";
foreach ($model->floor as $floor) {
    echo $floor->floor_name;
    echo "<br>";
}
?>