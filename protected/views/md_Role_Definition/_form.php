<?php 
/**
 * Created  By  : Nirmal C  
 * Created  On  : 29-Aug-2013
 * Modified By  :
 * Modified On  :
 * Purpose      : Creating Role for User
 */
?>
<?php
/* @var $this Md_Role_DefinitionController */
/* @var $model Md_Role_Definition */
/* @var $form CActiveForm */
?>
<style>
    #boostrap_table_new { text-align: left; margin: 0px; padding: 8px; float: left; }
    #boostrap_table_new td { margin-bottom: 1px; padding: 0px; text-align: left; width: auto}
    #text_align_c td { text-align: center}
    #HeadderAlign { margin: 0px; padding: 0px;}
    #HeadderAlign td { padding-bottom:  4px}
    .form-horizontal .controls {margin-left: 80px;}
    .form-horizontal .controls {margin-left: 134px;}
    .grid_insert_table td {font-size: 12px}
    .form-horizontal .control-group { margin-bottom: 5px;}
    .DISPLAY_ORDER { width: 179px;}
    .MENU_NAME     { width: 535px; } 
    .MarginBottoms  {margin-bottom: 100px}
    select {width: 173px;height: 19px; line-height: 22px; padding: 1px 4px; font-size: 12px}
    input[type="text"] { height: 22px;}
    input { width: 179px;}
    /*#boostrap_table_new td { text-align: center}*/
 </style>

<?php $Getlabelname =new Get_Labelname_Cls(); ?>

<!---- Code for Flash Messages---->
<?php 
       if(Yii::app()->user->hasFlash('success')):?>
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

