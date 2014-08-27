<?php
/* @var $this PARTY_TYPEController */
/* @var $model PARTY_TYPE */

$this->breadcrumbs=array(
	'Party  Types'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List PARTY_TYPE', 'url'=>array('index')),
	array('label'=>'Create PARTY_TYPE', 'url'=>array('create')),
	array('label'=>'Update PARTY_TYPE', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete PARTY_TYPE', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PARTY_TYPE', 'url'=>array('admin')),
);
?>

<h1>View PARTY_TYPE #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'PARTY_TYPE',
		'WEF',
		'WET',
		'PARTY_ID',
	),
)); ?>
