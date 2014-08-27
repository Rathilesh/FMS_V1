<?php
/**
 * Created  By  : ® Anaswara ®  
 * Created  On  : 16-Aug-2013
 * Modified By  :
 * Modified On  :
 * Purpose      : Menu Object 
 */
?>
<script>
 $("document").ready(function(){
       
        $("#plus").click(function() {   
            $("label").addClass("new_class");
            var checkCount = $("input[type='checkbox']").length;//alert(checkCount);
            var $lastRow = $('#BDC tbody>tr:last').prev('tr');
            var RowIndex = $lastRow.index()+2;//alert(RowIndex);
            var newIDSuffix = "*";
            var cloned = $('#BDC tbody>tr:last').prev('tr').clone();
            cloned.find("input,.toggle-button,label[for]").each(function() {//Toggle_Enable();
                if($(this).is('label'))
                {
                   //alert($(this).attr('for'));
                    var forvalue = $(this).attr('for');
                    forvalue = forvalue.replace(/[0-9]/, newIDSuffix);
                    forvalue = forvalue.replace(/[0-9]/g, "");
                    forvalue = forvalue.replace(newIDSuffix, RowIndex);
                    $(this).attr('for', forvalue);
                }
                else 
                {
                var id = $(this).attr('id');           
                id = id.replace(/[0-9]/, newIDSuffix);
                id = id.replace(/[0-9]/g, "");
                id = id.replace(newIDSuffix, RowIndex);
                $(this).attr('id', id);
                var chkClass = $(this).attr('class');
                
                if(chkClass!="toggle-button")
                {
                var name = $(this).attr('name');
                name = name.replace(/[0-9]/, newIDSuffix);
                name = name.replace(/[0-9]/g, "");
                name = name.replace(newIDSuffix, RowIndex);
                $(this).attr('name', name);
               $("#myToggleButton").button();
                
                }
                 if(chkClass=="toggle-button")
                {
                    $(id).button();
                     $('.toggle-form-wrapper').show();

                }
//                if(chkClass=="toggle-button"){
//                    $(this).removeClass('toggle-button');
//                }
                }
//                alert(id);
//                $(this).attr('id', id);
//                if (id.match("Basic_Definition_Category")) {         
//                  $(this).removeClass('toggle-button');
//                }
//                var name = $(this).attr('name');
//                name = name.replace(/[0-9]/, newIDSuffix);
//                id = id.replace(/[0-9]/, newIDSuffix);
//                name = name.replace(/[0-9]/g, "");
//                id = id.replace(/[0-9]/g, "");
//                name = name.replace(newIDSuffix, RowIndex);
//                id = id.replace(newIDSuffix, RowIndex); 
//                $(this).attr('id', id);
//                $(this).attr('name', name);alert(id);
//                alert(id);
//                if (id.match("Basic_Definition_Category")) {         
//                  $(this).removeClass('toggle-button');
//                }

          }
      );
         
         
         // clone.find('label,div').each(function(){ alert("hhiiiii");});
            cloned.insertBefore('#BDC tbody>tr:last').prev('tr').find( 'input:text','class:toggle-button' ).val( '' );           
            return false;
            
        });
        
     
//       $('input[type=checkbox]').onchange(function(){   
//             var id=this.id;alert(id);
//              var newid=id.split("-");alert(newid);
//              if(newid[1]!="")
//             { alert($('#currentrow').val(newid[1]));  }           
//           }); 

 });
 
    </script>
