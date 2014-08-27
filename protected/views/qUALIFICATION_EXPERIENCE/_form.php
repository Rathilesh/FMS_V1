<?php
/* @var $this QUALIFICATION_EXPERIENCEController */
/* @var $model QUALIFICATION_EXPERIENCE */
/* @var $form CActiveForm */
require_once('tooltip.php');
require_once("popupdialog.php");
?>
<script>
 setTimeout(function() {                    //****
    $('.error_red').fadeOut('fast');        //****
}, 3000);                                   //****
                                            //****
setTimeout(function() {                     //****
    $('.success_blue').fadeOut('fast');     //****
}, 3000);                                   //****
//************************************************
</script>
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


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'qualification--experience-form',
	'enableAjaxValidation'=>false,
)); 
$Getlabelname =new Get_Labelname_Cls(); ?>
<?php //echo $form->errorSummary($model); ?>

<style>
#table_bottom_bg
{
/*    width:1168px !important;width:926px !important;*/width:1064px !important;
    padding: 3px !important;float: left;
}
.grid_insert_table
{
    padding-bottom: 0px !important;
    border-bottom-left-radius:0px !important;border-bottom-right-radius: 0px !important;
}
.btn_save
{
    text-align: right!important;
    width: 1047px ;
}
.fixedHeader
{ 
    position: relative !important;
    /* display: block; */
}
.grid_insert_table tbody tr:last-child td {
 border-bottom: none !important;
}
.Professional
{
    border-bottom:2px solid #e8e8e8 !important;border-right:2px solid #e8e8e8 !important
}
.Academic
{
    border-bottom:2px solid #e8e8e8 !important;border-right:2px solid #e8e8e8 !important
}
.scrollContent
    {
        display: block;
        overflow:auto;
        width: auto;
        height:375px;
    }

