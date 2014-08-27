<?php
/* @var $this Generic_Flex_ValueController */
/* @var $model Generic_Flex_Value */

$this->breadcrumbs=array(
	'Generic  Flex  Values'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Generic_Flex_Value', 'url'=>array('index')),
	array('label'=>'Create Generic_Flex_Value', 'url'=>array('create')),
	array('label'=>'Update Generic_Flex_Value', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Generic_Flex_Value', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Generic_Flex_Value', 'url'=>array('admin')),
);
?>

<h1>View Generic_Flex_Value #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'RECORD_ID',
		'FLEX_VALUE',
		'GFLEX_ID',
	),
)); ?>
