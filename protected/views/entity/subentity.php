<style type="text/css">

.gridcontent 
{
    border: 1px solid #D3D0D0;
    border-radius: 10px;
    padding-bottom: 6px;
    box-shadow: 0px 0px 22px 3px #c4c4c4;
    background: white;
    border-bottom-right-radius: 0px;
    border-bottom-left-radius: 0px;
}

.levelwidth
{
    width:145px;
}
.codewidth
{
    width:150px;    
}
.chkbox
{
    width:80px;
    box-shadow: none;
}
.initialpad
{
    padding-left: 8px;
}
.aligncenter
{
    text-align: center;
}

.dialog-open
{   
    border-radius:10px;
}
.paddinglast
{
    padding-right: 8px;
}
.datecols
{
    width:78px;

}
.datealign
{
    float:left !important;
   
}
.popup
{
    margin: 20px 0 0 7px;
}
.saveperiod
{
    padding: 20px 0 0 218px;
}
.wetheader
{
    padding-left: 22px;
}
.savebtn
{
    padding-right: 10px;
}
.btn-xs, .btn-group-xs>.btn 
{
   padding: 1px 5px;
    font-size: 13px;
    line-height: 1.5;
    border-radius: 10px;

}
.btn-se, .btn-group-se>.btn 
{
    padding: 1px 5px;
    font-size: 15px !important;
    line-height: 1.5;
    border-radius: 5px;

}
.tbl_btn 
{
  width: 1171px;
  border: 1px solid #D3D0D0;
  border-radius: 10px;
  border-top: none;
  border-top-left-radius: 0px;
  border-top-right-radius: 0px;
  box-shadow: 0px 6px 15px 0px #c4c4c4;
}
.btn_save 
{
  text-align: right !important;
  padding-left: 6px;
  padding-top: 6px;
  padding-bottom: 6px;
  padding-right: 14px;
}
</style>

<script>

$(document).ready(function(){

    $( "#popup" ).dialog({
      autoOpen: false,
      title:'Period',
      resizable: false,
      modal:true,
      // show: {
      //   effect: "blind",
      //   duration: 1000
      // },
      // hide: {
      //   effect: "explode",
      //   duration: 1000
      // }
    });

    $("#btn_AddMaster").click(function() { 
               CloneTable("hdn_EntityCount","tbl_SubEntity","","");
    });

     $("#div_EntityPopup").dialog({
           autoOpen: false,
           modal: true,
           height: 500,
           width: 500
       });
        function CloneTable(hidden,table,url,select_hidden)
        {
            var prevId=$("#"+hidden).val();  
            var newIDSuffix = ":"; 
            var cloneEntity = $("#"+ table +" tbody>tr:last").clone();
            var newindex=parseInt(prevId)+1; 
            $("#"+hidden).val(newindex);
            cloneEntity.find('input, select,img').each(function() {            
                var id = $(this).attr('id');
                id = id.replace(/[0-9]/, newIDSuffix);
                id = id.replace(/[0-9]/g, "");
                id = id.replace(newIDSuffix, newindex); 
                $(this).attr('id', id);   
                
                var name = $(this).attr('name');
                name = name.replace(/[0-9]/, newIDSuffix);                
                name = name.replace(/[0-9]/g, "");                
                name = name.replace(newIDSuffix, newindex);                              
                $(this).attr('name', name);  
                if($(this).hasClass("hasDatepicker"))
                {   
                  $(this).removeClass('hasDatepicker').datepicker({dateFormat:'dd/mm/yy',minDate: 0});   
                }
                 //Creating new instance for autocomplete
                if($(this).hasClass("ui-autocomplete-input"))
                {                    
                  url="<?php echo Yii::app()->request->baseUrl; ?>/index.php/"+url;
                  $(this).autocomplete({                                            
                                       source:url,
                                       minLength: 0,                                       
                                       change:function(event,ui){
                                        if (!ui.item) {
                                            $(this).val("");  
                                            $("#"+select_hidden+newindex).val("");                                                                      
                                         }
                                       },
                                       select:function( event, ui ) {                                                               
                                            $("#"+select_hidden+newindex).val(ui.item.id);     
                                                         
                                        },                                                                   
                                      
                   });
                   $(this).focus(function(e) {
                        if(!e.isTrigger) {
                            $(this).autocomplete("search", "");
                        }
                        return false;
                    });                   
                }
            });
            
            cloneEntity.insertAfter($("#"+ table +" tr:last")).find( 'input:text' ).attr('value',''); 
        }
    // $(".chkbox").change(function(event) {
    //     if(this.checked) {           

    //         var position =  $(this).position();
    //         $("#popup").dialog("option", "position", [position.left, parseInt(position.top)+17]);
    //         $("#popup").dialog('open');

    //     }
    // });

    $(".autofocus").bind('focus', function(){ 
        $(this).autocomplete("search"); 
    }); 

});

