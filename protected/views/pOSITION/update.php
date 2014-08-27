<?php
/* @var $this POSITIONController */
/* @var $model POSITION */

$this->breadcrumbs=array(
	'Positions'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List POSITION', 'url'=>array('index')),
	array('label'=>'Create POSITION', 'url'=>array('create')),
	array('label'=>'View POSITION', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage POSITION', 'url'=>array('admin')),
);
?>

<h1>Update POSITION <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>