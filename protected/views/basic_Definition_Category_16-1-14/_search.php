<?php
/* @var $this Basic_Definition_CategoryController */
/* @var $model Basic_Definition_Category */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'DEFINITION_TYPE'); ?>
		<?php echo $form->textField($model,'DEFINITION_TYPE',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DESCRIPTION'); ?>
		<?php echo $form->textField($model,'DESCRIPTION',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IS_AMEND'); ?>
		<?php echo $form->textField($model,'IS_AMEND',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IS_DISPLAY'); ?>
		<?php echo $form->textField($model,'IS_DISPLAY',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IS_UNIVERSAL'); ?>
		<?php echo $form->textField($model,'IS_UNIVERSAL',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IS_COMPULSORY'); ?>
		<?php echo $form->textField($model,'IS_COMPULSORY',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NO_OF_RECORDS'); ?>
		<?php echo $form->textField($model,'NO_OF_RECORDS'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->