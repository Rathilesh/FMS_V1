<?php
/* @var $this TESTFORMController */
/* @var $model TESTFORM */

$this->breadcrumbs=array(
	'Testforms'=>array('index'),
	$model->NAME=>array('view','id'=>$model->NAME),
	'Update',
);

$this->menu=array(
	array('label'=>'List TESTFORM', 'url'=>array('index')),
	array('label'=>'Create TESTFORM', 'url'=>array('create')),
	array('label'=>'View TESTFORM', 'url'=>array('view', 'id'=>$model->NAME)),
	array('label'=>'Manage TESTFORM', 'url'=>array('admin')),
);
?>

<h1>Update TESTFORM <?php echo $model->NAME; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>