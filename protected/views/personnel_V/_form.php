<!--<script type="text/javascript" src="<?php //echo Yii::app()->request->baseUrl;?>/assets/js/cloning/cloning.js"></script>-->
<?php
//echo $courseexist[0]['RECORD_TYPE'];
$dRECORD_ON=date('d/m/Y');
$party_id=$model->PARTY_ID;
echo $model->PARTY_ID;
require_once("popupdialog.php");
require_once('tooltip.php'); 
require_once('cloning.php'); 
?>
<style>
 .ui-dialog-content ui-widget-content
 {
   height:100px !important;
 }

#ex3::-webkit-scrollbar
{
width:16px;
background-color:#cccccc;
}  
#ex3::-webkit-scrollbar-thumb{
background-color:#F8F8F8;
border-radius:10px;
}
#ex3::-webkit-scrollbar-thumb:hover{
background-color:gray;
border:1px solid #333333;
}
#ex3::-webkit-scrollbar-thumb:active{
background-color:gray;
border:1px solid #333333;
}
#ex3::-webkit-scrollbar-track{
border:1px gray solid;
border-radius:10px;
-webkit-box-shadow:0 0 6px gray inset;
}
.labelRight { 
    height: 25px !important;
    line-height: 20px !important;
    width: 55px !important;

}
.labelLeft {
    height: 25px !important;
    line-height: 19px !important;
    width: 53px !important;
}


.testclass1 
  {
 width: 178px;
            height: 155px;
/*            float: left;*/
            margin: 0 auto;
            border: 1px solid #CACACA;
            background-color: #E8E8E8;
/*            margin: 5%;*/
            border-radius: 15px;
          //  background-image: url("../../images/user.png");
            background-position: -35px 1px;
            background-repeat: no-repeat;
            margin-top: 20px;
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
                                       echo "../../images/user.png" ;  
                                    }
                               } 
                               else 
                               { 
                                   echo "../../images/user.png" ; 
                                   
                               }?>);
      
  }   
  
</style>
<script>
    
function Secondmentorg()
{
    var Secondmentid=$('#Secondmentid').val(); 

    if(Secondmentid=="empty")
      {
   document.getElementById('Secondmentorgid').style.visibility='hidden';
      }
    if(Secondmentid!="empty")
      {
     document.getElementById('Secondmentorgid').style.visibility='visible';       

      }
       
  }
  function selfdate()
  {
   var VERIFIED_BY_SELF= $('#VERIFIED_BY_SELF').attr('checked');  
   var selfdateval=$('#verification_datepicker').val();
   var today = new Date();
   var dd = today.getDate();
   var mm = today.getMonth()+1; //January is 0!
   var yyyy = today.getFullYear();
   if(dd<10){dd='0'+dd} if(mm<10){mm='0'+mm} today =dd+'/'+mm+'/'+yyyy;

   
    if((selfdateval=="")&&(VERIFIED_BY_SELF=="checked"))
        {
        $('#verification_datepicker').val(today);
        }
        else
        {
          $('#verification_datepicker').val("");   
        }
     
  }
  function empdate()
  {

   var VERIFIED_BY_EMPLOYER = $('#VERIFIED_BY_EMPLOYER').attr('checked');  
   var empdateval=$('#verification_datepickeremp').val();
   var today = new Date();
   var dd = today.getDate();
   var mm = today.getMonth()+1; //January is 0!
   var yyyy = today.getFullYear();
   if(dd<10){dd='0'+dd} if(mm<10){mm='0'+mm} today =dd+'/'+mm+'/'+yyyy;
    if((empdateval=="")&&(VERIFIED_BY_EMPLOYER=="checked"))
      {
        $('#verification_datepickeremp').val(today);
      }
     else
      {
        $('#verification_datepickeremp').val("");        
      }
  }
  
  
  function openPopup() {
  var popup = window.open("", "", "width=2000px,height=1000,resizeable,scrollbars"),
      table = document.getElementById("education_table");

  popup.document.write(table.outerHTML);
  popup.document.close();
  if (window.focus) 
    popup.focus();
}
 $(document).ready(function(){ 
     
     
    // $( "#Update" ).click(function() {
     //$( "#feedbackform").submit();
      // $("#feedbackform").submit();
  
      //return true;
     //});
    
    //$('#verification_datepicker').reaonly()
//      $('#verification_datepicker').attr('readonly', true);
//      $('#verification_datepickeremp').attr('readonly', true);
      $('#save').click(function()
      {
          
          
      
       
       $.post("<?php echo $this->createUrl('personnel_v/create')?>");
       var SALUTATION=$('#SALUTATION').val();
       var FIRST_NAME=$('#FIRST_NAME').val();
       var LAST_NAME=$('#LAST_NAME').val();
       var dob=$('#dob').val();
       var PREFERRED_NAME=$('#PREFERRED_NAME').val();
       var Personnel_Type=$('#Personnel_Type').val();
       var RELIGION=$('#RELIGION').val();
       var SUBCASTE=$('#SUBCASTE').val();
       var NATIONALITY=$('#NATIONALITY').val();
       var Secondmentid=$('#Secondmentid').val();
 
        var todays = new Date();
        var dd = todays.getDate();
        var mm = todays.getMonth()+1;

        var yy = todays.getFullYear();
   
       if(dd<10){dd='0'+dd} if(mm<10){mm='0'+mm} today =dd+'/'+mm+'/'+yy;
    
        
     if(dob>today)
          {
    
     GetDynamicAlert("20097",msgid);
     $('#NAME'+i).focus();
     return false;          
          }
     if(SALUTATION=="empty")
       {
     
     GetStaticAlert("20160");
     $('#SALUTATION').focus();
     return false;    
       }   
    if(FIRST_NAME=="")
      {
     
     GetStaticAlert("20161");
     $('#FIRST_NAME').focus();
     return false;    
      }  
      if(LAST_NAME=="")
      {
     
     GetStaticAlert("20162");
     $('#LAST_NAME').focus();
     return false;    
      }
      
     if(PREFERRED_NAME=="")
      {
     
     $('#PREFERRED_NAME').val(FIRST_NAME+" "+LAST_NAME);
     $('#accowner').val(FIRST_NAME+" "+LAST_NAME);
     return false;    
      }
          
     if(Personnel_Type=="empty")
       {
     
     GetStaticAlert("20163");
     $('#Personnel_Type').focus();
     return false;    
       }  
      
      if(SUBCASTE!="")
       {
            if(RELIGION=="")
             {
           GetStaticAlert("20166");
           $('#RELIGION').focus();
           return false;    
             }
       }
     if(NATIONALITY=="")
       {
     
     GetStaticAlert("20164");
     $('#NATIONALITY').focus();
     return false;    
       }   
    if(Secondmentid=="empty")
       {    
     GetStaticAlert("20165");
     $('#Secondmentid').focus();
     return false;    
       }   
       
       //############VALIDATION FOR ENTITY CONTACT STARTS HERE##################################################################################################

 // var addcount= $( "#addcount" ).val();already stored in addcount
  var addcount= $( "#addcount" ).val(); 
  
      for(var i=0;i<addcount;i++)
      {
         var contactType=$('#address-'+i).val();
         var add1=$('#add1'+i).val();
         var add2=$('#add2' +i).val();    
         var add3=$('#add3'+i).val();
         var add4=$('#add4'+i).val().trim();
         var city=$('#city'+i).val();    
         var country=$('#COUNTRY'+i).val();    
         var mobile=$('#mobile'+i).val().trim();
         var telephone=$('#telephone'+i).val().trim();
         var fax=$('#fax'+i).val().trim();    
         var email=$('#email'+i).val().trim();        
         var url=$('#url'+i).val().trim();
         var contactwef=$('#wef_datepicker'+i).val();   
         var contactwet=$('#wet_datepicker'+i).val(); 
         //var contactType=$('#address-'+i).val();
       
         
        today = new Date();
        today.setHours(0,0,0,0)
        var Contactwef =  contactwef.split("/");
        userWEF = new Date(Contactwef[2], Contactwef[1] -1, Contactwef[0]); 
        
        today = new Date();
        today.setHours(0,0,0,0)
        var Contactwet =  contactwet.split("/");
        userWET = new Date(Contactwet[2], Contactwet[1] -1, Contactwet[0]); 
       
       if((add1!=="")||(add2!=="")||(add3!=="")||(add4!=="")||(mobile!=="")||(telephone!=="")||(fax!=="")||(email!=="")||(url!=="")||(contactwef!=="")||(contactwet!==""))
         {
           
             if(add1=="")
             {
                GetDynamicAlert("20201",contactType);
               // $('#LINE1-'+i).focus();
                Createfocus('add1'+i);
               
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
       
  /**************FOR EDUCATION VALIDATION***************/
  
  
  var edu_TotRowCount= $( "#edu_TotRowCount").val(); 
  
  for(var i=1;i<edu_TotRowCount;i++)
      {
        
         var course=$('#edu_course'+i).val();
         
         
         
         if(course=="--select--")
         {
         alert("Please Select Course");
         return false;
         }
  
      }
  /*******************EDUCATION VALIDATION END HERE*********/
      
       
         
      });
   
  
     
  $('#addbranch').hide();
// **********IFRAME***********POPUPDiologue*********************

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
            //iframe.attr("src", "");
        }
    });
    
    /****************************iframe for browse img***************/
   

//   var iframe1 = $('<iframe border=0 id="Iframe" name="Iframe" src="<?php //echo Yii::app()->request->baseUrl;?>/index.php/party_image/create?iframe=1" scrolling="no" noresize frameborder="1" ></iframe>');
//    var dialog1= $("<div></div>").append(iframe1).appendTo("body").dialog({
//        autoOpen: false,
//        modal: true,
//        show: "fade",
//        hide: "fade",
//        resizable: false,
//        title:'PARTY IMAGE',
//        width: 'auto',
//        height: 'auto',
//        close: function () {
//            //iframe.attr("src", "");
//        }
//    });



//For opening image upload form in iframe.........
     var id=$("#partyid").val();
   
   var iframeimage = $('<iframe border=0 id="UploadIframe" name="UploadIframe" src="<?php echo Yii::app()->request->baseUrl;?>/index.php/party_image/create?iframe=1&type=party&id='+id+'" scrolling="no" style="width:650px"  noresize frameborder="1" ></iframe>');

     
       var imagedialog = $("<div></div>").append(iframeimage).appendTo("body").dialog({
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
                                    if(isset($_REQUEST['partyID'])) { 
                                    $condition= "PARTY_ID=".$_REQUEST['partyID'];
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
   
    /************************browse image iframe end here***************/

 
$('#browseimg').click(function(){    
    imagedialog.dialog().dialog("open");
    return false;
}); 
/**************for img browse screen***********/
$('#dialogBtn,#Addinput').click(function(){    
    dialog.dialog().dialog("open");
    return false;
}); 
/***************************************/
$('#Addinput').click(function(){    
   $("Addinput").val("");
});




$('#Iframe').load(function() {
// for hiding****************** 
         // $('#iframee').contents().find('#menu-wrapper,.link-wrap,.breadcrumb_left-small,#bottom_menu_bar,#patternDiv').hide(); 
          
// for hiding ends here******************           

   $(this).contents().find('#demo_save').click(function() {
//              var BNAME = window.frames[0].document.getElementById("BNAME"); 
//              var MBNAME = window.frames[0].document.getElementById("MBNAME");
              var SHORT_NAME = $(this).contents().find("#SHORT_NAME").val();
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

    
 //*************display auto complete for branch in bank****************************************************************

//**********Starts Here*****Autocomplete working when field is null*************
      $("#Branch").bind('focus',function(){
      $(this).autocomplete("search");
      });
          
      $("#Account_Type").bind('focus',function(){
      $(this).autocomplete("search");
      });   
      
      $("#currency").bind('focus',function(){
      $(this).autocomplete("search");
      });
/**************auto complate nominee,dependent,nextofkin working when field is null*************/
      var Dependent_TotRowCount=$('#Dependent_TotRowCount').val();
      for(var i=1;i<=Dependent_TotRowCount;i++)
     {
     $("#dependent_name"+i).bind('focus',function(){
      $(this).autocomplete("search");
      });  
     }
     var nominee_TotRowCount=$('#nominee_TotRowCount').val();
     for(var i=1;i<=nominee_TotRowCount;i++)
     {
     $("#nominee_name"+i).bind('focus',function(){
      $(this).autocomplete("search");
      });
     }
      var nextofkin_TotRowCount=$('#nextofkin_TotRowCount').val();
     for(var i=1;i<=nextofkin_TotRowCount;i++)
     {
      $("#nextofkin_name"+i).bind('focus',function(){
      $(this).autocomplete("search");
      });
  }
/**********************************************************************************************/



//******************Ends Here***************************************************
$("#Branch").change(function()
          {
              
          
           // var id=$('#mbid').val();
            var value=$('#Branch').val();
         //  console.log(value);
            if(value=="")
            {
              $('#addbranch').hide();
            }
           }); 
  
  
  $("#Branch").autocomplete( {   
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
  
      
            
            if(value!="")
               {
           $('#addbranch').show();
           $('#Addinput').text("Add"+" "+value);
               }
                
            }
            else {
                $('#addbranch').hide();
               
            
            response( $.map( data, function( item ) {
               //console.log(item.label,item.label1);
           
                return {
                    label: item.label,
                    label1: item.label1,
                    value: item.label,value1: item.label1,
                    id:item.id,id1:item.id1,
                    //id:item.id,
                    
                }
               
                  
            }));
            }
        },
             

    });
    
},
 select:function(event, ui) {
          

//   alert(ui.item.label1);
              $("#labelbank ").val(ui.item.label1);
 //           $("#idbank").val(ui.item.id1);id1 hidden field id..........
             // $("#idbank").val(ui.item.id1);
              $("#idbank").val(ui.item.id);
             // alert(ui.item.label+ui.item.label1+ui.item.id+ui.item.id1);
             },
       
                     
       });  
//*************ends here of displaying auto complete for branch in bank************************************   
   
   
 document.getElementById('Secondmentorgid').style.visibility='hidden';
});

</script>
<?php   $Getlabelname=new Get_Labelname_Cls();  ?>
<?php
/* @var $this Personnel_VController */
/* @var $model Personnel_V */
/* @var $form CActiveForm */
/* Created By :ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â® RaThIlEsH ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â® 
 * morDified By :ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â® RaThIlEsH ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â® on 31-Dec-2013
 */ 

// incliding custom css and js
$cs=Yii::app()->clientScript;// Get client script
// Add CSS
$cs->registerCSSFile(Yii::app()->request->baseUrl.'/css/custom_styles/custom_style_personnel_form.css');
$cs->registerScriptFile(Yii::app()->request->baseUrl.'/assets/js/custom_jquery/custom_js_personnel_form.js', CClientScript::POS_HEAD);

$this->widget('ext.jqrelcopy.JQRelcopy',array(
    //the id of the 'Copy' link in the view, see below.
    'id' => 'copylink',
    //add a icon image tag instead of the text
    //leave empty to disable removing
    // 'removeText' => 'Remove',
    //htmlOptions of the remove link
    'removeHtmlOptions' => array('style'=>'color:red'),
    //options of the plugin, see http://www.andresvidal.com/labs/relcopy.html
    'options' => array(
        //A class to attach to each copy
        'copyClass'=>'newcopy',
        //'jsAfterNewId'=>'test',
        // The number of allowed copies. Default: 0 is unlimited
        //'limit'=>5,
        //Option to clear each copies text input fields or textarea
        'clearInputs'=>true,
        //A jQuery selector used to exclude an element and its children
        'excludeSelector'=>'.skipcopy',
        //Additional HTML to attach at the end of each copy.
        // 'append'=>CHtml::tag('span',array('class'=>'hint'),'You can remove this line'),
    )
));

$form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'feedbackform',
    'enableAjaxValidation'=>false,
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
    ),
)); ?>

