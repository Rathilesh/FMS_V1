<?php
/* @var $this POSITIONController */
/* @var $model POSITION */
/* @var $form CActiveForm */
?>
<style>
/* TAB styles*/ 
.ui-tabs-vertical { width: 55em; }
  .ui-tabs-vertical .ui-tabs-nav { padding: .2em .1em .2em .2em; float: right; width: 14em; }
  .ui-tabs-vertical .ui-tabs-nav li { clear: left; width: 100%; border-bottom-width: 1px !important; border-right-width: 0 !important; margin: 0 -1px .2em 0; }
  .ui-tabs-vertical .ui-tabs-nav li a { display:block; }
  .ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active { padding-bottom: 0; padding-right: .1em; border-right-width: 1px; border-right-width: 1px; }
  .ui-tabs-vertical .ui-tabs-panel { padding: 1em; float: right; width: 82em;}


  .ui-tabs .ui-tabs-nav li.ui-tabs-active :after{
      
      left: -18% !important;
border-color: transparent #2BB87B transparent transparent !important;
      
      
  }


 .ui-state-default :hover {background-color: rgb(107, 169, 199) !important;}
    .ui-tabs-active :hover {color : white !important}
    .ui-tabs-active { background-color: #6BA9C7 !important; border-radius:0px !important;}
    .ui-tabs .ui-tabs-panel { padding: 0px !important; }
    .ui-tabs { padding: 0px !important; width:100% !important; padding-top:4px !important;}
    .ui-tabs-nav li a { margin-bottom:0px !important;}
    .ui-tabs .ui-tabs-nav { padding: 0px !important; border: 1px solid #F8F3F3 !important; }
    .ui-tabs .ui-tabs-nav li.ui-tabs-active a { background-color: rgb(107, 169, 199) !important;}
    .ui-tabs .ui-tabs-nav li.ui-tabs-active a:hover { background-color: rgb(107, 169, 199)! important;}
    .ui-tabs .ui-tabs-nav li a, .ui-tabs-collapsible .ui-tabs-nav li.ui-tabs-active a {color: black !important; font-weight:bold !important;}
    .ui-tabs .ui-tabs-nav li a, .ui-tabs-collapsible .ui-tabs-nav li.ui-tabs-active a:hover {color: white !important; font-weight:bold !important;}
    
    .ui-tabs .ui-tabs-nav li a :hover { background-color:#FF0000 !important}
    .ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default { background-color: rgb(44, 119, 67) !important; }

.ui-accordion .ui-state-default, .ui-widget-content .ui-accordion .ui-state-default, .ui-widget-header .ui-accordion .ui-state-default {
background-color: rgb(228, 228, 228) !important;
padding-left: 26px !important;
padding-top: 6px; padding-bottom:6px !important;
}
.ui-state-hover { }
#education_tab_table input, textarea, .uneditable-input {width:200px}
    form { float: left}
    #feedbackform { padding-bottom: 10px !important;  background: url("<?php echo Yii::app()->request->baseUrl; ?>/css/img/sneaker_mesh_fabric.png"); float: left !important; width: 100% !important;}
.ui-tabs-nav li 
{ 
    /*background-color:red !important;*/
    margin-right:0px !important;
}

.ui-tabs .ui-tabs-nav li a { padding: 0 20px !important; }

.ui-tabs .ui-tabs-nav .ui-state-default { background-color:#2C5C47!important;}
.ui-tabs .ui-tabs-nav li a { margin-right: -1px !important; }
/*.ui-tabs .ui-tabs-nav li a {
   background-color:#6BA9C7 !important; margin-right:0px !important; border-radius:none !important; border: 0px solid transparent !important;
}*/

.ui-corner-all, .ui-corner-top, .ui-corner-right, .ui-corner-tr 
{
    border-top-right-radius: 0px !important;
    border-top-left-radius: 0px !important;
    webkit-border-top-right-radius: 0px !important;
    webkit-border-top-left-radius: 0px !important;
    
}
.ui-accordion .ui-accordion-content {
padding: 0em !important;border-top: 1px solid #aaaaaa !important;
}


.ui-tabs .ui-tabs-nav .last_li.ui-tabs-active :after {
    border-width: 0px !important;
} 
/*__TAB STYLES_*****___******___*****____*****____******_____*****________*/




.fixedHeader
{
   position: relative;
}
    
.editbtn 
{
height: 10px;
padding-top: 4px;
margin-right: 5px;
cursor:pointer;
} 


.checkboxBorder{border-bottom:2px solid #e8e8e8 !important;border-right:2px solid #e8e8e8 !important;width: 90px;}
.organisation
    {
        width: auto;
        border: 1px solid #D3D0D0;
        border-radius: 10px;
        float: left;
        height:auto;
        padding-top: 0px !important;
        padding-left: 0px !important;
        padding-bottom: 16px;
        box-shadow: 0px 0px 22px 3px #c4c4c4;
        background:white;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }

.grid_insert_table {
    width: auto;
    border: 1px solid #D3D0D0;
    border-top-left-radius: 10px!important;border-top-right-radius: 10px !important;
    border-bottom-left-radius:0px!important;border-bottom-right-radius:0px!important;
    float: left;
    padding: 6px;
    padding-bottom: 16px;
    box-shadow: 0px 0px 22px 3px #c4c4c4;
}    
    
.Grid_insert_table 
{
width: 195px;
border: 1px solid #D3D0D0;
border-radius: 10px;
float: left;
padding: 6px;
padding-bottom: 16px;
box-shadow: 0px 0px 22px 3px #c4c4c4;

}
.ui-widget-content
{
/*    background:none !important*/
}
.ui-tabs .ui-tabs-nav li.ui-tabs-active a
{
  width:142px !important;  border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;
}
.scrollContent
{
    display: block;
    overflow:auto;
    width: 1050px;
    height:290px;
}
       
.btn_save 
{
 text-align: right !important;
 border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;
 padding: 5px;
}
.tbl_btn
{
width: 1290px !important;
}
.Grid_Insert_Table
{
width: auto;
border: 1px solid #D3D0D0;
border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-radius:0px !important;
float: left;
padding: 6px;
padding-bottom: 0px;
box-shadow: 0px 0px 22px 3px #c4c4c4;
}
/*.grid_title {
background: -moz-linear-gradient(#E0E0E0, #B4B6B8);
background: -webkit-gradient(linear, left top, left bottom, from(#E0E0E0), to(#B4B6B8));
background: -webkit-linear-gradient(#E0E0E0, #B4B6B8);
background: -o-linear-gradient(#E0E0E0, #B4B6B8);
background: -ms-linear-gradient(#E0E0E0, #B4B6B8);
background: linear-gradient(#E0E0E0, #B4B6B8);
-webkit-box-shadow: 0 -1px 0 rgba(255,255,255,.8) inset;
-moz-box-shadow: 0 -1px 0 rgba(255,255,255,.8) inset;
color: #000000;
font-weight: bold;
height: 50px !important;
}*/

table, th, td {
 vertical-align: top !important;
}
</style>

<script>
/////////////////////////////////////////////////////    
    setTimeout(function()                   /////////
    {                                       /////////
     $('.error_red').fadeOut('slow');       /////////
    }, 5000);                               /////////
                                            /////////
    setTimeout(function() {                 /////////
        $('.success_blue').fadeOut('slow'); /////////
    }, 5000);                               /////////
                                            /////////
/////////////////////////////////////////////////////    
    
    
    
//  $(function() 
//  {
//
//  });
//  
$("document").ready(function(){ 
    
    $( "#tabs" ).tabs( { show: { effect: "slide", direction: "right", duration: 500 }});
    $( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
    $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
    
     //$("#Entity_type").html("<iframe src='http://localhost/HR5_DEV_APP/index.php/entity_type/create' ><iframe>"); 
    
//*************** For displaying the readOnly field *************** ***ACTIVE*** ******************** ********** *********    
     var RowCount =$('#TotRowCount').val();
     for(var i=1;i<=RowCount;i++)
         {
             var mode=$("#PROBATION-"+i).val();
             if( mode =="NA")
            {
                $('#UOM-'+i).prop('readonly', 'readonly');
                $('#PROBATION_PERIOD-'+i).prop('readonly', 'readonly');
                $('#PC-'+i).prop('readonly', 'readonly');
            }
            else
            {
                $('#UOM-'+i).removeAttr('readonly');
                $('#PROBATION_PERIOD-'+i).removeAttr('readonly');
                $('#PC-'+i).removeAttr('readonly');
            }
         }
 //*************** For displaying the readOnly field *************** ************** ******************** ********** *********    
 
 
    $('.dropdownstyle').change(function () {
    var index =this.id.split("-")[1];
        //alert(index);
    var present = $(this).val().match(/\NA\b/) == null ? true : false;
    //alert(present);
    if(present==false){
        $('#UOM-'+index).prop('readonly', 'readonly');
        $('#PROBATION_PERIOD-'+index).prop('readonly', 'readonly');
        $('#PC-'+index).prop('readonly', 'readonly');
    }
    else
    {
         $('#UOM-'+index).removeAttr('readonly');
         $('#PROBATION_PERIOD-'+index).removeAttr('readonly');
         $('#PC-'+index).removeAttr('readonly');
    }
});
    
 
 
 
 // cloning last row while using plus .    
   $("#plus").click(function() {  
            var count = $('#Position tr').length;
            count=count-1;
            var $lastRow = $('#Position tbody>tr:last');
            var RowIndex = $lastRow.index()+2;
            var newIDSuffix = "*";
            var cloned = $('#Position tbody>tr:last').clone(true);
            var oldcount=$('#TotRowCount').val();//alert(oldcount);
            $('#TotRowCount').val((parseInt(oldcount)+1)); 
            cloned.find("input,select,span").each(function() {
               
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
                var id1=$(this).attr('id');
                var spanid=$(this).closest('span').attr('id');    
                //alert(spanid);
                if(classname=="SP") 
                  {
                    $(this).removeAttr('checked');
                  }
                if(classname=="uom" || classname=="pp" || classname=="pc"  ) 
                  {
                    $(this).attr("disabled", false);    
                  }
                  
             
//******Removing delete button for the cloned row ******//                   
                if (spanid!=null && spanid.match("btn_Delete-")) 
                 { 
                    $(this).remove();
                 } 
                
    });
            cloned.insertAfter('#Position tbody>tr:last').find('input:text,input:hidden').val("");         
            return false;


    });

//$("#editbtn-").click(function(){
//    $("#diologue_position").show();
//    
//});

});
    
</script>

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
    

<div class="Position" style="">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'position-form',
	'enableAjaxValidation'=>false,
)); ?>

<?php //echo $form->errorSummary($model) 
$Getlabelname =new Get_Labelname_Cls(); ?>  

<div class="grid_insert_table" style="padding-bottom:0px !important;">  
<div id="tabs" style="margin-top: -5px;">
    <div class="Grid_insert_table" id="position" style="float:right;">
         
  <ul>
    <li><a href="#tabs-1"> <?php echo $Getlabelname->Get_Labelname_Fnc("284"); ?> </a></li>
    <li><a href="#tabs-2"> <?php echo $Getlabelname->Get_Labelname_Fnc("182"); ?> </a></li>
    <li><a href="#tabs-3"> <?php echo $Getlabelname->Get_Labelname_Fnc("295"); ?></a></li>
    <li><a href="#tabs-4"> <?php echo $Getlabelname->Get_Labelname_Fnc("296"); ?> </a></li>
    <li><a href="#tabs-5"> <?php echo $Getlabelname->Get_Labelname_Fnc("297"); ?> </a></li>
     
    <li><a href="#tabs-6"> <?php echo $Getlabelname->Get_Labelname_Fnc("298"); ?> </a></li>
    <li><a href="#tabs-7"> <?php echo $Getlabelname->Get_Labelname_Fnc("299"); ?> </a></li>
    <li><a href="#tabs-8"> <?php echo $Getlabelname->Get_Labelname_Fnc("300"); ?> </a></li>
    <li><a href="#tabs-9"> <?php echo $Getlabelname->Get_Labelname_Fnc("280"); ?> </a></li>
  </ul>
 </div>    
            
<div id="tabs-1">
  <div style="width:auto;height:auto;float:left;">    
    <table class="Grid_Insert_Table" id="Position" style="float:left;width:1066px !important;height:325px;">
        <thead class="fixedHeader">
            <tr class="grid_title">
                <th class="" style="width:92px;border-right: 1px solid;padding-top: 4px;"> <?php echo$Getlabelname->Get_Labelname_Fnc("148"); ?> </th>
                <th class="" style="width:204px;padding-top: 4px;"> <?php echo$Getlabelname->Get_Labelname_Fnc("284"); ?> </th>
                <th class="" style="width:187px;text-align:center;border-left:1px solid;border-right:1px solid;padding-top: 4px;"> <?php echo$Getlabelname->Get_Labelname_Fnc("276"); ?> </th>

                <th class="" style="width:283px;text-align:center;border-right: 1px solid;padding-top: 4px;"> <?php echo$Getlabelname->Get_Labelname_Fnc("277"); ?> </th>
                
                <th class="" style="border-right:1px solid;padding-top: 4px;"> <?php echo$Getlabelname->Get_Labelname_Fnc("287"); ?> </th>
                
                <th class="" style="width:85px;padding-top:4px;border-right: 1px solid;">  <?php echo$Getlabelname->Get_Labelname_Fnc("288"); ?> </th>
                <th style="width:67px;">  </th>
            </tr>
        </thead>
    
    
    <thead class="fixedHeader">
        <tr class="grid_title">
            <th class="" style="width:92px;border-right: 1px solid;padding-top: 4px;"><?php// echo "Short Name"; ?></th>
            <th class="" style="width:204px;"><?php// echo "Position"; ?></th>

            <th class="" style="width:91px;border-left:1px solid;border-right:1px solid;padding-top: 4px;"> <?php echo$Getlabelname->Get_Labelname_Fnc("289"); ?> </th>
            <th class="" style="width:90px;border-right:1px solid;padding-top: 4px;"> <?php echo$Getlabelname->Get_Labelname_Fnc("290"); ?> </th>
            
            
            <th class="" style="width:91px;border-right: 1px solid;padding-top: 4px;"> <?php echo $Getlabelname->Get_Labelname_Fnc("291"); ?></th>
            <th class="" style="width:54px;border-right: 1px solid;padding-top: 4px;"><?php echo $Getlabelname->Get_Labelname_Fnc("292"); ?></th>
            
            <th class="" style="width:54px;border-right: 1px solid;padding-top: 4px;"><?php echo $Getlabelname->Get_Labelname_Fnc("293"); ?></th>
            <th class="" style="width:60px;border-right: 1px solid;padding-top: 4px;"><?php echo $Getlabelname->Get_Labelname_Fnc("294"); ?></th>
            <th style="width:86px;border-right: 1px solid;"></th>
            <th style="width:85px;border-right: 1px solid;"></th>
            <th style="width:67px;"></th>
             
        </tr>
    </thead>
         <?php 
     //  print_r($_POST);
            if(isset($_POST['TotRowCount'])<>'')
            {
                $Rowcount=$_POST['TotRowCount'];
                
            }
            else 
            {
               $Rowcount=11;
            }
    
       ?>

    <tbody class="scrollContent">
        <?php 
       
        // Assiging values to text-fields in create...fetching from database__________________________________________________________
        $getPostion_Data=POSITION::model()->findAll(array('order'=>'UPPER(SHORT_NAME) ASC'));
            if($Rowcount<=count($getPostion_Data))
            $Rowcount=count($getPostion_Data); 
         // print_r($getPostion_Data[2]["ID"]); 
            
        for($i=1;$i<=$Rowcount;$i++){
        
           $deletestyle="display:none";   
           try
           {
              $nposition_ID=array(); 
              if(isset($_POST['POSITION'][$i]["ID"])<>"")
             {
                $nposition_ID[$i] =$_POST['POSITION'][$i]["ID"];         
                if($nposition_ID[$i]=="")
                {
                    $deletestyle="display:none";
                }
                else
                {
                   $deletestyle="display:block;float:right;cursor: pointer;"; 
                }
             }
             else if(count($getPostion_Data)>0 && isset($getPostion_Data[$i-1]["ID"])!="") 
             {      
               $nposition_ID[$i] =$getPostion_Data[$i-1]["ID"];                 //print_r($nposition_ID[$i]); 
               $deletestyle="display:block;float:right;cursor:pointer";
             }
             else
             {
                 $nposition_ID[$i]="";
                 $deletestyle="display:none";
             }
             //////////
             $shortname[$i] =array();
             if(isset($_POST['POSITION'][$i]["SHORT_NAME"])<>"")
             {
               $shortname[$i] =$_POST['POSITION'][$i]["SHORT_NAME"];  
             }
             else if(count($getPostion_Data)>0 && isset($getPostion_Data[$i-1]["SHORT_NAME"])!="") 
             {
                $shortname[$i]=$getPostion_Data[$i-1]["SHORT_NAME"]; 
             }
             else
             {
                 $shortname[$i]=$model->SHORT_NAME;
             }
             ///////////
             $position[$i] =array();
             if(isset($_POST['POSITION'][$i]["POSITION"])<>"")
             {
               $position[$i] =$_POST['POSITION'][$i]["POSITION"];  
             }
             else if($Rowcount>0 && isset($getPostion_Data[$i-1]["POSITION"])!="") 
             {
                $position[$i]=$getPostion_Data[$i-1]["POSITION"]; 
             }
             else
             {
                 $position[$i]=$model->POSITION;
             }
             ///////////
             $MaxheadCount[$i] =array();
             if(isset($_POST['POSITION'][$i]["MAX_HEAD_COUNT"])<>"")
             {
               $MaxheadCount[$i] =$_POST['POSITION'][$i]["MAX_HEAD_COUNT"];  
             }
             else if($Rowcount>0 && isset($getPostion_Data[$i-1]["MAX_HEAD_COUNT"])!="") 
             {
                $MaxheadCount[$i]= $getPostion_Data[$i-1]["MAX_HEAD_COUNT"]; 
             }
             else
             {
                $MaxheadCount[$i] =$model-> MAX_HEAD_COUNT;
             }
             ///////////
             $headCount[$i] =array();
             if(isset($_POST['POSITION'][$i]["HEAD_COUNT"])<>"")
             {
               $headCount[$i] =$_POST['POSITION'][$i]["HEAD_COUNT"];  
             }
             else if($Rowcount>0 && isset($getPostion_Data[$i-1]["HEAD_COUNT"])!="") 
             {
                $headCount[$i]= $getPostion_Data[$i-1]["HEAD_COUNT"]; 
             }
             else
             {
                 $headCount[$i]= $model->HEAD_COUNT;
             }
             ///////////
             $probation[$i] =array();
             if(isset($_POST['POSITION'][$i]["PROBATION"])<>"")
             {
               $probation[$i] =$_POST['POSITION'][$i]["PROBATION"];
             }
             else if($Rowcount>0 && isset($getPostion_Data[$i-1]["PROBATION"])!="") 
             {
                $probation[$i]=$getPostion_Data[$i-1]["PROBATION"];     //print_r($probation[$i]); 
                
//                if($probation[$i]=="NA")
//                {
//                    $readOnly="readonly:true";
//                }
//                else 
//                { 
//                    $readOnly="readonly:false";
//                }    
//                
             }
             else
             {
                $probation[$i]=$model-> PROBATION;
             }
             ///////////
             $Uom[$i] =array();
             if(isset($_POST['POSITION'][$i]["PROBATION_PERIOD_UOM"])<>"")
             {
               $Uom[$i] =$_POST['POSITION'][$i]["PROBATION_PERIOD_UOM"];  
             }
             else if($Rowcount>0 && isset($getPostion_Data[$i-1]["PROBATION_PERIOD_UOM"])!="") 
             {
                $Uom[$i]=$getPostion_Data[$i-1]["PROBATION_PERIOD_UOM"]; 
             }
            else
            {
                $Uom[$i]=$model->PROBATION_PERIOD_UOM;
            }
              ///////////
             $probation_period[$i]=array();
             if(isset($_POST['POSITION'][$i]["PROBATION_PERIOD"])<>"")
             {
               $probation_period[$i] =$_POST['POSITION'][$i]["PROBATION_PERIOD"];  
             }
             else if($Rowcount>0 && isset($getPostion_Data[$i-1]["PROBATION_PERIOD"])!="") 
             {
                $probation_period[$i]=$getPostion_Data[$i-1]["PROBATION_PERIOD"]; 
             }
             else
             {
                $probation_period[$i]=$model-> PROBATION_PERIOD;
             }
            ////////////
             $probation_pc[$i]=array();
             if(isset($_POST['POSITION'][$i]["PROBATION_PERIOD_FOR_PC"])<>"")
             {
               $probation_pc[$i] =$_POST['POSITION'][$i]["PROBATION_PERIOD_FOR_PC"];  
             }
             else if($Rowcount>0 && isset($getPostion_Data[$i-1]["PROBATION_PERIOD_FOR_PC"])!="") 
             {
                $probation_pc[$i]=$getPostion_Data[$i-1]["PROBATION_PERIOD_FOR_PC"]; 
             }
            else 
                {
                 $probation_pc[$i]=$model->PROBATION_PERIOD_FOR_PC;
                }
            //////////
             $Notice_period[$i]=array();
             if(isset($_POST['POSITION'][$i]["NOTICE_PERIOD"])<>"")
             {
                 $Notice_period[$i]=$_POST['POSITION'][$i]["NOTICE_PERIOD"];
             }
            else if($Rowcount>0 && isset($getPostion_Data[$i-1]["NOTICE_PERIOD"])!="") 
             {
                 $Notice_period[$i]=$getPostion_Data[$i-1]["NOTICE_PERIOD"];
             }
             else
             {
                $Notice_period[$i]=$model-> NOTICE_PERIOD;
             }
             ///////////
             $SP_Required[$i]=array();
             if(isset($_POST['POSITION'][$i]["SP_REQUIRED"])<>"")
             {
                 $SP_Required[$i]=$_POST['POSITION'][$i]["SP_REQUIRED"];
                 
             }
            else if($Rowcount>0 && isset($getPostion_Data[$i-1]["SP_REQUIRED"])!="") 
             {
                 $SP_Required[$i]=$getPostion_Data[$i-1]["SP_REQUIRED"];//print_r($SP_Required[$i]);
             }
             else
             {
                $SP_Required[$i]=$model-> SP_REQUIRED;
             }
             ///////////////
           }
           catch (Exception $exc) 
           {
               echo $exc->getTraceAsString();
           }  
       ?> 
       
	<tr id="form_addings">
            <td style="text-align:left;"><?php echo $form->textField($model,"[$i]SHORT_NAME",array('size'=>30,'maxlength'=>30,'style'=>'width:97px;','id'=>"Shortname-$i",'value'=>$shortname[$i])); ?></td>
	    <td><?php echo $form->textField($model,"[$i]POSITION",array('id'=>"POSITION-$i",'size'=>60,'maxlength'=>100,'style'=>'margin-left:0px;width:210px;','value'=>$position[$i],'class'=>'')); ?></td>
	    <td><?php echo $form->textField($model,"[$i]MAX_HEAD_COUNT",array('id'=>"MAX_HEAD_COUNT-$i",'style'=>'width:97px;margin-left:0px;text-align:right;','value'=>$MaxheadCount[$i])); ?></td>
	    <td><?php echo $form->textField($model,"[$i]HEAD_COUNT",array('id'=>"HEAD_COUNT-$i",'style'=>'width:97px;margin-left:0px;text-align:right;','readonly'=>true,'value'=>$headCount[$i])); ?></td>
            
            <td><?php echo $form->dropDownList($model,"[$i]PROBATION",CHtml::listData(BASIC_DEFINITION::model()->findAll("DFCTG_DEFINITION_TYPE=UPPER('promotion_mode')"),'SHORT_NAME','DESCRIPTION'),array('options' => array($probation[$i]=>array('selected'=>true)),'empty'=>'--Select--','class'=>'dropdownstyle','style'=>'width:97px;margin-left:0px;height:25px;','id'=>"PROBATION-$i")); ?> </td> 
            <td><?php echo $form->textField($model,"[$i]PROBATION_PERIOD_UOM",array('id'=>"UOM-$i",'style'=>'width:60px;margin-left:0px;','value'=>$Uom[$i],'class'=>'uom',)); ?> </td> 
            <td><?php echo $form->textField($model,"[$i]PROBATION_PERIOD",array('id'=>"PROBATION_PERIOD-$i",'style'=>'width:60px;margin-left:0px;text-align:right;','value'=>$probation_period[$i],'class'=>'pp')); ?> </td> 
            <td><?php echo $form->textField($model,"[$i]PROBATION_PERIOD_FOR_PC",array('id'=>"PC-$i",'style'=>'width:72px;margin-left:0px;text-align:right;','value'=>$probation_pc[$i],'class'=>'pc')); ?> </td> 
            
            <td><?php echo $form->textField($model,"[$i]NOTICE_PERIOD",array('id'=>"NOTICE_PERIOD-$i",'style'=>'width:91px;margin-left:0px;','value'=>$Notice_period[$i],'class'=>'NOTICE_PERIOD')); ?> </td> 
            <td><input type="hidden" name="NOTICE_PERIOD_TOLERANCE" id="NOTICE_PERIOD_TOLERANCE" value=""></td>
            
            
            
            <td class="checkboxBorder" style="padding-top: 5px;"><?php echo $form->checkBox($model,"[$i]SP_REQUIRED",array('class'=>'SP','value'=>"Y","checked"=>$SP_Required[$i]=='Y'?'checked':'',"uncheckValue"=>"N",'id'=>"SP_REQUIRED-$i",'style'=>'width:12px')); ?> </td>
            
            <input id="<?php echo "nPosition_Id".$i;?>" type="hidden" name="<?php echo "nPosition_Id".$i;?>" value="<?php echo $nposition_ID[$i];?>"> 
	    <td style="padding-left: 5px;"><img title="Edit" src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/edit.png" class="editbtn" onClick="" id="editbtn-"></td>
            <td><span title="Delete" class="icon-remove" style="<?php echo $deletestyle; ?>" id="<?php echo "btn_Delete-".$i;?>" name=""onclick=""></span></td>
        </tr>
	
		
	
	
		<?php //echo $form->labelEx($model,'NOTICE_PERIOD_TOLERANCE'); ?>
		<?php //echo $form->textField($model,'NOTICE_PERIOD_TOLERANCE'); ?>
	
		<?php //echo $form->labelEx($model,'ENTITY_ID'); ?>
		<?php //echo $form->textField($model,'ENTITY_ID'); ?>

	<?php } ?>
           </tbody> 
   </table>   
      
        <table class="" id="" style="width:1066px;margin-bottom: 25px;">
            <tbody>
              <tr id="table_bottom_bg">
                 <td class="btn_save" style="padding-bottom: 5px;padding-top: 5px;">
                     <div style="width:auto;height: auto;float:right;">
                        <img  src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/icon_plus.png"   
                        title="Add Rows" width="16" height="16"  alt="" style="cursor: pointer;margin-right: 20px;" id="plus"/>
                        <input id="TotRowCount" type="hidden" name="TotRowCount" value="<?php echo $Rowcount;?>">
                        <input id="currentrow" type="hidden" name="currentrow" value="">
                     </div>
                 </td>                   
               </tr>
             </tbody>
        </table>
      
    </div>   
</div>
 
<!--********************* TAB1 CLOSE HERE ****************************************    -->
    
  <div id="tabs-2">
  
  </div>
            
  <div id="tabs-3">
   
  </div>
    
    <div id="tabs-4">
   
  </div>
    
    <div id="tabs-5">
   
  </div>
    
    <div id="tabs-6">
   
  </div>
    
    <div id="tabs-7">
   
  </div>
    
    <div id="tabs-8">
   
  </div>
    
    <div id="tabs-9">
<!--      <iframe   src="http://localhost/HR5_DEV_APP/index.php/entity_type/create" style="width:100%;height:355px;overflow-y:scroll overflow-x:hidden">
      </iframe>-->
   </div>
</div>  

        
  </div>          
            <table class="tbl_btn" id="table_bottom_bg">
              <tbody>
                <tr id="table_bottom_bg">
                  <td class="btn_save" style="padding-bottom: 5px;padding-top: 5px;">

                    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"submit",'size'=>'small', 'label'=>$model->isNewRecord ?$Getlabelname->Get_Labelname_Fnc("103") : $Getlabelname->Get_Labelname_Fnc("103"),'id'=>'demo_save','icon'=>'icon-thumbs-up',)); ?>
                    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"clear",'size'=>'small','icon'=>'icon-refresh','label'=>$Getlabelname->Get_Labelname_Fnc("104"),'id'=>'reset')); ?>
                    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"Close",'size'=>'small','icon'=>'icon-remove','url' =>$this->createUrl('basic_definition_category/admin'),'label'=>$Getlabelname->Get_Labelname_Fnc("141"),'id'=>'close','htmlOptions'=>array('style'=>'display:none !important;'))); ?>
                     
                    </td>
                </tr>

               </tbody>
          </table>
 
<?php $this->endWidget(); ?>
    
<!--*************************** *************** ******************************* ************************************ ******   -->
<!-- ********************   Diologue box opening in case of update in POSITION ***********************************************-->
    
<!--<div id="diologue_position" class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-draggable" style="display:none;position:absolute;padding:10px;background-color: white;width:auto;height:auto;z-index: 1002;top:200px;left:312px;border-radius: 5px;border-top-left-radius: 5px !important;border-top-right-radius: 5px !important;">
    <table>
        <tr>
            <td>
               
            </td>
         </tr>
    </table>
</div>   
    -->
    

</div><!-- form -->