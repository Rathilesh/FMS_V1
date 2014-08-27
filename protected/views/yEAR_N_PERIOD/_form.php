<?php
/* Created By : ® Arjun ® 
   Created On : 3-April-2014
   Modified By :
   Modified On :
   Purpose : Period Creation & Management
 */
?>
<?php
/* @var $this YEAR_N_PERIODController */
/* @var $model YEAR_N_PERIOD */
/* @var $form CActiveForm */
?>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/assets/js/cloning/cloning.js"></script>
<?php
 require_once('general_class.php');
 require_once("popupdialog.php");
 $Getlabelname =new Get_Labelname_Cls(); 
 $getMessages=new Get_Message_Cls();
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/assets/js/moment.js',CClientScript::POS_HEAD); 
$major_start_date=array();
$major_end_date=array();
//////////QUARTER DETAILS ARRAY //////////////
$quarter_sub_period_id=array();
$quarter_sub_period_name=array();
$quarter_sub_period_start_date=array();
$quarter_sub_period_end_date=array();
////////// MONTHLY DETAILS ARRAY /////////////
$monthly_sub_period_id=array();
$monthly_sub_period_name=array();
$monthly_sub_period_start_date=array();
$monthly_sub_period_end_date=array();
//////////OTHERS DETAILS ///////////////////////
$others_sub_period_id=array();
$others_sub_period_name=array();
$others_sub_period_start_date=array();
$others_sub_period_end_date=array();

?>
<?php 
if($model->isNewRecord)
{
    $major_period_id='';
    $quarter_tbl_row_count=3;
    $quarter_db_row_count=0;
    $monthly_tbl_row_count=11;
    $monthly_db_row_count=0;
    $others_tbl_row_count=9;
    $others_db_row_count=0;
}
else
{
    $major_period_id=$_GET['id'];
    $major_details = Yii::app()->db->createCommand()
                     ->select('START_DATE,END_DATE')
                     ->where('ID=:value',array(':value'=>$major_period_id))
                     ->from('YEAR_N_PERIOD')
                     ->queryAll();     
     foreach($major_details as $val)
          {            
               array_push($major_start_date,date('d/m/Y',strtotime($val['START_DATE']))); 
               array_push($major_end_date,date('d/m/Y',strtotime($val['END_DATE']))); 
          }
          
         //////////////////////////QUARTER DETAILS///////////////////////////////// 
            $quarter_sub_details = Yii::app()->db->createCommand()
                    ->select('ID,SHORT_NAME,START_DATE,END_DATE')
                    ->where('YNP_ID=:value AND PERIOD_TYPE=:value1',array(':value'=>$major_period_id,':value1'=>'QUARTERLY'))
                    ->order('START_DATE asc')
                    ->from('YEAR_N_PERIOD')
                    ->queryAll();     
                foreach($quarter_sub_details as $val1)
                {   
                     array_push($quarter_sub_period_id,$val1['ID']);  
                     array_push($quarter_sub_period_name,$val1['SHORT_NAME']);
                     array_push($quarter_sub_period_start_date,date('d/m/Y',strtotime($val1['START_DATE']))); 
                     array_push($quarter_sub_period_end_date,date('d/m/Y',strtotime($val1['END_DATE']))); 

                }
                $quarter_db_row_count=count($quarter_sub_period_id);
                if($quarter_db_row_count<=4)
                    $quarter_tbl_row_count=3;
                else
                    $quarter_tbl_row_count=$quarter_db_row_count-1;

        ////////////////////////////////MONTHLY DETAILS///////////////////////////////////////////////////////
                $monthly_sub_details = Yii::app()->db->createCommand()
                    ->select('ID,SHORT_NAME,START_DATE,END_DATE')
                    ->where('YNP_ID=:value AND PERIOD_TYPE=:value1',array(':value'=>$major_period_id,':value1'=>'MONTHLY'))
                   ->order('START_DATE asc')
                    ->from('YEAR_N_PERIOD')
                    ->queryAll();     
                foreach($monthly_sub_details as $val1)
                {   
                     array_push($monthly_sub_period_id,$val1['ID']);  
                     array_push($monthly_sub_period_name,$val1['SHORT_NAME']);
                     array_push($monthly_sub_period_start_date,date('d/m/Y',strtotime($val1['START_DATE']))); 
                     array_push($monthly_sub_period_end_date,date('d/m/Y',strtotime($val1['END_DATE']))); 

                }
                $monthly_db_row_count=count($monthly_sub_period_id);
                if($monthly_db_row_count<=12)
                    $monthly_tbl_row_count=11;
                else
                    $monthly_tbl_row_count=$monthly_db_row_count-1;
                
       //////////////////////////////////////OTHERS DETAILS //////////////////////////////////////////////////////////
                $others_sub_details = Yii::app()->db->createCommand()
                    ->select('ID,SHORT_NAME,START_DATE,END_DATE')
                    ->where('YNP_ID=:value AND PERIOD_TYPE=:value1',array(':value'=>$major_period_id,':value1'=>'OTHERS'))
                     ->order('START_DATE asc')
                    ->from('YEAR_N_PERIOD')
                    ->queryAll();     
                foreach($others_sub_details as $val1)
                {   
                     array_push($others_sub_period_id,$val1['ID']);  
                     array_push($others_sub_period_name,$val1['SHORT_NAME']);
                     array_push($others_sub_period_start_date,date('d/m/Y',strtotime($val1['START_DATE']))); 
                     array_push($others_sub_period_end_date,date('d/m/Y',strtotime($val1['END_DATE']))); 

                }
                $others_db_row_count=count($others_sub_period_id);
                if($others_db_row_count<=12)
                    $others_tbl_row_count=11;
                else
                    $others_tbl_row_count=$others_db_row_count-1;
                
                ////////////////////////////////////////////////////////////////////////////////////////////////////////
                
}
$entity_id=Yii::app()->session['P_Eu_Orgn_Code'];
$entity = Yii::app()->db->createCommand()
                 ->select('NAME')
                 ->where('ID=:value',array(':value'=>$entity_id))
                 ->from('ENTITY')
                 ->queryScalar();
