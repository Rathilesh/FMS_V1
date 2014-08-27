<?php
/* @var $this Md_Object_ParamController */
/* @var $model Md_Object_Param */

$this->breadcrumbs=array(
	'Md  Object  Params'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Md_Object_Param', 'url'=>array('index')),
	array('label'=>'Manage Md_Object_Param', 'url'=>array('admin')),
);
?>

<h1>Create Md_Object_Param</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>