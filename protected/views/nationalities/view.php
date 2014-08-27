<?php
/* @var $this NationalitiesController */
/* @var $model Nationalities */

$this->breadcrumbs=array(
	'Nationalities'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Nationalities', 'url'=>array('index')),
	array('label'=>'Create Nationalities', 'url'=>array('create')),
	array('label'=>'Update Nationalities', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Nationalities', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Nationalities', 'url'=>array('admin')),
);
?>

<h1>View Nationalities #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'NATIONALITY_CODE',
		'NATIONALITY_NAME',
	),
)); ?>