<table style="margin-bottom: 0px; ">
        <tr>
        <td>
        <table id="register_top_table_fixed" style="width:79%;background-color: #F8F8F8;border-radius: 10px;" class="items table table-bordered">
<!--              <tbody> 
          <thead>
          <div id="table_bottom_bg">
            <th>
            <th >&nbsp;</th>
            <th></th>
          </div>
        </thead>
        <tbody>-->
      
            <tr>
                <td width="15%" style="padding-top: 15px;text-align: center;border-radius: 5px;">
                     <div class="testclass1" id='testclass1'></div>
                    <!-- <input type="file" name="img-upload" value="upload">-->
                    <?php echo CHtml::activeFileField($party_image_model, 'IMAGE'); ?>
                    <!--<button id="upload_b" class="btn btn-primary btn-small" data-loading-text="Loading...">Upload <i class="icon-white icon-camera "></i></button>-->
                    <?php //echo $form->fileFieldRow($party_image_model, 'IMAGE'); ?>
                </td>
                <td  style="width:363px;padding-top: 10px; border-radius: inherit  ;">
                    
                    
          
                    <table class="maintable">

                        <tr>                           
                           <th style="width:120px"><span class="namerequired"><?php echo  $Getlabelname->Get_Labelname_Fnc("227");?></span></th>    
                           <th colspan="2"><span class="preferredandalternatenamerequired"><?php echo  $Getlabelname->Get_Labelname_Fnc("166");?></span></th>   
                        </tr>
                        <tr>
                           <td><?php echo $form->dropDownList($model,'SALUTATION', array('empty'=>'--Select--','Mr'=>'Mr','Miss'=>'Miss'),array('class'=>'form-control-selectsmall selectwidth','id'=>'SALUTATION')); ?></td>
                           <td colspan="2"><?php echo $form->textField($model,'PREFERRED_NAME',array('id'=>'PREFERRED_NAME','class'=>'form-control','maxlength'=>100)); ?></td>
                        </tr>
                        <tr>                             
                           
                            <th><span class="namerequired"><?php echo  $Getlabelname->Get_Labelname_Fnc("275");?></span></th>
                            
                        </tr>
                         <tr>
                            <td><?php echo $form->textField($model,'FIRST_NAME',array('id'=>'FIRST_NAME','class'=>'form-control','placeholder'=>'First','maxlength'=>60)); ?></td>  
                            <td><?php echo $form->textField($model,'MIDDLE_NAME',array('id'=>'MIDDLE_NAME','class'=>'form-control','placeholder'=>'Middle','maxlength'=>60)); ?></td>
                            <td><?php echo $form->textField($model,'LAST_NAME',array('id'=>'LAST_NAME','class'=>'form-control','maxlength'=>60,'class'=>'form-controlnew','placeholder'=>'Last',)); ?></td>
                           
                        </tr>
                        <tr>
                            <th colspan="2"><span class="preferredandalternatenamerequired"><?php echo  $Getlabelname->Get_Labelname_Fnc("167");?></span></th>
                            <th><span class="namerequired"><?php echo  $Getlabelname->Get_Labelname_Fnc("169");?></span></th>
                        </tr>
                        <tr>
                             <td colspan="2"><?php echo $form->textField($model,'ALTERNATE_NAME',array('id'=>'ALTERNATE_NAME','class'=>'form-control','maxlength'=>100)); ?></td>
                              <td style=""><?php echo $form->textField($model,'DOB',array('id'=>'dob','placeholder'=>'dd/mm/yy')); ?></td>
                        </tr>
                        <tr>
                           <th style="width:120px"><span class="namerequired"><?php echo  $Getlabelname->Get_Labelname_Fnc("165");?></span></th>    
                           <th style="width:125px"><span class="preferredandalternatenamerequired"><?php echo  $Getlabelname->Get_Labelname_Fnc("168");?></span></th>                    
                            
                              <th style=""><span class="namerequired"><?php echo  $Getlabelname->Get_Labelname_Fnc("171");?></span></th>  
                        </tr>
                        <tr>
                            <td style="width:120px"><?php echo $form->textField($model,'PERSONAL_ID',array('id'=>'PERSONAL_ID','class'=>'form-control','id'=>'PERSONAL_ID','maxlength'=>30)); ?></td>
                           <td  style="width:100px"><?php echo $form->dropDownList($model,'CASUAL', array('empty'=>'--Select--','Casual'=>'Casual','Normal'=>'Normal'),array('id'=>'Personnel_Type','class'=>'form-control-selectsmall selectwidth')); ?></td>
                        
                         <td style=""><?php echo $form->dropDownList($model,'BLOOD_GROUP', CHtml::listData(BASIC_DEFINITION::model()->findAll("DFCTG_DEFINITION_TYPE='BLOOD_GROUP'"), 'SHORT_NAME', 'DESCRIPTION'), array('empty'=>'--Select--','class'=>'form-control-select','id'=>'BLOOD_GROUP','style'=>'display:inline !important;width:153px !important')); ?></td> 
                       
                      </tr>
<!--                        <tr>
                        <th style="width:120px"><span class="namerequired"><?php echo  $Getlabelname->Get_Labelname_Fnc("165");?></span></th>    
                         <th colspan="2" style="width:125px"><span class="preferredandalternatenamerequired"><?php echo  $Getlabelname->Get_Labelname_Fnc("168");?></span></th>
                        </tr>-->
<!--                        <tr>-->
                            
<!--                           <td style="width:120px"><?php //echo $form->textField($model,'PERSONAL_ID',array('id'=>'PERSONAL_ID','class'=>'form-control','id'=>'PERSONAL_ID','maxlength'=>30)); ?></td>
                           <td  style="width:100px"><?php //echo $form->dropDownList($model,'CASUAL', array('empty'=>'--Select--','Casual'=>'Casual','Normal'=>'Normal'),array('id'=>'Personnel_Type','class'=>'form-control-selectsmall')); ?></td>-->
<!--                        </tr>-->
                    </table>
                
                       </td>
                    <td style="padding-top: 10px">
                    <table class="maintable" style="width:474px">

                        <tr>          
                           
                            
                       <th><span class="namerequired"><?php echo  $Getlabelname->Get_Labelname_Fnc("170");?></span></th>
                       <th style="padding-left: 5px !important;"><span class="namerequired"><?php echo  $Getlabelname->Get_Labelname_Fnc("177");?></span><span class="namerequired" style="padding-left: 89px;"><?php echo  $Getlabelname->Get_Labelname_Fnc("172");?></span></th>   
                        </tr>
                        <tr>
                           
                            

                       <td style=""><?php echo $form->dropDownList($model,'GENDER', CHtml::listData(BASIC_DEFINITION::model()->findAll("DFCTG_DEFINITION_TYPE='GENDER'"), 'SHORT_NAME', 'DESCRIPTION'), array('empty'=>'--Select--','class'=>'form-control-select selectgender','id'=>'GENDER'));?></td>
                           
                             
                             <td>
                           
                                 <table>
                                     <tr>
                                         <td style="padding-left: 0px;"><?php echo $form->toggleButtonRow($model, 'MARRIED' , array('options'=>array('enabledLabel'=>'Yes' , 'disabledLabel'=>'No'))); ?></td>
                                         <td style="padding-left: 37px;"> <?php echo $form->toggleButtonRow($model, 'ACTIVE' , array('options'=>array('enabledLabel'=>'Yes' , 'disabledLabel'=>'No'))); ?></td>
                                     </tr>
                                     </table>
 
                             </td>
                        </tr>
                        <tr>

                             
                            
                            <th style=""><span class="namerequired"><?php echo  $Getlabelname->Get_Labelname_Fnc("173");?></span></th>
                            <th style=""><span class="namerequired"><?php echo  $Getlabelname->Get_Labelname_Fnc("174");?></span></th>
                             
                        </tr>
                         <tr>

                            
                           
                            <td style=""><?php echo $form->dropDownList($model,'RELIGION', CHtml::listData(BASIC_DEFINITION::model()->findAll("DFCTG_DEFINITION_TYPE='RELIGION'"), 'SHORT_NAME', 'DESCRIPTION'), array('empty'=>'--Select--','id'=>'RELIGION','class'=>'')); ?></td>   
                             <td style=""><?php echo $form->dropDownList($model,'SUBCASTE', CHtml::listData(BASIC_DEFINITION::model()->findAll("DFCTG_DEFINITION_TYPE='SUBCASTE'"), 'SHORT_NAME', 'DESCRIPTION'), array('empty'=>'--Select--','id'=>'SUBCASTE','class'=>'form-control-selectsmall')); ?></td>   
                             
                        </tr>
                        
                       
                       
                        <tr>
                           <th style=""><span class="namerequired"><?php echo  $Getlabelname->Get_Labelname_Fnc("175");?></span></th>   
                           <th><span class="namerequired"><?php echo  $Getlabelname->Get_Labelname_Fnc("178");?></span></th>
                           
                        </tr>
                        <tr>                   
                      
                           <td style=""><?php echo $form->dropDownList($model,'NATIONALITY', CHtml::listData(BASIC_DEFINITION::model()->findAll("DFCTG_DEFINITION_TYPE='NATIONALITY'"),'SHORT_NAME', 'DESCRIPTION'),array('empty'=>'--Select--','id'=>'NATIONALITY','class'=>'form-control-selectsmall')); ?></td>
                            <td style="">
                                <div style="float:right; width:100% !important; "><?php echo $form->dropDownList($model,'SECONDMENT', array('empty'=>'--Select--','Inward'=>'Inward','Outward'=>'Outward'),array('class'=>'form-control-select','id'=>'Secondmentid','style'=>'display:inline !important;','onchange'=>'Secondmentorg();')); ?>
                                
                                    <?php 
                                    $entity_id=Yii::app()->session['P_Eu_Orgn_Code'];
                                    $vCodeExist = Yii::app()->db->createCommand()
                                    ->select('PARTY.ID,PARTY.PREFERRED_NAME')           
                                    ->from('PARTY,PARTY_TYPE')
                                    ->where("PARTY.ID = PARTY_TYPE.PARTY_ID and PARTY_TYPE.PARTY_TYPE='Secondment Organization' and PARTY.ENTITY_ID='$entity_id'")
                                    ->queryAll();
                                    ?>
                                    
                                    <?php echo $form->dropDownList($model,'SECONDMENT_ORG_ID', CHtml::listData($vCodeExist,'ID', 'PREFERRED_NAME'),array('empty'=>'--Select--','id'=>'NATIONALITY','class'=>'form-control-selectsmall','style'=>'display:inline !important;width:152px !important','id'=>'Secondmentorgid')); ?>
       
                                  
                                    <?php //echo $form->dropDownList($model,'SECONDMENT_ORG_ID', array('empty'=>'--Organiztion--','ABC'=>'ABC','LOK'=>'LOK'),array('class'=>'form-control-selectorg','style'=>'display:inline !important;width:152px !important','id'=>'Secondmentorgid')); ?>
                                </div>
                            </td>
                        </tr>
                         <tr>  
                         <th style="" ><span class="namerequired"><?php echo  $Getlabelname->Get_Labelname_Fnc("176");?></span></th>
                          <th></th>
                        </tr>
                        <tr>                                                        
                           <td>
                                <div id="verified">
                                    <span class="verichecklabel"><?php echo  $Getlabelname->Get_Labelname_Fnc("235");?></span>
                                    <?php echo $form->checkBox($model,'VERIFIED_BY_SELF',array("id"=>"VERIFIED_BY_SELF","class"=>"vericheck",'onclick'=>'selfdate();')); ?>
                                    <?php echo $form->textField($model,'VERIFIED_ON',array('id'=>'verification_datepicker',"value"=>"",'placeholder'=>'dd/mm/yy')); ?>                        
                                </div>                                
                           </td>                             
                           <td>
                               <div id="verifiedemp">                         
                                    <span class="verichecklabel"><?php echo  $Getlabelname->Get_Labelname_Fnc("236");?></span>
                                    <?php echo $form->checkBox($model,'VERIFIED_BY_EMPLOYER',array("id"=>"VERIFIED_BY_EMPLOYER","class"=>"vericheck",'onclick'=>'empdate();')); ?>
                                    <?php echo $form->textField($model,'VERIFIED_BY_EMPLOYER_ON',array('id'=>'verification_datepickeremp',"value"=>"",'placeholder'=>'dd/mm/yy')); ?>    
                                </div>
                           </td>
                          
                        </tr>
                    </table>
 
                    </table>
   
        </td>
        </tr>
        </table>
