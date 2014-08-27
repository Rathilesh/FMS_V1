<?php
/* @var $this PARTY_IMAGEController */
/* @var $data PARTY_IMAGE */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IMAGE_TYPE')); ?>:</b>
	<?php echo CHtml::encode($data->IMAGE_TYPE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IMAGE')); ?>:</b>
	<?php echo CHtml::encode($data->IMAGE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PRQ_ID')); ?>:</b>
	<?php echo CHtml::encode($data->PRQ_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PARTY_ID')); ?>:</b>
	<?php echo CHtml::encode($data->PARTY_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SCANNED_ON')); ?>:</b>
	<?php echo CHtml::encode($data->SCANNED_ON); ?>
	<br />


</div>