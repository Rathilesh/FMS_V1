<?php
/* @var $this PARTY_IMAGEController */
/* @var $model PARTY_IMAGE */

$this->breadcrumbs=array(
	'Party  Images'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List PARTY_IMAGE', 'url'=>array('index')),
	array('label'=>'Create PARTY_IMAGE', 'url'=>array('create')),
	array('label'=>'Update PARTY_IMAGE', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete PARTY_IMAGE', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PARTY_IMAGE', 'url'=>array('admin')),
);
?>

<h1>View PARTY_IMAGE #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'IMAGE_TYPE',
		'IMAGE',
		'PRQ_ID',
		'PARTY_ID',
		'SCANNED_ON',
	),
)); ?>
