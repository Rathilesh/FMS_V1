<?php
/* @var $this HRMessageController */
/* @var $model HRMessage */
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
		<?php echo $form->label($model,'LANGUAGE'); ?>
		<?php echo $form->textField($model,'LANGUAGE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TEXT'); ?>
		<?php echo $form->textField($model,'TEXT',array('size'=>60,'maxlength'=>2000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USAGE_COUNT'); ?>
		<?php echo $form->textField($model,'USAGE_COUNT'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->