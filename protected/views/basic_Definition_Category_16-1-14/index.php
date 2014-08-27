<?php
/* @var $this Basic_Definition_CategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Basic  Definition  Categories',
);

$this->menu=array(
	array('label'=>'Create Basic_Definition_Category', 'url'=>array('create')),
	array('label'=>'Manage Basic_Definition_Category', 'url'=>array('admin')),
);
?>

<h1>Basic  Definition  Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
