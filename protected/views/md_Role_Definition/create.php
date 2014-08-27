<?php
/* @var $this Md_Role_DefinitionController */
/* @var $model Md_Role_Definition */

//$this->breadcrumbs=array(
//	'Md  Role  Definitions'=>array('index'),
//	'Create',
//);

//$this->menu=array(
//	array('label'=>'List Md_Role_Definition', 'url'=>array('index')),
//	array('label'=>'Manage Md_Role_Definition', 'url'=>array('admin')),
//);
?>
<div  id="patternDiv">
 <div class="note"> 
    <div class="labelImage"></div>
        <div class="LabelMsg">
<p><?php 
            $Getlabelname = new Get_Labelname_Cls();
            echo $Getlabelname->Get_Labelname_Fnc("2048"); 
          ?></p>
</div></div></div>

<?php echo $this->renderPartial('_form', array('model'=>$model,'md_role_menu'=> $md_role_menu)); ?>
