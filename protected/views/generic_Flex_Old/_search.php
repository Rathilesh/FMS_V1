<?php
/* @var $this Generic_FlexController */
/* @var $model Generic_Flex */
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
		<?php echo $form->label($model,'TABLE_ID'); ?>
		<?php echo $form->textField($model,'TABLE_ID',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FILED_SEQUENCE'); ?>
		<?php echo $form->textField($model,'FILED_SEQUENCE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FILED_TITLE'); ?>
		<?php echo $form->textField($model,'FILED_TITLE',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DATA_TYPE'); ?>
		<?php echo $form->textField($model,'DATA_TYPE',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MAX_LENGTH'); ?>
		<?php echo $form->textField($model,'MAX_LENGTH'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CANVAS'); ?>
		<?php echo $form->textField($model,'CANVAS',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'XCORDINATE'); ?>
		<?php echo $form->textField($model,'XCORDINATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'YCORDINATE'); ?>
		<?php echo $form->textField($model,'YCORDINATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IS_REQUIRED'); ?>
		<?php echo $form->textField($model,'IS_REQUIRED',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->