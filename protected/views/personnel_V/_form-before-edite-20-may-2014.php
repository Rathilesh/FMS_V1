<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/assets/js/cloning/cloning.js"></script>
<?php
 $dRECORD_ON=date('d/m/Y');
 //echo $dRECORD_ON;
require_once("popupdialog.php");
require_once('tooltip.php');  
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
    
    //$('#verification_datepicker').reaonly()
//      $('#verification_datepicker').attr('readonly', true);
//      $('#verification_datepickeremp').attr('readonly', true);
      $('#save').click(function()
      {
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
         var add1=$('#add1'+i).val();
        
         var add2=$('#add2' +i).val();    
         var add3=$('#add3'+i).val();
         var add4=$('#add4'+i).val().trim();
         var country=$('#COUNTRY' +i).val();    
         var mobile=$('#mobile'+i).val().trim();
         var telephone=$('#telephone'+i).val().trim();
         var fax=$('#fax' +i).val().trim();    
         var email=$('#email'+i).val().trim();        
         var url=$('#url'+i).val().trim();
         var contactwef=$('#wef_datepicker'+i).val();   
         var contactwet=$('#wet_datepicker'+i).val(); 
         var contactType=$('#address-'+i).val();
         alert(add1+add2+add3+add4);
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
   

   var iframe1 = $('<iframe border=0 id="Iframe" name="Iframe" src="<?php echo Yii::app()->request->baseUrl;?>/index.php/party_image/create?iframe=1" scrolling="no" noresize frameborder="1" ></iframe>');
    var dialog1= $("<div></div>").append(iframe1).appendTo("body").dialog({
        autoOpen: false,
        modal: true,
        show: "fade",
        hide: "fade",
        resizable: false,
        title:'PARTY IMAGE',
        width: 'auto',
        height: 'auto',
        close: function () {
            //iframe.attr("src", "");
        }
    });
    /************************browse image iframe end here***************/

 
$('#browseimg').click(function(){    
    dialog1.dialog().dialog("open");
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
              $("#idbank").val(ui.item.id1);
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
/* Created By :Â® RaThIlEsH Â® 
 * morDified By :Â® RaThIlEsH Â® on 31-Dec-2013
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
                     <div class="testclass1"></div>
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
                           
                             
                             <td >
                               
                                 
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
<div id="outer_tab_div">
<div id="tabs">
  <ul>
      
        <li><a href="#tabs-1" style="width:40px!important; text-align:left!important;"><?php echo  $Getlabelname->Get_Labelname_Fnc("199");?> </a></li>
        <li><a href="#tabs-2" style="width:55px!important; text-align:left!important;"><?php echo  $Getlabelname->Get_Labelname_Fnc("218");?></a></li>
        <li><a href="#tabs-3" style="width:50px!important; text-align:left!important;"><?php echo  $Getlabelname->Get_Labelname_Fnc("237");?></a></li>
        <li><a href="#tabs-4" style="width:65px!important; text-align:left!important;"><?php echo  $Getlabelname->Get_Labelname_Fnc("238");?></a></li>
         <li><a href="#tabs-5" style="width:65px!important; text-align:left!important;"><?php echo  $Getlabelname->Get_Labelname_Fnc("239");?></a></li>
         <li><a href="#tabs-6" style="width:50px!important; text-align:left!important;"><?php echo  $Getlabelname->Get_Labelname_Fnc("240");?></a></li>
         <li><a href="#tabs-7" style="width:70px!important; text-align:left!important;"><?php echo  $Getlabelname->Get_Labelname_Fnc("241");?></a></li>
         <li><a href="#tabs-8" style="width:30px!important; text-align:left!important;"><?php echo  $Getlabelname->Get_Labelname_Fnc("114");?></a></li>
         <li><a href="#tabs-9" style="width:55px!important; text-align:left!important;"><?php echo  $Getlabelname->Get_Labelname_Fnc("242");?></a></li>
         <li><a href="#tabs-10" style="width:85px!important; text-align:left!important;"><?php echo  $Getlabelname->Get_Labelname_Fnc("243");?></a></li>
         <li><a href="#tabs-11" style="width:30px!important; text-align:left!important;"><?php echo  $Getlabelname->Get_Labelname_Fnc("200");?></a></li>
     
     
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
    <div class="scrollbar" id="ex3" style="width:110%; height:187px; float: left; overflow-y: scroll;">
         
        <div id="accordion" style="width: 100% !important; ">
             <?php for($i=0;$i<$count;$i++)
          {
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
        <h3><?php echo $peradd[$i];?></h3>
       
          <div>
            <table style="margin-bottom:0px; width: 100%;height:50px; background-color: #F8F8F8">
                <tr>
                    <td width="auto">
                        <table id="address_table" style="margin-bottom:0px; padding: 0px; ">
                            <tr>
                              <input type="hidden" name="<?php echo $i;?>address" id="<?php echo "address-".$i;?>" value="<?php echo $peradd[$i];?>" >   
                             <td><a><input type="text" name="<?php echo $i;?>add1" id="add1<?php echo $i;?>" class="inputpermament"></a></td>
                            </tr>
                            <tr>
                               
                                <td><a><input type="text" name="<?php echo $i;?>add2" id="add2<?php echo $i;?>" class="inputpermament"></a></td>
                            </tr>
                            <tr>
<!--                                <td class="label_width_contact"><b>Line 2</b></td>-->
                                <td><input type="text" name="<?php echo $i;?>add3" id="add3<?php echo $i;?>" placeholder="<Postal Code>" class="inputpermament"></td>
                            </tr>
                            <tr>
<!--                                <td class="label_width_contact"><b>Line 3</b></td>-->
                                <td><input type="text" name="<?php echo $i;?>city" id="city<?php echo $i;?>" class="inputpermament" placeholder="<City>"></td>
                            </tr>
                            <tr>
<!--                                <td class="label_width_contact"><b>City</b></td>-->
                                <td><?php               
                 
                            $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                                    /*'model'=>$model,*/
                                    'attribute'=>'COUNTRY',
                                    'id'=>"COUNTRY$i",
                                    'name'=>"personnel[{$i}][COUNTRY]", 
                                    //'value'=>$countryval,
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
                                <td class="label_width_contact"><b><?php echo  $Getlabelname->Get_Labelname_Fnc("244");?></b></td><td><input type="text" name="<?php echo $i;?>mobile" id="mobile<?php echo $i;?>" class="contacttext"></td>
                                <td class="label_width_contact"><b><?php echo  $Getlabelname->Get_Labelname_Fnc("110");?></b></td><td><input type="text" name="<?php echo $i;?>telephone" id="telephone<?php echo $i;?>" class="contacttext">
                            </tr>  
                           <tr>
                               <td class="label_width_contact"><b><?php echo  $Getlabelname->Get_Labelname_Fnc("111");?></b></td><td><input type="text" name="<?php echo $i;?>fax" id="fax<?php echo $i;?>" class="contacttext"></td>
                                <td class="label_width_contact"><b><?php echo  $Getlabelname->Get_Labelname_Fnc("112");?></b></td><td><input type="text" name="<?php echo $i;?>email" id="email<?php echo $i;?>" class="contacttext"></td>      
                                    
                            </tr>
                            <tr>
                               
                                <td class="label_width_contact"><b><?php echo  $Getlabelname->Get_Labelname_Fnc("113");?></b></td><td><input type="text" name="<?php echo $i;?>url" id="url<?php echo $i;?>"class="contacttext"></td>
                                 <td class="label_width_contact"></td><td><b><span class="contactdate"><?php echo  $Getlabelname->Get_Labelname_Fnc("126");?></span></b><input type="text" name="<?php echo $i;?>addwef" id="wef_datepicker<?php echo $i;?>" class="wef_datepicker" placeholder="dd/mm/yy">
                                  <b><span class="contactdate"><?php echo  $Getlabelname->Get_Labelname_Fnc("127");?></span></b><input type="text" name="<?php echo $i;?>addwet" id="wet_datepicker<?php echo $i;?>" class="wet_datepicker" placeholder="dd/mm/yy"></td>
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
                <?php for($i=1; $i<=$loop_c; $i++) { ?>
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
                                    ->select('DESCRIPTION')           
                                    ->from('QUALIFICATION_EXPERIENCE')
                                    ->where("RECORD_TYPE='EDUCATION'")
                                    ->queryAll();
                                   
                        
                                  //  print
                                
                                    ?>
                        
                        <td>
                            <select name="<?php echo $i;?>edu_course" id="edu_course<?php echo $i;?>" class="edu_course">
                               
                                <option>--select--</option>
                                <?php foreach($courseexist as $data){?>
                                <option value="<?php echo $data['DESCRIPTION'];?>"><?php echo $data['DESCRIPTION'];?></option>
                               <?php } ?>
                            </select>
                        </td>
                        <td><input type="text" name="<?php echo $i;?>grade" style="width:60px !important;" class="form-control" id="grade<?php echo $i;?>" onfocus = "tooltip.pop(this, 'Grade Obtained.');"></td>
                        <td><input type="text" name="<?php echo $i;?>score" style="width:80px !important;" class="form-control" id="score<?php echo $i;?>" onfocus = "tooltip.pop(this, 'Score Obtained.');"></td>
<!--                         <td><select name="edu_level" class="edu_level">
                                <option value="">--select--</option>
                                <option value=""></option>
                               
                            </select></td>-->
<td> <input type="text" name="<?php echo $i;?>INSTITUTE" style="width:200px !important;" class="form-control" id="INSTITUTE<?php echo $i;?>" onfocus = "tooltip.pop(this, 'Institute Name.');">    </td>
<!--                        <td><select name="[<?php //echo $i;?>]INSTITUTE" id="INSTITUTE<?php //echo $i;?>" class="edu_institute">
                                <option value="">LBS</option>
                                <option value="">IIM</option>
                               
                            </select></td>-->
                             <td>
                             <input type="text" name="<?php echo $i;?>UNIVERSITY" style="width:200px !important;" class="form-control" id="UNIVERSITY<?php echo $i;?>" onfocus = "tooltip.pop(this, 'University Name.');">    
                                 
                                 
                             </td>
<!--                        <td><select name="[<?php //echo $i;?>]UNIVERSITY" id="UNIVERSITY<?php //echo $i;?>" class="edu_level">
                                <option value="">Kannur</option>
                                <option value="">Calicut</option>
                               
                            </select></td>-->
                            <td><select name="<?php echo $i;?>COURSE_TYPE" id="COURSE_TYPE<?php echo $i;?>" class="edu_level">
                                <option value="">--select--</option>
                                <option value="">Regular</option>
                                <option value="">Correspondance</option>
                               
                            </select></td>
                            <td><select name="<?php echo $i;?>COURSE_NATURE" id="COURSE_NATURE<?php echo $i;?>" class="edu_level">
                                <option value="">--select--</option>
                                <option value="">Full time</option>
                                <option value="">Parttime</option>
                               
                            </select></td>
                            <?php //echo $form->checkBox($model,'VERIFIED_BY_EMPLOYER',array("id"=>"VERIFIED_BY_EMPLOYER","class"=>"vericheck",'onclick'=>'empdate();')); ?>
                          <?php //echo $form->textField($model,'VERIFIED_ON',array('id'=>'verification_datepickeredu','placeholder'=>'dd/mm/yy')); ?>  
<!--                      <td><?php //echo $form->textField($model,'DOB',array('id'=>"wef_datepicker$i",'class'=>'wef_datepicker','placeholder'=>'dd/mm/yy')); ?></td>-->
                     <td><input type="text" name="<?php echo $i;?>YEAR_OF_PASSING" id="YEAR_OF_PASSING<?php echo $i;?>" class="form-control" style="width:60px !important;" onfocus = "tooltip.pop(this, 'Course completed Year.');"></td>
                     <td><input type="text" name="<?php echo $i;?>ATEMPT_TO_PASS" id="ATEMPT_TO_PASS<?php echo $i;?>" class="form-control" style="width:80px !important;" onfocus = "tooltip.pop(this, 'Attempt to pass.');"></td>
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
                    <th width="180"><?php echo  $Getlabelname->Get_Labelname_Fnc("257");?></th>
                    <th width="200"><?php echo  $Getlabelname->Get_Labelname_Fnc("258");?></th>
                    <th width="60"><?php echo  $Getlabelname->Get_Labelname_Fnc("252");?></th>
                  
                </tr>
                </thead>
                <tbody style="width:820px; height:109px;float: right;  overflow-y: auto;
    ">
                <?php
                $train_TotRowCount=5;
                
                for($i=1; $i<$train_TotRowCount; $i++) { ?>
                    <tr class="trainingtr">
                        <td><input type="text" name="<?php echo $i;?>training_name" id="training_name<?php echo $i;?>" class="form-control"></td>
                        <td><input type="text" name="<?php echo $i;?>training_duration" id="training_duration<?php echo $i;?>" style="width:70px !important;" class="form-control"></td>
                               <td><select name="<?php echo $i;?>training_duration_time" id="training_year<?php echo $i;?>" class="edu_level">
                                <option value="">Year</option>
                                <option value="">Month</option>
                                <option value="">Day</option>
                                 <option value="">Hour</option>
                            </select>
                        </td>
                   
                           
                        
                        
                        <td> <select name="<?php echo $i;?>SPONSOR" id="SPONSOR<?php echo $i;?>" class="edu_course">
                                <option value="">Self</option>
                                <option value="">Company</option>
                                
                            </select></td>
                        <td><input type="text" name="<?php echo $i;?>training_institution" id="training_institution<?php echo $i;?>" class="form-control"></td>
                        <td><input type="text" name="<?php echo $i;?>training_year" id="training_year<?php echo $i;?>" style="width:60px !important;" class="form-control" onfocus = "tooltip.pop(this, 'Training Completed Year.');"></td>
                      
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
        
        <table id="education_tab_table_exp" class="table table-bordered" style="width:757px; margin-bottom: 10px !important;border: 1px solid rgb(216, 216, 216); padding: 6px; background-color: white; box-shadow: 10px 7px 8px rgb(167, 167, 167);">
                <thead style="width:757px;float: left;display: block;">
                <tr>
                    
                    <th width="240"><?php echo  $Getlabelname->Get_Labelname_Fnc("258");?></th>
                    
                    <th width="70"><?php echo  $Getlabelname->Get_Labelname_Fnc("255");?> </th>
                    <th width="133"></th>
<!--                    <th width="60">Company</th>-->
                    <th width="240"><?php echo  $Getlabelname->Get_Labelname_Fnc("256");?></th>
                    <th width="60"><?php echo  $Getlabelname->Get_Labelname_Fnc("252");?></th>
                </tr>
                </thead>
            <tbody style="width:757px;  height:109px; float: left;  overflow-y: auto;
    ">
                <?php 
                $exp_TotRowCount=5;
                for($i=1; $i<$exp_TotRowCount; $i++) { ?>
                    <tr>
                        <td><input type="text" name="<?php echo $i;?>exp_industry" id="industry<?php echo $i;?>" class="form-control"></td>
                     
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
                        <td><input type="text" id="exp_cur_pos<?php echo $i;?>" name="<?php echo $i;?>exp_cur_pos" class="form-control"></td>
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
  
    <table id="education_tab_table_Dependent" class="table table-bordered" style="width:550px; margin-bottom: 10px !important;border: 1px solid rgb(216, 216, 216); padding: 6px; background-color: white; box-shadow: 10px 7px 8px rgb(167, 167, 167);">
                 <thead style="width:550px;float: left; display: block;">
                <tr>
                    <th  width="200"><?php echo  $Getlabelname->Get_Labelname_Fnc("260");?></th>
                    <th width="133"><?php echo  $Getlabelname->Get_Labelname_Fnc("261");?></th>
                    <th width="85"><?php echo  $Getlabelname->Get_Labelname_Fnc("126");?></th>
                    <th width="85"><?php echo  $Getlabelname->Get_Labelname_Fnc("127");?></th>
                </tr>
                </thead>
               <tbody style="width:550px;  height:130px;float: left;  overflow-y: auto;">
                <?php for($i=1; $i<5; $i++) { ?>
                    <tr>
                         <td><input type="text" name="[<?php echo $i;?>]dependent_name" id="dependent_name<?php echo $i;?>" class="form-control"></td>
                         <td><select name="[<?php echo $i;?>]dependent_relation" id="dependent_relation<?php echo $i;?>" class="edu_level">
                               <option value="">--select--</option>
                                <option value="">abc</option>
                            </select></td>
                        <td>
                            <?php 
          
            $this->widget('zii.widgets.jui.CJuiDatePicker',array("name"=>"[$i]dependent_wef",'value'=>$today,
                                        'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                        'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"dependent_wef$i",'class'=>'wef','placeholder'=>'dd/mm/yy','rel'=>'WEF')));?></td>

                        </td>
                        <td>
                            <?php 
          
            $this->widget('zii.widgets.jui.CJuiDatePicker',array("name"=>"[$i]dependent_wet",'value'=>"",
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
              <?php
              $loop_c=4;
              ?>
                    <input id="Dependent_TotRowCount" type="hidden" name="Dependent_TotRowCount" value="<?php echo $loop_c;?>">
                </span>
              </td>
                    
             </tr>
            </table>
    </div>
       
     <div id="tabs-6">
        
    <table id="education_tab_table_nominee" class="table table-bordered" style="width:870px; margin-bottom: 10px !important;border: 1px solid rgb(216, 216, 216); padding: 6px; background-color: white; box-shadow: 10px 7px 8px rgb(167, 167, 167);">
                <thead style="width:870px;float: left; display: block;">
                <tr>
                    <th  width="240"><?php echo  $Getlabelname->Get_Labelname_Fnc("262");?></th>
                    <th width="133"><?php echo  $Getlabelname->Get_Labelname_Fnc("261");?></th>
                    <th width="80"><?php echo  $Getlabelname->Get_Labelname_Fnc("263");?></th>
                     <th width="240"><?php echo  $Getlabelname->Get_Labelname_Fnc("264");?></th>
                    <th width="85"><?php echo  $Getlabelname->Get_Labelname_Fnc("126");?></th>
                    <th width="85"><?php echo  $Getlabelname->Get_Labelname_Fnc("127");?></th>
                </tr>
                </thead>
                <tbody style="width:870px;  height:135px;float: left;  overflow-y: auto;">
                <?php for($i=1; $i<5; $i++) { ?>
                    <tr>
                        <td><input type="text" name="[<?php echo $i;?>]nominee_name" id="nominee_name<?php echo $i;?>" class="form-control"></td>
                         <td><select name="[<?php echo $i;?>]nominee_relation" id="nominee_relation<?php echo $i;?>" class="edu_level">
                               <option value="">--select--</option>
                                <option value="">abc</option>
                            </select></td>
                        <td><input type="text" name="[<?php echo $i;?>]nominee_share" id="nominee_share<?php echo $i;?>" style="width:80px !important;"class="form-control"></td>
                         <td><input type="text" name="[<?php echo $i;?>]nominee_sharepercentage" id="nominee_sharepercentage<?php echo $i;?>"class="form-control"></td>
                         <td>
                            <?php 
          
            $this->widget('zii.widgets.jui.CJuiDatePicker',array("name"=>"[$i]nominee_wef",'value'=>$today,
                                        'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                        'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"nominee_wef$i",'class'=>'wef','placeholder'=>'dd/mm/yy','rel'=>'WEF')));?></td>

                        </td>
                        <td>
                            <?php 
          
            $this->widget('zii.widgets.jui.CJuiDatePicker',array("name"=>"[$i]nominee_wet",'value'=>"",
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
              $loop_c=4;
              ?>
                    <input id="nominee_TotRowCount" type="hidden" name="nominee_TotRowCount" value="<?php echo $loop_c;?>">
                </span>
              </td>
             </tr>
            </table>
    </div> 
        
    <div id="tabs-7">
       
    <table id="education_tab_table_nextofkin" class="table table-bordered" style="width:550px; margin-bottom: 10px !important;border: 1px solid rgb(216, 216, 216); padding: 6px; background-color: white; box-shadow: 10px 7px 8px rgb(167, 167, 167);">
                 <thead style="width:550px;float: left; display: block;">
                <tr>
                    <th  width="200"><?php echo  $Getlabelname->Get_Labelname_Fnc("267");?></th>
                    <th width="133"><?php echo  $Getlabelname->Get_Labelname_Fnc("261");?></th>
                    <th width="85"><?php echo  $Getlabelname->Get_Labelname_Fnc("126");?></th>
                    <th width="85"><?php echo  $Getlabelname->Get_Labelname_Fnc("127");?></th>
                </tr>
                </thead>
                <tbody style="width:550px;  height:135px;float: left;  overflow-y: auto;">
                <?php for($i=1; $i<5; $i++) { ?>
                    <tr>
                         <td><input type="text" name="[<?php echo $i;?>]nextofkin_name" id="nextofkin_name<?php echo $i;?>" class="form-control"></td>
                            
                             <td><select name="[<?php echo $i;?>]nextofkin_relation" id="nextofkin_relation<?php echo $i;?>" class="edu_level">
                               <option value="">--select--</option>
                                <option value="">abc</option>
                            </select></td>
                        <td>
                            <?php 
          
            $this->widget('zii.widgets.jui.CJuiDatePicker',array("name"=>"[$i]nextofkin_wef",'value'=>$today,
                                        'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                        'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"nextofkin_wef$i",'class'=>'wef','placeholder'=>'dd/mm/yy','rel'=>'WEF')));?></td>

                        </td>
                        <td>
                            <?php 
          
            $this->widget('zii.widgets.jui.CJuiDatePicker',array("name"=>"[$i]nextofkin_wet",'value'=>"",
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
              $loop_c=4;
              ?>
                    <input id="nextofkin_TotRowCount" type="hidden" name="nextofkin_TotRowCount" value="<?php echo $loop_c;?>">
                </span>
              </td>       
             </tr>
            </table>
    </div> 
        
    
    
    <div id="tabs-8">
              <table style="margin-bottom:0px; width: 75%;height:50px; background-color: #F8F8F8">
                <tr>
                  
                     <td width="auto" style=" background-color:#F8F8F8 ">
                         <table id="address_table" style="margin-bottom:0px !important; padding: 20px !important; height:100px !important;border:1 px !important; border-radius: 30px !important;">
                           <tr>
                                <td class="label_width_contact"><b><?php echo  $Getlabelname->Get_Labelname_Fnc("123");?></b></td><td>
                                     <input type="text" autocomplete="on"  value="<?php ?>" class="contacttext" id="Branch" name="Branch">
<!--                                    <input type="text" name="branch" class="contacttext">-->
                                </td>
                                <td class="label_width_contact"><b><?php echo  $Getlabelname->Get_Labelname_Fnc("194");?></b></td><td>
                                    
                                  
                                
                                    
                                    <input type="text" name="accno" class="contacttext">
                            </tr> 
                              <tr id="addbranch" class="spaceUnder"><td></td> <td class="padding-left-text-left-small"><div class="margintxt"  id="Addinput" contenteditable  ></div></td></tr>             
                           <tr>
                               <td class="label_width_contact"></td><td>
<!--                                   <input type="text" name="fax" class="contacttext">-->
                             <input type="text" name="add2" id="labelbank" class="contacttext">
                               </td>
                                <td class="label_width_contact"><b><?php echo  $Getlabelname->Get_Labelname_Fnc("195");?></b></td><td><input type="text" name="accowner" id="accowner" class="contacttext"></td>      
                                    
                            </tr>
                            <tr>
                               
                                <td class="label_width_contact"><b><?php echo  $Getlabelname->Get_Labelname_Fnc("160");?></b></td><td>
                                     <?php               
                 
                            $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                                    'model'=>$model,
                                    'id'=>"currency",
                                    'name'=>"currency", 
                                    'value'=>'',
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
                                        
                                       
                                    ),
                                ));                
                 
                 ?>
<!--                                    <input type="text" name="currency" id="currency" class="contacttext"></td>-->
                                  <td class="label_width_contact"><b><?php echo  $Getlabelname->Get_Labelname_Fnc("193");?></b></td><td>
                                        <?php               
                 
                            $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                                    'model'=>$model,
                                    'id'=>"Account_Type",
                                    'name'=>"AccountType", 
                                    'value'=>'',
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
                                       
                                    ),
                                ));                
                 
                 ?>
<!--                                      <input type="text" name="acctype" class="contacttext"></td>-->
                                 
                            </tr>
                            <tr>
                               
                               
                                  
                                 <td class="label_width_contact"></td><td><b><span class="contactdate"><?php echo  $Getlabelname->Get_Labelname_Fnc("126");?></span></b><?php echo $form->textField($model,'DOB',array('id'=>"wef_bank",'class'=>'wef_datepicker','placeholder'=>'dd/mm/yy')); ?>
                                  <b><span class="contactdate"><?php echo  $Getlabelname->Get_Labelname_Fnc("127");?></span></b><?php echo $form->textField($model,'DOB',array('id'=>"wet_bank",'class'=>'wet_datepicker','placeholder'=>'dd/mm/yy')); ?></td>
                               <td></td><td><span class="createbank" id="dialogBtn" onmouseover = "tooltip.pop(this, 'For Creating Bank.');" >Create Bank</span></td>
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
        </table>

            
    </div> 
    <div id="tabs-10">
        <table id="education_tab_table_service" class="table table-bordered" style="width:425px; margin-bottom: 10px !important;border: 1px solid rgb(216, 216, 216); padding: 6px; background-color: white; box-shadow: 10px 7px 8px rgb(167, 167, 167);">
                 <thead style="width:425px;float: left; display: block;">
                <tr>
                    <th width="221"><?php echo  $Getlabelname->Get_Labelname_Fnc("274");?></th>
                    <th  width="85"><?php echo  $Getlabelname->Get_Labelname_Fnc("126");?></th>
                    <th width="85"><?php echo  $Getlabelname->Get_Labelname_Fnc("127");?></th>
                </tr>
                </thead>
                  <tbody style="width:425px;  height:130px;float: left;  overflow-y: auto;">
                <?php for($i=1; $i<5; $i++) { ?>
                    <tr>
                        <td><select name="[<?php echo $i;?>]service_name"  id="service_name<?php echo $i;?>" class="form-control">
                                <option value="1">Manager</option>
                                <option value="1">Staff</option>
                              
                            </select></td>
                       
                        <td>
                            <?php 
          
            $this->widget('zii.widgets.jui.CJuiDatePicker',array("name"=>"[$i]service_wef",'value'=>"",
                                        'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                        'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"service_wef-$i",'class'=>'wef')));?></td>

                        </td>
                        <td>
                            <?php 
          
            $this->widget('zii.widgets.jui.CJuiDatePicker',array("name"=>"[$i]service_wet",'value'=>"",
                                        'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                        'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"service_wet$i",'class'=>'wet','placeholder'=>'dd/mm/yy','rel'=>'WEF')));?>
                        </td>
                    </tr>
                <?php } ?>
                    <tr>
              
              <td colspan="3"><span><img  src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/icon_plus.png"   
           title="Add Rows" rel="education_tab_table_service+service_TotRowCount" align="right" width="16" height="16"  alt="" style="cursor: pointer;" class="plus"/>
              <?php
              $loop_c=4;
              ?>
                    <input id="nextofkin_TotRowCount" type="hidden" name="service_TotRowCount" value="<?php echo $loop_c;?>">
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
              $count = count($getpersonnelflex);
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
         
             
            $popid=array();
            $popid[$key]=$record->DESCRIPTION;
            $wef[$key]=$today;
            
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
              <input type="hidden" name="totcnt" id="totcnt" value="<?php echo $count;?>">   
              <input type="hidden" name="<?php echo $key;?>flexid" id="flexid<?php echo $key;?>" value="<?php echo $popid[$key];?>">
              <input type="hidden" name="<?php echo $key;?>flex_up_id" id="flex_up_id<?php echo $key;?>" value="<?php //echo $flex_up_id[$key];?>">   

             <td>
                 <input type="text" name="[$key]NAME" id="NAME"$key  value="<?php //echo $flex_value_up[$key];?>" class="contacttext">
            </td>
           <td><?php 
          
            $this->widget('zii.widgets.jui.CJuiDatePicker',array("name"=>"[$key]WEF",'value'=>"",
                                        'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                        'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"WEF$key",'class'=>'WEF','style'=>"width:92px;height:25px",'rel'=>'WEF')));?></td>
           <td><?php $this->widget('zii.widgets.jui.CJuiDatePicker',array("name"=>"[$key]WET",'value'=>"" ,
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
<table style="margin-bottom: 5px; width:1170px; ">

    <tr>
        <td colspan="6" id="table_bottom_bg" style="text-align: right; padding-right: 10px;  padding-bottom: 5px;  padding-top: 4px; ">
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"submit",'size'=>'medium', 'label'=>$model->isNewRecord ? "Save" : "Save",'id'=>'save','icon'=>'icon-hdd')); ?>
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"reset",'size'=>'medium','icon'=>'icon-refresh', 'label'=>'Clear')); ?>
            <?php //echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>

        </td>
    </tr>
</table>
<?php $this->endWidget(); ?>

<!-- form -->