<!--   
    Created on : Jan 6, 2014
    Author     : Archana Suresh
    Purpose    : Create,Update and Delete Policy and Policy Values.
-->

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom_styles/custom_style_policy.css"  /> </link>         
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/custom_jquery/validation_v1.js" type="text/javascript"></script>

<script>
   
    $(document).ready(function(){
        var count=$("#TotRowCount").val();   
        for(var i=1;i<=count;i++)
        {   
            //******To show all suggestions of autocomplete by default on click******//
            $("#POLICY_FUNCTION-"+i).bind('focus', function(){ 
                    $(this).autocomplete("search"); 
             }); 
             $("#WEF-"+i).change(function(){
                    $(this).datepicker("option","minDate","0");                   
             });
             $("#WET-"+i).change(function(){
                    $(this).datepicker("option","minDate","0");
             });
            $("#btn_AddDetails-"+i).click(function() {   
                
                 var ids=(this.id).split("-");                  
                 id=ids[1];
                  //******Add the rows in the edit(Policy Value) section******//
                 customclonechild(id);                 
                 
            });   
        } 
         //******Add the rows in the main(Policy) section******//
        $("#btn_AddMaster").click(function() {        
               
           
           var newIDSuffix = ":"; 
           var prevId=$("#TotRowCount").val();            
           var newindex=parseInt($("#TotRowCount").val())+1; 
           $("#TotRowCount").val(newindex);
           //******Clone the last row of edit(Policy Value) section******//
           var clonedheader =$("#tbl_PolicyMaster tbody>tr:last").prev().prev().clone().attr('class',"tr_Save-"+newindex);
            
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
                if($(this).hasClass("hasDatepicker"))
                {   
                  $(this).removeClass('hasDatepicker').datepicker({dateFormat:'dd/mm/yy',minDate: 0});   
                }
                
                //Creating new instance for autocomplete
                if($(this).hasClass("ui-autocomplete-input"))
                {                    
               
                  $(this).autocomplete({                                            
                                       source:"<?php echo $this->createUrl('Policy/ComboPolicyFunction') ?>",
                                       minLength: 0,                                       
                                       change:function(event,ui){
                                        if (!ui.item) {
                                            $(this).val("");                                                                       
                                         }
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
            
            
            //******Removing delete button for the cloned row ******//  
            clonedheader.find('span').each(function() {                
                 var spanid=$(this).closest('span').attr('id');                   
                 if (spanid!=null && spanid.match("btn_DeletePolicy")) 
                 { 
                    $(this).remove();
                 }
            });
            //******Adding the cloned row after the last row in the main(Policy) section ******//
            clonedheader.insertAfter($('#tbl_PolicyMaster tr:last').prev()).find( 'input:text' ).attr('value','');
              
              var currentDate = new Date();
              var day = currentDate.getDate();
               if(parseInt(day)<10)
                day="0"+day;              
              var month = (currentDate.getMonth() + 1);
               if(parseInt(month)<10)
                month="0"+month;              
              var year = currentDate.getFullYear();

              $("#WEF-"+newindex).val(day + "/" + month + "/" + year);
 
            //******Cloning the edit(Policy Value) section******//
            var cloneddetails =$("#tbl_PolicyMaster tbody>tr:last").prev().prev().clone(true).attr("id", "div_edit-" + newindex).attr('class',"tr_Save-"+newindex);     
            cloneddetails.find('table').each(function() { 
                $(this).attr('id', "tbl_PolicyDetails-"+newindex);  
            });           
            
            //******Adding the cloned row after the last row in the main(Policy) section ******//
            cloneddetails.insertAfter($('#tbl_PolicyMaster tr:last').prev()).find( 'input:text' ).attr('value','');
            var rows = $("#tbl_PolicyDetails-"+newindex+" tr:gt(0)"); // skip the header row
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
                               if (id.match("POLICY_VALUE")) { 
                                   mainrow=id.substring(id.lastIndexOf(":")+1,id.lastIndexOf("]"));
                                   childrow=id.substring(id.lastIndexOf("[")+1,id.lastIndexOf(":"));
                               }
                               if (id.match("IS_DEFAULT")) 
                               {                
                                     id = id.replace(prevId, newindex);                                             
                                     name = name.replace(prevId, newindex);                                    
                               }                                 
                               else
                               {                                     

                                 id=id.replace(childrow+":"+mainrow,childrow+":"+newindex);                       
                                 name = name.replace(childrow+":"+mainrow,childrow+":"+newindex);
                               }
                               $(this).attr('id', id);
                               $(this).attr('name', name); 
                               
                               
                            }); 
                            //******Removing delete button for the cloned row ******//   
                            newRows.find('span').each(function() {                
                                 var spanid=$(this).closest('span').attr('id');                   
                                 if (spanid!=null && spanid.match("DeletePolicyDetails")) 
                                 { 
                                    $(this).remove();
                                 }
                            });
  
                    }
                     else
                    {
                        $(this).remove();
                    }
               }
                }); 
                
                 var thRow = $("#tbl_PolicyDetails-"+newindex+" thead"); 
                 thRow.find('img').each(function() {
                 var id = $(this).attr('id'); 
                 if(id!=null && id.match("detailseditbtn"))
                     {
                         id = id.replace(prevId, newindex);
                         $(this).attr('id', id); 
                     }
                 });
                    
                      //******Replacing the attributes(id,name) of the cloned row elements(buttons,hidden fields) with new ******// 
                      var newRow = $("#tbl_PolicyDetails-"+newindex+"  tbody>tr:last");
                       newRow.find('input,img,button').each(function() {
                           var id = $(this).attr('id'); 
                           id = id.replace(prevId, newindex);
                           
                                    
                            if(id.match("hdn_DetailsCount")||id.match("btn_EditPolicy"))
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
  
                           
                           $(this).attr('id', id); 
                          
                       });      
               
            //******Adding new row count to Policy Value section******//                      
            $('#hdn_DetailsCount-'+newindex).val(childrow);
            
            return false;
        });
        
    });
