<?php
/* @var $this Basic_Definition_CategoryController */
/* @var $model Basic_Definition_Category */

//$this->breadcrumbs=array(
//	'Basic  Definition  Categories'=>array('index'),
//	$model->DEFINITION_TYPE=>array('view','id'=>$model->DEFINITION_TYPE),
//	'Update',
//);
//
//$this->menu=array(
//	array('label'=>'List Basic_Definition_Category', 'url'=>array('index')),
//	array('label'=>'Create Basic_Definition_Category', 'url'=>array('create')),
//	array('label'=>'View Basic_Definition_Category', 'url'=>array('view', 'id'=>$model->DEFINITION_TYPE)),
//	array('label'=>'Manage Basic_Definition_Category', 'url'=>array('admin')),
//);
?>
<script>
$("document").ready(function(){   
$("#definitiontype1").attr('readonly','readonly');
});
</script>
<?php
 //echo($model->IS_AMEND);exit;
?>
<!--
<input type="hidden" value="<?php //echo $model->IS_AMEND;?>" id="amend" name="amend">-->

<div  id="patternDiv">
    <div class="note">
 <div class="labelImage"></div>
 <div class="LabelMsg"><p>
        <?php echo "Edit"." " . $model->DEFINITION_TYPE;?>
     </p></div>
</div></div> 
<div style="width:840px; height:40px; float: left">
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>