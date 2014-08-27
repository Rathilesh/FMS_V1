<?php
/* @var $this Entity_TypeController */
/* @var $model Entity_Type */
 //   Created on : May 11, 2014
//    Author     : Dheeraj Silish 
?>

<?php $Getlabelname=new Get_Labelname_Cls();    // showing label heading through hrlabel table
require_once("popupdialog.php");  // this is for alert window popup
?>

<style>  /* this class is using for submit button  alignment*/
    .btn_align{
     text-align:right !important;
     padding-top:5px !important; 
     padding-bottom: 5px !important;
     padding-right:5px !important;
    } 
 
.sorting_link{
  color:black !important;
}

.icon-remove{
  padding-left: 15px  !important;
  padding-right: 10px !important;
  background-position: -306px 0 !important;

}
</style>



<script>  /* This script using for autocomplete population when mouse click on the field */
  $(function(){
  	$(".ENTITY_TYPE_AUTOCOMPLETE").bind('focus',function(){
      $(this).autocomplete("search");
      });
  });
</script>


<!---- Code for Flash Messages---->
<script>
    setTimeout(function() {
        $('.error_red').fadeOut('slow');
    }, 5000); 

    setTimeout(function() {
        $('.success_blue').fadeOut('slow');
    }, 5000); 
</script>


<script>    // cloning last row while clicking plus button . 
$('document').ready(function(){
   
   $("#plus_button").click(function() { 

           var cloned = $('tbody#BDC>tr:last').clone();

            var oldcount=$('#TotRowCount').val();
        
            $('#TotRowCount').val((parseInt(oldcount)+1));
            var RowIndex = parseInt(oldcount)+1;
            var newIDSuffix = "*";
            cloned.find("input").each(function() {
               
                var id   = $(this).attr('id');
            
                var name = $(this).attr('name');
                
                name     = name.replace(/[0-9]/, newIDSuffix);
                id       = id.replace(/[0-9]/, newIDSuffix);
                name     = name.replace(/[0-9]/g, "");
                id       = id.replace(/[0-9]/g, "");
                name     = name.replace(newIDSuffix, RowIndex);
                id       = id.replace(newIDSuffix, RowIndex);
                $(this).attr('id', id);
                $(this).attr('name', name); 
            });
      cloned.insertAfter('tbody#BDC>tr:last').find('input:text').val("");              
     
    });   
});       
 // cloning last row while clicking plus button .    
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


    <?php 
	   if(isset($_POST['TotRowCount'])<>'')
	        {
	            $mastercount=$_POST['TotRowCount'];
	        }
	        else
	        {     
	            $mastercount=16;                      
	        }  

   //Sort Management 
        if(isset($_GET["sort"])) {  
          $sort_by=$_GET["sort"];
          switch ($sort_by) {
            case "location":
              $EntityType_sort = 'IS_LOCATION DESC';
              //echo "Location";              
              break;

            case "function":
              $EntityType_sort = 'IS_FUNCTION DESC';
              //echo "Function";              
              break;  

            case "position":
              $EntityType_sort ='IS_POSITION DESC';
              //echo "Position";             
              break;

            default:
             $EntityType_sort ='IS_LOCATION ASC';
             //echo "default";              
              break;
 
        }
      }
        else {
          $EntityType_sort =   'UPPER(IS_LOCATION) ASC';
           //$GetEntityTypeVal=ENTITY_TYPE::model()->findAll(array('order'=>"IS_LOCATION ASC")); 
        }



//echo $EntityType_sort;
// ---  fatching data from database 

      //  $criteria = new CDbCriteria;
        //$criteria->order = $EntityType_sort;
       $GetEntityTypeVal=ENTITY_TYPE::model()->findAll(array('order'=>"$EntityType_sort")); 

// -----

	?>	  

