<?php
/* @var $this Personnel_VController */
/* @var $model Personnel_V */
/* @var $form CActiveForm */

/////////////////only need this code for enabling fancy box /////////////

//$config = array( 
////'easingEnabled'=>TRUE
//   // 'onStart'=>'js: alert("sdj sdsjdskdjskd")',
//   // 'model'=>false,
//    'hideOnOverlayClick'=>FALSE,
//    'transitionIn'=>'elastic',
//    'transitionOut'=>'elastic',
//    //'afterClose'=>'js:alert($("#GetAllPersonTable").text())',
//    'ajax'=> array('complete'=>'js:function(jqXHR, textStatus) {  
//        $(".testclickclass").click(function(){
//        var TrimmedText=$(this).text();
//        TrimmedText =$.trim(TrimmedText);
//        $("#PERSONAL_ID").val(TrimmedText);
//        $.fancybox.close();
//        
//});
//
//        $("#serch_text_id").keyup(function(){
//        //alert("keyuped");
//              $.ajax({
//                url: "GetAllPersonOnSearch",
//                type: "post",
//                data: { term : $("#serch_text_id").val() },
//                success: function(data){
//                    //alert(data);
//                    $("#GetAllPersonTableOuter").html(data);
//                },
//                complete: function(jqXHR, textStatus) {  
//                        $(".testclickclass").click(function(){
//                        var TrimmedText=$(this).text();
//                        TrimmedText =$.trim(TrimmedText);
//                        $("#PERSONAL_ID").val(TrimmedText);
//                        $.fancybox.close();
//                        });
//                        },
//                error:function(){
//                    alert("failure");
//                   // $("#result").html("There is error while submit");
//                }
//                    });
//        });
//        
//
//    }'),
//);
//$this->widget('application.extensions.fancybox.EFancyBox', array(
//'target'=>'#getaction',
//'config'=>$config,
//      
//    ));
	
	
	
/////////////////only need this code for enabling fancy box /////////////

?>




<script>
    $(document).ready(function(){
    $('label[for="Personnel_V_ACTIVE"]').hide();
	$('label[for="Personnel_V_MARRIED"]').hide();
	$('label[for="Personnel_V_VERIFIED"]').hide();
    $("#datepicker").mask("99/99/9999");
	//$('#datepicker').mask("99/99/9999",{placeholder:"-"}); 
    $( "#datepicker" ).datepicker({
    changeMonth: true,
    changeYear: true
    });
    $( "#datepicker" ).datepicker( "option", "showAnim", "bounce" );
    $( "#datepicker" ).datepicker( "option", "dateFormat", "dd-mm-yy" );
  $(function() {
    $( "#tabs" ).tabs({show: { effect: "fade", duration: 800 }});
 $( "#accordion" ).accordion({
      collapsible: true
    });
     //collapsible: true
	 
	 //asign value in datepicker field for editing page
	 //if($( "#datepicker" ).val()!="") {
	 <?php  if($model->DOB<>"") {
	 
	 list( $day,$month,$year) = split('[/.-]', $model->DOB); 

                switch ($month) {
                    case JAN: $month="01"; break; case FEB: $month="02"; break;
                    case MAR: $month="03"; break; case APR: $month="04"; break;
                    case MAY: $month="05"; break; case JUN: $month="06"; break;
                    case JUL: $month="07"; break; case AUG: $month="08"; break;
                    case SEP: $month="09"; break; case OCT: $month="10"; break;
                    case NOV: $month="11"; break; case DEC: $month="12"; break;
                    default:
                        break;
                }
                //echo "Month: $month; Day: $day; Year: $year<br />\n";
               $pdDate= $day."-".$month."-".$year;
	?>
	 $("#datepicker").datepicker("setDate","<?php echo $pdDate; ?>");
	 
	 //var get_date = "<?php //echo $model->DOB; ?>";
//	 if(get_date!="") {
//	 $( "#datepicker" ).attr("value","<?php //echo $model->DOB; ?>");
//	 };
	 //alert($( "#datepicker" ).val());
	 <?php } ?>
	 //$( "#datepicker" ).attr("value",$( "#datepicker" ).val());
//	 }
	 
	 
  });
  
  $("#upload_b").on("click", function () {
    $("#PARTY_IMAGE_IMAGE").click(); 
	return false;   
});
  
  
        
    });
    </script>
<style>
    #datepicker { width: 97px;}
    .ui-tabs .ui-tabs-nav li.ui-tabs-active { background-color: rgb(44, 119, 67)}
