<?php
/* @var $this Bank_Branch_ViewController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bank  Branch  Views',
);

$this->menu=array(
	array('label'=>'Create Bank_Branch_View', 'url'=>array('create')),
	array('label'=>'Manage Bank_Branch_View', 'url'=>array('admin')),
);
?>

<h1>Bank  Branch  Views</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
