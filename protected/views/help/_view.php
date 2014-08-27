<?php
/* @var $this HelpController */
/* @var $data Help */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LANGUAGE')); ?>:</b>
	<?php echo CHtml::encode($data->LANGUAGE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ABOUT')); ?>:</b>
	<?php echo CHtml::encode($data->ABOUT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TITLE')); ?>:</b>
	<?php echo CHtml::encode($data->TITLE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIPTION')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIPTION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TAG')); ?>:</b>
	<?php echo CHtml::encode($data->TAG); ?>
	<br />


</div>