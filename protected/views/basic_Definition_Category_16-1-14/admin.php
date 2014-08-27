<?php
/* @var $this Basic_Definition_CategoryController */
/* @var $model Basic_Definition_Category */

//$this->breadcrumbs=array(
//	'Basic  Definition  Categories'=>array('index'),
//	'Manage',
//);

//$this->menu=array(
//	array('label'=>'List Basic_Definition_Category', 'url'=>array('index')),
//	array('label'=>'Create Basic_Definition_Category', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#basic--definition--category-grid').yiiGridView('update', {
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
<div  id="patternDiv" >
    <div class="note">
 <div class="labelImage"></div>
 <div class="LabelMsg"><p> <?php  $Getlabelname =new Get_Labelname_Cls(); 
            echo  $Getlabelname->Get_Labelname_Fnc("134");?></p></div>
</div></div>


<div id="flashMsg" style="display:inline-block;float:left;" ></div>
<div class="form">
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
<!--<div class="search-form" style="display:none">-->
<?php //$this->renderPartial('_search',array(
//	'model'=>$model,
//)); ?>
<!--</div> search-form -->
<!-------START FORM WIDGET--------->           
<div style="width:840px; height:560px; float: left">
<?php $this->widget('bootstrap.widgets.TbExtendedGridView', array(
	'id'=>'basic--definition--category-grid',
	'dataProvider'=>$model->search(),
        'type'=>'striped bordered',
        'filter'=>$model,
	'columns'=>array(
		array('name'=>'DEFINITION_TYPE',
                      'headerHtmlOptions' => array('style' => 'width:150px'),),
		array('name'=>'DESCRIPTION',
                      'headerHtmlOptions' => array('style' => 'width:150px'),),
                array('name'=>'NO_OF_RECORDS',
                      'headerHtmlOptions' => array('style' => 'width:150px'),),
		
		array('name'=>'IS_AMEND',
                      'headerHtmlOptions' => array('style' => 'width:85px'),), 
		array('name'=>'IS_DISPLAY',
                      'headerHtmlOptions' => array('style' => 'width:85px'),), 
		array('name'=>'IS_UNIVERSAL',
                      'headerHtmlOptions' => array('style' => 'width:100px'),), 
		array('name'=>'IS_COMPULSORY',
                      'headerHtmlOptions' => array('style' => 'width:100px'),),
		
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
        'template'=>'{delete} {update} ',
                    'deleteButtonImageUrl'=>'images/edit.png',
		),
	),
)); ?>

</div>