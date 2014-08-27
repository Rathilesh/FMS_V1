<?php
/* @var $this ENTITY_BANKController */
/* @var $model ENTITY_BANK */
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
		<?php echo $form->label($model,'ACCOUNT_NO'); ?>
		<?php echo $form->textField($model,'ACCOUNT_NO',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ACCOUNT_OWNER'); ?>
		<?php echo $form->textField($model,'ACCOUNT_OWNER',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ACCOUNT_TYPE'); ?>
		<?php echo $form->textField($model,'ACCOUNT_TYPE',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CURRENCY'); ?>
		<?php echo $form->textField($model,'CURRENCY',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NETPAY_CREDIT'); ?>
		<?php echo $form->textField($model,'NETPAY_CREDIT',array('size'=>1,'maxlength'=>1)); ?>
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

	<div class="row">
		<?php echo $form->label($model,'OSTRU_ID'); ?>
		<?php echo $form->textField($model,'OSTRU_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'BANK_ID'); ?>
		<?php echo $form->textField($model,'BANK_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ENTITY_ID'); ?>
		<?php echo $form->textField($model,'ENTITY_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->