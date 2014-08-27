<?php
/* @var $this Md_Object_ParamController */
/* @var $model Md_Object_Param */

$this->breadcrumbs=array(
	'Md  Object  Params'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Md_Object_Param', 'url'=>array('index')),
	array('label'=>'Create Md_Object_Param', 'url'=>array('create')),
	array('label'=>'Update Md_Object_Param', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Md_Object_Param', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Md_Object_Param', 'url'=>array('admin')),
);
?>

<h1>View Md_Object_Param #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'MMO_ID',
		'PARAM_NAME',
		'PARAM_VALUE',
		'DESCRIPTION',
		'DATA_TYPE',
		'ID',
	),
)); ?>
