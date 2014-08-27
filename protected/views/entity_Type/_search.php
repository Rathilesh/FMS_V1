<?php
/* @var $this Entity_TypeController */
/* @var $model Entity_Type */
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
		<?php echo $form->label($model,'ENTITY_TYPE'); ?>
		<?php echo $form->textField($model,'ENTITY_TYPE',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ENTITY_LEVEL'); ?>
		<?php echo $form->textField($model,'ENTITY_LEVEL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IS_LOCATION'); ?>
		<?php echo $form->textField($model,'IS_LOCATION',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IS_FUNCTION'); ?>
		<?php echo $form->textField($model,'IS_FUNCTION',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IS_POSITION'); ?>
		<?php echo $form->textField($model,'IS_POSITION',array('size'=>1,'maxlength'=>1)); ?>
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