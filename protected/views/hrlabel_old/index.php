<?php
/* @var $this HrlabelController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hrlabels',
);

$this->menu=array(
	array('label'=>'Create Hrlabel', 'url'=>array('create')),
	array('label'=>'Manage Hrlabel', 'url'=>array('admin')),
);
?>

<h1>Hrlabels</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
