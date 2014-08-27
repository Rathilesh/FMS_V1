<?php
$Getlabelname =new Get_Labelname_Cls();
$GetTitleHelp =new Title_Help();
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



<style>
/* accordian styles*/ 
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
    .ui-tabs .ui-tabs-nav li a, .ui-tabs-collapsible .ui-tabs-nav li.ui-tabs-active a:hover {color: black !important; font-weight:bold !important;}
    
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
/************************************************************************* accordian styles ends here***************************************/
/*.grid_insert_table tbody tr:last-child td

{
    border: 5px solid #ECECEC !important;
}*/
/*#bank_accordion_table tbody tr:last-child td
 {
      border-bottom: none !important;    
 } */

.grid_insert_table tbody tr:first-child td
{
    border-bottom: none !important; 
}
 
 
 tr.spaceUnder > td 
 {
      padding-bottom: .5em;
     
 }
    
   tr.spaceUnder > td.margin
 {
    text-align:left !important;
    padding-left: 20px;
    width:138px !important;

 }   
 
    tr.spaceUnder > td.margin1
 {
    text-align:left !important;
    padding-left: 40px; 
/*    width:85px !important;*/

 }  
/*  .plusbutton
  {
      float:right;
      margin-left: -23px;
        margin-left: -30px;
        margin-left: 478px;
        padding-top: 215px;
  }*/

.Grid Table
{
        height:auto;
        background: #ECECEC !important;
/*        width:1100px !important;*/
        width:auto;
        border-bottom-left-radius: 15px !important;
        border-bottom-right-radius: 15px !important;
        border-top-left-radius: 15px !important;
        border-top-right-radius: 15px !important;
        padding-bottom: 0px !important;margin-right:10px !important;
}

 .grid_insert_table 
{
        height:270px !important;
        background: #ECECEC !important;
/*        width:1100px !important;*/
        width:1188px !important;
        border-bottom-left-radius: 0px !important;
        border-bottom-right-radius: 0px !important;
        padding-bottom: 0px !important;
}


.grid_insert_table_moreinfo 
{
    width: auto;
    border: 1px solid #B8D3A0;
    border-radius: 10px;
/*    border-top-left-radius: 10px !important;
    border-bottom-left-radius: 10px !important;*/
    float: left;
    padding: 6px;
    padding-bottom: 16px;
    
    box-shadow: 0px 0px 22px 3px #c4c4c4;
}

.grid_insert_table_bankbranch
{
    width: auto;
/*    border: 1px solid #B8D3A0;*/
/*    border-radius: 10px;*/
    border-top-left-radius: 10px !important;
    border-bottom-left-radius: 10px !important;
    float: left;
    padding: 6px;
    padding-bottom: 16px;
    background:#ECECEC !important;
    border-bottom:1px solid #B0B0B0 ;border-left:1px solid #B0B0B0 ;border-top:1px solid #B0B0B0 ;
    box-shadow: 0px 0px 22px 3px #c4c4c4;
}




.grid_insert_table_bankdetails
{
    width: auto;
/*    border: 1px solid #B8D3A0;*/
/*    border-radius: 10px;*/
    border-bottom:1px solid #B0B0B0 ;border-right:1px solid #B0B0B0 ;border-top:1px solid #B0B0B0 ;
    border-top-right-radius: 10px !important;
    border-bottom-right-radius: 10px !important;
    float: left;
    padding: 6px;
    padding-bottom: 16px;
    background:#ECECEC !important;
    box-shadow: 0px 0px 22px 0px #c4c4c4;
}
.grid_insert_table_generic
{
    width: auto;
    border: 1px solid #B8D3A0;
    border-radius: 10px;
/*    border-bottom:1px solid #B0B0B0 ;border-right:1px solid #B0B0B0 ;border-top:1px solid #B0B0B0 ;*/
/*    border-top-right-radius: 10px !important;
    border-bottom-right-radius: 10px !important;*/
    float: left;
    padding: 6px;
    padding-bottom: 16px;
    background:#E8E8E8 !important;
/*    box-shadow: 0px 0px 22px 0px #c4c4c4;  */
}

 .grid_insert_table2
 {
      width:580px !important;
/*      margin-top: -164px;padding-left: 201px;*/
/*      margin-bottom: 100px;*/
 }
 
 .partytype
 {
     width:498px !important;	
/*     float:right;
     margin-top: -151px;*/
     border: 1px solid #B8D3A0;
     border-bottom-left-radius: 6px !important;
     border-bottom-right-radius: 6px !important;
     margin-right: -520px !important;margin-top: 22px;
     border-top-left-radius: 5px;
     border-top-right-radius: 8px;
 }  
 
 .Grid_Insert_Table
 {
     
/*        width:1114px !important;*/
        width:1186px !important;
        height: auto;
        float: left!important;
        border-bottom-left-radius: 0px !important;
        border-bottom-right-radius: 0px !important; margin-left:-6px !important;
        box-shadow:-2px 6px 15px 8px #c4c4c4 !important;
/*        background-color: blanchedalmond;*/


 }
 
.btn_save 
{
        text-align: right !important;
        padding: 5px;
        border-bottom-left-radius: 10px!important;
}  
    
.tbl_btn
    {
/*        width:1115px;*/
        width:1159px !important;
        padding-top: 2px;
        border: 1px solid #D3D0D0;
        border-radius: 10px;
        border-top:none;
        border-top-left-radius: 0px;
        border-top-right-radius: 0px;
        padding-right: 15px;
        box-shadow:0px 6px 15px 0px #c4c4c4;

    } 
    
.testclass1 
  {
/*      width: 178px;
        height: 155px;*/
        width: 178px;
        height: 155px;
        float: left;
        margin: 0 auto;
        border: 1px solid #CACACA;
        background-color: white;
        margin: 0%;
        border-radius: 15px; 
        background-image: url( <?php if(isset($_GET['id']))
                               { 
                                    $condition= "PARTY_ID=".$_GET['id'];
                                    $get_count_image=PARTY_IMAGE::model()->count($condition);
                                    if($get_count_image>0)
                                    {
                                        echo Yii::app()->request->baseUrl."/index.php/party_image/DisplayPARTYSavedImage?id=".$_GET['id'];
                                    }
                                    else
                                    {
                                       echo "../../images/logoparty.png" ;  
                                    }
                               } 
                               else 
                               { 
                                   echo "../../images/logoparty.png" ; 
                                   
                               }?>);
        background-position: -1px 0px 0px 0px;
        background-repeat: no-repeat;
        background-size: 100% 100%;
        margin-top:5px;
  }   
  
.logo
{
    margin-top: 5px !important;
    width:180px;
    height:200px; 
    margin: 5px auto;
    margin-left: 4px;
    background-color: #ECECEC !important;
    border-radius: 10px;
    margin-bottom: 5px;
}

.contactvariant
{
    float: left !important;
    padding-left: 11px;
    

} 
.party_type{width:270px !important;text-align:left !important;padding-left: 6px !important;}

.border_partytype
{
        border-left:2px solid #e8e8e8!important;

}

.hasDatepicker
    {
        width:95px!important;
        margin-left: 0px!important;
    }
   
/*.label_width_contact
    {
         width:60px !important;
         font-weight: bold !important;
    }*/
.email_fax
{
    margin-left: 10px !important;margin-right: 10px !important;margin-top: 0px !important;
/*    margin-bottom: 20px!important;
    border-bottom:2px solid #e8e8e8 !important;*/
/*    margin-top: 20px;*/
}
.mobile_url
{
    margin-top: 0px !important;
    margin-left: 10px !important;
    margin-right: 10px !important;
}

.wet_wef
{
    margin-top: 0px !important;
    margin-left: 10px !important;
    margin-right: 10px !important;
/*   margin-top: 20px!important; */
}

.margin1
{
/*    border-bottom:2px solid #e8e8e8 !important;
    border-right:2px solid #e8e8e8 !important;*/
    padding-top: 0px !important;
    font-weight: bold !important;font-size: 12px;
}
/*
.banknameaccordion
{
    
    border-top:2px solid #8F9686 !important;
    border-left:2px solid #8F9686 !important;
    border-top-left-radius: 5px;
    padding-top: 15px !important;
    font-weight: bold !important;
}

.banknametextaccordion
{
    
    border-top:2px solid #8F9686 !important;
    border-right:2px solid #8F9686 !important;
    border-top-right-radius: 5px;
    padding-top: 15px !important;
    font-weight: bold !important;
}*/

/*.bankbranchaccordion
{
    border-bottom:2px solid #8F9686 !important;
    border-bottom-left-radius: 5px;
    border-left:2px solid #8F9686 !important;
    padding-top: 15px !important;
    font-weight: bold !important;
}*/

/*.bankbranchtextaccordion
{
    border-bottom:2px solid #e8e8e8 !important;
    border-bottom-right-radius: 5px;
    border-right:2px solid #8F9686 !important;
    padding-top: 15px !important;
    font-weight: bold !important;
}*/

.T_ext
{
/*    border-bottom:2px solid #e8e8e8 !important;
    border-right:2px solid #e8e8e8 !important;*/
}

.fax_url_wet
{
/*    border-bottom:2px solid #e8e8e8 !important;*/
}

.tabular_submit_padding 
{
padding: 5px !important;
}
.outer-container-party
{
    float:left;width:auto; 
    height: auto;
    background-color:#ECECEC !important;
}

.leftimageparty
{
    width:190px; 
    height: auto; 
    float:left; padding-top: 23px;padding-bottom: 23px;margin-right: -5px;
/*    background-color:#FFB6C1*/
}

.middleimageparty
{
    width:432px; 
    height: auto;
    float:left; 
/*    background-color: rgb(223, 233, 224) !important;*/
    background-color:#ECECEC !important;
    padding-top: 22px;
    border-left:2px solid #FAFAD2 !important;	
}

.rightgridparty
{
    
    width:auto;
    height: auto;
    float:left; 
    background-color:#ECECEC !important;
}

.addresstable
{  
/*    width:auto !important;*/
    margin-bottom:0px;
    padding: 0px; padding-left: 30px;
    border-bottom: 5px solid #e8e8e8;border-left:5px solid #e8e8e8;border-top:5px solid #e8e8e8;
    padding-right: 30px;padding-bottom: 5px;
    padding-top: 5px;
}

.secondtablecontact
{
    height: 120px;
    margin-bottom:0px;
    padding: 21.5px; 
/*    border-top:5px solid #e8e8e8;*/
/*    border: 5px solid #e8e8e8;*/
    padding-left: 0px;
    padding-top: 10px; 
    padding-right: 0px;
    margin-left: -13px;
/*    padding-bottom: 36px;*/
}


.moreinfo
{
/*        text-align: right !important;*/
   font-style: italic;
   cursor: pointer;
/*        float: right;*/
}

.scrollContent
{
   display: block;
   overflow-y:scroll;
   width:auto;
   height:83px;
}

.ScrollContent
{
   display: block;
   overflow-y:scroll;
   width:auto;
   height:125px;
}


#table_bottom_bg { margin-left: -7px !important;width: 1188px !important;height: 33px !important; }  

.plusbutton{float:right;padding-right: 10px;}  

.wefwet
{
  margin-right:50px;
}

.fixedHeader 
{
        position: relative;
        display: block;
}

.fixedHeader2
 {
     background-color:#ECECEC !important;
 }
 
.detailseditbtn1
{
      cursor:pointer;
/*      margin-left: 415px;  */
}


tr.spaceUnder  > td.marginsname
{
    text-align:left !important;
    width:200px !important;
    padding-left: 20px;
}

.link  > td #create-branch a
{color:white !important;}

#Addinput {
    -moz-appearance: textfield;
    -webkit-appearance: textfield;
    background-color: white;
    background-color: -moz-field;
    border: 1px solid darkgray;
    box-shadow: 1px 1px 1px 0 lightgray inset;  
/*    font: -moz-field;*/
/*    font: -webkit-small-control;*/
    margin-top: 0px;
    padding: 0px 5px;
    height:18px;
    width: 230px;
    margin-left: 1px;
}





/************Styles

 
/* *********** Styles written for pop-up******************/
.ui-dialog .ui-dialog-titlebar
    {
       background-color:#E6D6D6;
    }
 
.ui-icon-closethick 
    {
/*        background-color:red !important;
       display:none !important;*/
    }
    
.ui-dialog .ui-dialog-titlebar-close {
    opacity:  1.25 !important;
}    
    
    
/* *********** Styles written for tabs*****************/
  
.ui-tabs
{
        padding-top:0px !important;
}

.ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all
{
       background-color: #D8BFD8 !important;
}
    
.ui-datepicker td .ui-state-default 
{
    border: 0px;
    background: none !important;
}  

.ui-datepicker td .ui-state-default:hover 
{
    background: blue !important;
}

#Iframe
{
    height: 550px;
    width:700px;
    background: white;
    box-shadow: 0 2px 12px 6px rgba(0,0,0,.6);
}
#Gframe
{
    height: 550px;
    width:835px;
    background: white;
    box-shadow: 0 2px 12px 6px rgba(0,0,0,.6);
}

#dialogBtn1
{
    border-radius: 10px;
    width: 85px;
    border: none;
    background-color: #357AE8;
    color: white;
}

#dialogBtn2
{
/*    border-radius: 10px;
    width: 85px;
    border: none;
    background-color: #357AE8;
    color: white;*/
}
#dialogBtn
{
    border-radius: 10px;
    width: 85px;
    border: none;
    background-color: #357AE8;
    color: white;
}

detailseditbtn2 
{
cursor: pointer;
margin-left: 380px;
margin-top: -50px;

}

.slimScrollDiv { height:auto !important}
/*iframe[name=modal] {
    display: none;
    width: 70%;
    height: 70%;
    position: fixed;
    top: 4%; left: 4%;
    background: white;
    box-shadow: 0 2px 12px 6px rgba(0,0,0,.6);
}

iframe[name=modal].active {
    display: block;
}*/
.input-append{display:inline-block;margin-bottom:0px !important;vertical-align:middle;font-size:0;white-space:nowrap;}
.input-append .add-on {
    background-color: #DFDCDC !important;
    height: 25px !important;
    padding: 0 !important;
    margin-left: -4px !important;
}


</style>
<div id="overlap_all"  style="width:100%; height:140%; z-index: 1001; position: absolute;top:0px;left:0px; background-color:rgba(151, 149, 149, 0.360784); display: none !important"></div>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/custom_jquery/validation_v1.js" type="text/javascript"></script>

