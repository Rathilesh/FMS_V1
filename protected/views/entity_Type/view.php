<?php
/* @var $this Entity_TypeController */
/* @var $model Entity_Type */

$this->breadcrumbs=array(
	'Entity  Types'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Entity_Type', 'url'=>array('index')),
	array('label'=>'Create Entity_Type', 'url'=>array('create')),
	array('label'=>'Update Entity_Type', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Entity_Type', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Entity_Type', 'url'=>array('admin')),
);
?>

<h1>View Entity_Type #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'ENTITY_TYPE',
		'ENTITY_LEVEL',
		'IS_LOCATION',
		'IS_FUNCTION',
		'IS_POSITION',
		'ENTITY_ID',
	),
)); ?>
