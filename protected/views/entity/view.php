<?php
/* @var $this EntityController */
/* @var $model Entity */

$this->breadcrumbs=array(
	'Entities'=>array('index'),
	$model->NAME,
);

$this->menu=array(
	array('label'=>'List Entity', 'url'=>array('index')),
	array('label'=>'Create Entity', 'url'=>array('create')),
	array('label'=>'Update Entity', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Entity', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Entity', 'url'=>array('admin')),
);
?>

<h1>View Entity #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'SHORT_NAME',
		'NAME',
		'VISION',
		'MISSION',
		'V01',
		'V02',
		'V03',
		'V04',
		'V05',
		'N01',
		'N02',
		'N03',
		'N04',
		'D01',
		'D02',
		'D03',
		'D04',
		'REGISTRED_ON',
		'DEACTIVATED_ON',
		'ENTITY_ID',
	),
)); ?>
