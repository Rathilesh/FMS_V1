<?php
    class RActiveRecord extends CActiveRecord {
 
    private static $dbadvert = null;
 
    protected static function getAdvertDbConnection()
    {
 
        if (self::$dbadvert !== null)
            return self::$dbadvert;
        else
        {
             //$User=User::model()->findByPk(Yii::app()->user->id);
             $db_name = 'ehorizon_vault';
 
 
             self::$dbadvert = Yii::createComponent(array(
             'class' => 'CDbConnection',
            // other config properties...
			'connectionString' =>'oci:dbname=192.168.11.33:1521/oracle10gdb',
            // 'connectionString'=>"mysql:host=localhost;dbname=".$db_name, //dynamic database name here
              'enableProfiling' => true,
              'enableParamLogging' => true,
              'username'=>$db_name,
              'password'=> 'LETMEIN', //password here
              'charset'=>'utf8',
              'emulatePrepare' => true,
              'enableParamLogging'=>true,
              'enableProfiling' => true,
             ));
            Yii::app()->setComponent('dbadvert', self::$dbadvert);
 
            if (self::$dbadvert instanceof CDbConnection)
            {   
                Yii::app()->db->setActive(false);
                Yii::app()->dbadvert->setActive(true);
                return self::$dbadvert;
            }
            else{
                throw new CDbException(Yii::t('yii','Active Record requires a "db" CDbConnection application component.'));
            }
 
        }
    }
}