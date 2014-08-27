<?php
/* @var $this TIMEMNGTController */
/* @var $data TIMEMANAGEMENTACTIVITY */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIPTION')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIPTION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ANALYSIS_FACTOR1')); ?>:</b>
	<?php echo CHtml::encode($data->ANALYSIS_FACTOR1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ANALYSIS_FACTOR2')); ?>:</b>
	<?php echo CHtml::encode($data->ANALYSIS_FACTOR2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ACTIVE')); ?>:</b>
	<?php echo CHtml::encode($data->ACTIVE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TMA_ID')); ?>:</b>
	<?php echo CHtml::encode($data->TMA_ID); ?>
	<br />


</div>