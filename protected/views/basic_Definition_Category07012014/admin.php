<?php
/* @var $this Basic_Definition_CategoryController */
/* @var $model Basic_Definition_Category */

$this->breadcrumbs=array(
    'Basic  Definition  Categories'=>array('index'),
    'Manage',
);

$this->menu=array(
    array('label'=>'List Basic_Definition_Category', 'url'=>array('index')),
    array('label'=>'Create Basic_Definition_Category', 'url'=>array('create')),
);

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

<h1>Manage Basic  Definition  Categories</h1>

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
    'id'=>'basic--definition--category-grid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'DEFINITION_TYPE',
        'DESCRIPTION',
        'IS_AMEND',
        'IS_DISPLAY',
        'IS_UNIVERSAL',
        'IS_COMPULSORY',
        /*
        'NO_OF_RECORDS',
        */
        array(
            'class'=>'CButtonColumn',
        ),
    ),
)); ?>