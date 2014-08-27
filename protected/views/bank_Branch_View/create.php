<?php
/* @var $this Bank_Branch_ViewController */
/* @var $model Bank_Branch_View */

//$this->breadcrumbs=array(
//	'Bank  Branch  Views'=>array('index'),
//	'Create',
//);

//$this->menu=array(
//	array('label'=>'List Bank_Branch_View', 'url'=>array('index')),
//	array('label'=>'Manage Bank_Branch_View', 'url'=>array('admin')),
//);
?>

<!--<div  id="patternDiv">
 <div class="note"> 
    <div class="labelImage"></div>
        <div class="LabelMsg">
            
            <p>Main Branch </p>
        </div> 
 </div>
</div>-->
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>