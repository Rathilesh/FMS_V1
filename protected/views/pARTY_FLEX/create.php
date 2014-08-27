<?php
/* @var $this PARTY_FLEXController */
/* @var $model PARTY_FLEX */

$this->breadcrumbs=array(
	'Party  Flexes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PARTY_FLEX', 'url'=>array('index')),
	array('label'=>'Manage PARTY_FLEX', 'url'=>array('admin')),
);
?>

<h1>Create PARTY_FLEX</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>