<script>
 setTimeout(function() {                    //****
    $('.error_red').fadeOut('fast');        //****
}, 3000);                                   //****
                                            //****
setTimeout(function() {                     //****
    $('.success_blue').fadeOut('fast');     //****
}, 3000);                                   //****
//************************************************

function DeleteAction()

{   
   bootbox.confirm("<p class='modalstyle'><b><img width='30px' src='<?php echo Yii::app()->request->baseUrl; ?>/images/question_red.png'/>Confirmation</b></p><p>Are you sure to delete ?</p>", "No", "Yes", 
  function(result)
   {  
       if(result==true)
           {
             return true;
           }  
            else
           {   
               return false;
           }
   });
}
</script>
<div class="flashmessage">
        <?php if(Yii::app()->user->hasFlash('success')):?>
        <div class="success_blue"> <div class="success_blue_icon"></div>
          <div class="success_blue_msg">
          <?php echo Yii::app()->user->getFlash('success'); ?>
          </div>
        </div>
        <?php elseif(Yii::app()->user->hasFlash('Error')):?>
        <div class="error_red"> <div class="error_red_icon"></div>
          <div class="error_red_msg">
          <?php echo Yii::app()->user->getFlash('Error'); ?>
         </div>
        </div>
</div>   
<?php endif; ?>




<?php
/* @var $this QUALIFICATION_EXPERIENCEController */
/* @var $model QUALIFICATION_EXPERIENCE */

//$this->breadcrumbs=array(
//	'Qualification  Experiences'=>array('index'),
//	'Manage',
//);
//
//$this->menu=array(
//	array('label'=>'List QUALIFICATION_EXPERIENCE', 'url'=>array('index')),
//	array('label'=>'Create QUALIFICATION_EXPERIENCE', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#qualification--experience-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>




<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->


<div style="width:1065px; height:560px; float: left;">
<?php 

$baseUrlOn=Yii::app()->request->baseUrl;
$this->widget('bootstrap.widgets.TbExtendedGridView', array(
	'id'=>'qualification--experience-grid',
	'dataProvider'=>$model->search(),
        'type'=>'striped bordered',
	'filter'=>$model,
	'columns'=>array(
//		'ID',
	//	array('name'=>'RECORD_TYPE','headerHtmlOptions' => array('style' => 'width:100px'),),
		array('name'=>'SHORT_NAME','headerHtmlOptions' => array('style' => 'width:90px'),),
		'DESCRIPTION',
               
                array('name'=>'eDU.EDUCATION','header'=>'Category','value'=>'$data->eDU->EDUCATION'),
                array('name'=>'edFOLIO.FOLIO','header'=>'Stream','value'=>'(isset($data->edFOLIO)) ? $data->edFOLIO->FOLIO : null'),
             
		array('name'=>'IS_PROFESSIONAL','header'=>'Professional ?','filter'=>false,'value'=>'($data->IS_PROFESSIONAL)=="Y"?"Yes":"No"',),
                array('name'=>'IS_ACADEMIC','header'=>'Academic ?','filter'=>FALSE,'value'=>'($data->IS_ACADEMIC)=="Y"?"Yes":"No"',),

		array(
			'class'=>'CButtonColumn','template'=>' {update} {delete} ','headerHtmlOptions' => array('style' => 'width:75px'),
                        'buttons' => array( 
                                            'delete' => array(
                                         //   'imageUrl'=>Yii::app()->baseUrl . '/images/' . 'delete_16_16.png',    
                                            'url'=>'Yii::app()->createUrl("qualification_experience/delete", array("id"=>$data->ID) )',
                                            'click'=>"function(e) {
                                             var href_link =$(this).attr('href');
                                             e.preventDefault();
                                             var style_append=\"<p  class='modalstyle'><b><img width='30px' src='$baseUrlOn/images/question_red.png'>Confirmation</b></p><p>\";
                                             var style_appendend=\"</p>\";
                                             bootbox.confirm(style_append+'Are you sure to Delete?'+style_appendend,'No', 'Yes',function(result) {
                                            // console.log(result);
                                  if (result == true) 
                                  {
                                     $.fn.yiiGridView.update('qualification--experience-grid',
                                      {
                                        type:'POST',
                                        url:href_link,
                                        success:function(text,status)
                                        {
                                        //alert('sucess');
//                                                   //console.log(text);
//                                                   $.fn.yiiGridView.update('qualification--experience-grid');
// //                                               // $('#flashMsg').html('Successfully Deleted!').show();
                                            location.reload();
                                                    
                                          // console.log(status);      
                                                
                                                
                                        } 
                                     });
                                   }
          
                                 else
                                 {
                                   return false;
 //                                 $('#flashMsg').html('Cannot be Deleted!').show();
                                  }
                                });

                                }",  
    
                                    ),),
                        'afterDelete'=>'function(link,success,data)
                                                       { 
                                                         if(success) 
                                                         { 
                                                           console.log(data);$("#flashMsg").html(data); 
                                                           window.setTimeout( function(){
//                                                             window.location = "qualification_experience/admin";
                                                          }, 100 );
                                                          
                                                         }
                                                         else
                                                         {
                                                           console.log(data);$("#flashMsg").html(data); 
                                                         }
                                                         
                                                      }',
		),
	),
)); ?>
</div>