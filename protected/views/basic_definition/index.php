<?php
/* @var $this Basic_definitionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Basic Definitions',
);

$this->menu=array(
	array('label'=>'Create Basic_definition', 'url'=>array('create')),
	array('label'=>'Manage Basic_definition', 'url'=>array('admin')),
);
?>

<h1>Basic Definitions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
