<?php
/* @var $this ENTITY_BANKController */
/* @var $model ENTITY_BANK */

$this->breadcrumbs=array(
	'Entity  Banks'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ENTITY_BANK', 'url'=>array('index')),
	array('label'=>'Create ENTITY_BANK', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#entity--bank-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Entity  Banks</h1>

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
	'id'=>'entity--bank-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID',
		'ACCOUNT_NO',
		'ACCOUNT_OWNER',
		'ACCOUNT_TYPE',
		'CURRENCY',
		'NETPAY_CREDIT',
		/*
		'WEF',
		'WET',
		'PARTY_ID',
		'OSTRU_ID',
		'BANK_ID',
		'ENTITY_ID',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
