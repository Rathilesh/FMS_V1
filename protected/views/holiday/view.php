<?php
/* @var $this HolidayController */
/* @var $model Holiday */

$this->breadcrumbs=array(
	'Holidays'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Holiday', 'url'=>array('index')),
	array('label'=>'Create Holiday', 'url'=>array('create')),
	array('label'=>'Update Holiday', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Holiday', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Holiday', 'url'=>array('admin')),
);
?>

<h1>View Holiday #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'HOLIDAY_DATE',
		'DESCRIPTION',
		'IS_COMPULSORY',
		'IS_RESTRICTED',
		'DECLARATION_REFERENCE',
		'DATE_OF_DECLARATION',
		'CALD_ID',
	),
)); ?>
