<?php
/* @var $this Basic_Definition_CategoryController */
/* @var $model Basic_Definition_Category */

//$this->breadcrumbs=array(
//	'Basic  Definition  Categories'=>array('index'),
//	'Manage',
//);

//$this->menu=array(
//	array('label'=>'List Basic_Definition_Category', 'url'=>array('index')),
//	array('label'=>'Create Basic_Definition_Category', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#basic--definition--category-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<style>
    
 
    btn-primary {
    color: #ffffff;
text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25) !important;
background-color: #006dcc !important;
background-image: -moz-linear-gradient(top, #0088cc, #0044cc) !important;
background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#0088cc), to(#0044cc)) !important;
background-image: -webkit-linear-gradient(top, #0088cc, #0044cc) !important;
background-image: -o-linear-gradient(top, #0088cc, #0044cc) !important;
background-image: linear-gradient(to bottom, #0088cc, #0044cc) !important;
background-repeat: repeat-x !important;
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff0088cc', endColorstr='#ff0044cc', GradientType=0) !important;
border-color: #0044cc #0044cc #002a80 !important;
border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25) !important;
filter: progid:DXImageTransform.Microsoft.gradient(enabled = false) !important;
}
primary:hover,.btn-primary:focus,.btn-primary:active,.btn-primary.active,.btn-primary.disabled,.btn-primary[disabled]{color:#ffffff;background-color:#0044cc;*background-color:#003bb3  !important;}
</style>

<script>

 setTimeout(function() {                    //****
    $('.error_red').fadeOut('fast');        //****
}, 2000);                                   //****
                                            //****
setTimeout(function() {                     //****
    $('.success_blue').fadeOut('fast');     //****
}, 2000);                                   //****
//************************************************
//dialog.find(".btn-default:first").focus();
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
            {    return false;
           }
   });
}


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

   
/*.table{width: auto;}*/
.grid-view { float: left !important;}

</style>



<div id="flashMsg" style="display:inline-block;float:left;" ></div>

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
<?php endif; ?>

<?php
//--------------------- begin new code --------------------------
// add the (closed) dialog for the iframe
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id'=>'cru-dialog',
    'options'=>array(
        'title'=>'Create Form',
        'autoOpen'=>false,
        'modal'=>false,
        'width'=>850,
        'height'=>500,
        'show'=>array(
                'effect'=>'explode',
                'duration'=>1000,
        ),
        'hide'=>array(
            'effect'=>'explode',
            'duration'=>500,
        ),
    ),
));
$this->endWidget();
//--------------------- end new code --------------------------
?>
<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<!--<div class="search-form" style="display:none">-->
<?php //$this->renderPartial('_search',array(
//	'model'=>$model,
//)); ?>
<!--</div> search-form -->

<!-------START FORM WIDGET--------->           
<div style="width:840px; height:560px; float: left;">
    
<?php

$baseUrlOn=Yii::app()->request->baseUrl;
$this->widget('bootstrap.widgets.TbExtendedGridView', array(
	'id'=>'basic--definition--category-grid',
	'dataProvider'=>$model->search(),
        'type'=>'striped bordered',
        'filter'=>$model,
	'columns'=>array(
		array('name'=>'DEFINITION_TYPE',
                      'headerHtmlOptions' => array('style' => 'width:150px'),),
		array('name'=>'DESCRIPTION',
                      'headerHtmlOptions' => array('style' => 'width:170px'),),
                array('name'=>'NO_OF_RECORDS','header'=>'No. of Records',
                      'headerHtmlOptions' => array('style' => 'width:121px'),),
		
		array('header'=>'Amend ?','value'=>'($data->IS_AMEND)=="Y"?"Yes":"No"',
                      'headerHtmlOptions' => array('style' => 'width:85px'),), 
		array('name'=>'IS_DISPLAY','header'=>'Display ?','filter'=>false,'value'=>'$data->getYesNoText()',
                      'headerHtmlOptions' => array('style' => 'width:85px'),), 
		array('name'=>'IS_UNIVERSAL','header'=>'Universal ?','filter'=>false,'value'=>'($data->IS_UNIVERSAL)=="Y"?"Yes":"No"',
                      'headerHtmlOptions' => array('style' => 'width:100px'),), 
		array('name'=>'IS_COMPULSORY','header'=>'Compulsary ?','filter'=>false,'value'=>'($data->IS_COMPULSORY)=="Y"?"Yes":"No"',
                      'headerHtmlOptions' => array('style' => 'width:100px'),),
		
		array(
			'class'=>'CButtonColumn',
                        'template'=>' {update} {delete} ','htmlOptions'=>array('style'=>'width:90px;'),
                        //   'updateButtonImageUrl' => Yii::app()->baseUrl . '/css/images/' . 'edit_16_16.png',  commented code...for edit n delete
                       //   'deleteButtonImageUrl' => Yii::app()->baseUrl . '/images/' . 'delete_16_16.png',
                        'buttons' => array( 
                                            'delete' => array(
                                         //   'imageUrl'=>Yii::app()->baseUrl . '/images/' . 'delete_16_16.png',    
                                            'url'=>'Yii::app()->createUrl("basic_definition_category/delete", array("id"=>$data->DEFINITION_TYPE) )',
                                            'click'=>"function(e) {
                                             var href_link =$(this).attr('href');
                                             e.preventDefault();
                                             var style_append=\"<p  class='modalstyle'><b><img width='30px' src='$baseUrlOn/images/question_red.png'>Confirmation</b></p><p>\";
                                             var style_appendend=\"</p>\";
                                             bootbox.confirm(style_append+'Are you sure to Delete this Category?'+style_appendend,'No', 'Yes',function(result) {
                                            // console.log(result);
                                  if (result == true) 
                                  {
                                     $.fn.yiiGridView.update('basic--definition--category-grid',
                                      {
                                        type:'POST',
                                        url:href_link,
                                        success:function(text,status)
                                        {
                                        //alert('sucess');
//                                                   //console.log(text);
//                                                   $.fn.yiiGridView.update('basic--definition--category-grid');
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
//                                                             window.location = "basic_definition_category/admin";
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