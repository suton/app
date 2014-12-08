
<?php

$this->widget('xupload.XUpload',array(
    'url'=>  Yii::app()->createUrl("upload/upload",array('parent_id'=>$_SESSION["id"])),
    'model'=>$model,
    'attribute'=>'file',
    'multiple'=>TRUE,
    'options'=>array(
        'maxFileSize'=>3000000
    )
));
?>
