<?php
/**
 * Created  By  : ® Anaswara ®  
 * Created  On  : 16-Aug-2013
 * Modified By  :
 * Modified On  :
 * Purpose      : Menu Object 
 */

?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom_styles/basicdefinitioncategory_style.css"/></link>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/custom_jquery/validation_v1.js" type="text/javascript"></script>

 
 <script>
 setTimeout(function() {                    //****
    $('.error_red').fadeOut('fast');        //****
}, 3000);                                   //****
                                            //****
setTimeout(function() {                     //****
    $('.success_blue').fadeOut('fast');     //****
}, 3000);                                   //****
//************************************************

$("document").ready(function(){

    <?php 
    if($model->isNewRecord) 
        {
        ?>
 // create page   
    
            $('.first_checkbox_width').prop("checked",true);  
            $('.checkbox_width').prop("checked",false);
            $("#definitiontype1").focus();
            $("#close").hide(); 
            $("#demo_save").click(function(){
                 var i;
                 var loop_count =$("#TotRowCount").val();//alert(loop_count);
                 var  alertmessage="";
                 for(i=1;i<=loop_count;i++)
                {
                 var definition_type = $("#definitiontype" + i).val();   
                 var records = $("#record" + i).val();
                 //var recordformat=/^[0-9]*$/
                 if (records=="")
                         {
                           $("#record" + i).val(0); // alert($("#record" + i).val());return false;
                         }
               }
             });
             
        <?php 
        }
  else  {
        ?>
// update page
$("#plus").hide();
$("#reset").hide();
$("#close").show();

 <?php } ?>
   
    
    
// cloning last row while using plus .    
   $("#plus").click(function() {  
            var count = $('#BDC tr').length;
            count=count-1;
            var $lastRow = $('#BDC tbody>tr:last');
            var RowIndex = $lastRow.index()+2;
            var newIDSuffix = "*";
            var cloned = $('#BDC tbody>tr:last').clone();
            var oldcount=$('#TotRowCount').val();
            $('#TotRowCount').val((parseInt(oldcount)+1)); 
            cloned.find("input").each(function() {
               
                var id = $(this).attr('id');
                var name = $(this).attr('name');
                name = name.replace(/[0-9]/, newIDSuffix);
                id = id.replace(/[0-9]/, newIDSuffix);
                name = name.replace(/[0-9]/g, "");
                id = id.replace(/[0-9]/g, "");
                name = name.replace(newIDSuffix, RowIndex);
                id = id.replace(newIDSuffix, RowIndex);
                $(this).attr('id', id);
                $(this).attr('name', name);
 //clone last row disables the checkbox  $(this).removeAttr('checked');--------check
                var classname=$(this).attr('class');
                
                  if(classname=="checkbox_width") 
                  {
                    $(this).removeAttr('checked');
                  }
                  
                  if(classname=="first_checkbox_width")
                      {
                          $(this).prop("checked",true);
                      }
                      
                  if(classname=="text_box")
                     {
                         $(this).val(" " );
                     }
                     
                   if(classname=="no_records")
                     {
                       $(this).val("").prop("placeholder","0");
                     }  
         
                
    });
            cloned.insertAfter('#BDC tbody>tr:last').find('input:text').val("");              
            return false;
    });
 
//********************************************************************************************//           
   $("#demo_save").click(function(){
    
        var i;
        var loop_count =$("#TotRowCount").val();
        var msgid;
        for(i=1;i<=loop_count;i++)
           {   
                          
               var definition_type = $("#definitiontype" + i).val();
               var description     = $("#description"    + i).val();
               var records         = $("#record" + i).val();
               var alertmessage    =""; 
               
              if ($("#definitiontype1").val()=="")
                     {
                       // alertmessage="Please Enter First Row.";
                       // openalert(alertmessage);
                        
                        msgid = i;                         
                        GetDynamicAlert("20062",msgid);
                        $("#definitiontype1").focus();
                        return false;
                     }
                     
             if(definition_type!="")
                 {  
                     var expressioncheck=specialcharactervalidation(definition_type);
                     if (expressioncheck==false)
                     {
                          GetDynamicAlert("20065",i); 
                          $("#definitiontype" + i).focus();
                          return false;
                     }
                     if(description=="")
                         {
//                           alertmessage="Please Enter Description in Row "+i;
//                           openalert(alertmessage);
//                             msgid=[];
//                             msgid[0] = i;                         
                             GetDynamicAlert("20060",i); 
                             $("#description"+ i).focus();
                             return false; 
                         }
                 }
                 
             if(description!="")
                 {
                     if(definition_type=="")
                         {
//                            alertmessage="Please Enter Definition type in Row "+i
//                            openalert(alertmessage);
//                              msgid=[];
//                              msgid[0] = i;                         
                              GetDynamicAlert("20059",i); 
                              $("#definitiontype" + i).focus();
                              return false; 
                         }
                 }
               
             //  var recordvalue=0;
            //   var recordformat=/^[0-9]*$/
               if (!ValidateNumber(records))
                  {    
//                         alertmessage="Please enter only Numerical Characters in Row " +i
//                         openalert(alertmessage);
//                            msgid=[];
//                            msgid[0] = i;                         
                            GetDynamicAlert("20061",i);
                            $("#record" + i).focus();
                            return false;
                  }
                  
               if (records=="")
                  {
                         $(".no_records[value='']").val(0);  
                  }
                  
               if (records!="0")  
                   {
                       if(definition_type=="")
                         {
//                            alertmessage="Please Enter Definition type in Row "+i
//                            openalert(alertmessage);
//                              msgid=[];
//                              msgid[0] = i;                         
                              GetDynamicAlert("20059",i); 
                              $("#definitiontype" + i).focus();
                              return false; 
                         }
                         
                         if(description=="")
                         {
//                           alertmessage="Please Enter Description in Row "+i;
//                           openalert(alertmessage);
//                             msgid=[];
//                             msgid[0] = i;                         
                             GetDynamicAlert("20060",i); 
                             $("#description"+ i).focus();
                             return false; 
                         }
                         
                       
                   } 
         }
     
   });
 // reset enables first two checkboxes  
   $("#reset").click(function(){
       
      $("#BDC").find('input[type=text]:not(.first_checkbox_width)').val('');
      $('.checkbox_width').prop("checked",false);
      });
     });
  
  function isNumberKey(evt)
    {
       var charCode = (evt.which) ? evt.which : event.keyCode;
       if (charCode != 46 && charCode > 31 
         && (charCode < 48 || charCode > 57))
       return false;
       return true;
    }
 
    </script>
