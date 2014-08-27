<?php
/* @var $this PARTYController */
/* @var $data PARTY */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('GENDER')); ?>:</b>
	<?php echo CHtml::encode($data->GENDER); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('CONTACT_PERSON')); ?>:</b>
	<?php echo CHtml::encode($data->CONTACT_PERSON); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DOB')); ?>:</b>
	<?php echo CHtml::encode($data->DOB); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NATIONAL_ID')); ?>:</b>
	<?php echo CHtml::encode($data->NATIONAL_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('V01')); ?>:</b>
	<?php echo CHtml::encode($data->V01); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('V02')); ?>:</b>
	<?php echo CHtml::encode($data->V02); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('V03')); ?>:</b>
	<?php echo CHtml::encode($data->V03); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('V04')); ?>:</b>
	<?php echo CHtml::encode($data->V04); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('V05')); ?>:</b>
	<?php echo CHtml::encode($data->V05); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('N01')); ?>:</b>
	<?php echo CHtml::encode($data->N01); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('N02')); ?>:</b>
	<?php echo CHtml::encode($data->N02); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('N03')); ?>:</b>
	<?php echo CHtml::encode($data->N03); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('N04')); ?>:</b>
	<?php echo CHtml::encode($data->N04); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('D01')); ?>:</b>
	<?php echo CHtml::encode($data->D01); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('D02')); ?>:</b>
	<?php echo CHtml::encode($data->D02); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('D03')); ?>:</b>
	<?php echo CHtml::encode($data->D03); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('D04')); ?>:</b>
	<?php echo CHtml::encode($data->D04); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ENTITY_ID')); ?>:</b>
	<?php echo CHtml::encode($data->ENTITY_ID); ?>
	<br />

	*/ ?>

</div>