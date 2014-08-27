<?php
/* @var $this Md_Role_MenuController */
/* @var $model Md_Role_Menu */

$this->breadcrumbs=array(
	'Md  Role  Menus'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Md_Role_Menu', 'url'=>array('index')),
	array('label'=>'Manage Md_Role_Menu', 'url'=>array('admin')),
);
?>

<h1>Create Md_Role_Menu</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>