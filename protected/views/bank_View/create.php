<?php
/* @var $this Bank_ViewController */
/* @var $model Bank_View */
   $Getlabelname=new Get_Labelname_Cls();  
   $this->breadcrumbs=array(
	'Bank  Views'=>array('index'),
	'Create',
);

//$this->menu=array(
//	array('label'=>'List Bank_View', 'url'=>array('index')),
//	array('label'=>'Manage Bank_View', 'url'=>array('admin')),
//);
?>

<!--<h1>Create Bank_View</h1>-->

    <!--<div class="note"> 
    <div class="labelImage"></div>
    <div class="LabelMsg">
       <p>View Main Branch</p>
    </div>
    </div>
    <div class="note"> 
    <div class="labelImage"></div>
    <div class="LabelMsg">
       <p>View Sub Branch</p>
    </div>
    </div>
</div>-->
 <div  id="patternDiv">
    <div class="note"> 
        
    <div class="labelImage"></div>
        <div class="LabelMsg">
            <p><?php echo  $Getlabelname->Get_Labelname_Fnc("136");?></p>
           
        </div> 
    </div>
 </div>
    <?php 
echo $this->renderPartial('_form', array('model'=>$model)); ?>