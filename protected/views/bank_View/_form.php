<?php
//Created on : Jan 6, 2014
//    Author     : Nyni M
//    Purpose    : Create,Update Bank and Branch details.
////if(isset($_GET['iframe'])){
////   $is_iframe ='1';
?>
<!--time out for success and failure messages-->

<!----- time out end here---------->
<?php
if($model->isNewRecord) {  $bank_id="";}
else
{
    
//    echo $model->ID;
//   echo "<h1>".$bank_id."</h1>";
}
/* @var $this Bank_ViewController */
/* @var $model Bank_View */
/* @var $form CActiveForm */
?>
<?php   $Getlabelname=new Get_Labelname_Cls();  ?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom_styles/bank_style.css" /> </link>  
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/custom_jquery/validation_v1.js" type="text/javascript"></script>

<script>
    
/*********** message timeout************/
  setTimeout(function() {                  
    $('.error_red').fadeOut('fast');       
}, 2000);                                  
                                            
setTimeout(function() {                     
    $('.success_blue').fadeOut('fast');     
}, 2000);    
    
    
/*****************country autocomplete direct coming************/


   $("#COUNTRY").bind('focus',function()
   
    {
            $(this).autocomplete("search");
           
               
    });
 /****************************************************************/         

/**************for additional bank adding through popup***********/    
      function openalert1()
    
        {

           $("#data").show(); 
           $("#mydialog1").dialog("widget").find(".ui-dialog-titlebar").hide();   
           $("#mydialog1").dialog("open");  

         } 
 /*****************/
 /***************additional barnch/bank information through popup*************/  
      function openalert2()
      
       {

        $("#data1").show(); 
        $("#mydialog2").dialog("widget").find(".ui-dialog-titlebar").hide();   
        $("#mydialog2").dialog("open");  
       
       } 
   /***********validation for popup bank information***********/ 
   
   
    function validatepopup()
      {
 
       var popsname=$('#POPSHORT_NAME').val();
       var popname=$('#POPNAME').val();
   
  
       $('#popupname').val(popname);

              if(popsname=="")
              {
                GetStaticAlert("20095");
                $('#POPSHORT_NAME').focus();
                return false;
              }
              if(popsname!="")
              {
                var snameretval=specialcharactervalidation(popsname);
                    if(snameretval==false)
                     {
                       GetStaticAlert("20114");
                       $('#POPSHORT_NAME').focus();
                       return false;
                     }   
               }
               if(popname=="")
               {
               GetStaticAlert("20096");
               $('#POPNAME').focus();
               return false;
               }

   
      $("#user-form").submit();
  
      return true;
      }
      
       /***********validate popup additional branch information***********/   
   function validatepopup1()
   {
   var count=$('#totcnt').val(); 
   var j=1;
       for(var i=0;i<count;i++)
       {
       
  
        var name=$('#NAME'+i).val();
        var wef=$('#WEF'+i).val(); 
        var wet=$('#WET'+i).val(); 

  
        
        today = new Date();
        today.setHours(0,0,0,0)

             
  
        var todays = new Date();
        var dd = todays.getDate();
        var mm = todays.getMonth()+1; //January is 0!

        var yy = todays.getFullYear();

        if(dd<10){dd='0'+dd} if(mm<10){mm='0'+mm} todays =dd+'/'+mm+'/'+yy;

         var wefDate=  wef.split("/");
         userwefDate = new Date(wefDate[2], wefDate[1] -1, wefDate[0]); 

         var wetDate = wet.split("/");
         userwetDate = new Date(wetDate[2], wetDate[1] -1, wetDate[0]); 
    
   


            if(userwefDate>today)
                {
                    if(name=="")
                     {
                     msgid = j;  
                     GetDynamicAlert("20097",msgid);
                     $('#NAME'+i).focus();
                     return false;
                     }
                }
                if(userwetDate>today)
               {
                    if(name=="")
                     {
                     msgid = j;  
                     GetDynamicAlert("20097",msgid);
                     $('#NAME'+i).focus();
                     return false;
                     }
               }
                if(wef!="")
                {
                    var wefretval=ValidateDate(wef);
                    if(wefretval==false)
                    {
                    msgid = j;  
                    GetDynamicAlert("20098",msgid);
                    return false;
                    }

                }
    
                if(wet!= "")
                {

                    var wetretval=ValidateDate(wet);
                    if(wetretval==false)
                    {
                    msgid = j;  
                    GetDynamicAlert("20099",msgid);
                    return false;
                    }

                }
                if((wef!= ""))
                {
                    if( userwefDate <today)

                    {

                    msgid = todays+alertformat+j;  
                    GetDynamicAlert("20100",msgid);
                    return false;  
                    }  

                }
                if((wet!= ""))
                {

                   if( userwetDate < today)

                   {
                    msgid = todays+alertformat+j;  
                    GetDynamicAlert("20101",msgid);
                    return false;  
                   }  

                }
               if(((wef!= "")) && ( (wet!= "")))
                {
                   if(userwefDate  > userwetDate)
                    {
                    msgid = j;  
                    GetDynamicAlert("20102",msgid);
                    return false;  
                    } 
               }
               j++;
        }
        $("#mydialog2").dialog("close");
 
   return true;
      }  
      /*---closing bank popup--*/
    function closepopup()
    {
  
     $("#mydialog1").dialog("close");
     $('#createbank').hide();
        
    }
