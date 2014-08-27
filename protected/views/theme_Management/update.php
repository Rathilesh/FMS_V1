<?php
/* @var $this Theme_ManagementController */
/* @var $model Theme_Management */

$this->breadcrumbs=array(
	'Theme  Managements'=>array('index'),
	$model->PID=>array('view','id'=>$model->PID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Theme_Management', 'url'=>array('index')),
	array('label'=>'Create Theme_Management', 'url'=>array('create')),
	array('label'=>'View Theme_Management', 'url'=>array('view', 'id'=>$model->PID)),
	array('label'=>'Manage Theme_Management', 'url'=>array('admin')),
);
?>

<h1>Update Theme_Management <?php echo $model->PID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>