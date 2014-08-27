<?php
/* @var $this BASIC_DEFINITIONController */
/* @var $model BASIC_DEFINITION */

$this->breadcrumbs=array(
	'Basic  Definitions'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List BASIC_DEFINITION', 'url'=>array('index')),
	array('label'=>'Create BASIC_DEFINITION', 'url'=>array('create')),
	array('label'=>'Update BASIC_DEFINITION', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete BASIC_DEFINITION', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BASIC_DEFINITION', 'url'=>array('admin')),
);
?>

<h1>View BASIC_DEFINITION #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'SHORT_NAME',
		'DESCRIPTION',
		'DFCTG_DEFINITION_TYPE',
		'ENTITY_ID',
	),
)); ?>
