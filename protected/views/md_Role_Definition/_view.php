<?php
/* @var $this Md_Role_DefinitionController */
/* @var $data Md_Role_Definition */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SHORT_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->SHORT_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ROLE_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->ROLE_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIPTION')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIPTION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CREATOR_ID')); ?>:</b>
	<?php echo CHtml::encode($data->CREATOR_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CREATED_ON')); ?>:</b>
	<?php echo CHtml::encode($data->CREATED_ON); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MODIFIER_ID')); ?>:</b>
	<?php echo CHtml::encode($data->MODIFIER_ID); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('MODIFIED_ON')); ?>:</b>
	<?php echo CHtml::encode($data->MODIFIED_ON); ?>
	<br />

	*/ ?>

</div>