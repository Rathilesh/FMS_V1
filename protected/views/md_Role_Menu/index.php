<?php
/* @var $this Md_Role_MenuController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Md  Role  Menus',
);

$this->menu=array(
	array('label'=>'Create Md_Role_Menu', 'url'=>array('create')),
	array('label'=>'Manage Md_Role_Menu', 'url'=>array('admin')),
);
?>

<h1>Md  Role  Menus</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
