<?php
/* @var $this HelpController */
/* @var $model Help */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'help-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'LANGUAGE'); ?>
		<?php echo $form->textField($model,'LANGUAGE'); ?>
		<?php echo $form->error($model,'LANGUAGE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ABOUT'); ?>
		<?php echo $form->textField($model,'ABOUT',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ABOUT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TITLE'); ?>
		<?php echo $form->textField($model,'TITLE',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'TITLE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DESCRIPTION'); ?>
		<?php echo $form->textField($model,'DESCRIPTION',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'DESCRIPTION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TAG'); ?>
		<?php echo $form->textField($model,'TAG',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'TAG'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->