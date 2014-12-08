<section class="header_text sub">
    <img class="pageBanner" src="images/pageBanner.png" alt="New products" >
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
            <h4 class="title"><span class="text"><strong>เข้าสู่ระบบ</strong> Form</span></h4>
            <?php echo CHtml::form(array("site/CheckLogin")); ?>
                <input type="hidden" name="next" value="/">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label">Username</label>
                        <div class="controls">
                            <input type="text" placeholder="กรุณากรอกชื่อผู้ใช้ของคุณ" id="username" class="input-xlarge" name="username">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Username</label>
                        <div class="controls">
                            <input type="password" placeholder="กรุณากรอกรหัสผ่านของคุณ" id="password" class="input-xlarge" name="password">
                        </div>
                    </div>
                    <div class="control-group">
                        <input tabindex="3" class="btn btn-inverse large" type="submit" value="Sign into your account">
                        <hr>
                        <p class="reset">Recover your <a tabindex="4" href="#" title="Recover your username or password">username or password</a></p>
                    </div>
                </fieldset>
            <?php echo CHtml::endForm(); ?>
        </div>
        <div class="span7">					
            <h4 class="title"><span class="text"><strong>ลงทะเบียน</strong> ฟรี</span></h4>
            <?php
                $form=$this->beginWidget('CActiveForm',array(
                            'id'=>'register_form',
                            'enableAjaxValidation'=>true,
                            'action'=>array('site/register')
                ));
            ?>
                <fieldset>
                    <div class="control-group">
                        <?php echo $form->labelEx($user,"username",array('class'=>'control-label'));?>
                        <div class="controls">
                            <?php echo $form->textField($user,"username",array('class'=>'input-xlarge','placeholder'=>'กรอกชื่อผู้ใช้ของคุณ')); ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <?php echo $form->labelEx($user,"email",array('class'=>'control-label'));?>
                        <div class="controls">
                            <?php echo $form->textField($user,"email",array('class'=>'input-xlarge','placeholder'=>'กรุณากรอกอีเมลล์')); ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <?php echo $form->labelEx($user,"password"); ?>
                        <div class="controls">
                            <?php echo $form->passwordField($user,"password",array('class'=>'input-xlarge','placeholder'=>'กรอกรหัสผ่าน')); ?>
                        </div>
                    </div>							                            
                    <div class="control-group">
                        <p>ลงทะเบียนใช้งานกับ mk apartment เว็บไซต์ที่ดีที่สุดสำหรับผู้ประกอบกิจการหอพักฟรี</p>
                    </div>
                    <hr>
                    <div class="actions">
                        <?php echo CHtml::submitButton('สร้างบัญชีผู้ใช้ของคุณ',array('class'=>'btn btn-inverse large','tabindex'=>'9')); ?>
                    </div>
                </fieldset>
            <?php $this->endWidget();?>					
        </div>				
    </div>
</section>			