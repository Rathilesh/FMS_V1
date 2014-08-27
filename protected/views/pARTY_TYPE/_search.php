<?php
/* @var $this PARTY_TYPEController */
/* @var $model PARTY_TYPE */
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
		<?php echo $form->label($model,'PARTY_TYPE'); ?>
		<?php echo $form->textField($model,'PARTY_TYPE',array('size'=>50,'maxlength'=>50)); ?>
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
		<?php echo $form->label($model,'PARTY_ID'); ?>
		<?php echo $form->textField($model,'PARTY_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->