<?php
/* @var $this Md_Role_MenuController */
/* @var $model Md_Role_Menu */

$this->breadcrumbs=array(
	'Md  Role  Menus'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Md_Role_Menu', 'url'=>array('index')),
	array('label'=>'Create Md_Role_Menu', 'url'=>array('create')),
	array('label'=>'Update Md_Role_Menu', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Md_Role_Menu', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Md_Role_Menu', 'url'=>array('admin')),
);
?>

<h1>View Md_Role_Menu #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'MRD_ID',
		'MMD_ID',
		'DISPLAY_GROUP_NAME',
		'DISPLAY_ORDER',
	),
)); ?>
