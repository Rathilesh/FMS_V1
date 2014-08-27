<?php
/* @var $this PARTY_FLEXController */
/* @var $model PARTY_FLEX */

$this->breadcrumbs=array(
	'Party  Flexes'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List PARTY_FLEX', 'url'=>array('index')),
	array('label'=>'Create PARTY_FLEX', 'url'=>array('create')),
	array('label'=>'Update PARTY_FLEX', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete PARTY_FLEX', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PARTY_FLEX', 'url'=>array('admin')),
);
?>

<h1>View PARTY_FLEX #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'FLEX',
		'FLEX_VALUE',
		'REMARK',
		'WEF',
		'WET',
		'PARTY_ID',
	),
)); ?>
