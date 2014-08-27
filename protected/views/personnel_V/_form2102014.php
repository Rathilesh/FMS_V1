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
  // $('#Secondmentorgid').show();
       }
       
  }
  
 $(document).ready(function(){ 
   
 document.getElementById('Secondmentorgid').style.visibility='hidden';
});

</script>
<style>
.secondmentcls
{
  text-align: right !important;  
}
.inputpermament
{
 margin-left: 30px !important;
}
.namestyle
{
    font-style:  italic !important;
    font-weight:normal !important;  
     padding-left:5px;
}
.namerequired
{
     padding-left:0px; font-weight:bold
}
 .namedata
 {
  background-color:#FFF7F7;   
 }
 
 .personneldata
 {
  background-color:#DFE2DE;   
 }
 .moredata
 {
   background-color:#DFE2DE;     
 }
 
 .table-bordered th, .table-bordered td { border: none !important;}
input[type="checkbox"] { 
width:30px;
}
#PERSONAL_ID
{
/*width:100px!important;*/   
}
#verified
{
 border: 1px solid #ccc;
 border-radius: 4px; 
 background-color: white; 
 text-align: left;
}
tr.spaceUnder > td
{
  padding-bottom: 1em;
}
  .table-bordered td { padding-bottom: 6px !important;}
  .table-bordered th { padding-bottom: 5px !important; }
  .table-bordered td { border-bottom: 1px solid rgb(202, 202, 202) !important}
  .vericheck
  {
      width:15px !important;
      border:none;
     
  }
  .verichecklabel
  {
    margin-right: 5px;
    padding-left: 11px;  
  }
  #table_bottom_bg
  {
      border-radius: 5px;
  }
