<?php
/* @var $this Entity_TypeController */
/* @var $data Entity_Type */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ENTITY_TYPE')); ?>:</b>
	<?php echo CHtml::encode($data->ENTITY_TYPE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ENTITY_LEVEL')); ?>:</b>
	<?php echo CHtml::encode($data->ENTITY_LEVEL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IS_LOCATION')); ?>:</b>
	<?php echo CHtml::encode($data->IS_LOCATION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IS_FUNCTION')); ?>:</b>
	<?php echo CHtml::encode($data->IS_FUNCTION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IS_POSITION')); ?>:</b>
	<?php echo CHtml::encode($data->IS_POSITION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ENTITY_ID')); ?>:</b>
	<?php echo CHtml::encode($data->ENTITY_ID); ?>
	<br />


</div>