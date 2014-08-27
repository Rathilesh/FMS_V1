<?php
/* @var $this Md_Object_ParamController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Md  Object  Params',
);

$this->menu=array(
	array('label'=>'Create Md_Object_Param', 'url'=>array('create')),
	array('label'=>'Manage Md_Object_Param', 'url'=>array('admin')),
);
?>

<h1>Md  Object  Params</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
