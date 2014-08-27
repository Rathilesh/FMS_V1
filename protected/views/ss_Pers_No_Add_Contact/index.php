<?php
/* @var $this Ss_Pers_No_Add_ContactController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ss  Pers  No  Add  Contacts',
);

$this->menu=array(
	array('label'=>'Create Ss_Pers_No_Add_Contact', 'url'=>array('create')),
	array('label'=>'Manage Ss_Pers_No_Add_Contact', 'url'=>array('admin')),
);
?>

<h1>Ss  Pers  No  Add  Contacts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
