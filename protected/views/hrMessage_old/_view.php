<?php
/* @var $this HrMessageController */
/* @var $data HrMessage */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TEXT')); ?>:</b>
	<?php echo CHtml::encode($data->TEXT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USAGE_COUNT')); ?>:</b>
	<?php echo CHtml::encode($data->USAGE_COUNT); ?>
	<br />


</div>