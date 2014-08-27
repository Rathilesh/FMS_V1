<?php
/* @var $this SALARY_SCALE_DTLController */
/* @var $model SALARY_SCALE_DTL */

$this->breadcrumbs=array(
	'Salary  Scale  Dtls'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List SALARY_SCALE_DTL', 'url'=>array('index')),
	array('label'=>'Create SALARY_SCALE_DTL', 'url'=>array('create')),
	array('label'=>'Update SALARY_SCALE_DTL', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete SALARY_SCALE_DTL', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SALARY_SCALE_DTL', 'url'=>array('admin')),
);
?>

<h1>View SALARY_SCALE_DTL #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'NOTCH',
		'EFFECIENCY_BAR',
		'STAGE_AMOUNT',
		'SALDTL_INCREMENT',
		'SALARY_ID',
	),
)); ?>
