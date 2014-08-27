<?php
/* @var $this PersonnelController */
/* @var $model Personnel */
/* @var $form CActiveForm */
?>
<style>
    #Reg_Outer_Div {
        width: 100%;
        height: auto;
/*        min-height: 400px;*/
        float: left;
        border: 1px solid #E8E8E8;
        box-shadow: 0px 0px 6px #000020; 
        border: 5%;
    }
    
    #Reg_Outer_Div table {
        margin-bottom:0px !important ;
    }
    #Reg_Outer_Div table td{
        padding-bottom: 5px;
        padding-top: 5px;
        padding-left: 1%;
        
        border-bottom: 1px solid #ECECEC;
        
        background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxyYWRpYWxHcmFkaWVudCBpZD0iZyI+PHN0b3Agb2Zmc2V0PSIwIiBzdG9wLWNvbG9yPSIjZmZmZmZmIi8+PHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSJyZ2JhKDAsIDAsIDAsIDAuMDk2KSIvPjwvcmFkaWFsR3JhZGllbnQ+PHJlY3QgeD0iMCUiIHk9IjAlIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJyZ2JhKDAsIDAsIDAsIDAuMDk2KSIgLz48cmVjdCB4PSItMjAuNzEwNyUiIHk9Ii0yMC43MTA3JSIgd2lkdGg9IjE0MS40MjE0JSIgaGVpZ2h0PSIxNDEuNDIxNCUiIGZpbGw9InVybCgjZykiIC8+PC9zdmc+);
        background-image: -webkit-gradient(radial, 50% 50%, 0, 50% 50%, 127, color-stop(0%, #ffffff), color-stop(100%, rgba(0, 0, 0, 0.096)));
        background-image: -webkit-radial-gradient(center center, closest-corner, #ffffff 0%, rgba(0, 0, 0, 0.096) 100%);
        background-image: -moz-radial-gradient(center center, closest-corner, #ffffff 0%, rgba(0, 0, 0, 0.096) 100%);
        background-image: -ms-radial-gradient(center center, closest-corner, #ffffff 0%, rgba(0, 0, 0, 0.096) 100%);
        background-image: -o-radial-gradient(center center, closest-corner, #ffffff 0%, rgba(0, 0, 0, 0.096) 100%);
        background-image: radial-gradient(closest-corner at center center, #ffffff 0%, rgba(0, 0, 0, 0.096) 100%);
        
    }
</style>
<div id="Reg_Outer_Div">
    <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'personnel-form',
	'enableAjaxValidation'=>false,
)); ?>
	<?php echo $form->errorSummary($model); ?>
    <table id="Reg_Main_Table">
        <tr>
            <td><?php echo $form->labelEx($model,'SALUTATION'); ?></td>
             <td><?php echo $form->textField($model,'SALUTATION',array('size'=>30,'maxlength'=>30)); ?>
                    <?php //echo $form->error($model,'SALUTATION'); ?>
             </td>
              <td><?php echo $form->labelEx($model,'FIRST_NAME'); ?></td>
               <td><?php echo $form->textField($model,'FIRST_NAME',array('size'=>50,'maxlength'=>50)); ?>
                    <?php //echo $form->error($model,'FIRST_NAME'); ?>
               </td>
                <td><?php echo $form->labelEx($model,'MIDDILE_NAME'); ?></td>
                 <td><?php echo $form->textField($model,'MIDDILE_NAME',array('size'=>50,'maxlength'=>50)); ?>
                        <?php //echo $form->error($model,'MIDDILE_NAME'); ?>
                 </td>
        </tr>
        <tr>
            <td><?php echo $form->labelEx($model,'LAST_NAME'); ?></td>
             <td><?php echo $form->textField($model,'LAST_NAME',array('size'=>50,'maxlength'=>50)); ?>
                    <?php //echo $form->error($model,'LAST_NAME'); ?>
             </td>
              <td><?php echo $form->labelEx($model,'PREFERED_NAME'); ?></td>
               <td><?php echo $form->textField($model,'PREFERED_NAME',array('size'=>60,'maxlength'=>100)); ?>
                    <?php //echo $form->error($model,'PREFERED_NAME'); ?></td>
                <td><?php echo $form->labelEx($model,'ALTERNATE_NAME'); ?></td>
                 <td><?php echo $form->textField($model,'ALTERNATE_NAME',array('size'=>60,'maxlength'=>100)); ?>
                        <?php //echo $form->error($model,'ALTERNATE_NAME'); ?></td>
        </tr>
        <tr>
            <td><?php echo $form->labelEx($model,'DOB'); ?></td>
             <td><?php echo $form->textField($model,'DOB'); ?>
                    <?php //echo $form->error($model,'DOB'); ?></td>
              <td><?php echo $form->labelEx($model,'GENDER'); ?></td>
               <td><?php echo $form->textField($model,'GENDER',array('size'=>1,'maxlength'=>1)); ?>
                    <?php //echo $form->error($model,'GENDER'); ?></td>
                <td><?php echo $form->labelEx($model,'RELIGION'); ?></td>
                 <td><?php echo $form->textField($model,'RELIGION',array('size'=>30,'maxlength'=>30)); ?>
                        <?php //echo $form->error($model,'RELIGION'); ?></td>
        </tr>
        <tr>
            <td><?php echo $form->labelEx($model,'BLOOD_GROUP'); ?></td>
              <td><?php echo $form->textField($model,'BLOOD_GROUP',array('size'=>30,'maxlength'=>30)); ?>
                <?php //echo $form->error($model,'BLOOD_GROUP'); ?></td>
            <td><?php echo $form->labelEx($model,'SUBCAST'); ?></td>
                <td><?php echo $form->textField($model,'SUBCAST',array('size'=>30,'maxlength'=>30)); ?>
                    <?php //echo $form->error($model,'SUBCAST'); ?></td>
                    <td><?php echo $form->labelEx($model,'FATHER'); ?></td>
                      <td><?php echo $form->textField($model,'FATHER',array('size'=>60,'maxlength'=>100)); ?>
                        <?php //echo $form->error($model,'FATHER'); ?></td>
        </tr>
        <tr>
            <td><?php echo $form->labelEx($model,'MOTHER'); ?></td>
            <td><?php echo $form->textField($model,'MOTHER',array('size'=>60,'maxlength'=>110)); ?>
                <?php //echo $form->error($model,'MOTHER'); ?></td>
            <td><?php echo $form->labelEx($model,'NATIONALITY'); ?></td>
            <td><?php echo $form->textField($model,'NATIONALITY',array('size'=>30,'maxlength'=>30)); ?>
                <?php //echo $form->error($model,'NATIONALITY'); ?></td>
            <td><?php echo $form->labelEx($model,'CASUAL'); ?></td>
            <td><?php echo $form->textField($model,'CASUAL',array('size'=>1,'maxlength'=>1)); ?>
                <?php //echo $form->error($model,'CASUAL'); ?></td>
        </tr>
        <tr>
            <td><?php echo $form->labelEx($model,'MARRIED'); ?></td>
            <td><?php echo $form->textField($model,'MARRIED',array('size'=>1,'maxlength'=>1)); ?>
                <?php //echo $form->error($model,'MARRIED'); ?></td>
            <td><?php echo $form->labelEx($model,'SECONDMENT'); ?></td>
            <td><?php echo $form->textField($model,'SECONDMENT',array('size'=>1,'maxlength'=>1)); ?>
                <?php //echo $form->error($model,'SECONDMENT'); ?></td>
            <td><?php echo $form->labelEx($model,'SECONDMENT_ORG_ID'); ?></td>
            <td><?php echo $form->textField($model,'SECONDMENT_ORG_ID'); ?>
                <?php //echo $form->error($model,'SECONDMENT_ORG_ID'); ?></td>
        </tr>
        <tr>
            <td><?php echo $form->labelEx($model,'VERIFIED'); ?></td>
            <td><?php echo $form->textField($model,'VERIFIED',array('size'=>1,'maxlength'=>1)); ?>
                <?php //echo $form->error($model,'VERIFIED'); ?></td>
            <td><?php echo $form->labelEx($model,'ACTIVE'); ?></td>
            <td><?php echo $form->textField($model,'ACTIVE',array('size'=>1,'maxlength'=>1)); ?>
                <?php //echo $form->error($model,'ACTIVE'); ?></td>
            <td><?php echo $form->labelEx($model,'PARTY_ID'); ?></td>
            <td><?php echo $form->textField($model,'PARTY_ID'); ?>
                <?php //echo $form->error($model,'PARTY_ID'); ?></td>
        </tr>
        <tr>
            <td colspan="6" style="text-align: right; padding-right: 12px;"><?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?></td>
        </tr>
    </table>
</div>
<?php $this->endWidget(); ?>

<!-- form -->