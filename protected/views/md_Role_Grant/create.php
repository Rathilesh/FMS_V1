<?php
/* @var $this Md_Role_GrantController */
/* @var $model Md_Role_Grant */

$this->breadcrumbs=array(
	'Md  Role  Grants'=>array('index'),
	'Create',
);

//$this->menu=array(
//	array('label'=>'List Md_Role_Grant', 'url'=>array('index')),
//	array('label'=>'Manage Md_Role_Grant', 'url'=>array('admin')),
//);
?>

<!--<h1>Create Md_Role_Grant</h1>-->

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>