<script>
  $(document).ready(function() {
      
    var hide_generic_bank =$("#partyid").val();
    
    if(hide_generic_bank=="")
        {
          // $("#bank_generic").hide();
           //$("#Party_generic").hide();
        }
    else
        {
            
        }
    
    
 $("#Addinput").click(function(){
     $("#addbranch").hide();
 });
var fullDate = new Date();console.log(fullDate);
var twoDigitMonth = (parseInt(fullDate.getMonth())+1)+"";if(twoDigitMonth.length==1)  twoDigitMonth="0" +twoDigitMonth;
var twoDigitDate = fullDate.getDate()+"";if(twoDigitDate.length==1) twoDigitDate="0" +twoDigitDate;
var currentDate = twoDigitDate + "/" + twoDigitMonth + "/" + fullDate.getFullYear();
//console.log(currentDate);
//alert(currentDate);
var Edate=$( "#DOB" ).val();
if(Edate=="")
    {
        $( "#DOB" ).val(currentDate);
    }
else
    {

    }
///var currentdate =new Date();
//alert(currentdate);
//var embalmntdate =$( "#DOB" ).val();
// var today = new Date();
//    today.setHours(0,0,0,0);
//               var dob=  embalmntdate.split("/");
//               userdob = new Date(dob[2], dob[1] -1, dob[0]); 
var PFNAME=$('#PARTY_PREFERRED_NAME').val();  
    if(PFNAME!="")
        {
          $('#ACCOUNT_OWNER').val(PFNAME);  
        }
    else
        {
          $('#ACCOUNT_OWNER').val("");
        }
 
     
  $('.convert_to_scroll').slimscroll({
           size: '8px',
           height:'175px',
           wheelStep: 10,
           color: '#7A7A7A',
           width:'100%',
           margin:'10px auto !important'
           
         }); 


//         
//         $("#DOB").mask("99/99/9999");
//        //    //$('#datepicker').mask("99/99/9999",{placeholder:"-"}); 
//            $( "#DOB" ).datepicker({
//            changeMonth: true,
//            changeYear: true
//            });
//           $( "#DOB" ).datepicker( "option", "showAnim", "bounce" );
//           $( "#DOB" ).datepicker( "option", "dateFormat", "dd/mm/yy" );        
      
//     var modalTriggers = Array.prototype.slice.call(document.querySelectorAll('a[target=modal]'));
//var modal = document.querySelector('iframe[name=modal]');
//
//modalTriggers.forEach(function(trigger){
//    trigger.addEventListener('click', function() {
//        modal.classList.toggle('active');
//    }, false);
//});
      
  //$("#iframee #menu-wrapper,#bottom_menu_bar,#patternDiv,#footer,.link-wrap").hide();   
  
  
 //For opening image upload form in iframe.........
   var id=$("#partyid").val();
   var iframeimage = $('<iframe border=0 id="UploadIframe" name="UploadIframe" src="<?php echo Yii::app()->request->baseUrl;?>/index.php/party_image/create?iframe=1&type=party&id='+id+'" scrolling="no" style="width:650px"  noresize frameborder="1" ></iframe>');

     
       var imagedialog=$("<div></div>").append(iframeimage).appendTo("body").dialog({
        autoOpen: false,
        modal: true,
        show: "fade",
        hide: "fade",
        resizable: false,
        title:'Upload logo',
        width: '700',
        height: '300',
       
        close: function () {
            var id=$("#partyid").val();
           
        <?php
                                    if(isset($_GET['id'])) { 
                                    $condition= "PARTY_ID=".$_GET['id'];
                                    $get_count_image=PARTY_IMAGE::model()->count($condition);
                                    if($get_count_image>0)
                                    {
        ?>                       
        
            var test =<?php echo "'{$this->createUrl('party_image/DisplayPARTYSavedImage')}'"; ?>;
            test= test+"?id="+id;
            $('#testclass1').css("background-image", "url("+test+")");
            
        <?php                        }        ?>
           // alert("No Image");
                                    <?php   } ?>
           // $('#testclass1').show();     
 //left_image_party
        }
    });
   
      $('#testclass1').click(function(){   
        if($("#partyid").val()!="")
        {
            <?php 
            if(isset($_GET['id'])) {
            $condition= "PARTY_ID=".$_GET['id'];
            
          // echo $condition;exit;
            $get_count_image=PARTY_IMAGE::model()->count($condition);
            
       //  echo $get_count_image;exit;
          
            if($get_count_image>0) 
                
                {
            ?>
//                var r = confirm("Already Logo Is here If you Relplace this ?");
//                        if (r == true)
//                          {
//                             imagedialog.dialog().dialog("open");
//                             return false;
//                          }
//                        else
//                          {
//                            return false;
//                          }

                bootbox.confirm("<p class='modalstyle'><b><img width='30px' src='<?php echo Yii::app()->request->baseUrl; ?>/images/question_red.png'/>Confirmation</b></p><p>Logo exists for this Party. Are you sure to replace this ?</p>", "No", "Yes", function(result) {
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





           <?php 
 //               } 
                ?>
                     //   imagedialog.dialog().dialog("open");
                      //  return false;
                <?php
            }
            ?>
        }

        else
        {
            GetStaticAlert("20534");
            return false;
        }
    });  
   
//*************************   *************************************         ****************************       **************************
//#########################   #####################################         ############################       ##########################


      
  
//  $("#menu-wrapper,#bottom_menu_bar,#patternDiv,#footer,.link-wrap").hide();   
    $('#addbranch').hide();
//**************hide add branch in bank tab*************************  
    $( "#accordion" ).accordion({
        collapsible: true,
        active: false,
     // event: "click hoverintent"
    });
//***********tabs function*********  
    $( "#party_tabs" ).tabs();
//***********tabs function********* 
//  $("#PARTY_PREFERRED_NAME").click(function(){
//      var pname = $("#PARTY_PREFERRED_NAME").val();
//      $("#Account_Owner").val(pname);
//  });
 
 $('#PARTY_PREFERRED_NAME').keyup(function() {
  //get txtAmt value  
  var pname = $('#PARTY_PREFERRED_NAME').val();
  //change txtInterest% value
  $('#ACCOUNT_OWNER').val(pname);

});


//************************* cloning last row while using plus ***********************  
  $("#plus").click(function(){
      
      var count = $('#party_type tr').length;
      count=count-1;//alert(count);
      var $lastRow = $('#party_type tbody>tr:last');
      var RowIndex = $lastRow.index()+1;    //alert( RowIndex);
      var newIDSuffix = "*";
      var cloned = $('#party_type tbody>tr:last').clone();
      var oldcount=$('#TotRowCount').val();
//    alert(oldcount);
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
               // alert(id);
                 if (id.match("WEF")) {         
                  $(this).removeClass('hasDatepicker').datepicker({dateFormat:'dd/mm/yy'});
                }
                
                  if (id.match("WET")) {         
                  $(this).removeClass('hasDatepicker').datepicker({dateFormat:'dd/mm/yy'});
                }
                
                
//********** auto complete after clone********************** check while inserting..............  ***********
             
//         if (id.match("party")) { 
//               id="party"+RowIndex;
////               name=rowIndex+mainrow+"ENTITY_ID"; 
//              }        
                
              if (id.match("Party_type")) { 
               id="Party_Type_ID"+RowIndex; //alert(RowIndex);
               name="Party_Type_ID"+RowIndex; 
//                $(this).attr('id', id);
//                $(this).attr('name', name);
               // alert($(this).attr('id'));
                $(this).autocomplete({                                            
                                       source:"<?php echo $this->createUrl('Party/PartyAutoComplete') ?>",
                                       minLength: 0,
                                       select: function(event, ui) {
                                         // alert(ui.item.label);
                                    //    $("#Party_Type_ID"+RowIndex).val(ui.item.id);
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
  // alert(RowIndex+""+oldcount);
      cloned.insertAfter('#party_type tbody>tr:last').find('input').val("");              
      return false;
  });

  
// **********IFRAME***********POPUPDiologue*********************

    var table_id_value='ENTITY_BANK';
    var party_bank_value='PARTY_BANK';
    var iframe = $('<iframe border=0 id="Iframe" name="Iframe" src="<?php echo Yii::app()->request->baseUrl;?>/index.php/bank_view/create?iframe=1" scrolling="no" noresize frameborder="1" ></iframe>');
    var iframe_generic = $('<iframe border=0 id="Gframe" name="Iframe" src="<?php echo Yii::app()->request->baseUrl;?>/index.php/generic_Flex/create?iframe=2&table_id='+table_id_value+'&CANVAS='+party_bank_value+'" scrolling="no" noresize frameborder="1" ></iframe>');

    
    var dialogbank = $("<div></div>").append(iframe).appendTo("body").dialog({
        autoOpen: false,
        modal: true,
        show: "fade",
        hide: "fade",
        resizable: false,
        title:'Create Bank',
        width: 'auto',
        height: 'auto',
        
        close: function () {
           // alert("closeeee");
            //iframe.attr("src", "");
        }
    });

//FOR GENERIC IFRAME***************##########***********
      var dialoggeneric1 = $("<div></div>").append(iframe_generic).appendTo("body").dialog({
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
                  var Party_ID =$("#partyid").val();//alert(Party_ID);
                  var i;
//                  for (i=1;1<=GFLEX;i++)
//                 { var genericid =$("#genericid").val();alert(genericid);}
                    $.ajax(
                            {
                            url: "<?php echo Yii::app()->createUrl("ajax_request/Get_Generic_Field"); ?>",
                            data: { TABLE_ID: 'ENTITY_BANK',CANVAS: 'PARTY_BANK',GFLEX_COUNT:GFLEX,PARTY_ID:Party_ID},
                            beforeSend:function (){
                            $('#loading-indicator-please-wait').show();
                            },
                            success: function (result) 
                                    {
                                    $('#get_generic_ajax').html(result);
                                    $('#loading-indicator-please-wait').hide();
                                    //location.reload();
                                    //var r=$("#genericRowCount").val();alert(r);  
                                    }
                            });    
                    
            //END OF SENDING 
                        
//                           $.ajax(
//                            {
//                            type:"POST",
//                            url: "<?php // echo Yii::app()->createUrl("Generic_FlexController/Create"); ?>",
//                            data: {},
//                            
//                           success: function (result) 
//                                    {
//                                        alert(result);
//                                    //$('#get_generic_ajax').html(result);
//                                    //$('#loading-indicator-please-wait').hide();
//                                    //location.reload();
//                                    //var r=$("#genericRowCount").val();alert(r);  
//                                    }
//                            });    
            
            
          // location.reload(true); 
         }
         //location.reload(true);
      });
 

 
$('#dialogBtn1').click(function(){
          dialoggeneric1.dialog().dialog("open");
          return false;
});  


//IFRAME 2


    var table_id_value='PARTY';
    var party_bank_value='PARTY_ADD_INF';
    var iframe = $('<iframe border=0 id="Iframe" name="Iframe" src="<?php echo Yii::app()->request->baseUrl;?>/index.php/bank_view/create?iframe=1" scrolling="no" noresize frameborder="1" ></iframe>');
    var iframe_Generic = $('<iframe border=0 id="Gframe" name="Iframe" src="<?php echo Yii::app()->request->baseUrl;?>/index.php/generic_Flex/create?iframe=2&table_id='+table_id_value+'&CANVAS='+party_bank_value+'" scrolling="no" noresize frameborder="1" ></iframe>');

    
  

//FOR GENERIC IFRAME***************##########***********
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
                  var Party_ID =$("#partyid").val();//alert(Party_ID);
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


//IFRAME...........2


$('#dialogBtn2').click(function(){
          dialoggeneric.dialog().dialog("open");
          return false;
});
      
     
//FOR GENERIC IFRAME***************##########******ENDS HERE***** 


$('#dialogBtn,#Addinput').click(function(){    
    dialogbank.dialog().dialog("open");
    return false;
});

//$( "#data1" ).dialog({
//      autoOpen: false,
//      height:350,
//      width: 680,
//      modal: true,
//      close: function() {
//        
//      }
//});

$( "#Minfo" )
      .click(function() {
  $("#overlap_all").show();
  $( "#data1" ).show();
//        $( "#data1" ).dialog( "open" );
      });
 
$( "#PartyINFO" )
      .click(function() {
  $("#overlap_all").show();
  $( "#data3" ).show();
//        $( "#data1" ).dialog( "open" );
      });



$('#Addinput').click(function(){
$("Addinput").val("");
});

$('#Iframe').load(function() {
// for hiding****************** 
         // $('#iframee').contents().find('#menu-wrapper,.link-wrap,.breadcrumb_left-small,#bottom_menu_bar,#patternDiv').hide(); 
          
// for hiding ends here******************           
 //For displaying branch name in iframe     
    var childiFrame = document.getElementById("Iframe"); 
    var innerDoc = childiFrame.contentDocument || childiFrame.contentWindow.document;       
    innerDoc.getElementById("BNAME").value=$("#Branch").val();  
    //////////////////////////////////////


   $(this).contents().find('#demo_save').click(function() {
//              var BNAME = window.frames[0].document.getElementById("BNAME"); 
//              var MBNAME = window.frames[0].document.getElementById("MBNAME");
             // var SHORT_NAME = $(this).contents().find("#SHORT_NAME").val();
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
                     // alert(value_MBNAME+"__"+value_SHORT_NAME+"__"+value_BNAME);
              
              if((value_BNAME!="")&&(value_MBNAME!="")&&(value_SHORT_NAME!=""))
              {
//                 console.log("not null"); 
                    $("#Branch").val(value_BNAME);
                    $("#labelbank").val(value_MBNAME);
              }
              else
              {
                  //  console.log("empty");  
                  $("#Branch").val("");
                  $("#labelbank").val("");
              }   
          
          });
          //console.log(h);
});



$('#Gframe').load(function() {
// for hiding****************** 
         // $('#iframee').contents().find('#menu-wrapper,.link-wrap,.breadcrumb_left-small,#bottom_menu_bar,#patternDiv').hide(); 
          
// for hiding ends here******************           

   $(this).contents().find('#btnSave').click(function() 
          {
           

          });
          //console.log(h);
});



//$("#input").click(function(){alert("hiiiiiiiiiiii");})

//*****************************************************************************************************************************************


//*************display auto complete for branch in bank****************************************************************

//**********Starts Here*****Autocomplete working when field is null****************************
      $("#Branch").bind('focus',function(){
      $(this).autocomplete("search");
      });
          
      $("#Account_Type").bind('focus',function(){
      $(this).autocomplete("search");
      });   
      
      $(".currency").bind('focus',function(){
      $(this).autocomplete("search");
      });
        
      $("#Company_type").bind('focus',function(){
      $(this).autocomplete("search");
      });
      
    var addcount= $( "#addcount" ).val();
        for(var i=0;i<addcount;i++)
        {

            $("#COUNTRY"+i).bind('focus',function(){
            $(this).autocomplete("search");});
           
        } 
   
//******************Ends Here*********///////**************///////*************////***************
$("#Branch").change(function()
          {
                var value=$('#Branch').val();
               //console.log(value);
                if(value=="")
                {
                  $('#addbranch').hide();
                }
           }); 
           

  
  $("#Branch").autocomplete({   
       minLength: 0,
       
      source: function( request, response ) {
                    

   // console.log(request.term);
    $.ajax({
        
        url: "<?php echo Yii::app()->request->baseUrl; ?>/index.php/Party/BranchAutoComplete",
        //data: {term:request.term},
        type: "POST",
        data:{term:request.term},
        dataType: "json",
       
        success: function( data ) {
           
          if(data.length==0) { 
           var value=$("#Branch").val();
         // alert(value);
           if(value!="")
               {
           $('#addbranch').show();
           $('#Addinput').text("Add"+" "+value);
               }
                
            }
            else {
                $('#addbranch').hide();
               
            
            response( $.map( data, function( item ) {
              console.log(item.label,item.label1);
           
                return {
                    label: item.label,                      //label:BRANCH
                    label1: item.label1,                    //label1:BANK
                    value: item.label,value1: item.label1,
                    id:item.id,id1:item.id1,               //id1:Bank Id******id:Branch Id
                    //id:item.id,
                       }
             
            }));
            }
        }
             

    });
    

},
 select:function(event, ui) {
          

//  alert(ui.item.label1);
              $("#labelbank").val(ui.item.label1);
 //           $("#idbank").val(ui.item.id1);id1 hidden field id..........
              $("#idbank").val(ui.item.id);
             }
   
                     
       });  
//*************ends here of displaying auto complete for branch in bank************************************ 


//*****************Event occurs when bank tab is clicked****************************************
//    $('#party_tabs').tabs({
//      select: function(event,ui) {
//        if(ui.index == 1)
//        {
//           var pname = $("#PARTY_PREFERRED_NAME").val();
//           $("#Account_Owner").val(pname);
//        }
//      }
//    });
//*****************This Event Ends Here****************************************

//*****************************************************************************************************************
//*************  ********  ******  **********  ******  ***** VALIDATION STARTS HERE ***** ****** ********  ********

$("#SAVE").click(function()
{
            
    var prefferedname = $("#PARTY_PREFERRED_NAME").val();
    var short_name    =$("#PARTY_LAST_NAME").val();
    var dob =$("#DOB").val();
   
               today = new Date();
               today.setHours(0,0,0,0)
               var EDOB=  dob.split("/");
               userdob = new Date(EDOB[2], EDOB[1] -1, EDOB[0]); 


    if(prefferedname == "")
        {
            GetStaticAlert("20451");
            return false;
        }
     if(short_name == "")   
         {
            GetStaticAlert("20452");
            return false;
         }
     if(dob =="") 
         {
            GetStaticAlert("20453");
            return false;
         }
     if(userdob > today)
        {
             GetStaticAlert("20453");
             return false;
        }  
      if(dob!="") 
         {  // alert (dob);  return false;
            //  var dateformat = /^(\d{1,2})\/(\d{1,2})\/(\d{4})$/; // DD/MM/YYYY
              if(!ValidateDate(dob))
                  {
                        alert("not correct format");
                        return false;
                  } 
         }
              
   
//***************VALIDATION ENDS FOR PARTY TYPE ALONG WITH DATE VALIDATIONS**********************************   


   
    //var Party =("#TotRowCount").val();  //Check bindfocus code.....'var party' is declared.....
    
     var party =$('#TotRowCount').val(); 
//        for(var i=0;i<=party;i++)
//        {
//           $(".Partytype"+i).bind('focus',function(){
//           $(this).autocomplete("search");});
//        }
    
    
    
    var checkDateArray = new Array();
   // alert(party);
    var j=1;
    for(var i=0;i<=party;i++)
        {
            $(".inputpermament").bind('focus',function(){
            $(this).autocomplete("search");});
         
           
            var PartyType =$("#Party_type"+i).val(); 
            var Ptype=$("#Party_type0").val(); 
            var PartyWEF  =$("#WEF-"+i).val();  var PW = $("#WEF-0").val();                            
            var PartyWET  =$("#WET-"+i).val();  var PT = $("#WET-0").val();
            


               today = new Date();
               today.setHours(0,0,0,0)
               var Partywef =  PartyWEF.split("/");
               userWEF = new Date(Partywef[2], Partywef[1] -1, Partywef[0]); 
               
               today = new Date();
               today.setHours(0,0,0,0)
               var PartyWEt =  PartyWET.split("/");
               userWET = new Date(PartyWEt[2], PartyWEt[1] -1, PartyWEt[0]); 
               
               
         //  alert(PartyType);
         
//             if((PW=="") && (PT=="") && (Ptype=="") )
//                 {
//                     
//                   {
//                       alert("please enter First Row"+j);
//                       return false;
//                   }
//                 }
           
            if((PartyWEF!="")  || (PartyWET!=""))
                {
                    
                   if(PartyType=="")
                        {
                           
                             GetDynamicAlert("20480",j);
                             $("#Party_type"+i).focus();
                             return false;
                        }
                }
             
            if(PartyType!="")
                {//alert(Edate);
                     if(PartyWEF =="") 
                         {
                             GetDynamicAlert("20481",j);
                             $("#WEF-"+i).focus();
                             return false;
                         }
                  
              
                     if(PartyWEF!="") 
                         {
                            if(!ValidateDate(PartyWEF))
                              {
                                   GetDynamicAlert("20489",j);
                                   $('#WEF-' +i).focus();
                                   return false;
                              }   
                        
                           if(PartyWEF<Edate)   
                               {
                                    GetDynamicAlert("20880",j);
                                    $('#WEF-' +i).focus();                   
                                    return false;
                               }
                         
                            if(userWEF>today)   
                                {
                                   //alert("WEF greater the tday 20538"+j); 
                                //  var alertmessege = "WEF should be less than or equal to today"
                                  GetDynamicAlert("20538",j);
                                   return false;
                                }
                         }

                                              
//                    if(PartyWET =="")
//                         {
//                             GetDynamicAlert("20482",j);
//                             $("#WET-"+i).focus();
//                             return false;
//                         }
                  if(PartyWET!="")
                      {
                          
                       if(!ValidateDate(PartyWET))
                        {
                             GetDynamicAlert("20533",j);
                              $("#WET-"+i).focus();
                             return false;
                        }
                        
                         if(userWET<today)   
                            {
                               //alert("WET less the tday"+j);
                               GetDynamicAlert("20539",j);
                               return false;
                            }  
                      }
                        
                      if((PartyWEF!="") && (PartyWET!=""))  
                          {
                               if(!CompareDates(PartyWEF,PartyWET))
                                {
                                    GetDynamicAlert("20532",j);
                                    $('#WEF-' +i).focus();
                                    return false;
                                }
                          }
                          
                        var passVariables = new Array();
                        passVariables.push(PartyType);
                        passVariables.push(PartyWEF);
                        passVariables.push(PartyWET);
                        passVariables.push(i);
                        checkDateArray.push(passVariables);         
                }
          j++;        
        }
  
     if(checkDateArray.length > 0)
    { 
       var result= CheckDateDuplicates(checkDateArray);
    //   alert(result);
        if(result!=0)
        {
             GetDynamicAlert("20541",result);
             $("#Party_type" +result).focus();
             return false;
        }
        
    } 
     
 //***************END VALIDATION FOR PARTY TYPE ALONG WITH DATE VALIDATIONS**********************************    
  
//############VALIDATION FOR ENTITY CONTACT STARTS HERE##################################################################################################

 // var addcount= $( "#addcount" ).val();already stored in addcount
// alert(addcount);
  for(var i=0;i<addcount;i++)
      {
         var line1=$('#LINE1-'+i).val();
         var line2=$('#LINE2-' +i).val();    
         var line3=$('#LINE3-'+i).val();
         var city=$('#CITY-'+i).val().trim();
         var country=$('#COUNTRY' +i).val();    
         var mobile=$('#MOBILE_PHONE-'+i).val().trim();
         var telephone=$('#TELEPHONE-'+i).val().trim();
         var fax=$('#FAX-' +i).val().trim();    
         var email=$('#EMAIL-'+i).val().trim();        
         var url=$('#URL-'+i).val().trim();
         var contactwef=$('#WEF'+i).val();   
         var contactwet=$('#WET'+i).val(); 
         var contactType=$('#address-'+i).val();
         
        today = new Date();
        today.setHours(0,0,0,0)
        var Contactwef =  contactwef.split("/");
        userWEF = new Date(Contactwef[2], Contactwef[1] -1, Contactwef[0]); 
        
        today = new Date();
        today.setHours(0,0,0,0)
        var Contactwet =  contactwet.split("/");
        userWET = new Date(Contactwet[2], Contactwet[1] -1, Contactwet[0]); 
       
       if((line1!=="")||(line2!=="")||(line3!=="")||(city!=="")||(country!=="")||(mobile!=="")||(telephone!=="")||(fax!=="")||(email!=="")||(url!=="")||(contactwef!=="")||(contactwet!==""))
         {
             
             if(line1=="")
             {
                GetDynamicAlert("20201",contactType);
               // $('#LINE1-'+i).focus();
                Createfocus('LINE1-'+i);
               
                return false;
             }
             if(city=="")
             {
                GetDynamicAlert("20202",contactType);
               // $('#CITY-'+i).focus();
                return false;
             }
             if(country=="")
             {
                GetDynamicAlert("20203",contactType);
               // $('#COUNTRY-'+i).focus();
                return false;
             }
  //^^^^^^URL,MOBILE,FAX,TELEPHONE,EMAIL^^^^^^^^^^^^^Starts Here^^^^^^^^^^^^^^^^          
               if(url!="")
             {     
                var result=urlvalidation(url);
                if(result==false)
                {
                    GetDynamicAlert("20260",contactType);
                //    $('#URL-'+i).focus();
                    return false;
                }
             }
                if(mobile!="")
             {
                 var result=Standardphonevalidation(mobile);
                 if(result==false)
                {
                    GetDynamicAlert("20261",contactType);
                  //  $('#MOBILE_PHONE-'+i).focus();
                    return false;
                }
             }
              if(fax!="")
             {
                 var result=faxvalidation(fax);
                 if(result==false)
                {
                    GetDynamicAlert("20262",contactType);
                  //  $('#FAX-' +i).focus();
                    return false;
                }
             }
             if(telephone!="")
             {
                 var result=landformat(telephone);
                 if(result==false)
                {
                    GetDynamicAlert("20263",contactType);
                  //  $('#TELEPHONE-'+i).focus();
                    return false;
                }
             }
             if(email!="")
             {
                 var result=emailvalidation(email);
                 if(result==false)
                {
                    GetDynamicAlert("20264",contactType);
                  //  $('#EMAIL-'+i).focus();
                    return false;
                }
             }
             
 //^^^^^^URL,MOBILE,FAX,TELEPHONE,EMAIL^^^^^^^^^^^^^Ends Here^^^^^^^^^^^^^^^^                 
               if(contactwef!="")
             {
                  if(!ValidateDate(contactwef))
                  {
                        GetDynamicAlert("20204",contactType);
                      //  $('#Contact_WEF-' +i).focus();
                        return false;
                  } 
                  
                  if(contactwef<Edate)   
                    {
                         GetDynamicAlert("20881",contactType);
                       //  $('#WEF-' +i).focus();                   
                         return false;
                    }
                  
                  if(userWEF>today)   
                            {
                               //alert("WEF greater the tday 20538"+j); 
                            //  var alertmessege = "WEF should be less than or equal to today"
                              GetDynamicAlert("20538",contactType);
                               return false;
                            }
             }
               if(contactwet!="")
             {
                  if(!ValidateDate(contactwet))
                  {
                        GetDynamicAlert("20205",contactType);
                       // $('#Contact_WET-' +i).focus();
                        return false;
                  } 
                  
                  if(userWEF<today)   
                            {
                               //alert("WEF greater the tday 20538"+j); 
                            //  var alertmessege = "WEF should be less than or equal to today"
                              GetDynamicAlert("20539",contactType);
                               return false;
                            }
             }
               if(contactwef!="" && contactwet!="")
             {                
                if(!CompareDates(contactwef,contactwet))
                {
                    GetDynamicAlert("20207",contactType);
                //    $('#Contact_WET-' +i).focus();
                    return false;
                }
             }
//              if(contactwef!="")
//             {
//                if(!CompareDates(registerdDate,contactwef))
//                {
//                       GetDynamicAlert("20206",contactType);
//                       $('#Contact_WEF-' +i).focus();
//                       return false;
//                }
//             }
               if(contactwet!="" && contactwef=="")
             {
                GetDynamicAlert("20208",contactType);
             //   $('#Contact_WEF-' +i).focus();
                return false;
             }
             
         }    
      }
 
//############VALIDATION FOR ENTITY CONTACT ENDS HERE################
  
//********************////*************************///************  

//%%%%%%%%%%%%VALIDATION FOR ENTITY BANK STARTS HERE%%%%%%%%%%%%%%%%%


    var branch=$("#Branch").val().trim();  
    var bank=$("#labelbank").val().trim();
    var accountType=$("#Account_Type").val().trim();
    var bankWef=$("#WEF").val().trim();  
    var bankWet=$("#WET").val().trim();  
    var accountNo=$("#ACCOUNT_NO").val().trim();
    var accountOwner=$("#ACCOUNT_OWNER").val().trim();
    var bankCurrency=$("#currency").val().trim();    
    
    if((branch!="")||(bank!="")||(accountType!="")||(bankWef!="")||(bankWet!="")||(accountNo!="")||(bankCurrency!=""))
    {
        if(branch=="")
        {
            GetStaticAlert("20209");
            //$("#Branch").focus();
            return false;
        }
        if(bank=="")
        {
            GetStaticAlert("20210");
            $("#txt_bank").focus();
            return false;
        }
        if(accountType=="")
        {
            GetStaticAlert("20211");
           // $("#ACCOUNT_TYPE").focus();
            return false;
        }
        if(accountNo=="")
        {
            GetStaticAlert("20212");
            $("#ACCOUNT_NO").focus();
            return false;
        }
        if(accountOwner=="")
        {
            GetStaticAlert("20213");
            $("#ENTITY_BANK_ACCOUNT_OWNER").focus();
            return false;
        }
        if(bankCurrency=="")
        {
            GetStaticAlert("20214");
            //$("#Bank_CURRENCY").focus();
            return false;
        }
        if(bankWef=="")
        {
            GetStaticAlert("20215");
            $("#Bank_WEF").focus();
            return false;
        }    
        if(!ValidateDate(bankWef))
        {
            GetStaticAlert("20216");
            $("#Bank_WEF").focus();
            return false;
        } 
        if(bankWef<Edate)   
        {
             GetStaticAlert("20882");
             return false;
        }
                  
        if(bankWet!="")
        {
             if(!ValidateDate(bankWet))
             {
                GetStaticAlert("20218");
                $("#Bank_WET").focus();
                return false;
             } 
        }
//        if(!CompareDates(registerdDate,bankWef))
//        {
//            GetStaticAlert("20217");
//            $("#Bank_WEF").focus();
//            return false;
//        }
        if(bankWef!="" && bankWet!="")
        {                
           if(!CompareDates(bankWef,bankWet))
           {
               GetStaticAlert("20219");
               $("#Bank_WET").focus();
               return false;
           }
        } 
    }

//%%%%%%%%%Validation Ends here for Entity Bank %%%%%%%%%%
 //alert("Validation Successful");
 // return false;
 
 });

}); 
 

//***PARTY FLEX VALIDATION FUNCTION ************///**********///************///***  

function MoreInfoValidation()
  {
     
      var flexcount = $("#totcnt").val();
      var j =1;
      var Edate=$( "#DOB" ).val();//alert(Edate) ;return false;
      for(var i=0;i<flexcount;i++)
        {
               var name=$("#FLEX_VALUE"+i).val();
               var wef=$("#WEFF-"+i).val(); 
               var wet=$("#WETT-"+i).val();                                     //alert(wet);return false; 
              
               today = new Date();
               today.setHours(0,0,0,0)
               
               var todays = new Date(); 
               var dd = todays.getDate();
               var mm = todays.getMonth()+1; //January is 0!
               var yy = todays.getFullYear();
               //appending '0' for date and month less than 10
               if(dd<10)
               {
                   dd='0'+dd;
               } 
               if(mm<10)
               {
                   mm='0'+mm;
               }
                
                todays =dd+'/'+mm+'/'+yy;
                var wefDate=  wef.split("/");
                userwefDate = new Date(wefDate[2], wefDate[1] -1, wefDate[0]); 
                 
                var wetDate = wet.split("/");
                userwetDate = new Date(wetDate[2], wetDate[1] -1, wetDate[0]); 
                //alert(userwetDate);
                
               if(i==0)
                {
                    if(name=="")
                              {
                             //20097
                              //alert("name is empty in row"+j)
                                msgid = j;  
                                GetDynamicAlert("20535",msgid);
                                $("#FLEX_VALUE"+i).focus();
                                return false;
                             
                              }
                } 
                
//               if(userwefDate>today)
//                {
//                    if(name=="")
//                            {
//                            $('#NAME'+i).focus();
//                            return false;
//                            }
//                }
                
               if(wef!="")
                {
                    var WEFvalidate=ValidateDate(wef);
                        if(WEFvalidate==false)
                          {//20098
                              msgid = j;  
                              GetDynamicAlert("20536",j);
                              $("#WEFF-"+i).focus();
                              return false;
                          }
                          
                        if(wef<Edate)  
                            {
                                msgid = j;  
                                GetDynamicAlert("20880",j);
                                return false;
                            }
                        if( userwefDate >today)
                          {//20100
                              msgid = j;  
                              GetDynamicAlert("20538",j);
                              return false;  
                          }    
                }
                
                if(wet!="")
                {  
                    var WETvalidate=ValidateDate(wet);
                        if(WETvalidate==false)
                          {//20099
                              msgid = j;  
                              GetDynamicAlert("20537",j);
                              return false;
                          }
                        if(userwetDate<today)
                          {//20101
                              msgid = j;  
                              GetDynamicAlert("20539",j);
                              return false;
                          }   
                        if(name=="")
                        {
                         GetDynamicAlert("20535",j);
                         $("#FLEX_VALUE"+i).focus();
                         return false;
                        }         
                } 
                
                if((wef!="") && (wet!=""))
                {//20102
                    if(userwefDate  > userwetDate)
                    {
                        GetDynamicAlert("20540",j);
                        return false;
                    }    
                }  
      j++;          
        }
   $("#data1").toggle( "explode" );
   $("#overlap_all").hide();
   return true;
        
  }
  
//***PARTY FLEX VALIDATION FUNCTION *****ENDS***HERE*******///**********///************///***  


function openalert1()
      {
       
        //document.getElementById('data').display = "block";  
        $("#data").show(); 
        $("#mydialog1").dialog("widget").find(".ui-dialog-titlebar").hide();   
        $("#mydialog1").dialog("open");  
       
      } 
      
function openalert2()
     {
       
        //document.getElementById('data').display = "block";  
        $("#data1").show(); 
        $("#mydialog2").dialog("widget").find(".ui-dialog-titlebar").hide();   
        $("#mydialog2").dialog("open");  
       
     }
function closepopup1()
     {
        $("#data1").toggle( "explode" );
        $("#overlap_all").hide();
     }
     
function closepopup3()
     {
        $("#data3").toggle( "explode" );
        $("#overlap_all").hide();
       // $("#data3").toggle( "explode" );
     }     
 

   
</script>

<?php

    if($model->isNewRecord)
    {  
        $party_id="";
        $PREFERRED_NAME="";$LAST_NAME="";$CONTACT_PERSON="";$DOB="";$NATIONAL_ID="";$COMPANY_TYPE="";
    
    }
    else
    { 
        $party_id=$model->ID;
                
//&&&&&&&&&&  UPDATION PARTY &&&&&&&&&&&&&&&&&&        
        $get_Party= Yii::app()->db->createCommand()
                                      ->select('*')  
                                      ->where("ID=:party_id",array(':party_id'=>$party_id)) 
                                      ->from('PARTY')
                                      ->queryAll();
      //  print_r($get_Party);exit;
        
      if(($get_Party[0]["PREFERRED_NAME"])<>"")                                                                              //***********
       {
           $PREFERRED_NAME  = $get_Party[0]["PREFERRED_NAME"];                  //print_r( $PREFERRED_NAME ) ;                      
       } else{ $PREFERRED_NAME="";}    
        
      if(($get_Party[0]["LAST_NAME"])<>"")                                                                              //***********
       {
           $LAST_NAME  = $get_Party[0]["LAST_NAME"];                            //print_r(  $LAST_NAME );
       }    else { $LAST_NAME="";}  
       
       if(($get_Party[0]["CONTACT_PERSON"])<>"")                                                                              //***********
       {
           $CONTACT_PERSON  = $get_Party[0]["CONTACT_PERSON"];                   
       } else{ $CONTACT_PERSON="";}  
       
       if(($get_Party[0]["DOB"])<>"")                                                                              //***********
       {
           $DOB  = $get_Party[0]["DOB"]; 
           $DOB= Yii::app()->dateFormatter->format("dd/MM/yyyy",$DOB);
       } else{ $DOB="";} 
       
       if(($get_Party[0]["NATIONAL_ID"])<>"")                                                                              //***********
       {
           $NATIONAL_ID  = $get_Party[0]["NATIONAL_ID"];                   
       } else{ $NATIONAL_ID="";} 
       
       if(($get_Party[0]["COMPANY_TYPE"])<>"")                                                                              //***********
       {
           $COMPANY_TYPE = $get_Party[0]["COMPANY_TYPE"];                   
       } else{ $COMPANY_TYPE="";} 
       
       
       
       $get_PartyImage= Yii::app()->db->createCommand()
                                      ->select('*')  
                                      ->where("PARTY_ID=:party_id order by ID desc",array(':party_id'=>$party_id)) 
                                      ->from('PARTY_IMAGE')
                                      ->queryAll();
       
      //  print_r($get_PartyImage[0]['IMAGE']);exit;
       
       
       
    }

?>


<!----*******************DISPLAYING BANK AND BRANCH IN UPDATE**********************-->

<?php 
if($party_id!="")
{
  $get_bank_id = Yii::app()->db->createCommand()
                                      ->select('BANK_ID')  
                                      ->where("PARTY_ID=:party_id",array(':party_id'=>$party_id)) 
                                      ->from('ENTITY_BANK')
                                      ->queryAll(); 
 $get_bank_id_count =count($get_bank_id) ;//exit;
 
        $criteria = new CDbCriteria;
        $criteria->alias = 'BR';
        $criteria->select = array('BR.NAME as BRANCH','B.Name as BANK');
        $criteria->order = 'lower(BR.NAME) ASC';
        $criteria->join = 'left join Bank B on BR.BANK_ID=B.Id';    
        
        if($get_bank_id_count!="0")
        {
            $criteria->condition = "BR.Id=".$get_bank_id[0]['BANK_ID'];

            $getEntityBank=  Bank::model()->findAll($criteria);
                    //echo $getEntityBank[0]['NAME']; exit;

            foreach($getEntityBank as $BankDetails_UPDATE) 
            {
    //            echo $BankDetails_UPDATE['BANK'];
    //            echo $BankDetails_UPDATE['BRANCH'];

            } //echo count($getEntityBank); 
        }
        
 //^^^^^^^^^^^Bank-Branch Field is set to Null if No value is Saved^^^^^^^^^^^^^       
        else
        {
         $criteria->condition = ""; 
         $getEntityBank=  Bank::model()->findAll($criteria);
                    //echo $getEntityBank[0]['NAME']; exit;

            foreach($getEntityBank as $BankDetails_UPDATE) 
            {
                 $BankDetails_UPDATE['BANK']="";
                 $BankDetails_UPDATE['BRANCH']="";

            } //echo count($getEn
        }
}
else
{
   
}
 ?>
<!----*******************DISPLAYING BANK AND BRANCH IN UPDATE**********************-->



<!--*****///****GENERIC*****FLEX*******DESIGN*******STARTS********HERE*******************-->
<?php
  $GET_GENERIC_FLEX = new Get_Generic_Flex_Cls();                                                                                         
  $GetGenericFlex_bank =$GET_GENERIC_FLEX->Get_Generic_Flex_With_Left_Join_Fnc('ENTITY_BANK','PARTY_BANK',$party_id);
  $GetGenericFlex_party =$GET_GENERIC_FLEX->Get_Generic_Flex_With_Left_Join_Fnc('PARTY','PARTY_ADD_INF',$party_id);
 // $Total_Rows_Generic_Flex=sizeof($GetGenericFlex);
 //print_r($GetGenericFlex_party);
?>


<!--*****///****GENERIC*****FLEX*******DESIGN*******ENDS**********HERE*******************-->
<div border="2" class="grid_insert_table" id="party">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'party-form',
	'enableAjaxValidation'=>false,
)); ?>

 

 
    
<div id="data1"  class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-draggable" style="display:none;position:absolute;padding:10px;background-color: white;width:auto;height:auto;z-index: 1002;top:200px;left:312px;border-radius: 5px;border-top-left-radius: 5px !important;border-top-right-radius: 5px !important;">
      <div style="width:99.6%">
        <div class="note"> 
            <div class="labelImage"></div>
        <div class="LabelMsg">
              <p><?php echo  $Getlabelname->Get_Labelname_Fnc("164");?></p>
        </div> 
      </div>
</div>
         <img title="Close" src="<?php echo Yii::app()->request->baseUrl; ?>/images/cross.png" class="detailseditbtn1 pull-right" onclick="closepopup1();" id="detailseditbtn-1" >
         <br><br>
            
<!--  Table with Party_Flex from Basic Definition        -->
<table  class="grid_insert_table_moreinfo">

                    <thead>
                      <th>
                      <th>&nbsp;</th>
                      <th></th>
                      <th></th>
                    </thead>

      
   <tbody>
                  <tr class="spaceUnder"> 
                       <td class="marginsname"></td>
                       <td><span class=""></span></td>
                       <td><span class="wefwet"><?php echo  $Getlabelname->Get_Labelname_Fnc("126");?></span></td>
                       <td><span class="wefwet"><?php echo  $Getlabelname->Get_Labelname_Fnc("127");?></span></td>
                      
                  </tr>
                  
             <?php


                      $today=date('d/m/Y');
                      $condition="DFCTG_DEFINITION_TYPE='PARTY_FLEX'";
                      $getpartyflex=Basic_definition::model()->findAll($condition);
                      $count = count($getpartyflex);
                     // echo $count;

                      $flex_value_up=array();$wef=array();$wet=array();
 //^^^^^^^^UPDATE^^^^^^^^^^^^^^^^^                     
                      if($party_id!="")
                      {
                          $today=date('d/m/Y');
                          $get_partyflex_data = Yii::app()->db->createCommand()
                                ->select('*')  
                                ->where("PARTY_ID=:party_id",array(':party_id'=>$party_id)) 
                                ->from('PARTY_FLEX')
                                ->queryAll();
                 //      print_r($get_partyflex_data[1]['WEF']);    
                         
                          $count_up=count($get_partyflex_data); //print_r($count_up); 
                          for($i=0;$i<$count;$i++) 
                            {  
                              
                              $flex_up_id[$i]="";
                              $flex_value_up[$i]="";
                              $flexup[$i]="";
                              $flexremark[$i]="";
                              $wef[$i]=$today;
                              $wet[$i]="";
                            }
                            
 
                            foreach ($get_partyflex_data as $key => $value) {

                                 $flex_up_id[$key]=$value['ID'];
                                 $flex_value_up[$key]=$value['FLEX_VALUE'];     //echo $flex_value_up[$key];
                                 $flexup[$key]=$value['FLEX'];
                                 $flexremark[$key]=""; //****REMARK IF NEEDED GET THE VALUE****
                                 $wef[$key]=$value['WEF'];
                                 $wet[$key]=$value['WET'];
          
                                 if($wef[$key]=="")
                                 {
                                      $today=date('d/m/Y');
                                      $wef[$key]=$today; 
                                 }
                                 else 
                                    {
                                     $wef[$key]=date('d/m/Y',strtotime($value['WEF']));
                                    }
                                    if($wet[$key]=="")
                                    {
                                       $wet[$key]=""; 
                                    }
                                 else 
                                     {
                                         $wet[$key]=date('d/m/Y',strtotime($value['WET']));
                                     }
                                     
                                if($flexup[$key]!="")  
                                {
                                    $flexup[$key]=$value['FLEX']; 
                                }
                                else
                                {
                                   $flexup[$key]="" ;
                                }
                               

                            }
                 
                      }
                      


                foreach ($getpartyflex as $key => $record) {
                         //$flex_up_id[$key]="";   
                                                                                                                            // key returns 0,1.....etc
                         ?>
               <tr  class="spaceUnder">
                    <td class="marginsname">
              
                 <?php
                         //$key =$key+1;
                         $popid=array();
                         $popid[$key]=$record->DESCRIPTION;

                     if($model->ID=="")
                       {
                        $flex_up_id[$key]="";
                        $flex_value_up[$key]=""; 
                        $wef[$key]=$today;
                        $wet[$key]="";
                       }
//neeed to check
                       if($party_id=="")
                       {
                          echo  $record->DESCRIPTION;                           //displays while creation
                          $FLEX_VALUE="";
                          $WEF=$today;
                          $WET="";
                       }
                       else
                       {
                           
                           $record->DESCRIPTION =strtoupper(trim($record->DESCRIPTION)); 
                           $get_s = Yii::app()->db->createCommand()
                                ->select('*')  
                                ->where("PARTY_ID=:party_id and UPPER(FLEX)="."'$record->DESCRIPTION'",array(':party_id'=>$party_id)) 
                                ->from('PARTY_FLEX')
                                ->queryRow();
                           
                               $FLEX_VALUE =$get_s['FLEX_VALUE'];
                               $WEF=Yii::app()->dateFormatter->format("dd/MM/yyyy",$today);
                               $WET=Yii::app()->dateFormatter->format("dd/MM/yyyy",$get_s['WET']);
//                               $flex =$get_s['FLEX'];
                               echo  $record->DESCRIPTION;    
                        }
?>
         
                      </td>
           
                         
                          <input type="hidden" name="<?php echo $key;?>flexid" id="flexid<?php echo $key;?>" value="<?php echo $popid[$key];?>">
                          <input type="hidden" name="<?php echo $key;?>flex_up_id" id="flex_up_id<?php echo $key;?>" value="<?php echo $flex_up_id[$key];?>">

                                      <td> <?php
                                         // echo $key;
                                        echo $form->textField(PARTY_FLEX::model(),"[$key]FLEX_VALUE",array('size'=>60,'maxlength'=>120,"class"=>"margintxt","id"=>"FLEX_VALUE$key","value"=>$FLEX_VALUE)); ?></td>
         
                                      <td><?php 

                                      $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>PARTY_FLEX::model(),"name"=>"[$key]WEF",'attribute'=>"[$key]WEF",
                                                                  'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                                                  'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"WEFF-$key",'value'=>$WEF,'class'=>'WEF','style'=>"width:92px;height:25px",'rel'=>'WEF')));?></td>
                                     <td><?php $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>  PARTY_FLEX::model(),"name"=>"[$key]WET",'attribute'=>"[$key]WET",
                                                                  'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                                                  'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"WETT-$key",'value'=>$WET ,'class'=>'WET','style'=>"width:92px;height:25px;margin-right:5px;",'rel'=>'WET')));?></td>
                                        
            
                </tr>
              
          <?php } ?>

               <tr> <td> <input type="hidden" name="PFLEXcount" id="totcnt" value="<?php echo $count;?>"></td><tr>  
           
                  
              <tr  id="table_bottom_bg">
                     <td colspan="3">&nbsp</td>
                     <td align="right" id="testtdright" class="tabular_submit_padding">
                     <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"button",'size'=>'small', 'label'=>$model->isNewRecord ? $Getlabelname->Get_Labelname_Fnc("103") : $Getlabelname->Get_Labelname_Fnc("103"),'id'=>'InfoSave','icon'=>'icon-thumbs-up','htmlOptions'=>array('onclick'=>'MoreInfoValidation();'))); ?>
                     </td>
              </tr>
    </tbody>
   </table>
       
 </div>
  
    
    
    <div> 
        <table>
            <thead>
                   <th style='width:100%'>
                   <th>&nbsp;</th>
           </thead>
         </table>
    </div> 
    