<style>
/* .text_box
    {
        height:25px!important;
    }
 .no_records
    {
        height:25px!important;
        width:86px!important;
        text-align:right!important;
    }
 .DT{ width:232px; } 
 .Desc{ width:206px; }
 .NRecords{ width:90px;text-align: center; }
 .amend { padding-right: 25px;}
 .display{padding-right: 27px;}
 .compulsary{padding-right: 16px;}
 .checkbox_width
    {
        width:20px!important;
        background-color: rgb(238,236,236)!important;
    }
    
 .grid_insert_table thead th 
    {
        padding-right: 15px !important;
    }
    
 
 .check_box_border
    {
        border:10px aliceblue ;
        width:100px;
        border-bottom:2px solid #e8e8e8 !important;
        border-right:2px solid #e8e8e8!important;
    }
    
 .first_checkbox_width
    {
        width:20px!important;
    }
 
 .fixed tr:last-child {
            display: table;
            position: fixed;
 }
 
 .tbl_btn
    {
        width:1000px;
        padding-top: 2px;
        border: 1px solid #D3D0D0;
        border-radius: 10px;
        border-top:none;
        border-top-left-radius: 0px;
        border-top-right-radius: 0px;
        padding-right: 15px;
        box-shadow:0px 6px 15px 0px #c4c4c4;

    }

.fixedHeader 
    {
        position: relative;
        display: block;
    }

.scrollContent
    {
        display: block;
        overflow:auto;
        width: 815px;
        height:400px;
       

    }
   
.grid_insert_table 
    {
        border-bottom:none !important;
        border-bottom-left-radius: 0px !important;
        border-bottom-right-radius: 0px !important;
        padding-bottom: 0px !important;
        box-shadow: 0px -4px 8px 1px #c4c4c4 !important;
       
    }
.btn_save 
    {
        text-align: right !important;border-bottom-left-radius: 10px;
        padding: 5px;
    }*/
