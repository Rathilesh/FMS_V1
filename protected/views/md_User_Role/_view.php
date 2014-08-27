<?php
/* @var $this Md_User_RoleController */
/* @var $data Md_User_Role */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MRD_ID')); ?>:</b>
	<?php echo CHtml::encode($data->MRD_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USR_ID')); ?>:</b>
	<?php echo CHtml::encode($data->USR_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('WEF')); ?>:</b>
	<?php echo CHtml::encode($data->WEF); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('WET')); ?>:</b>
	<?php echo CHtml::encode($data->WET); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CREATOR_ID')); ?>:</b>
	<?php echo CHtml::encode($data->CREATOR_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CREATED_ON')); ?>:</b>
	<?php echo CHtml::encode($data->CREATED_ON); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('MODIFIER_ID')); ?>:</b>
	<?php echo CHtml::encode($data->MODIFIER_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MODIFIED_ON')); ?>:</b>
	<?php echo CHtml::encode($data->MODIFIED_ON); ?>
	<br />

	*/ ?>

</div>