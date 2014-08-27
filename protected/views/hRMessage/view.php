<?php
/* @var $this HRMessageController */
/* @var $model HRMessage */

$this->breadcrumbs=array(
	'Hrmessages'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List HRMessage', 'url'=>array('index')),
	array('label'=>'Create HRMessage', 'url'=>array('create')),
	array('label'=>'Update HRMessage', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete HRMessage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HRMessage', 'url'=>array('admin')),
);
?>

<h1>View HRMessage #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'LANGUAGE',
		'TEXT',
		'USAGE_COUNT',
	),
)); ?>
