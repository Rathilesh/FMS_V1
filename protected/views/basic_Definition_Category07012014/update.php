<?php
/* @var $this Basic_Definition_CategoryController */
/* @var $model Basic_Definition_Category */

$this->breadcrumbs=array(
    'Basic  Definition  Categories'=>array('index'),
    $model->DEFINITION_TYPE=>array('view','id'=>$model->DEFINITION_TYPE),
    'Update',
);

$this->menu=array(
    array('label'=>'List Basic_Definition_Category', 'url'=>array('index')),
    array('label'=>'Create Basic_Definition_Category', 'url'=>array('create')),
    array('label'=>'View Basic_Definition_Category', 'url'=>array('view', 'id'=>$model->DEFINITION_TYPE)),
    array('label'=>'Manage Basic_Definition_Category', 'url'=>array('admin')),
);
?>

<h1>Update Basic_Definition_Category <?php echo $model->DEFINITION_TYPE; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>