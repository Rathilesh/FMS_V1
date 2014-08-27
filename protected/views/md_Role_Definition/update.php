<?php
/* @var $this Md_Role_DefinitionController */
/* @var $model Md_Role_Definition */

$this->breadcrumbs=array(
	'Md  Role  Definitions'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Md_Role_Definition', 'url'=>array('index')),
	array('label'=>'Create Md_Role_Definition', 'url'=>array('create')),
	array('label'=>'View Md_Role_Definition', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Md_Role_Definition', 'url'=>array('admin')),
);
?>

<h1>Update Md_Role_Definition <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>