<?php
/* @var $this Md_Menu_DefinitionController */
/* @var $data Md_Menu_Definition */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SHORT_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->SHORT_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MENU_PROMPT')); ?>:</b>
	<?php echo CHtml::encode($data->MENU_PROMPT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIPTION')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIPTION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MMO_ID')); ?>:</b>
	<?php echo CHtml::encode($data->MMO_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SUBMENU_MMD_ID')); ?>:</b>
	<?php echo CHtml::encode($data->SUBMENU_MMD_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MMD_ID')); ?>:</b>
	<?php echo CHtml::encode($data->MMD_ID); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('CREATOR_ID')); ?>:</b>
	<?php echo CHtml::encode($data->CREATOR_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CREATED_ON')); ?>:</b>
	<?php echo CHtml::encode($data->CREATED_ON); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MODIFIER_ID')); ?>:</b>
	<?php echo CHtml::encode($data->MODIFIER_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MODIFIED_ON')); ?>:</b>
	<?php echo CHtml::encode($data->MODIFIED_ON); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DISPLAY_ORDER')); ?>:</b>
	<?php echo CHtml::encode($data->DISPLAY_ORDER); ?>
	<br />

	*/ ?>

</div>