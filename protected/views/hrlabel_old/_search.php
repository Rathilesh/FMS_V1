<?php
/* @var $this HrlabelController */
/* @var $model Hrlabel */
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
		<?php echo $form->textField($model,'LANGUAGE',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TEXT_ID'); ?>
		<?php echo $form->textField($model,'TEXT_ID',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TEXT'); ?>
		<?php echo $form->textField($model,'TEXT',array('size'=>60,'maxlength'=>2024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COUNTER'); ?>
		<?php echo $form->textField($model,'COUNTER'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->