</style>

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

<div class="form">
 <?php
        $this->widget('ext.jqrelcopy.JQRelcopy',array(        
        'id' => 'copylink',
        'removeHtmlOptions' => array('style'=>'color:red'),        
        'options' => array(        
            'copyClass'=>'newcopy',
            'clearInputs'=>true,
            'excludeSelector'=>'.skipcopy',
        )
    ));
   require_once('popupdialog.php');      
   $Getlabelname =new Get_Labelname_Cls(); 
 ?>          
  <!-------START FORM WIDGET--------->           
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',
            array(
	          'id'=>'basic--definition--category-form',
                  'type'=>'horizontal',
	          'enableAjaxValidation'=>false,
                  'focus'=>'#basic--definition--category-form input:text:empty:first,'
                       . '#basic--definition--category-form input[class=error]:first',
                )); ?>
<?php echo $form->errorSummary($model) ?>


<table style="border:2" class="grid_insert_table" id="BDC">
    <thead class="fixedHeader">
        <tr class="grid_title">
            <th class="DT"><?php echo$Getlabelname->Get_Labelname_Fnc("115"); ?><a class="field_level_help" href="#DefinitionType"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8"></a></th>
            <th class="Desc"><?php echo$Getlabelname->Get_Labelname_Fnc("116"); ?><a class="field_level_help" href="#Description"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8"></a></th>
            <th class="NRecords"><?php echo$Getlabelname->Get_Labelname_Fnc("121");?><a class="field_level_help" href="#Records"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8"></a></th>
            <th class="amend"><?php echo$Getlabelname->Get_Labelname_Fnc("117"); ?><a class="field_level_help" href="#Amend"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8"></a></th>
            <th class="display"><?php echo$Getlabelname->Get_Labelname_Fnc("118"); ?><a class="field_level_help" href="#Display"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8"></a></th>
            <th class="compulsary"><?php echo$Getlabelname->Get_Labelname_Fnc("119"); ?><a class="field_level_help" href="#Universal"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8"></a></th>
            <th ><?php echo$Getlabelname->Get_Labelname_Fnc("120"); ?><a class="field_level_help" href="#Compulsary"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8"></a></th>
        </tr>    
    </thead>
<!--         Setting Total Row Count-->
        <?php 
       
            if(isset($_POST['TotRowCount'])<>'')
            {
                $loop_c=$_POST['TotRowCount'];
                
            }
            else 
            {
                if($model->isNewRecord)
                {
                 $loop_c=15;
                }
                else 
                {
                    $loop_c=1; 
                }
            }
       ?>

