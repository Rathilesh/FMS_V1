<?php
/* @var $this Generic_FlexController */
/* @var $model Generic_Flex */

$this->breadcrumbs=array(
	'Generic  Flexes'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Generic_Flex', 'url'=>array('index')),
	array('label'=>'Create Generic_Flex', 'url'=>array('create')),
	array('label'=>'View Generic_Flex', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Generic_Flex', 'url'=>array('admin')),
);
?>

<h1>Update Generic_Flex <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>