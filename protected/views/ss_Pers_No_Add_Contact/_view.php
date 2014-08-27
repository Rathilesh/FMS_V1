<?php
/* @var $this Ss_Pers_No_Add_ContactController */
/* @var $data Ss_Pers_No_Add_Contact */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PNAC_ID), array('view', 'id'=>$data->PNAC_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_EU_ORGN_CODE')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_EU_ORGN_CODE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_PER_NO')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_PER_NO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_CHANGE_FOR_TAB')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_CHANGE_FOR_TAB); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_RECORD_TYPE')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_RECORD_TYPE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_INSERT_UPDATE_TAG')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_INSERT_UPDATE_TAG); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_NEW_PN_NUMBER')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_NEW_PN_NUMBER); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_NEW_PN_ISSUE_PLACE')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_NEW_PN_ISSUE_PLACE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_NEW_PN_ISSUE_COUNTRY_CODE')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_NEW_PN_ISSUE_COUNTRY_CODE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_NEW_PN_WEF_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_NEW_PN_WEF_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_NEW_PN_WET_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_NEW_PN_WET_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_OLD_PN_NUMBER')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_OLD_PN_NUMBER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_OLD_PN_ISSUE_PLACE')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_OLD_PN_ISSUE_PLACE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_OLD_PN_ISSUE_COUNTRY_CODE')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_OLD_PN_ISSUE_COUNTRY_CODE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_OLD_PN_WEF_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_OLD_PN_WEF_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_OLD_PN_WET_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_OLD_PN_WET_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_NEW_PPE_NUMBER_TYPE')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_NEW_PPE_NUMBER_TYPE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_NEW_PPE_SLNO')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_NEW_PPE_SLNO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_NEW_PPE_NUMBER_ADDRESS')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_NEW_PPE_NUMBER_ADDRESS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_OLD_PPE_NUMBER_TYPE')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_OLD_PPE_NUMBER_TYPE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_OLD_PPE_SLNO')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_OLD_PPE_SLNO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_OLD_PPE_NUMBER_ADDRESS')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_OLD_PPE_NUMBER_ADDRESS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_NEW_PADD_ADDRESS1')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_NEW_PADD_ADDRESS1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_NEW_PADD_ADDRESS2')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_NEW_PADD_ADDRESS2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_NEW_PADD_ADDRESS3')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_NEW_PADD_ADDRESS3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_NEW_PADD_CITY')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_NEW_PADD_CITY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_NEW_PADD_COUNTRY_CODE')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_NEW_PADD_COUNTRY_CODE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_NEW_PADD_ADDRESS4')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_NEW_PADD_ADDRESS4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_NEW_PADD_ADDRESS5')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_NEW_PADD_ADDRESS5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_NEW_PADD_ADDRESS6')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_NEW_PADD_ADDRESS6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_OLD_PADD_ADDRESS1')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_OLD_PADD_ADDRESS1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_OLD_PADD_ADDRESS2')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_OLD_PADD_ADDRESS2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_OLD_PADD_ADDRESS3')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_OLD_PADD_ADDRESS3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_OLD_PADD_CITY')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_OLD_PADD_CITY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_OLD_PADD_COUNTRY_CODE')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_OLD_PADD_COUNTRY_CODE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_OLD_PADD_ADDRESS4')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_OLD_PADD_ADDRESS4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_OLD_PADD_ADDRESS5')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_OLD_PADD_ADDRESS5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_OLD_PADD_ADDRESS6')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_OLD_PADD_ADDRESS6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_NAME1')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_NAME1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_TYPE1')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_TYPE1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_VALUE1')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_VALUE1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_NAME2')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_NAME2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_TYPE2')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_TYPE2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_VALUE2')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_VALUE2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_NAME3')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_NAME3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_TYPE3')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_TYPE3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_VALUE3')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_VALUE3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_NAME4')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_NAME4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_TYPE4')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_TYPE4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_VALUE4')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_VALUE4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_NAME5')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_NAME5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_TYPE5')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_TYPE5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_VALUE5')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_VALUE5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_NAME6')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_NAME6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_TYPE6')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_TYPE6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_VALUE6')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_VALUE6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_NAME7')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_NAME7); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_TYPE7')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_TYPE7); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_VALUE7')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_VALUE7); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_NAME8')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_NAME8); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_TYPE8')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_TYPE8); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_VALUE8')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_VALUE8); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_NAME9')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_NAME9); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_TYPE9')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_TYPE9); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_VALUE9')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_VALUE9); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_NAME10')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_NAME10); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_TYPE10')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_TYPE10); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_VALUE10')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_VALUE10); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_NAME11')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_NAME11); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_TYPE11')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_TYPE11); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_VALUE11')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_VALUE11); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_NAME12')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_NAME12); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_TYPE12')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_TYPE12); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_VALUE12')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_VALUE12); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_NAME13')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_NAME13); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_TYPE13')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_TYPE13); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_VALUE13')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_VALUE13); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_NAME14')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_NAME14); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_TYPE14')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_TYPE14); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_VALUE14')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_VALUE14); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_NAME15')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_NAME15); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_TYPE15')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_TYPE15); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_VALUE15')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_VALUE15); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_NAME16')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_NAME16); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_TYPE16')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_TYPE16); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_VALUE16')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_VALUE16); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_NAME31')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_NAME31); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_TYPE31')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_TYPE31); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_VALUE31')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_VALUE31); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_NAME32')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_NAME32); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_TYPE32')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_TYPE32); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_VALUE32')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_VALUE32); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_NAME33')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_NAME33); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_TYPE33')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_TYPE33); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_VALUE33')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_VALUE33); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_NAME34')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_NAME34); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_TYPE34')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_TYPE34); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_VALUE34')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_VALUE34); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_NAME35')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_NAME35); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_TYPE35')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_TYPE35); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_VALUE35')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_VALUE35); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_NAME36')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_NAME36); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_TYPE36')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_TYPE36); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_VALUE36')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_VALUE36); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_NAME37')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_NAME37); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_TYPE37')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_TYPE37); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_VALUE37')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_VALUE37); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_NAME38')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_NAME38); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_TYPE38')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_TYPE38); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_VALUE38')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_VALUE38); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_NAME39')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_NAME39); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_TYPE39')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_TYPE39); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_VALUE39')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_VALUE39); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_NAME40')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_NAME40); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_TYPE40')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_TYPE40); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_VALUE40')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_VALUE40); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_NAME41')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_NAME41); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_TYPE41')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_TYPE41); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_VALUE41')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_VALUE41); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_NAME42')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_NAME42); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_TYPE42')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_TYPE42); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_VALUE42')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_VALUE42); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_NAME43')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_NAME43); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_TYPE43')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_TYPE43); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_VALUE43')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_VALUE43); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_NAME44')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_NAME44); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_TYPE44')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_TYPE44); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_VALUE44')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_VALUE44); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_NAME45')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_NAME45); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_TYPE45')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_TYPE45); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_VALUE45')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_VALUE45); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_NAME46')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_NAME46); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_TYPE46')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_TYPE46); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_COLUMN_VALUE46')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_COLUMN_VALUE46); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_ENTERED_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_ENTERED_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_IS_CANCEL_BY_REQUESTER')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_IS_CANCEL_BY_REQUESTER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_APPROVE_OR_REJECT_TAG')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_APPROVE_OR_REJECT_TAG); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_APPROVE_REJECT_BY_PER_NO')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_APPROVE_REJECT_BY_PER_NO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_APPROVE_REJECT_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_APPROVE_REJECT_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_EFFECT_REMARKS')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_EFFECT_REMARKS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PNAC_INSERT_UPDATE_STATUS')); ?>:</b>
	<?php echo CHtml::encode($data->PNAC_INSERT_UPDATE_STATUS); ?>
	<br />

	*/ ?>

</div>