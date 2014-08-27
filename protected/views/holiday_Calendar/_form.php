<?php
/* Created By : ® Arjun ® 
   Created On : 3-Mar-2014
   Modified By :
   Modified On :
   Purpose : Basic Definition Creation & Management
 */
?>
<?php
/////including classes for popup and labels///////////
 require_once('general_class.php');
 require_once("popupdialog.php");
 $Getlabelname =new Get_Labelname_Cls();
/////// Storing values from database to array for showing in update form ///////////////
 $id=array();
 $hol_date=array();
 $hol_desc=array();
 $hol_is_comp=array();
 $hol_is_rest=array();
 $hol_dec_ref=array();
 $hol_date_of_decl=array(); 
 if($model->isNewRecord)
 {
  $cal_id='';    //if new Calendar,setting a variable that indicates calendar_id to null
 }
 else 
  {
        $cal_id=$_GET["id"]; //In the case of update storing the calendar_id from admin page to a variable
        $details = Yii::app()->db->createCommand()
                     ->select('ID,HOLIDAY_DATE,DESCRIPTION,IS_COMPULSORY,IS_RESTRICTED,DECLARATION_REFERENCE,DATE_OF_DECLARATION')
                     ->where('CALD_ID=:value',array(':value'=>$cal_id))
                     ->from('HOLIDAY')
                     ->queryAll();
       foreach($details as $val)
          {
               array_push($id,$val['ID']);  
               array_push($hol_date,date('d/m/Y',strtotime($val['HOLIDAY_DATE'])));  
               array_push($hol_desc,$val['DESCRIPTION']);  
               array_push($hol_is_comp,$val['IS_COMPULSORY']);  
               array_push($hol_is_rest,$val['IS_RESTRICTED']);  
               array_push($hol_dec_ref,$val['DECLARATION_REFERENCE']); 
               if($val['DATE_OF_DECLARATION']=="")
                array_push($hol_date_of_decl,"");  
               else
               array_push($hol_date_of_decl, date('d/m/Y',strtotime($val['DATE_OF_DECLARATION'])));           
          }   
}

$no_of_records=count($id); 
$entity_id=Yii::app()->session['P_Eu_Orgn_Code'];
$entity = Yii::app()->db->createCommand()
                 ->select('NAME')
                 ->where('ID=:value',array(':value'=>$entity_id))
                 ->from('ENTITY')
                 ->queryScalar();
$entity_exist_check = Yii::app()->db->createCommand()
                   ->select('ENTITY_ID')
                   ->where('ID=:value',array(':value'=>$cal_id))
                   ->from('HOLIDAY_CALENDAR')
                   ->queryScalar();                                      
