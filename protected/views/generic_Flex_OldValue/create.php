<?php
/* @var $this Generic_Flex_ValueController */
/* @var $model Generic_Flex_Value */

$this->breadcrumbs=array(
	'Generic  Flex  Values'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Generic_Flex_Value', 'url'=>array('index')),
	array('label'=>'Manage Generic_Flex_Value', 'url'=>array('admin')),
);
?>

<h1>Create Generic_Flex_Value</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>