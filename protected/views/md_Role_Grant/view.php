<?php
/* @var $this Md_Role_GrantController */
/* @var $model Md_Role_Grant */

$this->breadcrumbs=array(
	'Md  Role  Grants'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Md_Role_Grant', 'url'=>array('index')),
	array('label'=>'Create Md_Role_Grant', 'url'=>array('create')),
	array('label'=>'Update Md_Role_Grant', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Md_Role_Grant', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Md_Role_Grant', 'url'=>array('admin')),
);
?>

<h1>View Md_Role_Grant #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'MRD_ID',
		'MMD_ID',
		'MMO_ID',
		'MENU_PROMPT',
		'IS_CREATE',
		'IS_EDIT',
		'IS_REMOVE',
		'CREATOR_ID',
		'CREATED_ON',
		'MODIFIER_ID',
		'MODIFIED_ON',
	),
)); ?>
