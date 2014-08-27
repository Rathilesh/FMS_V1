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

<table style="margin-bottom: 0px;">
        <tr>
        <td>
        <table id="register_top_table_fixed" style="width:100%" class="items table table-bordered">
            <tr>
                <td width="15%" style="padding: 5px;text-align: center;">
                     <div class="testclass1"></div>
                    <!-- <input type="file" name="img-upload" value="upload">-->
                    <?php echo CHtml::activeFileField($party_image_model, 'IMAGE'); ?>
                    <!--<button id="upload_b" class="btn btn-primary btn-small" data-loading-text="Loading...">Upload <i class="icon-white icon-camera "></i></button>-->
                    <?php //echo $form->fileFieldRow($party_image_model, 'IMAGE'); ?>
                </td>
                <td style="padding:6px">

                    <table id="top_right_table" style="margin-bottom: 0px;">
                        <tr>
                            <td><?php echo $form->labelEx($model,'PERSONAL_ID'); ?></td>
                            <td style="width:198px"><?php echo $form->textField($model,'PERSONAL_ID',array('class'=>'form-control')); ?></td>
                            <td colspan="4">
                                <table style="margin-bottom:0px" id="toggle_include_table">
                                    <tr>
                                        <td style="border-left:none; border-bottom: none"><label for="Personnel_V_ACTIVE1" class="required" style="display: block; ">Is Personnel Active? </label></td>
                                        <td style="border-bottom: none"><?php echo $form->toggleButtonRow($model, 'ACTIVE', array('options'=>array('enabledLabel'=>'Yes' , 'disabledLabel'=>'No'),'htmlOptions'=>array('type'=>'mini')),array('labelOptions' => array("label" => false))); ?></td>
                                        <td style="border-bottom: none"><label for="Personnel_V_VERIFIED1" class="required" style="display: block; ">Is Data Verified?</label></td>
                                        <td style="border-bottom: none"><?php //echo $form->toggleButtonRow($model, 'VERIFIED', array('options'=>array('enabledLabel'=>'Yes' , 'disabledLabel'=>'No')),array('labelOptions' => array("label" => false))); ?></td>
                                        <td style="border-bottom: none"><label for="Personnel_V_MARRIED1" class="required" style="display: block; ">Are You Married?</label></td>
                                        <td style="border-bottom: none"><?php echo $form->toggleButtonRow($model, 'MARRIED', array('options'=>array('enabledLabel'=>'Yes' , 'disabledLabel'=>'No')),array('labelOptions' => array("label" => false))); ?></td>
                                    </tr>
                                </table>
                            </td>
