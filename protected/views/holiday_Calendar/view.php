<?php
/* @var $this Holiday_CalendarController */
/* @var $model Holiday_Calendar */

$this->breadcrumbs=array(
	'Holiday  Calendars'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Holiday_Calendar', 'url'=>array('index')),
	array('label'=>'Create Holiday_Calendar', 'url'=>array('create')),
	array('label'=>'Update Holiday_Calendar', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Holiday_Calendar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Holiday_Calendar', 'url'=>array('admin')),
);
?>

<h1>View Holiday_Calendar #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'CALENDAR_NAME',
		'ENTITY_ID',
	),
)); ?>
