<?php
/* @var $this Md_User_RoleController */
/* @var $model Md_User_Role */

$this->breadcrumbs=array(
	'Md  User  Roles'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Md_User_Role', 'url'=>array('index')),
	array('label'=>'Create Md_User_Role', 'url'=>array('create')),
	array('label'=>'View Md_User_Role', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Md_User_Role', 'url'=>array('admin')),
);
?>

<h1>Update Md_User_Role <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>