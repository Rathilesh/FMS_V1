<?php
/* @var $this Md_Object_ParamController */
/* @var $model Md_Object_Param */

$this->breadcrumbs=array(
	'Md  Object  Params'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Md_Object_Param', 'url'=>array('index')),
	array('label'=>'Create Md_Object_Param', 'url'=>array('create')),
	array('label'=>'View Md_Object_Param', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Md_Object_Param', 'url'=>array('admin')),
);
?>

<h1>Update Md_Object_Param <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>