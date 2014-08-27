<?php
/* @var $this TIMEMNGTController */
/* @var $model TIMEMANAGEMENTACTIVITY */

$this->breadcrumbs=array(
	'Timemanagementactivities'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List TIMEMANAGEMENTACTIVITY', 'url'=>array('index')),
	array('label'=>'Create TIMEMANAGEMENTACTIVITY', 'url'=>array('create')),
	array('label'=>'Update TIMEMANAGEMENTACTIVITY', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete TIMEMANAGEMENTACTIVITY', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TIMEMANAGEMENTACTIVITY', 'url'=>array('admin')),
);
?>

<h1>View TIMEMANAGEMENTACTIVITY #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'DESCRIPTION',
		'ANALYSIS_FACTOR1',
		'ANALYSIS_FACTOR2',
		'ACTIVE',
		'TMA_ID',
	),
)); ?>
