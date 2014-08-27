<?php
/* @var $this PARTY_IMAGEController */
/* @var $model PARTY_IMAGE */
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
		<?php echo $form->label($model,'IMAGE_TYPE'); ?>
		<?php echo $form->textField($model,'IMAGE_TYPE',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IMAGE'); ?>
		<?php echo $form->textField($model,'IMAGE',array('size'=>60,'maxlength'=>4000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PRQ_ID'); ?>
		<?php echo $form->textField($model,'PRQ_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PARTY_ID'); ?>
		<?php echo $form->textField($model,'PARTY_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SCANNED_ON'); ?>
		<?php echo $form->textField($model,'SCANNED_ON'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->