<div id="outer_tab_div" style="width:1160px !important;">
<div id="tabs">
  <ul>
      
        <li><a href="#tabs-1" style="width:84px!important; text-align:left!important;"><?php echo  $Getlabelname->Get_Labelname_Fnc("199");?> </a></li>
        <li><a href="#tabs-2" style="width:97px!important; text-align:left!important;"><?php echo  $Getlabelname->Get_Labelname_Fnc("218");?></a></li>
        <li><a href="#tabs-3" style="width:93px!important; text-align:left!important;"><?php echo  $Getlabelname->Get_Labelname_Fnc("237");?></a></li>
        <li><a href="#tabs-4" style="width:110px!important; text-align:left!important;"><?php echo  $Getlabelname->Get_Labelname_Fnc("238");?></a></li>
         <li><a href="#tabs-5" style="width:110px!important; text-align:left!important;"><?php echo  $Getlabelname->Get_Labelname_Fnc("239");?></a></li>
         <li><a href="#tabs-6" style="width:100px!important; text-align:left!important;"><?php echo  $Getlabelname->Get_Labelname_Fnc("240");?></a></li>
         <li><a href="#tabs-7" style="width:110px!important; text-align:left!important;"><?php echo  $Getlabelname->Get_Labelname_Fnc("241");?></a></li>
         <li><a href="#tabs-8" style="width:75px!important; text-align:left!important;"><?php echo  $Getlabelname->Get_Labelname_Fnc("114");?></a></li>
         <li><a href="#tabs-9" style="width:105px!important; text-align:left!important;"><?php echo  $Getlabelname->Get_Labelname_Fnc("242");?></a></li>
         <li><a href="#tabs-10" style="width:130px!important; text-align:left!important;"><?php echo  $Getlabelname->Get_Labelname_Fnc("243");?></a></li>
         <li><a href="#tabs-11" style="width:60px!important; text-align:left!important;"><?php echo  $Getlabelname->Get_Labelname_Fnc("200");?></a></li>
     
     
  </ul>
    <div id="tabs-1">
         <?php  
         
         
         
         
         $today=date('d/m/Y');
         $condition="DFCTG_DEFINITION_TYPE='PERSONNEL_CONTACT' ORDER BY ID";
         $getpersonneladdress=Basic_definition::model()->findAll($condition);
        
         $count=count($getpersonneladdress);
         $peradd=array();
        foreach ($getpersonneladdress as $key => $record) {
           
            $peradd[$key]=$record->DESCRIPTION; 
            
          
        
       } 
      
