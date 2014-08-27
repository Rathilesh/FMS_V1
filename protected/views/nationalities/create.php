<?php
/* @var $this NationalitiesController */
/* @var $model Nationalities */

$this->breadcrumbs=array(
	'Nationalities'=>array('index'),
	'Create',
);

//$this->menu=array(
//	array('label'=>'List Nationalities', 'url'=>array('index')),
//	array('label'=>'Manage Nationalities', 'url'=>array('admin')),
//);

?>
<div  id="patternDiv">
 <div class="note"> 
    <div class="labelImage"></div>
        <div class="LabelMsg">
<p><?php 
            $Getlabelname = new Get_Labelname_Cls();
            echo $Getlabelname->Get_Labelname_Fnc("2019"); 
          ?></p>
</div></div></div>
<!--<h1>Create Nationalities</h1>-->

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>