/*---closing Branch - Additional Information popup--*/
    function closepopup1()
    {
     $("#mydialog2").dialog("close");
    }

 
      $(document).ready(function()
      
      {
                $('#createbank').hide();
          
           /**********for Bank autocomplete**********/
      
                $("#MBNAME").bind('focus',function()
                {
                  $(this).autocomplete("search");
                });
             /**********for Country autocomplete**********/    
                $("#COUNTRY").bind('focus',function()
                {
                 $(this).autocomplete("search");
                });

                $("#MBNAME").change(function()
                 {
                   var id=$('#mbid').val();
                   var value=$('#MBNAME').val();

                      if(value=="")
                      {
                      $('#createbank').hide();
                      }
                 });
            /*******************bank auto complete***************/   
            $("#MBNAME").autocomplete( {   
             minLength: 0,

             source: function( request, response ) {

             $.ajax({
        
   
       
            url: "<?php echo Yii::app()->request->baseUrl; ?>/index.php/Bank_View/MbAutocomplete",
            type: "POST",
            data:{term:request.term},
            dataType: "json",
       
            success: function( data ) {

             if(data.length==1) 
             { 
               var value=$("#MBNAME").val();
               if(value!="")
               {
                   $("#MBNAME").autocomplete("close");
                    $('#createbank').show();
                    $('#input').text("Add"+" "+value);
                    $('#POPSHORT_NAME').val(value);

               }


            }

           else 

           {
               $('#createbank').hide();

               response( $.map( data, function( item ) {
                  // console.log(item.label);

                   return {
                       label: item.label,
                       value: item.label,
                       id:item.id,
                       //id:item.id,
                   }


               }));
               }
           },
             

    });
    
},
 select: function(event, ui) {
          
               $("#mbid").val(ui.item.id);
             },
       
                     
       });     


      var popsval=$('#pops').val();
      if((popsval==1)||(popsval==2))
          {
            
          $('#mb').show();
          $('#banklab').hide();
          $('#branchlab').hide();
          $('#banklab1').show();
          $('#branchlab1').show();   
          }
          
/**************validation start her******************/       
  $("#save").click(function()
   {
  
       var bankdisplay=($('#mb:hidden').length);

      /**** setting countryid from autocolumn*************/          
       var countryid=$('#countryid').val(); 

       var countryname=$('#COUNTRY').val(); 

       var mbid=$('#mbid').val(); 

       var sname=$('#SHORT_NAME').val();
       var name=$('#BNAME').val();

       var tphone=$('#TELEPHONE').val();
       var fax=$('#FAX').val();
       var email=$('#EMAIL').val();
       var url=$('#URL').val();
       var cperson=$('#CONTACT_PERSON').val();
       var add1=$('#ADDRESS1').val();
       var add2=$('#ADDRESS2').val();
       var add3=$('#ADDRESS3').val();
       var add4=$('#ADDRESS4').val();


    
        if((bankdisplay==0)&&(mbid==""))
         {

          GetStaticAlert("20103");
          $('#MBNAME').focus();
          return false;    
         }
        if(sname=="")
         {

          GetStaticAlert("20104");
          $('#SHORT_NAME').focus();
          return false;
         }
        if(sname!="")
         {
            var snameretval=specialcharactervalidation(sname);
            if(snameretval==false)
               {
                GetStaticAlert("20114");
                $('#SHORT_NAME').focus();
                return false;
               }   
          }
        if(name=="")
          {

        GetStaticAlert("20105");
        $('#NAME').focus();
        return false;
         }

     if(tphone!="")
        {
       
            var tphoneretval=phonevalidation(tphone);

           if(tphoneretval==false)
             {

            GetStaticAlert("20107");
            $('#TELEPHONE').focus();
            return false;
             }
            

            var y=tphone.substr(11,1);
            var z=tphone.substr(22,1);
            var r=tphone.length;
            if((y=="," && z=="") || ((r>11) && y!=","))                         
             {   

                GetStaticAlert("20107");
                $('#TELEPHONE').focus();
                return false;
             }

                         
       }
      if(fax!="")
       {
       
            var tfaxretval=faxvalidation(fax);
            if(tfaxretval==false)
            {

                GetStaticAlert("20108");
                $('#FAX').focus();
                return false;
            }
            var y=fax.substr(10,1);
            var z=fax.substr(20,1);
            var r=fax.length;
            if((y=="," && z=="") || ((r>10) && y!=","))                         
            {   

                GetStaticAlert("20108");
                $('#FAX').focus();
                return false;
             }

                      
      }
      if(email!="")
       {
            var emretval=emailvalidation(email);
            if(emretval==false)
                {

                GetStaticAlert("20109");
                $('#EMAIL').focus();
                return false;
                }
       }
        if(url!="")
            {
                var turlretval=urlvalidation(url);
                 if(turlretval==false)
                     {
                 GetStaticAlert("20110");
                 $('#URL').focus();
                 return false;

                     }

            }
   /************for passing branch more information data to controller************/    
       var count=$('#totcnt').val();
   
    
        var flexid=[];
        var miname = []; 
        var miwef=[];
        var miwet=[];
        var flex_up_id=[];
        for(var i=0;i<count;i++)
         { 

           flexid.push( $('#flexid'+i).val() );    
           miname.push( $('#NAME'+i).val() );    
           miwef.push( $('#WEF'+i).val() ); 
           miwet.push( $('#WET'+i).val() ); 
           flex_up_id.push( $('#flex_up_id'+i).val() ); 



         }  
       var upbranchid=$('#upbranchid').val();
      
    
       $.post("<?php echo $this->createUrl('Bank_View/branchmoreinfn')?>", {flex_up_id:flex_up_id,upbranchid:upbranchid,countryid:countryid,countryname:countryname,mbid:mbid,sname:sname,name:name,tphone:tphone,fax:fax,
           email:email,url:url,cperson:cperson,add1:add1,add2:add2,add3:add3,add4:add4,flexid:flexid,count:count,miname:miname,miwef:miwef,miwet:miwet}, function(data){ 
		
                if(data=="20081")
                       {
                        
                     
                       window.location.href="<?php echo $this->createUrl('bank_view/create')?>";
                        
                       return false;
                       }
                       if(data=="20085")
                       {
                       location.reload();

                       return false;
                       }
                       if(data=="20111")
                       {
                           
                            msgid= sname;  
                            GetDynamicAlert("20111",msgid);
                       $('#SHORT_NAME').focus();
                       return false;
                       }
                       if(data=="20113")
                       {
           
                           msgid= name; 
                            GetDynamicAlert("20113",msgid);

                       $('#SHORT_NAME').focus();
                       return false;
                       }
                       if(data=="2011120113")
                       {
                           
                            
                             msgid = sname+alertformat+name;  
                            GetDynamicAlert("20112",msgid);
                       $('#NAME').focus();
                       return false;
                       }
               
	});
   
 
    
 });
  });
    
