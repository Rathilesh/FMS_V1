<?php
/* @var $this Basic_Definition_CategoryController */
/* @var $model Basic_Definition_Category */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'basic--definition--category-form',
    'enableAjaxValidation'=>false,
)); ?>

<!--    <p class="note">Fields with <span class="required">*</span> are required.</p>-->

    <?php //echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'DESCRIPTION'); ?>
        <?php echo $form->textField($model,'DESCRIPTION',array('size'=>60,'maxlength'=>100)); ?>
        <?php echo $form->error($model,'DESCRIPTION'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'IS_AMEND'); ?>
        <?php echo $form->textField($model,'IS_AMEND',array('size'=>1,'maxlength'=>1)); ?>
        <?php echo $form->error($model,'IS_AMEND'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'IS_DISPLAY'); ?>
        <?php echo $form->textField($model,'IS_DISPLAY',array('size'=>1,'maxlength'=>1)); ?>
        <?php echo $form->error($model,'IS_DISPLAY'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'IS_UNIVERSAL'); ?>
        <?php echo $form->textField($model,'IS_UNIVERSAL',array('size'=>1,'maxlength'=>1)); ?>
        <?php echo $form->error($model,'IS_UNIVERSAL'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'IS_COMPULSORY'); ?>
        <?php echo $form->textField($model,'IS_COMPULSORY',array('size'=>1,'maxlength'=>1)); ?>
        <?php echo $form->error($model,'IS_COMPULSORY'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'NO_OF_RECORDS'); ?>
        <?php echo $form->textField($model,'NO_OF_RECORDS'); ?>
        <?php echo $form->error($model,'NO_OF_RECORDS'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>