</style>
<?php
/* @var $this Personnel_VController */
/* @var $model Personnel_V */
/* @var $form CActiveForm */
/* Created By :® RaThIlEsH ® 
 * morDified By :® RaThIlEsH ® on 31-Dec-2013
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
        <table id="register_top_table_fixed" style="width:79%;background-color: #F8F8F8;" class="items table table-bordered">
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
                <td width="15%" style="padding-top: 20px;text-align: center;">
                     <div class="testclass1"></div>
                    <!-- <input type="file" name="img-upload" value="upload">-->
                    <?php echo CHtml::activeFileField($party_image_model, 'IMAGE'); ?>
                    <!--<button id="upload_b" class="btn btn-primary btn-small" data-loading-text="Loading...">Upload <i class="icon-white icon-camera "></i></button>-->
                    <?php //echo $form->fileFieldRow($party_image_model, 'IMAGE'); ?>
                </td>
                <td style="padding:0px">
                    
                    
                    
                    <table style="width:814px;padding-top: 15px" id="inner_outer table_top" >

                        <tr class="">
                            <th><?php echo $form->labelEx($model,'PERSONAL_ID',array('class'=>'namerequired')); ?></th>
                            <th></th>
                            <th><span class="namerequired">Name</span></th>
                            <th></th>
                            <th></th>
                        </tr>
                         <tr>
                            <td style="width:100px"><?php echo $form->textField($model,'PERSONAL_ID',array('class'=>'form-control','id'=>'PERSONAL_ID','maxlength'=>50)); ?></td>
                            <td style="width:100px"><?php echo $form->dropDownList($model,'CASUAL', array('empty'=>'--Select--','Mr'=>'Mr','Miss'=>'Miss'),array('class'=>'form-control-selectsmall')); ?></td>
                            <td style="width:125px"><?php echo $form->textField($model,'FIRST_NAME',array('class'=>'form-control','placeholder'=>'First','maxlength'=>50)); ?></td>
                            <td style="width:140px"><?php echo $form->textField($model,'MIDDLE_NAME',array('class'=>'form-control','placeholder'=>'Middle','maxlength'=>50)); ?></td>
                            <td style="width:160px"><?php echo $form->textField($model,'LAST_NAME',array('maxlength'=>50,'class'=>'form-control','placeholder'=>'Last',)); ?></td>
                        </tr>
                        
                        
                        <tr>
                            <th style="width:250px"><?php echo $form->labelEx($model,'PREFERRED_NAME',array('class'=>'required')); ?></th>
                            <th style="width:220px"><?php echo $form->labelEx($model,'ALTERNATE_NAME',array('class'=>'required')); ?></th>   
                            <th style="width:120px"><span class="namerequired">Active?</span></th>
                             <th style="width:120px"><span class="namerequired">Married?</span></th>
                            <th colspan="2" style="width:125px"><?php echo $form->labelEx($model,'CASUAL',array('class'=>'required')); ?></th>
                            
                        </tr>
                        
                        <tr>
                           <td style="width:250px"><?php echo $form->textField($model,'PREFERRED_NAME',array('class'=>'form-control','maxlength'=>100)); ?></td>
                            <td style="width:220px"><?php echo $form->textField($model,'ALTERNATE_NAME',array('class'=>'form-control','maxlength'=>100)); ?></td>
                            <td style="width:120px"><?php echo $form->toggleButtonRow($model, 'ACTIVE', array('options'=>array('enabledLabel'=>'Yes' , 'disabledLabel'=>'No'),'htmlOptions'=>array('type'=>'mini')),array('labelOptions' => array("label" => false))); ?></td>
                            <td  style="width:125px">
                                <?php echo $form->toggleButtonRow($model, 'MARRIED', array('options'=>array('enabledLabel'=>'Yes' , 'disabledLabel'=>'No')),array('labelOptions' => array("label" => false))); ?></td>
                                <td  style="width:125px"><?php echo $form->dropDownList($model,'CASUAL', array('empty'=>'--Select--','Casual'=>'Casual','Normal'=>'Normal'),array('class'=>'form-control-select')); ?></td>
                            <td></td>
                        </tr>
                        
                        
                        <tr>
                            <th style="width:110px"><span class="namerequired"><?php echo $form->labelEx($model,'DOB'); ?></span></th>
                            
                            <th style="width:110px"><?php echo $form->labelEx($model,'GENDER'); ?></span></th>
                            <th style="width:110px"><?php echo $form->labelEx($model,'BLOOD_GROUP'); ?></th>
                            <th style="width:125px"><?php echo $form->labelEx($model,'NATIONALITY'); ?></th>
                            <th style="width:125px"><?php echo $form->labelEx($model,'RELIGION'); ?></th>
                        </tr>
                        
                        <tr>
                            <td style="width:100px"><?php echo $form->textField($model,'DOB',array('id'=>'datepicker','placeholder'=>'dd/mm/yy')); ?></td>
                            <td style="width:110px"><?php echo $form->dropDownList($model,'GENDER', CHtml::listData(BASIC_DEFINITION::model()->findAll("DFCTG_DEFINITION_TYPE='GENDER'"), 'SHORT_NAME', 'DESCRIPTION'), array('empty'=>'--Select--','class'=>'form-control-select'));?></td>
                            <td style="width:110px"><?php echo $form->dropDownList($model,'BLOOD_GROUP', CHtml::listData(BASIC_DEFINITION::model()->findAll("DFCTG_DEFINITION_TYPE='BLOOD_GROUP'"), 'SHORT_NAME', 'DESCRIPTION'), array('empty'=>'--Select--','class'=>'form-control-select')); ?></td>
                            <td style="width:125px"><?php echo $form->dropDownList($model,'NATIONALITY', CHtml::listData(BASIC_DEFINITION::model()->findAll(), 'NATIONALITY_CODE', 'NATIONALITY_NAME'), array('empty'=>'--Select--','class'=>'form-control-select')); ?></td>
                            <td style="width:125px"><?php echo $form->dropDownList($model,'RELIGION', CHtml::listData(BASIC_DEFINITION::model()->findAll("DFCTG_DEFINITION_TYPE='RELIGION'"), 'SHORT_NAME', 'DESCRIPTION'), array('empty'=>'--Select--','class'=>'form-control-select')); ?></td>   
                        </tr>
                        
                        
                        <tr>
                            <th style="width:125px"><?php echo $form->labelEx($model,'SUBCASTE',array('class'=>"namerequired")); ?></th>
                            <th style="width:125px" ><span class="namerequired">Verified By</span></th>
                            <th style="width:125px"><?php echo $form->labelEx($model,'VERIFIED_ON',array('class'=>'required')); ?></th>
                            <th style="width:125px"><span><?php echo $form->labelEx($model,'SECONDMENT'); ?></span></th>
                            <th></th>
                        </tr>
                        
                        <tr>
                            
                           <td style="width:125px"><?php echo $form->dropDownList($model,'SUBCASTE', CHtml::listData(BASIC_DEFINITION::model()->findAll("DFCTG_DEFINITION_TYPE='SUBCASTE'"), 'SHORT_NAME', 'DESCRIPTION'), array('empty'=>'--Select--','class'=>'form-control-select')); ?></td>
                            <td >
                                <div id="verified">
                         <span class="verichecklabel">Self</span><?php echo $form->checkBox($model,'VERIFIED_BY_SELF',array('value'=> '','uncheckValue'=>'Inactive',"id"=>"VERIFIED_BY_SELF","class"=>"vericheck")); ?>
                         <span class="verichecklabel">Employer</span><?php echo $form->checkBox($model,'VERIFIED_BY_SELF',array('value'=> '','uncheckValue'=>'Inactive',"id"=>"VERIFIED_BY_SELF","class"=>"vericheck")); ?>
                            </div>
                            </td>
                            <td style="width:125px"><?php echo $form->textField($model,'VERIFIED_ON',array('id'=>'verification_datepicker','placeholder'=>'dd/mm/yy')); ?>    
                               
                            <td style="width:125px"><?php echo $form->dropDownList($model,'CASUAL', array('empty'=>'--Select--','Inward'=>'Inward','Outward'=>'Outward'),array('class'=>'form-control-select','id'=>'Secondmentid','onchange'=>'Secondmentorg();')); ?></td>
                            <td style="width:125px"><?php echo $form->dropDownList($model,'CASUAL', array('empty'=>'--Organiztion--','ABC'=>'ABC','LOK'=>'LOK'),array('class'=>'form-control-select','id'=>'Secondmentorgid')); ?></td>
                                </table>
                           <td></td> 
                        </tr>
                        
                    </table>
                    

                    
        </td>
        </tr>
        </table>
<div id="outer_tab_div">
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Contact </a></li>
    <li><a href="#tabs-2">Education</a></li>
    <li><a href="#tabs-3">Training</a></li>
    <li><a href="#tabs-4">Experience</a></li>
    <li><a href="#tabs-5">Service Status</a></li>
     <li><a href="#tabs-5">Bank</a></li>
    <li><a href="#tabs-5">Dependent</a></li>
    <li><a href="#tabs-5">Next of kin</a></li>
    <li><a href="#tabs-5">Documents</a></li>
    <li><a href="#tabs-6">More</a></li>
     
  </ul>
    <div id="tabs-1">
    <div class="" style="width:100%; height: 148px; float: left; overflow-y: scroll;">
        <div id="accordion" style="width: 100% !important;">
        <h3>Permanent Address</h3>
        <div>
            <table style="margin-bottom:0px; width: 100%; background-color: #F8F8F8">
                <tr>
                    <td width="auto">
                        <table id="address_table" style="margin-bottom:0px; padding: 6px; border: 1px solid #C8C8C8; ">
                            <tr>
<!--                                <td colspan="2" style=" padding-left: 80px;"><b>Address</b></td>-->
                                <td colspan="2" style="text-align:center;"><b>Address</b></td>
                            </tr>
                            <tr>
<!--                                <td class="label_width_contact"><b>Line 1</b></td>-->
                                <td><a  href="#section1" onclick="return Open_Message_box_selected_area();"><input type="text" name="add1" class="inputpermament"></a></td>
                            </tr>
                            <tr>
<!--                                <td class="label_width_contact"><b>Line 2</b></td>-->
                                <td><input type="text" name="add2" class="inputpermament"></td>
                            </tr>
                            <tr>
<!--                                <td class="label_width_contact"><b>Line 3</b></td>-->
                                <td><input type="text" name="add3" class="inputpermament"></td>
                            </tr>
                            <tr>
<!--                                <td class="label_width_contact"><b>City</b></td>-->
                                <td><input type="text" name="city" class="inputpermament" placeholder="<City>"></td>
                            </tr>
                            <tr>
<!--                                <td class="label_width_contact"><b>Country</b></td>-->
                                <td><input type="text" name="country" class="inputpermament" placeholder="<Country>"></td>
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
                                <td class="label_width_contact"><b><!--Line 1--></b></td>
                                <td><input type="text" name="add1"></td>
                            </tr>
                            <tr>
                                <td class="label_width_contact"><b><!--Line 2--></b></td>
                                <td><input type="text" name="add2"></td>
                            </tr>
                            <tr>
                                <td class="label_width_contact"><b><!--Line 3--></b></td>
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

        </div></div></div>
  </div>
  <div id="tabs-2">
   <table id="education_tab_table" class="table table-bordered" style="width:85%; margin-bottom: 10px !important;border: 1px solid rgb(216, 216, 216); padding: 6px; background-color: white; box-shadow: 10px 7px 8px rgb(167, 167, 167);">
                <thead>
                <tr>
                    <th width="200">Level</th>
                    <th width="200">Course</th>
                    <th width="60">Grade</th>
                    <th width="60">Score</th>
                    <th>University</th>
                    <th width="120">Year Of Passing</th>

                </tr>
                </thead>
                <tbody>
                <?php for($i=1; $i<8; $i++) { ?>
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
  <div id="tabs-3">
    <table id="education_tab_table" class="table table-bordered" style="width:85%; margin-bottom: 10px !important;border: 1px solid rgb(216, 216, 216); padding: 6px; background-color: white; box-shadow: 10px 7px 8px rgb(167, 167, 167);">
                <thead>
                <tr>
                    <th width="200">Level</th>
                    <th width="200">Course</th>
                    <th width="60">Grade</th>
                    <th width="60">Score</th>
                    <th>Institution</th>
                    <th width="120">Year Of Passing</th>
                </tr>
                </thead>
                <tbody>
                <?php for($i=1; $i<8; $i++) { ?>
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
    
    <div id="tabs-4">
        <table id="education_tab_table" class="table table-bordered" style="width:auto; margin-bottom: 10px !important;border: 1px solid rgb(216, 216, 216); padding: 6px; background-color: white; box-shadow: 10px 7px 8px rgb(167, 167, 167);">
                <thead>
                <tr>
                    <th width="300">Industry</th>
                    <th width="30">Year Of Experience</th>
                    <th width="200">Last Position</th>
                </tr>
                </thead>
                <tbody>
                <?php for($i=1; $i<8; $i++) { ?>
                    <tr>
                        <td><input type="text" name="industry" class="form-control"></td>
                        <td><input type="text" name="exper" class="form-control"></td>
                        <td><input type="text" name="cur_pos" class="form-control"></td>
                    </tr>
                <?php } ?>
            </table>
    </div>
    
    <div id="tabs-5"> 
    <table id="education_tab_table" class="table table-bordered" style="width:auto; margin-bottom: 10px !important;border: 1px solid rgb(216, 216, 216); padding: 6px; background-color: white; box-shadow: 10px 7px 8px rgb(167, 167, 167);">
                <thead>
                <tr>
                    <th  width="300">Service status</th>
                    <th width="40">With Effect From</th>
                    <th width="40">With Effect To</th>
                </tr>
                </thead>
                <tbody>
                <?php for($i=1; $i<8; $i++) { ?>
                    <tr>
                        <td><input type="text" name="industry" class="form-control"></td>
                        <td><input type="text" name="exper" class="form-control"></td>
                        <td><input type="text" name="cur_pos" class="form-control"></td>
                    </tr>
                <?php } ?>

            </table>
    </div>
    <div id="tabs-6">
        <table id="education_tab_table" class="table table-bordered" style="width:auto; margin-bottom: 10px !important;border: 1px solid rgb(216, 216, 216); padding: 6px; background-color: white; box-shadow: 10px 7px 8px rgb(167, 167, 167);">
                <thead>
                <tr>
                    <th width="250">Category</th>
                    <th width="250">Value</th>
                    <th  width="80">With Effect From</th>
                    <th width="70">With Effect To</th>
                </tr>
                </thead>
                <tbody>
                <?php for($i=1; $i<8; $i++) { ?>
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
    
</div></div>
<table style="margin-bottom: 10px; width:1020px;">

    <tr>
        <td colspan="6" id="table_bottom_bg" style="text-align: right; padding-right: 10px;  padding-bottom: 5px;  padding-top: 4px; ">
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"submit",'size'=>'medium', 'label'=>$model->isNewRecord ? "Save" : "Save",'id'=>'demo_save','icon'=>'icon-hdd')); ?>
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"reset",'size'=>'medium','icon'=>'icon-refresh', 'label'=>'Clear')); ?>
            <?php //echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>

        </td>
    </tr>
</table>
<?php $this->endWidget(); ?>

<!-- form -->