<?php
/* @var $this Entity_TypeController */
/* @var $model Entity_Type */

$this->breadcrumbs=array(
	'Entity  Types'=>array('index'),
	'Manage',
);




?>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'entity--type-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID',
		'ENTITY_TYPE',
		'ENTITY_LEVEL',
		'IS_LOCATION',
		'IS_FUNCTION',
		'IS_POSITION',
		/*
		'ENTITY_ID',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