//       $vCodeExist = Yii::app()->db->createCommand()
//                                    ->select('PARAM_TYPE')
//                                    ->from("SYSTEM_PARAMETER")
//                                    ->where('PARAM_VALUE01=:PARAM_VALUE01 AND (PARAM_VALUE02 = :PARAM_VALUE02)',array(':PARAM_VALUE01'=>"REGISTRED_MOBILE",":PARAM_VALUE02"=>"REGISTRED_EMAIL"))
//                                    ->queryRow();   
//        $sysvalue=$vCodeExist['PARAM_TYPE'];
       ?>

    <input type="hidden" name="addcount" id="addcount" value="<?php echo $count;?>"> 
    <div class="scrollbar" id="ex3" style="width:109%; height:187px; float: left; overflow-y: scroll;">
         
        <div id="accordion" style="width: 100% !important; ">
             <?php for($i=0;$i<$count;$i++)
          {
              $get_Party_Address[$i]="";
            if($party_id!="")
            {
                           
              $get_Party_Address= Yii::app()->db->createCommand()
                          ->SELECT('*')
                          ->where("PARTY_ID=:party_id and CONTACT_TYPE=:contact_type",array(':party_id'=>$party_id,':contact_type'=>$peradd[$i])) 
                          ->from('ENTITY_CONTACT')
                          ->queryAll();
         // print_r( $get_Party_Address);//exit;
             //echo  count($get_Party_Address);
            }
            
             try
     { //*****************SETTING THE VALUES FOR UPDATE***ENTITY CONTACT**********************
        
         if(!empty($get_Party_Address[0]["ID"]))                                                                              //***********
       {
             $ID[$i]= $get_Party_Address[0]["ID"];                             // print_r( $ID[$i]);
       }    else {  $ID[$i]="";}    
        
       
       if(!empty($get_Party_Address[0]["LINE1"]))                                                                              //***********
       {

           $LINE1[$i]= $get_Party_Address[0]["LINE1"];                       //
           //
           //  print_r( $LINE1[$i]);
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
                 
                 
                 
//                 if($peradd[$i]==$sysvalue)
//                 {
//                     $email="Registered Email";
//                     $mobile="Registered Mobile";
//                 }
//                 else
//                 {
                     $email="Email";
                     $mobile="Mobile";
                 //}
                 
                 
                 ?>
        <h3><?php echo $peradd[$i];
        
         if(isset($get_Party_Address[$i]))
             {
                 $ENTITY_Contact_Id = $ID[$i];
             
             }else
             {  $ENTITY_Contact_Id ="";}
        
        ?></h3>
       
          <div>
            <table style="margin-bottom:0px; width: 100%;height:50px; background-color: #F8F8F8">
                <tr>
                    <td width="auto" >
                        <table id="address_table" style="margin-bottom:0px; padding: 0px; ">
                            <tr>
                              <input type="hidden" name="<?php echo $i;?>address" id="<?php echo "address-".$i;?>" value="<?php echo $peradd[$i];?>" >   
                                <input id="<?php echo "contacttype-id-".$i;?>" type="hidden" name="<?php echo "contacttype-id-".$i;?>" value="<?php echo $ENTITY_Contact_Id ;?>">
                             <td><a><input type="text" name="<?php echo $i;?>add1" id="add1<?php echo $i;?>" class="inputpermament" value="<?php echo $LINE1[$i];?>"></a></td>
                            </tr>
                            <tr>
                               
                                <td><a><input type="text" name="<?php echo $i;?>add2" id="add2<?php echo $i;?>" class="inputpermament" value="<?php echo $LINE2[$i];?>"></a></td>
                            </tr>
                            <tr>
<!--                                <td class="label_width_contact"><b>Line 2</b></td>-->
                                <td><input type="text" name="<?php echo $i;?>add3" id="add3<?php echo $i;?>" placeholder="<Postal Code>" class="inputpermament" value="<?php echo $LINE3[$i];?>"></td>
                            </tr>
                            <tr>
<!--                                <td class="label_width_contact"><b>Line 3</b></td>-->
                                <td><input type="text" name="<?php echo $i;?>city" id="city<?php echo $i;?>" class="inputpermament" placeholder="<City>" value="<?php echo $CITY[$i];?>"></td>
                            </tr>
                            <tr>
<!--                                <td class="label_width_contact"><b>City</b></td>-->
                                <td><?php               
                 
                            $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                                    /*'model'=>$model,*/
                                    'attribute'=>'COUNTRY',
                                    'id'=>"COUNTRY$i",
                                    'name'=>"personnel[{$i}][COUNTRY]", 
                                    'value'=>$COUNTRY[$i],
                                     'value'=>"",
                                    'source'=>$this->createUrl('Personnel_V/CountryAutocomplete'),                                   
                                    'options'=>array(
                                     'minLength'=>'0', 
                                     'select'=>'js:function( event, ui ) {
                                                  //$("COUNTRY").val(ui.item.id);
                                               
                                                   $("#countryid").val(ui.item.id);       
                                               }',
                                        
                                      'change'=>'js:function( event, ui ) {                                           
                                                if (!ui.item) {
                                                    $("COUNTRY").val("");
                                                   
                                                 
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
                     <td width="auto" style=" padding-bottom: 50px !important;">
                         <table id="address_table" style="margin-bottom:0px !important; padding: 0px !important; ">
                           <tr>
                                <td class="label_width_contact"><b><?php echo  $Getlabelname->Get_Labelname_Fnc("244");?></b></td><td><input type="text" name="<?php echo $i;?>mobile" id="mobile<?php echo $i;?>" value="<?php echo $MOBILE_PHONE[$i];?>" class="contacttext"></td>
                                <td class="label_width_contact"><b><?php echo  $Getlabelname->Get_Labelname_Fnc("110");?></b></td><td><input type="text" name="<?php echo $i;?>telephone" id="telephone<?php echo $i;?>" value="<?php echo $MOBILE_PHONE[$i];?>" class="contacttext">
                            </tr>  
                           <tr>
                               <td class="label_width_contact"><b><?php echo  $Getlabelname->Get_Labelname_Fnc("111");?></b></td><td><input type="text" name="<?php echo $i;?>fax" id="fax<?php echo $i;?>" value="<?php echo $FAX[$i];?>" class="contacttext"></td>
                                <td class="label_width_contact"><b><?php echo  $Getlabelname->Get_Labelname_Fnc("112");?></b></td><td><input type="text" name="<?php echo $i;?>email" id="email<?php echo $i;?>" value="<?php echo $EMAIL[$i];?>" class="contacttext"></td>      
                                    
                            </tr>
                            <tr>
                               
                                <td class="label_width_contact"><b><?php echo  $Getlabelname->Get_Labelname_Fnc("113");?></b></td><td><input type="text" name="<?php echo $i;?>url" value="<?php echo $URL[$i];?>" id="url<?php echo $i;?>"class="contacttext"></td>
                                 <td class="label_width_contact"></td><td><b><span class="contactdate"><?php echo  $Getlabelname->Get_Labelname_Fnc("126");?></span></b><input type="text" name="<?php echo $i;?>addwef" value="<?php $WEF_address[$i];?>" id="wef_datepicker<?php echo $i;?>" class="wef_datepicker" placeholder="dd/mm/yy">
                                  <b><span class="contactdate"><?php echo  $Getlabelname->Get_Labelname_Fnc("127");?></span></b><input type="text" name="<?php echo $i;?>addwet" id="wet_datepicker<?php echo $i;?>" value="<?php $WET_address[$i];?>" class="wet_datepicker" placeholder="dd/mm/yy"></td>
                            </tr>
                            


                        </table>

                    </td>
                </tr>

            </table>

        </div>
          <?php }?>

</div>
    
    
    </div>
        
  </div>
  <div id="tabs-2">
<!--        <div class="" style="width:100%; height: 180px; float: left; overflow-y: scroll;">-->
   <table id="education_table" class="table table-bordered" style="width:1000px; margin-bottom: 10px !important;border: 1px solid rgb(216, 216, 216); padding: 6px; background-color: white; box-shadow: 10px 7px 8px rgb(167, 167, 167);">
                 <thead style="width:1100px; display: block;">
                <tr>
<!--                    <th width="350">Level</th>-->
                    <th width="150px"><?php echo  $Getlabelname->Get_Labelname_Fnc("245");?></th>
                    <th width="46"><?php echo  $Getlabelname->Get_Labelname_Fnc("246");?></th>
                    <th width="80"><?php echo  $Getlabelname->Get_Labelname_Fnc("247");?></th>
<!--                <th width="60">Attending Mode</th>-->
                    <th width="200"><?php echo  $Getlabelname->Get_Labelname_Fnc("248");?></th>
                    <th width="210"><?php echo  $Getlabelname->Get_Labelname_Fnc("249");?></th>
                    <th width="133"><?php echo  $Getlabelname->Get_Labelname_Fnc("250");?></th>
                    <th width="133"><?php echo  $Getlabelname->Get_Labelname_Fnc("251");?></th>
<!--                    <th width="60">Verified On</th>-->
                    <th width="60"><?php echo  $Getlabelname->Get_Labelname_Fnc("252");?></th>
                    <th width="80"><?php echo  $Getlabelname->Get_Labelname_Fnc("253");?></th>

                </tr>
                </thead>
               <tbody style="width:1100px; height:109px; float: left;  overflow-y: auto;">
                       <?php
                        $loop_c=4;
                       ?>
                 
                    <?php
                
                 //print_r($courseexistupdate);
                 if($party_id!="")
                    {
                 $edu_update_count = count($courseexistupdate);
                 foreach ($courseexistupdate as $key => $value) {
                 $rtype_id[$key]  = $value['ID'];
                 $rtype[$key]  = $value['RECORD_TYPE'];
                 $grade[$key]  = $value['GRADE_OBTAINED'];
                 $score[$key]  = $value['PERCENTAGE_OF_SCORE'];
                 $institute[$key] = $value['INSTITUTE'];
                 $university[$key] = $value['UNIVERSITY'];
                 $course_type[$key]  = $value['COURSE_TYPE'];
                 $course_nature[$key]  = $value['COURSE_NATURE'];
                 $year_of_passing[$key]  = $value['YEAR_OF_PASSING'];
                 $attempt_to_pass[$key]  = $value['ATEMPT_TO_PASS'];
                
                    }
                 $train_update_count = count($trainingexistupdate);
                
                 foreach ($trainingexistupdate as $key => $value) {
                 $rtype_train[$key]  = $value['RECORD_TYPE'];
                 $train_duration[$key]  = $value['UOM'];
                 $train_duration_year[$key]  = $value['NO_OF_UNIT'];
                 $train_sponsor[$key] = $value['SPONSOR'];
                 $train_industry[$key] = $value['INSTITUTE'];
                 $year_of_training[$key]  = $value['YEAR_OF_PASSING'];
                
                    }
                $dependent_update_count = count($dependentupdate_data);
                
                 foreach ($dependentupdate_data as $key => $value) {
                 $rtype_dependent_name[$key]  = $value['PREFERRED_NAME'];
                 $rtype_dependent[$key]  = $value['RELATION'];
                 $dependent_wef[$key]  = $value['WEF'];
                 $dependent_wet[$key]  = $value['WET'];
                 
                    }
                $nomineeupdate_data_count = count($nomineeupdate_data);
                
                 foreach ($nomineeupdate_data as $key => $value) {
                 $rtype_nominee_name[$key]  = $value['PREFERRED_NAME'];
                 $rtype_nominee[$key]  = $value['RELATION'];
                 $nominee_wef[$key]  = $value['WEF'];
                 $nominee_wet[$key]  = $value['WET'];
                 
                    }
                 $nextofkin_data_count = count($nextofkinupdate_data);
                
                 foreach ($nextofkinupdate_data as $key => $value) {
                 $rtype_nextofkin_name[$key]  = $value['PREFERRED_NAME'];
                 $rtype_nextofkin[$key]  = $value['RELATION'];
                 $nextofkin_wef[$key]  = $value['WEF'];
                 $nextofkin_wet[$key]  = $value['WET'];
                 
                 
                    }
                 $bank_data_count = count($get_Party_BANK);
              
                
//                 echo $get_Party_BANK[0]['BANK_ID'];
//                 foreach ($get_Party_BANK as $key => $value) 
//                    {
//                 $rtype_bank_id[$key]  = $value['ID'];
//                 $rtype_bank_bank_account_no[$key]  = $value['ACCOUNT_NO'];
//                 $rtype_bank_account_owner[$key]  = $value['ACCOUNT_OWNER'];
//                 $rtype_bank_account_type[$key]  = $value['ACCOUNT_TYPE'];
//                 $rtype_bank_currency[$key]  = $value['CURRENCY'];
//                 $rtype_bank_netpay_credit[$key]  = $value['NETPAY_CREDIT'];
//                 $rtype_bank_wef[$key]  = $value['WEF'];
//                 $rtype_bank_wet[$key]  = $value['WEF'];
//                 $rtype_bank_party_id[$key]  = $value['PARTY_ID'];
//                 $rtype_bank_ostru_id[$key]  = $value['OSTRU_ID'];
//                 $rtype_bank_bank_id[$key]  = $value['BANK_ID'];
//                 $rtype_bank_entity_id[$key]  = $value['ENTITY_ID'];
//               
//                    }
                    
                    
                $service_status_update_data_count = count($service_status_update_data);
               
                 foreach ($service_status_update_data as $key => $value) {
                 $rtype_service_status_id[$key]  = $value['ID'];
                 $rtype_service_status[$key]  = $value['STATUS'];
                 $rtype_service_status_wef[$key]  = $value['WEF'];
                 $rtype_service_status_wet[$key]  = $value['WET'];
                 $rtype_service_status_per_party_id[$key]  = $value['PER_PARTY_ID'];
                 $rtype_service_id[$key]  = $value['SERVICE_ID'];
                    }
                    
                 $personnel_flex_update_data_count = count($personnel_flex_update_data);
                
                 foreach ($personnel_flex_update_data as $key => $value) {
                 $rtype_personnel_flex_id[$key]  = $value['ID'];
                 $rtype_personnel_flex_flex[$key]  = $value['FLEX'];
                 $rtype_personnel_flex_value[$key]  = $value['FLEX_VALUE'];
                 $rtype_personnel_flex[$key]  = $value['WEF'];
                 $rtype_personnel_flex[$key]  = $value['WET'];
                 $rtype_personnel_flex[$key]  = $value['PER_PARTY_ID'];
                 $rtype_personnel_flex[$key]  = $value['SERVICE_ID'];
                    }
                    }
                  for($i=1;$i<=$loop_c;$i++) 
                  { 
                  // echo $i-1; exit;
//                    if(isset($courseexistupdate[1]['ID']));
//                        {
//                            echo "dataaaaaaa";
//                        }
                     // echo  count($courseexistupdate);
                      
                      //print_r($rtype);
                      if(isset($rtype[$i-1])) {
                         $rtype_val = $rtype[$i-1];
                        
                      
                          $coursedescription = Yii::app()->db->createCommand()
                                    ->select('DESCRIPTION')           
                                    ->from('QUALIFICATION_EXPERIENCE')
                                    ->where("SHORT_NAME=:SHORT_NAME",array(':SHORT_NAME'=>$rtype_val))
                                    ->queryAll();
                 foreach ($coursedescription as $key => $values) {
                 $rtypecoursedescription[$key]=$values['DESCRIPTION'];
                 }
                         
                         
                      }
                      else {
                          $rtype_val = "";
                      }
                           
                      if(isset($rtype_id[$i-1]))
                      {
                      $rtype_id_val=$rtype_id[$i-1];
                
                      }
                      else
                      {
                       $rtype_id_val="";   
                      }         
                      if(isset($grade[$i-1]))
                      {
                      $grade_val= $grade[$i-1];
                      }
                      else
                      {
                       $grade_val="";   
                      }
                      if(isset($score[$i-1]))
                      {
                      $score_val= $score[$i-1];
                      }
                      else
                      {
                       $score_val="";   
                      }
                      if(isset($institute[$i-1]))
                      {
                      $institute_val= $institute[$i-1];
                      }
                      else
                      {
                       $institute_val="";   
                      }
                      if(isset($university[$i-1]))
                      {
                      $university_val= $university[$i-1];
                      }
                      else
                      {
                       $university_val="";   
                      }
                      if(isset($course_type[$i-1]))
                      {
                      $course_type_val= $course_type[$i-1];
                      }
                      else
                      {
                       $course_type_val="";   
                      }
                      if(isset($course_nature[$i-1]))
                      {
                      $course_nature_val= $course_nature[$i-1];
                      }
                      else
                      {
                       $course_nature_val="";   
                      }
                      if(isset($year_of_passing[$i-1]))
                      {
                      $year_of_passing_val= $year_of_passing[$i-1];
                      }
                      else
                      {
                       $year_of_passing_val="";   
                     
                      }
                      if(isset($attempt_to_pass[$i-1]))
                      {
                      $attempt_to_pass_val= $attempt_to_pass[$i-1];
                      }
                      else
                      {
                       $attempt_to_pass_val="";   
                      }
                  // $courserup[$i]=$courseexistupdate[$i]['RECORD_TYPE'];
                   /************************************************/
                    ?>
                    <tr  class="copy">
<!--                        <td>
                            <select name="edu_level" class="edu_level">
                                <option value="">Post Graduate</option>
                                <option value="">Upper Graduate</option>
                                <option value="">ITI</option>
                                <option value="">Diploma</option>
                            </select>
                        </td>-->
                        <?PHP
                                 $entity_id=Yii::app()->session['P_Eu_Orgn_Code'];
                                    
                                    $courseexist = Yii::app()->db->createCommand()
                                    ->select('DESCRIPTION,SHORT_NAME')           
                                    ->from('QUALIFICATION_EXPERIENCE')
                                    ->where("RECORD_TYPE='EDUCATION'")
                                    ->queryAll();
                                   
                        
                                  //  print
                               
                      //echo $course.$Grade.$Score.$Institute.$CourseType.$CourseNature.$Year.$Attempt.$ID.$PER_PARTY_ID;              
                      ?>
                         
                        <td>
                            <select name="<?php echo $i;?>edu_course" id="edu_course<?php echo $i;?>" class="edu_course">
                               <?php
                               
                              // echo $courseexist[0]['RECORD_TYPE'];
                  
                   
                   if($rtype_val!="")
                   {
                       //'options'=>array($operationtype[$i]=>array('selected'=>'selected')
                      // foreach($courseexistupdate as $upcourseexistupdate){?>
                                 <option selected="selected" value="<?php echo $rtype_val;?>"><?php echo  $values['DESCRIPTION'];?></option>             
                         <?php    foreach($courseexist as $data){?>
                                <option value="<?php echo $data['SHORT_NAME'];?>"><?php echo $data['DESCRIPTION'];?></option>
                   <?php }      


                      //} 
                  
                   
               
                   
                   }  else {?>
                       
                 
                  
                  
                   
                                
                               <option value="">--select--</option>
                               
                            <?php    foreach($courseexist as $data){?>
                                <option value="<?php echo $data['SHORT_NAME'];?>"><?php echo $data['DESCRIPTION'];?></option>
                   <?php } }?>
                            </select>
                        </td>
                        <td><input type="text" name="<?php echo $i;?>grade" value="<?php echo $grade_val;?>" style="width:60px !important;" class="form-control" id="grade<?php echo $i;?>" value="" onfocus = "tooltip.pop(this, 'Grade Obtained.');"></td>
                        <td><input type="text" name="<?php echo $i;?>score" value="<?php echo $score_val;?>" style="width:80px !important;" class="form-control" id="score<?php echo $i;?>" onfocus = "tooltip.pop(this, 'Score Obtained.');"></td>
<!--                         <td><select name="edu_level" class="edu_level">
                                <option value="">--select--</option>
                                <option value=""></option>
                               
                            </select></td>-->
<td> <input type="text" name="<?php echo $i;?>INSTITUTE" value="<?php echo $institute_val;?>" style="width:200px !important;" class="form-control" id="INSTITUTE<?php echo $i;?>" onfocus = "tooltip.pop(this, 'Institute Name.');">    </td>
<!--                        <td><select name="[<?php //echo $i;?>]INSTITUTE" id="INSTITUTE<?php //echo $i;?>" class="edu_institute">
                                <option value="">LBS</option>
                                <option value="">IIM</option>
                               
                            </select></td>-->
                             <td>
                             <input type="text" name="<?php echo $i;?>UNIVERSITY" value="<?php echo $university_val;?>" style="width:200px !important;" class="form-control" id="UNIVERSITY<?php echo $i;?>" onfocus = "tooltip.pop(this, 'University Name.');">    
                                 
                                 
                             </td>
<!--                        <td><select name="[<?php //echo $i;?>]UNIVERSITY" id="UNIVERSITY<?php //echo $i;?>" class="edu_level">
                                <option value="">Kannur</option>
                                <option value="">Calicut</option>
                               
                            </select></td>-->
                            <td><select name="<?php echo $i;?>COURSE_TYPE" id="COURSE_TYPE<?php echo $i;?>" class="edu_level">
                                <?php 
                               if($course_type_val=="")
                                 {
                               ?>
                                <option value="">--select--</option>
                                <option value="">Regular</option>
                                <option value="">Correspondance</option>
                            <?php }
                                 else if($course_type_val!="")
                                 {?>
                                <option value=""><?php echo $course_type_val;?></option>
                                <option value="">Regular</option>
                                <option value="">Correspondance</option>   
                                 <?php }
                            
                            ?>
                                
                            </select></td>
                            <td><select name="<?php echo $i;?>COURSE_NATURE" id="COURSE_NATURE<?php echo $i;?>" class="edu_level">
                               <?php 
                             
                             if($course_nature_val=="")
                                 {
                               ?>
                            
                                <option value="">--select--</option>
                                <option value="">Full time</option>
                                <option value="">Part time</option>
                            <?php }
                            else if($course_nature_val!="")
                                  {?>
                                <option value=""><?php echo $course_nature_val;?></option>
                                <option value="">Regular</option>
                                <option value="">Correspondance</option>
                             <?php
                             
                                  }
                             ?>
                            </select></td>
                            <?php //echo $form->checkBox($model,'VERIFIED_BY_EMPLOYER',array("id"=>"VERIFIED_BY_EMPLOYER","class"=>"vericheck",'onclick'=>'empdate();')); ?>
                          <?php //echo $form->textField($model,'VERIFIED_ON',array('id'=>'verification_datepickeredu','placeholder'=>'dd/mm/yy')); ?>  
<!--                      <td><?php //echo $form->textField($model,'DOB',array('id'=>"wef_datepicker$i",'class'=>'wef_datepicker','placeholder'=>'dd/mm/yy')); ?></td>-->
                     <td><input type="text" name="<?php echo $i;?>YEAR_OF_PASSING" value="<?php echo $year_of_passing_val;?>" id="YEAR_OF_PASSING<?php echo $i;?>" class="form-control" style="width:60px !important;" onfocus = "tooltip.pop(this, 'Course completed Year.');"></td>
                     <td><input type="text" name="<?php echo $i;?>ATEMPT_TO_PASS" value="<?php echo $attempt_to_pass_val;?>" id="ATEMPT_TO_PASS<?php echo $i;?>" class="form-control" style="width:80px !important;" onfocus = "tooltip.pop(this, 'Attempt to pass.');"></td>
                    </tr>
                <?php } ?>
                <tr>
                    <td colspan="9"><span><img  src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/icon_plus.png"   
           title="Add Rows" rel="education_table+edu_TotRowCount" align="right" width="16" height="16"  alt="" style="cursor: pointer;" class="plus"/>
                    
                 
                    <input id="edu_TotRowCount" type="hidden" name="edu_TotRowCount" value="<?php echo $loop_c;?>">
                    </td>
                </tr>
                </tbody>
            </table>
<!--        </div>-->
  </div>
  <div id="tabs-3">
<!--        <div class="" style="width:85%; height: 180px; float: left; overflow-y: scroll;">-->
    <table id="education_tab_table_training" class="table table-bordered" style="width:820px; margin-bottom: 10px !important;border: 1px solid rgb(216, 216, 216); padding: 6px; background-color: white; box-shadow: 10px 7px 8px rgb(167, 167, 167);">
                <thead style="display: block;">
                <tr>
<!--                    <th width="260">Year of Completion</th>-->
                   
                     
                     <th width="200"><?php echo  $Getlabelname->Get_Labelname_Fnc("254");?></th>
                    <th width="70"><?php echo  $Getlabelname->Get_Labelname_Fnc("255");?></th>
                    <th width="133"></th>
                    <th width="180"><?php echo  $Getlabelname->Get_Labelname_Fnc("256");?></th>
                    <th width="200"><?php echo  $Getlabelname->Get_Labelname_Fnc("258");?></th>
                    <th width="60"><?php echo  $Getlabelname->Get_Labelname_Fnc("252");?></th>
                  
                </tr>
                </thead>
                <tbody style="width:820px; height:109px;float: right;  overflow-y: auto;">
                <?php
                $train_TotRowCount=4;
                
                for($i=1; $i<=$train_TotRowCount; $i++) { 
                    
                   if(isset($rtype_train[$i-1]))
                      {
                      $rtype_train_val=$rtype_train[$i-1];
                      }
                      else
                      {
                      $rtype_train_val="";   
                      } 
                     if(isset($train_duration[$i-1]))
                      {
                      $train_duration_val=$train_duration[$i-1];
                      
                      }
                      else
                      {
                      $train_duration_val="";   
                      } 
                      if(isset($train_sponsor[$i-1]))
                      {
                      $train_sponsor_val=$train_sponsor[$i-1];
                      
                      }
                      else
                      {
                      $train_sponsor_val="";   
                      } 
                      if(isset($train_industry[$i-1]))
                      {
                      $train_industry_val=$train_industry[$i-1];
                      
                      }
                      else
                      {
                      $train_industry_val="";   
                      } 
                     
               
                      if(isset($train_industry[$i-1]))
                      {
                      $train_industry_val=$train_industry[$i-1];
                      
                      }
                      else
                      {
                      $train_industry_val="";   
                      } 
                      if(isset($year_of_training[$i-1]))
                      {
                      $year_of_training_val=$year_of_training[$i-1];
                      
                      }
                      else
                      {
                      $year_of_training_val="";   
                      } 
                      
                    ?>
                    <tr class="trainingtr">
                        <td><input type="text" value="<?php echo $rtype_train_val;?>" name="<?php echo $i;?>training_name" id="training_name<?php echo $i;?>" class="form-control"></td>
                        <td><input type="text" value="<?php echo $train_duration_val;?>" name="<?php echo $i;?>training_duration" id="training_duration<?php echo $i;?>" style="width:70px !important;" class="form-control"></td>
                               <td>
                           <select name="<?php echo $i;?>training_duration_time" id="training_year<?php echo $i;?>" class="edu_level">
                              <?php
                              
                                
                                if($train_duration_val!="")
                                {?>
                               
                                <option value=""><?php echo  $train_duration_val;?></option>
                                <option value="">Year</option>
                                <option value="">Month</option>
                                <option value="">Day</option>
                                 <option value="">Hour</option>
                             <?php }
                                else
                                  {
                                    ?>
                                <option value="">Year</option>
                                <option value="">Month</option>
                                <option value="">Day</option>
                                 <option value="">Hour</option>
                                <?php
                                 }
                                 ?>
                            </select>
                        </td>
                   
                           
                        
                        
                        <td> <select name="<?php echo $i;?>SPONSOR" id="SPONSOR<?php echo $i;?>" class="edu_course">
                                <?php 
                                if($train_sponsor_val!="")
                                {?>
                               
                                <option value=""><?php echo $train_sponsor_val;?></option>
                                <option value="">--select--</option>
                                <option value="Self">Self</option>
                                <option value="Company">Company</option>
                                <?php
                                }
                               else 
                                   {
                                   
                             
                                  ?>
                                   <option value="">--select--</option>
                                <option value="Self">Self</option>
                                <option value="Company">Company</option>
                                   <?php }
                                ?>
                            </select></td>
                        <td><input type="text" value="<?php echo $train_industry_val;?>" name="<?php echo $i;?>training_institution" id="training_institution<?php echo $i;?>" class="form-control"></td>
                        <td><input type="text" value="<?php echo $year_of_training_val;?>" name="<?php echo $i;?>training_year" id="training_year<?php echo $i;?>" style="width:60px !important;" class="form-control" onfocus = "tooltip.pop(this, 'Training Completed Year.');"></td>
                      
                    </tr>
                    
                <?php } ?>
                    <tr>
                        <td colspan="6">
  <span><img  src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/icon_plus.png"   
           title="Add Rows" rel="education_tab_table_training+train_TotRowCount" align="right" width="16" height="16"  alt="" style="cursor: pointer;" class="plus"/>
              <?php
              $loop_c=4;
              ?>
                    <input id="train_TotRowCount" type="hidden" name="train_TotRowCount" value="<?php echo $train_TotRowCount;?>">
                </span></td></tr>
                </tbody>
            </table>
            
               
<!--  </div>-->
      
  </div>
    <div id="tabs-4">
        
        <table id="education_tab_table_exp" class="table table-bordered" style="width:700px; margin-bottom: 10px !important;border: 1px solid rgb(216, 216, 216); padding: 6px; background-color: white; box-shadow: 10px 7px 8px rgb(167, 167, 167);">
                <thead style="width:700px;float: left;display: block;">
                <tr>
                    
                    <th width="190"><?php echo  $Getlabelname->Get_Labelname_Fnc("258");?></th>
                    
                    <th width="70"><?php echo  $Getlabelname->Get_Labelname_Fnc("255");?> </th>
                    <th width="133"></th>
<!--                    <th width="60">Company</th>-->
                    <th width="220"><?php echo  $Getlabelname->Get_Labelname_Fnc("256");?></th>
                    <th width="60"><?php echo  $Getlabelname->Get_Labelname_Fnc("252");?></th>
                </tr>
                </thead>
            <tbody style="width:700px;  height:109px; float: left;  overflow-y: auto;">
                <?php 
                $exp_TotRowCount=4;
                for($i=1; $i<=$exp_TotRowCount; $i++) { ?>
                    <tr>
                        <td><input type="text" name="<?php echo $i;?>exp_industry" id="industry<?php echo $i;?>" class="form-control" style="width: 190px !important;"></td>
                     
                       <td><input type="text" id="exp_duration<?php echo $i;?>" name="<?php echo $i;?>exp_duration" style="width:70px !important" class="form-control"></td>
                        <td>
                            <select name="<?php echo $i;?>exp_duration_time" id="" class="edu_level">
                                <option value="">Year</option>
                                <option value="">Month</option>
                                <option value="">Day</option>
                                <option value="">Hour</option>
                            </select>
                        </td>
<!--                        <td><input type="text" name="exper" class="form-control"></td>-->
                        <td>
                            
                            <?php 
                           echo CHtml::dropDownList($i."exp_cur_pos" , '',array(''=>"--select--",'Self'=>'Self', 'Company'=>'Company'));
                     //echo $form->dropDownList($model, $i."exp_cur_pos" , array(1=>'test1', 2=>'test2'));?>
                            
                            
                         
<!--                        <input type="text" id="exp_cur_pos<?php //echo $i;?>" name="<?php //echo $i;?>exp_cur_pos" class="form-control">-->
                        
                        </td>
                        <td><input type="text" id="exp_year<?php echo $i;?>" name="<?php echo $i;?>exp_year" style="width:60px !important;" class="form-control" onfocus = "tooltip.pop(this, 'Year Last Worked.');"></td>
                    </tr>
                <?php } ?>
                     <tr>
                        <td colspan="6">
  <span><img  src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/icon_plus.png"   
           title="Add Rows" rel="education_tab_table_exp+exp_TotRowCount" align="right" width="16" height="16"  alt="" style="cursor: pointer;" class="plus"/>
              <?php
              $loop_c=4;
              ?>
                    <input id="exp_TotRowCount" type="hidden" name="exp_TotRowCount" value="<?php echo $exp_TotRowCount;?>">
                </span></td></tr>
            </table>
        
    </div>
    
    <div id="tabs-5"> 
  
    <table id="education_tab_table_Dependent" class="table table-bordered" style="width:480px; margin-bottom: 10px !important;border: 1px solid rgb(216, 216, 216); padding: 6px; background-color: white; box-shadow: 10px 7px 8px rgb(167, 167, 167);">
                 <thead style="width:470px;float: left; display: block;">
                <tr>
                    <th  width="200"><?php echo  $Getlabelname->Get_Labelname_Fnc("260");?></th>
                    <th width="133"><?php echo  $Getlabelname->Get_Labelname_Fnc("261");?></th>
                    <th width="85"><?php echo  $Getlabelname->Get_Labelname_Fnc("126");?></th>
                    <th width="85"><?php echo  $Getlabelname->Get_Labelname_Fnc("127");?></th>
                </tr>
                </thead>
               <tbody style="width:475px;  height:130px;float: left;  overflow-y: auto;">
                   
                   
                   
                <?php 
                
                $Dependent_TotRowCount=4;
                for($i=1; $i<=$Dependent_TotRowCount; $i++) { 
                    
                    if(isset($rtype_dependent_name[$i-1]))
                      {
                      $rtype_dependent_name_val= $rtype_dependent_name[$i-1];
                      }
                      else
                      {
                       $rtype_dependent_name_val="";   
                      }
                      if(isset($rtype_dependent[$i-1]))
                      {
                      $rtype_dependent_val= $rtype_dependent[$i-1];
                      }
                      else
                      {
                       $rtype_dependent_val="";   
                      }
                       if(isset($dependent_wef[$i-1]))
                      {
                       $dependent_wef_vals=$dependent_wef[$i-1];    
                       $dependent_wef_val=date('m/d/Y',strtotime($dependent_wef_vals));
                      }
                      else
                      {
                       $dependent_wef_val=$today;   
                      }
                      if(isset($dependent_wet[$i-1]))
                      {
                      $dependent_wet_val= $dependent_wet[$i-1];
                      }
                      else
                      {
                       $dependent_wet_val="";   
                      }
                    ?>
                    <tr>
                         <td>
                               <?php               
                 
                            $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                                    'model'=>$model,
                                    'id'=>"dependent_name".$i,
                                    'name'=>$i."dependent_name", 
                                    'value'=>$rtype_dependent_name_val,
                                    'source'=>$this->createUrl('Personnel_V/DependentAutocomplete?val=Dependent'),                                   
                                    'options'=>array(
                                     'minLength'=>'0', 
                                     'select'=>'js:function( event, ui ) {
                                          //$("#subject_code-'.$i.'").val(ui.item.id);    
                                                   $("#dependent_id'.$i.'").val(ui.item.id);       
                                               }',
                                        
                                      'change'=>'js:function( event, ui ) {                                           
                                                if (!ui.item) {
                                                    $("dependent_name").val("");
                                                   
                                                 
                                                }                                                
                                        }',                                        
                                    ),
                                    'htmlOptions'=>array(
                                        'style'=>'',
                                        'class'=>"form-control",
                                       // 'placeholder'=>'<Country>',
                                        'rel'=>"DependentAutocomplete",
                                       
                                    ),
                                ));                
                 
                 ?>
                             <input id="dependent_id<?php echo $i;?>" type="hidden" name="<?php echo $i;?>dependent_id" value="">