</script>
<?php 

$countryid="";
if(isset($_REQUEST['nID']))
{
    $mbid=$_REQUEST['nID'];
}
 if(!isset($_REQUEST['nID']))
 {
 $mbid="";
 }
 if(isset($model->ID))
 {
 $mbid=$model->ID;
 }
//echo $_REQUEST['pop'];
//$pops=$_REQUEST['pop'];
 if((isset($_REQUEST['pop'])==1)||(isset($_REQUEST['pop'])==2))
 {?>
 <input type="hidden" value="<?php echo $_REQUEST['pop'];?>" id="pops" name="pops">   
<?php }
?>
 
<?php if(Yii::app()->user->hasFlash('success')):?>
 <div class="msgouter">
        <div class="success_blue"> <div class="success_blue_icon"></div>
            <div class="success_blue_msg">
                <?php echo Yii::app()->user->getFlash('success'); ?>
            </div>
        </div>

 </div>


        <?php elseif(Yii::app()->user->hasFlash('Error')):?>
  <div class="msgouter">
        <div class="error_red"> <div class="error_red_icon"></div>
            <div class="error_red_msg">
            <?php echo Yii::app()->user->getFlash('Error'); ?>
            </div>
        </div>
  </div>

<?php endif; 
?>

  
<?php if($model->ID=="")
{?>
<div  id="patternDiv">

</div>

<?php }?>

