<?php
/* @var $this PARTY_TYPEController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Party  Types',
);

$this->menu=array(
	array('label'=>'Create PARTY_TYPE', 'url'=>array('create')),
	array('label'=>'Manage PARTY_TYPE', 'url'=>array('admin')),
);
?>

<h1>Party  Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