<div id="main_party_form">
      
    <div id="outer_container_party" class="outer-container-party">
        
        <div id="left_image_party" class="leftimageparty">
<!--            <div id='image_logo' class='logo'>-->
<!--                 <img  src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo1.png"   
                  title=""  class="testclass1"  alt="" style="padding: 13px 0px;" id="logo"/>-->
                <div  id='testclass1' class="testclass1" style="padding: 13px 0px;">
                    
                </div>
                
<!--            </div>-->
        </div>
        
    <div id="middle_image_party" class='middleimageparty'>
            <table>
                <tr class="spaceUnder">
                    <td class="margin" style="width:111px !important;"><?php echo  $Getlabelname->Get_Labelname_Fnc("149");?></td>
                    <td class="input-append" style="text-align:left;"><?php echo $form->textField($model,'PREFERRED_NAME',array('size'=>60,'maxlength'=>100,'style'=>'width:290px;','value'=>$PREFERRED_NAME)); ?> 
                         <a class="field_level_help_on_txt" href="#prefferedName" title="<?php echo $GetTitleHelp->Get_Title_Help() ;?>">
                        <span class="add-on" style="width:5px !important"></span></a>
                    </td>
               </tr>
            </table>
            
         <table class="grid_insert_table2" >  
             
                <tr class="spaceUnder">
                    <td class="margin" style="width:111px !important;"><?php echo  $Getlabelname->Get_Labelname_Fnc("148");?></td>
                    <td class="input-append" style="text-align:left;"><?php echo $form->textField($model,'LAST_NAME',array('size'=>60,'maxlength'=>60,'value'=>$LAST_NAME)); ?>
                     <a class="field_level_help_on_txt" href="#ShortName" title="<?php echo $GetTitleHelp->Get_Title_Help() ;?>">
                        <span class="add-on" style="width:5px !important"></span></a>
                    </td>
                </tr>
           
                <tr class="spaceUnder">
                    <td class="margin" style="width:111px !important;"><?php echo  $Getlabelname->Get_Labelname_Fnc("150");?></td>
                    <td class="input-append" style="text-align:left;"><?php echo $form->textField($model,'CONTACT_PERSON',array('size'=>60,'maxlength'=>100,'style'=>'width:290px;','value'=>$CONTACT_PERSON)); ?>
                     <a class="field_level_help_on_txt" href="#ContactPerson" title="<?php echo $GetTitleHelp->Get_Title_Help() ;?>">
                        <span class="add-on" style="width:5px !important"></span></a>
                    </td>
                </tr>
           
                <tr class="spaceUnder">
                    <td class="margin" style="width:111px !important;"><?php echo  $Getlabelname->Get_Labelname_Fnc("151");?></td>
                    <td class="input-append" style="text-align:left;">
                    <?php $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model,'name'=>'DOB',"attribute"=>"DOB",'options'=>array('showAnim'=>'slide',
                                                                                                                   'dateFormat'=>'dd/mm/yy',
                                                                                                                   'changeMonth' => 'true',
                                                                                                                   'changeYear'=>'true',
                                                                                                                   'constrainInput' => 'false'),
                                                                                                                   'htmlOptions' => array(
                                                                                                                   'placeholder' => 'dd/mm/yyyy','value'=>$DOB
                                                                                                                     ),
                                                                           
                        ));
                   ?>
                 <a class="field_level_help_on_txt" href="#EnrollmentDate" title="<?php echo $GetTitleHelp->Get_Title_Help() ;?>">
                        <span class="add-on" style="width:5px !important"></span></a>  
                    <a id="PartyINFO" class="moreinfo"  style="margin-left: 40px;" title="Add">  <?php echo $Getlabelname->Get_Labelname_Fnc("234");?> </a>
    </td>
                </tr>
           
                <tr class="spaceUnder">
                    <td class="margin" style="width:111px !important;"><?php echo  $Getlabelname->Get_Labelname_Fnc("152");?></td>
                    <td class="input-append" style="text-align:left;"><?php echo $form->textField($model,'NATIONAL_ID',array('size'=>60,'maxlength'=>100,'value'=>$NATIONAL_ID,'placeholder' => 'National ID/Others',)); ?>
                    <a class="field_level_help_on_txt" href="#NationalID" title="<?php echo $GetTitleHelp->Get_Title_Help() ;?>">
                        <span class="add-on" style="width:5px !important"></span></a>
                    </td>
                </tr>
           
                <tr class="spaceUnder">
                    <td class="margin" style="width:111px !important;"><?php echo  $Getlabelname->Get_Labelname_Fnc("232");?></td>
                    <td class="input-append" style="text-align:left;"> <?php $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                                    'model'=>$model,'attribute'=>'COMPANY_TYPE',
                                    'id'=>'Company_type',
                                    'name'=>"Company_type", 
                                    //'value'=>'',
                                    'source'=>$this->createUrl('Party/Company_TypeAutoComplete'),                                   
                                    'options'=>array(
                                     'minLength'=>'0', 
                                     'select'=>'js:function( event, ui ) {
                                                  //$("Company_type").val(ui.item.id);
                                               //  alert(ui.item.id);
                                               //alert(ui.item.id);
                                                   $("#Company_type").val(ui.item.id);       
                                               }',
                                        
                                      'change'=>'js:function( event, ui ) {                                           
                                                if (!ui.item) {
                                                    $("#Company_type").val("");
                                                   
                                                 
                                                }                                                
                                        }',                                        
                                    ),
                                    'htmlOptions'=>array('value'=>$COMPANY_TYPE
                                      
                                    ),
                                ));                
                 
                 ?>
                         <a class="field_level_help_on_txt" href="#CompanyType" title="<?php echo $GetTitleHelp->Get_Title_Help() ;?>">
                        <span class="add-on" style="width:5px !important"></span></a>
    </td>
    
    
   </tr>
