<?php
/* @var $this PARTY_FLEXController */
/* @var $data PARTY_FLEX */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FLEX')); ?>:</b>
	<?php echo CHtml::encode($data->FLEX); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FLEX_VALUE')); ?>:</b>
	<?php echo CHtml::encode($data->FLEX_VALUE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('REMARK')); ?>:</b>
	<?php echo CHtml::encode($data->REMARK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('WEF')); ?>:</b>
	<?php echo CHtml::encode($data->WEF); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('WET')); ?>:</b>
	<?php echo CHtml::encode($data->WET); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PARTY_ID')); ?>:</b>
	<?php echo CHtml::encode($data->PARTY_ID); ?>
	<br />


</div>