?>
<script>
$(document).ready(function(){    
var calendar_id='<?php echo $cal_id; ?>';    
var entity_check='<?php echo $entity_exist_check;?>';
var no_of_records='<?php echo $no_of_records;?>';

//////// Setting to Generic(Nature)if entity in database field is null ////////////
if(entity_check===""&&calendar_id!=="")    
  {
     $( "#testToggleButtonB" ).prop( "checked", false );
     $('.entity').css("visibility", "hidden");
  }
 /////// Setting css properties in update page depending upon no of records ////////
 if(calendar_id!=="")
   {
      $(".scrollContent").css("width","772px");  
      $(".tbl_btn").css("width","774px");  
      $(".delete_space").css("width","27px");
   }
 if(calendar_id!==""&& no_of_records==0)
   {         
      $(".delete_space").css("display","none");
      $(".scrollContent").css("width","746px");  
      $(".tbl_btn").css("width","748px");  
   }
  var i=1; //increment id,name by 1 on clone function    
 /////// Animating(Increasing width)Calendar Name textbox ////////////////   
$("#Holiday_Calendar_CALENDAR_NAME").click(function(){
  $(this).animate({ "width": "480px" }, 500);  
});
//////////// Cloning Row on Plus button click/////////////////////////////
$("#clone_button").click(function()
{   
   var cloned_row= $(".table_holiday_list tbody tr td #Holiday tbody tr:last").clone().find("input").each(function() {          
   $(this).attr({
     'name': function(_, name) { 
             var split_id1=this.id.split("-");
             var name_prefix=split_id1[0];
             var name_index=parseInt(split_id1[1]);
             var new_nameindex=name_index+i;        
                if($(this).hasClass("multiline_date_width"))
               {        
                   return "Holiday_Calendar"+"["+new_nameindex+"]"+"["+name_prefix+"]";
               }
                if($(this).hasClass("child_id"))
               {        
                   return "child_id-"+new_nameindex;
               }
               else
               {
                    return "Holiday"+"["+new_nameindex+"]"+"["+name_prefix+"]"; 
               }
            },
    'id': function(_, id) {        
            var split_id=this.id.split("-");
            var id_prefix=split_id[0];
            var id_index=parseInt(split_id[1]);
            var new_index=id_index+i; 
            var new_row_count=parseInt(new_index)+1; 
            $("#TotRowCount").val(new_row_count);
            return id_prefix+"-"+new_index;
           },
  'value':function(_, value) {
             var new_value="";         
            if($(this).is(":checkbox"))
                {
                  new_value= this.value;  
                }
               return new_value; 
                }                     
           });
  
 }).end().appendTo(".table_holiday_list tbody tr td #Holiday tbody"); 
  cloned_row.find('input').each(function() {
           if($(this).hasClass("hasDatepicker"))
                {
                  var date_id=this.id.split("-");
                  var date_prefix=date_id[0];
                        if(date_prefix=="HOLIDAY_DATE")  
                            {
                         $(this).removeClass('hasDatepicker').datepicker({dateFormat:'dd/mm/yy',changeMonth:true,changeYear:true,constrainInput: true,		
                                                duration:'fast',
                                                showAnim:'slide'});  
                            }
                        else
                            {
                               $(this).removeClass('hasDatepicker').datepicker({dateFormat:'dd/mm/yy',changeMonth:true,maxDate:0,changeYear:true,constrainInput: true,		
                                            duration:'fast',
                                            showAnim:'slide'});   
                            }
                }                              
                if($(this).hasClass("description"))
                   {
                             $(this).editable({
                             type: 'wysihtml5',
                             title: 'Add Description',
                             placement:'right',
                             success: function(response, newValue) {

                           $(this).val(newValue);
                               $(this).editable('hide');
                               return false;
                             },
                            });
                            $(this).on('shown', function(e, editable) {

                           var text_val=$(this).val();
                                $('.input-large').wysihtml5(toolbar);
                              $('.input-large').val(text_val);
                            });
                  }                
                if($(this).is(":checkbox"))
                         {
                           if (this.id.indexOf("IS_COMPULSORY") === 0)                       
                         {
                            $(this).prop( "checked", true );  
                         }  
                            else
                            {
                          $(this).prop( "checked", false );  
                            }
                        }       
           });
  });
////////// Loading Editor on Description field click //////////////////
$('.description').editable({
    type: 'wysihtml5',
    title: 'Add Description',
    placement:'right', 
    success: function(response, newValue) {
        $(this).val(newValue);
        $('.description').editable('hide');
        return false;
    },     
}); 
$('.description').on('shown', function(e, editable) {
        var text_val=$(this).val();
        $('.input-large').wysihtml5(toolbar);
        $('.input-large').val(text_val);   
});
///////////// Null Validation & Duplication Entry Check on Submit/Update Button Click ////////////////
$("#btn_Save").click(function()
{    
  var date_array=[];
  var validate_result=validation();    
  if(validate_result===false)
    return false;
  var rowCount = $('#Holiday tr').length;
  for(var i=0;i<rowCount;i++)
     {
     var date=$("#HOLIDAY_DATE-"+i).val();
     if(date!=="")
         {             
              var inside_array=jQuery.inArray(date,date_array);              
             if(inside_array===-1) 
             {
                date_array.push(date);
             }
             else
             {
                msgid= date+alertformat;  
                GetDynamicAlert("20139",msgid);           
                return false;
             }
         }
     }
});

///////// Hiding Entity on Selecting Generic Nature ///////////////////
        $('#testToggleButtonB').change(function() {
           if(this.checked)  
              $('.entity').css("visibility", "visible");        
           else        
              $('.entity').css("visibility", "hidden");                 
        });        
  }); //End of document.ready() function       
 /////////// Functions for Null validation,Resetting Fields,Deleting Holiday in Update Page ////////////////   
 
    function validation()
    {    
        var rowCount = $('#Holiday tr').length;
        var cal_name=$("#Holiday_Calendar_CALENDAR_NAME").val();
        if(cal_name==="")
            {
                GetStaticAlert("20140");               
                return false;
            }
            else
                {
                    for(var i=0;i<rowCount;i++)
                        {
                          var row_index=i+1; 
                          var date=$("#HOLIDAY_DATE-"+i).val();
                          var description=$("#DESCRIPTION-"+i).val();
                          var date_of_declaration=$("#DATE_OF_DECLARATION-"+i).val();
                          var declaration_reference=$("#DECLARATION_REFERENCE-"+i).val();                      
                          if(!(date===""&& description===""))
                            {   
                              msg=row_index+alertformat;                    
                            if(date==="")
                              {                                 
                                  GetDynamicAlert("20141",msg);                                
                                  return false;
                              }
                              else
                                  {                                     
                                        if(description==="")
                                           {
                                               GetDynamicAlert("20142",msg);                                           
                                              return false;
                                           }
                                    
                                  }
                              }
                        }
                }
    };
    function reset()
    {
        $("input[type=text]").val("");
    }        
    function DeleteHoliday(id)
    {    
        bootbox.confirm("<p class='modalstyle'><b><img width='30px' src='<?php echo Yii::app()->request->baseUrl; ?>/images/question_red.png'/>Confirmation</b></p><p>Are you sure to delete this Holiday ?</p>","No", "Yes", function(result) {
        if (result == true) {
            var alertmessage="";           
            $.ajax({  
               type: "POST",
               url: "<?php echo $this->createUrl('Holiday_Calendar/DeleteHoliday') ?>",
               data:{id:id},          
               success: function(data){ 
                console.log(data);                                
                if(data=="1000")
                {                    
                    location.reload();                
                }               
               },
            });
          }
       });
    }
