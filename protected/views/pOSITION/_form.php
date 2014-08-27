<?php
//CreateD by Anaswara Start Date May/8/2014
$GetTitleHelp =new Title_Help();
require_once('tooltip.php');
require_once("popupdialog.php");
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
    .ui-tabs { padding: 0px !important; width:100% !important; padding-top:4px !important;padding-right: 8px !important;}
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
height: 14px;
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
    padding-bottom: 0px;
    box-shadow: 0px 0px 22px 3px #c4c4c4;
}    
    
.Grid_insert_table 
{
width: 195px;
border: 1px solid #D3D0D0;
border-radius: 10px;
float: left;
padding: 5px;
padding-bottom: 16px;
box-shadow: 0px 0px 22px 3px #c4c4c4;

}
.ui-widget-content
{
/*    background:none !important*/
}
.ui-tabs .ui-tabs-nav li.ui-tabs-active a
{
  width:180px !important;  border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;
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
width: 1275px !important;
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
.icon-remove{margin-top:8px !important;}
table, th, td {
 vertical-align: top !important;
}
.grid_insert_table tbody tr:last-child td {
border-bottom: none!important;
}
.responsibility{width:255px;}
.panel-heading { padding: 0px 15px !important;}
.spanClass{padding-top: 5px;float: left;margin-right: 5px;padding-bottom: 10px;}
.shortnameSpan
{
    border: 1px solid rgb(199, 174, 174);
    border-radius: 5px;
    padding: 4px;
    background-color:#2d7456;
    /* margin-right: 20px; */
    margin-left: 255px;
    margin-right: 10px;
    font-size: 12px;
}
.positionSpan
{
    border: 1px solid rgb(196, 176, 176);
    font-size: 12px;
    border-radius: 5px;
    padding: 4px;
    background-color:#2d7456;
}
.panel-success>.panel-heading {
color: white!important;
background-color: #2d7456 !important;

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
    
   
    $('#tabs').bind('tabsselect', function(event, ui) 
        {   //alert("huha");
         var label = $(ui.tab).text();//alert(label);
         $("#remove_span").text(label);
//         $(".panel-title").text(label);
        });
    
    $(".auto-complete").bind('focus',function(){
      $(this).autocomplete("search");
      });
//*************** For displaying the readOnly field *************** ***ACTIVE*** ******************** ********** *********    
     var RowCount =$('#TotRowCount').val();
     for(var i=1;i<=RowCount;i++)
         {
             var vmode=$("#PROBATION-"+i).val();
             var VUOM=$('#UOM-'+i).val();//alert(VUOM);//return false;
              $("#vUom"+i).val(VUOM);
             if( vmode =="NA")
            {
                //$('#UOM-'+i).prop('readonly', 'readonly');
                $('#UOM-'+i).attr("disabled", "true");
                $('#PROBATION_PERIOD-'+i).prop('readonly', 'readonly');
                $('#PC-'+i).prop('readonly', 'readonly');
            }
            else
            {
                $('#UOM-'+i).removeAttr('disabled');
                $('#PROBATION_PERIOD-'+i).removeAttr('readonly');
                $('#PC-'+i).removeAttr('readonly');
            }
            
            document.getElementById('PROBATION-'+i).onchange = function () 
            {
               var index =this.id.split("-")[1];//alert(index)  ;
               document.getElementById("UOM-"+index).disabled = this.value == 'NA';
            }
         }

//                        
 //*************** For displaying the readOnly field *************** ************** ******************** ********** *********    
 
 
    $('.dropdownstyle').change(function () {
    var index =this.id.split("-")[1];
        //alert(index);
    var present = $(this).val().match(/\NA\b/) == null ? true : false;
    //alert(present);
    if(present==false){
       // $('#UOM-'+index).prop('readonly', 'readonly');
      //  $('option:not(:selected)').attr('disabled', true);
       
        $('#UOM-'+index).attr("readOnly", "true");
        $('#PROBATION_PERIOD-'+index).prop('readonly', 'readonly');
        $('#PC-'+index).prop('readonly', 'readonly');
    }
    else
    {
         $('#UOM-'+index).removeAttr("readOnly");
         $('#PROBATION_PERIOD-'+index).removeAttr('readonly');
         $('#PC-'+index).removeAttr('readonly');
    }
});
    
 
 
 
 // cloning last row while using plus .    
   $("#plus1").click(function() { 
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

//
// $("#plus2").click(function()
// {alert("hiiiiiii"); 
//            var count = $('#POSITION_RESPONSIBILITY tr').length;
//            count=count-1;
//            var $lastRow = $('#POSITION_RESPONSIBILITY tbody>tr:last');
//            var RowIndex = $lastRow.index()+2;
//            var newIDSuffix = "*";
//            var cloned = $('#POSITION_RESPONSIBILITY tbody>tr:last').clone(true);
//            var oldcount=$('#Total_RowCount').val();//alert(oldcount);
//            $('#Total_RowCount').val((parseInt(oldcount)+1)); 
//            cloned.find("input,select,span").each(function() {
//               
//                var id = $(this).attr('id');
//                var name = $(this).attr('name');
//                name = name.replace(/[0-9]/, newIDSuffix);
//                id = id.replace(/[0-9]/, newIDSuffix);
//                name = name.replace(/[0-9]/g, "");
//                id = id.replace(/[0-9]/g, "");
//                name = name.replace(newIDSuffix, RowIndex);
//                id = id.replace(newIDSuffix, RowIndex);
//                $(this).attr('id', id);
//                $(this).attr('name', name);
// //clone last row disables the checkbox  $(this).removeAttr('checked');--------check
//                var classname=$(this).attr('class');
//                var id1=$(this).attr('id');
//                var spanid=$(this).closest('span').attr('id');    
//                //alert(spanid);
//              
////******Removing delete button for the cloned row ******//                   
//               
//                
//    });
//            cloned.insertAfter('#POSITION_RESPONSIBILITY tbody>tr:last').find('input:text,input:hidden').val("");         
//            return false;
//
//
//});

///////////*********VALIDATION FOR POSITION TAB ********************* ////////// *** /////////////////////////// *** //////////////////////
$("#demo_save").click(function()
{
    for(var i=1;i<=RowCount;i++)
        {
            var vSHORTNAME = $("#Shortname-"+i).val();
            var vPOSITION  = $("#POSITION-"+i).val();
            var nMAX_HEAD_COUNT = $("#MAX_HEAD_COUNT-"+i).val();
            var vMODE=$("#PROBATION-"+i).val();
            var vUOM = $("#UOM-"+i).val();//alert(vUOM)
            var nNEW = $("#PROBATION_PERIOD-"+i).val();
            var nPC  = $("#PC-"+i).val();
            var nNOTICE_PERIOD = $("#NOTICE_PERIOD-"+i).val();//"tooltip.pop(this, 'Grade Obtained.');"
//            if(nNOTICE_PERIOD>180)
//                
//                {
//                    <?php //$TOOLTIP_FOCUS= "tooltip.pop(this, 'Grade Obtained.');"?>
//                }
//                else{  <?php //$TOOLTIP_FOCUS= ""?>}

           
            
            if(vSHORTNAME!="")
                {
                    if(vPOSITION=="")
                        {//20865
                          //  alert("Please enter POSITION in row " +i);
                            msgid= i+alertformat+vSHORTNAME;
                            GetDynamicAlert("20865",msgid);
                            return false;
                        }
                    if((vPOSITION!="") && (nMAX_HEAD_COUNT==""))
                        {//20866
                            //alert(" Please enter MAX_HEAD_COUNT in row " +i);
                            msgid= i+alertformat+vSHORTNAME;
                            GetDynamicAlert("20866",msgid);
                            return false;
                        }
                }
                
            if((vPOSITION!="") || (nMAX_HEAD_COUNT!=""))
                {
                    if(vSHORTNAME == "")
                        {//20877
                           // alert("Please enter SHORTNAME in row " +i);
                            GetDynamicAlert("20877",i);
                            return false;
                        }
                }
                
//            if(vMODE!="NA")
//                {
//                   
//                   
                   if((vSHORTNAME!="") && (vPOSITION!="") && (nMAX_HEAD_COUNT!="") && (vMODE!="NA"))
                       {
                        if(vUOM=="") 
                            {//20878
                                //alert("Please Enter UOM for Probation in Row "+i);
                                msgid= i+alertformat+vSHORTNAME;
                                GetDynamicAlert("20878",msgid);
                                return false;
                            }
                        if(nNEW=="")  
                        {//20879
                            //alert("Please Enter New Period of Probation in Row "+i);
                            msgid= i+alertformat+vSHORTNAME;
                            GetDynamicAlert("20879",msgid);
                            return false;
                        }
                        if(nPC=="")  
                        {//20880
                            //alert("Please Enter Probation Period for promation in Row "+i);
                            msgid= i+alertformat+vSHORTNAME;
                            GetDynamicAlert("20880",msgid);
                            return false;
                        }
                       }
              //  }
        }
        alert("Successfull validation of position");//return false;
});
///////////*********VALIDATION FOR POSITION TAB *******ENDS HERE***** ////////// *** /////////////////////////// *** //////////////////////
    $('.shortname').on('focus', function(e)
    {
                var dInput = this.id;
                var ids=dInput.split("-");
                var nPosition_id=$('#nPosition_Id'+ids[1]).val();
                $("#focus_id").val(nPosition_id);
                
                var vSHORTNAME = $("#Shortname-"+ids[1]).val();
                $("#ShortName").val(vSHORTNAME);
   
// Ajax for Position_Flex----------------------------------------------------------------------------   
                $.ajax({
                   type:"POST",
                   url: "<?php echo $this->createUrl('Position/GetPosition_Flex_Data') ?>",
                   data:"nPosition_id="+nPosition_id,//format:'JSON',
                   beforeSend:function (){
                            $('#loading-indicator-please-wait').show();
                            },
                   success: function(data)
                   { 
                      $('#Position_flex').html(data);
                      $('#loading-indicator-please-wait').hide();

                   },
                   error:function(data)
                    {
                       // alert("error");
                    }
               });
               
//RESPONSIBILITY

                   $.ajax({
                   type:"POST",
                   url: "<?php echo $this->createUrl('Position/GetResponsibility_Data') ?>",
                   data:"nPosition_id="+nPosition_id,//format:'JSON',
                   beforeSend:function (){
                            $('#loading-indicator-please-wait').show();
                            },
                   success: function(data)
                   { 
                     //console.log(data);
                    //return false;
                      $('#Responsibility').html(data);
                      $('#loading-indicator-please-wait').hide();
                    //  var h=$(data).find('#Responsibility').html();
                     // console.log(data);
                     // return false;
                   },
                   error:function(data)
                    {
                       // alert("error");
                    }
               });
               
               
//Education And Experience
     $.ajax({
                   type:"POST",
                   url: "<?php echo $this->createUrl('Position/GetEdu_Exp_Data') ?>",
                   data:"nPosition_id="+nPosition_id,//format:'JSON',
                   beforeSend:function (){
                            $('#loading-indicator-please-wait').show();
                            },
                   success: function(data)
                   { 
                   //  console.log(data);
                   //  return false;
                   $('#Edu_Experience').html(data);
                   $('#loading-indicator-please-wait').hide();
                    //  var h=$(data).find('#Responsibility').html();
                     // console.log(data);
                     // return false;
                   },
                   error:function(data)
                    {
                       // alert("error");
                    }
               });
 //Key Compentency
      $.ajax({
                   type:"POST",
                   url: "<?php echo $this->createUrl('Position/Key_Compentency') ?>",
                   data:"nPosition_id="+nPosition_id,//format:'JSON',
                   beforeSend:function (){
                            $('#loading-indicator-please-wait').show();
                            },
                   success: function(data)
                   { 
                   //  console.log(data);
                   //  return false;
                   $('#Key_Compentency').html(data);
                   $('#loading-indicator-please-wait').hide();
                    //  var h=$(data).find('#Responsibility').html();
                     // console.log(data);
                     // return false;
                   },
                   error:function(data)
                    {
                       // alert("error");
                    }
               });

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
    
    
 //Deletes a Position
    function DeletePosition(id)
    {
        
        bootbox.confirm("<p class='modalstyle'><b><img width='30px' src='<?php echo Yii::app()->request->baseUrl; ?>/images/question_red.png'/>Confirmation</b></p><p>Are you sure to delete this Position ?</p>", "No", "Yes", function(result) {
        if (result == true) {
            var ids=id.split("-");
            var nPosition_id=$('#nPosition_Id'+ids[1]).val(); //alert(ids);return false;  
            
             $.ajax({  
               type: "POST",
               url: "<?php echo $this->createUrl('Position/DeletePostion') ?>",
               data:"nPosition_id="+nPosition_id,  
               success: function(data){ 
               console.log(data);            
               // $('#policy-loading-indicator').hide();
                if(data=="20852")
                {
                    location.reload();                
                }
               else
               {
                    if(data=="20860")
                    {      
                           location.reload();
//                           msgid= i+alertformat+vSHORTNAME;
//                           GetDynamicAlert("20860",msgid);
                    }
//                    else if(data=="20017")
//                    { 
//                           GetStaticAlert("20017");
//                    }
//                    else if(data=="20021")
//                    { 
//                           GetStaticAlert("20021");
//                    }
//                    else if(data=="20022")
//                    { 
//                           GetStaticAlert("20022");
//                    }
                }
               },
            });
        }
      });
    }    
    
    
//Deleting Responsibility
    function DeleteResponsibility(id)
    {
       // alert("entered");
        bootbox.confirm("<p class='modalstyle'><b><img width='30px' src='<?php echo Yii::app()->request->baseUrl; ?>/images/question_red.png'/>Confirmation</b></p><p>Are you sure to delete this Position ?</p>", "No", "Yes", function(result) {
        if (result == true) {//alert("inside true");
            var ids=id.split("-");
            var nResponsibility_ID=$('#Responsibility_ID'+ids[1]).val();// alert(nResponsibility_ID);return false;  
            var nfocus_id =$("#focus_id").val//console.log(nfocus_id);
             $.ajax({  
               type: "POST",
               url: "<?php echo $this->createUrl('Position/Responsibility_Insert_Update_Delete') ?>",
               data:{nResponsibility_ID: nResponsibility_ID, nfocus_id: nfocus_id},
               //data:"nResponsibility_ID="+nResponsibility_ID+"nfocusid="+nfocus_id,         
               success: function(data){ //alert("hii");
               console.log(data);//return false;           
                },
               error: function (data) {
                        console.log(data);                              //This is the alert that fires.
               }
            });
        }
       
      });
    } 
    
//Education And Experience Delete function    
  function DeleteEdu_n_Exp(id)
    {
        
        bootbox.confirm("<p class='modalstyle'><b><img width='30px' src='<?php echo Yii::app()->request->baseUrl; ?>/images/question_red.png'/>Confirmation</b></p><p>Are you sure to delete this Position ?</p>", "No", "Yes", function(result) {
        if (result == true) {
            var ids=id.split("-");
            var nEdu_n_Exp=$('#Edu_Exp_ID'+ids[1]).val();// alert(nEdu_n_Exp);return false;  
            var nfocus_id =$("#focus_id").val//console.log(nfocus_id);
             $.ajax({  
               type: "POST",
               url: "<?php echo $this->createUrl('Position/Edu_Exp_IUD') ?>",
               data:{nEdu_n_Exp: nEdu_n_Exp, nfocus_id: nfocus_id},
               success: function(data){ 
               console.log(data);//return false;           
               },
            });
        }
       
      });
    } 

function getfocus(id,index)
{ 
    //alert(index);
    var nNOTICE_PERIOD = $("#NOTICE_PERIOD-"+index).val();
    var vUOM = $("#UOM-"+index).val();
    var nNEW = $("#PROBATION_PERIOD-"+index).val();
    //alert(vUOM);
    if(vUOM=="Day")
        {
            if (nNOTICE_PERIOD>180)
                {
                    tooltip.pop(id, 'Greater than 180 Days.');
                }
            if (nNEW>180)
                {
                    tooltip.pop(id, 'Greater than 180 Days in new probation.');
                }
        }
        
   else if(vUOM=="Month")
        {
            if (nNOTICE_PERIOD>6)
                {
                    tooltip.pop(id, 'Greater than 6 months.');
                }
            if (nNEW>6)
                {
                    tooltip.pop(id, 'Greater than 6 months in new probation.');
                }
        }     
}
//function getNew(id,index)
//{
//    var nNEW = $("#PROBATION_PERIOD-"+index).val();//alert(nNEW);
//    if (nNEW>180)
//        {
//            tooltip.pop(id, 'Greater than 180 Days in new probation.');
//        }
//}

//******************HOW TO PASS AN ID WHEN THE TEXT FIELD IS PRESSED ACCORDINGLY SHOW THE FLEX DATA'S *******************
function pluz()
{
   
            var count =$('#Total_RowCount').val();//alert(count);
            var $lastRow = $('#POSITION_RESPONSIBILITY tbody>tr:last');
            var RowIndex = $lastRow.index()-6;//alert(RowIndex);
            var newIDSuffix = "*";
            var cloned = $('#POSITION_RESPONSIBILITY tbody>tr:last').clone(true);
            var oldcount=$('#Total_RowCount').val();//alert(oldcount);
            $('#Total_RowCount').val((parseInt(oldcount)+1)); 
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
              
//******Removing delete button for the cloned row ******//                   
               
                
    });
            cloned.insertAfter('#POSITION_RESPONSIBILITY tbody>tr:last').find('input:text,input:hidden').val("");         
            return false;



}

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
$Getlabelname =new Get_Labelname_Cls(); 

if($model->isNewRecord)
    {  
        $post_id="";
    }
    else
    { 
        //$post_id=$model->ID; //echo $post_id;
    }

?>  
<input type="hidden" name="tab_label" id="tab_label" value="">
<div class="grid_insert_table" style="padding-bottom:0px !important;padding-left:0px;padding-right:0px;border-bottom-left-radius:10px !important;border-bottom-right-radius:10px !important;  ">  
<div id="tabs" style="margin-top:-5px;margin-left: 0px;border-radius: 10px !important;">
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
                <th class="" style="width:96px;border-right: 1px solid;padding-top: 4px;"> <?php echo$Getlabelname->Get_Labelname_Fnc("148"); ?> </th>
                <th class="" style="width:210px;padding-top: 4px;"> <?php echo$Getlabelname->Get_Labelname_Fnc("284"); ?> </th>
                <th class="" style="width:194px;text-align:center;border-left:1px solid;border-right:1px solid;padding-top: 4px;"> <?php echo$Getlabelname->Get_Labelname_Fnc("276"); ?> </th>

                <th class="" style="width:300px;text-align:center;border-right: 1px solid ;padding-top: 4px;"> <?php echo$Getlabelname->Get_Labelname_Fnc("277"); ?> </th>
                
                <th class="" style="border-right:1px solid;padding-top: 4px;"> <?php echo$Getlabelname->Get_Labelname_Fnc("287"); ?> </th>
                
                <th class="" style="width:91px;padding-top:4px;border-right: 1px solid;">  <?php echo$Getlabelname->Get_Labelname_Fnc("288"); ?> </th>
                <th style="width:80px;">  </th>
            </tr>
        </thead>
    
    
    <thead class="fixedHeader">
        <tr class="grid_title">
            <th class="" style="width:96px;border-right: 1px solid;padding-top: 4px;"><?php// echo "Short Name"; ?></th>
            <th class="" style="width:210px;"><?php// echo "Position"; ?></th>

            <th class="" style="width:97px;border-left:1px solid;border-right:1px solid;padding-top: 4px;"> <?php echo$Getlabelname->Get_Labelname_Fnc("289"); ?> </th>
            <th class="" style="width:97px;border-right:1px solid;padding-top: 4px;"> <?php echo$Getlabelname->Get_Labelname_Fnc("290"); ?> </th>
            
            
            <th class="" style="width:93px;border-right: 1px solid;padding-top: 4px;"> <?php echo $Getlabelname->Get_Labelname_Fnc("291"); ?></th>
            <th class="" style="width:76px;border-right: 1px solid;padding-top: 4px;"><?php echo $Getlabelname->Get_Labelname_Fnc("292"); ?></th>
            
            <th class="" style="width:59px;border-right: 1px solid;padding-top: 4px;"><?php echo $Getlabelname->Get_Labelname_Fnc("293"); ?></th>
            <th class="" style="width:60px;border-right: 1px solid;padding-top: 4px;"><?php echo $Getlabelname->Get_Labelname_Fnc("294"); ?></th>
            <th style="width:92px;border-right: 1px solid;"></th>
            <th style="width:91px;border-right: 1px solid;"></th>
            <th style="width:80px;"></th>
             
        </tr>
    </thead>
         <?php 
     // print_r($_POST);
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
        
        
        for($i=1;$i<=$Rowcount;$i++)
        {
        
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
               $nposition_ID[$i] =$getPostion_Data[$i-1]["ID"];              //   print_r($nposition_ID[$i]); 
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
            <td style="text-align:left;"><?php echo $form->textField($model,"[$i]SHORT_NAME",array('size'=>30,'maxlength'=>30,'style'=>'width:97px;','id'=>"Shortname-$i",'value'=>$shortname[$i],'class'=>'shortname')); ?></td>
	    <td><?php echo $form->textField($model,"[$i]POSITION",array('id'=>"POSITION-$i",'size'=>60,'maxlength'=>100,'style'=>'margin-left:0px;width:210px;','value'=>$position[$i],'class'=>'')); ?></td>
	    <td><?php echo $form->textField($model,"[$i]MAX_HEAD_COUNT",array('id'=>"MAX_HEAD_COUNT-$i",'style'=>'width:97px;margin-left:0px;text-align:right;','value'=>$MaxheadCount[$i],'onkeypress' => 'return isNumberKey(event);')); ?></td>
	    <td><?php echo $form->textField($model,"[$i]HEAD_COUNT",array('id'=>"HEAD_COUNT-$i",'style'=>'width:97px;margin-left:0px;text-align:right;','readonly'=>true,'value'=>$headCount[$i])); ?></td>
            
            <td style="text-align:left;"><?php echo $form->dropDownList($model,"[$i]PROBATION",CHtml::listData(BASIC_DEFINITION::model()->findAll("DFCTG_DEFINITION_TYPE=UPPER('promotion_mode')"),'SHORT_NAME','DESCRIPTION'),array('options' => array($probation[$i]=>array('selected'=>true)),'empty'=>'--Select--','class'=>'dropdownstyle','style'=>'width:91px;margin-left:0px;height:25px;','id'=>"PROBATION-$i")); ?> </td> 
            <td><?php //echo $form->textField($model,"[$i]PROBATION_PERIOD_UOM",array('1'=>'Day','2'=>'Month'),array('id'=>"UOM-$i",'style'=>'width:60px;margin-left:0px;','value'=>$Uom[$i],'class'=>'uom',)); ?> </td> 
           
            <td><?php echo $form->dropDownList($model,"[$i]PROBATION_PERIOD_UOM",array('Day'=>'Day','Month'=>'Month'), array('options' => array($Uom[$i]=>array('selected'=>true)),'empty'=>'Select',"class"=>"name",'id'=>"UOM-$i",'style'=>'width:77px;height:25px;margin-left:0px;',)); ?></td>
            <td><?php echo $form->textField($model,"[$i]PROBATION_PERIOD",array('id'=>"PROBATION_PERIOD-$i",'style'=>'width:60px;margin-left:0px;text-align:right;','value'=>$probation_period[$i],'class'=>'pp','onkeypress' => 'return isNumberKey(event);','onfocus' =>"getfocus(this,$i)")); ?> </td> 
            <td><?php echo $form->textField($model,"[$i]PROBATION_PERIOD_FOR_PC",array('id'=>"PC-$i",'style'=>'width:72px;margin-left:0px;text-align:right;','value'=>$probation_pc[$i],'class'=>'pc','onkeypress' => 'return isNumberKey(event);')); ?> </td> 
            
            <td><?php echo $form->textField($model,"[$i]NOTICE_PERIOD",array('id'=>"NOTICE_PERIOD-$i",'style'=>'width:91px;margin-left:0px;text-align:right;','value'=>$Notice_period[$i],'class'=>'NOTICE_PERIOD','onkeypress' => 'return isNumberKey(event);','onfocus' =>"getfocus(this,$i)")); ?> </td> 
            <td><input type="hidden" name="NOTICE_PERIOD_TOLERANCE" id="NOTICE_PERIOD_TOLERANCE" value="" onfocus = "tooltip.pop(this, 'Grade Obtained.');"></td>
            
            
            
            <td class="checkboxBorder" style="padding-top: 5px;"><?php echo $form->checkBox($model,"[$i]SP_REQUIRED",array('class'=>'SP','value'=>"Y","checked"=>$SP_Required[$i]=='Y'?'checked':'',"uncheckValue"=>"N",'id'=>"SP_REQUIRED-$i",'style'=>'width:12px')); ?> </td>
            
          
	    <td style="padding-left: 5px;">
          <!--//************HIDDEN FIELD ID ***********************  ****************** *   ******************************** ************************	-->
           <input id="<?php echo "nPosition_Id".$i;?>" type="hidden" name="<?php echo "nPosition_Id".$i;?>" value="<?php echo $nposition_ID[$i];?>"> </td>
 <!--<img title="Edit" src="<?php //echo Yii::app()->request->baseUrl; ?>/css/images/edit.png" class="editbtn" onClick="" id="editbtn-"></td>-->
           <td><span title="Delete" class="icon-remove" style="<?php echo $deletestyle; ?>" id="<?php echo "btn_Delete-".$i;?>" name="" onclick="DeletePosition(this.id)"></span>
 <!--<input type="hidden" name="<?php //echo "POSITION_Focus_id".$i;?>" id=" <?php //echo "focus_id".$i;?>" value="">-->
           </td>
       </tr>
         <input type="hidden" name="<?php echo "vUom".$i;?>" id="<?php echo "vUom".$i;?>" value="">
	<?php } ?>
       <input type="hidden" name="POSITION_Focus_id" id="focus_id" value="">
       <input type="hidden" name="ShortName-" id="ShortName" value="">
      
           </tbody> 
   </table>   
      
        <table class="" id="table_bottom_bg" style="width:1066px;margin-bottom: 25px;">
            <tbody>
                 <td class="btn_save" style="padding-bottom: 5px;padding-top: 5px;">
                     <div style="width:auto;height: auto;float:right;">
                        <img  src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/icon_plus.png"   
                        title="Add Rows" width="16" height="16"  alt="" style="cursor: pointer;margin-right: 20px;" id="plus1"/>
                        <input id="TotRowCount" type="hidden" name="TotRowCount" value="<?php echo $Rowcount;?>">
                        <input id="currentrow" type="hidden" name="currentrow" value="">
                     </div>
                 </td>                   
            </tbody>
        </table>
      
    </div>   
</div>
 
<!--********************* TAB1 CLOSE HERE ****************************************    -->
    
  <div id="tabs-2">
  
      <div id="Position_flex" style="width:auto;height:auto;float:left;">
          
<div class="panel panel-success" style="margin-right: 5px;">
            <div class="panel-heading">
              <h3 class="panel-title">Flex</h3>
            </div>
    
            <div class="panel-body" style="padding-top: 0px;">
              
             <table class="" id="PositionFlex" style="float:left;width:1020px !important;height:260px;margin-top:20px;margin-left:10px;border-bottom-left-radius:10px;border-bottom-right-radius: 10px;  ">
                <tbody class="scrollContent" style="width:1020px !important;height:260px !important;">
                  
        <?php 
            

         $GET_POSITION_CLS = new Position_Flex_cls(); 
         $Getposition_Flex =$GET_POSITION_CLS->POSITION_FLEX_STATIC();
         $nFLEX_COUNT=count($Getposition_Flex);//$nFLEX_COUNT=$nFLEX_COUNT-1;
         //print_r($nFLEX_COUNT);exit;
         foreach ($Getposition_Flex as $key => $value)  {   ?>
             <tr id="" class="">
                  <td class="" style="">
                      <span class="spanClass"> <?php echo $value['DESCRIPTION']; ?> </span></td>
           
           <input type="hidden" name="flex<?php echo $key;?>" id="flex<?php echo $key;?>" value="<?php echo $value['DESCRIPTION'];?>">         
           <input type="hidden" name="Flex_Id<?php echo $key ?>" id="Flex_Id<?php echo $key ?>" value="">
           
           <td style="">
         <?php  echo $form->textField(POSITION_FLEX::model(),"[$key]FLEX_VALUE",array('size'=>60,'maxlength'=>120,"class"=>"margintxt","id"=>"FLEX_VALUE$key","value"=>"")); ?></td>           
         
           </tr>  
          <?php }  ?>       
          
          <tr><td><input type='hidden' name='FLEXdata' id='FLEXdata'></td></tr>  
          <tr><td><input type='hidden' name='FLEXcount' id='FLEXcount' value="<?php echo $nFLEX_COUNT;?>"></td></tr>   
                  </tbody></table>
            </div>
</div>
     </div>
 </div>
  

  <div id="tabs-3">
    
      <div id="Responsibility" style="width:auto;height:auto;">
          <div class="panel panel-success" style="margin-right: 5px;">
            <div class="panel-heading">
              <h3 class="panel-title">Responsibility</h3>
            </div>
       
         <div class="panel-body">       
              
         <table class="Grid_Insert_Table" id="POSITION_RESPONSIBILITY" style="width:500px;">
             <thead class="fixedHeader" style="padding-top: 0px; width: 530px;margin-left:0px; ">
                 <tr class="grid_title">
                   <th class="" style="width:240px;"> <?php echo $Getlabelname->Get_Labelname_Fnc("295"); ?> </th>
                   <th class="" style="width:285px;"> <?php echo $Getlabelname->Get_Labelname_Fnc("301"); ?> </th>
                   <th style=""></th>
                 </tr>
             </thead>
             
             <tbody id="" class="scrollContent" style="width:530px !important;height:230px !important;">
                  <?php 
     //  print_r($_POST);
            if(isset($_POST['Total_RowCount'])<>'')
            {
                $Row_count=$_POST['Total_RowCount'];
            }
            else 
            {
               $Row_count=9;
            }
             $getResponsibility_Data=POSITION_RESPONSIBILITY::model()->findAll(array('order'=>'UPPER(RESPONSIBILITY) ASC'));
                    if($Row_count<=count($getResponsibility_Data))
                    $Row_count=count($getResponsibility_Data); 
                  //  echo $Row_count;
    
       ?>
                <?php for($i=1;$i<=$Row_count;$i++){ 
                    
                   
                    try 
                    {
                        $nResponsibility_ID=array(); 
                        if(isset($_POST['POSITION_RESPONSIBILITY'][$i]["ID"])<>"")
                       {
                            $nResponsibility_ID[$i] =$_POST['POSITION_RESPONSIBILITY'][$i]["ID"];        
                            if($nResponsibility_ID[$i]=="")
                            {
                                $deletestyle="display:none";
                            }
                            else
                            {
                             //  $deletestyle="display:block;float:right;cursor: pointer;"; 
                            }
                       }
                        else if(count($getResponsibility_Data)>0 && isset($getResponsibility_Data[$i-1]["ID"])!="") 
                       {      
                          $nResponsibility_ID[$i] =$getResponsibility_Data[$i-1]["ID"];  //print_r($nResponsibility_ID[$i]);              
                          //$deletestyle="display:block;float:right;cursor:pointer";
                       }
                        else
                       {
                            $nResponsibility_ID[$i]="";
                           $deletestyle="display:none";
                       }
                      
                       
                        $nResponsibility=array(); 
                        if(isset($_POST['POSITION_RESPONSIBILITY'][$i]["RESPONSIBILITY"])<>"")
                       {
                            $nResponsibility[$i] =$_POST['POSITION_RESPONSIBILITY'][$i]["RESPONSIBILITY"];        
                            if($nResponsibility[$i]=="")
                            {
                                $deletestyle="display:none";
                            }
                            else
                            {
                             //  $deletestyle="display:block;float:right;cursor: pointer;"; 
                            }
                       }
                        else if(count($getResponsibility_Data)>0 && isset($getResponsibility_Data[$i-1]["RESPONSIBILITY"])!="") 
                       {      
                          $nResponsibility[$i] =$getResponsibility_Data[$i-1]["RESPONSIBILITY"];  //print_r($nResponsibility[$i] );              
                         // $deletestyle="display:block;float:right;cursor:pointer";
                       }
                        else
                       {
                           $nResponsibility[$i]="";
                           $deletestyle="display:none";
                       }
                       
                       
                        $nResponsibility_Type=array(); 
                        if(isset($_POST['POSITION_RESPONSIBILITY'][$i]["RESPONSIBILITY_TYPE"])<>"")
                       {
                            $nResponsibility_Type[$i] =$_POST['POSITION_RESPONSIBILITY'][$i]["RESPONSIBILITY_TYPE"];        
                            if($nResponsibility_Type[$i]=="")
                            {
                                $deletestyle="display:none";
                            }
                            else
                            {
                             //  $deletestyle="display:block;float:right;cursor: pointer;"; 
                            }
                       }
                        else if(count($getResponsibility_Data)>0 && isset($getResponsibility_Data[$i-1]["RESPONSIBILITY_TYPE"])!="") 
                       {      
                          $nResponsibility_Type[$i] =$getResponsibility_Data[$i-1]["RESPONSIBILITY_TYPE"];  //print_r($nResponsibility_Type[$i]);              
                         // $deletestyle="display:block;float:right;cursor:pointer";
                       }
                        else
                       {
                           $nResponsibility_Type[$i]="";
                           $deletestyle="display:none";
                       }
                       
                    }
                    catch (Exception $exc) 
                    {
                        echo $exc->getTraceAsString();
                    }  
                 ?>
        
                 <tr id="form_addings">
                    <td style="width:240px;text-align:left;"><?php echo $form->textField(POSITION_RESPONSIBILITY::model(),"[$i]RESPONSIBILITY",array('size'=>30,'maxlength'=>30,'style'=>'margin-left:5px;','id'=>"RESPONSIBILITY-$i",'value'=>"",'class'=>'')); ?></td>
                    <td style="width:240px; text-align:left;"><?php echo $form->textField(POSITION_RESPONSIBILITY::model(),"[$i]RESPONSIBILITY_TYPE",array('id'=>"TYPE-$i",'size'=>60,'maxlength'=>100,'style'=>'','value'=>"",'class'=>'responsibility')); ?></td> 
                    <td> <td> <span title="Delete" class="icon-remove" style="<?php echo $deletestyle; ?>" id="<?php echo "Resp_Delete-".$i;?>" name="" onclick="DeleteResponsibility(this.id)"></span></td></td>
                 </tr>
                 
                 <input type="hidden" name="Responsibility_ID<?php echo $i ?>" id="Responsibility_ID<?php echo $i ?>" value="<?php echo $nResponsibility_ID[$i]; ?>">
                 
                <?php }?>

             </tbody> 
             
         </table>
          
<!--        <table class="" id="" style="box-shadow: 0px 0px 0px 0px #c4c4c4 !important;">
            <tbody>
                
              <td id="">
                 
              <img  src="<?php //echo Yii::app()->request->baseUrl; ?>/css/images/icon_plus.png" title="Add Rows" width="16" height="16"  alt="" style="cursor: pointer;" id="plus2"/>
              <input id="Total_RowCount" type="hidden" name="Total_RowCount" value="<?php //echo $Row_count;?>">
                   </td>
            </tbody>
        </table>-->
             </div>
      </div>
  </div>
  </div>  

<!-- |||||||||||||||||||| Education_Experience ||||||||||||||||||||||||||||||||||||  -->
  <div id="tabs-4">
      <div id="Edu_Experience" style="width:auto;height:auto;">
      <div class="panel panel-success" style="margin-right: 5px;">
                    <div class="panel-heading">
                      <h3 class="panel-title">Education & Experience</h3>
                    </div>

                    <div class="panel-body" style="padding-top: 0px;">
                        <table class="" id="" style="float:left;width:1020px !important;height:260px;margin-top:20px;margin-left:10px;border-bottom-left-radius:10px;border-bottom-right-radius: 10px;  ">
                            
                            <thead class="fixedHeader" style="padding-top: 0px; width: 540px;margin-left:0px; ">
                                <tr class="grid_title">
                                  
                                  <th style="width:240px;"> <?php echo $Getlabelname->Get_Labelname_Fnc("153"); ?> </th>
                                  <th style="width:110px;"> <?php echo $Getlabelname->Get_Labelname_Fnc("308"); ?> </th>
                                  <th style="width:80px;" > <?php echo $Getlabelname->Get_Labelname_Fnc("309"); ?> </th>
                                  <th style="width:110px;"> <?php echo $Getlabelname->Get_Labelname_Fnc("310"); ?> </th>
                                  
                                </tr>
                            </thead>
                            
                           <tbody class="scrollContent" style="width:1020px !important;height:260px !important;">
  <?php 
  
    if(isset($_POST['Education_RowCount'])<>'')
            {
                $edu_Row_count=$_POST['Education_RowCount'];
            }
            else 
            {
               $edu_Row_count=9;
            }
 $getEducation_Data=EDUCATION_N_EXPERIENCE::model()->findAll(array('order'=>'UPPER(RECORD_TYPE) ASC'));
                    if($Row_count<=count($getEducation_Data))
                    $edu_Row_count=count($getEducation_Data); 
  
                    

  for($i=1;$i<=$edu_Row_count;$i++) {

    
      try
        {
            $nEdu_Exp_ID=array(); 
                        if(isset($_POST['EDUCATION_N_EXPERIENCE'][$i]["ID"])<>"")
                       {
                            $nEdu_Exp_ID[$i] =$_POST['EDUCATION_N_EXPERIENCE'][$i]["ID"];        
                            if($nEdu_Exp_ID[$i]=="")
                            {
                                $deletestyle="display:none";
                            }
                            else
                            {
                             //  $deletestyle="display:block;float:right;cursor: pointer;"; 
                            }
                       }
                        else if(count($getEducation_Data)>0 && isset($getEducation_Data[$i-1]["ID"])!="") 
                       {      
                          $nEdu_Exp_ID[$i] =$getEducation_Data[$i-1]["ID"];  //print_r($nEdu_Exp_ID[$i] );              
                          //$deletestyle="display:block;float:right;cursor:pointer";
                       }
                        else
                       {
                           $nEdu_Exp_ID[$i]="";
                           $deletestyle="display:none";
                       }
              /////////////////////////////////////////         
                       
                  $vRecord_type=array(); 
                        if(isset($_POST['EDUCATION_N_EXPERIENCE'][$i]["RECORD_TYPE"])<>"")
                       {
                            $vRecord_type[$i] =$_POST['EDUCATION_N_EXPERIENCE'][$i]["RECORD_TYPE"];        
                            if($vRecord_type[$i]=="")
                            {
                                $deletestyle="display:none";
                            }
                            else
                            {
                             //  $deletestyle="display:block;float:right;cursor: pointer;"; 
                            }
                       }
                        else if(count($getEducation_Data)>0 && isset($getEducation_Data[$i-1]["RECORD_TYPE"])!="") 
                       {      
                          $vRecord_type[$i] =$getEducation_Data[$i-1]["RECORD_TYPE"]; // print_r($vRecord_type[$i] );              
                          //$deletestyle="display:block;float:right;cursor:pointer";
                       }
                        else
                       {
                           $vRecord_type[$i]="";
                           $deletestyle="display:none";
                       }
           /////////////////////////////   
                  $nEDUCATION_ID=array(); 
                        if(isset($_POST['EDUCATION_N_EXPERIENCE'][$i]["EDUCATION_ID"])<>"")
                       {
                            $nEDUCATION_ID[$i] =$_POST['EDUCATION_N_EXPERIENCE'][$i]["EDUCATION_ID"];        
                            if($nEDUCATION_ID[$i]=="")
                            {
                                $deletestyle="display:none";
                            }
                            else
                            {
                             //  $deletestyle="display:block;float:right;cursor: pointer;"; 
                            }
                       }
                        else if(count($getEducation_Data)>0 && isset($getEducation_Data[$i-1]["EDUCATION_ID"])!="") 
                       {      
                          $nEDUCATION_ID[$i] =$getEducation_Data[$i-1]["EDUCATION_ID"]; // print_r($nEDUCATION_ID[$i] );              
                          //$deletestyle="display:block;float:right;cursor:pointer";
                       }
                        else
                       {
                           $nEDUCATION_ID[$i]="";
                           $deletestyle="display:none";
                       } 
       $getEducation_id_from_EEXp=array();                
       $getEducation_id_from_EEXp[$i] = Yii::app()->db->createCommand()
                                ->select('EDUCATION.EDUCATION')  
                                ->where("EDUCATION.ID=:EDU_id",array(':EDU_id'=>$nEDUCATION_ID[$i])) 
                                ->from('EDUCATION,EDUCATION_N_EXPERIENCE')
                                ->queryAll(); 
     // print_r($getEducation_id_from_EEXp[$i][$i-1]['EDUCATION']);//exit;
               if(isset($getEducation_id_from_EEXp[$i][$i-1]['EDUCATION']))
               {
                   $getEducation_id_from_EEXp[$i]= $getEducation_id_from_EEXp[$i][$i-1]['EDUCATION'];
                   // print_r($getEducation_id_from_EEXp[$i]);
               }
               else
               {
                  $getEducation_id_from_EEXp[$i]=""; 
               }
          ////////////////////     NO_OF_DAY     
                 $nNO_OF_DAY=array(); 
                        if(isset($_POST['EDUCATION_N_EXPERIENCE'][$i]["NO_OF_DAY"])<>"")
                       {
                            $nEDUCATION_ID[$i] =$_POST['EDUCATION_N_EXPERIENCE'][$i]["NO_OF_DAY"];        
                            if($nEDUCATION_ID[$i]=="")
                            {
                                $deletestyle="display:none";
                            }
                            else
                            {
                             //  $deletestyle="display:block;float:right;cursor: pointer;"; 
                            }
                       }
                        else if(count($getEducation_Data)>0 && isset($getEducation_Data[$i-1]["NO_OF_DAY"])!="") 
                       {      
                          $nEDUCATION_ID[$i] =$getEducation_Data[$i-1]["NO_OF_DAY"];  //print_r($nEDUCATION_ID[$i] );              
                          //$deletestyle="display:block;float:right;cursor:pointer";
                       }
                        else
                       {
                           $nEDUCATION_ID[$i]="";
                           $deletestyle="display:none";
                       }  
                       //////////////
                        $nNO_OF_DAY=array(); 
                        if(isset($_POST['EDUCATION_N_EXPERIENCE'][$i]["NO_OF_DAY"])<>"")
                       {
                            $nNO_OF_DAY[$i] =$_POST['EDUCATION_N_EXPERIENCE'][$i]["NO_OF_DAY"];        
                            if($nNO_OF_DAY[$i]=="")
                            {
                                $deletestyle="display:none";
                            }
                            else
                            {
                             //  $deletestyle="display:block;float:right;cursor: pointer;"; 
                            }
                       }
                        else if(count($getEducation_Data)>0 && isset($getEducation_Data[$i-1]["NO_OF_DAY"])!="") 
                       {      
                          $nNO_OF_DAY[$i] =$getEducation_Data[$i-1]["NO_OF_HR"]; // print_r($nNO_OF_HR[$i] );              
                         // $deletestyle="display:block;float:right;cursor:pointer";
                       }
                        else
                       {
                           $nNO_OF_DAY[$i]="";
                           $deletestyle="display:none";
                       } 
             //////////////
                        $nNO_OF_HR=array(); 
                        if(isset($_POST['EDUCATION_N_EXPERIENCE'][$i]["NO_OF_HR"])<>"")
                       {
                            $nNO_OF_HR[$i] =$_POST['EDUCATION_N_EXPERIENCE'][$i]["NO_OF_HR"];        
                            if($nNO_OF_HR[$i]=="")
                            {
                                $deletestyle="display:none";
                            }
                            else
                            {
                              // $deletestyle="display:block;float:right;cursor: pointer;"; 
                            }
                       }
                        else if(count($getEducation_Data)>0 && isset($getEducation_Data[$i-1]["NO_OF_HR"])!="") 
                       {      
                          $nNO_OF_HR[$i] =$getEducation_Data[$i-1]["NO_OF_HR"]; // print_r($nNO_OF_HR[$i] );              
                        //  $deletestyle="display:block;float:right;cursor:pointer";
                       }
                        else
                       {
                           $nNO_OF_HR[$i]="";
                           $deletestyle="display:none";
                       } 
                       //////////////
               $nRANK_OR_SCORE=array(); 
                        if(isset($_POST['EDUCATION_N_EXPERIENCE'][$i]["RANK_OR_SCORE"])<>"")
                       {
                            $nRANK_OR_SCORE[$i] =$_POST['EDUCATION_N_EXPERIENCE'][$i]["RANK_OR_SCORE"];        
                            if($nRANK_OR_SCORE[$i]=="")
                            {
                                $deletestyle="display:none";
                            }
                            else
                            {
                              // $deletestyle="display:block;float:right;cursor: pointer;"; 
                            }
                       }
                        else if(count($getEducation_Data)>0 && isset($getEducation_Data[$i-1]["RANK_OR_SCORE"])!="") 
                       {      
                          $nRANK_OR_SCORE[$i] =$getEducation_Data[$i-1]["RANK_OR_SCORE"];  //print_r($nRANK_OR_SCORE[$i] );              
                          //$deletestyle="display:block;float:right;cursor:pointer";
                       }
                        else
                       {
                           $nRANK_OR_SCORE[$i]="";
                           $deletestyle="display:none";
                       } 
        }
      catch (Exception $exc) 
        {
            echo $exc->getTraceAsString();
        } 
  
      ?>
                               
         <tr id="form_addings">
             <td style="width:240px;text-align:left;">
                    <?php //echo $form->textField(EDUCATION::model(),'EDUCATION',array('size'=>60,'maxlength'=>100));
                           $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                                            'model'=>EDUCATION_N_EXPERIENCE::model(),//'attribute'=>"EDUCATION",
                                            'id'=>"EDUCATION-".$i,
                                            //'value'=>$getEducation_id_from_EEXp[$i],
                                            'value'=>"",
                                            'name'=>"EDUCATION_N_EXPERIENCE[$i][EDUCATION]", 

                                            'source'=>$this->createUrl('QUALIFICATION_EXPERIENCE/Education_Autocomplete'),                                   
                                            'options'=>array(
                                            'minLength'=>'0', 
                                            'select'=>'js:function( event, ui ) {
                                                       // $("folio").val(ui.item.id);
                                                       // alert(ui.item.id);
                                                     //alert(ui.item.label1);
                                                     //--MEAN_FOR IN EDUCATION TABLE
                                                     //label1==Education
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
             <td style="width:0px;text-align:left;">  <?php echo $form->textField (EDUCATION_N_EXPERIENCE::model(),"[$i]NO_OF_DAY",array('id'=>"Day-$i",'size'=>60,'maxlength'=>100,'style'=>'width: 110px;text-align:right;','value'=>"",'class'=>'')); ?></td> 
             <td style="width:0px; text-align:left;"> <?php echo $form->textField (EDUCATION_N_EXPERIENCE::model(),"[$i]NO_OF_HR",array('id'=>"Hour-$i",'size'=>60,'maxlength'=>100,'style'=>'width: 80px;text-align:right;','value'=>"",'class'=>'')); ?></td> 
             <td style="width:7px; text-align:left;"> <?php echo $form->textField (EDUCATION_N_EXPERIENCE::model(),"[$i]RANK_OR_SCORE",array('id'=>"Rank-$i",'size'=>60,'maxlength'=>100,'style'=>'width:97px;text-align:right;','value'=>"",'class'=>'')); ?></td> 
             
             <td><span title="Delete" class="icon-remove" style="<?php echo $deletestyle; ?>" id="<?php echo "Resp_Delete-".$i;?>" name="" onclick=""></span></td>
         
               <input type="hidden" name="<?php echo $i?>id_EducationTable" id="<?php echo "Education_id-".$i;?>" value="">
               <input type="hidden" name="Education_label-<?php echo $i?>" id="Education_label-<?php echo $i;?>" value="">
               
                <input type="hidden" name="Edu_Exp_ID<?php echo $i ?>" id="Edu_Exp_ID<?php echo $i ?>" value="<?php echo $nEdu_Exp_ID[$i]; ?>">
         </tr>                      
           <?php } ?>
              <input id="edu_Row_count" type="hidden" name="edu_Row_count" value="<?php echo $edu_Row_count;?>">                   
                           
              </tbody>
            </table>
        </div>
      </div></div>
  </div>
    
  <div id="tabs-5">
           
  <!--  ******* ********* *********KEY COMPETENCY ************ ********** ****** ******-->
   <div id="KEY_COMPENTENCY" style="width:auto;height:auto;float:left;">
          
        <div class="panel panel-success" style="margin-right: 5px;">
            <div class="panel-heading">
              <h3 class="panel-title">Key Competency</h3>
            </div>

            <div class="panel-body" style="padding-top: 0px;">

              <table class="" id="Key-Competency" style="float:left;width:1020px !important;height:260px;margin-top:20px;margin-left:10px;border-bottom-left-radius:10px;border-bottom-right-radius: 10px;  ">

                <tbody class="scrollContent" style="width:1020px !important;height:260px !important;">
                  
        <?php 
            

         $GET_Basicdefinition = new Get_Data_From_Basic_Definition_Cls(); 
         $GET_Basic_definition =$GET_Basicdefinition->ArGet_Data_From_BasicDef('KEY COMPETENCY');
         $Basic_definition_Competency=count($GET_Basic_definition);
    
         foreach ($GET_Basic_definition as $key => $value)  {   ?>
             <tr id="" class="">
                  <td class="" style="">
                      <span class="spanClass"> <?php echo $value['DESCRIPTION']; ?> </span></td>
           
           <input type="hidden" name="Descript<?php echo $key;?>" id="Descript<?php echo $key;?>" value="<?php echo $value['DESCRIPTION'];?>">         
           <input type="hidden" name="KEY_COMPENTENCY_Id<?php echo $key ?>" id="KEY_COMPENTENCY_Id<?php echo $key ?>" value="">
           
           <td style="">
         <?php  echo $form->textField(KEY_COMPENTENCY::model(),"[$key]COMPENTENCY_ID",array('size'=>60,'maxlength'=>120,"class"=>"margintxt","id"=>"COMPENTENCY_ID-$key","value"=>"")); ?></td>           
         
           </tr>  
          <?php }  ?>       
          
         
          <tr><td><input type='hidden' name='Competency' id='Competency' value="<?php echo $Basic_definition_Competency;?>"></td></tr>   
                  </tbody>
                     </table>
                    </div>
        </div>
</div>
   
  </div>     
      
  <!--  ******* ********* *********KEY COMPETENCY ************ ********** ****** ******--> 
  
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
            <table class="tbl_btn" id="table_bottom_bg" style=" border: none !important;">
              <tbody>
                <tr id="table_bottom_bg">
                  <td class="btn_save" style="padding-bottom: 5px;padding-top: 5px;padding-right:10px;">
                      
                      <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"clear",'size'=>'small','icon'=>'icon-refresh','label'=>$Getlabelname->Get_Labelname_Fnc("104"),'id'=>'reset')); ?>  
                    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"submit",'size'=>'small', 'label'=>$model->isNewRecord ?$Getlabelname->Get_Labelname_Fnc("103") : $Getlabelname->Get_Labelname_Fnc("103"),'id'=>'demo_save','icon'=>'icon-thumbs-up',)); ?>
                  
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