<?php
/*****************wdget for bank adding through popup************/

$this->beginWidget('zii.widgets.jui.CJuiDialog',
                      array( 'id'=>'mydialog1',
                             // additional javascript options for the dialog plugin
                             'options'=>array(                                                  
                                                'hide' => 'explode',
                                                'autoOpen'=>false,
                                                'modal'=>true,
                                                'width'=>400,
                                                                                           
                                               
                                             ),
                            ));

?>

 <!--   *************  bank adding through popup *********************-->
      
      <?php $form = $this->beginWidget('CActiveForm', array(
     'id'=>'user-form',
     //'enableAjaxValidation'=>true,
     'enableClientValidation'=>false,)); ?>
      
     <div id="data" style="display:none">
      <div class="note"> 
      <div class="labelImage"></div>
        <div class="LabelMsg">
            
            <p><?php echo  $Getlabelname->Get_Labelname_Fnc("137");?></p>
            
        </div> 
       </div>
         
         <img title="Close" src="<?php echo Yii::app()->request->baseUrl; ?>/images/cross.png" class="detailseditbtn" onclick="closepopup();" id="detailseditbtn-1">
         <br><br>
    <table border="2" class="grid_insert_table" style="width:366px !important;">
       
        <tbody> 
        <thead>
             <th>
            <th>&nbsp;</th>
       </thead>
       <tbody>
            <tr class="spaceUnder"><td></td></tr>
            <tr  class="spaceUnder"><td class="margin1">
            <?php echo  $Getlabelname->Get_Labelname_Fnc("105");?>
            <?php //echo $form->labelEx($model,'SHORT_NAME'); ?></td>
              <td class="padding-left-text-left-small" style="text-align:left;">
            
            <?php echo $form->textField($model,'SHORT_NAME',array('size'=>30,'maxlength'=>30,"class"=>"margintxtsn","id"=>"POPSHORT_NAME")); ?>
            
              </td></tr>
        
              <tr class="spaceUnder"><td class="margin1"> <?php echo  $Getlabelname->Get_Labelname_Fnc("106");?><?php //echo $form->labelEx($model,'NAME'); ?></td>
                  <td class="padding-left-text-left-small"><?php echo $form->textField($model,'NAME',array('size'=>60,'maxlength'=>120,"class"=>"margintxt","id"=>"POPNAME")); ?></td></tr>
        
               <tr>
                   <td></td>
             <tr  id="table_bottom_bg">
                 <td colspan="1">&nbsp</td>	
                 <td align="right" id="testtdright" class="tabular_submit_padding">
                <input type="hidden" value=1 id="pop" name="pop">
                <input type="hidden" name="popupname" id="popupname" value="">
                <input type="hidden" name="rrr" id="rrr" value="<?php echo $model->ID;?>">
                 <?php // echo CHtml::hiddenField('bank_idup' , $model->ID, array('id' => 'hiddenInput')); ?>
           
                <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"button",'size'=>'small', 'label'=>$model->isNewRecord ? "Submit" : "Submit",'id'=>'popupsave','icon'=>'icon-thumbs-up','htmlOptions'=>array('onclick'=>'validatepopup();'))); ?>                    
                <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"button",'size'=>'small', 'label'=>$model->isNewRecord ? "Close" : "Close",'id'=>'close','icon'=>'icon-remove','htmlOptions'=>array('onclick'=>'closepopup();'))); ?> </td>                   
              </tr>
           </tbody>
        </table>
       
    </div>
           <?php $this->endWidget(); ?>
      
       <?php
            $this->endWidget('zii.widgets.jui.CJuiDialog');    
       ?>

<!--   ********************************************************************* -->
<?php
/*****************wdget  additional branch information through popup************/

$this->beginWidget('zii.widgets.jui.CJuiDialog',
                      array( 'id'=>'mydialog2',
                             // additional javascript options for the dialog plugin
                             'options'=>array(                                                  
                                                'hide' => 'explode',
                                                'autoOpen'=>false,
                                                'modal'=>true,
                                                'width'=>610,
                                                                                            
                                               
                                             ),
                            ));

?>

<!------for additional branch information---------------->
      
      <?php /*$form = $this->beginWidget('CActiveForm', array(
     'id'=>'user-moreinfnform',
     'enableAjaxValidation'=>true,
     'enableClientValidation'=>false,));*/ ?>

         
    <!---------------more information update case****************---------->

