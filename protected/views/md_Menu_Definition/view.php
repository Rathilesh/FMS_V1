<?php
/* @var $this Md_Menu_DefinitionController */
/* @var $model Md_Menu_Definition */

$this->breadcrumbs=array(
	'Md  Menu  Definitions'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Md_Menu_Definition', 'url'=>array('index')),
	array('label'=>'Create Md_Menu_Definition', 'url'=>array('create')),
	array('label'=>'Update Md_Menu_Definition', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Md_Menu_Definition', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Md_Menu_Definition', 'url'=>array('admin')),
);
?>

<h1>View Md_Menu_Definition #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'SHORT_NAME',
		'MENU_PROMPT',
		'DESCRIPTION',
		'MMO_ID',
		'SUBMENU_MMD_ID',
		'MMD_ID',
		'CREATOR_ID',
		'CREATED_ON',
		'MODIFIER_ID',
		'MODIFIED_ON',
		'DISPLAY_ORDER',
	),
)); ?>
