<?php
/* @var $this PERSONNEL_UNEMPLOYMENT_DETAILController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Personnel  Unemployment  Details',
);

$this->menu=array(
	array('label'=>'Create PERSONNEL_UNEMPLOYMENT_DETAIL', 'url'=>array('create')),
	array('label'=>'Manage PERSONNEL_UNEMPLOYMENT_DETAIL', 'url'=>array('admin')),
);
?>

<h1>Personnel  Unemployment  Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
