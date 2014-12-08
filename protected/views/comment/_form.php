
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comment-form',

)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>
        <?php echo $form->errorSummary($model);  ?>
        <div class="col-md-6 margin-15">
            <div class="form-group">
                
                <?php echo $form->textField($model,'author',array(
                    'placeholder'=>'author*',
                    'class'=>'form-control input-lg')); 
                ?>
            </div>

            <div class="form-group">
                <?php echo $form->textField($model,'email',array(
                    'placeholder'=>'email*',
                    'class'=>'form-control input-lg')); 
                ?>
            </div>
            
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Save',array('class'=>'btn btn-primary')); ?>
        </div>
        
        <div class="col-md-6">
            <div class="form-group">
                <?php echo $form->textArea($model,'content',array(
                    'rows'=>4,
                    'cols'=>6,
                    'placeholder'=>'content*',
                    'class'=>'form-control input-lg')); 
                ?>
            </div>
        </div>
        

<?php $this->endWidget(); ?>
