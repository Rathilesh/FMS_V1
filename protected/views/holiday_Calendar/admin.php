<?php
/* Created By : ® Arjun ® 
   Created On : 3-Mar-2014
   Modified By :
   Modified On :
   Purpose : Basic Definition Creation & Management
 */
?>
<?php
$baseUrlOn=Yii::app()->request->baseUrl;
$this->breadcrumbs=array(
	'Holiday  Calendars'=>array('index'),
	'Manage',
                        );
?>

<script>
    setTimeout(function() {
        $('.error_red').fadeOut('slow');
    }, 5000); 

    setTimeout(function() {
        $('.success_blue').fadeOut('slow');
    }, 5000); 
</script>
 <!---- Code for Flash Messages---->
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
<!-- //////////importing css file//////////////-->
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom_styles/holiday_style.css" rel="stylesheet">
<!-- ///////////////////////////////////////////////// -->
<div class="form">
<?php $this->widget('bootstrap.widgets.TbExtendedGridView', array(
	'id'=>'holiday--calendar-grid',
	'dataProvider'=>$model->search(),
        'type'=>'striped bordered',
	'filter'=>$model,   
	'columns'=>array(
			 array('name'=>'CALENDAR_NAME','htmlOptions'=>array('style'=>'width:50%;padding:4px 0 0 5px !important')), 
                         array('name'=>'ENTITY_ID','header'=>'Specific for','value'=> '($data->ENTITY_ID =="") ? "Generic" : $data->eNTITY_relation->NAME','filter'=>false,'htmlOptions'=>array('style'=>'width:40%px;padding:4px 0 0 5px !important')), 
                         array(
                                'class'=>'CButtonColumn',
                                'template'=>'{update}{delete}',
                                'buttons' => array( 
                                            'delete' => array(
                                            'url'=>'Yii::app()->createUrl("Holiday_calendar/delete", array("id"=>$data->ID) )',
                                            'click'=>"function(e) {
                                             var href_link =$(this).attr('href');
                                             e.preventDefault();
                                             var style_append=\"<p  class='modalstyle'><b><img width='30px' src='$baseUrlOn/images/question_red.png'>Confirmation</b></p><p>\";
                                             var style_appendend=\"</p>\";
                                             bootbox.confirm(style_append+'All Holidays Listed Under this Calendar will be Deleted.....Are you sure to Continue?'+style_appendend,'No', 'Yes',function(result) {
                                          
                                                if (result == true) 
                                                {
                                                   $.fn.yiiGridView.update('holiday--calendar-grid',
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
                             ),
                        ),
            )); ?>
       
</div>