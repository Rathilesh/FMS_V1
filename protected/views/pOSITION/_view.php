<?php
/* @var $this POSITIONController */
/* @var $data POSITION */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SHORT_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->SHORT_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('POSITION')); ?>:</b>
	<?php echo CHtml::encode($data->POSITION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MAX_HEAD_COUNT')); ?>:</b>
	<?php echo CHtml::encode($data->MAX_HEAD_COUNT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HEAD_COUNT')); ?>:</b>
	<?php echo CHtml::encode($data->HEAD_COUNT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SP_REQUIRED')); ?>:</b>
	<?php echo CHtml::encode($data->SP_REQUIRED); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOTICE_PERIOD')); ?>:</b>
	<?php echo CHtml::encode($data->NOTICE_PERIOD); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('NOTICE_PERIOD_TOLERANCE')); ?>:</b>
	<?php echo CHtml::encode($data->NOTICE_PERIOD_TOLERANCE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PROBATION')); ?>:</b>
	<?php echo CHtml::encode($data->PROBATION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PROBATION_PERIOD_UOM')); ?>:</b>
	<?php echo CHtml::encode($data->PROBATION_PERIOD_UOM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PROBATION_PERIOD')); ?>:</b>
	<?php echo CHtml::encode($data->PROBATION_PERIOD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PROBATION_PERIOD_FOR_PC')); ?>:</b>
	<?php echo CHtml::encode($data->PROBATION_PERIOD_FOR_PC); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ENTITY_ID')); ?>:</b>
	<?php echo CHtml::encode($data->ENTITY_ID); ?>
	<br />

	*/ ?>

</div>