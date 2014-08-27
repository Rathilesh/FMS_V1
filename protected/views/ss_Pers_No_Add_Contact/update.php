<?php
/* @var $this Ss_Pers_No_Add_ContactController */
/* @var $model Ss_Pers_No_Add_Contact */

$this->breadcrumbs=array(
	'Ss  Pers  No  Add  Contacts'=>array('index'),
	$model->PNAC_ID=>array('view','id'=>$model->PNAC_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ss_Pers_No_Add_Contact', 'url'=>array('index')),
	array('label'=>'Create Ss_Pers_No_Add_Contact', 'url'=>array('create')),
	array('label'=>'View Ss_Pers_No_Add_Contact', 'url'=>array('view', 'id'=>$model->PNAC_ID)),
	array('label'=>'Manage Ss_Pers_No_Add_Contact', 'url'=>array('admin')),
);
?>

<h1>Update Ss_Pers_No_Add_Contact <?php echo $model->PNAC_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>