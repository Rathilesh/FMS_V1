<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div  id="patternDiv">
    <div class="note">
 <div class="labelImage"></div>
 <div class="LabelMsg"><p>
        <?php  $Getlabelname =new Get_Labelname_Cls(); 
            echo  $Getlabelname->Get_Labelname_Fnc("144");?>
     </p></div>
</div></div>

<?php echo $this->renderPartial('_nextform', array('model'=>$model)); ?>