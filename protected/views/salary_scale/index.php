<?php
/* @var $this Salary_scaleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Salary Scales',
);

$this->menu=array(
	array('label'=>'Create Salary_scale', 'url'=>array('create')),
	array('label'=>'Manage Salary_scale', 'url'=>array('admin')),
);
?>

<h1>Salary Scales</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
