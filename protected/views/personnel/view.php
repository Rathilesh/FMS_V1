<?php
/* @var $this PersonnelController */
/* @var $model Personnel */

$this->breadcrumbs=array(
	'Personnels'=>array('index'),
	$model->PERSONAL_ID,
);

$this->menu=array(
	array('label'=>'List Personnel', 'url'=>array('index')),
	array('label'=>'Create Personnel', 'url'=>array('create')),
	array('label'=>'Update Personnel', 'url'=>array('update', 'id'=>$model->PERSONAL_ID)),
	array('label'=>'Delete Personnel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PERSONAL_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Personnel', 'url'=>array('admin')),
);
?>

<h1>View Personnel #<?php echo $model->PERSONAL_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PERSONAL_ID',
		'SALUTATION',
		'FIRST_NAME',
		'MIDDILE_NAME',
		'LAST_NAME',
		'PREFERED_NAME',
		'ALTERNATE_NAME',
		'DOB',
		'GENDER',
		'RELIGION',
		'BLOOD_GROUP',
		'SUBCAST',
		'FATHER',
		'MOTHER',
		'NATIONALITY',
		'CASUAL',
		'MARRIED',
		'SECONDMENT',
		'SECONDMENT_ORG_ID',
		'VERIFIED',
		'ACTIVE',
		'PARTY_ID',
	),
)); ?>
