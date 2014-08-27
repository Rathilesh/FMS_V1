<?php
/* @var $this Basic_definitionController */
/* @var $model Basic_definition */
/* @var $form CActiveForm */
?>
<?php

// 

?>
<style>
    .name
    {
        width:237px;
        padding:0 0 0 0px;
    }
    
    .datecolumns
    {
        width:98px;
    }
    .description
    {
        width:624px;
        padding:0 0 0 0px;
    }
    .detailseditbtn
    {
        height: 15px;
        width: 15px;
        padding: 21px 82px 0 10px;
        cursor: pointer;
        border: none !important;
        border-radius: 0px !important;
        float: right;
        margin: -19px;
    }
    .detailseditbtn1
    {
        height: 15px;
        width: 15px;
        padding: 21px 195px 0 10px;
        cursor: pointer;
        border: none !important;
        border-radius: 0px !important;
        float: right;
        margin: -19px;
    }
     .modal.fade.in
    {
        top:34%;
    }
    .modalstyle
    {
        border-bottom: 1px solid #e8e8e8;
        padding-bottom: 6px;         
    }
    .modal
    {   
        left: 58% !important;
        width: 300px !important;
    }
    .modal-footer 
    {
        padding: 6px 15px 7px !important;
    }

    .input_description
    {
        width:585px;
    }
    .datecolumn
    {
        width:100px;
    }
    .policy
    {
        width:132px;
        padding:0 10px 0 0px;
    }
    
    .editbtn
    {
        height:10px;
        padding:0 5px 0 4px;
        cursor:pointer;
        border: none !important;
        border-radius:0px !important;
    }
    
    .grid_details {
        width: 400px;
        border: 1px solid #9C9A9A;
        border-radius: 10px;
        padding: 6px;
        margin:10px auto;
        background-color: white;
        box-shadow: 0px 0px 22px 3px #c4c4c4;
    }
    .details_td
    {
        width:750px !important;
        border:1px solid #e8e8e8 !important;
        background-color: rgb(238, 236, 236);
         
    }
    .grid_details td
    {
        text-align: left;
       
    }
    .drpdown
    {
/*        height:13px;*/
        width:114px;
    }
    .btn_save
    {
        text-align: right !important;
       padding:0 5px 5px 0px;
    }
    .editbtn_save
    {
       text-align: right !important;
       padding:10px 0px 10px 10px !important;
    }
    .text-align-center
    {
        text-align: center !important;
    }
    .clonerow
    {
        z-index:10;
        border:none !important;
        cursor:pointer;
/*        margin-top: -29px;
        margin-right: 2px;*/
    }
    .detailclonerow
    {
        z-index:10;
        border:none !important;
        cursor:pointer;
        padding: 0 0 0 10px;
    }
    .default
    {
        width:50px;
    }

    .fixedHeader 
    {
        position: relative;
        display: block;
    }

    .scrollContent
    {
        display: block;
        overflow:auto;
        width: 872px;
        height:500px;
       

    }
    .tbl_btn
    {
        width:886px;
        padding-top: 5px;
        border: 1px solid #D3D0D0;
        border-radius: 10px;
        border-top:none;
        border-top-left-radius: 0px;
        border-top-right-radius: 0px;
        padding-right: 15px;

box-shadow:0px 6px 15px 0px #c4c4c4;

    }
    .insertedchild
    {
        
    }
    
    
    .grid_insert_table 
    {
        border-bottom:none !important;
        border-bottom-left-radius: 0px !important;
        border-bottom-right-radius: 0px !important;
        padding-bottom: 0px !important;
        box-shadow: 0px -4px 8px 1px #c4c4c4 !important;
    }
