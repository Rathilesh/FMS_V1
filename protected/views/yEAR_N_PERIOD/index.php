<?php
/* @var $this YEAR_N_PERIODController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Year  N  Periods',
);

$this->menu=array(
	array('label'=>'Create YEAR_N_PERIOD', 'url'=>array('create')),
	array('label'=>'Manage YEAR_N_PERIOD', 'url'=>array('admin')),
);
?>

<h1>Year  N  Periods</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
