<?php
/* @var $this HrlabelController */
/* @var $model Hrlabel */

Yii::app()->clientScript->registerScript('search', "
$('.search-form form').submit(function(){
	$('#hrlabel-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<style>
    .table {
    width: auto;
}
</style>
<div  id="patternDiv">
 <div class="note"> 
    <div class="labelImage"></div>
        <div class="LabelMsg">
<p>Manage  Labels</p>
</div></div></div>




<?php
//--------------------- begin new code --------------------------
// add the (closed) dialog for the iframe
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id'=>'cru-dialog',
    'options'=>array(
        'title'=>'Create Form',
        'autoOpen'=>false,
        'modal'=>false,
        'width'=>850,
        'height'=>500,
        'show'=>array(
                'effect'=>'explode',
                'duration'=>1000,
        ),
        'hide'=>array(
            'effect'=>'explode',
            'duration'=>500,
        ),
    ),
));
$this->endWidget();
//--------------------- end new code --------------------------
?>
<div style="width: auto; height: auto; float: left">
<?php
    $this->widget('bootstrap.widgets.TbExtendedGridView',array(
    'id'=>'hrlabel-grid',
	
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'type'=>'striped bordered',
    'columns'=>array(
    //'LANGUAGE',
    array(
        'name'=>'LANGUAGE',
        'value'=>'($data->LANGUAGE==01)?"English":"French"',
        'headerHtmlOptions' => array('style' => 'width:100px'),
    ),
        
        array(
        'name'=>'TEXT_ID',
        //'value'=>'($data->LANGUAGE==01)?"English":"French"',
        'headerHtmlOptions' => array('style' => 'width:100px'),
    ),
    //'',// 'TEXT',//'COUNTER',
    array(
    'name'=>'TEXT',
        'class' => 'bootstrap.widgets.TbEditableColumn',
        'headerHtmlOptions' => array('style' => 'width:150px'),
        'editable' => array(
            'url' => $this->createUrl('hrlabel/InlineUpdate'),  //see InlineUpadte Function in Controller
            'type' => 'text',

        )
    ),
          array(
    'name'=>'COUNTER',
        'class' => 'bootstrap.widgets.TbEditableColumn',
        'headerHtmlOptions' => array('style' => 'width:20px'),
        'editable' => array(
            'url' => $this->createUrl('hrlabel/InlineUpdate'),  //see InlineUpadte Function in Controller
            'type' => 'text',

        )
    ),
    array(
    'class'=>'bootstrap.widgets.TbButtonColumn',
        'template'=>'{delete}',
    ),
    ),
    ));
?>
</div>