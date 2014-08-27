<?php
/* @var $this UsersController */
/* @var $data Users */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('USR_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->USR_ID), array('view', 'id'=>$data->USR_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USR_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->USR_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USR_EU_ORGN_CODE')); ?>:</b>
	<?php echo CHtml::encode($data->USR_EU_ORGN_CODE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USR_PER_NO')); ?>:</b>
	<?php echo CHtml::encode($data->USR_PER_NO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USR_PASSWORD')); ?>:</b>
	<?php echo CHtml::encode($data->USR_PASSWORD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USR_STATUS')); ?>:</b>
	<?php echo CHtml::encode($data->USR_STATUS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USR_PWD_CHANGED_ON')); ?>:</b>
	<?php echo CHtml::encode($data->USR_PWD_CHANGED_ON); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('USR_APP_USER_FLAG')); ?>:</b>
	<?php echo CHtml::encode($data->USR_APP_USER_FLAG); ?>
	<br />

	*/ ?>

</div>