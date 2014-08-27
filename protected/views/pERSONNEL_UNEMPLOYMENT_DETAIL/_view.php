<?php
/* @var $this PERSONNEL_UNEMPLOYMENT_DETAILController */
/* @var $data PERSONNEL_UNEMPLOYMENT_DETAIL */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PUD_UNIT_CODE')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PUD_UNIT_CODE), array('view', 'id'=>$data->PUD_UNIT_CODE)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PUD_EU_ORGN_CODE')); ?>:</b>
	<?php echo CHtml::encode($data->PUD_EU_ORGN_CODE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PUD_PER_NO')); ?>:</b>
	<?php echo CHtml::encode($data->PUD_PER_NO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PUD_FROM_MONTH')); ?>:</b>
	<?php echo CHtml::encode($data->PUD_FROM_MONTH); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PUD_FROM_YEAR')); ?>:</b>
	<?php echo CHtml::encode($data->PUD_FROM_YEAR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PUD_TO_MONTH')); ?>:</b>
	<?php echo CHtml::encode($data->PUD_TO_MONTH); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PUD_TO_YEAR')); ?>:</b>
	<?php echo CHtml::encode($data->PUD_TO_YEAR); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('PUD_ACTIVITY_DURING_PERIOD')); ?>:</b>
	<?php echo CHtml::encode($data->PUD_ACTIVITY_DURING_PERIOD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PUD_NAME_OF_CONFIRMING_PARTY')); ?>:</b>
	<?php echo CHtml::encode($data->PUD_NAME_OF_CONFIRMING_PARTY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PUD_ADDR_OF_CONFIRMING_PARTY')); ?>:</b>
	<?php echo CHtml::encode($data->PUD_ADDR_OF_CONFIRMING_PARTY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PUD_TELEPHONE_NO')); ?>:</b>
	<?php echo CHtml::encode($data->PUD_TELEPHONE_NO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PUD_EMAIL_ID')); ?>:</b>
	<?php echo CHtml::encode($data->PUD_EMAIL_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PUD_ENTERED_BY_PER_NO')); ?>:</b>
	<?php echo CHtml::encode($data->PUD_ENTERED_BY_PER_NO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PUD_ENTERED_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->PUD_ENTERED_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PUD_APPROVED_BY_PER_NO')); ?>:</b>
	<?php echo CHtml::encode($data->PUD_APPROVED_BY_PER_NO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PUD_APPROVED_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->PUD_APPROVED_DATE); ?>
	<br />

	*/ ?>

</div>