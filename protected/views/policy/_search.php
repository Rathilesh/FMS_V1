<?php
/* @var $this PolicyController */
/* @var $model Policy */
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
		<?php echo $form->label($model,'DESCRIPTION'); ?>
		<?php echo $form->textField($model,'DESCRIPTION',array('size'=>60,'maxlength'=>2058)); ?>
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
		<?php echo $form->label($model,'POLICY_FUNCTION'); ?>
		<?php echo $form->textField($model,'POLICY_FUNCTION',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->