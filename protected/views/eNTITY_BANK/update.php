<?php
/* @var $this ENTITY_BANKController */
/* @var $model ENTITY_BANK */

$this->breadcrumbs=array(
	'Entity  Banks'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List ENTITY_BANK', 'url'=>array('index')),
	array('label'=>'Create ENTITY_BANK', 'url'=>array('create')),
	array('label'=>'View ENTITY_BANK', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage ENTITY_BANK', 'url'=>array('admin')),
);
?>

<h1>Update ENTITY_BANK <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>