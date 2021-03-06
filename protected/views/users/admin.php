<?php
/* @var $this UsersController */
/* @var $model Users */

// $this->breadcrumbs=array(
// 	'Users'=>array('index'),
// 	'Manage',
// );

// $this->menu=array(
// 	array('label'=>'List Users', 'url'=>array('index')),
// 	array('label'=>'Create Users', 'url'=>array('create')),
// );

// Yii::app()->clientScript->registerScript('search', "
// $('.search-button').click(function(){
// 	$('.search-form').toggle();
// 	return false;
// });
// $('.search-form form').submit(function(){
// 	$('#users-grid').yiiGridView('update', {
// 		data: $(this).serialize()
// 	});
// 	return false;
// });
// ");
?>

<h1>Manage Users</h1>

<!-- <p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p> -->



<!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'users-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'USR_ID',
		'USR_NAME',
		'USR_EU_ORGN_CODE',
		'USR_PER_NO',
		'USR_PASSWORD',
		'USR_STATUS',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