</table>
            
 </div>
        
        <div id="right_grid_party" class="rightgridparty" >
            
  <table  class="partytype" id="party_type">
              <thead class="fixedHeader">
              <th  colspan="3" style="text-align:center;width: 511px;">
                  <?php echo "Party Details"; ?> 
                  <img  src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/icon_plus.png"   
                   title="Add Rows" class="plusbutton"  alt="" style="cursor: pointer;" id="plus"/>
              </th>
              
              <tr class="fixedHeader2" >
                  <td class="party_type"><?php echo$Getlabelname->Get_Labelname_Fnc("154"); ?></td>
                  <td class="WEF" style="padding-right: 28px;width: 135px; "><?php echo$Getlabelname->Get_Labelname_Fnc("126"); ?></td>
                  <td class="WET" style="text-align: left"><?php echo$Getlabelname->Get_Labelname_Fnc("127");?></td>
              </tr>
                  
              </thead>
              
              
                    
              
      
   <!--         Setting Total Row Count-->
        <?php 
            if(isset($_POST['TotRowCount'])<>'')
            {
                $loop_party=$_POST['TotRowCount'];
                
            }
            else 
            {
                if($model->isNewRecord)
                {
                 $loop_party=2;
                }
                else 
                {
                      $get_Party_Type = Yii::app()->db->createCommand()
                                ->select('ID,PARTY_TYPE,WEF,WET,PARTY_ID')  
                                ->where("PARTY_ID=:party_id",array(':party_id'=>$party_id)) 
                                ->from('PARTY_TYPE')
                                ->queryAll();                                                  //echo count($get_Party_Type);
                      $count=count($get_Party_Type);                                             //print_r($count);
                      $loop_party=$count;                                                  //   print_r($get_Party_Type);
                      //$get_Party_Type_ID=$get_Party_Type[0]['ID'];
                      if($count=="0")
                      {
                          $loop_party=2;
                      }
                      else
                      {
                          $loop_party=$count-1;
                      }
                     
                }
            }
       ?>               
                  
                  
                  
                  