</style>
<script>
    $('document').ready(function(){
   

        $("#btn_Save").click(function(){
         
        var count1=$("#TotRowCount").val();
        var vflag=fullvalidation(count1);
        if(vflag===false)
            {
        return false;
            }
          for(var i=1;i<=count1;i++)
              {
//         
    if(vflag===0)
   savedetails(i);
  
               // savedetails(i);
              }
         
        });
    
        
   $(".btn-small").click(function(){
       
     var flag=0;
     
  var sub_array=[];
    var btn_id=(this.id).split("-"); 
    btn_index=btn_id[1];
    
     var count= $('#hdn_DetailsCount-'+btn_index).val();           
               for(var j=1;j<=count;j++)
               {
                   
               var def_type=$("#DEFINITION_TYPE-"+btn_index).val();
                    var shortname= $("#SHORT_NAME-\\["+ j +"\\:"+ btn_index +"\\]").val().trim();  
                    var description = $("#DESCRIPTION-\\["+ j +"\\:"+ btn_index +"\\]").val().trim(); 
                     var inside_sub=jQuery.inArray(shortname,sub_array);
                    
                    if(shortname!=="")
                    {
                        if(inside_sub<0)
                              {
                                sub_array.push(shortname);  
                              }
                              if(inside_sub>=0)
                                  {
                                    flag=3;   
                                    msgid= j+alertformat+def_type;  
                            GetDynamicAlert("20125",msgid);
                                                     
                                   return false;
                                  } 
                    }
                    if(shortname!="" || description!="")
                    {
                        
                    
                        if(shortname=="")
                        {
                          
                        flag=1;
                           msgid= j+alertformat;  
                            GetDynamicAlert("20126",msgid);
                            $("#SHORT_NAME-\\["+ j +"\\:"+ btn_index +"\\]").focus();
                            return false;
                        }
                         if(description=="")
                        {flag=2;
                             msgid= j+alertformat;  
                            GetDynamicAlert("20127",msgid);
                            $("#DESCRIPTION-\\["+ j +"\\:"+ btn_index +"\\]").focus();
                            return false;
                        }
                    }
                     
                    
               }
               
    if(flag===0)
   savedetails(btn_index);
   //GetStaticAlert("20001","success"); 

   });
        var count=$("#TotRowCount").val();

        for(var i=1;i<=count;i++)
        {
//            $("#btn_EditBdef-1").click(function(){
//              alert("hi");  
//            });
//        
    $("#btn_AddDetails-"+i).click(function() {   
                
                 var ids=(this.id).split("-");                  
                 id=ids[1];
                  //******Add the rows in the edit(Policy Value) section******//
                 customclonechild(id);                 
                 
            });
        }
         $("#btn_AddMaster").click(function() { 
       
            //******Clone the last row of edit(Policy Value) section******//
            var clonedheader =$("#tbl_BDefMaster tbody>tr:last").prev().prev().clone();
            var newIDSuffix = ":"; 
            var prevId=$("#TotRowCount").val();            
            var newindex=parseInt($("#TotRowCount").val())+1; 
            $("#TotRowCount").val(newindex);
            
            //******Replacing the attributes(id,name) of the cloned row elements with new ******//
            clonedheader.find('input, select,img').each(function() {
                //Creating new Id for header row
                var idheader = $(this).attr('id');
                idheader = idheader.replace(/[0-9]/, newIDSuffix);
                idheader = idheader.replace(/[0-9]/g, "");
                idheader = idheader.replace(newIDSuffix, newindex); 
                $(this).attr('id', idheader);
                
                //Creating attributes for edit button
                if(!$(this).hasClass("editbtn"))
                {
                    var nameheader = $(this).attr('name');
                    nameheader = nameheader.replace(/[0-9]/, newIDSuffix);                
                    nameheader = nameheader.replace(/[0-9]/g, "");                
                    nameheader = nameheader.replace(newIDSuffix, newindex);                              
                    $(this).attr('name', nameheader);   
                }
                //Creating new instance for datepicker
               
                
                //Creating new instance for autocomplete
                
                                
                             
             });
            
            //******Adding the cloned row after the last row in the main(Policy) section ******//
            clonedheader.insertAfter($('#tbl_BDefMaster tr:last').prev()).find( 'input:text' ).attr('value','');
            
            //******Cloning the edit(Policy Value) section******//
            var cloneddetails =$("#tbl_BDefMaster tbody>tr:last").prev().prev().clone().attr("id", "div_edit-" + newindex);     
            cloneddetails.find('table').each(function() { 
                $(this).attr('id', "tbl_BDefDetails-"+newindex);  
            });           
            
            //******Adding the cloned row after the last row in the main(Policy) section ******//
            cloneddetails.insertAfter($('#tbl_BDefMaster tr:last').prev()).find( 'input:text' ).attr('value','');
            var rows = $("#tbl_BDefDetails-"+newindex+" tr:gt(0)"); // skip the header row
            var childrow="";
            
            //******Replacing the attributes(id,name) of the cloned row elements with new ******//
            rows.each(function(index) {
               if( $(this).closest('tr').next().length ) {                   
                   if(index<="4")
                    {
                        var newRows = $(this).closest('tr');
                         var mainrow="",newIDSuffix=":";
                             newRows.find('input, select').each(function() {
        
        var id = $(this).attr('id');                                  
                               var name = $(this).attr('name');
                               if (id.match("SHORT_NAME")) { 
                                   mainrow=id.substring(id.lastIndexOf(":")+1,id.lastIndexOf("]"));
                                   childrow=id.substring(id.lastIndexOf("[")+1,id.lastIndexOf(":"));
                               }
                                                            
                               else
                               {                                     

                                 id=id.replace(childrow+":"+mainrow,childrow+":"+newindex);                       
                                 name = name.replace(childrow+":"+mainrow,childrow+":"+newindex);
                               }
                               $(this).attr('id', id);
                               $(this).attr('name', name); 
                              
                               
                            }); 
                    }
                     else
                    {
                        $(this).remove();
                    }
               }
                }); 
                    
                      //******Replacing the attributes(id,name) of the cloned row elements(buttons,hidden fields) with new ******// 
                      var newRow = $("#tbl_BDefDetails-"+newindex+"  tbody>tr:last");
                       newRow.find('input,img').each(function() {
                           var id = $(this).attr('id'); 
                           id = id.replace(prevId, newindex);
                           
                                    
                            if(id.match("hdn_DetailsCount")||id.match("btn_EditBDef"))
                            {
                                var name = $(this).attr('name'); 
                                name = name.replace(prevId, newindex);
                                $(this).attr('name', name);  
                            }
                            if(id.match("btn_AddDetails"))
                            {
                                $(this).click(function(e){
                                  customclonechild(newindex);
                                });
                            }
                                
                            if(id.match("btn_EditBDef"))
                            {
                                $(this).click(function(e){
                                  SavePolicy(newindex);
                                });
                            }
                           
                           $(this).attr('id', id); 
                          
                       });
                  
                                  
               
            //******Adding new row count to Policy Value section******//                      
            $('#hdn_DetailsCount-'+newindex).val(childrow);
           
            return false;
        }); 
    });
   
   function fullvalidation(count1)
   {
       
   var result=0;
     for(var i=1;i<=count1;i++)
              {
                  var child_array=[];
              var count= $('#hdn_DetailsCount-'+i).val();           
               for(var j=1;j<=count;j++)
               {var def_type=$("#DEFINITION_TYPE-"+i).val();
                    var shortname= $("#SHORT_NAME-\\["+ j +"\\:"+ i +"\\]").val().trim(); 
                     var inside=jQuery.inArray(shortname,child_array);
                var description = $("#DESCRIPTION-\\["+ j +"\\:"+ i +"\\]").val().trim(); 
   
                     if(shortname!="" || description!="")
                    {
                      
                    
                        if(shortname=="")
                        {
                          
                       result=3;
                            msgid= j+alertformat+def_type;  
                            GetDynamicAlert("20128",msgid);
                            $("#SHORT_NAME-\\["+ j +"\\:"+ i +"\\]").focus();
                            return false;
                        }
                         if(description=="")
                        {
                           result=2;
                        
                            msgid= j+alertformat+def_type;  
                            GetDynamicAlert("20129",msgid);
                            $("#DESCRIPTION-\\["+ j +"\\:"+ i +"\\]").focus();
                            return false;
                        }
                    }
                
                   
                    if(shortname!=="")
                    {
                        if(inside<0)
                              {
                                child_array.push(shortname);  
                              }
                              if(inside>=0)
                                  {
                                     result=1;                                 
                                   msgid= j+alertformat+def_type;  
                            GetDynamicAlert("20125",msgid);
                                   return false;
                                  } 
                    }
               }
              }
              return result;
   }
    function customclonechild(id)
    {
        //******Cloning last row of Policy Value section******//     
        var $lastRow = $("#tbl_BDefDetails-"+id+" tbody>tr:last");
        var cloned = $("#tbl_BDefDetails-"+id+" tbody>tr:last").prev().clone();
        var rowIndex = $lastRow.index()+1;
        var prevIndex=$lastRow.index(); 

        var mainrow="",previd="";
        
        //******Replacing the attributes(id,name) of the cloned row elements with new ******//
        cloned.find('input, select').each(function() {
               var id = $(this).attr('id');
               previd=$(this).attr('id');
               var name = $(this).attr('name');
               if (id.match("SHORT_NAME")) { 
                   mainrow=id.substring(id.lastIndexOf(":")+1,id.lastIndexOf("]"));
               }
                id=id.replace(prevIndex+":"+mainrow,rowIndex+":"+mainrow);
                name = name.replace(prevIndex+":"+mainrow,rowIndex+":"+mainrow);

 if (id.match("organisation")) { 
               id="organisation"+rowIndex+mainrow;
//               name=rowIndex+mainrow+"ENTITY_ID"; 
              }
              if (id.match("ENTITY_ID")) { 
               id="ENTITY_ID"+rowIndex+mainrow;
               name=rowIndex+mainrow+"ENTITY_ID"; 
                $(this).autocomplete({                                            
                                       source:"<?php echo $this->createUrl('Basic_definition/ComboPolicyFunction') ?>",
                                       minLength: 0,
                                       select: function(event, ui) {
                                   //console.log(ui.item.id);
                                           //selectautocomplete(ui.item.id);
                                           //alert("#organisation"+rowIndex+mainrow);
                                          $("#organisation"+rowIndex+mainrow).val(ui.item.id);

                                       },
                                       change:function(event,ui){
                                        if (!ui.item) {
                                            $(this).val("");                                                                       
                                         }

                                       },
                                      
                   });
              }
              
              
               $(this).attr('id',id);
               $(this).attr('name',name);   
              $(this).addClass("insertedchild");
               //$(this).find('td.defaultbtn').hide();   
        });                   
        $('#hdn_DetailsCount-'+mainrow).val(rowIndex);
        cloned.find('td.defaultbtn').hide();
        //******Adding the cloned row after the last row in the edit(Policy Value) section ******//           
        cloned.insertAfter($("#tbl_BDefDetails-"+id+" tr:last").prev()).find( 'input:text' ).attr('value','');           
        return false;
    }
    
     function showdetails(id)
    {   
         var newid=id.split("-");
         if(newid[1]!="")
         $('#div_edit-'+newid[1]).toggle();


         var imgsrc=(document.getElementById(id).src).split("/");

         if (imgsrc[imgsrc.length-1] == 'edit.png') {
            document.getElementById(id).src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/minimise.png";

         } else {
            document.getElementById(id).src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/edit.png";       
         }
    }
     function showdetails1(id)
    {   
         var newid=id.split("-");
         if(newid[1]!="")
         $('#div_edit-'+newid[1]).hide();
     $("#editbtn-"+newid[1]).attr('src',"<?php echo Yii::app()->request->baseUrl; ?>/css/images/edit.png");

    }
    function savedetails(btn_index)
    {
        //        alert(btn_index);
        var def_type=$("#DEFINITION_TYPE-"+btn_index).val();
    var description=$("#DESCRIPTION-"+btn_index).val();
//    alert(def_type);
//    alert(description);
var up_id=[];
var up_shortname=[];
var up_description=[];
var up_entity=[];
$('[id^="ID"][id$=":'+btn_index+']" ]').not(".insertedchild").each(function(){
   var up0=$(this).val();
   
   up_id.push(up0);
});
$('[id^="SHORT_NAME"][id$=":'+btn_index+']" ]').not(".insertedchild").each(function(){
   var up1=$(this).val();
  
   up_shortname.push(up1);
});

$('[id^="DESCRIPTION"][id$=":'+btn_index+']" ]').not(".insertedchild").each(function(){
   var up2=$(this).val();
  
   up_description.push(up2);
});
$('[id^="organisation"][id$="'+btn_index+'" ]').not(".insertedchild").each(function(){
   
    var get_id_org=this.id;
    var get_class_org=$("#"+get_id_org).attr('class');
    //alert(get_class_org);
   // ENTITY_ID11
   //this.id
   var get_entity_value=$("#ENTITY_ID"+get_class_org+btn_index).val();
   //alert(get_entity_value);
   
   
   
    var up3="";
    //var ent_up=$('[id^="ENTITY_ID"][id$="'+btn_index+'" ]').val();
    
    if(get_entity_value!==""){
    up3=$(this).val();}
   
   up_entity.push(up3);
   
});
var in_id=[];
var in_shortname=[];
var in_description=[];
var in_entity=[];
$('.insertedchild[id^="id"][id$=":'+btn_index+']" ]').each(function(){
   var in0=$(this).val();
   in_id.push(in0);
});
$('.insertedchild[id^="SHORT_NAME"][id$=":'+btn_index+']" ]').each(function(){
   var in1=$(this).val();
   in_shortname.push(in1);
});
$('.insertedchild[id^="DESCRIPTION"][id$=":'+btn_index+']" ]').each(function(){
   var in2=$(this).val();
   in_description.push(in2);
});
$('.insertedchild[id^="organisation"][id$="'+btn_index+'" ]').each(function(){
    var in3="";
   // alert(this.id+"ssssssss");
   // ENTITY_ID11
    
    //$("#ENTITY_ID"+test+btn_index)
    var ent_in=$('.insertedchild[id^="ENTITY_ID"][id$="'+btn_index+'" ]').val();
    if(ent_in!==""){
    in3=$(this).val();}
   in_entity.push(in3);
});


jQuery.ajax({
                  type:"POST",
                  url: "<?php echo $this->createUrl('Basic_definition/Savebasicdefinition') ?>",
                  data:{def_type:def_type,description:description,up_id:up_id,up_shortname:up_shortname,up_description:up_description,up_entity:up_entity,in_id:in_id,in_shortname:in_shortname,in_description:in_description,in_entity:in_entity},                                 
                })
                 .done(function(data) 
           {
                var getchild=data.split(alertformat);
                if(getchild[0]=="1000")
                    {
                       //GetStaticAlert("20001","success"); 
                       location.reload();
                      
                    }
                    if(getchild[0]=="")
                    {location.reload();
                    }
                     if(getchild[0]=="20001")
                    {
                       msgid= getchild[1]+alertformat+getchild[2];  
                            GetDynamicAlert("20128",msgid);
                             return false;
                    }
                     if(getchild[0]=="20002")
                    {
                       msgid= getchild[1]+alertformat+getchild[2];  
                            GetDynamicAlert("20129",msgid);
                             return false;
                    }
                    if(getchild[0]=="2004")
                    {
                       msgid= getchild[1]+alertformat+getchild[2];  
                            GetDynamicAlert("20125",msgid);
                             return false;
                    }
//               alert(data);    
// openalert(data);
//               location.reload();    
              
           });


 
    }
     function DeletePolicyDetails(id)
    {
        //alert(id);return false;
        bootbox.confirm("<p class='modalstyle'><b><img width='30px' src='<?php echo Yii::app()->request->baseUrl; ?>/images/question_red.png'/>Confirmation</b></p><p>Are you sure to delete this Basic Definition ?</p>","No", "Yes", function(result) {
        if (result == true) {
//            var ids=id.split("-");
//            var myid= ids[1].lastIndexOf(":");
//            id=ids[1].substr(0, myid) + "\\" + ids[1].substr(myid);
//
//            var policyvalueid=$('#policydetailsid-'+id).val();
//            //alert(policyvalueid);
            var alertmessage="";
            //alert(policyid);
            $.ajax({  
               type: "POST",
               url: "<?php echo $this->createUrl('Basic_definition/Deletebasicdefinition') ?>",
               data:{id:id},          
               success: function(data){ 
                console.log(data);            
                //$('#policy-loading-indicator').hide();
                if(data=="1000")
                {
                     //GetStaticAlert("20130","success");
                    location.reload();                
                }
//                else
//                {
//                    if(data=="20006")
//                    { 
//                         alertmessage= "Policy Value Id cannot be null in row "+policyvalueid+".";
//                         openalert(alertmessage);
//                    }
//                    else if(data=="20007")
//                    { 
//                         alertmessage= "Policy Value cannot be deleted as Policy WEF already passed.";
//                         openalert(alertmessage);
//                    }
//                }
               },
            });
          }
       });
    }
    
    
