<?php
/* @var $this HrlabelController */
/* @var $model Hrlabel */

//$this->breadcrumbs=array(
//	'Hrlabels'=>array('index'),
//	'Create',
//);

//$this->menu=array(
//	array('label'=>'List Hrlabel', 'url'=>array('index')),
//	array('label'=>'Manage Hrlabel', 'url'=>array('admin')),
//);
//?>
    <div class="note red rounded">
        <p><?php
            $Getlabelname=new Get_Labelname_Cls();
            echo  $Getlabelname->Get_Labelname_Fnc("2026");?></p>
    </div>


<?php echo $this->renderPartial('contact', array('model'=>$model)); ?>