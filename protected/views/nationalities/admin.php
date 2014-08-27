<?php
/* @var $this NationalitiesController */
/* @var $model Nationalities */

//$this->breadcrumbs=array(
//	'Nationalities'=>array('index'),
//	'Manage',
//);
//
//$this->menu=array(
//	array('label'=>'List Nationalities', 'url'=>array('index')),
//	array('label'=>'Create Nationalities', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search',"
    var gridId = 'hrlabel-grid';

    $(function(){
        // prevent the click event
        $(document).on('click','#hrlabel-grid a.bulk-action',function() {
            return false;
        });
    });
    function batchActions(values){
      var is_sure =confirm('Are You Sure You Want To Delete These Items ?');
       if (is_sure==true) {  
        var url = $(this).attr('href');
        var ids = new Array();
        if(values.size()>0){
            values.each(function(idx){
                ids.push($(this).val());
            });
            $.ajax({
                type: 'POST',
                url: 'batchDelete',
                data: {'ids':ids},
                dataType:'json',
                success: function(resp){
                    if(resp.status == 'success'){
                       $.fn.yiiGridView.update(gridId);
                      // alert('deleted Successfully')
                       bootbox.alert('Deleted Successfully');
                    }else{
                         bootbox.alert('Please try Later Some Problem Occured!');
                        alert(resp.msg);
                    }
                }
            });
        }
    } else {  alert ('no action');  }  } 

");
?>
<style>
    input[type="checkbox"]  { width:15px; margin-top: 3px; }
    #hrlabel-grid_c0_all  { margin: 0px;}  
    .table thead th { vertical-align: middle}
    .table { float: left; width:  800px}
</style>
<div  id="patternDiv">
 <div class="note"> 
    <div class="labelImage"></div>
        <div class="LabelMsg">
     <p><?php 
            $Getlabelname = new Get_Labelname_Cls();
            echo $Getlabelname->Get_Labelname_Fnc("2035"); 
          ?>
     </p> 
     
 </div></div></div>

<!--<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>-->

<?php 
//    $this->widget('zii.widgets.grid.CGridView', array(
//	'id'=>'nationalities-grid',
//	'dataProvider'=>$model->search(),
//	'filter'=>$model,
//	'columns'=>array(
//		'ID',
//		'NATIONALITY_CODE',
//		'NATIONALITY_NAME',
//		array(
//			'class'=>'CButtonColumn',
//		),
//	),
//)); ?>

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
                                                  'show'=>array('effect'=>'explode',
                                                                 'duration'=>1000,
                                                                ),
                                                  'hide'=>array ( 'effect'=>'explode',
                                                                  'duration'=>500,
                                                                ),
                                                ),
                              )
                        );
     $this->endWidget();
?>
<div id="grid_align_left_must" style="">
<?php
    $this->widget('bootstrap.widgets.TbExtendedGridView',
                   array(
                          'id'=>'hrlabel-grid',
                          'dataProvider'=>$model->search(),
                          'filter'=>$model,
                          'type'=>'striped bordered',
                          'bulkActions' => array(
                            'actionButtons' => array(
                                array(
                                'buttonType' => 'button', //'button',
                                'id'=>'ID',
                                'type' => '',
                                'icon'=>'icon-remove',
                                'size' => 'mini',
                                'label' => 'Delete',
                                'url' => array('batchDelete'),
                                'htmlOptions' => array  (
                                    'class'=>'bulk-action'
                                                        ),
                                'click' => 'js:batchActions'
                                    )
                                                    ),
                        // if grid doesn't have a checkbox column type, it will attach
                        // one and this configuration will be part of it
                                'checkBoxColumnConfig' => array(
                                'name' => 'ID'
                                                                ),
                                    ),
                          'columns'=>array( 'NATIONALITY_CODE',
                                             array( 'name'=>'NATIONALITY_NAME',
                                                    'class' => 'bootstrap.widgets.TbEditableColumn',
                                                    'headerHtmlOptions' => array('style' => 'width:400px'),
                                                    'editable' => array(
                                                    'url' => $this->createUrl('nationalities/InlineUpdate'),  
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