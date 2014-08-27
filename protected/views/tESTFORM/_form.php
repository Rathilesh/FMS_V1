<?php
/* @var $this TESTFORMController */
/* @var $model TESTFORM */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'testform-form',
	'enableAjaxValidation'=>false,
)); ?>

	

	<?php echo $form->errorSummary($model); ?>
     <table>  
         <tr>
             <td><?php echo $form->labelEx($model,'NAME'); ?></td><td><?php echo $form->textField($model,'NAME',array('size'=>30,'maxlength'=>15)); ?><?php echo $form->error($model,'NAME'); ?></td>
         
            <tr> <td height="10"> </td> </tr>         </tr>
     
         <tr>
             <td><?php echo $form->labelEx($model,'AGE'); ?></td> <td><?php echo $form->textField($model,'AGE'); ?> <?php echo $form->error($model,'AGE'); ?></td>
         <tr> <td height="10"> </td> </tr>
         </tr>
          
          <tr>
             <td><?php echo $form->labelEx($model,'ADDRESS'); ?></td> <td><?php echo $form->textField($model,'ADDRESS',array('size'=>15,'maxlength'=>15)); ?> <?php echo $form->error($model,'ADDRESS'); ?></td>
         <tr> <td height="10"> </td> </tr>
          </tr>
         
          <tr>
             <td><?php echo $form->labelEx($model,'ADDRESS1'); ?></td> <td><?php echo $form->textField($model,'ADDRESS',array('size'=>15,'maxlength'=>15)); ?> <?php echo $form->error($model,'ADDRESS1'); ?></td>
         <tr> <td height="10"> </td> </tr>
          </tr>
         
         <tr>
             <td><?php echo $form->labelEx($model,'CITY'); ?></td> <td><?php echo $form->textField($model,'CITY',array('size'=>20,'maxlength'=>20)); ?> <?php echo $form->error($model,'CITY'); ?></td>
         <tr> <td height="10"> </td> </tr>
         </tr>
         
         <tr>
             <td><?php echo $form->labelEx($model,'STATE'); ?></td> <td><?php echo $form->textField($model,'STATE',array('size'=>20,'maxlength'=>20)); ?> <?php echo $form->error($model,'STATE'); ?></td>
         <tr> <td height="10"> </td> </tr>
         </tr>


         <tr> <td></td><td><?php echo CHtml::submitButton($model->isNewRecord ?  'Save': 'Create' ); ?></td> </tr>
	<div class="row buttons">
		<?php //echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
       
    </table>
<?php $this->endWidget(); ?>

</div><!-- form -->