</style>
<script>
$(document).ready(function(){
  
    <?php if($model->isNewRecord)
        {
        }
        else{ ?>
$("#plus").hide();
$("#reset").hide();
$("#close").show();
//$(".scrollContent").hide();
$('.scrollContent').css('height', 27 + 'px');
<?php } ?>
   $(".auto-complete").bind('focus',function(){
      $(this).autocomplete("search");
      });
      
 $("#plus").click(function() {  
            var count = $('#Qualification_Experience tr').length;
            count=count-1;
            var $lastRow = $('#Qualification_Experience tbody>tr:last');
            var RowIndex = $lastRow.index()+2;
            var newIDSuffix = "*";
            var cloned = $('#Qualification_Experience tbody>tr:last').clone();
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
                var classname=$(this).attr('class');
 //clone last row disables the checkbox  $(this).removeAttr('checked');--------check
                if(classname=="professional") 
                    {
                      $(this).removeAttr('checked');
                    }
                if(classname=="academic") 
                {
                  $(this).removeAttr('checked');
                }
                
                if (id.match("EDUCATION-")) { 
                id="EDUCATION-"+RowIndex;
                name="EDUCATION-"+RowIndex; 
                $(this).autocomplete({                                            
                                       source:"<?php echo $this->createUrl('QUALIFICATION_EXPERIENCE/Education_Autocomplete') ?>",
                                       minLength: 0,
                                     select: function(event, ui) {
                                                   $("#Education_id-"+RowIndex).val(ui.item.id); 
                                                   $("#Education_label-"+RowIndex).val(ui.item.label1); 
                                       },
                                       change:function(event,ui){
                                        if (!ui.item) {
                                            $(this).val("");                                                                       
                                         }
                                        },
                                     });
                   $(this).focus(function(e) {
                        if(!e.isTrigger) {
                            $(this).autocomplete("search", "");
                        }
                        return false;
                    }); 
              }
              
                    if (id.match("FOLIO-")) { 
                id="FOLIO-"+RowIndex;
                name="FOLIO-"+RowIndex; 
                $(this).autocomplete({                                            
                                       source:"<?php echo $this->createUrl('QUALIFICATION_EXPERIENCE/Stream_Autocomplete') ?>",
                                       minLength: 0,
                                       select: function(event, ui) {
                                                  $("#Folio_table_id"+RowIndex).val(ui.item.id);
                                                   $("#FOLIO-"+RowIndex).val(ui.item.id);  
                                       },
                                       change:function(event,ui){
                                        if (!ui.item) {
                                            $(this).val("");                                                                       
                                         }
                                        },
                                     });
                   $(this).focus(function(e) {
                        if(!e.isTrigger) {
                            $(this).autocomplete("search", "");
                        }
                        return false;
                    }); 
              }
               
                
    });
            cloned.insertAfter('#Qualification_Experience tbody>tr:last').find('input:text,input:hidden').val(""); 
          // cloned.insertAfter('#Qualification_Experience tbody>tr:last').find('input:hidden').val("");    
            return false;
    });
  
 
      
      
      
 $("#demo_save").click(function(){
     
   var count =$("#TotRowCount").val();
  // var j=1;//alert(count);
  var cookie_value_add = new Array();
   for(var i=1;i<=count;i++)
   {
      
       var short_name=$("#short_name-"+i).val();
       var short_name_1=$("#short_name-1").val();
       var Description = $("#Description-"+i).val();
       var Education =$("#EDUCATION-"+i).val();
       var stream =$("#FOLIO-"+i).val();
       var chkbox_1=$('#professional-'+i).is(':checked'); 
       var chkbox_2=$('#Academic-'+i).is(':checked');
       
       
       if(short_name_1=="")
           {
                msgid=i;
                GetDynamicAlert("20718",msgid);
                return false;
           }
           
        if(short_name!="")  
            {
                if(Description=="")
                    {
                        msgid= i+alertformat+short_name;  
                        GetDynamicAlert("20719",msgid);
                        return false;
                    }
                    
                 if(Education=="") 
                     {
                        msgid= i+alertformat+short_name;  
                        GetDynamicAlert("20720",msgid);
                        return false;
                     }
//****** ****** DUPLICATION CHECK******** *********  ********  ********* *******//                 
//                 if((Description!="") || (Education!="") || (stream!=""))     //
//                     {                                                        //
//                        msgid= i;                                             //  
//                        GetDynamicAlert("20717",msgid);                       //
//                        return false;                                         //
//                     }                                                        //
//****** ****** DUPLICATION CHECK******** *********  ********  *********  ******//  

    } 
  //  alert(ni);
    if(i!=1 && short_name!="")
        {
        //    alert(i+"th row check less row count");
            for(var j=1;j<i;j++)
            {
               // alert(j+" times");
                //var ni=i;
//                 alert(j);
//                        //alert("#short_name-"+i);
                        var previousSName=$("#short_name-"+j).val();
                        var previousEducation=$("#EDUCATION-"+j).val();
                        var previousStream=$("#FOLIO-"+j).val();

                        //alert(previousSName);
                        //short_name==$("#short_name-"+i).val()

                        if((previousSName==short_name) &&(previousEducation==Education) && ((previousStream==stream) || (previousStream=="")))
                            {
                           //    alert("Duplicate Found  "+i);
                           
                                  msgid= i+alertformat+short_name;                                             //  
                                  GetDynamicAlert("20717",msgid);                       //
                                  return false;
                            }
                        else
                             {
                               //  alert("No Duplicate Found  ");
                             }
            }
            
        }

     
  }
 
  
//  return false;
   alert("Succesfull");
 
 });     
    
}); 

</script>
<!--<div class="row">
		<?php //echo $form->labelEx($model,'EFLO_ID'); ?>
		<?php //echo $form->textField($model,'EFLO_ID'); ?>
		<?php //echo $form->error($model,'EFLO_ID'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'EDU_ID'); ?>
		<?php //echo $form->textField($model,'EDU_ID'); ?>
		<?php //echo $form->error($model,'EDU_ID'); ?>
	</div>-->
<div>
<table class="grid_insert_table" id="Qualification_Experience">
    <thead class="fixedHeader">
        <tr class="grid_title">
