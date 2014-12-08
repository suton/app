<?php

/**
 * Description of corporation
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
?>
<?php $baseUrl=yii::app()->theme->baseUrl;?>
<?php $cs=  Yii::app()->clientScript;?>
<?php //<!--page specific plugin styles-->?>
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
                                <li class="active">ข้อมูลผู้ประกอบการ</li>
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
                                        ข้อมูลผู้ประกอบการ
                                        <small>
                                                <i class="icon-double-angle-right"></i>
                                                บันทึกข้อมูล
                                        </small>
                                </h1>
                        </div><!--/.page-header-->

                        <div class="row-fluid">
                                <div class="span12">
                                        <!--PAGE CONTENT BEGINS-->
                                        <div class="row-fluid">
                                                <div class="span12">
                                                        <div class="widget-box">
                                                                <div class="widget-header widget-header-blue widget-header-flat">
                                                                        <h4 class="lighter">ข้อมูลผู้ประกอบการ/นิติบุคคล</h4>
                                                                </div>

                                                                <div class="widget-body">
                                                                        <div class="widget-main">
                                                                                <div class="row-fluid">
                                                                                    <h3 class="lighter block green">กรุณากรอกข้อมูลให้ตรงความเป็นจริงเพื่อประโยชน์ในการใช้ระบบของท่าน</h3>
                                                                                    <?php
                                                                                        $form=$this->beginWidget('CActiveForm',array(
                                                                                            'id'=>'validation-form',
                                                                                            'enableClientValidation'=>TRUE,
                                                                                            'clientOptions'=>array(
                                                                                                'validateOnSubmit'=>TRUE,
                                                                                                'inputContainer'=>'div.control-group'
                                                                                            ),
                                                                                            'htmlOptions'=>array('class'=>'form-horizontal'),
                                                                                            'action'=>array('Btrader/corporate')
                                                                                        ));
                                                                                    ?>
                                                                                    <div class="control-group">
                                                                                            <label class="control-label" for="">System Code</label>

                                                                                            <div class="controls">
                                                                                                    <div class="span12">
                                                                                                        <?php echo $model->code;?>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </div>
                                                                                    
                                                                                    <div class="control-group <?php echo ( $model->getError('corporation_name')  ? ' error' : 'success')?>">
                                                                                            <label class="control-label" for="corporation_name"><?php echo $form->labelEx($model,'corporation_name');?></label>

                                                                                            <div class="controls">
                                                                                                    <div class="span12">
                                                                                                            <!--<input type="email" name="email" id="email" class="span6" />-->
                                                                                                            <?php echo $form->textField($model,'corporation_name',array('id'=>'corporation_name'));?>
                                                                                                            <?php echo $form->error($model,'corporation_name',array('id'=>'corporation_name'));?>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </div>
                                                                                    
                                                                                    <div class="control-group <?php echo $model->hasErrors('contact')?'error':'success'?>">
                                                                                            <label class="control-label" for="contact"><?php echo $form->labelEx($model,'contact');?></label>

                                                                                            <div class="controls">
                                                                                                    <div class="span12">
                                                                                                            <!--<input type="email" name="email" id="email" class="span6" />-->
                                                                                                            <?php echo $form->textField($model,'contact',array('id'=>'contact'));?>
                                                                                                            <?php echo $form->error($model,'contact',array('id'=>'contact'));?>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </div>
                                                                                    
                                                                                    <div class="control-group <?php echo $model->hasErrors('address')?'error':'success'?>">
                                                                                            <label class="control-label" for="address"><?php echo $form->labelEx($model,'address');?></label>

                                                                                            <div class="controls">
                                                                                                    <div class="span12">
                                                                                                            <!--<input type="email" name="email" id="email" class="span6" />-->
                                                                                                            <?php echo $form->textField($model,'address',array('id'=>'address'));?>
                                                                                                            <?php echo $form->error($model,'address',array('id'=>'address'));?>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </div>
                                                                                    
                                                                                    <div class="control-group <?php echo $model->hasErrors('province_id')?'error':'success'?>">
                                                                                            <label class="control-label" for="province_id"><?php echo $form->labelEx($model,'province_id');?></label>

                                                                                            <div class="controls">
                                                                                                    <div class="span12">
                                                                                                        <?php 
                                                                                                            $province = CHtml::listData(Province::model()->findAll(array('order' => 'PROVINCE_NAME')), 'PROVINCE_ID', 'PROVINCE_NAME');
                                                                                                            echo $form->dropDownList($model, 'province_id', $province, array(
                                                                                                            'prompt' => '--กรุณาเลือกจังหวัด--',
                                                                                                            'ajax'=> array(
                                                                                                                    'type'=>'POST',
                                                                                                                    'url' => CController::createUrl('Btrader/UpdateAmphur'),
                                                                                                                    'update' => '#'.CHtml::activeID($model,'amphur_id')
                                                                                                                    )
                                                                                                            )); 
                                                                                                        ?>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </div>
                                                                                    
                                                                                    <div class="control-group <?php echo $model->hasErrors('amphur_id')?'error':'success'?>">
                                                                                            <label class="control-label" for="amphur_id"><?php echo $form->labelEx($model,'amphur_id');?></label>

                                                                                            <div class="controls">
                                                                                                    <div class="span12">
                                                                                                        <?php 
                                                                                                            $amphur= CHtml::listData(Amphur::model()->findAll('PROVINCE_ID=:PROVINCE_ID',array(':PROVINCE_ID'=>$model->province_id)),'AMPHUR_ID','AMPHUR_NAME');
                                                                                                            echo $form->dropDownList($model,'amphur_id',$amphur,array(
                                                                                                                'prompt'=>'--กรุณาเลือกอำเภอ--'
                                                                                                            )); 
                                                                                                        ?>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </div>
                                                                                    
                                                                                    <div class="control-group <?php echo $model->hasErrors('zipcode')?'error':'success'?>">
                                                                                            <label class="control-label" for="zipcode"><?php echo $form->labelEx($model,'zipcode');?></label>

                                                                                            <div class="controls">
                                                                                                    <div class="span12">
                                                                                                            <!--<input type="email" name="email" id="email" class="span6" />-->
                                                                                                            <?php echo $form->textField($model,'zipcode',array('id'=>'zipcode'));?>
                                                                                                            <?php echo $form->error($model,'zipcode',array('id'=>'zipcode'));?>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </div>
                                                                                    
                                                                                    <div class="control-group <?php echo $model->hasErrors('phone')?'error':'success'?>">
                                                                                            <label class="control-label" for="phone"><?php echo $form->labelEx($model,'phone');?></label>

                                                                                            <div class="controls">
                                                                                                    <div class="span12">
                                                                                                            <!--<input type="email" name="email" id="email" class="span6" />-->
                                                                                                            <?php echo $form->textField($model,'phone',array('id'=>'phone'));?>
                                                                                                            <?php echo $form->error($model,'phone',array('id'=>'phone'));?>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                    
                                                                                    <div class="control-group <?php echo $model->hasErrors('fax')?'error':'success'?>">
                                                                                            <label class="control-label" for="fax"><?php echo $form->labelEx($model,'fax');?></label>

                                                                                            <div class="controls">
                                                                                                    <div class="span12">
                                                                                                            <!--<input type="email" name="email" id="email" class="span6" />-->
                                                                                                            <?php echo $form->textField($model,'fax',array('id'=>'fax'));?>
                                                                                                            <?php echo $form->error($model,'fax',array('id'=>'fax'));?>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </div>
                                                                                    
                                                                                    <div class="control-group <?php echo $model->hasErrors('email')?'error':'success'?>">
                                                                                            <label class="control-label" for="email"><?php echo $form->labelEx($model,'email');?></label>

                                                                                            <div class="controls">
                                                                                                    <div class="span12">
                                                                                                            <!--<input type="email" name="email" id="email" class="span6" />-->
                                                                                                            <?php echo $form->textField($model,'email',array('id'=>'email'));?>
                                                                                                            <?php echo $form->error($model,'email',array('id'=>'email'));?>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </div>
                                                                                    
                                                                                    <div class="control-group <?php echo $model->hasErrors('website')?'error':'success'?>">
                                                                                            <label class="control-label" for="website"><?php echo $form->labelEx($model,'website');?></label>

                                                                                            <div class="controls">
                                                                                                    <div class="span12">
                                                                                                            <!--<input type="email" name="email" id="email" class="span6" />-->
                                                                                                            <?php echo $form->textField($model,'website',array('id'=>'website'));?>
                                                                                                            <?php echo $form->error($model,'website',array('id'=>'website'));?>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </div>
                                                                                    
                                                                                    <div class="control-group <?php echo $model->hasErrors('description')?'error':'success'?>">
                                                                                            <label class="control-label" for="description"><?php echo $form->labelEx($model,'description');?></label>

                                                                                            <div class="controls">
                                                                                                    <div class="span12">
                                                                                                            <!--<input type="email" name="email" id="email" class="span6" />-->
                                                                                                            <?php echo $form->textField($model,'description',array('id'=>'description'));?>
                                                                                                            <?php echo $form->error($model,'description',array('id'=>'description'));?>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </div>
                                                                                    
                                                                                    <div class="form-actions">
                                                                                        <?php echo CHtml::htmlButton('<i class="icon-ok bigger-110"></i>บันทึก',array('class'=>'btn btn-info','type'=>'submit'));?>
                                                                                    </div>
                                                                                    <?php $this->endWidget();?>
                                                                                        
                                                                                </div>
                                                                        </div><!--/widget-main-->
                                                                </div><!--/widget-body-->
                                                        </div>
                                                </div>
                                        </div>

                                </div><!--/.span-->
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
        
<?php //<!--page specific plugin scripts--> ?>


<?php //<!--inline scripts related to this page--> ?>

