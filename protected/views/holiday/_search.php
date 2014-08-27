<?php
/* @var $this HolidayController */
/* @var $model Holiday */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID'); ?>
		<?php echo $form->textField($model,'ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HOLIDAY_DATE'); ?>
		<?php echo $form->textField($model,'HOLIDAY_DATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DESCRIPTION'); ?>
		<?php echo $form->textField($model,'DESCRIPTION',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IS_COMPULSORY'); ?>
		<?php echo $form->textField($model,'IS_COMPULSORY',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IS_RESTRICTED'); ?>
		<?php echo $form->textField($model,'IS_RESTRICTED',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DECLARATION_REFERENCE'); ?>
		<?php echo $form->textField($model,'DECLARATION_REFERENCE',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DATE_OF_DECLARATION'); ?>
		<?php echo $form->textField($model,'DATE_OF_DECLARATION'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CALD_ID'); ?>
		<?php echo $form->textField($model,'CALD_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->