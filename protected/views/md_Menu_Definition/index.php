<?php
/* @var $this Md_Menu_DefinitionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Md  Menu  Definitions',
);

$this->menu=array(
	array('label'=>'Create Md_Menu_Definition', 'url'=>array('create')),
	array('label'=>'Manage Md_Menu_Definition', 'url'=>array('admin')),
);
?>

<h1>Md  Menu  Definitions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
