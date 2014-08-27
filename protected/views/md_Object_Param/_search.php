<?php
/* @var $this Md_Object_ParamController */
/* @var $model Md_Object_Param */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'MMO_ID'); ?>
		<?php echo $form->textField($model,'MMO_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PARAM_NAME'); ?>
		<?php echo $form->textField($model,'PARAM_NAME',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PARAM_VALUE'); ?>
		<?php echo $form->textField($model,'PARAM_VALUE',array('size'=>60,'maxlength'=>254)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DESCRIPTION'); ?>
		<?php echo $form->textField($model,'DESCRIPTION',array('size'=>60,'maxlength'=>254)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DATA_TYPE'); ?>
		<?php echo $form->textField($model,'DATA_TYPE',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID'); ?>
		<?php echo $form->textField($model,'ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->