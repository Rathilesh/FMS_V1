<?php
/* @var $this Md_Object_ParamController */
/* @var $data Md_Object_Param */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MMO_ID')); ?>:</b>
	<?php echo CHtml::encode($data->MMO_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PARAM_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->PARAM_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PARAM_VALUE')); ?>:</b>
	<?php echo CHtml::encode($data->PARAM_VALUE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIPTION')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIPTION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DATA_TYPE')); ?>:</b>
	<?php echo CHtml::encode($data->DATA_TYPE); ?>
	<br />


</div>