<?php
/* @var $this BASIC_DEFINITIONController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Basic  Definitions',
);

$this->menu=array(
	array('label'=>'Create BASIC_DEFINITION', 'url'=>array('create')),
	array('label'=>'Manage BASIC_DEFINITION', 'url'=>array('admin')),
);
?>

<h1>Basic  Definitions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
