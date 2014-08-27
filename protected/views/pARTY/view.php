<?php
/* @var $this PARTYController */
/* @var $model PARTY */

$this->breadcrumbs=array(
	'Parties'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List PARTY', 'url'=>array('index')),
	array('label'=>'Create PARTY', 'url'=>array('create')),
	array('label'=>'Update PARTY', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete PARTY', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PARTY', 'url'=>array('admin')),
);
?>

<h1>View PARTY #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'SALUTATION',
		'FIRST_NAME',
		'MIDDILE_NAME',
		'LAST_NAME',
		'PREFERED_NAME',
		'GENDER',
		'CONTACT_PERSON',
		'DOB',
		'NATIONAL_ID',
		'V01',
		'V02',
		'V03',
		'V04',
		'V05',
		'N01',
		'N02',
		'N03',
		'N04',
		'D01',
		'D02',
		'D03',
		'D04',
		'ENTITY_ID',
	),
)); ?>