function ShowEntity(id)
{
    
    
   $("#div_EntityPopup").dialog({width:'95%'}).dialog("open");
   $("#IframeEntity").attr("src","<?php echo Yii::app()->request->baseUrl;?>/index.php/entity/create?iframe=1");
   return false;
}



function SaveEntity()
{
   
    var count=$("#hdn_EntityCount").val();
    var saveEntity=0;
    for(var i=1;i<=count;i++)
    {
         var code=$('#SHORTNAME-'+i).val();
         var name=$('#NAME-'+i).val();
         var level=$('#Entity_Type-'+i).val();
         var parent=$('#Entity_Name-'+i).val();
         var wef=$('#WEF-' +i).val();    
         var wet=$('#WET-'+i).val();
        
                 
         
         if((code!="")||(name!="")||(level!="")||(parent!="")||(wef!="")||(wet!="")||(document.querySelector('input[name="chk_Is_Legal-'+i+'"]:checked')!=null))
         {   
             if(code=="")
             {
                GetDynamicAlert("20801",i);
                //$('#OPERATION_TYPE-'+i).focus();                
                Createfocus("SHORTNAME-"+i);               
                return false;
             }
             if(name=="")
             {
                GetDynamicAlert("20802",i);
                //$('#WEF-' +i).focus();
                Createfocus("NAME-"+i);                
                return false;                 
             }
             if(level=="")
             {
                GetDynamicAlert("20803",i);
                //$('#WEF-' +i).focus();
                Createfocus("Entity_Type-"+i);
                return false;                 
             }
             if(wef=="")
             {
                GetDynamicAlert("20804",i);
                //$('#WEF-' +i).focus();
                Createfocus("Entity_Type-"+i);
                return false;                 
             }
             if(!ValidateDate(wef))
             {
                  GetDynamicAlert("20805",i);
                  //$('#WEF-' +i).focus();
                  Createfocus("WEF-"+i);
                  return false;
             }
             
             if(wet!="")
             {
                  if(!ValidateDate(wet))
                  {
                        GetDynamicAlert("20806",i);
                        //$('#WET-' +i).focus();
                        Createfocus("WET-"+i);
                        return false;
                  }                  
             }
             if(wef!="" && wet!="")
             {                
                if(!CompareDates(wef,wet))
                {
                    GetDynamicAlert("20807",i);
                   // $('#WEF-' +i).focus();
                    Createfocus("WEF-"+i);
                   
                    return false;
                }
             }                  
                 
         }
         else
         {
            if(i==1)
            {
               GetStaticAlert("20800");
               return false;
            }
         }  
    }
    return true;
}
</script>

<script>
 setTimeout(function() {                    //****
    $('.error_red').fadeOut('fast');        //****
}, 3000);                                   //****
                                            //****
setTimeout(function() {                     //****
    $('.success_blue').fadeOut('fast');     //****
}, 3000);                                   //****
//************************************************
</script>

 
  <!---- Code for Flash Messages---->
