<?php
/* @var $this ENTITY_BANKController */
/* @var $data ENTITY_BANK */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ACCOUNT_NO')); ?>:</b>
	<?php echo CHtml::encode($data->ACCOUNT_NO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ACCOUNT_OWNER')); ?>:</b>
	<?php echo CHtml::encode($data->ACCOUNT_OWNER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ACCOUNT_TYPE')); ?>:</b>
	<?php echo CHtml::encode($data->ACCOUNT_TYPE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CURRENCY')); ?>:</b>
	<?php echo CHtml::encode($data->CURRENCY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NETPAY_CREDIT')); ?>:</b>
	<?php echo CHtml::encode($data->NETPAY_CREDIT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('WEF')); ?>:</b>
	<?php echo CHtml::encode($data->WEF); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('WET')); ?>:</b>
	<?php echo CHtml::encode($data->WET); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PARTY_ID')); ?>:</b>
	<?php echo CHtml::encode($data->PARTY_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OSTRU_ID')); ?>:</b>
	<?php echo CHtml::encode($data->OSTRU_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BANK_ID')); ?>:</b>
	<?php echo CHtml::encode($data->BANK_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ENTITY_ID')); ?>:</b>
	<?php echo CHtml::encode($data->ENTITY_ID); ?>
	<br />

	*/ ?>

</div>