<?php
/* @var $this POSITIONController */
/* @var $model POSITION */

$this->breadcrumbs=array(
	'Positions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List POSITION', 'url'=>array('index')),
	array('label'=>'Create POSITION', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#position-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Positions</h1>

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
	'id'=>'position-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID',
		'SHORT_NAME',
		'POSITION',
		'MAX_HEAD_COUNT',
		'HEAD_COUNT',
		'SP_REQUIRED',
		/*
		'NOTICE_PERIOD',
		'NOTICE_PERIOD_TOLERANCE',
		'PROBATION',
		'PROBATION_PERIOD_UOM',
		'PROBATION_PERIOD',
		'PROBATION_PERIOD_FOR_PC',
		'ENTITY_ID',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
