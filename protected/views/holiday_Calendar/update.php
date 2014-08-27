<?php
/* @var $this Holiday_CalendarController */
/* @var $model Holiday_Calendar */

$this->breadcrumbs=array(
	'Holiday  Calendars'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

//$this->menu=array(
//	array('label'=>'List Holiday_Calendar', 'url'=>array('index')),
//	array('label'=>'Create Holiday_Calendar', 'url'=>array('create')),
//	array('label'=>'View Holiday_Calendar', 'url'=>array('view', 'id'=>$model->ID)),
//	array('label'=>'Manage Holiday_Calendar', 'url'=>array('admin')),
//);
?>
<div  id="patternDiv">
    <div class="note">
 <div class="labelImage"></div>
 <div class="LabelMsg"><p>
         <?php  $Getlabelname =new Get_Labelname_Cls(); 
            echo  $Getlabelname->Get_Labelname_Fnc("191");?>
     </p></div>
</div></div>

<!--<h1>Update Holiday_Calendar <?php// echo $model->ID; ?></h1>-->

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>