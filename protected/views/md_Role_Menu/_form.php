<?php
/* @var $this Md_Role_MenuController */
/* @var $model Md_Role_Menu */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'md--role--menu-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'MRD_ID'); ?>
		<?php echo $form->textField($model,'MRD_ID'); ?>
		<?php echo $form->error($model,'MRD_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MMD_ID'); ?>
		<?php echo $form->textField($model,'MMD_ID'); ?>
		<?php echo $form->error($model,'MMD_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DISPLAY_GROUP_NAME'); ?>
		<?php echo $form->textField($model,'DISPLAY_GROUP_NAME',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'DISPLAY_GROUP_NAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DISPLAY_ORDER'); ?>
		<?php echo $form->textField($model,'DISPLAY_ORDER'); ?>
		<?php echo $form->error($model,'DISPLAY_ORDER'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->