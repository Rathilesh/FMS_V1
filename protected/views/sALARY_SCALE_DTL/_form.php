<?php
/* @var $this SALARY_SCALE_DTLController */
/* @var $model SALARY_SCALE_DTL */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'salary--scale--dtl-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NOTCH'); ?>
		<?php echo $form->textField($model,'NOTCH'); ?>
		<?php echo $form->error($model,'NOTCH'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EFFECIENCY_BAR'); ?>
		<?php echo $form->textField($model,'EFFECIENCY_BAR'); ?>
		<?php echo $form->error($model,'EFFECIENCY_BAR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'STAGE_AMOUNT'); ?>
		<?php echo $form->textField($model,'STAGE_AMOUNT'); ?>
		<?php echo $form->error($model,'STAGE_AMOUNT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SALDTL_INCREMENT'); ?>
		<?php echo $form->textField($model,'SALDTL_INCREMENT'); ?>
		<?php echo $form->error($model,'SALDTL_INCREMENT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SALARY_ID'); ?>
		<?php echo $form->textField($model,'SALARY_ID'); ?>
		<?php echo $form->error($model,'SALARY_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->