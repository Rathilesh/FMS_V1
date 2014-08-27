<?php
/* @var $this NationalitiesController */
/* @var $data Nationalities */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NATIONALITY_CODE')); ?>:</b>
	<?php echo CHtml::encode($data->NATIONALITY_CODE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NATIONALITY_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->NATIONALITY_NAME); ?>
	<br />


</div>