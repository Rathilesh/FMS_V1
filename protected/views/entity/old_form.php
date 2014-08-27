<style>
    .logo 
    {
        width: 178px;
        height: 155px;
        float: left;
        margin: 0 auto;
        border: 1px solid #CACACA;
        background-color: white !important;
        border-radius: 15px;
        background-image: url("../../images/logo1.png");
        background-position: -1px 9px;
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }
    .orginfo
    {
         height: 155px !important;
         width:700px !important;
    }
    .th_orgcode
    {
        width:100px !important;
    }
    .td_orgcode
    {
       width:100px !important ; 
    }
    .td_org 
    {
        padding-left: 13px !important;
        width: 163px !important;
    }
    .th_org
    {
        padding-left: 8px;
    }
    .policydrpdown 
    {
        width:244px !important;
    }
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
        border-bottom-left-radius: 0px;
        border-bottom-right-radius: 0px;
    }
    .org_relation
    {
         height: 96px;
         width: 702px;
    }
    .org_basic
    {
         height: 96px;
         width: 702px;
         padding: 6px !important;
         padding-left: 0px !important;
         padding-right: 0px !important;
    }
    .org_name
    {
        width: 560px !important;
    }
    .org_shortname
    {
        width: 163px !important;
    }
    .addrelation
    {
        padding-top: 8px !important;
        text-align :right !important;
        padding-right: 4px !important;
    }
    .td_orgdate
    {
        text-align: left !important;
        padding-left: 20px;
    }
    .drpdown 
    {
       width:486px !important;
       margin-left: 4px !important;
    }
    .th_regorg
    {
        padding-left: 25px;
        width: 92px;
    }
    .datecol
    {
        width:95px !important; 
        
    }
    .datecollast
    {
        width:95px !important; 
        margin-right: 4px;        
    }
    .padleft
    {
        padding-left:4px;
        font-weight: bold;
        background: rgb(236, 236, 236);
    }
    .paddate
    {
        padding-left:4px;
        
        background: rgb(236, 236, 236);
    }
    .accordioncontent
    {
        background: rgb(236, 236, 236);
        height:auto !important;
        
    }
    legend 
    {
        margin-bottom: 10px !important;
    }
    #inner_org_contents_basic
    {
        float: left;
        width: 911px;
        height: auto;
        border: 1px solid rgb(199, 199, 199);
        box-shadow: 0px 0px 22px 3px #c4c4c4;
        margin: 14px 4px;
        border-radius: 5px;
        padding-bottom: 10px;
        background-color: #ECECEC;
        margin-left: 10px;
    }
    .tabcontent
    {
       padding: 0px !important;
       float:right;
       padding-right: 9px !important;
    }
    #tabs
    {
        padding: 0px;
        height:auto;
        background:inherit;
       
    }
    #loadImg{position:absolute;z-index:999;background-image: url("../../images/ajax-loader.gif");}
    #loadImg div{display:table-cell;width:950px;height:633px;background:#fff;text-align:center;vertical-align:middle;}

    .ui-tabs .ui-tabs-nav {
        border-bottom: none !important;
    }
    .ui-state-default ui-corner-top {
        border: 1px solid black !important;
    }
    .ui-tabs .ui-tabs-nav li a { 
    padding: 0 21px !important;
    margin-right: -2px !important;
    }
    .ui-tabs .ui-tabs-nav li.ui-tabs-active :after {
           left: -32% !important;
        border-color: transparent #2BB87B transparent transparent !important;
    }
    .ui-tabs .ui-tabs-nav .last_li.ui-tabs-active :after 
    {
        border-width: 0px !important;     
    }
    .ui-tabs .ui-tabs-nav li.ui-tabs-active, .ui-tabs .ui-tabs-nav li.ui-state-disabled a, .ui-tabs .ui-tabs-nav li.ui-state-processing a {
        margin-bottom: 2px !important;
    }
   
    .ui-tabs-vertical .ui-tabs-nav { padding: .2em .1em 1px .2em; float: left; width: 8em; }
    .ui-tabs-vertical .ui-tabs-nav li { clear: left; width: 100%; border-bottom-width: 1px !important; border-right-width: 0 !important; margin: 0 -1px .2em 0; }
    .ui-tabs-vertical .ui-tabs-nav li a { display:block; }
    .ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active { padding-bottom: 0; padding-right: .1em; border-right-width: 1px; border-right-width: 1px; }
    .ui-tabs-vertical .ui-tabs-panel { padding: 1em;  width:702px;min-height:160px;}
    .ui-tabs .ui-tabs-nav li a {margin-bottom:0px !important}
    .ui-tabs .ui-tabs-nav li { float: right !important; }
    .tabsbox
    {
      padding-right:12px;
      float:right;
      background:rgb(231, 231, 231);
      height:201px;
      padding-left: 17px;
      border: 1px solid #C2BDBD;
      border-radius:5px;
      padding-bottom:61px;
      margin-right: 9px;
      margin-top :13px;
      padding-top:5px;
      box-shadow: 0px 0px 22px 3px #c4c4c4;
    }
    .gridcontent
    {
      border: 1px solid #D3D0D0;
      border-radius: 10px;
      padding-bottom: 6px;
      box-shadow: 0px 0px 22px 3px #c4c4c4;      
      background: white;     
    }
    .ui-tabs .ui-tabs-nav li a, .ui-tabs-collapsible .ui-tabs-nav li.ui-tabs-active a {
        font-weight:bold !important;
    }
    .btnholders
    {
        float: right !important;
        padding: 6px;
    }
    .tbl_btn
     {
        width:1077px;
        border: 1px solid #D3D0D0;
        border-radius: 10px;
        border-top:none;
        border-top-left-radius: 0px;
        border-top-right-radius: 0px;
        box-shadow:0px 6px 15px 0px #c4c4c4;
     }
    .ui-accordion .ui-accordion-header 
    {
        padding: 4px 0 7px 26px;
        vertical-align: middle;
    }
    .contactleft
    {
        border:1px solid rgb(197, 193, 193);
        width: auto;
        border-radius: 5px;
        box-shadow:0px 6px 15px 0px #c4c4c4;
    }
    .contactright
    {
        float: right;
    }
    .contactline
    {
        padding:10px 0 10px 10px;
    }
    .addressline
    {
/*        width:200px;*/
        width: 295px;
    }
    .addresshead
    {
        padding: 0px 0 10px 0px;

    }
    .padbottom
    {
        padding-bottom: 2px;
    }
    .inputcontact
    {
        width:197px;
    }
    .contactvariant
    {
        float: left !important;
        padding-left: 11px;

    }
    .checkboxwidth
    {
        width:105px;
    }
    .currencydrpdown
    {
        width: 265px;
        margin-left: 4px;  
    }
    .policydrpdown
    {
        width: 251px;
    }
    .padright
    {
        padding-right:5px;
    }
    .policydates 
    {
        width:95px;
    }
 
    .editable-buttons .editable-cancel 
    {
      margin-left: 1px !important;
      margin-top: 10px;
    }
    .editable-buttons .btn
    {
        display:block !important;
    }
    .editable-input {
        padding-bottom: 14px;
    }
    .wysihtml5-sandbox
    {
        width: 617px !important;
        resize:both;
    }
    .editable-click, a.editable-click, a.editable-click:hover 
    {
         border-bottom:1px solid #cccccc !important;
    }
    .popover-title
    {
        font-weight:bold !important;
    }
    .input-large
    {
        min-width: 617px !important; 
      width: auto;  
      resize:both;
    }
    .editable-container.popover
    {
        z-index: 900000;
        width: 705px !important;
    }
    .expandclass
    {
        float:right;
         background-image: url("../../images/expanddiv.png");
         background-repeat: no-repeat;
         padding-right: 18px;
         cursor:pointer
    }
    .marginleft
    {
        margin-left:4px;
    }
    input, textarea{
        box-shadow: none !important;
    }
    .flexinput
    {
        width:200px;
    }
    .rightgrid
    {
        margin-right: 4px;
    }
    .bankleft
    {
        padding: 11px 5px 5px 8px;
    }
    .bankright
    {
        padding: 11px 5px 5px 8px;
    }
    .bottompad
    {
        padding-bottom:3px;
    }
    #create-branch
    {
        float: right;
        padding-right: 5px;
        padding-top: 7px;
        font-style: italic;
        font-weight: bold;
    }
    .div_missiontext
    {
        padding: 10px;
        background: white;   
        border: 1px solid #cacaca;
        border-radius: 10px;
    }
    .div_visiontext
    {   
        padding: 10px;
        background: white;   
        border: 1px solid #cacaca;
        border-radius: 10px;
    }
    .missiondiv,.visiondiv
    {
        margin-top :15px;
        z-index: 9999;
    }
    .missiondiv:before,.visiondiv:before 
    {
        content: '';
        display: block;
        position: absolute;
        top: -27px;
        left: 3%;
        width: 0;
        height: 0;
        border-color: transparent transparent #D5D2D2 transparent;
        border-style: solid;
        border-width: 14px;
    }
    .missiondiv:after,.visiondiv:after 
    {
        content: '';
        display: block;
        position: absolute;
        top: -21px;
        left: 3.6%;
        width: 0;
        height: 0;
        border-color: transparent transparent white transparent;
        border-style: solid;
        border-width: 11px;
    }
    .scrollbody
    {
        width:100%;
        height: 216px;
        overflow-y: scroll;
        float: left
    }
    #Addinput 
    {
        -moz-appearance: textfield;
        -webkit-appearance: textfield;
        background-color: white;
        background-color: -moz-field;
        border: 1px solid darkgray;
        box-shadow: 1px 1px 1px 0 lightgray inset;
        font: -moz-field;
        margin-top: -5px;
        padding: 0px 5px;
        height: 18px;
        width: 227px;
        margin: 1px 0px 4px 1px;
        border-radius: 5px;
        text-align: center;
        cursor:pointer;
    }
    .wysihtml5-sandbox 
    {
       height:100px !important;
       width:auto;
    }
    #Iframe
    {
      height: 550px;
      width:700px;
    }
    #dialogBtn
    {
        border-radius: 10px;
        background-color: rgb(234, 237, 240);
    }
    #ui-datepicker-div
    {
        z-index:999 !important;
    }
