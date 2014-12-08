
<script type="text/javascript">
    $(function () {
        'use strict';

        // Initialize the jQuery File Upload widget:
        $('#XUploadForm-form').fileupload({
            url: "uploads",
        });

        $.ajax({
            url: $('#XUploadForm-form').fileupload('option', 'url'),
            type: "GET",
            dataType: 'json',
            context: $('#XUploadForm-form')[0]
        }).done(function (result) {
            $(this).fileupload('option', 'done')
                    .call(this, null, {result: result});
        });
    });
</script> 
<?php
 $this->widget('xupload.XUpload', array(
                    'url' => Yii::app()->createUrl("Upload/upload", array('parent_id' =>$_SESSION['id'])),
                    'model' => $model,
                    'attribute' => 'file',
                    'multiple' => TRUE, 
//                    'uploadView' => 'application.views.Upload.upload',
//                    'downloadView' => 'application.views.Upload.download',
                    'options'=>array(
                        //'maxNumberOfFiles' => 1,                        
                        'maxFileSize' => 5000000,
                        'acceptFileTypes' => "js:/(\.|\/)(jpe?g|png)$/i",
                        //'Complete'=>'js:function(){location.reload(true);}',

                    )                   
));
?>