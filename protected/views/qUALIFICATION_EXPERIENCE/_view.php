<?php
/* @var $this QUALIFICATION_EXPERIENCEController */
/* @var $data QUALIFICATION_EXPERIENCE */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RECORD_TYPE')); ?>:</b>
	<?php echo CHtml::encode($data->RECORD_TYPE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SHORT_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->SHORT_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIPTION')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIPTION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IS_PROFESSIONAL')); ?>:</b>
	<?php echo CHtml::encode($data->IS_PROFESSIONAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IS_ACADEMIC')); ?>:</b>
	<?php echo CHtml::encode($data->IS_ACADEMIC); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EFLO_ID')); ?>:</b>
	<?php echo CHtml::encode($data->EFLO_ID); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('EDU_ID')); ?>:</b>
	<?php echo CHtml::encode($data->EDU_ID); ?>
	<br />

	*/ ?>

</div>