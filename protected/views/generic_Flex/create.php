<?php
/* @var $this Generic_FlexController */
/* @var $model Generic_Flex */

?>

    <div  id="patternDiv">
        <div class="note">
            <div class="labelImage"></div>
            <div class="LabelMsg">
                <p>
                    <?php  $Getlabelname =new Get_Labelname_Cls();
                    echo  "Create Generic Flex";?>
                </p>
            </div>
        </div>
    </div>



<?php echo $this->renderPartial('_form', array('model'=>$model,)); ?>