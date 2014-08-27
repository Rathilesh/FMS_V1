<?php
/**
 * Created  By  : ® Anaswara ®  
 * Created  On  : 16-Aug-2013
 * Modified By  :
 * Modified On  :
 * Purpose      : Menu Object 
 */

?>
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
                                        'modal'=>false,
                                        'buttons' => array(
                                                     array('text'=>'Ok','click'=> 'js:function(){$(this).dialog("close");}'),
                                                     //array('text'=>'Cancel','click'=> 'js:function(){$(this).dialog("close");}'),
                                                          ),
                                             ),
                             )
                    );
?>
<div id="message_box" style="font-weight: bold"></div>
<?php
$this->endWidget('zii.widgets.jui.CJuiDialog');
?>
<script>
 setTimeout(function() {                    //****
    $('.error_red').fadeOut('fast');        //****
}, 2000);                                   //****
                                            //****
setTimeout(function() {                     //****
    $('.success_blue').fadeOut('fast');     //****
}, 2000);                                   //****
//************************************************

  
 
$("document").ready(function(){
      $('.first_checkbox_width').prop("checked",true);
      $('.checkbox_width').prop("checked",false);
      $("#plus").click(function() {  
            var count = $('#BDC tr').length;
            count=count-1;//alert(count);
            var $lastRow = $('#BDC tbody>tr:last').prev('tr');
            var RowIndex = $lastRow.index()+2;//alert(RowIndex);
            var newIDSuffix = "*";
            var cloned = $('#BDC tbody>tr:last').prev('tr').clone();
            $('#TotRowCount').val(count);
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
               // alert("cked");
                  }
                  if(classname=="first_checkbox_width")
                      {
                          $(this).prop("checked",true);
                      }
                  if(classname=="text_box")
                     {$(this).val(" " );}
                     
                   if(classname=="no_records")
                     {
                       $(this).val("").prop("placeholder","0");
                   }  
               // alert("cked");
                
    });
            cloned.insertBefore('#BDC tbody>tr:last').find('input:text').$('input.cl:last').val('');              
            return false;
    });
 
//********************************************************************************************//           
   $("#demo_save").click(function(){
//        var count = $('#BDC tr').length;
//        count=count-1;//alert(count);
        var i;
        var loop_count =$("#TotRowCount").val();//alert(loop_count);
       
        for(i=1;i<=loop_count;i++)
           {   
                           // alert("loop_count");
               var definition_type = $("#definitiontype" + i).val();
               var description     = $("#description"    + i).val();
               var records         = $("#record" + i).val();
              
              if ($("#definitiontype1").val()=="")
                     {
                        //alert("Name in Row" +i "is EMPTY");
                         $("#mydialog").dialog("option","title", "Alert");
                         $("#message_box").text("Please Enter first Row");
                         $("#mydialog").dialog("open");
                         return false;
                     }
              
              
              var recordformat=/^[0-9]*$/
               if (!recordformat.test(records))
                  {    
                     //$(".no_records[value='']").val(0);
//                        //alert("Name in Row" +i "is EMPTY");
                         $("#mydialog").dialog("option","title", "Alert");
                         $("#message_box").text("Please Enter Total Number Of Definition Type Properly.");
                         $("#mydialog").dialog("open");
                         return false;
                   
                  }
                   if (records=="")
                         {
                           $(".no_records[value='']").val(0);  
                         }
                  
                  
           }
   });
           
  });
 
    </script>
