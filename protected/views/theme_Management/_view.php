<?php
/* @var $this Theme_ManagementController */
/* @var $data Theme_Management */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PID), array('view', 'id'=>$data->PID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('THEME')); ?>:</b>
	<?php echo CHtml::encode($data->THEME); ?>
	<br />


</div>