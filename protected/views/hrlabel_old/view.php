<?php
/* @var $this HrlabelController */
/* @var $model Hrlabel */

$this->breadcrumbs=array(
	'Hrlabels'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Hrlabel', 'url'=>array('index')),
	array('label'=>'Create Hrlabel', 'url'=>array('create')),
	array('label'=>'Update Hrlabel', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Hrlabel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Hrlabel', 'url'=>array('admin')),
);
?>

<h1>View Hrlabel #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'LANGUAGE',
		'TEXT_ID',
		'TEXT',
		'COUNTER',
	),
)); ?>
