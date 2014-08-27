<?php
/* @var $this CountriesController */
/* @var $model Countries */

$this->breadcrumbs=array(
	'Countries'=>array('index'),
	'Create',
);

//$this->menu=array(
//	array('label'=>'List Countries', 'url'=>array('index')),
//	array('label'=>'Manage Countries', 'url'=>array('admin')),
//);
?>
<div  id="patternDiv">
 <div class="note"> 
    <div class="labelImage"></div>
        <div class="LabelMsg">
<p><?php 
               $Getlabelname = new Get_Labelname_Cls();
               echo $Getlabelname->Get_Labelname_Fnc("2042"); 
         ?></p>
</div></div></div>

<!--<h1>Create Countries</h1>-->

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>