?>
<style>
    
   
</style>
<script>
    $(document).ready(function(){   
    var quarter_update_rows='<?php echo $quarter_db_row_count;?>';
    if(quarter_update_rows>0)
        {
       $(".tbl_btn").css("width","682px");
      $(".header_date_width").css("width","105px");
      $(".scrollContent_quarterly").css("width","680px");
       $(".scrollContent_quarterly").css("overflow","visible");
        }
   else
       {
       $(".tbl_btn").css("width","665px");  
       $(".header_date_width").css("width","95px");
      $(".scrollContent_quarterly").css("width","663px");
       }
    var monthly_update_rows='<?php echo $monthly_db_row_count;?>';
    var others_update_rows='<?php echo $others_db_row_count;?>';
        
        $("#radio").buttonset(); 
        
        $('#start_date_icon').click(function(){
      $('#START_DATE').datepicker('show');
    });
    $('#end_date_icon').click(function(){
      $('#END_DATE').datepicker('show');
    });
     
     
     $("#btn_Reset").click(function(){        
        $(".Quarter_table").fadeIn("slow");
        $(".Monthly_table").hide();                   
        $(".Others_table").hide();  
     });
     
     
        $("#btn_Save").click(function(){
           
          var duplication_check_result=Period_duplication_check();          
          if(duplication_check_result===false)
            return false;         
           var validation_result=validation();
           if(validation_result===false)
            return false; 
        var overlap_detection_quarterly=overlap_detection_test("TotRowCount_Quarterly","quarterly","START_DATE_QUARTERLY","END_DATE_QUARTERLY");
           if(overlap_detection_quarterly===false)
               {
                   $("#period_type").val("QUARTERLY");
                   $(".Quarter_table").fadeIn("slow");
                   $(".Monthly_table").hide();                   
                   $(".Others_table").hide();
          return false;
               }

          var gap_detection_quarterly=gap_detection_test("TotRowCount_Quarterly","quarterly","START_DATE_QUARTERLY","END_DATE_QUARTERLY");
          // alert(gap_detection_quarterly); return false;

          if(gap_detection_quarterly===false)
              {
                 $("#period_type").val("QUARTERLY");
                 $(".Quarter_table").fadeIn("slow");
                 $(".Monthly_table").hide();                   
                 $(".Others_table").hide();
                 return false;
              }
             
          var overlap_detection_monthly=overlap_detection_test("TotRowCount_Monthly","monthly","START_DATE_MONTHLY","END_DATE_MONTHLY");
           if(overlap_detection_monthly===false)
               {
                    $("#period_type").val("MONTHLY");
                    $(".Monthly_table").fadeIn("slow");
                     $(".Quarter_table").hide();                   
                    $(".Others_table").hide();
                 return false;
               }
          var gap_detection_monthly=gap_detection_test("TotRowCount_Monthly","monthly","START_DATE_MONTHLY","END_DATE_MONTHLY");
          if(gap_detection_monthly===false)
              {
                   $("#period_type").val("MONTHLY");
                    $(".Monthly_table").fadeIn("slow");
                     $(".Quarter_table").hide();                   
                    $(".Others_table").hide();
                return false;
              }
           var overlap_detection_others=overlap_detection_test("TotRowCount_Others","others","START_DATE_OTHERS","END_DATE_OTHERS");
           if(overlap_detection_others===false)
               {
                   $("#period_type").val("OTHERS");
                    $(".Others_table").fadeIn("slow");
                   $(".Quarter_table").hide();                   
                     $(".Monthly_table").hide();
                    return false;
               }
          //     alert("here");
          var gap_detection_others=gap_detection_test("TotRowCount_Others","others","START_DATE_OTHERS","END_DATE_OTHERS");
          //alert(gap_detection_others);
          //return false;

          if(gap_detection_others===false)
              {
                  $("#period_type").val("OTHERS");
                $(".Others_table").fadeIn("slow");
               $(".Quarter_table").hide();                   
                 $(".Monthly_table").hide();
              return false;
              }
         
        });
        $("#START_DATE").change(function()
        {
            var start_date=$("#START_DATE").val();
            var split_date=start_date.split("/");
           var day=split_date[0];
           var month=parseInt(split_date[1])-1;
           var year=split_date[2];
           var end_date_calc = moment([year, month, day]).add('y',1).subtract('d',1);                     
           var end_date=moment(end_date_calc).format('DD/MM/YYYY');
           $("#END_DATE").val(end_date); 
           $(".sub_date").datepicker('option','minDate',start_date);          
           $(".sub_date").datepicker('option','maxDate',end_date);
           ///////////setting dates to quarter table & monthly table for initiation //////////////////////////
           var quarter_dates_array=date_calc(3,3);                   
                   for(i=0;i<=11;i++)
                       {
                           $("#START_DATE_QUARTERLY-"+i).val(quarter_dates_array.start_dates[i]);
                           $("#END_DATE_QUARTERLY-"+i).val(quarter_dates_array.end_dates[i]);
                       }
               var monthly_dates_array=date_calc(11,1);                   
           for(j=0;j<=11;j++)
               {
                   $("#START_DATE_MONTHLY-"+j).val(monthly_dates_array.start_dates[j]);
                   $("#END_DATE_MONTHLY-"+j).val(monthly_dates_array.end_dates[j]);
               }
        });
//        $(".sub_date").click(function(){
//            var start_date=$("#START_DATE").val();
//            var end_date=$("#END_DATE").val();
//           alert(start_date+end_date);return false;
//         $(this).datepicker({dateFormat:'dd/mm/yy',minDate:start_date,maxDate:end_date,changeMonth:true,changeYear:true,constrainInput: true,		
//                                                duration:'fast',
//                                                showAnim:'slide'});  
//        });
        $("#period_type").change(function(){
           if(this.value==="QUARTERLY")
               {                  
                   $(".Quarter_table").fadeIn("slow");
                   if(quarter_update_rows>0)
                       {
                     $(".tbl_btn").css("width","682px");
                      $(".header_date_width").css("width","105px");
                     $(".scrollContent_quarterly").css("width","680px");
                       }
                 else
                     {
                     $(".tbl_btn").css("width","665px");
                     $(".header_date_width").css("width","95px");
                    $(".scrollContent_quarterly").css("width","663px");
                     }
//                   var dates_array=date_calc(3,3);                   
//                   for(j=0;j<=11;j++)
//                       {
//                           $("#START_DATE_QUARTERLY-"+j).val(dates_array.start_dates[j]);
//                           $("#END_DATE_QUARTERLY-"+j).val(dates_array.end_dates[j]);
//                       }
                   $(".Monthly_table").hide();                   
                   $(".Others_table").hide();
               }
           if(this.value==="MONTHLY")
               {                   
                   $(".Monthly_table").fadeIn("slow"); 
                   if(monthly_update_rows>0)
                       {
                        $(".tbl_btn").css("width","682px");
                        $(".header_date_width").css("width","105px");
                        $(".scrollContent_monthly").css("width","660px");
                       }
                    else
                        {
                        $(".tbl_btn").css("width","665px");
                        $(".header_date_width").css("width","95px");
                        $(".scrollContent_monthly").css("width","663px");
                        }
//                   var dates_array=date_calc(11,1);                   
//                   for(j=0;j<=11;j++)
//                       {
//                           $("#START_DATE_MONTHLY-"+j).val(dates_array.start_dates[j]);
//                           $("#END_DATE_MONTHLY-"+j).val(dates_array.end_dates[j]);
//                       }
                   $(".Quarter_table").hide();
                   $(".Others_table").hide();
               }
            if(this.value==="OTHERS")
               {                   
                   $(".Others_table").fadeIn("slow");
                   if(others_update_rows>0)
                       {
                       $(".tbl_btn").css("width","682px");
                       $(".header_date_width").css("width","105px");
                       $(".scrollContent_others").css("width","660px");
                       }
                   else
                       {
                       $(".tbl_btn").css("width","665px");
                       $(".header_date_width").css("width","95px");
                        $(".scrollContent_others").css("width","663px");
                       }
                   $(".Monthly_table").hide();
                   $(".Quarter_table").hide();
                   
               }
        });
 
 ////////////////// Cloning Last Row ////////////////////////////////////////////////////////////////
$("#clone_button").click(function()
{  $(".scrollContent_quarterly").css("overflow","auto");
    var placeholder_text_prefix="Sub Period";

    var period_type_set=$("#period_type").val();
    var Quarter_Row_Count=$("#TotRowCount_Quarterly").val();
    var Monthly_Row_Count=$("#TotRowCount_Monthly").val();
    var Others_Row_Count=$("#TotRowCount_Others").val();
    var start_date=$("#START_DATE").val();
    var end_date=$("#END_DATE").val();
    //alert(parseInt(Quarter_Row_Count)+1);
//    alert(period_type_set);return false;
if(period_type_set==="QUARTERLY")
    {
    var tbody_class="Quarter_table";
   $("#TotRowCount_Quarterly").val(parseInt(Quarter_Row_Count)+1);
    }
else
    {
if(period_type_set==="MONTHLY")
    {
         var tbody_class="Monthly_table";
        $("#TotRowCount_Monthly").val(parseInt(Monthly_Row_Count)+1);
    }
    else
        {
            if(period_type_set==="OTHERS")
                {
                   var tbody_class="Others_table";  
                   $("#TotRowCount_Others").val(parseInt(Others_Row_Count)+1);
                }
        }
    }
//alert(tbody_class);return false;
   
     var cloned_row= $("#sub_table ."+tbody_class+" tr:last").clone().find("input").each(function() { 
         
         //alert("hi");
         $(this).attr({
             'name': function(_, name) { 
            var split_id1=this.id.split("-");
            var id_prefix1=split_id1[0];
            var id_index1=parseInt(split_id1[1]);
            var new_index=id_index1+1;
             var split_name=this.name.split("]");
             var name_suffix=split_name[1]+"]"+split_name[2]+"]";
             //alert(name_suffix);   
              if($(this).attr('type') === 'hidden')
               {    //alert(id_prefix1+"-"+new_index);    
                   return id_prefix1+"-"+new_index;
               }
               else
                   {
                       //alert("YEAR_N_PERIOD["+new_index+"]"+name_suffix);
                       return "YEAR_N_PERIOD["+new_index+"]"+name_suffix;
                   }
            },
            'id': function(_, id) {        
            var split_id=this.id.split("-");
            var id_prefix=split_id[0];
            var id_index=parseInt(split_id[1]);
            var new_index=id_index+1;           
            return id_prefix+"-"+new_index;
          
           }, 
           'value':function(_, value) {
             var new_value="";       
             return new_value; 
                }                    
             });
       // alert("hi");
     }).end().insertAfter("#sub_table ."+tbody_class+" tr:last");
//console.log(cloned_row);
  cloned_row.find('input').each(function() {
           if($(this).hasClass("hasDatepicker"))
                {                 
                         $(this).removeClass('hasDatepicker').datepicker({dateFormat:'dd/mm/yy',minDate:start_date,maxDate:end_date,changeMonth:true,changeYear:true,constrainInput: true,		
                                                duration:'fast',
                                                showAnim:'slide'});  
                           
                }                              
               if($(this).hasClass("sub_period_name"))
                   { 
                       var get_id=this.id;
                        var split_id=get_id.split("-");
//                     alert(split_id);  return false;
                       var index=parseInt(split_id[1])+1;
                     
                       $(this).attr("placeholder",placeholder_text_prefix+" "+index);
                   }
                 
           });

});   

//////////////////////End of Cloning function ///////////////////////////////////////////////////////
    });
