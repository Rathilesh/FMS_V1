<?php /** @var BootActiveForm $form */

/**
 * Created  By  : ® ℛaThIlEsH ®  
 * Created  On  : 20-Aug-2013
 * Modified By  :
 * Modified On  :
 * Purpose      : Menu Object 
 */

?>
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
<?php endif;

$this->beginWidget('zii.widgets.jui.CJuiDialog',
                        array(
                             'id'=>'mydialog',
                             // additional javascript options for the dialog plugin
                             'options'=>array(
                                        'title'=>'Alert',
                                        'show' => 'shake',
                                        'hide' => 'explode',
                                        'autoOpen'=>false,
                                        'modal'=>true,
                                        'width'=>'400px',
                                       // 'height'=>'125px',
                                        'buttons' => array(
                                                     array('text'=>'Close',
                                                          'click'=> 'js:function()
                                                              {
                                                            
                                                              $(this).dialog("close");
                                                              var focus_value =$("#focus_id").val();
                                                              if(focus_value!="") {
                                                              
                                                                                $("#"+focus_value).focus();
                                                                                //$("#"+focus_value).val("");
                                                                                  }
                                                              }'
                                                          ),
                                                     //array('text'=>'Cancel','click'=> 'js:function(){$(this).dialog("close");}'),
                                                          ),
                                             ),
                             )
                    );
?>
<div id="message_box" style="font-weight: bold"></div>
<?php
$this->endWidget('zii.widgets.jui.CJuiDialog');

$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'md_menu_object-Form',
    'type'=>'horizontal',
)); ?>



<?php
$this->widget('ext.jqrelcopy.JQRelcopy',array(
                                        'id' => 'copylink',
                                        'removeHtmlOptions' => array('style'=>'color:red'),
                                                                'options' => array(
                                                                'copyClass'=>'newcopy',
                                                                'clearInputs'=>true,
                                                                'excludeSelector'=>'.skipcopy',
                                                                                   )
                                              )
            );
//DECLARE CLASS INTO NEW VARIABLE
$Getlabelname =new Get_Labelname_Cls();
//DECLARE CLASS INTO NEW VARIABLE