</script>
<script>
    //////// Setting Time for Flash Messages //////////
    setTimeout(function() {
        $('#error_div').fadeOut('slow');
    }, 5000); 

    setTimeout(function() {
        $('#success_div').fadeOut('slow');
    }, 5000); 
</script>
 <!---- Code for Flash Messages---->
    <?php if(Yii::app()->user->hasFlash('success')):?>
    <div id="success_div" style="width:100%; height: auto; float: left;">
            <div class="success_blue"> <div class="success_blue_icon"></div>
                <div class="success_blue_msg">
                    <?php echo Yii::app()->user->getFlash('success'); ?>
                </div>
            </div>
     </div>
            <?php elseif(Yii::app()->user->hasFlash('error')):?>
 <div id="error_div" style="width:100%; height: auto; float: left;">
            <div class="error_red"> <div class="error_red_icon"></div>
                <div class="error_red_msg">
                <?php echo Yii::app()->user->getFlash('error'); ?>
                </div>
            </div>
 </div>
    <?php endif; ?>
 
<!-- ///////////// Importing CSS & Javascript Files //////////////////////////////////////////////////-->
 <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom_styles/holiday_style.css" rel="stylesheet">
<link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/bootstrap-editable.css" rel="stylesheet">
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/bootstrap-editable.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/wysihtml5-0.3.0.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/bootstrap-wysihtml5.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/bootstrap-wysihtml5.css"  /> </link>       
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'holiday--calendar-form',
	'enableAjaxValidation'=>false,
)); ?>
         <table class="gwd-div-mkyt" style="">
             <tr><td style="padding:10px 10px 2px 10px;">
             <table style="height:100px;border-radius:10px;">               
                <tr>
                    <td style="">
                        <table>
                            <tr>
                                <td style="padding-left:10px;padding-bottom: 20px;">
                                   <label class="font" for="Calendar Name"><?php echo $Getlabelname->Get_Labelname_Fnc("183");?></label>
                                </td>
                                <td colspan="3" style="padding-left:10px;padding-bottom: 20px;">
                                    <div class="input-append">
                                    <?php echo $form->textField($model,'CALENDAR_NAME'); ?><a class="field_level_help_on_txt" href="#Calendar_Name"><span class="add-on" style="width:3px !important"></span></a>
                                    </div>
                                </td>
