
<style>
    .input-append .add-on {
        background-color: #DFDCDC !important;
        height: 25px !important;
        padding: 1px !important;
        width:5px !important;
    }
    .generic_flex
    {
     margin-left:20px;
     margin-bottom:9px;   
     border-radius:10px;
    }

    #Gframe
     {
    height: 350px;
    width:835px;
    background: white;
    box-shadow: 0 2px 12px 6px rgba(0,0,0,.6);
    }

    .headerclass
    {
        padding-bottom: 9px;
    }
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
        /*background-image: none;*/
        background-position: -1px 0px 0px  0px;
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
         height: auto;
         width: 702px;
         padding: 6px !important;
         padding-left: 0px !important;
         padding-right: 0px !important;
         margin-top: 17px !important;
         margin-bottom: 10px !important;
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
        width: 123px;
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
    .ui-tabs-vertical .ui-tabs-panel { padding: 1em;  width:715px;min-height:224px;}
    .ui-tabs .ui-tabs-nav li a {margin-bottom:0px !important}
    .ui-tabs .ui-tabs-nav li { float: right !important; }
    .ui-tabs-nav li *:after { border-style: none !important;}
    .tabsbox
    {
      padding-right:12px;
      float:right;
      background:rgb(231, 231, 231);
      height:270px;
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
        width:1072px;
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
        border: 1px solid rgb(197, 193, 193);
        width: 667px;
        border-radius: 5px;
        box-shadow: 0px 6px 15px 0px #c4c4c4;
        padding: 10px 10px 10px 14px;
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
        width:238px;
    }
    .contactvariant
    {
        padding-left: 12.5px;
        padding-right: 8px;
        width: 50px;

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
        margin: 11px 5px 5px 8px;
    }
    .bankright
    {
        margin: 11px 5px 5px 0px;
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
    #dialogBtn,.iframedialog
    {
        border-radius: 10px;
        background-color: rgb(234, 237, 240);
    }
    #ui-datepicker-div
    {
        z-index:999 !important;
    }

    .assign_width
    {

        width: 163px !important;
    }

    .bankpad
    {
        padding-left: 5px;
    }
    #dialogCalenderBtn
    {
        float:right;
        margin:10px 0 5px 0;
    }
</style>  
<script>


function FillImage()
{
  
         var id=$("#Entity_Id").val();//alert(id);
          <?php 

            if(isset($_GET['id'])){//echo "hi";
            $condition= "ENTITY_ID=".$_GET['id'];
          //echo $condition;exit;
            
            $get_count_image=ENTITY_IMAGE::model()->count($condition);
            //echo "<h1>".$n."</h1>"; //exit;
            if($get_count_image>0) 
                {    ?>      
        
          var test =<?php echo "'{$this->createUrl('party_image/DisplaySavedImage')}'"; ?>;
          test= test+"?id="+id;//alert(test);
         // alert(test);
          $('#logo').css("background-image", "url("+test+")");

                <?php 
                }} 
                ?>
}


$(document).ready(function(){

  
   //For opening image upload form in iframe.........
   var id=$("#Entity_Id").val();
    var iframeimage = $('<iframe border=0 id="UploadIframe" name="UploadIframe" src="<?php echo Yii::app()->request->baseUrl;?>/index.php/party_image/create?iframe=1&type=entity&id='+id+'" scrolling="no" style="width:790px"  noresize frameborder="1" ></iframe>');

    var imagedialog = $("<div></div>").append(iframeimage).appendTo("body").dialog({
        autoOpen: false,
        modal: true,
        show: "fade",
        hide: "fade",
        resizable: false,
        title:'Upload logo',
        width: '800',
        height: '300',
       
        close: function () {
            FillImage();         
          
          }
        
    });
    
    $('#logo').click(function(){    
        if($("#Entity_Id").val()!="")
        {
            <?php 
            if(isset($_GET['id'])) {
            $condition= "ENTITY_ID=".$_GET['id'];
            
            $get_count_image=ENTITY_IMAGE::model()->count($condition);
           // echo "<h1>"."fafdsf"."</h1>"; //exit;

            if($get_count_image>0) 
                {
            ?>
                // var r = confirm("Already Logo Is here If you Relplace this ?");
                //         if (r == true)
                //           {
                bootbox.confirm("<p class='modalstyle'><b><img width='30px' src='<?php echo Yii::app()->request->baseUrl; ?>/images/question_red.png'/>Confirmation</b></p><p>Already a logo is present. Are you sure to replace this? ?</p>", "No", "Yes", function(result) {
                    if (result == true) 
                    {
                        imagedialog.dialog().dialog("open");
                        return false;
                    }
                    else
                    {                
                      return false;
                    }

               });
                <?php 
                }
                else
                {
                    ?>
                        imagedialog.dialog().dialog("open");
                        return false;
                    <?php
                } 
                ?>
                        // imagedialog.dialog().dialog("open");
                        // return false;
                <?php
            }
            ?>
            // var frameBaseSRC = document.getElementById("UploadIframe").src;
            // var frameQueryString = $("#Entity_Id").val();
            // if (frameQueryString != undefined) 
            // {
            //     document.getElementById("UploadIframe").src = frameBaseSRC + "&id=" + frameQueryString;
                
            // }
        }

        else
        {
            GetStaticAlert("20706");
            return false;
        }
    }); 



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

    //For displaying branch name in iframe     
    var childiFrame = document.getElementById("Iframe"); 
    var innerDoc = childiFrame.contentDocument || childiFrame.contentWindow.document;       
    innerDoc.getElementById("BNAME").value=$("#Branch").val();  
    //////////////////////////////////////
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
            url: "<?php echo Yii::app()->request->baseUrl; ?>/index.php/ajax_request/FillBranch",       
            type: "POST",
            data:{term:request.term},
            dataType: "json",       
            success: function( data ) { 
               // alert("fgdfg");
          //   console.log(data);
                if(data.length==0) 
                { 
                    //alert("hi");
                    var value=$("#Branch").val();                 
                    if(value!="")
                    {                        
                       $('#addbranch').show();
                       $('#Addinput').html("<b>Add</b>&nbsp;"+value);
                    }                     
                    $("#txt_bank ").val("");
                    $("#hdn_bankid").val("");

                }
                else 
                {
                    $('#addbranch').hide();
                     $("#txt_bank ").val("");
                    $("#hdn_bankid").val("");
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
              $("#hdn_bankid").val(ui.item.id);
             },    
             // change:function(event, ui) { 
             //   if (!ui.item) {                                        
             //        $("#txt_bank ").val("");
             //        $("#hdn_bankid").val("");
             //    }
             //    else
             //    {
                                    
             //           $('#addbranch').show();
             //           $('#Addinput').html("<b>Add</b>&nbsp;"+value);
                    
             //    }
             // },                       
       }); 
    ///////////////////////////////////////////////



    //for opening calendar in IFRAme

    var calendariframe = $('<iframe border=0 id="calendarIframe" name="calendarIframe" src="<?php echo Yii::app()->request->baseUrl;?>/index.php/holiday_calendar/create?iframe=1" width="800px" height="500px" scrolling="no" noresize frameborder="1" ></iframe>');
    var calendardialog = $("<div></div>").append(calendariframe).appendTo("body").dialog({
        autoOpen: false,
        modal: true,
        show: "fade",
        hide: "fade",
        resizable: false,
        title:'Create Calendar',
        width: 'auto',
        height: 'auto',
        close: function () {
          
        }
    });
 $('#dialogCalenderBtn').click(function(){    
        calendardialog.dialog().dialog("open");
        return false;
    }); 
   

//FOR GENERIC IFRAME***************##########***********


$('#dialogBtn2').click(function(){
          dialoggeneric.dialog().dialog("open");
          return false;
});


    var table_id_value='ENTITY';
    var party_bank_value='ENTITY_GENERAL';
    
    var iframe_Generic = $('<iframe border=0 id="Gframe" name="Iframe" src="<?php echo Yii::app()->request->baseUrl;?>/index.php/generic_Flex/create?iframe=2&table_id='+table_id_value+'&CANVAS='+party_bank_value+'" scrolling="no" noresize frameborder="1" ></iframe>');

    
  


      var dialoggeneric = $("<div></div>").append(iframe_Generic).appendTo("body").dialog({
          autoOpen: false,
          modal: true,
          show: "fade",
          hide: "fade",
          resizable: false,
          title:'Create',
          width: 'auto',
          height: 'auto',
          close: function () {
             
             //SENDING  AJAX REQUEST  TO GET GENERIC LABEL DURING CLOSE ACTION
                  var GFLEX=$("#genericRowCount").val();
                  var Party_ID =$("#partyid").val(); //alert(Party_ID);
                  var i;

                    $.ajax(
                            {
                            url: "<?php echo Yii::app()->createUrl("ajax_request/Get_Generic_Party_Field"); ?>",
                            data: { TABLE_ID: table_id_value,CANVAS: party_bank_value,GFLEX_COUNT:GFLEX,PARTY_ID:Party_ID},
                            beforeSend:function (){
                            $('#loading-indicator-please-wait').show();
                            },
                            success: function (result) 
                                    {
                                    $('#get_party_generic_ajax').html(result);
                                    $('#loading-indicator-please-wait').hide();
                                    
                                    }
                            });    
                    
 
         }
        
      });






     
//FOR GENERIC IFRAME***************##########******ENDS HERE***** 




    
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
            $('#expanddiv').css({'position':'absolute','z-index':'100000','background-color': 'rgb(247, 247, 247)','border': '6px solid #979494','-webkit-border-radius': '8px','border-radius': '8px','-webkit-box-shadow': '0px 0px 22px 3px #c4c4c4','box-shadow': '0px 0px 22px 3px #c4c4c4','padding': '10px'});
            $('#expanddiv').stop().animate({               
                left   : '24%',
                top    : '5%',
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
            console.log("show"+showindex);
            if(showindex-1>=8)
            {
                //alert("here");
                showindex=showindex-1
            }
           if(showindex<8)
            showindex=8;
            
            
            rows.each(function(index) {
             if(index+1>=showindex) 
                 {
                  //console.log("hide"+index);
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
        function CloneTable(hidden,table,url,select_hidden)
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
                 //Creating new instance for autocomplete
                if($(this).hasClass("ui-autocomplete-input"))
                {                    
                  url="<?php echo Yii::app()->request->baseUrl; ?>/index.php/"+url;
                  $(this).autocomplete({                                            
                                       source:url,
                                       minLength: 0,                                       
                                       change:function(event,ui){
                                        if (!ui.item) {
                                            $(this).val("");  
                                            $("#"+select_hidden+newindex).val("");                                                                      
                                         }
                                       },
                                       select:function( event, ui ) {                                                               
                                            $("#"+select_hidden+newindex).val(ui.item.id);     
                                                         
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
            
            cloneEntity.insertAfter($("#"+ table +" tr:last").prev()).find( 'input:text' ).attr('value',''); 
        }
/////////////////////

/////////////////////////////////

//Cloning Entity Type.......

        $("#btn_AddType").click(function() { 
            
            CloneTable("hdn_EntityType","tbl_OperationType","","");           
           
        });
 //////////////////////////////////////////////////
 
 //Cloning Calender...
 
  $("#btn_AddCalender").click(function() { 
      
            CloneTable("hdn_CalenderCount","tbl_EntityCalender","ajax_request/FillCalendar","hdn_selectedcalanderId-");
         
   });
 /////////////////////////////////////////////
 
  //Cloning Currency...
 
  $("#btn_AddCurrency").click(function() { 
               CloneTable("hdn_CurrencyCount","tbl_EntityCurrency","ajax_request/FillCurrency","hdn_selectedcurrencyId-");
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
                        //Creating new instance for autocomplete
                        if($(this).hasClass("ui-autocomplete-input"))
                        {                    
                          url="<?php echo Yii::app()->request->baseUrl; ?>/index.php/Entity/FillPolicy";
                          $(this).autocomplete({                                            
                                               source:url,
                                               minLength: 0,                                       
                                               change:function(event,ui){
                                                if (!ui.item) {
                                                    $(this).val("");  
                                                    $("#PolicyId-"+newindex).val("");                                                                      
                                                 }
                                               },
                                               select:function( event, ui ) {                                                               
                                                    $("#PolicyId-"+newindex).val(ui.item.id);     
                                                                 
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

                    cloneEntityPolicy.insertAfter($('#tbl_policy tr:last').prev()).find( 'input:text' ).attr('value','');             
                    $('#tbl_policy tr:last').prev().show();
           }
           else
           {  
               
                $('#tr_policy-'+newindex).show();
           }
               
     });
 /////////////////////////////////////////////
 
 $("#ENTITY_NAME").on('keyup', function() {    
    var orgname=$("#ENTITY_NAME").val();
    //alert(orgname);
    $("#ENTITY_BANK_ACCOUNT_OWNER").val(orgname);
 });
 
 $('#btn_Delete').click(function (e) {
    var href_link =$(this).attr('href');
    //alert(href_link);
   e.preventDefault();
     bootbox.confirm("<p class='modalstyle'><b><img width='30px' src='<?php echo Yii::app()->request->baseUrl; ?>/images/question_red.png'/>Confirmation</b></p><p>Are you sure to delete this Entity ?</p>","No", "Yes", function(result) {
        if (result == true) {
                
                //alert(href_link);
                window.location= href_link;
            }
            else 
            {
                return false;
            }

        
    });
});
});

function SaveEntity()
{
   
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
    
    //Validation For Basic............................
    var basicCount=$("#hdn_EntityType").val();
    var checkDateArray = new Array();
    for(var i=1;i<=basicCount;i++)
    {                
         var operationType=$('#OPERATION_TYPE-'+i).val();
         var basicWEF=$('#WEF-' +i).val();    
         var basicWET=$('#WET-'+i).val();
  
         if((operationType!="")||(basicWEF!="")||(basicWET!=("")))
         {
             if(operationType=="")
             {
                GetDynamicAlert("20194",i);
                //$('#OPERATION_TYPE-'+i).focus();                
                Createfocus("OPERATION_TYPE-"+i);
                $("#tabs" ).tabs( "option", "active", 0);
                return false;
             }
             if(basicWEF=="")
             {
                GetDynamicAlert("20195",i);
                //$('#WEF-' +i).focus();
                Createfocus("WEF-"+i);
                $("#tabs" ).tabs( "option", "active", 0);
                return false;                 
             }
             if(!ValidateDate(basicWEF))
             {
                  GetDynamicAlert("20196",i);
                  //$('#WEF-' +i).focus();
                  Createfocus("WEF-"+i);
                  $("#tabs" ).tabs( "option", "active", 0);
                  return false;
             }
             if(!CompareDates(registerdDate,basicWEF))
             {
                    GetDynamicAlert("20200",i);
                    //$('#WEF-' +i).focus();
                    Createfocus("WEF-"+i);
                    $("#tabs" ).tabs( "option", "active", 0);
                    return false;
             }
             if(basicWET!="")
             {
                  if(!ValidateDate(basicWET))
                  {
                        GetDynamicAlert("20197",i);
                        //$('#WET-' +i).focus();
                        Createfocus("WET-"+i);
                        $("#tabs" ).tabs( "option", "active", 0);
                        return false;
                  }                  
             }
             if(basicWEF!="" && basicWET!="")
             {                
                if(!CompareDates(basicWEF,basicWET))
                {
                    GetDynamicAlert("20198",i);
                   // $('#WEF-' +i).focus();
                    Createfocus("WEF-"+i);
                    $("#tabs" ).tabs( "option", "active", 0);
                    return false;
                }
             }
             var passVariables = new Array();
             passVariables.push(operationType);
             passVariables.push(basicWEF);
             passVariables.push(basicWET);
             passVariables.push(i);
             checkDateArray.push(passVariables);            
                 
         }         
    }
    if(checkDateArray.length > 0)
    { 
       var result= CheckDateDuplicates(checkDateArray);
       
        if(result!=0)
        {
             GetDynamicAlert("20199",result);
             //$('#OPERATION_TYPE-' +result).focus();
              Createfocus("OPERATION_TYPE-"+result);
              $("#tabs" ).tabs( "option", "active", 0);
             return false;
        }
        
    }   
    
    //////////////End Of Basic Validation////////////////
    
    //Validation For Contact............................    
    
    var ContactCount=$("#hdn_EntityContactCount").val();    
    for(var i=1;i<=ContactCount;i++)
    { 
         var line1=$('#LINE1-'+i).val();
         var line2=$('#LINE2-' +i).val();    
         var line3=$('#LINE3-'+i).val();
         var city=$('#CITY-'+i).val();
         var country=$('#COUNTRY-' +i).val();    
         var mobile=$('#MOBILE_PHONE-'+i).val();
         var telephone=$('#TELEPHONE-'+i).val();
         var fax=$('#FAX-' +i).val();    
         var email=$('#EMAIL-'+i).val();        
         var url=$('#URL-'+i).val();
         var contactwef=$('#Contact_WEF-' +i).val();    
         var contactwet=$('#Contact_WET-'+i).val();
         var contactType=$('#CONTACTTYPE-'+i).val();
         
         if((line1!="")||(line2!="")||(line3!="")||(city!="")||(country!="")||(mobile!="")||(telephone!="")||(fax!="")||(email!="")||(url!="")||(contactwef!="")||(contactwet!=""))
         {
             if(line1=="")
             {
                GetDynamicAlert("20201",contactType);
                //$('#LINE1-'+i).focus();
                Createfocus("LINE1-"+i);
                $("#tabs" ).tabs( "option", "active", 1);
                return false;
             }
             if(city=="")
             {
                GetDynamicAlert("20202",contactType);
                //$('#CITY-'+i).focus();
                Createfocus("CITY-"+i);
                $("#tabs" ).tabs( "option", "active", 1);
                return false;
             }
             if(country=="")
             {
                GetDynamicAlert("20203",contactType);
                //$('#COUNTRY-'+i).focus();
                Createfocus("COUNTRY-"+i);
                $("#tabs" ).tabs( "option", "active", 1);
                return false;
             }
             if(url!="")
             {     
                var result=urlvalidation(url);
                if(result==false)
                {
                    GetDynamicAlert("20260",contactType);
                    //$('#URL-'+i).focus();
                    Createfocus("URL-"+i);
                    $("#tabs" ).tabs( "option", "active", 1);
                    return false;
                }
             }
             if(contactwef!="")
             {
                  if(!ValidateDate(contactwef))
                  {
                        GetDynamicAlert("20204",contactType);
                        //$('#Contact_WEF-' +i).focus();
                        Createfocus("Contact_WEF-"+i);
                        $("#tabs" ).tabs( "option", "active", 1);
                        return false;
                  }                  
             }
             if(contactwet!="")
             {
                  if(!ValidateDate(contactwet))
                  {
                        GetDynamicAlert("20205",contactType);
                        //$('#Contact_WET-' +i).focus();
                        Createfocus("Contact_WET-"+i);
                        $("#tabs" ).tabs( "option", "active", 1);
                        return false;
                  }                  
             }
             if(contactwef!="" && contactwet!="")
             {                
                if(!CompareDates(contactwef,contactwet))
                {
                    GetDynamicAlert("20207",contactType);
                    //$('#Contact_WET-' +i).focus();
                    Createfocus("Contact_WET-"+i);
                    $("#tabs" ).tabs( "option", "active", 1);
                    return false;
                }
             }
             if(contactwef!="")
             {
                if(!CompareDates(registerdDate,contactwef))
                {
                       GetDynamicAlert("20206",contactType);
                       //$('#Contact_WEF-' +i).focus();
                       Createfocus("Contact_WEF-"+i);
                       $("#tabs" ).tabs( "option", "active", 1);
                       return false;
                }
             }
             if(contactwet!="" && contactwef=="")
             {
                GetDynamicAlert("20208",contactType);
                //$('#Contact_WEF-' +i).focus();
                Createfocus("Contact_WEF-"+i);
                $("#tabs" ).tabs( "option", "active", 1);
                return false;
             }
         }
    }
    //////////////End Of Contact Validation////////////////
   
    ////Validation For Bank............................  
    
    var branch=$("#Branch").val().trim();  
    var bank=$("#txt_bank").val().trim();
    var accountType=$("#ACCOUNT_TYPE").val().trim();
    var bankWef=$("#Bank_WEF").val().trim();  
    var bankWet=$("#Bank_WET").val().trim();  
    var accountNo=$("#ACCOUNT_NO").val().trim();
    var accountOwner=$("#ENTITY_BANK_ACCOUNT_OWNER").val().trim();
    var bankCurrency=$("#Bank_CURRENCY").val().trim();    
    
    if((branch!="")||(bank!="")||(accountType!="")||(bankWef!="")||(bankWet!="")||(accountNo!="")||(bankCurrency!=""))
    {
        if(branch=="")
        {
            GetStaticAlert("20209");
            //$("#Branch").focus();
            Createfocus("Branch");
            $("#tabs" ).tabs( "option", "active", 2);
            return false;
        }
        if(bank=="")
        {
            GetStaticAlert("20210");
            //$("#txt_bank").focus();
            Createfocus("txt_bank");
            $("#tabs" ).tabs( "option", "active", 2);
            return false;
        }
        if(accountType=="")
        {
            GetStaticAlert("20211");
           // $("#ACCOUNT_TYPE").focus();
            Createfocus("ACCOUNT_TYPE");
            $("#tabs" ).tabs( "option", "active", 2);
            return false;
        }
        if(accountNo=="")
        {
            GetStaticAlert("20212");
            //$("#ACCOUNT_NO").focus();
            Createfocus("ACCOUNT_NO");
            $("#tabs" ).tabs( "option", "active", 2);
            return false;
        }
        if(accountOwner=="")
        {
            GetStaticAlert("20213");
            //$("#ENTITY_BANK_ACCOUNT_OWNER").focus();
            Createfocus("ENTITY_BANK_ACCOUNT_OWNER");
            $("#tabs" ).tabs( "option", "active", 2);
            return false;
        }
        if(bankCurrency=="")
        {
            GetStaticAlert("20214");
            //$("#Bank_CURRENCY").focus();
            Createfocus("Bank_CURRENCY");
            $("#tabs" ).tabs( "option", "active", 2);
            return false;
        }
        if(bankWef=="")
        {
            GetStaticAlert("20215");
            //$("#Bank_WEF").focus();
            Createfocus("Bank_WEF");
            $("#tabs" ).tabs( "option", "active", 2);
            return false;
        }    
        if(!ValidateDate(bankWef))
        {
            GetStaticAlert("20216");
            //$("#Bank_WEF").focus();
            Createfocus("Bank_WEF");
            $("#tabs" ).tabs( "option", "active", 2);
            return false;
        } 
        if(bankWet!="")
        {
             if(!ValidateDate(bankWet))
             {
                GetStaticAlert("20218");
                //$("#Bank_WET").focus();
                Createfocus("Bank_WET");
                $("#tabs" ).tabs( "option", "active", 2);
                return false;
             } 
        }
        if(!CompareDates(registerdDate,bankWef))
        {
            GetStaticAlert("20217");
            //$("#Bank_WEF").focus();
            Createfocus("Bank_WEF");
            $("#tabs" ).tabs( "option", "active", 2);
            return false;
        }
        if(bankWef!="" && bankWet!="")
        {                
           if(!CompareDates(bankWef,bankWet))
           {
               GetStaticAlert("20219");
               //$("#Bank_WET").focus();
               Createfocus("Bank_WET");
               $("#tabs" ).tabs( "option", "active", 2);
               return false;
           }
        } 
    }
    //////////////End Of Bank Validation////////////////
    
    ////Validation For Calander............................ 
    
    var calendarCount=$("#hdn_CalenderCount").val();   
    var checkCalanderArray = new Array();
    for(var i=1;i<=calendarCount;i++)
    { 
         var calanderName=$('#CALENDAR_NAME-'+i).val();
         var calanderWef=$('#CALENDER_WEF-' +i).val();    
         var calanderWet=$('#CALENDER_WET-'+i).val();
        
         
         if((calanderName!="")||(calanderWef!="")||(calanderWet!=""))
         {
             if(calanderName=="")
             {
                GetDynamicAlert("20220",i);
                //$('#CALENDAR_NAME-'+i).focus();
                Createfocus("CALENDAR_NAME-"+i);
                $("#tabs" ).tabs( "option", "active", 3);
                return false;
             }
             if(calanderWef=="")
             {
                GetDynamicAlert("20221",i);
                //$('#CALENDER_WEF-'+i).focus();
                Createfocus("CALENDER_WEF-"+i);
                $("#tabs" ).tabs( "option", "active", 3);
                return false;
             }
            
            
            if(!ValidateDate(calanderWef))
            {
                  GetDynamicAlert("20222",i);
                  //$('#CALENDER_WEF-' +i).focus();
                  Createfocus("CALENDER_WEF-"+i);
                  $("#tabs" ).tabs( "option", "active", 3);
                  return false;
            }                  
            
             if(calanderWet!="")
             {
                  if(!ValidateDate(calanderWet))
                  {
                        GetDynamicAlert("20223",i);
                        //$('#CALENDER_WET-' +i).focus();
                        Createfocus("CALENDER_WET-"+i);
                        $("#tabs" ).tabs( "option", "active", 3);
                        return false;
                  }                  
             }
             if(calanderWef!="" && calanderWet!="")
             {                
                if(!CompareDates(calanderWef,calanderWet))
                {
                    GetDynamicAlert("20224",i);
                    //$('#CALENDER_WET-' +i).focus();
                    Createfocus("CALENDER_WET-"+i);
                    $("#tabs" ).tabs( "option", "active", 3);
                    return false;
                }
             }
             
            if(!CompareDates(registerdDate,calanderWef))
            {
                   GetDynamicAlert("20225",i);
                   //$('#CALENDER_WEF-' +i).focus();
                   Createfocus("CALENDER_WEF-"+i);
                   $("#tabs" ).tabs( "option", "active", 3);
                   return false;
            }   
            
             var CalanderVariables = new Array();
             CalanderVariables.push(calanderName);
             CalanderVariables.push(calanderWef);
             CalanderVariables.push(calanderWet);
             CalanderVariables.push(i);
             checkCalanderArray.push(CalanderVariables);     
             
         }
    }
    if(checkCalanderArray.length > 0)
    { 
       var result= CheckDateDuplicates(checkCalanderArray);       
        if(result!=0)
        {
             GetDynamicAlert("20226",result);
             //$('#CALENDAR_NAME-' +result).focus();
             Createfocus("CALENDAR_NAME-"+result);
             $("#tabs" ).tabs( "option", "active", 3);
             return false;
        }        
    }   
    ///////////////////////////////////////////////////
    
    ////Validation For CURRENCY............................ 
    
    var currencyCount=$("#hdn_CurrencyCount").val();   
    var checkCurrencyArray = new Array();
    var checkBaseArray = new Array();
    var checkReportingArray = new Array();
    var currencyflag=0;
    
    for(var i=1;i<=currencyCount;i++)
    { 
         var currencyName=$('#CURRENCY_DESCRIPTION-'+i).val();
         var currencyWef=$('#CURRENCY_WEF-' +i).val();    
         var currencyWet=$('#CURRENCY_WET-'+i).val();        
         
         if((currencyName!="")||(currencyWef!="")||(currencyWet!="")||(document.querySelector('input[name="Entity_Currency['+i+'][IS_BASE_CURRENCY]"]:checked')!=null) || (document.querySelector('input[name="Entity_Currency['+i+'][IS_REPORTING_CURRENCY]"]:checked')!=null))
         {   
            currencyflag=1;
            if(currencyName=="")
            {
                GetDynamicAlert("20227",i);
                Createfocus("CURRENCY_DESCRIPTION-"+i);
                $("#tabs" ).tabs( "option", "active", 4);
                return false;            
            }
            if(currencyWef=="")
            {
                GetDynamicAlert("20228",i);
                //$('#CURRENCY_WEF-' +i).focus();
                Createfocus("CURRENCY_WEF-"+i);
                $("#tabs" ).tabs( "option", "active", 4);
                return false;  
            }
            if(!ValidateDate(currencyWef))
            {
                  GetDynamicAlert("20229",i);
                  //$('#CURRENCY_WEF-' +i).focus();
                  Createfocus("CURRENCY_WEF-"+i);
                  $("#tabs" ).tabs( "option", "active", 4);
                  return false;
            }                  
            
             if(currencyWet!="")
             {
                  if(!ValidateDate(currencyWet))
                  {
                        GetDynamicAlert("20230",i);
                        //$('#CURRENCY_WET-' +i).focus();
                        Createfocus("CURRENCY_WET-"+i);
                        $("#tabs" ).tabs( "option", "active", 4);
                        return false;
                  }                  
             }
             if(currencyWef!="" && currencyWet!="")
             {                
                if(!CompareDates(currencyWef,currencyWet))
                {
                    GetDynamicAlert("20231",i);
                    //$('#CURRENCY_WET-' +i).focus();
                    Createfocus("CURRENCY_WET-"+i);
                    $("#tabs" ).tabs( "option", "active", 4);
                    return false;
                }
             }
             
            if(!CompareDates(registerdDate,currencyWef))
            {
                   GetDynamicAlert("20232",i);
                   //$('#CURRENCY_WEF-' +i).focus();
                   Createfocus("CURRENCY_WEF-"+i);
                   $("#tabs" ).tabs( "option", "active", 4);
                   return false;
            }
             var currencyVariables = new Array();
             currencyVariables.push(currencyName);
             currencyVariables.push(currencyWef);
             currencyVariables.push(currencyWet);
             currencyVariables.push(i);
             checkCurrencyArray.push(currencyVariables);
             
             if(document.querySelector('input[name="Entity_Currency['+i+'][IS_BASE_CURRENCY]"]:checked')!=null)
             {     
                // alert(i);
                var baseVariables = new Array();
                baseVariables.push("base");
                baseVariables.push(currencyWef);
                baseVariables.push(currencyWet);
                baseVariables.push(i);
                checkBaseArray.push(baseVariables);                 
             }
             
             if(document.querySelector('input[name="Entity_Currency['+i+'][IS_REPORTING_CURRENCY]"]:checked')!=null)
             {                
                var reportingVariables = new Array();
                reportingVariables.push("reporting");
                reportingVariables.push(currencyWef);
                reportingVariables.push(currencyWet);
                reportingVariables.push(i);
                checkReportingArray.push(reportingVariables);                 
             }
 
         }
    }
//    if(currencyflag==0)
//    {
//        GetStaticAlert("20233");
//        return false;
//    }
    if(checkCurrencyArray.length > 0)
    { 
       var result= CheckDateDuplicates(checkCurrencyArray);       
        if(result!=0)
        {
             GetDynamicAlert("20234",result);
             Createfocus("CURRENCY_DESCRIPTION-"+result);
             $("#tabs" ).tabs( "option", "active", 4);
             return false;
        }        
    } 
    if(checkBaseArray.length > 0)
    { 
       var result= CheckDateDuplicates(checkBaseArray);       
        if(result!=0)
        {
             GetDynamicAlert("20235",result); 
             Createfocus("IS_BASE_CURRENCY-"+result);
             $("#tabs" ).tabs( "option", "active", 4);
             return false;
        }        
    }
    if(checkReportingArray.length > 0)
    { 
       var result= CheckDateDuplicates(checkReportingArray);       
        if(result!=0)
        {
             GetDynamicAlert("20236",result); 
             Createfocus("IS_REPORTING_CURRENCY-"+result);
             $("#tabs" ).tabs( "option", "active", 4);
             return false;
        }        
    }
    
    ///////////////////////////////////////////////////////
    
    ////Validation For Policy............................ 
    
    var policyCount=$("#hdn_PolicyCurrentCount").val();   
    var checkPolicyArray = new Array();
    for(var i=1;i<=policyCount;i++)
    { 
         var policyName=$('#POLICY_DESCRIPTION-'+i).val();
         var policyValue=$('#POLICY_POLICY_VALUE-' +i).val();    
         var policyWef=$('#Policy_WEF-'+i).val();
         var policyWet=$('#Policy_WET-'+i).val();
        
         
         if((policyName!="")||(policyValue!="")||(policyWef!="")||(policyWet!=""))
         {
             if(policyName=="")
             {
                GetDynamicAlert("20237",i);  
                Createfocus("POLICY_DESCRIPTION-"+i);
                $("#tabs" ).tabs( "option", "active", 5);
                return false;
             }
             if(policyValue=="")
             {
                GetDynamicAlert("20238",i);  
                Createfocus("POLICY_POLICY_VALUE-"+i);
                $("#tabs" ).tabs( "option", "active", 5);
                return false;
             }
             if(policyWef=="")
             {
                GetDynamicAlert("20239",i);
                //$('#Policy_WEF-'+i).focus();
                Createfocus("Policy_WEF-"+i);
                $("#tabs" ).tabs( "option", "active", 5);
                return false;
             }
            
            
            if(!ValidateDate(policyWef))
            {
                  GetDynamicAlert("20240",i);
                 // $('#Policy_WEF-'+i).focus();
                  Createfocus("Policy_WEF-"+i);
                  $("#tabs" ).tabs( "option", "active", 5);
                  return false;
            }                  
            
             if(policyWet!="")
             {
                  if(!ValidateDate(policyWet))
                  {
                        GetDynamicAlert("20241",i);
                        //$('#Policy_WET-'+i).focus();
                        Createfocus("Policy_WET-"+i);
                        $("#tabs" ).tabs( "option", "active", 5);
                        return false;
                  }                  
             }
             if(policyWef!="" && policyWet!="")
             {                
                if(!CompareDates(policyWef,policyWet))
                {
                    GetDynamicAlert("20242",i);
                    //$('#Policy_WET-'+i).focus();
                    Createfocus("Policy_WET-"+i);
                    $("#tabs" ).tabs( "option", "active", 5);
                    return false;
                }
             }
             
            if(!CompareDates(registerdDate,policyWef))
            {
                   GetDynamicAlert("20243",i);
                   //$('#Policy_WEF-'+i).focus();
                   Createfocus("Policy_WEF-"+i);
                   $("#tabs" ).tabs( "option", "active", 5);
                   return false;
            }   
            
             var policyVariables = new Array();
             policyVariables.push(policyName);
             policyVariables.push(policyWef);
             policyVariables.push(policyWet);
             policyVariables.push(i);
             checkPolicyArray.push(policyVariables);     
             
         }
    }
    if(checkPolicyArray.length > 0)
    { 
       var result= CheckDateDuplicates(checkPolicyArray);       
        if(result!=0)
        {
             GetDynamicAlert("20244",result);
             //$('#CALENDAR_NAME-' +result).focus();
             Createfocus("POLICY_DESCRIPTION-"+result);
             $("#tabs" ).tabs( "option", "active", 5);
             return false;
        }        
    }   
    ///////////////////////////////////////////////////   
    
    
    ////Validation For Flex............................ 
    
    var flexCount=$("#hdn_FlexCount").val();       
    for(var i=1;i<=flexCount;i++)
    { 
         var flexValue=$('#FLEX_VALUE-'+i).val();
         var flexWef=$('#FLEX_WEF-' +i).val();    
         var flexWet=$('#FLEX_WET-'+i).val();
         var flexNote=$('#NOTE-'+i).val();
        
         
         if((flexValue!="")||(flexWef!="")||(flexWet!="")||(flexNote!=""))
         {
             if(flexValue=="")
             {
                GetDynamicAlert("20245",i); 
               // $('#FLEX_VALUE-'+i).focus();
               Createfocus("FLEX_VALUE-"+i);
               $("#tabs" ).tabs( "option", "active", 6);
                return false;
             }
             
             if(flexWef=="")
             {
                GetDynamicAlert("20246",i);
                //$('#FLEX_WEF-' +i).focus();
                Createfocus("FLEX_WEF-"+i);
                $("#tabs" ).tabs( "option", "active", 6);
                return false;
             }
            
            
            if(!ValidateDate(flexWef))
            {
                  GetDynamicAlert("20247",i);
                  //$('#FLEX_WEF-' +i).focus();
                  Createfocus("FLEX_WEF-"+i);
                  $("#tabs" ).tabs( "option", "active", 6);
                  return false;
            }                  
            
             if(flexWet!="")
             {
                  if(!ValidateDate(flexWet))
                  {
                        GetDynamicAlert("20248",i);
                        //$('#FLEX_WET-'+i).focus();
                        Createfocus("FLEX_WET-"+i);
                        $("#tabs" ).tabs( "option", "active", 6);
                        return false;
                  }                  
             }
             if(flexWef!="" && flexWet!="")
             {                
                if(!CompareDates(flexWef,flexWet))
                {
                    GetDynamicAlert("20249",i);
                    //$('#FLEX_WET-'+i).focus();
                    Createfocus("FLEX_WET-"+i);
                    $("#tabs" ).tabs( "option", "active", 6);
                    return false;
                }
             }
             
            if(!CompareDates(registerdDate,flexWef))
            {
                   GetDynamicAlert("20250",i);
                  // $('#FLEX_WEF-' +i).focus();
                   Createfocus("FLEX_WEF-"+i);
                   $("#tabs" ).tabs( "option", "active", 6);
                   return false;
            } 
         }
    }
      
    ///////////////////////////////////////////////////
    //alert("Validation Successful");
    //return false;
}


    
</script>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/editor/src/bootstrap-wysihtml5.css"></link>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/editor/lib/js/wysihtml5-0.3.0.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/editor/src/bootstrap-wysihtml5.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/editor/lib/css/prettify.css"></link>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/editor/lib/js/prettify.js"></script>

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
  <!---- Code for Flash Messages---->
<?php if(Yii::app()->user->hasFlash('success')):?>
            <div class="success_blue"> <div class="success_blue_icon"></div>
                <div class="success_blue_msg">
                    <?php echo Yii::app()->user->getFlash('success'); ?>
                </div>
            </div>
            <?php elseif(Yii::app()->user->hasFlash('error')):?>
            <div class="error_red"> <div class="error_red_icon"></div>
                <div class="error_red_msg">
                <?php echo Yii::app()->user->getFlash('error'); ?>
                </div>
            </div>
    <?php endif; ?>
   <!---- Code for Flash Messages---->  
 <?php
 

 
 
 
 ?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'entity-form',
	'enableAjaxValidation'=>false,
)); 
$GetTitleHelp =new Title_Help();
require_once("popupdialog.php");
$Getlabelname =new Get_Labelname_Cls();



// if(isset($_POST['hdn_CalenderCount'])<>'')        
//     $calendercount=$_POST['hdn_CalenderCount'];
// else
//     $calendercount=8;

// if(isset($_POST['hdn_CurrencyCount'])<>'')        
//     $currencycount=$_POST['hdn_CurrencyCount'];
// else
//     $currencycount=8;
//if(isset($_POST['hdn_PolicyCount'])<>'')        
//    $policycount=$_POST['hdn_PolicyCount'];
//else
    $policycount=15;

$Entity_Id="";
$vMission="";
$vVision="";
$vEntity="";
$vEntityCode="";
$vRegisteredOn="";

if(isset($_GET['id']))
{
   $criteria = new CDbCriteria;
   $criteria->condition = "ID=:id";
   $criteria->params = array(':id' => $_GET['id']);
   $getEntity=  Entity::model()->findAll($criteria); 
   foreach($getEntity as $record) 
   {        
        $vMission= $record['MISSION'];
        $vVision= $record['VISION']; 
        $vEntity=$record['NAME']; 
        $vEntityCode=$record['SHORT_NAME']; 
        $vRegisteredOn=date('d/m/Y',  strtotime($record['REGISTERED_ON']));  
        $Entity_Id=$record['ID'];        
   } 
}
else 
{
   if(isset($_POST['Entity']))
   {    
        $vEntityCode=$_POST['Entity']['SHORT_NAME'];      
        $vRegisteredOn=$_POST['Entity']['REGISTERED_ON'];  
        $vEntity=$_POST['ENTITY']['NAME'];

   }
   if(isset($_POST['txt_Mission']))
       $vMission= $_POST['txt_Mission']; 
   if(isset($_POST['txt_Vision']))
       $vVision= $_POST['txt_Vision']; 
}

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
                   <div width="15%" style="float:left;padding: 15px 8px 0px;">
                       <div class="logo" id="logo">
                           <?php 
                           //echo '<img class="imgbrder" src="'.$this->createUrl('party_image/DisplaySavedImage?id=229').'" alt="jiii" width="101" height="107" />';
                            ?>
                       </div>
                       <div style="width:20%">
                                <table style="padding: 11px 0 0 25px; float: left;margin-left: 10px;">
                                        <tr>
                                            <td>
                                                
                                                <a href="#" id="btn_Mission" class="btn btn-small"><i class="icon-plane"></i> Mission</a>
                                                <div class="missiondiv" style="display:none; position: absolute;">
                                                <div class="arrow-up_editor"></div>
                                                <div class="div_missiontext" >
                                                    <textarea id="txt_Mission" name="txt_Mission" class="txt_Mission" value=""><?php echo $vMission; ?></textarea>
                                                    
                                                </div>
                                                </div>
                                             </td>
                                            <td style="padding:5px"><a href="#" id="btn_Vision" class="btn btn-small"><i class="icon-eye-open"></i> Vision</a>
                                                <div class="visiondiv" style="display:none; position: absolute;">
                                                    <div class="arrow-up_editor"></div>
                                                    <div class="div_visiontext" >
                                                        <textarea id="txt_Vision" name="txt_Vision" class="txt_Vision" value=""><?php echo $vVision; ?></textarea>
                                                    </div>
                                                 </div>
                                            </td>
                                        </tr>
                                </table>                           
                         </div>
                    </div>
                    <div>


<!------CODE FOR GENERIC FLEX------->

 <!--*****///****GENERIC*****FLEX*******DESIGN*******STARTS********HERE*******************-->
<?php
  $GET_GENERIC_FLEX = new Get_Generic_Flex_Cls();                                                                                         
  $GetGenericFlex_basic =$GET_GENERIC_FLEX->Get_Generic_Flex_Form_Fnc('ENTITY','ENTITY_GENERAL');
  //print_r($GetGenericFlex_basic);
 // $Total_Rows_Generic_Flex=sizeof($GetGenericFlex);
 //print_r($GetGenericFlex);
?>












<!--*****///****GENERIC*****FLEX*******DESIGN*******ENDS**********HERE*******************-->



<!------CODE FOR GENERIC FLEX ENDDDD---------->


                                <table class="org_basic">
                                    <tr>
                                        <th class="headerclass"><?php echo $Getlabelname->Get_Labelname_Fnc("155");?></th>
                                        
                                        <td class="td_org" colspan="3">
                                       <div class="input-append">
                                        <?php 
                                                $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                                                     'model'=>$model,
                                                     'name'=>"ENTITY[NAME]",
                                                     'id'=>"ENTITY_NAME", 
                                                     'value'=> $vEntity,
                                                     //'source'=>$this->createUrl('Entity/FillEntity'),                                   
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
                                         <a class="field_level_help_on_txt" href="#Organisation Name " title="<?php echo $GetTitleHelp->Get_Title_Help() ;?>">
                                         <span class="add-on" style=""></span>
                                        </a>
                                        </div>
                                         <input id="Entity_Id" type="hidden" name="Entity_Id"  value="<?php echo $Entity_Id;?>">     
                                         
                                        </td>                   
                                    </tr>
                                  <tr>
                                        <th class="headerclass"><?php echo $Getlabelname->Get_Labelname_Fnc("144");?></th>
                                        <td class="td_org">
                                        <div class="input-append">
                                        <?php echo $form->textField($model,"SHORT_NAME",array("class"=>"org_shortname","style"=>'width: 165px !important',"id"=>"SHORTNAME",'value'=>$vEntityCode,'maxlength' => 30)); ?>
                                        <a class="field_level_help_on_txt" href="#Organisation Code" title="<?php echo $GetTitleHelp->Get_Title_Help() ;?>">
                                         <span class="add-on" style=""></span>
                                        </a>
                                        </div>
                                        </td>                   

                                        <th class="th_regorg headerclass"><?php echo $Getlabelname->Get_Labelname_Fnc("145");?></th>
                                        <td class="td_orgdate">   
                                        <div class="input-append">                         
                                            <?php              
                                                  $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model,"attribute"=>"REGISTERED_ON",
                                                  'options' => array('dateFormat'=>'dd/mm/yy','maxDate'=>'0','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                                  'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"REGISTERED_ON",'value'=>$vRegisteredOn,'class'=>'datecol')));
                                            ?> 
                                         <a title="<?php echo $GetTitleHelp->Get_Title_Help() ;?>" class="field_level_help_on_txt" href="#Registered On">
                                         <span class="add-on" style=""></span>
                                        </a>

                                        </div> 
                                         <button id="dialogBtn2" class="generic_flex"><?php  echo "User Field";?></button>                        
                                        </td> 
                                                                    
                                    </tr>
                                    <tr>
                                        <td colspan="4">



                                            <?php    if($GetGenericFlex_basic!="") { $key=0;?>
                    <table  id="bank_generic">
                        <tbody class="scrollContent">
                        <?php    // print_r($GetGenericFlex_bank);
                              foreach ($GetGenericFlex_basic as $key => $value)
                              {
                                $key=$key +1;
                                // print_r($key);
                                
//******************** FOR UPDATION ******************************8                                
                                      if($Entity_Id!="")
                                        {
                                            $get_Gflex_id[$key] =  Yii::app()->db->createCommand()
                                                              ->select('ID,FLEX_VALUE')  
                                                              ->where("FLEX_VALUE is not null and RECORD_ID=:Entity_Id",array(':Entity_Id'=>$Entity_Id)) 
                                                              ->from('GENERIC_FLEX_VALUE')
                                                              ->queryAll(); 
                                         
               // ################### FOR NULL TEXT-FIELDS ########################### ############################## #####################                          
                                            if(isset($get_Gflex_id[$key][$key-1]['FLEX_VALUE']))
                                            {
                                                  $FLEX_value=$get_Gflex_id[$key][$key-1]['FLEX_VALUE'];
                                                  //echo $FLEX_value;
                                            }
                                            else
                                            {
                                                 $get_Gflex_id[$key][$key-1]['ID']="";
                                                 $FLEX_value="";
                                            }
                                            
                // ################### FOR NULL TEXT-FIELDS ###########################  ###################################################                            
                                        }
                                        else
                                        {  // echo "in else";
                                            $get_Gflex_id[$key]="";
                                            $FLEX_value ="";
                                            $get_Gflex_id[$key][$key-1]['ID']="";
                                        }
                        ?>
                            <tr class="spaceUnder">
                                <th  class="headerclass" style="width :129px !important">
                                     <?php echo $value['FIELD_TITLE'];?>  </th>
                                <td style="padding: 0 0 10px 9.3px;">
                                 <?php  echo $form->textField(Generic_Flex_Value::model(),"[$key]FLEX_VALUE",array('size'=>60,'maxlength'=>120,"class"=>"assign_width","id"=>"generic$key","value"=>$FLEX_value)); ?>
                                 <input type="hidden" id="genericid<?php echo $key; ?>" name="genericid[<?php echo $key; ?>]" value="<?php echo $value['ID']; ?>"> 
                                <?php // echo $key; exit; ?>
                                 <input type="hidden" id="Flex_value-id-<?php echo $key; ?>"  name="Flex_value-id-[<?php echo $key; ?>]" value="<?php echo $get_Gflex_id[$key][$key-1]['ID'];?>">        
                                 
                                </td>
                              
                     <?php } //echo $key;print_r($get_Gflex_id[$key]);?> 
                        
<!--                  //take array's tot count and assign in value              -->
                            <input type="hidden" id="genericRowCount" name="genericRowCount" value="<?php echo $key ?>"
                                
                            </tr>  
                            </tbody>
                   </table>
                <?php } ?>



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
                                            <td class="padleft" width="96"><?php echo $Getlabelname->Get_Labelname_Fnc("126");?></td>
                                            <td class="padleft"><?php echo $Getlabelname->Get_Labelname_Fnc("127");?></td>
                                        </tr>
                                        </thead>
                                    <tbody class="scrollbody" style="height:83px !important">
                                        <?php 
                                        
                                        if(isset($_GET['id']))
                                        {
                                           $criteria = new CDbCriteria;
                                           $criteria->condition = "ENTITY_ID=:id";
                                           $criteria->params = array(':id' => $_GET['id']);
                                           $criteria->order = 'lower(OPERATION_TYPE) ASC';
                                           $getType=  Operation_Type::model()->findAll($criteria); 
                                           //echo $getType[0]['ID'];
                                        }
                                        
                                        $relationcount=0;
                                        if(isset($_GET['id']) && count($getType)>0)
                                             $relationcount=count($getType);
                                        else if(isset($_POST['hdn_EntityType'])<>'')        
                                            $relationcount=$_POST['hdn_EntityType'];
                                        if($relationcount<3)
                                            $relationcount=3;
                                        
                                        for($i=1;$i<=$relationcount;$i++) { 
                                            
                                            if(isset($_GET['id']) && count($getType) >= $i)
                                              $operationTypeId[$i]=$getType[$i-1]['ID'];
                                            else if(isset($_POST['hdn_operationTypeId-'.$i])<>"")                                          
                                              $operationTypeId[$i]=$_POST['hdn_operationTypeId-'.$i];
                                            else
                                               $operationTypeId[$i]="";
                                            
                                            if(isset($_GET['id']) && count($getType) >= $i)
                                              $operationtype[$i]=$getType[$i-1]['OPERATION_TYPE'];
                                            else if(isset($_POST['Operation_Type'][$i]["OPERATION_TYPE"])<>"")                                        
                                              $operationtype[$i]=$_POST['Operation_Type'][$i]["OPERATION_TYPE"];
                                            else
                                               $operationtype[$i]="";
                                            
                                            if(isset($_GET['id']) && count($getType) >= $i && $getType[$i-1]['WEF']!="")                                           
                                              $operationwef[$i]=date('d/m/Y',  strtotime($getType[$i-1]['WEF'])) ;
                                          
                                            else if(isset($_POST['Operation_Type'][$i]["WEF"]) && trim($_POST['Operation_Type'][$i]["WEF"])!="")                                                                             
                                              $operationwef[$i]=$_POST['Operation_Type'][$i]["WEF"];                                        
                                            else
                                               $operationwef[$i]="";
                                            
                                            if(isset($_GET['id']) && count($getType) >= $i && $getType[$i-1]['WET']!="")
                                              $operationwet[$i]=date('d/m/Y',  strtotime($getType[$i-1]['WET'])) ;
                                            else if(isset($_POST['Operation_Type'][$i]["WET"]) && trim($_POST['Operation_Type'][$i]["WET"])!="")                                        
                                              $operationwet[$i]=$_POST['Operation_Type'][$i]["WET"];
                                            else
                                               $operationwet[$i]="";
                                            
                                            ?>
                                        <tr>
                                            <td>
                                                <?php                                                       
                                                    echo $form->dropDownList($model_type,"[$i]OPERATION_TYPE", array('Management' => 'Management', 'Legal' => 'Legal'), array('prompt'=>'Select',"id"=>"OPERATION_TYPE-$i",'class'=>'drpdown paddate','style'=>'background-color: white;height: 27px;', 'options'=>array($operationtype[$i]=>array('selected'=>'selected'))));
                                                  ?>                                                  
                                            </td>
                                            <td>
                                                <?php              
                                                      $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model_type,"attribute"=>"[$i]WEF",
                                                      'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                                      'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"WEF-$i",'value'=>$operationwef[$i],'class'=>'datecols paddate')));
                                                ?>             
                                            </td>
                                            <td>
                                                <?php              
                                                      $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model_type,"attribute"=>"[$i]WET",
                                                      'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                                      'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"WET-$i",'value'=>$operationwet[$i],'class'=>'datecollast paddate')));
                                                ?> 
                                                <input id="<?php echo "hdn_operationTypeId-".$i;?>" type="hidden" name="<?php echo "hdn_operationTypeId-".$i;?>" value="<?php echo $operationTypeId[$i] ;?>">
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
                                    
                            for($i=1;$i<=count($getAddress); $i++){                                 
                                
                                
                                if(isset($_GET['id']))
                                {
                                   $criteria = new CDbCriteria;
                                   $criteria->condition = "ENTITY_ID=:id and CONTACT_TYPE=:contact_type";
                                   $criteria->params = array(':id' => $_GET['id'],':contact_type'=>$getAddress[$i-1]['DESCRIPTION']);                               
                                   $get_db_Address=  Entity_Contact::model()->findAll($criteria);                                                                      
                                }
                                
                                if(isset($_GET['id']) && count($get_db_Address) == 1)
                                   $contactTypeId[$i]=$get_db_Address[0]['ID'];
                                else if(isset($_POST['hdn_contactTypeId-'.$i])<>"")                                          
                                    $contactTypeId[$i]=$_POST['hdn_contactTypeId-'.$i];
                                else
                                    $contactTypeId[$i]=""; 
                                
                                if(isset($_GET['id']) && count($get_db_Address) == 1)
                                    $vLine1[$i]=$get_db_Address[0]['LINE1'];
                                else if(isset($_POST['Entity_Contact'][$i]["LINE1"])<>"")                                        
                                    $vLine1[$i]=$_POST['Entity_Contact'][$i]["LINE1"];
                                else
                                     $vLine1[$i]="";
                                
                                if(isset($_GET['id']) && count($get_db_Address) == 1)
                                    $vLine2[$i]=$get_db_Address[0]['LINE2'];
                                else if(isset($_POST['Entity_Contact'][$i]["LINE2"])<>"")                                        
                                    $vLine2[$i]=$_POST['Entity_Contact'][$i]["LINE2"];
                                else
                                     $vLine2[$i]="";
                                
                                if(isset($_GET['id']) && count($get_db_Address) == 1)
                                    $vLine3[$i]=$get_db_Address[0]['LINE3'];
                                else if(isset($_POST['Entity_Contact'][$i]["LINE3"])<>"")                                        
                                    $vLine3[$i]=$_POST['Entity_Contact'][$i]["LINE3"];
                                else
                                     $vLine3[$i]="";
                                
                                if(isset($_GET['id']) && count($get_db_Address) == 1)
                                    $vCity[$i]=$get_db_Address[0]['CITY'];
                                else if(isset($_POST['Entity_Contact'][$i]["CITY"])<>"")                                        
                                    $vCity[$i]=$_POST['Entity_Contact'][$i]["CITY"];
                                else
                                     $vCity[$i]="";
                                
                                if(isset($_GET['id']) && count($get_db_Address) == 1)
                                    $vCountry[$i]=$get_db_Address[0]['COUNTRY'];
                                else if(isset($_POST['Entity_Contact'][$i]["COUNTRY"])<>"")                                        
                                    $vCountry[$i]=$_POST['Entity_Contact'][$i]["COUNTRY"];
                                else
                                     $vCountry[$i]="";
                                
                                if(isset($_GET['id']) && count($get_db_Address) == 1)
                                    $vMobile[$i]=$get_db_Address[0]['MOBILE_PHONE'];
                                else if(isset($_POST['Entity_Contact'][$i]["MOBILE_PHONE"])<>"")                                        
                                    $vMobile[$i]=$_POST['Entity_Contact'][$i]["MOBILE_PHONE"];
                                else
                                     $vMobile[$i]="";
                                
                                if(isset($_GET['id']) && count($get_db_Address) == 1)
                                    $vTelephone[$i]=$get_db_Address[0]['TELEPHONE'];
                                else if(isset($_POST['Entity_Contact'][$i]["TELEPHONE"])<>"")                                        
                                    $vTelephone[$i]=$_POST['Entity_Contact'][$i]["TELEPHONE"];
                                else
                                     $vTelephone[$i]="";
                                
                                if(isset($_GET['id']) && count($get_db_Address) == 1)
                                    $vFax[$i]=$get_db_Address[0]['FAX'];
                                else if(isset($_POST['Entity_Contact'][$i]["FAX"])<>"")                                        
                                    $vFax[$i]=$_POST['Entity_Contact'][$i]["FAX"];
                                else
                                     $vFax[$i]="";
                                
                                if(isset($_GET['id']) && count($get_db_Address) == 1)
                                    $vEmail[$i]=$get_db_Address[0]['EMAIL'];
                                else if(isset($_POST['Entity_Contact'][$i]["EMAIL"])<>"")                                        
                                    $vEmail[$i]=$_POST['Entity_Contact'][$i]["EMAIL"];
                                else
                                     $vEmail[$i]="";
                                
                                if(isset($_GET['id']) && count($get_db_Address) == 1)
                                    $vUrl[$i]=$get_db_Address[0]['URL'];
                                else if(isset($_POST['Entity_Contact'][$i]["URL"])<>"")                                        
                                    $vUrl[$i]=$_POST['Entity_Contact'][$i]["URL"];
                                else
                                     $vUrl[$i]="";
                                
                                if(isset($_GET['id']) && count($get_db_Address) == 1 && $get_db_Address[0]['WEF']!="")
                                    $vAddressWef[$i]=date('d/m/Y',  strtotime($get_db_Address[0]['WEF']));
                                else if(isset($_POST['Entity_Contact'][$i]["WEF"]) && trim($_POST['Entity_Contact'][$i]["WEF"]) !="")                                        
                                    $vAddressWef[$i]=$_POST['Entity_Contact'][$i]["WEF"];
                                else
                                     $vAddressWef[$i]="";
                                
                                if(isset($_GET['id']) && count($get_db_Address) == 1 && $get_db_Address[0]['WET']!="")
                                    $vAddressWet[$i]=date('d/m/Y',  strtotime($get_db_Address[0]['WET']));
                                else if(isset($_POST['Entity_Contact'][$i]["WET"]) && trim($_POST['Entity_Contact'][$i]["WET"])!="")                                        
                                    $vAddressWet[$i]=$_POST['Entity_Contact'][$i]["WET"];
                                else
                                     $vAddressWet[$i]="";
                                
                                ?> 
                               <h3><?php echo $getAddress[$i-1]['DESCRIPTION']; ?></h3>
                              <div class="accordioncontent">
                                   <div class="contactleft">
                                       <table id="tbl_addressline"class="contactline">
                                          
                                            <tr>
                                                <th class="addresshead" ><?php echo $Getlabelname->Get_Labelname_Fnc("158");?></th>
                                               
                                            </tr>
                                          
                                          
                                           <tr>                                              
                                               
                                               <td>
                                                  <table>
                                                        <tr>
                                                            <td class="padbottom"><?php echo $form->textField($model_contact,"[$i]LINE1",array("class"=>"addressline","id"=>"LINE1-$i",'value'=>$vLine1[$i],'maxlength' => 60,'placeholder'=>'--Address Line1--')); ?></td>
                                                        </tr>    
                                                        <tr>
                                                           <td class="padbottom"><?php echo $form->textField($model_contact,"[$i]LINE2",array("class"=>"addressline","id"=>"LINE2-$i",'value'=>$vLine2[$i],'maxlength' => 60)); ?></td>
                                                        </tr>
                                                        <tr>
                                                           <td class="padbottom"><?php echo $form->textField($model_contact,"[$i]LINE3",array("class"=>"addressline","id"=>"LINE3-$i",'value'=>$vLine3[$i],'maxlength' => 60,'placeholder'=>'--Postal Code--')); ?></td>
                                                        </tr>
                                                        <tr>
                                                           <td class="padbottom"><?php echo $form->textField($model_contact,"[$i]CITY",array("class"=>"addressline","id"=>"CITY-$i",'value'=>$vCity[$i],'maxlength' => 60,'placeholder'=>'--City--')); ?></td>
                                                        </tr>
                                                        <tr>
                                                           <td class="padbottom">
                                                               <?php 
                                                                    $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                                                                         'model'=>$model_contact,
                                                                         'name'=>"ENTITY_CONTACT[$i][COUNTRY]",
                                                                         'id'=>"COUNTRY-$i",
                                                                         'value'=>$vCountry[$i],
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
                                               </td>
                                               <td>
                                                <table>
                                                       <tr>                                                          
                                                            <th class="padbottom" style="padding-right:3px"><?php echo $Getlabelname->Get_Labelname_Fnc("156");?></th>                                                        
                                                            <td class="padbottom"><?php echo $form->textField($model_contact,"[$i]MOBILE_PHONE",array("class"=>"inputcontact","id"=>"MOBILE_PHONE-$i",'value'=>$vMobile[$i],'maxlength' => 50,)); ?></td>
                                                       </tr>
                                                       <tr>                                                          
                                                            <th class="padbottom"><?php echo $Getlabelname->Get_Labelname_Fnc("110");?></th>                                                        
                                                            <td class="padbottom"><?php echo $form->textField($model_contact,"[$i]TELEPHONE",array("class"=>"inputcontact","id"=>"TELEPHONE-$i",'value'=>$vTelephone[$i],'maxlength' => 100,)); ?></td>
                                                       </tr>
                                                       <tr>                                                          
                                                            <th class="addresshead"><?php echo $Getlabelname->Get_Labelname_Fnc("111");?></th>                                                        
                                                            <td class="padbottom"><?php echo $form->textField($model_contact,"[$i]FAX",array("class"=>"inputcontact","id"=>"FAX-$i",'value'=>$vFax[$i],'maxlength' => 50,)); ?></td>
                                                       </tr>
                                                       <tr>                                                          
                                                            <th class="padbottom"><?php echo $Getlabelname->Get_Labelname_Fnc("112");?></th>                                                        
                                                            <td class="padbottom"><?php echo $form->textField($model_contact,"[$i]EMAIL",array("class"=>"inputcontact","id"=>"EMAIL-$i",'value'=>$vEmail[$i],'maxlength' => 100,)); ?></td>
                                                       </tr>
                                                       <tr>                                                          
                                                            <th class="padbottom"><?php echo $Getlabelname->Get_Labelname_Fnc("157");?></th>                                                        
                                                            <td class="padbottom"><?php echo $form->textField($model_contact,"[$i]URL",array("class"=>"inputcontact","id"=>"URL-$i",'value'=>$vUrl[$i],'maxlength' => 100,)); ?></td>
                                                       </tr>
                                                   </table>
                                               </td>
                                            </tr>
                                             <tr>
                                                <td>&nbsp;</td>
                                                <td>
                                                    <table style="margin-top: 1px;">
                                                       <th class="text-left"><?php echo $Getlabelname->Get_Labelname_Fnc("126");?></th>
                                                       <td class="contactvariant">
                                                            <?php              
                                                              $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model_contact,"attribute"=>"[$i]WEF",
                                                              'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',     
                                                              'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"Contact_WEF-$i",'value'=>$vAddressWef[$i],'class'=>'datecols paddate')));
                                                             ?>  
                                                           
                                                       </td>
                                                       <th width="26px"><?php echo $Getlabelname->Get_Labelname_Fnc("127");?></th>
                                                       <td class="contactvariant">
                                                           <?php              
                                                              $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model_contact,"attribute"=>"[$i]WET",
                                                              'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',     
                                                              'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"Contact_WET-$i",'value'=>$vAddressWet[$i],'class'=>'datecols paddate')));
                                                             ?> 
                                                       </td>
                                                    </table>
                                                </td>   
                                               
                                           </tr> 
                                       </table>
                                       <input id="<?php echo "CONTACTTYPE-".$i;?>" type="hidden" name="<?php echo "CONTACTTYPE-".$i;?>" value="<?php echo $getAddress[$i-1]['DESCRIPTION'];?>">     
                                        <input id="<?php echo "hdn_contactTypeId-".$i;?>" type="hidden" name="<?php echo "hdn_contactTypeId-".$i;?>" value="<?php echo $contactTypeId[$i] ;?>">
                                
                                   </div>
                                  
                               </div>
                     <?php }?>  
                       <input id="hdn_EntityContactCount" type="hidden" name="hdn_EntityContactCount" value="<?php echo count($getAddress); ?>">
                </div>   
            </fieldset>
      </div>
       <div id="tabs-bank" class="tabcontent">
       <fieldset>
           <?php 
           
           if(isset($_GET['id']))
            {
               $criteria1 = new CDbCriteria;
               $criteria1->condition = "ENTITY_ID=:id";
               $criteria1->params = array(':id' => $_GET['id']);               
               $getBank = Entity_Bank::model()->findAll($criteria1); 
               //echo "hi".$getBank[0]['ID'];
               if (count($getBank)>0)
               {
               $criteria = new CDbCriteria;
               $criteria->alias = 'BR';
               $criteria->select = array('BR.NAME as BRANCH','B.Name as BANK');               
               $criteria->join = 'left join Bank B on BR.BANK_ID=B.Id';         
               $criteria->condition = "BR.Id=".$getBank[0]['BANK_ID'];
               $getEntityBank=  Bank::model()->findAll($criteria);
               }               
            }
            
           if(isset($_GET['id']) && count($getBank) == 1)
                $entityBankId=$getBank[0]['ID'];
           else if(isset($_POST['hdn_EntityBankId'])<>"")                                          
                $entityBankId=$_POST['hdn_EntityBankId'];
           else
                $entityBankId="";
           
           if(isset($_GET['id']) && count($getBank) == 1)
                $bankId=$getBank[0]['BANK_ID'];
           else if(isset($_POST['hdn_BankId'])<>"")                                          
                $bankId=$_POST['hdn_BankId'];
           else
                $bankId="";   
           
           if(isset($_GET['id']) && count($getBank) == 1)
                $vBranch=$getEntityBank[0]['BRANCH'];
           else if(isset($_POST["Branch"])<>"")                                        
                $vBranch=$_POST["Branch"];
           else
                $vBranch="";
           
           if(isset($_GET['id']) && count($getBank) == 1)
                $vBank=$getEntityBank[0]['BANK'];
           else if(isset($_POST["txt_bank"])<>"")                                        
                $vBank=$_POST["txt_bank"];
           else
                $vBank="";
           
           if(isset($_GET['id']) && count($getBank) == 1)
                $vAccountType=$getBank[0]['ACCOUNT_TYPE'];
           else if(isset($_POST['ENTITY_BANK']["ACCOUNT_TYPE"])<>"")                                        
                $vAccountType=$_POST['ENTITY_BANK']["ACCOUNT_TYPE"];
           else
                $vAccountType="";
           
           if(isset($_GET['id']) && count($getBank) == 1)
                $vBankWef=date('d/m/Y',  strtotime($getBank[0]['WEF']));
           else if(isset($_POST['ENTITY_BANK']["WEF"]) && trim($_POST['ENTITY_BANK']["WEF"])!="")                                        
                $vBankWef=$_POST['ENTITY_BANK']["WEF"];
           else
                $vBankWef="";
           
           if(isset($_GET['id']) && count($getBank) == 1 && $getBank[0]['WET']!="")
                $vBankWet=date('d/m/Y',  strtotime($getBank[0]['WET']));
           else if(isset($_POST['ENTITY_BANK']["WET"]) && trim($_POST['ENTITY_BANK']["WET"])!="")                                        
                $vBankWet=$_POST['ENTITY_BANK']["WET"];
           else
                $vBankWet="";
           
           if(isset($_GET['id']) && count($getBank) == 1)
                $vAccountNo=$getBank[0]['ACCOUNT_NO'];
           else if(isset($_POST['ENTITY_BANK']["ACCOUNT_NO"])<>"")                                        
                $vAccountNo=$_POST['ENTITY_BANK']["ACCOUNT_NO"];
           else
                $vAccountNo="";
           if(isset($_GET['id']))
                 $vAccountOwner=$vEntity;
           else if(isset($_GET['id']) && count($getBank) == 1)
                $vAccountOwner=$getBank[0]['ACCOUNT_OWNER'];
           else if(isset($_POST['ENTITY_BANK']["ACCOUNT_OWNER"])<>"")                                        
                $vAccountOwner=$_POST['ENTITY_BANK']["ACCOUNT_OWNER"];
           else
                $vAccountOwner="";
            //echo "hi".$vAccountType;
           
           if(isset($_GET['id']) && count($getBank) == 1)
                $vBankCurrency=$getBank[0]['CURRENCY'];
           else if(isset($_POST['ENTITY_BANK']["CURRENCY"])<>"")                                        
                $vBankCurrency=$_POST['ENTITY_BANK']["CURRENCY"];
           else
                $vBankCurrency="";
           
           ?>
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
                                <td class="bottompad bankpad">                                
                                     <input type="text" autocomplete="on"  value="<?php echo $vBranch; ?>" class="" id="Branch" name="Branch" style="height:25px;width:240px;" class="">
                                 </td>
                            </tr>
                            <tr id="addbranch" class="spaceUnder"><td></td> <td class="padding-left-text-left-small"><div class="margintxt"  id="Addinput"></div></td></tr> 
                            <tr>
                                <td class="" ></td>
                                <td class="bottompad bankpad" ><input type="text" name="txt_bank" value="<?php echo $vBank; ?>" id="txt_bank" readonly>
                                <input type="hidden" name="hdn_bankid" id="hdn_bankid" value="<?php echo $bankId; ?>">
                                <input type="hidden" name="hdn_EntityBankId" id="hdn_EntityBankId" value="<?php echo $entityBankId; ?>">
                                </td>
                            </tr>
                            
                            <tr class="">
                                <th class=""><?php echo $Getlabelname->Get_Labelname_Fnc("193");?></th>
                                
                                 <td class="bottompad bankpad">
                                    <?php             
                 
                                            $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                                                    'model'=>Entity_Bank::model(),
                                                    'id'=>"ACCOUNT_TYPE",
                                                    'name'=>"ENTITY_BANK[ACCOUNT_TYPE]",                                                    
                                                    'value'=>"$vAccountType",
                                                    'source'=>$this->createUrl('Party/Account_TypeAutocomplete'),                                   
                                                    'options'=>array(
                                                     'minLength'=>'0', 
                                                     'select'=>'js:function( event, ui ) {
                                                                   
                                                               }',

                                                      'change'=>'js:function( event, ui ) {                                           
                                                               if (!ui.item) {
                                                                                $(this).val("");                                                                       
                                                                            }                                                 
                                                        }',                                        
                                                    ),
                                                    'htmlOptions'=>array(
                                                        'style'=>'',
                                                        'class'=>"autofocus",                                                    

                                                    ),
                                                ));               

                                    ?>                              
                                </td>
                            </tr>
                                  
                            <tr class="">
                                 <td colspan ="2" class="bottompad ">
                                     
                                     <table >
                                       <th> <?php echo $Getlabelname->Get_Labelname_Fnc("126");?> </th>
                                        <td style="padding-left: 63px;width: 173px;"> 
                                            <?php              
                                                   $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model_bank,"attribute"=>"WEF",
                                                   'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                                   'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"Bank_WEF",'value'=>$vBankWef,'style'=>'width:95px')));
                                             ?> 
                                        </td>   
                                        <th style="padding-right: 5px;"><?php echo $Getlabelname->Get_Labelname_Fnc("127");?> </th>
                                        <td >
                                            <?php              
                                                $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model_bank,"attribute"=>"WET",
                                                'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                                'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"Bank_WET",'value'=>$vBankWet,'style'=>'width:95px')));
                                            ?>  
                                            <input id="hdn_BankId" type="hidden" name="hdn_BankId" value="<?php echo $bankId; ?>">
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
                                    <td class="bottompad bankpad" ><?php echo $form->textField($model_bank,"ACCOUNT_NO",array("class"=>"","id"=>"ACCOUNT_NO",'value'=>$vAccountNo,'maxlength' => 30)); ?></td>
                                 </tr>
                            
                                <tr>
                                    <th class="" ><?php echo $Getlabelname->Get_Labelname_Fnc("195");?></th>
                                    <td class="bottompad bankpad" ><?php echo $form->textField($model_bank,"ACCOUNT_OWNER",array('readonly'=>true,'value'=>$vAccountOwner),array("class"=>"","id"=>"ACCOUNT_OWNER",'maxlength' => 100)); ?></td>
                                </tr>
                            
                            <tr>
                                <th class=""><?php echo $Getlabelname->Get_Labelname_Fnc("160");?></th>
                                <td class="bottompad bankpad" >
                                <?php               
                 
                                    $this->widget('zii.widgets.jui.CJuiAutoComplete',array(                                           
                                            'id'=>"Bank_CURRENCY",
                                            'model'=>Entity_Bank::model(),'name'=>"ENTITY_BANK[CURRENCY]",
                                            'value'=>$vBankCurrency,
                                            'source'=>$this->createUrl('ajax_request/FillCurrency'),                                   
                                            'options'=>array(
                                             'minLength'=>'0', 
                                             'select'=>'js:function( event, ui ) {
                                                           
                                                       }',

                                              'change'=>'js:function( event, ui ) {                                          
                                                      
                                                if (!ui.item) {
                                                    $(this).val("");                                                                       
                                                }
                                                                                                    
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
                                            <div style="width:701px">                                   
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
                                    <tbody class="scrollbody" style="height:211px !important">
                                        
                                    
                                        <?php 
                                        
                                                                                       
                                                
                                                
                                        if(isset($_GET['id']))
                                        {
                                                $criteria = new CDbCriteria;
                                                $criteria->alias = 'C';  
                                                $criteria->select = 'H.CALENDAR_NAME as CALENDARNAME,C.WEF,C.ID,C.WET'; 
                                                $criteria->join = 'left join HOLIDAY_CALENDAR H on H.Id=C.CALD_ID';         
                                                $criteria->condition = "C.ENTITY_ID=:id";
                                                $criteria->params = array(':id' => $_GET['id']);

                                                $getEntityCalendar=  Entity_Calender::model()->findAll($criteria);
                                                 
                                                //echo "hi".count($getEntityCalendar);                                               
                                        }
                                        
                                        $calendercount=0;
                                        if(isset($_GET['id']) && count($getEntityCalendar)>0)
                                             $calendercount=count($getEntityCalendar);
                                        else if(isset($_POST['hdn_CalenderCount'])<>'')       
                                            $calendercount=$_POST['hdn_CalenderCount'];
                                        if($calendercount<8)
                                            $calendercount=8;
                                        
                                        for($i=1;$i<=$calendercount;$i++) { 
                                            
                                        if(isset($_GET['id']) && count($getEntityCalendar) >= $i)
                                          $calanderId[$i]=$getEntityCalendar[$i-1]['ID'];
                                        else if(isset($_POST['hdn_calanderId-'.$i])<>"")                                          
                                            $calanderId[$i]=$_POST['hdn_calanderId-'.$i];
                                        else
                                            $calanderId[$i]="";     
                                        
                                        
                                        if(isset($_GET['id']) && count($getEntityCalendar) >= $i)
                                          $selectedcalanderId[$i]=$getEntityCalendar[$i-1]['CALD_ID'];
                                        else if(isset($_POST['hdn_selectedcalanderId-'.$i])<>"")                                          
                                            $selectedcalanderId[$i]=$_POST['hdn_selectedcalanderId-'.$i];
                                        else
                                            $selectedcalanderId[$i]="";      
                                        
                                        
                                        if(isset($_GET['id']) && count($getEntityCalendar) >= $i)
                                          $calenderName[$i]=$getEntityCalendar[$i-1]['CALENDARNAME'];
                                        else if(isset($_POST['Holiday_Calendar'][$i]["CALENDAR_NAME"])<>"")                                          
                                          $calenderName[$i]=$_POST['Holiday_Calendar'][$i]["CALENDAR_NAME"];
                                        else
                                           $calenderName[$i]="";
                                        
                                        if(isset($_GET['id']) && count($getEntityCalendar) >= $i)
                                          $calenderWef[$i]=date('d/m/Y',  strtotime($getEntityCalendar[$i-1]['WEF']));
                                        else if(isset($_POST['Entity_Calender'][$i]["WEF"]) && trim($_POST['Entity_Calender'][$i]["WEF"])!="")                                          
                                          $calenderWef[$i]=$_POST['Entity_Calender'][$i]["WEF"];
                                        else
                                           $calenderWef[$i]="";
                                        
                                        if(isset($_GET['id']) && count($getEntityCalendar) >= $i && $getEntityCalendar[$i-1]['WET']!="")
                                          $calenderWet[$i]=date('d/m/Y',  strtotime($getEntityCalendar[$i-1]['WET']));
                                        else if(isset($_POST['Entity_Calender'][$i]["WET"]) && trim($_POST['Entity_Calender'][$i]["WET"])!="")                                          
                                          $calenderWet[$i]=$_POST['Entity_Calender'][$i]["WET"];
                                        else
                                           $calenderWet[$i]="";
                                            
                                            
                                        ?>
                                        <tr>
                                            <td>
                                                <?php 

                                                    $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                                                         'model'=>$model_holiday,
                                                         'name'=>"Holiday_Calendar[$i][CALENDAR_NAME]",
                                                         'id'=>"CALENDAR_NAME-$i", 
                                                        'value'=>$calenderName[$i],
                                                         'source'=>$this->createUrl('ajax_request/FillCalendar?id='.$Entity_Id),                                   
                                                         'options'=>array(
                                                                   'minLength'=>'0', 
                                                                   'select'=>'js:function( event, ui ) {                                                                   
                                                                          $("#hdn_selectedcalanderId-'.$i.'").attr("value",ui.item.id);
                                                                     }',
                                                                   'change'=>'js:function( event, ui ) {                                           
                                                                               if (!ui.item) {
                                                                                    $(this).val("");   
                                                                                     $("#hdn_selectedcalanderId-'.$i.'").attr("value","");
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
                                                      'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                                      'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"CALENDER_WEF-$i",'value'=>$calenderWef[$i],'class'=>'datecols paddate')));
                                                ?>             
                                            </td>
                                            <td>
                                                <?php              
                                                      $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model_calender,"attribute"=>"[$i]WET",
                                                      'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                                      'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"CALENDER_WET-$i",'value'=>$calenderWet[$i],'class'=>'datecollast paddate')));
                                                ?> 
                                                <input id="<?php echo "hdn_selectedcalanderId-".$i;?>" type="hidden" name="<?php echo "hdn_selectedcalanderId-".$i;?>" value="<?php echo $selectedcalanderId[$i] ;?>">
                                                <input id="<?php echo "hdn_calanderId-".$i;?>" type="hidden" name="<?php echo "hdn_calanderId-".$i;?>" value="<?php echo $calanderId[$i] ;?>">
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
                            <table>
                                <tr>
                                    <td>
                                        <button id="dialogCalenderBtn" class="iframedialog"><?php  echo $Getlabelname->Get_Labelname_Fnc("226") ?></button>
                                    </td>
                                </tr>
                            </table>    
                
            </fieldset>
     
    </div>
        
    <div id="tabs-currency" class="tabcontent">
        <fieldset>
                <table cellspacing="0" cellpadding="0" id="tbl_EntityCurrency" class="org_relation gridcontent">
                                    <thead class="fixedHeader">
                                        <tr>
                                            <th style="text-align: center;border-radius: 5px;border-bottom-left-radius: 0px;border-bottom-right-radius: 0px;" colspan="5">
                                            <div style="width: 700px">
                                                <?php echo $Getlabelname->Get_Labelname_Fnc("160");?>
                                                <img title="Add" src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/icon_plus.png" class="clonerow" id="<?php echo "btn_AddCurrency" ;?>">  
                                            </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="padleft" width="267"><?php echo $Getlabelname->Get_Labelname_Fnc("160");?></td>
                                            <td class="padleft" width="96"><?php echo $Getlabelname->Get_Labelname_Fnc("126");?></td>
                                            <td class="padleft" width="96"><?php echo $Getlabelname->Get_Labelname_Fnc("127");?></td>
                                            <td class="padleft" width="106"><?php echo $Getlabelname->Get_Labelname_Fnc("161");?></td>
                                            <td class="padleft padright"><?php echo $Getlabelname->Get_Labelname_Fnc("162");?></td>
                                           
                                        </tr>
                                    </thead>
                                    <tbody class="scrollbody" style="height:212px !important">
                                        
                                    
                                        <?php 
                                        
                                        if(isset($_GET['id']))
                                        {
                                            $criteria = new CDbCriteria;
                                            $criteria->alias = 'C';  
                                            $criteria->select = 'B.DESCRIPTION as CURRENCYNAME,C.*'; 
                                            $criteria->join = 'left join BASIC_DEFINITION B on B.Id=C.CURRENCY_ID';         
                                            $criteria->condition = "C.ENTITY_ID=:id";
                                            $criteria->params = array(':id' => $_GET['id']); 
                                             $criteria->order = 'lower(B.DESCRIPTION) ASC';   
                                            $getEntityCurrency=  Entity_Currency::model()->findAll($criteria);
                                            //echo "hi".$getEntityCurrency[0]['CURRENCYNAME'];
                                        }

                                        $currencycount=0;
                                        if(isset($_GET['id']) && count($getEntityCurrency)>0)
                                             $currencycount=count($getEntityCurrency);
                                        else if(isset($_POST['hdn_CurrencyCount'])<>'')       
                                            $currencycount=$_POST['hdn_CurrencyCount'];
                                        if($currencycount<8)
                                            $currencycount=8;

                                        for($i=1;$i<=$currencycount;$i++) { 
                                            
                                        if(isset($_GET['id']) && count($getEntityCurrency) >= $i)
                                            $currencyId[$i]=$getEntityCurrency[$i-1]['ID'];
                                        else if(isset($_POST['hdn_currencyId-'.$i])<>"")                                          
                                            $currencyId[$i]=$_POST['hdn_currencyId-'.$i];
                                        else
                                            $currencyId[$i]=""; 
                                        
                                        if(isset($_GET['id']) && count($getEntityCurrency) >= $i)
                                            $selectedcurrencyId[$i]=$getEntityCurrency[$i-1]['CURRENCY_ID'];
                                        else if(isset($_POST['hdn_selectedcurrencyId-'.$i])<>"")                                          
                                            $selectedcurrencyId[$i]=$_POST['hdn_selectedcurrencyId-'.$i];
                                        else
                                            $selectedcurrencyId[$i]=""; 
                                        
                                        if(isset($_GET['id']) && count($getEntityCurrency) >= $i)
                                            $currencyname[$i]=$getEntityCurrency[$i-1]['CURRENCYNAME'];
                                        else if(isset($_POST['Basic_definition'][$i]["DESCRIPTION]"])<>"")                                          
                                            $currencyname[$i]=$_POST['[Basic_definition'][$i]["DESCRIPTION"];
                                        else
                                            $currencyname[$i]=""; 
                                        
                                        if(isset($_GET['id']) && count($getEntityCurrency) >= $i)
                                          $currencyWef[$i]=date('d/m/Y',  strtotime($getEntityCurrency[$i-1]['WEF']));
                                        else if(isset($_POST['Entity_Currency'][$i]["WEF"]) && trim($_POST['Entity_Currency'][$i]["WEF"])!="")                                          
                                          $currencyWef[$i]=$_POST['Entity_Currency'][$i]["WEF"];
                                        else
                                           $currencyWef[$i]="";
                                        
                                        if(isset($_GET['id']) && count($getEntityCurrency) >= $i && $getEntityCurrency[$i-1]['WET']!="")
                                          $currencyWet[$i]=date('d/m/Y',  strtotime($getEntityCurrency[$i-1]['WET']));
                                        else if(isset($_POST['Entity_Currency'][$i]["WET"]) && trim($_POST['Entity_Currency'][$i]["WET"])!="")                                          
                                          $currencyWet[$i]=$_POST['Entity_Currency'][$i]["WET"];
                                        else
                                           $currencyWet[$i]="";
                                        
                                        if(isset($_GET['id']) && count($getEntityCurrency) >= $i)
                                            $basecurrency[$i]=$getEntityCurrency[$i-1]['IS_BASE_CURRENCY'];
                                        else if(isset($_POST['Entity_Currency'][$i]["IS_BASE_CURRENCY"])<>"")                                          
                                            $basecurrency[$i]=$_POST['Entity_Currency'][$i]["IS_BASE_CURRENCY"];
                                        else
                                            $basecurrency[$i]="N"; 
                                        
                                        if($basecurrency[$i]=="Y")
                                            $basecurrency[$i]=TRUE;
                                        else
                                            $basecurrency[$i]=FALSE;
                                        
                                        if(isset($_GET['id']) && count($getEntityCurrency) >= $i)
                                            $reportingcurrency[$i]=$getEntityCurrency[$i-1]['IS_REPORTING_CURRENCY'];
                                        else if(isset($_POST['Entity_Currency'][$i]["IS_REPORTING_CURRENCY"])<>"")                                          
                                            $reportingcurrency[$i]=$_POST['Entity_Currency'][$i]["IS_REPORTING_CURRENCY"];
                                        else
                                            $reportingcurrency[$i]="N"; 
                                        
                                        if($reportingcurrency[$i]=="Y")
                                            $reportingcurrency[$i]=TRUE;
                                        else
                                            $reportingcurrency[$i]=FALSE;
                                        
                                        //echo "hi".$reportingcurrency[$i];
                                        
                                        ?>
                                        <tr>
                                            <td>
                                                <?php 
                                                    $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                                                         'model'=>$model_basicdefinition,
                                                         'name'=>"Basic_definition[$i][DESCRIPTION]",
                                                         'id'=>"CURRENCY_DESCRIPTION-$i",
                                                         'value'=>$currencyname[$i],
                                                         'source'=>$this->createUrl('ajax_request/FillCurrency'),                                   
                                                         'options'=>array(
                                                                   'minLength'=>'0',                                               
                                                                   'select'=>'js:function( event, ui ) {                                                                   
                                                                          $("#hdn_selectedcurrencyId-'.$i.'").attr("value",ui.item.id);
                                                                     }',
                                                                   'change'=>'js:function( event, ui ) {                                           
                                                                               if (!ui.item) {
                                                                                    $(this).val("");   
                                                                                     $("#hdn_selectedcurrencyId-'.$i.'").attr("value","");
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
                                                      'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                                      'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"CURRENCY_WEF-$i",'value'=>$currencyWef[$i],'class'=>'datecols paddate')));
                                                ?>             
                                            </td>
                                            <td>
                                                <?php              
                                                      $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model_currency,"attribute"=>"[$i]WET",
                                                      'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                                      'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"CURRENCY_WET-$i",'value'=>$currencyWet[$i],'class'=>'datecollast paddate',"style"=>"margin-right:0px !important")));
                                                ?> 
                                            </td>
                                             <td style="border: solid #e8e8e8 2px;">
                                                  <?php echo $form->checkBox($model_currency,"[$i]IS_BASE_CURRENCY",array("id"=>"IS_BASE_CURRENCY-$i","checked"=>$basecurrency[$i],"uncheckValue"=>'N',"class"=>"checkboxwidth")); ?>
                                             </td>
                                            <td style="border: solid #e8e8e8 2px;" width="100%">
                                                  <?php echo $form->checkBox($model_currency,"[$i]IS_REPORTING_CURRENCY",array("id"=>"IS_REPORTING_CURRENCY-$i","checked"=>$reportingcurrency[$i],"uncheckValue"=>'N',"class"=>"checkboxwidth")); ?>
                                                 <input id="<?php echo "hdn_selectedcurrencyId-".$i;?>" type="hidden" name="<?php echo "hdn_selectedcurrencyId-".$i;?>" value="<?php echo $selectedcurrencyId[$i] ;?>">
                                                 <input id="<?php echo "hdn_currencyId-".$i;?>" type="hidden" name="<?php echo "hdn_currencyId-".$i;?>" value="<?php echo $currencyId[$i] ;?>">
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
                                             <div style="width:703px">
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
                                        
                                        
                                        if(isset($_GET['id']))
                                        {
                                                $criteria = new CDbCriteria;
                                                $criteria->alias = 'EP';  
                                                $criteria->select = 'P.DESCRIPTION as POLICYNAME,EP.*'; 
                                                $criteria->join = 'left join POLICY P on EP.POLICY_ID=P.ID';         
                                                $criteria->condition = "EP.ENTITY_ID=:id";
                                                $criteria->params = array(':id' => $_GET['id']);  
                                                $getEntityPolicy=  Entity_Policy::model()->findAll($criteria);
                                                 //echo "hi".$getEntityPolicy[0]['POLICYNAME'];                                               
                                        }

                                        $policydbcountcount=0;
                                        if(isset($_GET['id']) && count($getEntityPolicy)>0)
                                             $policydbcountcount=count($getEntityPolicy);
                                        
                                        if($policydbcountcount<8)
                                            $policydbcountcount=8;
                                        
                                        for($i=1;$i<=$policycount;$i++) { 
                                            if(isset($_POST['hdn_PolicyCount']))
                                            { 
                                            if($i>$policydbcountcount &&  $i > $_POST['hdn_PolicyCount'])
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
                                            
                                            if(isset($_GET['id']) && count($getEntityPolicy) >= $i)
                                            {
                                                $policyid[$i]=$getEntityPolicy[$i-1]['POLICY_ID'];
                                            }
                                            else if(isset($_POST['PolicyId-'.$i])!="")
                                            {
                                                $policyid[$i]=$_POST['PolicyId-'.$i];
                                            }
                                            else
                                            {
                                                $policyid[$i]="";
                                            }
                                            
                                            if(isset($_GET['id']) && count($getEntityPolicy) >= $i)
                                            {
                                                $hdn_policyid[$i]=$getEntityPolicy[$i-1]['ID'];
                                            }
                                            else if(isset($_POST['hdn_PolicyId-'.$i])!="")
                                            {
                                                $hdn_policyid[$i]=$_POST['hdn_PolicyId-'.$i];
                                            }
                                            else
                                            {
                                                $hdn_policyid[$i]="";
                                            }
                                            
                                            if(isset($_GET['id']) && count($getEntityPolicy) >= $i)
                                              $policyname[$i]=$getEntityPolicy[$i-1]['POLICYNAME'];
                                            else if(isset($_POST['Policy'][$i]["DESCRIPTION"])<>"")                                          
                                              $policyname[$i]=$_POST['Policy'][$i]["DESCRIPTION"];
                                            else
                                               $policyname[$i]="";
                                            
                                            if(isset($_GET['id']) && count($getEntityPolicy) >= $i)
                                              $policyvalue[$i]=$getEntityPolicy[$i-1]['POLICY_VALUE'];
                                            else if(isset($_POST['Entity_Policy'][$i]["POLICY_VALUE"])<>"")                                          
                                              $policyvalue[$i]=$_POST['Entity_Policy'][$i]["POLICY_VALUE"];
                                            else
                                               $policyvalue[$i]="";
                                            
                                            if(isset($_GET['id']) && count($getEntityPolicy) >= $i)
                                              $policyWef[$i]=date('d/m/Y',  strtotime($getEntityPolicy[$i-1]['WEF']));
                                            else if(isset($_POST['Entity_Policy'][$i]["WEF"]) && trim($_POST['Entity_Policy'][$i]["WEF"])!="")                                          
                                              $policyWef[$i]=$_POST['Entity_Policy'][$i]["WEF"];
                                            else
                                               $policyWef[$i]="";

                                            if(isset($_GET['id']) && count($getEntityPolicy) >= $i && $getEntityPolicy[$i-1]['WET']!="")
                                              $policyWet[$i]=date('d/m/Y',  strtotime($getEntityPolicy[$i-1]['WET']));
                                            else if(isset($_POST['Entity_Policy'][$i]["WET"]) && trim($_POST['Entity_Policy'][$i]["WET"])!="")                                          
                                              $policyWet[$i]=$_POST['Entity_Policy'][$i]["WET"];
                                            else
                                               $policyWet[$i]="";

                                            ?>
                                        <tr style="<?php echo $displaypolicy; ?>" id="<?php echo "tr_policy-".$i;?>">
                                            <td>
                                                <?php 
                                                
                                                    $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                                                         'model'=>$model_policy,
                                                         'name'=>"Policy[$i][DESCRIPTION]",
                                                         'id'=>"POLICY_DESCRIPTION-$i",                                     
                                                         'source'=>$this->createUrl('Entity/FillPolicy'),  
                                                        'value'=>$policyname[$i], 
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
                                                 <input id="<?php echo "hdn_PolicyId-".$i;?>" type="hidden" name="<?php echo "hdn_PolicyId-".$i;?>" value="<?php echo $hdn_policyid[$i];?>">
                                            </td>
                                             <td>
                                                 <?php 
                                                    $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                                                         'model'=>$model_entitypolicy,
                                                         'name'=>"Entity_Policy[$i][POLICY_VALUE]",
                                                         'id'=>"POLICY_POLICY_VALUE-$i",                                    
                                                       'value'=>$policyvalue[$i],   
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
                                                      'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                                      'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"Policy_WEF-$i",'value'=>$policyWef[$i],'class'=>'policydates paddate')));
                                                ?>             
                                            </td>
                                            <td>
                                                <?php              
                                                      $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model_entitypolicy,"attribute"=>"[$i]WET",
                                                      'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                                      'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"Policy_WET-$i",'value'=>$policyWet[$i],'class'=>'datecollast paddate')));
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


             for($i=1;$i<=count($getFlex); $i++) {
                
                $selectedflexid[$i]= $getFlex[$i-1]['ID']; 
                if(isset($_GET['id']))
                {
                   $criteria = new CDbCriteria;
                   $criteria->condition = "ENTITY_ID=:id and FLEX=:flexId";
                   $criteria->params = array(':id' => $_GET['id'],':flexId'=>$selectedflexid[$i]);                               
                   $get_db_Flex=  Entity_Flex::model()->findAll($criteria);                                                                      
                }

                if(isset($_GET['id']) && count($get_db_Flex) == 1)
                   $flexValue[$i]=$get_db_Flex[0]['FLEX_VALUE'];
                else if(isset($_POST['Entity_Flex'][$i]["FLEX_VALUE"])<>"")                                          
                    $flexValue[$i]=$_POST['Entity_Flex'][$i]["FLEX_VALUE"];
                else
                    $flexValue[$i]=""; 
                 
                if(isset($_GET['id']) && count($get_db_Flex) == 1 && $get_db_Flex[0]['WEF']!="")
                    $vFlexWef[$i]=date('d/m/Y',  strtotime($get_db_Flex[0]['WEF']));
                else if(isset($_POST['Entity_Flex'][$i]["WEF"]) && trim($_POST['Entity_Flex'][$i]["WEF"])!="")                                        
                    $vFlexWef[$i]=$_POST['Entity_Flex'][$i]["WEF"];
                else
                     $vFlexWef[$i]="";

                if(isset($_GET['id']) && count($get_db_Flex) == 1 && $get_db_Flex[0]['WET']!="")
                    $vFlexWet[$i]=date('d/m/Y',  strtotime($get_db_Flex[0]['WET']));
                else if(isset($_POST['Entity_Flex'][$i]["WET"]) && trim($_POST['Entity_Flex'][$i]["WET"])!="")                                        
                    $vFlexWet[$i]=$_POST['Entity_Flex'][$i]["WET"];
                else
                     $vFlexWet[$i]="";
                
                
                if(isset($_GET['id']) && count($get_db_Flex) == 1)
                   $flexNote[$i]=$get_db_Flex[0]['NOTE'];
                else if(isset($_POST['Entity_Flex'][$i]["NOTE"])<>"")                                          
                    $flexNote[$i]=$_POST['Entity_Flex'][$i]["NOTE"];
                else
                    $flexNote[$i]="";
                
                if(isset($_GET['id']) && count($get_db_Flex) == 1)
                   $flexid[$i]=$get_db_Flex[0]['ID']; 
                else if(isset($_POST['hdn_FlexId-'.$i])<>"")                                          
                   $flexid[$i]=$_POST['hdn_FlexId-'.$i];
                else
                   $flexid[$i]="";     
                 
             ?>
                <tr>
                    <th nowrap>
                       <span class="marginleft"><?php echo $getFlex[$i-1]['DESCRIPTION']; ?></span>
                    </th>
                    <td>
                        <?php echo $form->textField($model_flex,"[$i]FLEX_VALUE",array("class"=>"flexinput marginleft ","id"=>"FLEX_VALUE-$i",'value'=>$flexValue[$i],'maxlength' => 100)); ?>
                    </td>
                    <td>
                        <?php
                        $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model_flex,"attribute"=>"[$i]WEF",
                            'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',
                                'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"FLEX_WEF-$i",'value'=>$vFlexWef[$i],'class'=>'datecols paddate')));
                        ?>
                    </td>
                    <td>
                        <?php
                        $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model_flex,"attribute"=>"[$i]WET",
                            'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',
                                'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"FLEX_WET-$i",'value'=>$vFlexWet[$i],'class'=>'datecols paddate')));
                        ?>
                    </td>

                    <td>
                        <?php echo $form->textField($model_flex,"[$i]NOTE",array("class"=>"flexinput rightgrid","id"=>"NOTE-$i",'value'=>$flexNote[$i],'maxlength' => 512)); ?>
                        <input id="<?php echo "hdn_SelectedFlexId-".$i;?>" type="hidden" name="<?php echo "hdn_SelectedFlexId-".$i;?>" value="<?php echo $selectedflexid[$i];?>">
                        <input id="<?php echo "hdn_FlexId-".$i;?>" type="hidden" name="<?php echo "hdn_FlexId-".$i;?>" value="<?php echo $flexid[$i];?>">
                    </td>


                </tr>
            <?php } ?>
                <input id="hdn_FlexCount" type="hidden" name="hdn_FlexCount" value="<?php echo count($getFlex); ?>">
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
                         <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"submit",'size'=>'small', 'label'=>$model->isNewRecord ? $Getlabelname->Get_Labelname_Fnc("103") : $Getlabelname->Get_Labelname_Fnc("103"),'id'=>"btn_Save",'icon'=>"icon-thumbs-up",'htmlOptions'=>array('onclick'=>'js:return SaveEntity();'))); ?>            
                         <?php 
                            if($Entity_Id!="" && $Entity_Id>0)
                                $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'link','url'=>Yii::app()->createUrl('entity/DeleteEntity', array('id'=>$Entity_Id)),'type'=>'danger','label'=>$Getlabelname->Get_Labelname_Fnc("225"),'id'=>"btn_Delete")); 
                         ?>
                         <input id="partyid" type="hidden" name="partyid" value="">
                    </td>
                </tr>
        </tbody>        
    </table>                
<?php 
if(isset($_GET['id'])!="")
{
    echo '<script type="text/javascript">FillImage();</script>';
}

?>
<?php $this->endWidget(); ?>

<!--</div> form -->