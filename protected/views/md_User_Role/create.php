<?php
/* @var $this Md_User_RoleController */
/* @var $model Md_User_Role */

$this->breadcrumbs=array(
	'Md  User  Roles'=>array('index'),
	'Create',
);

//$this->menu=array(
//	array('label'=>'List Md_User_Role', 'url'=>array('index')),
//	array('label'=>'Manage Md_User_Role', 'url'=>array('admin')),
//);
//?>

<!--<h1>Create Md_User_Role</h1>-->

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>