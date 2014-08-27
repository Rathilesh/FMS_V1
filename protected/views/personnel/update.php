<?php
/* @var $this PersonnelController */
/* @var $model Personnel */

$this->breadcrumbs=array(
	'Personnels'=>array('index'),
	$model->PERSONAL_ID=>array('view','id'=>$model->PERSONAL_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Personnel', 'url'=>array('index')),
	array('label'=>'Create Personnel', 'url'=>array('create')),
	array('label'=>'View Personnel', 'url'=>array('view', 'id'=>$model->PERSONAL_ID)),
	array('label'=>'Manage Personnel', 'url'=>array('admin')),
);
?>

<h1>Update Personnel <?php echo $model->PERSONAL_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>