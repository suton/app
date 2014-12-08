<?php
 $this->widget('xupload.XUpload', array(
                    //'url' => Yii::app()->createUrl('Upload/upload',array('parent_id' =>$_SESSION['id'])),
                    'url' => Yii::app()->createUrl(array('parent_id' =>$_SESSION['id'])),
                    'model' => $model,
                    'attribute' => 'file',
                    'multiple' => true, 
                   // 'uploadView' => 'application.views.Upload.upload',
                    'downloadView' => 'application.views.Upload.download',
                    'options'=>array(
                        //'maxNumberOfFiles' => 1,                        
                        'maxFileSize' => 5000000,
                        'acceptFileTypes' => "js:/(\.|\/)(jpe?g|png)$/i",
                        
                    )                   
));
 
?>