<tbody class="scrollContent">   
 
    
   <?php 
   
    $PARTY_TYPE = array();$WEF =array();$WEF =array();
    
    for($i=0;$i<=$loop_party;$i++){?> 
    
<!--    TRY-CATCH BLOCK-->
   <?php
   
     try 
        {
            if($party_id!="")//******WORKS IN CASE OF UPDATE******VALUE GETS ASSIGNED****
            {
                
                if(!empty($get_Party_Type[$i]["PARTY_TYPE"]))                                                                              //***********
                    {
                        $PARTY_TYPE[$i]=$get_Party_Type[$i]['PARTY_TYPE']; //echo $PARTY_TYPE[$i];
                    }   else { $PARTY_TYPE[$i]="";}    
                    
                if(!empty($get_Party_Type[$i]["WEF"])) 
                    {
                        $WEF[$i]=$get_Party_Type[$i]['WEF'];
                        $WEF[$i]= Yii::app()->dateFormatter->format("dd/MM/yyyy",$WEF[$i]);
                    }else { $WEF[$i]="";}  
                    
                 if(!empty($get_Party_Type[$i]["WET"])) 
                    {
                        $WET[$i]=$get_Party_Type[$i]['WET'];
                        $WET[$i]= Yii::app()->dateFormatter->format("dd/MM/yyyy",$WET[$i]);
                    }else { $WET[$i]="";} 
                    
                   if(!empty($get_Party_Type[$i]["ID"])) 
                    {
                        $get_Party_Type_ID=$get_Party_Type[$i]['ID'];           //echo $get_Party_Type_ID;
                        
                    }else { $get_Party_Type_ID="";}    
              //echo $get_Party_Type_ID;
//               $WEF[$i]=$get_Party_Type[$i-1]['WEF'];
//               $WET[$i]=$get_Party_Type[$i-1]['WET'];
            }
            else //******WORKS IN CASE OF CREATE******VALUE IS SET TO NULL****
            {
                $get_Party_Type_ID="";
                $PARTY_TYPE[$i]="";
                $WEF[$i]="";
                $WET[$i]="";
                
            }
        }

    catch (Exception $exc) 
         {
                  echo $exc->getTraceAsString();
         }  
    
    
    ?>
   
   
    
    <tr id="form-inputs">
              
           <td class="">
             <?php                
                  $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                                    'model'=>PARTY_TYPE::model(),
                                    'id'=>"Party_type".$i,
                                    'name'=>"PARTY_TYPE[$i][PARTY_TYPE]", 
                                    'value'=>$PARTY_TYPE[$i],
                                    'source'=>$this->createUrl('Party/PartyAutoComplete'),                                   
                                    'options'=>array(
                                        'minLength'=>'0', 
                                        'select'=>'js:function( event, ui ) {
                                             //     $("#Party_Type_ID'.$i.'").val(ui.item.id);     
                                                 
                                                  }',
                                        'change'=>'js:function( event, ui ) {                                           
                                                    if (!ui.item) {
                                                    $("#Party_Type_ID").val("");
                                                     $("#Party_type'.$i.'").val(""); 
                                                 //   $("#Party_type+i").val("");
                                                  
                                                  }                                                
                                        }',                                        
                                        ),'htmlOptions'=>array( 'class'=>"currency",
                                            'style'=>'width:307px;margin-left:5px;',
                                        ),
                                   
                                ));                
                 
               ?>

           </td>
           
         <td>
         <?php $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>PARTY_TYPE::model(),'name'=>"WEF[$i]","attribute"=>"WEF[$i]",'options'=>array('showAnim'=>'slide',
                                                                                                          'dateFormat'=>'dd/mm/yy',
                                                                                                          'changeMonth' => 'true',
                                                                                                          'changeYear'=>'true',
                                                                                                          'constrainInput' => 'false'),
                                            'htmlOptions'=>array('id'=>"WEF-$i",'value'=>$WEF[$i],'style'=>'width:97px', 'placeholder' => 'dd/mm/yyyy',), 
               ));
          ?> 
         </td>
        
         <td>
         <?php $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>PARTY_TYPE::model(),'name'=>"WET[$i]","attribute"=>"WET[$i]",'options'=>array('showAnim'=>'slide',
                                                                                                          'dateFormat'=>'dd/mm/yy',
                                                                                                          'changeMonth' => 'true',
                                                                                                          'changeYear'=>'true',
                                                                                                          'constrainInput' => 'false'),
                                            'htmlOptions'=>array('id'=>"WET-$i",'value'=>$WET[$i],'style'=>'width:97px', 'placeholder' => 'dd/mm/yyyy',), 
               ));
          ?>                     
   
             <input id="<?php echo "Party_Type_ID".$i;?>" type="hidden" name="<?php echo "Party_Type_ID".$i;?>" value="<?php echo $get_Party_Type_ID;?>">
         </td>
         
       </tr> 
       