<!--          <th class="record_type"><?php //echo $Getlabelname->Get_Labelname_Fnc("214"); ?><a class="field_level_help" href="#"><img src="<?php //echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8"></a></th>  -->
          <th class="short_n_ame" style="width:100px"><?php echo $Getlabelname->Get_Labelname_Fnc("105"); ?><a class="field_level_help" href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8"></a></th>  
          <th class="descrip_tion" style="width:235px"><?php echo $Getlabelname->Get_Labelname_Fnc("116"); ?><a class="field_level_help" href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8"></a></th>  
          
          
          <th class="education" style="width:240px"><?php echo $Getlabelname->Get_Labelname_Fnc("153"); ?><a class="field_level_help" href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8"></a></th>  
          <th class="stream" style="width:243px"><?php echo $Getlabelname->Get_Labelname_Fnc("217"); ?><a class="field_level_help" href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8"></a></th>  
          
         <th class="professional" style="width:120px"><?php echo $Getlabelname->Get_Labelname_Fnc("215"); ?><a class="field_level_help" href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8"></a></th> 
         <th class="academic" style="width:125px"><?php echo $Getlabelname->Get_Labelname_Fnc("216"); ?><a class="field_level_help" href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8"></a></th> 
        
        </tr>
    </thead>
    
    
    
    <?php // ########### ^^^^^^ #### SETTING TOTAL ROW #### ^^^^^^ ##########
   
          // print_r($_POST['Education_EducationTable']);
            if(isset($_POST['TotRowCount'])<>'')
            {
                $loop_edu=$_POST['TotRowCount'];    // print_r ($loop_edu); 
                //$education=$_POST['Education_EducationTable'];print_r($education);
                
            }
            else 
            {
                if($model->isNewRecord)
                {
                    $loop_edu=15;
                }
                else 
                {
                    $loop_edu=2; 
                }
            }
      
    ?>
    
    
    
    
    <tbody class="scrollContent">
        <?php for($i=1;$i<$loop_edu;$i++){?>
        
       <?php             
       if(($model->ID)!=""  )   
       {
//In case of Updation assiging values to text fields.............
           
            $get_education = Yii::app()->db->createCommand()
                               ->SELECT('EDUCATION.EDUCATION ,EDUCATION.ID')
                               ->where("QUALIFICATION_EXPERIENCE.EDU_ID=EDUCATION.ID and QUALIFICATION_EXPERIENCE.ID=:qid",array(':qid'=>$model->ID)) 
                               ->from('EDUCATION,QUALIFICATION_EXPERIENCE')
                               ->queryAll();
     
      //print_r($get_education[0]['EDUCATION']);
            
            $get_edu_edu = Yii::app()->db->createCommand()
                               ->SELECT('EDUCATION.MEAN_FOR ,EDUCATION.ID')
                               ->where("QUALIFICATION_EXPERIENCE.EDU_ID=EDUCATION.ID and QUALIFICATION_EXPERIENCE.ID=:qid",array(':qid'=>$model->ID)) 
                               ->from('EDUCATION,QUALIFICATION_EXPERIENCE')
                               ->queryAll();
        //print_r($get_folio[0]['FOLIO']);
            
            $get_folio = Yii::app()->db->createCommand()
                               ->SELECT('EDUCATION_FOLIO.FOLIO ,EDUCATION_FOLIO.ID')
                               ->where("QUALIFICATION_EXPERIENCE.EFLO_ID = EDUCATION_FOLIO.ID and QUALIFICATION_EXPERIENCE.ID=:qid",array(':qid'=>$model->ID)) 
                               ->from('EDUCATION_FOLIO,QUALIFICATION_EXPERIENCE')
                               ->queryAll();
  // print_r($get_folio[0]['ID']);
            
            
           $qualification=Yii::app()->db->createCommand()
                               ->SELECT('*')
                               ->where('ID=:qid',array(":qid"=>$model->ID)) 
                               ->from('QUALIFICATION_EXPERIENCE')
                               ->queryAll();
       //  print_r( count($qualification));
       }
       try
          {
               if(($model->ID)!="")
               {

                      
                        $Record_Type=array();  
                           if(isset($_POST['QUALIFICATION_EXPERIENCE'][$i]["RECORD_TYPE"])<>"")
                             {
                                  $Record_Type[$i]=$_POST['QUALIFICATION_EXPERIENCE'][$i]["RECORD_TYPE"];
                             }
                           else{ $Record_Type[$i]=$model->RECORD_TYPE;} 
                       
                        $short_name=array();
                           if(isset($_POST['QUALIFICATION_EXPERIENCE'][$i]["SHORT_NAME"])<>"")
                             {
                                  $short_name[$i]=$_POST['QUALIFICATION_EXPERIENCE'][$i]["SHORT_NAME"];
                             }
                           else{ $short_name[$i]=$model->SHORT_NAME;}
                        
                        $description=array();  
                           if(isset($_POST['QUALIFICATION_EXPERIENCE'][$i]["DESCRIPTION"])<>"")
                             {
                                  $description[$i]=$_POST['QUALIFICATION_EXPERIENCE'][$i]["DESCRIPTION"];
                             }
                           else{ $description[$i]=$model->DESCRIPTION;}

                           
                          $professional=array(); 
                            if(isset($_POST['QUALIFICATION_EXPERIENCE'][$i]["IS_PROFESSIONAL"])<>"")
                             {

                                    $professional[$i]=$_POST['QUALIFICATION_EXPERIENCE'][$i]["IS_PROFESSIONAL"];

                                    if(isset($_POST['QUALIFICATION_EXPERIENCE'][$i]["IS_PROFESSIONAL"])=="Y")
                                    {
                                        $professional[$i]=TRUE; 
                                    }

                                    if(isset($_POST['QUALIFICATION_EXPERIENCE'][$i]["IS_PROFESSIONAL"])=="N")
                                    {
                                        $professional[$i]=FALSE;
                                    }

                            }
                            else
                            {

                                    if($model->IS_PROFESSIONAL=="Y")
                                    { 
                                        $professional[$i]=TRUE;
                                    }

                                    else 
                                    {
                                        $professional[$i]=FALSE; 
                                    }
                            }

                           $academic=array();
                             if(isset($_POST['QUALIFICATION_EXPERIENCE'][$i]["IS_ACADEMIC"])<>"")
                             {

                                    $academic[$i]=$_POST['QUALIFICATION_EXPERIENCE'][$i]["IS_ACADEMIC"];

                                    if(isset($_POST['QUALIFICATION_EXPERIENCE'][$i]["IS_ACADEMIC"])=="Y")
                                    {
                                        $academic[$i]=TRUE; 
                                    }

                                    if(isset($_POST['QUALIFICATION_EXPERIENCE'][$i]["IS_ACADEMIC"])=="N")
                                    {
                                        $academic[$i]=FALSE;
                                    }

                            }
                            else
                            {

                                    if($model->IS_ACADEMIC=="Y")
                                    { 
                                        $academic[$i]=TRUE;
                                    }

                                    else 
                                    {
                                        $academic[$i]=FALSE; 
                                    }
                            }


                           if(!empty($get_education[0]['EDUCATION']))
                             {
                                  $Eductn=$get_education[0]['EDUCATION'];

                             }
                           else{ $Eductn=  "";}  

                           if(!empty($get_folio[0]['FOLIO']))
                             {
                                  $folio=$get_folio[0]['FOLIO'];
                             }
                           else{ $folio=  "";}   //echo $Eductn."hello".$folio;
                           
                           if(!empty($get_folio[0]['ID']))
                             {
                                  $get_folio[0]['ID'];
                             }
                           else{ $get_folio[0]['ID']=  "";} 
               }
               else
               {// Works In case of Creating a new Qualification n Exp................
                   $short_name[$i]="";
                   $description[$i]="";
                   $professional[$i]="";
                   $academic[$i]="";
                   $Eductn="";
                   $folio="";
                   $get_education[0]['ID']="";
                   $get_edu_edu[0]['MEAN_FOR']="";
                   $get_folio[0]['FOLIO']="";
                   $get_folio[0]['ID']="";
               }
            }
            catch (Exception $ex)
            {
                 echo $ex->getTraceAsString();
            }
        
        
     ?>   
        
        
        
        <tr id="form_addings">
<!--            <td>-->
                
<!-- Education****Table***   "EDUCATION" COLUMN IS DISPLAYED-->
                  <?php // $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
//                                     'model'=>$model,//'attribute'=>'RECORD_TYPE',
//                                     'id'=>"RECORD_TYPE-".$i,
//                                     'name'=>"QUALIFICATION_EXPERIENCE[$i][RECORD_TYPE]", 
//                                     //'value'=>'',
//                                     'source'=>$this->createUrl('QUALIFICATION_EXPERIENCE/RECORD_TYPEAutocomplete'),                                   
//                                     'options'=>array(
//                                     'minLength'=>'0', 
//                                     'select'=>'js:function( event, ui ) {
//                                                // $("record_type").val(ui.item.id);
//                                                //alert(ui.item.id);
//                                              // alert(ui.item.label);
//                                                   $("#RECORD_TYPE").val(ui.item.id);       
//                                               }',
//                                        
//                                     'change'=>'js:function( event, ui ) {                                           
//                                                if (!ui.item) {
//                                                    $("#RECORD_TYPE").val("");  
//                                               }                                                
//                                        }',                                        
//                                    ),
//                                  'htmlOptions'=>array('class'=>'auto-complete',
//                                      
//                                   ),
//                                ));                
                 
                 ?>
<!-- Education****Table*** ENDS****  "EDUCATION" COLUMN IS DISPLAYED-->
<!--            </td>-->
            <td>
              <?php  echo $form->textField($model,"[$i]SHORT_NAME",array('class'=>'shortname','size'=>30,'maxlength'=>30,'style'=>'width:100px;margin-left:2px;','id'=>"short_name-$i",'value'=>"$short_name[$i]")); ?>
            </td>   
            <td>
              <?php echo $form->textField($model,"[$i]DESCRIPTION",array('size'=>60,'maxlength'=>100,'id'=>"Description-$i",'value'=>"$description[$i]")); ?>
            </td>

            
<!--@@@@@@@@@FETCHED INTO AUTO-COMPLETE @@@@@ FROM EDUCATION @@@@ COLUMN NAME @@@@@ EDUCATION            -->


             <td style="text-align: left;">
              <?php //echo $form->textField(EDUCATION::model(),'EDUCATION',array('size'=>60,'maxlength'=>100));
                    $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                                     'model'=>EDUCATION::model(),//'attribute'=>"EDUCATION",
                                     'id'=>"EDUCATION-".$i,
                                     'value'=>$Eductn,
                                     'name'=>"QUALIFICATION_EXPERIENCE[$i][EDUCATION]", 
                                     
                                     'source'=>$this->createUrl('QUALIFICATION_EXPERIENCE/Education_Autocomplete'),                                   
                                     'options'=>array(
                                     'minLength'=>'0', 
                                     'select'=>'js:function( event, ui ) {
                                                // $("folio").val(ui.item.id);
                                                // alert(ui.item.id);
                                              //alert(ui.item.label1); //label1==Education
                                                   $("#Education_id-'.$i.'").val(ui.item.id); 
                                                   $("#Education_label-'.$i.'").val(ui.item.label1); 
                                               }',
                                        
                                     'change'=>'js:function( event, ui ) {                                           
                                                if (!ui.item) {
                                                    $("#EDUCATION-'.$i.'").val("");  
                                               }                                                
                                        }',                                        
                                    ),
                                  'htmlOptions'=>array('class'=>'auto-complete education',//'value'=>$Eductn,
                                    ),
                                ));                
  ?>
            </td>
