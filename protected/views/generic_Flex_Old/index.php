<?php
/* @var $this Generic_FlexController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Generic  Flexes',
);

$this->menu=array(
	array('label'=>'Create Generic_Flex', 'url'=>array('create')),
	array('label'=>'Manage Generic_Flex', 'url'=>array('admin')),
);
?>

<h1>Generic  Flexes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
