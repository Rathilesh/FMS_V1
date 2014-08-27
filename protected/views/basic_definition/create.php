<?php
/* @var $this Basic_definitionController */
/* @var $model Basic_definition */

$this->breadcrumbs=array(
	'Basic Definitions'=>array('index'),
	'Create',
);

//$this->menu=array(
//	array('label'=>'List Basic_definition', 'url'=>array('index')),
//	array('label'=>'Manage Basic_definition', 'url'=>array('admin')),
//);
//?>

<!--<h1>Create Basic Definition</h1>-->


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>