<?php if(Yii::app()->user->hasFlash('success')):?>
            <div class="success_blue"> <div class="success_blue_icon"></div>
                <div class="success_blue_msg">
                    <?php echo Yii::app()->user->getFlash('success'); ?>
                </div>
            </div>
            <?php elseif(Yii::app()->user->hasFlash('error')):?>
            <div class="error_red"> <div class="error_red_icon"></div>
                <div class="error_red_msg">
                <?php echo Yii::app()->user->getFlash('error'); ?>
                </div>
            </div>
    <?php endif; ?>
   <!---- Code for Flash Messages---->  


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'entity-form',
	'enableAjaxValidation'=>false,
)); 

require_once("popupdialog.php");
$Getlabelname =new Get_Labelname_Cls();
?>



<?php

  if(isset($_POST['hdn_EntityCount'])<>'')        
      $maincount=$_POST['hdn_EntityCount'];
  else
    $maincount=15;

  if(isset(Yii::app()->session['P_Eu_Orgn_Code']))
    $sessionentityid=Yii::app()->session['P_Eu_Orgn_Code'];
  else
    $sessionentityid="";

    $criteria = new CDbCriteria;
    $criteria->alias = 'E';
    $criteria->select = array('E.id as ENTITYID,E.SHORT_NAME as CODE,E.name as ENTITYNAME,ER.Id as RELATIONID,ER.ENTYP_ID as ENTITYTYPEID,ET.ENTITY_TYPE as ENTITYTYPE,OS.Id as OSID,OS.WEF as WEF,OS.WET as WET,EP.ID as PARENTID,EP.NAME as PARENTNAME');            
    $criteria->join = 'LEFT JOIN ENTITY_RELATION ER ON ER.ENTITY_ID=E.Id LEFT JOIN ENTITY_TYPE ET on ET.Id=ER.ENTYP_ID LEFT JOIN ORGANISATION_STRUCTURE OS on OS.ENTITY_REPORT=E.Id LEFT JOIN ENTITY EP on EP.Id=OS.ENTITY_REPORT_TO';                 
    $criteria->condition = "E.ENTITY_ID=:entityid";
    $criteria->params = array(':entityid' => 1);   
    $getSubEntity=  Entity::model()->findAll($criteria);

    //print_r(count($getSubEntity));exit;
           
    if($maincount<=count($getSubEntity))
        $maincount=count($getSubEntity);   
        //print_r($getSubEntity);                           
       
 ?>


