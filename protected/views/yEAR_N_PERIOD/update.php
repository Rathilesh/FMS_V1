<?php
/* @var $this YEAR_N_PERIODController */
/* @var $model YEAR_N_PERIOD */

$this->breadcrumbs=array(
	'Year  N  Periods'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);
?>
<!--<div id="patternDiv">
    <div class="note">
 <div class="labelImage"></div>
 <div class="LabelMsg"><p>
         <?php  $Getlabelname =new Get_Labelname_Cls(); 
            echo  $Getlabelname->Get_Labelname_Fnc("197");?>
     </p></div>
</div></div>-->
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>