function date_calc(row_nos,month_increment)
{
            var start_dates=[];
            var end_dates=[];            
            var start_date=$("#START_DATE").val();            
           for(i=0;i<=row_nos;i++)
               {
          start_dates.push(start_date);
           var split_date=start_date.split("/");
           var day=split_date[0];
           var month=parseInt(split_date[1])-1;
           var year=split_date[2];
           var end_date_calc = moment([year, month, day]).add('M',month_increment).subtract('d',1);
           var next_start_date_calc=moment([year, month, day]).add('M',month_increment);           
           var end_date=moment(end_date_calc).format('DD/MM/YYYY');
           var next_start_date=moment(next_start_date_calc).format('DD/MM/YYYY');
           end_dates.push(end_date);           
           start_date=next_start_date;         
              } 
              return { start_dates : start_dates, end_dates : end_dates };
}

function validation()
{
    var major_period_name=$("#YEAR_N_PERIOD_SHORT_NAME").val();
    var major_start_date=$("#START_DATE").val();
    var major_end_date=$("#END_DATE").val();
    var quarter_period_array=[];
    var monthly_period_array=[];
    var others_period_array=[];
     var quarter_rowCount = $(".Quarter_table tr").length;
     var monthly_rowCount = $(".Monthly_table tr").length;
     var others_rowCount = $(".Others_table tr").length;     
    if(major_period_name==="")
        {
            //alert("Please Enter Major Period Name");
            GetStaticAlert("20505"); 
            return false;            
        }
     else
         {
             if(major_start_date==="")
                 {
                    //alert("Please Enter Start Date for Major Period");
                    GetStaticAlert("20506");  
                    Createfocus("START_DATE");
                   //$("#START_DATE").focus();
                      return false;                       
                 }
                 else
                     {
                         if(major_end_date==="")
                            {
                               //alert("Please Enter End Date for Major Period");
                               GetStaticAlert("20507"); 
                               Createfocus("END_DATE");
                               //$("#END_DATE").focus();
                                return false;     
                            }
                            else
                                {
                                    if(range_compare(major_start_date,major_end_date)==="after")
                                        {
                                            //alert("Start Date Should be less than or equal to End Date");
                                            GetStaticAlert("20508");
                                             Createfocus("END_DATE");
                                             //$("#END_DATE").focus();
                                            return false;
                                        }
                                }
                     }
                 }
         
         for(i=0;i<quarter_rowCount;i++)
             {
               var quarter_period_name=$("#quarterly-"+i).val();
               var quarter_start_date=$("#START_DATE_QUARTERLY-"+i).val();
               var quarter_end_date=$("#END_DATE_QUARTERLY-"+i).val(); 
                if(!(quarter_period_name===""))
                            {                                            
                                  var inside_array=jQuery.inArray(quarter_period_name,quarter_period_array);              
                                    if(inside_array===-1) 
                                    {
                                       quarter_period_array.push(quarter_period_name);
                                    }
                                    else
                                    {
                                         $("#period_type").val("QUARTERLY");
                                        $(".Quarter_table").fadeIn("slow");
                                         $(".Monthly_table").hide();                   
                                         $(".Others_table").hide();
                                      //alert("Sub Period Name Duplication found");
                                      GetStaticAlert("20509"); 
                                      return false;
                                    }                                                        
                                        if(quarter_start_date==="")
                                           { $("#period_type").val("QUARTERLY");                                           
                                              $(".Quarter_table").fadeIn("slow");
                                              $(".Monthly_table").hide();                   
                                               $(".Others_table").hide();
                                               //alert("Enter Start Date");
                                               GetStaticAlert("20510");
                                                Createfocus("START_DATE_QUARTERLY-"+i);
                                              //$("#START_DATE_QUARTERLY-"+i).focus();
                                              return false;
                                           }
                                          else
                                              {                                               
                                                if(quarter_end_date==="")
                                                          {
                                                             $("#period_type").val("QUARTERLY");
                                                               $(".Quarter_table").fadeIn("slow");
                                                               $(".Monthly_table").hide();                   
                                                                $(".Others_table").hide();
                                                                // alert("Enter End Date");
                                                                GetStaticAlert("20511"); 
                                                                Createfocus("END_DATE_QUARTERLY-"+i);
                                                               //$("#END_DATE_QUARTERLY-"+i).focus();
                                                              return false;
                                                          }
                                                else
                                                 {
                                                     var quarter_range_result=range_compare(quarter_start_date,quarter_end_date);                                                    
                                                     if(quarter_range_result==="after")
                                                         {$("#period_type").val("QUARTERLY");
                                                             $(".Quarter_table").fadeIn("slow");
                                                               $(".Monthly_table").hide();                   
                                                                $(".Others_table").hide();
                                                             //alert("Start Date Should be less than or equal to End Date");
                                                             GetStaticAlert("20508"); 
                                                              Createfocus("START_DATE_QUARTERLY-"+i);
                                                               //$("#START_DATE_QUARTERLY-"+i).focus();                                                            
                                                             return false;
                                                         }
                                                 }
                                                                                 
                                     }
             }
                }
                
                for(j=0;j<monthly_rowCount;j++)
             {
               var monthly_period_name=$("#monthly-"+j).val();
               var monthly_start_date=$("#START_DATE_MONTHLY-"+j).val();
               var monthly_end_date=$("#END_DATE_MONTHLY-"+j).val(); 
                if(!(monthly_period_name===""))
                            {                                            
                                 var inside_array=jQuery.inArray(monthly_period_name,monthly_period_array);              
                                    if(inside_array===-1) 
                                    {
                                       monthly_period_array.push(monthly_period_name);
                                    }
                                    else
                                    {
                                        $("#period_type").val("MONTHLY");
                                        $(".Monthly_table").fadeIn("slow");
                                         $(".Quarter_table").hide();                   
                                        $(".Others_table").hide();
                                      //alert("Sub Period Name Duplication found");
                                      GetStaticAlert("20509"); 
                                      return false;
                                    }                                                               
                                        if(monthly_start_date==="")
                                           { $("#period_type").val("MONTHLY");                                           
                                              $(".Monthly_table").fadeIn("slow");
                                              $(".Quarter_table").hide();                   
                                               $(".Others_table").hide();
                                              // alert("Enter Start Date");
                                              GetStaticAlert("20510"); 
                                              Createfocus("START_DATE_MONTHLY-"+j);
                                             // $("#START_DATE_MONTHLY-"+j).focus();
                                              return false;
                                           }
                                          else
                                              {                                               
                                                if(monthly_end_date==="")
                                                          {
                                                             $("#period_type").val("MONTHLY");
                                                               $(".Monthly_table").fadeIn("slow");
                                                               $(".Quarter_table").hide();                   
                                                                 $(".Others_table").hide();
                                                                 // alert("Enter End Date");
                                                                 GetStaticAlert("20511");
                                                                 Createfocus("END_DATE_MONTHLY-"+j);
                                                               //$("#END_DATE_MONTHLY-"+j).focus();
                                                              return false;
                                                          } 
                                                 else
                                                 {
                                                     var monthly_range_result=range_compare(monthly_start_date,monthly_end_date);                                                    
                                                     if(monthly_range_result==="after")
                                                         {$("#period_type").val("MONTHLY");
                                                             $(".Monthly_table").fadeIn("slow");
                                                               $(".Quarter_table").hide();                   
                                                                $(".Others_table").hide();
                                                            // alert("Start Date Should be less than or equal to End Date");
                                                            GetStaticAlert("20508"); 
                                                             Createfocus("START_DATE_MONTHLY-"+j);
                                                               //$("#START_DATE_MONTHLY-"+j).focus();                                                            
                                                             return false;
                                                         }
                                                 }
                                              }                                   
                                     }
                }
                
            for(k=0;k<others_rowCount;k++)
             {
               var others_period_name=$("#others-"+k).val();
               var others_start_date=$("#START_DATE_OTHERS-"+k).val();
               var others_end_date=$("#END_DATE_OTHERS-"+k).val(); 
                if(!(others_period_name==="" && others_start_date===""&& others_end_date===""))
                            {
                                
                                var inside_array=jQuery.inArray(others_period_name,others_period_array);              
                                    if(inside_array===-1) 
                                    {
                                       others_period_array.push(others_period_name);
                                    }
                                    else
                                    {$("#period_type").val("OTHERS");
                                        $(".Others_table").fadeIn("slow");
                                       $(".Quarter_table").hide();                   
                                         $(".Monthly_table").hide();
                                      //alert("Sub Period Name Duplication found");
                                      GetStaticAlert("20509"); 
                                      return false;
                                    }     
                                 if(others_period_name==="")
                                           {    $("#period_type").val("OTHERS");                                        
                                              $(".Others_table").fadeIn("slow");
                                              $(".Quarter_table").hide();                   
                                               $(".Monthly_table").hide();
                                              // alert("Enter Sub Period Name");
                                              GetStaticAlert("20520");
                                               Createfocus("others-"+k);
                                              //$("#others-"+k).focus();
                                              return false;
                                           }
                                     else
                                         {
                                        if(others_start_date==="")
                                           {   $("#period_type").val("OTHERS");                                         
                                              $(".Others_table").fadeIn("slow");
                                              $(".Quarter_table").hide();                   
                                               $(".Monthly_table").hide();
                                              // alert("Enter Start Date");
                                              GetStaticAlert("20510"); 
                                              Createfocus("START_DATE_OTHERS-"+k);
                                              //$("#START_DATE_OTHERS-"+k).focus();
                                              return false;
                                           }
                                          else
                                              {                                               
                                                if(others_end_date==="")
                                                          {
                                                             $("#period_type").val("OTHERS");
                                                               $(".Others_table").fadeIn("slow");
                                                               $(".Quarter_table").hide();                   
                                                               $(".Monthly_table").hide();
                                                               //alert("Enter End Date");
                                                               GetStaticAlert("20511"); 
                                                               Createfocus("END_DATE_OTHERS-"+k);
                                                               //$("#END_DATE_OTHERS-"+k).focus();
                                                               return false;
                                                          }
                                                 else
                                                 {
                                                     var others_range_result=range_compare(others_start_date,others_end_date);                                                    
                                                     if(others_range_result==="after")
                                                         {$("#period_type").val("OTHERS");
                                                             $(".Others_table").fadeIn("slow");
                                                               $(".Quarter_table").hide();                   
                                                                $(".Monthly_table").hide();
                                                            // alert("Start Date Should be less than or equal to End Date");
                                                            GetStaticAlert("20508"); 
                                                             Createfocus("START_DATE_OTHERS-"+k);
                                                               //$("#START_DATE_OTHERS-"+k).focus();                                                            
                                                             return false;
                                                         }
                                                 }
                                              }                                   
                                     }
                            }
                }
}

