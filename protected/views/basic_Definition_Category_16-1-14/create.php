<?php
/* @var $this Basic_Definition_CategoryController */
/* @var $model Basic_Definition_Category */

//$this->breadcrumbs=array(
//	'Basic  Definition  Categories'=>array('index'),
//	'Create',
//);
//
//$this->menu=array(
//	array('label'=>'List Basic_Definition_Category', 'url'=>array('index')),
//	array('label'=>'Manage Basic_Definition_Category', 'url'=>array('admin')),
//);
?>

<!--<h1>Create Basic_Definition_Category</h1>-->
<div  id="patternDiv">
    <div class="note">
 <div class="labelImage"></div>
 <div class="LabelMsg"><p>
        <?php  $Getlabelname =new Get_Labelname_Cls(); 
            echo  $Getlabelname->Get_Labelname_Fnc("132");?>
     </p></div>
</div></div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>