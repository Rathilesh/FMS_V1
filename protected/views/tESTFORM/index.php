<?php
/* @var $this TESTFORMController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Testforms',
);

$this->menu=array(
	array('label'=>'Create TESTFORM', 'url'=>array('create')),
	array('label'=>'Manage TESTFORM', 'url'=>array('admin')),
);
?>

<h1>Testforms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
