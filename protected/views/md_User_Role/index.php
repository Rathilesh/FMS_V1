<?php //
/* @var $this Md_User_RoleController */
/* @var $dataProvider CActiveDataProvider */

//$this->breadcrumbs=array(
//	'Md  User  Roles',
//);
//
//$this->menu=array(
//	array('label'=>'Create Md_User_Role', 'url'=>array('create')),
//	array('label'=>'Manage Md_User_Role', 'url'=>array('admin')),
//);
?>

<!--<h1>Md  User  Roles</h1>-->

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
