<?php
/* @var $this POSITIONController */
/* @var $model POSITION */
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
		<?php echo $form->textField($model,'SHORT_NAME',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'POSITION'); ?>
		<?php echo $form->textField($model,'POSITION',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MAX_HEAD_COUNT'); ?>
		<?php echo $form->textField($model,'MAX_HEAD_COUNT'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HEAD_COUNT'); ?>
		<?php echo $form->textField($model,'HEAD_COUNT'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SP_REQUIRED'); ?>
		<?php echo $form->textField($model,'SP_REQUIRED',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOTICE_PERIOD'); ?>
		<?php echo $form->textField($model,'NOTICE_PERIOD'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOTICE_PERIOD_TOLERANCE'); ?>
		<?php echo $form->textField($model,'NOTICE_PERIOD_TOLERANCE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PROBATION'); ?>
		<?php echo $form->textField($model,'PROBATION',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PROBATION_PERIOD_UOM'); ?>
		<?php echo $form->textField($model,'PROBATION_PERIOD_UOM',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PROBATION_PERIOD'); ?>
		<?php echo $form->textField($model,'PROBATION_PERIOD'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PROBATION_PERIOD_FOR_PC'); ?>
		<?php echo $form->textField($model,'PROBATION_PERIOD_FOR_PC'); ?>
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