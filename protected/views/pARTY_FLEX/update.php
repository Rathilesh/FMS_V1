<?php
/* @var $this PARTY_FLEXController */
/* @var $model PARTY_FLEX */

$this->breadcrumbs=array(
	'Party  Flexes'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List PARTY_FLEX', 'url'=>array('index')),
	array('label'=>'Create PARTY_FLEX', 'url'=>array('create')),
	array('label'=>'View PARTY_FLEX', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage PARTY_FLEX', 'url'=>array('admin')),
);
?>

<h1>Update PARTY_FLEX <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>