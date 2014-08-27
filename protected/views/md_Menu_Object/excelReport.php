<?php if ($model !== null):?>
<table border="1">
	<tr>
		<th  height="25">ID</th>
 		<th>Object Id</th>
 		<th>Object Type</th>
 		<th>Description</th>
 		<th>Menu Prompt</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        <td style="text-align: middle; padding-left:10px">
			<?php echo $row->ID; ?>
		</td>
        <td  height="25">
			<?php echo $row->OBJECT_ID; ?>
		</td>
        <td>
			<?php echo $row->OBJECT_TYPE; ?>
		</td>
        <td>
			<?php echo $row->DESCRIPTION; ?>
		</td>
        <td>
			<?php echo $row->MENU_PROMPT; ?>
		</td>
    </tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
