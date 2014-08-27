<?php
/* @var $this Basic_Definition_CategoryController */
/* @var $data Basic_Definition_Category */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DEFINITION_TYPE')); ?>:</b>
	<?php echo CHtml::encode($data->DEFINITION_TYPE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIPTION')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIPTION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IS_AMEND')); ?>:</b>
	<?php echo CHtml::encode($data->IS_AMEND); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IS_DISPLAY')); ?>:</b>
	<?php echo CHtml::encode($data->IS_DISPLAY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IS_UNIVERSAL')); ?>:</b>
	<?php echo CHtml::encode($data->IS_UNIVERSAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IS_COMPULSORY')); ?>:</b>
	<?php echo CHtml::encode($data->IS_COMPULSORY); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('NO_OF_RECORDS')); ?>:</b>
	<?php echo CHtml::encode($data->NO_OF_RECORDS); ?>
	<br />

	*/ ?>

</div>