<!--                             <input type="text" name="[<?php //echo $i;?>]dependent_name" id="dependent_name<?php //echo $i;?>" class="form-control">-->
                         </td>
                         <td>
                            <?php
                            if(isset($rtype_dependent_val))
                            {
                           echo CHtml::dropDownList($i."dependent_relation" , '',CHtml::listData(BASIC_DEFINITION::model()->findAll("DFCTG_DEFINITION_TYPE='RELATION'"), 'SHORT_NAME', 'DESCRIPTION'),array('empty'=>$rtype_dependent_val,"class"=>"edu_level","id"=>"dependent_relation".$i));
                            }
                             else
                             {
                                  echo CHtml::dropDownList($i."dependent_relation" , '',CHtml::listData(BASIC_DEFINITION::model()->findAll("DFCTG_DEFINITION_TYPE='RELATION'"), 'SHORT_NAME', 'DESCRIPTION'),array('empty'=>'--Select--',"class"=>"edu_level","id"=>"dependent_relation".$i));
                             }
                             ?>
<!--                             <select name="[<?php //echo $i;?>]dependent_relation" id="dependent_relation<?php //echo $i;?>" class="edu_level">
                               <option value="">--select--</option>
                                <option value="">abc</option>
                            </select></td>-->
                        <td>
                            <?php 
          
            $this->widget('zii.widgets.jui.CJuiDatePicker',array("name"=>$i."dependent_wef",'value'=>$dependent_wef_val,
                                        'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                        'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"dependent_wef$i",'class'=>'wef','placeholder'=>'dd/mm/yy','rel'=>'WEF')));?></td>

                        </td>
                        <td>
                            <?php 
          
            $this->widget('zii.widgets.jui.CJuiDatePicker',array("name"=>$i."dependent_wet",'value'=>$dependent_wet_val,
                                        'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                        'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"dependent_wet$i",'class'=>'wet','placeholder'=>'dd/mm/yy','rel'=>'WEF')));?>
                        </td>
