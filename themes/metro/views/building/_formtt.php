<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of _form
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
$baseUrl=  Yii::app()->theme->baseUrl;
$cs=  Yii::app()->getClientScript();

$cs->registerCssFile($baseUrl.'/lib/jBreadcrumbs/css/BreadCrumb.css');
$cs->registerCssFile($baseUrl.'/lib/qtip2/jquery.qtip.min.css');
$cs->registerCssFile($baseUrl.'/lib/sticky/sticky.css');
$cs->registerCssFile($baseUrl.'/img/splashy/splashy.css');
$cs->registerCssFile($baseUrl.'/img/flags/flags.css');

Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/jquery.debouncedresize.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/jquery.actual.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/jquery_cookie.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/bootstrap.plugins.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile($baseUrl.'/lib/qtip2/jquery.qtip.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/ios-orientationchange-fix.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile($baseUrl.'/lib/antiscroll/antiscroll.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile($baseUrl.'/lib/antiscroll/jquery-mousewheel.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile($baseUrl.'/lib/colorbox/jquery.colorbox.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/selectNav.js', CClientScript::POS_END);
//Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/gebo_common.js', CClientScript::POS_END);
    
?>
<div class="row-fluid">
    <div class="span6">
        <h3 class="heading">เพิ่มอาคาร</h3>
            <?php $form=$this->beginWidget('CActiveForm', array(
                                'id'=>'corporation-form',
                                'enableClientValidation'=>true,
                                'clientOptions'=>array(
                                        'validateOnSubmit'=>true,
                                ),
                                'htmlOptions'=>array(
                                    'class'=>'form-horizontal',
                                    'enctype'=>'multipart/form-data'
                                ),
                            )); 
            ?>
        <div class="control-group formSep"><!--ภายใต้ tag นี้ validate แล้ว textfield จะขึ้นกรอบสีแดง-->
            <label class="control-label"><?php echo $form->labelEx($model,'name');?></label>
            <div class="controls">
                            <?php echo $form->textField($model,'name',array('class'=>'input-xlarge')); ?>
            </div>
        </div>
        <div class="control-group formSep">
            <label class="control-label"><?php echo $form->labelEx($model,'address');?></label>
            <div class="controls">
                            <?php echo $form->textField($model,'address',array('class'=>'input-xlarge')); ?>
            </div>
        </div>
         <div class="control-group formSep">
            <label for="u_province" class="control-label"><?php echo $form->labelEx($model,'province_id');?></label>
            <div class="controls">
                <?php 
                    $province = CHtml::listData(Province::model()->findAll(array('order' => 'PROVINCE_NAME')), 'PROVINCE_ID', 'PROVINCE_NAME');
                    echo $form->dropDownList($model, 'province_id', $province, array(
                    'prompt' => '--กรุณาเลือกจังหวัด--',
                    'ajax'=> array(
                            'type'=>'POST',
                            'url' => CController::createUrl('Building/UpdateAmphur'),
                            'update' => '#'.CHtml::activeID($model,'amphur_id')
                            )
                    )); 
                ?>
            </div>
        </div>
        <div class="control-group formSep">
            <label for="amphur_id" class="control-label"><?php echo $form->labelEx($model,'amphur_id');?></label>
            <div class="controls">
                <?php 
                    $amphur= CHtml::listData(Amphur::model()->findAll('PROVINCE_ID=:PROVINCE_ID',array(':PROVINCE_ID'=>$model->province_id)),'AMPHUR_ID','AMPHUR_NAME');
                    echo $form->dropDownList($model,'amphur_id',$amphur,array(
                        'prompt'=>'--กรุณาเลือกอำเภอ--'
                    )); 
                ?>
            </div>
        </div>
        <div class="control-group formSep">
            <label class="control-label"><?php echo $form->labelEx($model,'zipcode');?></label>
            <div class="controls">
                            <?php echo $form->textField($model,'zipcode',array('class'=>'input-xlarge')); ?>
            </div>
        </div>
        <div class="control-group formSep">
            <label class="control-label"><?php echo $form->labelEx($model,'phone');?></label>
            <div class="controls">
                            <?php echo $form->textField($model,'phone',array('class'=>'input-xlarge')); ?>
            </div>
        </div>
        <div class="control-group formSep">
            <label class="control-label"><?php echo $form->labelEx($model,'fax');?></label>
            <div class="controls">
                            <?php echo $form->textField($model,'fax',array('class'=>'input-xlarge')); ?>
            </div>
        </div>
        <div class="control-group formSep">
            <label class="control-label"><?php echo $form->labelEx($model,'email');?></label>
            <div class="controls">
                            <?php echo $form->textField($model,'email',array('class'=>'input-xlarge')); ?>
            </div>
        </div>
        <div class="control-group formSep">
            <label class="control-label"></label>
            <div class="controls">
                            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-gebo btn-large')); ?>
            </div>
        </div>
    </div>
    <!--Right Column-->
    <div class="span6">
        <?php echo CHtml::errorSummary($model); ?>
        
            <?php echo $form->labelEx($model,'title');?>
            <?php echo $form->textField($model,'title');?>
       
            <?php
                $this->widget('ImageAttachmentWidget', array(
                    'model' => $model,
                    'behaviorName' => 'coverBehavior',
                    'apiRoute' => 'api/saveImageAttachment',
                ));
                
            ?>
        
        <?php echo $form->labelEx($model,'content'); ?>
        <?php
            $this->widget('TinyMce', array(
                'model' => $model,
                'attribute' => "content",
                'compressorRoute' => 'api/tinyMceCompressor',
                'spellcheckerUrl' => 'http://speller.yandex.net/services/tinyspell',
                'fileManager' => array(
                    'class' => 'TinyMceElFinder',
                    'connectorRoute' => 'api/elFinderConnector',
                ),
            ));
        ?>
        <?php echo $form->error($model,'content'); ?>
        
          <?php echo $form->labelEx($model,'tags'); ?>
		<?php
                
                $this->widget('CAutoComplete', array(
			'model'=>$model,
			'attribute'=>'tags',
			'url'=>array('suggestTags'),
			'multiple'=>true,
			'htmlOptions'=>array('size'=>50),
		)); 
                
                ?>
		<p class="hint">Please separate different tags with commas.</p>
		<?php echo $form->error($model,'tags'); ?>
                
                
                <?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownList($model,'status',Lookup::items('PostStatus')); ?>
		<?php echo $form->error($model,'status'); ?>
                
                
                 <?php echo $form->label($model, 'gallery_id')?>

        <?php
        if ($model->galleryBehavior->getGallery() === null) {
            echo '<p>Before add photos, you need to save at least once</p>';
        } else {
            $this->widget('GalleryManager', array(
                'gallery' => $model->galleryBehavior->getGallery(),
                'controllerRoute'=>'galleryApi'
            ));
        }
        ?>
                
    </div>
    <?php $this->endWidget(); ?>
</div>