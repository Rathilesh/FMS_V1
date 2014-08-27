<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('ID')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->ID), array('view', 'id' => $data->ID)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('LANGUAGE')); ?>:
	<?php echo GxHtml::encode($data->LANGUAGE); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('TEXT_ID')); ?>:
	<?php echo GxHtml::encode($data->TEXT_ID); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('TEXT')); ?>:
	<?php echo GxHtml::encode($data->TEXT); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('COUNTER')); ?>:
	<?php echo GxHtml::encode($data->COUNTER); ?>
	<br />

</div>