/*    .ui-tabs .ui-tabs-nav li .ui-tabs-active:hover {background: red;}*/
    .ui-tabs .ui-tabs-nav li.ui-tabs-active :hover { background-color: rgb(107, 169, 199); !important;}
	.ui-state-default :hover {background-color: rgb(107, 169, 199);;}
	.ui-tabs-active :hover {color : white !important}
	.ui-tabs-active { background-color: rgb(77, 133, 94) !important;}
    .ui-tabs .ui-tabs-panel { padding: 0px !important;}
    .ui-tabs { padding: 0px !important }
    .ui-tabs .ui-tabs-nav { padding: 0px !important; border: 1px solid #F8F3F3 !important; }
    .ui-tabs .ui-tabs-nav li.ui-tabs-active a { background-color: rgb(107, 169, 199);;}
    .ui-tabs .ui-tabs-nav li.ui-tabs-active a:hover { background-color: rgb(107, 169, 199);;}
    .ui-tabs .ui-tabs-nav li a, .ui-tabs-collapsible .ui-tabs-nav li.ui-tabs-active a {color: black; font-weight:bold}
    .ui-tabs .ui-tabs-nav li a, .ui-tabs-collapsible .ui-tabs-nav li.ui-tabs-active a:hover {color: black; font-weight:bold}
	.ui-tabs .ui-tabs-nav li a { color: black; background-color:rgb(213, 239, 252);}
	
	.ui-tabs .ui-tabs-nav li a: hover { background-color:#FF0000; !important}
	
	.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default { background-color: rgb(44, 119, 67) }
    /*fieldset { */
        /*border: 1px solid #E8E8E8;*/
        /*box-shadow: 0px 0px 6px #000020; */
        /*border: 5%;*/
        /*background-color: rgb(228, 228, 228);*/
    /*}*/

    legend {
      padding: 11px 10px !important;
      border:1px solid green !important;
      color:white !important;
      font-weight: bold;
      background-color: blue;
      border-radius:10px;
      font-size:90% !important;
      text-align:right !important;
      line-height: 0px !important;
      width: auto;
       margin-bottom: 0px;
       display:none;
      }
    #Reg_Outer_Div {
        width: 100%;
        height: auto;
/*        min-height: 400px;*/
        float: left;
		box-shadow: 0px 0px 7px 1px rgb(9, 1, 1);
       
    }
    
    #Reg_Outer_Div table {
        margin-bottom:0px !important ;
    }
    
    #top_right_table tr{
	
        
    }
	#top_right_table td { padding:3px; margin:0px; border-bottom: 1px solid #f3f3f3; }
	#register_top_table_fixed {
	background-color:white;
        margin-left: 10px;
        box-shadow: 10px 7px 8px rgb(167, 167, 167);

	}
    .toggle-button span.primary, .toggle-button span.labelLeft {

        color: #fefefe;
        background: #238803;
        background-image: -webkit-gradient(linear, 50% 100%, 50% 0%, color-stop(0%, #238803), color-stop(100%, #238803));
        background-image: -webkit-linear-gradient(bottom, #238803, #238803);
        background-image: -moz-linear-gradient(bottom, #238803, #238803);
        background-image: -o-linear-gradient(bottom, #238803, #238803);
        background-image: linear-gradient(bottom, #238803, #238803);
    }
   .toggle-button span.labelRight { 
    color: white;
    background-image: -webkit-gradient(linear, 50% 100%, 50% 0%, color-stop(0%, #E60707), color-stop(100%, #F81919));
    background-image: -webkit-linear-gradient(bottom, #E60707, #F81919);
    background-image: -moz-linear-gradient(bottom, #E60707, #F81919);
    background-image: -o-linear-gradient(bottom, #E60707, #F81919);
    background-image: linear-gradient(bottom, #E60707, #F81919);

}
#Reg_Main_Table td { padding:3px; margin:0px;}
#Reg_Main_Table { background-color:#f3f3f3; padding-top:5px;}
/*.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default { height: 34px; background-color: white}*/
/*#Reg_Main_Table input { width:240px; }*/
.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {
background-color: rgb(228, 228, 228);
padding-left: 26px;
padding-top: 6px; padding-bottom:6px;
}
.ui-state-hover { }
#education_tab_table input, textarea, .uneditable-input {width:200px}
    form { float: left}
    #feedbackform { padding-bottom: 20px; background-color: rgb(241, 241, 241);}
</style>
<?php

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
?>
<script type="text/javascript">

    var myform=new formtowizard({
        formid: 'feedbackform',
        persistsection: true,
        revealfx: ['slide', 500]
    })

</script>
<form id="feedbackform" style="float: left; width: 100%;">

    <fieldset class="sectionwrap">
        <legend>Basic Information</legend>
        <table id="register_top_table_fixed" style="width:100%" class="items table table-bordered">
            <tbody><tr>
                <td width="20%" style="padding:10px; text-align:center; background-color:#6BA9C7;">
                    <div class="testclass1"></div>
                    <!--                            <input type="file" name="img-upload" value="upload">-->

                    <input id="ytPARTY_IMAGE_IMAGE" type="hidden" value="" name="PARTY_IMAGE[IMAGE]"><input name="PARTY_IMAGE[IMAGE]" id="PARTY_IMAGE_IMAGE" type="file">							<button id="upload_b" class="btn btn-primary btn-small" data-loading-text="Loading...">Upload <i class="icon-white icon-camera "></i></button>
                </td>
                <td style="padding:6px">

                    <table id="top_right_table" style=" margin-bottom: 0px !important">
                        <tbody><tr>
                            <td>
                                <label for="Personnel_V_PERSONAL_ID" class="required">Personal ID <span class="required">*</span></label>                            </td>
                            <td>
                                <input name="Personnel_V[PERSONAL_ID]" id="Personnel_V_PERSONAL_ID" type="text" maxlength="30">                                                                                                                            </td>
                            <td>
                                <label for="Personnel_V_ACTIVE" class="required" style="display: none;">Active <span class="required">*</span></label>                            <label for="Personnel_V_ACTIVE1" class="required" style="display: block; ">Is Personnel Active? <span class="required">*</span></label>
                            </td>
                            <td>


                                <table style="margin-bottom:0px;float:left; width: auto;">
                                    <tbody><tr>
                                        <td style="border-left:0px; padding:0px ;border-bottom:0px;">
                                            <label for="Personnel_V_ACTIVE" class="required" style="display: none;">Active <span class="required">*</span></label><div id="wrapper-Personnel_V_ACTIVE" class="toggle-button" style="width: 100px; height: 25px;"><input id="ytPersonnel_V_ACTIVE" type="hidden" value="0" name="Personnel_V[ACTIVE]"><div style="left: -50%; width: 150px;"><input htmloptions="" name="Personnel_V[ACTIVE]" id="Personnel_V_ACTIVE" value="1" type="checkbox"><span class="labelLeft primary" style="width: 50px; height: 25px; line-height: 25px;">Yes</span><label for="ytPersonnel_V_ACTIVE" style="width: 50px; height: 25px;"></label><span class="labelRight" style="width: 50px; height: 25px; line-height: 25px;">No</span></div></div>
                                        </td>
                                        <td style="border-left:none; border-bottom:none; padding:0px; padding-left:11px; padding-right:11px;">
                                            <label for="Personnel_V_VERIFIED1" class="required" style="display: block; ">Is Data Verified?<span class="required">*</span></label>
                                        </td>
                                        <td style="padding-top: 0px; border-bottom: none; padding-left: 10px;">
                                            <label for="Personnel_V_VERIFIED" class="required" style="display: none;">Verified <span class="required">*</span></label><div id="wrapper-Personnel_V_VERIFIED" class="toggle-button" style="width: 100px; height: 25px;"><input id="ytPersonnel_V_VERIFIED" type="hidden" value="0" name="Personnel_V[VERIFIED]"><div style="left: -50%; width: 150px;"><input name="Personnel_V[VERIFIED]" id="Personnel_V_VERIFIED" value="1" type="checkbox"><span class="labelLeft primary" style="width: 50px; height: 25px; line-height: 25px;">Yes</span><label for="ytPersonnel_V_VERIFIED" style="width: 50px; height: 25px;"></label><span class="labelRight" style="width: 50px; height: 25px; line-height: 25px;">No</span></div></div>
                                        </td></tr>
                                    </tbody></table>


                            </td>

                        </tr>





                        <tr>
                            <td><label for="Personnel_V_SALUTATION" class="required">Salutation <span class="required">*</span></label></td>
                            <td>
                                <input size="30" maxlength="30" name="Personnel_V[SALUTATION]" id="Personnel_V_SALUTATION" type="text">                             </td>
                            <td><label for="Personnel_V_FIRST_NAME" class="required">First Name <span class="required">*</span></label></td>
                            <td><input size="50" maxlength="50" name="Personnel_V[FIRST_NAME]" id="Personnel_V_FIRST_NAME" type="text">                                </td>


                        </tr>
                        <tr>
                            <td><label for="Personnel_V_MIDDILE_NAME">Middile Name</label></td>
                            <td><input size="50" maxlength="50" name="Personnel_V[MIDDILE_NAME]" id="Personnel_V_MIDDILE_NAME" type="text">                                </td>
                            <td><label for="Personnel_V_LAST_NAME">Last Name</label></td>
                            <td><input size="50" maxlength="50" name="Personnel_V[LAST_NAME]" id="Personnel_V_LAST_NAME" type="text">                                </td>


                        </tr>
                        <tr>
                            <td><label for="Personnel_V_PREFERED_NAME" class="required">Prefered Name <span class="required">*</span></label></td>
                            <td><input size="60" maxlength="100" name="Personnel_V[PREFERED_NAME]" id="Personnel_V_PREFERED_NAME" type="text">                                </td>
                            <td><label for="Personnel_V_ALTERNATE_NAME">Alternate Name</label></td>
                            <td><input size="60" maxlength="100" name="Personnel_V[ALTERNATE_NAME]" id="Personnel_V_ALTERNATE_NAME" type="text">                                </td>

                        </tr>
                        <tr>
                            <td><label for="Personnel_V_DOB">Date Of Birth</label></td>
                            <td><input id="datepicker" placeholder="dd/mm/yy" name="Personnel_V[DOB]" type="text" class="hasDatepicker">                                                                <!--<span style="width:auto; margin-left: 10px; color: red; text-shadow: 1px 0px 0px rgb(163, 155, 155); font-size:11px">Date Format: dd/mm/yy </span>-->
                            </td>
                            <td><label for="Personnel_V_GENDER">Gender</label></td>
                            <td>
                                <select name="Personnel_V[GENDER]" id="Personnel_V_GENDER">
                                    <option value="">--Please Select--</option>
                                    <option value="T">Transgender</option>
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                </select>

                            </td>

                        </tr>
                        <tr>
                            <td><label for="Personnel_V_RELIGION">Religion</label></td>
                            <td>                                <select name="Personnel_V[RELIGION]" id="Personnel_V_RELIGION">
                                    <option value="">--Please Select--</option>
                                    <option value="H">Hindu</option>
                                    <option value="M">Muslim</option>
                                </select>                                </td>
                            <td><label for="Personnel_V_BLOOD_GROUP">Blood Group</label></td>
                            <td>
                                <select name="Personnel_V[BLOOD_GROUP]" id="Personnel_V_BLOOD_GROUP">
                                    <option value="">--Please Select--</option>
                                    <option value="O+">O+</option>
                                    <option value="A-">A-</option>
                                    <option value="A+">A+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="B-">B-</option>
                                    <option value="B+">B+</option>
                                    <option value="O-">O-</option>
                                </select>                                                                </td>

                        </tr>
                        <tr>
                            <td><label for="Personnel_V_SUBCAST">Subcast</label></td>
                            <td>                                <select name="Personnel_V[SUBCAST]" id="Personnel_V_SUBCAST">
                                    <option value="">--Please Select--</option>
                                    <option value="Thiyya">THIYYA</option>
                                    <option value="Saliya">SALIYA</option>
                                </select>                                </td>

                            <td><label for="Personnel_V_NATIONALITY" class="required">Nationality <span class="required">*</span></label></td>
                            <td> <select name="Personnel_V[NATIONALITY]" id="Personnel_V_NATIONALITY">
                                    <option value="">--Please Select--</option>
                                    <option value="AN">ANDORRAN</option>
                                    <option value="AR">ARAB</option>
                                    <option value="AF">AFGHAN</option>
                                    <option value="CC">CHINEESE</option>
                                    <option value="US">AMERICAN</option>
                                    <option value="Z">ZAMBIA</option>
                                    <option value="KEN">KENYAN</option>
                                    <option value="UGA">UGANDAN</option>
                                    <option value="TAZ">TANZANIAN</option>
                                    <option value="SOM">SOMALIAN</option>
                                    <option value="ETH">ETHIOPIAN</option>
                                    <option value="ZAM">ZAMBIAN</option>
                                    <option value="FRA">FRENCH</option>
                                    <option value="SUD">SUDANESE</option>
                                    <option value="MAU">MAURICIAN</option>
                                    <option value="BRI">BRITISH</option>
                                    <option value="AME">AMERICAN</option>
                                    <option value="GER">GERMAN</option>
                                    <option value="SA">SOUTH AFRICAN</option>
                                    <option value="MAL">MALAWIAN</option>
                                    <option value="ZIM">ZIMBABWEAN</option>
                                    <option value="RWA">RWANDESE</option>
                                    <option value="BUR">BURUNDIAN</option>
                                    <option value="NIG">NIGERIAN</option>
                                    <option value="GHA">GHANAIAN</option>
                                    <option value="ITL">ITALIAN</option>
                                    <option value="PAK">PAKISTAN</option>
                                    <option value="GOA">GOAN</option>
                                    <option value="IND">INDIAN</option>
                                    <option value="ARG">ARGENTINIAN</option>
                                    <option value="AUS">AUSTRALIAN</option>
                                    <option value="BRA">BRAZILIAN</option>
                                    <option value="LBN">LEBANESE</option>
                                    <option value="MOR">MOROCCAN</option>
                                    <option value="TUN">TUNISIAN</option>
                                    <option value="AUT">AUSTRIAN</option>
                                    <option value="RUS">RUSSIAN</option>
                                    <option value="1">BRITISH</option>
                                </select>                                                                </td>
                            <!--------->
                        </tr>



                        <!--new created tr-->
                        <tr>
                            <td></td><td></td>
                            <td>
                                <label for="Personnel_V_MARRIED1" class="required" style="display: block; ">Are You Married?<span class="required">*</span></label>
                            </td>
                            <td>
                                <label for="Personnel_V_MARRIED" class="required" style="display: none;">Married <span class="required">*</span></label><div id="wrapper-Personnel_V_MARRIED" class="toggle-button" style="width: 100px; height: 25px;"><input id="ytPersonnel_V_MARRIED" type="hidden" value="0" name="Personnel_V[MARRIED]"><div style="left: -50%; width: 150px;"><input name="Personnel_V[MARRIED]" id="Personnel_V_MARRIED" value="1" type="checkbox"><span class="labelLeft primary" style="width: 50px; height: 25px; line-height: 25px;">Yes</span><label for="ytPersonnel_V_MARRIED" style="width: 50px; height: 25px;"></label><span class="labelRight" style="width: 50px; height: 25px; line-height: 25px;">No</span></div></div>
                            </td>
                        </tr>
                        <!--new created tr end -->

                        </tbody></table>


                </td>
            </tr>
            <!--                    <tr>
                                    <td>sada</td>
                                    <td>sad</td>
                                </tr>-->
            </tbody></table>
    </fieldset>
    <fieldset class="sectionwrap">
        <legend>Contact</legend>
        <div id="accordion">
        <h3>Permanent Address</h3>
        <div>
            <table style="margin-bottom:0px; width: 100%; background-color: #F8F8F8">
                <tr>
                    <td width="auto">
                        <table id="address_table" style="margin-bottom:0px; padding: 6px; border: 1px solid #C8C8C8; ">
                            <tr>
                                <td colspan="2" style="text-align:center"><b>Address</b></td>
                            </tr>
                            <tr>
                                <td class="label_width_contact"><b>Line 1</b></td>
                                <td><a  href="#section1" onclick="return Open_Message_box_selected_area();"><input type="text" name="add1"></a></td>
                            </tr>
                            <tr>
                                <td class="label_width_contact"><b>Line 2</b></td>
                                <td><input type="text" name="add2"></td>
                            </tr>
                            <tr>
                                <td class="label_width_contact"><b>Line 3</b></td>
                                <td><input type="text" name="add3"></td>
                            </tr>
                            <tr>
                                <td class="label_width_contact"><b>City</b></td>
                                <td><input type="text" name="city"></td>
                            </tr>
                            <tr>
                                <td class="label_width_contact"><b>Country</b></td>
                                <td><input type="text" name="country"></td>
                            </tr>
                        </table>
                    </td>
                    <td style="width:74%; vertical-align: top">
                        <table id="second_table_contact" border="1" style="margin-bottom:0px;">
                            <tr>
                                <td class="label_width_contact"><b>Email</b></td><td><input type="text" name="email"></td>
                                <td class="label_width_contact"><b>Fax</b></td><td><input type="text" name="fax"></td>
                            </tr>
                            <tr>
                                <td class="label_width_contact"><b>Mobile</b></td><td><input type="text" name="Mobile_general"></td>
                                <td class="label_width_contact"><b>URL</b></td><td><input type="text" name="url">
                            </tr>

                            <tr>
                                <td class="label_width_contact"><b>With Effected From</b></td><td><input type="text" name="WEF"  style="width:100px"></td>
                                <td class="label_width_contact"><b>With Effected To</b></td><td><input type="text" name="WET" style="width:100px"></td>

                            </tr>
                        </table>

                    </td>
                </tr>

            </table>

        </div>
        <h3>Residential Address</h3>
        <div>
            <table style="margin-bottom:0px; width: 100%; background-color: #F8F8F8">
                <tr>
                    <td width="auto">
                        <table id="address_table" style="margin-bottom:0px; padding: 6px; border: 1px solid #C8C8C8; ">
                            <tr>
                                <td colspan="2" style="text-align:center"><b>Address</b></td>
                            </tr>
                            <tr>
                                <td class="label_width_contact"><b>Line 1</b></td>
                                <td><a  href="#section3" onclick="return Open_Message_box_selected_area();"><input type="text" name="add1"></a></td>
                            </tr>
                            <tr>
                                <td class="label_width_contact"><b>Line 2</b></td>
                                <td><input type="text" name="add2"></td>
                            </tr>
                            <tr>
                                <td class="label_width_contact"><b>Line 3</b></td>
                                <td><input type="text" name="add3"></td>
                            </tr>
                            <tr>
                                <td class="label_width_contact"><b>City</b></td>
                                <td><input type="text" name="city"></td>
                            </tr>
                            <tr>
                                <td class="label_width_contact"><b>Country</b></td>
                                <td><input type="text" name="country"></td>
                            </tr>
                        </table>
                    </td>
                    <td style="width:74%; vertical-align: top">
                        <table id="second_table_contact" border="1" style="margin-bottom:0px;">
                            <tr>
                                <td class="label_width_contact"><b>Email</b></td><td><input type="text" name="email"></td>
                                <td class="label_width_contact"><b>Fax</b></td><td><input type="text" name="fax"></td>
                            </tr>
                            <tr>
                                <td class="label_width_contact"><b>Mobile</b></td><td><input type="text" name="Mobile_general"></td>
                                <td class="label_width_contact"><b>URL</b></td><td><input type="text" name="url">
                            </tr>

                            <tr>
                                <td class="label_width_contact"><b>With Effected From</b></td><td><input type="text" name="WEF" style="width:100px"></td>
                                <td class="label_width_contact"><b>With Effected To</b></td><td><input type="text" name="WET" style="width:100px"></td>

                            </tr>
                        </table>

                    </td>
                </tr>

            </table>

        </div>
        <h3>Alternative Address</h3>
        <div>
            <table style="margin-bottom:0px; width: 100%; background-color: #F8F8F8">
                <tr>
                    <td width="auto">
                        <table id="address_table" style="margin-bottom:0px; padding: 6px; border: 1px solid #C8C8C8; ">
                            <tr>
                                <td colspan="2" style="text-align:center"><b>Address</b></td>
                            </tr>
                            <tr>
                                <td class="label_width_contact"><b>Line 1</b></td>
                                <td><input type="text" name="add1"></td>
                            </tr>
                            <tr>
                                <td class="label_width_contact"><b>Line 2</b></td>
                                <td><input type="text" name="add2"></td>
                            </tr>
                            <tr>
                                <td class="label_width_contact"><b>Line 3</b></td>
                                <td><input type="text" name="add3"></td>
                            </tr>
                            <tr>
                                <td class="label_width_contact"><b>City</b></td>
                                <td><input type="text" name="city"></td>
                            </tr>
                            <tr>
                                <td class="label_width_contact"><b>Country</b></td>
                                <td><input type="text" name="country"></td>
                            </tr>
                        </table>
                    </td>
                    <td style="width:74%; vertical-align: top">
                        <table id="second_table_contact" border="1" style="margin-bottom:0px;">
                            <tr>
                                <td class="label_width_contact"><b>Email</b></td><td><input type="text" name="email"></td>
                                <td class="label_width_contact"><b>Fax</b></td><td><input type="text" name="fax"></td>
                            </tr>
                            <tr>
                                <td class="label_width_contact"><b>Mobile</b></td><td><input type="text" name="Mobile_general"></td>
                                <td class="label_width_contact"><b>URL</b></td><td><input type="text" name="url">
                            </tr>

                            <tr>
                                <td class="label_width_contact"><b>With Effected From</b></td><td><input type="text" name="WEF"  style="width:100px"></td>
                                <td class="label_width_contact"><b>With Effected To</b></td><td><input type="text" name="WET" style="width:100px"></td>

                            </tr>
                        </table>

                    </td>
                </tr>

            </table>

        </div>
        <h3>Communication Address</h3>
        <div>
            <table style="margin-bottom:0px; width: 100%; background-color: #F8F8F8">
                <tr>
                    <td width="auto">
                        <table id="address_table" style="margin-bottom:0px; padding: 6px; border: 1px solid #C8C8C8; ">
                            <tr>
                                <td colspan="2" style="text-align:center"><b>Address</b></td>
                            </tr>
                            <tr>
                                <td class="label_width_contact"><b>Line 1</b></td>
                                <td><input type="text" name="add1"></td>
                            </tr>
                            <tr>
                                <td class="label_width_contact"><b>Line 2</b></td>
                                <td><input type="text" name="add2"></td>
                            </tr>
                            <tr>
                                <td class="label_width_contact"><b>Line 3</b></td>
                                <td><input type="text" name="add3"></td>
                            </tr>
                            <tr>
                                <td class="label_width_contact"><b>City</b></td>
                                <td><input type="text" name="city"></td>
                            </tr>
                            <tr>
                                <td class="label_width_contact"><b>Country</b></td>
                                <td><input type="text" name="country"></td>
                            </tr>
                        </table>
                    </td>
                    <td style="width:74%; vertical-align: top">
                        <table id="second_table_contact" border="1" style="margin-bottom:0px;">
                            <tr>
                                <td class="label_width_contact"><b>Registered Email</b></td><td><input type="text" name="email"></td>
                                <td class="label_width_contact"><b>Fax</b></td><td><input type="text" name="fax"></td>
                            </tr>
                            <tr>
                                <td class="label_width_contact"><b>Registered Mobile</b></td><td><input type="text" name="Mobile_general"></td>
                                <td class="label_width_contact"><b>URL</b></td><td><input type="text" name="url">
                            </tr>

                            <tr>
                                <td class="label_width_contact"><b>With Effected From</b></td><td><input type="text" name="WEF" style="width:100px"></td>
                                <td class="label_width_contact"><b>With Effected To</b></td><td><input type="text" name="WET" style="width:100px"></td>

                            </tr>
                        </table>

                    </td>
                </tr>

            </table>

        </div></div>
    </fieldset>
    <fieldset class="sectionwrap">
        <legend>Education</legend>
        <div id="inside_tab_div">
            <table id="education_tab_table" class="table table-bordered" style="width:70%; margin-bottom: 10px !important;">
                <thead>
                <tr>
                    <th width="200">Level</th>
                    <th width="200">Course</th>
                    <th width="60">Grade</th>
                    <th width="60">Score</th>
                    <th>University</th>
                    <th width="60">Year Of Passing</th>

                </tr>
                </thead>
                <tbody>
                <?php for($i=1; $i<7; $i++) { ?>
                    <tr  class="copy">
                        <td>
                            <select name="edu_level"  class="form-control">
                                <option value="">Post Graduate</option>
                                <option value="">Upper Graduate</option>
                                <option value="">ITI</option>
                                <option value="">Diploma</option>
                            </select>
                        </td>
                        <td>
                            <select name="edu_level" class="form-control">
                                <option value="">MCA</option>
                                <option value="">BCA</option>
                                <option value="">BSC</option>
                                <option value="">BCOM</option>
                                <option value="">MA/ME</option>
                                <option value="">BTECH</option>
                            </select>
                        </td>
                        <td><input type="text" name="grade" class="form-control"></td>
                        <td><input type="text" name="score" class="form-control"></td>
                        <td><input type="text" name="Universiity" class="form-control"></td>
                        <td><input type="text" name="Year of Passing" class="form-control"></td>
                    </tr>
                <?php } ?>
                <tr>
                    <td colspan="6"><img id="copylink" rel=".copy" align="right"
                                         src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/plus_blue.png"
                                         title="Add Rows" width="20" height="20" style="cursor: pointer;display: block"></td>
                </tr>
                </tbody>
            </table>



        </div>
    </fieldset>
    <fieldset class="sectionwrap">
        <legend>Training</legend>
        <div id="inside_tab_div">
            <table id="education_tab_table" class="table table-bordered" style="width:70%; margin-bottom: 10px !important;">
                <thead>
                <tr>
                    <th width="200">Level</th>
                    <th width="200">Course</th>
                    <th width="60">Grade</th>
                    <th width="60">Score</th>
                    <th>Institution</th>
                    <th width="40">Year Of Passing</th>
                </tr>
                </thead>
                <tbody>
                <?php for($i=1; $i<7; $i++) { ?>
                    <tr>
                        <td>
                            <select name="edu_level" class="form-control">
                                <option value="">Post Graduate</option>
                                <option value="">Upper Graduate</option>
                                <option value="">ITI</option>
                                <option value="">Diploma</option>
                            </select>
                        </td>
                        <td>
                            <select name="edu_level" class="form-control">
                                <option value="">MCA</option>
                                <option value="">BCA</option>
                                <option value="">BSC</option>
                                <option value="">BCOM</option>
                                <option value="">MA/ME</option>
                                <option value="">BTECH</option>
                            </select>
                        </td>
                        <td><input type="text" name="grade" class="form-control"></td>
                        <td><input type="text" name="score" class="form-control"></td>
                        <td><input type="text" name="Universiity" class="form-control"></td>
                        <td><input type="text" name="Year of Passing" class="form-control"></td>
                    </tr>
                <?php } ?>

                </tbody>
            </table>
        </div>
    </fieldset>
    <fieldset class="sectionwrap">
        <legend>Experiance</legend>
        <div id="inside_tab_div">
            <table id="education_tab_table" class="table table-bordered" style="width:auto; margin-bottom: 10px !important;">
                <thead>
                <tr>
                    <th width="300">Industry</th>
                    <th width="30">Year Of Experience</th>
                    <th width="200">Last Position</th>
                </tr>
                </thead>
                <tbody>
                <?php for($i=1; $i<7; $i++) { ?>
                    <tr>
                        <td><input type="text" name="industry" class="form-control"></td>
                        <td><input type="text" name="exper" class="form-control"></td>
                        <td><input type="text" name="cur_pos" class="form-control"></td>
                    </tr>
                <?php } ?>
            </table>
        </div>

    </fieldset>

    <fieldset class="sectionwrap">
        <legend>Service Status</legend>
        <div id="inside_tab_div">
            <table id="education_tab_table" class="table table-bordered" style="width:auto; margin-bottom: 10px !important;">
                <thead>
                <tr>
                    <th  width="300">Service status</th>
                    <th width="40">With Effect From</th>
                    <th width="40">With Effect To</th>
                </tr>
                </thead>
                <tbody>
                <?php for($i=1; $i<7; $i++) { ?>
                    <tr>
                        <td><input type="text" name="industry" class="form-control"></td>
                        <td><input type="text" name="exper" class="form-control"></td>
                        <td><input type="text" name="cur_pos" class="form-control"></td>
                    </tr>
                <?php } ?>

            </table>
        </div>
    </fieldset>

    <fieldset class="sectionwrap">
        <legend>More</legend>
        <div id="inside_tab_div">
            <table id="education_tab_table" class="table table-bordered" style="width:auto; margin-bottom: 10px !important;">
                <thead>
                <tr>
                    <th width="250">Category</th>
                    <th width="250">Value</th>
                    <th  width="40">With Effect From</th>
                    <th width="40">With Effect To</th>
                </tr>
                </thead>
                <tbody>
                <?php for($i=1; $i<7; $i++) { ?>
                    <tr>
                        <td><select name="more"  class="form-control">
                                <option value="1">Category1</option>
                                <option value="1">Category2</option>
                                <option value="1">Category3</option>
                            </select></td>
                        <td><input type="text" name="valueof" class="form-control"></td>
                        <td><input type="text" name="exper" class="form-control"></td>
                        <td><input type="text" name="cur_pos" class="form-control"></td>
                    </tr>
                <?php } ?>

            </table>
        </div>
    </fieldset>

</form>


<?php
$form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'personnel--v-form',
	'enableAjaxValidation'=>false,
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
    ),
)); ?>

<div id="Reg_Outer_Div">
    
    
    <table>
        <tr>
            <td>
                <style>
                    .testclass1 
                    {
                    width: 200px;
                    height: 200px;
/*                    float: left;*/
                    margin: 0 auto;
                    border:1px solid #CACACA;
                    background-color: #E8E8E8;
            /*        margin: 5%;*/
                    border-radius: 15px;
                    background-image: url("../../images/user.png");
                    background-position: -27px 3px;
                    }
                    input[type="file"] {
                        height: 19px;
                        line-height: 9px;
/*                        margin-top:5px;*/
                        margin: 8px 25px auto;
                    }
                    select {
                        height: 22px !important;
                        padding: 1px 6px !important;
                        width: 200px;
                    }
                    #education_tab_table  select {
                        height: 22px !important;
                        padding: 1px 6px !important;
                        width: 100%;
                    }
                    
                   #PARTY_IMAGE_IMAGE { display:none;  }
                    #upload_b { text-align:center; margin-top:5px;}
					/*label { padding-left: 5px; font-weight: bold;}*/
					.required , label[for=Personnel_V_MIDDILE_NAME], label[for=Personnel_V_DOB],label[for=Personnel_V_RELIGION],label[for=Personnel_V_SUBCAST], label[for=Personnel_V_LAST_NAME], label[for=Personnel_V_ALTERNATE_NAME],  label[for=Personnel_V_GENDER],  label[for=Personnel_V_BLOOD_GROUP],  label[for=Personnel_V_FATHER], label[for=Personnel_V_MOTHER], label[for=Personnel_V_PHONE],label[for=Personnel_V_EMAIL],label[for=Personnel_V_SECONDMENT_ORG_ID] { padding-left:5px; font-weight:bold}
                    #address_table td { padding-bottom: 6px;}
                    .ui-accordion .ui-accordion-content { padding: 10px !important;}
                    #second_table_contact td { border: 1px solid #E8E8E8; }
                    .label_width_contact { width:200px; padding-left: 10px}
                    #second_table_contact td { padding: 6px;}
                    
                    .form-control {
                            display: block !important; 
                            width: 100% !important;
                            height: 22px !important;
                            padding: 6px 12px !important;
                            font-size: 14px !important;
                            line-height: 1.428571429 !important;
                            color: #555 !important;
                            vertical-align: middle !important;
                            background-color: #fff !important;
                            background-image: none !important;
                            border: 1px solid #ccc !important;
                            border-radius: 4px !important;
                            -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075) !important;
                            box-shadow: inset 0 1px 1px rgba(0,0,0,0.075 !important);
                            -webkit-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s !important;
                            transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s !important;
                                    }
                    
                </style> 
                <table id="register_top_table_fixed" style="width:100%" class="items table table-bordered">
                    <tr>
                        <td width="20%" style="padding:10px; text-align:center; background-color:#6BA9C7;">
                            <div class="testclass1"></div>
<!--                            <input type="file" name="img-upload" value="upload">-->

                            <?php echo CHtml::activeFileField($party_image_model, 'IMAGE'); ?>
							<button id="upload_b" class="btn btn-primary btn-small" data-loading-text="Loading...">Upload <i class="icon-white icon-camera "></i></button>
                             <?php //echo $form->fileFieldRow($party_image_model, 'IMAGE'); ?>
                        </td>
                        <td style="padding:6px">

                     <table id="top_right_table">
                        <tr>
                            <td>
                                <?php //echo $form->labelEx($model,'SALUTATION'); ?>
                                <?php echo $form->labelEx($model,'PERSONAL_ID'); ?>
                            </td>
                            <td>
                                <?php echo $form->textField($model,'PERSONAL_ID'); ?>
                                <?php //echo $form->textField($model,'SALUTATION',array('size'=>30,'maxlength'=>30)); ?>
                                <?php //echo $form->error($model,'SALUTATION'); ?>
                                <?php echo $form->error($model,'PERSONAL_ID'); ?>
                            </td>
                            <td>
                                <?php echo $form->labelEx($model,'ACTIVE'); ?>
                            <label for="Personnel_V_ACTIVE1" class="required" style="display: block; ">Is Personnel Active? <span class="required">*</span></label>
                            </td>
            <td>


				<table style="margin-bottom:0px;float:left; width: auto;">
				<tr>
				<td style="border-left:0px; padding:0px ;border-bottom:0px;">
				<?php //echo $form->textField($model,'ACTIVE',array('size'=>1,'maxlength'=>1)); ?>
                <?php //echo $form->error($model,'ACTIVE'); ?>
                <?php echo $form->toggleButtonRow($model, 'ACTIVE', array('options'=>array('enabledLabel'=>'Yes' , 'disabledLabel'=>'No'),'htmlOptions'=>array('type'=>'mini')),array('labelOptions' => array("label" => false))); ?>
				</td>
				<td style="border-left:none; border-bottom:none; padding:0px; padding-left:11px; padding-right:11px;">
                  <label for="Personnel_V_VERIFIED1" class="required" style="display: block; ">Is Data Verified?<span class="required">*</span></label>
                  <?php //echo $form->labelEx($model,'VERIFIED'); ?></td>
                  <td style="padding-top: 0px; border-bottom: none; padding-left: 10px;">
                  <?php echo $form->toggleButtonRow($model, 'VERIFIED', array('options'=>array('enabledLabel'=>'Yes' , 'disabledLabel'=>'No')),array('labelOptions' => array("label" => false))); ?>
                  <?php //echo $form->textField($model,'VERIFIED',array('size'=>1,'maxlength'=>1)); ?>
                <?php echo $form->error($model,'VERIFIED'); ?></td></tr>
				</table>


            </td>

                        </tr>





                        <tr>
                            <td><?php echo $form->labelEx($model,'SALUTATION'); ?></td>
                            <td>
                            <?php echo $form->textField($model,'SALUTATION',array('size'=>30,'maxlength'=>30)); ?>
                            <?php echo $form->error($model,'SALUTATION'); ?> </td>
                            <td><?php echo $form->labelEx($model,'FIRST_NAME'); ?></td>
                            <td><?php echo $form->textField($model,'FIRST_NAME',array('size'=>50,'maxlength'=>50)); ?>
                                <?php echo $form->error($model,'FIRST_NAME'); ?></td>


                        </tr>
                        <tr>
                            <td><?php echo $form->labelEx($model,'MIDDILE_NAME'); ?></td>
                            <td><?php echo $form->textField($model,'MIDDILE_NAME',array('size'=>50,'maxlength'=>50)); ?>
                                <?php echo $form->error($model,'MIDDILE_NAME'); ?></td>
                            <td><?php echo $form->labelEx($model,'LAST_NAME'); ?></td>
                            <td><?php echo $form->textField($model,'LAST_NAME',array('size'=>50,'maxlength'=>50)); ?>
                                <?php echo $form->error($model,'LAST_NAME'); ?></td>


                        </tr>
                        <tr>
                            <td><?php echo $form->labelEx($model,'PREFERED_NAME'); ?></td>
                            <td><?php echo $form->textField($model,'PREFERED_NAME',array('size'=>60,'maxlength'=>100)); ?>
                                <?php echo $form->error($model,'PREFERED_NAME'); ?></td>
                            <td><?php echo $form->labelEx($model,'ALTERNATE_NAME'); ?></td>
                            <td><?php echo $form->textField($model,'ALTERNATE_NAME',array('size'=>60,'maxlength'=>100)); ?>
                                <?php echo $form->error($model,'ALTERNATE_NAME'); ?></td>

                        </tr>
                        <tr>
                            <td><?php echo $form->labelEx($model,'DOB'); ?></td>
                            <td><?php echo $form->textField($model,'DOB',array('id'=>'datepicker','placeholder'=>'dd/mm/yy')); ?>
                                <?php echo $form->error($model,'DOB'); ?>
                                <!--<span style="width:auto; margin-left: 10px; color: red; text-shadow: 1px 0px 0px rgb(163, 155, 155); font-size:11px">Date Format: dd/mm/yy </span>-->
                            </td>
                            <td><?php echo $form->labelEx($model,'GENDER'); ?></td>
                            <td>
                                <?php echo $form->dropDownList($model,'GENDER', CHtml::listData(BASIC_DEFINITION::model()->findAll("DFCTG_DEFINITION_TYPE='GENDER'"), 'SHORT_NAME', 'DESCRIPTION'), array('empty'=>'--Please Select--'));
     ?>

                                <?php //echo $form->textField($model,'GENDER',array('size'=>1,'maxlength'=>1)); ?>
                                <?php echo $form->error($model,'GENDER'); ?></td>

                        </tr>
                        <tr>
                            <td><?php echo $form->labelEx($model,'RELIGION'); ?></td>
                            <td><?php //echo $form->textField($model,'RELIGION',array('size'=>30,'maxlength'=>30)); ?>
                                <?php echo $form->dropDownList($model,'RELIGION', CHtml::listData(BASIC_DEFINITION::model()->findAll("DFCTG_DEFINITION_TYPE='RELIGION'"), 'SHORT_NAME', 'DESCRIPTION'), array('empty'=>'--Please Select--')); ?>
                                <?php echo $form->error($model,'RELIGION'); ?></td>
                            <td><?php echo $form->labelEx($model,'BLOOD_GROUP'); ?></td>
                            <td>
                                <?php echo $form->dropDownList($model,'BLOOD_GROUP', CHtml::listData(BASIC_DEFINITION::model()->findAll("DFCTG_DEFINITION_TYPE='BLOOD_GROUP'"), 'SHORT_NAME', 'DESCRIPTION'), array('empty'=>'--Please Select--')); ?>
                                <?php //echo $form->textField($model,'BLOOD_GROUP',array('size'=>30,'maxlength'=>30)); ?>
                                <?php echo $form->error($model,'BLOOD_GROUP'); ?></td>

                        </tr>
                        <tr>
                            <td><?php echo $form->labelEx($model,'SUBCAST'); ?></td>
                            <td><?php //echo $form->textField($model,'SUBCAST',array('size'=>30,'maxlength'=>30)); ?>
                                <?php echo $form->dropDownList($model,'SUBCAST', CHtml::listData(BASIC_DEFINITION::model()->findAll("DFCTG_DEFINITION_TYPE='SUBCAST'"), 'SHORT_NAME', 'DESCRIPTION'), array('empty'=>'--Please Select--')); ?>
                                <?php echo $form->error($model,'SUBCAST'); ?></td>

								<td><?php echo $form->labelEx($model,'NATIONALITY'); ?></td>
                            <td> <?php echo $form->dropDownList($model,'NATIONALITY', CHtml::listData(Nationalities::model()->findAll(), 'NATIONALITY_CODE', 'NATIONALITY_NAME'), array('empty'=>'--Please Select--')); ?>
                                <?php //echo $form->textField($model,'NATIONALITY',array('size'=>30,'maxlength'=>30)); ?>
                                <?php echo $form->error($model,'NATIONALITY'); ?></td>
								<!--------->
                        </tr>



						<!--new created tr-->
						<tr>
						 <td></td><td></td>
						  <td>
				<label for="Personnel_V_MARRIED1" class="required" style="display: block; ">Are You Married?<span class="required">*</span></label>
				<?php //echo $form->labelEx($model,'MARRIED'); ?></td>
              <td>
			   <?php echo $form->toggleButtonRow($model, 'MARRIED', array('options'=>array('enabledLabel'=>'Yes' , 'disabledLabel'=>'No')),array('labelOptions' => array("label" => false))); ?>
			  <?php //echo $form->textField($model,'MARRIED',array('size'=>1,'maxlength'=>1)); ?>
                <?php echo $form->error($model,'MARRIED'); ?></td>
						</tr>
						<!--new created tr end -->

                     </table>


                        </td>
                    </tr>
<!--                    <tr>
                        <td>sada</td>
                        <td>sad</td>
                    </tr>-->
                </table>
            </td>
        </tr>
    </table>

<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Contact</a></li>
    <li><a href="#tabs-2">Education</a></li>
    <li><a href="#tabs-3">Training</a></li>
    <li><a href="#tabs-4">Experience</a></li>
    <li><a href="#tabs-5">Service Status</a></li>
    <li><a href="#tabs-6">More</a></li>
  </ul>
  <div id="tabs-1">


      <!---------------->
  <div id="inside_tab_div">
  <div id="accordion">
  <h3>Permanent Address</h3>
  <div>
      <table style="margin-bottom:0px; width: 100%; background-color: #F8F8F8">
          <tr>
              <td width="auto">
                  <table id="address_table" style="margin-bottom:0px; padding: 6px; border: 1px solid #C8C8C8; ">
                      <tr>
                          <td colspan="2" style="text-align:center"><b>Address</b></td>
                      </tr>
                      <tr>
                          <td class="label_width_contact"><b>Line 1</b></td>
                          <td><a  href="#section1" onclick="return Open_Message_box_selected_area();"><input type="text" name="add1"></a></td>
                      </tr>
                      <tr>
                          <td class="label_width_contact"><b>Line 2</b></td>
                          <td><input type="text" name="add2"></td>
                      </tr>
                      <tr>
                          <td class="label_width_contact"><b>Line 3</b></td>
                          <td><input type="text" name="add3"></td>
                      </tr>
                      <tr>
                          <td class="label_width_contact"><b>City</b></td>
                          <td><input type="text" name="city"></td>
                      </tr>
                      <tr>
                          <td class="label_width_contact"><b>Country</b></td>
                          <td><input type="text" name="country"></td>
                      </tr>
                  </table>
              </td>
              <td style="width:74%; vertical-align: top">
                  <table id="second_table_contact" border="1" style="margin-bottom:0px;">
                      <tr>
                        <td class="label_width_contact"><b>Email</b></td><td><input type="text" name="email"></td>
                        <td class="label_width_contact"><b>Fax</b></td><td><input type="text" name="fax"></td>
                      </tr>
                       <tr>
                        <td class="label_width_contact"><b>Mobile</b></td><td><input type="text" name="Mobile_general"></td>
                        <td class="label_width_contact"><b>URL</b></td><td><input type="text" name="url">
                      </tr>

                      <tr>
                        <td class="label_width_contact"><b>With Effected From</b></td><td><input type="text" name="WEF"  style="width:100px"></td>
                        <td class="label_width_contact"><b>With Effected To</b></td><td><input type="text" name="WET" style="width:100px"></td>

                      </tr>
                  </table>

              </td>
          </tr>

      </table>

  </div>
  <h3>Residential Address</h3>
  <div>
    <table style="margin-bottom:0px; width: 100%; background-color: #F8F8F8">
          <tr>
              <td width="auto">
                  <table id="address_table" style="margin-bottom:0px; padding: 6px; border: 1px solid #C8C8C8; ">
                      <tr>
                          <td colspan="2" style="text-align:center"><b>Address</b></td>
                      </tr>
                      <tr>
                          <td class="label_width_contact"><b>Line 1</b></td>
                          <td><a  href="#section3" onclick="return Open_Message_box_selected_area();"><input type="text" name="add1"></a></td>
                      </tr>
                      <tr>
                          <td class="label_width_contact"><b>Line 2</b></td>
                          <td><input type="text" name="add2"></td>
                      </tr>
                      <tr>
                          <td class="label_width_contact"><b>Line 3</b></td>
                          <td><input type="text" name="add3"></td>
                      </tr>
                      <tr>
                          <td class="label_width_contact"><b>City</b></td>
                          <td><input type="text" name="city"></td>
                      </tr>
                      <tr>
                          <td class="label_width_contact"><b>Country</b></td>
                          <td><input type="text" name="country"></td>
                      </tr>
                  </table>
              </td>
              <td style="width:74%; vertical-align: top">
                  <table id="second_table_contact" border="1" style="margin-bottom:0px;">
                      <tr>
                        <td class="label_width_contact"><b>Email</b></td><td><input type="text" name="email"></td>
                        <td class="label_width_contact"><b>Fax</b></td><td><input type="text" name="fax"></td>
                      </tr>
                       <tr>
                        <td class="label_width_contact"><b>Mobile</b></td><td><input type="text" name="Mobile_general"></td>
                        <td class="label_width_contact"><b>URL</b></td><td><input type="text" name="url">
                      </tr>

                      <tr>
                        <td class="label_width_contact"><b>With Effected From</b></td><td><input type="text" name="WEF" style="width:100px"></td>
                        <td class="label_width_contact"><b>With Effected To</b></td><td><input type="text" name="WET" style="width:100px"></td>

                      </tr>
                  </table>

              </td>
          </tr>

      </table>

  </div>
  <h3>Alternative Address</h3>
  <div>
    <table style="margin-bottom:0px; width: 100%; background-color: #F8F8F8">
          <tr>
              <td width="auto">
                  <table id="address_table" style="margin-bottom:0px; padding: 6px; border: 1px solid #C8C8C8; ">
                      <tr>
                          <td colspan="2" style="text-align:center"><b>Address</b></td>
                      </tr>
                      <tr>
                          <td class="label_width_contact"><b>Line 1</b></td>
                          <td><input type="text" name="add1"></td>
                      </tr>
                      <tr>
                          <td class="label_width_contact"><b>Line 2</b></td>
                          <td><input type="text" name="add2"></td>
                      </tr>
                      <tr>
                          <td class="label_width_contact"><b>Line 3</b></td>
                          <td><input type="text" name="add3"></td>
                      </tr>
                      <tr>
                          <td class="label_width_contact"><b>City</b></td>
                          <td><input type="text" name="city"></td>
                      </tr>
                      <tr>
                          <td class="label_width_contact"><b>Country</b></td>
                          <td><input type="text" name="country"></td>
                      </tr>
                  </table>
              </td>
              <td style="width:74%; vertical-align: top">
                  <table id="second_table_contact" border="1" style="margin-bottom:0px;">
                      <tr>
                        <td class="label_width_contact"><b>Email</b></td><td><input type="text" name="email"></td>
                        <td class="label_width_contact"><b>Fax</b></td><td><input type="text" name="fax"></td>
                      </tr>
                       <tr>
                        <td class="label_width_contact"><b>Mobile</b></td><td><input type="text" name="Mobile_general"></td>
                        <td class="label_width_contact"><b>URL</b></td><td><input type="text" name="url">
                      </tr>

                      <tr>
                        <td class="label_width_contact"><b>With Effected From</b></td><td><input type="text" name="WEF"  style="width:100px"></td>
                        <td class="label_width_contact"><b>With Effected To</b></td><td><input type="text" name="WET" style="width:100px"></td>

                      </tr>
                  </table>

              </td>
          </tr>

      </table>

  </div>
  <h3>Communication Address</h3>
  <div>
    <table style="margin-bottom:0px; width: 100%; background-color: #F8F8F8">
          <tr>
              <td width="auto">
                  <table id="address_table" style="margin-bottom:0px; padding: 6px; border: 1px solid #C8C8C8; ">
                      <tr>
                          <td colspan="2" style="text-align:center"><b>Address</b></td>
                      </tr>
                      <tr>
                          <td class="label_width_contact"><b>Line 1</b></td>
                          <td><input type="text" name="add1"></td>
                      </tr>
                      <tr>
                          <td class="label_width_contact"><b>Line 2</b></td>
                          <td><input type="text" name="add2"></td>
                      </tr>
                      <tr>
                          <td class="label_width_contact"><b>Line 3</b></td>
                          <td><input type="text" name="add3"></td>
                      </tr>
                      <tr>
                          <td class="label_width_contact"><b>City</b></td>
                          <td><input type="text" name="city"></td>
                      </tr>
                      <tr>
                          <td class="label_width_contact"><b>Country</b></td>
                          <td><input type="text" name="country"></td>
                      </tr>
                  </table>
              </td>
              <td style="width:74%; vertical-align: top">
                  <table id="second_table_contact" border="1" style="margin-bottom:0px;">
                      <tr>
                        <td class="label_width_contact"><b>Registered Email</b></td><td><input type="text" name="email"></td>
                        <td class="label_width_contact"><b>Fax</b></td><td><input type="text" name="fax"></td>
                      </tr>
                       <tr>
                        <td class="label_width_contact"><b>Registered Mobile</b></td><td><input type="text" name="Mobile_general"></td>
                        <td class="label_width_contact"><b>URL</b></td><td><input type="text" name="url">
                      </tr>

                      <tr>
                        <td class="label_width_contact"><b>With Effected From</b></td><td><input type="text" name="WEF" style="width:100px"></td>
                        <td class="label_width_contact"><b>With Effected To</b></td><td><input type="text" name="WET" style="width:100px"></td>

                      </tr>
                  </table>

              </td>
          </tr>

      </table>

  </div>
</div></div>


      <!---------------->
<!--      <table id="Reg_Main_Table">
          <tr>
              <td  rowspan="6" style="padding-right:5px;">
                  <table style="border:1px solid #CACACA; padding:3px">
                      <tr>
                          <td style="text-align:center"><b>Address</b></td>
                      </tr>
                      <tr>
                          <td style="text-align:center"><?php echo $form->textField($model,'ADDRESS1',array('size'=>60,'maxlength'=>100)); ?>
                <?php //echo $form->error($model,'ADDRESS1'); ?></td>
                      </tr>
                      <tr>
                         <td style="text-align:center"><?php echo $form->textField($model,'ADDRESS2',array('size'=>60,'maxlength'=>100)); ?>
                <?php //echo $form->error($model,'ADDRESS2'); ?></td>
                      </tr>
                      <tr>
                         <td style="text-align:center"><?php echo $form->textField($model,'ADDRESS3',array('size'=>60,'maxlength'=>100)); ?>
                <?php //echo $form->error($model,'ADDRESS3'); ?></td>
                      </tr>
                      <tr>
                         <td style="text-align:center"><?php echo $form->textField($model,'ADDRESS4',array('size'=>60,'maxlength'=>100)); ?>
                <?php //echo $form->error($model,'ADDRESS4'); ?></td>
                      </tr>
                  </table>
              </td>

              <td><?php //echo $form->labelEx($model,'FATHER'); ?></td>
              <td><?php //echo $form->textField($model,'FATHER',array('size'=>60,'maxlength'=>100)); ?>
                  <?php //echo $form->error($model,'FATHER'); ?></td>
              <td><?php //echo $form->labelEx($model,'PHONE'); ?></td>
              <td><?php //echo $form->textField($model,'PHONE',array('size'=>60,'maxlength'=>100)); ?>
                  <?php //echo $form->error($model,'PHONE'); ?></td>

          </tr>
          <tr>
              <td><?php //echo $form->labelEx($model,'MOTHER'); ?></td>
              <td><?php //echo $form->textField($model,'MOTHER',array('size'=>60,'maxlength'=>110)); ?>
                  <?php //echo $form->error($model,'MOTHER'); ?></td>

              <td><?php //echo $form->labelEx($model,'EMAIL'); ?></td>
              <td><?php //echo $form->textField($model,'EMAIL',array('size'=>60,'maxlength'=>100)); ?>
                <?php //echo $form->error($model,'EMAIL'); ?></td>

          </tr>
          <?php /*?><tr>
                <td>
				<label for="Personnel_V_MARRIED1" class="required" style="display: block; ">Married<span class="required">*</span></label>
				<?php //echo $form->labelEx($model,'MARRIED'); ?></td>
              <td>
			   <?php echo $form->toggleButtonRow($model, 'MARRIED', array('options'=>array('enabledLabel'=>'Yes' , 'disabledLabel'=>'No')),array('labelOptions' => array("label" => false))); ?>
			  <?php //echo $form->textField($model,'MARRIED',array('size'=>1,'maxlength'=>1)); ?>
                <?php echo $form->error($model,'MARRIED'); ?></td>

			  <td>
			  <label for="Personnel_V_VERIFIED1" class="required" style="display: block; ">Verified<span class="required">*</span></label>
			  <?php //echo $form->labelEx($model,'VERIFIED'); ?></td>
              <td>
			  <?php //echo $form->toggleButtonRow($model, 'VERIFIED', array('options'=>array('enabledLabel'=>'Yes' , 'disabledLabel'=>'No')),array('labelOptions' => array("label" => false))); ?>
			  <?php //echo $form->textField($model,'VERIFIED',array('size'=>1,'maxlength'=>1)); ?>
                <?php //echo $form->error($model,'VERIFIED'); ?></td>
          </tr><?php */?>
          <tr>
            <td><?php //echo $form->labelEx($model,'DEPENDENT'); ?></td>
            <td><?php //echo $form->textField($model,'DEPENDENT',array('size'=>60,'maxlength'=>1)); ?>
                <?php //echo $form->error($model,'DEPENDENT'); ?></td>
            <td><?php //echo $form->labelEx($model,'CASUAL'); ?></td>
            <td><?php //echo $form->textField($model,'CASUAL',array('size'=>1,'maxlength'=>1)); ?>
                <?php //echo $form->error($model,'CASUAL'); ?></td>
          </tr>
          <tr>
              <td><?php //echo $form->labelEx($model,'SECONDMENT'); ?></td>
            <td><?php //echo $form->textField($model,'SECONDMENT',array('size'=>1,'maxlength'=>1)); ?>
                <?php //echo $form->error($model,'SECONDMENT'); ?></td>
            <td><?php //echo $form->labelEx($model,'SECONDMENT_ORG_ID'); ?></td>
            <td><?php //echo $form->textField($model,'SECONDMENT_ORG_ID'); ?>
                <?php //echo $form->error($model,'SECONDMENT_ORG_ID'); ?></td>
          </tr>

      </table>-->

  </div>
  <div id="tabs-2">
    <!-----Start Education tab inside div------->
      <div id="inside_tab_div">
       <table id="education_tab_table" class="table table-bordered" style="width:70%; margin-bottom: 10px !important;">
        <thead>
          <tr>
            <th width="200">Level</th>
            <th width="200">Course</th>
            <th width="60">Grade</th>
            <th width="60">Score</th>
            <th>University</th>
            <th width="60">Year Of Passing</th>

          </tr>
        </thead>
        <tbody>
            <?php for($i=1; $i<7; $i++) { ?>
          <tr  class="copy">
              <td>
                  <select name="edu_level"  class="form-control">
                      <option value="">Post Graduate</option>
                      <option value="">Upper Graduate</option>
                      <option value="">ITI</option>
                      <option value="">Diploma</option>
                  </select>
              </td>
            <td>
                <select name="edu_level" class="form-control">
                      <option value="">MCA</option>
                      <option value="">BCA</option>
                      <option value="">BSC</option>
                      <option value="">BCOM</option>
                      <option value="">MA/ME</option>
                      <option value="">BTECH</option>
                  </select>
            </td>
            <td><input type="text" name="grade" class="form-control"></td>
            <td><input type="text" name="score" class="form-control"></td>
            <td><input type="text" name="Universiity" class="form-control"></td>
            <td><input type="text" name="Year of Passing" class="form-control"></td>
          </tr>
            <?php } ?>
        <tr>
            <td colspan="6"><img id="copylink" rel=".copy" align="right"
                                 src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/plus_blue.png"
                                 title="Add Rows" width="20" height="20" style="cursor: pointer;display: block"></td>
        </tr>
        </tbody>
      </table>



      </div>
    <!-----End Education tab inside div------->
  </div>
  <div id="tabs-3">
    <!------Training Start-------->
    <div id="inside_tab_div">
       <table id="education_tab_table" class="table table-bordered" style="width:70%; margin-bottom: 10px !important;">
        <thead>
          <tr>
            <th width="200">Level</th>
            <th width="200">Course</th>
            <th width="60">Grade</th>
            <th width="60">Score</th>
            <th>Institution</th>
            <th width="40">Year Of Passing</th>
          </tr>
        </thead>
        <tbody>
            <?php for($i=1; $i<7; $i++) { ?>
          <tr>
              <td>
                  <select name="edu_level" class="form-control">
                      <option value="">Post Graduate</option>
                      <option value="">Upper Graduate</option>
                      <option value="">ITI</option>
                      <option value="">Diploma</option>
                  </select>
              </td>
            <td>
                <select name="edu_level" class="form-control">
                      <option value="">MCA</option>
                      <option value="">BCA</option>
                      <option value="">BSC</option>
                      <option value="">BCOM</option>
                      <option value="">MA/ME</option>
                      <option value="">BTECH</option>
                  </select>
            </td>
            <td><input type="text" name="grade" class="form-control"></td>
            <td><input type="text" name="score" class="form-control"></td>
            <td><input type="text" name="Universiity" class="form-control"></td>
            <td><input type="text" name="Year of Passing" class="form-control"></td>
          </tr>
            <?php } ?>

        </tbody>
      </table>
      </div>
    <!------Training End--------->
  </div>
    <div id="tabs-4">
        <!-------Experience--------->
        <div id="inside_tab_div">
        <table id="education_tab_table" class="table table-bordered" style="width:auto; margin-bottom: 10px !important;">
        <thead>
          <tr>
            <th width="300">Industry</th>
            <th width="30">Year Of Experience</th>
            <th width="200">Last Position</th>
          </tr>
        </thead>
        <tbody>
            <?php for($i=1; $i<7; $i++) { ?>
          <tr>
              <td><input type="text" name="industry" class="form-control"></td>
              <td><input type="text" name="exper" class="form-control"></td>
              <td><input type="text" name="cur_pos" class="form-control"></td>
          </tr>
            <?php } ?>
       </table>
            </div>
        <!-------Experience--------->
    </div>
    <div id="tabs-5">
    <!-----service status------->
    <div id="inside_tab_div">
       <table id="education_tab_table" class="table table-bordered" style="width:auto; margin-bottom: 10px !important;">
        <thead>
          <tr>
            <th  width="300">Service status</th>
            <th width="40">With Effect From</th>
            <th width="40">With Effect To</th>
          </tr>
        </thead>
        <tbody>
            <?php for($i=1; $i<7; $i++) { ?>
          <tr>
              <td><input type="text" name="industry" class="form-control"></td>
              <td><input type="text" name="exper" class="form-control"></td>
              <td><input type="text" name="cur_pos" class="form-control"></td>
          </tr>
            <?php } ?>

       </table>
    </div>
    <!-----service status------->
  </div>
    <div id="tabs-6">
       <div id="inside_tab_div">
       <table id="education_tab_table" class="table table-bordered" style="width:auto; margin-bottom: 10px !important;">
        <thead>
          <tr>
            <th width="250">Category</th>
            <th width="250">Value</th>
            <th  width="40">With Effect From</th>
            <th width="40">With Effect To</th>
          </tr>
        </thead>
        <tbody>
             <?php for($i=1; $i<7; $i++) { ?>
          <tr>
              <td><select name="more"  class="form-control">
                      <option value="1">Category1</option>
                      <option value="1">Category2</option>
                      <option value="1">Category3</option>
                  </select></td>
              <td><input type="text" name="valueof" class="form-control"></td>
              <td><input type="text" name="exper" class="form-control"></td>
              <td><input type="text" name="cur_pos" class="form-control"></td>
          </tr>
             <?php } ?>

       </table>
        </div>
  </div>

</div>
 <table>

        <tr>
            <td colspan="6" style="text-align: right; padding-right: 20px;  padding-bottom: 5px; background-color: rgb(107, 169, 199);; padding-top: 4px; ">
                <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"submit",'size'=>'medium', 'label'=>$model->isNewRecord ? "Save" : "Save",'id'=>'demo_save','icon'=>'icon-hdd')); ?>
                <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"reset",'size'=>'medium','icon'=>'icon-refresh', 'label'=>'Clear')); ?>
                <?php //echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>

            </td>
        </tr>
    </table>
    
   
</div>
<?php $this->endWidget(); ?>

<!-- form -->