<?php
/* @var $this CountriesController */
/* @var $data Countries */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COUNTRY_CODE')); ?>:</b>
	<?php echo CHtml::encode($data->COUNTRY_CODE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COUNTRY_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->COUNTRY_NAME); ?>
	<br />


</div>