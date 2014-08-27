<?php
/**
 * Created by JetBrains PhpStorm.
 * User: admin
 * Date: 19/8/13
 * Time: 10:10 AM
 * To change this template use File | Settings | File Templates.
 */
class Get_Labelname_Cls
{
    private static $pvLabelname=array();
    private static $pvLabelCount=array();
    public function Get_Labelname_Fnc($FvTextid)
    {
        $vTextid = $FvTextid;
        $vLabelname = Yii::app()->db->createCommand()
            ->select('*')
            ->from("HRLABEL")
            ->where('TEXT_ID=:TEXT_ID', array(':TEXT_ID'=>$vTextid))
            ->queryRow();
//$test=array("hai","test","sdada",);
        return $vLabelname['TEXT'];
    }
    public function Get_LabelCount_Fnc($FvTextid,$FvLanguage)
    {
        $vTextid = $FvTextid;
        $vLaguage = $FvLanguage;
        $vLabelCont = Yii::app()->db->createCommand()
            ->select('TEXT')
            ->from("HRLABEL")
            ->where('TEXT_ID=:TEXT_ID and LANGUAGE=:LANGUAGE', array(':TEXT_ID'=>$vTextid,':LANGUAGE'=>$vLaguage))
            ->queryRow();
        return $vLabelCont['TEXT'];
    }
}
class change_date_format_Cls {

    public function Get_Converted_Date_Fnc($FvDate) {
        $newDate = date("d/M/Y", strtotime($FvDate));
        return $newDate;
    }
}