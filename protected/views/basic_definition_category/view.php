<?php
/* @var $this Basic_Definition_CategoryController */
/* @var $model Basic_Definition_Category */

$this->breadcrumbs=array(
	'Basic  Definition  Categories'=>array('index'),
	$model->DEFINITION_TYPE,
);

$this->menu=array(
	array('label'=>'List Basic_Definition_Category', 'url'=>array('index')),
	array('label'=>'Create Basic_Definition_Category', 'url'=>array('create')),
	array('label'=>'Update Basic_Definition_Category', 'url'=>array('update', 'id'=>$model->DEFINITION_TYPE)),
	array('label'=>'Delete Basic_Definition_Category', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->DEFINITION_TYPE),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Basic_Definition_Category', 'url'=>array('admin')),
);
?>

<h1>View Basic_Definition_Category #<?php echo $model->DEFINITION_TYPE; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'DEFINITION_TYPE',
		'DESCRIPTION',
		'IS_AMEND',
		'IS_DISPLAY',
		'IS_UNIVERSAL',
		'IS_COMPULSORY',
		'NO_OF_RECORDS',
	),
)); ?>
