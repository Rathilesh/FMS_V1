<?php
/* @var $this Personnel_VController */
/* @var $model Personnel_V */
/* @var $form CActiveForm */
$config = array( 
//'easingEnabled'=>TRUE
   // 'onStart'=>'js: alert("sdj sdsjdskdjskd")',
   // 'model'=>false,
    'hideOnOverlayClick'=>FALSE,
    'transitionIn'=>'elastic',
    'transitionOut'=>'elastic',
    //'afterClose'=>'js:alert($("#GetAllPersonTable").text())',
    'ajax'=> array('complete'=>'js:function(jqXHR, textStatus) {  
        $(".testclickclass").click(function(){
        var TrimmedText=$(this).text();
        TrimmedText =$.trim(TrimmedText);
        $("#PERSONAL_ID").val(TrimmedText);
        $.fancybox.close();
        
});

        $("#serch_text_id").keyup(function(){
        //alert("keyuped");
              $.ajax({
                url: "GetAllPersonOnSearch",
                type: "post",
                data: { term : $("#serch_text_id").val() },
                success: function(data){
                    //alert(data);
                    $("#GetAllPersonTableOuter").html(data);
                },
                complete: function(jqXHR, textStatus) {  
                        $(".testclickclass").click(function(){
                        var TrimmedText=$(this).text();
                        TrimmedText =$.trim(TrimmedText);
                        $("#PERSONAL_ID").val(TrimmedText);
                        $.fancybox.close();
                        });
                        },
                error:function(){
                    alert("failure");
                   // $("#result").html("There is error while submit");
                }
                    });
        });
        

    }'),
);
$this->widget('application.extensions.fancybox.EFancyBox', array(
'target'=>'#getaction',
'config'=>$config,
      
    ));

?>
<script>
    $(document).ready(function(){
         $('label[for="Personnel_V_ACTIVE"]').hide();
           //alert($(this).text());  
     // $('label[for="Personnel_V_ACTIVE"]').hide();
      // alert($('span').innerText);
    $('.labelRight').text("No");
//      $("#serch_text_id").keyup(function(){
//        //alert("some");
//        });
        //$('.date').mask('11/11/1111');
    $("#datepicker").mask("99/99/9999");
    $( "#datepicker" ).datepicker({
    changeMonth: true,
    changeYear: true
    });
    $( "#datepicker" ).datepicker( "option", "showAnim", "bounce" );
    $( "#datepicker" ).datepicker( "option", "dateFormat", "dd-mm-yy" );
  $(function() {
    $( "#tabs" ).tabs({ 
    fx: { height: 'toggle', duration: 'fast' }
});
     //collapsible: true
	 
	 
  });
  
        
    });
	
	
	
	
	
	
	
    </script>
	
	
<style>
    #datepicker { width: 97px;}
    .ui-tabs .ui-tabs-nav li.ui-tabs-active { color: rgb(44, 119, 67)}
