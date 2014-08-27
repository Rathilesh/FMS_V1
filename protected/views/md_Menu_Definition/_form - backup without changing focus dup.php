<?php
/**
 * Created  By  : ® ℛaThIlEsH ®  
 * Created  On  : 23-Aug-2013
 * Modified By  :
 * Modified On  :
 * Purpose      : Menu Defifnition 
 */
/* @var $this Md_Menu_DefinitionController */
/* @var $model Md_Menu_Definition */
/* @var $form CActiveForm */
$VgetMessage=new Get_Message_Cls();
$Getlabelname =new Get_Labelname_Cls(); 
?>
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
<!---- End Code for Flash Messages---->   
<?php $Getlabelname =new Get_Labelname_Cls(); ?>
<?php
  $this->beginWidget('zii.widgets.jui.CJuiDialog',
                      array( 'id'=>'mydialog',
                             // additional javascript options for the dialog plugin
                             'options'=>array(  'title'=>'Alert',
                                                'show' => 'shake',
                                                'hide' => 'explode',
                                                'autoOpen'=>false,
                                                'modal'=>false,
                                                'buttons' => array( array('text'=>'Close',
                                                                          'click'=> 'js:function(){$(this).dialog("close");
                                                                              var focus_value =$("#focus_id").val();
                                                                                if(focus_value!="") 
                                                                                {
                                                                                $("#"+focus_value).focus();
                                                                                }

                                                                            }'),
                                                                    //array('text'=>'Cancel','click'=> 'js:function(){$(this).dialog("close");}'),
                                                                  ),
                                             ),
                            )
                    );
?>
<div id="message_box" style="font-weight: normal"></div>
<?php
    $this->endWidget('zii.widgets.jui.CJuiDialog');
?>
<!----  Ends Adding Widget for Pop up Message ---->

<!----  Adding Widget Extension JQRelcopy ---->
 <?php
    $this->widget('ext.jqrelcopy.JQRelcopy',
                  array( 'id' => 'copylink',
                         'removeHtmlOptions' => array('style'=>'color:red'),
                          'options' => array( 'copyClass'=>'newcopy',
                                              'clearInputs'=>true,
                                               'excludeSelector'=>'.skipcopy',
                                            )
                        )
            );
 ?>
