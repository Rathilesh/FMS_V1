<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'USR_ID'); ?>
		<?php echo $form->textField($model,'USR_ID'); ?>
		<?php echo $form->error($model,'USR_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USR_NAME'); ?>
		<?php echo $form->textField($model,'USR_NAME',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'USR_NAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USR_EU_ORGN_CODE'); ?>
		<?php echo $form->textField($model,'USR_EU_ORGN_CODE',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'USR_EU_ORGN_CODE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USR_PER_NO'); ?>
		<?php echo $form->textField($model,'USR_PER_NO',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'USR_PER_NO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USR_PASSWORD'); ?>
		<?php echo $form->textField($model,'USR_PASSWORD',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'USR_PASSWORD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USR_STATUS'); ?>
		<?php echo $form->textField($model,'USR_STATUS',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'USR_STATUS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USR_PWD_CHANGED_ON'); ?>
		<?php echo $form->textField($model,'USR_PWD_CHANGED_ON'); ?>
		<?php echo $form->error($model,'USR_PWD_CHANGED_ON'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USR_APP_USER_FLAG'); ?>
		<?php echo $form->textField($model,'USR_APP_USER_FLAG',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'USR_APP_USER_FLAG'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->