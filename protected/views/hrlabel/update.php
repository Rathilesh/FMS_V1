<?php
/* @var $this HrlabelController */
/* @var $model Hrlabel */

//$this->breadcrumbs=array(
//	'Hrlabels'=>array('index'),
//	$model->ID=>array('view','id'=>$model->ID),
//	'Update',
//);
//
//$this->menu=array(
//	array('label'=>'List Hrlabel', 'url'=>array('index')),
//	array('label'=>'Create Hrlabel', 'url'=>array('create')),
//	array('label'=>'View Hrlabel', 'url'=>array('view', 'id'=>$model->ID)),
//	array('label'=>'Manage Hrlabel', 'url'=>array('admin')),
//);
?>

<h1>Update Hrlabel <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>