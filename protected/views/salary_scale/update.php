<?php
/* @var $this Salary_scaleController */
/* @var $model Salary_scale */

$this->breadcrumbs=array(
	'Salary Scales'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Salary_scale', 'url'=>array('index')),
	array('label'=>'Create Salary_scale', 'url'=>array('create')),
	array('label'=>'View Salary_scale', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Salary_scale', 'url'=>array('admin')),
);
?>

<h1>Update Salary_scale <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>