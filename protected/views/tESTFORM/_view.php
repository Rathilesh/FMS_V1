<?php
/* @var $this TESTFORMController */
/* @var $data TESTFORM */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAME')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->NAME), array('view', 'id'=>$data->NAME)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AGE')); ?>:</b>
	<?php echo CHtml::encode($data->AGE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ADDRESS')); ?>:</b>
	<?php echo CHtml::encode($data->ADDRESS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ADDRESS1')); ?>:</b>
	<?php echo CHtml::encode($data->ADDRESS1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CITY')); ?>:</b>
	<?php echo CHtml::encode($data->CITY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('STATE')); ?>:</b>
	<?php echo CHtml::encode($data->STATE); ?>
	<br />


</div>