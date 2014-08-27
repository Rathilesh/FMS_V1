<?php
/* @var $this Theme_ManagementController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Theme  Managements',
);

$this->menu=array(
	array('label'=>'Create Theme_Management', 'url'=>array('create')),
	array('label'=>'Manage Theme_Management', 'url'=>array('admin')),
);
?>

<h1>Theme  Managements</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
