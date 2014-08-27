<?php
/* @var $this Md_Role_DefinitionController */
/* @var $model Md_Role_Definition */

//$this->breadcrumbs=array(
//	'Md  Role  Definitions'=>array('index'),
//	'Manage',
//);

//$this->menu=array(
//	array('label'=>'List Md_Role_Definition', 'url'=>array('index')),
//	array('label'=>'Create Md_Role_Definition', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#md--role--definition-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<style>
    .table { width: 700px}
</style>
<div  id="patternDiv">
 <div class="note"> 
    <div class="labelImage"></div>
        <div class="LabelMsg">
<p><?php 
               $Getlabelname = new Get_Labelname_Cls();
               echo $Getlabelname->Get_Labelname_Fnc("2048"); 
         ?></p>
</div></div></div>
<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php// $this->renderPartial('_search',array( 	'model'=>$model,)); ?>
    
</div><!-- search-form -->

<?php 
//$this->widget('zii.widgets.grid.CGridView', array(
//	'id'=>'md--role--definition-grid',
//	'dataProvider'=>$model->search(),
//	'filter'=>$model,
//	'columns'=>array(
//		'ID',
//		'SHORT_NAME',
//		'ROLE_NAME',
//		'DESCRIPTION',
//		'CREATOR_ID',
//		'CREATED_ON',
//		/*
//		'MODIFIER_ID',
//		'MODIFIED_ON',
//		*/
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
                          'columns'=>array(   array( 'name'=>'SHORT_NAME',
                                                    'class' => 'bootstrap.widgets.TbEditableColumn',
                                                    'headerHtmlOptions' => array('style' => 'width:400px'),
                                                    'editable' => array(
                                                                        'url' => $this->createUrl('Md_Role_Definition/InlineUpdate'),  
                                                                        //see InlineUpadte Function in Controller
                                                                        'type' => 'text',
                                                                         )
                                                    ),
                                               array( 'name'=>'ROLE_NAME',
                                                      'class' => 'bootstrap.widgets.TbEditableColumn',
                                                      'headerHtmlOptions' => array('style' => 'width:400px'),
                                                      'editable' => array(
                                                                        'url' => $this->createUrl('Md_Role_Definition/InlineUpdate'),  
                                                                        //see InlineUpadte Function in Controller
                                                                        'type' => 'text',
                                                                         )
                                                    ),
                                               array( 'name'=>'DESCRIPTION',
                                                      'class' => 'bootstrap.widgets.TbEditableColumn',
                                                      'headerHtmlOptions' => array('style' => 'width:400px'),
                                                      'editable' => array(
                                                                        'url' => $this->createUrl('Md_Role_Definition/InlineUpdate'),  
                                                                        //see InlineUpadte Function in Controller
                                                                        'type' => 'text',
                                                                         )
                                                    ),
                              
                                              array( 'class'=>'bootstrap.widgets.TbButtonColumn',
                                                   'template'=>'{delete}',
                                                   ),
                                          ) ,
                        )
                );
?>
</div>