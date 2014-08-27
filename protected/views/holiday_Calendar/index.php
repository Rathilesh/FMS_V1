<?php
/* @var $this Holiday_CalendarController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Holiday  Calendars',
);

$this->menu=array(
	array('label'=>'Create Holiday_Calendar', 'url'=>array('create')),
	array('label'=>'Manage Holiday_Calendar', 'url'=>array('admin')),
);
?>

<h1>Holiday  Calendars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
