<?php
/* @var $this Md_User_RoleController */
/* @var $model Md_User_Role */

$this->breadcrumbs=array(
	'Md  User  Roles'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Md_User_Role', 'url'=>array('index')),
	array('label'=>'Create Md_User_Role', 'url'=>array('create')),
	array('label'=>'Update Md_User_Role', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Md_User_Role', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Md_User_Role', 'url'=>array('admin')),
);
?>

<h1>View Md_User_Role #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'MRD_ID',
		'USR_ID',
		'WEF',
		'WET',
		'CREATOR_ID',
		'CREATED_ON',
		'MODIFIER_ID',
		'MODIFIED_ON',
	),
)); ?>