<form method="POST" name="user-moreinfnform" id="user-moreinfnform" action="<?php echo Yii::app()->request->baseUrl; ?>/index.php/Bank_View/Create"> 
     <div id="data1" style="display:none">
       <div class="note"> 
         <div class="labelImage"></div>
            <div class="LabelMsg">
            
<!--            <p>Branch - Additional Information </p>-->
        <p><?php echo  $Getlabelname->Get_Labelname_Fnc("142");?></p>
            </div> 
        </div>
         <img title="Close" src="<?php echo Yii::app()->request->baseUrl; ?>/images/cross.png" class="detailseditbtn1" onclick="closepopup1();" id="detailseditbtn-1">
         <br><br>
         <table border="2" class="grid_insert_table">
       
            <tbody> 
            <thead>
            <th>
            <th>&nbsp;</th>
             <th></th>
             </thead>
        
      
             <tbody>
                  <tr class="spaceUnder"> 
                       <td class="marginsname"></td>
                       <td><span class="margintxt"></span></td>
                       <td><span class="wefwet"><?php echo  $Getlabelname->Get_Labelname_Fnc("126");?></span>
                           <span class="wefwet"><?php echo  $Getlabelname->Get_Labelname_Fnc("127");?></span>
                       </td>
                      
                  </tr>
                 
            
              <?php
              /*************in case of update***********/
               $today=date('d/m/Y');
              $condition="DFCTG_DEFINITION_TYPE='BANK_FLEX'";
              $getbankflex=Basic_definition::model()->findAll($condition);
              $count = count($getbankflex);
              $flexup=array();$flex_value_up=array();$wef=array();$wet=array();
              
              if(($model->ID!="")&&($bank_id!=""))
                {
                  $today=date('d/m/Y');
                  
               $getflexdetaup = Yii::app()->db->createCommand()
               ->select('ID,FLEX,FLEX_VALUE,WEF,WET,BANK_ID')  
               ->where("BANK_ID=:bank_id",array(':bank_id'=>$bank_id)) 
               ->from('BANK_FLEX')
               ->queryAll();
               
               $count_up=count($getflexdetaup);
              
               //for($i=0;$i<=$count;$i++) {  echo "<h1>".$i."</h1>";  }
               for($i=0;$i<$count;$i++) 
                 {  
                    $flex_up_id[$i]="";
                    $flex_value_up[$i]="";
                    $flexup[$i]="";
                    $wef[$i]=$today;
                    $wet[$i]="";
                 }
                 
                 foreach ($getflexdetaup as $key => $value) {
                     
                      $flex_up_id[$key]=$value['ID'];
                     
                      $flex_value_up[$key]=$value['FLEX_VALUE'];
                      $flexup[$key]=$value['FLEX'];            
                      $wef[$key]=$value['WEF'];
                      $wet[$key]=$value['WET'];
                     
                      if($wef[$key]=="")
                      {
                         echo $wef[$key];
                      $wef[$key]=$today;
                      }
                     else 
                         {
                          $wef[$key]=date('d/m/Y',strtotime($value['WEF']));
                         }
                         if($wet[$key]=="")
                         {
                            $wet[$key]=""; 
                         }
                      else {
                      $wet[$key]=date('d/m/Y',strtotime($value['WET']));
                      }
                      
                 }
                  
                  
                    
             }
              
              
             
              foreach ($getbankflex as $key => $record) {
                 ?>
            <tr  class="spaceUnder">
            <td class="marginsname">
                
                
            <?php  
         
             
            $popid=array();
            $popid[$key]=$record->DESCRIPTION;
            
             if(($model->ID=="")&&($bank_id==""))
                {
                 
            $flex_up_id[$key]="";
            $flex_value_up[$key]="";
            $wef[$key]=$today;
            $wet[$key]="";
                }
                

            
            echo  $record->DESCRIPTION; ?>
              
              </td>
              <input type="hidden" name="totcnt" id="totcnt" value="<?php echo $count;?>">   
              <input type="hidden" name="<?php echo $key;?>flexid" id="flexid<?php echo $key;?>" value="<?php echo $popid[$key];?>">
              <input type="hidden" name="<?php echo $key;?>flex_up_id" id="flex_up_id<?php echo $key;?>" value="<?php echo $flex_up_id[$key];?>">   

             <td>
            <?php
     
            echo $form->textField($model,"[$key]NAME",array('size'=>60,'maxlength'=>120,"class"=>"margintxt","id"=>"NAME$key","value"=>$flex_value_up[$key])); ?></td>
           <td><?php 
          
            $this->widget('zii.widgets.jui.CJuiDatePicker',array("name"=>"[$key]WEF",'value'=>$wef[$key],
                                        'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                        'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"WEF$key",'class'=>'WEF','style'=>"width:92px;height:25px",'rel'=>'WEF')));?></td>
           <td><?php $this->widget('zii.widgets.jui.CJuiDatePicker',array("name"=>"[$key]WET",'value'=>$wet[$key] ,
                                        'options' => array('dateFormat'=>'dd/mm/yy','changeMonth' => 'true','changeYear' => 'true','constrainInput' => 'true',		
                                        'duration'=>'fast','showAnim' =>'slide'),'htmlOptions' => array('id'=>"WET$key",'class'=>'WET','style'=>"width:92px;height:25px",'rel'=>'WET')));?></td>
            
            </tr>
   <?php  }  ?>
           

            <tr>
           <td></td>
           <tr  id="table_bottom_bg">
            <td colspan="1">&nbsp</td>	 <td colspan="1">&nbsp</td>	
            <td align="right" id="testtdright" class="tabular_submit_padding">
                
                   

                 <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"button",'size'=>'small', 'label'=>$model->isNewRecord ? "Submit" : "Submit",'id'=>'popupsave','icon'=>'icon-thumbs-up','htmlOptions'=>array('onclick'=>'validatepopup1();'))); ?>                    

                 <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"button",'size'=>'small', 'label'=>$model->isNewRecord ? "Close" : "Close",'id'=>'close','icon'=>'icon-remove','htmlOptions'=>array('onclick'=>'closepopup1();'))); ?> </td>                   
           </tr>
      </tbody>
   </table>
       
 </div>
