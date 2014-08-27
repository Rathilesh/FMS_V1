<?php
/* @var $this HrMessageController */
/* @var $model HrMessage */

$this->breadcrumbs=array(
	'Hr Messages'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List HrMessage', 'url'=>array('index')),
	array('label'=>'Create HrMessage', 'url'=>array('create')),
	array('label'=>'View HrMessage', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage HrMessage', 'url'=>array('admin')),
);
?>

<h1>Update HrMessage <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>