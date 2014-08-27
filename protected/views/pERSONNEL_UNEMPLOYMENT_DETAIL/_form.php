<?php
/* @var $this PERSONNEL_UNEMPLOYMENT_DETAILController */
/* @var $model PERSONNEL_UNEMPLOYMENT_DETAIL */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'personnel--unemployment--detail-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'PUD_EU_ORGN_CODE'); ?>
		<?php echo $form->textField($model,'PUD_EU_ORGN_CODE',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'PUD_EU_ORGN_CODE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PUD_PER_NO'); ?>
		<?php echo $form->textField($model,'PUD_PER_NO',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'PUD_PER_NO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PUD_FROM_MONTH'); ?>
		<?php echo $form->textField($model,'PUD_FROM_MONTH',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'PUD_FROM_MONTH'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PUD_FROM_YEAR'); ?>
		<?php echo $form->textField($model,'PUD_FROM_YEAR'); ?>
		<?php echo $form->error($model,'PUD_FROM_YEAR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PUD_TO_MONTH'); ?>
		<?php echo $form->textField($model,'PUD_TO_MONTH',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'PUD_TO_MONTH'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PUD_TO_YEAR'); ?>
		<?php echo $form->textField($model,'PUD_TO_YEAR'); ?>
		<?php echo $form->error($model,'PUD_TO_YEAR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PUD_ACTIVITY_DURING_PERIOD'); ?>
		<?php echo $form->textField($model,'PUD_ACTIVITY_DURING_PERIOD',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'PUD_ACTIVITY_DURING_PERIOD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PUD_NAME_OF_CONFIRMING_PARTY'); ?>
		<?php echo $form->textField($model,'PUD_NAME_OF_CONFIRMING_PARTY',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'PUD_NAME_OF_CONFIRMING_PARTY'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PUD_ADDR_OF_CONFIRMING_PARTY'); ?>
		<?php echo $form->textField($model,'PUD_ADDR_OF_CONFIRMING_PARTY',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'PUD_ADDR_OF_CONFIRMING_PARTY'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PUD_TELEPHONE_NO'); ?>
		<?php echo $form->textField($model,'PUD_TELEPHONE_NO',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'PUD_TELEPHONE_NO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PUD_EMAIL_ID'); ?>
		<?php echo $form->textField($model,'PUD_EMAIL_ID',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'PUD_EMAIL_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PUD_ENTERED_BY_PER_NO'); ?>
		<?php echo $form->textField($model,'PUD_ENTERED_BY_PER_NO',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'PUD_ENTERED_BY_PER_NO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PUD_ENTERED_DATE'); ?>
		<?php echo $form->textField($model,'PUD_ENTERED_DATE'); ?>
		<?php echo $form->error($model,'PUD_ENTERED_DATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PUD_APPROVED_BY_PER_NO'); ?>
		<?php echo $form->textField($model,'PUD_APPROVED_BY_PER_NO',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'PUD_APPROVED_BY_PER_NO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PUD_APPROVED_DATE'); ?>
		<?php echo $form->textField($model,'PUD_APPROVED_DATE'); ?>
		<?php echo $form->error($model,'PUD_APPROVED_DATE'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->