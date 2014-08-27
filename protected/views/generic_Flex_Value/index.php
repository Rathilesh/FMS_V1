<?php
/* @var $this Generic_Flex_ValueController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Generic  Flex  Values',
);

$this->menu=array(
	array('label'=>'Create Generic_Flex_Value', 'url'=>array('create')),
	array('label'=>'Manage Generic_Flex_Value', 'url'=>array('admin')),
);
?>

<h1>Generic  Flex  Values</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
