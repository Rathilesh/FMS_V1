<?php
/* @var $this Generic_FlexController */
/* @var $model Generic_Flex */
/* @var $form CActiveForm */

$TABLE_ID=$_REQUEST['table_id'];
$CANVAS=$_REQUEST['CANVAS'];
require_once("popupdialog.php");
//echo $TABLE_ID.$CANVAS;
//echo $lastid;
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'generic--flex-form',
	'enableAjaxValidation'=>false,
)); ?>
    
<?php   $Getlabelname=new Get_Labelname_Cls();  ?>
<style>
    .grid_insert_table
        {
            border-bottom: medium none !important;
            border-bottom-left-radius: 0 !important;
            border-bottom-right-radius: 0 !important;
            box-shadow: 0 -4px 8px 1px #C4C4C4 !important;
            padding-bottom: 0 !important;
        }
    .tbl_btn
        {
            width:792px;
            /*padding-top: 14px;*/
            border: 1px solid #D3D0D0;
            border-radius: 10px;
            border-top:none;
            border-top-left-radius: 0px;
            border-top-right-radius: 0px;
            /*padding-right: 15px;*/
            box-shadow:0px 6px 15px 0px #c4c4c4;

        }
    .btn_save
        {
            text-align: right !important;
           padding:6px;
        }
    span.required
    {
        display:none !important;
    }
    .scrollContent
    {
        display: block;
        overflow:auto;
        width: 790px;
        height:127px;
       

    }
    .fixedHeader 
    {
        position: relative;
        display: block;
    }
