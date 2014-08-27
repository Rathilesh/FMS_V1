<?php 
/**
 * Created  By  : Nirmal C  
 * Created  On  : 20-Aug-2013
 * Modified By  : @Rathilesh@
 * Modified On  : 16-Sep-2013
 * Purpose      : Adding Nationality [Master]
 */
?>
<?php
/* @var $this NationalitiesController */
/* @var $model Nationalities */
/* @var $form CActiveForm */
$GetGenericFlexs=new Get_Generic_Flex_Cls();
$GetGenericFlex =$GetGenericFlexs->Get_Generic_Flex_Form_Fnc('Nationalities');
$Total_Rows_Generic_Flex=sizeof($GetGenericFlex);
//print_r($_POST);
//print_r($this->list);
?>
<style> 
    input { width: 352px;}
   /* .GenericFlexClass { width: 150px ; border: 1px #009}*/ 
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
                      array( 'id'=>'mydialog',
                             // additional javascript options for the dialog plugin
                             'options'=>array(  'title'=>'Alert',
                                                'show' => 'shake',
                                                'hide' => 'explode',
                                                'autoOpen'=>false,
                                                'modal'=>false,
                                                'buttons' => array( array('text'=>'Close',
                                                                          'click'=> 'js:function(){$(this).dialog("close");}'),
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
 <!-- Validation Starts Here -->

 <?php Yii::app()->clientScript->registerScript('loaderScript', '
   
    function AlertBox(title,msg)
    {
        $("#mydialog").dialog("option","title", title);
        $("#message_box").text(msg);
        $("#mydialog").dialog("open");
    }
    $("input[type=text]").keyup(function() 
    {
       //-- Fetching values --//
       var txt_Cur_Val = $(this).val();
       var txtBox_ID   = $(this).attr("id");
       var txtBox_Name = $(this).attr("name");
        //-----------------------------------------------
       //-- Checking Null Validation On above Row --//
       var nLoopCnt = txtBox_ID.match(/[\d\.]+/g);
       if (nLoopCnt != null)
       {
           var LoopCnt = nLoopCnt.toString();
       }
       LoopCnt=LoopCnt - 1;
       //--------------------------------------------
                
       //-- Retrieving  Value For Validation --//
       var txtNationalityCode =$("#Nationalities_"+LoopCnt+"_NATIONALITY_CODE").val();
       var txtNationalityName =$("#Nationalities_"+LoopCnt+"_NATIONALITY_NAME").val();
       if(txtNationalityCode=="")
       {
           AlertBox("Error","Nationality Code Cannot Be Blank.");
           $("#Nationalities_"+LoopCnt+"_NATIONALITY_CODE").focus();
           $(this).val("");
           return false;
       }
       if(txtNationalityName=="")
       {
           AlertBox("Error","Nationality Name Cannot Be Blank.");
           $("#Nationalities_"+LoopCnt+"_NATIONALITY_NAME").focus();
           $(this).val("");
           return false;
      }
    });
    ///-- Checking Null Validation --//
    $("#btnSave").click(function()
    {
      //Loop 
      var i;
      var LpCnt = $("#TotRowCount").val();
      
      for(i=1;i<LpCnt;i++) 
      {
          var vNationalityCode = $("#Nationalities_"+i+"_NATIONALITY_CODE").val();
          var vNationalityName = $("#Nationalities_"+i+"_NATIONALITY_NAME").val(); 
           
          if(vNationalityCode!="") 
          {
             if(vNationalityCode =="" || vNationalityName =="") 
             {
             
                 $("#mydialog").dialog("option","title", "Error");
                 $("#message_box").text("Some Fields Are Empty In "+ i + "th Row");
                 $("#mydialog").dialog("open");
                 return false;
             }
          }
          if(vNationalityName!="") 
          {
             if(vNationalityCode =="" || vNationalityName =="") 
             {
                    $("#mydialog").dialog("option","title", "Error");
                    $("#message_box").text("Some Fields Are Empty In "+ i + "th Row");
                    $("#mydialog").dialog("open");
                    return false;
             }
          }
      }

       //***********************************
       var vNatCode = $("#Nationalities_1_NATIONALITY_CODE").val();
       var vNatName = $("#Nationalities_1_NATIONALITY_NAME").val();
        
       if(vNatCode=="" || vNatName =="" )
       {
//            $("#mydialog").dialog("option","title", "Error");
//            $("#message_box").text("Some Fields Are Empty");
//
//            $("#mydialog").dialog("open");
            $("#Nationalities_1_NATIONALITY_CODE").focus();
        }
        else
        {
            $("#nationalities-form").submit();
        }
     });
     
    //-- Add New Rows --//
    $("#Nationalities_10_NATIONALITY_CODE").keyup(function() 
    {
        $("#AddRow").show(100);
    });
    ', CClientScript::POS_END);
  ?>
  <!-- Validation Starts Here -->  
   
  <?php 
  $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', 
                              array(
                                     'id'=>'nationalities-form',
                                     'type'=>'horizontal',
                                    )  
                             ); 
?>
  <style>
      table.tess {
        display: table;
        width: 70%;
        overflow: auto;
    }
   .row {margin-left: 0px;}
    table.tess thead, table.tess tbody {
        float: left;
        width: 100%;
    }
     table.tess thead td { width: 25%}
    table.tess tbody tr {
        width: 70%;
    }
    table.tess tbody {
        overflow-y:  scroll;
        height: 231px;
    }
    table.tess tr {
        width: 100%;
        display: table;
        text-align: left;
    }
    table.tess th, table.tess td {
        width: 33%;
    }
  </style>
  <div style="width:938px; height: auto; float: left; overflow-x: auto; padding: 10px; margin-bottom: 0px;">
  <table border="2" class="grid_insert_table tess" >
    <thead>
    
    <tr class="grid_title">
<!--        <td></td>-->
        <td><?php echo $Getlabelname->Get_Labelname_Fnc("2020"); ?></td>
        <td><?php echo $Getlabelname->Get_Labelname_Fnc("2021"); ?></td>
        <?php
        //create header colum on generic flex Field
            foreach ($GetGenericFlex as $key => $value) 
            { 
            ?>
            <td> <?php echo $value['FILED_TITLE'];?>  </td>
            <?php 
            }
        //create header colum on generic flex Field
            ?>
    </tr>
    </thead>
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
     <tbody>
       <?php for ($i=1;$i<$nLCounter; $i++) { ?>
       <?php
       try 
       {
            if(isset($_POST['Nationalities'][$i]["NATIONALITY_CODE"])<>"")
             {
                 $NationalityCode[$i] =$_POST['Nationalities'][$i]["NATIONALITY_CODE"];
             }
             else
             {
                 $NationalityCode[$i]='';
             }

             $NationalityName=array();
             if(isset($_POST['Nationalities'][$i]["NATIONALITY_NAME"])<>"")
             {
                 $NationalityName[$i] =$_POST['Nationalities'][$i]["NATIONALITY_NAME"];
             }
             else
             {
                     $NationalityName[$i]='';
             }
             
//             foreach ($NationalityName as $key => $value) {
//                 
//             }
             
             
             //if(isset($_POST[]))
       } 
       catch (Exception $exc) 
       {
           echo $exc->getTraceAsString();
       }
       $GenericFlexValue[$i]='';
       ?>
     
        <tr  id="form_addings" class="row copy">
          <td>
              <?php echo $form->textField( $model,"[$i]NATIONALITY_CODE",
                                           array('size'=>30,'maxlength'=>30,'class'=>'NATIONALITY_CODE','value'=>$NationalityCode[$i])
                                         );
              ?>
              <?php echo $form->error($model,"[$i]NATONALITY_CODE"); ?>
          </td>
          <td>
             <?php echo $form->textField($model,"[$i]NATIONALITY_NAME",
                                         array('size'=>60,'maxlength'=>100,'class'=>'NATIONALITY_NAME','value'=>$NationalityName[$i])
                                       );
             ?>
            <?php echo $form->error($model,"[$i]NATIONALITY_NAME"); ?>
          </td>
          <?php
            foreach ($GetGenericFlex as $key => $value) 
            {
//            if($value['DATA_TYPE']=='V') 
//                {  
                ?>
                <td> 
                    <input type="text" name="<?php echo $value['FILED_TITLE']."[".$i."]";?>" value="<?php echo $GenericFlexValue[$i];?>" class="<?php echo $value['FILED_TITLE'];?>" maxlength="<?php echo $value['MAX_LENGTH'];?>"> 
                </td>
                <?php 
//                }
            }
    }  ?>
        </tr>
        
    <tr height="30">
      <td colspan="<?php echo $test=3+$Total_Rows_Generic_Flex; ?>" style="text-align: right;">
          <input type="hidden" name="TotRowCount" id="TotRowCount" value="<?php echo $nLCounter - 1; ?>" />
           <!---Assign an hidden filed to get total count of form rows--->
           <input type="hidden" name="get_table_name" id="get_table_name" value="Nationalities" />
            <!---Assign an hidden filed to get table name on jqurel copy --->
          <?php //echo CHtml::Button($model->isNewRecord ? 'Save' : 'btnSave'); ?>
          <?php // echo CHtml::button($model->isNewRecord ? $Getlabelname->Get_Labelname_Fnc("2022") : $Getlabelname->Get_Labelname_Fnc("2021"),array('id'=>'btnSave')); ?> 
     </td>
   </tr> </tbody>
</table> </div>
  </div>
<?php 
if($Total_Rows_Generic_Flex>'0') { $SaveButtonWidth="width : 75%;"; }
else { $SaveButtonWidth="width : 100%;"; }
?>
  <div  style="<?php echo $SaveButtonWidth; ?>height: auto; float: left;">
      <table>
      <tr class="tabular_submit_background">
          <td style="text-align:right" class="tabular_submit_padding"> 
              <div class="">
                  <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'button','size'=>'small',  'label'=>$Getlabelname->Get_Labelname_Fnc("2022"),'id'=>'btnSave','icon'=>'icon-thumbs-up')); ?>
                  <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset','size'=>'small', 'label'=>$Getlabelname->Get_Labelname_Fnc("2036"),'icon'=>'icon-refresh')); ?>
                  
                <img id="AddRow" rel=".copy"
                     src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/plus_blue.png"
                     title="Add Rows" width="20" height="20" style="cursor: pointer;display: none; padding-left: 10px">
           </div>
          </td>
      </tr>
  </table>
  
 
<?php $this->endWidget(); ?>
 
</div><!-- form -->