<?php
/* @var $this Basic_definitionController */
/* @var $data Basic_definition */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('ENTITY_ID')); ?>:</b>
	<?php echo CHtml::encode($data->ENTITY_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DFCTG_DEFINITION_TYPE')); ?>:</b>
	<?php echo CHtml::encode($data->DFCTG_DEFINITION_TYPE); ?>
	<br />


</div>