</form>




          
      
       <?php
            $this->endWidget('zii.widgets.jui.CJuiDialog');    
       ?>



<!----for alert popup message--->
<?php
require_once("popupdialog.php");

if(isset($_REQUEST['popname']))
{
    $popvalname=$_REQUEST['popname'];
}
else 
{
   $popvalname="";
}

if(isset($model->NAME))
{
    $popvalname=$model->NAME;
}
 

?>
<?php
                  // $upID="";
                   $upSHORT_NAME="";
                   $upNAME="";
                   $upADDRESS1="";
                   $upADDRESS2="";
                   $cityval="";
                   $pinval="";
                   $countryval="";
                   $upCONTACT_PERSON="";
                   $upTELEPHONE="";
                   $upFAX="";
                   $upEMAIL="";
                   $upURL="";
                  /**********update branch************/
                  
if(($model->ID!="")&&($bank_id!=""))
{
              $condition="ID=$bank_id and BANK_ID=$model->ID";
              $getbankbranch=Bank_Branch_View::model()->findAll($condition);
               foreach ($getbankbranch as $key => $record) 
                   {
                   $upID=$record->ID;
                   $upSHORT_NAME=$record->SHORT_NAME;
                   $upNAME=$record->NAME;
                   $upADDRESS1=$record->ADDRESS1;
                   $upADDRESS2=$record->ADDRESS2;
                   $upADDRESS3=$record->ADDRESS3;
                   $upADDRESS4=$record->ADDRESS4;
                   $upCOUNTRY=$record->COUNTRY;

                   
                   $upCONTACT_PERSON=$record->CONTACT_PERSON;
                   $upTELEPHONE=$record->TELEPHONE;
                   $upFAX=$record->FAX;
                   $upEMAIL=$record->EMAIL;
                   $upURL=$record->URL;
                   $upBANK_ID=$record->BANK_ID;
                   $cityval=$upADDRESS3;
                   $pinval=$upADDRESS4;
                   $countryval=$upCOUNTRY;
                   }

                   
}
                ?>