<tbody class="scrollContent">
<?php for($i=1;$i<=$loop_c;$i++){?>
    
<!--IF FOR CREATE AND ELSE FOR UPDATE-->
        <?php
          try
          {
             $definitiontype=array();
             if(isset($_POST['Basic_Definition_Category'][$i]["DEFINITION_TYPE"])<>"")
             {
                 $definitiontype[$i]=$_POST['Basic_Definition_Category'][$i]["DEFINITION_TYPE"];
             }
             else{ $definitiontype[$i]=$model->DEFINITION_TYPE;}
             
             
             $description=array();
             if(isset($_POST['Basic_Definition_Category'][$i]["DESCRIPTION"])<>"")
             {
                 $description[$i]=$_POST['Basic_Definition_Category'][$i]['DESCRIPTION'];
             }
             else{ $description[$i]=$model->DESCRIPTION;}
             
             
             $num_records=array();
             if(isset($_POST['Basic_Definition_Category'][$i]["NO_OF_RECORDS"])<>"")
             {
                  $num_records[$i]=$_POST['Basic_Definition_Category'][$i]["NO_OF_RECORDS"];
             }
             else{ $num_records[$i]=$model->NO_OF_RECORDS;}
             
             
             $amend=array();$is_amend=array();
             
             if(isset($_POST['Basic_Definition_Category'][$i]["IS_AMEND"])<>"")
             {
                 
                    $amend[$i]=$_POST['Basic_Definition_Category'][$i]["IS_AMEND"];
                  
                    if(isset($_POST['Basic_Definition_Category'][$i]["IS_AMEND"])=="Y")
                    {
                        $amend[$i]=TRUE; 
                    }
                    
                    if(isset($_POST['Basic_Definition_Category'][$i]["IS_AMEND"])=="N")
                    {
                        $amend[$i]=FALSE;
                    }
             
             }
             else
             {
                 
                if($model->IS_AMEND=="Y")
                { 
                    $amend[$i]=TRUE;
                }
                
                else 
                {
                    $amend[$i]=FALSE; 
                }
             }
            
             $display=array();$is_display=array();
             
             if(isset($_POST['Basic_Definition_Category'][$i]["IS_DISPLAY"])<>"")
             {   
                    $display[$i]=$_POST['Basic_Definition_Category'][$i]["IS_DISPLAY"];
                    
                    if(isset($_POST['Basic_Definition_Category'][$i]["IS_DISPLAY"])=="Y")
                    {
                        $display[$i]=true;
                    }
                    
                    if(isset($_POST['Basic_Definition_Category'][$i]["IS_DISPLAY"])=="N")
                    {
                        $display[$i]=false;
                       // $is_display[$i]=0;
                    }
             
             }
             
             else
             {
                 if($model->IS_DISPLAY=="Y")
                 {
                     $display[$i]=true;
                 }
                else 
                 {
                    $display[$i]=false;
                 }
                 
             }
             
             $universal=array();$is_universal=array();
             
             if(isset($_POST['Basic_Definition_Category'][$i]["IS_UNIVERSAL"])<>"")
             {   
                    $universal[$i]=$_POST['Basic_Definition_Category'][$i]["IS_UNIVERSAL"];
                    
                    if(isset($_POST['Basic_Definition_Category'][$i]["IS_UNIVERSAL"])=="Y")
                    {
                        //$is_universal[$i]=true;
                        $universal[$i]=true;
                    }
                    if(isset($_POST['Basic_Definition_Category'][$i]["IS_UNIVERSAL"])=="N")
                    {
                        $universal[$i]=false;
                       // $is_universal[$i]=0;
                    }
             
             }
             
             else
             {     if($model->IS_UNIVERSAL=="Y")
                    {
                     $universal[$i]=true;
                    }
                    else 
                    {
                     $universal[$i]=false;
                    }
             }
             
             $compulsary=array();$is_compulsary=array();
             if(isset($_POST['Basic_Definition_Category'][$i]["IS_COMPULSORY"])<>"")
             {   
                    $compulsary[$i]=$_POST['Basic_Definition_Category'][$i]["IS_COMPULSORY"];
                    
                    if(isset($_POST['Basic_Definition_Category'][$i]["IS_COMPULSORY"])=="Y")
                    {
                      $compulsary[$i]=true;
                     
                    }
                    if(isset($_POST['Basic_Definition_Category'][$i]["IS_COMPULSORY"])=="N")
                    {
                        $compulsary[$i]=false;
                    }
             }
             
             else
             {
                if($model->IS_COMPULSORY=="Y")
                 {
                     $compulsary[$i]=true;
                 }
                else 
                 {
                    $compulsary[$i]=false;
                 }    
             }
             
          }
          catch (Exception $exc) 
           {
               echo $exc->getTraceAsString();
           }   
        ?>
     <tr id="form_addings">
        <td class="text_box">
            <?php
                echo $form->textField($model,"[$i]DEFINITION_TYPE",array('size'=>30,'maxlength'=>30,'class'=>'text_box','value'=>$definitiontype[$i],"id"=>"definitiontype$i","style"=>'margin-left: 2px;')); 
                echo $form->error($model,'DEFINITION_TYPE'); 
            ?>
        </td> 
        <td class="text_box">
            <?php
                echo $form->textField($model,"[$i]DESCRIPTION",array('size'=>100,'maxlength'=>100,'class'=>'text_box','value'=>$description[$i],"id"=>"description$i")); 
                echo $form->error($model,'DESCRIPTION'); 
            ?>
        </td>
        <td>
            <?php
                echo $form->textField($model,"[$i]NO_OF_RECORDS",array('size'=>5,'maxlength'=>5,'placeholder'=>0,'class'=>'no_records','id'=>"record$i",'value'=>$num_records[$i],'onkeypress' => 'return isNumberKey(event);')); 
                echo $form->error($model,'NO_OF_RECORDS'); 
            ?>
        </td> 
        <td class="check_box_border"><?php  echo $form->checkBox($model,"[$i]IS_AMEND",array('class'=>'first_checkbox_width','value'=>"Y","checked"=>$amend[$i],"uncheckValue"=>'N','id'=>"is_amend$i",)); ?></td>
        <td class="check_box_border"> <?php echo $form->checkBox($model,"[$i]IS_DISPLAY",array('class'=>'first_checkbox_width','value'=>"Y","checked"=>$display[$i],"uncheckValue"=>"N",'id'=>"is_display$i")); ?></td>
        <td class="check_box_border"> <?php echo $form->checkBox($model,"[$i]IS_UNIVERSAL",array('class'=>'checkbox_width','value'=>"Y","checked"=>$universal[$i],"uncheckValue"=>"N",'id'=>"is_universal$i")); ?></td>
        <td class="check_box_border"> <?php echo $form->checkBox($model,"[$i]IS_COMPULSORY",array('class'=>'checkbox_width','value'=>"Y","checked"=>$compulsary[$i],"uncheckValue"=>"N",'id'=>"is_compulsary$i")); ?></td>
        
    </tr>
<?php } ?>