<!--                         <td> <label for="Personnel_V_ACTIVE1" class="required" style="display: block; ">Is Personnel Active? <span class="required">*</span></label></td>
                            <td> <?php //echo $form->toggleButtonRow($model, 'ACTIVE', array('options'=>array('enabledLabel'=>'Yes' , 'disabledLabel'=>'No'),'htmlOptions'=>array('type'=>'mini')),array('labelOptions' => array("label" => false))); ?></td>
                            <td><label for="Personnel_V_VERIFIED1" class="required" style="display: block; ">Is Data Verified?<span class="required">*</span></label></td>
                            <td><?php //echo $form->toggleButtonRow($model, 'VERIFIED', array('options'=>array('enabledLabel'=>'Yes' , 'disabledLabel'=>'No')),array('labelOptions' => array("label" => false))); ?></td>-->
                        </tr>
                        <tr>
                            <td><?php echo $form->labelEx($model,'LAST_NAME'); ?></td>
                            <td><?php echo $form->textField($model,'LAST_NAME',array('maxlength'=>50,'class'=>'form-control')); ?></td>
                            <td><?php echo $form->labelEx($model,'SALUTATION'); ?></td>
                            <td><div class="col-xs-2"><?php echo $form->textField($model,'SALUTATION',array('size'=>10,'class'=>'form-control')); ?></div></td>
                            <td><?php echo $form->labelEx($model,'FIRST_NAME'); ?></td>
                            <td><?php echo $form->textField($model,'FIRST_NAME',array('class'=>'form-control','maxlength'=>50)); ?></td>
                        </tr>
                        <tr>
                            <td><label for="Personnel_V_LAST_NAME"><b> Middle Name</b></label></td>
                            <td><?php echo $form->textField($model,'MIDDILE_NAME',array('class'=>'form-control','maxlength'=>50)); ?></td>
                            <td><?php echo $form->labelEx($model,'PREFERED_NAME'); ?></td>
                            <td><?php echo $form->textField($model,'PREFERED_NAME',array('class'=>'form-control','maxlength'=>100)); ?></td>
                            <td><?php echo $form->labelEx($model,'ALTERNATE_NAME'); ?></td>
                            <td><?php echo $form->textField($model,'ALTERNATE_NAME',array('class'=>'form-control','maxlength'=>100)); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $form->labelEx($model,'DOB'); ?></td>
                            <td><?php echo $form->textField($model,'DOB',array('id'=>'datepicker','placeholder'=>'dd/mm/yy')); ?></td>
                            <td><?php echo $form->labelEx($model,'GENDER'); ?></td>
                            <td><?php echo $form->dropDownList($model,'GENDER', CHtml::listData(BASIC_DEFINITION::model()->findAll("DFCTG_DEFINITION_TYPE='GENDER'"), 'SHORT_NAME', 'DESCRIPTION'), array('empty'=>'--Please Select--','class'=>'form-control-select'));
                                ?></td>
                            <td><?php echo $form->labelEx($model,'BLOOD_GROUP'); ?></td>
                            <td><?php echo $form->dropDownList($model,'BLOOD_GROUP', CHtml::listData(BASIC_DEFINITION::model()->findAll("DFCTG_DEFINITION_TYPE='BLOOD_GROUP'"), 'SHORT_NAME', 'DESCRIPTION'), array('empty'=>'--Please Select--','class'=>'form-control-select')); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $form->labelEx($model,'NATIONALITY'); ?></td>
                            <td><?php echo $form->dropDownList($model,'NATIONALITY', CHtml::listData(BASIC_DEFINITION::model()->findAll(), 'NATIONALITY_CODE', 'NATIONALITY_NAME'), array('empty'=>'--Please Select--','class'=>'form-control-select')); ?></td>
                            <td><?php echo $form->labelEx($model,'RELIGION'); ?></td>
                            <td><?php echo $form->dropDownList($model,'RELIGION', CHtml::listData(BASIC_DEFINITION::model()->findAll("DFCTG_DEFINITION_TYPE='RELIGION'"), 'SHORT_NAME', 'DESCRIPTION'), array('empty'=>'--Please Select--','class'=>'form-control-select')); ?></td>
                            <td><?php echo $form->labelEx($model,'SUBCAST'); ?></td>
                            <td><?php echo $form->dropDownList($model,'SUBCAST', CHtml::listData(BASIC_DEFINITION::model()->findAll("DFCTG_DEFINITION_TYPE='SUBCAST'"), 'SHORT_NAME', 'DESCRIPTION'), array('empty'=>'--Please Select--','class'=>'form-control-select')); ?></td>
                        </tr>
                    </table>


                </td>
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
    <li><a href="#tabs-6">More</a></li>
  </ul>
    <div id="tabs-1">
    <div class="scroll-pane" style="width:100%; height: 257px; float: left; overflow-y: scroll">
        <div id="accordion" style="width: 100% !important;">
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
<table style="margin-bottom: 10px;">

    <tr>
        <td colspan="6" id="table_bottom_bg" style="text-align: right; padding-right: 20px;  padding-bottom: 5px;  padding-top: 4px; ">
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"submit",'size'=>'medium', 'label'=>$model->isNewRecord ? "Save" : "Save",'id'=>'demo_save','icon'=>'icon-hdd')); ?>
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"reset",'size'=>'medium','icon'=>'icon-refresh', 'label'=>'Clear')); ?>
            <?php //echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>

        </td>
    </tr>
</table>
<?php $this->endWidget(); ?>

<!-- form -->