<table class="gridcontent" id="tbl_SubEntity">
     <thead>
        <tr>
            <th class="initialpad"><?php echo $Getlabelname->Get_Labelname_Fnc("228");?></th>
            <th><?php echo $Getlabelname->Get_Labelname_Fnc("106");?></th>            
            <th><?php echo $Getlabelname->Get_Labelname_Fnc("230");?></th>
            <th><?php echo $Getlabelname->Get_Labelname_Fnc("231");?></th>           
            <th class=""><?php echo $Getlabelname->Get_Labelname_Fnc("126");?></th>
            <th class=""><?php echo $Getlabelname->Get_Labelname_Fnc("127");?></th>

            <th class="aligncenter"><?php echo $Getlabelname->Get_Labelname_Fnc("229");?></th>
            <th></th>

            
        </tr>
    </thead>
    <tbody>
        
        <?php for($i=1;$i<=$maincount;$i++) { 

            
            if(isset($_POST['Entity'][$i]['SHORT_NAME'])<>"")                                          
              $shortname[$i]=$_POST['Entity'][$i]['SHORT_NAME'];
            else if(count($getSubEntity) >= $i)
              $shortname[$i]=$getSubEntity[$i-1]['CODE'];          
            else
               $shortname[$i]="";
             
            if(isset($_POST['Entity'][$i]['NAME'])<>"")                                          
              $name[$i]=$_POST['Entity'][$i]['NAME'];
            else if(count($getSubEntity) >= $i)
              $name[$i]=$getSubEntity[$i-1]['ENTITYNAME'];
            else
               $name[$i]="";

            
            if(isset($_POST['Entity_Type'][$i]['Entity_Type'])<>"")                                          
              $level[$i]=$_POST['Entity_Type'][$i]['Entity_Type'];
            else if(count($getSubEntity) >= $i)
              $level[$i]=$getSubEntity[$i-1]['ENTITYTYPE'];
            else
              $level[$i]="";

            
            if(isset($_POST['Entity'][$i]['NAMES'])<>"")                                          
              $parent[$i]=$_POST['Entity'][$i]['NAMES'];
            else if(count($getSubEntity) >= $i)
              $parent[$i]=$getSubEntity[$i-1]['PARENTNAME'];
            else
              $parent[$i]="";

                    
            if(isset($_POST['Organisation_Structure'][$i]["WEF"]) && trim($_POST['Organisation_Structure'][$i]["WEF"])!="")                                                                             
              $wef[$i]=$_POST['Organisation_Structure'][$i]["WEF"];   
            else if(count($getSubEntity) >= $i && $getSubEntity[$i-1]['WEF']!="")                                           
              $wef[$i]=date('d/m/Y',  strtotime($getSubEntity[$i-1]['WEF']));                                       
            else
               $wef[$i]="";

                     
            if(isset($_POST['Organisation_Structure'][$i]["WET"]) && trim($_POST['Organisation_Structure'][$i]["WET"])!="")                                                                             
              $wet[$i]=$_POST['Organisation_Structure'][$i]["WET"];      
            else if(count($getSubEntity) >= $i && $getSubEntity[$i-1]['WET']!="")                                           
              $wet[$i]=date('d/m/Y',  strtotime($getSubEntity[$i-1]['WET']));                                   
            else
               $wet[$i]="";

            
            if(isset($_POST['hdn_EntityId-'.$i])<>"")                                          
              $entityId[$i]=$_POST['hdn_EntityId-'.$i];
            else if(count($getSubEntity) >= $i)
              $entityId[$i]=$getSubEntity[$i-1]['ENTITYID'];
            else
               $entityId[$i]="";

            
            if(isset($_POST['hdn_ImmediateParentId-'.$i])<>"")                                          
              $parentId[$i]=$_POST['hdn_ImmediateParentId-'.$i];
            else if(count($getSubEntity) >= $i)
              $parentId[$i]=$getSubEntity[$i-1]['PARENTID'];
            else
               $parentId[$i]="";

            
            if(isset($_POST['hdn_OrganisationStructureId-'.$i])<>"")                                          
              $organisationstructureId[$i]=$_POST['hdn_OrganisationStructureId-'.$i];
            else if(count($getSubEntity) >= $i)
              $organisationstructureId[$i]=$getSubEntity[$i-1]['OSID'];
            else
               $organisationstructureId[$i]="";

            
            if(isset($_POST['hdn_RelationId-'.$i])<>"")                                          
              $relationId[$i]=$_POST['hdn_RelationId-'.$i];
            else if(count($getSubEntity) >= $i)
              $relationId[$i]=$getSubEntity[$i-1]['RELATIONID'];
            else
               $relationId[$i]="";

            
            if(isset($_POST['hdn_LevelId-'.$i])<>"")                                          
              $typeId[$i]=$_POST['hdn_LevelId-'.$i];
            else if(count($getSubEntity) >= $i)
              $typeId[$i]=$getSubEntity[$i-1]['ENTITYTYPEID'];
            else
               $typeId[$i]="";
             $checkLevelId[$i]="";

            if($entityId[$i]!="")
            {
                $criteria = new CDbCriteria;
                $criteria->select = array('ID');      
                if($wet[$i]!="")
                {    
                  $criteria->condition = "ENTITY_ID=:ENTITYID AND WEF=:wef and WET=:wet";
                  $criteria->params = array(':ENTITYID' => $entityId[$i],':wef' => date('d-M-Y',  strtotime($getSubEntity[$i-1]['WEF'])),':wet' => date('d-M-Y',  strtotime($getSubEntity[$i-1]['WET'])));               
                }
                else
                {
                  $criteria->condition = "ENTITY_ID=:ENTITYID AND WEF=:wef AND WET IS NULL";
                  $criteria->params = array(':ENTITYID' => $entityId[$i],':wef' => date('d-M-Y',  strtotime($getSubEntity[$i-1]['WEF'])));         
                }
                $getCheckedLevel=  Operation_Type::model()->findAll($criteria);

                foreach($getCheckedLevel as $rowlevel) 
                {

                  $checkLevelId[$i]= $rowlevel['ID'];
                  //echo $checkLevelId[$i];
                }               
            } 
            
         ?>                                      
        <tr>
            <td class="initialpad"><?php echo $form->textField($model,"[$i]SHORT_NAME",array("class"=>"codewidth","id"=>"SHORTNAME-$i",'value'=>$shortname[$i],'maxlength' => 30)); ?></td>
            <td><?php echo $form->textField($model,"[$i]NAME",array("class"=>"","style"=>"width:300px","id"=>"NAME-$i",'value'=>$name[$i],'maxlength' => 30)); ?></td>
           
            <td>

               <?php   $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                         'model'=>$model_type,
                         'name'=>"Entity_Type[$i][Entity_Type]",
                         'id'=>"Entity_Type-$i", 
                        'value'=>$level[$i],
                         'source'=>$this->createUrl('ajax_request/FillEntityLevel?id='.$sessionentityid),                                   
                         'options'=>array(
                                   'minLength'=>'0', 
                                   'select'=>'js:function( event, ui ) {                                                                   
                                         $("#hdn_LevelId-'.$i.'").attr("value",ui.item.id);
                                     }',
                                   'change'=>'js:function( event, ui ) {                                           
                                               if (!ui.item) {
                                                    $(this).val("");   
                                                    $("#hdn_LevelId-'.$i.'").attr("value","");
                                                }
                                    }', 
                                   ),
                                  'htmlOptions'=>array(
                                  'class'=>'autofocus levelwidth',                                                  
                                ),
                            ));
                ?>                                       

            </td>
            <td>
                <?php   $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                         'model'=>$model,
                         'name'=>"Entity[$i][NAMES]",
                         'id'=>"Entity_Name-$i", 
                         'value'=>$parent[$i],                         
                         'source'=>'js: function(request, response) {
                                                            $.ajax({
                                                                url: "'.$this->createUrl('Entity/FillImmediateParent').'",
                                                                dataType: "json",
                                                                data: {
                                                                    term: request.term,
                                                                    entityid:"'.$sessionentityid.'",
                                                                    level: $("#hdn_LevelId-'.$i.'").val()
                                                                },
                                                                success: function (data) {
                                                                        response(data);
                                                                }
                                                            })
                                                         }',                                   
                         'options'=>array(
                                   'minLength'=>'0', 
                                   'select'=>'js:function( event, ui ) {                                                                   
                                         $("#hdn_ImmediateParentId-'.$i.'").attr("value",ui.item.id);
                                     }',
                                   'change'=>'js:function( event, ui ) {                                           
                                               if (!ui.item) {
                                                    $(this).val("");   
                                                    $("#hdn_ImmediateParentId-'.$i.'").attr("value","");
                                                }
                                    }', 
                                   ),
                                  'htmlOptions'=>array(
                                  'class'=>'autofocus drpdown paddate',
                                  'style'=>'width:270px'                                                  
                                ),
                            ));
                ?> 

            </td>
            
             <td >
                <?php              
                      $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model_organisation_structure,"attribute"=>"[$i]WEF",
                      'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',        
                      'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"WEF-$i",'value'=>$wef[$i],'class'=>'datecols')));
                ?>  
            </td>
            <td >
                <?php              
                      $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model_organisation_structure,"attribute"=>"[$i]WET",
                      'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',        
                      'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"WET-$i",'value'=>$wet[$i],'class'=>'datecols')));
                ?>  
            </td>

            <td><input name="<?php echo "chk_Is_Legal-".$i;?>" id="<?php echo "chk_Is_Legal-".$i;?>" type="checkbox" class="chkbox" <?php if($checkLevelId[$i] != "") echo 'checked="checked"';?> ></td>
            <td class="paddinglast">
                <button id="<?php echo "btn_ShowEntity-".$i;?>" class="dialog-open" onclick="js:return ShowEntity('<?php echo $i; ?>');"><?php echo $Getlabelname->Get_Labelname_Fnc("200");?></button>
                <input id="<?php echo "hdn_LevelId-".$i;?>" type="hidden" name="<?php echo "hdn_LevelId-".$i;?>" value="<?php echo $typeId[$i];?>">
                <input id="<?php echo "hdn_RelationId-".$i;?>" type="hidden" name="<?php echo "hdn_RelationId-".$i;?>" value="<?php echo $relationId[$i];?>">
                <input id="<?php echo "hdn_OrganisationStructureId-".$i;?>" type="hidden" name="<?php echo "hdn_OrganisationStructureId-".$i;?>" value="<?php echo $organisationstructureId[$i];?>">
                <input id="<?php echo "hdn_ImmediateParentId-".$i;?>" type="hidden" name="<?php echo "hdn_ImmediateParentId-".$i;?>" value="<?php echo $parentId[$i];?>">
                <input id="<?php echo "hdn_TypeId-".$i;?>" type="hidden" name="<?php echo "hdn_TypeId-".$i;?>" value="<?php echo $checkLevelId[$i];?>">
                <input id="<?php echo "hdn_EntityId-".$i;?>" type="hidden" name="<?php echo "hdn_EntityId-".$i;?>" value="<?php echo $entityId[$i];?>">
            </td>

        </tr>
        <?php } ?>
        
    </tbody>
