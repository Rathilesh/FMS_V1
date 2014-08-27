<?php
/* @var $this HolidayController */
/* @var $model Holiday */

$this->breadcrumbs=array(
	'Holidays'=>array('index'),
	'Manage',
);

//$this->menu=array(
//	array('label'=>'List Holiday', 'url'=>array('index')),
//	array('label'=>'Create Holiday', 'url'=>array('create')),
//);

//Yii::app()->clientScript->registerScript('search', "
//$('.search-button').click(function(){
//	$('.search-form').toggle();
//	return false;
//});
//$('.search-form form').submit(function(){
//	$('#holiday-grid').yiiGridView('update', {
//		data: $(this).serialize()
//	});
//	return false;
//});
//");
?>

<!--<h1>Manage Holidays</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>-->


<!--</div> search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'holiday-grid',
	'dataProvider'=>$child_model->searchIncludingPermissions($parentID),
	'filter'=>$child_model,
	'columns'=>array(
		'ID',
		'HOLIDAY_DATE',
            'CALD_ID',
//		'DESCRIPTION',
//		'IS_COMPULSORY',
//		'IS_RESTRICTED',
//		'DECLARATION_REFERENCE',
		
		//'DATE_OF_DECLARATION',
		
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
