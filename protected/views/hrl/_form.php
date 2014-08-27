<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'hrl-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'LANGUAGE'); ?>
		<?php echo $form->textField($model, 'LANGUAGE', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'LANGUAGE'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'TEXT_ID'); ?>
		<?php echo $form->textField($model, 'TEXT_ID', array('maxlength' => 1024)); ?>
		<?php echo $form->error($model,'TEXT_ID'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'TEXT'); ?>
		<?php echo $form->textField($model, 'TEXT', array('maxlength' => 2024)); ?>
		<?php echo $form->error($model,'TEXT'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'COUNTER'); ?>
		<?php echo $form->textField($model, 'COUNTER'); ?>
		<?php echo $form->error($model,'COUNTER'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->