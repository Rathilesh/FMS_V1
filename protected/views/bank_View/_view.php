<?php
/* @var $this Bank_ViewController */
/* @var $data Bank_View */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SHORT_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->SHORT_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAME')); ?>:</b>
	<?php echo CHtml::encode($data->NAME); ?>
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

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('COUNTRY')); ?>:</b>
	<?php echo CHtml::encode($data->COUNTRY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CONTACT_PERSON')); ?>:</b>
	<?php echo CHtml::encode($data->CONTACT_PERSON); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TELEPHONE')); ?>:</b>
	<?php echo CHtml::encode($data->TELEPHONE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FAX')); ?>:</b>
	<?php echo CHtml::encode($data->FAX); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMAIL')); ?>:</b>
	<?php echo CHtml::encode($data->EMAIL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('URL')); ?>:</b>
	<?php echo CHtml::encode($data->URL); ?>
	<br />

	*/ ?>

</div>