<?php if(Yii::app()->user->hasFlash('success')):?>
        <div class="success_blue"> <div class="success_blue_icon"></div>
            <div class="success_blue_msg">
                <?php echo Yii::app()->user->getFlash('success'); ?>
            </div>
        </div>
        <?php elseif(Yii::app()->user->hasFlash('Error')):?>
        <div class="error_red"> <div class="error_red_icon"></div>
            <div class="error_red_msg">
            <?php echo Yii::app()->user->getFlash('Error'); ?>
            </div>
        </div>
<?php endif; ?>

<?php
/* @var $this Bank_ViewController */
/* @var $model Bank_View */

$this->breadcrumbs=array(
	'Bank  Views'=>array('index'),
	'Manage',
);

//$this->menu=array(
//	array('label'=>'List Bank_View', 'url'=>array('index')),
//	array('label'=>'Create Bank_View', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#bank--view-grid').yiiGridView('update', {
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
<p>Manage Bank</p>
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
<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div style="width: auto; height: auto; float: left">
<?php
    $this->widget('bootstrap.widgets.TbExtendedGridView',array(
	'id'=>'bank--view-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
        'type'=>'striped bordered',
	'columns'=>array(
		//'ID',
		'SHORT_NAME',
		'NAME',
		'ADDRESS1',
		/*'ADDRESS2',
		'ADDRESS3',
		'ADDRESS4',*/
		'COUNTRY',
		'CONTACT_PERSON',
		'TELEPHONE',
		//'FAX',
		'EMAIL',
		//'URL',
		//'BANK_ID',
		
		array(
    'class'=>'bootstrap.widgets.TbButtonColumn',
        'template'=>'{update}{delete}',
           'updateButtonImageUrl' => Yii::app()->baseUrl . '/css/images/' . 'edit.png',

    'deleteButtonImageUrl' => Yii::app()->baseUrl . '/css/gridViewStyle/images/' . 'gr-delete.png',
         
    ),
	),
)); ?>
</div>
