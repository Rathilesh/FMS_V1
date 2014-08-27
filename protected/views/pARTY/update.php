<?php
/* @var $this PARTYController */
/* @var $model PARTY */
$Getlabelname=new Get_Labelname_Cls();
//$this->breadcrumbs=array(
//	'Parties'=>array('index'),
//	$model->ID=>array('view','id'=>$model->ID),
//	'Update',
//);
//
//$this->menu=array(
//	array('label'=>'List PARTY', 'url'=>array('index')),
//	array('label'=>'Create PARTY', 'url'=>array('create')),
//	array('label'=>'View PARTY', 'url'=>array('view', 'id'=>$model->ID)),
//	array('label'=>'Manage PARTY', 'url'=>array('admin')),
//);
?>
<!--<div  id="patternDiv">
 <div class="note"> 
    <div class="labelImage"></div>
        <div class="LabelMsg">
<p><?php echo  $Getlabelname->Get_Labelname_Fnc("212");?>&nbsp;<?php echo $model->ID; ?></p>
</div></div></div>-->
<!--<h1>Update PARTY <?php// echo $model->ID; ?></h1>-->

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>