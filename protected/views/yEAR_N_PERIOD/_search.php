<?php
/* @var $this YEAR_N_PERIODController */
/* @var $model YEAR_N_PERIOD */
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
		<?php echo $form->textField($model,'SHORT_NAME',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'START_DATE'); ?>
		<?php echo $form->textField($model,'START_DATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'END_DATE'); ?>
		<?php echo $form->textField($model,'END_DATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PERIOD_TYPE'); ?>
		<?php echo $form->textField($model,'PERIOD_TYPE',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'YNP_ID'); ?>
		<?php echo $form->textField($model,'YNP_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ENTITY_ID'); ?>
		<?php echo $form->textField($model,'ENTITY_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->