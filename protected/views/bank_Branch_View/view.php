<?php
/* @var $this Bank_Branch_ViewController */
/* @var $model Bank_Branch_View */

$this->breadcrumbs=array(
	'Bank  Branch  Views'=>array('index'),
	$model->NAME,
);

$this->menu=array(
	array('label'=>'List Bank_Branch_View', 'url'=>array('index')),
	array('label'=>'Create Bank_Branch_View', 'url'=>array('create')),
	array('label'=>'Update Bank_Branch_View', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Bank_Branch_View', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Bank_Branch_View', 'url'=>array('admin')),
);
?>

<h1>View Bank_Branch_View #<?php echo $model->ID; ?></h1>

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
		'BANK_ID',
	),
)); ?>