<!--       <input type="hidden" name="Party_Type_ID<?php //echo $i;?>" id="<?php //echo "Party_Type_ID-".$i;?>" value="<?php //echo $get_Party_Type_ID;?>" >-->

       <?php } ?>
       
       
<!--       <input type="hidden" name="<?php //echo $i;?>address" id="<?php //echo "address-".$i;?>" value="<?php //echo $address[$i];?>" > -->
       
<!--        <input id="Party_Type_ID" type="hidden" name="Party_Type_ID" value=" <?php //echo $get_Party_Type_ID;?>">-->
        
        
        
       </tbody>
    </table>

    <table  class="" id="" style="float:right;width:505px;height:16px;padding-top:8px;padding-left: 370px;">
        <tbody>
         <tr>
<!--        <td style="width:30px"><a><?php //echo CHtml::link( $Getlabelname->Get_Labelname_Fnc(""), '#', array('onclick'=>'$("#mydialog").dialog("open"); return false;',));?></a></td>   -->
        <td style="width:65px"><a id="Minfo" class="moreinfo" style="float:right;padding-top:30px;"> <?php echo  $Getlabelname->Get_Labelname_Fnc("135");?></a>
           
<!--        <img  src="<?php //echo Yii::app()->request->baseUrl; ?>/css/images/icon_plus.png"   
           title="Add Rows" class="plusbutton"  alt="" style="cursor: pointer;" id="plus"/></td>-->
         <input id="TotRowCount" type="hidden" name="TotRowCount" value="<?php  echo $loop_party;?>"></tr>
          
         </tbody>  
    </table>
</div>   
</div><!-- main div id party -->



<!-- div for accordion-->
<div  class="Grid_Insert_Table" id="partyAddress">
<div id="party_tabs">
  <ul>
    <li><a href="#tabs-1">Contact </a></li>
    <li><a href="#tabs-2">Bank</a></li>
<!--    <li><a href="#tabs-3">More</a></li>-->
 </ul>

<!--*********************Address Form Details For accordion******************************************************-->
 <div id="tabs-1" class="convert_to_scroll">
     
      <?php  
         $condition="DFCTG_DEFINITION_TYPE='PARTY_CONTACT' ORDER BY ID";
         $getpersonneladdress=Basic_definition::model()->findAll($condition);
         $count=count($getpersonneladdress);
      //  print_r($getpersonneladdress);exit;
//****** USED FOR UPDATING ENTITY CONTACT ************ ****************** *******************   *******************************        
         if($party_id!="")
             {
//                $get_Party_Address = Yii::app()->db->createCommand()
//                                      ->select('ID,CONTACT_TYPE,LINE1,LINE2,LINE3,LINE4,LINE5,CITY,COUNTRY,MOBILE_PHONE,REGISTRED_MOBILE,TELEPHONE,FAX,EMAIL,REGISTRED_EMAIL,URL,WEF,WET,ENTITY_ID,PARTY_ID')  
//                                      ->where("PARTY_ID=:party_id",array(':party_id'=>$party_id)) 
//                                      ->from('ENTITY_CONTACT')
//                                      ->queryAll(); 
                //$Address_Count=count($get_Party_Address)-1;    
                //print_r($get_Party_Address);
                
                  
         
             }
             else{ }

//****** USED FOR UPDATING ENTITY CONTACT ****ENDS HERE********     ******************** ****************  *********************    
         
         $address=array();
         $addresstype="";
         foreach ($getpersonneladdress as $key => $record) {
           
            //$key=$key+1; 
            $address[$key]=$record->DESCRIPTION; 
            $addresstype=$address[$key];
        
            //echo $addresstype;
          ?> 

  <?php  } ?>
 
     
 
 <input type="hidden" name="addcount" id="addcount" value="<?php echo $count;?>"> 
 
 <div style="width:99% !important; height:175px!important; margin: 0 auto;" >
     <div id="accordion" style="width: 100% !important;">
         

     <?php for($i=0;$i<$count;$i++) {
              $get_Party_Address[$i]="";
            if($party_id!="")
            {
                           
              $get_Party_Address= Yii::app()->db->createCommand()
                          ->SELECT('*')
                          ->where("PARTY_ID=:party_id and CONTACT_TYPE=:contact_type",array(':party_id'=>$party_id,':contact_type'=>$address[$i])) 
                          ->from('ENTITY_CONTACT')
                          ->queryAll();
         // print_r( $get_Party_Address);//exit;
             //echo  count($get_Party_Address);
            }
//            else
//            {
//               $get_Party_Address[$i]="" ;
//            }
                     
        ?>
         
 <?php 
//*****************************************************  *********************************************   ************************************
    try
     { //*****************SETTING THE VALUES FOR UPDATE***ENTITY CONTACT**********************
        
         if(!empty($get_Party_Address[0]["ID"]))                                                                              //***********
       {
             $ID[$i]= $get_Party_Address[0]["ID"];                              //print_r( $ID[$i]);
       }    else {  $ID[$i]="";}    
        
       
       if(!empty($get_Party_Address[0]["LINE1"]))                                                                              //***********
       {

           $LINE1[$i]= $get_Party_Address[0]["LINE1"];                        // print_r( $LINE1[$i]);
       }   else {  $LINE1[$i]="";}                                                                                             //***********
       
       if(!empty($get_Party_Address[0]["LINE2"]))
       {
           $LINE2[$i]= $get_Party_Address[0]["LINE2"];                                                                        //***********
       }   else{ $LINE2[$i]="";}
       
        if(!empty($get_Party_Address[0]["LINE3"]))
       {
           $LINE3[$i]= $get_Party_Address[0]["LINE3"];                                                                         //***********
       }   else{ $LINE3[$i]="";}
       
          if(!empty($get_Party_Address[0]["CITY"]))
       {
           $CITY[$i]= $get_Party_Address[0]["CITY"];                                                                           //***********
       }   else{ $CITY[$i]="";}
       
          if(!empty($get_Party_Address[0]["COUNTRY"]))
       {
           $COUNTRY[$i]= $get_Party_Address[0]["COUNTRY"];                                                                     //***********
       }   else{ $COUNTRY[$i]="";}
       
         if(!empty($get_Party_Address[0]["MOBILE_PHONE"]))
       {
           $MOBILE_PHONE[$i]= $get_Party_Address[0]["MOBILE_PHONE"];
       }   else{ $MOBILE_PHONE[$i]="";}                                                                                         //***********
       
        if(!empty($get_Party_Address[0]["TELEPHONE"]))
       {
           $TELEPHONE[$i]= $get_Party_Address[0]["TELEPHONE"];                                                                 //***********
       }   else{ $TELEPHONE[$i]="";}
       
        if(!empty($get_Party_Address[0]["FAX"]))
       {
           $FAX[$i]= $get_Party_Address[0]["FAX"];                                                                             //***********
       }   else{ $FAX[$i]="";}
       
         if(!empty($get_Party_Address[0]["EMAIL"]))                                            
       {                                                                                                
           $EMAIL[$i]= $get_Party_Address[0]["EMAIL"];                                                                         //***********
       }   else{ $EMAIL[$i]="";}
               
         if(!empty($get_Party_Address[0]["URL"]))
       {
           $URL[$i]= $get_Party_Address[0]["URL"];                                                                             //***********
       }   else{ $URL[$i]="";}
              
       
          if(!empty($get_Party_Address[0]["WEF"]))                                                                             //***********
       {
          // $WEF_address[$i]= $get_Party_Address[$i]["WEF"];
           $WEF_address[$i]= Yii::app()->dateFormatter->format("dd/MM/yyyy", $get_Party_Address[0]["WEF"]);//SETTING THE DATE FORMATE AS DD/MM/YY
       }   else{ $WEF_address[$i]="";}
       
         if(!empty($get_Party_Address[0]["WET"]))                                                                              //***********
       {
           //$WET_address[$i]= $get_Party_Address[$i]["WET"];
           $WET_address[$i]= Yii::app()->dateFormatter->format("dd/MM/yyyy", $get_Party_Address[0]["WET"]);//SETTING THE DATE FORMATE AS DD/MM/YY
       }   else{ $WET_address[$i]="";}
       
     }                                                                                                                          //***********
     
    catch (Exception $exc) 
    {
            // echo $exc->getTraceAsString();
    }  
 //************************Address VAlue SETTING ENDS HERE**************************************************************************************   
?>

         <h3><?php  echo $address[$i]; //^^^^^^^^DISPLAYS THE DESCRIPTION ON ENTITY CONTACT ACCORDION^^^^^^^^^^^
         
             if(isset($get_Party_Address[$i]))
             {
                 $ENTITY_Contact_Id = $ID[$i];
             
             }else
             {  $ENTITY_Contact_Id ="";}
               ?>
             <input type="hidden" name="<?php echo $i;?>address" id="<?php echo "address-".$i;?>" value="<?php echo $address[$i];?>" > 
             <input id="<?php echo "contacttype-id-".$i;?>" type="hidden" name="<?php echo "contacttype-id-".$i;?>" value="<?php echo $ENTITY_Contact_Id ;?>">
         </h3>
  
           <div>
            
            <table style="margin-bottom:0px; width: 100%;height:50px; background-color: #F8F8F8">
                <tr>
                   
                    <td width="auto">
                        
                        <?php 
                        //print_r($get_Party_Address[$i]);
                        
                        ?>
                        
                        <table id="address_table" class="addresstable">
                            <tr>
                            
                             <td><?php echo $form->textField(Entity_Contact::model(),"[$i]LINE1",array('id'=>"LINE1-$i",'value'=>$LINE1[$i],'class'=>"inputpermament")); ?></td>
                            </tr>
                            <tr>
                               <td><?php echo $form->textField(Entity_Contact::model(),"[$i]LINE2",array('id'=>"LINE2-$i",'class'=>"inputpermament",'value'=>$LINE2[$i])); ?></td>
                            </tr>
                            <tr>
                                 
                               <td><?php echo $form->textField(Entity_Contact::model(),"[$i]LINE3",array('id'=>"LINE3-$i",'value'=>$LINE3[$i],'placeholder'=>'<Postal Code>','class'=>'inputpermament'));?></td>
                            </tr>
                            <tr>

                                <td><?php echo $form->textField(Entity_Contact::model(),"[$i]CITY",array('id'=>"CITY-$i",'value'=>$CITY[$i],'placeholder'=>'<City>','class'=>'inputpermament'));?></td>
                            </tr>
                            <tr>

                                <td><?php               
                 
                            $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                                    'model'=>Entity_Contact::model(),
                                    'id'=>"COUNTRY$i",
                                    'name'=>"ENTITY_CONTACT[$i][COUNTRY]", 
                                    'value'=>$COUNTRY[$i],
                                    'source'=>$this->createUrl('Party/CountryAutocomplete'),                                   
                                    'options'=>array(
                                     'minLength'=>'0', 
                                     'select'=>'js:function( event, ui ) {
                                                  //$("COUNTRY").val(ui.item.id);
                                              // alert(ui.item.label);
                                                   $("#country").val(ui.item.id); 
                                                   
                                               }',
                                        
                                      'change'=>'js:function( event, ui ) {                                           
                                                if (!ui.item) {
                                             //alert(#COUNTRY'.$i.');
                                                $("#COUNTRY'.$i.'").val(""); 
                                               
                                                }                                                
                                        }',                                        
                                    ),
                                    'htmlOptions'=>array(
                                        'style'=>'height:25px;width:240px;',
                                        'class'=>"inputpermament",
                                        'placeholder'=>'<Country>',
                                       
                                    ),
                                ));                
                 
                 ?>
        
                                    </td>
                            </tr>
                            
                        </table>
                    </td>
                     <td style="width:78%; vertical-align: top;border:5px solid #e8e8e8;border-bottom:5px solid #e8e8e8 !important;">
                        <table id="second_table_contact" class="secondtablecontact">
                             <tr class="spaceUnder">
                                <td class="margin1" style="font-size:13px !important"><?php echo$Getlabelname->Get_Labelname_Fnc("156"); ?></td>
                                <td class="margin1" style="padding-left: 5px;"><?php echo $form->textField(Entity_Contact::model(),"[$i]MOBILE_PHONE",array('id'=>"MOBILE_PHONE-$i",'value'=>$MOBILE_PHONE[$i],'class'=>'inputpermament'));?></td>
                                <td class="margin1" style="font-size:13px !important"><?php echo$Getlabelname->Get_Labelname_Fnc("110"); ?></td>
                                <td class="margin1" style="padding-left: 5px;"><?php echo $form->textField(Entity_Contact::model(),"[$i]TELEPHONE",array('id'=>"TELEPHONE-$i",'value'=>$TELEPHONE[$i],'class'=>'inputpermament'));?></td>
                               
                               
                            </tr>
                            <tr class="spaceUnder">
                                <td class="margin1" style="font-size:13px !important"><?php echo$Getlabelname->Get_Labelname_Fnc("111"); ?></td>
                                <td class="margin1" style="padding-left: 5px;"><?php echo $form->textField(Entity_Contact::model(),"[$i]FAX",array('id'=>"FAX-$i",'value'=>$FAX[$i],'class'=>'inputpermament'));?></td>
                                <td class="margin1" style="font-size:13px !important"><?php echo$Getlabelname->Get_Labelname_Fnc("112"); ?></td>
                                <td class="margin1" style="padding-left: 5px;"><?php echo $form->textField(Entity_Contact::model(),"[$i]EMAIL",array('id'=>"EMAIL-$i",'value'=>$EMAIL[$i],'class'=>'inputpermament'));?></td>
                                
                            </tr>

                            <tr class="spaceUnder">
                               <td class="margin1" style="font-size:13px !important"><b><?php echo$Getlabelname->Get_Labelname_Fnc("157"); ?></b></td><td class="margin1" style="padding-left: 5px;"><?php echo $form->textField(Entity_Contact::model(),"[$i]URL",array('id'=>"URL-$i",'value'=>$URL[$i],'class'=>'inputpermament'));?></td>
                               <td class="margin1">
                                 <td><b><span class=""><?php echo$Getlabelname->Get_Labelname_Fnc("126"); ?></span></b>
                                <?php $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>Entity_Contact::model(),"attribute"=>"WEF[$i]",'value'=>'','options'=>array('showAnim'=>'slide',
                                                                                                          'dateFormat'=>'dd/mm/yy',
                                                                                                          'changeMonth' => 'true',
                                                                                                          'changeYear'=>'true',
                                                                                                          'constrainInput' => 'false'),
                                           'htmlOptions'=>array('id'=>"WEF$i",'value'=>$WEF_address[$i],'style'=>'width:97px', 'placeholder' => 'dd/mm/yyyy',), 
               ));
          ?>                  <b><span class=""><?php echo$Getlabelname->Get_Labelname_Fnc("127"); ?></span></b>
                                   <?php $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>Entity_Contact::model(),"attribute"=>"WET[$i]",'value'=>'','options'=>array('showAnim'=>'slide',
                                                                                                          'dateFormat'=>'dd/mm/yy',
                                                                                                          'changeMonth' => 'true',
                                                                                                          'changeYear'=>'true',
                                                                                                          'constrainInput' => 'false'),
                                           'htmlOptions'=>array('id'=>"WET$i",'value'=>$WET_address[$i],'style'=>'width:97px', 'placeholder' => 'dd/mm/yyyy',), 
               ));
          ?>
           </td>
          
           

                            </tr>
                        </table>

                    </td>
                </tr>

            </table>

        </div>
                         
        <?php } 
        
       // print_r($get_Party_Address);
                        
        
        
        ?>
         
       </div>
    </div>
 </div>


