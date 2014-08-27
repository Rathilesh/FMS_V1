<?php
/* @var $this Generic_FlexController */
/* @var $model Generic_Flex */

$this->breadcrumbs=array(
	'Generic  Flexes'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Generic_Flex', 'url'=>array('index')),
	array('label'=>'Create Generic_Flex', 'url'=>array('create')),
	array('label'=>'Update Generic_Flex', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Generic_Flex', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Generic_Flex', 'url'=>array('admin')),
);
?>

<h1>View Generic_Flex #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'TABLE_ID',
		'FILED_SEQUENCE',
		'FILED_TITLE',
		'DATA_TYPE',
		'MAX_LENGTH',
		'CANVAS',
		'XCORDINATE',
		'YCORDINATE',
		'IS_REQUIRED',
	),
)); ?>
