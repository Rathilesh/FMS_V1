<?php
/* @var $this TESTFORMController */
/* @var $model TESTFORM */

$this->breadcrumbs=array(
	'Testforms'=>array('index'),
	$model->NAME,
);

$this->menu=array(
	array('label'=>'List TESTFORM', 'url'=>array('index')),
	array('label'=>'Create TESTFORM', 'url'=>array('create')),
	array('label'=>'Update TESTFORM', 'url'=>array('update', 'id'=>$model->NAME)),
	array('label'=>'Delete TESTFORM', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->NAME),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TESTFORM', 'url'=>array('admin')),
);
?>

<h1>View TESTFORM #<?php echo $model->NAME; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'NAME',
		'AGE',
		'ADDRESS',
		'ADDRESS1',
		'CITY',
		'STATE',
	),
)); ?>