<!--  ---------------------------------------------------------------------------------------   -->
<script type='text/javascript'>  //null checking
  $(function(){  
    // alert('hello');
     $('#submitButton').click(function(){
       var row_count=$("#TotRowCount").val(); 
          for(var i=1; i<row_count;i++) {

    			 var entitytype=$("#ENTITY_TYPE"+i).val();
    			 var entitylevel=$("#ENTITY_LEVEL"+i).val();
         
    			  if(entitytype!="" || entitylevel!="")
    			  {
              msgparam = i+alertformat;
           
    			     if(entitytype==="")
               {
                     
                // alert("Entity Type cannot be blank on line ----"+i);
                 GetDynamicAlert('20881',msgparam);
                 return false;
                }

    	         if(entitylevel==="")
               {
                     
                 //alert("Level cannot be blank on line ----"+i);
                 GetDynamicAlert('20882',msgparam);
                 return false;
                }
            }
          }
        }
       );
 });  
</script>   
 <!-- //null checking -->
<!--   -------------------------------------------------------------------------------------------------- -->

<script>
function  DeleteEntityType(id)  
{

 /// alert(id);
 var url="<?php echo $this->createUrl('Entity_Type/Delete'); ?>";
      //alert('hi');
       $.ajax({  
               type: "POST",
               url: url,
               data:{id:id},
              success: function(data)
              { 
              alert('hi');
              if(data==20010)
                location.reload();
                // if(data===""){
                //  //GetStaticAlert('20569');
                //  //alert(1);
                // }
                // else {
                //     //GetStaticAlert('20570');
                //     //location.reload();
                //    // alert(2);
                // }
            
              }  
            });
}
  

</script>


