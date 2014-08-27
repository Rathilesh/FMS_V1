<?php
$this->breadcrumbs=array(
	'Mdmenuobjects',
);

$this->menu=array(
array('label'=>'Create MDMENUOBJECT','url'=>array('create')),
array('label'=>'Manage MDMENUOBJECT','url'=>array('admin')),
);
?>

<h1>Mdmenuobjects</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
