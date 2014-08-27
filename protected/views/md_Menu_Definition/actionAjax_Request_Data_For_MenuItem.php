<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
Yii::app()->clientScript->scriptMap['jquery.js'] = false;
Yii::app()->clientScript->scriptMap['jquery-ui.min.js'] = false;
?>
<script type="text/javascript">
    $(document).ready(function(){
        
        
        var focus_dup_id=$("#Current_Click_Id").val();
         var loop_c = focus_dup_id.match(/[\d\.]+/g);
                if (loop_c != null){
                    var loop_count = loop_c.toString();
                    var get_val_menuitem=$("#Md_Menu_Definition_"+loop_count+"_SUBMENU_MMD_ID").val();
                    if(get_val_menuitem!=''){
                     $(".table").text("You Are Also Select Sub Menu On This Row !");
                     $("#menu_item_autocomplete").hide();
                       return false;                       
                    }
                }   
                
        $(".select_item").dblclick(function(){
            var item_id =$(this).find(".select_menuid").val(); 
            var item_prompt =$(this).find(".select_menup").val(); 
            var item_description =$(this).find(".select_menud").val(); 
            var focus_dup_id=$("#Current_Click_Id").val();
            
            //get loop count
            var loop_c = focus_dup_id.match(/[\d\.]+/g);
                if (loop_c != null){
                    var loop_count = loop_c.toString();
                } 
            //alert (loop_count);
            //get loop count
            
            $("#"+focus_dup_id).val(item_prompt);
            $("#Md_Menu_Definition_"+loop_count+"_MENU_PROMPT_HIDDEN").val(item_prompt);
            $("#Md_Menu_Definition_"+loop_count+"_MENU_PROMPT").val(item_prompt);
            $("#Md_Menu_Definition_"+loop_count+"_MMO_ID").val(item_id);
            $("#mydialog").dialog("close");
        });   
    });
</script>
<div style="width: 100%; height: 30px; float: left">
    <?php 
            $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
            'id' => 'menu_item_autocomplete',
            'name' => 'nombre',
            'source'=>$this->createUrl('md_menu_definition/autocompleteTest'),
            //'value' =>  $model->nombre,
            'options' => array(
                'showAnim' => 'fold',
                //remove if you dont need to store the id, like i do...
                'select'=>'js:function(event, ui)   {
                                            //$("#User_user_id").val(ui.item.id);
                                            //alert(ui.item.id);
                                            var focus_dup_id =$("#Current_Click_Id").val();
                                            
                                                //get loop count
                                                var loop_c = focus_dup_id.match(/[\d\.]+/g);
                                                    if (loop_c != null){
                                                        var loop_count = loop_c.toString();
                                                    } 
                                               
                                                //get loop count
                                            $("#"+focus_dup_id).val(ui.item.label);
                                            $("#Md_Menu_Definition_"+loop_count+"_MENU_PROMPT_HIDDEN").val(ui.item.label);
                                            $("#Md_Menu_Definition_"+loop_count+"_MENU_PROMPT").val(ui.item.label);
                                            $("#Md_Menu_Definition_"+loop_count+"_MMO_ID").val(ui.item.id);
                                            $("#mydialog").dialog("close");
                                                     }'
            ),
            'htmlOptions' => array(
                'style'=>'height: 20px; width: 300px;',
                //'style' => 'height:20px; w'
                
            ),
        ));
            ?>
</div>
<table class="table">
        
    
<?php
// You can work with the variable passed to the view file
        $items=array();
        $criteria = new CDbCriteria;
        $criteria->select='ID,MENU_PROMPT,DESCRIPTION,OBJECT_ID';
        $criteria->order = 'ID ASC';
        
        $items = Md_Menu_Object::model()->findAll($criteria);
        foreach ($items as $val) {
            ?>
    
    <tr class="select_item" style="cursor: pointer">
        <td>
            <span style="display: none"><?php echo $val['ID'];?></span>
            <!----hidden fields----->
            <input type="hidden" name="select_menuid" class="select_menuid" value="<?php echo $val['ID'];?>">
            <input type="hidden" name="select_menup" class="select_menup" value="<?php echo $val['MENU_PROMPT'];?>">
            <input type="hidden" name="select_menud" class="select_menud" value="<?php echo $val['DESCRIPTION'];?>"> 
            <!-------end---------------->
            <!--<img id="select_item" src="<?php //echo Yii::app()->request->baseUrl; ?>/css/images/plus_blue.png" width="16px" height="16px" style="margin-top: 3px; cursor: pointer" title="Add Menu Item">-->
            <!--</a>-->
        </td>
        <td><?php echo $val['OBJECT_ID'];?></td>
        <td align="left"><?php echo $val['DESCRIPTION'];?></td>
    </tr>

<?php 
        }
?>
</table>