<!--*********************This div id for bank*****************************************-->
<div id="tabs-2">
    
    <?php
//*****TRY_CATCH BLOCK FOR BANK****** ***** *************  
     
     $get_bank_id = Yii::app()->db->createCommand()
                                      ->select('ID')  
                                      ->where("PARTY_ID=:party_id",array(':party_id'=>$party_id)) 
                                      ->from('ENTITY_BANK')
                                      ->queryAll(); 
       try
        {
            if($party_id!="") 
            {
                $get_Party_BANK= Yii::app()->db->createCommand()
                                      ->select('ID,ACCOUNT_NO,ACCOUNT_OWNER,ACCOUNT_TYPE,CURRENCY,NETPAY_CREDIT,WEF,WET,PARTY_ID,OSTRU_ID,BANK_ID,ENTITY_ID')  
                                      ->where("PARTY_ID=:party_id",array(':party_id'=>$party_id)) 
                                      ->from('ENTITY_BANK')
                                      ->queryAll(); 
               
                //print_r($get_bank_id[0]['ID']);  exit; 

                
                if(!empty($get_Party_BANK[0]['ACCOUNT_NO']))
                {
                    $Account_No=$get_Party_BANK[0]['ACCOUNT_NO'];
                }else{$Account_No="";}
                
                if(!empty($get_Party_BANK[0]['ACCOUNT_OWNER']))
                {
                    $ACCOUNT_OWNER=$get_Party_BANK[0]['ACCOUNT_OWNER'];
                }else{$ACCOUNT_OWNER="";}
                
                if(!empty($get_Party_BANK[0]['ACCOUNT_TYPE']))
                {
                    $ACCOUNT_TYPE =$get_Party_BANK[0]['ACCOUNT_TYPE'];          //echo $ACCOUNT_TYPE;
      
                }else{$ACCOUNT_TYPE ="";}
                
                if(!empty($get_Party_BANK[0]['CURRENCY']))
                { 
                    $CURRENCY =$get_Party_BANK[0]['CURRENCY'];
                }else{$CURRENCY ="";}
                
                if(!empty($get_Party_BANK[0]['NETPAY_CREDIT']))
                {
                    $NETPAY_CREDIT=$get_Party_BANK[0]['NETPAY_CREDIT'];
                }else{$NETPAY_CREDIT ="";}
                
                if(!empty($get_Party_BANK[0]['WEF']))
                {
                    $WEF=$get_Party_BANK[0]['WEF'];
                    $WEF= Yii::app()->dateFormatter->format("dd/MM/yyyy", $WEF);//SETTING THE DATE FORMATE AS DD/MM/YY
                }else{$WEF ="";}
                
                if(!empty($get_Party_BANK[0]['WET']))
                {
                    $WET=$get_Party_BANK[0]['WET'];
                    $WET= Yii::app()->dateFormatter->format("dd/MM/yyyy", $WET);//SETTING THE DATE FORMATE AS DD/MM/YY
                }else{$WET ="";}
                
                if(!empty($get_Party_BANK[0]['BANK_ID']))
                {
                    $BANK_ID=$get_Party_BANK[0]['BANK_ID'];
                   
                }else{$BANK_ID ="";}
                
                 if(!empty($get_Party_BANK[0]['ID']))
                {
                    $Entity_BANK_ID=$get_Party_BANK[0]['ID'];
                   
                }else{$Entity_BANK_ID ="";}
                

            } 
            else
            {
                $Account_No="";
                $ACCOUNT_OWNER="";
                $ACCOUNT_TYPE="";
                $CURRENCY="";
                $NETPAY_CREDIT="";
                $WEF="";$WET="";
                $BankDetails_UPDATE['BANK']="";
                $BankDetails_UPDATE['BRANCH']="";
                $BANK_ID="";$Entity_BANK_ID="";
            }
        
        }
       catch (Exception $exc) 
        {
                // echo $exc->getTraceAsString();
        }  
       
    ?>
    
       
    
     <table id="bank-branch" style="margin-bottom:0px;">
        <tr>
                    <td width="350px" style="vertical-align: top;padding-top: 7px;">
              
                        <table id="bank_accordion_table" class="grid_insert_table_bankbranch" style="margin-top: 10px;margin-bottom: 10px;margin-left: 10px;height:160px;width: 366px;">
 
                            <tr class="spaceUnder">
                                <td class="" style="font-weight: bold;padding-top: 10px;padding-bottom: 0px;padding-right: 25px;"><?php echo$Getlabelname->Get_Labelname_Fnc("123"); ?></td>
                                <td class="" style="padding-right: 10px;padding-bottom: 0px;">
                      <div  class="input-append">
                                <input type="text" autocomplete="on"  value="<?php echo $BankDetails_UPDATE['BANK']; ?>" class="" id="Branch" name="Branch" style="height:25px;width:240px;border-bottom-right-radius:4px;border-top-right-radius:4px;" class="bank" >
                               
                      </div>
                               </td>
                            </tr>
            <tr id="addbranch" class="spaceUnder"><td></td> <td class="padding-left-text-left-small"><div class="margintxt"  id="Addinput"></div></td></tr>             
                            <tr class="spaceUnder">
                                <td  class="" style="font-weight: bold;padding-right: 25px;padding-bottom: 0px;" ></td>
                                <td  class="" style="padding-right: 10px;padding-bottom: 0px;"><input type="text" name="main_bank" id="labelbank" value="<?php echo $BankDetails_UPDATE['BRANCH']; ?>" readonly>
                                <input type="hidden" name="id" id="idbank" value="<?php echo $BANK_ID; ?>">   
                                <input type="hidden" name="Entity_Bank_Id" value="<?php echo $Entity_BANK_ID;?>"
                                </td>
                            </tr>
                            
                            <tr class="spaceUnder">
                                <td  class="" style="font-weight: bold;padding-right: 25px;padding-bottom: 0px;" ><?php echo$Getlabelname->Get_Labelname_Fnc("193"); ?>
                                
                                 <td class="" style="padding-top:0px !important;;padding-right: 10px;"><?php               
                 
                            $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                                    'model'=>Entity_Bank::model(),'attribute'=>"ACCOUNT_TYPE",
                                    'id'=>"Account_Type",
                                    'name'=>"AccountType", 
                                    'source'=>$this->createUrl('Party/Account_TypeAutocomplete'),                                   
                                    'options'=>array(
                                     'minLength'=>'0', 
                                     'select'=>'js:function( event, ui ) {
                                                  //$("Account_Type").val(ui.item.id);
                                             //  alert(ui.item.id);
                                                   $("#Account_Type").val(ui.item.id);       
                                               }',
                                        
                                      'change'=>'js:function( event, ui ) {                                           
                                                if (!ui.item) {
                                                    $("#Account_Type").val("");
                                                   
                                                 
                                                }                                                
                                        }',                                        
                                    ),
                                    'htmlOptions'=>array(
                                        'style'=>'height:25px;width:240px;',
                                        'class'=>"inputpermament",'value'=>$ACCOUNT_TYPE,
                                       // 'placeholder'=>'<Country>',
                                       
                                    ),
                                ));                
                 
                 ?>
                                
                                
                                
                                
                                
                                </td>
<!--                                <td  class="" style="padding-top:0px !important;;padding-right: 10px;"><input type="text" name="add2"></td>-->
                            </tr>
                                  
                <tr class="link">
                     <td colspan ="2"  class="moreinfo"><span id="create-branch" style="border-radius: 10px;background-color:#357AE8 ;float:left;height: 22px;padding-left:0px;padding-right:0px;padding-top: 2px;font-weight: bold;">
                            <div id="dialog">                                        
                                        </div>
                                        <button id="dialogBtn" onmouseover = "tooltip.pop(this, 'Create a Branch');"><?php  echo $Getlabelname->Get_Labelname_Fnc("179") ?></button>
                         
                         
                         </span></td> 
                </tr>
                            
                        </table>
 </td>
                    
               
                  
          
  <td style="vertical-align: top;padding-top: 7px;">
              <table id="bank-branch" style="margin-bottom:0px; background-color: #F8F8F8">
                  <tr>
                    <td width="auto">
                        <table id="bank_entity_bank" class="grid_insert_table_bankdetails" style="height: 160px;margin-top: 10px;margin-bottom: 10px;margin-left: 1px;">

<!--                            <tr>
                                <td colspan="1" style="text-align:center;font-weight: bold;text-decoration:underline;"><h5>BANK-DETAILS</h5></td>
                            </tr>-->
                           
                            <tr class="spaceUnder">
                                <td class="banknameaccordion" style="padding-right:0px;padding-top: 10px;padding-left:9px;text-align:left;  "><?php echo$Getlabelname->Get_Labelname_Fnc("194"); ?></td>
                                <td class="banknametextaccordion" style="padding-top: 5px;padding-right: 10px;">
                                 <?php echo $form->textField(Entity_Bank::model(),"ACCOUNT_NO",array("id"=>"ACCOUNT_NO",'value'=>$Account_No,'style'=>"width:268px;")); ?>
                                </td>
                            </tr>
                            
                            <tr class="spaceUnder">
                                <td  class="bankbranchaccordion" style="font-weight: bold;padding-right:0px;" ><?php echo$Getlabelname->Get_Labelname_Fnc("195"); ?></td>
                                <td  class="bankbranchtextaccordion" style="padding-top:0px;padding-right: 10px;">
                                    <?php echo $form->textField(Entity_Bank::model(),"ACCOUNT_OWNER",array("id"=>"ACCOUNT_OWNER",'value'=>$ACCOUNT_OWNER,'style'=>"width:268px;",)); ?>
                                </td>
                            </tr>
                            
                            <tr class="spaceUnder">
                                <td  class="" style="font-weight: bold;padding-right:0px;padding-bottom: 0px;width: 105px;text-align:left;padding-left: 9px; " ><?php echo$Getlabelname->Get_Labelname_Fnc("160"); ?></td>
                                <td  class="" style="padding-top:0px !important;;padding-right: 10px;">
                                <?php               
                 
                            $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                                    'model'=>Entity_Bank::model(),'attribute'=>"CURRENCY",
                                    'id'=>"currency",
                                    'name'=>"currency", 
                                    'source'=>$this->createUrl('Party/CurrencyAutocomplete'),                                   
                                    'options'=>array(
                                     'minLength'=>'0', 
                                     'select'=>'js:function( event, ui ) {
                                                  //$("COUNTRY").val(ui.item.id);
                                               
                                                  $("#currencyid").val(ui.item.id);       
                                               }',
                                        
                                      'change'=>'js:function( event, ui ) {                                           
                                                if (!ui.item) {
                                                    $("#currency").val("");
                                                   
                                                 
                                                }                                                
                                        }',                                        
                                    ),
                                    'htmlOptions'=>array(
                                         'style'=>'height:25px;width:267px;',
                                          'class'=>"currency",'value'=>$CURRENCY,
                                        
                                       
                                    ),
                                ));                
                 
                 ?></td>
                            </tr>
                           
                             <tr class="spaceUnder">