<!----alert popup message end here--->
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bank--view-form',
	'enableAjaxValidation'=>false,
)); ?>
    
    
    
    


    
        <table border="2" class="grid_insert_table">
           <tbody> 
           <thead>
                <th>
                <th>&nbsp;</th>
                    <th>&nbsp;</th>
                     <th>&nbsp;</th>
           </thead>
           <tbody>
             <tr class="spaceUnder"><td></td></tr>
        
             <tr class="spaceUnder" id="mb">
                 <td class="margin1">
            <?php echo  $Getlabelname->Get_Labelname_Fnc("114");?>
                    <!--<a class="field_level_help" href="#Bank"><img src="/HR5_DEV_APP/images/diamond-icon.png" width="8" height="8" class="helpimage"></a>-->
                </td>
                <td class="padding-left-text-left-small">
                    <div  class="input-append">
                    <input type="text" autocomplete="on"  value="<?php echo $popvalname;?>" class="mab" id="MBNAME" name="MBNAME" style="height:25px;width:240px;" class="form-control">
                    <a class="field_level_help_on_txt" href="#Bank">
                    <span class="add-on" style="width:3px !important"></span>
                     </a>
                    </div>
               </td>
        
              <td><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/icon_plus.png" class="popup" title="Add Bank" id="bankpopup" onclick="openalert1()"></td>
              <td> <a class="field_level_help" href="#Add_Bank">
                   <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8" class="helpimage"></a></td>
            </tr> 
            <tr id="createbank" class="spaceUnder"><td class="margin1"></td>
               <td class="padding-left-text-left-small"><div class="margintxt" onclick="openalert1()" id="input" contenteditable  ></div>
            
            </tr>
      
            <tr  class="spaceUnder">
                <td class="margin1">

                <span id="banklab1"><?php echo  $Getlabelname->Get_Labelname_Fnc("124");?></span>

    <!--             <a class="field_level_help" href="#Branch Short Name"><img src="/HR5_DEV_APP/images/diamond-icon.png" width="8" height="8" class="helpimage"></a>-->
                <?php //echo $form->labelEx($model,'SHORT_NAME'); ?>
                </td>
                <td class="padding-left-text-left-small" style="text-align: left !important">
                    <div class="input-append">
                     <?php echo $form->textField($model,'SHORT_NAME',array('size'=>30,'maxlength'=>30,"class"=>"margintxtsn","value"=>$upSHORT_NAME,"id"=>"SHORT_NAME")); ?>
                       <a class="field_level_help_on_txt" href="#Branch_Short_Name">
                       <span class="add-on" style="width:3px !important"></span>
                       </a>
                   </div>


               </td>
             
            </tr>
        
            <tr class="spaceUnder"><td class="margin1">
              
            <span id="branchlab1"><?php echo  $Getlabelname->Get_Labelname_Fnc("123");?></span> 
                 <!--<a class="field_level_help" href="#Branch"><img src="/HR5_DEV_APP/images/diamond-icon.png" width="8" height="8" class="helpimage"></a>-->
             </td>
             <td class="padding-left-text-left-small">
                <div class="input-append">
                 <?php echo $form->textField($model,'NAME',array('size'=>60,'maxlength'=>120,"class"=>"margintxt","id"=>"BNAME","value"=>$upNAME)); ?>
                  <a class="field_level_help_on_txt" href="#Branch ">
                  <span class="add-on" style="width:3px !important"></span>
                  </a>
                </div> 
             </td>
            
          </tr>
        
          <tr id="three">
            <td class="margin1">
                  <?php echo  $Getlabelname->Get_Labelname_Fnc("107");?>
            </td>
            <td class="padding-left-text-left-small">
              <?php echo $form->textField($model,'ADDRESS1',array('size'=>60,'maxlength'=>80,"class"=>"margintxt","id"=>"ADDRESS1","value"=>$upADDRESS1)); ?></td>        
         </tr>
        
          <tr id="three"><td class="margin1"><?php echo $form->labelEx($model,''); ?></td>
              <td class="padding-left-text-left-small"><?php echo $form->textField($model,'ADDRESS2',array('size'=>60,'maxlength'=>80,"class"=>"margintxt","id"=>"ADDRESS2","value"=>$upADDRESS2)); ?></td></tr>
        
          <tr id="three"><td class="margin1"><?php echo $form->labelEx($model,''); ?></td>
             <td class="padding-left-text-left-small"><?php echo $form->textField($model,'ADDRESS3',array('size'=>60,'maxlength'=>80,"class"=>"margintxt","placeholder"=>"<City>","id"=>"ADDRESS3","value"=>$cityval)); ?></td></tr>
        
	  <tr id="three"><td class="margin1"><?php echo $form->labelEx($model,''); ?></td>
             <td class="padding-left-text-left-small"><?php echo $form->textField($model,'ADDRESS4',array('size'=>60,'maxlength'=>80,"class"=>"margintxt","placeholder"=>"<Postal Code>","id"=>"ADDRESS4","value"=>$pinval)); ?></td></tr>
        
           <tr class="spaceUnder" id="three"><td class="margin1"><?php //echo $form->labelEx($model,'COUNTRY'); ?>
            
             </td>
	     <td  class="padding-left-text-left-small">
           
                <?php               

                                    $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                                            'model'=>$model,
                                            'id'=>'COUNTRY',
                                            'name'=>"COUNTRY", 
                                            'value'=>$countryval,
                                            'source'=>$this->createUrl('Bank_View/CountryAutocomplete'),                                   
                                            'options'=>array(
                                             'minLength'=>'0', 
                                             'select'=>'js:function( event, ui ) {
                                                          //$("COUNTRY").val(ui.item.id);
                                                           $("#countryid").val(ui.item.id);       
                                                       }',

                                              'change'=>'js:function( event, ui ) {                                           
                                                        if (!ui.item) {
                                                            $("#COUNTRY").val("");


                                                        }                                                
                                                }',                                        
                                            ),
                                            'htmlOptions'=>array(
                                                'style'=>'height:25px;width:240px;',
                                                "placeholder"=>"<Country>",
                                            ),
                                        ));                

                         ?>
        
             </td></tr>
        
        <tr class="spaceUnder"><td class="margin1"><?php //echo $form->labelEx($model,'CONTACT_PERSON'); ?>
            <?php echo  $Getlabelname->Get_Labelname_Fnc("109");?>
            </td>
            <td class="padding-left-text-left-small"><?php echo $form->textField($model,'CONTACT_PERSON',array('size'=>60,'maxlength'=>80,"class"=>"margintxt","id"=>"CONTACT_PERSON","value"=>$upCONTACT_PERSON)); ?></td></tr>
        
        <tr class="spaceUnder"><td class="margin1"><?php //echo $form->labelEx($model,'TELEPHONE'); ?>
              <?php echo  $Getlabelname->Get_Labelname_Fnc("110");?>
             </td>
	    <td class="padding-left-text-left-small"><?php echo $form->textField($model,'TELEPHONE',array('size'=>60,'maxlength'=>80,"class"=>"margintxt","id"=>"TELEPHONE","value"=>$upTELEPHONE)); ?></td></tr>
        
        <tr class="spaceUnder"><td class="margin1"><?php //echo $form->labelEx($model,'FAX'); ?>
            <?php echo  $Getlabelname->Get_Labelname_Fnc("111");?>
            </td>
           <td class="padding-left-text-left-small"><?php echo $form->textField($model,'FAX',array('size'=>60,'maxlength'=>80,"class"=>"margintxt","id"=>"FAX","value"=>$upFAX)); ?></td></tr>
        
        <tr class="spaceUnder"><td class="margin1"><?php //echo $form->labelEx($model,'EMAIL'); ?>
                <?php echo  $Getlabelname->Get_Labelname_Fnc("112");?>
            </td>
           <td class="padding-left-text-left-small"><?php echo $form->textField($model,'EMAIL',array('size'=>60,'maxlength'=>120,"class"=>"margintxt","id"=>"EMAIL","value"=>$upEMAIL)); ?></td></tr>
        
        <tr class="spaceUnder"><td class="margin1"><?php //echo $form->labelEx($model,'URL'); ?>
             <?php echo  $Getlabelname->Get_Labelname_Fnc("113");?>
            </td>
           <td class="padding-left-text-left-small"><?php echo $form->textField($model,'URL',array('size'=>60,'maxlength'=>100,"class"=>"margintxt","id"=>"URL","value"=>$upURL)); ?></td>

        </tr>
        <tr class="spaceUnder">
          <td class="margin1">
           </td>
           <td>
            <a onclick="openalert2()" class="moreinfo"><?php echo  $Getlabelname->Get_Labelname_Fnc("135");?></a>           

           </td>
           <td>
            <a class="field_level_help" href="#More_Info"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8" class="helpimage"></a>
           </td>
        </tr>
	<tr  id="table_bottom_bg">
              <td colspan="1">&nbsp</td>
             
              <td align="right" id="testtdright" class="tabular_submit_padding">
                <input id="countryid" type="hidden" name="countryid" value="<?php echo $countryid;?>">
                <input id="mbid" type="hidden" name="mbid" value="<?php echo $mbid;?>">
                <input id="upbranchid" type="hidden" name="upbranchid" value="<?php echo $bank_id;?>">
                   <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"reset",'size'=>'small','icon'=>'icon-refresh', 'label'=>$Getlabelname->Get_Labelname_Fnc("104"))); ?>
                <?php $this->widget('bootstrap.widgets.TbButton',array('buttonType'=>"button",'size'=>'small', 'label'=>$model->isNewRecord ? $Getlabelname->Get_Labelname_Fnc("103") : $Getlabelname->Get_Labelname_Fnc("103"),'id'=>'save','icon'=>'icon-thumbs-up')); ?>
             


            </td>
            <td>&nbsp</td>
            <td>&nbsp</td>
        </tr>
     </tbody>
 </table>
<?php $this->endWidget(); ?>
</div><!-- form -->