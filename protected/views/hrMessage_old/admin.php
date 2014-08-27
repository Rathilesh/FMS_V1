<?php
/* @var $this HrMessageController */
/* @var $model HrMessage */

//$this->breadcrumbs=array(
//	'Hr Messages'=>array('index'),
//	'Manage',
//);
//
//$this->menu=array(
//	array('label'=>'List HrMessage', 'url'=>array('index')),
//	array('label'=>'Create HrMessage', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#hr-message-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<style>
    .table { width: 100%; float: left}
</style>
<div  id="patternDiv">
 <div class="note"> 
    <div class="labelImage"></div>
        <div class="LabelMsg">
<p> <?php 
               $Getlabelname = new Get_Labelname_Cls();
               echo $Getlabelname->Get_Labelname_Fnc("2045"); 
         ?></p>
</div></div></div>





<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php 
//$this->renderPartial('_search',array(
//	'model'=>$model,
//)); 

?>
</div><!-- search-form -->

<?php
//   $this->widget('zii.widgets.grid.CGridView', array(
//	'id'=>'hr-message-grid',
//	'dataProvider'=>$model->search(),
//	'filter'=>$model,
//	'columns'=>array(
//		'ID',
//		'TEXT',
//		'USAGE_COUNT',
//		array(
//			'class'=>'CButtonColumn',
//		),
//	),
//      )); 
//   
   
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
<div style="width: auto; height: auto; float: left">
<?php
    $this->widget('bootstrap.widgets.TbExtendedGridView',
                   array(
                          'id'=>'countries-grid',
                          'dataProvider'=>$model->search(),
                          'filter'=>$model,
                          'type'=>'striped bordered',
                          //'enableSorting'=>true,
                          'columns'=>array( 
                              
                                            array( 'name'=>'ID',
                                                'filter'=>''),
                                             
                              
                                             array( 'name'=>'TEXT',
                                                    'class' => 'bootstrap.widgets.TbEditableColumn',
                                                    'headerHtmlOptions' => array('style' => 'width:600px'),
                                                    'editable' => array(
                                                    'url' => $this->createUrl('hrmessage/InlineUpdate'),  
                                                    //see InlineUpadte Function in Controller
                                                    'type' => 'textarea',
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