            <?php $form=$this->beginWidget('CActiveForm', array(
                                'id'=>'p-form',
                                'enableClientValidation'=>true,
                                'clientOptions'=>array(
                                        'validateOnSubmit'=>true,
                                ))); 
            ?>
              <?php echo $form->textField($model,'fname',array(
                                'class'=>'input-xlarge',
                                'placeholder'=>'กรุณากรอกชื่อผู้ใช้ของคุณ'
                                ));?>
            <?php echo CHtml::submitButton('Register',array('class'=>'btn btn-inverse large')); ?>
            <?php
                        $this->endWidget();;
            ?>