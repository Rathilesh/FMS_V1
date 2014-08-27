<?php
/* @var $this Generic_Flex_ValueController */
/* @var $model Generic_Flex_Value */

$this->breadcrumbs=array(
	'Generic  Flex  Values'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Generic_Flex_Value', 'url'=>array('index')),
	array('label'=>'Create Generic_Flex_Value', 'url'=>array('create')),
	array('label'=>'View Generic_Flex_Value', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Generic_Flex_Value', 'url'=>array('admin')),
);
?>

<h1>Update Generic_Flex_Value <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>