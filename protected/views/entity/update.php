<?php
/* @var $this EntityController */
/* @var $model Entity */



//$this->menu=array(
//	array('label'=>'List Entity', 'url'=>array('index')),
//	array('label'=>'Create Entity', 'url'=>array('create')),
//	array('label'=>'View Entity', 'url'=>array('view', 'id'=>$model->ID)),
//	array('label'=>'Manage Entity', 'url'=>array('admin')),
//);
?>
<!--<div  id="patternDiv">
 <div class="note"> 
    <div class="labelImage"></div>
        <div class="LabelMsg">
<p><?php
            $Getlabelname=new Get_Labelname_Cls();
            echo  $Getlabelname->Get_Labelname_Fnc("122");?></p>
</div></div></div>-->

<?php echo $this->renderPartial('_form', array('id'=>$model->ID,'model'=>$model,'model_type'=>$model_type,'model_relation'=>$model_relation,'model_contact'=>$model_contact,'model_holiday'=>$model_holiday,'model_calender'=>$model_calender,'model_basicdefinition'=>$model_basicdefinition,'model_currency'=>$model_currency,'model_policy'=>$model_policy,'model_entitypolicy'=>$model_entitypolicy,'model_flex'=>$model_flex,'model_bank'=>$model_bank)); ?>