</table>
<table class="tbl_btn" id="table_bottom_bg">
        <tbody>
                <tr>
                    <td class="btn_save">
                       
                         <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"reset",'size'=>'small','icon'=>'icon-refresh', 'label'=>$Getlabelname->Get_Labelname_Fnc("104"))); ?>
                          <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"submit",'size'=>'small','label'=>$model->isNewRecord ? $Getlabelname->Get_Labelname_Fnc("103") : $Getlabelname->Get_Labelname_Fnc("2021"),'id'=>"btn_Save",'icon'=>'icon-thumbs-up','htmlOptions'=>array('onclick'=>'js:return SaveEntity();'))); ?>            
                         <img title="Add" src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/icon_plus.png" class="clonerow" id="btn_AddMaster">                               
                         <input id="hdn_EntityCount" type="hidden" name="hdn_EntityCount" value="<?php echo $maincount; ?>">
       
                    </td>
                </tr>
        </tbody>        
    </table>
<div id="div_EntityPopup" title="Entity" ><iframe name="IframeEntity" id="IframeEntity" width="100%" height="100%" marginWidth="0" marginHeight="0" frameBorder="0" scrolling="auto" ></iframe></div>
<!--<div id="popup">
   <table class="popup">
        <tr>
            <th><?php //echo //$Getlabelname->Get_Labelname_Fnc("126");?></th>
            <td class="datealign">
                <?php              
                     // $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model_type,"attribute"=>"WEF",
                     // 'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',        
                     // 'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"WEF",'value'=>"",'class'=>'datecols')));
                ?>  
            </td>
            <th class="wetheader"><?php //echo $Getlabelname->Get_Labelname_Fnc("127");?></th>
            <td class="datealign">
                <?php              
                      //$this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model_type,"attribute"=>"WET",
                      //'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',        
                      //'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"WET",'value'=>"",'class'=>'datecols')));
                ?>  
            </td>
        </tr>
        <tr>
            <td colspan="4" class="saveperiod">                
                <button type="btn_SavePeriod" class="btn btn-default btn-se"><?php echo $Getlabelname->Get_Labelname_Fnc("131");?></button>
            </td>
        </tr>
   </table>
</div> -->
<?php $this->endWidget(); ?>