</style>
<script>
$("document").ready(function(){    
    $("input[type=checkbox]").click(function(){
        
        var Rowcount=$('#TotRowCount').val();
        var id=($(this).attr("id"));
        var d=$(this).attr("id").match(/\d+/);
        var getclass=$(this).attr("class");                                     //alert(getclass);
        var title =$("#TITLE-" +d).val();                                       //alert(title);
        if($(this).prop("checked") == true)
            {  
               var d=$(this).attr("id").match(/\d+/);//alert(d);
               if(title=="")      
                   {
                      //alert("Please Fill Title in Row" +d);
                      var msgid = d; 
                      GetDynamicAlert("20900",d);
                      return false;
                   }
                   
            }
        else 
        {
            
        }
        
        if(($(this).prop("checked") == false) && (title!=""))
            {
                 $("#TITLE-" +d).val('').removeAttr('disabled');
                 console.log('unchecked');
            }

    });
    
    $("#btnSave").click(function(){
        
        var i;
        var msgid
        var Rowcount=$('#TotRowCount').val();
     
        for(i=1;i<=Rowcount;i++)
            {
                var isChecked = $("#REQUIRED-" +i).attr('checked')?true:false;
                var datatype =$("#DATA_TYPE-"+i).val();                         //alert(datatype);
                var title =$("#TITLE-" +i).val();
                var title1 =$("#TITLE-1").val();
                
                if(title1=="")
                    {
                        //alert("Please Enter First Row");
                        GetStaticAlert("20901");
                        return false; 
                    }
// Checked boxes is unchecked the following code removes the title input text                    
//                if(isChecked == false)
//                    {
//                        var title =$("#TITLE-" +i).val("");
//                                                
//                    }
// Checked boxes is unchecked the following code removes the title input text  

                if((title!="") && (datatype=="")) 
                    {
                        //alert("Please Select the datatype in Row "+i);
                        msgid=i;
                        GetDynamicAlert("20902",msgid);
                        return false;
                    }
               
            }

   });    
   
   //************************* cloning last row while using plus ***********************  
  $(".plus").click(function(){
      
      var count = $('#GFlex tr').length;
      count=count-2;
      var $lastRow = $('#GFlex tbody>tr:last');
      var RowIndex = $lastRow.index()+2;
      var newIDSuffix = "*";
      var cloned = $('#GFlex tbody>tr:last').clone();
      var oldcount=$('#TotRowCount').val();
//      alert(oldcount);
     $('#TotRowCount').val((parseInt(oldcount)+1));
//      
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
                if(classname=="Required")
                  {
                    $(this).removeAttr('checked');
                  }
                
          
      });
  // alert(RowIndex+""+oldcount);
      cloned.insertAfter('#GFlex tbody>tr:last').find('input:text').val("");              
      return false;
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


<table id="GFlex" class="grid_insert_table">
        
<thead class="fixedHeader">
              <tr>
                    <th style="width:97px !important;">  <?php echo $form->labelEx($model,'FIELD_SEQUENCE'); ?> </th>
                    <th style="width:240px !important;">  <?php echo $form->labelEx($model,'FIELD_TITLE');    ?> </th>
                    <th style="width:97px !important;">  <?php echo $form->labelEx($model,'DATA_TYPE');      ?> </th>
                    <th style="width:97px !important;">  <?php echo $form->labelEx($model,'MAX_LENGTH');     ?> </th>
                    <th style="width:97px !important;">  <?php echo $form->labelEx($model,'XCORDINATE');     ?> </th>    
                    <th style="width:99px !important;">  <?php echo $form->labelEx($model,'YCORDINATE');     ?> </th>
                    <th>  <?php echo $form->labelEx($model,'IS_REQUIRED');    ?> </th>
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
                 $loop_c=5;
                }
                else 
                {
                    $loop_c=1; 
                }
            }
       ?>   
 <tbody class="scrollContent">
              <?php  for($i=1;$i<=$loop_c;$i++) { ?>
     
              <?php
               
                $data_type =array();
                if(isset($_POST['Generic_Flex'][$i]["DATA_TYPE"])<>"")
                {
                    $data_type[$i]= $_POST['Generic_Flex'][$i]["DATA_TYPE"];
                                      //  print_r($data_type[$i]);
                }
               else{ $data_type[$i]=$model->DATA_TYPE;}
              
                $Is_Required =array();
                
                if(isset($_POST['Generic_Flex'][$i]["IS_REQUIRED"])<>"")
                {
                    $Is_Required[$i]=$_POST['Generic_Flex'][$i]["IS_REQUIRED"];
                    
                    if(isset($_POST['Generic_Flex'][$i]["IS_REQUIRED"])=="Y")
                    {
                       
                        $Is_Required[$i]=true; 
                        
                    }
                    if(isset($_POST['Generic_Flex'][$i]["IS_REQUIRED"])=="N")
                    {   
                          
                        $Is_Required[$i]=false;
                    }
                //print_r($Is_Required);    
                
                }
                 else
                {
                    if($model->IS_REQUIRED=="Y")
                    {
                        $Is_Required[$i]=true;
                    }
                   else 
                    {
                       $Is_Required[$i]=false;
                    }

                }

               ?>
     
              <tr>
                        <td>  <?php echo $form->textField($model,"[$i]FIELD_SEQUENCE",array("id"=>"SEQUENCE-$i",'style'=>"width:97px;",'value'=>'','onkeypress' => 'return isNumberKey(event);')); ?></td>
                        <td>  <?php echo $form->textField($model,"[$i]FIELD_TITLE",array("id"=>"TITLE-$i",'size'=>60,'maxlength'=>512,'value'=>'')); ?></td>                                
                        <td>  <?php echo $form->dropDownList($model,"[$i]DATA_TYPE",CHtml::listData(BASIC_DEFINITION::model()->findAll("DFCTG_DEFINITION_TYPE=UPPER('generic_data_type')"),'SHORT_NAME','DESCRIPTION'),array('empty'=>'--Select--','value'=>$data_type[$i],'id'=>"DATA_TYPE-$i",'class'=>'','size'=>1,'maxlength'=>1,'style'=>"width:97px;height:25px;padding-bottom:1px;")); ?>                             </td>
                        <td>  <?php echo $form->textField($model,"[$i]MAX_LENGTH",array("id"=>"MAX-$i",'value'=>'','style'=>"width:97px;",'onkeypress' => 'return isNumberKey(event);')); ?></td>
                        <td>  <?php echo $form->textField($model,"[$i]XCORDINATE",array("id"=>"X-$i",'value'=>'','style'=>"width:97px;",'onkeypress' => 'return isNumberKey(event);')); ?></td>
                        <td>  <?php echo $form->textField($model,"[$i]YCORDINATE",array("id"=>"Y-$i",'value'=>'','style'=>"width:97px;",'onkeypress' => 'return isNumberKey(event);')); ?></td>
                        <td width="95px">  <?php echo $form->checkBox ($model,"[$i]IS_REQUIRED",array('class'=>'Required','value'=>"Y","checked"=>$Is_Required[$i],"uncheckValue"=>'N','id'=>"REQUIRED-$i",'style'=>'width:20px!important')); ?>       </td>
              </tr>
              <?php } ?>
              
                              
                        <input type="hidden" name="table_id" value="<?php  echo $TABLE_ID;?>">
                        <input type="hidden" name="canvas"   value="<?php  echo $CANVAS;?>">
                        <input type="hidden" name="genericlastid" value="<?php  //echo $lastid;?>">
                        <input id="TotRowCount" type="hidden" name="TotRowCount" value="<?php echo $loop_c;?>">
              
      </tbody>
        
</table>

     
        
<table class="tbl_btn" id="table_bottom_bg">
     <tbody>
         <tr id="table_bottom_bg">
             <td class="btn_save">
                <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"reset",'size'=>'small','icon'=>'icon-refresh','label'=>$Getlabelname->Get_Labelname_Fnc("104"),'id'=>'reset')); ?> 
                <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'size'=>'small','icon'=>'icon-thumbs-up', 'label'=>$Getlabelname->Get_Labelname_Fnc("103"),'id'=>'btnSave','icon'=>'icon-thumbs-up')); ?>
                 <img  src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/icon_plus.png"   
                  title="Add Rows" rel="GFlex+TotRowCount" width="16" height="16"  alt="" style="cursor: pointer;" class="plus"/> 
                 <input id="TotRowCount" type="hidden" name="TotRowCount" value="<?php echo $loop_c;?>">
             </td>
         </tr>
      </tbody>
        
</table>
	

<?php $this->endWidget(); ?>

</div>