<?php

/**
 * Description of _form
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
?>
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
        
        <div class="row-fluid">
            
            
            <div class="span5">
                
                
                <div class="control-group <?php echo ( $model->getError('name')  ? ' error' : '')?>">
                        <label class="control-label" for="name"><?php echo $form->labelEx($model,'name');?></label>

                        <div class="controls">
                                <?php echo $form->textField($model,'name',array('id'=>'name','placeholder'=>'กรอกชื่ออาคาร')); ?>
                        </div>
                </div>
                
                <div class="control-group <?php echo ( $model->getError('building_type_id')  ? ' error' : '')?>">
                        <label class="control-label" for="building_type_id"><?php echo $form->labelEx($model,'building_type_id');?></label>

                        <div class="controls">
                                <?php 
                                    $buildingType= CHtml::listData(BuildingType::model()->findAll(), 'id', 'typename');
                                    echo $form->dropDownList($model,'building_type_id',$buildingType,array(
                                        'prompt'=>'--เลือกประเภทอาคาร--'
                                    ));
                                ?>
                        </div>
                </div>
                
                <div class="control-group <?php echo ( $model->getError('address')  ? ' error' : '')?>">
                        <label class="control-label" for="address"><?php echo $form->labelEx($model,'address');?></label>

                        <div class="controls">
                                <?php echo $form->textField($model,'address',array('id'=>'address','placeholder'=>'กรอกที่อยู่อาคาร')); ?>
                        </div>
                </div>
                
                <div class="control-group <?php echo ( $model->getError('province_id')  ? ' error' : '')?>">
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
                
                <div class="control-group <?php echo ( $model->getError('amphur_id')  ? ' error' : '')?>">
                        <label class="control-label" for="amphur_id"><?php echo $form->labelEx($model,'amphur_id');?></label>

                        <div class="controls">
                            <?php 
                                $amphur= CHtml::listData(Amphur::model()->findAll('PROVINCE_ID=:PROVINCE_ID',array(':PROVINCE_ID'=>$model->province_id)),'AMPHUR_ID','AMPHUR_NAME');
                                echo $form->dropDownList($model,'amphur_id',$amphur,array(
                                    'prompt'=>'--กรุณาเลือกอำเภอ--',
                                    'ajax'=>array(
                                        'type'=>'POST',
                                        'url'=>  CController::createUrl('Building/UpdateDistrict'),
                                        'update'=>'#'.CHtml::activeId($model, 'district_id')
                                    )
                                )); 
                            ?>
                        </div>
                </div>
                
                <div class="control-group <?php echo $model->getError('district_id')?'error':'';?>">
                    <label class="control-label" for="district_id"><?php echo $form->labelEx($model,'district_id');?></label>
                    <div class="controls">
                        <?php
                            $district=  CHtml::listData(Districts::model()->findAll('AMPHUR_ID=:AMPHUR_ID and PROVINCE_ID=:PROVINCE_ID',array(':AMPHUR_ID'=>$model->amphur_id,'PROVINCE_ID'=>$model->province_id)),'DISTRICT_ID','DISTRICT_NAME');
                            echo $form->dropDownlist($model,'district_id',$district,array(
                                'prompt'=>'--กรุณาเลือกตำบล--'
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
                
                
                
                
            </div>
            <!--Right Column-->
            <div class="span6">
                
                <div class="control-group">
                        <label class="control-label">สิ่งอำนวยความสะดวก</label>

                        <div class="controls">
                            <label>
                                <?php echo $form->checkBox($amenity,'air_conditioning',array('checked'=>($amenity->air_conditioning)?'checked':'')); ?>
                                <span class="lbl"> <?php echo $amenity->getAttributeLabel('air_conditioning');?></span>
                            </label>
                            
                            <label>
                                <?php echo $form->checkBox($amenity,'water_heater',array('checked'=>($amenity->water_heater)?'checked':'')); ?>
                                <span class="lbl"> <?php echo $amenity->getAttributeLabel('water_heater');?></span>
                            </label>
                            
                            <label>
                                <?php echo $form->checkBox($amenity,'balcony',array('checked'=>($amenity->balcony)?'checked':'')); ?>
                                <span class="lbl"> <?php echo $amenity->getAttributeLabel('balcony');?></span>
                            </label>
                            
                            <label>
                                <?php echo $form->checkBox($amenity,'sink',array('checked'=>($amenity->sink)?'checked':'')); ?>
                                <span class="lbl"> <?php echo $amenity->getAttributeLabel('sink');?></span>
                            </label>
                            
                            <label>
                                <?php echo $form->checkBox($amenity,'pool',array('checked'=>($amenity->pool)?'checked':'')); ?>
                                <span class="lbl"> <?php echo $amenity->getAttributeLabel('pool');?></span>
                            </label>
                            
                            <label>
                                <?php echo $form->checkBox($amenity,'internet',array('checked'=>($amenity->internet)?'checked':'')); ?>
                                <span class="lbl"> <?php echo $amenity->getAttributeLabel('internet');?></span>
                            </label>
                            
                            <label>
                                <?php echo $form->checkBox($amenity,'microwave',array('checked'=>($amenity->microwave)?'checked':'')); ?>
                                <span class="lbl"> <?php echo $amenity->getAttributeLabel('microwave');?></span>
                            </label>
                            
                            <label>
                                <?php echo $form->checkBox($amenity,'fridge',array('checked'=>($amenity->fridge)?'checked':'')); ?>
                                <span class="lbl"> <?php echo $amenity->getAttributeLabel('fridge');?></span>
                            </label>
                            
                            <label>
                                <?php echo $form->checkBox($amenity,'cable_tv',array('checked'=>($amenity->cable_tv)?'checked':'')); ?>
                                <span class="lbl"> <?php echo $amenity->getAttributeLabel('cable_tv');?></span>
                            </label>
                            
                            <label>
                                <?php echo $form->checkBox($amenity,'security_camera',array('checked'=>($amenity->security_camera)?'checked':'')); ?>
                                <span class="lbl"> <?php echo $amenity->getAttributeLabel('security_camera');?></span>
                            </label>
                            
                            <label>
                                <?php echo $form->checkBox($amenity,'fans',array('checked'=>($amenity->fans)?'checked':'')); ?>
                                <span class="lbl"> <?php echo $amenity->getAttributeLabel('fans');?></span>
                            </label>
                            

                        </div>
                </div>
                
                <div class="control-group">
                        <label class="control-label"><?php echo $form->labelEx($model,'tags'); ?></label>
                        <div class="controls">
                            <?php
                                $this->widget('CAutoComplete', array(
                                        'model'=>$model,
                                        'attribute'=>'tags',
                                        'url'=>array('suggestTags'),
                                        'multiple'=>true,
                                        'htmlOptions'=>array('size'=>50),
                                )); 
                            ?>
                            
                            <p class="hint">หากใส่แท็กส์หลายคำให้ใช้เครื่องหมาย(,)คั่น</p>
<!--                <p class="hint">Please separate different tags with commas.</p>-->
                
                            <?php echo $form->error($model,'tags'); ?>
                        </div>
                </div>
                


                <div class="control-group <?php echo ( $model->getError('status')  ? ' error' : '')?>">
                        <label class="control-label" for="title"><?php echo $form->labelEx($model,'status');?></label>

                        <div class="controls">
                                <?php echo $form->dropDownList($model,'status',Lookup::items('PostStatus')); ?>
                        </div>
                </div>

            </div>
            <?php //$this->endWidget(); ?>
        </div><!--/.row-fluid-->
        
        <div class="row-fluid">
            
            <h4 class="header blue bolder smaller">Gallery</h4>

            <?php echo CHtml::errorSummary($model,'','',array('style'=>'color:red;')); ?>
            
            <div class="control-group">
                <label class="control-label">ภาพหน้าปก</label>
                <div class="controls">
                     <?php
                        $this->widget('ImageAttachmentWidget', array(
                            'model' => $model,
                            'behaviorName' => 'coverBehavior',
                            'apiRoute' => 'api/saveImageAttachment',
                        ));
                     ?>

                </div>
            </div>
           
            <div class="control-group <?php echo ( $model->getError('title')  ? ' error' : '')?>">
                    <label class="control-label" for="title"><?php echo $form->labelEx($model,'title');?></label>

                    <div class="controls">
                            <?php echo $form->textArea($model,'title', array(
                                'class'=>'span12 limited' . ( $model->getError('title')  ? ' error' : ''),
                                'maxlength'=>'500',
                                'rows'=>'5'
                                )); ?>
                    </div>
            </div>

            <div class="control-group">
                <label class="control-label"><?php echo $form->labelEx($model,'content'); ?></label>
                <div class="controls">
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
                </div>
            </div>
            
            <div class="control-group">
                <label class="control-label"><?php echo $form->labelEx($model, 'gallery_id')?></label>
                <div class="controls">
                    <?php
                        if ($model->galleryBehavior->getGallery() === null) {
                            echo '<p>ต้องบันทึกข้อมูลก่อนการสร้างคลังรูปภาพ</p>';
                            //echo '<p>Before add photos, you need to save at least once</p>';
                        } else {
                            //echo $model->galleryBehavior->x('aa');
                            $this->widget('GalleryManager', array(
                                'gallery' => $model->galleryBehavior->getGallery(),
                                'controllerRoute'=>'galleryApi'
                            ));
                        }
                    ?>
                </div>
            </div>
            
            <div class="control-group">
                <label class="control-label">เลือกแผนที่</label>
                <div class="controls">
                    <?php $this->widget('ext.widgets.google.XGoogleInputMap', array(
                            'googleApiKey'=>Yii::app()->params['googleApiKey'],
                            'form'=>$form,
                            'model'=>$map,
                            'defaultZoom'=>6,
                            'width'=>900,
                            'height'=>500
                    )); ?>
                </div>
            </div>
            
        </div>
        
        <div class="row-fluid">
            <div class="form-actions">
                <?php 
                        echo CHtml::htmlButton('<i class="icon-ok bigger-110"></i>บันทึก',
                                array('class'=>'btn btn-info','type'=>'submit')
                            );
                ?>
            </div>
        </div>
        
        <?php $this->endWidget(); ?>
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