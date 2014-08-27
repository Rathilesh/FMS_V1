<?php
/* @var $this SALARY_SCALE_DTLController */
/* @var $model SALARY_SCALE_DTL */

$this->breadcrumbs=array(
	'Salary  Scale  Dtls'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List SALARY_SCALE_DTL', 'url'=>array('index')),
	array('label'=>'Create SALARY_SCALE_DTL', 'url'=>array('create')),
	array('label'=>'View SALARY_SCALE_DTL', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage SALARY_SCALE_DTL', 'url'=>array('admin')),
);
?>

<h1>Update SALARY_SCALE_DTL <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>