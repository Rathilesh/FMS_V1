<?php
$this->breadcrumbs=array(
	'Mdmenuobjects'=>array('index'),
	$model->ID,
);

$this->menu=array(
array('label'=>'List MDMENUOBJECT','url'=>array('index')),
array('label'=>'Create MDMENUOBJECT','url'=>array('create')),
array('label'=>'Update MDMENUOBJECT','url'=>array('update','id'=>$model->ID)),
array('label'=>'Delete MDMENUOBJECT','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage MDMENUOBJECT','url'=>array('admin')),
);
?>

<h1>View MDMENUOBJECT #<?php echo $model->ID; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'ID',
		'OBJECT_ID',
		'OBJECT_TYPE',
		'DESCRIPTION',
		'MENU_PROMPT',
		'WEF',
		'WET',
		'CREATOR_ID',
		'CREATED_ON',
		'MODIFIER_ID',
		'MODIFIED_ON',
		'DISPLAY_TITLE',
),
)); ?>
