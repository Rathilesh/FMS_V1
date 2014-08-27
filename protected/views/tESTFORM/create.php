<?php
/* @var $this TESTFORMController */
/* @var $model TESTFORM */

$this->breadcrumbs=array(
	'Testforms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TESTFORM', 'url'=>array('index')),
	array('label'=>'Manage TESTFORM', 'url'=>array('admin')),
);
?>

<h1>Create TESTFORM</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>