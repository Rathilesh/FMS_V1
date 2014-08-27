<?php
/* @var $this PARTYController */
/* @var $model PARTY */
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
		<?php echo $form->label($model,'SALUTATION'); ?>
		<?php echo $form->textField($model,'SALUTATION',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FIRST_NAME'); ?>
		<?php echo $form->textField($model,'FIRST_NAME',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MIDDLE_NAME'); ?>
		<?php echo $form->textField($model,'MIDDLE_NAME',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LAST_NAME'); ?>
		<?php echo $form->textField($model,'LAST_NAME',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PREFERRED_NAME'); ?>
		<?php echo $form->textField($model,'PREFERRED_NAME',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GENDER'); ?>
		<?php echo $form->textField($model,'GENDER',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CONTACT_PERSON'); ?>
		<?php echo $form->textField($model,'CONTACT_PERSON',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DOB'); ?>
		<?php echo $form->textField($model,'DOB'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NATIONAL_ID'); ?>
		<?php echo $form->textField($model,'NATIONAL_ID',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'V01'); ?>
		<?php echo $form->textField($model,'V01',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'V02'); ?>
		<?php echo $form->textField($model,'V02',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'V03'); ?>
		<?php echo $form->textField($model,'V03',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'V04'); ?>
		<?php echo $form->textField($model,'V04',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'V05'); ?>
		<?php echo $form->textField($model,'V05',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'N01'); ?>
		<?php echo $form->textField($model,'N01'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'N02'); ?>
		<?php echo $form->textField($model,'N02'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'N03'); ?>
		<?php echo $form->textField($model,'N03'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'N04'); ?>
		<?php echo $form->textField($model,'N04'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'D01'); ?>
		<?php echo $form->textField($model,'D01'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'D02'); ?>
		<?php echo $form->textField($model,'D02'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'D03'); ?>
		<?php echo $form->textField($model,'D03'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'D04'); ?>
		<?php echo $form->textField($model,'D04'); ?>
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