<?php
/* @var $this Generic_Flex_ValueController */
/* @var $data Generic_Flex_Value */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RECORD_ID')); ?>:</b>
	<?php echo CHtml::encode($data->RECORD_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FLEX_VALUE')); ?>:</b>
	<?php echo CHtml::encode($data->FLEX_VALUE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GFLEX_ID')); ?>:</b>
	<?php echo CHtml::encode($data->GFLEX_ID); ?>
	<br />


</div>