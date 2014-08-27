<?php
/* @var $this Holiday_CalendarController */
/* @var $data Holiday_Calendar */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CALENDAR_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->CALENDAR_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ENTITY_ID')); ?>:</b>
	<?php echo CHtml::encode($data->ENTITY_ID); ?>
	<br />


</div>