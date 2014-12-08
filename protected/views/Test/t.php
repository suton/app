<?php
$this->widget('ext.Hzl.toastr.HzlToastr', array(
                'flashMessagesOnly' => true, //default to false.  True will fetch setFlashes data
                'options' => array(
                    'timeOut' => 15000,
                ),
            ));
?>