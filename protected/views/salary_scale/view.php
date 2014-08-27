<?php
/* @var $this Salary_scaleController */
/* @var $model Salary_scale */

$this->breadcrumbs=array(
	'Salary Scales'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Salary_scale', 'url'=>array('index')),
	array('label'=>'Create Salary_scale', 'url'=>array('create')),
	array('label'=>'Update Salary_scale', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Salary_scale', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Salary_scale', 'url'=>array('admin')),
);
?>

<h1>View Salary_scale #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'SHORT_NAME',
		'START_AMOUNT',
		'END_AMOUNT',
		'WEF',
		'WET',
		'POST_ID',
		'GRADE_ID',
	),
)); ?>
