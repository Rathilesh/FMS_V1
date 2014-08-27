<?php
/* @var $this TIMEMNGTController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Timemanagementactivities',
);

$this->menu=array(
	array('label'=>'Create TIMEMANAGEMENTACTIVITY', 'url'=>array('create')),
	array('label'=>'Manage TIMEMANAGEMENTACTIVITY', 'url'=>array('admin')),
);
?>

<h1>Timemanagementactivities</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