<div class="form">
	<?php $form=$this->beginWidget('CActiveForm', array(
		 'id'=>'entity--type-form',
		 'enableAjaxValidation'=>false,
	)); ?> 

  <!-- ----------------Label Heading----------------------------------- -->
	<table class="grid_insert_table">
	  <thead> 
		<tr class="tbl_btn" id="">
			 <th width="200"><?php echo $Getlabelname->Get_Labelname_Fnc("280");?><a class="field_level_help" href="#Entity Type"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8" class="helpimage"></a></th>
			 <th width="200"><?php echo $Getlabelname->Get_Labelname_Fnc("281");?><a class="field_level_help" href="#Entity Level"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8" class="helpimage"></a></th>

			 <th colspan="3">
			 		<table>
			 			<tr>
			 				<th colspan="3" style="text-align:center !important">Applicable To</th>
			 			</tr>
			 	 		<tr>
			 				<th style="text-align:center !important">
                 <a class="sorting_link" title="click here for sorting" href="<?php Yii::app()->baseUrl ?>/HR5_DEV_APP/index.php/entity_type/create?sort=location" onclick="return confirm('Data which is not saved will be removed, Do you want to continue?')">
                  
                    Location
                     <a class="field_level_help" href="#location"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8" class="helpimage"></a>
                 </a>
              </th>

			 				<th style="text-align:center  !important">
                <a class="sorting_link" title="click here for sorting" href="<?php Yii::app()->baseUrl ?>/HR5_DEV_APP/index.php/entity_type/create?sort=function" onclick="return confirm('Data which is not saved will be removed, Do you want to continue?')">
                Function
                <a class="field_level_help" href="#function"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8" class="helpimage"></a>
                </a>
              </th>


			 				<th style="text-align:center !important">
                <a class="sorting_link" title="click here for sorting" href="<?php Yii::app()->baseUrl ?>/HR5_DEV_APP/index.php/entity_type/create?sort=position" onclick="return confirm('Data which is not saved will be removed, Do you want to continue?')">
                Position
                <a class="field_level_help" href="#position"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8" class="helpimage"></a>
                </a>
              </th>

			 			</tr> 
         </table>  <!-- ----------------Label Heading----------------------------------- -->

        </th> 
		</tr> 
    </thead>
	  <tbody id="BDC"> 

	   <?php   // -----------Data displaying here from database---------------------------
     for($i=1;$i<=16;$i++){

        $nEntitytypeid=array();                         
            if(isset($_POST['ENTITY_TYPE'][$i]['ID'])<>"")
            {              
               $nEntitytypeid[$i] =$_POST['ENTITY_TYPE'][$i]['ID'];               
            }
            else if(count($GetEntityTypeVal)>0 && isset($GetEntityTypeVal[$i-1]['ID'])!='')
            {                             
                 $nEntitytypeid[$i]=$GetEntityTypeVal[$i-1]['ID'];
            }
            else
            {
               $nEntitytypeid[$i]=$model->ID;
            }

        $vEntitytype=array();                         
            if(isset($_POST['ENTITY_TYPE'][$i]['ENTITY_TYPE'])<>"")
            {              
               $vEntitytype[$i] =$_POST['ENTITY_TYPE'][$i]['ENTITY_TYPE'];               
            }
            else if(count($GetEntityTypeVal)>0 && isset($GetEntityTypeVal[$i-1]['ENTITY_TYPE'])!='')
            {                             
                 $vEntitytype[$i]=$GetEntityTypeVal[$i-1]['ENTITY_TYPE'];
            }
            else
            {
               $vEntitytype[$i]=$model->ENTITY_TYPE;
            }   

        $nEntitylevel=array();                         
            if(isset($_POST['ENTITY_TYPE'][$i]['ENTITY_LEVEL'])<>"")
            {              
               $nEntitylevel[$i] =$_POST['ENTITY_TYPE'][$i]['ENTITY_LEVEL'];               
            }
            else if(count($GetEntityTypeVal)>0 && isset($GetEntityTypeVal[$i-1]['ENTITY_LEVEL'])!='')
            {                             
                 $nEntitylevel[$i]=$GetEntityTypeVal[$i-1]['ENTITY_LEVEL'];
            }
            else
            {
               $nEntitylevel[$i]=$model->ENTITY_LEVEL;
            }    

        $vEntitylocation=array();                         
            if(isset($_POST['ENTITY_TYPE'][$i]['IS_LOCATION'])<>"")
            {              
               $vEntitylocation[$i] =$_POST['ENTITY_TYPE'][$i]['IS_LOCATION'];               
            }
            else if(count($GetEntityTypeVal)>0 && isset($GetEntityTypeVal[$i-1]['IS_LOCATION'])!='')
            {                             
                 $vEntitylocation[$i]=$GetEntityTypeVal[$i-1]['IS_LOCATION'];
            }
            else
            {
               $vEntitylocation[$i]=$model->IS_LOCATION;
            }    

        $vEntityfunction=array();                         
            if(isset($_POST['ENTITY_TYPE'][$i]['IS_FUNCTION'])<>"")
            {              
               $vEntityfunction[$i] =$_POST['ENTITY_TYPE'][$i]['IS_FUNCTION'];               
            }
            else if(count($GetEntityTypeVal)>0 && isset($GetEntityTypeVal[$i-1]['IS_FUNCTION'])!='')
            {                             
                 $vEntityfunction[$i]=$GetEntityTypeVal[$i-1]['IS_FUNCTION'];
            }
            else
            {
               $vEntityfunction[$i]=$model->IS_FUNCTION;
            }  
            
        $vEntityposition=array();                         
            if(isset($_POST['ENTITY_TYPE'][$i]['IS_POSITION'])<>"")
            {              
               $vEntityposition[$i] =$_POST['ENTITY_TYPE'][$i]['IS_POSITION'];               
            }
            else if(count($GetEntityTypeVal)>0 && isset($GetEntityTypeVal[$i-1]['IS_POSITION'])!='')
            {                             
                 $vEntityposition[$i]=$GetEntityTypeVal[$i-1]['IS_POSITION'];
            }
            else
            {
               $vEntityposition[$i]=$model->IS_POSITION;
            }                              



     ?>


  		<tr>
  			<td>
  			   <!------- Autocomplete database field (Entity Type) when entering a alphabet ---------->
           <?php $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                                'model'=>$model,'attribute'=>"[$i]ENTITY_TYPE",
                                'id'=>"ENTITY_TYPE$i",
                                'name'=>"ENTITY_TYPE",
                                'source'=>$this->createUrl('Entity_Type/EntityType_AutoComplete'),                                   
                                'options'=>array(
                                  'minLength'=>'0', 
                                  'select'=>'js:function( event, ui ) {}',
                                  'change'=>'js:function( event, ui ) {                                           
                                                    if (!ui.item) {
                                                    $("#ENTITY_TYPE'.$i.'").val(""); 
                                                    }                                              
                                              } '                               
                                 ),
                               'htmlOptions'=>array('class'=>"ENTITY_TYPE_AUTOCOMPLETE",'value'=>$vEntitytype[$i]),
                              ));                
           ?>

  			</td>  <!--  Database field -->
  			<td> <?php echo $form->textField($model,"[$i]ENTITY_LEVEL",array('id'=>"ENTITY_LEVEL$i",'value'=>$nEntitylevel[$i])); ?> </td>
  			<td style="border:1px solid #e8e8e8"> <?php echo CHtml::activeCheckBox($model,"[$i]IS_LOCATION",array('size'=>30,'maxlength'=>30,'style'=>'width:100px','value'=>$vEntitylocation[$i],'checked'=>$vEntitylocation[$i]=='1'?'checked':'')); ?> </td>
  			<td style="border:1px solid #e8e8e8"> <?php echo CHtml::activeCheckBox($model,"[$i]IS_FUNCTION",array('size'=>1,'maxlength'=>1,'style'=>'width:100px','value'=>$vEntityfunction[$i],'checked'=>$vEntityfunction[$i]=='1'?'checked':'')); ?> </td>
  			<td style="border:1px solid #e8e8e8"> <?php echo CHtml::activeCheckBox($model,"[$i]IS_POSITION",array('size'=>1,'maxlength'=>1,'style'=>'width:100px','value'=>$vEntityposition[$i],'checked'=>$vEntityposition[$i]=='1'?'checked':'')); ?> 
            <!--  Database field -->
           <input id="<?php echo "Entity_ID".$i; ?>" type="hidden" name="<?php echo "Entity_Type[$i][ID]" ?>" value="<?php echo $nEntitytypeid[$i]; ?>">
         </td>

        <td>  <span style="<?php if($i>count($GetEntityTypeVal)){?>display:none<?php } ?>" title="Delete" class="icon-remove" id="btn_Delete_EntityType" onclick="DeleteEntityType(<?php echo $nEntitytypeid[$i];?>)"></span></td>
  			

  		</tr>
	   <?php } ?>
    </tbody> 



		<tr id="table_bottom_bg">
		 <td  colspan="6" class="btn_align" >
			<?php //echo CHtml::SubmitButton($model->isNewRecord ? 'Submit' : 'Submit',array('id'=>'submitButton','icon'=>'icon-thumbs-up')); ?>
       <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"clear",'size'=>'small','icon'=>'icon-refresh','label'=>$Getlabelname->Get_Labelname_Fnc("104"),'id'=>'reset')); ?>
      <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"submit",'size'=>'small', 'label'=>$model->isNewRecord ?$Getlabelname->Get_Labelname_Fnc("103") : $Getlabelname->Get_Labelname_Fnc("103"),'id'=>'submitButton','icon'=>'icon-thumbs-up',)); ?>
     
			 <img  src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/icon_plus.png"   
           title="Add Rows" width="16" height="16"  alt="" style="cursor: pointer;" id="plus_button"/></td>
      <input id="TotRowCount" type="hidden" name="TotRowCount" value="<?php echo $mastercount;?>">
		 </td> 
		</tr>
 

      <?php $this->endWidget(); ?>
    </table>

<?php

if(isset($_GET['manage'])==1)
    {
           echo '<script type="text/javascript">document.getElementById("ENTITY_TYPE_1_ENTITY_TYPE").focus();</script>';
    }
    else 
    {
       $count=count($GetEntityTypeVal);
       if($count>0)
        ?>
        <script type="text/javascript">
          $("#ENTITY_TYPE"+<?php echo $count+1;?>).focus();
        </script>
      <?php
           
    }

 //$this->endWidget(); ?>


</div><!-- form -->