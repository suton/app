<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Account';
$this->breadcrumbs=array(
	'Account',
);
?>
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
            <?php $form=$this->beginWidget('CActiveForm', array(
                                'id'=>'register-form',
                                'enableClientValidation'=>true,
                                'clientOptions'=>array(
                                        'validateOnSubmit'=>true,
                                ))); 
            ?>
            <div class="span5">	
                <h4 class="title"><span class="text"><strong>หอพักรหัส</strong> <?php echo $model->code; ?></span></h4>
                <div class="control-group">
                        <?php echo $form->hiddenField($model,'id'); ?>
                         
                        <?php echo $form->labelEx($model,'apartmentname'); ?>
                        <?php echo $form->textField($model,'apartmentname'); ?>
                        <?php echo $form->error($model,'apartmentname'); ?>

                        <?php echo $form->labelEx($model,'address'); ?>
                        <?php echo $form->textField($model,'address'); ?>
                        <?php echo $form->error($model,'address'); ?>

                        <?php echo $form->labelEx($model,'province_id'); ?>
                        <?php 
                            $province = CHtml::listData(Province::model()->findAll(array('order' => 'PROVINCE_NAME')), 'PROVINCE_ID', 'PROVINCE_NAME');
                            echo $form->dropDownList($model, 'province_id', $province, array(
                            'prompt' => '--กรุณาเลือกจังหวัด--',
                            'ajax'=> array(
                                    'type'=>'POST',
                                    'url' => CController::createUrl('Apartment/UpdateAmphur'),
                                    'update' => '#'.CHtml::activeID($model,'amphur_id')
                                    )
                            ));  
                        ?>
                        <?php echo $form->error($model,'province_id'); ?>

                        <?php echo $form->labelEx($model,'amphur_id'); ?>
                        <?php
                            $amphur= CHtml::listData(Amphur::model()->findAll('PROVINCE_ID=:PROVINCE_ID',array(':PROVINCE_ID'=>$model->province_id)),'AMPHUR_ID','AMPHUR_NAME');
                            echo $form->dropDownList($model,'amphur_id',$amphur,array(
                                'prompt'=>'--กรุณาเลือกอำเภอ--'
                            )); 
                        ?>  
                        <?php echo $form->error($model,'amphur_id'); ?>

                        <?php echo $form->labelEx($model,'zipcode'); ?>
                        <?php echo $form->textField($model,'zipcode'); ?>
                        <?php echo $form->error($model,'zipcode'); ?>

                        <?php echo $form->labelEx($model,'phone'); ?>
                        <?php echo $form->textField($model,'phone'); ?>
                        <?php echo $form->error($model,'phone'); ?>
                        
                        <?php echo $form->labelEx($model,'fax'); ?>
                        <?php echo $form->textField($model,'fax'); ?>
                        <?php echo $form->error($model,'fax'); ?>
                </div>                
            </div>	
            <div class="span7">
                <h4 class="title"><span class="text"><strong></strong> </span></h4>
                <div class="control-group">
                   
                    <?php echo $form->labelEx($model,'email'); ?>
                    <?php echo $form->textField($model,'email'); ?>
                    <?php echo $form->error($model,'email'); ?>

                    <?php echo $form->labelEx($model,'website'); ?>
                    <?php echo $form->textField($model,'website'); ?>
                    <?php echo $form->error($model,'website'); ?>

                    <?php echo $form->labelEx($model,'contact'); ?>
                    <?php echo $form->textField($model,'contact'); ?>
                    <?php echo $form->error($model,'contact'); ?>

                    <?php echo $form->labelEx($model,'description'); ?>
                    <?php echo $form->textField($model,'description'); ?>
                    <?php echo $form->error($model,'description'); ?>

                    <?php echo $form->labelEx($model,'rent_max'); ?>
                    <?php echo $form->textField($model,'rent_max'); ?>
                    <?php echo $form->error($model,'rent_max'); ?>

                    <?php echo $form->labelEx($model,'rent_min'); ?>
                    <?php echo $form->textField($model,'rent_min'); ?>
                    <?php echo $form->error($model,'rent_min'); ?>
                </div>
                <div class="control-group">
                        <?php echo CHtml::submitButton('Register',array('class'=>'btn btn-inverse large')); ?>
                </div>
            </div>
            <?php $this->endWidget(); ?>
        </div>
    </section>	


