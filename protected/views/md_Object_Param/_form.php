<?php
/* @var $this Md_Object_ParamController */
/* @var $model Md_Object_Param */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'md--object--param-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'MMO_ID'); ?>
		<?php echo $form->textField($model,'MMO_ID'); ?>
		<?php echo $form->error($model,'MMO_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PARAM_NAME'); ?>
		<?php echo $form->textField($model,'PARAM_NAME',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'PARAM_NAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PARAM_VALUE'); ?>
		<?php echo $form->textField($model,'PARAM_VALUE',array('size'=>60,'maxlength'=>254)); ?>
		<?php echo $form->error($model,'PARAM_VALUE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DESCRIPTION'); ?>
		<?php echo $form->textField($model,'DESCRIPTION',array('size'=>60,'maxlength'=>254)); ?>
		<?php echo $form->error($model,'DESCRIPTION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DATA_TYPE'); ?>
		<?php echo $form->textField($model,'DATA_TYPE',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'DATA_TYPE'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->