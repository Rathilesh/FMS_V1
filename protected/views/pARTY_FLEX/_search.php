<?php
/* @var $this PARTY_FLEXController */
/* @var $model PARTY_FLEX */
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
		<?php echo $form->label($model,'FLEX'); ?>
		<?php echo $form->textField($model,'FLEX',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FLEX_VALUE'); ?>
		<?php echo $form->textField($model,'FLEX_VALUE',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'REMARK'); ?>
		<?php echo $form->textField($model,'REMARK',array('size'=>60,'maxlength'=>1024)); ?>
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