</script>
<script>
   
    //     Add/Update a Policy and Policy Value
    function SavePolicy(ids)
    {
        
        var ids=ids.split("-");                                   
        var id=ids[1];     
        var shortname=$('#SHORTNAME-'+id).val().trim();
        var description=$('#DESCRIPTION-' +id).val().trim();    
        var wef=$('#WEF-'+id).val().trim();
        var wet=$('#WET-' +id).val().trim();    
        var policyfunction=$('#POLICY_FUNCTION-'+id).val().trim(); 
        var dateformat = /^(\d{1,2})\/(\d{1,2})\/(\d{4})$/;
        var today = new Date();       
        var msgid ="";
        if(shortname=="")
        {
            GetStaticAlert("20035");            
            $('#SHORTNAME-'+id).focus();
            return false;
        }
        if(description=="")
        {   
            GetStaticAlert("20036");            
            $('#DESCRIPTION-' +id).focus();
            return false;
        }
        if(wef=="")
        {  
            GetStaticAlert("20037");            
            $('#WEF-'+id).focus();
            return false;
        }
        if(wef!="")
        {
            if(!ValidateDate(wef)) 
            {
                 GetStaticAlert("20038");                 
                 $('#WEF-'+id).focus();
                 return false;
            }             
        }
        
        if(wet!="")
        {
             if(!ValidateDate(wet)) 
             {
                  GetStaticAlert("20039");                  
                  $('#WET-'+id).focus();
                  return false;
             }
             else
             {
               var wetDate = wet.split("/");
               var wefDate=  wef.split("/");
               userwetDate = new Date(wetDate[2], wetDate[1] -1, wetDate[0]); 
               userwefDate = new Date(wefDate[2], wefDate[1] -1, wefDate[0]); 
                if(userwefDate>userwetDate)
                { 
                   GetStaticAlert("20040");                   
                   return false;
                }  
             } 
            
        }
     
       var count= $('#hdn_DetailsCount-'+id).val();
       var detailsflag=0;
       var dup=[];
       
       for(var i=1;i<=count;i++)
       {
            var policyvalue= $("#POLICY_VALUE-\\["+ i +"\\:"+ id +"\\]").val().trim();  
            var policydescription = $("#DESCRIPTION-\\["+ i +"\\:"+ id +"\\]").val().trim();     
            if(policyvalue!="" || policydescription!="")
            {
                if(policyvalue=="")
                {                
                    GetDynamicAlert("20041",i);
                    $("#POLICY_VALUE-\\["+ i +"\\:"+ id +"\\]").focus();
                    return false;
                }
                if(policydescription=="")
                {                                  
                    GetDynamicAlert("20042",i);
                    $("#DESCRIPTION-\\["+ i +"\\:"+ id +"\\]").focus();
                    return false;
                }
                detailsflag=1;
                $("#IS_DEFAULT-\\["+ i +"\\:"+ id +"\\]").prop('disabled', false);
                dup[i]=policyvalue;
            }
            else
            {
                $("#IS_DEFAULT-\\["+ i +"\\:"+ id +"\\]").prop('disabled', true);
            }
            
       }
       var checkvalue="0";
       if(detailsflag==1)
       {
           if(document.querySelector('input[name="Policy_Value['+id+'][IS_DEFAULT]"]:checked')!=null)
           {
                checkvalue=document.querySelector('input[name="Policy_Value['+id+'][IS_DEFAULT]"]:checked').value;
           }
           
       }
      
       var n=dup.length;     
       for (var k=0; k<n; k++) {                       
		for (l=k+1; l<n; l++) {              
			if (dup[k]!=null && dup[l] && dup[k]==dup[l])
                            {                                 
                                 msgid= l+alertformat+shortname;                                    
                                 GetDynamicAlert("20034",msgid);
                                 return false;
                            }
                 }	
        }       
       var values = $('.tr_Save-'+ id +' :input').serialize();
      
       var url="<?php echo $this->createUrl('Policy/SavePolicy') ?>";
       url=url+"?checkvalue="+checkvalue;
      
       $.ajax({  
           type: "POST",
           url: url,
           data:values,
           dataType: 'json',
          
           success: function(index){ 
           
           var saved=1; 
           var masterstatus=index[0][1];
           var getmaster=masterstatus.split("-");           
           if(getmaster[0]=="20010")
           {
                $('#policyid'+id).val(getmaster[2]);               
                $('#btn_DeletePolicy-'+id).css({display:"block",float:"right",margin: "-1px 5px 0px 0px",cursor:"pointer"});
                       
           }
           else
           {               
               saved=0;
               if(getmaster[0]=="20011")
                {                         
                    GetDynamicAlert("20011",id);
                     return false;
                }
                else if(getmaster[0]=="20012")
                {                        
                     GetDynamicAlert("20012",id); 
                     return false;
                }
                else if(getmaster[0]=="20013")
                {                        
                     GetDynamicAlert("20013",id); 
                     return false;
                }
                else if(getmaster[0]=="20014")
                {                     
                     GetDynamicAlert("20014",id); 
                     return false;
                }
                else if(getmaster[0]=="20015")
                {                       
                     GetDynamicAlert("20015",id); 
                     return false;
                }
                else if(getmaster[0]=="20016")
                {                       
                     GetDynamicAlert("20016",id); 
                     return false;
                }
                else if(getmaster[0]=="20018")
                {                                            
                     GetDynamicAlert("20018",id); 
                     return false;
                }
                else if(getmaster[0]=="20033")
                {                                            
                     GetDynamicAlert("20033",id);
                     return false;
                }
                 else if(getmaster[0]=="20019")
                {                                            
                     GetDynamicAlert("20019",id);
                     return false;
                }
                 else if(getmaster[0]=="20020")
                {                                            
                     GetDynamicAlert("20020",id);
                     return false;
                }
           }
         
         if(index[1]!=null)
         {
                childstatus=index[1];
                //console.log(childstatus);
                var k=1;
                for(key in childstatus)
                {                     
                   
                    var getchild=childstatus[key].split("-");
                    
                    if(getchild[0]=="20024")
                    {
                       var indexarray=getchild[3];
                       var newindex=indexarray.split(":");
                       $('#policydetailsid-'+newindex[0]+'\\:'+id).val(getchild[2]);
                       $('#btn_DeletePolicyDetails-'+newindex[0]+'\\:'+id).css({display:"block",float: "right", margin: "-1px 5px 0px 0px",cursor:"pointer"});
                       $("#IS_DEFAULT-\\["+ newindex[0] +"\\:"+ id +"\\]").prop('disabled', false);
                    }
                    else
                    {                 
                       saved=0;
                       if(getchild[0]=="20025")
                       {
                            msgid= getchild[2]+alertformat+shortname;                             
                            GetDynamicAlert("20025",msgid);
                            return false;
                       }
                       else if(getchild[0]=="20026")
                       {
                            msgid= getchild[2]+alertformat+shortname;  
                            GetDynamicAlert("20026",msgid);
                            return false;
                       }                       
                       else if(getchild[0]=="20027")
                       {
                            msgid= getchild[2]+alertformat+shortname;  
                            GetDynamicAlert("20027",msgid);
                            return false;
                       }
                       else if(getchild[0]=="20028")
                       {
                            msgid= getchild[2]+alertformat+shortname;  
                            GetDynamicAlert("20028",msgid);
                            return false;
                       }
                       else if(getchild[0]=="20029")
                       {
                            msgid= getchild[2]+alertformat+shortname;  
                            GetDynamicAlert("20029",msgid);
                            return false;
                       }
                       else if(getchild[0]=="20030")
                       {
                            msgid= getchild[2]+alertformat+shortname;  
                            GetDynamicAlert("20030",msgid);
                            return false;
                       } 
                       else if(getchild[0]=="20034")
                       {
                            msgid= getchild[2]+alertformat+shortname;  
                            GetDynamicAlert("20034",msgid);
                            return false;
                       }
                       
                    } 
                    k++;

                }
      
           }
          
           if(saved=1)
            { 
                   GetStaticAlert("20010","success");
            }
        },
       
       });      
        
    }
    
    // Validation for saving/updating multiple policy/policy values
    function SaveAllPolicy()
    {
        var today = new Date();
        var maincount=$("#TotRowCount").val();        
        var day = today.getDate();
         if(parseInt(day)<10)
          day="0"+day;              
        var month = (today.getMonth() + 1);
         if(parseInt(month)<10)
          month="0"+month;              
        var year = today.getFullYear();                
        var currentdate=day + "/" + month + "/" + year;
        var rowspresent=0;
        var msgid ="";
        
        for(var i=1;i<=maincount;i++)           
        {
             
             var shortname=$('#SHORTNAME-'+i).val().trim();
             var description=$('#DESCRIPTION-'+i).val().trim();    
             var wef=$('#WEF-'+i).val().trim();
             var wet=$('#WET-'+i).val().trim();    
             var policyfunction=$('#POLICY_FUNCTION-'+i).val().trim(); 
             var dateformat = /^(\d{1,2})\/(\d{1,2})\/(\d{4})$/;             
            
            
            if(shortname!="" || description!="" || wef!=currentdate || wet!="" || policyfunction!="")
            {                
                if(shortname=="")
                {
                    GetDynamicAlert("20043",i);
                    $('#SHORTNAME-'+i).focus();
                    return false;
                }
                if(description=="")
                {
                    GetDynamicAlert("20044",i);
                    $('#DESCRIPTION-' +i).focus();
                    return false;
                }
                if(wef=="")
                {
                    GetDynamicAlert("20045",i);
                    $('#WEF-'+i).focus();
                    return false;
                }
                if(wef!="")
                {
                    if(!ValidateDate(wef)) 
                    {
                         GetDynamicAlert("20046",i);
                         $('#WEF-'+i).focus();
                         return false;
                    }             
                }

                if(wet!="")
                {
                     if(!ValidateDate(wet)) 
                     {
                          GetDynamicAlert("20047",i);
                          $('#WET-'+i).focus();
                          return false;
                     }
                     else
                     {
                       var wetDate = wet.split("/");
                       var wefDate=  wef.split("/");
                       userwetDate = new Date(wetDate[2], wetDate[1] -1, wetDate[0]); 
                       userwefDate = new Date(wefDate[2], wefDate[1] -1, wefDate[0]); 
                        if(userwefDate>userwetDate)
                        {
                           GetDynamicAlert("20048",i);
                           return false;
                        }  
                     } 

                }
                rowspresent=1;
            }
               var count= $('#hdn_DetailsCount-'+i).val();           
               for(var j=1;j<=count;j++)
               {
                    var policyvalue= $("#POLICY_VALUE-\\["+ j +"\\:"+ i +"\\]").val().trim();  
                    var policydescription = $("#DESCRIPTION-\\["+ j +"\\:"+ i +"\\]").val().trim();     
                    if(policyvalue!="" || policydescription!="")
                    {
                        if(shortname=="")
                        {
                            GetDynamicAlert("20043",i);
                            $('#SHORTNAME-'+i).focus();
                            return false;
                        }
                    
                        if(policyvalue=="")
                        {
                            
                            msgid= j+alertformat+shortname;  
                            GetDynamicAlert("20049",msgid);
                            $("#POLICY_VALUE-\\["+ j +"\\:"+ i +"\\]").focus();
                            return false;
                        }
                        if(policydescription=="")
                        {                            
                            msgid= j+alertformat+shortname;  
                            GetDynamicAlert("20050",msgid);
                            $("#DESCRIPTION-\\["+ j +"\\:"+ i +"\\]").focus();
                            return false;
                        }
                        detailsflag=1;
                        $("#IS_DEFAULT-\\["+ j +"\\:"+ i +"\\]").prop('disabled', false);
                    }
                    else
                    {
                        $("#IS_DEFAULT-\\["+ j +"\\:"+ i +"\\]").prop('disabled', true);
                    }

               }
            
        }
        
        if(rowspresent=="0")
        {
            GetStaticAlert("20052");
            return false;
        }
        
        return true;
    }
     //******Adding new row to Policy Value section******//    
    function customclonechild(id)
    {
        //******Cloning last row of Policy Value section******//     
        var $lastRow = $("#tbl_PolicyDetails-"+id+" tbody>tr:last");
        var cloned = $("#tbl_PolicyDetails-"+id+" tbody>tr:last").prev().clone();
        var rowIndex = $lastRow.index()+1;
        var prevIndex=$lastRow.index(); 

        var mainrow="",previd="";
        
        //******Replacing the attributes(id,name) of the cloned row elements with new ******//
        cloned.find('input, select').each(function() {
               var id = $(this).attr('id');
               previd=$(this).attr('id');
               var name = $(this).attr('name');
               if (id.match("POLICY_VALUE")) { 
                   mainrow=id.substring(id.lastIndexOf(":")+1,id.lastIndexOf("]"));
               }
               id=id.replace(prevIndex+":"+mainrow,rowIndex+":"+mainrow);                       
               name = name.replace(prevIndex+":"+mainrow,rowIndex+":"+mainrow);             
               $(this).attr('id', id);
               $(this).attr('name', name);   
              
               if (id.match("IS_DEFAULT")) {
                   $(this).attr('value', rowIndex+":"+mainrow);   
                    if(document.getElementById(previd).checked)
                    {
                         this.checked=false
                    }
               }         
        });  
        //******Removing delete button for the cloned row ******//  
         cloned.find('span').each(function() {                
                 var spanid=$(this).closest('span').attr('id');                   
                 if (spanid!=null && spanid.match("btn_DeletePolicy")) 
                 { 
                    $(this).remove();
                 }
         });
        $('#hdn_DetailsCount-'+mainrow).val(rowIndex);
        //******Adding the cloned row after the last row in the edit(Policy Value) section ******//           
        cloned.insertAfter($("#tbl_PolicyDetails-"+id+" tr:last").prev()).find( 'input:text' ).attr('value','');           
        return false;
    }
    
    
    //******To Show and Hide the edit section on edit button click******//           
    function showdetails(id)
    {   
         var newid=id.split("-");
         if(newid[1]!="")         
         $('#div_edit-'+newid[1]).fadeToggle(800);
       
         id="editbtn-"+newid[1];
         
         var imgsrc=(document.getElementById(id).src).split("/");
         

         if (imgsrc[imgsrc.length-1] == 'edit.png') {
            document.getElementById(id).src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/minimise.png";//         
           
         } else {
            document.getElementById(id).src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/edit.png";       
         }                 
    }
    
    
    
    //Deletes a Policy
    function DeletePolicy(id)
    {
        
        bootbox.confirm("<p class='modalstyle'><b><img width='30px' src='<?php echo Yii::app()->request->baseUrl; ?>/images/question_red.png'/>Confirmation</b></p><p>Are you sure to delete this Policy ?</p>", "No", "Yes", function(result) {
        if (result == true) {
            var ids=id.split("-");
            var policyid=$('#policyid'+ids[1]).val();            
            $.ajax({  
               type: "POST",
               url: "<?php echo $this->createUrl('Policy/DeletePolicy') ?>",
               data:"policyid="+policyid,          
               success: function(data){ 
                //console.log(data);            
                $('#policy-loading-indicator').hide();
                if(data=="20023")
                {
                    location.reload();                
                }
                else
                {
                    if(data=="20016")
                    { 
                           GetDynamicAlert("20016",policyid);
                    }
                    else if(data=="20017")
                    { 
                           GetStaticAlert("20017");
                    }
                    else if(data=="20021")
                    { 
                           GetStaticAlert("20021");
                    }
                    else if(data=="20022")
                    { 
                           GetStaticAlert("20022");
                    }
                 }
               },
            });
        }
      });
    }
    
    
    
    //Deletes a Policy Value
    function DeletePolicyDetails(id)
    {
        
        bootbox.confirm("<p class='modalstyle'><b><img width='30px' src='<?php echo Yii::app()->request->baseUrl; ?>/images/question_red.png'/>Confirmation</b></p><p>Are you sure to delete this Policy Value ?</p>","No", "Yes", function(result) {
        if (result == true) {
            var ids=id.split("-");
            var myid= ids[1].lastIndexOf(":");
            id=ids[1].substr(0, myid) + "\\" + ids[1].substr(myid);
            var policyvalueid=$('#policydetailsid-'+id).val();            
            $.ajax({  
               type: "POST",
               url: "<?php echo $this->createUrl('Policy/DeletePolicyValues') ?>",
               data:"policyvalueid="+policyvalueid,          
               success: function(data){ 
                //console.log(data);            
                $('#policy-loading-indicator').hide();
                if(data=="20032")
                {
                    location.reload();                
                }
                else
                {
                    if(data=="20030")
                    {                     
                        GetDynamicAlert("20030",policyvalueid);
                    }
                    else if(data=="20031")
                    {                       
                        GetDynamicAlert("20031",policyvalueid);
                    }
                }
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
    
    
<div class="form" id="mainform">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'policy-form',
	'enableAjaxValidation'=>false,
)); ?>

    <?php 
        require_once("popupdialog.php");
        $Getlabelname =new Get_Labelname_Cls();//Getting the labels       
        if(isset($_POST['TotRowCount'])<>'')
        {
            $mastercount=$_POST['TotRowCount'];
        }
        else
        {     
            $mastercount=16;                      
        }        
        
        $defaultDetailsCount=5;
        $getPolicyMaster=Policy::model()->findAll(array('order'=>'UPPER(SHORT_NAME) ASC'));        
        
       if($mastercount<=count($getPolicyMaster))
            $mastercount=count($getPolicyMaster);                                    
        ?>
    
 
    <table class="grid_insert_table" id="tbl_PolicyMaster">
        <thead class="fixedHeader">          
            <tr>
                <th class="name"><?php echo $Getlabelname->Get_Labelname_Fnc("125");?><a class="field_level_help" href="#Policy"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8" class="helpimage"></a></th>
                <th class="description"><?php echo $Getlabelname->Get_Labelname_Fnc("116");?><a class="field_level_help" href="#Description"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8" class="helpimage"></a></th>
                <th class="datecolumns"><?php echo $Getlabelname->Get_Labelname_Fnc("126");?><a class="field_level_help" href="#WEF"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8" class="helpimage"></a></th>
                <th class="wetdate"><?php echo $Getlabelname->Get_Labelname_Fnc("127");?><a class="field_level_help" href="#WET"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8" class="helpimage"></a></th>
                <th class="policy"><?php echo $Getlabelname->Get_Labelname_Fnc("128");?><a class="field_level_help" href="#Function"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8" class="helpimage"></a></th>
            </tr>
        </thead>
        <tbody class="scrollContent" id="gridtbody">
            
            
            <?php  for($i=1;$i<=$mastercount; $i++){   
            
            $deletestyle="display:none";                               
            $policyid=array();                         
            if(isset($_POST['policyid'.$i])!="")
            {
                $policyid[$i] =$_POST['policyid'.$i];  
                if($policyid[$i]=="")
                    $deletestyle="display:none";
                else
                   $deletestyle="display:block;float:right;cursor: pointer;"; 
            }
            else if(count($getPolicyMaster)>0 && isset($getPolicyMaster[$i-1]['ID'])!='')
            {                             
                $policyid[$i]=$getPolicyMaster[$i-1]['ID'];
                $deletestyle="display:block;float:right;cursor:pointer";
            }
            else
            {
               $policyid[$i]='';
               $deletestyle="display:none";
            }    
                
                
            $shortname=array();                         
            if(isset($_POST['Policy'][$i]['SHORT_NAME'])<>"")
            {              
               $shortname[$i] =$_POST['Policy'][$i]['SHORT_NAME'];               
            }
            else if(count($getPolicyMaster)>0 && isset($getPolicyMaster[$i-1]['SHORT_NAME'])!='')
            {                             
                 $shortname[$i]=$getPolicyMaster[$i-1]['SHORT_NAME'];
            }
            else
            {
               $shortname[$i]=$model->SHORT_NAME;
            }
            
            
            $description=array();                         
            if(isset($_POST['Policy'][$i]["DESCRIPTION"])<>"")
            {
               $description[$i] =$_POST['Policy'][$i]["DESCRIPTION"];
               
            }
            else if(count($getPolicyMaster)>0 && isset($getPolicyMaster[$i-1]['DESCRIPTION'])!='')
            {                             
                $description[$i]=$getPolicyMaster[$i-1]['DESCRIPTION'];
            }
            else
            {
               $description[$i]=$model->DESCRIPTION;
            }
            
            $wef=array();   
            if(isset($_POST['Policy'][$i]["WEF"])<>"")
            {               
                $wef[$i] =$_POST['Policy'][$i]["WEF"];
            }
            else if(count($getPolicyMaster)>0 && isset($getPolicyMaster[$i-1]['WEF'])!='')
            {
                $wef[$i]=date('d/m/Y',strtotime($getPolicyMaster[$i-1]['WEF']));
            }
            else
            {
               $wef[$i]=date("d/m/Y") ;
            }
            
            $wet=array();   
            if(isset($_POST['Policy'][$i]["WET"])<>"")
            {               
                $wet[$i] =$_POST['Policy'][$i]["WET"];
            }
            else if(count($getPolicyMaster)>0 && isset($getPolicyMaster[$i-1]['WET'])!='')
            {
                $wet[$i]=date('d/m/Y',  strtotime($getPolicyMaster[$i-1]['WET']));                   
            }
            else
            {
               $wet[$i]=$model->WET;
            }
            
            $policyfunction=array();   
            if(isset($_POST['Policy'][$i]["POLICY_FUNCTION"])<>"")
            {               
                $policyfunction[$i] =$_POST['Policy'][$i]["POLICY_FUNCTION"];
            }
            else if(count($getPolicyMaster)>0 && isset($getPolicyMaster[$i-1]['POLICY_FUNCTION'])!='')
            {
                $policyfunction[$i]=$getPolicyMaster[$i-1]['POLICY_FUNCTION'];                     
            }
            else
            {
               $policyfunction[$i]=$model->POLICY_FUNCTION;
            }                       
            ?>
      
                <tr class="<?php echo "tr_Save-$i"; ?>">
                  
                        <td><?php echo $form->textField($model,"[$i]SHORT_NAME",array("class"=>"","id"=>"SHORTNAME-$i",'value'=>$shortname[$i],'maxlength' => 50)); ?></td>
                        <td><?php echo $form->textField($model,"[$i]DESCRIPTION",array("class"=>"input_description","id"=>"DESCRIPTION-$i",'value'=>$description[$i],'maxlength' => 2058)); ?></td>
                        <td>
                            <?php              
                            $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model,"attribute"=>"[$i]WEF",
                                        'options' => array('dateFormat'=>'dd/mm/yy','minDate'=>'0','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                        'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"WEF-$i",'value'=>$wef[$i],'class'=>'datecolumn')));?>                    
                        </td>  
                        <td>
                            <?php              
                            $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model,"attribute"=>"[$i]WET",
                                        'options' => array('dateFormat'=>'dd/mm/yy','minDate'=>'0','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                        'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"WET-$i",'value'=>$wet[$i],'class'=>'datecolumn')));?>  
                        </td> 
                        <td>
                             
                            
                         <?php 
                                $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                                     'model'=>$model,
                                     'name'=>"Policy[$i][POLICY_FUNCTION]",
                                     'id'=>"POLICY_FUNCTION-$i",
                                     'value'=> $policyfunction[$i],
                                     'source'=>$this->createUrl('Policy/ComboPolicyFunction'),                                   
                                     'options'=>array(
                                               'minLength'=>'0',                                               
                                               'change'=>'js:function( event, ui ) {                                           
                                                           if (!ui.item) {
                                                                $(this).val("");                                                                       
                                                            }
                                                }', 
                                               ),
                                              'htmlOptions'=>array(
                                              'class'=>'drpdown',                                                  
                                            ),
                                        ));
                                    ?>   
                        </td>  
                        
                        <td style="width:40px"> 
                            <input id="<?php echo "policyid".$i;?>" type="hidden" name="<?php echo "policyid".$i;?>" value="<?php echo $policyid[$i];?>">                            
                            <img title="Policy Value" src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/edit.png" class="editbtn" onClick="showdetails(this.id)" id="<?php echo "editbtn-".$i;?>">   
                            <span title="Delete" class="icon-remove" style="<?php echo $deletestyle; ?>" id="<?php echo "btn_DeletePolicy-".$i;?>" onclick="DeletePolicy(this.id)"></span>
                          
                        </td> 
                </tr>
        
                <tr style="display:none" id="<?php echo "div_edit-".$i;?>" class="<?php echo "tr_Save-$i"; ?>">
                    <td colspan="5" class="details_td">                        
                            <table id="<?php echo "tbl_PolicyDetails-".$i;?>" class="grid_details">
                                <thead>
                                    <tr>
                                        <th class="name"><?php echo $Getlabelname->Get_Labelname_Fnc("129");?><a class="field_level_help" href="#Value"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8" class="helpimage"></a></th>
                                        <th class="description"><?php echo $Getlabelname->Get_Labelname_Fnc("116");?><a class="field_level_help" href="#ValueDescription"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8" class="helpimage"></a></th>
                                        <th class="default"><?php echo $Getlabelname->Get_Labelname_Fnc("130");?><a class="field_level_help" href="#Default"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8" class="helpimage"></a>
                                        
                                         <img title="Close" src="<?php echo Yii::app()->request->baseUrl; ?>/images/cross.png" class="detailseditbtn" onClick="showdetails(this.id)" id="<?php echo "detailseditbtn-".$i;?>">
                                        </th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                      <?php  
                                      
                                      if($policyid[$i]!='')
                                      {
                                        $getPolicyDetails=Policy_Value::model()->findAll(array('condition'=>'POLICY_ID=:id','params'=>array(':id'=>$policyid[$i]),'order'=>'UPPER(POLICY_VALUE) ASC'));
                                        if($defaultDetailsCount<=count($getPolicyDetails))
                                            $detailscount=count($getPolicyDetails);
                                        else
                                             $detailscount=$defaultDetailsCount;
                                      }
                                      else
                                      {
                                          $detailscount=$defaultDetailsCount;
                                      }
                                      if(isset($_POST['hdn_DetailsCount-'.$i])<>"")
                                      {
                                           $detailscount=$_POST['hdn_DetailsCount-'.$i];
                                      }
                                      for($j=1;$j<=$detailscount; $j++){
                                          
                                          $policydetailsid=array(); 
                                          $detailsdeletestyle="display:none";
                                          if(isset($_POST['policydetailsid-'.$j.':'.$i])<>"")
                                          {
                                              $policydetailsid[$j]=$_POST['policydetailsid-'.$j.':'.$i]; 
                                              if($policydetailsid[$j]=="")
                                                  $detailsdeletestyle="display:none";
                                              else
                                                  $detailsdeletestyle="display:block;float:right;margin: 3px 5px 0px 0px;cursor:pointer";
                                          }
                                          else if($policyid[$i]!='' && count($getPolicyDetails)>0 && isset($getPolicyDetails[$j-1]['ID'])!='')
                                          {
                                              $policydetailsid[$j]=$getPolicyDetails[$j-1]['ID'];
                                              $detailsdeletestyle="display:block;float:right;margin: 3px 5px 0px 0px;cursor:pointer";
                                          }
                                          else
                                          {
                                              $policydetailsid[$j]='';
                                              $detailsdeletestyle="display:none";
                                          }
                                          
                                          $policyvaluename=array();
                                          if(isset($_POST['Policy_Value'][$j.":".$i]["POLICY_VALUE"])<>"")
                                          {
                                              $policyvaluename[$j]=$_POST['Policy_Value'][$j.":".$i]["POLICY_VALUE"]; 
                                          }
                                          else if($policyid[$i]!='' && count($getPolicyDetails)>0 && isset($getPolicyDetails[$j-1]['ID'])!='')
                                          {
                                              $policyvaluename[$j]=$getPolicyDetails[$j-1]['POLICY_VALUE'];   
                                          }
                                          else
                                          {
                                              $policyvaluename[$j]='';
                                          }
                                          
                                          $policyvaluedescription=array();
                                          if(isset($_POST['Policy_Value'][$j.":".$i]["DESCRIPTION"])<>"")
                                          {
                                              $policyvaluedescription[$j]=$_POST['Policy_Value'][$j.":".$i]["DESCRIPTION"]; 
                                          }
                                          else if($policyid[$i]!='' && count($getPolicyDetails)>0 && isset($getPolicyDetails[$j-1]['ID'])!='')
                                          {
                                              $policyvaluedescription[$j]=$getPolicyDetails[$j-1]['DESCRIPTION'];   
                                          }
                                          else
                                          {
                                              $policyvaluedescription[$j]='';
                                          }
                                          
                                          $policyvaluedefault=array();
                                          if(isset($_POST['Policy_Value'][$j.":".$i]["IS_DEFAULT"])<>"")
                                          {
                                              $policyvaluedefault[$j]=$_POST['Policy_Value'][$j.":".$i]["IS_DEFAULT"]; 
                                          }
                                          else if($policyid[$i]!='' && count($getPolicyDetails)>0 && isset($getPolicyDetails[$j-1]['IS_DEFAULT'])!='')
                                          {
                                              $policyvaluedefault[$j]=$getPolicyDetails[$j-1]['IS_DEFAULT'];   
                                          }
                                          else
                                          {
                                              $policyvaluedefault[$j]='';
                                          }
                                          if($policyvaluedefault[$j]=='Y')
                                              $policyvaluedefault[$j]=true;
                                          else
                                              $policyvaluedefault[$j]=false;
                                          if(isset($_POST['Policy_Value'][$i]['IS_DEFAULT']))
                                          {
                                              if(($j.":".$i)==$_POST['Policy_Value'][$i]['IS_DEFAULT'])
                                                 $policyvaluedefault[$j]=true;
                                          }
                                      ?>
                                    <tr>
                                        <td class="name">
                                            <?php echo $form->textField($model_Details,"[".$j.":".$i."]POLICY_VALUE",array("class"=>"","id"=>"POLICY_VALUE-[".$j.":".$i."]",'value'=>$policyvaluename[$j],'maxlength' => 524)); ?>                             
                                         </td>
                                        <td class="description">                                            
                                            <?php echo $form->textField($model_Details,"[".$j.":".$i."]DESCRIPTION",array("class"=>"","id"=>"DESCRIPTION-[".$j.":".$i."]",'value'=>$policyvaluedescription[$j],'maxlength' => 2058)); ?>
                                        </td>
                                        <td class="defaultbtn">                                            
                                            <?php 
                                            echo $form->radioButton($model_Details,"[$i]IS_DEFAULT",array('value'=>"$j:$i",'checked'=>$policyvaluedefault[$j],'uncheckValue'=>null,"id"=>"IS_DEFAULT-[".$j.":".$i."]"),array("class"=>'center')); ?>
                                            <span title="Delete" class="icon-remove" style="<?php echo $detailsdeletestyle; ?>" id="<?php echo "btn_DeletePolicyDetails-".$j.":".$i;?>" onclick="DeletePolicyDetails(this.id)"></span>                          
                                        </td>
                                        <input id="<?php echo "policydetailsid-".$j.":".$i;?>" type="hidden" name="<?php echo "policydetailsid-".$j.":".$i;?>" value="<?php echo $policydetailsid[$j]?>">
                                   </tr>                           
                                    
                               <?php } ?>
                                    
                               <tr>
                                  <td colspan="3" class="editbtn_save">
                                      <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"button",'size'=>'small', 'label'=>$model->isNewRecord ? $Getlabelname->Get_Labelname_Fnc("103") : $Getlabelname->Get_Labelname_Fnc("2021"),'id'=>"btn_EditPolicy-$i",'icon'=>'icon-thumbs-up','htmlOptions'=>array('onclick'=>'js:SavePolicy(this.id);'))); ?>
                                       <img title="Add" src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/icon_plus.png" class="detailclonerow" id="<?php echo "btn_AddDetails-".$i?>">                               
                                       <input id="<?php echo "hdn_DetailsCount-".$i;?>" type="hidden" name="<?php echo "hdn_DetailsCount-".$i;?>" value="<?php echo $detailscount;?>">                                       
                                  </td>
                               </tr>
                            </tbody>
                        </table>                        
                    </td>
                </tr>
           <?php } ?>
                <tr style="display:none">
                    
                </tr>           
        </tbody>        
    </table>
    <table class="tbl_btn" id="table_bottom_bg">
        <tbody>
                <tr>
                    <td class="btn_save">
                       
                         <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"reset",'size'=>'small','icon'=>'icon-refresh', 'label'=>$Getlabelname->Get_Labelname_Fnc("104"))); ?>
                          <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"submit",'size'=>'small', 'label'=>$model->isNewRecord ? $Getlabelname->Get_Labelname_Fnc("103") : $Getlabelname->Get_Labelname_Fnc("2021"),'id'=>"btn_Save",'icon'=>'icon-thumbs-up','htmlOptions'=>array('onclick'=>'js:return SaveAllPolicy();'))); ?>            
                         <img title="Add" src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/icon_plus.png" class="clonerow" id="<?php echo "btn_AddMaster" ;?>">                               
                         <input id="TotRowCount" type="hidden" name="TotRowCount" value="<?php echo $mastercount;?>">                                    
                         <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/ajax-loader_1.gif" id="policy-loading-indicator" class="loading-indicator-submit" style="display:none" />
       
                    </td>
                </tr>
        </tbody>        
    </table>
    <?php 

    if($this->display!="0")
    {
       $showtable="editbtn-".$this->display;         
       echo '<script type="text/javascript">showdetails( "'.$showtable.'");</script>';
    }
    if(isset($_GET['manage'])==1)
    {
           echo '<script type="text/javascript">document.getElementById("SHORTNAME-1").focus();</script>';
    }
    else 
    {
       $count=count($getPolicyMaster);
       if($count>0)
            echo '<script type="text/javascript">document.getElementById("SHORTNAME-'.($count+1).'").focus();</script>';
    }
   
    $this->endWidget(); 
    ?>

</div>