<?php
/* @var $this Md_Role_MenuController */
/* @var $data Md_Role_Menu */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MRD_ID')); ?>:</b>
	<?php echo CHtml::encode($data->MRD_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MMD_ID')); ?>:</b>
	<?php echo CHtml::encode($data->MMD_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DISPLAY_GROUP_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->DISPLAY_GROUP_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DISPLAY_ORDER')); ?>:</b>
	<?php echo CHtml::encode($data->DISPLAY_ORDER); ?>
	<br />


</div>