<?php 
Yii::app()->clientScript->registerScript('loaderScript', '
    
//code for disabling text box//
$(".menu_item_class").keypress(function (event) {
  return false;
});
$(".sub_menu_class").keypress(function (event) {
  return false;
});
//code for disabling text box//
//////START////////code for check above row is empty ///////////////
$("input[type=text]").keyup(function()
    {
        //---fetch id , name, value of keyup---//
        var text_val = $(this).val();
        var text_id=$(this).attr("id");
        var text_name=$(this).attr("name");
        //alert(text_val+text_id+text_name);       
        //----get loop count----//
        var loop_c = text_id.match(/[\d\.]+/g);
        if (loop_c != null)
            {
            var loop_count = loop_c.toString();
            } 
        //--minus 1 on current loop count
        var loop_count=loop_count-1;
        var displayorder=$("#Md_Menu_Definition_"+loop_count+"_DISPLAY_ORDER").val();
        var submenuid=$("#Md_Menu_Definition_"+loop_count+"_SUBMENU_MENU_ID").val();
        var mmoid=$("#Md_Menu_Definition_"+loop_count+"_MMO_ID").val();
        var menuprompt=$("#Md_Menu_Definition_"+loop_count+"_MENU_PROMPT").val();      
        //alert(displayorder+mmoid+menuprompt);       
            if(displayorder=="") 
                {
                $("#mydialog").dialog("option","title", "Alert");
                var testman=$("#focus_id").val();
                $("#message_box").text("Please Fill Above Display Order Field !");
                $("#mydialog").dialog("option","width","466");
                $("#mydialog").dialog("option","height","130");
                $("#mydialog").dialog("open");
                $("#focus_id").val("Md_Menu_Definition_"+loop_count+"_DISPLAY_ORDER");
                $(this).val("");
                return false;
                }
            
            if(mmoid=="" && submenuid=="") 
                {
                $("#mydialog").dialog("option","title", "Alert");
                var testman=$("#focus_id").val();
                $("#message_box").text("Please Fill Above Menu Item or Submenu Field !"); 
                $("#mydialog").dialog("option","width","466");
                $("#mydialog").dialog("option","height","130");
                $("#mydialog").dialog("open");
                $("#focus_id").val("Md_Menu_Definition_"+loop_count+"_MMO_ID");
                $(this).val("");
                return false;
                }
            

            if(menuprompt=="") 
                {
                $("#mydialog").dialog("option","title", "Alert");
                var testman=$("#focus_id").val();
                $("#message_box").text("Please Fill Above Menu Item or Submenu Field !");
                $("#mydialog").dialog("option","width","466");
                $("#mydialog").dialog("option","height","130");
                $("#mydialog").dialog("open");
                $("#focus_id").val("Md_Menu_Definition_"+loop_count+"_MENU_PROMPT");
                $(this).val("");
                return false;
                }
       
});

/////////END/////code for check above row is empty ///////////////


/////START//////check validation for after submit form///////////
    $("#btnSave").click(function()
            {
            var i;
            var loop_count =$("#TotRowCount").val();
            var shortname=$("#Md_Menu_Definition_SHORT_NAME").val();
            var menuprompt=$("#Md_Menu_Definition_MENU_PROMPT").val();
              if(shortname=="" || menuprompt =="") 
              {
                $("#mydialog").dialog("option","title", "Alert");
                $("#message_box").text("Please Fill All Required Fields!");
                $("#mydialog").dialog("option","width","466");
                $("#mydialog").dialog("option","height","130");
                $("#mydialog").dialog("open");
                $("#focus_id").val("Md_Menu_Definition_SHORT_NAME");
                return false;
              }
            
            if($("#Md_Menu_Definition_1_DISPLAY_ORDER").val()!="" ||  $("#Md_Menu_Definition_1_MENU_PROMPT").val()!="")
                {
                    var get_count=0;
                    //get count for looping
                    for(i=1;i<loop_count;i++) 
                        {
                        var get_val_displayorder =$("#Md_Menu_Definition_"+i+"_DISPLAY_ORDER").val();
                        var get_id_displayorder=$("#Md_Menu_Definition_"+i+"_DISPLAY_ORDER").attr("id");
                        if(get_val_displayorder == "") 
                            {
                            //----get loop count----//
                                var loop_c = get_id_displayorder.match(/[\d\.]+/g);
                                if (loop_c != null)
                                {
                                    get_count = loop_c.toString();
                                } 
                                else    
                                {
                                    get_count =loop_count;
                                }
                            //get_conunt=0;
                            break;
                            }  
                        }    
                    //get count for looping 
                    for(i=1;i<get_count;i++) 
                        {
                        var get_val_displayorder=$("#Md_Menu_Definition_"+i+"_DISPLAY_ORDER").val();
                        var get_id_displayorder=$("#Md_Menu_Definition_"+i+"_DISPLAY_ORDER").attr("id");
                        var get_val_menuitem =$("#Md_Menu_Definition_"+i+"_MMO_ID").val();
                        var get_val_menuprompt =$("#Md_Menu_Definition_"+i+"_MENU_PROMPT").val();
                        var get_val_submenu =$("#Md_Menu_Definition_"+i+"_SUBMENU_MMD_ID").val();
                        var get_id_submenu=$("#Md_Menu_Definition_"+i+"_SUBMENU_MMD_ID").attr("id");
                        
                           if(get_val_displayorder!="") 
                            {
                            //check display order is an integer value
                            var intRegex = /^\d+$/;
                            var floatRegex = /^((\d+(\.\d *)?)|((\d*\.)?\d+))$/;
                                if(!intRegex.test(get_val_displayorder) || !floatRegex.test(get_val_displayorder)) 
                                {
                                    $("#mydialog").dialog("option","title", "Alert");
                                    $("#message_box").text("'.$VgetMessage->Get_Message_Fnc(10).'");
                                    $("#mydialog").dialog("option","width","466");
                                    $("#mydialog").dialog("option","height","130");
                                    $("#mydialog").dialog("open");
                                    $("#Md_Menu_Definition_"+i+"_DISPLAY_ORDER").val("");
                                    $("#focus_id").val("Md_Menu_Definition_"+i+"_DISPLAY_ORDER");
                                    return false;
                                } 
                        //check display order is an integer value
                        
                        if(get_val_menuitem=="" && get_val_submenu=="") 
                        {
                             $("#mydialog").dialog("option","title", "Alert");
                             $("#message_box").text("Select Menu Item Or Sub Menu in "+i+" row");
                             $("#mydialog").dialog("option","width","466");
                             $("#mydialog").dialog("option","height","130");
                             $("#mydialog").dialog("open");
                             $("#focus_id").val("Md_Menu_Definition_"+i+"_MMO_ID");
                             return false;
                         } 
                    }                  
            } 
                   
            
            
}
   $("#md--menu--definition-form").submit();
 });     
/////END//////check validation for after submit form///////////

///////////////code for show add button///////////////
$("#Md_Menu_Definition_10_DESCRIPTION").keyup(function()
    {
    $("#copylink").show(100);
    } 
///////////////code for show add button///////////////
);

 $("input[type=text]").focus(function(){
 $("#focus_dup").val($(this).attr("id"));
 });
 
', CClientScript::POS_END);
?>
<div id="loading_div"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/ajax-loader.gif"></div>
<div class="form">
  <?php 
  $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'md--menu--definition-form',
    'enableAjaxValidation'=>false,
    'type'=>'horizontal',
));
?>
<?php echo $form->errorSummary($model); ?>
    
    <!-----Adding Simple Inline style if Required-------->
            <style>
               #boostrap_table_new { text-align: left; margin: 0px; padding: 8px }
               #boostrap_table_new td { margin: 0px; padding: 0px; text-align: left; width: auto}
               input[type="text"] { height: 22px;}
               .form-horizontal .controls {margin-left: 80px;}
               input { width: 160px;}
               .form-horizontal .controls {margin-left: 134px;}
               .grid_insert_table td {font-size: 12px}
               .form-horizontal .control-group { margin-bottom: 5px;}
               select {width: 173px;height: 19px; line-height: 22px; padding: 1px 4px; font-size: 12px}
               #text_align_c td { text-align: center}
               .DISPLAY_ORDER { width: 82px;}
               input[type="textarea"] { resize: none }
               #loading_div { width: 200px; height: 200px; position: absolute; background-color: transparent; margin-left: 350px; margin-top: 100px; display: none}
               /*#boostrap_table_new td { text-align: center}*/
            </style>
            <!-----Adding Simple Inline style if Required-------->
           <table id="boostrap_table_new" class="grid_insert_table">
         <tr>
        <td>
            <?php echo $form->textFieldRow($model,'SHORT_NAME',array('size'=>50,'maxlength'=>50)); ?>
            <?php echo $form->error($model,'SHORT_NAME'); ?>
        </td>

        <td>
            <?php echo $form->textFieldRow($model,'MENU_PROMPT',array('size'=>60,'maxlength'=>150)); ?>
            <?php echo $form->error($model,'MENU_PROMPT'); ?>
        </td>
         </tr>
        <tr>
        <td> 
            <?php echo $form->textAreaRow($model,'DESCRIPTION', array('class'=>'span3', 'rows'=>1)); ?>
            <?php echo $form->error($model,'DESCRIPTION'); ?>
        </td>
        <td>&nbsp;</td>
        </tr>
        <tr>
            <td colspan="2">
                
                 <table border="2" id="text_align_c">
                           <tr class="grid_title">
                               <td></td>
                               <td><?php  echo $Getlabelname->Get_Labelname_Fnc("2050")?></td>
                               <td><?php  echo $Getlabelname->Get_Labelname_Fnc("2052")?> 
                                   <a href="#" id="yt0">
                                   <span  class="page_icon" style="">
                                       <?php
                                      echo CHtml::ajaxLink(
                                                    '',          // the link body (it will NOT be HTML-encoded.)
                                                    array('md_menu_definition/Ajax_Request_Data_For_MenuItem'), // the URL for the AJAX request. If empty, it is assumed to be the current URL.
                                                    array(
                                                        'update'=>'#message_box',
                                                        
                                                        'beforeSend' => 'function(){
                                                        $("#loading_div").show(600);
                                                        }',
                                                        
                                                        'complete' => 'function() 
                                                            {
                                                                $("#loading_div").hide(400);
                                                                var focus_dup_id=$("#focus_dup").val();
                                                                var str_focus_dupid = focus_dup_id.substring(2);
                                                                if(str_focus_dupid=="nombre") 
                                                                    {
                                                                    $("#mydialog").dialog("option","title", "Menu Item");
                                                                    $("#mydialog").dialog("option","show","explode");
                                                                    $("#mydialog").dialog("option","width","466");
                                                                    $("#mydialog").dialog("option","height","480");
                                                                    $("#mydialog").dialog("open");
                                                                    return false;
                                                                    }
                                                                    if (str_focus_dupid!="nombre")     
                                                                        {
                                                                          //alert("yes");
                                                                        $("#message_box").text("Please Select Menu Item Field");
                                                                        $("#mydialog").dialog("option","width","466");
                                                                        $("#mydialog").dialog("option","height","130");
                                                                        $("#mydialog").dialog("open");
                                                                        return false; 
                                                                        }
                                                            }',
                                                         )
                                                );
                                       ?>
                                   </span></a>

                               </td>
                               <td><?php  echo $Getlabelname->Get_Labelname_Fnc("2053")?>
                                   <a href="#" id="yt1">
                                   <span  class="page_icon" style="">
                                       <?php
                                      echo CHtml::ajaxLink(
                                                    '',
                                              // the link body (it will NOT be HTML-encoded.)
                                                    array('md_menu_definition/Ajax_Request_Data_For_Submenu'), // the URL for the AJAX request. If empty, it is assumed to be the current URL.
                                                    array(
                                                        'update'=>'#message_box',
                                                        'beforeSend' => 'function(){
                                                        $("#loading_div").show(600);
                                                        }',
                                                        'complete' => 'function() 
                                                            {
                                                             $("#loading_div").hide(600);
                                                                var focus_dup_id=$("#focus_dup").val();
                                                                //alert()
                                                                var str_focus_dupid = focus_dup_id.substring(2);
                                                                //alert(str_focus_dupid);
                                                                if(str_focus_dupid=="abcdefg") 
                                                                    {
                                                                    //$(#message_box).text("");
                                                                    $("#mydialog").dialog("option","title", "Menu Item");
                                                                    $("#mydialog").dialog("option","show","explode");
                                                                    $("#mydialog").dialog("option","width","466");
                                                                    $("#mydialog").dialog("option","height","480");
                                                                    $("#mydialog").dialog("open");
                                                                    return false;
                                                                    }
                                                                 if (str_focus_dupid!="abcdefg")     
                                                                        {
                                                                          //alert("yes");
                                                                        //bootbox.alert("hello world");
                                                                        $("#message_box").text("Please Select Submenu Field");
                                                                        $("#mydialog").dialog("option","width","466");
                                                                        $("#mydialog").dialog("option","height","130");
                                                                        $("#mydialog").dialog("open");
                                                                        return false; 
                                                                        }
                                                            }',
                                                        'update'=>'#message_box',
                                                         )
                                                );
                                       ?>
                                    </span></a>
                               </td>
                               <td><?php  echo $Getlabelname->Get_Labelname_Fnc("2033")?></td>
                               <td><?php  echo $Getlabelname->Get_Labelname_Fnc("2032")?> </td>
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
                           <tr class="row copy">
                               <td><?php echo $form->textField($model, "[$i]DISPLAY_ORDER",array('class'=>'DISPLAY_ORDER'));?></td>
                               <td>
                                   <!--<input type="text" name="[<?php //echo $i ?>]MMO_ID_HIDDEN" class="MMO_ID_HIDDEN" id="Md_Menu_Definition_<?php echo $i; ?>_MMO_ID_HIDDEN">-->
                              <input class="menu_item_class" id="_<?php echo $i; ?>nombre" type="text" name="[<?php echo $i;?>]nombre" autocomplete="off">                          
                               <?php echo $form->hiddenField($model, "[$i]MMO_ID",array('class'=>'MMO_ID'));?></td>
                               <td>
                              <input class="menu_item_class" id="_<?php echo $i; ?>abcdefg" type="text" name="[<?php echo $i;?>]abcdefg" autocomplete="off">                                                   
                                            
