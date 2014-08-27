<?php
/* @var $this SALARY_SCALE_DTLController */
/* @var $model SALARY_SCALE_DTL */
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
		<?php echo $form->label($model,'NOTCH'); ?>
		<?php echo $form->textField($model,'NOTCH'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EFFECIENCY_BAR'); ?>
		<?php echo $form->textField($model,'EFFECIENCY_BAR'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'STAGE_AMOUNT'); ?>
		<?php echo $form->textField($model,'STAGE_AMOUNT'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SALDTL_INCREMENT'); ?>
		<?php echo $form->textField($model,'SALDTL_INCREMENT'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SALARY_ID'); ?>
		<?php echo $form->textField($model,'SALARY_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->