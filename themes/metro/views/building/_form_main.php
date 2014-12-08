<?php
/**
 * Description of _form
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
//Yii::app()->clientScript->scriptMap['jquery-2.0.3.min.js'] = false;  
//Yii::app()->clientScript->scriptMap=array(
//        'jquery-2.0.3.min.js'=>FALSE,
//        'jquery.js'=>FALSE,
//);
?>
<?php $baseUrl=yii::app()->theme->baseUrl;?>
<?php $cs=  Yii::app()->clientScript;?>
<?php //<!--page specific plugin styles-->?>
<?php $cs->registerCssFile($baseUrl.'/assets/css/colorbox.css'); ?>

<div class="main-content">
    <div class="breadcrumbs" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                    <i class="icon-home home-icon"></i>
                    <a href="#">Home</a>

                    <span class="divider">
                            <i class="icon-angle-right arrow-icon"></i>
                    </span>
            </li>
            <li>
                    <a href="#">ผู้ประกอบการ</a>

                    <span class="divider">
                            <i class="icon-angle-right arrow-icon"></i>
                    </span>
            </li>
            <li class="active">กำหนดประเภทห้อง</li>
        </ul><!--.breadcrumb-->

        <div class="nav-search" id="nav-search">
            <form class="form-search" />
                <span class="input-icon">
                    <input type="text" placeholder="Search ..." class="input-small nav-search-input" id="nav-search-input" autocomplete="off" />
                    <i class="icon-search nav-search-icon"></i>
                </span>
            </form>
        </div><!--#nav-search-->
    </div>
    
    <div class="page-content">
        <div class="page-header position-relative">
            <h1>
                กำหนดประเภทห้อง
                <small>
                    <i class="icon-double-angle-right"></i>
                    เพิ่มอาคาร
                </small>
            </h1>
        </div><!--/.page-header-->
        
        <div class="row-fluid">
            <div class="span5">
                <?php $form=$this->beginWidget('CActiveForm', array(
                                    'id'=>'create-building-form',
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
                
                <div class="control-group">
                        <label class="control-label" for="name"><?php echo $form->labelEx($model,'name');?></label>

                        <div class="controls">
                                <?php echo $form->textField($model,'name',array('id'=>'name','placeholder'=>'กรอกชื่ออาคาร')); ?>
                        </div>
                </div>
                
                <div class="control-group">
                        <label class="control-label" for="address"><?php echo $form->labelEx($model,'address');?></label>

                        <div class="controls">
                                <?php echo $form->textField($model,'address',array('id'=>'address','placeholder'=>'กรอกที่อยู่อาคาร')); ?>
                        </div>
                </div>
                
                <div class="control-group">
                        <label class="control-label" for="province_id"><?php echo $form->labelEx($model,'province_id');?></label>

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
                
                <div class="control-group">
                        <label class="control-label" for="amphur_id"><?php echo $form->labelEx($model,'amphur_id');?></label>

                        <div class="controls">
                            <?php 
                                $amphur= CHtml::listData(Amphur::model()->findAll('PROVINCE_ID=:PROVINCE_ID',array(':PROVINCE_ID'=>$model->province_id)),'AMPHUR_ID','AMPHUR_NAME');
                                echo $form->dropDownList($model,'amphur_id',$amphur,array(
                                    'prompt'=>'--กรุณาเลือกอำเภอ--'
                                )); 
                            ?>
                        </div>
                </div>
                
                <div class="control-group">
                        <label class="control-label" for="zipcode"><?php echo $form->labelEx($model,'zipcode');?></label>

                        <div class="controls">
                                <?php echo $form->textField($model,'zipcode',array('id'=>'zipcode','placeholder'=>'กรอกรหัสไปรษณีย์')); ?>
                        </div>
                </div>
                
                <div class="control-group">
                        <label class="control-label" for="phone"><?php echo $form->labelEx($model,'phone');?></label>

                        <div class="controls">
                                <?php echo $form->textField($model,'phone',array('id'=>'phone','placeholder'=>'กรอกเบอร์โทรศัพท์')); ?>
                        </div>
                </div>
                
                <div class="control-group">
                        <label class="control-label" for="fax"><?php echo $form->labelEx($model,'fax');?></label>

                        <div class="controls">
                                <?php echo $form->textField($model,'fax',array('id'=>'fax','placeholder'=>'กรอกแฟกซ์')); ?>
                        </div>
                </div>
                
                <div class="control-group">
                        <label class="control-label" for="email"><?php echo $form->labelEx($model,'email');?></label>

                        <div class="controls">
                                <?php echo $form->textField($model,'email',array('id'=>'email','placeholder'=>'กรอกอีเมลล์')); ?>
                        </div>
                </div>
                
                <div class="control-group">
                        <label class="control-label" for="submit"></label>

                        <div class="controls">
                                <?php echo CHtml::htmlButton('<i class="icon-ok bigger-110"></i>บันทึก',array('class'=>'btn btn-info','type'=>'submit'))?>
                        </div>
                </div>
                
            </div>
            <!--Right Column-->
            <div class="span6">
                <?php echo CHtml::errorSummary($model); ?>
                <?php
                        $this->widget('ImageAttachmentWidget', array(
                            'model' => $model,
                            'behaviorName' => 'coverBehavior',
                            'apiRoute' => 'api/saveImageAttachment',
                        ));

                ?>
                
                <div class="control-group">
                        <label class="control-label" for="title"><?php echo $form->labelEx($model,'title');?></label>

                        <div class="controls">
                                <?php echo $form->textField($model,'title',array('id'=>'title','placeholder'=>'title')); ?>
                        </div>
                </div>

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
        </div><!--/.row-fluid-->
                                        
    </div><!--/.page-content-->
    
    <div class="ace-settings-container" id="ace-settings-container">
        <div class="btn btn-app btn-mini btn-warning ace-settings-btn" id="ace-settings-btn">
            <i class="icon-cog bigger-150"></i>
        </div>

        <div class="ace-settings-box" id="ace-settings-box">
            <div>
                <div class="pull-left">
                    <select id="skin-colorpicker" class="hide">
                        <option data-class="default" value="#438EB9" />#438EB9
                        <option data-class="skin-1" value="#222A2D" />#222A2D
                        <option data-class="skin-2" value="#C6487E" />#C6487E
                        <option data-class="skin-3" value="#D0D0D0" />#D0D0D0
                    </select>
                </div>
                <span>&nbsp; Choose Skin</span>
            </div>

            <div>
                <input type="checkbox" class="ace-checkbox-2" id="ace-settings-header" />
                <label class="lbl" for="ace-settings-header"> Fixed Header</label>
            </div>

            <div>
                <input type="checkbox" class="ace-checkbox-2" id="ace-settings-sidebar" />
                <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
            </div>

            <div>
                <input type="checkbox" class="ace-checkbox-2" id="ace-settings-breadcrumbs" />
                <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
            </div>

            <div>
                <input type="checkbox" class="ace-checkbox-2" id="ace-settings-rtl" />
                <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
            </div>
        </div>
    </div><!--/#ace-settings-container-->
</div><!--/.main-content-->
