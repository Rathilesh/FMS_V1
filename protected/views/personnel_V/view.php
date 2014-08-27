<?php
/* @var $this Personnel_VController */
/* @var $model Personnel_V */

//$this->breadcrumbs=array(
//	'Personnel  Vs'=>array('index'),
//	$model->PARTY_ID,
//);
//
//$this->menu=array(
//	array('label'=>'List Personnel_V', 'url'=>array('index')),
//	array('label'=>'Create Personnel_V', 'url'=>array('create')),
//	array('label'=>'Update Personnel_V', 'url'=>array('update', 'id'=>$model->PARTY_ID)),
//	array('label'=>'Delete Personnel_V', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PARTY_ID),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage Personnel_V', 'url'=>array('admin')),
//);
?>
<div  id="patternDiv">
 <div class="note"> 
    <div class="labelImage"></div>
        <div class="LabelMsg">
     <p>Details of <?php echo $model->SALUTATION."     ".$model->PREFERED_NAME; ?>
     </p> 
     
 </div></div></div>

<script>
$(function() {
    $( "#tabs" ).tabs({ 
    fx: { height: 'toggle', duration: 'fast' }
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
		box-shadow: 0px 0px 7px 1px rgb(9, 1, 1);
       
    }
    
    #Reg_Outer_Div table {
        margin-bottom:0px !important ;
    }
    
    #top_right_table tr{
	
        
    }
	#top_right_table td { padding:6px; margin:0px; border-bottom: 1px solid #f3f3f3; }
	#register_top_table_fixed {
	background-color:white;
	
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
#Reg_Main_Table td { padding:6px; margin:0px;}
#Reg_Main_Table { background-color:#f3f3f3; padding-top:5px;}
/*#Reg_Main_Table input { width:240px; }*/
</style>
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
                    .label_bold { font-weight:bold !important; padding-left:8px !important  }
                   #PARTY_IMAGE_IMAGE { display:none;  }
                    #upload_b { text-align:center; margin-top:5px;}
					/*label { padding-left: 5px; font-weight: bold;}*/
					.required , label[for=Personnel_V_MIDDILE_NAME], label[for=Personnel_V_DOB],label[for=Personnel_V_RELIGION],label[for=Personnel_V_SUBCAST], label[for=Personnel_V_LAST_NAME], label[for=Personnel_V_ALTERNATE_NAME],  label[for=Personnel_V_GENDER],  label[for=Personnel_V_BLOOD_GROUP],  label[for=Personnel_V_FATHER], label[for=Personnel_V_MOTHER], label[for=Personnel_V_PHONE],label[for=Personnel_V_EMAIL],label[for=Personnel_V_SECONDMENT_ORG_ID] { padding-left:5px; font-weight:bold}
					
					
                </style> 
                <table id="register_top_table_fixed" style="width:100%" class="items table table-bordered">
                    <tr>
                        <td width="20%" style="padding:10px; text-align:center; background-color:#6BA9C7;">
                            <div class="testclass1"></div>
<!--                            <input type="file" name="img-upload" value="upload">-->
                            
                    
                        </td>
                        <td style="padding:6px">
                              
                     <table id="top_right_table">
                        <tr>
                            <td class="label_bold">
							Personal Id
                            </td>
                            <td>
                             <?php echo $model->PERSONAL_ID ;?>
                            </td>
                            <td  class="label_bold">
                                Active
                            </td>
            <td>
				
				
				<table style="margin-bottom:0px;float: left; width: 176px;">
				<tr>
				<td style="border-left:0px; padding:0px ;border-bottom:0px;">
				<?php echo ($model->ACTIVE=="Y" ? "Yes":"No") ;?>
				<!--<span class="label label-info"></span>--><?php //echo $model->ACTIVE ;?> 
				</td>
				<td style="border-left:none; border-bottom:none; padding:0px; padding-left:11px; padding-right:11px;"  class="label_bold">
				
				Verified
			 </td>
              <td style="padding-top: 0px; border-bottom: none; padding-left: 10px;">
			  <?php echo ($model->VERIFIED=="Y" ? "Yes":"No") ;?>
			  <?php //echo $model->VERIFIED ;?> 
			 </td></tr>
				</table>
				
            
            </td>
                            
                        </tr>
                        <tr>
                            <td  class="label_bold">Prefered Name</td>
                            <td colspan="3">
							<?php echo $model->SALUTATION."     ".$model->PREFERED_NAME ;?></td>
                            <!--<td></td>
                            <td></td>-->
                            
                            
                        </tr>
                        <tr>
                            <td  class="label_bold">Date of Birth</td>
                            <td>
							<?php echo ($model->DOB == "" ? "Not Set" :$model->DOB);?>
							<?php //echo $model->DOB ;?> </td>
                            <td  class="label_bold">Gender</td>
                            <td>
							<?php echo ($model->GENDER == "" ? "Not Set" :$model->GENDER);?>
							<?php //echo $model->GENDER ;?> </td>
                           
                            
                        </tr>
                        <tr>
                            <td  class="label_bold">Religion</td>
                            <td>
							<?php echo ($model->RELIGION == "" ? "Not Set" : $model->RELIGION);?>
							<?php //echo $model->RELIGION;?></td>
                            <td  class="label_bold">Blood Group</td>
                            <td>
							<?php echo ($model->BLOOD_GROUP == "" ? "Not Set" : $model->BLOOD_GROUP);?>
							</td>
                            
                        </tr>
                        <tr>
                            <td  class="label_bold">Nationality </td>
                            <td>

							<?php echo $model->NATIONALITY ;?>
                                <!--<span style="width:auto; margin-left: 10px; color: red; text-shadow: 1px 0px 0px rgb(163, 155, 155); font-size:11px">Date Format: dd/mm/yy </span>-->
                            </td>
                            <td  class="label_bold">Married</td>
                            <td>
							<?php echo ($model->MARRIED=="Y" ? "Yes":"No") ;?>
                              <?php //echo $model->MARRIED ;?> 
                                </td>
                            
                        </tr>
                        
						
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
    <li><a href="#tabs-1">Basic Details</a></li>
    <li><a href="#tabs-2">Second Tab</a></li>
    <li><a href="#tabs-3">Third Tab</a></li>
  </ul>
  <div id="tabs-1">
      <table id="Reg_Main_Table">
          <tr>
              <td  rowspan="6" style="padding-right:5px;">
                  <table style="border:1px solid #CACACA; padding:3px">
                      <tr>
                          <td style="text-align:center"><b>Address</b></td>
                      </tr>
                      <tr>
                          <td style="text-align:center">
						  <?php echo (($model->ADDRESS1 == "")&&($model->ADDRESS2 == "") && ($model->ADDRESS3 == "") && ($model->ADDRESS4 == "")  ? "Not Set" : ($model->ADDRESS1)."<br />".($model->ADDRESS2).($model->ADDRESS3)."<br />".($model->ADDRESS4));?>
						 </td>
                      </tr>
                      
                  </table>
              </td>
              
              <td  class="label_bold">Father</td>
              <td>
			   <?php echo ($model->FATHER == "" ? "Not Set" : $model->FATHER);?></td>
              <td  class="label_bold">Phone </td> 
              <td>
			  <?php echo ($model->PHONE == "" ? "Not Set" :$model->PHONE);?>
			  </td>  
              
          </tr>
          <tr>
              <td  class="label_bold">Mother</td> 
              <td>
			  <?php echo ($model->MOTHER == "" ? "Not Set" : $model->MOTHER);?>
			  <?php //echo $model->MOTHER ;?></td>
              <td  class="label_bold">Email</td>
              <td>
			  <?php echo ($model->EMAIL == "" ? "Not Set" : $model->EMAIL);?>
			  <?php //echo $model->EMAIL ;?></td>  
             
          </tr>
          <tr>
            <td  class="label_bold">Dependent</td>
            <td>
			<?php echo ($model->DEPENDENT=="1" ? "Yes":"No") ;?>
			<?php //echo $model->DEPENDENT ;?></td>
            <td  class="label_bold">Casual</td>
            <td>
			<?php echo ($model->CASUAL=="Y" ? "Yes":"No") ;?>
			<?php //echo $model->SECONDMENT ;?>
			
			<?php //echo $model->CASUAL ;?></td>
          </tr>
          <tr>
              <td  class="label_bold">Secondment </td>
            <td>
			<?php echo ($model->SECONDMENT=="Y" ? "Yes":"No") ;?>
			<?php //echo $model->SECONDMENT ;?></td>
            <td  class="label_bold">Secondment Organization</td>
            <td>
			<?php echo ($model->SECONDMENT_ORG_ID == "" ? "Not Set" : $model->SECONDMENT_ORG_ID);?>
			<?php //echo $model->SECONDMENT_ORG_ID ;?></td>
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

    
   
</div>

























<?php 
//$this->widget('zii.widgets.CDetailView', array(
//	'data'=>$model,
//	'attributes'=>array(
//		'PARTY_ID',
//		'PERSONAL_ID',
//		'SALUTATION',
//		'FIRST_NAME',
//		'MIDDILE_NAME',
//		'LAST_NAME',
//		'PREFERED_NAME',
//		'ALTERNATE_NAME',
//		'DOB',
//		'GENDER',
//		'RELIGION',
//		'BLOOD_GROUP',
//		'SUBCAST',
//		'FATHER',
//		'MOTHER',
//		'NATIONALITY',
//		'CASUAL',
//		'MARRIED',
//		'SECONDMENT',
//		'SECONDMENT_ORG_ID',
//		'VERIFIED',
//		'ACTIVE',
//		'ADDRESS1',
//		'ADDRESS2',
//		'ADDRESS3',
//		'ADDRESS4',
//		'PHONE',
//		'EMAIL',
//		'ENTITY_ID',
//	),
//));

 ?>
