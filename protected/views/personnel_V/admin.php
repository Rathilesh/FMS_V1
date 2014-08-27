<?php
/* @var $this Personnel_VController */
/* @var $model Personnel_V */


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#personnel--v-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<!--<h1>  Vs</h1>-->

<!--<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>-->

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php // $this->renderPartial('_search',array(
	//'model'=>$model,
//)); 
?>
</div><!-- search-form -->
<script>
$(document).ready(function(){
  //$('.grid_insert_table td:last').text("color");

});
</script>
<style>
#personnel--v-grid { width:800px}
</style>
<div id="grid_align_left_must" style="">
<?php 
//$model=Personnel_V::model()->findByPk();

$this->widget('bootstrap.widgets.TbExtendedGridView', array(
	'id'=>'personnel--v-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'type'=>'striped bordered',
	'columns'=>array(
		'PERSONAL_ID',
		//'SALUTATION',
		array(

         'name'=>'PREFERRED_NAME',

         'value'=>'$data->SALUTATION."   ".$data->PREFERRED_NAME',
		 

     ),
	 array(

         'name'=>'DOB',
		 'type'  => 'html',

         'value'=>'$data["DOB"]<>""?$data["DOB"]:"<span  style=\"color:red;font-size: 11px;\">Not Set</span>"',
		 

     ),
	 //'DOB',
	 //'GENDER',
	 array(

         'name'=>'GENDER',
 		 'type'  => 'html',
         'value'=>'$data["GENDER"]<>""?"Male":"<span style=\"color:red; font-size: 11px;\">Not Set</span>"',
		 

     ),
	 array(
         'header'=>'Status',
		 'name'=>'ACTIVE',
         'type'  => 'html',
		 'headerHtmlOptions' => array('style' => 'width:80px'),
         'value'=>'$data["ACTIVE"]==1?"<span class=\"label label-success\">Active</span>":"<span class=\"label label-warning\">Inactive</span>"',
     ),

	 

		//'FIRST_NAME',
//		'MIDDILE_NAME',
//		'LAST_NAME',
		/*
		'PREFERED_NAME',
		'ALTERNATE_NAME',
		'DOB',
		'GENDER',
		'RELIGION',
		'BLOOD_GROUP',
		'SUBCAST',
		'FATHER',
		'MOTHER',
		'NATIONALITY',
		'CASUAL',
		'MARRIED',
		'SECONDMENT',
		'SECONDMENT_ORG_ID',
		'VERIFIED',
		'ACTIVE',
		'ADDRESS1',
		'ADDRESS2',
		'ADDRESS3',
		'ADDRESS4',
		'PHONE',
		'EMAIL',
		'ENTITY_ID',
		*/
		array(
			//'class'=>'bootstrap.widgets.TbButtonColumn',
			
			'class'=>'CButtonColumn',
            
            'template' => '{update}{delete}',  
                    'updateButtonImageUrl' => Yii::app()->baseUrl . '/css/images/' . 'edit_16_16.png',

         // 'deleteButtonImageUrl' => Yii::app()->baseUrl . '/images/' . 'delete_16_16.png',
                    'deleteButtonImageUrl' => Yii::app()->baseUrl . '/images/' . 'delete_16_16.png',
			'buttons'=>array
    (
        'delete' => array
        (
		//'deleteConfirmation' => 'Are you sure you want to delete this item?',
            //'label'=>'Send an e-mail to this user',
//            'imageUrl'=>Yii::app()->request->baseUrl.'/images/email.png',
            //'click'=>"function(){
			//alert('yes it is');
                                    //$.fn.yiiGridView.update('user-grid', {
//                                        type:'POST',
//                                        url:$(this).attr('href'),
//                                        success:function(data) {
//                                              $('#AjFlash').html(data).fadeIn().animate({opacity: 1.0}, 3000).fadeOut('slow');
// 
//                                              $.fn.yiiGridView.update('user-grid');
//                                        }
//                                    })
//                                    return false;
                             // }
                 //    ",
            //'url'=>'Yii::app()->controller->createUrl("delete",array("id"=>$data->PERSONAL_ID))',
        ), 
		'update' => array
        (
		'url'=>'Yii::app()->controller->createUrl("update",array("id"=>$data->PERSONAL_ID))',
		),
		
		
		
		)
	
		),
	),
)); ?>
</div>