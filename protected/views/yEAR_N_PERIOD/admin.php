<?php
/* @var $this YEAR_N_PERIODController */
/* @var $model YEAR_N_PERIOD */
$baseUrlOn=Yii::app()->request->baseUrl;
$this->breadcrumbs=array(
	'Year  N  Periods'=>array('index'),
	'Manage',
);
?>

<style>
    .table {
width: 75% !important;
float: left;
}
input[id^="Checkboxes"] {
width: 32px !important;
}
/*.grid-view .filters input, .grid-view .filters select {
margin-bottom: 0;
width: 75% !important;
}*/
    .table td {
padding: 0px;
padding-left: 0px !important;
padding-right: 0px !important;
line-height: 25px !important;
text-align: left;
vertical-align: top;
border-top: 1px solid #dddddd;
}
.grid-view .filters .filter-container {
padding: 0px !important;
}

.modal.fade.in
    {
        top:34%;
    }
    .modalstyle
    {
        border-bottom: 1px solid #e8e8e8;
        padding-bottom: 6px;         
    }
    .modal
    {   
        left: 58% !important;
         width: 300px!important;
    }
    .modal-footer 
    {
        padding: 6px 15px 7px !important;
    }
    .hasDatepicker
    {
        text-transform:uppercase;
    }
    .grid_insert_table thead th#Checkboxes {
padding-left: 0px !important;
}
    
</style>
<script>
$('document').ready(function()
{
    /// $("#link").hide();
//    var checkboxes = $("input[type='checkbox']");   
//
//checkboxes.click(function() {
//    if(checkboxes.is(":checked"))
//        {
//    $("#link").show();
//    //$("#link").hide();
//        }
//        else
//            {
//               $("#link").hide(); 
//            }
//});
//  if ($("input:checkbox:checked").length > 0)
//{
//    
//  $("#link").show();// any one is checked
//}
//else
//{
//    $("#link").hide();
//   // none is checked
//}
//  
//   $("#START_DATE").change(function()
//   {
//      //alert("hi");return false; 
//       this.value = this.value.toUpperCase();
//      
//   });
  
});
</script>
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
<?php  Yii::app()->clientScript->registerScript('re-install-date-picker', "
function reinstallDatePicker(id, data) {
$('#START_DATE').datepicker();
$('#END_DATE').datepicker();   
}
");?>
<div class="form">

<?php $this->widget('bootstrap.widgets.TbExtendedGridView', array(
	'id'=>'year--n--period-grid',
        'type'=>'striped bordered',
	'dataProvider'=>$model->search(),
    'afterAjaxUpdate' => 'reinstallDatePicker', 
	'filter'=>$model,
	'columns'=>array(
		//'ID',
            array('name'=>'SHORT_NAME','htmlOptions'=>array('style'=>'padding-left:6px!important')), 
            array('name'=>'START_DATE',
                'htmlOptions'=>array('style'=>'padding-left:6px!important'),
                 //'value'=>'Yii::app()->dateFormatter->format("dd-MM-y",strtotime($data->START_DATE))',
                'filter' => $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model'=>$model, 
                'attribute'=>'START_DATE', 
               'language' => 'en',
                'i18nScriptFile' => 'jquery.ui.datepicker-en.js',
                'htmlOptions' => array(
                    'id' => 'START_DATE',
                    'size' => '10',
                ),
                'defaultOptions' => array(  // (#3)
                    'showOn' => 'focus', 
                    'dateFormat' => 'dd-M-y',
                    'showOtherMonths' => true,
                    'selectOtherMonths' => true,
                    'changeMonth' => true,
                    'changeYear' => true,
                    //'showButtonPanel' => true,
                )
            ), 
            true), // (#4)
                ),
            array('name'=>'END_DATE',
                'htmlOptions'=>array('style'=>'padding-left:6px!important'),
                //'value'=>'Yii::app()->dateFormatter->format("dd-MM-y",strtotime($data->END_DATE))',
                      'filter' => $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model'=>$model, 
                'attribute'=>'END_DATE', 
               'language' => 'en',
                'i18nScriptFile' => 'jquery.ui.datepicker-en.js',
                'htmlOptions' => array(
                    'id' => 'END_DATE',
                    'size' => '10',
                   
                ),
                'defaultOptions' => array(  // (#3)
                    'showOn' => 'focus', 
                    'dateFormat' => 'dd-M-y',
                    'showOtherMonths' => true,
                    'selectOtherMonths' => true,
                    'changeMonth' => true,
                    'changeYear' => true,
                    //'showButtonPanel' => true,
                )
            ), 
            true), 
            ),
		array(
			'class'=>'CButtonColumn',
                      'template'=>'{update}{delete}',
                     'buttons' => array( 
                                            'delete' => array(
                                            'url'=>'Yii::app()->createUrl("Year_n_period/delete", array("id"=>$data->ID) )',
                                            'click'=>"function(e) {
                                             var href_link =$(this).attr('href');
                                             e.preventDefault();
                                             var style_append=\"<p  class='modalstyle'><b><img width='30px' src='$baseUrlOn/images/question_red.png'>Confirmation</b></p><p>\";
                                             var style_appendend=\"</p>\";
                                             bootbox.confirm(style_append+'All Sub Periods Listed Under this Major Period will be Deleted.....Are you sure to Continue?'+style_appendend,'No', 'Yes',function(result) {
                                          
                                                if (result == true) 
                                                {
                                                   $.fn.yiiGridView.update('year--n--period-grid',
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
                     'htmlOptions'=>
    array('style'=>'padding-left:10px !important;'),
          // ),
		),
	 
//       array(
//           'class'=>'CCheckBoxColumn',
//           'id'=>'Checkboxes',
//           'selectableRows' => '10',
//           'htmlOptions'=>
//    array('style'=>'width:30px;padding-top:5px;'),
//           ),
       
            ),
)); ?>
<!--    <div id="for-link">-->

<!--</div>-->
</div>
<!-- <div id="link">
    <?php// echo CHtml::ajaxLink('Delete All',array('Year_n_period/BulkDelete'),
//        array(
//           'type'=>'POST',
//           'data'=>'js:{theIds : $.fn.yiiGridView.getChecked("year--n--period-grid","Checkboxes").toString()}',
//            "success"=>'js:function(data){                                                              
//                        $.fn.yiiGridView.update("year--n--period-grid");
//                     }',           
//           
//        )
//   );
?> 
 </div>-->