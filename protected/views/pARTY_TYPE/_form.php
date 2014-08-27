<?php
/* @var $this PARTY_TYPEController */
/* @var $model PARTY_TYPE */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'party--type-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'PARTY_TYPE'); ?>
		<?php echo $form->textField($model,'PARTY_TYPE',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'PARTY_TYPE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'WEF'); ?>
		<?php echo $form->textField($model,'WEF'); ?>
		<?php echo $form->error($model,'WEF'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'WET'); ?>
		<?php echo $form->textField($model,'WET'); ?>
		<?php echo $form->error($model,'WET'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PARTY_ID'); ?>
		<?php echo $form->textField($model,'PARTY_ID'); ?>
		<?php echo $form->error($model,'PARTY_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->