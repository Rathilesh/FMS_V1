<?php
/* @var $this QUALIFICATION_EXPERIENCEController */
/* @var $model QUALIFICATION_EXPERIENCE */

//$this->breadcrumbs=array(
//	'Qualification  Experiences'=>array('index'),
//	$model->ID=>array('view','id'=>$model->ID),
//	'Update',
//);
//
//$this->menu=array(
//	array('label'=>'List QUALIFICATION_EXPERIENCE', 'url'=>array('index')),
//	array('label'=>'Create QUALIFICATION_EXPERIENCE', 'url'=>array('create')),
//	array('label'=>'View QUALIFICATION_EXPERIENCE', 'url'=>array('view', 'id'=>$model->ID)),
//	array('label'=>'Manage QUALIFICATION_EXPERIENCE', 'url'=>array('admin')),
//);
?>

<!--<div  id="patternDiv" >
    <div class="note">
 <div class="labelImage"></div>
 <div class="LabelMsg"><p> <?php  $Getlabelname =new Get_Labelname_Cls(); 
            echo  $Getlabelname->Get_Labelname_Fnc("220")."-".$model->ID;?></p></div>
</div></div>-->


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>