</style>  
<script>
$(document).ready(function(){

    $(".autofocus").bind('focus', function(){ 
        $(this).autocomplete("search"); 
    }); 
             
     $("#Branch").bind('focus', function(){ 
        $(this).autocomplete("search"); 
    }); 
    //For opening bank form in iframe.........
    var iframe = $('<iframe border=0 id="Iframe" name="Iframe" src="<?php echo Yii::app()->request->baseUrl;?>/index.php/bank_view/create?iframe=1" scrolling="no" noresize frameborder="1" ></iframe>');
    var dialog = $("<div></div>").append(iframe).appendTo("body").dialog({
        autoOpen: false,
        modal: true,
        show: "fade",
        hide: "fade",
        resizable: false,
        title:'Create Bank',
        width: 'auto',
        height: 'auto',
        close: function () {
          
        }
    });
    
    $('#addbranch').hide();
    $('#dialogBtn,#Addinput').click(function(){    
        dialog.dialog().dialog("open");
        return false;
    }); 
    $('#Addinput').click(function(){ 
        $('#addbranch').hide();
    });
    
    $('#Iframe').load(function() {         

    $(this).contents().find('#demo_save').click(function() {

              var childiFrame = document.getElementById("Iframe"); 
              var innerDoc = childiFrame.contentDocument || childiFrame.contentWindow.document;
                // Get the Control inside iFrame Document.
              var BNAME_party = innerDoc.getElementById("BNAME");  
              var MBNAME_party = innerDoc.getElementById("MBNAME"); 
              var SHORT_NAME_party = innerDoc.getElementById("SHORT_NAME"); 
                // Get value of Control
              var value_BNAME = BNAME_party.value;
              var value_MBNAME = MBNAME_party.value;
              var value_SHORT_NAME = SHORT_NAME_party.value;                   
              
              if((value_BNAME!="")&&(value_MBNAME!="")&&(value_SHORT_NAME!=""))
              {           
                    $("#Branch").val(value_BNAME);
                    $("#txt_bank").val(value_MBNAME);
              }
              else
              {                
                  $("#Branch").val("");
                  $("#txt_bank").val("");
              }           
          });       
    });

    $("#Branch").change(function()
    {        
        var value=$('#Branch').val();
        if(value=="")
        {
          $('#addbranch').hide();
        }
    });  

   $("#Branch").autocomplete( {   
       minLength: 0,       
       source: function( request, response ) {
       $.ajax({        
            url: "<?php echo Yii::app()->request->baseUrl; ?>/index.php/Party/BranchAutoComplete",       
            type: "POST",
            data:{term:request.term},
            dataType: "json",       
            success: function( data ) {           
                if(data.length==0) 
                { 
                    var value=$("#Branch").val();                 
                    if(value!="")
                    {
                       $('#addbranch').show();
                       $('#Addinput').html("<b>Add</b>&nbsp;"+value);
                    }
                }
                else 
                {
                    $('#addbranch').hide();
                    response( $.map( data, function( item ) {
                        return {
                                label: item.label,
                                label1: item.label1,
                                value: item.label,value1: item.label1,
                                id:item.id,id1:item.id1,                       
                               }
                   }));
                }
           },             
    });
    
   },
   select:function(event, ui) {
 
              $("#txt_bank ").val(ui.item.label1);
              $("#hdn_bankid").val(ui.item.id1);
             },                         
       }); 
    ///////////////////////////////////////////////
    
    //For tabs..........
    
    $( "#tabs" ).tabs( { show: { effect: "slide", direction: "right", duration: 500 }});
    $( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
    $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
    $( "#accordion" ).accordion({
            collapsible: true 
    });
    
    ///////////////////////////////////////////////
    
    //For text editor(Mission,Vision).....
    
    toolbar={
         "font-styles": true, //Font styling, e.g. h1, h2, etc.
         "emphasis": true, //Italics, bold, etc.
         "lists": true, //(Un)ordered lists, e.g. Bullets, Numbers.
         "html": true, //Button which allows you to edit the generated HTML.
         "link": false, //Button to insert a link.
         "image": false, //Button to insert an image.
         "color": true //Button to change color of font

    };
    $('.txt_Mission').wysihtml5();
    $('.txt_Vision').wysihtml5();
    $("#btn_Mission").click(function() { 

      if ($('.visiondiv').css('display') != 'none') {
        $('.visiondiv').css('display','none');
      }  
      if ($('.missiondiv').css('display') == 'none') {                 
        $('.missiondiv').css('display','block');
      }
      else{
          $('.missiondiv').css('display','none');
      }               
      return false;
      
    });
    
    $("#btn_Vision").click(function() { 
        
     if ($('.missiondiv').css('display') != 'none') {
        $('.missiondiv').css('display','none');
     }        
     if ($('.visiondiv').css('display') == 'none') {        
        $('.visiondiv').css('display','block');
     }
     else{
         $('.visiondiv').css('display','none');
     }            
     return false;
     
 });
///////////////////////////////////////////////

//Expand div for Policy tab............
    
        $('#btn_Expand').toggle(function() {           
            $('#expanddiv').css({'position':'absolute','z-index':'100000','background-color': 'rgb(247, 247, 247)','border': '6px solid #979494','-webkit-border-radius': '8px','border-radius': '8px','-webkit-box-shadow': '0px 0px 22px 3px #c4c4c4','box-shadow': '0px 0px 22px 3px #c4c4c4','padding': '16px 24px 0px 51px'});
            $('#expanddiv').stop().animate({               
                left   : '24%',
                top    : '-49%',
                width  : '734',
                height : '472'
            }, 800,function(){
                 var rows = $('#tbl_policy tr');
                 rows.show();
                 if($("#hdn_PolicyCurrentCount").val() < 15)
                     $("#hdn_PolicyCurrentCount").val("15");
                  $(".myClass").css("background-color", "#00FFFF");                 
                  $(".scrollbody").css("height","383px");
            });
             $('#expanddiv').css('overflow','visible');
             
             
             
            },function() {          
            
            $('#expanddiv').stop().animate({
                
                left: '19.5%',
                top: '38%',
                width  : '702',
                height : '266'
                
            }, 800,function(){
                $('#expanddiv').css('position','');
                $('#expanddiv').css({'overflow':'visible','background-color': 'none','border': '0px','border-radius':'5px','-webkit-border-radius': 'none','-webkit-box-shadow': 'none','box-shadow': 'none'});
              $('.expandclass').css('background-image','url("../../images/expanddiv.png")');
               
            });
             $('.scrollbody ').css('height', '208px'); 
            $('#expanddiv').css('padding', '0px'); 
            var rows = $('#tbl_policy > tbody > tr').not(':first-child').not(':last-child');
            var showindex=8;
            rows.find('input, select').each(function(index) {
               if($(this).attr('value')!="")
                   {
                       showindex=$('#tbl_policy tr').index($(this).closest('tr'));                     
                   } 
            });
            if(showindex-1>=8)
                showindex=showindex-1
            
            
            console.log("show"+showindex);
            rows.each(function(index) {
             if(index+1>=showindex) 
                 {
                  console.log("hide"+index);
                  $(this).hide();
                 }
            });
             if(showindex>= 8)
                  $("#hdn_PolicyCurrentCount").val(showindex);
             else
                  $("#hdn_PolicyCurrentCount").val("8");
              //$(".scrollbody").css("height","89px");
              
        });
        
        
//COMMON CLONE.......
        function CloneTable(hidden,table)
        {
            var prevId=$("#"+hidden).val();  
            var newIDSuffix = ":"; 
            var cloneEntity = $("#"+ table +" tbody>tr:last").prev().prev().clone();
            var newindex=parseInt(prevId)+1; 
            $("#"+hidden).val(newindex);
            cloneEntity.find('input, select,img').each(function() {            
                var id = $(this).attr('id');
                id = id.replace(/[0-9]/, newIDSuffix);
                id = id.replace(/[0-9]/g, "");
                id = id.replace(newIDSuffix, newindex); 
                $(this).attr('id', id);   
                
                var name = $(this).attr('name');
                name = name.replace(/[0-9]/, newIDSuffix);                
                name = name.replace(/[0-9]/g, "");                
                name = name.replace(newIDSuffix, newindex);                              
                $(this).attr('name', name);  
                if($(this).hasClass("hasDatepicker"))
                {   
                  $(this).removeClass('hasDatepicker').datepicker({dateFormat:'dd/mm/yy',minDate: 0});   
                }
            });
            
            cloneEntity.insertAfter($("#"+ table +" tr:last").prev()).find( 'input:text' ).attr('value',''); 
        }
/////////////////////

/////////////////////////////////

//Cloning Entity Type.......

        $("#btn_AddType").click(function() { 
            
            CloneTable("hdn_EntityType","tbl_OperationType");           
           
        });
 //////////////////////////////////////////////////
 
 //Cloning Calender...
 
  $("#btn_AddCalender").click(function() { 
      
            CloneTable("hdn_CalenderCount","tbl_EntityCalender");
         
   });
 /////////////////////////////////////////////
 
  //Cloning Currency...
 
  $("#btn_AddCurrency").click(function() { 
               CloneTable("hdn_CurrencyCount","tbl_EntityCurrency");
   });
 /////////////////////////////////////////////
 
 //Cloning Policy...
 
  $("#btn_AddPolicy").click(function() { 
            
            var prevId=$("#hdn_PolicyCurrentCount").val();  
            
            var newIDSuffix = ":"; 
            var newindex=parseInt(prevId)+1; 
            var cloneEntityPolicy = $("#tbl_policy tbody>tr:last").prev().prev().clone().attr("id", "tr_policy-" + newindex);
            
            $("#hdn_PolicyCurrentCount").val(newindex);
           // console.log(newindex);
            if(newindex>=15)
            {
                    cloneEntityPolicy.find('input, select,img').each(function() {            
                        var id = $(this).attr('id');
                        id = id.replace(/[0-9]/, newIDSuffix);
                        id = id.replace(/[0-9]/g, "");
                        id = id.replace(newIDSuffix, newindex); 
                        $(this).attr('id', id);   
                         $(this).show();
                        var name = $(this).attr('name');
                        name = name.replace(/[0-9]/, newIDSuffix);                
                        name = name.replace(/[0-9]/g, "");                
                        name = name.replace(newIDSuffix, newindex);                              
                        $(this).attr('name', name);  
                        if($(this).hasClass("hasDatepicker"))
                        {   
                          $(this).removeClass('hasDatepicker').datepicker({dateFormat:'dd/mm/yy',minDate: 0});   
                        }
                    });

                    cloneEntityPolicy.insertAfter($('#tbl_policy tr:last').prev()).find( 'input:text' ).attr('value','');             
                    $('#tbl_policy tr:last').prev().show();
           }
           else
           {  
               
                $('#tr_policy-'+newindex).show();
           }
               
     });
 /////////////////////////////////////////////
});

function SaveEntity()
{
    alert("hi");
    var orgName=$("#ENTITY_NAME").val().trim();  
    var orgCode=$("#SHORTNAME").val().trim();
    var registerdDate=$("#REGISTERED_ON").val().trim();
    
    if(orgName=="")
    {
        GetStaticAlert("20190");
        return false;
    }
    if(orgCode=="")
    {
        GetStaticAlert("20191");
        return false;
    } 
    if(registerdDate=="")
    {
        GetStaticAlert("20192");
        return false;
    }
    if(!ValidateDate(registerdDate))
    {
        GetStaticAlert("20193");
        return false;
    }
    return false;
}
</script>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/editor/src/bootstrap-wysihtml5.css"></link>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/editor/lib/js/wysihtml5-0.3.0.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/editor/src/bootstrap-wysihtml5.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/editor/lib/css/prettify.css"></link>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/editor/lib/js/prettify.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/custom_jquery/validation_v1.js" type="text/javascript"></script>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'entity-form',
	'enableAjaxValidation'=>false,
)); 

