<?php
/* @var $this Generic_Flex_ValueController */
/* @var $model Generic_Flex_Value */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'generic--flex--value-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'RECORD_ID'); ?>
		<?php echo $form->textField($model,'RECORD_ID',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'RECORD_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FLEX_VALUE'); ?>
		<?php echo $form->textField($model,'FLEX_VALUE',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'FLEX_VALUE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GFLEX_ID'); ?>
		<?php echo $form->textField($model,'GFLEX_ID'); ?>
		<?php echo $form->error($model,'GFLEX_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->