<!--                        <td><input type="text" name="[<?php echo $i;?>]dependent_wet" id="dependent_wet<?php //echo $i;?>" value="<?php //echo $today;?>" class="wet" placeholder="dd/mm/yy"></td>-->
                    </tr>
                <?php } ?>
             <tr>
              <td><span class="createparty" onmouseover = "tooltip.pop(this, 'For Creating Dependent.');"><?php echo  $Getlabelname->Get_Labelname_Fnc("265");?></span></td>
              
               <td colspan="3"><span><img  src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/icon_plus.png"   
           title="Add Rows" rel="education_tab_table_Dependent+Dependent_TotRowCount" align="right" width="16" height="16"  alt="" style="cursor: pointer;" class="plus"/>
            
                    <input id="Dependent_TotRowCount" type="hidden" name="Dependent_TotRowCount" value="<?php echo $Dependent_TotRowCount;?>">
                </span>
              </td>
                    
             </tr>
            </table>
    </div>
       
     <div id="tabs-6">
        
    <table id="education_tab_table_nominee" class="table table-bordered" style="width:730px; margin-bottom: 10px !important;border: 1px solid rgb(216, 216, 216); padding: 6px; background-color: white; box-shadow: 10px 7px 8px rgb(167, 167, 167);">
                <thead style="width:717px;float: left; display: block;">
                <tr>
                    <th  width="166"><?php echo  $Getlabelname->Get_Labelname_Fnc("262");?></th>
                    <th width="133"><?php echo  $Getlabelname->Get_Labelname_Fnc("261");?></th>
                    <th width="80"><?php echo  $Getlabelname->Get_Labelname_Fnc("263");?></th>
                     <th width="164"><?php echo  $Getlabelname->Get_Labelname_Fnc("264");?></th>
                    <th width="85"><?php echo  $Getlabelname->Get_Labelname_Fnc("126");?></th>
                    <th width="85"><?php echo  $Getlabelname->Get_Labelname_Fnc("127");?></th>
                </tr>
                </thead>
                <tbody style="width:716px;  height:135px;float: left;  overflow-y: auto;">
                <?php 
                $nominee_TotRowCount=4;
                
                for($i=1; $i<=$nominee_TotRowCount; $i++) {
                    if(isset($rtype_nominee_name[$i-1]))
                      {
                      $rtype_nominee_name_val= $rtype_nominee_name[$i-1];
                      }
                      else
                      {
                       $rtype_nominee_name_val="";   
                      } 
                       if(isset($rtype_nominee[$i-1]))
                      {
                      $rtype_nominee_val= $rtype_nominee[$i-1];
                      }
                      else
                      {
                       $rtype_nominee_val="";   
                      }
                       if(isset($nominee_wef[$i-1]))
                      {
                       $nominee_wef_vals=$nominee_wef[$i-1];    
                       $nominee_wef_val=date('m/d/Y',strtotime($nominee_wef_vals));
                      }
                      else
                      {
                       $nominee_wef_val=$today;   
                      }
                      if(isset($nominee_wet[$i-1]))
                      {
                      $nominee_wet_val= $nominee_wet[$i-1];
                      }
                      else
                      {
                       $nominee_wet_val="";   
                      }
                    
                    ?>
                    <tr>
                        <td>
                          <?php               
                 
                            $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                                    'model'=>$model,
                                    'id'=>"nominee_name".$i,
                                    'name'=>$i."nominee_name", 
                                    'value'=>$rtype_nominee_name_val,
                                    'source'=>$this->createUrl('Personnel_V/DependentAutocomplete?val=Nominee'),                                   
                                    'options'=>array(
                                     'minLength'=>'0', 
                                     'select'=>'js:function( event, ui ) {
                                          //$("#subject_code-'.$i.'").val(ui.item.id);    
                                                   $("#nominee_name_id'.$i.'").val(ui.item.id);       
                                               }',
                                        
                                      'change'=>'js:function( event, ui ) {                                           
                                                if (!ui.item) {
                                                    $("nominee_name").val("");
                                                   
                                                 
                                                }                                                
                                        }',                                        
                                    ),
                                    'htmlOptions'=>array(
                                        'style'=>'',
                                        'class'=>"form-control",
                                       // 'placeholder'=>'<Country>',
                                         'rel'=>"NomineeAutocomplete",
                                       
                                    ),
                                ));                
                 
                            ?>  
                            
                             <input id="nominee_name_id<?php echo $i;?>" type="hidden" name="<?php echo $i;?>nominee_name_id" value="">
<!--                            <input type="text" name="[<?php //echo $i;?>]nominee_name" id="nominee_name<?php //echo $i;?>" class="form-control"></td>-->
                         <td>
                             
                             
                           
                             
                                     <?php
                            if(isset($rtype_nominee_val))
                              {
                           
                            echo CHtml::dropDownList($i."nominee_relation" , '',CHtml::listData(BASIC_DEFINITION::model()->findAll("DFCTG_DEFINITION_TYPE='RELATION'"), 'SHORT_NAME', 'DESCRIPTION'),array('empty'=>$rtype_nominee_val,"class"=>"edu_level","id"=>"nominee_relation".$i));

                               }
                               else
                               {
                                echo CHtml::dropDownList($i."nominee_relation" , '',CHtml::listData(BASIC_DEFINITION::model()->findAll("DFCTG_DEFINITION_TYPE='RELATION'"), 'SHORT_NAME', 'DESCRIPTION'),array('empty'=>'--Select--',"class"=>"edu_level","id"=>"nominee_relation".$i));
                               }?>
<!--                             <select name="[<?php //echo $i;?>]nominee_relation" id="nominee_relation<?php //echo $i;?>" class="edu_level">
                               <option value="">--select--</option>
                                <option value="">abc</option>
                            </select>-->
                         </td>
                        <td><input type="text" name="<?php echo $i;?>nominee_share" id="nominee_share<?php echo $i;?>" style="width:80px !important;"class="form-control"></td>
                         <td><input type="text" name="<?php echo $i;?>nominee_sharepercentage" id="nominee_sharepercentage<?php echo $i;?>"class="form-control"></td>
                         <td>
                            <?php 
          
            $this->widget('zii.widgets.jui.CJuiDatePicker',array("name"=>$i."nominee_wef",'value'=>$nominee_wef_val,
                                        'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                        'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"nominee_wef$i",'class'=>'wef','placeholder'=>'dd/mm/yy','rel'=>'WEF')));?></td>

                        </td>
                        <td>
                            <?php 
          
            $this->widget('zii.widgets.jui.CJuiDatePicker',array("name"=>$i."nominee_wet",'value'=>$nominee_wet_val,
                                        'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                        'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"nominee_wet$i",'class'=>'wet','placeholder'=>'dd/mm/yy','rel'=>'WEF')));?>
                        </td>
                    </tr>
                <?php } ?>
                  
                    
            
  <tr>
              <td><span class="createparty" onmouseover = "tooltip.pop(this, 'For Creating Nominee.');"><?php echo  $Getlabelname->Get_Labelname_Fnc("266");?></span></td>
               <td colspan="5"><span><img  src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/icon_plus.png"   
           title="Add Rows" rel="education_tab_table_nominee+nominee_TotRowCount" align="right" width="16" height="16"  alt="" style="cursor: pointer;" class="plus"/>
              <?php
              
              ?>
                    <input id="nominee_TotRowCount" type="hidden" name="nominee_TotRowCount" value="<?php echo $nominee_TotRowCount;?>">
                </span>
              </td>
             </tr>
            </table>
    </div> 
        
    <div id="tabs-7">
       
    <table id="education_tab_table_nextofkin" class="table table-bordered" style="width:485px; margin-bottom: 10px !important;border: 1px solid rgb(216, 216, 216); padding: 6px; background-color: white; box-shadow: 10px 7px 8px rgb(167, 167, 167);">
                 <thead style="width:470px;float: left; display: block;">
                <tr>
                    <th  width="167"><?php echo  $Getlabelname->Get_Labelname_Fnc("267");?></th>
                    <th width="133"><?php echo  $Getlabelname->Get_Labelname_Fnc("261");?></th>
                    <th width="85"><?php echo  $Getlabelname->Get_Labelname_Fnc("126");?></th>
                    <th width="85"><?php echo  $Getlabelname->Get_Labelname_Fnc("127");?></th>
                </tr>
                </thead>
                <tbody style="width:470px;  height:135px;float: left;  overflow-y: auto;">
                    
                <?php 
                $nextofkin_TotRowCount=4;
                for($i=1; $i<=$nextofkin_TotRowCount; $i++) {
                    
                    if(isset($rtype_nextofkin_name[$i-1]))
                      {
                      $rtype_nextofkin_name_val= $rtype_nextofkin_name[$i-1];
                      }
                      else
                      {
                       $rtype_nextofkin_name_val="";   
                      }
                      if(isset($rtype_nextofkin[$i-1]))
                      {
                      $rtype_nextofkin_val= $rtype_nextofkin[$i-1];
                      }
                      else
                      {
                       $rtype_nextofkin_val="";   
                      }
                       if(isset($nextofkin_wef[$i-1]))
                      {
                       $nextofkin_wef_vals=$nextofkin_wef[$i-1];    
                       $nextofkin_wef_val=date('m/d/Y',strtotime($nextofkin_wef_vals));
                      }
                      else
                      {
                       $nextofkin_wef_val=$today;   
                      }
                      if(isset($nextofkin_wet[$i-1]))
                      {
                      $nextofkin_wet_val= $nextofkin_wet[$i-1];
                      }
                      else
                      {
                       $nextofkin_wet_val="";   
                      }
                    
                    
                    
                    ?>
                    <tr>
                        <td>
                         <?php               
                 
                            $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                                    'model'=>$model,
                                    'id'=>"nextofkin_name".$i,
                                    'name'=>$i."nextofkin_name", 
                                    'value'=>$rtype_nextofkin_name_val,
                                    'source'=>$this->createUrl('Personnel_V/DependentAutocomplete?val=Next Of Kin'),                                   
                                    'options'=>array(
                                     'minLength'=>'0', 
                                     'select'=>'js:function( event, ui ) {
                                          //$("#subject_code-'.$i.'").val(ui.item.id);    
                                                   $("#nextofkin_id'.$i.'").val(ui.item.id);       
                                               }',
                                        
                                      'change'=>'js:function( event, ui ) {                                           
                                                if (!ui.item) {
                                                    $("nextofkin_name").val("");
                                                   
                                                 
                                                }                                                
                                        }',                                        
                                    ),
                                    'htmlOptions'=>array(
                                        'style'=>'',
                                        'class'=>"form-control",
                                       // 'placeholder'=>'<Country>',
                                        'rel'=>"NextofkinAutocomplete",
                                       
                                    ),
                                ));                
                 
                            ?></td>
                          <input id="nextofkin_id<?php echo $i;?>" type="hidden" name="<?php echo $i;?>nextofkin_id" value="">
