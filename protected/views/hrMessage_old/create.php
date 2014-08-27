<?php
/* @var $this HrMessageController */
/* @var $model HrMessage */

$this->breadcrumbs=array(
	'Hr Messages'=>array('index'),
	'Create',
);

//$this->menu=array(
//	array('label'=>'List HrMessage', 'url'=>array('index')),
//	array('label'=>'Manage HrMessage', 'url'=>array('admin')),
//);
?>

<!--<h1>Create HrMessage</h1>-->
<div  id="patternDiv">
 <div class="note"> 
    <div class="labelImage"></div>
        <div class="LabelMsg">
<p><?php 
            $Getlabelname = new Get_Labelname_Cls();
            echo $Getlabelname->Get_Labelname_Fnc("2045"); 
          ?></p>
</div></div></div>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>