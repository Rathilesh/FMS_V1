<?php
/* @var $this Personnel_VController */
/* @var $data Personnel_V */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PARTY_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PARTY_ID), array('view', 'id'=>$data->PARTY_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PERSONAL_ID')); ?>:</b>
	<?php echo CHtml::encode($data->PERSONAL_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SALUTATION')); ?>:</b>
	<?php echo CHtml::encode($data->SALUTATION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FIRST_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->FIRST_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MIDDILE_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->MIDDILE_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LAST_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->LAST_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PREFERED_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->PREFERED_NAME); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ALTERNATE_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->ALTERNATE_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DOB')); ?>:</b>
	<?php echo CHtml::encode($data->DOB); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GENDER')); ?>:</b>
	<?php echo CHtml::encode($data->GENDER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RELIGION')); ?>:</b>
	<?php echo CHtml::encode($data->RELIGION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BLOOD_GROUP')); ?>:</b>
	<?php echo CHtml::encode($data->BLOOD_GROUP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SUBCAST')); ?>:</b>
	<?php echo CHtml::encode($data->SUBCAST); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FATHER')); ?>:</b>
	<?php echo CHtml::encode($data->FATHER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MOTHER')); ?>:</b>
	<?php echo CHtml::encode($data->MOTHER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NATIONALITY')); ?>:</b>
	<?php echo CHtml::encode($data->NATIONALITY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CASUAL')); ?>:</b>
	<?php echo CHtml::encode($data->CASUAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MARRIED')); ?>:</b>
	<?php echo CHtml::encode($data->MARRIED); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SECONDMENT')); ?>:</b>
	<?php echo CHtml::encode($data->SECONDMENT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SECONDMENT_ORG_ID')); ?>:</b>
	<?php echo CHtml::encode($data->SECONDMENT_ORG_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('VERIFIED')); ?>:</b>
	<?php echo CHtml::encode($data->VERIFIED); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ACTIVE')); ?>:</b>
	<?php echo CHtml::encode($data->ACTIVE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ADDRESS1')); ?>:</b>
	<?php echo CHtml::encode($data->ADDRESS1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ADDRESS2')); ?>:</b>
	<?php echo CHtml::encode($data->ADDRESS2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ADDRESS3')); ?>:</b>
	<?php echo CHtml::encode($data->ADDRESS3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ADDRESS4')); ?>:</b>
	<?php echo CHtml::encode($data->ADDRESS4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PHONE')); ?>:</b>
	<?php echo CHtml::encode($data->PHONE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMAIL')); ?>:</b>
	<?php echo CHtml::encode($data->EMAIL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ENTITY_ID')); ?>:</b>
	<?php echo CHtml::encode($data->ENTITY_ID); ?>
	<br />

	*/ ?>

</div>