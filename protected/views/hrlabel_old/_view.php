<?php
/* @var $this HrlabelController */
/* @var $data Hrlabel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LANGUAGE')); ?>:</b>
	<?php echo CHtml::encode($data->LANGUAGE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TEXT_ID')); ?>:</b>
	<?php echo CHtml::encode($data->TEXT_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TEXT')); ?>:</b>
	<?php echo CHtml::encode($data->TEXT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COUNTER')); ?>:</b>
	<?php echo CHtml::encode($data->COUNTER); ?>
	<br />


</div>