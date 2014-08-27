<?php
/* @var $this Md_Role_DefinitionController */
/* @var $model Md_Role_Definition */

$this->breadcrumbs=array(
	'Md  Role  Definitions'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Md_Role_Definition', 'url'=>array('index')),
	array('label'=>'Create Md_Role_Definition', 'url'=>array('create')),
	array('label'=>'Update Md_Role_Definition', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Md_Role_Definition', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Md_Role_Definition', 'url'=>array('admin')),
);
?>

<h1>View Md_Role_Definition #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'SHORT_NAME',
		'ROLE_NAME',
		'DESCRIPTION',
		'CREATOR_ID',
		'CREATED_ON',
		'MODIFIER_ID',
		'MODIFIED_ON',
	),
)); ?>
