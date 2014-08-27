<?php
/**
 * Created  By  : ® ℛaThIlEsH ®  
 * Created  On  : 20-Aug-2013
 * Modified By  :
 * Modified On  :
 * Purpose      : Menu Object 
 */
 ?>
<div style="width:100%; height: auto; float: left; margin-top: 0px;" id="patternDiv">
 <div class="note"> 
    <div class="labelImage"></div>
        <div class="LabelMsg">
     <p><?php 
            $Getlabelname = new Get_Labelname_Cls();
            echo $Getlabelname->Get_Labelname_Fnc("2039"); 
          ?>
     </p> 
     
 </div></div></div>

<?php echo $this->renderPartial('_form', array('model'=>$model,'md_object_param'=>$md_object_param)); ?>


