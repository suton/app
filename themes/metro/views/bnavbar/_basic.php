<?php

/**
 * Description of _basic
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
?>
<?php $form=$this->beginWidget('CActiveForm',array(
    'id'=>'basicForm',
    'enableClientValidation'=>true,
    'clientOptions'=>array(
      'validateOnSubmit'=>true,
    ),
    'htmlOptions'=>array('class'=>'form-horizontal'),
    'action'=>array('bnavbar/basic')
));
?>
<h4 class="header blue bolder smaller">General</h4>

<div class="row-fluid">

        <div class="span8">
                <div class="control-group">
                        <label class="control-label" for="form-field-username">Username</label>

                        <div class="controls">
                                <?php  echo $form->textField($modelUser,'username',array('id'=>'form-field-username','readonly'=>'true')); ?>
                        </div>
                </div>

                <div class="control-group <?php echo ($modelUser->hasErrors('fname')||$modelUser->hasErrors('lname'))?'error':'success';?>">
                        <label class="control-label" for="form-field-first">Name</label>

                        <div class="controls">
                                <!--<input class="input-small" type="text" id="form-field-first" placeholder="First Name" value="Alex" />-->
                                <?php  echo $form->textField($modelUser,'fname',array('id'=>'form-field-first','placeholder'=>'First Name','class'=>'input-small','errorCssClass'=>'error')); ?>
                                <!--<input class="input-small" type="text" id="form-field-last" placeholder="Last Name" value="Doe" />-->
                                <?php  echo $form->textField($modelUser,'lname',array('id'=>'form-field-last','placeholder'=>'Last Name','class'=>'input-small')); ?>
                        </div>
                </div>
        </div>
</div>

<hr />

<div class="control-group">
        <label class="control-label" for="form-field-date">Birth Date</label>

        <div class="controls">
                <div class="input-append">
                        <!--<input class="input-small date-picker" id="form-field-date" type="text" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" />-->
                        <?php echo $form->textField($modelUser,'birthdate',array('class'=>'input-small date-picker','id'=>'form-field-date','data-date-format'=>'dd-mm-yyyy','placeholder'=>'dd-mm-yyyy')); ?>
                        <span class="add-on">
                                <i class="icon-calendar"></i>
                        </span>
                </div>
        </div>
</div>

<div class="control-group">
        <label class="control-label">Gender</label>

        <div class="controls">
            <?php
                echo $form->radioButtonList($modelUser,'sex',
                        array(
                            'f'=>'หญิง',
                            'm'=>'ชาย',
                        ),
                        array(
                            'labelOptions'=>array('style'=>'display:inline'), // add this code
                            'template' => '{input}<span class="lbl">{label}</span>', // put the label behind
                            'separator'=>'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp',
                        )
                    );
            ?>
        </div>
</div>

<div class="control-group">
        <label class="control-label" for="form-field-comment">Comment</label>

        <div class="controls">
                <!--<textarea id="form-field-comment"></textarea>-->
                <?php echo $form->textArea($modelUser->userinfo,'comment',array('id'=>'form-field-comment'));?>
        </div>
</div>

<div class="space"></div>
<h4 class="header blue bolder smaller">Contact</h4>

<div class="control-group <?php echo ($modelUser->hasErrors('email'))?'error':'success';?>">
        <label class="control-label" for="form-field-email">Email</label>

        <div class="controls">
                <span class="input-icon input-icon-right">
                        <?php  echo $form->textField($modelUser,'email',array('id'=>'form-field-email','placeholder'=>'email')); ?>
                        <i class="icon-envelope"></i>
                </span>
        </div>
</div>

<div class="control-group">
        <label class="control-label" for="form-field-website">Website</label>

        <div class="controls">
                <span class="input-icon input-icon-right">
                        <!--<input type="url" id="form-field-website" value="http://www.alexdoe.com/" />-->
                        <?php echo $form->textField($modelUser->userinfo,'website',array('id'=>'form-field-website')); ?>
                        <i class="icon-globe"></i>
                </span>
        </div>
</div>

<div class="control-group <?php echo ($modelUser->hasErrors('tel'))?'error':'success';?>">
        <label class="control-label" for="form-field-phone">Phone</label>

        <div class="controls">
                <span class="input-icon input-icon-right">
                        <!--<input class="input-medium input-mask-phone" type="text" id="form-field-phone" />-->
                        <?php  echo $form->textField($modelUser,'tel',array('id'=>'form-field-phone','class'=>'input-medium input-mask-phone')); ?>
                        <i class="icon-phone icon-flip-horizontal"></i>
                </span>
        </div>
</div>

<div class="space"></div>
<h4 class="header blue bolder smaller">Social</h4>

<div class="control-group">
        <label class="control-label" for="form-field-facebook">Facebook</label>

        <div class="controls">
                <span class="input-icon">
                        <!--<input type="text" value="facebook_alexdoe" id="form-field-facebook" />-->
                        <?php echo $form->textField($modelUser->userinfo,'facebook',array('id'=>'form-field-facebook')); ?>
                        <i class="icon-facebook"></i>
                </span>
        </div>
</div>

<div class="control-group">
        <label class="control-label" for="form-field-twitter">Twitter</label>

        <div class="controls">
                <span class="input-icon">
                        <!--<input type="text" value="twitter_alexdoe" id="form-field-twitter" />-->
                        <?php echo $form->textField($modelUser->userinfo,'twitter',array('id'=>'form-field-twitter')); ?>
                        <i class="icon-twitter"></i>
                </span>
        </div>
</div>

<div class="control-group">
        <label class="control-label" for="form-field-gplus">Google+</label>

        <div class="controls">
                <span class="input-icon">
                        <!--<input type="text" value="google_alexdoe" id="form-field-gplus" />-->
                        <?php echo $form->textField($modelUser->userinfo,'googleplus',array('id'=>'form-field-form-field-gplus')); ?>
                        <i class="icon-google-plus"></i>
                </span>
        </div>
</div>
<div class="form-actions">
<!--                                                                        <button class="btn btn-info" type="submit">
        <i class="icon-ok bigger-110"></i>
        Save
    </button>-->
    <?php echo CHtml::htmlButton('<i class="icon-ok bigger-110"></i>Save',array('class'=>'btn btn-info','type'=>'submit'));?>
</div>
<?php $this->endWidget();//end basicForm?>
