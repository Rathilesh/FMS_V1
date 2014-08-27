<?php
/* @var $this HolidayController */
/* @var $data Holiday */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HOLIDAY_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->HOLIDAY_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIPTION')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIPTION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IS_COMPULSORY')); ?>:</b>
	<?php echo CHtml::encode($data->IS_COMPULSORY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IS_RESTRICTED')); ?>:</b>
	<?php echo CHtml::encode($data->IS_RESTRICTED); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DECLARATION_REFERENCE')); ?>:</b>
	<?php echo CHtml::encode($data->DECLARATION_REFERENCE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DATE_OF_DECLARATION')); ?>:</b>
	<?php echo CHtml::encode($data->DATE_OF_DECLARATION); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('CALD_ID')); ?>:</b>
	<?php echo CHtml::encode($data->CALD_ID); ?>
	<br />

	*/ ?>

</div>