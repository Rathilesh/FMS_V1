<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID),array('view','id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OBJECT_ID')); ?>:</b>
	<?php echo CHtml::encode($data->OBJECT_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OBJECT_TYPE')); ?>:</b>
	<?php echo CHtml::encode($data->OBJECT_TYPE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIPTION')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIPTION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MENU_PROMPT')); ?>:</b>
	<?php echo CHtml::encode($data->MENU_PROMPT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('WEF')); ?>:</b>
	<?php echo CHtml::encode($data->WEF); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('WET')); ?>:</b>
	<?php echo CHtml::encode($data->WET); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('DISPLAY_TITLE')); ?>:</b>
	<?php echo CHtml::encode($data->DISPLAY_TITLE); ?>
	<br />

	*/ ?>

</div>