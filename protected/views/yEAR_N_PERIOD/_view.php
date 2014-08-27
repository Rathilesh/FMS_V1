<?php
/* @var $this YEAR_N_PERIODController */
/* @var $data YEAR_N_PERIOD */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SHORT_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->SHORT_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('START_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->START_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('END_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->END_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PERIOD_TYPE')); ?>:</b>
	<?php echo CHtml::encode($data->PERIOD_TYPE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('YNP_ID')); ?>:</b>
	<?php echo CHtml::encode($data->YNP_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ENTITY_ID')); ?>:</b>
	<?php echo CHtml::encode($data->ENTITY_ID); ?>
	<br />


</div>