<?php
/* @var $this HolidayController */
/* @var $model Holiday */
/* @var $form CActiveForm */
?>
<style>
  .datewidth
  {
      width: 150px;
  }
  .checkboxwidth
  {
      width:105px;

  }
  .borderstyle
  {
/*      border-color:black !important;
      border-style:solid !important;
border-width:1px !important;*/
  }
  input {
      -webkit-box-shadow: inset 0 0px 0px rgba(0, 0, 0, 0.1) !important;
        -moz-box-shadow: inset 0 0px 0px rgba(0, 0, 0, 0.1) !important;
        box-shadow: inset 0 0px 0px rgba(0, 0, 0, 0.1) !important;
  }
  .grid_insert_table tbody tr:last-child td {
border-bottom: none !important;
}
  
</style>
<script>
    $(document).ready(function(){
//       var head_color=$("#Holiday thead th").css('background-color'); 
//       alert(head_color);
    });
</script>
<div class="form">
<?php echo CHtml::beginForm(); ?>
<table class="grid_insert_table" id="Holiday">
    <thead class="fixedHeader">          
         <tr class="header-class">
<th>Date</th><th>Description</th><th>Compulsory ? </th><th>Declaration Date</th><th>Declaration Reference</th>
         </tr>
    </thead>
<?php for($i=0;$i<10;$i++) { ?>
<tr>
<td class="borderstyle"><?php echo CHtml::activeTextField($model,"[$i]HOLIDAY_DATE",array('class'=>'datewidth')); ?></td>
<td class="borderstyle"><?php echo CHtml::activeTextField($model,"[$i]DESCRIPTION",array('class'=>'datewidth')); ?></td>
<td class="borderstyle"><input type="checkbox" name="[$i]IS_COMPULSORY" value="Y" class="checkboxwidth"> </td>
<td class="borderstyle"><?php echo CHtml::activeTextField($model,"[$i]DATE_OF_DECLARATION",array('class'=>'datewidth')); ?></td>
<td class="borderstyle"><?php echo CHtml::activeTextField($model,"[$i]DECLARATION_REFERENCE",array('class'=>'datewidth')); ?></td>
</tr>
<?php } ?>
</table>
</div><!-- form -->