</script>
<script>
    setTimeout(function() {
        $('.error_red').fadeOut('slow');
    }, 5000); 

    setTimeout(function() {
        $('.success_blue').fadeOut('slow');
    }, 5000); 
</script>
 <!---- Code for Flash Messages---->
    <?php if(Yii::app()->user->hasFlash('success')):?>
            <div class="success_blue"> <div class="success_blue_icon"></div>
                <div class="success_blue_msg">
                    <?php echo Yii::app()->user->getFlash('success'); ?>
                </div>
            </div>
            <?php elseif(Yii::app()->user->hasFlash('Error')):?>
            <div class="error_red"> <div class="error_red_icon"></div>
                <div class="error_red_msg">
                <?php echo Yii::app()->user->getFlash('Error'); ?>
                </div>
            </div>
    <?php endif; ?>
 <?php 
  require_once("popupdialog.php");
 $Getlabelname =new Get_Labelname_Cls(); 
 $master_Type=array();
  $master_Description=array();
$master_IsUniversal=array();
$master = Basic_Definition_Category::model()->findAll(); 


foreach($master as $val)
{
   
    array_push($master_Type, $val->DEFINITION_TYPE);  

    array_push($master_Description, $val->DESCRIPTION); 
    array_push($master_IsUniversal,$val->IS_UNIVERSAL);
}


   $mastercount = count($master);
 
 $detailscount=5;?>
