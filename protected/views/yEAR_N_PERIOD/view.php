<?php
/* @var $this YEAR_N_PERIODController */
/* @var $model YEAR_N_PERIOD */

$this->breadcrumbs=array(
	'Year  N  Periods'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List YEAR_N_PERIOD', 'url'=>array('index')),
	array('label'=>'Create YEAR_N_PERIOD', 'url'=>array('create')),
	array('label'=>'Update YEAR_N_PERIOD', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete YEAR_N_PERIOD', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage YEAR_N_PERIOD', 'url'=>array('admin')),
);
?>

<h1>View YEAR_N_PERIOD #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'SHORT_NAME',
		'START_DATE',
		'END_DATE',
		'PERIOD_TYPE',
		'YNP_ID',
		'ENTITY_ID',
	),
)); ?>
