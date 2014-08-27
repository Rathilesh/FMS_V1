<?php
/* @var $this Personnel_VController */
/* @var $dataProvider CActiveDataProvider */

 /*?>$this->breadcrumbs=array(
	'Personnel  Vs',
);

$this->menu=array(
	array('label'=>'Create Personnel_V', 'url'=>array('create')),
	array('label'=>'Manage Personnel_V', 'url'=>array('admin')),
);
?><?php */?>

<div  id="patternDiv">
 <div class="note"> 
    <div class="labelImage"></div>
        <div class="LabelMsg">
     <p>Personnel
     </p> 
     
 </div></div></div>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
