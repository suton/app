<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */
$baseUrl=yii::app()->baseUrl;
$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>
    <section class="header_text sub">
        <img class="pageBanner" src="<?php echo $baseUrl;?>/images/pageBanner.png" alt="New products" >
        <h4><span>Login or Regsiter</span></h4>
        <?php
            foreach(Yii::app()->user->getFlashes() as $key => $message) {
                echo '<div class="alert alert-' . $key . '">' . $message . "</div>\n";
            }
        ?>
    </section>	
    <section class="main-content">				
        <div class="row">
            <div class="span5">					
                <h4 class="title"><span class="text"><strong>เข้าสู่ระบบ</strong> Loin Form</span></h4>
                    <?php $form=$this->beginWidget('CActiveForm', array(
                            'id'=>'login-form',
                            'enableClientValidation'=>true,
                            'clientOptions'=>array(
                                    'validateOnSubmit'=>true,
                            ),
                    )); ?>
                    <?php if($model->hasErrors()): ?>
                        <div class="alert alert-block alert-danger fade in">
                        <?php echo CHtml::errorSummary($model); ?>
                        </div>
                    <?php endif; ?>
                    <fieldset>
                        <div class="control-group">
                            <div class="controls">
                                <?php //echo $form->hiddenField($model,'id'); ?>
                                <?php echo $form->labelEx($model,'username'); ?>
                                <?php echo $form->textField($model,'username',array(
                                    'class'=>'input-xlarge',
                                    'placeholder'=>'กรุณากรอกชื่อผู้ใช้ของคุณ'
                                    ));?>
                                <?php //echo $form->error($model,'username',array('style'=>'color:red')); ?>
                            </div>
                        </div>
                        <div class="control-group">
                            <!--<label class="control-label">password</label>-->
                            <div class="controls">
                                <?php echo $form->labelEx($model,'password'); ?>
                                <?php 
                                    echo $form->passwordField($model,'password',array(
                                                'class'=>'input-xlarge',
                                                'placeholder'=>'กรุณากรอกรหัสผ่านของคุณ'
                                    ));
                                ?>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <?php echo $form->checkBox($model,'rememberMe'); ?>
                                <?php echo $form->label($model,'rememberMe'); ?>
                                <?php echo $form->error($model,'rememberMe'); ?>
                            </div>
                        </div>
                        <div class="control-group">
                            <?php echo CHtml::submitButton('Login',array('class'=>'btn btn-inverse large')); ?>
                            <hr>
                            <p class="reset">ลืมรหัสผ่าน / <a tabindex="4" href="#" title="Recover your username or password">Recover your username or password</a></p>
                        </div>
                    </fieldset>
                    <?php $this->endWidget(); ?>
            </div>
            <div class="span7">					
                <h4 class="title"><span class="text"><strong>ลงทะเบียน</strong> Free</span></h4>
                    <?php $form=$this->beginWidget('CActiveForm', array(
                                'id'=>'register-form',
                                'enableClientValidation'=>true,
                                'enableAjaxValidation'=>true,
                                'clientOptions'=>array(
                                        'validateOnSubmit'=>true,
                                ),
                                'action'=>array('site/register')
                    )); ?>
                    
                    <div class="control-group">
                        <div class="controls">
                            <?php echo $form->labelEx($modelRegis,'username'); ?>
                            <?php echo $form->textField($modelRegis,'username',array(
                                'class'=>'input-xlarge',
                                'placeholder'=>'กรุณากรอกชื่อผู้ใช้ของคุณ',
                                ));?>
                            <?php echo $form->error($modelRegis,'username',array('style'=>'color:red')); ?>
                            
                            <?php echo $form->labelEx($modelRegis,'password'); ?>
                            <?php 
                                echo $form->passwordField($modelRegis,'password',array(
                                                'class'=>'input-xlarge',
                                                'placeholder'=>'กรุณากรอกรหัสผ่านของคุณ'
                                    ));
                            ?>
                            <?php echo $form->error($modelRegis,'password',array('style'=>'color:red')); ?>
                            
                            <?php echo $form->labelEx($modelRegis,'repeatpassword'); ?>
                            <?php 
                                echo $form->passwordField($modelRegis,'repeatpassword',array(
                                            'class'=>'input-xlarge',
                                            'placeholder'=>'ยืนยันรหัสผ่าน'
                                ));
                            ?>
                            <?php echo $form->error($modelRegis,'repeatpassword',array('style'=>'color:red')); ?>
                            
                            <?php echo $form->labelEx($modelRegis,'fname'); ?>
                            <?php echo $form->textField($modelRegis,'fname',array(
                                'class'=>'input-xlarge',
                                'placeholder'=>'กรุณากรอกชื่อของคุณ'
                                ));?>
                            <?php echo $form->error($modelRegis,'fname',array('style'=>'color:red')); ?>
                            
                            <?php echo $form->labelEx($modelRegis,'lname'); ?>
                            <?php echo $form->textField($modelRegis,'lname',array(
                                'class'=>'input-xlarge',
                                'placeholder'=>'กรุณากรอกนามสกุลของคุณ'
                                ));?>
                            <?php echo $form->error($modelRegis,'lname',array('style'=>'color:red')); ?>
                            
                            <?php echo $form->labelEx($modelRegis,'tel'); ?>
                            <?php echo $form->textField($modelRegis,'tel',array(
                                'class'=>'input-xlarge',
                                'placeholder'=>'กรุณากรอกเบอร์โทรศัพท์ของคุณ'
                                ));?>
                            <?php echo $form->error($modelRegis,'tel',array('style'=>'color:red')); ?>
                            
                            <?php echo $form->labelEx($modelRegis,'email'); ?>
                            <?php echo $form->textField($modelRegis,'email',array(
                                'class'=>'input-xlarge',
                                'placeholder'=>'กรุณากรอกอีเมลล์ของคุณ'
                                ));?>
                            <?php echo $form->error($modelRegis,'email',array('style'=>'color:red')); ?>
                            
                            <?php echo $form->labelEx($modelRegis,'sex'); ?>
                            <?php echo $form->radioButtonList($modelRegis,'sex',array(
                                'f'=>'ผู้หญิง',
                                'm'=>'ผู้ชาย'
                                ));?>
                            <?php echo $form->error($modelRegis,'sex',array('style'=>'color:red')); ?>
                           
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <?php echo CHtml::submitButton('Register',array('class'=>'btn btn-inverse large')); ?>
                        </div>
                    </div>
                    <?php $this->endWidget(); ?>
            </div>				
        </div>
    </section>	