function range_compare(start_date,end_date)
{
   var split_start_date=start_date.split("/");
    var start_day=split_start_date[0];   
    var start_month_one_less=parseInt(split_start_date[1])-1;//for adding days etc in format of moment js like in  brackets month should be one less
    var start_year=split_start_date[2]; 
    var split_end_date=end_date.split("/");
    var end_day=split_end_date[0];   
    var end_month_one_less=parseInt(split_end_date[1])-1;
    var end_year=split_end_date[2]; 
    var start_date_to_compare=new Date(start_year, start_month_one_less, start_day);
    var end_date_to_compare=new Date(end_year,end_month_one_less,end_day);   
   if(start_date_to_compare>end_date_to_compare)
       return "after";
   if(start_date===end_date)
       return "same";
    if(start_date_to_compare<end_date_to_compare)
       return "before";

}

function overlap_detection_test(totrowcount,period_name,start_date,end_date)
{
   
    var others_rowCount = $("#"+totrowcount).val();
    var other_period_array=[];
    var other_start_date_array=[];
    var other_end_date_array=[];
    var period_type = period_name.toLowerCase().replace(/\b[a-z]/g, function(letter) {
    return letter.toUpperCase();});

     for(i=0;i<=others_rowCount;i++)
             {  
                 var others_desc=$("#"+period_name+"-"+i).val();
               var others_start_date=$("#"+start_date+"-"+i).val();
                var others_end_date=$("#"+end_date+"-"+i).val();
             
               other_period_array.push(others_desc);
                other_start_date_array.push(others_start_date);  
                  other_end_date_array.push(others_end_date); 
             } 


             
             
for(j=0;j<=others_rowCount;j++)
    {
    
        if(other_period_array[j]!=="")
            {
                for(k=0;k<=others_rowCount;k++)
                    {
                       
                        if(k!==j)
                            { 
                                if(other_period_array[k]!=="")
                                 {
                                    
                                var others_end_date_test=range_compare(other_start_date_array[j],other_end_date_array[k]);
                      

                                        if(others_end_date_test==="before")
                                             {
                                                 var test2=range_compare(other_start_date_array[j],other_start_date_array[k]);
                                                 if(test2!=="before")
                                                     {
                                                 //alert("Overlapping of dates in  "+(j+1)+"th and "+(k+1)+"th row of period type :"+period_type);
                                                 msgid=(j+1)+alertformat+(k+1)+alertformat+period_type;  
                                                GetDynamicAlert("20512",msgid);
                                                 return false; 
                                                     }
                                               
                                             }
                                            if(others_end_date_test==="same")
                                             {
                                              
                                                 //alert("Overlapping of dates in  "+(j+1)+"th and "+(k+1)+"th row of period_type :"+period_type);
                                                  msgid=(j+1)+alertformat+(k+1)+alertformat+period_type;   
                                                GetDynamicAlert("20512",msgid);
                                                 return false;                                                     
                                                
                                             } 
                                             


                                 }
                                   
                            }
                    }

            }
        
    }
    
}
function gap_detection_test(totrowcount,period_name,start_date,end_date)
{
    var flag=0; 
    var others_rowCount = $("#"+totrowcount).val();
    var main_start_date=$("#START_DATE").val();
    var main_end_date=$("#END_DATE").val();
    var other_period_array=[];
    var other_start_date_array=[];
    var other_end_date_array=[];
    var start_date_array2=[];
    var end_date_array2=[];
    var period_type = period_name.toLowerCase().replace(/\b[a-z]/g, function(letter) {
    return letter.toUpperCase();});

     for(i=0;i<=others_rowCount;i++)
             {  
                 var others_desc=$("#"+period_name+"-"+i).val();
               var others_start_date=$("#"+start_date+"-"+i).val();
                var others_end_date=$("#"+end_date+"-"+i).val();
             
               other_period_array.push(others_desc);
                other_start_date_array.push(others_start_date);  
                  other_end_date_array.push(others_end_date); 
             } 
      
       
for(j=0;j<=others_rowCount;j++)
    {
      
        if(other_period_array[j]!=="")
            {
                for(k=0;k<=others_rowCount;k++)
                    {
                     
                        if(k!==j)
                            { 
                                if(other_period_array[k]!=="")
                                 {                                  
                                       var before_test= range_compare(other_end_date_array[j],other_start_date_array[k]); 
                                     
                                            var split_end_date=other_end_date_array[j].split("/");
                                            var end_day=split_end_date[0];
                                            var end_month_one_less=parseInt(split_end_date[1])-1;//for adding days etc in format of moment js like in  brackets month should be one less
                                            var end_year=split_end_date[2]; 
                                            var next_start_date_calc = moment([end_year, end_month_one_less, end_day]).add('d',1); 
                                            var start_date_expected=moment(next_start_date_calc).format('DD/MM/YYYY');
                                           //alert(before_test+start_date_expected+other_start_date_array[k]);
                                            if(start_date_expected===other_start_date_array[k])
                                                {
                                                    flag=1;
                                                   
                                                }
//                                                if(flag!==1)
//                                                    {
                                                if((before_test==="before")&&(start_date_expected!==other_start_date_array[k]))
                                                {
                                                    flag=2;
                                                    
                                                } 
                                             ///}

                                          
                                 }
                                   
                            }
                    }

                  start_date_array2.push(other_start_date_array[j]);  
                   end_date_array2.push(other_end_date_array[j]); 
                  
            }           
        
    }
    
    
     if(!((start_date_array2.length===0)||(end_date_array2.length===0)))
         {
    var start_date_found=jQuery.inArray(main_start_date,start_date_array2);
     var end_date_found=jQuery.inArray(main_end_date,end_date_array2);     
         if(end_date_found===-1)
         {
             flag=4;
         }
         if(start_date_found===-1)
         {
             flag=3;
         }
         }
 
                    if(flag===2)
                        {
                           var result2=warning("20513",period_type,"","","gap"); 
                           test2=confirm(result2);
                          if (test2 == true) {
                              return true;
                          } else {
                           return false;   
                          }

                        //alert("gap between sub periods detected in period type :"+period_type);
                       //  msgid= period_type+alertformat;  
                       //  GetDynamicAlert("20513",msgid);
                       // return false;
                        }
                        if(flag===3)
                        {
                           var result3=warning("20514",period_type,"","","gap"); 
                           test3=confirm(result3);
                            if (test3 == true) {
                                return true;
                            } else {
                             return false;   
                            }

                       // alert("gap between major start date specified and sub periods detected in period type :"+period_type);
                       // msgid= period_type+alertformat;  
                       //  GetDynamicAlert("20514",msgid);
                       // return false;
                        }
                        if(flag===4)
                        {
                       // alert("gap between major end date specified and sub periods detected in period type :"+period_type);
//                       msgid= period_type+alertformat;                       
//                        GetDynamicAlert("20515",msgid); 
//                        return false;
            var result4=warning("20515",period_type,"","","gap"); 

                      //var ates=false;

                                          //$("#dialog-message").text("result");
                          //           $( "#dialog-message" ).dialog({
                          //   modal: true,
                          //   buttons: {
                          //     Ok: function() {
                          //       $( this ).dialog( "close" );
                          //       ates = true;

                          //      //return true;
                          //     },
                          //      Cancel: function() {
                          //       $( this ).dialog( "close" );
                          //     return false;
                          //     }
                          //   }
                          // });
              test4=confirm(result4);

              if (test4 == true) {
                  return true;
              } else {
               return false;   
              }
            
        }

              
}



