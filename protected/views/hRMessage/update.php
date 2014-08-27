<?php
/* @var $this HRMessageController */
/* @var $model HRMessage */

$this->breadcrumbs=array(
	'Hrmessages'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List HRMessage', 'url'=>array('index')),
	array('label'=>'Create HRMessage', 'url'=>array('create')),
	array('label'=>'View HRMessage', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage HRMessage', 'url'=>array('admin')),
);
?>

<h1>Update HRMessage <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>