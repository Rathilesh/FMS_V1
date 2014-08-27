<?php
/* @var $this Md_Menu_DefinitionController */
/* @var $model Md_Menu_Definition */

$this->breadcrumbs=array(
	'Md  Menu  Definitions'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Md_Menu_Definition', 'url'=>array('index')),
	array('label'=>'Create Md_Menu_Definition', 'url'=>array('create')),
	array('label'=>'View Md_Menu_Definition', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Md_Menu_Definition', 'url'=>array('admin')),
);
?>

<h1>Update Md_Menu_Definition <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>