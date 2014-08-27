<?php
/* @var $this NationalitiesController */
/* @var $model Nationalities */

$this->breadcrumbs=array(
	'Nationalities'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Nationalities', 'url'=>array('index')),
	array('label'=>'Create Nationalities', 'url'=>array('create')),
	array('label'=>'View Nationalities', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Nationalities', 'url'=>array('admin')),
);
?>

<h1>Update Nationalities <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>