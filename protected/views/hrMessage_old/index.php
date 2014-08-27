<?php
/* @var $this HrMessageController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hr Messages',
);

$this->menu=array(
	array('label'=>'Create HrMessage', 'url'=>array('create')),
	array('label'=>'Manage HrMessage', 'url'=>array('admin')),
);
?>

<h1>Hr Messages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