<!--                                   <input type="text" name="[<?php //echo $i ?>]SUBMENU_MMD_ID_HIDDEN" class="SUBMENU_MMD_ID_HIDDEN" id="Md_Menu_Definition_<?php// echo $i; ?>_SUBMENU_MMD_ID_HIDDEN">-->
                                   <?php echo $form->hiddenField($model, "[$i]SUBMENU_MMD_ID",array('class'=>'SUBMENU_MMD_ID'));?></td>
                               <td>
                                   <input type="text" name="[<?php echo $i ?>]MENU_PROMPT_HIDDEN" class="MENU_PROMPT_HIDDEN" id="Md_Menu_Definition_<?php echo $i; ?>_MENU_PROMPT_HIDDEN">
                                   <?php echo $form->hiddenField($model, "[$i]MENU_PROMPT",array('class'=>'MENU_PROMPT'));?>
                               </td>
                               <td><?php echo $form->textField($model, "[$i]DESCRIPTION",array('class'=>'DESCRIPTION'));?></td>
                               
                           </tr>
                                    <?php } ?>
                 </table>
                
            </td>
        </tr>
        
        <tr>
            <td colspan="5" style="text-align: right">
                
                <img id="copylink" rel=".copy" src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/plus_blue.png" title="Add Rows" width="20" height="20" style="cursor: pointer;display: none; float: right; margin-top: 6px; margin-left: 6px;">
                <div class="form-actions" style="float:right">                   
                   <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'button', 'type'=>'primary', 'label'=>$Getlabelname->Get_Labelname_Fnc("2022"),'id'=>'btnSave','icon'=>'icon-thumbs-up')); ?>
                   <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset','type'=>'primary', 'label'=>$Getlabelname->Get_Labelname_Fnc("2036"))); ?>
               </div>
              <!----HIDDEN FILEDS AREA --->
              <input type="hidden" name="TotRowCount" id="TotRowCount"  value="<?php echo $loop_c-1; ?>" />
              <!---Assign an hidden filed to get total count of form rows--->
              <input type="hidden" name="get_table_name" id="get_table_name" value="Md_Menu_Definition" />
              <!---Assign an hidden filed to get table name on jqurel copy --->
              <input type="hidden" name="focus" id="focus_id" />
              <input type="hidden" name="focus_dup" id="focus_dup" />
              <input type="hidden" name="Current_Loop_Count" id="Current_Loop_Count" />
              
            </td>
       </tr>
    </table>
    

<?php $this->endWidget(); ?>

</div><!-- form -->