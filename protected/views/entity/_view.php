<?php
/* @var $this EntityController */
/* @var $data Entity */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SHORT_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->SHORT_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAME')); ?>:</b>
	<?php echo CHtml::encode($data->NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('VISION')); ?>:</b>
	<?php echo CHtml::encode($data->VISION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MISSION')); ?>:</b>
	<?php echo CHtml::encode($data->MISSION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('V01')); ?>:</b>
	<?php echo CHtml::encode($data->V01); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('V02')); ?>:</b>
	<?php echo CHtml::encode($data->V02); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('V03')); ?>:</b>
	<?php echo CHtml::encode($data->V03); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('V04')); ?>:</b>
	<?php echo CHtml::encode($data->V04); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('V05')); ?>:</b>
	<?php echo CHtml::encode($data->V05); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('N01')); ?>:</b>
	<?php echo CHtml::encode($data->N01); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('N02')); ?>:</b>
	<?php echo CHtml::encode($data->N02); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('N03')); ?>:</b>
	<?php echo CHtml::encode($data->N03); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('N04')); ?>:</b>
	<?php echo CHtml::encode($data->N04); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('D01')); ?>:</b>
	<?php echo CHtml::encode($data->D01); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('D02')); ?>:</b>
	<?php echo CHtml::encode($data->D02); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('D03')); ?>:</b>
	<?php echo CHtml::encode($data->D03); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('D04')); ?>:</b>
	<?php echo CHtml::encode($data->D04); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('REGISTRED_ON')); ?>:</b>
	<?php echo CHtml::encode($data->REGISTRED_ON); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DEACTIVATED_ON')); ?>:</b>
	<?php echo CHtml::encode($data->DEACTIVATED_ON); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ENTITY_ID')); ?>:</b>
	<?php echo CHtml::encode($data->ENTITY_ID); ?>
	<br />

	*/ ?>

</div>