<?php
/* @var $this HrMessageController */
/* @var $model HrMessage */
/* @var $form CActiveForm */
?>
<style> 
    .USAGE_COUNT { width: 116px; text-align: center;}
    .TEXT        { width: 605px; } 
    .grid_insert_table { width: auto; float: left;} 
</style>

<?php $Getlabelname =new Get_Labelname_Cls(); ?>

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

<?php $this->endWidget('zii.widgets.jui.CJuiDialog'); ?>

<!----  Ends Adding Widget for Pop up Message ---->
<!----  Adding Widget Extension JQRelcopy ---->
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

    <?php Yii::app()->clientScript->registerScript('loaderScript', '
   
    $("input[type=text]").keyup(function() 
    {
      //var txt_Cur_Val = $(this).val();
      //var txtBox_Name = $(this).attr("name");
       
       //-- Checking Null Validation On above Row --//
       var txtBox_ID   = $(this).attr("id");
       var nLoopCnt = txtBox_ID.match(/[\d\.]+/g);
       
       if (nLoopCnt != null)
       {
           var LoopCnt = nLoopCnt.toString();
       }
        LoopCnt=LoopCnt - 1;
                   
       //-- Retrieving  Value For Validation --//
       var vText       =$("#HrMessage_"+LoopCnt+"_TEXT").val();
              
       if(vText=="")
       {
           $("#mydialog").dialog("option","title", "Error");
           $("#message_box").text("Message Text Cannot Be Blank.");
           $("#mydialog").dialog("open");

           $("#HrMessage_"+LoopCnt+"_TEXT").focus();
           $(this).val("");
           return false;
       }
       
    });
    ///-- Checking Null Validation  button click--//
    $("#btnSave").click(function()
    {
      var i;
      var LpCnt = $("#TotRowCount").val();
                
      for(i=1;i<LpCnt;i++) 
      {
          var vMsgText = $("#HrMessage_"+ i +"_TEXT").val();
          var vMsgCnt =  $("#HrMessage_"+ i +"_USAGE_COUNT").val(); 
          
          if (vMsgCnt !="")
          {
               if(vMsgText =="") 
                {
                  $("#mydialog").dialog("option","title", "Error");
                  $("#message_box").text("Message Text Cannot Be Blank.");
                  $("#mydialog").dialog("open");
                  return false;
                }
            }
      }
       //* Atleast one row -- it will remove later will not work properly
       var vMessageText  = $("#HrMessage_1_TEXT").val();
               
       if(vMessageText =="" )
       {
            $("#mydialog").dialog("option","title", "Error");
            $("#message_box").text("Some Fields Are Empty");

            $("#mydialog").dialog("open");
            $("#HrMessage_1_TEXT").focus();
        }
        else
        {
            $("#hr-message-form").submit();
        }
     });
     
    //-- Add New Rows --//
    $("#HrMessage_10_TEXT").keyup(function() 
    {
        $("#AddRow").show(100);
    });
    ', CClientScript::POS_END);
   ?>
    
    
   <?php 

    //    $form=$this->beginWidget('CActiveForm', array(
    //	'id'=>'hr-message-form',
    //	'enableAjaxValidation'=>false,)); 

          $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', 
                                      array( 'id'=>'hr-message-form',
                                             'type'=>'horizontal',
                                            )  
                                     ); 

    ?>

  
    <table border="2" class="grid_insert_table">
            <tr class="grid_title">
                <td></td>
                <td><?php echo $Getlabelname->Get_Labelname_Fnc("2046"); ?></td>
                <td><?php echo $Getlabelname->Get_Labelname_Fnc("2047"); ?></td>
            </tr>
            <?php  
                 if(isset($_POST['TotRowCount'])<>'')
                 {
                     $nLCounter=$_POST['TotRowCount'] + 1;
                 }
                 else
                 {
                     $nLCounter =11;
                 }
            ?>
             <!--starting loops-->
            <?php for ($i=1;$i<$nLCounter; $i++) { ?>

               <?php

                 $Text=array();
                 if(isset($_POST['HrMessage'][$i]["TEXT"])<>"")
                 {
                     $Text[$i] =$_POST['HrMessage'][$i]["TEXT"];
                 }
                 else
                 {
                     $Text[$i]='';
                 }

                 $UsageCount=array();
                 if(isset($_POST['HrMessage'][$i]["USAGE_COUNT"])<>"")
                 {
                     $UsageCount[$i] =$_POST['HrMessage'][$i]["USAGE_COUNT"];
                 }
                 else
                 {
                         $UsageCount[$i]='';
                 }

               ?>

                <tr  id="form_addings" class="row copy">
                  <td>
                    <?php echo $form->textField($model,"[$i]TEXT",array('size'=>60,'maxlength'=>2000,'class'=>'TEXT','value'=>$Text[$i])); ?>
                    <?php echo $form->error($model,"[$i]TEXT"); ?>
                  </td>
                  <td>
                     <?php echo $form->textField($model,"[$i]USAGE_COUNT",array('size'=>60,'maxlength'=>100,'class'=>'USAGE_COUNT','value'=>$UsageCount[$i])); ?>
                     <?php echo $form->error($model,"[$i]USAGE_COUNT"); ?>
                  </td>
                </tr>

            <?php } ?>
            <tr height="30" class="tabular_submit_background">
              <td colspan="3" style="text-align: right;" class="tabular_submit_padding">
                  <input type="hidden" name="TotRowCount" id="TotRowCount" value="<?php echo $nLCounter - 1; ?>" />
                   <!---Assign an hidden filed to get total count of form rows--->
                   <input type="hidden" name="get_table_name" id="get_table_name" value="HrMessage" />
                    <!---Assign an hidden filed to get table name on jqurel copy --->
                  <?php //echo CHtml::Button($model->isNewRecord ? 'Save' : 'btnSave'); ?>
                  <?php // echo CHtml::button($model->isNewRecord ? $Getlabelname->Get_Labelname_Fnc("2022") : $Getlabelname->Get_Labelname_Fnc("2021"),array('id'=>'btnSave')); ?>

                    <div class="">
                          <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'button', 'size'=>'small','icon'=>'icon-thumbs-up', 'label'=>$Getlabelname->Get_Labelname_Fnc("2022"),'id'=>'btnSave','icon'=>'icon-thumbs-up')); ?>
                          <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset','size'=>'small','icon'=>'icon-refresh','label'=>$Getlabelname->Get_Labelname_Fnc("2036"))); ?>

                        <img id="AddRow" rel=".copy"
                             src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/plus_blue.png"
                             title="Add Rows" width="20" height="20" style="cursor: pointer;display: none; padding-left: 10px">
                   </div>

             </td>
           </tr>
           
            
     </table>
    
    <?php $this->endWidget(); ?>
    
      
    <?php //echo $form->errorSummary($model); ?>
       

</div><!-- form -->