<!--THIS HIDDEN FIELD VALUE PASSES EDUCATION COLUMN FROM EDUCATION TABLE AND THIS NEED TO BE INSERTED INTO RECORD TYPE OF QUALIFICATION N EXP TABLE-->

             <input type="hidden" name="<?php echo $i?>Education_EducationTable" id="<?php echo "Education_label-".$i;?>" value="<?php echo $get_edu_edu[0]['MEAN_FOR']; ?>">
             <input type="hidden" name="<?php echo $i?>id_EducationTable" id="<?php echo "Education_id-".$i;?>" value="<?php echo $get_education[0]['ID']; ?>">
            
<!--THIS HIDDEN FIELD VALUE PASSES EDUCATION COLUMN FROM EDUCATION TABLE AND THIS NEED TO BE INSERTED INTO RECORD TYPE OF QUALIFICATION N EXP TABLE-->            
            


             <td>
               <?php  //echo $form->textField(EDUCATION_FOLIO::model(),'FOLIO',array('size'=>30,'maxlength'=>30)); ?>
                 
      <!-- Education_Folio****Table***   "FOLIO" COLUMN IS DISPLAYED-->           
                     <?php $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                                     'model'=>EDUCATIONFOLIO::model(),//'attribute'=>"Folio",
                                     'id'=>"FOLIO-".$i,
                                     'name'=>"QUALIFICATION_EXPERIENCE[$i][FOLIO]", 
                                     'value'=>$folio,
                                     'source'=>$this->createUrl('QUALIFICATION_EXPERIENCE/Stream_Autocomplete'),                                   
                                     'options'=>array(
                                     'minLength'=>'0', 
                                     'select'=>'js:function( event, ui ) {
                                                // $("folio").val(ui.item.id);
                                                // alert(ui.item.id);
                                              // alert(ui.item.label);
                                                   $("#Folio_table_id'.$i.'").val(ui.item.id);
                                                   $("#FOLIO-").val(ui.item.id);       
                                               }',
                                        
                                     'change'=>'js:function( event, ui ) {                                           
                                                if (!ui.item) {
                                                    $("#FOLIO-'.$i.'").val("");  
                                               }                                                
                                        }',                                        
                                    ),
                                  'htmlOptions'=>array('class'=>'auto-complete folio',
                                      
                                   ),
                                ));                
                 
                 ?>
