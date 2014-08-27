<?php
/* @var $this BASIC_DEFINITIONController */
/* @var $model BASIC_DEFINITION */
/* @var $form CActiveForm */
?>
  
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'basic--definition-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'SHORT_NAME'); ?>
		<?php echo $form->textField($model,'SHORT_NAME',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'SHORT_NAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DESCRIPTION'); ?>
		<?php echo $form->textField($model,'DESCRIPTION',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'DESCRIPTION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DFCTG_DEFINITION_TYPE'); ?>
		<?php echo $form->textField($model,'DFCTG_DEFINITION_TYPE',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'DFCTG_DEFINITION_TYPE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ENTITY_ID'); ?>
		<?php echo $form->textField($model,'ENTITY_ID'); ?>
		<?php echo $form->error($model,'ENTITY_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->