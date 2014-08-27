<?php
/* @var $this PARTY_IMAGEController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Party  Images',
);

$this->menu=array(
	array('label'=>'Create PARTY_IMAGE', 'url'=>array('create')),
	array('label'=>'Manage PARTY_IMAGE', 'url'=>array('admin')),
);
?>

<h1>Party  Images</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