<div class="form">
<?php   $Getlabelname =new Get_Labelname_Cls(); 
    ?>      
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',
            array(
	          'id'=>'basic--definition--form',
                  'type'=>'horizontal',
	          'enableAjaxValidation'=>false,
                )); ?>
    
    <table class="grid_insert_table" id="tbl_BDefMaster">
        <thead class="fixedHeader">          
            <tr class="header-class">
                <th class="name"><?php echo $Getlabelname->Get_Labelname_Fnc("115");?><a class="field_level_help" href="#Language"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8" class="helpimage"></a></th>
                <th class="description"><?php echo $Getlabelname->Get_Labelname_Fnc("116");?><a class="field_level_help" href="#Language"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8" class="helpimage"></a></th>
                
            </tr>
        </thead>
        <tbody class="scrollContent">
            <?php  for($i=1;$i<=$mastercount; $i++){ $k=$i-1;?>
            <?php 
            $id_arr=array();
             $short_name_arr=array();
    $description_arr=array();
    $entity=array();
    $entity_id_arr=array();
   
            
            ?>
              <tr>
                  
                        <td><?php echo $form->textField(Basic_Definition_Category::model(),"[$i]DEFINITION_TYPE",array("class"=>"","id"=>"DEFINITION_TYPE-$i","value"=>"$master_Type[$k]",'readonly' => 'true','style'=>'background-color:white;')); ?></td>
                        <td><?php echo $form->textField(Basic_Definition_Category::model(),"[$i]DESCRIPTION",array("class"=>"input_description","id"=>"DESCRIPTION-$i","value"=>"$master_Description[$k]",'readonly' => 'true','style'=>'background-color:white;')); ?></td>
                        <td style="width:70px;"> <img title="Basic Definition" src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/edit.png" class="editbtn" onClick="showdetails(this.id)" id="<?php echo "editbtn-".$i;?>">                               
                        </td>
             </tr>
             
             
             
             
             <tr style="display:none" id="<?php echo "div_edit-".$i;?>">

                    <td colspan="5" class="details_td">                        
                            <table id="<?php echo "tbl_BDefDetails-".$i;?>"class="grid_details">
                                <thead>
                                    <tr>
                                   <th style="display:none" class="name"><?php echo $Getlabelname->Get_Labelname_Fnc("140");?><a class="field_level_help" href="#Language"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8" class="helpimage"></a></th>

                                        <th class="name"><?php echo $Getlabelname->Get_Labelname_Fnc("105");?><a class="field_level_help" href="#Language"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8" class="helpimage"></a></th>
                                        <th class="name"><?php echo $Getlabelname->Get_Labelname_Fnc("116");?><a class="field_level_help" href="#Language"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8" class="helpimage"></a></th>
                                     <?php if($master_IsUniversal[$k]=='N'){?><th class="name"> <?php echo $Getlabelname->Get_Labelname_Fnc("122");?><a class="field_level_help" href="#Language"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8" class="helpimage"></a></th><?php }?><?php if($master_IsUniversal[$k]=='Y'){ ?><th style="display:none"> </th> <?php }?>
                                      <img title="Close" src="<?php echo Yii::app()->request->baseUrl; ?>/images/cross.png" class="<?php echo $master_IsUniversal[$k]=='N'?"detailseditbtn":"detailseditbtn1"; ?>" onClick="showdetails1(this.id)" id="<?php echo "detailseditbtn-".$i;?>">

                                    </tr>
                                </thead>
                                 <tbody>
                                     <?php
                                     
                                     $child=Basic_Definition::model()->findAll(array('order'=>'SHORT_NAME','condition'=>'DFCTG_DEFINITION_TYPE=:value','params'=>array(':value'=>$master_Type[$k])));

    $child_count=count($child);                                 
   foreach($child as $sub1)
{
   array_push($id_arr, $sub1->ID);  
    array_push($short_name_arr, $sub1->SHORT_NAME);  

  
    array_push($description_arr, $sub1->DESCRIPTION);  

   
    array_push($entity, $sub1->ENTITY_ID); 
    
   
} 
foreach($entity as $ent)
{
   $getName = Yii::app()->db->createCommand()
                            ->select('NAME')
                            ->where('ID=:value',array(':value'=>$ent))
                            ->from('ENTITY')
                            ->queryScalar();
  array_push($entity_id_arr,$getName);   
}
//print_r($entity);
//exit;
//                                          
                                     
                                     
                                     if($child_count>0)
                                         {
                                         $detailscount=$child_count;
                                         
                                         }
                                         else
                                         {
                                           $detailscount=3;  
                                         }?>
                                     <?php for($j=1;$j<=$detailscount; $j++){ $l=$j-1; ?>
                                      <tr class="row-details">
                                           <td style="display:none" class="name">
                                              
                                            <?php echo $form->textField($model,"[".$j.":".$i."]ID",array("class"=>$child_count==0?"insertedchild":'',"id"=>"ID-[".$j.":".$i."]","value"=>$child_count>0?$id_arr[$l]:'')); ?>                             
                                         </td>
                                        <td class="name">
                                            <?php echo $form->textField($model,"[".$j.":".$i."]SHORT_NAME",array("class"=>$child_count==0?"insertedchild":'',"id"=>"SHORT_NAME-[".$j.":".$i."]","value"=>$child_count>0?$short_name_arr[$l]:'')); ?>                             
                                         </td>
                                        <td class="name">                                            
                                            <?php echo $form->textField($model,"[".$j.":".$i."]DESCRIPTION",array("class"=>$child_count==0?"insertedchild":'',"id"=>"DESCRIPTION-[".$j.":".$i."]","value"=>$child_count>0?$description_arr[$l]:'')); ?>
                                        </td>
                                          <?php if($master_IsUniversal[$k]=='N'){?><td class="name">                                            
                                            <?php //echo $form->textField($model,"[".$j.":".$i."]ENTITY_ID",array("class"=>$child_count==0?"insertedchild":'',"id"=>"ENTITY_ID-[".$j.":".$i."]","value"=>$child_count>0?$entity_id_arr[$l]:'')); ?>
                                               <?php 
                                $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                                     //'model'=>$model,
                                     'name'=>$j.$i."ENTITY_ID",
                                     'id'=>"ENTITY_ID".$j.$i,
                                     'value'=> $child_count>0?$entity_id_arr[$l]:'',
                                     'source'=>$this->createUrl('Basic_definition/ComboPolicyFunction'),                                 
                                     'options'=>array(
                                               'minLength'=>'0',
                                               'select'=>'js:function( event, ui ) {
                                                       //console.log(ui.item.id); 
                                                       
                                                       $("#organisation'.$j.$i.'").attr("value",ui.item.id);
                                                        
                                                    
                                                 }',
                                                        'change'=>'js:function( event, ui ) {                                           
                                                                   if (!ui.item) {
                                                                        $(this).val("");                                                                       
                                                                    }
                                                       
                                                         }', 
                                               ),
                                              'htmlOptions'=>array(
                                              //'class'=>'drpdown',                                                  
                                            ),
                                        ));
                                               
                                               
                                               

