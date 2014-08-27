<?php
/* @var $this PARTY_IMAGEController */
/* @var $model PARTY_IMAGE */

$this->breadcrumbs=array(
	'Party  Images'=>array('index'),
	'Create',
);

//$this->menu=array(
//	array('label'=>'List PARTY_IMAGE', 'url'=>array('index')),
//	array('label'=>'Manage PARTY_IMAGE', 'url'=>array('admin')),
//);
?>
 <div  id="patternDiv">
    <div class="note"> 
        
    <div class="labelImage"></div>
        <div class="LabelMsg">
            <p>PARTY IMAGE</p>
           
        </div> 
    </div>
 </div>
<!--<h1>Create PARTY_IMAGE</h1>-->

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>