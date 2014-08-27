<?php
/* @var $this PERSONNEL_UNEMPLOYMENT_DETAILController */
/* @var $model PERSONNEL_UNEMPLOYMENT_DETAIL */

$this->breadcrumbs=array(
	'Personnel  Unemployment  Details'=>array('index'),
	$model->PUD_UNIT_CODE=>array('view','id'=>$model->PUD_UNIT_CODE),
	'Update',
);

$this->menu=array(
	array('label'=>'List PERSONNEL_UNEMPLOYMENT_DETAIL', 'url'=>array('index')),
	array('label'=>'Create PERSONNEL_UNEMPLOYMENT_DETAIL', 'url'=>array('create')),
	array('label'=>'View PERSONNEL_UNEMPLOYMENT_DETAIL', 'url'=>array('view', 'id'=>$model->PUD_UNIT_CODE)),
	array('label'=>'Manage PERSONNEL_UNEMPLOYMENT_DETAIL', 'url'=>array('admin')),
);
?>

<h1>Update PERSONNEL_UNEMPLOYMENT_DETAIL <?php echo $model->PUD_UNIT_CODE; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>