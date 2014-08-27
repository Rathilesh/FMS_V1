<?php
/* @var $this Ss_Pers_No_Add_ContactController */
/* @var $model Ss_Pers_No_Add_Contact */

$this->breadcrumbs=array(
	'Ss  Pers  No  Add  Contacts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ss_Pers_No_Add_Contact', 'url'=>array('index')),
	array('label'=>'Manage Ss_Pers_No_Add_Contact', 'url'=>array('admin')),
);
?>

<h1>Create Ss_Pers_No_Add_Contact</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>