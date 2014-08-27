<?php
/* @var $this SALARY_SCALE_DTLController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Salary  Scale  Dtls',
);

$this->menu=array(
	array('label'=>'Create SALARY_SCALE_DTL', 'url'=>array('create')),
	array('label'=>'Manage SALARY_SCALE_DTL', 'url'=>array('admin')),
);
?>

<h1>Salary  Scale  Dtls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
