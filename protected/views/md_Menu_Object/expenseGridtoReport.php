<?php if ($model !== null):?>
<style>
    #someid td {
        text-align:right;
       
       
    }
    table th { border: 1px solid #CACACA; font-weight: bold; margin-top: 4px; vertical-align: middle}
    table td { border: 1px solid #CACACA; text-align: center;  margin-top: 4px; vertical-align: middle}
     .padding-left-class { text-align: center ; vertical-align: middle}
</style>
<table style=" border: 2px solid #E8E8E8; box-shadow: 2px 0px 4px #CACACA;" id="someid">
	
    <tr>
        <td colspan="5"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/login/l_hrms.png" width="" height="80" /></td>
    </tr>
    <tr style="background-color:yellowgreen">
		<th  height="20" width="30" class="padding-left-class">Id</th>
 		<th width="125"   class="padding-left-class">Object Id</th>
 		<th width="70" class="padding-left-class">Object Type</th>
 		<th width="160" class="padding-left-class">Description</th>
 		<th class="padding-left-class">Menu Prompt</th>
 	</tr>
    
	<?php
    
    foreach($model as $key=>$row): ?>
    <?php  if($key%2==0) { $style_var= "background-color: #CACACA"; } else {  $style_var= "background-color: #E8E8E8"; } ?>
	<tr style="<?php echo  $style_var; ?>">
        		<td height="20" style="padding: 10px">
			<?php echo $row->ID; ?>
		</td>
       		<td  height="20"  style="padding: 10px">
			<?php echo $row->OBJECT_ID; ?>
		</td>
       		<td style="padding: 10px">
			<?php echo $row->OBJECT_TYPE; ?>
		</td>
       		<td style="padding: 10px">
			<?php echo $row->DESCRIPTION; ?>
		</td>
       		<td style="padding: 10px">
			<?php echo $row->MENU_PROMPT; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