<!--                                <th> WEF</th>-->
                                
                                 <td style="font-weight: bold;padding-right:0px;padding-bottom: 0px;width: 105px;text-align:left;padding-left: 9px; "><?php echo$Getlabelname->Get_Labelname_Fnc("126"); ?> </td>
                                 <td  class="" style="padding-top:0px !important;;padding-right:0px;text-align: left;"><span><?php  $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>Entity_Bank::model(),"attribute"=>"WEF",'value'=>'','options'=>array('showAnim'=>'slide','placeholder'=>'dd/mm/yy',
                                                                                                           'dateFormat'=>'dd/mm/yy',
                                                                                                           'changeMonth' => 'true',
                                                                                                           'changeYear'=>'true',
                                                                                                           'constrainInput' => 'false'),
                                            'htmlOptions'=>array('id'=>"WEF",'value'=>$WEF,'style'=>'width:97px !important;', 'placeholder' => 'dd/mm/yyyy',),            
                                          ));
                                     ?> </span>
<!--                                <th style="font-weight: bold;padding-right: 25px;" >WEF</th>-->
                                  <?php echo$Getlabelname->Get_Labelname_Fnc("127"); ?>
                                      <?php  $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>Entity_Bank::model(),"attribute"=>"WET",'value'=>'','options'=>array('showAnim'=>'slide','placeholder'=>'dd/mm/yy',
                                                                                                           'dateFormat'=>'dd/mm/yy',
                                                                                                           'changeMonth' => 'true',
                                                                                                           'changeYear'=>'true',
                                                                                                           'constrainInput' => 'false'),
                                            'htmlOptions'=>array('id'=>"WET",'value'=>$WET,'style'=>'width:97px !important;', 'placeholder' => 'dd/mm/yyyy',),            
                                          ));
                                     ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                 </tr>
          </table>
      </td>
      
<!--GENERIC FLEX IN BANK ****************** DISAPPEARS IF NO VALUE IN  $GetGenericFlex_bank **********************************    -->
      <td style="vertical-align: top;padding-top: 7px;" id="get_generic_ajax">

            <?php
          
            ?>    
                <?php    if($GetGenericFlex_bank!="") { ?>
                    <table  id="bank_generic" style="background-color: #F8F8F8;margin-top: 10px;margin-bottom: 35px;margin-left: -15px;border: 1px solid #B0B0B0;border-radius: 10px !important;">
                        <tbody class="ScrollContent">
                        <?php    // print_r(count($GetGenericFlex_bank));
                              foreach ($GetGenericFlex_bank as $key => $value)
                              {
                                $key=$key +1;
                                // print_r($key);
                                
//******************** FOR UPDATION ******************************                              
                                      if($party_id!="")
                                        {
                                           
                                          
//                                                ->select('GENERIC_FLEX_VALUE.ID,FLEX_VALUE,GENERIC_FLEX.TABLE_ID')  
//                                                ->where("TABLE_ID = 'ENTITY_BANK',FLEX_VALUE is not null and RECORD_ID=:party_id order by GFLEX_ID asc ",array(':party_id'=>$party_id)) 
//                                                ->from('GENERIC_FLEX_VALUE LEFT JOIN GENERIC_FLEX ON GENERIC_FLEX_VALUE.GFLEX_ID = GENERIC_FLEX.ID')         
//                                                ->queryAll(); 
//                                          $tableid="ENTITY_BANK";
//                                          $get_Gflex_id[$key] =  Yii::app()->db->createCommand() 
//                                                ->select('GENERIC_FLEX_VALUE.ID,GENERIC_FLEX_VALUE.FLEX_VALUE,GENERIC_FLEX.TABLE_ID')
//                                                ->from('GENERIC_FLEX_VALUE')
//                                                ->join('GENERIC_FLEX','GENERIC_FLEX_VALUE.GFLEX_ID = GENERIC_FLEX.ID')
//                                                ->where("TABLE_ID =:tableid and FLEX_VALUE is not null and RECORD_ID=:party_id order by GFLEX_ID asc",array(':party_id'=>$party_id,':tableid'=>$tableid)) 
//                                                ->queryAll(); 
                                            
                                            
                                            
                                         
               // ################### FOR NULL TEXT-FIELDS ########################### ############################## #####################                          
                                            if(isset($value['FLEX_VALUE']))
                                            {
                                                  $FLEX_value=$value['FLEX_VALUE'];
                                                  //echo $FLEX_value;
                                            }
                                            else
                                            {
                                                 $value['GFLEX_ID']="";
                                                 $FLEX_value="";
                                            }
                                            
                // ################### FOR NULL TEXT-FIELDS ###########################  ###################################################                            
                                        }
                                        else
                                        {  // echo "in else";
                                            $get_Gflex_id[$key]="";
                                            $FLEX_value ="";
                                            $value['GFLEX_ID']="";
                                        }
                        ?>
                            <tr class="spaceUnder">
                                <td class="" style="padding-right:20px;padding: 5px;">
                                     <?php echo $value['FIELD_TITLE'];?>  </td>
                                <td style="padding: 5px;">
                                 <?php  echo $form->textField(Generic_Flex_Value::model(),"[PARTY_BANK_GENERIC_FLEX][$key]FLEX_VALUE",array('size'=>60,'maxlength'=>120,"class"=>"margintxt","id"=>"generic$key","value"=>$FLEX_value)); ?>
                                 <input type="hidden" id="genericid<?php echo $key; ?>" name="PARTY_BANK_GENERIC_FLEX[genericid][<?php echo $key; ?>]" value="<?php echo $value['GENERIC_ID']; ?>"> 
                                <?php // echo $key; exit; ?>
                                 <input type="hidden" id="Flex_value-id-<?php echo $key; ?>"  name="Flex_value-id-[<?php echo $key; ?>]" value="<?php echo $value['GENERIC_VALUE_ID'];?>">        
                                 
                                </td>
                              
                     <?php } //echo $key;print_r($get_Gflex_id[$key]);?> 
                        
<!--                  //take array's tot count and assign in value              -->
<!--                            <input type="hidden" id="genericRowCount" name="genericRowCount" value="<?php //echo $key ?>"-->
                                
                            </tr>  
                            </tbody>
                   </table>
                <?php } ?>
            <input type="hidden" id="genericRowCount" name="PARTY_BANK_GENERIC_FLEX[genericRowCount]" value="<?php echo count($GetGenericFlex_bank);?>">
            </td>



        </tr>
 
  
      <table>
        <tr>
            <td style="text-align:right" colspan="4">
            <span id="create-generic" style="border-radius:10px;background-color:#357AE8 ;float:right;height: 22px;padding-left:0px;padding-right:0px;padding-top:0px;font-weight: bold;margin-left: 272px;margin-right:20px;margin-top:-30px;">
               <div id="dialog"> </div>
                 <button id="dialogBtn1"><?php  echo "User Field";?></button>
           </span></td>
        </tr>
 </table>
</div>



<div id="tabs-3">

</div>

</div>
</div>

<table class="tbl_btn" id="table_bottom_bg" style="float:left;">
    <tbody>
      <tr id="table_bottom_bg" class="tablebottombg">
        <td  class="btn_save" style="padding: 2px;">
          <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"reset",'size'=>'small','icon'=>'icon-refresh','label'=>$Getlabelname->Get_Labelname_Fnc("104"),'id'=>'reset')); ?>
          <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"submit",'size'=>'small', 'label'=>$model->isNewRecord ?$Getlabelname->Get_Labelname_Fnc("103") : $Getlabelname->Get_Labelname_Fnc("181"),'id'=>'SAVE','icon'=>'icon-thumbs-up',)); ?>
           <input id="partyid" type="hidden" name="Party_Id" value="<?php echo $party_id;?>"> 
        </td>
       </tr>

     </tbody>
</table>   
   
</div>
    
       
<div id="data3"  class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-draggable" style="display:none;position:absolute;padding:10px;background-color: white;width:auto;height:auto;z-index: 1002;top:200px;left:312px;border-radius: 5px;border-top-left-radius: 5px !important;border-top-right-radius: 5px !important;">
      <div>
        <div class="note"> 
            <div class="labelImage"></div>
        <div class="LabelMsg">
              <p><?php echo  $Getlabelname->Get_Labelname_Fnc("164");?></p>
        </div> 
      </div>
     </div>
    
         <img  src="<?php echo Yii::app()->request->baseUrl; ?>/images/cross.png" class="detailseditbtn2 pull-right" onclick="closepopup3();" id="detailseditbtn-2" style="" title="Close">
         <br><br>
         
<!--  Table with Party_Flex from Basic Definition        -->

<table  class="grid_insert_table_Party_generic" id="">
 <tbody class="ScrollContent" style="height:210px !important">
     <tr>
           <td style="vertical-align: top;padding-top: 0px;" id="get_party_generic_ajax">

            <?php
          
            ?>    
                <?php    if($GetGenericFlex_party!="") { 
                    $get_ID =  Yii::app()->db->createCommand()
                                                        ->select('GFLEX_ID') 
                                                        ->from('GENERIC_FLEX_VALUE')
                                                        ->where("RECORD_ID=:party_id",array(':party_id'=>$party_id))
                                                        ->queryAll();  
                           //   print_r($get_ID[0]['GFLEX_ID']);
                    
                    ?>
                    <table  id="Party_generic" style="margin-top: 0px;margin-bottom: 0px;">
                      
                        <?php     //print_r($GetGenericFlex_party);
                              foreach ($GetGenericFlex_party as $key => $value)
                              {
                                $key=$key +1;
                              
                                    //echo $get_ID[1]['GFLEX_ID'];                             
//******************** FOR UPDATION ******************************8                                
                                      if($party_id!="")
                                        {
                                          
//                                            $table_id="PARTY";
//                                            $get_Gflex_id_Party[$key] =  Yii::app()->db->createCommand()
//                                                                ->select('GENERIC_FLEX_VALUE.ID,GENERIC_FLEX_VALUE.FLEX_VALUE,GENERIC_FLEX.TABLE_ID')
//                                                                ->from('GENERIC_FLEX_VALUE')
//                                                                ->join('GENERIC_FLEX','GENERIC_FLEX_VALUE.GFLEX_ID = GENERIC_FLEX.ID')
//                                                                ->where("TABLE_ID =:table_id and FLEX_VALUE is not null and RECORD_ID=:party_id",array(':party_id'=>$party_id,':table_id'=>$table_id)) 
//                                                                ->queryAll();  
                                         
               // ################### FOR NULL TEXT-FIELDS ########################### ############################## #####################                          
                                            if(isset($value['FLEX_VALUE']))
                                            {
                                                  $FLEX_value=$value['FLEX_VALUE'];
                                                  //echo $FLEX_value;
                                            }
                                            else
                                            {
                                                 $value['GFLEX_ID']="";
                                                 $FLEX_value="";
                                            }
                                            
                // ################### FOR NULL TEXT-FIELDS ###########################  ###################################################                            
                                        }
                                        else
                                        {  // echo "in else";
                                            $get_Gflex_id_Party[$key]="";
                                            $FLEX_value ="";
                                            $value['GFLEX_ID']="";
                                        }
                                        
                                        if($value['FIELD_TITLE']<>"") {
                                            
                                            
                                       //     echo $value['FIELD_TITLE']."-------------------hiiiii";
                        ?>
                        
                            <tr class="spaceUnder">
                                <td class="" style="text-align: left !important;padding-right:20px;padding: 5px;width:140px;">
                                     <?php echo $value['FIELD_TITLE'];?>  </td>
                                <td style="padding: 5px;">
                                 <?php  echo $form->textField(Generic_Flex_Value::model(),"[PARTY_GENERIC_FLEX][$key]FLEX_VALUE",array('size'=>60,'maxlength'=>120,"class"=>"margintxt","id"=>"generic$key","value"=>$FLEX_value)); ?>
                                 <input type="hidden" id="genericid<?php echo $key; ?>" name="PARTY_GENERIC_FLEX[genericid][<?php echo $key; ?>]" value="<?php echo $value['GENERIC_ID']; ?>"> 
                                <?php // echo $key; exit; ?>
                                 <input type="hidden" id="Flex_value-party-<?php echo $key; ?>"  name="Flex_value-id-party-[<?php echo $key; ?>]" value="<?php echo $value['GENERIC_VALUE_ID'];?>">        
                                 <!--<input type="hidden" id="check_flex" name="[PARTY_GENERIC_FLEX]check_flex" value="is_party_flex">--> 
                                </td>
                              
                     <?php } //echo $key;print_r($get_Gflex_id[$key]);?> 
                        
                                
<!--                  //take array's tot count and assign in value              -->
<!--                            <input type="hidden" id="genericRowCount" name="genericRowCount" value="<?php //echo $key ?>">-->
                                
                            </tr>  
                              <?php } ?>
                   </table>
                <?php } 
                
                //echo count($GetGenericFlex_party);
                ?>
               <input type="hidden" id="genericRowCount" name="PARTY_GENERIC_FLEX[genericRowCount]" value="<?php echo count($GetGenericFlex_party);?>">

      </td>
      
       </tr>
       </tbody></table> 
       <table>
        <tr>
            <td style="text-align:right" colspan="4">
<!--            <span id="create-generic" style="border-radius:10px;background-color:#357AE8 ;float:right;height: 22px;padding-left:0px;padding-right:0px;padding-top:0px;font-weight: bold;margin-left: 272px;margin-right:20px;margin-top:-30px;">
               <div id="dialog"> </div>
                 <button id="dialogBtn2"><?php  echo "User Field";?></button>
           </span>-->
                <button id="dialogBtn2" class="btn btn-primary btn-mini"><?php  echo "User Field";?></button>
            
            </td>
        </tr>

 
</table>
</div>
    
    
    
    
    
    </div>
<?php $this->endWidget(); ?>


