<?php
/* @var $this ENTITY_BANKController */
/* @var $model ENTITY_BANK */

$this->breadcrumbs=array(
	'Entity  Banks'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List ENTITY_BANK', 'url'=>array('index')),
	array('label'=>'Create ENTITY_BANK', 'url'=>array('create')),
	array('label'=>'Update ENTITY_BANK', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete ENTITY_BANK', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ENTITY_BANK', 'url'=>array('admin')),
);
?>

<h1>View ENTITY_BANK #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'ACCOUNT_NO',
		'ACCOUNT_OWNER',
		'ACCOUNT_TYPE',
		'CURRENCY',
		'NETPAY_CREDIT',
		'WEF',
		'WET',
		'PARTY_ID',
		'OSTRU_ID',
		'BANK_ID',
		'ENTITY_ID',
	),
)); ?>
