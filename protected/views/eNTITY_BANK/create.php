<?php
/* @var $this ENTITY_BANKController */
/* @var $model ENTITY_BANK */

$this->breadcrumbs=array(
	'Entity  Banks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ENTITY_BANK', 'url'=>array('index')),
	array('label'=>'Manage ENTITY_BANK', 'url'=>array('admin')),
);
?>

<h1>Create ENTITY_BANK</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>