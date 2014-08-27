<?php
/* @var $this Md_User_RoleController */
/* @var $model Md_User_Role */
/* @var $form CActiveForm */
?>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom_styles/bank_style.css" /> </link> 
<style>
    .role{ width:232px; } 
    .WEF{ width:232px; } 
    .WET{ width:232px; } 
    .grid_insert_table 
    {
        border-bottom:none !important;
        border-bottom-left-radius: 0px !important;
        border-bottom-right-radius: 0px !important;
        padding-bottom: 0px !important;
        box-shadow: 0px -4px 8px 1px #c4c4c4 !important;
       
    }

.tbl_btn 
{
height:35px;
width: 665px;
border: 1px solid #D3D0D0;
border-radius: 10px;
border-top: none;
border-top-left-radius: 0px;
border-top-right-radius: 0px;
box-shadow: 0px 6px 15px 0px #c4c4c4;
}

     #outer_border_table{
border: 1px solid #eeeeee;
border-radius: 10px;
box-shadow: 0px 0px 22px 3px #c4c4c4;
}
    #register_top_table_fixed {
        background-color:white;
/*        margin-left: 10px;*/
        box-shadow: 6px 0px 8px rgb(167, 167, 167);
        margin-bottom: 0px;

    .fixedHeader 
    {
        position: relative;
        display: block;
    }
    .text
    {
       color:#F00;   
    }
    .user
    {
        padding-left : 50px;
    }
    .form-control 
    {
                display: block !important;

/*                width: 100% !important;*/
                height: 22px !important;
/*                padding: 6px 12px !important;*/
                font-size: 14px !important;
                line-height: 1.428571429 !important;
                color: #555 !important;
                vertical-align: middle !important;
                background-color: #fff !important;
                background-image: none !important;
                border: 1px solid #ccc !important;
                border-radius: 4px !important;
                box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
                -webkit-transition: border linear .2s, box-shadow linear .2s;
                -moz-transition: border linear .2s, box-shadow linear .2s;
                -o-transition: border linear .2s, box-shadow linear .2s;
                transition: border linear .2s, box-shadow linear .2s;
            }
     .form-control-select 
     {
                display: block !important;
             
                width:120px ;
                height: 22px !important;
                /*padding: 6px 12px !important;*/
                font-size: 14px !important;
                line-height: 1.428571429 !important;
                color: #555 !important;
                vertical-align: middle !important;
                background-color: #CCC!important;
                background-image: none !important;
                border: 1px solid #ccc !important;
                border-radius: 4px !important;
               box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
                -webkit-transition: border linear .2s, box-shadow linear .2s;
                -moz-transition: border linear .2s, box-shadow linear .2s;
                -o-transition: border linear .2s, box-shadow linear .2s;
                transition: border linear .2s, box-shadow linear .2s;
            }
            
 </style>   
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'md--user--role-form',
	'enableAjaxValidation'=>false,
)); ?>

	

	<?php echo $form->errorSummary($model); ?>
	
<!--     <div class="row">
		<?php echo $form->labelEx($model,'MRD_ID'); ?>
		<?php echo $form->textField($model,'MRD_ID'); ?>
		<?php echo $form->error($model,'MRD_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USR_ID'); ?>
		<?php echo $form->textField($model,'USR_ID',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'USR_ID'); ?>
	</div>-->

      <table style="margin-bottom:  0px;width: 79%;background-color: #F8F8F8;border-radius: 10px;" id=" #outer_border_table" class="items table table-bordered">
       <tr>
            <td style="padding-top:10px;padding-left: 10px;padding-right: 10px;">    
              <table id="major_table"><br>
<!--   <div class="user">-->
    <tr>   
    <td><b>User Name</b></td>
<!--    	&nbsp;&nbsp;&nbsp;-->
        
        
<!--        &nbsp;&nbsp;-->
   <td> <input type="text" id="text" name="Username"></td>
    </tr>
     </table>   
<!--  </div>-->
    
