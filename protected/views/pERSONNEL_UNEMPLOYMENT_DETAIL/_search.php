<?php
/* @var $this PERSONNEL_UNEMPLOYMENT_DETAILController */
/* @var $model PERSONNEL_UNEMPLOYMENT_DETAIL */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'PUD_EU_ORGN_CODE'); ?>
		<?php echo $form->textField($model,'PUD_EU_ORGN_CODE',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PUD_UNIT_CODE'); ?>
		<?php echo $form->textField($model,'PUD_UNIT_CODE',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PUD_PER_NO'); ?>
		<?php echo $form->textField($model,'PUD_PER_NO',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PUD_FROM_MONTH'); ?>
		<?php echo $form->textField($model,'PUD_FROM_MONTH',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PUD_FROM_YEAR'); ?>
		<?php echo $form->textField($model,'PUD_FROM_YEAR'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PUD_TO_MONTH'); ?>
		<?php echo $form->textField($model,'PUD_TO_MONTH',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PUD_TO_YEAR'); ?>
		<?php echo $form->textField($model,'PUD_TO_YEAR'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PUD_ACTIVITY_DURING_PERIOD'); ?>
		<?php echo $form->textField($model,'PUD_ACTIVITY_DURING_PERIOD',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PUD_NAME_OF_CONFIRMING_PARTY'); ?>
		<?php echo $form->textField($model,'PUD_NAME_OF_CONFIRMING_PARTY',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PUD_ADDR_OF_CONFIRMING_PARTY'); ?>
		<?php echo $form->textField($model,'PUD_ADDR_OF_CONFIRMING_PARTY',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PUD_TELEPHONE_NO'); ?>
		<?php echo $form->textField($model,'PUD_TELEPHONE_NO',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PUD_EMAIL_ID'); ?>
		<?php echo $form->textField($model,'PUD_EMAIL_ID',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PUD_ENTERED_BY_PER_NO'); ?>
		<?php echo $form->textField($model,'PUD_ENTERED_BY_PER_NO',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PUD_ENTERED_DATE'); ?>
		<?php echo $form->textField($model,'PUD_ENTERED_DATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PUD_APPROVED_BY_PER_NO'); ?>
		<?php echo $form->textField($model,'PUD_APPROVED_BY_PER_NO',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PUD_APPROVED_DATE'); ?>
		<?php echo $form->textField($model,'PUD_APPROVED_DATE'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->