<style>
 .text_box{height:27px!important;}
    /*    toggle button color change css start---->   */
 .toggle-button span.primary, .toggle-button span.labelLeft {

        color: #fefefe !important;
        background: #238803 !important;
        background-image: -webkit-gradient(linear, 50% 100%, 50% 0%, color-stop(0%, #238803), color-stop(100%, #238803)) !important;
        background-image: -webkit-linear-gradient(bottom, #238803, #238803) !important;
        background-image: -moz-linear-gradient(bottom, #238803, #238803) !important;
        background-image: -o-linear-gradient(bottom, #238803, #238803) !important;
        background-image: linear-gradient(bottom, #238803, #238803) !important;
    }
   .toggle-button span.labelRight { 
    color: white !important;
    background-image: -webkit-gradient(linear, 50% 100%, 50% 0%, color-stop(0%, #E60707), color-stop(100%, #F81919)) !important;
    background-image: -webkit-linear-gradient(bottom, #E60707, #F81919) !important;
    background-image: -moz-linear-gradient(bottom, #E60707, #F81919) !important;
    background-image: -o-linear-gradient(bottom, #E60707, #F81919) !important;
    background-image: linear-gradient(bottom, #E60707, #F81919) !important;
    moz-border-radius-bottomright: 4px;
    -webkit-border-bottom-right-radius: 4px;
    border-bottom-right-radius: 4px;
    -moz-border-radius-bottomright: 4px;
    -webkit-border-bottom-right-radius: 4px;
    border-bottom-right-radius: 5px;
    -webkit-border-top-right-radius: 4px !important;
    border-top-right-radius: 5px !important;
   }
/*    toggle button color change css end---->   */
</style>
<div class="form">
 <?php
        $this->widget('ext.jqrelcopy.JQRelcopy',array(        
        'id' => 'copylink',
        'removeHtmlOptions' => array('style'=>'color:red'),        
        'options' => array(        
            'copyClass'=>'newcopy',
            'clearInputs'=>true,
            'excludeSelector'=>'.skipcopy',
        )
    ));
   $Getlabelname =new Get_Labelname_Cls(); 
    ?>          
  <!-------START FORM WIDGET--------->           
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',
            array(
	          'id'=>'basic--definition--category-form',
                  'type'=>'horizontal',
	          'enableAjaxValidation'=>false,
                )); ?>
<?php echo $form->errorSummary($model) ?>


<table border="2" class="grid_insert_table" id="BDC">
    <thead>
        <tr class="grid_title">
            <th style="" ><?php echo $form->labelEx($model,'Definitiontype'); ?></th>
            <th style=""> <?php echo $form->labelEx($model,'Description');?></th>
            <th style=""> <?php echo $form->labelEx($model,'Amend');?></th>
            <th style=""> <?php echo $form->labelEx($model,'Display');?></th>
            <th style=""> <?php echo $form->labelEx($model,'Universal');?></th>
            <th style=""> <?php echo $form->labelEx($model,'Compulsary');?></th>
            <th style=""> <?php echo $form->labelEx($model,'Records');?></th>
            
            <th></th>
        </tr>    
    </thead>
<!--         Setting Tot Row Count-->
        <?php 
            if(isset($_POST['TotRowCount'])<>'')
            {
                $loop_c=$_POST['TotRowCount'];
            }
            else 
            {
                
                    $loop_c=11; 
              
           }
       ?>
<tbody>
<?php for($i=1;$i<=$loop_c;$i++){?>

    <tr id="form_addings">
        <td>
            <?php
                echo $form->textField($model,"[$i]DEFINITION_TYPE",array('size'=>30,'maxlength'=>30,'class'=>'text_box')); 
                echo $form->error($model,'DEFINITION_TYPE'); 
            ?>
        </td> 
        <td>
            <?php
                echo $form->textField($model,"[$i]DESCRIPTION",array('size'=>100,'maxlength'=>100,'class'=>'text_box')); 
                echo $form->error($model,'DESCRIPTION'); 
            ?>
        </td> 

        <td>
            <?php
                   $this->widget( 'bootstrap.widgets.TbToggleButton',
                           array( 'model'=>$model, "attribute"=>"[$i]IS_AMEND",
                                  'enabledLabel' => 'Yes', 
                                  'disabledLabel' => 'No',
                                  'htmlOptions'=>array(
                                 //'name' =>"IS_AMEND-$i",
                                  'value'=>false,)
                                 
                                 ));
       
            ?>
        </td>
 
        <td>
            <?php
                   $this->widget( 'bootstrap.widgets.TbToggleButton',
                           array( 'model'=>$model,"attribute"=>"[$i]IS_DISPLAY",
                                  'enabledLabel' => 'Yes',
                                  'disabledLabel' => 'No',
                                  'htmlOptions'=>array(
                                    //'name' => "IS_DISPLAY-$i",
                                  'value'=>false,)
                                  //"attribute"=>"IS_DISPLAY[$i]",
                                 ));
       
            ?>
        </td>
        
        <td>
            <?php
                   $this->widget( 'bootstrap.widgets.TbToggleButton',
                           array( 'model'=>$model,"attribute"=>"[$i]IS_UNIVERSAL",
                                  'enabledLabel' => 'Yes',
                                  'disabledLabel' => 'No',
                                  'htmlOptions'=>array(
                                    //'name' => "IS_UNIVERSAL-$i",
                                  'value'=>true,)
                                  //"attribute"=>"IS_UNIVERSAL[$i]",
                                 ));
       
            ?>
        </td>
        
        <td>
            <?php
                   $this->widget( 'bootstrap.widgets.TbToggleButton',
                                   array('model'=>$model,"attribute"=>"[$i]IS_COMPULSORY",
                                       'enabledLabel' => 'Yes', 
                                       'disabledLabel' => 'No',
                                       'htmlOptions'=>array(
                                            //'name' => "IS_COMPULSORY-$i",
                                         'value'=>true,)
                                         //"attribute"=>"IS_COMPULSORY[$i]",
                                 ));
            ?>
        </td>
        
        <td>
            <?php
                echo $form->textField($model,"[$i]NO_OF_RECORDS",array('size'=>5,'maxlength'=>5,'placeholder'=>0,'style'=>'height:27px;width:70px;text-align:right;','class'=>'text_box')); 
                echo $form->error($model,'NO_OF_RECORDS'); 
            ?>
        </td> 
    </tr>
<?php } ?>

  <tr>
    <td colspan="8" style="text-align: right;padding:10px 12px">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"submit",'size'=>'small', 'label'=>$model->isNewRecord ? $Getlabelname->Get_Labelname_Fnc("103") : $Getlabelname->Get_Labelname_Fnc("2021"),'id'=>'demo_save','icon'=>'icon-thumbs-up',)); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"reset",'size'=>'small','icon'=>'icon-refresh','label'=>$Getlabelname->Get_Labelname_Fnc("104"))); ?>
       <img  src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/plus_blue.png"   
             title="Add Rows" width="20" height="20"  alt="" style="cursor: pointer;" id="plus" /></td>                   
     <input id="TotRowCount" type="hidden" name="TotRowCount" value="<?php echo $loop_c;?>">
     <input id="currentrow" type="hidden" name="currentrow" value="">
  </tr>

</tbody>
</table>
    <?php  $this->endWidget(); ?>
</div>

       