<style>
 .text_box
    {
        height:27px!important;
    }
 .no_records
    {
        height:27px!important;
        width:86px!important;
        text-align:right!important;
    }
    
 .checkbox_width
    {
        width:20px!important;
        background-color: rgb(238,236,236)!important;
    }
    
 .grid_insert_table thead th 
    {
        padding-left: 30px!important;
    }
    
 
 .check_box_border
    {
        border:10px aliceblue ;
        width:90px;
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
        width:960px;
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
/*        width: 815px;*/
        height:400px;
       

    }
    
    /*    toggle button color change css start---->   */
 .toggle-button span.primary, .toggle-button span.labelLeft {

        color: #fefefe !important;
        background: #238803 !important;
        background-image: -webkit-gradient(linear, 50% 100%, 50% 0%, color-stop(0%, #238803), color-stop(100%, #238803)) !important;
        background-image: -webkit-linear-gradient(bottom, #238803, #238803) !important;
        background-image: -moz-linear-gradient(bottom, #238803, #238803) !important;
        background-image: -o-linear-gradient(bottom, #238803, #238803) !important;
        background-image: linear-gradient(bottom, #238803, #238803) !important;
    }
   .toggle-button span.labelRight { 
    color: white !important;
    background-image: -webkit-gradient(linear, 50% 100%, 50% 0%, color-stop(0%, #E60707), color-stop(100%, #F81919)) !important;
    background-image: -webkit-linear-gradient(bottom, #E60707, #F81919) !important;
    background-image: -moz-linear-gradient(bottom, #E60707, #F81919) !important;
    background-image: -o-linear-gradient(bottom, #E60707, #F81919) !important;
    background-image: linear-gradient(bottom, #E60707, #F81919) !important;
    moz-border-radius-bottomright: 4px;
    -webkit-border-bottom-right-radius: 4px;
    border-bottom-right-radius: 4px;
    -moz-border-radius-bottomright: 4px;
    -webkit-border-bottom-right-radius: 4px;
    border-bottom-right-radius: 5px;
    -webkit-border-top-right-radius: 4px !important;
    border-top-right-radius: 5px !important;
   }
/*    toggle button color change css end---->   */
/*.grid_insert_table td { font-size: 12px;
    border: 1px rgb(111, 164, 221);
    padding: 0px; text-align: center; font-weight: bold;background-color: rgb(238, 236, 236);}*/
/*.scrollContent
    {
        display: block;
        overflow:auto;
        width: 770px;
        height:400px;
    }*/
.grid_insert_table 
    {
        border-bottom:none !important;
        border-bottom-left-radius: 0px !important;
        border-bottom-right-radius: 0px !important;
        padding-bottom: 0px !important;
        box-shadow: 0px -4px 8px 1px #c4c4c4 !important;
       
    }
.btn_save {
text-align: right !important;border-bottom-left-radius: 10px;
padding: 6px;
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
   $Getlabelname =new Get_Labelname_Cls(); 
    ?>          
  <!-------START FORM WIDGET--------->           
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',
            array(
	          'id'=>'basic--definition--category-form',
                  'type'=>'horizontal',
	          'enableAjaxValidation'=>false,
                )); ?>
<?php echo $form->errorSummary($model) ?>


<table border="2" class="grid_insert_table" id="BDC">
    <thead class="fixedHeader">
        <tr class="grid_title">
            <th style="width:190px"><?php echo$Getlabelname->Get_Labelname_Fnc("115"); ?><a class="field_level_help" href="#DefinitionType"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8"></a></th>
            <th style="width:198px;"><?php echo$Getlabelname->Get_Labelname_Fnc("116"); ?><a class="field_level_help" href="#Description"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8"></a></th>
            <th style="width:70px;text-align: center;"><?php echo$Getlabelname->Get_Labelname_Fnc("121");?><a class="field_level_help" href="#Records"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8"></a></th>
            <th style="width:58px"><?php echo$Getlabelname->Get_Labelname_Fnc("117"); ?><a class="field_level_help" href="#Amendable"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8"></a></th>
            <th ><?php echo$Getlabelname->Get_Labelname_Fnc("118");?><a class="field_level_help" href="#Can Be displayed"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8"></a></th>
            <th ><?php echo$Getlabelname->Get_Labelname_Fnc("119");?><a class="field_level_help" href="#Is Universal"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8"></a></th>
            <th ><?php echo$Getlabelname->Get_Labelname_Fnc("120");?><a class="field_level_help" href="#Is Compulsary"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8"></a></th>
      </tr>    
    </thead>
<!--         Setting Tot Row Count-->
        <?php 
            if(isset($_POST['TotRowCount'])<>'')
            {
                $loop_c=$_POST['TotRowCount'];
                
            }
            else 
            {
                if($model->isNewRecord)
                {
                 $loop_c=14;
                }
                else 
                {
                    $loop_c=1; 
                }
            }
       ?>

<tbody class="scrollContent">
<?php for($i=1;$i<=$loop_c;$i++){?>
    

        <?php
          try
          {
             $definitiontype=array();
             if(isset($_POST['Basic_Definition_Category'][$i]["DEFINITION_TYPE"])<>"")
             {
                 $definitiontype[$i]=$_POST['Basic_Definition_Category'][$i]["DEFINITION_TYPE"];
             }
             else{ $definitiontype[$i]='';}
             
             $description=array();
             if(isset($_POST['Basic_Definition_Category'][$i]["DESCRIPTION"]))
             {
                 $description[$i]=$_POST['Basic_Definition_Category'][$i]['DESCRIPTION'];
             }
             else{ $description[$i]='';}
             
             $num_records=array();
             if(isset($_POST['Basic_Definition_Category'][$i]["NO_OF_RECORDS"]))
             {
                  $num_records[$i]=$_POST['Basic_Definition_Category'][$i]["NO_OF_RECORDS"];
             }
             else{ $num_records[$i]='';}
             
             $amend=array();$is_amend=array();
             
             if(isset($_POST['Basic_Definition_Category'][$i]["IS_AMEND"]))
             {
                 
                    $amend[$i]=$_POST['Basic_Definition_Category'][$i]["IS_AMEND"];
                    
                    if(isset($_POST['Basic_Definition_Category'][$i]["IS_AMEND"])=="Y")
                    {
                        $is_amend[$i]=1;
                    }
                    if(isset($_POST['Basic_Definition_Category'][$i]["IS_AMEND"])=="N")
                    {
                        $amend[$i]="Y";
                        $is_amend[$i]=0;
                    }
             
             }else{$amend[$i]='';}
             
             $display=array();$is_display=array();
             
             if(isset($_POST['Basic_Definition_Category'][$i]["IS_DISPLAY"]))
             {   
                    $display[$i]=$_POST['Basic_Definition_Category'][$i]["IS_DISPLAY"];
                    
                    if(isset($_POST['Basic_Definition_Category'][$i]["IS_DISPLAY"])=="Y")
                    {
                        $is_display[$i]=1;
                    }
                    if(isset($_POST['Basic_Definition_Category'][$i]["IS_DISPLAY"])=="N")
                    {
                        $display[$i]="Y";
                        $is_display[$i]=0;
                    }
             
             }else{$display[$i]='';}
             
             $universal=array();$is_universal=array();
             
             if(isset($_POST['Basic_Definition_Category'][$i]["IS_UNIVERSAL"]))
             {   
                    $universal[$i]=$_POST['Basic_Definition_Category'][$i]["IS_UNIVERSAL"];
                    
                    if(isset($_POST['Basic_Definition_Category'][$i]["IS_UNIVERSAL"])=="Y")
                    {
                        $is_universal[$i]=1;
                    }
                    if(isset($_POST['Basic_Definition_Category'][$i]["IS_UNIVERSAL"])=="N")
                    {
                        $universal[$i]="Y";
                        $is_universal[$i]=0;
                    }
             
             }else{$universal[$i]='';}
             
             $compulsary=array();$is_compulsary=array();
             if(isset($_POST['Basic_Definition_Category'][$i]["IS_COMPULSORY"]))
             {   
                    $compulsary[$i]=$_POST['Basic_Definition_Category'][$i]["IS_COMPULSORY"];
                    
                    if(isset($_POST['Basic_Definition_Category'][$i]["IS_COMPULSORY"])=="Y")
                    {
                        $is_compulsary[$i]=1;
                    }
                    if(isset($_POST['Basic_Definition_Category'][$i]["IS_COMPULSORY"])=="N")
                    {
                        $compulsary[$i]="Y";
                        $is_compulsary[$i]=0;
                    }
             
             }else{$compulsary[$i]='';}
             
          }
          catch (Exception $exc) 
           {
               echo $exc->getTraceAsString();
           }   
        ?>
     <tr id="form_addings">
        <td>
            <?php
                echo $form->textField($model,"[$i]DEFINITION_TYPE",array('size'=>30,'maxlength'=>30,'class'=>'text_box','value'=>$definitiontype[$i],"id"=>"definitiontype$i")); 
                echo $form->error($model,'DEFINITION_TYPE'); 
            ?>
        </td> 
        <td>
            <?php
                echo $form->textField($model,"[$i]DESCRIPTION",array('size'=>100,'maxlength'=>100,'class'=>'text_box','value'=>$description[$i],"id"=>"description$i")); 
                echo $form->error($model,'DESCRIPTION'); 
            ?>
        </td>
        <td>
            <?php
                echo $form->textField($model,"[$i]NO_OF_RECORDS",array('size'=>5,'maxlength'=>5,'placeholder'=>0,'class'=>'no_records','id'=>"record$i",'value'=>$num_records[$i])); 
                echo $form->error($model,'NO_OF_RECORDS'); 
            ?>
        </td> 
        <td class="check_box_border"> <?php echo $form->checkBox($model,"[$i]IS_AMEND",array('class'=>'first_checkbox_width','value'=>"Y","uncheckValue"=>"N",'id'=>"is_amend$i")); ?></td>
        <td class="check_box_border"> <?php echo $form->checkBox($model,"[$i]IS_DISPLAY",array('class'=>'first_checkbox_width','value'=>"Y","uncheckValue"=>"N",'id'=>"is_display$i")); ?></td>
        <td class="check_box_border"> <?php echo $form->checkBox($model,"[$i]IS_UNIVERSAL",array('class'=>'checkbox_width','value'=>"Y","uncheckValue"=>"N",'id'=>"is_universal$i")); ?></td>
        <td class="check_box_border"> <?php echo $form->checkBox($model,"[$i]IS_COMPULSORY",array('class'=>'checkbox_width','value'=>"Y","uncheckValue"=>"N",'id'=>"is_compulsary$i")); ?></td>
        
    </tr>
<?php } ?>

</tbody>
</table>
  
<table class="tbl_btn" id="table_bottom_bg">
    <tbody>
      <tr id="table_bottom_bg">
        <td class="btn_save">
       <!-- <input type="button" value="tst" onclick="show_stack_topleft('error');"> -->
          <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"submit",'size'=>'small', 'label'=>$model->isNewRecord ?$Getlabelname->Get_Labelname_Fnc("103") : $Getlabelname->Get_Labelname_Fnc("2021"),'id'=>'demo_save','icon'=>'icon-thumbs-up',)); ?>
          <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"reset",'size'=>'small','icon'=>'icon-refresh','label'=>$Getlabelname->Get_Labelname_Fnc("104"),'id'=>'ref')); ?>
           <img  src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/icon_plus.png"   
             title="Add Rows" width="20" height="20"  alt="" style="cursor: pointer;" id="plus"/></td>                   
          <input id="TotRowCount" type="hidden" name="TotRowCount" value="<?php echo $loop_c;?>">
         <input id="currentrow" type="hidden" name="currentrow" value="">
  </tr>

     </tbody>
</table>
    <?php  $this->endWidget(); ?>
</div>

       