<?php
/* @var $this Dheeraj
/* @var $form CActiveForm */
 //   Created on : March , 2014
//    Author     : Dheeraj Silish
?>
<?php $Getlabelname=new Get_Labelname_Cls();
require_once("popupdialog.php");
?>
<style>
        
        .selection {
          height: 25px !important;
          padding: 1px 6px !important;
          width : 115px;
        }
        .tbl_btn {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: -moz-use-text-color #D3D0D0 #D3D0D0;
    border-image: none;
    border-radius: 0 0 10px 10px;
    border-right: 1px solid #D3D0D0;
    border-style: none solid solid;
    border-width: medium 1px 1px;
    box-shadow: 0 6px 15px 0 #C4C4C4;
    width: 844px !important;
}
.detailseditbtn {
    border: medium none !important;
    border-radius: 0 !important;
    cursor: pointer;
    float: right;
    height: 15px;
/*    margin: -3px !important;*/
    position: relative;
    padding: 24px 6px 0 400px !important;
    width: 15px;
}

.grid_details {
width: auto;
border: 1px solid #9C9A9A;
border-radius: 0px !important;
padding: 0px !important;
margin: 0px auto !important;
background-color: white;
box-shadow: 0px 0px 22px 3px #c4c4c4;
}

.tbl_btn1 { width: 787px !important;
            margin-left:  2px;}


.item_size{
    height: 20px;
    width: 200px;
}
.item_factor{
    height: 20px;
    width: 220px;
    
}
form { margin-bottom: 0px;}

.grid_insert_table
{
    padding: 6px 3px 16px !important;
}
.sorting_link { text-decoration: none !important; color: black; }
.sorting_link : hover { color: white !important }
    </style>
<!---- Code for Flash Messages---->
<script>
    setTimeout(function() {
        $('.error_red').fadeOut('slow');
    }, 5000); 

    setTimeout(function() {
        $('.success_blue').fadeOut('slow');
    }, 5000); 
</script>

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
    
    <?php 
      
        if(isset($_POST['TotRowCount'])<>'')
        {
            $mastercount=$_POST['TotRowCount'];
        }
        else
        {     
            $mastercount=16;                      
        }        
        
//        $defaultDetailsCount=5;


        //Sort Management 
        if(isset($_GET['sort'])) {  

          switch ($_GET["sort"]) {
            case 'status':
              $Timemngt_sort =   "UPPER(ACTIVE) DESC";
              break;
            
            default:
             $Timemngt_sort =   'UPPER(DESCRIPTION) ASC';
              break;
          }
        }
        else {
          $Timemngt_sort =   'UPPER(DESCRIPTION) ASC';
        }
          

        //End Sortmanagenent


        $criteria = new CDbCriteria;
        $criteria->condition = 'TMA_ID IS NULL ';
        $criteria->order = $Timemngt_sort;
         // fatching data from  database to form 
        $getTimeMNGTVal=TIMEMANAGEMENTACTIVITY::model()->findAll($criteria);  

       if($mastercount<=count($getTimeMNGTVal))
            $mastercount=count($getTimeMNGTVal);
    
    ?>
  
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom_styles/custom_style_policy.css"  /> </link>         
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/custom_jquery/validation_v1.js" type="text/javascript"></script>
<script type='text/javascript'>
$(function(){
   // alert($("#TIMEMANAGEMENTACTIVITY_1\\:1_DESCRIPTION").val());

            $('#btn_Save').click(function(){
           
           var row_count=$("#TotRowCount").val(); 
           
           for(var i=1; i<row_count;i++)
           
           { //Null Checking in main canvas started 
               var main_description=$("#TIMEMANAGEMENTACTIVITY_"+i+"_DESCRIPTION").val();
               var main_analysis_factor=$("#TIMEMANAGEMENTACTIVITY_"+i+"_ANALYSIS_FACTOR1").val();
               var main_active=$("#TIMEMANAGEMENTACTIVITY_"+i+"_ACTIVE").val();
               if(!((main_description==="")&&(main_analysis_factor==="")&&(main_active==="")))
                   {
                       msgparam = i+alertformat;
                   //   alert(alertformat); 
                       if(main_description==="")
                           {
                               
                          // GetStaticAlert("Activity is blank on line ----"+i);
                           GetDynamicAlert('20560',msgparam);
                           return false;
                           }
                           else
                               {
                                   if(main_analysis_factor==="")
                                       {
                                        // GetStaticAlert("Primary Factor is blank on line ----"+i);
                                         GetDynamicAlert('20561',msgparam);
                                        return false;  
                                       }
                                       else
                                           {
                                               if(main_active==="")
                                                   {
                                                       
                                                    //  GetStaticAlert("Status not selected for line ----"+i);
                                                      GetDynamicAlert('20562',msgparam);
                                                    return false; 
                                                   }
                                           }
                               }
                   }
                var detail_count=$("#hdn_DetailsCount-"+i).val();
               // alert(detail_count);
//      

   for(var j=1; j<detail_count;j++)
           
           { 
//              //Null Checking sub canvas started 
               var sub_description=$("#TIMEMANAGEMENTACTIVITY_"+j+"\\:"+i+"_DESCRIPTION").val();
               var sub_analysis_factor=$("#TIMEMANAGEMENTACTIVITY_"+j+"\\:"+i+"_ANALYSIS_FACTOR1").val();
               var sub_active=$("#TIMEMANAGEMENTACTIVITY_"+j+"\\:"+i+"_ACTIVE").val();
               //alert($("#TIMEMANAGEMENTACTIVITY_1:1_DESCRIPTION").val());
               
               
               if(!((sub_description==="")&&(sub_analysis_factor==="")&&(sub_active==="")))
                   {
                       msgparam = i+alertformat;
                       msgparam1 = j+alertformat;
                       if(sub_description==="")
                           {
                           GetDynamicAlert('20563',msgparam1,msgparam);    
                           //GetStaticAlert("Description is blank on line ----"+j+"of"+i+"th main row");
                           return false;
                           }
                           else
                               {
                                   if(sub_analysis_factor==="")
                                       {
                                         GetDynamicAlert('20564',msgparam1,msgparam);  
                                       //  GetStaticAlert("Primary Analysis Factor is blank on line ----"+j+"of"+i+"th main row");
                                        return false;  
                                       }
                                       else
                                           {
                                               if(sub_active==="")
                                                   {
                                                   // alert("sdsds");   //Dheeraj
                                                       
                                                    GetDynamicAlert('20565',msgparam1,msgparam);   
                                                    //  GetStaticAlert("Status not selected for line ----"+j+"of"+i+"th main row");
                                                    return false; 
                                                   }
                                           }
                               }
                   }
              
//      
           }

           } //Null Checking main canvas and sub canvas Ended.. 
           
            });
        
        });

