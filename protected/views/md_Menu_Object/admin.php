<?php
/**
 * Created  By  : ® ℛaThIlEsH ®  
 * Created  On  : 20-Aug-2013
 * Modified By  :
 * Modified On  :
 * Purpose      : Menu Object 
 */

//  $action_1 = Yii::app()->controller->id;
//  $create_path= Yii::app()->request->baseUrl."/index.php/".$action_1."/create";
//  $home_path= Yii::app()->request->baseUrl."/index.php/".$action_1."/admin";
// //echo "<h1>".$create_path."</h1>";
//  $this->widget('bootstrap.widgets.TbButtonGroup', array(
//    'buttons'=>array(
//       array('label'=>'Home', 'url'=>$home_path,'icon'=>"icon-home"),
//       array('label'=>'Create', 'url'=>$create_path,'icon'=>"icon-plus"),
//       array('label'=>'Flux', 'url'=>'#','icon'=>"icon-download-alt"),
//    ),
//)); 
//************************code for sending sms ***********************//
//  Yii::import('ext.Services.*');
//  require_once('Twilio.php');
//    $sid = "ACbfdfd75d7b2a8b01e209a9267bb5ae93"; // Your Account SID from www.twilio.com/user/account
//    $token = "cbb761b0befdf9512d2c541dad3e2cb9"; // Your Auth Token from www.twilio.com/user/account
//    $to='+919809517582';
//    $textmessage="hai all";
//    $client = new Services_Twilio($sid, $token);
//    try {
//        $message = $client->account->sms_messages->create(
//        '+16122237416', // From a valid Twilio number
//        $to, // Text this number
//        $textmessage //message
//        );
//        $twilioMessageResponse = $message->sid; 
//        }
//        catch (Exception $e) 
//            {
//            echo "some error";
//            }
//************************code for sending sms ***********************//
  ?>
<!--    </div>
</div>-->
<div  id="patternDiv">
 <div class="note"> 
    <div class="labelImage"></div>
        <div class="LabelMsg">
     <p><?php 
            $Getlabelname = new Get_Labelname_Cls();
            echo $Getlabelname->Get_Labelname_Fnc("2039"); 
          ?>
     </p> 
     
 </div></div></div>

 <?php
// $this->widget('bootstrap.widgets.TbMenu', array(
//	'type'=>'pills',
//	'items'=>array(
////		array('label'=>'Create', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'linkOptions'=>array()),
////        array('label'=>'List', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'),'active'=>true, 'linkOptions'=>array()),
////		array('label'=>'Search', 'icon'=>'icon-search', 'url'=>'#', 'linkOptions'=>array('class'=>'search-button')),
//		array('label'=>'Export to PDF', 'icon'=>'icon-download', 'url'=>Yii::app()->controller->createUrl('GeneratePdf'), 'linkOptions'=>array('target'=>'_blank'), 'visible'=>true),
//		array('label'=>'Export to Excel', 'icon'=>'icon-download', 'url'=>Yii::app()->controller->createUrl('GenerateExcel'), 'linkOptions'=>array('target'=>'_blank'), 'visible'=>true),
//       // array('label'=>'Print', 'icon'=>'icon-print', 'url'=>'javascript:void(0);return false', 'linkOptions'=>array('onclick'=>'printDiv();return false;')),
//	),
//));
//$this->endWidget();
?>
<div style="width:100%; height:auto; float:left">
<table style="margin-bottom:0px ; float:left; width:249px">
<tr><td width="100" style="width:111px !important;"><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/md_menu_object/GeneratePdf" target="_blank" class="btn btn-success btn-small">Export to PDF <i class="icon-white icon-download-alt"></i></a></td><td style="width:120px"><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/md_menu_object/GenerateExcel" target="_blank" class="btn btn-success btn-small">Export to Excel <i class="icon-white icon-download-alt"></i></a></td></tr>
</table>
</div>

<!--<div class="btn-group">
  <button class="btn">Export to PDF</button>
  <button class="btn">Export to Excel</button>
</div>-->
 <?php
$this->beginWidget('zii.widgets.jui.CJuiDialog', array( // the dialog
    'id'=>'dialogClassroom',
    'options'=>array(
        'title'=>'Edit Parameter',
        'autoOpen'=>false,
        'modal'=>true,
        'width'=>550,
        'height'=>470,
    ), 
));?>
 <style>
     .table { width: auto; }
	 #mdmenuobject-grid { float: left; margin-top: 10px;} 
 </style>
<div class="divForForm"></div>
 
<?php $this->endWidget();?>
<div style="width: auto; height: auto; float: left">
 <?php