<!--                         <td><input type="text" name="[<?php //echo $i;?>]nextofkin_name" id="nextofkin_name<?php //echo $i;?>" class="form-control"></td>-->
                            
                             <td>
                                 
                                                <?php  
                           if(isset($rtype_nextofkin_val))
                              {
                           
                           echo CHtml::dropDownList($i."nextofkin_relation" , '',CHtml::listData(BASIC_DEFINITION::model()->findAll("DFCTG_DEFINITION_TYPE='RELATION'"), 'SHORT_NAME', 'DESCRIPTION'),array('empty'=>$rtype_nextofkin_val,"class"=>"edu_level","id"=>"nextofkin_relation".$i));
                            
                              }
                              else
                              {
                               echo CHtml::dropDownList($i."nextofkin_relation" , '',CHtml::listData(BASIC_DEFINITION::model()->findAll("DFCTG_DEFINITION_TYPE='RELATION'"), 'SHORT_NAME', 'DESCRIPTION'),array('empty'=>'--Select--',"class"=>"edu_level","id"=>"nextofkin_relation".$i));   
                              }    
                              
                              
                              ?>
                           
                           
 <!--                             <select name="[<?php //echo $i;?>]nextofkin_relation" id="nextofkin_relation<?php //echo $i;?>" class="edu_level">
                               <option value="">--select--</option>
                                <option value="">abc</option>
                            </select>-->
                             
                             </td>
                        <td>
                            <?php 
          
            $this->widget('zii.widgets.jui.CJuiDatePicker',array("name"=>$i."nextofkin_wef",'value'=>$nextofkin_wef_val,
                                        'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                        'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"nextofkin_wef$i",'class'=>'wef','placeholder'=>'dd/mm/yy','rel'=>'WEF')));?></td>

                        </td>
                        <td>
                            <?php 
          
            $this->widget('zii.widgets.jui.CJuiDatePicker',array("name"=>$i."nextofkin_wet",'value'=>$nextofkin_wet_val,
                                        'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                        'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"nextofkin_wet$i",'class'=>'wet','placeholder'=>'dd/mm/yy','rel'=>'WEF')));?>
                        </td>
                    </tr>
                <?php } ?>
                   
                    
            
  <tr>
              <td><span class="createparty" onmouseover = "tooltip.pop(this, 'For Creating Next of Kin.');"><?php echo  $Getlabelname->Get_Labelname_Fnc("268");?></span></td>
              <td colspan="3"><span><img  src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/icon_plus.png"   
           title="Add Rows" rel="education_tab_table_nextofkin+nextofkin_TotRowCount" align="right" width="16" height="16"  alt="" style="cursor: pointer;" class="plus"/>
              <?php
              
              ?>
                    <input id="nextofkin_TotRowCount" type="hidden" name="nextofkin_TotRowCount" value="<?php echo $nextofkin_TotRowCount;?>">
                </span>
              </td>       
             </tr>
            </table>
    </div> 
        
    
    
    <div id="tabs-8">
              <table style="margin-bottom:0px; width: 75%;height:50px; background-color: #F8F8F8">
                 <?php 
                 if(isset($get_Party_BANK[0]['BANK_ID']))
                 {
                 $banknameupdate = "select NAME from BANK WHERE BANK_ID =".$get_Party_BANK[0]['BANK_ID'];
                 $banknameupdate_data = Yii::app()->db->createCommand($banknameupdate)->queryAll();
                 
                
                 $branchnameupdate = "select NAME from BANK WHERE ID =".$get_Party_BANK[0]['BANK_ID'];
                 $branchnameupdate_data = Yii::app()->db->createCommand($branchnameupdate)->queryAll();
                 
                 }  
                         
                    if(isset($branchnameupdate_data[0]['NAME']))
                    {
                    $up_bank_branch_name=$branchnameupdate_data[0]['NAME'];
              
                    }
                    
                    else
                    {
                    $up_bank_branch_name="";    
                    }
                    if(isset($banknameupdate_data[0]['NAME']))
                    {
                    $up_bank_name=$banknameupdate_data[0]['NAME'];
              
                    }
                    
                    else
                    {
                    $up_bank_name="";    
                    }
                           
                  if(isset($get_Party_BANK[0]['ACCOUNT_NO']))
                    {
                    $up_account_no=$get_Party_BANK[0]['ACCOUNT_NO'];
              
                    }
                    
                    else
                    {
                    $up_account_no="";    
                    }
                    
                    if(isset($get_Party_BANK[0]['ACCOUNT_OWNER']))
                    {
                    $up_account_owner=$get_Party_BANK[0]['ACCOUNT_OWNER'];
                  
                    }
                    else
                    {
                    $up_account_owner="";    
                    }
                    
                    if(isset($get_Party_BANK[0]['CURRENCY']))
                    {
                    $up_currency=$get_Party_BANK[0]['CURRENCY'];
             
                    }
                    else
                    {
                    $up_currency="";    
                    }
                   
                    
                    if(isset($get_Party_BANK[0]['ACCOUNT_TYPE']))
                    {
                    $up_account_type=$get_Party_BANK[0]['ACCOUNT_TYPE'];
                
                    }
                    else
                    {
                    $up_account_type="";    
                    }
                    
                    if(isset($get_Party_BANK[0]['WEF']))
                    {
                    $up_bank_wef_val=$get_Party_BANK[0]['WEF'];
                    $up_bank_wef=date('d/m/Y',strtotime($up_bank_wef_val));
              
                    }
                    else
                    {
                    $up_bank_wef="";    
                    }
                    if(isset($get_Party_BANK[0]['WET']))
                    {
                    $up_bank_wet_val=$get_Party_BANK[0]['WET'];
                    $up_bank_wet=date('d/m/Y',strtotime($up_bank_wet_val));
                    }
                    else
                    {
                    $up_bank_wet="";    
                    }
                 
                 ?>
                <tr>
                  
                     <td width="auto" style=" background-color:#F8F8F8; padding-top: 10px !important">
                         <table id="address_table" style="margin-bottom:0px !important; padding: 20px !important; height:100px !important;border:1 px !important; border-radius: 30px !important;">
                           <tr>
                                <td class="label_width_contact"><b><?php echo  $Getlabelname->Get_Labelname_Fnc("123");?></b></td><td>
                                   
                                     <input type="text" autocomplete="on"  value="<?php echo $up_bank_branch_name;?>" class="contacttext" id="Branch" name="Branch">
<!--                                    <input type="text" name="branch" class="contacttext">-->
                                </td>
                                <td class="label_width_contact"><b><?php echo  $Getlabelname->Get_Labelname_Fnc("194");?></b></td><td>
                                    
                                  
                                
                                     <?php echo $form->textField(Entity_Bank::model(),"ACCOUNT_NO",array("id"=>"ACCOUNT_NO",'value'=>$up_account_no,'class'=>"contacttext")); ?>
                                   
                            </tr> 
                              <tr id="addbranch" class="spaceUnder"><td></td> <td class="padding-left-text-left-small"><div class="margintxt"  id="Addinput" contenteditable  ></div></td></tr>             
                           <tr>
                               <td class="label_width_contact"></td><td>
<!--                                   <input type="text" name="fax" class="contacttext">-->
                                    <input type="hidden" name="id" id="idbank" value="">   
                                    <input type="hidden" name="Entity_Bank_Id" value="">
                             <input type="text" name="add2" id="labelbank" class="contacttext" value="<?php echo $up_bank_name;?>" readonly>
                               </td>
                                <td class="label_width_contact"><b><?php echo  $Getlabelname->Get_Labelname_Fnc("195");?></b></td><td>
                                      <?php echo $form->textField(Entity_Bank::model(),"ACCOUNT_OWNER",array("id"=>"ACCOUNT_OWNER",'value'=>$up_account_owner,'class'=>"contacttext")); ?>
                                   </td>      
                                    
                            </tr>
                            <tr>
                               
                                <td class="label_width_contact"><b><?php echo  $Getlabelname->Get_Labelname_Fnc("160");?></b></td><td>
                                     <?php               
                           
                            $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                                    'model'=>$model,
                                    'id'=>"currency",
                                    'model'=>Entity_Bank::model(),'attribute'=>"CURRENCY",
                                    //'value'=>$up_currency,
                                    'source'=>$this->createUrl('Party/CurrencyAutocomplete'),                                   
                                    'options'=>array(
                                     'minLength'=>'0', 
                                     'select'=>'js:function( event, ui ) {
                                                  //$("COUNTRY").val(ui.item.id);
                                               
                                                  $("#currencyid").val(ui.item.id);       
                                               }',
                                        
                                      'change'=>'js:function( event, ui ) {                                           
                                                if (!ui.item) {
                                                    $("CURRENCY").val("");
                                                   
                                                 
                                                }                                                
                                        }',                                        
                                    ),
                                    'htmlOptions'=>array(
                                         'style'=>'height:25px;width:267px;',
                                          'class'=>"contacttext",
                                          'value'=>$up_currency,
                                        
                                       
                                    ),
                                ));                
                 
                 ?>
<!--                                    <input type="text" name="currency" id="currency" class="contacttext"></td>-->
                                  <td class="label_width_contact"><b><?php echo  $Getlabelname->Get_Labelname_Fnc("193");?></b></td><td>
                                        <?php               
                 
                            $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                                     'model'=>Entity_Bank::model(),'attribute'=>"ACCOUNT_TYPE",
                                    'id'=>"Account_Type",
                                    'name'=>"AccountType", 
                                    //'value'=>$up_account_type,
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
                                                    $("Account_Type").val("");
                                                   
                                                 
                                                }                                                
                                        }',                                        
                                    ),
                                    'htmlOptions'=>array(
                                        'style'=>'height:25px;width:240px;',
                                        'class'=>"contacttext",
                                       // 'placeholder'=>'<Country>',
                                        'value'=>$up_account_type,
                                       
                                    ),
                                ));                
                 
                 ?>
