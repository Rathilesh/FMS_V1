<?php
/* @var $this PERSONNEL_UNEMPLOYMENT_DETAILController */
/* @var $model PERSONNEL_UNEMPLOYMENT_DETAIL */

$this->breadcrumbs=array(
	'Personnel  Unemployment  Details'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PERSONNEL_UNEMPLOYMENT_DETAIL', 'url'=>array('index')),
	array('label'=>'Create PERSONNEL_UNEMPLOYMENT_DETAIL', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#personnel--unemployment--detail-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Personnel  Unemployment  Details</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'personnel--unemployment--detail-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'PUD_EU_ORGN_CODE',
		'PUD_UNIT_CODE',
		'PUD_PER_NO',
		'PUD_FROM_MONTH',
		'PUD_FROM_YEAR',
		'PUD_TO_MONTH',
		/*
		'PUD_TO_YEAR',
		'PUD_ACTIVITY_DURING_PERIOD',
		'PUD_NAME_OF_CONFIRMING_PARTY',
		'PUD_ADDR_OF_CONFIRMING_PARTY',
		'PUD_TELEPHONE_NO',
		'PUD_EMAIL_ID',
		'PUD_ENTERED_BY_PER_NO',
		'PUD_ENTERED_DATE',
		'PUD_APPROVED_BY_PER_NO',
		'PUD_APPROVED_DATE',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