function warning(id,param1,param2,param3,error_type)
{    
var message="";
     $.ajax({  
               type: "POST", 
                async: false,
               url: "<?php echo $this->createUrl('Year_n_period/ajaxWarning') ?>",
               data:{id:id,param1:param1,param2:param2,param3:param3,error_type:error_type},          
               success: function(data){  
               message=data;               
               // return data;
               },
            });
    
   return message;
}

function delete_period(id)
{
    bootbox.confirm("<p class='modalstyle'><b><img width='30px' src='<?php echo Yii::app()->request->baseUrl; ?>/images/question_red.png'/>Confirmation</b></p><p>"+"<?php echo $getMessages->Get_Message_Fnc("20521"); ?>"+"</p>","No", "Yes", function(result) {
        if (result === true) {
                   
            $.ajax({  
               type: "POST",
               url: "<?php echo $this->createUrl('Year_n_period/DeletePeriod') ?>",
               data:{id:id},          
               success: function(data){ 
                console.log(data);                                
                if(data==="1000")
                {                    
                    location.reload();                
                }               
               },
            });
          }
       });
}
function Period_duplication_check()
{
    var major_period_name=$("#YEAR_N_PERIOD_SHORT_NAME").val();
   var entity_id='<?php echo $entity_id;?>'; 
   var update_id='<?php echo $major_period_id?>';
   
    $.ajax({
        type:"POST",     
        async: false,
        url:"<?php echo $this->createUrl('Year_n_period/Duplication_check') ?>",
        data:{major_period_name:major_period_name,entity_id:entity_id,update_id:update_id},
        success:function(data){
   
    if(data==='duplicates')
        { 
             GetStaticAlert("20516"); 
             returnValue=false;
        }
        else
            {
                returnValue=true;
            }
        },
    });
    return returnValue;
    
}

