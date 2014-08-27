<?php 


$data = array();
foreach($model as $m){  // loop to get the data (this is different from the complex way)
$data[] = $m->attributes;
}
//print_r($data);  

// the pagination widget with some options to mess


//exit;

if(Yii::app()->user->hasFlash('success')):?>
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

<style type="text/css">



ul.tsc_pagination { margin:1px 0; padding:0px; height:100%; overflow:hidden;  list-style-type:none; }
ul.tsc_pagination li { float:left; margin:0px; padding:0px; margin-left:5px; line-height:10px !important }
ul.tsc_pagination li:first-child { margin-left:0px; }
ul.tsc_pagination li a { color:black; display:block; text-decoration:none; padding:7px 10px 7px 10px; }
ul.tsc_pagination li a img { border:none; }
ul.tsc_paginationC li a { color:#707070; background:#FFFFFF; border-radius:3px; -moz-border-radius:3px; -webkit-border-radius:3px; border:solid 1px #DCDCDC; padding:3px; }
ul.tsc_paginationC li { padding-bottom:1px; }
ul.tsc_paginationC li a:hover,
ul.tsc_paginationC li a.current { color:#FFFFFF; box-shadow:0px 1px #EDEDED; -moz-box-shadow:0px 1px #EDEDED; -webkit-box-shadow:0px 1px #EDEDED; }
ul.tsc_paginationC01 li a:hover,
ul.tsc_paginationC01 li a.current { color:#893A00; text-shadow:0px 1px #FFEF42; border-color:#FFA200; background:#FFC800; background:-moz-linear-gradient(top, #FFFFFF 1px, #FFEA01 1px, #FFC800); background:-webkit-gradient(linear, 0 0, 0 100%, color-stop(0.02, #FFFFFF), color-stop(0.02, #FFEA01), color-stop(1, #FFC800)); }
ul.tsc_paginationC li a.In-active {
   pointer-events: none;
   cursor: default;
}
</style>



<style>
    .grid_insert_table thead th { padding-left: 0px !important}
    .name
    {
        width:150px;
/*        padding:0 0 0 10px;*/
    }
    .datecolumns
    {
        width:102px;
    }
    .message
    {
        width:550px;
        padding:0 0 0 10px;
    }
    .input_description
    {
        width:250px;
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
        width: auto;
        border: 1px solid #9C9A9A;
        border-radius: 10px;
        padding: 6px;
        margin:10px auto;
        background-color: white;
        box-shadow: 0px 0px 22px 3px #c4c4c4;
    }
    .details_td
    {
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
       padding:6px;
    }
    .editbtn_save
    {
       text-align: right !important;
       padding:10px !important;
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
        padding: 0 10px;
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
        width: 945px;
        height:400px;
        margin-top: 2px;
       

    }
    .tbl_btn
    {
        width:940px;
        /*padding-top: 14px;*/
        border: 1px solid #D3D0D0;
        border-radius: 10px;
        border-top:none;
        border-top-left-radius: 0px;
        border-top-right-radius: 0px;
        /*padding-right: 15px;*/

		box-shadow:0px 6px 15px 0px #c4c4c4;

    }
    .grid_insert_table 
    {
        border-bottom:none !important;
        border-bottom-left-radius: 0px !important;
        border-bottom-right-radius: 0px !important;
        padding-bottom: 0px !important;
        box-shadow: 0px -4px 8px 1px #c4c4c4 !important;
       
    }
    select {
            width: 173px;
            height: 25px;
            line-height: 22px;
            padding: 1px 4px;
            font-size: 12px;
        }
        label { padding-left: 5px; padding-right: 2px;}
        
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
    .modal.fade.in
    {
        top:34%;
    }
    .caretposition {
        vertical-align: middle; cursor: pointer;
    }
    .icon-remove-alignment { display:block;float:left; margin-left: 3px; cursor:pointer;}
    /*table { border-collapse:collapse; }*/
	.pagination {
				    float: left !important;
				    margin: 1px !important;
				}
	.pagination > li > a, .pagination > li > span {
			background-color: #FFFFFF;
		    border: 1px solid #DDDDDD;
		    color: #428BCA;
		    float: left;
		    line-height: 1.42857;
		    margin-left: -1px;
		    padding: 0 6px;
		    position: relative;
		    text-decoration: none;	
    }
    
</style>
<script>



 $(document).ready(function(){
       //$("ui-dialog iframe").contents().find("#myContent")
    
        $('.convert_to_scroll').slimscroll({
           size: '8px',
           height:'430px',
           wheelStep: 10,
           //distance:'10px',
           opacity: 1,
           color: '#CACACA',
//            alwaysVisible: true,
//            railVisible: true
           
         });
        var count=$("#TotRowCount").val();
             $("#btnSave").click(function() {   
                 
                var languge_field =$("#HRMessage_1_LANGUAGE").val();
                var Message_field =$("#TEXT-1").val();
                var MessageID_field =$("#TEXTID-1").val();
				
                //get first row all fields value
                       try
                        { 
                            if(languge_field=="" && Message_field=="" && MessageID_field=="")     
                                {  
                                      throw "Enter values atleast first Row";  
                                }
                            
                            for(var i=1;i<=count;i++)
                            {
                                
                                var languge_field_loop= $("#HRMessage_"+i+"_LANGUAGE").val();
                                var Message_field_loop= $("#TEXT-"+i).val();
                                var MessageID_field_loop= $("#TEXTID-"+i).val();
                                
                                /*if(languge_field_loop!="")     
                                { 
                                    if(Message_field_loop=="")     
                                    {
                                        throw "Please Fill Message Field";  
                                    }
                                    if(MessageID_field_loop=="")     
                                    {
                                        throw "Please Fill Message ID Field";  
                                    }
                                }*/
                                if(Message_field_loop!="")     
                                { 
                                    if(languge_field_loop=="")     
                                    {
                                        throw "Please Fill Language Field";  
                                    }
                                    if(MessageID_field_loop=="")     
                                    {
                                        throw "Please Fill Message ID Field";  
                                    }
                                }
                                
                                if(MessageID_field_loop!="")     
                                { 
                                    
                                   if($.isNumeric( MessageID_field_loop ))
                                       {
                                    if(languge_field_loop=="")     
                                    {
                                        throw "Please Fill Language Field";  
                                    }
                                    if(Message_field_loop=="")     
                                    {
                                        throw "Please Fill Message Field";  
                                    }
                                       }
                                       else {
                                           throw "Only Allowed Integers In Message ID";  
                                       }
                                }
                                
                            } 
                            $("#hr-message-form").submit();
                        }
                        catch(error)
                            {
                                alertmessage=error;        
                                openalert(alertmessage);
                                return false;
                            }
            });
        
         //******Add the rows in the main(Policy) section******//
        $("#btn_AddMaster").click(function() { 
        //alert("clicked");
            //******Clone the last row of edit(Policy Value) section******//
            var newindex=parseInt($("#TotRowCount").val())+1; 
            $("#TotRowCount").val(newindex);
            var clonedheader =$("#tbl_HRMessage tbody>tr:last").prev().clone().attr('class',"tr_Save-"+newindex);
            var newIDSuffix = ":"; 
            var prevId=$("#TotRowCount").val();
            //alert(newindex);
            //******Replacing the attributes(id,name) of the cloned row elements with new ******//
            clonedheader.find('input, select,img ,span').each(function() {
                //Creating new Id for header row
          
                var idheader = $(this).attr('id');
                idheader = idheader.replace(/[0-9]/, newIDSuffix);
                idheader = idheader.replace(/[0-9]/g, "");
                idheader = idheader.replace(newIDSuffix, newindex); 
               // alert(idheader);
                $(this).attr('id', idheader);
                //Creating attributes for edit button
                if(!$(this).hasClass("icon-remove"))
                {
                    var nameheader = $(this).attr('name');
                    nameheader = nameheader.replace(/[0-9]/, newIDSuffix);                
                    nameheader = nameheader.replace(/[0-9]/g, "");                
                    nameheader = nameheader.replace(newIDSuffix, newindex);                              
                    $(this).attr('name', nameheader);   
                }
                if($(this).hasClass("icon-remove"))
                {
                                                 
                    $(this).attr('id', prevId);   
                }
				if($(this).hasClass("get_id"))
                {
					 $(this).attr('value', '');   
					
				}
				
				
                              
             });
            
            //******Adding the cloned row after the last row in the main(Policy) section ******//
            clonedheader.insertAfter($('#tbl_HRMessage tr:last')).find( 'input:text' ).attr('value','');
            $("#"+prevId).hide();
            return false;
        });
        
        
       /*$('#selectall').toggle(
        function() {
            $('.scrollContent .singlecheck').prop('checked', true);
            //$("#selectall").prop('checked', true);
        },
        function() {
            $('.scrollContent .singlecheck').prop('checked', false);
            $("#selectall").prop('checked', false);
        }
    );*/
        
    });
</script>
<script>
    function DeleteHRMessage(id)
    {
       bootbox.confirm("<p class='modalstyle'><b><img width='30px' src='/HR5_DEV_APP/images/question_red.png'/>Confirmation</b></p><p>Are you sure to delete this Message ?</p>", "No", "Yes", function(result) {
        //Example.show("Confirm result: "+result);
        if(result==true){
            
             $.ajax({  
               type: "POST",
               url: "<?php echo $this->createUrl('hRMessage/Create');?>",
               data:"messageid="+id,          
               success: function(data){ 
				location.reload();
               },
            });
        }
}); 
    }
</script>    
<div class="form">
    




<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', 
                                      array( 'id'=>'hr-message-form',
                                             'type'=>'horizontal',
                                            )  
                                     );  ?>

    <?php   
    
        require_once("popupdialog.php");
        $Getlabelname =new Get_Labelname_Cls();//Getting the labels
		$GetBasic_Data=new Get_Data_From_Basic_Definition_Cls();
		
        if(isset($_POST['TotRowCount'])<>'')
        {
            $mastercount=$_POST['TotRowCount'];
        }
        else
        {     
            $mastercount=17;                      
        }
       // $defaultDetailsCount=5;
        
        /*$getHrMessage = Yii::app()->db->createCommand()
                ->select('*')                 
                ->from('HRMESSAGE')               
                ->order('TEXTID ASC')
				//->limit('5')
                ->queryAll();*/  
        
		 /*
		  * 
		  * @var *
		  * 
		  change here 
		 */
		 
       if($mastercount<=count($data)) {       
            $mastercount=count($data); 
       }
       
    ?>


    <table class="grid_insert_table" id="tbl_HRMessage">
        <thead class="fixedHeader">          
            <tr>
                <th class="name"><label>Language</label><?php //echo $Getlabelname->Get_Labelname_Fnc("125");?></th>
                <th class="message"><label>Message</label><?php //echo $Getlabelname->Get_Labelname_Fnc("116");?></th>
                <th class="datecolumns"><label>Message ID</label>
                    <span class="caret caretposition"></span>
                <?php //echo $Getlabelname->Get_Labelname_Fnc("126");?></th>
                <th class="datecolumns"><label>Usage Counter</label><?php //echo $Getlabelname->Get_Labelname_Fnc("126");?></th>
                <th style="width:33px"></th>
            
            </tr>
        </thead>
        <tbody  class="scrollContent convert_to_scroll"> 
        <?php  
		$model=new HrMessage();
		
		for($i=1;$i<=$mastercount; $i++)
         {    
            $text=array();                         
            if(isset($_POST['TEXT'.$i])<>"")
            {
                $text[$i] =$_POST['TEXT'.$i];
            }
            else if(count($data)>0 && isset($data[$i-1]['TEXT'])!='')
            {                             
                $text[$i]=$data[$i-1]['TEXT'];
            }
            else
            {
               $text[$i]='';
            }  
             $textid=array();                         
            if(isset($_POST['TEXTID'.$i])<>"")
            {
                $textid[$i] =$_POST['TEXTID'.$i];
            }
            else if(count($data)>0 && isset($data[$i-1]['TEXTID'])!='')
            {                             
                $textid[$i]=$data[$i-1]['TEXTID'];
            }
            else
            {
               $textid[$i]='';
            } 
            
            $language=array();                         
            if(isset($_POST['LANGUAGE'.$i])<>"")
            {
                $language[$i] =$_POST['LANGUAGE'.$i];
            }
            else if(count($data)>0 && isset($data[$i-1]['LANGUAGE'])!='')
            {                             
                $language[$i]=  $data[$i-1]['LANGUAGE'];
            }
            else
            {
               $language[$i]='';
            } 
            
            
            $usage_count=array();                         
            if(isset($_POST['USAGE_COUNT'.$i])<>"")
            {
                $usage_count[$i] =$_POST['USAGE_COUNT'.$i];
            }
            else if(count($data)>0 && isset($data[$i-1]['USAGE_COUNT'])!='')
            {                             
                $usage_count[$i]=  $data[$i-1]['USAGE_COUNT'];
            }
            else
            {
               $usage_count[$i]='';
            } 
            
            
            
            
            
            $basic_id=array();                         
            if(isset($_POST['ID'.$i])<>"")
            {
                $basic_id[$i] =$_POST['ID'.$i];
            }
            else if(count($data)>0 && isset($data[$i-1]['ID'])!='')
            {                             
                $basic_id[$i]=$data[$i-1]['ID'];
            }
            else
            {
               $basic_id[$i]='';
            } 
			
			
            ?>
      
                <tr class="<?php echo "tr_Save-$i"; ?>">
                        <td><?php //echo $form->dropDownList($model,"[$i]LANGUAGE",array('1'=>'English'), array('empty'=>'-- Select Any --',"class"=>"name")); ?>
						<?php  
						 
						$DefType="LANGUAGE";
						$ArBasicDefData=$GetBasic_Data->ArGet_Data_From_BasicDef(strtoupper($DefType));
						   $a= array('Eng'=>'English','Hin'=>'Hindi');
							/*foreach($ArBasicDefData as $key => $value){
								
								$a = array_push('sds'+$key,'hai hai'+$key);
								
							}*/
							//print_r($a);
							
						
						 ?>
                        <?php echo $form->dropDownList($model,"[$i]LANGUAGE",$a, array('options' => array($language[$i]=>array('selected'=>true)),"class"=>"name")); ?>
                        </td>
                        <td><?php echo $form->textField($model,"[$i]TEXT",array("class"=>"message","id"=>"TEXT-$i",'value'=>$text[$i])); ?></td>
                        <td><?php echo $form->textField($model,"[$i]TEXTID",array("class"=>"datecolumns","id"=>"TEXTID-$i",'value'=>$textid[$i])); ?>
                        <?php echo CHtml::hiddenField("id_basic[$i]" , $basic_id[$i], array('id' => 'hiddenIDInput','class'=>'get_id')); ?>
                        </td>  
                        <td><?php echo $form->textField($model,"[$i]USAGE_COUNT",array("class"=>"datecolumns","id"=>"USAGE_COUNT-$i",'value'=>$usage_count[$i])); ?></td>
                        <td style="width: 30px">
                            <?php if($basic_id[$i]<>"") { ?>
                            <span class="icon-remove icon-remove-alignment"  id="<?php echo $basic_id[$i];?>" onclick="DeleteHRMessage(this.id)"></span>
                            <?php } ?>
                        </td>
                </tr>
           <?php 
         } 
            ?>
        </tbody>
        </table>
                
    <table class="tbl_btn" id="table_bottom_bg">
      <tbody>
         <tr>
           <td class="btn_save">
		   
		   <?php 
		   
		   $this->widget('CLinkPager', array(
            'currentPage'=>$pages->getCurrentPage(),
            'itemCount'=>$item_count,
            'pageSize'=>$page_size,
            'maxButtonCount'=>5,
            //'nextPageLabel'=>'My text >',
            'header'=>'',
        'htmlOptions'=>array('class'=>'pagination'),
        )); ?>
		   
		   <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset','size'=>'small','icon'=>'icon-refresh','label'=>$Getlabelname->Get_Labelname_Fnc("104"))); ?>
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/icon_plus.png" class="clonerow" id="<?php echo "btn_AddMaster" ;?>">              
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'button', 'size'=>'small','icon'=>'icon-thumbs-up', 'label'=>$Getlabelname->Get_Labelname_Fnc("103"),'id'=>'btnSave','icon'=>'icon-thumbs-up')); ?>
                             
            <input id="TotRowCount" type="hidden" name="TotRowCount" value="<?php echo $mastercount;?>">           
            </td>
         </tr>
        </tbody>
        
    </table>
   
    
    

<?php $this->endWidget(); ?>

</div><!-- form -->


