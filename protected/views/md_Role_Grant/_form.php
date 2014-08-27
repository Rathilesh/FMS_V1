<?php
/* @var $this Md_Role_GrantController */
/* @var $model Md_Role_Grant */
/* @var $form CActiveForm */
?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom_styles/role_grant_style.css"/></link>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/custom_jquery/validation_v1.js" type="text/javascript"></script>

<div class="form">
 
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'md--role--grant-form',
	'enableAjaxValidation'=>false,
)); ?>

	
	<?php echo $form->errorSummary($model); ?>

    <table id="outer_border_table">
          <tr>
          <td style="padding-top:10px;padding-left: 10px;padding-right: 10px;"> 
              <table id="major_table">
                  <tr></tr>
                        <tr>
                        <td style="padding-bottom:10px;">
                        <label class="font" for="Period Name"><?php echo 'Role:';?></label>
                        </td>
                        <td style="padding-left:12px;">
                        <div class="input-append">
                        <?php echo $form->textField($model,'MENU_PROMPT',array('class'=>'short_name_textbox','placeholder'=>'Role')); ?><a class="field_level_help_on_txt" href="#Period_Name"><span class="add-on" style="width:3px !important"></span></a>
                               
                             </div>
                              
                        </td>
                        </tr>
             </table>
          </td>
          </tr>
         <tr>
             <td>    
    
    <table style="border:2" class="grid_insert_table" id="BDC">
    <thead class="fixedHeader">
       
            <th class="Pm">     <?php echo 'Parent Menu'; ?><a class="field_level_help" href="#DefinitionType"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8"></a></th>
            <th class="Desc">   <?php echo 'Default Menu Parent';?><a class="field_level_help" href="#Description"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8"></a></th>
            <th class="Prompt"> <?php echo 'Menu Prompt';?><a class="field_level_help" href="#Records"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8"></a></th>
            <th class="Create"> <?php echo 'Create'; ?><a class="field_level_help" href="#Amend"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8"></a></th>
            <th class="Delete"> <?php echo 'Delete'; ?><a class="field_level_help" href="#Display"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8"></a></th>
            <th class="Edit">   <?php echo 'Edit'; ?><a class="field_level_help" href="#Universal"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8"></a></th>
        
    </thead>
<!--         Setting Total Row Count-->
        <?php 
       
            if(isset($_POST['TotRowCount'])<>'')
            {
                $loop_c=$_POST['TotRowCount'];
                
            }
            else 
            {
                if($model->isNewRecord)
                {
                 $loop_c=15;
                }
                else 
                {
                    $loop_c=1; 
                }
            }
       ?>

<tbody class="scrollContent">
<?php for($i=1;$i<=$loop_c;$i++){?>
    
<!--IF FOR CREATE AND ELSE FOR UPDATE-->
        
     <tr id="form_addings">
        <td class="text_box">
            <?php
                echo $form->textField($model,"[$i]MRD_ID",array('size'=>60,'maxlength'=>150,'disabled'=>true));
                echo $form->error($model,'MRD_ID'); 
            ?>
        </td> 
        <td class="text_box">
            <?php
                echo $form->textField($model,"[$i]MMD_ID",array('size'=>60,'maxlength'=>150,'disabled'=>true));
                echo $form->error($model,'MMD_ID'); 
            ?>
        </td>
        <td>
            <?php
                echo $form->textField($model,"[$i]MENU_PROMPT",array('size'=>60,'maxlength'=>150));
                echo $form->error($model,'MENU_PROMPT'); 
            ?>
        </td> 
        <td class="check_box_border"> <?php echo $form->checkBox($model,"[$i]IS_CREATE",array('class'=>'first_checkbox_width','value'=>"Y","checked"=>TRUE,"uncheckValue"=>'N')); ?></td>
        <td class="check_box_border"> <?php echo $form->checkBox($model,"[$i]IS_EDIT",array('class'=>'first_checkbox_width','value'=>"Y","checked"=>TRUE,"uncheckValue"=>"N")); ?></td>
        <td class="check_box_border"> <?php echo $form->checkBox($model,"[$i]IS_REMOVE",array('class'=>'checkbox_width','value'=>"Y","checked"=>TRUE,"uncheckValue"=>"N")); ?></td>
       
        
    </tr>
<?php } ?>

</tbody>
</table>
  <table class="tbl_btn" id="table_bottom_bg">
    <tbody>
      <tr id="table_bottom_bg">
        <td class="btn_save">
    
          <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"submit",'size'=>'small', 'label'=>$model->isNewRecord ?'Submit' : 'Save','id'=>'demo_save','icon'=>'icon-thumbs-up',)); ?>
          <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"clear",'size'=>'small','icon'=>'icon-refresh','label'=>'Clear','id'=>'reset')); ?>
          <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"Close",'size'=>'small','icon'=>'icon-remove','url' =>$this->createUrl('basic_definition_category/admin'),'label'=>'Close','id'=>'close','htmlOptions'=>array('style'=>'display:none !important;'))); ?>
           <img  src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/icon_plus.png"   
           title="Add Rows" width="16" height="16"  alt="" style="cursor: pointer;" id="plus"/></td>                   
          <input id="TotRowCount" type="hidden" name="TotRowCount" value="<?php echo $loop_c;?>">
          <input id="currentrow" type="hidden" name="currentrow" value="">
      </tr>

     </tbody>
</table>
    </td>
</tr></table>
    <?php  $this->endWidget(); ?>
</div>

       