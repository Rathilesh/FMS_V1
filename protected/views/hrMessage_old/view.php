<?php
/* @var $this HrMessageController */
/* @var $model HrMessage */

$this->breadcrumbs=array(
	'Hr Messages'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List HrMessage', 'url'=>array('index')),
	array('label'=>'Create HrMessage', 'url'=>array('create')),
	array('label'=>'Update HrMessage', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete HrMessage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HrMessage', 'url'=>array('admin')),
);
?>

<h1>View HrMessage #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'TEXT',
		'USAGE_COUNT',
	),
)); ?>
