<?php
/* @var $this Personnel_VController */
/* @var $model Personnel_V */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'PARTY_ID'); ?>
		<?php echo $form->textField($model,'PARTY_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PERSONAL_ID'); ?>
		<?php echo $form->textField($model,'PERSONAL_ID',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SALUTATION'); ?>
		<?php echo $form->textField($model,'SALUTATION',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FIRST_NAME'); ?>
		<?php echo $form->textField($model,'FIRST_NAME',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MIDDLE_NAME'); ?>
		<?php echo $form->textField($model,'MIDDLE_NAME',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LAST_NAME'); ?>
		<?php echo $form->textField($model,'LAST_NAME',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PREFERRED_NAME'); ?>
		<?php echo $form->textField($model,'PREFERRED_NAME',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ALTERNATE_NAME'); ?>
		<?php echo $form->textField($model,'ALTERNATE_NAME',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DOB'); ?>
		<?php echo $form->textField($model,'DOB'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GENDER'); ?>
		<?php echo $form->textField($model,'GENDER',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RELIGION'); ?>
		<?php echo $form->textField($model,'RELIGION',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'BLOOD_GROUP'); ?>
		<?php echo $form->textField($model,'BLOOD_GROUP',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SUBCASTE'); ?>
		<?php echo $form->textField($model,'SUBCASTE',array('size'=>30,'maxlength'=>30)); ?>
	</div>

<!--	<div class="row">
		<?php //echo $form->label($model,'FATHER'); ?>
		<?php //echo $form->textField($model,'FATHER',array('size'=>60,'maxlength'=>100)); ?>
	</div>-->

<!--	<div class="row">
		<?php //echo $form->label($model,'MOTHER'); ?>
		<?php //echo $form->textField($model,'MOTHER',array('size'=>60,'maxlength'=>110)); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model,'NATIONALITY'); ?>
		<?php echo $form->textField($model,'NATIONALITY',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CASUAL'); ?>
		<?php echo $form->textField($model,'CASUAL',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MARRIED'); ?>
		<?php echo $form->textField($model,'MARRIED',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SECONDMENT'); ?>
		<?php echo $form->textField($model,'SECONDMENT',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SECONDMENT_ORG_ID'); ?>
		<?php echo $form->textField($model,'SECONDMENT_ORG_ID'); ?>
	</div>

<!--	<div class="row">
		<?php //echo $form->label($model,'VERIFIED'); ?>
		<?php //echo $form->textField($model,'VERIFIED',array('size'=>1,'maxlength'=>1)); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model,'ACTIVE'); ?>
		<?php echo $form->textField($model,'ACTIVE',array('size'=>1,'maxlength'=>1)); ?>
	</div>

<!--	<div class="row">
		<?php //echo $form->label($model,'ADDRESS1'); ?>
		<?php //echo $form->textField($model,'ADDRESS1',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'ADDRESS2'); ?>
		<?php //echo $form->textField($model,'ADDRESS2',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'ADDRESS3'); ?>
		<?php //echo $form->textField($model,'ADDRESS3',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'ADDRESS4'); ?>
		<?php //echo $form->textField($model,'ADDRESS4',array('size'=>60,'maxlength'=>100)); ?>
	</div>-->

<!--	<div class="row">
		<?php //echo $form->label($model,'PHONE'); ?>
		<?php //echo $form->textField($model,'PHONE',array('size'=>60,'maxlength'=>100)); ?>
	</div>-->

<!--	<div class="row">
		<?php //echo $form->label($model,'EMAIL'); ?>
		<?php //echo $form->textField($model,'EMAIL',array('size'=>60,'maxlength'=>100)); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model,'ENTITY_ID'); ?>
		<?php echo $form->textField($model,'ENTITY_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->