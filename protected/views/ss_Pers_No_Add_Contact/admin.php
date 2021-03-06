<?php
/* @var $this Ss_Pers_No_Add_ContactController */
/* @var $model Ss_Pers_No_Add_Contact */

$this->breadcrumbs=array(
	'Ss  Pers  No  Add  Contacts'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Ss_Pers_No_Add_Contact', 'url'=>array('index')),
	array('label'=>'Create Ss_Pers_No_Add_Contact', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ss--pers--no--add--contact-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Ss  Pers  No  Add  Contacts</h1>

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
	'id'=>'ss--pers--no--add--contact-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'PNAC_EU_ORGN_CODE',
		'PNAC_ID',
		'PNAC_PER_NO',
		'PNAC_CHANGE_FOR_TAB',
		'PNAC_RECORD_TYPE',
		'PNAC_INSERT_UPDATE_TAG',
		/*
		'PNAC_NEW_PN_NUMBER',
		'PNAC_NEW_PN_ISSUE_PLACE',
		'PNAC_NEW_PN_ISSUE_COUNTRY_CODE',
		'PNAC_NEW_PN_WEF_DATE',
		'PNAC_NEW_PN_WET_DATE',
		'PNAC_OLD_PN_NUMBER',
		'PNAC_OLD_PN_ISSUE_PLACE',
		'PNAC_OLD_PN_ISSUE_COUNTRY_CODE',
		'PNAC_OLD_PN_WEF_DATE',
		'PNAC_OLD_PN_WET_DATE',
		'PNAC_NEW_PPE_NUMBER_TYPE',
		'PNAC_NEW_PPE_SLNO',
		'PNAC_NEW_PPE_NUMBER_ADDRESS',
		'PNAC_OLD_PPE_NUMBER_TYPE',
		'PNAC_OLD_PPE_SLNO',
		'PNAC_OLD_PPE_NUMBER_ADDRESS',
		'PNAC_NEW_PADD_ADDRESS1',
		'PNAC_NEW_PADD_ADDRESS2',
		'PNAC_NEW_PADD_ADDRESS3',
		'PNAC_NEW_PADD_CITY',
		'PNAC_NEW_PADD_COUNTRY_CODE',
		'PNAC_NEW_PADD_ADDRESS4',
		'PNAC_NEW_PADD_ADDRESS5',
		'PNAC_NEW_PADD_ADDRESS6',
		'PNAC_OLD_PADD_ADDRESS1',
		'PNAC_OLD_PADD_ADDRESS2',
		'PNAC_OLD_PADD_ADDRESS3',
		'PNAC_OLD_PADD_CITY',
		'PNAC_OLD_PADD_COUNTRY_CODE',
		'PNAC_OLD_PADD_ADDRESS4',
		'PNAC_OLD_PADD_ADDRESS5',
		'PNAC_OLD_PADD_ADDRESS6',
		'PNAC_COLUMN_NAME1',
		'PNAC_COLUMN_TYPE1',
		'PNAC_COLUMN_VALUE1',
		'PNAC_COLUMN_NAME2',
		'PNAC_COLUMN_TYPE2',
		'PNAC_COLUMN_VALUE2',
		'PNAC_COLUMN_NAME3',
		'PNAC_COLUMN_TYPE3',
		'PNAC_COLUMN_VALUE3',
		'PNAC_COLUMN_NAME4',
		'PNAC_COLUMN_TYPE4',
		'PNAC_COLUMN_VALUE4',
		'PNAC_COLUMN_NAME5',
		'PNAC_COLUMN_TYPE5',
		'PNAC_COLUMN_VALUE5',
		'PNAC_COLUMN_NAME6',
		'PNAC_COLUMN_TYPE6',
		'PNAC_COLUMN_VALUE6',
		'PNAC_COLUMN_NAME7',
		'PNAC_COLUMN_TYPE7',
		'PNAC_COLUMN_VALUE7',
		'PNAC_COLUMN_NAME8',
		'PNAC_COLUMN_TYPE8',
		'PNAC_COLUMN_VALUE8',
		'PNAC_COLUMN_NAME9',
		'PNAC_COLUMN_TYPE9',
		'PNAC_COLUMN_VALUE9',
		'PNAC_COLUMN_NAME10',
		'PNAC_COLUMN_TYPE10',
		'PNAC_COLUMN_VALUE10',
		'PNAC_COLUMN_NAME11',
		'PNAC_COLUMN_TYPE11',
		'PNAC_COLUMN_VALUE11',
		'PNAC_COLUMN_NAME12',
		'PNAC_COLUMN_TYPE12',
		'PNAC_COLUMN_VALUE12',
		'PNAC_COLUMN_NAME13',
		'PNAC_COLUMN_TYPE13',
		'PNAC_COLUMN_VALUE13',
		'PNAC_COLUMN_NAME14',
		'PNAC_COLUMN_TYPE14',
		'PNAC_COLUMN_VALUE14',
		'PNAC_COLUMN_NAME15',
		'PNAC_COLUMN_TYPE15',
		'PNAC_COLUMN_VALUE15',
		'PNAC_COLUMN_NAME16',
		'PNAC_COLUMN_TYPE16',
		'PNAC_COLUMN_VALUE16',
		'PNAC_COLUMN_NAME31',
		'PNAC_COLUMN_TYPE31',
		'PNAC_COLUMN_VALUE31',
		'PNAC_COLUMN_NAME32',
		'PNAC_COLUMN_TYPE32',
		'PNAC_COLUMN_VALUE32',
		'PNAC_COLUMN_NAME33',
		'PNAC_COLUMN_TYPE33',
		'PNAC_COLUMN_VALUE33',
		'PNAC_COLUMN_NAME34',
		'PNAC_COLUMN_TYPE34',
		'PNAC_COLUMN_VALUE34',
		'PNAC_COLUMN_NAME35',
		'PNAC_COLUMN_TYPE35',
		'PNAC_COLUMN_VALUE35',
		'PNAC_COLUMN_NAME36',
		'PNAC_COLUMN_TYPE36',
		'PNAC_COLUMN_VALUE36',
		'PNAC_COLUMN_NAME37',
		'PNAC_COLUMN_TYPE37',
		'PNAC_COLUMN_VALUE37',
		'PNAC_COLUMN_NAME38',
		'PNAC_COLUMN_TYPE38',
		'PNAC_COLUMN_VALUE38',
		'PNAC_COLUMN_NAME39',
		'PNAC_COLUMN_TYPE39',
		'PNAC_COLUMN_VALUE39',
		'PNAC_COLUMN_NAME40',
		'PNAC_COLUMN_TYPE40',
		'PNAC_COLUMN_VALUE40',
		'PNAC_COLUMN_NAME41',
		'PNAC_COLUMN_TYPE41',
		'PNAC_COLUMN_VALUE41',
		'PNAC_COLUMN_NAME42',
		'PNAC_COLUMN_TYPE42',
		'PNAC_COLUMN_VALUE42',
		'PNAC_COLUMN_NAME43',
		'PNAC_COLUMN_TYPE43',
		'PNAC_COLUMN_VALUE43',
		'PNAC_COLUMN_NAME44',
		'PNAC_COLUMN_TYPE44',
		'PNAC_COLUMN_VALUE44',
		'PNAC_COLUMN_NAME45',
		'PNAC_COLUMN_TYPE45',
		'PNAC_COLUMN_VALUE45',
		'PNAC_COLUMN_NAME46',
		'PNAC_COLUMN_TYPE46',
		'PNAC_COLUMN_VALUE46',
		'PNAC_ENTERED_DATE',
		'PNAC_IS_CANCEL_BY_REQUESTER',
		'PNAC_APPROVE_OR_REJECT_TAG',
		'PNAC_APPROVE_REJECT_BY_PER_NO',
		'PNAC_APPROVE_REJECT_DATE',
		'PNAC_EFFECT_REMARKS',
		'PNAC_INSERT_UPDATE_STATUS',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
