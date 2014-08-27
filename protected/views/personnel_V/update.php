<?php
/* @var $this Personnel_VController */
/* @var $model Personnel_V */

//$this->breadcrumbs=array(
//	'Personnel  Vs'=>array('index'),
//	$model->PARTY_ID=>array('view','id'=>$model->PARTY_ID),
//	'Update',
//);
//
//$this->menu=array(
//	array('label'=>'List Personnel_V', 'url'=>array('index')),
//	array('label'=>'Create Personnel_V', 'url'=>array('create')),
//	array('label'=>'View Personnel_V', 'url'=>array('view', 'id'=>$model->PARTY_ID)),
//	array('label'=>'Manage Personnel_V', 'url'=>array('admin')),
//);
?>
<!--<div  id="patternDiv">
 <div class="note"> 
    <div class="labelImage"></div>
        <div class="LabelMsg">
     <p>Update  Personnel -   <?php //echo $model->SALUTATION."   ".$model->PREFERRED_NAME; ?>
     </p> 
     
 </div></div></div>-->

<?php //echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php echo $this->renderPartial('_form', array('model'=>$model,'party_image_model'=>$party_image_model,
                         // 'course'=>$course,
//                        'Grade'=>$Grade,
//                        'Score'=>$Score,
//                        'Institute'=>$Institute,
//                        'CourseType'=>$CourseType,
//                        'CourseNature'=>$CourseNature,
//                        'Year'=>$Year,
//                        'Attempt'=>$Attempt,
//                        'ID'=>$ID,
//                        'PER_PARTY_ID'=>$PER_PARTY_ID,
                           'courseexistupdate'=>$courseexistupdate,
                           'trainingexistupdate'=>$trainingexistupdate,
                           'dependentupdate_data'=>$dependentupdate_data,
                           'nomineeupdate_data'=>$nomineeupdate_data,
                           'nextofkinupdate_data'=>$nextofkinupdate_data,
                           'get_Party_BANK'=>$get_Party_BANK,
                           'service_status_update_data'=>$service_status_update_data,
                           'personnel_flex_update_data'=>$personnel_flex_update_data,
                           )); ?>