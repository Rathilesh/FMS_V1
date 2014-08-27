<?php
/* @var $this SALARY_SCALE_DTLController */
/* @var $data SALARY_SCALE_DTL */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOTCH')); ?>:</b>
	<?php echo CHtml::encode($data->NOTCH); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EFFECIENCY_BAR')); ?>:</b>
	<?php echo CHtml::encode($data->EFFECIENCY_BAR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('STAGE_AMOUNT')); ?>:</b>
	<?php echo CHtml::encode($data->STAGE_AMOUNT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SALDTL_INCREMENT')); ?>:</b>
	<?php echo CHtml::encode($data->SALDTL_INCREMENT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SALARY_ID')); ?>:</b>
	<?php echo CHtml::encode($data->SALARY_ID); ?>
	<br />


</div>