<!--                                      <input type="text" name="acctype" class="contacttext"></td>-->
                                 
                            </tr>
                            <tr>
                               
                               
                                  
                                 <td class="label_width_contact"></td><td><b><span class="contactdate"><?php echo  $Getlabelname->Get_Labelname_Fnc("126");?></span></b><?php  $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>Entity_Bank::model(),"attribute"=>"WEF",'options'=>array('showAnim'=>'slide','placeholder'=>'dd/mm/yy',
                                                                                                           'dateFormat'=>'dd/mm/yy',
                                                                                                           'changeMonth' => 'true',
                                                                                                           'changeYear'=>'true',
                                                                                                           'constrainInput' => 'false'),
                                            'htmlOptions'=>array('class'=>'wef_datepicker','id'=>"WEF",'placeholder' => 'dd/mm/yyyy','value'=>$up_bank_wef,),            
                                          ));
                                     ?>
                                  <b><span class="contactdate"><?php echo  $Getlabelname->Get_Labelname_Fnc("127");?></span></b>
                                        <?php  $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>Entity_Bank::model(),"attribute"=>"WET",'options'=>array('showAnim'=>'slide','placeholder'=>'dd/mm/yy',
                                                                                                           'dateFormat'=>'dd/mm/yy',
                                                                                                           'changeMonth' => 'true',
                                                                                                           'changeYear'=>'true',
                                                                                                           'constrainInput' => 'false'),
                                            'htmlOptions'=>array('class'=>'wet_datepicker','id'=>"WET",'value'=>$up_bank_wet, 'placeholder' => 'dd/mm/yyyy',),            
                                          ));
                                     ?></td>
                               <td></td><td>
                                   <span class="createbank" id="dialogBtn" onmouseover="tooltip.pop(this, 'For Creating Bank.');" >Create Bank</span></td>
                            </tr>


                        </table>

                    </td>
                </tr>

            </table>

    </div> 
    
    <div id="tabs-9">
        
        
         <table id="education_tab_table" class="table table-bordered" style="width:43%; margin-bottom: 0px !important;border: 1px solid rgb(216, 216, 216); padding: 6px; background-color: white; box-shadow: 10px 7px 8px rgb(167, 167, 167);">
                <thead>
                <tr>
                    <th width="250"><?php echo  $Getlabelname->Get_Labelname_Fnc("270");?></th>
                    <th  width="40"><?php echo  $Getlabelname->Get_Labelname_Fnc("271");?></th>
                    <th width="40"><?php echo  $Getlabelname->Get_Labelname_Fnc("272");?> </th>
                </tr>
                </thead>
             <tbody>
                <?php //for($i=1; $i<6; $i++) { ?>
                    <tr>
                        <td><b>Passport Photo</b></td>
                       
                        <td><b>21/02/2014</b></td>
                        <td><img src="<?php echo Yii::app()->baseUrl?>/images/view_text.png" style="cursor: pointer;"></td>
                    </tr>
                     <tr>
                        <td><b>Signature</b></td>
                       
                        <td><b>21/02/2014</b></td>
                        <td><img src="<?php echo Yii::app()->baseUrl?>/images/view_text.png" style="cursor: pointer;"></td>
                    </tr>
                     <tr>
                        <td><b>SSLC Marklist</b></td>
                       
                        <td><b>21/02/2014</b></td>
                        <td><img src="<?php echo Yii::app()->baseUrl?>/images/view_text.png" style="cursor: pointer;"></td>
                    </tr>
                <?php//} ?>

           
       
                  
                     
        </table>
        <table style="width:50% !important;margin-top: 0px!important; ">
          <tr>
                      
                       <td style="width:100px !important; text-align: right!important;"><img src="<?php echo Yii::app()->baseUrl?>/images/browsephoto.png" style="cursor: pointer;"></td>
                       <td style="width:200px !important;">
                       <p class="browseimg" id="browseimg"><?php echo $Getlabelname->Get_Labelname_Fnc("273");?></p>
                       <p class="imgdec">You can upload images here<br>
                        For uploading Click here</p>
                       </td>
                      
         </td>
                    
          </tr>
          <?PHP
          if(isset($_REQUEST['partyID']))
          {
              $partyID=$_REQUEST['partyID'];
          
          ?>
           <input id="partyid" type="hidden" name="Party_Id" value="<?php echo $partyID;?>"> 
          <?php }?>
        </table>

            
    </div> 
    <div id="tabs-10">
        <table id="education_tab_table_service" class="table table-bordered" style="width:473px; margin-bottom: 10px !important;border: 1px solid rgb(216, 216, 216); padding: 6px; background-color: white; box-shadow: 10px 7px 8px rgb(167, 167, 167);">
                 <thead style="width:464px;float: left; display: block;">
                <tr>
                    <th width="293"><?php echo  $Getlabelname->Get_Labelname_Fnc("274");?></th>
                    <th  width="85"><?php echo  $Getlabelname->Get_Labelname_Fnc("126");?></th>
                    <th width="85"><?php echo  $Getlabelname->Get_Labelname_Fnc("127");?></th>
                </tr>
                </thead>
                  <tbody style="width:464px;  height:130px;float: left;  overflow-y: auto;">
                <?php 
                $service_TotRowCount=4;
                for($i=1; $i<=$service_TotRowCount; $i++) {
                     if(isset($rtype_service_status_id[$i-1]))
                      {
                      $rtype_service_status_id_val= $rtype_service_status_id[$i-1];
                      }
                      else
                      {
                       $rtype_service_status_id_val="";   
                      }   
                      if(isset($rtype_service_status[$i-1]))
                      {
                       $rtype_service_status_val= $rtype_service_status[$i-1];
                       
                      }
                      else
                      {
                        $rtype_service_status_val="";   
                      } 
                     
                      if(isset($rtype_service_status_wef[$i-1]))
                      {
                      $rtype_service_status_wef= $rtype_service_status_wef[$i-1];
                      $rtype_service_status_wef_val=date('m/d/Y',strtotime($rtype_service_status_wef));
                      }
                      else
                      {
                       $rtype_service_status_wef_val="";   
                      }  
                      if(isset($rtype_service_status_wet[$i-1]))
                      {
                      $rtype_service_status_wet= $rtype_service_status_wet[$i-1];
                      $rtype_service_status_wet_val=date('m/d/Y',strtotime($rtype_service_status_wet));
                      }
                      else
                      {
                       $rtype_service_status_wet_val="";   
                      }
                      if(isset($rtype_service_status_per_party_id[$i-1]))
                      {
                      $rtype_service_status_per_party_id_val= $rtype_service_status_per_party_id[$i-1];
                      }
                      else
                      {
                       $rtype_service_status_per_party_id_val="";   
                      }
                      if(isset($rtype_service_id[$i-1]))
                      {
                      $rtype_service_id_val= $rtype_service_id[$i-1];
                      }
                      else
                      {
                       $rtype_service_id_val="";   
                      }
                    ?>
                    <tr>
                    <td>
                        
                        
                        
                        
                        
                        
                        
                     <?php 
                     
                      if(isset($rtype_service_status_val))
                        {
                     echo CHtml::dropDownList($i."service_name" ,'',CHtml::listData(BASIC_DEFINITION::model()->findAll("DFCTG_DEFINITION_TYPE='SERVICE_STATUS'"), 'DESCRIPTION', 'DESCRIPTION'),array('empty'=>$rtype_service_status_val,"class"=>"form-control","style"=>"width:293px !important;","id"=>"service_name".$i));   
                        }
                      else
                       {
                       echo CHtml::dropDownList($i."service_name" , '',CHtml::listData(BASIC_DEFINITION::model()->findAll("DFCTG_DEFINITION_TYPE='RELATION'"), 'SHORT_NAME', 'DESCRIPTION'),array('empty'=>'--Select--',"class"=>"edu_level","id"=>"dependent_relation".$i));
                       }
                     
                     ?>
                    </td>
<!--                        <td><select name="[<?php //echo $i;?>]service_name"  id="service_name<?php //echo $i;?>" class="form-control" style="width:293px !important;">
                                <option value="1">Manager</option>
                                <option value="1">Staff</option>
                              
                            </select></td>-->
           
                        <td>
                            <?php 
             
            $this->widget('zii.widgets.jui.CJuiDatePicker',array("name"=>$i."service_wef","value"=>$rtype_service_status_wef_val,
                                        'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                        'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"service_wef-$i",'class'=>'wef','placeholder'=>'dd/mm/yy')));?></td>

                       
                        <td>
                            <?php 
          
            $this->widget('zii.widgets.jui.CJuiDatePicker',array("name"=>$i."service_wet","value"=>$rtype_service_status_wet_val,
                                        'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                        'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"service_wet$i",'class'=>'wet','placeholder'=>'dd/mm/yy','rel'=>'WEF')));?>
                        </td>
                    </tr>
                <?php } ?>
                    <tr>
              
              <td colspan="3"><span><img  src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/icon_plus.png"   
           title="Add Rows" rel="education_tab_table_service+service_TotRowCount" align="right" width="16" height="16"  alt="" style="cursor: pointer;" class="plus"/>
              <?php
            
              ?>
                    <input id="service_TotRowCount" type="hidden" name="service_TotRowCount" value="<?php echo $service_TotRowCount;?>">
                </span>
              </td>       
             </tr>

            </table>
    </div> 
    
    <div id="tabs-11">
        <table id="education_tab_table" class="table table-bordered" style="width:55%; margin-bottom: 10px !important;border: 1px solid rgb(216, 216, 216); padding: 6px; background-color: white; box-shadow: 10px 7px 8px rgb(167, 167, 167);">
                <thead>
                <tr>
                    <th width="250"></th>
                     <th width="250"></th>
                    <th  width="40"><?php echo  $Getlabelname->Get_Labelname_Fnc("126");?></th>
                    <th width="40"><?php echo  $Getlabelname->Get_Labelname_Fnc("127");?></th>
                </tr>
                </thead>
                <tbody>
        
      
                    
            
              <?php
              /*************in case of update***********/
              
              $condition="DFCTG_DEFINITION_TYPE='PERSONNEL_FLEX'";
              $getpersonnelflex=Basic_definition::model()->findAll($condition);
              $flex_count = count($getpersonnelflex);
              $flexup=array();$flex_value_up=array();$wef=array();$wet=array();
//              if(($model->ID!="")&&($bank_id!=""))
//                {
//                  $today=date('d/m/Y');
//                  
//
//                
//                  
//                   
//              
//               $getflexdetaup = Yii::app()->db->createCommand()
//               ->select('ID,FLEX,FLEX_VALUE,WEF,WET,BANK_ID')  
//               ->where("BANK_ID=:bank_id",array(':bank_id'=>$bank_id)) 
//               ->from('BANK_FLEX')
//               ->queryAll();
//               
//               $count_up=count($getflexdetaup);
//              
//               //for($i=0;$i<=$count;$i++) {  echo "<h1>".$i."</h1>";  }
//               for($i=0;$i<$count;$i++) 
//                 {  
//                    $flex_up_id[$i]="";
//                   $flex_value_up[$i]="";
//                   $flexup[$i]="";
//                   $wef[$i]=$today;
//                   $wet[$i]="";
//                 }
//                 
//                 foreach ($getflexdetaup as $key => $value) {
//                     
//                     $flex_up_id[$key]=$value['ID'];
//                      $flex_value_up[$key]=$value['FLEX_VALUE'];
//                      $flexup[$key]=$value['FLEX'];            
//                      $wef[$key]=$value['WEF'];
//                      $wet[$key]=$value['WET'];
//                     
//                      if($wef[$key]=="")
//                      {
//                         echo $wef[$key];
//                      $wef[$key]=$today;
//                      }
//                     else 
//                         {
//                          $wef[$key]=date('d/m/Y',strtotime($value['WEF']));
//                         }
//                         if($wet[$key]=="")
//                         {
//                            $wet[$key]=""; 
//                         }
//                      else {
//                      $wet[$key]=date('d/m/Y',strtotime($value['WET']));
//                      }
//                      
//                 }
//                  
//                  
//                    
//             }
              
              
            
              foreach ($getpersonnelflex as $key => $record) {
                 ?>
            <tr>
            <td>
                
                
            <?php  
            $key=$key+1;
             
            $popid=array();
            $popid[$key]=$record->DESCRIPTION;
            $wef[$key]=$today;
            if(isset($personnel_flex_update_data[$key-1]['FLEX_VALUE']))
            {
            $flex_value_up[$key]=$personnel_flex_update_data[$key-1]['FLEX_VALUE'];
            }
            else
            {
              $flex_value_up[$key]="";   
            }
            if(isset($personnel_flex_update_data[$key-1]['WEF']))
            {
            $flex_wef_up[$key]=$personnel_flex_update_data[$key-1]['WEF'];
            $flex_wef_up_val[$key]=date('d/m/Y',strtotime($flex_wef_up[$key]));
            }
            else
            {
               $flex_wef_up_val[$key]="";   
            }
            
            if(isset($personnel_flex_update_data[$key-1]['WET']))
            {
            $flex_wet_up[$key]=$personnel_flex_update_data[$key-1]['WET'];
            $flex_wet_up_val[$key]=date('d/m/Y',strtotime($flex_wet_up[$key]));
            }
            else
            {
               $flex_wet_up_val[$key]="";   
            }
            
//             if(($model->ID=="")&&($bank_id==""))
//                {
//                 
//            $flex_up_id[$key]="";
//            $flex_value_up[$key]="";
//            $wef[$key]=$today;
//            $wet[$key]="";
//                }
                

            
            echo  "<b>".$record->DESCRIPTION."&nbsp;&nbsp;</b>"; ?>
              
              </td>
              <input type="hidden" name="flex_count" id="flex_count" value="<?php echo $flex_count;?>">   
              <input type="hidden" name="<?php echo $key;?>FLEX_NAME" id="FLEX_NAME<?php echo $key;?>" value="<?php echo $popid[$key];?>">
              <input type="hidden" name="<?php echo $key;?>flex_up_id" id="flex_up_id<?php echo $key;?>" value="<?php //echo $flex_up_id[$key];?>">   

             <td>
                 <input type="text" name="<?php echo $key;?>FLEX_VAL" id="FLEX_VAL<?php echo $key;?>"  value="<?php echo $flex_value_up[$key];?>" class="contacttext">
            </td>
           <td><?php 
          
            $this->widget('zii.widgets.jui.CJuiDatePicker',array("name"=>$key."FLEX_WEF",'value'=>$flex_wef_up_val[$key],
                                        'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                        'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"WEF$key",'class'=>'WEF','style'=>"width:92px;height:25px",'rel'=>'WEF')));?></td>
           <td><?php $this->widget('zii.widgets.jui.CJuiDatePicker',array("name"=>$key."FLEX_WET",'value'=> $flex_wet_up_val[$key] ,
                                        'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                        'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"WET$key",'class'=>'WET','style'=>"width:92px;height:25px",'rel'=>'WET')));?></td>
            
            </tr>
               <?php 
              
               }
               
             
               
               
                ?>
           

            <tr>
               
               
        </tbody>
        </table>

            </table>
    </div> 
    
</div></div>
<table style="margin-bottom: 5px; width:1160px; ">

    <tr>
        <td colspan="6" id="table_bottom_bg" style="text-align: right; padding-right: 10px;  padding-bottom: 5px;  padding-top: 4px;  ">
           
            <input type="hidden" name="up_party_id" value="<?php echo $model->PARTY_ID;?>">
             <?php
            if($party_id!="")
                    {
                
            ?>
             <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"submit",'size'=>'medium', 'label'=>$model->isNewRecord ? "Update" : "Update",'id'=>'Update','icon'=>'icon-hdd')); 
                    }
                    else
                    { 
             ?>
            
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"submit",'size'=>'medium', 'label'=>$model->isNewRecord ? "Save" : "Save",'id'=>'save','icon'=>'icon-hdd')); 
                    }
            ?>
            
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"reset",'size'=>'medium','icon'=>'icon-refresh', 'label'=>'Clear')); ?>
            <?php //echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>

        </td>
    </tr>
</table>
<?php $this->endWidget(); ?>

<!-- form -->