<!--             ///////// Hidden field for Storing Calendar_Id //////// -->
                                <td>                                   
                                    <input id="UPDATE_ID" type="hidden" name="UPDATE_ID" value="<?php echo $cal_id; ?>">
                                </td>
                                <td>                                    
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-left:10px;padding-bottom: 10px;">
                                    <label class="font" style="margin-right:40px;"for="Nature"><?php echo $Getlabelname->Get_Labelname_Fnc("184");?></label>
                                </td>                                                     
                                <td style="padding-left:10px;padding-bottom: 10px;">
                                        <?php $this->widget(
                                          'bootstrap.widgets.TbToggleButton',
                                          array(
                                              'name' => 'testToggleButtonB',

                                              'enabledLabel'=> 'Specific',
                                              'disabledLabel'=> 'Generic',
                                              'value' => true,
                                              'width' => 236,
                                              'enabledStyle' => null,
                                              'customEnabledStyle' => array(
                                                  'background' => '#FF00FF',
                                                  'gradient' => '#D300D3',
                                                  'color' => '#FFFFFF'
                                              ),
                                              'customDisabledStyle' => array(
                                                  'background' => "#FFAA00",
                                                  'gradient' => "#DD9900",
                                                  'color' => "#333333"
                                              )
                                            )
                                          );?>
                                 </td>
                                <td class='entity' style="padding-left:10px;padding-bottom: 10px;">
                                  <label class="font" for="Organisation"><?php echo $Getlabelname->Get_Labelname_Fnc("122");?></label>
                                </td>
                                <td class='entity' style="padding-left:10px;padding-bottom: 10px;">
                                    <div class="input-append">
                                    <?php echo $form->textField($model,'ENTITY_ID',array('value'=>$entity,'disabled'=>true,'style'=>'background-color:white;')); ?><a class="field_level_help_on_txt" href="#Organisation"><span class="add-on" style="width:3px !important"></span></a>
                                    </div>
                               </td>
                         </tr>
                        </table>
                         </td>
                        <td></td>
                    </tr>
                 </table>   
               </td>
            </tr> 
                <tr>
                    <td style="">
                    <table class='table_holiday_list'>                   
                    <tr>
                        <td colspan="3">
                         <table style='padding-bottom: 5px !important;'class="grid_insert_table" id="Holiday">
                            <thead class="fixedHeader">          
                            <tr class="header-class">
                            <th id="hol_date_head" class="header_date_width"><?php echo $Getlabelname->Get_Labelname_Fnc("185");?><a class="field_level_help" href="#Holiday"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8" class="helpimage"></a></th>
                            <th class="header_cell_width" style="width:165px !important;"><?php echo $Getlabelname->Get_Labelname_Fnc("116");?><a class="field_level_help" href="#Description"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8" class="helpimage"></a></th>
                            <th class="header_date_width" style="padding-left: 0px!important;"><?php echo $Getlabelname->Get_Labelname_Fnc("190");?><a class="field_level_help" href="#Declared_On"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8" class="helpimage"></a></th>
                            <th class="header_cell_width" style="width:180px !important;padding-left: 15px !important;"><?php echo $Getlabelname->Get_Labelname_Fnc("186");?><a class="field_level_help" href="#Declaration_Reference"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8" class="helpimage"></a></th>
                            <th class="header_checkbox_width" style="padding-left:10px !important;"><?php echo $Getlabelname->Get_Labelname_Fnc("187");?><a class="field_level_help" href="#Compulsory"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8" class="helpimage"></a> </th>
                            <th class="header_checkbox_width" ><?php echo $Getlabelname->Get_Labelname_Fnc("188");?><a class="field_level_help" href="#Restricted"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8" class="helpimage"></a> </th>
                            <?php if($cal_id!=""){ ?><th class="delete_space" style="width:22px"></th> <?php } ?>
                                     </tr>
                            </thead>
                            <tbody class="scrollContent">
