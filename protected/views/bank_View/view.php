<?php
/* @var $this Bank_ViewController */
/* @var $model Bank_View */

$this->breadcrumbs=array(
	'Bank  Views'=>array('index'),
	$model->NAME,
);

$this->menu=array(
	array('label'=>'List Bank_View', 'url'=>array('index')),
	array('label'=>'Create Bank_View', 'url'=>array('create')),
	array('label'=>'Update Bank_View', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Bank_View', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Bank_View', 'url'=>array('admin')),
);
?>

<h1>View Bank_View #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'SHORT_NAME',
		'NAME',
		'ADDRESS1',
		'ADDRESS2',
		'ADDRESS3',
		'ADDRESS4',
		'COUNTRY',
		'CONTACT_PERSON',
		'TELEPHONE',
		'FAX',
		'EMAIL',
		'URL',
	),
)); ?>
