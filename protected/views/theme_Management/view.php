<?php
/* @var $this Theme_ManagementController */
/* @var $model Theme_Management */

$this->breadcrumbs=array(
	'Theme  Managements'=>array('index'),
	$model->PID,
);

$this->menu=array(
	array('label'=>'List Theme_Management', 'url'=>array('index')),
	array('label'=>'Create Theme_Management', 'url'=>array('create')),
	array('label'=>'Update Theme_Management', 'url'=>array('update', 'id'=>$model->PID)),
	array('label'=>'Delete Theme_Management', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Theme_Management', 'url'=>array('admin')),
);
?>

<h1>View Theme_Management #<?php echo $model->PID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PID',
		'THEME',
	),
)); ?>
