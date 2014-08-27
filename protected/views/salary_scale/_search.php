<?php
/* @var $this Salary_scaleController */
/* @var $model Salary_scale */
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
		<?php echo $form->label($model,'SHORT_NAME'); ?>
		<?php echo $form->textField($model,'SHORT_NAME',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'START_AMOUNT'); ?>
		<?php echo $form->textField($model,'START_AMOUNT'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'END_AMOUNT'); ?>
		<?php echo $form->textField($model,'END_AMOUNT'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'WEF'); ?>
		<?php echo $form->textField($model,'WEF'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'WET'); ?>
		<?php echo $form->textField($model,'WET'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'POST_ID'); ?>
		<?php echo $form->textField($model,'POST_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GRADE_ID'); ?>
		<?php echo $form->textField($model,'GRADE_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->