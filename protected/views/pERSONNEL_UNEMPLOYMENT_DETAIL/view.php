<?php
/* @var $this PERSONNEL_UNEMPLOYMENT_DETAILController */
/* @var $model PERSONNEL_UNEMPLOYMENT_DETAIL */

$this->breadcrumbs=array(
	'Personnel  Unemployment  Details'=>array('index'),
	$model->PUD_UNIT_CODE,
);

$this->menu=array(
	array('label'=>'List PERSONNEL_UNEMPLOYMENT_DETAIL', 'url'=>array('index')),
	array('label'=>'Create PERSONNEL_UNEMPLOYMENT_DETAIL', 'url'=>array('create')),
	array('label'=>'Update PERSONNEL_UNEMPLOYMENT_DETAIL', 'url'=>array('update', 'id'=>$model->PUD_UNIT_CODE)),
	array('label'=>'Delete PERSONNEL_UNEMPLOYMENT_DETAIL', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PUD_UNIT_CODE),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PERSONNEL_UNEMPLOYMENT_DETAIL', 'url'=>array('admin')),
);
?>

<h1>View PERSONNEL_UNEMPLOYMENT_DETAIL #<?php echo $model->PUD_UNIT_CODE; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PUD_EU_ORGN_CODE',
		'PUD_UNIT_CODE',
		'PUD_PER_NO',
		'PUD_FROM_MONTH',
		'PUD_FROM_YEAR',
		'PUD_TO_MONTH',
		'PUD_TO_YEAR',
		'PUD_ACTIVITY_DURING_PERIOD',
		'PUD_NAME_OF_CONFIRMING_PARTY',
		'PUD_ADDR_OF_CONFIRMING_PARTY',
		'PUD_TELEPHONE_NO',
		'PUD_EMAIL_ID',
		'PUD_ENTERED_BY_PER_NO',
		'PUD_ENTERED_DATE',
		'PUD_APPROVED_BY_PER_NO',
		'PUD_APPROVED_DATE',
	),
)); ?>