require_once("popupdialog.php");
$Getlabelname =new Get_Labelname_Cls();

if(isset($_POST['hdn_EntityType'])<>'')        
    $relationcount=$_POST['hdn_EntityType'];
else
    $relationcount=8;

if(isset($_POST['hdn_CalenderCount'])<>'')        
    $calendercount=$_POST['hdn_CalenderCount'];
else
    $calendercount=8;

if(isset($_POST['hdn_CurrencyCount'])<>'')        
    $currencycount=$_POST['hdn_CurrencyCount'];
else
    $currencycount=8;
//if(isset($_POST['hdn_PolicyCount'])<>'')        
//    $policycount=$_POST['hdn_PolicyCount'];
//else
    $policycount=15;

$Entity_Id="";
 ?>
<div class="organisation" id="entitywrapper"> 
    <div class="step">&nbsp;
    </div>
    <div id="tabs">     
               
        <div class="tabsbox">   
    <ul>
        <li><a href="#tabs-basic"><?php echo $Getlabelname->Get_Labelname_Fnc("198");?></a></li>
        <li><a href="#tabs-contact"><?php echo $Getlabelname->Get_Labelname_Fnc("199");?></a></li>
        <li><a href="#tabs-bank"><?php echo $Getlabelname->Get_Labelname_Fnc("137");?></a></li>
        <li><a href="#tabs-calender"><?php echo $Getlabelname->Get_Labelname_Fnc("159");?></a></li>
        <li><a href="#tabs-currency"><?php echo $Getlabelname->Get_Labelname_Fnc("160");?></a></li>
        <li><a href="#tabs-policy"><?php echo $Getlabelname->Get_Labelname_Fnc("125");?></a></li>
        <li><a href="#tabs-more"><?php echo $Getlabelname->Get_Labelname_Fnc("200");?></a></li>
    </ul> 
            </div>
    

               <div id="inner_org_contents_basic">
                   <div width="15%" style="float:left;padding: 15px 0 0 10px;">
                       <div class="logo">
                       </div>
                       <div style="width:20%">
                                <table style="padding: 11px 0 0 25px;">
                                        <tr>
                                            <td>
                                                
                                                <a href="#" id="btn_Mission" class="btn btn-small"><i class="icon-plane"></i> Mission</a>
                                                <div class="missiondiv" style="display:none; position: absolute;">
                                                <div class="arrow-up_editor"></div>
                                                <div class="div_missiontext" >
                                                    <textarea id="txt_Mission" class="txt_Mission"></textarea>
                                                </div>
                                                </div>
                                             </td>
                                            <td style="padding:5px"><a href="#" id="btn_Vision" class="btn btn-small"><i class="icon-eye-open"></i> Vision</a>
                                                <div class="visiondiv" style="display:none; position: absolute;">
                                                    <div class="arrow-up_editor"></div>
                                                    <div class="div_visiontext" >
                                                        <textarea id="txt_Vision" class="txt_Vision"></textarea>
                                                    </div>
                                                 </div>
                                            </td>
                                        </tr>
                                </table>                           
                         </div>
                    </div>
                    <div>
                                <table class="org_basic">
                                    <tr>
                                        <th class=""><?php echo $Getlabelname->Get_Labelname_Fnc("155");?></th>
                                        <td class="td_org" colspan="3">
                                           
                                        <?php 
                                                $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                                                     'model'=>$model,
                                                     'name'=>"ENTITY[NAME]",
                                                     'id'=>"ENTITY_NAME",                                     
                                                     'source'=>$this->createUrl('Entity/FillEntity'),                                   
                                                     'options'=>array(
                                                               'minLength'=>'0',                                               
                                                               'change'=>'js:function( event, ui ) {                                           
                                                                           if (!ui.item) {

                                                                            }
                                                                }', 
                                                               ),
                                                              'htmlOptions'=>array(
                                                              'class'=>'org_name','maxlength' => 100                                                  
                                                            ),
                                                 ));
                                         ?>
                                         <input id="Entity_Id" type="hidden" name="Entity_Id"  value="<?php echo $Entity_Id;?>">     
                               
                                        </td>                   
                                    </tr>
                                    <tr>
                                        <th class=""><?php echo $Getlabelname->Get_Labelname_Fnc("144");?></th>
                                        <td class="td_org"><?php echo $form->textField($model,"SHORT_NAME",array("class"=>"org_shortname","id"=>"SHORTNAME",'maxlength' => 30)); ?></td>                   

                                        <th class="th_regorg"><?php echo $Getlabelname->Get_Labelname_Fnc("145");?></th>
                                        <td class="td_orgdate">                            
                                            <?php              
                                                  $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model,"attribute"=>"REGISTERED_ON",
                                                  'options' => array('dateFormat'=>'dd/mm/yy','minDate'=>'0','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                                  'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"REGISTERED_ON",'class'=>'datecol')));
                                            ?>                         
                                        </td>                                     
                                    </tr>                                             
                                </table> 
                          <div id="tabs-basic" class="tabcontent">      
                              <fieldset>
                                <table id="tbl_OperationType" cellspacing="0" cellpadding="0" class="org_relation gridcontent">
                                    <thead class="fixedHeader">
                                        <tr>
                                            <th width="705" style="text-align: center;border-radius: 5px;border-bottom-left-radius: 0px;border-bottom-right-radius: 0px;" colspan="3"><div><?php echo $Getlabelname->Get_Labelname_Fnc("146");?>
                                             <img title="Add" src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/icon_plus.png" class="clonerow" id="btn_AddType">  </div>
                                            </th>
                                        </tr>
                                        
                                    
                                        <tr>
                                            <td class="padleft" width="486"><?php echo $Getlabelname->Get_Labelname_Fnc("147");?></td>
                                            <td class="padleft" width="92"><?php echo $Getlabelname->Get_Labelname_Fnc("126");?></td>
                                            <td class="padleft"><?php echo $Getlabelname->Get_Labelname_Fnc("127");?></td>
                                        </tr>
                                        </thead>
                                    <tbody class="scrollbody" style="height:216px !important">
                                        <?php for($i=1;$i<=$relationcount;$i++) { ?>
                                        <tr>
                                            <td>
                                                <?php                                                       
                                                  echo $form->dropDownlist($model_type,"[$i]OPERATION_TYPE",array('Management'=>'Management','Legal'=>'Legal'),array('prompt'=>'Select',"id"=>"OPERATION_TYPE-$i",'class'=>'drpdown paddate','style'=>'background-color: white;height: 27px;')); 
                                                ?>                                                  
                                            </td>
                                            <td>
                                                <?php              
                                                      $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model_type,"attribute"=>"[$i]WEF",
                                                      'options' => array('dateFormat'=>'dd/mm/yy','minDate'=>'0','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                                      'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"WEF-$i",'class'=>'datecols paddate')));
                                                ?>             
                                            </td>
                                            <td>
                                                <?php              
                                                      $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model_type,"attribute"=>"[$i]WET",
                                                      'options' => array('dateFormat'=>'dd/mm/yy','minDate'=>'0','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                                      'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"WET-$i",'class'=>'datecollast paddate')));
                                                ?> 
                                            </td>
                                        </tr>
                                        <?php } ?>
                                        <tr style="display:none">
                                            <td colspan="3" class="addrelation">
                                                
                                                 <input id="hdn_EntityType" type="hidden" name="hdn_EntityType" value="<?php echo $relationcount; ?>">
                                            </td>
                                        </tr>
                                    </tbody>
                            </table>
                        
                        </div>
                    </div>
            </fieldset> 
      
      <div id="tabs-contact" class="tabcontent">
          <fieldset>
                <div id="accordion">

                     <?php $getAddress=  Basic_definition::model()->findAll(array("condition"=>"DFCTG_DEFINITION_TYPE='ENTITY_CONTACT'")); 
                     
                            for($i=1;$i<=count($getAddress); $i++){  ?> 
                               <h3><?php echo $getAddress[$i-1]['DESCRIPTION']; ?></h3>
                              <div class="accordioncontent">
                                   <div class="contactleft">
                                       <table id="tbl_addressline"class="contactline">
                                          
                                            <tr>
                                                <th class="addresshead"><?php echo $Getlabelname->Get_Labelname_Fnc("158");?></th>
                                                <th class="addresshead">&nbsp;</th>
                                            </tr>
                                          
                                          
                                           <tr>
                                               <td class="padbottom"><?php echo $form->textField($model_contact,"[$i]LINE1",array("class"=>"addressline","id"=>"LINE1-$i",'maxlength' => 60,)); ?></td>
                                               
                                               <td rowspan="5">
                                                   <table>
                                                       <tr>                                                          
                                                            <th class="addresshead"><?php echo $Getlabelname->Get_Labelname_Fnc("156");?></th>                                                        
                                                            <td><?php echo $form->textField($model_contact,"[$i]MOBILE_PHONE",array("class"=>"inputcontact","id"=>"MOBILE_PHONE-$i",'maxlength' => 50,)); ?></td>
                                                       </tr>
                                                       <tr>                                                          
                                                            <th class="addresshead"><?php echo $Getlabelname->Get_Labelname_Fnc("110");?></th>                                                        
                                                            <td><?php echo $form->textField($model_contact,"[$i]TELEPHONE",array("class"=>"inputcontact","id"=>"TELEPHONE-$i",'maxlength' => 100,)); ?></td>
                                                       </tr>
                                                       <tr>                                                          
                                                            <th class="addresshead"><?php echo $Getlabelname->Get_Labelname_Fnc("111");?></th>                                                        
                                                            <td><?php echo $form->textField($model_contact,"[$i]FAX",array("class"=>"inputcontact","id"=>"FAX-$i",'maxlength' => 50,)); ?></td>
                                                       </tr>
                                                       <tr>                                                          
                                                            <th class="addresshead"><?php echo $Getlabelname->Get_Labelname_Fnc("112");?></th>                                                        
                                                            <td><?php echo $form->textField($model_contact,"[$i]EMAIL",array("class"=>"inputcontact","id"=>"EMAIL-$i",'maxlength' => 100,)); ?></td>
                                                       </tr>
                                                       <tr>                                                          
                                                            <th class="addresshead"><?php echo $Getlabelname->Get_Labelname_Fnc("157");?></th>                                                        
                                                            <td><?php echo $form->textField($model_contact,"[$i]URL",array("class"=>"inputcontact","id"=>"URL-$i",'maxlength' => 100,)); ?></td>
                                                       </tr>
                                                   </table>
                                               </td>
                                           </tr>
                                           <tr>
                                               <td class="padbottom"><?php echo $form->textField($model_contact,"[$i]LINE2",array("class"=>"addressline","id"=>"LINE2-$i",'maxlength' => 60)); ?></td>
                                           </tr>
                                           <tr>
                                               <td class="padbottom"><?php echo $form->textField($model_contact,"[$i]LINE3",array("class"=>"addressline","id"=>"LINE3-$i",'maxlength' => 60)); ?></td>
                                           </tr>
                                           <tr>
                                               <td class="padbottom"><?php echo $form->textField($model_contact,"[$i]CITY",array("class"=>"addressline","id"=>"CITY-$i",'maxlength' => 60,'placeholder'=>'--City--')); ?></td>
                                           </tr>
                                           <tr>
                                               <td class="padbottom">
                                                   <?php 
                                                        $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                                                             'model'=>$model_contact,
                                                             'name'=>"ENTITY_CONTACT[$i][COUNTRY]",
                                                             'id'=>"COUNTRY-$i",                                                             
                                                             'source'=>$this->createUrl('Party/CountryAutocomplete'),                                   
                                                             'options'=>array(
                                                                       'minLength'=>'0',                                               
                                                                       'change'=>'js:function( event, ui ) {                                           
                                                                                   if (!ui.item) {
                                                                                        $(this).val("");                                                                       
                                                                                    }
                                                                        }', 
                                                                       ),
                                                                      'htmlOptions'=>array(
                                                                      'class'=>'autofocus addressline','placeholder'=>'--Country--'                                                  
                                                                    ),
                                                              ));
                                                    ?>   
                                               </td>
                                           </tr>
                                          
                                       </table>
                                   </div>
                                   <div class="contactright">
                                       <table style="padding:10px 0 0 2px">
                                           <tr>
                                               <th><?php echo $Getlabelname->Get_Labelname_Fnc("126");?></th>
                                               <td class="contactvariant">
                                                    <?php              
                                                      $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model_contact,"attribute"=>"[$i]WEF",
                                                      'options' => array('dateFormat'=>'dd/mm/yy','minDate'=>'0','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                                      'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"Contact_WEF-$i",'class'=>'datecols paddate')));
                                                     ?>  
                                                   
                                               </td>
                                               <th style="padding:5px 5px 5px 18px"><?php echo $Getlabelname->Get_Labelname_Fnc("127");?></th>
                                               <td class="contactvariant">
                                                   <?php              
                                                      $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model_contact,"attribute"=>"[$i]WET",
                                                      'options' => array('dateFormat'=>'dd/mm/yy','minDate'=>'0','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                                      'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"Contact_WET-$i",'class'=>'datecols paddate')));
                                                     ?> 
                                               </td>
                                           </tr>
                                       </table> 
                                        <input id="<?php echo "CONTACTTYPE".$i;?>" type="hidden" name="<?php echo "CONTACTTYPE".$i;?>" value="<?php echo $getAddress[$i-1]['DESCRIPTION'];?>">     
                               
                                   </div>
                               </div>
                     <?php }?>  
                    
                </div>   
            </fieldset>
      </div>
       <div id="tabs-bank" class="tabcontent">
       <fieldset>
            <table cellspacing="0" cellpadding="0" class="org_relation gridcontent">
                <thead>
                    <tr>
                        <th style="text-align: center;border-radius: 5px;border-bottom-left-radius: 0px;border-bottom-right-radius: 0px;" colspan="5"><?php echo $Getlabelname->Get_Labelname_Fnc("137");?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <table class="bankleft">
                               <tr class="">
                                <th class=""><?php echo $Getlabelname->Get_Labelname_Fnc("123");?></th>
                                <td class="bottompad">                                
                                     <input type="text" autocomplete="on"  value="<?php ?>" class="" id="Branch" name="Branch" style="height:25px;width:240px;" class="">
                                 </td>
                            </tr>
                            <tr id="addbranch" class="spaceUnder"><td></td> <td class="padding-left-text-left-small"><div class="margintxt"  id="Addinput"></div></td></tr> 
                            <tr>
                                <td class="" ></td>
                                <td class="bottompad" ><input type="text" name="txt_bank" id="txt_bank">
                                <input type="hidden" name="hdn_bankid" id="hdn_bankid">
                                </td>
                            </tr>
                            
                            <tr class="">
                                <th class=""><?php echo $Getlabelname->Get_Labelname_Fnc("193");?></th>
                                
                                 <td class="bottompad">
                                    <?php             
                 
                                            $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                                                    'model'=>$model_bank,
                                                    'id'=>"ACCOUNT_TYPE",
                                                    'name'=>"AccountType", 
                                                    'value'=>'',
                                                    'source'=>$this->createUrl('Party/Account_TypeAutocomplete'),                                   
                                                    'options'=>array(
                                                     'minLength'=>'0', 
                                                     'select'=>'js:function( event, ui ) {
                                                                   
                                                               }',

                                                      'change'=>'js:function( event, ui ) {                                           
                                                                                                                
                                                        }',                                        
                                                    ),
                                                    'htmlOptions'=>array(
                                                        'style'=>'',
                                                        'class'=>"",                                                    

                                                    ),
                                                ));               

                                    ?>                              
                                </td>
                            </tr>
                                  
                            <tr class="">
                                 <td colspan ="2" class="bottompad">
                                     
                                     <table style="264px !important">
                                       <th> <?php echo $Getlabelname->Get_Labelname_Fnc("126");?> </th>
                                        <td style="padding-left: 58px"> 
                                            <?php              
                                                   $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model_bank,"attribute"=>"WEF",
                                                   'options' => array('dateFormat'=>'dd/mm/yy','minDate'=>'0','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                                   'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"Bank_WEF",'style'=>'width:95px')));
                                             ?> 
                                        </td>   
                                        <th style="padding-left: 3px"><?php echo $Getlabelname->Get_Labelname_Fnc("127");?> </th>
                                        <td style="padding-left: 15px">
                                            <?php              
                                                $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model_bank,"attribute"=>"WET",
                                                'options' => array('dateFormat'=>'dd/mm/yy','minDate'=>'0','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                                'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"Bank_WET",'style'=>'width:95px')));
                                            ?>                                  
                                        </td>
                                     </table>
                                    
                                 </td> 
                            </tr>
                            </table>
                        </td>
                        <td>
                            <table class="bankright">
                                 <tr>
                                    <th class="" ><?php echo $Getlabelname->Get_Labelname_Fnc("194");?></th>
                                    <td class="bottompad" ><?php echo $form->textField($model_bank,"ACCOUNT_NO",array("class"=>"","id"=>"ACCOUNT_NO",'maxlength' => 30)); ?></td>
                                 </tr>
                            
                                <tr>
                                    <th class="" ><?php echo $Getlabelname->Get_Labelname_Fnc("195");?></th>
                                    <td class="bottompad" ><?php echo $form->textField($model_bank,"ACCOUNT_OWNER",array("class"=>"","id"=>"ACCOUNT_OWNER",'maxlength' => 100)); ?></td>
                                </tr>
                            
                            <tr>
                                <th class=""><?php echo $Getlabelname->Get_Labelname_Fnc("160");?></th>
                                <td class="bottompad" >
                                <?php               
                 
                                    $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                                            'model'=>$model_bank,
                                            'id'=>"CURRENCY",
                                            'name'=>"CURRENCY", 
                                            'value'=>'',
                                            'source'=>$this->createUrl('ajax_request/FillCurrency'),                                   
                                            'options'=>array(
                                             'minLength'=>'0', 
                                             'select'=>'js:function( event, ui ) {
                                                           
                                                       }',

                                              'change'=>'js:function( event, ui ) {                                           
                                                      

                                                                                                    
                                                }',                                        
                                            ),
                                            'htmlOptions'=>array(
                                                
                                                'class'=>"autofocus",


                                            ),
                                        ));                
                 
                                    ?>
                               </td>
                            </tr>
                            
                             <tr class="">

                                 <td colspan="2">
                                      <span id="create-branch">                                       
                                     
                                        <div id="dialog">                                        
                                        </div>
                                        <button id="dialogBtn"><?php  echo $Getlabelname->Get_Labelname_Fnc("179") ?></button>
                                        </span>
                                 </td>
                            </tr>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
       </fieldset>
       </div>
      <div id="tabs-calender" class="tabcontent">
           <fieldset>
               <table cellspacing="0" cellpadding="0" id="tbl_EntityCalender" class="org_relation gridcontent">
                                    <thead class="fixedHeader">
                                        <tr>
                                            <th colspan="3" style="text-align: center;border-radius: 5px;border-bottom-left-radius: 0px;border-bottom-right-radius: 0px;" colspan="3">
                                            <div>                                   
                                                <?php echo $Getlabelname->Get_Labelname_Fnc("159");?>
                                                <img title="Add" src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/icon_plus.png" class="clonerow" id="<?php echo "btn_AddCalender" ;?>">  
                                             </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="padleft" width="484"><?php echo $Getlabelname->Get_Labelname_Fnc("159");?></td>
                                            <td class="padleft" width="92"><?php echo $Getlabelname->Get_Labelname_Fnc("126");?></td>
                                            <td class="padleft" width="113"><?php echo $Getlabelname->Get_Labelname_Fnc("127");?></td>
                                        </tr>
                                        </thead>
                                    <tbody class="scrollbody" style="height:208px !important">
                                        
                                    
                                        <?php for($i=1;$i<=$calendercount;$i++) { ?>
                                        <tr>
                                            <td>
                                                <?php 
                                                    $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                                                         'model'=>$model_holiday,
                                                         'name'=>"Holiday_Calendar[$i][CALENDAR_NAME]",
                                                         'id'=>"CALENDAR_NAME-$i",                                     
                                                         'source'=>$this->createUrl('ajax_request/FillCalendar'),                                   
                                                         'options'=>array(
                                                                   'minLength'=>'0',                                               
                                                                   'change'=>'js:function( event, ui ) {                                           
                                                                               if (!ui.item) {
                                                                                    $(this).val("");                                                                       
                                                                                }
                                                                    }', 
                                                                   ),
                                                                  'htmlOptions'=>array(
                                                                  'class'=>'autofocus drpdown paddate',                                                  
                                                                ),
                                                            ));
                                                        ?>
                                            </td>
                                           <td>
                                                <?php              
                                                      $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model_calender,"attribute"=>"[$i]WEF",
                                                      'options' => array('dateFormat'=>'dd/mm/yy','minDate'=>'0','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                                      'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"CALENDER_WEF-$i",'class'=>'datecols paddate')));
                                                ?>             
                                            </td>
                                            <td>
                                                <?php              
                                                      $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model_calender,"attribute"=>"[$i]WET",
                                                      'options' => array('dateFormat'=>'dd/mm/yy','minDate'=>'0','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                                      'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"CALENDER_WET-$i",'class'=>'datecollast paddate')));
                                                ?> 
                                            </td>
                                        </tr>
                                        <?php } ?>
                                        <tr>
                                            <td colspan="3" class="addrelation">
                                                
                                                 <input id="hdn_CalenderCount" type="hidden" name="hdn_CalenderCount" value="<?php echo $calendercount; ?>">
                                            </td>
                                        </tr>
                                    </tbody>
                            </table>
                
            </fieldset>
     
    </div>
        
    <div id="tabs-currency" class="tabcontent">
        <fieldset>
                <table cellspacing="0" cellpadding="0" id="tbl_EntityCurrency" class="org_relation gridcontent">
                                    <thead class="fixedHeader">
                                        <tr>
                                            <th style="text-align: center;border-radius: 5px;border-bottom-left-radius: 0px;border-bottom-right-radius: 0px;" colspan="5">
                                            <div>
                                                <?php echo $Getlabelname->Get_Labelname_Fnc("160");?>
                                                <img title="Add" src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/icon_plus.png" class="clonerow" id="<?php echo "btn_AddCurrency" ;?>">  
                                            </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="padleft" width="265"><?php echo $Getlabelname->Get_Labelname_Fnc("160");?></td>
                                            <td class="padleft" width="91"><?php echo $Getlabelname->Get_Labelname_Fnc("126");?></td>
                                            <td class="padleft" width="93"><?php echo $Getlabelname->Get_Labelname_Fnc("127");?></td>
                                            <td class="padleft" width="103"><?php echo $Getlabelname->Get_Labelname_Fnc("161");?></td>
                                            <td class="padleft padright"><?php echo $Getlabelname->Get_Labelname_Fnc("162");?></td>
                                           
                                        </tr>
                                    </thead>
                                    <tbody class="scrollbody" style="height:208px !important">
                                        
                                    
                                        <?php for($i=1;$i<=$currencycount;$i++) { ?>
                                        <tr>
                                            <td>
                                                <?php 
                                                    $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                                                         'model'=>$model_basicdefinition,
                                                         'name'=>"Basic_definition[$i][DESCRIPTION]",
                                                         'id'=>"CURRENCY_DESCRIPTION-$i",                                     
                                                         'source'=>$this->createUrl('ajax_request/FillCurrency'),                                   
                                                         'options'=>array(
                                                                   'minLength'=>'0',                                               
                                                                   'change'=>'js:function( event, ui ) {                                           
                                                                               if (!ui.item) {
                                                                                    $(this).val("");                                                                       
                                                                                }
                                                                    }', 
                                                                   ),
                                                                  'htmlOptions'=>array(
                                                                  'class'=>'autofocus currencydrpdown paddate',                                                  
                                                                ),
                                                            ));
                                                        ?>
                                            </td>
                                             <td>
                                                <?php              
                                                      $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model_currency,"attribute"=>"[$i]WEF",
                                                      'options' => array('dateFormat'=>'dd/mm/yy','minDate'=>'0','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                                      'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"CURRENCY_WEF-$i",'class'=>'datecols paddate')));
                                                ?>             
                                            </td>
                                            <td>
                                                <?php              
                                                      $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model_currency,"attribute"=>"[$i]WET",
                                                      'options' => array('dateFormat'=>'dd/mm/yy','minDate'=>'0','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                                      'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"CURRENCY_WET-$i",'class'=>'datecollast paddate')));
                                                ?> 
                                            </td>
                                             <td>
                                                  <?php echo $form->checkBox($model_currency,"[$i]IS_BASE_CURRENCY",array("id"=>"IS_BASE_CURRENCY-$i","class"=>"checkboxwidth")); ?>
                                             </td>
                                            <td>
                                                  <?php echo $form->checkBox($model_currency,"[$i]IS_REPORTING_CURRENCY",array("id"=>"IS_REPORTING_CURRENCY-$i","class"=>"checkboxwidth")); ?>
                                            </td>
                                            
                                           
                                        </tr>
                                        <?php } ?>
                                        <tr>
                                            <td colspan="5" class="addrelation">
                                                
                                                 <input id="hdn_CurrencyCount" type="hidden" name="hdn_CurrencyCount" value="<?php echo $currencycount; ?>">
                                            </td>
                                        </tr>
                                    </tbody>
                            </table>
        </fieldset>
    </div>
    
    <div id="tabs-policy" class="tabcontent">
    <fieldset>

             
            <div id="expanddiv">
                                                                         
               <table cellspacing="0" id="tbl_policy" cellpadding="0" class="org_relation gridcontent">
                                    <thead class="fixedHeader">
                                        <tr>
                                            <th style="text-align: center;border-radius: 5px;border-bottom-left-radius: 0px;border-bottom-right-radius: 0px;" colspan="5">                                                
                                             <div>
                                                <?php echo $Getlabelname->Get_Labelname_Fnc("125");?>
                                                <img title="Add" src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/icon_plus.png" class="clonerow" id="<?php echo "btn_AddPolicy" ;?>">  
                                                <span title="Expand" id="btn_Expand" class="expandclass">&nbsp;</span>
                                             </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="padleft" width="241"><?php echo $Getlabelname->Get_Labelname_Fnc("125");?></td>
                                            <td class="padleft" width="239"><?php echo $Getlabelname->Get_Labelname_Fnc("129");?></td>
                                            <td class="padleft" width="91"><?php echo $Getlabelname->Get_Labelname_Fnc("126");?></td>
                                            <td class="padleft padright" width="110"><?php echo $Getlabelname->Get_Labelname_Fnc("127");?></td>
                                                                                      
                                        </tr>
                                        </thead>
                                    <tbody class="scrollbody">
                                        
                                    
                                        <?php 
                                        if(isset($_POST['hdn_PolicyCurrentCount']) && $_POST['hdn_PolicyCurrentCount']>8)
                                           $policyCurrentCount= $_POST['hdn_PolicyCount'];
                                        else
                                           $policyCurrentCount=8; 
                                            
                                        for($i=1;$i<=$policycount;$i++) { 
                                            if(isset($_POST['hdn_PolicyCount']))
                                            { 
                                            if($i>8 &&  $i > $_POST['hdn_PolicyCount'])
                                                $displaypolicy="display:none"; 
                                            else
                                                $displaypolicy="";
                                            }
                                            else
                                            {
                                                if($i>8)
                                                $displaypolicy="display:none"; 
                                            else
                                                $displaypolicy="";
                                            }
                                            if(isset($_POST['PolicyId-'.$i])!="")
                                            {
                                                $policyid[$i]=$_POST['PolicyId-'.$i];
                                            }
                                            else
                                            {
                                                $policyid[$i]="";
                                            }
                                            
                                            ?>
                                        <tr style="<?php echo $displaypolicy; ?>" id="<?php echo "tr_policy-".$i;?>">
                                            <td>
                                                <?php 
                                                
                                                    $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                                                         'model'=>$model_policy,
                                                         'name'=>"Policy[$i][DESCRIPTION]",
                                                         'id'=>"POLICY_DESCRIPTION-$i",                                     
                                                         'source'=>$this->createUrl('Entity/FillPolicy'),                                   
                                                         'options'=>array(
                                                                   'minLength'=>'0',  
                                                             'select'=>'js:function( event, ui ) {                                                               
                                                                 $("#PolicyId-'.$i.'").val(ui.item.id);     
                                                                 
                                                             }',
                                                                   'change'=>'js:function( event, ui ) {                                           
                                                                               if (!ui.item) {
                                                                                   $(this).val(""); 
                                                                                   $("#PolicyId-'.$i.'").val(""); 
                                                                                }
                                                                    }', 
                                                                   ),
                                                                  'htmlOptions'=>array(
                                                                  'class'=>'autofocus policydrpdown paddate marginleft',                                                  
                                                                ),
                                                            ));
                                                        ?>
                                                 <input id="<?php echo "PolicyId-".$i;?>" type="hidden" name="<?php echo "PolicyId-".$i;?>" value="<?php echo $policyid[$i];?>">
                                            </td>
                                             <td>
                                                 <?php 
                                                    $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                                                         'model'=>$model_entitypolicy,
                                                         'name'=>"Entity_Policy[$i][POLICY_VALUE]",
                                                         'id'=>"POLICY_POLICY_VALUE-$i",                                    
