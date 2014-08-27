<?php 
/**
 * Created  By  : Nirmal C  
 * Created  On  : 23-Aug-2013
 * Modified By  :
 * Modified On  :
 * Purpose      : Adding Country [Master]
 */
?>
<?php
/* @var $this CountriesController */
/* @var $model Countries */
/* @var $form CActiveForm */
?>

<style> input {width: 362px;} </style>

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
  <?php Yii::app()->clientScript->registerScript('loaderScript', '
   
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
                      
       //-- Retrieving  Value For Validation --//
       var vCountryCode =$("#Countries_"+LoopCnt+"_COUNTRY_CODE").val();
       var vCountryName =$("#Countries_"+LoopCnt+"_COUNTRY_NAME").val();
       
       if(vCountryCode=="")
       {
           $("#mydialog").dialog("option","title", "Error");
           $("#message_box").text("Country Code Cannot Be Blank.");
           $("#mydialog").dialog("open");

           $("#Countries_"+LoopCnt+"_COUNTRY_CODE").focus();
           $(this).val("");
           return false;
       }
       if(vCountryName=="")
       {
           $("#mydialog").dialog("option","title", "Error");
           $("#message_box").text("Country Name Cannot Be Blank.");
           $("#mydialog").dialog("open");

           $("#Countries_"+LoopCnt+"_COUNTRY_NAME").focus();
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
          var vCountryCode = $("#Countries_"+ i +"_COUNTRY_CODE").val();
          var vCountryName = $("#Countries_"+ i +"_COUNTRY_NAME").val(); 
          
          if(vCountryCode !="") 
          { 
            if(vCountryName =="") 
            {
              $("#mydialog").dialog("option","title", "Error");
              $("#message_box").text("Country Name Cannot Be Blank.");
              $("#mydialog").dialog("open");
              return false;
            }
          }
          if(vCountryName !="") 
          {
            if(vCountryCode =="") 
            { 
              $("#mydialog").dialog("option","title", "Error");
              $("#message_box").text("Country Code Cannot Be Blank.");
              $("#mydialog").dialog("open");
              return false;
            }
          }
       }
       //* Atleast one row -- it will remove later
       var vCntyCode = $("#Nationalities_1_COUNTRY_CODE").val();
       var vCntyName = $("#Nationalities_1_COUNTRY_NAME").val();
        
       if(vCntyCode=="" || vCntyName =="" )
       {
            $("#mydialog").dialog("option","title", "Error");
            $("#message_box").text("Some Fields Are Empty");

            $("#mydialog").dialog("open");
            $("#Countries_1_COUNTRY_NAME").focus();
        }
        else
        {
            $("#countries-form").submit();
        }
     });
     
    //-- Add New Rows --//
    $("#Countries_10_COUNTRY_NAME").keyup(function() 
    {
        $("#AddRow").show(100);
    });
    ', CClientScript::POS_END);
   ?>
  <!-- Validation Starts Here -->  
   
  <?php 
        /*$form=$this->beginWidget('CActiveForm', 
                                  array( 'id'=>'countries-form',
	                                 'enableAjaxValidation'=>false,
                                       )
                                 ); */
      $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', 
                                  array( 'id'=>'countries-form',
                                         'type'=>'horizontal',
                                        )  
                                 ); 
    ?>
   
    <table border="2" class="grid_insert_table">
        <tr class="grid_title">
            <td></td>
            <td><?php echo $Getlabelname->Get_Labelname_Fnc("2043"); ?></td>
            <td><?php echo $Getlabelname->Get_Labelname_Fnc("2044"); ?></td>
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
            
             $CountriesCode=array();
             if(isset($_POST['Countries'][$i]["COUNTRY_CODE"])<>"")
             {
                 $CountriesCode[$i] =$_POST['Countries'][$i]["COUNTRY_CODE"];
             }
             else
             {
                 $CountriesCode[$i]='';
             }

             $CountriesName=array();
             if(isset($_POST['Countries'][$i]["COUNTRY_NAME"])<>"")
             {
                 $CountriesName[$i] =$_POST['Countries'][$i]["COUNTRY_NAME"];
             }
             else
             {
                     $CountriesName[$i]='';
             }

           ?>

            <tr  id="form_addings" class="row copy">
              <td>
                <?php echo $form->textField($model,"[$i]COUNTRY_CODE",array('size'=>30,'maxlength'=>30,'class'=>'COUNTRY_CODE','value'=>$CountriesCode[$i])); ?>
		<?php echo $form->error($model,"[$i]COUNTRY_CODE"); ?>
              </td>
              <td>
                 <?php echo $form->textField($model,"[$i]COUNTRY_NAME",array('size'=>60,'maxlength'=>100,'class'=>'COUNTRY_NAME','value'=>$CountriesName[$i])); ?>
		 <?php echo $form->error($model,"[$i]COUNTRY_NAME"); ?>
              </td>
            </tr>

        <?php } ?>
        <tr height="30" class="tabular_submit_background">
          <td colspan="3" style="text-align: right;" class="tabular_submit_padding">
              <input type="hidden" name="TotRowCount" id="TotRowCount" value="<?php echo $nLCounter - 1; ?>" />
               <!---Assign an hidden filed to get total count of form rows--->
               <input type="hidden" name="get_table_name" id="get_table_name" value="Countries" />
                <!---Assign an hidden filed to get table name on jqurel copy --->
              <?php //echo CHtml::Button($model->isNewRecord ? 'Save' : 'btnSave'); ?>
              <?php // echo CHtml::button($model->isNewRecord ? $Getlabelname->Get_Labelname_Fnc("2022") : $Getlabelname->Get_Labelname_Fnc("2021"),array('id'=>'btnSave')); ?>

                <div class="">
                      <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'button','size'=>'small',  'label'=>$Getlabelname->Get_Labelname_Fnc("2022"),'id'=>'btnSave','icon'=>'icon-thumbs-up')); ?>
                      <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset','size'=>'small', 'label'=>$Getlabelname->Get_Labelname_Fnc("2036"))); ?>

                    <img id="AddRow" rel=".copy"
                         src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/plus_blue.png"
                         title="Add Rows" width="20" height="20" style="cursor: pointer;display: none; padding-left: 10px">
               </div>

         </td>
       </tr>

    </table>
   
 

<?php $this->endWidget(); ?>

</div><!-- form -->