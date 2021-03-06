<?php
/* @var $this Ss_Pers_No_Add_ContactController */
/* @var $model Ss_Pers_No_Add_Contact */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ss--pers--no--add--contact-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_EU_ORGN_CODE'); ?>
		<?php echo $form->textField($model,'PNAC_EU_ORGN_CODE',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'PNAC_EU_ORGN_CODE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_PER_NO'); ?>
		<?php echo $form->textField($model,'PNAC_PER_NO',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'PNAC_PER_NO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_CHANGE_FOR_TAB'); ?>
		<?php echo $form->textField($model,'PNAC_CHANGE_FOR_TAB',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'PNAC_CHANGE_FOR_TAB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_RECORD_TYPE'); ?>
		<?php echo $form->textField($model,'PNAC_RECORD_TYPE',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'PNAC_RECORD_TYPE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_INSERT_UPDATE_TAG'); ?>
		<?php echo $form->textField($model,'PNAC_INSERT_UPDATE_TAG',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'PNAC_INSERT_UPDATE_TAG'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_NEW_PN_NUMBER'); ?>
		<?php echo $form->textField($model,'PNAC_NEW_PN_NUMBER',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_NEW_PN_NUMBER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_NEW_PN_ISSUE_PLACE'); ?>
		<?php echo $form->textField($model,'PNAC_NEW_PN_ISSUE_PLACE',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_NEW_PN_ISSUE_PLACE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_NEW_PN_ISSUE_COUNTRY_CODE'); ?>
		<?php echo $form->textField($model,'PNAC_NEW_PN_ISSUE_COUNTRY_CODE',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'PNAC_NEW_PN_ISSUE_COUNTRY_CODE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_NEW_PN_WEF_DATE'); ?>
		<?php echo $form->textField($model,'PNAC_NEW_PN_WEF_DATE'); ?>
		<?php echo $form->error($model,'PNAC_NEW_PN_WEF_DATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_NEW_PN_WET_DATE'); ?>
		<?php echo $form->textField($model,'PNAC_NEW_PN_WET_DATE'); ?>
		<?php echo $form->error($model,'PNAC_NEW_PN_WET_DATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_OLD_PN_NUMBER'); ?>
		<?php echo $form->textField($model,'PNAC_OLD_PN_NUMBER',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_OLD_PN_NUMBER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_OLD_PN_ISSUE_PLACE'); ?>
		<?php echo $form->textField($model,'PNAC_OLD_PN_ISSUE_PLACE',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_OLD_PN_ISSUE_PLACE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_OLD_PN_ISSUE_COUNTRY_CODE'); ?>
		<?php echo $form->textField($model,'PNAC_OLD_PN_ISSUE_COUNTRY_CODE',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'PNAC_OLD_PN_ISSUE_COUNTRY_CODE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_OLD_PN_WEF_DATE'); ?>
		<?php echo $form->textField($model,'PNAC_OLD_PN_WEF_DATE'); ?>
		<?php echo $form->error($model,'PNAC_OLD_PN_WEF_DATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_OLD_PN_WET_DATE'); ?>
		<?php echo $form->textField($model,'PNAC_OLD_PN_WET_DATE'); ?>
		<?php echo $form->error($model,'PNAC_OLD_PN_WET_DATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_NEW_PPE_NUMBER_TYPE'); ?>
		<?php echo $form->textField($model,'PNAC_NEW_PPE_NUMBER_TYPE',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'PNAC_NEW_PPE_NUMBER_TYPE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_NEW_PPE_SLNO'); ?>
		<?php echo $form->textField($model,'PNAC_NEW_PPE_SLNO'); ?>
		<?php echo $form->error($model,'PNAC_NEW_PPE_SLNO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_NEW_PPE_NUMBER_ADDRESS'); ?>
		<?php echo $form->textField($model,'PNAC_NEW_PPE_NUMBER_ADDRESS',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_NEW_PPE_NUMBER_ADDRESS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_OLD_PPE_NUMBER_TYPE'); ?>
		<?php echo $form->textField($model,'PNAC_OLD_PPE_NUMBER_TYPE',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'PNAC_OLD_PPE_NUMBER_TYPE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_OLD_PPE_SLNO'); ?>
		<?php echo $form->textField($model,'PNAC_OLD_PPE_SLNO'); ?>
		<?php echo $form->error($model,'PNAC_OLD_PPE_SLNO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_OLD_PPE_NUMBER_ADDRESS'); ?>
		<?php echo $form->textField($model,'PNAC_OLD_PPE_NUMBER_ADDRESS',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_OLD_PPE_NUMBER_ADDRESS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_NEW_PADD_ADDRESS1'); ?>
		<?php echo $form->textField($model,'PNAC_NEW_PADD_ADDRESS1',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_NEW_PADD_ADDRESS1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_NEW_PADD_ADDRESS2'); ?>
		<?php echo $form->textField($model,'PNAC_NEW_PADD_ADDRESS2',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'PNAC_NEW_PADD_ADDRESS2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_NEW_PADD_ADDRESS3'); ?>
		<?php echo $form->textField($model,'PNAC_NEW_PADD_ADDRESS3',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_NEW_PADD_ADDRESS3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_NEW_PADD_CITY'); ?>
		<?php echo $form->textField($model,'PNAC_NEW_PADD_CITY',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'PNAC_NEW_PADD_CITY'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_NEW_PADD_COUNTRY_CODE'); ?>
		<?php echo $form->textField($model,'PNAC_NEW_PADD_COUNTRY_CODE',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'PNAC_NEW_PADD_COUNTRY_CODE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_NEW_PADD_ADDRESS4'); ?>
		<?php echo $form->textField($model,'PNAC_NEW_PADD_ADDRESS4',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_NEW_PADD_ADDRESS4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_NEW_PADD_ADDRESS5'); ?>
		<?php echo $form->textField($model,'PNAC_NEW_PADD_ADDRESS5',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_NEW_PADD_ADDRESS5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_NEW_PADD_ADDRESS6'); ?>
		<?php echo $form->textField($model,'PNAC_NEW_PADD_ADDRESS6',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_NEW_PADD_ADDRESS6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_OLD_PADD_ADDRESS1'); ?>
		<?php echo $form->textField($model,'PNAC_OLD_PADD_ADDRESS1',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_OLD_PADD_ADDRESS1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_OLD_PADD_ADDRESS2'); ?>
		<?php echo $form->textField($model,'PNAC_OLD_PADD_ADDRESS2',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'PNAC_OLD_PADD_ADDRESS2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_OLD_PADD_ADDRESS3'); ?>
		<?php echo $form->textField($model,'PNAC_OLD_PADD_ADDRESS3',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_OLD_PADD_ADDRESS3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_OLD_PADD_CITY'); ?>
		<?php echo $form->textField($model,'PNAC_OLD_PADD_CITY',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'PNAC_OLD_PADD_CITY'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_OLD_PADD_COUNTRY_CODE'); ?>
		<?php echo $form->textField($model,'PNAC_OLD_PADD_COUNTRY_CODE',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'PNAC_OLD_PADD_COUNTRY_CODE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_OLD_PADD_ADDRESS4'); ?>
		<?php echo $form->textField($model,'PNAC_OLD_PADD_ADDRESS4',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_OLD_PADD_ADDRESS4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_OLD_PADD_ADDRESS5'); ?>
		<?php echo $form->textField($model,'PNAC_OLD_PADD_ADDRESS5',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_OLD_PADD_ADDRESS5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_OLD_PADD_ADDRESS6'); ?>
		<?php echo $form->textField($model,'PNAC_OLD_PADD_ADDRESS6',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_OLD_PADD_ADDRESS6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_NAME1'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_NAME1',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_NAME1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_TYPE1'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_TYPE1',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_TYPE1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_VALUE1'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_VALUE1',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_VALUE1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_NAME2'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_NAME2',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_NAME2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_TYPE2'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_TYPE2',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_TYPE2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_VALUE2'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_VALUE2',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_VALUE2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_NAME3'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_NAME3',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_NAME3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_TYPE3'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_TYPE3',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_TYPE3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_VALUE3'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_VALUE3',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_VALUE3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_NAME4'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_NAME4',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_NAME4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_TYPE4'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_TYPE4',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_TYPE4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_VALUE4'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_VALUE4',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_VALUE4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_NAME5'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_NAME5',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_NAME5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_TYPE5'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_TYPE5',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_TYPE5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_VALUE5'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_VALUE5',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_VALUE5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_NAME6'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_NAME6',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_NAME6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_TYPE6'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_TYPE6',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_TYPE6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_VALUE6'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_VALUE6',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_VALUE6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_NAME7'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_NAME7',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_NAME7'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_TYPE7'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_TYPE7',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_TYPE7'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_VALUE7'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_VALUE7',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_VALUE7'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_NAME8'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_NAME8',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_NAME8'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_TYPE8'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_TYPE8',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_TYPE8'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_VALUE8'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_VALUE8',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_VALUE8'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_NAME9'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_NAME9',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_NAME9'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_TYPE9'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_TYPE9',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_TYPE9'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_VALUE9'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_VALUE9',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_VALUE9'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_NAME10'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_NAME10',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_NAME10'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_TYPE10'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_TYPE10',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_TYPE10'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_VALUE10'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_VALUE10',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_VALUE10'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_NAME11'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_NAME11',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_NAME11'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_TYPE11'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_TYPE11',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_TYPE11'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_VALUE11'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_VALUE11',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_VALUE11'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_NAME12'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_NAME12',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_NAME12'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_TYPE12'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_TYPE12',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_TYPE12'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_VALUE12'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_VALUE12',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_VALUE12'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_NAME13'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_NAME13',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_NAME13'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_TYPE13'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_TYPE13',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_TYPE13'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_VALUE13'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_VALUE13',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_VALUE13'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_NAME14'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_NAME14',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_NAME14'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_TYPE14'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_TYPE14',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_TYPE14'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_VALUE14'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_VALUE14',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_VALUE14'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_NAME15'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_NAME15',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_NAME15'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_TYPE15'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_TYPE15',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_TYPE15'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_VALUE15'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_VALUE15',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_VALUE15'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_NAME16'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_NAME16',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_NAME16'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_TYPE16'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_TYPE16',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_TYPE16'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_VALUE16'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_VALUE16',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_VALUE16'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_NAME31'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_NAME31',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_NAME31'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_TYPE31'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_TYPE31',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_TYPE31'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_VALUE31'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_VALUE31',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_VALUE31'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_NAME32'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_NAME32',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_NAME32'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_TYPE32'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_TYPE32',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_TYPE32'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_VALUE32'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_VALUE32',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_VALUE32'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_NAME33'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_NAME33',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_NAME33'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_TYPE33'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_TYPE33',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_TYPE33'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_VALUE33'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_VALUE33',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_VALUE33'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_NAME34'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_NAME34',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_NAME34'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_TYPE34'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_TYPE34',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_TYPE34'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_VALUE34'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_VALUE34',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_VALUE34'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_NAME35'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_NAME35',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_NAME35'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_TYPE35'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_TYPE35',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_TYPE35'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_VALUE35'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_VALUE35',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_VALUE35'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_NAME36'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_NAME36',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_NAME36'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_TYPE36'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_TYPE36',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_TYPE36'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_VALUE36'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_VALUE36',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_VALUE36'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_NAME37'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_NAME37',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_NAME37'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_TYPE37'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_TYPE37',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_TYPE37'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_VALUE37'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_VALUE37',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_VALUE37'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_NAME38'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_NAME38',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_NAME38'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_TYPE38'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_TYPE38',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_TYPE38'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_VALUE38'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_VALUE38',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_VALUE38'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_NAME39'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_NAME39',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_NAME39'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_TYPE39'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_TYPE39',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_TYPE39'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_VALUE39'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_VALUE39',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_VALUE39'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_NAME40'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_NAME40',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_NAME40'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_TYPE40'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_TYPE40',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_TYPE40'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_VALUE40'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_VALUE40',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_VALUE40'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_NAME41'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_NAME41',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_NAME41'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_TYPE41'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_TYPE41',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_TYPE41'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_VALUE41'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_VALUE41',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_VALUE41'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_NAME42'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_NAME42',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_NAME42'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_TYPE42'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_TYPE42',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_TYPE42'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_VALUE42'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_VALUE42',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_VALUE42'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_NAME43'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_NAME43',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_NAME43'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_TYPE43'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_TYPE43',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_TYPE43'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_VALUE43'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_VALUE43',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_VALUE43'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_NAME44'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_NAME44',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_NAME44'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_TYPE44'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_TYPE44',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_TYPE44'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_VALUE44'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_VALUE44',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_VALUE44'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_NAME45'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_NAME45',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_NAME45'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_TYPE45'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_TYPE45',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_TYPE45'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_VALUE45'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_VALUE45',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_VALUE45'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_NAME46'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_NAME46',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_NAME46'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_TYPE46'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_TYPE46',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_TYPE46'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_COLUMN_VALUE46'); ?>
		<?php echo $form->textField($model,'PNAC_COLUMN_VALUE46',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'PNAC_COLUMN_VALUE46'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_ENTERED_DATE'); ?>
		<?php echo $form->textField($model,'PNAC_ENTERED_DATE'); ?>
		<?php echo $form->error($model,'PNAC_ENTERED_DATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_IS_CANCEL_BY_REQUESTER'); ?>
		<?php echo $form->textField($model,'PNAC_IS_CANCEL_BY_REQUESTER',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'PNAC_IS_CANCEL_BY_REQUESTER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_APPROVE_OR_REJECT_TAG'); ?>
		<?php echo $form->textField($model,'PNAC_APPROVE_OR_REJECT_TAG',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'PNAC_APPROVE_OR_REJECT_TAG'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_APPROVE_REJECT_BY_PER_NO'); ?>
		<?php echo $form->textField($model,'PNAC_APPROVE_REJECT_BY_PER_NO',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'PNAC_APPROVE_REJECT_BY_PER_NO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_APPROVE_REJECT_DATE'); ?>
		<?php echo $form->textField($model,'PNAC_APPROVE_REJECT_DATE'); ?>
		<?php echo $form->error($model,'PNAC_APPROVE_REJECT_DATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_EFFECT_REMARKS'); ?>
		<?php echo $form->textField($model,'PNAC_EFFECT_REMARKS',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'PNAC_EFFECT_REMARKS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PNAC_INSERT_UPDATE_STATUS'); ?>
		<?php echo $form->textField($model,'PNAC_INSERT_UPDATE_STATUS',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PNAC_INSERT_UPDATE_STATUS'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->