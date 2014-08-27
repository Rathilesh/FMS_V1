<?php
/* @var $this Personnel_VController */
/* @var $model Personnel_V */

//$this->breadcrumbs=array(
//	'Personnel  Vs'=>array('index'),
//	'Create',
//);
//
//$this->menu=array(
//	array('label'=>'List Personnel_V', 'url'=>array('index')),
//	array('label'=>'Manage Personnel_V', 'url'=>array('admin')),
//);
?>

<div  id="patternDiv">
 <div class="note"> 
    <div class="labelImage"></div>
        <div class="LabelMsg">
     <p>Personnel Registration
     </p> 
     
 </div></div></div>
<?php echo $this->renderPartial('_form1', array('model'=>$model,'party_image_model'=>$party_image_model)); ?>