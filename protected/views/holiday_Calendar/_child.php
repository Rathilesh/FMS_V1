<?php
/* @var $this HolidayController */
/* @var $model Holiday */
$baseUrlOn=Yii::app()->request->baseUrl;
$this->breadcrumbs=array(
	'Holidays'=>array('index'),
	'Manage',
);

//$this->menu=array(
//	array('label'=>'List Holiday', 'url'=>array('index')),
//	array('label'=>'Create Holiday', 'url'=>array('create')),
//);

//Yii::app()->clientScript->registerScript('search', "
//$('.search-button').click(function(){
//	$('.search-form').toggle();
//	return false;
//});
//$('.search-form form').submit(function(){
//	$('#holiday-grid').yiiGridView('update', {
//		data: $(this).serialize()
//	});
//	return false;
//});
//");
?>
<style>
/*    .modal
    {   
        left: 58% !important;
        width: 240px !important;
    }*/
</style>
<!--<h1>Manage Holidays</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>-->


<!--</div> search-form -->

<?php $this->widget('bootstrap.widgets.TbExtendedGridView', array(
	'id'=>'holiday-grid',
	'dataProvider'=>$child_model->searchIncludingPermissions($parentID),
	'filter'=>$child_model,
      'type'=>'striped bordered',
	'columns'=>array(
		//'ID',
             array('name'=>'HOLIDAY_DATE','htmlOptions'=>array('style'=>'width:15%;padding:4px 0 0 5px !important')), 
           array('name'=>'DESCRIPTION','htmlOptions'=>array('style'=>'width:30%;padding:4px 0 0 5px !important')), 
                       array('name'=>'DECLARATION_REFERENCE','htmlOptions'=>array('style'=>'width:30%;padding:4px 0 0 5px !important')), 
           array('name'=>'DATE_OF_DECLARATION','header'=>'Declared On','htmlOptions'=>array('style'=>'width:15%;padding:4px 0 0 5px !important')), 

//                 
//		'HOLIDAY_DATE',
//           // 'CALD_ID',
//		'DESCRIPTION',
	//	'IS_COMPULSORY',
		//'IS_RESTRICTED',
//		'DECLARATION_REFERENCE',
//		
//		'DATE_OF_DECLARATION',
		
		
		array(
			'class'=>'CButtonColumn',
                    'template'=>'{update}{delete}',
                   
            'updateButtonUrl' => 'array("Holiday/update",
            "id"=>$data->ID)',
            'deleteButtonUrl' => 'array("Holiday/delete",
            "id"=>$data->ID)',
                       'buttons' => array( 
                                            'delete' => array(
                                         //   'imageUrl'=>Yii::app()->baseUrl . '/images/' . 'delete_16_16.png',    
                                            'url'=>'Yii::app()->createUrl("Holiday/delete", array("id"=>$data->ID) )',
                                            'click'=>"function(e) {
                                             var href_link =$(this).attr('href');
                                             e.preventDefault();
                                             var style_append=\"<p style='left:58%;width:240px;' class='modalstyle'><b><img width='30px' src='$baseUrlOn/images/question_red.png'>Confirmation</b></p><p>\";
                                             var style_appendend=\"</p>\";
                                             bootbox.confirm(style_append+'Are you Sure to Delete this Holiday ?'+style_appendend,'No', 'Yes',function(result) {
                                          
                                  if (result == true) 
                                  {
                                     $.fn.yiiGridView.update('holiday-grid',
                                      {
                                        type:'POST',
                                        url:href_link,
                                        success:function(text,status)
                                        {
                                        $.fn.yiiGridView.update('holiday-grid');                                                
                                                                                                                                     
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
                    
		),
	),
)); ?>
