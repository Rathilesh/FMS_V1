<?php
/* @var $this QUALIFICATION_EXPERIENCEController */
/* @var $model QUALIFICATION_EXPERIENCE */
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
		<?php echo $form->label($model,'RECORD_TYPE'); ?>
		<?php echo $form->textField($model,'RECORD_TYPE',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SHORT_NAME'); ?>
		<?php echo $form->textField($model,'SHORT_NAME',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DESCRIPTION'); ?>
		<?php echo $form->textField($model,'DESCRIPTION',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IS_PROFESSIONAL'); ?>
		<?php echo $form->textField($model,'IS_PROFESSIONAL',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IS_ACADEMIC'); ?>
		<?php echo $form->textField($model,'IS_ACADEMIC',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EFLO_ID'); ?>
		<?php echo $form->textField($model,'EFLO_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EDU_ID'); ?>
		<?php echo $form->textField($model,'EDU_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->