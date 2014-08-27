<?php
/* @var $this Basic_definitionController */
/* @var $model Basic_definition */
/* @var $form CActiveForm */
?>
<script>
    $('document').ready(function(){
//        $(".abc").click(function(){
//           alert("hi"); 
//        });
    });
    </script>
 <?php $Getlabelname =new Get_Labelname_Cls();  ?>
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
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',
            array(
	          'id'=>'basic--definition--form',
                  'type'=>'horizontal',
	          'enableAjaxValidation'=>false,
                )); ?>
     
 
    
    
  <table id="boostrap_table_new" class="grid_insert_table" style="padding-left:10px;padding-right:10px;">
  <thead>  <tr class="grid_title">
          <th style="" ><?php echo$Getlabelname->Get_Labelname_Fnc("105"); ?></th>
            <th style=""> <?php echo$Getlabelname->Get_Labelname_Fnc("116"); ?></th>
             <th style=""> <?php echo$Getlabelname->Get_Labelname_Fnc("122");?></th>
      </tr></thead>
<?php for($i=0;$i<10;$i++){?>
<tr id="row">

<td style="width:130px;height:24px;"> <?php echo CHtml::activeTextField(Basic_Definition::model(),"[$i]SHORT_NAME",array('style'=>"width:100%;padding:0px;height:24px;",'class'=>"abc")); ?></td>
<td style="width:500px;height:24px;"><?php echo CHtml::activeTextField(Basic_Definition::model(),"[$i]DESCRIPTION",array("class"=>"custom1",'style'=>"width:100%;padding:0px !important;height:24px !important;")); ?></td>
<td style="width:70px;height:20px;"><?php echo CHtml::activeTextField(Basic_Definition::model(),"[$i]ENTITY_ID",array('style'=>"width:100%;padding:0px;height:24px;",'class'=>"custom1")); ?></td>

</tr>
<?php } ?>

</table> 
    
 
<?php $this->endWidget(); ?>

</div><!-- form -->

