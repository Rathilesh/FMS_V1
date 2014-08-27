<?php
/* @var $this Md_Menu_DefinitionController */
/* @var $model Md_Menu_Definition */
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
		<?php echo $form->textField($model,'SHORT_NAME',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MENU_PROMPT'); ?>
		<?php echo $form->textField($model,'MENU_PROMPT',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DESCRIPTION'); ?>
		<?php echo $form->textField($model,'DESCRIPTION',array('size'=>60,'maxlength'=>254)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MMO_ID'); ?>
		<?php echo $form->textField($model,'MMO_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SUBMENU_MMD_ID'); ?>
		<?php echo $form->textField($model,'SUBMENU_MMD_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MMD_ID'); ?>
		<?php echo $form->textField($model,'MMD_ID'); ?>
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

	<div class="row">
		<?php echo $form->label($model,'DISPLAY_ORDER'); ?>
		<?php echo $form->textField($model,'DISPLAY_ORDER'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->