<!--  /*edit value of $i to set default no of rows*/-->
<!--////////// Code for New Calendar Insertion with 10 default rows ///////////////////-->
                            <?php if($cal_id==""){for($i=0;$i<10;$i++) { ?>                
                            <tr>
                                 <td><input class="child_id" id="<?php echo "child_id-".$i; ?>" type="hidden" name="<?php echo "child_id-".$i; ?>" value="">  </td>
                            <td><?php $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model,"attribute"=>"[$i]HOLIDAY_DATE",
                                                                    'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                                                    'duration'=>'fast',
                                                                    'showAnim' =>'slide'),
                                                            'htmlOptions' => array('id'=>"HOLIDAY_DATE-$i",'value'=>'','class'=>'multiline_date_width')));?>                    
                                                   </td>
                            <td><?php echo CHtml::activeTextField(Holiday::model(),"[$i]DESCRIPTION",array('class'=>'description','id'=>"DESCRIPTION-$i",'style'=>'width:165px !important;')); ?></td>

                            <td><?php $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model,"attribute"=>"[$i]DATE_OF_DECLARATION",
                                                                    'options' => array('dateFormat'=>'dd/mm/yy','maxDate'=>'0','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                                                    'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"DATE_OF_DECLARATION-$i",'value'=>'','class'=>'multiline_date_width')));?>            </td>
                            <td><?php echo CHtml::activeTextField(Holiday::model(),"[$i]DECLARATION_REFERENCE",array('class'=>'multiline_cell_width','style'=>'width:180px !important;','id'=>"DECLARATION_REFERENCE-$i")); ?></td>
                            <td class="checkbox_td"><?php echo CHtml::activeCheckBox(Holiday::model(),"[$i]IS_COMPULSORY",array('class'=>'multiline_checkbox_width','id'=>"IS_COMPULSORY-$i",'checked'=>'checked')); ?></td>
                            <td class="checkbox_td"><?php echo CHtml::activeCheckBox(Holiday::model(),"[$i]IS_RESTRICTED",array('class'=>'multiline_checkbox_width','id'=>"IS_RESTRICTED-$i")); ?></td>
                            </tr>
                            <?php }} ?>
<!--//////////// Code for Updating existing holiday records...Values are fetched from above mentioned arrays //////////////////////////////////////-->
                            <?php if($cal_id!=""){for($i=0;$i<$no_of_records;$i++) { ?>
                              <tr >
                                  <td><input class="child_id" id="<?php echo "child_id-".$i; ?>" type="hidden" name="<?php echo "child_id-".$i; ?>" value="<?php echo $id[$i]; ?>">  </td>
                            <td><?php $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model,"attribute"=>"[$i]HOLIDAY_DATE",
                                                                    'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                                                    'duration'=>'fast',
                                                                    'showAnim' =>'slide'),
                                                            'htmlOptions' => array('id'=>"HOLIDAY_DATE-$i",'value'=>$hol_date[$i],'class'=>'multiline_date_width')));?>                    
                                                   </td>
                            <td><?php echo CHtml::activeTextField(Holiday::model(),"[$i]DESCRIPTION",array('class'=>'description','value'=>$hol_desc[$i],'id'=>"DESCRIPTION-$i",'style'=>'width:165px !important;')); ?></td>

                            <td><?php $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model,"attribute"=>"[$i]DATE_OF_DECLARATION",
                                                                    'options' => array('dateFormat'=>'dd/mm/yy','maxDate'=>'0','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                                                    'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"DATE_OF_DECLARATION-$i",'value'=>$hol_date_of_decl[$i],'class'=>'multiline_date_width')));?>            </td>
                            <td><?php echo CHtml::activeTextField(Holiday::model(),"[$i]DECLARATION_REFERENCE",array('class'=>'multiline_cell_width','style'=>'width:180px !important;','value'=>$hol_dec_ref[$i],'id'=>"DECLARATION_REFERENCE-$i")); ?></td>
                            <td class="checkbox_td"><?php echo CHtml::activeCheckBox(Holiday::model(),"[$i]IS_COMPULSORY",array('class'=>'multiline_checkbox_width','id'=>"IS_COMPULSORY-$i",'checked'=>$hol_is_comp[$i]=='Y'?'checked':'')); ?></td>
                            <td class="checkbox_td"><?php echo CHtml::activeCheckBox(Holiday::model(),"[$i]IS_RESTRICTED",array('class'=>'multiline_checkbox_width','id'=>"IS_RESTRICTED-$i",'checked'=>$hol_is_rest[$i]=='Y'?'checked':'')); ?></td>
                            <td class="delete_space"><span title="Delete" class="icon-remove" style="margin-left: 2px;cursor:pointer;" id="" onclick="DeleteHoliday(<?php echo $id[$i]; ?> )"></span></td>
                              </tr>  
                            <?php }} ?>
