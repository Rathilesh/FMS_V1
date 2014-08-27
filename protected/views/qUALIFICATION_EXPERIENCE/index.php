<?php
/* @var $this QUALIFICATION_EXPERIENCEController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Qualification  Experiences',
);

$this->menu=array(
	array('label'=>'Create QUALIFICATION_EXPERIENCE', 'url'=>array('create')),
	array('label'=>'Manage QUALIFICATION_EXPERIENCE', 'url'=>array('admin')),
);
?>

<h1>Qualification  Experiences</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
