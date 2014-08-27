<?php
/* @var $this PERSONNEL_UNEMPLOYMENT_DETAILController */
/* @var $model PERSONNEL_UNEMPLOYMENT_DETAIL */

$this->breadcrumbs=array(
	'Personnel  Unemployment  Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PERSONNEL_UNEMPLOYMENT_DETAIL', 'url'=>array('index')),
	array('label'=>'Manage PERSONNEL_UNEMPLOYMENT_DETAIL', 'url'=>array('admin')),
);
?>

<h1>Create PERSONNEL_UNEMPLOYMENT_DETAIL</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>