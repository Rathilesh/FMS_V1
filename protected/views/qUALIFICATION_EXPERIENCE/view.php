<?php
/* @var $this QUALIFICATION_EXPERIENCEController */
/* @var $model QUALIFICATION_EXPERIENCE */

$this->breadcrumbs=array(
	'Qualification  Experiences'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List QUALIFICATION_EXPERIENCE', 'url'=>array('index')),
	array('label'=>'Create QUALIFICATION_EXPERIENCE', 'url'=>array('create')),
	array('label'=>'Update QUALIFICATION_EXPERIENCE', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete QUALIFICATION_EXPERIENCE', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage QUALIFICATION_EXPERIENCE', 'url'=>array('admin')),
);
?>

<h1>View QUALIFICATION_EXPERIENCE #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'RECORD_TYPE',
		'SHORT_NAME',
		'DESCRIPTION',
		'IS_PROFESSIONAL',
		'IS_ACADEMIC',
		'EFLO_ID',
		'EDU_ID',
	),
)); ?>
