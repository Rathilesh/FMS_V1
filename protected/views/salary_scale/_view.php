<?php
/* @var $this Salary_scaleController */
/* @var $data Salary_scale */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SHORT_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->SHORT_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('START_AMOUNT')); ?>:</b>
	<?php echo CHtml::encode($data->START_AMOUNT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('END_AMOUNT')); ?>:</b>
	<?php echo CHtml::encode($data->END_AMOUNT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('WEF')); ?>:</b>
	<?php echo CHtml::encode($data->WEF); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('WET')); ?>:</b>
	<?php echo CHtml::encode($data->WET); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('POST_ID')); ?>:</b>
	<?php echo CHtml::encode($data->POST_ID); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('GRADE_ID')); ?>:</b>
	<?php echo CHtml::encode($data->GRADE_ID); ?>
	<br />

	*/ ?>

</div>