<?php
/* @var $this TIMEMNGTController */
/* @var $model TIMEMANAGEMENTACTIVITY */

$this->breadcrumbs=array(
	'Timemanagementactivities'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List TIMEMANAGEMENTACTIVITY', 'url'=>array('index')),
	array('label'=>'Create TIMEMANAGEMENTACTIVITY', 'url'=>array('create')),
	array('label'=>'View TIMEMANAGEMENTACTIVITY', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage TIMEMANAGEMENTACTIVITY', 'url'=>array('admin')),
);
?>

<h1>Update TIMEMANAGEMENTACTIVITY <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>