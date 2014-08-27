<?php
/* @var $this Md_User_RoleController */
/* @var $model Md_User_Role */
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
		<?php echo $form->label($model,'USR_ID'); ?>
		<?php echo $form->textField($model,'USR_ID',array('size'=>30,'maxlength'=>30)); ?>
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
		<?php echo $form->label($model,'CREATOR_ID'); ?>
		<?php echo $form->textField($model,'CREATOR_ID',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CREATED_ON'); ?>
		<?php echo $form->textField($model,'CREATED_ON'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MODIFIER_ID'); ?>
		<?php echo $form->textField($model,'MODIFIER_ID',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MODIFIED_ON'); ?>
		<?php echo $form->textField($model,'MODIFIED_ON'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->