<!--THIS HIDDEN FIELD VALUE PASSES ID OF FOLIO TABLE AND THIS NEED TO BE INSERTED INTO EFLO_ID OF QUALIFICATION N EXP TABLE-->
      
        <input type="hidden" name="Folio_table_id-<?php echo $i?>" id="<?php echo "Folio_table_id".$i;?>" value="<?php echo $get_folio[0]['ID']; ?>">
<!--THIS HIDDEN FIELD VALUE PASSES ID OF FOLIO TABLE AND THIS NEED TO BE INSERTED INTO EFLO_ID OF QUALIFICATION N EXP TABLE-->        
        
                          
<!-- Education_Folio****Table*** ENDS****"FOLIO" COLUMN IS DISPLAYED-->                 
            </td>   
           
            <td class="Professional" style="width:120px;">
              <?php  echo $form->checkBox($model,"[$i]IS_PROFESSIONAL",array('class'=>'professional','value'=>"Y","checked"=>$professional[$i],"uncheckValue"=>'N','id'=>"professional-$i","style"=>'width:20px;')); ?>
            </td>
            <td class="Academic" style="width:100px;">
              <?php  echo $form->checkBox($model,"[$i]IS_ACADEMIC",array('class'=>'academic','value'=>"Y","checked"=>$academic[$i],"uncheckValue"=>'N','id'=>"Academic-$i","style"=>'width:20px;')); ?>
            </td>
        </tr>
        
        <?php } ?>
    </tbody>
