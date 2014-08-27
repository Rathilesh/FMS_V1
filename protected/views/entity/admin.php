<?php
/* @var $this EntityController */
/* @var $model Entity */



Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#entity-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<script>

 setTimeout(function() {                    //****
    $('.error_red').fadeOut('fast');        //****
}, 2000);                                   //****
                                            //****
setTimeout(function() {                     //****
    $('.success_blue').fadeOut('fast');     //****
}, 2000);                                   //****
//************************************************
</script>


<style>
.modal.fade.in {top: 34%;}
  
.modal 
    {
        left: 58% !important;
        width: 300px !important;
    }

.modalstyle
    {
        border-bottom: 1px solid #e8e8e8;
        padding-bottom: 6px;         
    }
    #entity-grid
    {
      float:left;
    }
    #Entity_ID
    {
      width:65px;
    }
   
/*.table{width: auto;}*/


</style>


<?php 
 $condition= "ENTITY_ID is null";

            $condition= "ENTITY_ID is null";
            $get_count_image=ENTITY::model()->count($condition);
            if($get_count_image ==1)
            {
               $criteria = new CDbCriteria;
               $models = Entity::model()->findAll($criteria);
               $id=$models[0]['ID'];              
               $this->redirect($this->createUrl('update', array('id'=>$id)));
            }



?>


<div style="width:100%; float:left; height:auto;">
<div id="flashMsg" style="display:inline-block;float:left;" >

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
<?php endif; ?>

</div>
</div>




<?php //$this->widget('zii.widgets.grid.CGridView', array(
	// 'id'=>'entity-grid',
	// 'dataProvider'=>$model->search(),
	// 'filter'=>$model,
	// 'columns'=>array(
	// 	'ID',
	// 	'SHORT_NAME',
	// 	'NAME',
	// 	'VISION',
	// 	'MISSION',
	 /*	
            'V01',
		
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
           */
		//'REGISTERED_ON',
		//'DEACTIVATED_ON',
		//'ENTITY_ID',
		
	// 	array(
	// 		'class'=>'CButtonColumn',
	// 	),
	// ),
//)); 
$baseUrlOn=Yii::app()->request->baseUrl;
		?>

<?php $this->widget('bootstrap.widgets.TbExtendedGridView', array(
	'id'=>'entity-grid',
	'dataProvider'=>$model->search(),
        'type'=>'striped bordered',
	'filter'=>$model,
	'columns'=>array(		
    array('name'=>'ID','htmlOptions' => array('style' => 'width:50px'),'headerHtmlOptions' => array('style' => 'width:50px')),
		'SHORT_NAME',		
    array('name'=>'NAME','htmlOptions' => array('style' => 'width:250px'),),
    array('name'=>'VISION','htmlOptions' => array('style' => 'width:240px'),),
		array('name'=>'MISSION','htmlOptions' => array('style' => 'width:240px'),),
		
    array('name'=>'REGISTERED_ON','htmlOptions' => array('style' => 'width:240px'),'value'=>'Yii::app()->dateFormatter->format("dd/MM/yyyy",strtotime($data->REGISTERED_ON))'),
	
		
		// array('name'=>'PREFERRED_NAME','headerHtmlOptions' => array('style' => 'width:0px'),),
  //               'LAST_NAME',
  //                array('name'=>'COMPANY_TYPE','filter'=>false),
	//	'GENDER',
		 // array('name'=>'CONTACT_PERSON','filter'=>FALSE,),
   //               array('name'=>'DOB','filter'=>FALSE,'headerHtmlOptions' => array('style' => ''),),
		
		 // array('name'=>'NATIONAL_ID','filter'=>FALSE,'headerHtmlOptions' => array('style' => 'width:100px'),),
	
		array(
			'class'=>'CButtonColumn',
                        'template'=>' {update} {delete} ','htmlOptions'=>array('style'=>'width:50px;'),                       
                        'buttons' => array( 
                                            'delete' => array(                                        
                                            'url'=>'Yii::app()->createUrl("Entity/Delete", array("id"=>$data->ID) )',
                                            'click'=>"function(e) {
                                             var href_link =$(this).attr('href');
                                             e.preventDefault();
                                             var style_append=\"<p  class='modalstyle'><b><img width='30px' src='$baseUrlOn/images/question_red.png'>Confirmation</b></p><p>\";
                                             var style_appendend=\"</p>\";
                                             bootbox.confirm(style_append+'Are you sure to Delete this Entity?'+style_appendend,'No', 'Yes',function(result) {
                                            // console.log(result);
                                  if (result == true) 
                                  {
                                     $.fn.yiiGridView.update('entity-grid',
                                      {
                                        type:'POST',
                                        url:href_link,
                                        success:function(text,status)
                                        {
                                   //     alert('success');
                                               console.log(text);
//                                                   $.fn.yiiGridView.update('entity-grid');
// $('#flashMsg').html('Successfully Deleted!').show();
                                            location.reload();
                                                    
                                           //console.log(status);      
                                                
                                                
                                        } 
                                     });
                                   }
          
                                 else
                                 {
                                   return false;
                                 $('#flashMsg').html('Cannot be Deleted!').show();
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
//                                                             window.location = "Entity/admin";
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
