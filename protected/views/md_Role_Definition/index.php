<?php
/* @var $this Md_Role_DefinitionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Md  Role  Definitions',
);

$this->menu=array(
	array('label'=>'Create Md_Role_Definition', 'url'=>array('create')),
	array('label'=>'Manage Md_Role_Definition', 'url'=>array('admin')),
);
?>

<h1>Md  Role  Definitions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
