<?php
/* @var $this PARTY_FLEXController */
/* @var $model PARTY_FLEX */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'party--flex-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'FLEX'); ?>
		<?php echo $form->textField($model,'FLEX',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'FLEX'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FLEX_VALUE'); ?>
		<?php echo $form->textField($model,'FLEX_VALUE',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'FLEX_VALUE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'REMARK'); ?>
		<?php echo $form->textField($model,'REMARK',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'REMARK'); ?>
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