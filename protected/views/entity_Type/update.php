<?php
/* @var $this Entity_TypeController */
/* @var $model Entity_Type */

$this->breadcrumbs=array(
	'Entity  Types'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Entity_Type', 'url'=>array('index')),
	array('label'=>'Create Entity_Type', 'url'=>array('create')),
	array('label'=>'View Entity_Type', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Entity_Type', 'url'=>array('admin')),
);
?>

<h1>Update Entity_Type <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>