<!----  Adding Widget for Pop up Message ---->
<?php
  $this->beginWidget('zii.widgets.jui.CJuiDialog',
                        array(
                             'id'=>'mydialog',
                             // additional javascript options for the dialog plugin
                             'options'=>array(
                                        'title'=>'Alert',
                                        'show' => 'shake',
                                        'hide' => 'explode',
                                        'autoOpen'=>false,
                                        //'modal'=>false,
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
                  array( 'id' => 'AddRow',
                         'removeHtmlOptions' => array('style'=>'color:red'),
                          'options' => array( 'copyClass'=>'newcopy',
                                              'clearInputs'=>true,
                                              'excludeSelector'=>'.skipcopy',
                                            )
                        )
            );
 ?>
<!----  Ends Adding Widget Extension JQRelcopy ---->

<div class="form">

<?php 

   $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', 
                                array( 'id'=>'md--role--definition-form',
                                       'type'=>'horizontal',
                                     )  
                              ); 

  ?>
    
 <?php Yii::app()->clientScript->registerScript('loaderScript', '
    
     $("input[type=text]").keyup(function() 
     {
        var nRowNo    = $(this).attr("id").match(/[\d\.]+/g);
        if  (nRowNo == 1 )   
        {
           nRowNo = nRowNo;
        }
        else
        {
          nRowNo = nRowNo -1 ;
        }

       var vDisplayOrder  =$("#Md_Role_Menu_"+ nRowNo +"_DISPLAY_ORDER").val();
       if(vDisplayOrder =="")
       {
           $("#mydialog").dialog("option","title", "Error");
           $("#message_box").text("Display Order Cannot Be Blank.");
           $("#mydialog").dialog("open");

           $("#Md_Role_Menu_"+ nRowNo +"_DISPLAY_ORDER").focus();
           $(this).val("");
           return false;
       }
     });    

    $("#btnSave").click(function()
    {
        var txtBox_ID   = $(this).attr("id");
        //var nLoopCnt = txtBox_ID.match(/[\d\.]+/g);
        
        var vShortName = $("#Md_Role_Definition_SHORT_NAME").val();
        var vRoleName  = $("#Md_Role_Definition_ROLE_NAME").val(); 
        
        if (vShortName=="")
        {
           $("#mydialog").dialog("option","title", "Error");
           $("#message_box").text("Short Name Cannot Be Blank");
           $("#mydialog").dialog("open");
           return false;
        }
        if (vRoleName == "")
        {
           $("#mydialog").dialog("option","title", "Error");
           $("#message_box").text("Role Name Cannot Be Blank");
           $("#mydialog").dialog("open");
           return false;
        }
        
        // Special char Validation [Include Only "_"]
        var nLength = vShortName.length;
        var vString; 
        var nLoopCnt = 0;
        
        while(nLoopCnt < nLength)
        {
           vString = vShortName.substr(nLoopCnt,1); 
           var nAsciiValue = vString.charCodeAt(0);
 
           if (!((nAsciiValue >= 65 && nAsciiValue <= 90) || (nAsciiValue >= 97 && nAsciiValue <= 122)||nAsciiValue == 95))
           {
              $("#mydialog").dialog("option","title", "Error");
              $("#message_box").text("Invalid Short Name. It Must be A-Z,a-z and Underscore(_)");
              $("#mydialog").dialog("open");
              return false;
           }
           nLoopCnt = nLoopCnt + 1;
         }
        //
        var nCnt = 0;
        for(i = 1; i< $("#TotRowCount").val();i++) 
        {
           var ShortName = $("#Md_Role_Menu_"+ i +"_DISPLAY_ORDER").val();
           var RoleName  = $("#Md_Role_Definition_"+ i +"_MENU_NAME").val();  
           
           if (ShortName.length != 0 || RoleName.length != 0)
           {
             nCnt = nCnt + 1;
           }
        }
        
       if (nCnt == 0 )
       {
           $("#mydialog").dialog("option","title", "Error");
           $("#message_box").text("Please Enter Atleast One Row");
           $("#mydialog").dialog("open");
           return false;
       }
       else
       {
         for(i = 1; i <= nCnt ;i++) 
         {  
             var ShortName = $("#Md_Role_Menu_"+ i +"_DISPLAY_ORDER").val();
             var RoleName  = $("#Md_Role_Definition_"+ i +"_MENU_NAME").val(); 
           
            if (ShortName.length == 0 )
            {  
               $("#mydialog").dialog("option","title", "Error");
               $("#message_box").text("Display Order Cannot Be Blank.");
               $("#mydialog").dialog("open");
               return false;
            }
            if (RoleName.length == 0)
            { 
               $("#mydialog").dialog("option","title", "Error");
               $("#message_box").text("Menu Name Cannot Be Blank.");
               $("#mydialog").dialog("open");
               return false;
            }
         } 
         // Content Saving Here
         $("#md--role--definition-form").submit();
       }
       
     });

    //-- Add New Rows --//
    $("#Md_Role_Menu_10_DISPLAY_ORDER").keyup(function() 
    {
        $("#AddRow").show(100);
    });
    ', CClientScript::POS_END);
   ?>
       
    <table id="boostrap_table_new" class="grid_insert_table" >
        <tr class="test">
           <td>
              <table id="HeadderAlign">
                <tr>
                    <td> <?php echo $Getlabelname->Get_Labelname_Fnc("2004");?> </td>
                    <td> <?php echo $form->textField($model, 'SHORT_NAME' ,array('size'=>50,'maxlength'=>50)); ?> </td>
                </tr>
                <tr >
                    <td> <?php echo $Getlabelname->Get_Labelname_Fnc("2049");?> </td>
                    <td> <?php echo $form->textField($model, 'ROLE_NAME' ,array('size'=>50,'maxlength'=>50)); ?> </td>
                </tr>
                <tr >
                    <td> <?php echo $Getlabelname->Get_Labelname_Fnc("2032");?> </td>
                    <td> <?php echo $form->textArea($model, 'DESCRIPTION' ,array('size'=>50,'maxlength'=>50)); ?> </td>
               </tr>
             </table>
                
            </td>

        </tr>
             <tr>
                  <td colspan="2">
                       <table border="2" id="text_align_c" style="margin-bottom:0px !important">
                           <tr class="grid_title">
                               <td>&nbsp;</td>
                              
                               <td height="23">
                                   <?php echo  $Getlabelname->Get_Labelname_Fnc("2050"); ?>
                               </td>
                               <td>
                                   <?php echo  $Getlabelname->Get_Labelname_Fnc("2051");?>
                               </td>
                           </tr>
                          
                            <?php
                                if(isset($_POST['TotRowCount'])<>'')
                                {
                                   $nLCounter=$_POST['TotRowCount']+1;
                                }
                                else
                                {
                                    $nLCounter = 11;
                                }
                             ?>
                                                      
                           <?php for ($i=1;$i<$nLCounter; $i++) { ?>
                          
                                <tr class="row copy"> 
                                   <td><?php echo $form->textField($md_role_menu,"[$i]DISPLAY_ORDER",array('class'=>'DISPLAY_ORDER'));?></td>
                                   <td>
                                        <input type="text" name="[<?php echo $i ?>]MENU_NAME" class="MENU_NAME" id="Md_Role_Definition_<?php echo $i; ?>_MENU_NAME">
                                        <?php echo $form->hiddenField($md_role_menu,"[$i]MRD_ID",array('class'=>'MRD_ID')); ?>
                                        
                                        <?php echo $form->hiddenField($md_role_menu, "[$i]MMD_ID",array('class'=>'MMD_ID')); ?>
                                        <?php echo $form->hiddenField($md_role_menu, "[$i]DISPLAY_GROUP_NAME",array('class'=>'DISPLAY_GROUP_NAME')); ?>
                                        
                                   </td>
                                                                      
                                   
                                   
                                </tr>
                            <?php }?>
                            
                            <tr>
                               <td colspan="5" style="text-align: right; padding: 2px;">
                                  
                                   <input type="hidden" name="TotRowCount" id="TotRowCount"  value="<?php echo $nLCounter-1; ?>" />
                                    <!---Assign an hidden filed to get total count of form rows--->
                                   <input type="hidden" name="get_table_name" id="get_table_name" value="Md_Role_Definition" />
                                   <!---Assign an hidden filed to get table name on jqurel copy --->
                                   <input type="hidden" name="focus" id="focus_id" />

                                   <img id="copylink" rel=".copy" src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/plus_blue.png" title="Add Rows" width="20" height="20" style="cursor: pointer;display: none">
                               </td>
                            </tr>
                            <tr class="tabular_submit_background">
                                <td colspan="3" class="tabular_submit_padding">
                                  <div class="" style="float: right">
                                    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"button", 'size'=>'small','label'=>$Getlabelname->Get_Labelname_Fnc("2022"),'id'=>'btnSave','icon'=>'icon-thumbs-up')); ?>
                                    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"reset",'size'=>'small', 'label'=>$Getlabelname->Get_Labelname_Fnc("2036"))); ?>
                                      
                                    <img id="AddRow" rel=".copy"
                                         src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/plus_blue.png"
                                         title="Add Rows" width="20" height="20" style="cursor: pointer;display: none; padding-left: 10px">
                                    
                                  </div>
                                    
                                </td>
                           </tr>
                
                      </table>
        
        
    </table>
    
    <?php $this->endWidget(); ?>

</div><!-- form -->