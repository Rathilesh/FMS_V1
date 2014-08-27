<?php
/* @var $this PARTY_TYPEController */
/* @var $model PARTY_TYPE */

$this->breadcrumbs=array(
	'Party  Types'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List PARTY_TYPE', 'url'=>array('index')),
	array('label'=>'Create PARTY_TYPE', 'url'=>array('create')),
	array('label'=>'View PARTY_TYPE', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage PARTY_TYPE', 'url'=>array('admin')),
);
?>

<h1>Update PARTY_TYPE <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>