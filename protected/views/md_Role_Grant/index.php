<?php
/* @var $this Md_Role_GrantController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Md  Role  Grants',
);

$this->menu=array(
	array('label'=>'Create Md_Role_Grant', 'url'=>array('create')),
	array('label'=>'Manage Md_Role_Grant', 'url'=>array('admin')),
);
?>

<h1>Md  Role  Grants</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
