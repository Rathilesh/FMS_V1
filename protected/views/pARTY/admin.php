<?php
/* @var $this PARTYController */
/* @var $model PARTY */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#party-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

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
        <?php elseif(Yii::app()->user->hasFlash('error')):?>
        <div class="error_red"> <div class="error_red_icon"></div>
          <div class="error_red_msg">
          <?php echo Yii::app()->user->getFlash('error'); ?>
         </div>
        </div>
</div>   
<?php endif; ?>






<?php // echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php //$this->renderPartial('_search',array(
	//'model'=>$model,
//)); ?>
</div><!-- search-form -->


<div style="width:885px; height:560px; float: left;">
<?php 
$baseUrlOn=Yii::app()->request->baseUrl;
$this->widget('bootstrap.widgets.TbExtendedGridView', array(
	'id'=>'party-grid',
	'dataProvider'=>$model->search(),
        'type'=>'striped bordered',
	'filter'=>$model,
	'columns'=>array(
	/*	'ID',
		'SALUTATION',
		'FIRST_NAME',
		'MIDDLE_NAME',*/
		
		array('name'=>'PREFERRED_NAME','headerHtmlOptions' => array('style' => 'width:0px'),),
                'LAST_NAME',
                 array('name'=>'COMPANY_TYPE','filter'=>false),
	//	'GENDER',
		 array('name'=>'CONTACT_PERSON','filter'=>FALSE,),
                 array('name'=>'DOB','filter'=>FALSE,'headerHtmlOptions' => array('style' => ''),'value'=>'Yii::app()->dateFormatter->format("dd/MM/yyyy",strtotime($data->DOB))'),
		
		 array('name'=>'NATIONAL_ID','filter'=>FALSE,'headerHtmlOptions' => array('style' => 'width:100px'),),
	/*	'V01',
		'V02',
		'V03',
		'V04',
		'V05',
		'N01',
		'N02',
		'N03',
		'N04',
		'D01',
		'D02',
		'D03',
		'D04',
		'ENTITY_ID',
		*/
				array(
			'class'=>'CButtonColumn','template'=>' {update} {delete} ',
                        'buttons' => array( 
                                            'delete' => array(
                                            'url'=>'Yii::app()->createUrl("party/delete", array("id"=>$data->ID) )',
                                            'click'=>"function(e) {
                                             var href_link =$(this).attr('href');
                                             e.preventDefault();
                                             var style_append=\"<p  class='modalstyle'><b><img width='30px' src='$baseUrlOn/images/question_red.png'>Confirmation</b></p><p>\";
                                             var style_appendend=\"</p>\";
                                             bootbox.confirm(style_append+'Are you sure to Delete?'+style_appendend,'No', 'Yes',function(result) {
                                            // console.log(result);
                                  if (result == true) 
                                  {
                                     $.fn.yiiGridView.update('party-grid',
                                      {
                                        type:'POST',
                                        url:href_link,
                                        success:function(text,status)
                                        {
                                           location.reload();
                                        } 
                                     });
                                   }
          
                                 else
                                 {
                                   return false;

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
                                                          }, 100 );
                                                          
                                                         }
                                                         else
                                                         {
                                                           console.log(data);
                                                         }
                                                         
                                                      }',
		),
	),
)); ?>
</div>