<?php   $Getlabelname=new Get_Labelname_Cls();  ?>
<?php
/* @var $this Bank_ViewController */
/* @var $model Bank_View */

$this->breadcrumbs=array(
	'Bank  Views'=>array('index'),
	$model->NAME=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
//	array('label'=>'List Bank_View', 'url'=>array('index')),
//	array('label'=>'Create Bank_View', 'url'=>array('create')),
//	array('label'=>'View Bank_View', 'url'=>array('view', 'id'=>$model->ID)),
//	array('label'=>'Manage Bank_View', 'url'=>array('admin')),
);
?>
<div  id="patternDiv">
 <div class="note"> 
    <div class="labelImage"></div>
        <div class="LabelMsg">
<p><?php echo  $Getlabelname->Get_Labelname_Fnc("138");?><?php //echo $model->ID; ?></p>
</div></div></div>
<?php
//echo $bank_id;
?>
<?php echo $this->renderPartial('_form', array('model'=>$model,'bank_id'=>$bank_id)); ?>