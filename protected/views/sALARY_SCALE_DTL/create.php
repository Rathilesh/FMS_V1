<?php
/* @var $this SALARY_SCALE_DTLController */
/* @var $model SALARY_SCALE_DTL */

$this->breadcrumbs=array(
	'Salary  Scale  Dtls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SALARY_SCALE_DTL', 'url'=>array('index')),
	array('label'=>'Manage SALARY_SCALE_DTL', 'url'=>array('admin')),
);
?>

<h1>Create SALARY_SCALE_DTL</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>