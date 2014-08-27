<?php
/* @var $this Bank_ViewController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bank  Views',
);

$this->menu=array(
	array('label'=>'Create Bank_View', 'url'=>array('create')),
	array('label'=>'Manage Bank_View', 'url'=>array('admin')),
);
?>

<h1>Bank  Views</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