//                                                           
                                                        'source'=>'js: function(request, response) {
                                                            $.ajax({
                                                                url: "'.$this->createUrl('Entity/FillPolicyValue').'",
                                                                dataType: "json",
                                                                data: {
                                                                    term: request.term,
                                                                    policy: $("#PolicyId-'.$i.'").val()
                                                                },
                                                                success: function (data) {
                                                                        response(data);
                                                                }
                                                            })
                                                         }',
                                                         'options'=>array(
                                                                   'minLength'=>'0',                                               
                                                                   'change'=>'js:function( event, ui ) {                                           
                                                                               if (!ui.item) {
                                                                                   // $(this).val("");                                                                       
                                                                                }
                                                                    }', 
                                                                   ),
                                                                  'htmlOptions'=>array(
                                                                  'class'=>'autofocus policydrpdown',                                                  
                                                                ),
                                                            ));
                                                        ?>           
                                            </td>
                                            <td>
                                                <?php              
                                                      $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model_entitypolicy,"attribute"=>"[$i]WEF",
                                                      'options' => array('dateFormat'=>'dd/mm/yy','minDate'=>'0','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                                      'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"Policy_WEF-$i",'class'=>'policydates paddate')));
                                                ?>             
                                            </td>
                                            <td>
                                                <?php              
                                                      $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model_entitypolicy,"attribute"=>"[$i]WET",
                                                      'options' => array('dateFormat'=>'dd/mm/yy','minDate'=>'0','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                                      'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"Policy_WET-$i",'class'=>'datecollast paddate')));
                                                ?> 
                                            </td>
                                             
                                            
                                           
                                        </tr>
                                        <?php } ?>
                                        <tr>
                                            <td colspan="4" class="addrelation">
                                                
                                                  <input id="hdn_PolicyCount" type="hidden" name="hdn_PolicyCount" value="<?php echo $policycount; ?>">
                                                  <input id="hdn_PolicyCurrentCount" type="hidden" name="hdn_PolicyCurrentCount" value="<?php echo $policyCurrentCount; ?>">
                                           
                                            </td>
                                        </tr>
                                    </tbody>
                            </table>
            </div>
    </fieldset>
    </div>
        
    <div id="tabs-more" class="tabcontent">
    <fieldset>
        <table cellspacing="0" cellpadding="0" class="org_relation gridcontent" style="padding-bottom:18px">
            <thead>
            <tr>
                <th style="text-align: center;border-radius: 5px;border-bottom-left-radius: 0px;border-bottom-right-radius: 0px;" colspan="5"><?php echo $Getlabelname->Get_Labelname_Fnc("182");?></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="padleft"></td>
                <td class="padleft"></td>
                <td class="padleft"><?php echo $Getlabelname->Get_Labelname_Fnc("126");?></td>
                <td class="padleft"><?php echo $Getlabelname->Get_Labelname_Fnc("127");?></td>
                <td class="padleft padright"><?php echo $Getlabelname->Get_Labelname_Fnc("180");?></td>

            </tr>
            <?php $getFlex=  Basic_definition::model()->findAll(array("condition"=>"DFCTG_DEFINITION_TYPE='ENTITY_FLEX'"));


             for($i=1;$i<=count($getFlex); $i++) {  ?>
                <tr>
                    <th nowrap>
                       <span class="marginleft"><?php echo $getFlex[$i-1]['DESCRIPTION']; ?></span>
                    </th>
                    <td>
                        <?php echo $form->textField($model_flex,"[$i]FLEX_VALUE",array("class"=>"flexinput marginleft ","id"=>"FLEX_VALUE-$i",'maxlength' => 100)); ?>
                    </td>
                    <td>
                        <?php
                        $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model_flex,"attribute"=>"[$i]WEF",
                            'options' => array('dateFormat'=>'dd/mm/yy','minDate'=>'0','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',
                                'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"FLEX_WEF-$i",'class'=>'datecols paddate')));
                        ?>
                    </td>
                    <td>
                        <?php
                        $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model_flex,"attribute"=>"[$i]WET",
                            'options' => array('dateFormat'=>'dd/mm/yy','minDate'=>'0','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',
                                'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"FLEX_WET-$i",'class'=>'datecols paddate')));
                        ?>
                    </td>

                    <td>
                        <?php echo $form->textField($model_flex,"[$i]NOTE",array("class"=>"flexinput rightgrid","id"=>"NOTE-$i",'maxlength' => 512)); ?>
                    </td>


                </tr>
            <?php } ?>

            </tbody>
        </table>
    </fieldset>
    </div> 
</div>        
</div>        
</div>               
<table class="tbl_btn" id="table_bottom_bg">
        <tbody>
                <tr>
                    <td class="btnholders">
                       
                         <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"reset",'size'=>'small','icon'=>'icon-refresh', 'label'=>$Getlabelname->Get_Labelname_Fnc("104"))); ?>
                          <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"submit",'size'=>'small', 'label'=>$model->isNewRecord ? $Getlabelname->Get_Labelname_Fnc("103") : $Getlabelname->Get_Labelname_Fnc("2021"),'id'=>"btn_Save",'icon'=>"icon-thumbs-up",'htmlOptions'=>array('onclick'=>'js:return SaveEntity();'))); ?>            
                         
                    </td>
                </tr>
        </tbody>        
    </table>                

<?php $this->endWidget(); ?>

<!--</div> form -->