<?php
/* @var $this Generic_FlexController */
/* @var $data Generic_Flex */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TABLE_ID')); ?>:</b>
	<?php echo CHtml::encode($data->TABLE_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FILED_SEQUENCE')); ?>:</b>
	<?php echo CHtml::encode($data->FILED_SEQUENCE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FILED_TITLE')); ?>:</b>
	<?php echo CHtml::encode($data->FILED_TITLE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DATA_TYPE')); ?>:</b>
	<?php echo CHtml::encode($data->DATA_TYPE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MAX_LENGTH')); ?>:</b>
	<?php echo CHtml::encode($data->MAX_LENGTH); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CANVAS')); ?>:</b>
	<?php echo CHtml::encode($data->CANVAS); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('XCORDINATE')); ?>:</b>
	<?php echo CHtml::encode($data->XCORDINATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('YCORDINATE')); ?>:</b>
	<?php echo CHtml::encode($data->YCORDINATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IS_REQUIRED')); ?>:</b>
	<?php echo CHtml::encode($data->IS_REQUIRED); ?>
	<br />

	*/ ?>

</div>