</table>

<table class="tbl_btn" id="table_bottom_bg">
    <tbody>
      <tr id="table_bottom_bg">
         <td class="btn_save">
             <div style="width:auto;height: auto;float:right;">
          <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"clear",'size'=>'small','icon'=>'icon-refresh','label'=>$Getlabelname->Get_Labelname_Fnc("104"),'id'=>'reset')); ?>
          <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"submit",'size'=>'small', 'label'=>$model->isNewRecord ?$Getlabelname->Get_Labelname_Fnc("103") : $Getlabelname->Get_Labelname_Fnc("181"),'id'=>'demo_save','icon'=>'icon-thumbs-up',)); ?>
          <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"Close",'size'=>'small','icon'=>'icon-remove','url' =>$this->createUrl('qualification_experience/admin'),'label'=>$Getlabelname->Get_Labelname_Fnc("141"),'id'=>'close','htmlOptions'=>array('style'=>'display:none !important;'))); ?>
          <img  src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/icon_plus.png"   
           title="Add Rows" width="16" height="16"  alt="" style="cursor: pointer;" id="plus"/></div></td>                   
          <input id="TotRowCount" type="hidden" name="TotRowCount" value="<?php echo $loop_edu; ?>">
          <input id="currentrow" type="hidden" name="currentrow" value="">
          <input id="updateID" type="hidden" name="updateID" value="<?php echo $model->ID; ?>">
      </tr>

     </tbody>
</table>
<?php $this->endWidget(); ?>

</div>