?>
                                   <input id="<?php echo "organisation".$j.$i;?>" class="<?php echo $child_count==0?"insertedchild":$j; ?>" value="<?php echo $child_count>0?$entity[$l]:'' ?>" style="display:none;" name="<?php echo "[".$j.":".$i."]organisation";?>" >
                             
                                        </td><?php }?><?php if($master_IsUniversal[$k]=='Y'){ ?><td style="display:none"> </td>  <?php }?>
                                         
                                        <?php if($child_count>0) { ?>
                                        <td class="defaultbtn">
                                         
                                                <span title="Delete" class="icon-remove" style="display:block;float:right;margin:-1px 1px 0px 4px;cursor:pointer;" id="<?php echo "btn_DeleteBdefDetails-".$j.":".$i;?>" onclick="DeletePolicyDetails(<?php echo $child_count>0?$id_arr[$l]:''; ?> )"></span>
                                         
                                        </td>
                                        <?php } ?>
                                        <?php if($child_count<=0) { ?>
                                        <td></td>
                                        <?php } ?>
                                      </tr>
                                      <?php } ?>
                                      <tr class="button-class">
                                       <td colspan="3" class="editbtn_save">

                                      <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"button",'size'=>'small', 'label'=>$model->isNewRecord ? $Getlabelname->Get_Labelname_Fnc("103") : $Getlabelname->Get_Labelname_Fnc("2021"),'id'=>"btn_EditBDef-$i",'icon'=>'icon-thumbs-up')); ?>
                                       <img title="Add" src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/icon_plus.png" class="detailclonerow" id="<?php echo "btn_AddDetails-".$i?>">                               
                                          <input id="<?php echo "hdn_DetailsCount-".$i;?>" type="hidden" name="<?php echo "hdn_DetailsCount-".$i;?>" value="<?php echo $detailscount;?>">

                                  </td>
                                      </tr>
                                      </tbody>
                        </table>   
                        </td>
                </tr>
                <?php } ?>
                <tr>
                    
                </tr>
                  </tbody>
        
    </table>
     <table class="tbl_btn" id="table_bottom_bg">
                <tr>
                    <td class="btn_save">
                <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"button",'size'=>'small', 'label'=>$model->isNewRecord ? $Getlabelname->Get_Labelname_Fnc("103") : $Getlabelname->Get_Labelname_Fnc("2021"),'id'=>"btn_Save",'icon'=>'icon-thumbs-up','htmlOptions'=>array('onclick'=>''))); ?>            

<!--                         <img src="<?php //echo Yii::app()->request->baseUrl; ?>/css/images/icon_plus.png" class="clonerow" id="<?php //echo "btn_AddMaster" ;?>">                               -->
                         <input id="TotRowCount" type="hidden" name="TotRowCount" value="<?php echo $mastercount;?>">           
                    </td>
                </tr>
        
        
    </table>

<?php $this->endWidget(); ?>

</div><!-- form -->

