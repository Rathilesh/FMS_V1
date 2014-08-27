<?php
/* @var $this HrlabelController */
/* @var $model Hrlabel */

//$this->breadcrumbs=array(
//	'Hrlabels'=>array('index'),
//	'Create',
//);

//$this->menu=array(
//	array('label'=>'List Hrlabel', 'url'=>array('index')),
//	array('label'=>'Manage Hrlabel', 'url'=>array('admin')),
//);
//?>
<div  id="patternDiv">
 <div class="note"> 
    <div class="labelImage"></div>
        <div class="LabelMsg">
<p><?php
            $Getlabelname=new Get_Labelname_Cls();
            echo  $Getlabelname->Get_Labelname_Fnc("2026");?></p>
</div></div></div>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>