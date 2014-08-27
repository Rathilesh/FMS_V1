<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);
?>

<!--<h1>Contact Us</h1>-->

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>
<!--
<p>
If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
</p>-->

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

<!--	<p class="note">Fields with <span class="required">*</span> are required.</p>-->

	<?php echo $form->errorSummary($model); ?>
    <table>
        <tr>
            <td><?php echo $form->labelEx($model,'name'); ?></td>
            <td height="35"><?php echo $form->textField($model,'name'); ?>
            <?php echo $form->error($model,'name'); ?>
            </td>
        </tr>
        <tr>
            <td><?php echo $form->labelEx($model,'email'); ?></td>
            <td height="35"><?php echo $form->textField($model,'email'); ?>
            <?php echo $form->error($model,'email'); ?>
            </td>
        </tr>
        <tr>
            <td><?php echo $form->labelEx($model,'subject'); ?></td>
            <td height="35"><?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
            <?php echo $form->error($model,'subject'); ?>
            </td>
        </tr>
        <tr>
            <td><?php echo $form->labelEx($model,'body'); ?></td>
            <td><?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
            <?php echo $form->error($model,'body'); ?>
            </td>
        </tr>
        <?php if(CCaptcha::checkRequirements()): ?>
        <tr>
            <td><?php echo $form->labelEx($model,'verifyCode'); ?></td>
            <td><?php $this->widget('CCaptcha'); ?></tr>
       
        <tr><td colspan="2"><div class="hint">Please enter the letters as they are shown in the image above.
		<br/>Letters are not case-sensitive.</div></td></tr>
            <tr> 
            <td>
		
            
		<?php echo $form->error($model,'verifyCode'); ?>
            </td>
            <td>
                <?php echo $form->textField($model,'verifyCode'); ?>
            </td>
        </tr>
        <?php endif; ?>
        <tr>
            <td colspan="3"><?php echo CHtml::submitButton('Send'); ?></td>
        </tr>
<!--        <tr>
            <td></td><td></td>
        </tr>-->
    </table>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>