</tbody>
</table>
  
<table class="tbl_btn" id="table_bottom_bg">
    <tbody>
      <tr id="table_bottom_bg">
        <td class="btn_save">
    
          <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"submit",'size'=>'small', 'label'=>$model->isNewRecord ?$Getlabelname->Get_Labelname_Fnc("103") : $Getlabelname->Get_Labelname_Fnc("103"),'id'=>'demo_save','icon'=>'icon-thumbs-up',)); ?>
          <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"clear",'size'=>'small','icon'=>'icon-refresh','label'=>$Getlabelname->Get_Labelname_Fnc("104"),'id'=>'reset')); ?>
          <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"Close",'size'=>'small','icon'=>'icon-remove','url' =>$this->createUrl('basic_definition_category/admin'),'label'=>$Getlabelname->Get_Labelname_Fnc("141"),'id'=>'close','htmlOptions'=>array('style'=>'display:none !important;'))); ?>
           <img  src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/icon_plus.png"   
           title="Add Rows" width="16" height="16"  alt="" style="cursor: pointer;" id="plus"/></td>                   
          <input id="TotRowCount" type="hidden" name="TotRowCount" value="<?php echo $loop_c;?>">
          <input id="currentrow" type="hidden" name="currentrow" value="">
      </tr>

     </tbody>
</table>
    <?php  $this->endWidget(); ?>
</div>

       