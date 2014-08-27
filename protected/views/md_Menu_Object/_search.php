<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'ID',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'OBJECT_ID',array('class'=>'span5','maxlength'=>50)); ?>

		<?php echo $form->textFieldRow($model,'OBJECT_TYPE',array('class'=>'span5','maxlength'=>20)); ?>

		<?php echo $form->textFieldRow($model,'DESCRIPTION',array('class'=>'span5','maxlength'=>254)); ?>

		<?php echo $form->textFieldRow($model,'MENU_PROMPT',array('class'=>'span5','maxlength'=>150)); ?>

		<?php echo $form->textFieldRow($model,'WEF',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'WET',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'CREATOR_ID',array('class'=>'span5','maxlength'=>30)); ?>

		<?php echo $form->textFieldRow($model,'CREATED_ON',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'MODIFIER_ID',array('class'=>'span5','maxlength'=>30)); ?>

		<?php echo $form->textFieldRow($model,'MODIFIED_ON',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'DISPLAY_TITLE',array('class'=>'span5','maxlength'=>150)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
