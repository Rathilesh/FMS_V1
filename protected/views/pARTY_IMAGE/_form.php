
<?php
/* @var $this PARTY_IMAGEController */
/* @var $model PARTY_IMAGE */
/* @var $form CActiveForm */
if(isset($_GET['iframe'])){
   $is_iframe ='1';
   ?>

<?php 
}
else { $is_iframe='0';}

?>



<html>
<!-- <script src="js-global/FancyZoom.js" type="text/javascript"></script>
<script src="js-global/FancyZoomHTML.js" type="text/javascript"></script>   -->
    
  
<script>
     function readURL(input) {
          var id=input.id;
          var splitid=id.substr(5,1);
         
       
//         for(var i=1;i<=6;i++)
//             {
            if (input.files && input.files[0]) {
                var reader = new FileReader();


                reader.onload = function (e) {
                    $('#imgdiv'+splitid)
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                $('#imghref'+splitid)
                        .attr('href', e.target.result)
                        .width(150)
                        .height(200);
                };
                

                reader.readAsDataURL(input.files[0]);
            }
             }
        //}
        
        function CloseIframe() {
            parent.alert_me();
            return true;
        }
    
    </script>
<style>
    .PARTY_IMAGE_IMAGE
    {
        
     width: 200px !important;
       height:25px !important;
       
    }
    .imgstyle
    {
        width:50px !important;
        height:20px !important;
    }
    #SCANNED_ON
    {
         float:right;
    }
  article, aside, figure, footer, header, hgroup, 
  menu, nav, section { display: block; }
    </style>
      <body onload="setupZoom();">
<?php   $Getlabelname=new Get_Labelname_Cls();  ?>
<?php if(Yii::app()->user->hasFlash('success')):?>
 <div class="msgouter">
        <div class="success_blue"> <div class="success_blue_icon"></div>
            <div class="success_blue_msg">
                <?php echo Yii::app()->user->getFlash('success'); ?>
            </div>
        </div>

 </div>


        <?php elseif(Yii::app()->user->hasFlash('Error')):?>
  <div class="msgouter">
        <div class="error_red"> <div class="error_red_icon"></div>
            <div class="error_red_msg">
            <?php echo Yii::app()->user->getFlash('Error'); ?>
            </div>
        </div>
  </div>

<?php 
//
//header('Content-Type: ');
//print $model->binaryfile; 
//exit(); 


endif; 
?>

<div class="form">

<?php
     $form = $this->beginWidget('CActiveForm', array(
    'id'=>'party--image-form',
    'enableAjaxValidation'=>false,
    'method'=>'post',
    
   'stateful' => true,
    'htmlOptions'=>array(
        'enctype'=>'multipart/form-data'
    )
     )); ?>  
 

</head>
<!--  <input type='file' onchange="readURL(this);" />-->
<?php 
$id="";
$type="";
if(isset($_GET['id']))
{
$id=$_GET['id'];//echo $id;
$type=$_GET['type'];
}
?>
     <table border="2" class="grid_insert_table" id="grid_insert_table">
       
        <tbody> 
          <thead>
            <th><?php echo $form->labelEx($model,'IMAGE_TYPE'); ?></th>
            <th><?php echo $form->labelEx($model,'IMAGE'); ?></th>
            <th></th>
            <th><?php echo $form->labelEx($model,'WEF'); ?></th>
            <th><?php echo $form->labelEx($model,'WET'); ?></th>
         </thead>
        <tbody>
           <?php
           //for($i=1;$i<=6;$i++)
           //{
           ?>
            <tr>
                <td>
                    <input id="hdn_Id" type="hidden" name="hdn_Id"  value="<?php echo $id;?>">     
                    <input id="hdn_Type" type="hidden" name="hdn_Type"  value="<?php echo $type;?>">           
		
		<?php // echo $form->textField($model,"[$i]IMAGE_TYPE",array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->dropDownList($model,"IMAGE_TYPE", CHtml::listData(BASIC_DEFINITION::model()->findAll("DFCTG_DEFINITION_TYPE='IMAGE_TYPE'"), 'SHORT_NAME', 'DESCRIPTION'), array('empty'=>'--Select--','class'=>''));?>
                </td>

	 <td>
		
		<?php echo $form->fileField($model, "IMAGE",array("class"=>"PARTY_IMAGE_IMAGE",'id'=>"IMAGE","onchange"=>"readURL(this);")); ?>
		
         </td>
         <td>
             <a id="imghref" href="#"> <img id="imgdiv" src="#" class="imgstyle" alt="your image" bORDER="0" ></a>
             
         </td>
	 <td>
		
	
		
		<?php
                $today=date('d/m/Y');
                echo $form->textField($model,"WEF",array('size'=>30,'maxlength'=>30,'id'=>"WEF",'value'=>date('d/m/Y'),'class'=>'SCANNED_ON','style'=>"width:92px;height:25px;float:left;"));
 /*$this->widget('zii.widgets.jui.CJuiDatePicker',array("name"=>"SCANNED_ON",'value'=>'',
                                        'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                        'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"SCANNED_ON",'class'=>'SCANNED_ON','style'=>"width:92px;height:25px;float:left;",'rel'=>'SCANNED_ON')));*/


//echo $form->textField($model,'SCANNED_ON'); ?>
         </td>



<td>
        
    
        
        <?php
               // $today=date('d/m/Y');
                echo $form->textField($model,"WET",array('size'=>30,'maxlength'=>30,'id'=>"WET",'value'=>'','class'=>'SCANNED_ON','style'=>"width:92px;height:25px;float:left;"));
 /*$this->widget('zii.widgets.jui.CJuiDatePicker',array("name"=>"SCANNED_ON",'value'=>'',
                                        'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',      
                                        'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"SCANNED_ON",'class'=>'SCANNED_ON','style'=>"width:92px;height:25px;float:left;",'rel'=>'SCANNED_ON')));*/


//echo $form->textField($model,'SCANNED_ON'); ?>
         </td>




     </tr>
           <?php //}?>
            
	<tr  id="table_bottom_bg">
            <td colspan="2">&nbsp</td>	
            <td align="right" id="testtdright" class="tabular_submit_padding">
                
		<?php //echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
            </td><td></td> <td><?php $this->widget('bootstrap.widgets.TbButton',array('buttonType'=>"submit",'size'=>'small', 'label'=>$model->isNewRecord ? $Getlabelname->Get_Labelname_Fnc("103") : $Getlabelname->Get_Labelname_Fnc("103"),'id'=>'image_save','icon'=>'icon-thumbs-up','htmlOptions'=>array('onclick'=>'js:return CloseIframe();'))); ?></td>	
        </tr>

<?php $this->endWidget(); ?>
     </table>
</body>
</html>