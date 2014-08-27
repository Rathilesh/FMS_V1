<?php
/* @var $this PARTY_FLEXController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Party  Flexes',
);

$this->menu=array(
	array('label'=>'Create PARTY_FLEX', 'url'=>array('create')),
	array('label'=>'Manage PARTY_FLEX', 'url'=>array('admin')),
);
?>

<h1>Party  Flexes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
