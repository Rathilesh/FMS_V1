<?php
/* @var $this SALARY_SCALE_DTLController */
/* @var $model SALARY_SCALE_DTL */

$this->breadcrumbs=array(
	'Salary  Scale  Dtls'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List SALARY_SCALE_DTL', 'url'=>array('index')),
	array('label'=>'Create SALARY_SCALE_DTL', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#salary--scale--dtl-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Salary  Scale  Dtls</h1>

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
	'id'=>'salary--scale--dtl-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID',
		'NOTCH',
		'EFFECIENCY_BAR',
		'STAGE_AMOUNT',
		'SALDTL_INCREMENT',
		'SALARY_ID',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