//print_r($model->search());
// Yii::app()->clientScript->registerScript('loaderScript', '
//$("#export-button").on("click",function() {
//     //alert("sad asd as");
//     $.fn.yiiGridView.export();
//   
//});
//$.fn.yiiGridView.export = function() {
//    $.fn.yiiGridView.update("mdmenuobject-grid",{ 
//        success: function() {
//            $("#mdmenuobject-grid").removeClass("grid-view-loading");
//            window.location = "'.$this->createUrl("exportFile").'";
//        },
//        data: $(".search-form form").serialize() + "&export=true"
//    });
//}');
// echo CHtml::button('Export', array('submit' => array('Md_Menu_Object/exportFile'),'id'=>'export-button','class'=>'span-3 button'));
        $this->widget('bootstrap.widgets.TbExtendedGridView',array(
        'id'=>'mdmenuobject-grid',
        'dataProvider'=>$model->search(),
        //'filter'=>'',
        'type'=>'striped bordered',
        //  'enablePagination' => true,
        //  'pager' => array(
        //  'cssFile' => false,
        //  'header' => false,
        //  'firstPageLabel' => 'First',
        //  'prevPageLabel' => 'Previous',
        //  'nextPageLabel' => 'Next',
        //  'lastPageLabel' => 'Last',
        //  ),
           
            'columns'=>array(
//                array(
//                'name' => 'ID',
//                'header' => 'ID',
//                'class' => 'bootstrap.widgets.TbPickerColumn',
//                'headerHtmlOptions' => array('style' => 'width:40px'),
//                'pickerOptions' => array(
//                    'title' => 'Where did I spend my hours',
//                    'content' => 'js:function(){
//				                    return "Why do you want to know?";
//				                }'
//                )
//            ),
//            array(
//                    'class'=>'bootstrap.widgets.TbRelationalColumn',
//                    'headerHtmlOptions' => array('style' => 'width:40px'),
//                    'name' => 'ID',
//                    'filter'=>'',
//                    'url' => $this->createUrl('md_menu_object/relational'),
//                    'value'=> $model->ID,
//                 ),

            array(
                    'name'=>'OBJECT_ID',
                    'class' => 'bootstrap.widgets.TbEditableColumn',
                    'headerHtmlOptions' => array('style' => 'width:150px'),
                    'editable' => array(
                                         'url' => $this->createUrl('md_menu_object/InlineUpdate'),  //see InlineUpadte Function in Controller
                                        'type' => 'text',

                                        )
                ),

            array(
                    'name'=>'OBJECT_TYPE',
                    'class' => 'bootstrap.widgets.TbEditableColumn',
                    'headerHtmlOptions' => array('style' => 'width:90px'),
                    'filter'=>'',
                    'editable' => array(
                                        'url' => $this->createUrl('md_menu_object/InlineUpdate'),  //see InlineUpadte Function in Controller
                                        'type' => 'text',
                                        )
                ),
            array(
                    'name'=>'DESCRIPTION',
                    'class' => 'bootstrap.widgets.TbEditableColumn',
                    'headerHtmlOptions' => array('style' => 'width:150px'),
                    'editable' => array(
                        'url' => $this->createUrl('md_menu_object/InlineUpdate'),  //see InlineUpadte Function in Controller
                        'type' => 'textarea',

                                        )
                ),
            array(
                    'name'=>'MENU_PROMPT',
                    'class' => 'bootstrap.widgets.TbEditableColumn',
                    'headerHtmlOptions' => array('style' => 'width:130px'),
                    'editable' => array(
                        'url' => $this->createUrl('md_menu_object/InlineUpdate'),  //see InlineUpadte Function in Controller
                        'type' => 'text',

                    )),
//                array(
//                    'name'=>'WEF',
//                    'class' => 'bootstrap.widgets.TbEditableColumn',
//                    //'headerHtmlOptions' => array('style' => 'width:130px'),
//                    'editable' => array(
//                        'url' => $this->createUrl('md_menu_object/InlineUpdate'),  //see InlineUpadte Function in Controller
//                        'type' => 'date',
//
//                    )),
                array( 'name'=>'WEF',
		            'headerHtmlOptions'=>array('style' => 'width:120px')),
                    /*
                    'WET',
                    'CREATOR_ID',
                    'CREATED_ON',
                    'MODIFIER_ID',
                    'MODIFIED_ON',
                    'DISPLAY_TITLE',
                    */
            array(
                'class'=>'bootstrap.widgets.TbButtonColumn',
                'headerHtmlOptions' => array('style' => 'width:30px'),
                'template'=>'{delete}',
               ),
        ),
            
        )
        ); ?></div>
