<?php
/* @var $this Entity_TypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Entity  Types',
);

$this->menu=array(
	array('label'=>'Create Entity_Type', 'url'=>array('create')),
	array('label'=>'Manage Entity_Type', 'url'=>array('admin')),
);
?>

<h1>Entity  Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
