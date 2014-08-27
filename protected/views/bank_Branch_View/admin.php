<style>
    btn-primary {
    color: #ffffff;
text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25) !important;
background-color: #006dcc !important;
background-image: -moz-linear-gradient(top, #0088cc, #0044cc) !important;
background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#0088cc), to(#0044cc)) !important;
background-image: -webkit-linear-gradient(top, #0088cc, #0044cc) !important;
background-image: -o-linear-gradient(top, #0088cc, #0044cc) !important;
background-image: linear-gradient(to bottom, #0088cc, #0044cc) !important;
background-repeat: repeat-x !important;
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff0088cc', endColorstr='#ff0044cc', GradientType=0) !important;
border-color: #0044cc #0044cc #002a80 !important;
border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25) !important;
filter: progid:DXImageTransform.Microsoft.gradient(enabled = false) !important;
}
primary:hover,.btn-primary:focus,.btn-primary:active,.btn-primary.active,.btn-primary.disabled,.btn-primary[disabled]{color:#ffffff;background-color:#0044cc;*background-color:#003bb3  !important;}
</style>
<?php   $Getlabelname=new Get_Labelname_Cls();  ?>


<?php
/* @var $this Bank_Branch_ViewController */
/* @var $model Bank_Branch_View */

//$this->breadcrumbs=array(
//	'Bank  Branch  Views'=>array('index'),
//	'Manage',
//);
//
//$this->menu=array(
//	array('label'=>'List Bank_Branch_View', 'url'=>array('index')),
//	array('label'=>'Create Bank_Branch_View', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#bank--branch--view-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<script>
    setTimeout(function() {                  
    $('.error_red').fadeOut('fast');       
}, 2000);                                  
                                            
setTimeout(function() {                     
    $('.success_blue').fadeOut('fast');     
}, 2000); 
    $(document).ready(function(){
     //$(".modal-footer:before a , .modal-footer:after a").addClass("btn-primary");   
    });
    var t;
   function del(t)
   {    
       alert(t);
    //event.preventDefault();
      bootbox.confirm("<p class='modalstyle'><b><img width='30px' src='<?php echo Yii::app()->request->baseUrl; ?>/images/question_red.png'/>Confirmation</b></p><p>Are you sure to delete this Branch ?</p>","No", "Yes", function(result) {
        console.log(result);
        if (result == true) 
            return true;
            else
                return false;
     });
   
   }
    </script>
<style>
    
    .grid_insert_table tbody tr:last-child td {
    
         border-bottom:  1px solid #E8E8E8 !important;
    }
   #Bank_Branch_View_NAME
   {
     width:150px!important;  
}
    .update
    {
        margin-left:-2px;
    }
    .delete
    {
        margin-left:8px;
    }
    
    .modal.fade.in {
top: 34%;
}
.modal {
left: 58% !important;
width: 300px !important;
}
     .modalstyle
    {
        border-bottom: 1px solid #e8e8e8;
        padding-bottom: 6px;         
    }
    .table {
    width: 100%;
}
.grid-view .filters .filter-container { padding: 0px 0px 0px 0px !important}
</style>
<div  id="patternDiv">
 <div class="note"> 
    <div class="labelImage"></div>
        <div class="LabelMsg">
<p><?php echo  $Getlabelname->Get_Labelname_Fnc("140");?></p>
</div></div></div>

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
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php
$baseUrlOn=Yii::app()->request->baseUrl;
$this->widget('bootstrap.widgets.TbExtendedGridView',array(
	'id'=>'bank--branch--view-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
        'type'=>'striped bordered',
	'columns'=>array(
		//'ID',
		//'SHORT_NAME',
               // array('name'=>'SHORT_NAME','header'=>'SHORT NAME'),
		//'NAME',
                array('name'=>'NAME','header'=>'Branch'),
		//'ADDRESS1',
                array('name'=>'ADDRESS1','header'=>'Address'),
		/*'ADDRESS2',
		'ADDRESS3',
		'ADDRESS4',*/
                array('name'=>'ADDRESS3','header'=>''),
		//'COUNTRY',
                array('name'=>'COUNTRY','header'=>''),
		'CONTACT_PERSON',
		'TELEPHONE',
		//'FAX',
		'EMAIL',
		//'URL',
		//'BANK_ID',
		array(
			'class'=>'CButtonColumn',
            
            'template' => '{update}{delete}',  
                    'updateButtonImageUrl' => Yii::app()->baseUrl . '/css/images/' . 'edit_16_16.png',

         // 'deleteButtonImageUrl' => Yii::app()->baseUrl . '/images/' . 'delete_16_16.png',
                    'deleteButtonImageUrl' => Yii::app()->baseUrl . '/images/' . 'delete_16_16.png',
            'buttons' => array(
                
                'delete' =>array(
                               // 'imageUrl'=>Yii::app()->request->baseUrl.'/images/up.png',
                     
                                'url'=>'Yii::app()->createUrl("bank_branch_view/delete", array("id"=>$data->ID) )',
                                'click'=>"function(e) {
                                   var href_link =$(this).attr('href');
                                  e.preventDefault();
                                  var style_append=\"<p class='modalstyle'><b><img width='30px' src='$baseUrlOn/images/question_red.png'>Confirmation</b></p><p>\";
                                   var style_appendend=\"</p>\";
 //bootbox.confirm('<p class='modalstyle'><b><img width='30px' src='<?php echo Yii::app()->request->baseUrl; ?>/images/question_red.png'/>Confirmation</b></p><p>Are you sure to delete this Branch ?</p>','No', 'Yes', function(result) {                                 
bootbox.confirm(style_append+'Are you sure to delete this Branch?'+style_appendend,'No', 'Yes', function(result) {
       // console.log(result);
        if (result == true) {
        

                $.fn.yiiGridView.update('bank--branch--view-grid', {
                                type:'POST',
                                url:href_link,
                                success:function(text,status) {
                               //$.fn.yiiGridView.update('bank--branch--view-grid');
 location.reload();
                                } });
           }
          
            else {
                return false;
                 }
     });

                                }",
                     'afterDelete'=>'function(link,success,data)
                                                       { 
                                                         if(success) 
                                                         { 
                                                           console.log(data);$("#flashMsg").html(data); 
                                                           window.setTimeout( function(){
//                                                             window.location = "bank_branch_view/admin";
                                                          }, 100 );
                                                          
                                                         }
                                                         else
                                                         {
                                                           console.log(data);$("#flashMsg").html(data); 
                                                         }
                                                         
                                                      }',

                                ),
               //'delete'=>array('click'=>'js:del(123)', 'url' =>""),
                //'delete'=>array('click'=>'returnjs:del', 'url' =>""),
               'update' => array( //the name {reply} must be same
                 'label' => 'Edit', // text label of the button
                   'url' => 'CHtml::normalizeUrl(array("bank_view/update?id=".rawurlencode($data->ID)))', //Your URL According to your wish 
                   ),
               ),
		),
	),
)); ?>

