<?php
/* @var $this Md_Role_MenuController */
/* @var $model Md_Role_Menu */
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
		<?php echo $form->label($model,'MRD_ID'); ?>
		<?php echo $form->textField($model,'MRD_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MMD_ID'); ?>
		<?php echo $form->textField($model,'MMD_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DISPLAY_GROUP_NAME'); ?>
		<?php echo $form->textField($model,'DISPLAY_GROUP_NAME',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DISPLAY_ORDER'); ?>
		<?php echo $form->textField($model,'DISPLAY_ORDER'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->