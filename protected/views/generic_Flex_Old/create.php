<?php
/* @var $this Generic_FlexController */
/* @var $model Generic_Flex */

$this->breadcrumbs=array(
	'Generic  Flexes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Generic_Flex', 'url'=>array('index')),
	array('label'=>'Manage Generic_Flex', 'url'=>array('admin')),
);
?>

<h1>Create Generic_Flex</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>