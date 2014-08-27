<?php
/* @var $this ENTITY_BANKController */
/* @var $model ENTITY_BANK */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'entity--bank-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ACCOUNT_NO'); ?>
		<?php echo $form->textField($model,'ACCOUNT_NO',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'ACCOUNT_NO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ACCOUNT_OWNER'); ?>
		<?php echo $form->textField($model,'ACCOUNT_OWNER',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ACCOUNT_OWNER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ACCOUNT_TYPE'); ?>
		<?php echo $form->textField($model,'ACCOUNT_TYPE',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'ACCOUNT_TYPE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CURRENCY'); ?>
		<?php echo $form->textField($model,'CURRENCY',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'CURRENCY'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NETPAY_CREDIT'); ?>
		<?php echo $form->textField($model,'NETPAY_CREDIT',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'NETPAY_CREDIT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'WEF'); ?>
		<?php echo $form->textField($model,'WEF'); ?>
		<?php echo $form->error($model,'WEF'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'WET'); ?>
		<?php echo $form->textField($model,'WET'); ?>
		<?php echo $form->error($model,'WET'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PARTY_ID'); ?>
		<?php echo $form->textField($model,'PARTY_ID'); ?>
		<?php echo $form->error($model,'PARTY_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OSTRU_ID'); ?>
		<?php echo $form->textField($model,'OSTRU_ID'); ?>
		<?php echo $form->error($model,'OSTRU_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'BANK_ID'); ?>
		<?php echo $form->textField($model,'BANK_ID'); ?>
		<?php echo $form->error($model,'BANK_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ENTITY_ID'); ?>
		<?php echo $form->textField($model,'ENTITY_ID'); ?>
		<?php echo $form->error($model,'ENTITY_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->