</script>
 
<script>
    //////// Setting Time for Flash Messages //////////
    setTimeout(function() {
        $('#error_div').fadeOut('slow');
    }, 5000); 

    setTimeout(function() {
        $('#success_div').fadeOut('slow');
    }, 5000); 
</script>
 <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom_styles/Year_n_Period_Style.css" rel="stylesheet">
 <!---- Code for Flash Messages---->
    <?php if(Yii::app()->user->hasFlash('success')):?>
    <div id="success_div" style="width:100%; height: auto; float: left;">
            <div class="success_blue"> <div class="success_blue_icon"></div>
                <div class="success_blue_msg">
                    <?php echo Yii::app()->user->getFlash('success'); ?>
                </div>
            </div>
     </div>
            <?php elseif(Yii::app()->user->hasFlash('error')):?>
 <div id="error_div" style="width:100%; height: auto; float: left;">
            <div class="error_red"> <div class="error_red_icon"></div>
                <div class="error_red_msg">
                <?php echo Yii::app()->user->getFlash('error'); ?>
                </div>
            </div>
 </div>
    <?php endif; ?>
 <div id="dialog-message" title="Confirmation">
  
</div>
 

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'year--n--period-form',
	'enableAjaxValidation'=>false,
)); ?>

    <table id="outer_border_table">
        <tr>
            <td style="padding-top:10px;padding-left: 10px;padding-right: 10px;">                 
                <table id="major_table">
                    <tr>
                        <td style="display:none;">
                          <input id="MAJOR_id_hidden" type="hidden" name="MAJOR_id_hidden" value="<?php echo $major_period_id; ?>">    
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-bottom:10px;">
                            <label class="font" for="Period Name"><?php echo $Getlabelname->Get_Labelname_Fnc("206");?></label>
                        </td>
                        <td colspan="3" style="padding-left:12px;">
                             <div class="input-append">
                            <?php echo $form->textField($model,'SHORT_NAME',array('class'=>'short_name_textbox','placeholder'=>'Major Period Name')); ?><a class="field_level_help_on_txt" href="#Period_Name"><span class="add-on" style="width:3px !important"></span></a>
                             </div>
                             </td>                        
                    </tr>
                    <tr>
                        <td style="">
                            <label class="font" for="Start Date"><?php echo $Getlabelname->Get_Labelname_Fnc("207");?></label>
                        </td>
                        <td style="padding-left:12px;padding-top:10px;"> 
                             <div class="input-append">
                            <?php $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model,"attribute"=>"START_DATE",
                                                                    'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                                                    'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"START_DATE",'value'=>$major_period_id!=''?$major_start_date[0]:'','class'=>'date_width','placeholder'=>'Start Date')));
                            ?><a class="field_level_help_on_txt" href="#Major_Start_Date"><span class="add-on" style="width:3px !important"></span></a>
                            <span> <img title="Start Date" id='start_date_icon' style="cursor:pointer;"src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/calendar_blue.png"></span>
                             </div>
                             </td>
                        <td style="padding-left:30px;">                           
                            <label class="font" for="End Date"><?php echo $Getlabelname->Get_Labelname_Fnc("208");?></label>
                        </td>
                        <td style="padding-left:12px;padding-top:10px;">  
                             <div class="input-append">
                             <?php $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model,"attribute"=>"END_DATE",
                                                                    'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                                                    'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"END_DATE",'value'=>$major_period_id!=''?$major_end_date[0]:'','class'=>'date_width','placeholder'=>'End Date')));
                            ?><a class="field_level_help_on_txt" href="#Major_End_Date"><span class="add-on" style="width:3px !important"></span></a>
                           <span> <img title="End Date" id='end_date_icon' style="cursor:pointer;" src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/calendar_blue.png"></span>
                             </div>
                             </td>
                    </tr>
                    <tr>
                        <td style="">                          
                            <label class="font" for="Period Type"><?php echo $Getlabelname->Get_Labelname_Fnc("209");?></label>
                        </td>
                        <td style="padding-left:12px;padding-top:10px;">		            
                             <div class="input-append">
                                 <?php echo CHtml::dropDownList('PERIOD_TYPE','PERIOD_TYPE', 
                                        array('QUARTERLY' => 'Quarterly', 'MONTHLY' => 'Monthly','OTHERS'=>'Others'),
                                         array('id'=>'period_type','style'=>'padding-top:0px;padding-bottom:0px;height:25px;')                                        
                                         );
                                 ?><a class="field_level_help_on_txt" href="#Period_Type"><span class="add-on" style="width:3px !important"></span></a>
                             </div>
                        </td>
                        <td style="padding-left:10px;">                           
                            <label class="font" for="Organisation"><?php echo $Getlabelname->Get_Labelname_Fnc("122");?></label>
                        </td>
                        <td style="padding-left:12px;padding-top:10px;">
                             <div class="input-append">
                            <?php echo $form->textField($model,'ENTITY_ID',array('value'=>$entity,'disabled'=>true,'class'=>'organisation_textbox')); ?><a class="field_level_help_on_txt" href="#Organisation"><span class="add-on" style="width:3px !important"></span></a> 
                             </div>
                             </td>
                    </tr>                    
                </table>                   
            </td>
        </tr>
        <tr>
            <td style="padding-top:10px;padding-left: 10px;padding-right: 10px;">               
                <table class="grid_insert_table" id="sub_table">
                    <thead class="fixedHeader">
                        <tr class="header-class">
                            <th class="header_sub_period_name">
                             <?php echo $Getlabelname->Get_Labelname_Fnc("210");?><a class="field_level_help" href="#Sub_Period_Name"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8" class="helpimage"></a>
                            </th>
                            <th class="header_date_width">
                              <?php echo $Getlabelname->Get_Labelname_Fnc("207");?><a class="field_level_help" href="#Sub_Start_Date"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8" class="helpimage"></a>
                            </th>
                            <th class="header_date_width">
                              <?php echo $Getlabelname->Get_Labelname_Fnc("208");?><a class="field_level_help" href="#Sub_End_Date"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8" class="helpimage"></a>
                            </th>
                        </tr>
                    </thead> 
                     <tbody class="Quarter_table scrollContent_quarterly">
                     <?php for($i=0;$i<=$quarter_tbl_row_count;$i++) { $j=$i+1;?>
                   
                        <tr>
                            <td style="display:none">
                                <input id="QUARTERLY_sub_id_hidden-<?php echo $i; ?>" type="hidden" name="QUARTERLY_sub_id_hidden-<?php echo $i; ?>" value="<?php echo $j>$quarter_db_row_count?'':$quarter_sub_period_id[$i]; ?>">
                            </td>
                            <td>
                                <?php echo $form->textField($model,"[$i]SHORT_NAME[QUARTERLY]",array('class'=>'sub_period_name','id'=>"quarterly-$i",'placeholder'=>"Quarter $j",'value'=>$j>$quarter_db_row_count?'':$quarter_sub_period_name[$i])); ?>                              
                            </td>
                            <td> 
                                <?php $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model,"attribute"=>"[$i]START_DATE[QUARTERLY]",
                                                                    'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                                                    'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"START_DATE_QUARTERLY-$i",'value'=>$j>$quarter_db_row_count?'':$quarter_sub_period_start_date[$i],'class'=>'date_width sub_date','placeholder'=>'Start Date')));
                            ?>                             
                            </td>
                            <td>
                                <?php $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model,"attribute"=>"[$i]END_DATE[QUARTERLY]",
                                                                    'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                                                    'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"END_DATE_QUARTERLY-$i",'value'=>$j>$quarter_db_row_count?'':$quarter_sub_period_end_date[$i],'class'=>'date_width sub_date','placeholder'=>'End Date')));
                            ?>                             
                            </td>                            
                           
                          <td class="delete_space" style="<?php if($j>$quarter_db_row_count){ ?>display:none<?php } ?>"><span title="Delete" class="icon-remove" style="margin-left: 2px;cursor:pointer;" id="" onclick="<?php if($j<=$quarter_db_row_count) {?>delete_period(<?php echo $quarter_sub_period_id[$i]; ?>)<?php } ?>"></span></td>
                        </tr>
                   
                     <?php } ?>
                         </tbody>
                         <tbody class="Monthly_table scrollContent_monthly" style="display:none;">
                    <?php for($i=0;$i<=11;$i++) { $j=$i+1;?>
                    
                        <tr>
                            <td style="display:none">
                                <input id="MONTHLY_sub_id_hidden-<?php echo $i; ?>" type="hidden" name="MONTHLY_sub_id_hidden-<?php echo $i; ?>" value="<?php echo $j>$monthly_db_row_count?'':$monthly_sub_period_id[$i]; ?>">
                            </td>
                            <td>
                                <?php echo $form->textField($model,"[$i]SHORT_NAME[MONTHLY]",array('class'=>'sub_period_name','id'=>"monthly-$i",'placeholder'=>"Month $j",'value'=>$j>$monthly_db_row_count?'':$monthly_sub_period_name[$i])); ?>                              
                            </td>
                            <td> 
                                <?php $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model,"attribute"=>"[$i]START_DATE[MONTHLY]",
                                                                    'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                                                    'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"START_DATE_MONTHLY-$i",'value'=>$j>$monthly_db_row_count?'':$monthly_sub_period_start_date[$i],'class'=>'date_width sub_date','placeholder'=>'Start Date')));
                            ?>                             
                            </td>
                            <td>
                                <?php $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model,"attribute"=>"[$i]END_DATE[MONTHLY]",
                                                                    'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                                                    'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"END_DATE_MONTHLY-$i",'value'=>$j>$monthly_db_row_count?'':$monthly_sub_period_end_date[$i],'class'=>'date_width sub_date','placeholder'=>'End Date')));
                            ?>                             
                            </td>
                             
                          <td class="delete_space" style="<?php if($j>$monthly_db_row_count){ ?>display:none<?php } ?>"><span title="Delete" class="icon-remove" style="margin-left: 2px;cursor:pointer;" id="" onclick="<?php if($j<=$monthly_db_row_count) {?>delete_period(<?php echo $monthly_sub_period_id[$i]; ?>)<?php } ?>"></span></td>
                        
                        </tr>
                   
                     <?php } ?>
                     </tbody>
                     <tbody class="Others_table scrollContent_others" style="display:none;">
                    <?php for($i=0;$i<=9;$i++) {$j=$i+1; ?>
                    
                        <tr>
                            <td style="display:none">
                                <input id="OTHERS_sub_id_hidden-<?php echo $i; ?>" type="hidden" name="OTHERS_sub_id_hidden-<?php echo $i; ?>" value="<?php echo $j>$others_db_row_count?'':$others_sub_period_id[$i]; ?>">
                            </td>
                            <td>
                                <?php echo $form->textField($model,"[$i]SHORT_NAME[OTHERS]",array('class'=>'sub_period_name','id'=>"others-$i",'placeholder'=>"Sub Period $j",'value'=>$j>$others_db_row_count?'':$others_sub_period_name[$i])); ?>                              
                            </td>
                            <td> 
                                <?php $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model,"attribute"=>"[$i]START_DATE[OTHERS]",
                                                                    'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                                                    'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"START_DATE_OTHERS-$i",'value'=>$j>$others_db_row_count?'':$others_sub_period_start_date[$i],'class'=>'date_width sub_date','placeholder'=>'Start Date')));
                                ?>                             
                            </td>
                            <td>
                                <?php $this->widget('zii.widgets.jui.CJuiDatePicker',array('model'=>$model,"attribute"=>"[$i]END_DATE[OTHERS]",
                                                                    'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                                                    'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"END_DATE_OTHERS-$i",'value'=>$j>$others_db_row_count?'':$others_sub_period_end_date[$i],'class'=>'date_width sub_date','placeholder'=>'End Date')));
                            ?>                             
                            </td>
                             
                          <td class="delete_space" style="<?php if($j>$others_db_row_count){ ?>display:none<?php } ?>"><span title="Delete" class="icon-remove" style="margin-left: 2px;cursor:pointer;" id="" onclick="<?php if($j<=$others_db_row_count) {?>delete_period(<?php echo $others_sub_period_id[$i]; ?>)<?php } ?>"></span></td>
                        
                        </tr>
                    
                     <?php } ?>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td style="padding-bottom:10px;padding-left: 10px;padding-right: 10px;">
              <table class="tbl_btn" id="table_bottom_bg">
                                  <tr>
                                       <td>
                                           <img title='Add Rows' rel="sub_table+2" id='clone_button' src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/icon_plus.png" style='cursor:pointer;float:right;margin-right:10px;padding-top: 5px;'>  
                                                  <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"button",'size'=>'small', 'label'=>$model->isNewRecord ? $Getlabelname->Get_Labelname_Fnc("103") : $Getlabelname->Get_Labelname_Fnc("181"),'id'=>"btn_Save",'icon'=>'icon-thumbs-up','htmlOptions'=>array('style'=>'float:right;margin-right:5px;','submit'=>array('Year_n_period/savedetails')))); ?>            
                                                    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"button",'size'=>'small', 'label'=>$model->isNewRecord ? $Getlabelname->Get_Labelname_Fnc("104") : $Getlabelname->Get_Labelname_Fnc("104"),'id'=>"btn_Reset",'icon'=>'icon-refresh','htmlOptions'=>array('style'=>'float:right;margin-right:5px;','onclick'=>"js:reset()"))); ?>            
                                                      <input id="TotRowCount_Quarterly" type="hidden" name="TotRowCount_Quarterly" value="3"> 
                                                      <input id="TotRowCount_Monthly" type="hidden" name="TotRowCount_Monthly" value="11"> 
                                                      <input id="TotRowCount_Others" type="hidden" name="TotRowCount_Others" value="9"> 
                                        </td>
                                   </tr>
              </table>  
            </td>
        </tr>
    </table>
 
<?php $this->endWidget(); ?>

</div><!-- form -->