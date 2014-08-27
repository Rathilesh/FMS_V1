<?php
/* @var $this BASIC_DEFINITIONController */
/* @var $model BASIC_DEFINITION */

$this->breadcrumbs=array(
	'Basic  Definitions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BASIC_DEFINITION', 'url'=>array('index')),
	array('label'=>'Manage BASIC_DEFINITION', 'url'=>array('admin')),
);
?>

<h1>Create BASIC_DEFINITION</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>