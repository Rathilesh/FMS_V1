<?php
/* @var $this PARTY_IMAGEController */
/* @var $model PARTY_IMAGE */

$this->breadcrumbs=array(
	'Party  Images'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List PARTY_IMAGE', 'url'=>array('index')),
	array('label'=>'Create PARTY_IMAGE', 'url'=>array('create')),
	array('label'=>'View PARTY_IMAGE', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage PARTY_IMAGE', 'url'=>array('admin')),
);
?>

<h1>Update PARTY_IMAGE <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>