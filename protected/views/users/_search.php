<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'USR_ID'); ?>
		<?php echo $form->textField($model,'USR_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USR_NAME'); ?>
		<?php echo $form->textField($model,'USR_NAME',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USR_EU_ORGN_CODE'); ?>
		<?php echo $form->textField($model,'USR_EU_ORGN_CODE',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USR_PER_NO'); ?>
		<?php echo $form->textField($model,'USR_PER_NO',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USR_PASSWORD'); ?>
		<?php echo $form->textField($model,'USR_PASSWORD',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USR_STATUS'); ?>
		<?php echo $form->textField($model,'USR_STATUS',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USR_PWD_CHANGED_ON'); ?>
		<?php echo $form->textField($model,'USR_PWD_CHANGED_ON'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USR_APP_USER_FLAG'); ?>
		<?php echo $form->textField($model,'USR_APP_USER_FLAG',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->