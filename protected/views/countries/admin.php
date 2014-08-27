<?php
/* @var $this CountriesController */
/* @var $model Countries */

//$this->breadcrumbs=array(
//	'Countries'=>array('index'),
//	'Manage',
//);

//$this->menu=array(
//	array('label'=>'List Countries', 'url'=>array('index')),
//	array('label'=>'Create Countries', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#countries-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<style>
#countries-grid { float:left; }
</style>
<div  id="patternDiv">
 <div class="note"> 
    <div class="labelImage"></div>
        <div class="LabelMsg">
<p><?php 
               $Getlabelname = new Get_Labelname_Cls();
               echo $Getlabelname->Get_Labelname_Fnc("2042"); 
         ?></p>
</div></div></div>

<!--
<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>-->


<?php 
//$this->widget('zii.widgets.grid.CGridView', array(
//	'id'=>'countries-grid',
//	'dataProvider'=>$model->search(),
//	'filter'=>$model,
//	'columns'=>array(
//		'ID',
//		'COUNTRY_CODE',
//		'COUNTRY_NAME',
//		array(
//			'class'=>'CButtonColumn',
//		),
//	),
//));

?>
<?php
    // add the (closed) dialog for the iframe
    $this->beginWidget('zii.widgets.jui.CJuiDialog',
                        array(
                                'id'=>'cru-dialog',
                                'options'=>array( 'title'=>'Create Form',
                                                  'autoOpen'=>false,
                                                  'modal'=>false,
                                                  'width'=>850,
                                                  'height'=>500,
                                                  'show'=>array('effect'=>'explode','duration'=>1000,),
                                                  'hide'=>array ( 'effect'=>'explode','duration'=>500,),
                                                ),
                              )
                        );
     $this->endWidget();
?>
<div id="grid_align_left_must" style="">
<?php
    $this->widget('bootstrap.widgets.TbExtendedGridView',
                   array(
                          'id'=>'countries-grid',
                          'dataProvider'=>$model->search(),
                          'filter'=>$model,
                          'type'=>'striped bordered',
                          'columns'=>array( 'COUNTRY_CODE',
                                                 array( 'name'=>'COUNTRY_NAME',
                                                    'class' => 'bootstrap.widgets.TbEditableColumn',
                                                    'headerHtmlOptions' => array('style' => 'width:400px'),
                                                    'editable' => array(
                                                    'url' => $this->createUrl('countries/InlineUpdate'),  
                                                    //see InlineUpadte Function in Controller
                                                    'type' => 'text',
                                                )
                                            ),
                                            array( 'class'=>'bootstrap.widgets.TbButtonColumn',
                                                   'template'=>'{delete}',
                                                 ),
                                          ),
                        )
                );
?>
</div>