/*    .ui-tabs .ui-tabs-nav li .ui-tabs-active:hover {background: red;}*/
    .ui-tabs .ui-tabs-nav li.ui-tabs-active :hover { background-color:#1E7FB6 !important; color:#FFFFFF}
    .ui-tabs .ui-tabs-panel { padding: 0px !important;}
    .ui-tabs { padding: 0px !important }
    /*.ui-tabs .ui-tabs-nav { padding: 0px !important; border: 1px solid #F8F3F3 !important;}*/
	.ui-tabs .ui-tabs-nav li  a { color: red; background-color:rgb(30, 127, 182);}
    .ui-tabs .ui-tabs-nav li.ui-tabs-active a { color: white; background-color:rgb(30, 127, 182);}
    .ui-tabs .ui-tabs-nav li.ui-tabs-active a:hover { color: #4696BF; background-color: red}
    .ui-tabs .ui-tabs-nav li a, .ui-tabs-collapsible .ui-tabs-nav li.ui-tabs-active a {color: white; font-weight:bold}
    .ui-tabs .ui-tabs-nav li a, .ui-tabs-collapsible .ui-tabs-nav li.ui-tabs-active a:hover {color: white; font-weight:bold}
	.ui-tabs .ui-tabs-nav li a { color: white;}
	
	.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default { background-color: rgb(44, 119, 67) }
    fieldset { 
        border: 1px solid #E8E8E8;
        box-shadow: 0px 0px 6px #000020; 
        border: 5%;
        background-color: rgb(228, 228, 228);
    }

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
       
    }
    
    #Reg_Outer_Div table {
        margin-bottom:0px !important ;
    }
    
    #top_right_table tr{
	/*height:30px;*/
        /*padding-bottom: 5px;
        padding-top: 5px;
        padding-left: 1%;
        
        border-bottom: 1px solid #ECECEC;*/
        
        /*background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxyYWRpYWxHcmFkaWVudCBpZD0iZyI+PHN0b3Agb2Zmc2V0PSIwIiBzdG9wLWNvbG9yPSIjZmZmZmZmIi8+PHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSJyZ2JhKDAsIDAsIDAsIDAuMDk2KSIvPjwvcmFkaWFsR3JhZGllbnQ+PHJlY3QgeD0iMCUiIHk9IjAlIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJyZ2JhKDAsIDAsIDAsIDAuMDk2KSIgLz48cmVjdCB4PSItMjAuNzEwNyUiIHk9Ii0yMC43MTA3JSIgd2lkdGg9IjE0MS40MjE0JSIgaGVpZ2h0PSIxNDEuNDIxNCUiIGZpbGw9InVybCgjZykiIC8+PC9zdmc+);
        background-image: -webkit-gradient(radial, 50% 50%, 0, 50% 50%, 127, color-stop(0%, #ffffff), color-stop(100%, rgba(156, 156, 156, 0.096)));
        background-image: -webkit-radial-gradient(center center, closest-corner, #ffffff 0%, rgba(156, 156, 156, 0.096) 100%);
        background-image: -moz-radial-gradient(center center, closest-corner, #ffffff 0%, rgba(156, 156, 156, 0.096) 100%);
        background-image: -ms-radial-gradient(center center, closest-corner, #ffffff 0%, rgba(156, 156, 156, 0.096) 100%);
        background-image: -o-radial-gradient(center center, closest-corner, #ffffff 0%, rgba(156, 156, 156, 0.096) 100%);
        background-image: radial-gradient(closest-corner at center center, #ffffff 0%, rgba(156, 156, 156, 0.096) 100%);*/
        
    }
	#top_right_table td { padding:3px; margin:0px; border-bottom: 1px solid rgb(91, 136, 97); }
	#register_top_table_fixed {
	background-color:rgb(187, 213, 195); margin-top:10px;
	/*background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxyYWRpYWxHcmFkaWVudCBpZD0iZyI+PHN0b3Agb2Zmc2V0PSIwIiBzdG9wLWNvbG9yPSIjZmZmZmZmIi8+PHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSJyZ2JhKDAsIDAsIDAsIDAuMDk2KSIvPjwvcmFkaWFsR3JhZGllbnQ+PHJlY3QgeD0iMCUiIHk9IjAlIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJyZ2JhKDAsIDAsIDAsIDAuMDk2KSIgLz48cmVjdCB4PSItMjAuNzEwNyUiIHk9Ii0yMC43MTA3JSIgd2lkdGg9IjE0MS40MjE0JSIgaGVpZ2h0PSIxNDEuNDIxNCUiIGZpbGw9InVybCgjZykiIC8+PC9zdmc+);
        background-image: -webkit-gradient(radial, 50% 50%, 0, 50% 50%, 127, color-stop(0%, #ffffff), color-stop(100%, rgba(156, 156, 156, 0.096)));
        background-image: -webkit-radial-gradient(center center, closest-corner, #ffffff 0%, rgba(156, 156, 156, 0.096) 100%);
        background-image: -moz-radial-gradient(center center, closest-corner, #ffffff 0%, rgba(156, 156, 156, 0.096) 100%);
        background-image: -ms-radial-gradient(center center, closest-corner, #ffffff 0%, rgba(156, 156, 156, 0.096) 100%);
        background-image: -o-radial-gradient(center center, closest-corner, #ffffff 0%, rgba(156, 156, 156, 0.096) 100%);
        background-image: radial-gradient(closest-corner at center center, #ffffff 0%, rgba(156, 156, 156, 0.096) 100%);*/
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
#Reg_Main_Table { background-color:#A6DFFA; padding-top:4px;}
#Reg_Main_Table input { width:200px; }
</style>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
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
                    
                   /*  NEW STYLES FOR NEW DESIGN  */
				   
				   .td_common_styles td { padding:5px; }
				   #left_side_table td { padding-left:15px; }
				   #left_side_table {padding-bottom:10px;}
				   .ui-tabs .ui-tabs-nav {
					padding: 0px !important;
					background-color:rgb(25, 159, 211);
					border: none;
					}
                    
                </style>
				<?php echo $form->errorSummary($model); ?>
				
				
				
				
				<!--------New Style Is Starting--------->
				
				
				<table style="box-shadow: 0px 0px 5px black; margin-bottom:10px; padding-top:10px; padding-bottom:10px; background-color:rgb(166, 223, 250);">
					<tr>
					<!----Left side Content------>
					<td  style="vertical-align:top">
							<table id="left_side_table" class="td_common_styles">
							    <tr>
									<td><?php echo $form->labelEx($model,'PERSONAL_ID'); ?></td>
									<td><?php echo $form->textField($model,'PERSONAL_ID'); ?></td>
								</tr>
								<tr>
									<td><label for="Personnel_V_ACTIVE1" class="required" style="display: block; ">Active <span class="required">*</span></label></td>
									<td><?php echo $form->toggleButtonRow($model, 'ACTIVE', array('options'=>array('enabledLabel'=>'Yes' , 'disabledLabel'=>'No')),array('labelOptions' => array("label" => false))); ?></td>
								</tr>
								<tr>
									<td><?php echo $form->labelEx($model,'SALUTATION'); ?></td>
									<td><?php echo $form->textField($model,'SALUTATION',array('size'=>30,'maxlength'=>30)); ?></td>
								</tr>
								
								<tr>
                            <td><?php echo $form->labelEx($model,'DOB'); ?></td>
                            <td><?php echo $form->textField($model,'DOB',array('id'=>'datepicker')); ?>
                                <?php echo $form->error($model,'DOB'); ?>
                                <span style="width:auto; margin-left: 10px; color: red; text-shadow: 1px 0px 0px rgb(163, 155, 155); font-size:11px">Date Format: dd/mm/yy </span>
                            </td>
							</tr><tr>
							
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
								</tr><tr>
                            <td><?php echo $form->labelEx($model,'BLOOD_GROUP'); ?></td>
                            <td>
                                <?php echo $form->dropDownList($model,'BLOOD_GROUP', CHtml::listData(BASIC_DEFINITION::model()->findAll("DFCTG_DEFINITION_TYPE='BLOOD_GROUP'"), 'SHORT_NAME', 'DESCRIPTION'), array('empty'=>'--Please Select--')); ?>
                                <?php //echo $form->textField($model,'BLOOD_GROUP',array('size'=>30,'maxlength'=>30)); ?>
                                <?php echo $form->error($model,'BLOOD_GROUP'); ?></td>
                            
                        </tr>
							</table>
					</td>
					<!----Center side Content------>
					<td  style=" width:214px; vertical-align:top; margin:0 auto">
					<div class="testclass1"></div>
					<?php echo CHtml::activeFileField($party_image_model, 'IMAGE'); ?>
					</td>
					<!----Right side Content------>
					<td  style="vertical-align:top">
							<table id="right_side_table" class="td_common_styles">
								<tr>
									<td><?php echo $form->labelEx($model,'FIRST_NAME'); ?></td>
									<td><?php echo $form->textField($model,'FIRST_NAME',array('size'=>50,'maxlength'=>50)); ?></td>
								</tr>
								<tr>
									<td><?php echo $form->labelEx($model,'MIDDILE_NAME'); ?></td>
									<td><?php echo $form->textField($model,'MIDDILE_NAME',array('size'=>50,'maxlength'=>50)); ?></td>
								</tr>
								<tr>
									<td><?php echo $form->labelEx($model,'LAST_NAME'); ?></td>
                            <td><?php echo $form->textField($model,'LAST_NAME',array('size'=>50,'maxlength'=>50)); ?>
                                <?php echo $form->error($model,'LAST_NAME'); ?></td>
							
                           
								</tr>
								<tr>
                            <td><?php echo $form->labelEx($model,'PREFERED_NAME'); ?></td>
                            <td><?php echo $form->textField($model,'PREFERED_NAME',array('size'=>60,'maxlength'=>100)); ?>
                                <?php echo $form->error($model,'PREFERED_NAME'); ?></td>
								</tr>
								
								<tr>
								<td><?php echo $form->labelEx($model,'ALTERNATE_NAME'); ?></td>
                            <td><?php echo $form->textField($model,'ALTERNATE_NAME',array('size'=>60,'maxlength'=>100)); ?>
                                <?php echo $form->error($model,'ALTERNATE_NAME'); ?></td>
								</tr>
								<tr>
                            <td><?php echo $form->labelEx($model,'SUBCAST'); ?></td>
                            <td><?php //echo $form->textField($model,'SUBCAST',array('size'=>30,'maxlength'=>30)); ?>
                                <?php echo $form->dropDownList($model,'SUBCAST', CHtml::listData(BASIC_DEFINITION::model()->findAll("DFCTG_DEFINITION_TYPE='SUBCAST'"), 'SHORT_NAME', 'DESCRIPTION'), array('empty'=>'--Please Select--')); ?>
                                <?php echo $form->error($model,'SUBCAST'); ?></td>
								</tr><tr>
                            <td><?php echo $form->labelEx($model,'NATIONALITY'); ?></td>
                            <td> <?php echo $form->dropDownList($model,'NATIONALITY', CHtml::listData(Nationalities::model()->findAll(), 'NATIONALITY_CODE', 'NATIONALITY_NAME'), array('empty'=>'--Please Select--')); ?>
                                <?php //echo $form->textField($model,'NATIONALITY',array('size'=>30,'maxlength'=>30)); ?>
                                <?php echo $form->error($model,'NATIONALITY'); ?></td>
                        </tr>
								
							</table>
					</td>
					</tr>
					
					<!----sart tabbed content---->
					<tr>
					<td colspan="3">
					
						<div id="tabs">
						  <ul>
							<li><a href="#tabs-1">Basic Details</a></li>
							<li><a href="#tabs-2">Second Tab</a></li>
							<li><a href="#tabs-3">Third Tab</a></li>
						  </ul>
						  <div id="tabs-1">
							  <table id="Reg_Main_Table">
								  <tr>
									  <td  rowspan="6" style="padding-right:5px;">
										  <table style="border: outset 1px rgb(255, 255, 255); padding:3px">
											  <tr>
												  <td style="text-align:center">Address</td>
											  </tr>
											  <tr>
												  <td style="text-align:center"><?php echo $form->textField($model,'ADDRESS1',array('size'=>60,'maxlength'=>100)); ?>
										<?php echo $form->error($model,'ADDRESS1'); ?></td>
											  </tr>
											  <tr>
												 <td style="text-align:center"><?php echo $form->textField($model,'ADDRESS2',array('size'=>60,'maxlength'=>100)); ?>
										<?php echo $form->error($model,'ADDRESS2'); ?></td>
											  </tr>
											  <tr>
												 <td style="text-align:center"><?php echo $form->textField($model,'ADDRESS3',array('size'=>60,'maxlength'=>100)); ?>
										<?php echo $form->error($model,'ADDRESS3'); ?></td>
											  </tr>
											  <tr>
												 <td style="text-align:center"><?php echo $form->textField($model,'ADDRESS4',array('size'=>60,'maxlength'=>100)); ?>
										<?php echo $form->error($model,'ADDRESS4'); ?></td>
											  </tr>
										  </table>
									  </td>
									  
									  <td><?php echo $form->labelEx($model,'FATHER'); ?></td>
									  <td><?php echo $form->textField($model,'FATHER',array('size'=>60,'maxlength'=>100)); ?>
										  <?php echo $form->error($model,'FATHER'); ?></td>  
									  <td><?php echo $form->labelEx($model,'PHONE'); ?></td> 
									  <td><?php echo $form->textField($model,'PHONE',array('size'=>60,'maxlength'=>100)); ?>
										  <?php echo $form->error($model,'PHONE'); ?></td>  
									  
								  </tr>
								  <tr>
									  <td><?php echo $form->labelEx($model,'MOTHER'); ?></td> 
									  <td><?php echo $form->textField($model,'MOTHER',array('size'=>60,'maxlength'=>110)); ?>
										  <?php echo $form->error($model,'MOTHER'); ?></td>
									   
									  <td><?php echo $form->labelEx($model,'EMAIL'); ?></td>
									  <td><?php echo $form->textField($model,'EMAIL',array('size'=>60,'maxlength'=>100)); ?>
										<?php echo $form->error($model,'EMAIL'); ?></td>  
									 
								  </tr>
								  <tr>
										<td><?php echo $form->labelEx($model,'MARRIED'); ?></td>
									  <td><?php echo $form->textField($model,'MARRIED',array('size'=>1,'maxlength'=>1)); ?>
										<?php echo $form->error($model,'MARRIED'); ?></td> 
									  <td><?php echo $form->labelEx($model,'VERIFIED'); ?></td>
									  <td><?php echo $form->textField($model,'VERIFIED',array('size'=>1,'maxlength'=>1)); ?>
										<?php echo $form->error($model,'VERIFIED'); ?></td>  
								  </tr>
								  <tr>
									<td><?php echo $form->labelEx($model,'DEPENDENT'); ?></td>
									<td><?php echo $form->textField($model,'DEPENDENT',array('size'=>60,'maxlength'=>1)); ?>
										<?php echo $form->error($model,'DEPENDENT'); ?></td>
									<td><?php echo $form->labelEx($model,'CASUAL'); ?></td>
									<td><?php echo $form->textField($model,'CASUAL',array('size'=>1,'maxlength'=>1)); ?>
										<?php echo $form->error($model,'CASUAL'); ?></td>
								  </tr>
								  <tr>
									  <td><?php echo $form->labelEx($model,'SECONDMENT'); ?></td>
									<td><?php echo $form->textField($model,'SECONDMENT',array('size'=>1,'maxlength'=>1)); ?>
										<?php echo $form->error($model,'SECONDMENT'); ?></td>
									<td><?php echo $form->labelEx($model,'SECONDMENT_ORG_ID'); ?></td>
									<td><?php echo $form->textField($model,'SECONDMENT_ORG_ID'); ?>
										<?php echo $form->error($model,'SECONDMENT_ORG_ID'); ?></td>
								  </tr>
								  
							  </table>
							
						  </div>
						  <div id="tabs-2">
							<p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
						  </div>
						  <div id="tabs-3">
							<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
							<p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
						  </div>
						</div>
					</td>
					<!--end-->
					<tr>
					<td colspan="3" style="padding-right:22px;">
					<table>
						 
						<tr>
							<td colspan="6" style="text-align: right; padding-right: 0px; padding-top:0px">
								<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"submit",'size'=>'medium', 'label'=>$model->isNewRecord ? "Save" : "Save",'id'=>'demo_save','icon'=>'icon-hdd')); ?>
								<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"reset",'size'=>'medium','icon'=>'icon-refresh', 'label'=>'Clear')); ?>
								<?php //echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
							
							</td>
						</tr>
					</table>
					</td>
					</tr>
					
				</table>
				
				<!--------New Style Is Starting--------->
				
				
				
				
				
				
				
				
				
				
				
				
				
				
                
    
   
</div>   
</div>


<?php $this->endWidget(); ?>

<!-- form -->