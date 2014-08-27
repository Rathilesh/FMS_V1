<?php
/* @var $this PARTY_TYPEController */
/* @var $model PARTY_TYPE */

$this->breadcrumbs=array(
	'Party  Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PARTY_TYPE', 'url'=>array('index')),
	array('label'=>'Manage PARTY_TYPE', 'url'=>array('admin')),
);
?>

<h1>Create PARTY_TYPE</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>