function showdetails(id)
    {   
      //  alert(id);
    
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
</script>
<script>
    $(document).ready(function(){
        
    var count=$("#TotRowCount").val();   
        for(var i=1;i<=count;i++)
        {   

            $("#btn_AddDetails-"+i).click(function() {   
              //  alert("dfdf");
                 var ids=(this.id).split("-");                  
                 id=ids[1];
                AddSubRow(id);                 
                 
            });   
        } 
        
         //******Adding new rows in parent timemngt form section******//
        $("#btn_AddMaster").click(function() {        
               
         
           var newIDSuffix = ":"; 
           var prevId=$("#TotRowCount").val(); 
           var newindex=parseInt($("#TotRowCount").val())+1; 
           $("#TotRowCount").val(newindex);
          //console.log(newindex);
           //******Clone the last row of edit(Policy Value) section******//
           var clonedheader =$("#Tbl_Time_Mngt_Act tbody .tr_Save"+prevId).clone().attr('class',"tr_Save"+newindex);
           //console.log(clonedheader);
            //******Replacing the attributes(id,name) of the cloned row elements with new ******//
                      
            clonedheader.find('input, select,img').each(function() {
                //Creating new Id for header row
                var idheader = $(this).attr('id');
                

                idheader = idheader.replace(newindex-1, newindex); 
                  $(this).attr('id', idheader);
                  
                  
                  var nameheader = "";
                          if(($(this).attr('name'))!=undefined)
                              {
                                nameheader=$(this).attr('name');
                                nameheader = nameheader.replace(newindex-1, newindex);

                                $(this).attr('name', nameheader);
                                 
                              }

                
                 if (idheader.match("timemngtid")) { 
                
                $(this).attr('value','');
                 }
             
                clonedheader.find('span').each(function() {                
                 var spanid=$(this).closest('span').attr('id');                   
                 if (spanid!=null && spanid.match("btn_DeleteTimeMNGT")) 
                 { 
                    $(this).remove();
                 }
    
    });   
    });

    //******Adding the cloned row after the last row in the main(TimeMNGT) section ******//
            clonedheader.insertAfter($("#Tbl_Time_Mngt_Act tbody #div_edit-"+prevId)).find( 'input:text' ).attr('value','');
              

    //******Cloning the edit(Time mngt) section******//Tbl_Time_Mngt_Act_Dtl-16
            var cloneddetails =$("#Tbl_Time_Mngt_Act tbody #div_edit-"+prevId).clone(true).attr("id", "div_edit-" + newindex).attr('class',"tr_Save-"+newindex);     
            cloneddetails.find('.grid_details').each(function() { 
                 
            
                $(this).attr('id', "Tbl_Time_Mngt_Act_Dtl-"+newindex);  
            });           
            
    //******Adding the cloned row after the last row in the main(TimeMNGT) section ******//
            
    
            cloneddetails.insertAfter($("#Tbl_Time_Mngt_Act tbody .tr_Save"+newindex)).find( 'input:text' ).attr('value','');
            var rows = $("#Tbl_Time_Mngt_Act_Dtl-"+newindex+" tr:gt(0)"); // skip the header row

    
            var childrow="";
            
            
    //******Replacing the attributes(id,name) of the cloned row elements with new ******//
            rows.each(function(index) {
               if( $(this).closest('tr').next().length ) {
                   //alert(index);
                                  
                   if(index<="5")
                    {
                        var newRows = $(this).closest('tr');
                         var mainrow="",newIDSuffix=":";
                             newRows.find('input, select,img').each(function() {
                               var id = $(this).attr('id'); 
                               
                               
                               mainrow=id.substring(id.lastIndexOf(":")+1,id.lastIndexOf("]"));
                               childrow=id.substring(id.lastIndexOf("[")+1,id.lastIndexOf(":"));
                               var myString_get_subrowid = childrow.substr(childrow.indexOf("_") + 1);
                               
                               
                               
                               var name = $(this).attr('name');
                               if (id.match("TIMEMANAGEMENTACTIVITY")) { 
                                   
                                    var myString = id.substr(id.indexOf("_") + 1);
                                    
                                    var myString = myString.substr(myString.indexOf("_") + 1);
                                    id=mainrow+newindex+"_"+myString;


                                    name="TIMEMANAGEMENTACTIVITY["+myString_get_subrowid+":"+newindex+"]["+myString+"]";
                                   
                               }
                               else
                               {  
                                   if (id.match("timemngt_subid")) { 
                                       
                                       id="timemngt_"+myString_get_subrowid+":"+newindex;
                                       name="timemngt_"+myString_get_subrowid+":"+newindex;
                                        //$(this).attr('name', name);
            
                                    }

                               }
                               $(this).attr('id', id);
                               $(this).attr('name', name); 
                               //$("#hdn_DetailsCount-"+newindex).attr('value','6');
                            }); 
                            
                            
                            $("#div_edit-"+newindex+" td #table_bottom_bg tbody tr td").find('input,button, select,img').each(function() {
                                    
                                    var id = $(this).attr('id');
                                        
                                    if (id.match("hdn_DetailsCount")) { 
                                       
                                       
                                       $(this).attr('id', 'hdn_DetailsCount-'+newindex);
                                       $(this).attr('name', 'hdn_DetailsCount-'+newindex);
                                       $(this).attr('value','6'); 
                                   }
                                   
                                   
                                   if (id.match("btn_AddDetails")) { 
                                       
                                       
                                       $(this).attr('id', 'btn_AddDetails-'+newindex);

                                   }
                                   
                                   
                                    if (id.match("btn_EditPolicy")) { 
                                       
                                       
                                       $(this).attr('id', 'btn_EditPolicy-'+newindex);
                                      
                                       $(this).attr("onclick","js:NullCheck("+newindex+");");

                                   }
                                   
                                   });
                            
        //******Removing delete button for the cloned row ******//   
                            newRows.find('span').each(function() {                
                                 var spanid=$(this).closest('span').attr('id');                   
                                 if (spanid!=null && spanid.match("DeleteTimeMNGTDetails")) 
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
            
            
             var thRow = $("#div_edit-"+newindex); 
                 thRow.find('img').each(function() {
                 var id = $(this).attr('id'); 
                 
                 if(id!=null && id.match("detailseditbtn"))
                     {
                         id = id.replace(prevId, newindex);
                         $(this).attr('id', id); 
                     }
                 });        
                 
                 var thRow = $("#Tbl_Time_Mngt_Act_Dtl-"+newindex+" thead"); 
                 thRow.find('img').each(function() {
                 var id = $(this).attr('id'); 
              
                 if(id!=null && id.match("detailseditbtn"))
                     {
                         id = id.replace(prevId, newindex);
                         $(this).attr('id', id); 
                     }
                 });
            
             var newRow = $("#Tbl_Time_Mngt_Act_Dtl-"+newindex+"  tbody>tr:last");
                       newRow.find('input,img,button').each(function() {
                           var id = $(this).attr('id'); 
                           var name = $(this).attr('name');
                           id = id.replace(prevId, newindex);
                           name = name.replace(prevId, newindex);
                           $(this).attr('id', id); 
                           $(this).attr('name', name);
                       });      
            
            
            return false;

         
         })
    });  
    

function NullCheck(row)
{
    var main_count=$("#timemngtid"+row).val();
    var detail_count=$("#hdn_DetailsCount-"+row).val();

    for(var j=1; j<detail_count;j++) 
    
 {
     var Sub_Description=$("#TIMEMANAGEMENTACTIVITY_"+j+"\\:"+row+"_DESCRIPTION").val();
     var Sub_Factor1=$("#TIMEMANAGEMENTACTIVITY_"+j+"\\:"+row+"_ANALYSIS_FACTOR1").val();
     var Sub_Active=$("#TIMEMANAGEMENTACTIVITY_"+j+"\\:"+row+"_ACTIVE").val();
     

   if(!((Sub_Description==="")&&(Sub_Factor1==="")&&(Sub_Active==="")))
   {   
    msgparam1 = j+alertformat; 
         
     if(Sub_Description==="")
        {
        GetDynamicAlert('20566',msgparam1);
         $('#DESCRIPTION-').focus();
         return false;
        }
     if(Sub_Factor1=="")
         {
          GetDynamicAlert('20564',msgparam1);
          $('#ANALYSIS_FACTOR1-').focus();
          return false;
         }
     if(Sub_Active=="")
         {
          GetDynamicAlert('20565',msgparam1);
          $('#Active-').focus();
          return false;
         }
    }
  }
  
  var values = $('#div_edit-'+ row +' :input').serialize();
     
       var url="<?php echo $this->createUrl('TIMEMNGT/SubSave') ?>";
       url=url+"?checkvalue="+row+"&mainid="+main_count+"&detail_count="+detail_count;
      
       $.ajax({  
                 type: "POST",
                 url: url,
                 data:values,
                 dataType: 'json',
                
                 success: function(data)
                 {
                 // alert(data);
                 location.reload();
                 }
            });
}
  
  function AddSubRow(id)
  {
        
  //******Cloning last row of TimeMNGT section******//     
        var $lastRow = $("#Tbl_Time_Mngt_Act_Dtl-"+id+" tbody>tr:last");
        var cloned = $("#Tbl_Time_Mngt_Act_Dtl-"+id+" tbody>tr:last").clone();
        var rowIndex = $lastRow.index()+1;
        var prevIndex=$lastRow.index(); 
        prevIndex = parseInt(prevIndex)+2;
        var mainrow="",previd="";
        
  //******Replacing the attributes(id,name) of the cloned row elements with new ******// dheeraj
        cloned.find('input, select').each(function() {
               var get_id = $(this).attr('id');
               //previd=$(this).attr('id');
               var name = $(this).attr('name');
               if (get_id.match("DESCRIPTION")) { 
                   get_id="TIMEMANAGEMENTACTIVITY_"+prevIndex+":"+id+"_DESCRIPTION";
                   name="TIMEMANAGEMENTACTIVITY["+prevIndex+":"+id+"][DESCRIPTION]";
               }
               if (get_id.match("ANALYSIS_FACTOR1")) { 
                   get_id="TIMEMANAGEMENTACTIVITY_"+prevIndex+":"+id+"_ANALYSIS_FACTOR1";
                   name="TIMEMANAGEMENTACTIVITY["+prevIndex+":"+id+"][ANALYSIS_FACTOR1]";
               }
               if (get_id.match("ANALYSIS_FACTOR2")) { 
                   get_id="TIMEMANAGEMENTACTIVITY_"+prevIndex+":"+id+"_ANALYSIS_FACTOR2";
                   name="TIMEMANAGEMENTACTIVITY["+prevIndex+":"+id+"][ANALYSIS_FACTOR2]";
               }
               if (get_id.match("ACTIVE")) { 
                   get_id="TIMEMANAGEMENTACTIVITY_"+prevIndex+":"+id+"_ACTIVE";
                   name="TIMEMANAGEMENTACTIVITY["+prevIndex+":"+id+"][ACTIVE]";
               }
               
               if (get_id.match("timemngt_subid")) { 
                   get_id="timemngt_subid"+prevIndex+":"+id;
                   name="timemngt_subid"+prevIndex+":"+id;
                   $(this).attr('value','');
               }
               
            
               $(this).attr('id', get_id);
               $(this).attr('name', name);   
              
               if (get_id.match("IS_DEFAULT")) {
                   $(this).attr('value', rowIndex+":"+mainrow);   
                    if(document.getElementById(previd).checked)
                    {
                         this.checked=false
                    }
               }         

        });
      var new_dtls_count   = $('#hdn_DetailsCount-'+id).val();
      var snew_dtls_count  = parseInt(new_dtls_count)+1;
        $('#hdn_DetailsCount-'+id).val(snew_dtls_count);
        //******Adding the cloned row after the last row in the edit(TimeMNGT) section ******//           
        cloned.insertAfter($("#Tbl_Time_Mngt_Act_Dtl-"+id+" tr:last")).find( 'input:text' ).attr('value','');           
        return false;
    }
    
function DeleteTimeMNGTDetail(id)
{
 var url="<?php echo $this->createUrl('TIMEMNGT/SubDelete') ?>";
       
       $.ajax({  
               type: "POST",
               url: url,
               data:{id:id},
                success: function(data){ 
                location.reload();
                }  
              });
     
}
   
   
function  DeleteTimeMNGT(id)  
{
 var url="<?php echo $this->createUrl('TIMEMNGT/MainDelete') ?>";
      
       $.ajax({  
               type: "POST",
               url: url,
               data:{id:id},
              success: function(data)
              { 
              
                if(data===""){
                 GetStaticAlert('20569');
                }
                else {
                    GetStaticAlert('20570');
                    location.reload();
                }
            
              }  
            });
}
       
</script>
<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'timemanagementactivity-form',
	'enableAjaxValidation'=>false,
)); ?>
   
<table id="Tbl_Time_Mngt_Act" class="grid_insert_table">
    <thead style="display:block;width:840px;">
    <tr>  
<!--        column  label  taking from table   -->
        <th width="200"><?php echo $Getlabelname->Get_Labelname_Fnc("201");?><a class="field_level_help" href="#Activity"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8" class="helpimage"></a></th>
        <th width="242"><?php echo $Getlabelname->Get_Labelname_Fnc("202");?><a class="field_level_help" href="#PrimaryAnalysisFactor"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8" class="helpimage"></a></th>
        <th width="245"><?php echo $Getlabelname->Get_Labelname_Fnc("203");?><a class="field_level_help" href="#SecondaryAnalysisFactor"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8" class="helpimage"></a></th>
        <th width="165">
          <a class="sorting_link" title="click here for sorting" href="<?php Yii::app()->baseUrl ?>/HR5_DEV_APP/index.php/timemngt/create?sort=status" onclick="return confirm('Data which is not saved will be removed, Do you want to continue?')">
          <?php echo $Getlabelname->Get_Labelname_Fnc("204");?>
          </a>
          <a class="field_level_help" href="#Status"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8" class="helpimage"></a></th><th>
            
        </th>
    </tr>
    </thead> 
    <tbody style ="width:841px;height:400px;float:left;overflow-y:auto">
            <?php for($i=1;$i<=$mastercount;$i++)
                {
                
               // fetching data from  database to form 
                
              $timemngtid=array();                         
            if(isset($_POST['TIMEMANAGEMENTACTIVITY'][$i]['ID'])<>"")
            {              
               $timemngtid[$i] =$_POST['TIMEMANAGEMENTACTIVITY'][$i]['ID'];               
            }
            else if(count($getTimeMNGTVal)>0 && isset($getTimeMNGTVal[$i-1]['ID'])!='')
            {                             
                 $timemngtid[$i]=$getTimeMNGTVal[$i-1]['ID'];
            }
            else
            {
               $timemngtid[$i]=$model->ID;
            }    
              
                $desc=array();                         
            if(isset($_POST['TIMEMANAGEMENTACTIVITY'][$i]['DESCRIPTION'])<>"")
            {              
               $desc[$i] =$_POST['TIMEMANAGEMENTACTIVITY'][$i]['DESCRIPTION'];               
            }
            else if(count($getTimeMNGTVal)>0 && isset($getTimeMNGTVal[$i-1]['DESCRIPTION'])!='')
            {                             
                 $desc[$i]=$getTimeMNGTVal[$i-1]['DESCRIPTION'];
            }
            else
            {
               $desc[$i]=$model->DESCRIPTION;
            }
            
               $fact1=array();                         
            if(isset($_POST['TIMEMANAGEMENTACTIVITY'][$i]['ANALYSIS_FACTOR1'])<>"")
            {              
               $fact1[$i] =$_POST['TIMEMANAGEMENTACTIVITY'][$i]['ANALYSIS_FACTOR1'];               
            }
            else if(count($getTimeMNGTVal)>0 && isset($getTimeMNGTVal[$i-1]['ANALYSIS_FACTOR1'])!='')
            {                             
                 $fact1[$i]=$getTimeMNGTVal[$i-1]['ANALYSIS_FACTOR1'];
            }
            else
            {
               $fact1[$i]=$model->ANALYSIS_FACTOR1;
            }
            
                $fact2=array();                         
            if(isset($_POST['TIMEMANAGEMENTACTIVITY'][$i]['ANALYSIS_FACTOR2'])<>"")
            {              
               $fact2[$i] =$_POST['TIMEMANAGEMENTACTIVITY'][$i]['ANALYSIS_FACTOR2'];               
            }
            else if(count($getTimeMNGTVal)>0 && isset($getTimeMNGTVal[$i-1]['ANALYSIS_FACTOR2'])!='')
            {                             
                 $fact2[$i]=$getTimeMNGTVal[$i-1]['ANALYSIS_FACTOR2'];
            }
            else
            {
               $fact2[$i]=$model->ANALYSIS_FACTOR2;
            }
            
            
               $activ=array();                         
            if(isset($_POST['TIMEMANAGEMENTACTIVITY'][$i]['ACTIVE'])<>"")
            {              
               $activ[$i] =$_POST['TIMEMANAGEMENTACTIVITY'][$i]['ACTIVE'];               
            }
            else if(count($getTimeMNGTVal)>0 && isset($getTimeMNGTVal[$i-1]['ACTIVE'])!='')
            {                             
                 $activ[$i]=$getTimeMNGTVal[$i-1]['ACTIVE'];
            }
            else
            {
               $activ[$i]=$model->ACTIVE;
            }
          
                // faching data from  database to form 
              
                ?> 
        
  <tr class="tr_Save<?php echo $i;?>">   <!--field name-->
      <td><?php echo $form->textField($model,"[$i]DESCRIPTION",array('class'=>"item_size",'size'=>60,'maxlength'=>1024,'value'=>$desc[$i])); ?>  </td>
      <td> <?php echo $form->textField($model,"[$i]ANALYSIS_FACTOR1",array('size'=>50,'maxlength'=>50,'value'=>$fact1[$i])); ?></td>
      <td><?php echo $form->textField($model,"[$i]ANALYSIS_FACTOR2",array('size'=>50,'maxlength'=>50,'value'=>$fact2[$i])); ?> </td>
      <td> <?php echo $form->dropDownList($model,"[$i]ACTIVE",array('Y'=>'Active','N'=>'Suspended'), array('empty'=>'Select Any','class'=>'selection','options' => array($activ[$i]=>array('selected'=>'selected')))); ?></td>

    <td style="width:40px"> 
        <input id="<?php echo "timemngtid".$i;?>" type="hidden" name="<?php echo "timemngtid".$i;?>" value="<?php echo $timemngtid[$i];?>">                            
        <img title="Sub Activity" src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/edit.png" class="editbtn" onClick="showdetails(this.id)" id="<?php echo "editbtn-".$i;?>">   
        <span style="<?php if($i>count($getTimeMNGTVal)){?>display:none<?php } ?>"title="Delete" class="icon-remove" style="<?php //echo $deletestyle; ?>" id="<?php echo "btn_DeleteTimeMNGT-".$i;?>" onclick="DeleteTimeMNGT(<?php echo $timemngtid[$i];?>)"></span>
    </td> 
  </tr>
 
  <tr style="display:none" id="div_edit-<?php echo $i;?>">
    <td colspan="4">
  <table id="<?php echo "Tbl_Time_Mngt_Act_Dtl-".$i;?>" class="grid_details">
    <thead>
      <tr>

        <th width="180"><?php echo $Getlabelname->Get_Labelname_Fnc("205");?><a class="field_level_help" href="#Value"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8" class="helpimage"></a></th>
        <th><?php echo $Getlabelname->Get_Labelname_Fnc("202");?><a class="field_level_help" href="#Value"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8" class="helpimage"></a></th>
        <th><?php echo $Getlabelname->Get_Labelname_Fnc("203");?><a class="field_level_help" href="#Value"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8" class="helpimage"></a></th>
        <th width="10"><?php echo $Getlabelname->Get_Labelname_Fnc("204");?><a class="field_level_help" href="#Value"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8" class="helpimage"></a></th><th></th>
      </tr>
    </thead>
    <tbody>
    <?php 
    $detailcount=6;
        $gettimemngtDetails="";
        if($timemngtid[$i]<>"") 
        {
            $criteria = new CDbCriteria;
            $criteria->condition = 'TMA_ID ='.$timemngtid[$i];
            $criteria->order = 'UPPER(DESCRIPTION) ASC';

            $gettimemngtDetails=TIMEMANAGEMENTACTIVITY::model()->findAll($criteria);        

           if($detailcount<=count($gettimemngtDetails))
              $detailcount=count($gettimemngtDetails);

       }
       else
           $detailcount=6;
        
        $t=1;
     
        for($j=1;$j<=$detailcount;$j++)
          {
                    $subdesc=array();
                        if(isset($_POST['TIMEMANAGEMENTACTIVITY'][$j.":".$i]["DESCRIPTION"])<>"")
                        {
                            $subdesc[$j]=$_POST['TIMEMANAGEMENTACTIVITY'][$j.":".$i]["DESCRIPTION"]; 
                        }
                        else if($timemngtid[$i]!='' && count($gettimemngtDetails)>0 && isset($gettimemngtDetails[$j-1]['ID'])!='')
                        {
                            $subdesc[$j]=$gettimemngtDetails[$j-1]['DESCRIPTION'];   
                        }
                        else
                        {
                            $subdesc[$j]='';
                        }
                       
                      $subfact1=array();
                        if(isset($_POST['TIMEMANAGEMENTACTIVITY'][$j.":".$i]["ANALYSIS_FACTOR1"])<>"")
                        {
                            $subfact1[$j]=$_POST['TIMEMANAGEMENTACTIVITY'][$j.":".$i]["ANALYSIS_FACTOR1"]; 
                        }
                        else if($timemngtid[$i]!='' && count($gettimemngtDetails)>0 && isset($gettimemngtDetails[$j-1]['ANALYSIS_FACTOR1'])!='')
                        {
                            $subfact1[$j]=$gettimemngtDetails[$j-1]['ANALYSIS_FACTOR1'];   
                        }
                        else
                        {
                            $subfact1[$j]='';
                        }
                        
                      $subfact2=array();
                        if(isset($_POST['TIMEMANAGEMENTACTIVITY'][$j.":".$i]["ANALYSIS_FACTOR2"])<>"")
                        {
                          $subfact2[$j]=$_POST['TIMEMANAGEMENTACTIVITY'][$j.":".$i]["ANALYSIS_FACTOR2"]; 
                        }
                        else if($timemngtid[$i]!='' && count($gettimemngtDetails)>0 && isset($gettimemngtDetails[$j-1]['ANALYSIS_FACTOR2'])!='')
                        {
                          $subfact2[$j]=$gettimemngtDetails[$j-1]['ANALYSIS_FACTOR2'];   
                        }
                        else
                        {
                          $subfact2[$j]='';
                        }
                        
                      $subactiv=array();                         
                        if(isset($_POST['TIMEMANAGEMENTACTIVITY'][$j.":".$i]["ACTIVE"])<>"")
                        {              
                          $subactiv[$i] =$_POST['TIMEMANAGEMENTACTIVITY'][$j.":".$i]["ACTIVE"];               
                        }
                        else if(count($timemngtid)>0 && isset($gettimemngtDetails[$j-1]['ACTIVE'])!='')
                        {                             
                            $subactiv[$j]=$gettimemngtDetails[$j-1]['ACTIVE'];
                        }
                        else
                        {
                          $subactiv[$j]='';
                          
                        }
                        $timemngt_subid=array();
                        if($timemngtid[$i]!="" && count($gettimemngtDetails)>0 && isset($gettimemngtDetails[$j-1]['ID'])!='')
                        {  
                            //echo "here"; exit;
                            $timemngt_subid[$j]=$gettimemngtDetails[$j-1]['ID'];
                        }
                        else { 
                          $timemngt_subid[$j]='';  
                            
                        }
 
            ?> 
    <tr>
         
      <td>
          <?php echo $form->textField($model,"[".$j.":".$i."]DESCRIPTION",array('class'=>"item_size",'size'=>60,'maxlength'=>1024,'id'=>'TIMEMANAGEMENTACTIVITY_'.$j.':'.$i.'_DESCRIPTION','value'=>$subdesc[$j])); ?>  </td>
          <td> <?php echo $form->textField($model,"[".$j.":".$i."]ANALYSIS_FACTOR1",array('class'=>"item_factor",'size'=>50,'maxlength'=>50,'Value'=>$subfact1[$j])); ?></td>
          <td> <?php echo $form->textField($model,"[".$j.":".$i."]ANALYSIS_FACTOR2",array('class'=>"item_factor",'size'=>50,'maxlength'=>50,'Value'=>$subfact2[$j])); ?> </td>
          <td> <?php echo $form->dropDownList($model,"[".$j.":".$i."]ACTIVE",array('Y'=>'Active','N'=>'Suspended'),array('empty'=>'Select Any','class'=>'selection','options' => array($subactiv[$j]=>array('selected'=>'selected')))); ?>
          <td width ="30" style=" text-align: center" > 
          <span style="<?php if($timemngt_subid[$j]==""){?>display:none<?php } ?>" title="Delete" class="icon-remove"  id="<?php echo "$timemngt_subid[$j]"?>" onclick="DeleteTimeMNGTDetail(this.id)">
          </span>  
          <input id="<?php echo 'timemngt_subid'.$j.':'.$i; ?>" type="hidden" name="<?php echo 'timemngt_subid'.$j.':'.$i; ?>" value="<?php echo $timemngt_subid[$j]; ?>">
      </td> 
    </tr>
     <?php 
     
     $t++;
                } ?>
        <img title="Close" src="<?php echo Yii::app()->request->baseUrl; ?>/images/cross.png" class="detailseditbtn" style="height: 16px !important;width: 26px !important;padding: 0 6px 0 4px !important;margin: 0px -24px 0px 0px !important;" onClick="showdetails(this.id)" id="<?php echo "detailseditbtn-".$i;?>">
    <table class="tbl_btn1" id="table_bottom_bg">   
        <tbody> 
           <tr>
             <td colspan="3" class="editbtn_save" style="padding: 1px 20px 1px 0px !important;
                    text-align: right !important;">

                <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"button",'size'=>'small', 'label'=>$model->isNewRecord ? $Getlabelname->Get_Labelname_Fnc("103") : $Getlabelname->Get_Labelname_Fnc("2021"),'id'=>"btn_EditPolicy-$i",'icon'=>'icon-thumbs-up','htmlOptions'=>array('onclick'=>"js:NullCheck($i);"))); ?>
                 <img title="Add" src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/icon_plus.png" class="detailclonerow" id="<?php echo "btn_AddDetails-".$i;?>">                              
                <input id="<?php echo "hdn_DetailsCount-".$i;?>" type="hidden" name="<?php echo "hdn_DetailsCount-".$i;?>" value="<?php echo $detailcount;?>">                                       
               
            </td>
         </tr>
        </tbody>                                 
       </table>
        </td>
    </tr>  
                                  
      <?php } ?>  
    </tbody>
</table>
            
    <input id="<?php echo "hdn_myCount-";?>" type="hidden" name="<?php echo "hdn_myCount-";?>" value="swsfsd">         
		<?php ///echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
<!--	</div>-->
<table class="tbl_btn" id="table_bottom_bg" style="float:left">
        <tbody>
                <tr>
                    <td class="btn_save">
                       
                         <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"reset",'size'=>'small','icon'=>'icon-refresh', 'label'=>$Getlabelname->Get_Labelname_Fnc("104"))); ?>
                          <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"submit",'size'=>'small', 'label'=>$model->isNewRecord ? $Getlabelname->Get_Labelname_Fnc("103") : $Getlabelname->Get_Labelname_Fnc("2021"),'id'=>"btn_Save",'icon'=>'icon-thumbs-up')); ?>            
                         <img title="Add" src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/icon_plus.png" class="clonerow" id="<?php echo "btn_AddMaster" ;?>">                               
                                                           
                         <img src="<?php// echo Yii::app()->request->baseUrl; ?>/images/ajax-loader_1.gif" id="policy-loading-indicator" class="loading-indicator-submit" style="display:none" />
                         
                         
                         <input id="TotRowCount" type="hidden" name="TotRowCount" value="<?php echo $mastercount;?>">
                         <!--<input type="text" name="something" value="hai">-->
                         
                         
       
                    </td>
                </tr>
        </tbody>        
</table>

<?php

if(isset($_GET['manage'])==1)
    {
           echo '<script type="text/javascript">document.getElementById("TIMEMANAGEMENTACTIVITY_1_DESCRIPTION").focus();</script>';
    }
    else 
    {
       $count=count($getTimeMNGTVal);
       if($count>0)
            echo '<script type="text/javascript">document.getElementById("TIMEMANAGEMENTACTIVITY_'.($count+1).'_DESCRIPTION").focus();</script>';
    }

 $this->endWidget(); ?>

</div> 