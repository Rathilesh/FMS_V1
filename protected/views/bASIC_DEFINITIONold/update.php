<?php
/* @var $this BASIC_DEFINITIONController */
/* @var $model BASIC_DEFINITION */

$this->breadcrumbs=array(
	'Basic  Definitions'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List BASIC_DEFINITION', 'url'=>array('index')),
	array('label'=>'Create BASIC_DEFINITION', 'url'=>array('create')),
	array('label'=>'View BASIC_DEFINITION', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage BASIC_DEFINITION', 'url'=>array('admin')),
);
?>

<h1>Update BASIC_DEFINITION <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>