<br>

	
 <!-- <h4 style="text-align:center;color:#F0F">USER ROLES </h4> -->
     <br>
  <table border="2" class="grid_insert_table" style="width:366px !important;">
       <thead class="fixedHeader">
        <tr class="header-class">

            <th class="role">Role<a class="field_level_help" href="#Role"></a></th>
            <th class="WEF">WEF Date<a class="field_level_help" href="#WEF"></a></th>
            <th class="WET">WET Date<a class="field_level_help" href="#WET"></a></th>
        </tr>  
      </thead>
      <tbody class="">
        <tr>
              <td><input type="text" name="role1"></td>
               <td><input type="text" name="role1"></td>
                <td><input type="text" name="role1"></td>
              
        </tr>
        <tr>
              <td><input type="text" name="role2"></td>
               <td><input type="text" name="role1"></td>
                <td><input type="text" name="role1"></td>
              
         </tr>
         <tr>
               <td><input type="text" name="role3"></td>
                <td><input type="text" name="role1"></td>
                 <td><input type="text" name="role1"></td>
               
          </tr>
          <tr>
                <td><input type="text" name="role4"></td>
                 <td><input type="text" name="role1"></td>
                  <td><input type="text" name="role1"></td>
                
		 </tr>
         
         <tr>
                <td><input type="text" name="rol5"></td>
                 <td><input type="text" name="role1"></td>
                  <td><input type="text" name="role1"></td>
                
		 </tr>
         <tr>
                <td><input type="text" name="role6"></td>
                 <td><input type="text" name="role1"></td>
                  <td><input type="text" name="role1"></td>

               
		 </tr>
    </tbody>
    <tbody>
     <tr>
      <td><input type="text" name="wef11"></td>
    </tr>
    
        <tr>      <td><input type="text" name="wef2"></td> 
            </tr>  
         <tr>     <td><input type="text" name="wef3"></td>
             </tr>  
             <tr>  <td><input type="text" name="wef4"></td>
           </tr>     
           <tr>     <td><input type="text" name="wef5"></td>
             </tr>   
               <tr>  <td><input type="text" name="wef6"></td>
               </tr> 
      </tbody>
      <tbody>
     <tr>
              <td><input type="text" name="wet1"></td>
          </tr>     
           <tr>    <td><input type="text" name="wet2"></td>
             </tr> 
             <tr> <td><input type="text" name="wet3"></td>
             </tr>  
             <tr>  <td><input type="text" name="wet4"></td>
              </tr> 
              <tr>
              <td><input type="text" name="wet5"></td>
             </tr>  
             <tr><td><input type="text" name="wet6"></td>
             </tr>
      </tbody>
     <tr>
     <td style="padding-bottom:10px;padding-left: 10px;padding-right: 10px;">
         <table class="tbl_btn" id="table_bottom_bg">
                                 
          <tr>
         
            <td><img title='Add Rows' rel="sub_table+2" id='clone_button' src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/icon_plus.png" style='cursor:pointer;float:right;margin-right:10px;padding-top: 5px;'>  
                                                  <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"button",'size'=>'small', 'label'=> "reset",'id'=>"btn_Save",'icon'=>'icon-thumbs-up','htmlOptions'=>array('style'=>'float:right;margin-right:5px;'))); ?>            
                                                    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"button",'size'=>'small', 'label'=>"submit",'id'=>"btn_Reset",'icon'=>'icon-refresh','htmlOptions'=>array('style'=>'float:right;margin-right:5px;'))); ?>            
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>

	 <!--	<div class="row">
		<?php echo $form->labelEx($model,'CREATOR_ID'); ?>
		<?php echo $form->textField($model,'CREATOR_ID',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'CREATOR_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CREATED_ON'); ?>
		<?php echo $form->textField($model,'CREATED_ON'); ?>
		<?php echo $form->error($model,'CREATED_ON'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MODIFIER_ID'); ?>
		<?php echo $form->textField($model,'MODIFIER_ID',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'MODIFIER_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MODIFIED_ON'); ?>
		<?php echo $form->textField($model,'MODIFIED_ON'); ?>
		<?php echo $form->error($model,'MODIFIED_ON'); ?>
	</div>-->

<!--	<div class="row buttons">
		//<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>-->

<?php $this->endWidget(); ?>

</div><!-- form -->