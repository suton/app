<?php

/**
 * Description of _changepass
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
?>
<?php $form=$this->beginWidget('CActiveForm',array(
    'id'=>'changePassForm',
    'enableClientValidation'=>true,
    'clientOptions'=>array(
      'validateOnSubmit'=>true,
    ),
    'htmlOptions'=>array('class'=>'form-horizontal'),
    'action'=>array('bnavbar/changepass')
));?>
    <div class="space-10"></div>

    <div class="control-group <?php echo ($modelPass->hasErrors('currentPassword'))?'error':'success';?>">
            <label class="control-label" for="oldPass">Old Password</label>
            
            <div class="controls">
<!--                <input type="password" id="oldPass" name="oldPass"/>-->
                <?php echo $form->passwordField($modelPass,'currentPassword',array('id'=>'oldPass')); ?>
                <?php echo $form->error($modelPass,'currentPassword'); ?>
            </div>
    </div>

    <div class="control-group">
            <label class="control-label" for="newPass">New Password</label>

            <div class="controls">
                    <!--<input type="password" id="newPass" name="newPass"/>-->
                    <?php echo $form->passwordField($modelPass,'newPassword'); ?>
                    <?php echo $form->error($modelPass,'newPassword'); ?>
            </div>
    </div>

    <div class="control-group">
            <label class="control-label" for="confirmPass">Confirm Password</label>

            <div class="controls">
                    <!--<input type="password" id="confirmPass" name="confirmPass"/>-->
                    <?php echo $form->passwordField($modelPass,'newPassword_repeat'); ?>
                    <?php echo $form->error($modelPass,'newPassword_repeat'); ?>
            </div>
    </div>
    <div class="form-actions">
<!--                                                                        <button class="btn btn-info" type="submit">
            <i class="icon-ok bigger-110"></i>
            Save
        </button>-->
        <?php echo CHtml::htmlButton('<i class="icon-ok bigger-110"></i>Save',array('class'=>'btn btn-info','type'=>'submit'));?>
    </div>
<?php $this->endWidget();?>