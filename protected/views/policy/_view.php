<?php
/* @var $this PolicyController */
/* @var $data Policy */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SHORT_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->SHORT_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIPTION')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIPTION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('WEF')); ?>:</b>
	<?php echo CHtml::encode($data->WEF); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('WET')); ?>:</b>
	<?php echo CHtml::encode($data->WET); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('POLICY_FUNCTION')); ?>:</b>
	<?php echo CHtml::encode($data->POLICY_FUNCTION); ?>
	<br />


</div>