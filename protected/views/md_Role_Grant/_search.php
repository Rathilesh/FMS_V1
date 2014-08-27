<?php
/* @var $this Md_Role_GrantController */
/* @var $model Md_Role_Grant */
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
		<?php echo $form->label($model,'MMO_ID'); ?>
		<?php echo $form->textField($model,'MMO_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MENU_PROMPT'); ?>
		<?php echo $form->textField($model,'MENU_PROMPT',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IS_CREATE'); ?>
		<?php echo $form->textField($model,'IS_CREATE',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IS_EDIT'); ?>
		<?php echo $form->textField($model,'IS_EDIT',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IS_REMOVE'); ?>
		<?php echo $form->textField($model,'IS_REMOVE',array('size'=>1,'maxlength'=>1)); ?>
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