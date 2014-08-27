<?php
/* @var $this Basic_definitionController */
/* @var $model Basic_definition */

$this->breadcrumbs=array(
	'Basic Definitions'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Basic_definition', 'url'=>array('index')),
	array('label'=>'Create Basic_definition', 'url'=>array('create')),
	array('label'=>'View Basic_definition', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Basic_definition', 'url'=>array('admin')),
);
?>

<h1>Update Basic_definition <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>