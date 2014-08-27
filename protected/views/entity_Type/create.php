<?php
/* @var $this Entity_TypeController */
/* @var $model Entity_Type */

$this->breadcrumbs=array(
	'Entity  Types'=>array('index'),
	'Create',
);

// $this->menu=array(
// 	array('label'=>'List Entity_Type', 'url'=>array('index')),
// 	array('label'=>'Manage Entity_Type', 'url'=>array('admin')),
// );
?>

<!-- <h1>Create Entity_Type</h1> -->




<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

 