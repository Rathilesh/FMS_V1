<?php
/* @var $this Basic_Definition_CategoryController */
/* @var $model Basic_Definition_Category */

$this->breadcrumbs=array(
	'Basic  Definition  Categories'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Basic_Definition_Category', 'url'=>array('index')),
	array('label'=>'Create Basic_Definition_Category', 'url'=>array('create')),
	array('label'=>'View Basic_Definition_Category', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Basic_Definition_Category', 'url'=>array('admin')),
);
?>

<h1>Update Basic_Definition_Category <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>