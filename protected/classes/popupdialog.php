<script>
 function openalert(message,successMessage)
 { 
    
    if(successMessage!=undefined) 
    {
        document.getElementById('message_box_success').innerHTML = message;
        document.getElementById('message_box_success').display = "block";
        $("#mydialog_success").dialog("open");
//         $("input").unbind("focus",function(){
//           alert("hi");
//       }); 
       
        
    }
    else
    {
        document.getElementById('message_box').innerHTML = message;
        document.getElementById('message_box').display = "block";
        $("#mydialog").dialog("open");
      
//       $("input").unbind("focus",function(){
//           alert("hi");
//       }); 
        
    }
} 
  
  function Createfocus(getid)
  { 
     // alert(getid);
    $("#focus_object").val(getid);
    
  }
      
</script>
<?php
  $this->beginWidget('zii.widgets.jui.CJuiDialog',
                      array( 'id'=>'mydialog',
                             // additional javascript options for the dialog plugin
                          
                             'options'=>array(  'title'=>'<p><img src="'.Yii::app()->request->baseUrl.'/css/images/stops.png" width="20px"></img>&nbsp;&nbsp;Alert</p>',
                                                'show' => 'shake',
                                                'hide' => 'explode',
                                                'autoOpen'=>false,
                                                'modal'=>true,
                                                'buttons' => array( array('text'=>'Close',
                                                                          'click'=> 'js:function(){
                                                                              $(this).dialog("close");
                                                                             // alert("#"+$("#focus_object").val());
                                                                              $("#"+$("#focus_object").val()).focus();
                                                                            }'),
                                                   
                                                                    //array('text'=>'Cancel','click'=> 'js:function(){$(this).dialog("close");}'),
                                                                  ),
                                                  
                                             ),
                            ));
          
            ?>
       <div id="message_box" style="font-weight: normal;"></div>
       <?php

      $this->endWidget('zii.widgets.jui.CJuiDialog'); 
    
    
      
      
      
       $this->beginWidget('zii.widgets.jui.CJuiDialog',
                      array( 'id'=>'mydialog_success',
                             // additional javascript options for the dialog plugin
                          
                             'options'=>array(  'title'=>'<p><img src="'.Yii::app()->request->baseUrl.'/images/ok.gif" width="20px"></img>&nbsp;&nbsp;Alert</p>',
                                                'show' => 'shake',
                                                'hide' => 'explode',
                                                'autoOpen'=>false,
                                                'modal'=>true,
                                                'buttons' => array( array('text'=>'Close',
                                                                          'click'=> 'js:function(){$(this).dialog("close");}'),
                                                   
                                                                    //array('text'=>'Cancel','click'=> 'js:function(){$(this).dialog("close");}'),
                                                                  ),
                                             ),
                            ));
          
            ?>
       <div id="message_box_success" style="font-weight: normal"></div>
       <?php

      $this->endWidget('zii.widgets.jui.CJuiDialog'); 
 ?>
