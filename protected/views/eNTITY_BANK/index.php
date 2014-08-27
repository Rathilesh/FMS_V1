<?php
/* @var $this ENTITY_BANKController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Entity  Banks',
);

$this->menu=array(
	array('label'=>'Create ENTITY_BANK', 'url'=>array('create')),
	array('label'=>'Manage ENTITY_BANK', 'url'=>array('admin')),
);
?>

<h1>Entity  Banks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