<!--  ///// Code for adding more rows(set to 10 including rows to be updated)in update page for provision of inserting and upadating records simultaneously ///////////-->
                            <?php if($cal_id!=""&&$no_of_records<10){for($i=$no_of_records;$i<10;$i++) { ?>
                          <tr>
                               <td><input class="child_id" id="<?php echo "child_id-".$i; ?>" type="hidden" name="<?php echo "child_id-".$i; ?>" value="">  </td>
                          <td><?php $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model,"attribute"=>"[$i]HOLIDAY_DATE",
                                                                  'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                                                  'duration'=>'fast',
                                                                  'showAnim' =>'slide'),
                                                          'htmlOptions' => array('id'=>"HOLIDAY_DATE-$i",'value'=>'','class'=>'multiline_date_width')));?>                    
                                                 </td>
                          <td><?php echo CHtml::activeTextField(Holiday::model(),"[$i]DESCRIPTION",array('class'=>'description','id'=>"DESCRIPTION-$i",'style'=>'width:165px !important;')); ?></td>

                          <td><?php $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model,"attribute"=>"[$i]DATE_OF_DECLARATION",
                                                                  'options' => array('dateFormat'=>'dd/mm/yy','maxDate'=>'0','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                                                  'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"DATE_OF_DECLARATION-$i",'value'=>'','class'=>'multiline_date_width')));?>            </td>
                          <td><?php echo CHtml::activeTextField(Holiday::model(),"[$i]DECLARATION_REFERENCE",array('class'=>'multiline_cell_width','style'=>'width:180px !important;','id'=>"DECLARATION_REFERENCE-$i")); ?></td>
                          <td class="checkbox_td"><?php echo CHtml::activeCheckBox(Holiday::model(),"[$i]IS_COMPULSORY",array('class'=>'multiline_checkbox_width','id'=>"IS_COMPULSORY-$i",'checked'=>'checked')); ?></td>
                          <td class="checkbox_td"><?php echo CHtml::activeCheckBox(Holiday::model(),"[$i]IS_RESTRICTED",array('class'=>'multiline_checkbox_width','id'=>"IS_RESTRICTED-$i")); ?></td>
                          <td class="delete_space"></td>
                          </tr>
                          <?php }} ?>
                        </tbody>
                    </table>
<!--//////////////////// Bottom section of buttons //////////////////////////////////                -->
                    <tr id='button_section'>
                      <td colspan='6' style='width:700px'>
                         <table class="tbl_btn" id="table_bottom_bg">
                                  <tr>
                                       <td>
                                           <img title='Add Rows' id='clone_button' src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/icon_plus.png" style='cursor:pointer;float:right;margin-right:10px;padding-top: 5px;'>  
                                                  <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"button",'size'=>'small', 'label'=>$model->isNewRecord ? $Getlabelname->Get_Labelname_Fnc("103") : $Getlabelname->Get_Labelname_Fnc("181"),'id'=>"btn_Save",'icon'=>'icon-thumbs-up','htmlOptions'=>array('style'=>'float:right;margin-right:5px;','submit'=>array('Holiday_Calendar/savedetails')))); ?>            
                                                    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"button",'size'=>'small', 'label'=>$model->isNewRecord ? $Getlabelname->Get_Labelname_Fnc("104") : $Getlabelname->Get_Labelname_Fnc("104"),'id'=>"btn_Reset",'icon'=>'icon-refresh','htmlOptions'=>array('style'=>'float:right;margin-right:5px;','onclick'=>'js:reset()'))); ?>            
                                                      <input id="TotRowCount" type="hidden" name="TotRowCount" value="10">  
                                         </td>
                                   </tr>
                        </table>
                     </td>
                   </tr>
                </table>
             </td>
         </tr>
    </table>
<?php $this->endWidget(); ?>
</div><!-- form -->