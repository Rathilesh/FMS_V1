<?php
/* @var $this Generic_FlexController */
/* @var $model Generic_Flex */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'generic--flex-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'TABLE_ID'); ?>
		<?php echo $form->textField($model,'TABLE_ID',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'TABLE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FILED_SEQUENCE'); ?>
		<?php echo $form->textField($model,'FILED_SEQUENCE'); ?>
		<?php echo $form->error($model,'FILED_SEQUENCE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FILED_TITLE'); ?>
		<?php echo $form->textField($model,'FILED_TITLE',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'FILED_TITLE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DATA_TYPE'); ?>
		<?php echo $form->textField($model,'DATA_TYPE',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'DATA_TYPE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MAX_LENGTH'); ?>
		<?php echo $form->textField($model,'MAX_LENGTH'); ?>
		<?php echo $form->error($model,'MAX_LENGTH'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CANVAS'); ?>
		<?php echo $form->textField($model,'CANVAS',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'CANVAS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'XCORDINATE'); ?>
		<?php echo $form->textField($model,'XCORDINATE'); ?>
		<?php echo $form->error($model,'XCORDINATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'YCORDINATE'); ?>
		<?php echo $form->textField($model,'YCORDINATE'); ?>
		<?php echo $form->error($model,'YCORDINATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IS_REQUIRED'); ?>
		<?php echo $form->textField($model,'IS_REQUIRED',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'IS_REQUIRED'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->