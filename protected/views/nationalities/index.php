<?php
/* @var $this NationalitiesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Nationalities',
);

$this->menu=array(
	array('label'=>'Create Nationalities', 'url'=>array('create')),
	array('label'=>'Manage Nationalities', 'url'=>array('admin')),
);
?>

<h1>Nationalities</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
