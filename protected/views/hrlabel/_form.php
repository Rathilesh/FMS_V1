<?php
/**
 * Created  By  : ® ℛaThIlEsH ®  
 * Created  On  : 16-Aug-2013
 * Modified By  :
 * Modified On  :
 * Purpose      : Menu Object 
 */
 ?>


<!----code for flash messages---->
<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog',
                        array(
                             'id'=>'mydialog',
                             // additional javascript options for the dialog plugin
                             'options'=>array(
                                        'title'=>'Alert',
                                        'show' => 'shake',
                                        'hide' => 'explode',
                                        'width'=>'380',
                                        'height'=>'130',
                                        'autoOpen'=>false,
                                        'modal'=>TRUE,
                                        'buttons' => array(
                                                     array('text'=>'Close','click'=> 'js:function(){$(this).dialog("close");}'),
                                                     //array('text'=>'Cancel','click'=> 'js:function(){$(this).dialog("close");}'),
                                                          ),
                                             ),
                             )
                    );
?>
<div id="message_box" style="font-weight: bold"></div>
<?php
$this->endWidget('zii.widgets.jui.CJuiDialog');
?>
<div class="form">
    <?php
    Yii::app()->clientScript->registerScript('loaderScript', '
    /////////////--only need event on input field--///////////
    //    function chk_row_empty($i) {                      //
    //    if($i>=2) {                                       //
    //    $i=$i-1;                                          //
    //    var txt=$("#Hrlabel_"+$i+"_LANGUAGE").val();      //
    //    var txt1=$("#Hrlabel_"+$i+"_TEXT_ID").val();      //
    //    var txt2=$("#Hrlabel_"+$i+"_TEXT").val();         //
    //    if(txt=="" || txt1=="" || txt2=="") {             //
    //    alert("Please fill above row !");                 //
    //    $("#Hrlabel_"+$i+"_LANGUAGE").focus();            //
    //    }                                                 //
    //    }                                                 //
    //    }                                                 //
    /////////////--only need event on input field--///////////

    //////////////code for checking validation ///////////////

    $("input[type=text]").keyup(function(){
    //---fetch id , name, value of keyup---//
        var text_val = $(this).val();
        var text_id=$(this).attr("id");
        var text_name=$(this).attr("name");

    //----get loop count----//
    var loop_c = text_id.match(/[\d\.]+/g);
    if (loop_c != null){
        var loop_count = loop_c.toString();
        //alert(number );
    }
    //--minus 1 on current loop count
        loop_count=loop_count-1;
    //fetch value on above rows

    var txt=$("#Hrlabel_"+loop_count+"_LANGUAGE").val();
    var txt1=$("#Hrlabel_"+loop_count+"_TEXT_ID").val();
    var txt2=$("#Hrlabel_"+loop_count+"_TEXT").val();
    if(txt==""){
   // alert("Please fill above language field !");
    $("#mydialog").dialog("option","title", "Alert");
    $("#message_box").text("Please fill above language field !");
    $("#mydialog").dialog("open");

    $("#Hrlabel_"+loop_count+"_LANGUAGE").focus();
    $(this).val("");
    return false;
    }
    if(txt1==""){
   // alert("Please fill above label id field !");
    $("#mydialog").dialog("option","title", "Alert");
    $("#message_box").text("Please fill above label id field !");
    $("#mydialog").dialog("open");

    $("#Hrlabel_"+loop_count+"_TEXT_ID").focus();
    $(this).val("");
    return false;
    }
    if(txt2==""){
    //alert("Please fill above label field !");
    $("#mydialog").dialog("option","title", "Alert");
    $("#message_box").text("Please fill above label field !");
    $("#mydialog").dialog("open");
    $("#Hrlabel_"+loop_count+"_TEXT").focus();
    $(this).val("");
    return false;
    }
    });

    //////////////code for checking validation ///////////////


    ////////////////code for checking validation///////////////////////
    $("#demo_save").click(function()
        {
        var i;
        var loop_count =$("#TotRowCount").val();
        for(i=1;i<loop_count;i++) 
            {
            var get_val_text=$("#Hrlabel_"+i+"_TEXT").val();
            var get_val_textid =$("#Hrlabel_"+i+"_TEXT_ID").val();
            var get_val_language =$("#Hrlabel_"+i+"_LANGUAGE").val();    
                if(get_val_text!="")
                    {
                   if(get_val_textid =="" || get_val_language=="") {
                        $("#mydialog").dialog("option","title", "Alert");
                        $("#message_box").text("Some fields are empty in "+i+" row");
                        $("#mydialog").dialog("open");
                        return false;
                    }
            }
                if(get_val_textid!="") 
                    {
                        if(get_val_text =="" || get_val_language=="") 
                            {
                            $("#mydialog").dialog("option","title", "Alert");
                            $("#message_box").text("Some fields are empty in "+i+" row");
                            $("#mydialog").dialog("open");
                            return false;
                            }
                    }
                if(get_val_language!="") 
                    {
                        if(get_val_text =="" || get_val_textid=="") 
                            {
                            $("#mydialog").dialog("option","title", "Alert");
                            $("#message_box").text("Some fields are empty in "+i+" row");
                            $("#mydialog").dialog("open");
                            return false;
                            }
                    }

            }
            var txt=$("#Hrlabel_1_LANGUAGE").val();
            var txt1=$("#Hrlabel_1_TEXT_ID").val();
            var txt2=$("#Hrlabel_1_TEXT").val();
            if(txt=="" || txt1=="" || txt2=="")
                {
                //alert("Please enter atleast one row");
                $("#mydialog").dialog("option","title", "Alert");
                $("#message_box").text("Please enter atleast one row!");
                $("#mydialog").dialog("open");
                $("#Hrlabel_1_LANGUAGE").focus();
                return false;
                }
            else
                {
                $("#hrlabel-form").submit();
                }
        });
    /////////////////code for checking validation////////////////////////
    $("#Hrlabel_10_TEXT").keyup(function() {
    $("#copylink").show(100);
    });', CClientScript::POS_END);
    ?>
    <!----inline style --->
    <style>
        select {
            width: 173px;
            height: 25px;
            line-height: 22px;
            padding: 1px 4px;
            font-size: 12px;
        }
    </style>
    <!-------START FORM WIDGET--------->
    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',
            array(
	'id'=>'hrlabel-form',
    'type'=>'horizontal',
	'enableAjaxValidation'=>false,
                )                 ); ?>
    <?php echo $form->errorSummary($model); ?>
    <?php
    if ($model->isNewRecord) {
    ?>
    <?php
        $this->widget('ext.jqrelcopy.JQRelcopy',array(
        //the id of the 'Copy' link in the view, see below.
        'id' => 'copylink',
        //add a icon image tag instead of the text
        //leave empty to disable removing
       // 'removeText' => 'Remove',
        //htmlOptions of the remove link
        'removeHtmlOptions' => array('style'=>'color:red'),
        //options of the plugin, see http://www.andresvidal.com/labs/relcopy.html
        'options' => array(
            //A class to attach to each copy
            'copyClass'=>'newcopy',
            //'jsAfterNewId'=>'test',
            // The number of allowed copies. Default: 0 is unlimited
            //'limit'=>5,
            //Option to clear each copies text input fields or textarea
            'clearInputs'=>true,
            //A jQuery selector used to exclude an element and its children
            'excludeSelector'=>'.skipcopy',
            //Additional HTML to attach at the end of each copy.
           // 'append'=>CHtml::tag('span',array('class'=>'hint'),'You can remove this line'),
        )
    ));
    $Getlabelname =new Get_Labelname_Cls();
    ?>


    <table border="2" class="grid_insert_table">
        <thead>
           
<!--            <th>&nbsp;</th>-->
            <th height="23"><?php echo  $Getlabelname->Get_Labelname_Fnc("100");?> <a class="field_level_help" href="#Language"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8"></a></th>
            <th><?php echo  $Getlabelname->Get_Labelname_Fnc("101");?> <a class="field_level_help" href="#TextID"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8"></a></th>
            <th><?php echo  $Getlabelname->Get_Labelname_Fnc("102");?><a class="field_level_help" href="#Text"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/diamond-icon.png" width="8" height="8"></a></th>
            <?php
//            SETTING TOTAL ROW COUNT
                if(isset($_POST['TotRowCount'])<>'')
                {
                    $loop_c=$_POST['TotRowCount'] + 1;
                }
                else
                {
                    $loop_c=11;
                }
           ?>
            
            
            
            <tbody>  
    <!--starting loops-->
    <?php for ($i=1;$i<$loop_c; $i++) { ?>
    <?php
    $language_value=array();
    if(isset($_POST['Hrlabel'][$i]["LANGUAGE"])<>"")
        {
        $language_value[$i] =$_POST['Hrlabel'][$i]["LANGUAGE"];
        }
    else
        {
            $language_value[$i]='';
        }
    $textid_value=array();
    if(isset($_POST['Hrlabel'][$i]["TEXT_ID"])<>"")
        {
        $textid_value[$i] =$_POST['Hrlabel'][$i]["TEXT_ID"];
        }
    else
        {
            $textid_value[$i]='';
        }
    $text_value=array();
    if(isset($_POST['Hrlabel'][$i]["TEXT"])<>"")
        {
        $text_value[$i] =$_POST['Hrlabel'][$i]["TEXT"];
        }
    else
        {
        $text_value[$i]='';
        }
      ?>
        
     
        <tr id="form_addings">
            
            <td>
             
            <?php

             echo $form->dropDownList($model,"[$i]LANGUAGE",array('01'=>'English','02'=>'Hindi','03'=>'French'), array('empty'=>'-- Select Any --'));

//            echo $form->textField
//                    ($model,"[$i]LANGUAGE",
//                        array('size'=>23,'maxlength'=>100,'class'=>'LANGUAGE','value'=>$language_value[$i])
//
//                    );
            $form->error($model,"[$i]LANGUAGE")
                ?>
            </td>
            <td>
                <?php echo $form->textField
                    ($model,"[$i]TEXT_ID",
                        array('size'=>23,'maxlength'=>100,'class'=>'TEXT_ID','value'=>$textid_value[$i])
                    );

                $form->error($model,"[$i]TEXT_ID")
                ?>
            </td>
            <td>
                <?php echo $form->textField
                    ($model,"[$i]TEXT",
                        array('size'=>23,'maxlength'=>100,'class'=>'TEXT','value'=>$text_value[$i])
                    );

                $form->error($model,"[$i]TEXT")
                ?>
            </td>

        </tr>
 <?php } ?>
        <tr  id="table_bottom_bg">
            <td colspan="2">&nbsp</td>
            <td align="right" id="testtdright" class="tabular_submit_padding">
                <input type="hidden" name="TotRowCount" id="TotRowCount" value="<?php echo $loop_c-1; ?>" />
                <!---Assign an hidden filed to get total count of form rows--->
                <input type="hidden" name="get_table_name" id="get_table_name" value="Hrlabel" />
                <!---Assign an hidden filed to get table name on jqurel copy --->
                <?php //echo CHtml::button($model->isNewRecord ? $Getlabelname->Get_Labelname_Fnc("2022") : $Getlabelname->Get_Labelname_Fnc("2021"),array('id'=>'demo_save')); ?>
                 <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"button",'size'=>'small', 'label'=>$model->isNewRecord ? $Getlabelname->Get_Labelname_Fnc("103") : $Getlabelname->Get_Labelname_Fnc("2021"),'id'=>'demo_save','icon'=>'icon-thumbs-up')); ?>
                   <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>"reset",'size'=>'small','icon'=>'icon-refresh', 'label'=>$Getlabelname->Get_Labelname_Fnc("104"))); ?>

                <img id="copylink" rel=".copy"
                     src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/plus_blue.png"
                     title="Add Rows" width="20" height="20" style="cursor: pointer;display: none">
            </td>
        </tr>
        </tbody>    
    </table>
    <?php }
$this->endWidget(); ?>

</div>