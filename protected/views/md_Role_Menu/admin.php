<?php
/* @var $this Md_Role_MenuController */
/* @var $model Md_Role_Menu */

$this->breadcrumbs=array(
	'Md  Role  Menus'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Md_Role_Menu', 'url'=>array('index')),
	array('label'=>'Create Md_Role_Menu', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#md--role--menu-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Md  Role  Menus</h1>

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
	'id'=>'md--role--menu-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID',
		'MRD_ID',
		'MMD_ID',
		'DISPLAY_GROUP_NAME',
		'DISPLAY_ORDER',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
