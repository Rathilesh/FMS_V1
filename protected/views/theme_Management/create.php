<?php
/* @var $this Theme_ManagementController */
/* @var $model Theme_Management */

$this->breadcrumbs=array(
	'Theme  Managements'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Theme_Management', 'url'=>array('index')),
	array('label'=>'Manage Theme_Management', 'url'=>array('admin')),
);
?>

<h1>Create Theme_Management</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>