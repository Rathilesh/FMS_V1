<?php
/* @var $this Salary_scaleController */
/* @var $model Salary_scale */

$this->breadcrumbs=array(
	'Salary Scales'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Salary_scale', 'url'=>array('index')),
	array('label'=>'Create Salary_scale', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#salary-scale-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Salary Scales</h1>

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
	'id'=>'salary-scale-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID',
		'SHORT_NAME',
		'START_AMOUNT',
		'END_AMOUNT',
		'WEF',
		'WET',
		/*
		'POST_ID',
		'GRADE_ID',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
