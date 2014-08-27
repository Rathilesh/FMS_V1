<?php
/* @var $this Md_Role_GrantController */
/* @var $model Md_Role_Grant */

$this->breadcrumbs=array(
	'Md  Role  Grants'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Md_Role_Grant', 'url'=>array('index')),
	array('label'=>'Create Md_Role_Grant', 'url'=>array('create')),
	array('label'=>'View Md_Role_Grant', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Md_Role_Grant', 'url'=>array('admin')),
);
?>

<h1>Update Md_Role_Grant <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>