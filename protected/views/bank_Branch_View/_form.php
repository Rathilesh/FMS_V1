<?php
/* @var $this Bank_Branch_ViewController */
/* @var $model Bank_Branch_View */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bank--branch--view-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'SHORT_NAME'); ?>
		<?php echo $form->textField($model,'SHORT_NAME',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'SHORT_NAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NAME'); ?>
		<?php echo $form->textField($model,'NAME',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'NAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ADDRESS1'); ?>
		<?php echo $form->textField($model,'ADDRESS1',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'ADDRESS1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ADDRESS2'); ?>
		<?php echo $form->textField($model,'ADDRESS2',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'ADDRESS2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ADDRESS3'); ?>
		<?php echo $form->textField($model,'ADDRESS3',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'ADDRESS3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ADDRESS4'); ?>
		<?php echo $form->textField($model,'ADDRESS4',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'ADDRESS4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COUNTRY'); ?>
		<?php echo $form->textField($model,'COUNTRY',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'COUNTRY'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CONTACT_PERSON'); ?>
		<?php echo $form->textField($model,'CONTACT_PERSON',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'CONTACT_PERSON'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TELEPHONE'); ?>
		<?php echo $form->textField($model,'TELEPHONE',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'TELEPHONE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FAX'); ?>
		<?php echo $form->textField($model,'FAX',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'FAX'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EMAIL'); ?>
		<?php echo $form->textField($model,'EMAIL',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'EMAIL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'URL'); ?>
		<?php echo $form->textField($model,'URL',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'URL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'BANK_ID'); ?>
		<?php echo $form->textField($model,'BANK_ID'); ?>
		<?php echo $form->error($model,'BANK_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->