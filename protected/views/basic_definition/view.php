<?php
/* @var $this Basic_definitionController */
/* @var $model Basic_definition */

$this->breadcrumbs=array(
	'Basic Definitions'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Basic_definition', 'url'=>array('index')),
	array('label'=>'Create Basic_definition', 'url'=>array('create')),
	array('label'=>'Update Basic_definition', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Basic_definition', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Basic_definition', 'url'=>array('admin')),
);
?>

<h1>View Basic_definition #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'SHORT_NAME',
		'DESCRIPTION',
		'ENTITY_ID',
		'DFCTG_DEFINITION_TYPE',
	),
)); ?>
