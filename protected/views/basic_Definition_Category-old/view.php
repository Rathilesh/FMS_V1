<?php
/* @var $this Basic_Definition_CategoryController */
/* @var $model Basic_Definition_Category */

$this->breadcrumbs=array(
	'Basic  Definition  Categories'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Basic_Definition_Category', 'url'=>array('index')),
	array('label'=>'Create Basic_Definition_Category', 'url'=>array('create')),
	array('label'=>'Update Basic_Definition_Category', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Basic_Definition_Category', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Basic_Definition_Category', 'url'=>array('admin')),
);
?>

<h1>View Basic_Definition_Category #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'DEFINITION_TYPE',
		'DESCRIPTION',
		'IS_AMEND',
		'IS_DISPLAY',
		'IS_UNIVERSAL',
		'IS_COMPULSORY',
		'NO_OF_RECORDS',
	),
)); ?>
