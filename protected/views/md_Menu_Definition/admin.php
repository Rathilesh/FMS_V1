<?php
/**
 * Created  By  : ® ℛaThIlEsH ®  
 * Created  On  : 23-Aug-2013
 * Modified By  :
 * Modified On  :
 * Purpose      : Menu Defifnition  admin
 */

/* @var $this Md_Menu_DefinitionController */
/* @var $model Md_Menu_Definition */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#md--menu--definition-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div  id="patternDiv">
 <div class="note"> 
    <div class="labelImage"></div>
        <div class="LabelMsg">
<p>Manage Md  Menu  Definitions</p>
</div></div></div>
<!-- search-form -->
<style>
    input[type="checkbox"]  { width:15px; margin-top: 3px; }
    #mdmenuobject-grid_c0_all { margin: 0px}  
	#mdmenuobject-grid { float:left}
    .table {  float: left; width:800px}
</style>

<script type="text/javascript">
    // as a global variable
    var gridId = "mdmenuobject-grid";

    $(function(){
        // prevent the click event
        $(document).on('click','#mdmenuobject-grid a.bulk-action',function() {
            return false;
        });
    });
    function batchActions(values){
        //alert("here");
        var url = $(this).attr('href');
        //alert(url);
       // alert(values);
        var ids = new Array();
        if(values.size()>0){
            values.each(function(idx){
                ids.push($(this).val());
            });
            //alert(ids); exit;
            $.ajax({
                type: "POST",
                url: "batchDelete",
                data: {"ids":ids},
                dataType:'json',
                success: function(resp){
                    //alert( "Data Saved: " + resp);
                    if(resp.status == "success"){
                       $.fn.yiiGridView.update(gridId);
                       alert("deleted Successfully")
                    }else{
                        alert(resp.msg);
                    }
                }
            });
        }
    }
</script>
<div  id="grid_align_left_must" style="">
<?php $this->widget('bootstrap.widgets.TbExtendedGridView',array(
        'id'=>'mdmenuobject-grid',
        'dataProvider'=>$model->search(),
        'filter'=>$model,
        'type'=>'striped bordered',
		
          'bulkActions' => array(
                'actionButtons' => array(
                        array(
                                'buttonType' => 'button', //'button',
                                'id'=>'ID',
                                'type' => '',
                                'size' => 'small',
                                'label' => 'Delete',
                                'icon'=>'icon-remove',
                'url' => array('batchDelete'),
                'htmlOptions' => array(
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
        
        'columns'=>array(
            //'ID',
            array(
                    'name'=>'SHORT_NAME',
                    'class' => 'bootstrap.widgets.TbEditableColumn',
                    'headerHtmlOptions' => array('style' => 'width:130px'),
                    'editable' => array(
                        'url' => $this->createUrl('md_menu_definition/InlineUpdate'),  //see InlineUpadte Function in Controller
                        'type' => 'text',

                                        )
                ),
            array(
                    'name'=>'MENU_PROMPT',
                    'class' => 'bootstrap.widgets.TbEditableColumn',
                    'headerHtmlOptions' => array('style' => 'width:130px'),
                    'editable' => array(
                        'url' => $this->createUrl('md_menu_definition/InlineUpdate'),  //see InlineUpadte Function in Controller
                        'type' => 'text',

                                        )
                ),
            array(
                    'name'=>'DESCRIPTION',
                    'class' => 'bootstrap.widgets.TbEditableColumn',
                    'headerHtmlOptions' => array('style' => 'width:130px'),
                    'editable' => array(
                        'url' => $this->createUrl('md_menu_definition/InlineUpdate'),  //see InlineUpadte Function in Controller
                        'type' => 'text',

                                        )
                ),
				array(
                    'name'=>'MMO_ID',
                    'headerHtmlOptions' => array('style' => 'width:100px'),
                ),
				array(
                    'name'=>'SUBMENU_MMD_ID',
                    'headerHtmlOptions' => array('style' => 'width:100px'),
                ),
            /*
            'MMD_ID',
            'CREATOR_ID',
            'CREATED_ON',
            'MODIFIER_ID',
            'MODIFIED_ON',
            'DISPLAY_ORDER',
            */
		 array(
                'class'=>'bootstrap.widgets.TbButtonColumn',
                'headerHtmlOptions' => array('style' => 'width:30px'),
                'template'=>'{delete}',
                 ),
	),
)); ?>
</div>