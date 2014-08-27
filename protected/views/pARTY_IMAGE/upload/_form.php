<?php
/* @var $this PARTY_IMAGEController */
/* @var $model PARTY_IMAGE */
/* @var $form CActiveForm */
?>
<?php if(Yii::app()->user->hasFlash('success')):?>
 <div class="msgouter">
        <div class="success_blue"> <div class="success_blue_icon"></div>
            <div class="success_blue_msg">
                <?php echo Yii::app()->user->getFlash('success'); ?>
            </div>
        </div>

 </div>


        <?php elseif(Yii::app()->user->hasFlash('Error')):?>
  <div class="msgouter">
        <div class="error_red"> <div class="error_red_icon"></div>
            <div class="error_red_msg">
            <?php echo Yii::app()->user->getFlash('Error'); ?>
            </div>
        </div>
  </div>

<?php endif; 
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'party--image-form',
	'enableAjaxValidation'=>false,
   'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'IMAGE_TYPE'); ?>
		<?php echo $form->textField($model,'IMAGE_TYPE',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'IMAGE_TYPE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IMAGE'); ?>
		<?php echo $form->fileField($model, 'IMAGE'); ?>
		<?php echo $form->error($model,'IMAGE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PRQ_ID'); ?>
		<?php echo $form->textField($model,'PRQ_ID'); ?>
		<?php echo $form->error($model,'PRQ_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PARTY_ID'); ?>
		<?php echo $form->textField($model,'PARTY_ID'); ?>
		<?php echo $form->error($model,'PARTY_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SCANNED_ON'); ?>
		<?php echo $form->textField($model,'SCANNED_ON'); ?>
		<?php echo $form->error($model,'SCANNED_ON'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->