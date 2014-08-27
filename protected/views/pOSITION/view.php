<?php
/* @var $this POSITIONController */
/* @var $model POSITION */

$this->breadcrumbs=array(
	'Positions'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List POSITION', 'url'=>array('index')),
	array('label'=>'Create POSITION', 'url'=>array('create')),
	array('label'=>'Update POSITION', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete POSITION', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage POSITION', 'url'=>array('admin')),
);
?>

<h1>View POSITION #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'SHORT_NAME',
		'POSITION',
		'MAX_HEAD_COUNT',
		'HEAD_COUNT',
		'SP_REQUIRED',
		'NOTICE_PERIOD',
		'NOTICE_PERIOD_TOLERANCE',
		'PROBATION',
		'PROBATION_PERIOD_UOM',
		'PROBATION_PERIOD',
		'PROBATION_PERIOD_FOR_PC',
		'ENTITY_ID',
	),
)); ?>
