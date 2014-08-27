<?php
/* @var $this Bank_Branch_ViewController */
/* @var $model Bank_Branch_View */

$this->breadcrumbs=array(
	'Bank  Branch  Views'=>array('index'),
	$model->NAME=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
//	array('label'=>'List Bank_Branch_View', 'url'=>array('index')),
//	array('label'=>'Create Bank_Branch_View', 'url'=>array('create')),
//	array('label'=>'View Bank_Branch_View', 'url'=>array('view', 'id'=>$model->ID)),
//	array('label'=>'Manage Bank_Branch_View', 'url'=>array('admin')),
);
?>

<h1>Update Bank_Branch_View <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>