Yii::app()->clientScript->registerScript('loaderScript', '
    
    ///////Code for validating above row is null /////////
     
        $("input[type=text]").keyup(function(){
        //---fetch id , name, value of keyup---//
        var text_val = $(this).val();
        var text_id=$(this).attr("id");
        var text_name=$(this).attr("name");
        //alert(text_val+text_id+text_name);
        
        //----get loop count----//
        var loop_c = text_id.match(/[\d\.]+/g);
        if (loop_c != null){
            var loop_count = loop_c.toString();
            //alert(loop_count);
        }
        
        //--minus 1 on current loop count
        loop_count=loop_count-1;
        //fetch value on above rows
        var param_name=$("#Md_Object_Param_"+loop_count+"_PARAM_NAME").val();
        var param_value=$("#Md_Object_Param_"+loop_count+"_PARAM_VALUE").val();
        var description=$("#Md_Object_Param_"+loop_count+"_DESCRIPTION").val();
        var data_type=$("#Md_Object_Param_"+loop_count+"_DATA_TYPE").val();
       // alert(param_name+param_value+description+data_type);
        if(param_name==""){
        
         //alert("Please fill above parameter name field !");
         $("#mydialog").dialog("option","title", "Alert");
         var testman=$("#focus_id").val();
         $("#message_box").text("Please Fill Above Parameter Name Field !");      
         $("#mydialog").dialog("open");
         $("#focus_id").val("Md_Object_Param_"+loop_count+"_PARAM_NAME");
         $(this).val("");
         return false;
         }
         if(param_value==""){
         //alert("Please fill above parameter name field !");
         $("#mydialog").dialog("option","title", "Alert");
         $("#message_box").text("Please Fill Above Parameter Value Field !");
         $("#mydialog").dialog("open");
         $("#focus_id").val("Md_Object_Param_"+loop_count+"_PARAM_VALUE");
         $(this).val("");
         return false;
         }
         if(description==""){
         //alert("Please fill above parameter name field !");
         $("#mydialog").dialog("option","title", "Alert");
         $("#message_box").text("Please Fill Above Description Field !");
         $("#mydialog").dialog("open");
         $("#focus_id").val("Md_Object_Param_"+loop_count+"_DESCRIPTION");
         $(this).val("");
         return false;
         }
         if(data_type==""){
        // alert("Please fill above parameter name field !");
         $("#mydialog").dialog("option","title", "Alert");
         $("#message_box").text("Please Select above Data type !");
         $("#mydialog").dialog("open");
         $("#focus_id").val("Md_Object_Param_"+loop_count+"_DATA_TYPE");
         $(this).val("");
         return false;
         }

        });
    ///////Code for validating above row is null /////////
    
    ////////////////code for checking validation///////////////////////
    $("#demo_save").click(function()
        {
        //checking parameter validation
        var i;
        var loop_count =$("#TotRowCount").val();
        for(i=1;i<loop_count;i++) 
            {
            var get_val_paramname=$("#Md_Object_Param_"+i+"_PARAM_NAME").val();
            var get_val_paramvalue =$("#Md_Object_Param_"+i+"_PARAM_VALUE").val();
            var get_val_description =$("#Md_Object_Param_"+i+"_DESCRIPTION").val();  
            var get_val_datatype =$("#Md_Object_Param_"+i+"_DATA_TYPE").val(); 
                if(get_val_paramname!="") 
                    {
                   if(get_val_paramvalue =="" || get_val_description=="" || get_val_datatype=="") {
                        $("#mydialog").dialog("option","title", "Alert");
                        $("#message_box").text("Some fields are empty in "+i+" row");
                        $("#mydialog").dialog("open");
                        $("#focus_id").val("Md_Object_Param_"+i+"_PARAM_VALUE");
                        return false;
                    }
            }
                if(get_val_paramvalue!="") 
                    {
                        if(get_val_paramname =="" || get_val_description=="" || get_val_datatype=="") 
                            {
                            $("#mydialog").dialog("option","title", "Alert");
                            $("#message_box").text("Some fields are empty in "+i+" row");
                            $("#mydialog").dialog("open");
                            $("#focus_id").val("Md_Object_Param_"+i+"_DESCRIPTION");
                            return false;
                            }
                    }
                if(get_val_description!="") 
                    {
                        if(get_val_paramname =="" || get_val_paramvalue=="" || get_val_datatype=="") 
                            {
                            $("#mydialog").dialog("option","title", "Alert");
                            $("#message_box").text("Some fields are empty in "+i+" row");
                            $("#mydialog").dialog("open");
                            $("#focus_id").val("Md_Object_Param_"+i+"_DATA_TYPE");
                            return false;
                            }
                    }
                    
                    if(get_val_datatype!="") 
                    {
                        if(get_val_paramname =="" || get_val_paramvalue=="" || get_val_description=="") 
                            {
                            $("#mydialog").dialog("option","title", "Alert");
                            $("#message_box").text("Some fields are empty in "+i+" row");
                            $("#mydialog").dialog("open");
                            $("#focus_id").val("Md_Object_Param_"+i+"_PARAM_NAME");
                            return false;
                            }
                    }

            }
    //parameter validation

        var object_id=$("#Md_Menu_Object_OBJECT_ID").val();
        var display_title=$("#Md_Menu_Object_DISPLAY_TITLE").val();
        var description=$("#Md_Menu_Object_DESCRIPTION").val();
        var menu_prompt=$("#Md_Menu_Object_MENU_PROMPT").val();
        var wef=$("#Md_Menu_Object_WEF").val();
        if(object_id=="" || display_title=="" || description=="" || menu_prompt=="" || wef=="")
            {
            //alert("Please enter atleast one row");
            $("#mydialog").dialog("option","title", "Alert");
            $("#message_box").text("Please Fill All Required Fields!");
            $("#mydialog").dialog("open");
            $("#focus_id").val("Md_Menu_Object_OBJECT_ID");
            // $("#Md_Menu_Object_OBJECT_ID").focus();
            }
            else
                {
                $("#md_menu_object-Form").submit();
                }
        });
    /////////////////code for checking validation////////////////////////
    
    //////////////code for show add button ///////////////
    
//            $("table tr").click(function() {
//           alert("yes"); 
//          });


    
    $("select").change(function() {
    var Vget_value=$(this).val();
    var Vget_id=$(this).attr("ID");
    //alert(Vget_id);
    var loop_c = Vget_id.match(/[\d\.]+/g);
    if (loop_c != null){
        var loop_count = loop_c.toString();
        //alert(loop_count);
    }
    var Vget_paramValue=$("#Md_Object_Param_"+loop_count+"_PARAM_VALUE").val();
    var Vget_paramId="Md_Object_Param_"+loop_count+"_PARAM_VALUE";
        if(Vget_paramValue=="") {
         alert("Please Fill Parameter Value Field");
         $("#"+Vget_paramId).focus();
         return false;
        }
        if(Vget_value=="N") 
        {
            var len=Vget_paramValue.length;
            var c;
            for(var i=0;i<len;i++)
            {
              c=Vget_paramValue.charAt(i).charCodeAt(0);
              if(c <48 || c >57)
              {
                alert("Not A Numaric  In Parameter Value");  
                $("#"+Vget_paramId).val("");
                $("#"+Vget_paramId).focus();
                return false;
              }         
            }
        return false;
        }
    if(Vget_value=="VC") {
   // alert("it is a varchar");
    return false;
    }
    if(Vget_value=="D") {
    //alert("it is a date");
    return false;
    }
    
    //alert(v);
    });
    
    $("#Md_Object_Param_10_DATA_TYPE").change(function()
        {
        $("#copylink").show(100);
        } 
    ///////////////code for show add button///////////////
        );
//$(".success_blue").animate({opacity: 1.0}, 3000).fadeOut("slow");
//tooltip 
 $("input[type=text]").dblclick(function(){
      var valueoftooltip =$(this).val();
       if(valueoftooltip!="") 
       {
         // alert($(".n").length);
            
                $("#"+$(this).attr("id")).after("<div class=tooltip-style id=tooltip-"+$(this).attr("id")+" style=display:block;>"+$(this).val()+"<div id=tooltip-pointer></div></div>");
                $("#tooltip-"+$(this).attr("id")).animate({opacity: 1.0}, 3000).fadeOut("slow");
//            }
//            else 
//            {
//            alert("here2nd");
//            $("#tooltip-"+$(this).attr("id")).val($(this).val());
//            }
        }
   })  
//    $("input[type=text]").mouseout(function(){
//    $("#tooltip-"+$(this).attr("id")).hide();
//       //$("#"+$(this).attr("id")).after("<div class=n>"+$(this).val()+"</div>").hide();
//       // $("#n").hide();
//   })  
 //tooltip               

', CClientScript::POS_END);
?>
            <!-----Adding Simple Inline style if Required-------->
            <style>
               #boostrap_table_new { text-align: left; margin: 0px; padding: 8px ; float:left; }
               #boostrap_table_new td { margin: 0px; padding: 0px; text-align: left; width: auto}
               input[type="text"] { height: 22px;}
               .form-horizontal .controls {margin-left: 80px;}
               input { width: 179px;}
               .form-horizontal .controls {margin-left: 134px;}
               .grid_insert_table td {font-size: 12px}
               .form-horizontal .control-group { margin-bottom: 5px;}
               select {width: 173px;height: 19px; line-height: 22px; padding: 1px 4px; font-size: 12px}
               #text_align_c td { text-align: center}
               #text_align_c tbody { height: 200px; overflow-y: scroll}
               #Md_Menu_Object_WEF,#Md_Menu_Object_WET {width: 100px;}
               
            </style>
            <!---tooltip----->
<!--            <div id="n" style=""></div>-->
            <!----tooltip----->
            <!-----Adding Simple Inline style if Required-------->
           <table id="boostrap_table_new" class="grid_insert_table">
               <tr>
                   <td><?php echo $form->textFieldRow($model, 'OBJECT_ID',array('prepend'=>'<span class="required">*</span>','placeholder'=>'Required')); ?></td>
                   <td><?php echo $form->textFieldRow($model, 'DISPLAY_TITLE',array('prepend'=>'<span class="required">*</span>','placeholder'=>'Required')); ?> </td>
               </tr>
               <tr>
                   <td><?php echo $form->textAreaRow($model, 'DESCRIPTION', array('class'=>'span3', 'rows'=>1,'placeholder'=>'Required')); ?></td>
                   <td><?php echo $form->textFieldRow($model, 'MENU_PROMPT',array('prepend'=>'<span class="required">*</span>','placeholder'=>'Required')); ?></td>
               </tr>
               <tr>
                   <td><?php echo $form->datepickerRow($model, 'WEF',array('prepend'=>'<span class="required">*</span>','placeholder'=>'Required',
                           'append'=>'<i class="icon-calendar"></i>','options'=>array('dateFormat'=>'d-M-yy','changeYear'=>'true','changeMonth'=>'true'))); ?>
                   </td>
                   <td><?php echo $form->datepickerRow($model, 'WET',array(
                           'append'=>'<i class="icon-calendar"></i>','options'=>array('dateFormat'=>'d-M-yy','changeYear'=>'true','changeMonth'=>'true'))); ?>
                   </td>
               </tr>
               <tr>
                   <td colspan="2">
                       <table border="2" id="text_align_c">
                           <tr class="grid_title">
                               <td>&nbsp;</td>
                               <td height="23">
                                   <?php echo  $Getlabelname->Get_Labelname_Fnc("2037"); ?>
                               </td>
                               <td>
                                   <?php echo  $Getlabelname->Get_Labelname_Fnc("2038");?>
                               </td>
                               <td>
                                   <?php echo  $Getlabelname->Get_Labelname_Fnc("2032");?>
                               </td>
                               <td>
                                   <?php echo  $Getlabelname->Get_Labelname_Fnc("2040");?>
                               </td>
                           </tr>
                           <!-------SETTING TOTAL ROW COUNT ------->
                                <?php
                                if(isset($_POST['TotRowCount'])<>'')
                                    {
                                    $loop_c=$_POST['TotRowCount']+1;
                                    }
                                    else
                                        {
                                         $loop_c=11;
                                        }
                           //START LOOPING
                                for ($i=1;$i<$loop_c; $i++)
                                    {
                                ?>
                           <!-------SETTING TOTAL ROW COUNT ------->
                                <tr class="row copy"> <!---ADD ROW COPY CLASS TO ADD ROWS DYNAMICALLY>
                            <!--<td></td>-->
                                   <td><?php echo $form->textField($md_object_param, "[$i]PARAM_NAME",array('class'=>'PARAM_NAME'));?></td>
                                   <td><?php echo $form->textField($md_object_param, "[$i]PARAM_VALUE",array('class'=>'PARAM_VALUE')); ?></td>
                                   <td><?php echo $form->textField($md_object_param, "[$i]DESCRIPTION",array('class'=>'DESCRIPTION')); ?></td>
                                   <td><?php echo $form->dropDownList($md_object_param,"[$i]DATA_TYPE",array('VC'=>'Varchar','N'=>'Number','D'=>'Date'), array('empty'=>'-- Select One --','class'=>'DATA_TYPE')); ?></td>
                                </tr>
                                <?php } //LOOP END ?>
                                 <tr>
                                     <td colspan="5" style="text-align: right">
                                         <!----HIDDEN FILEDS AREA --->
                                        <input type="hidden" name="TotRowCount" id="TotRowCount"  value="<?php echo $loop_c-1; ?>" />
                                       <!---Assign an hidden filed to get total count of form rows--->
                                       <input type="hidden" name="get_table_name" id="get_table_name" value="Md_Object_Param" />
                                       <!---Assign an hidden filed to get table name on jqurel copy --->
                                       <input type="hidden" name="focus" id="focus_id" />
                                        
                                       <img id="copylink" rel=".copy" src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/plus_blue.png" title="Add Rows" width="20" height="20" style="cursor: pointer;display: none">
                                     </td>
                                </tr>
                       </table>
                   </td>
               </tr>
               <tr class="tabular_submit_background">
                 <td colspan="2"  class="tabular_submit_padding">
                   <div class="" style="float: right">
                      
                   <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"button",'size'=>'small', 'label'=>$Getlabelname->Get_Labelname_Fnc("2022"),'id'=>'demo_save','icon'=>'icon-thumbs-up')); ?>
                   <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"reset",'size'=>'small', 'label'=>$Getlabelname->Get_Labelname_Fnc("2023"))); ?>

               </div>
                    </td>
                </tr>
           </table>
<?php $this->endWidget(); ?>