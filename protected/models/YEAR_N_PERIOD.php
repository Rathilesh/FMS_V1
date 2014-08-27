<?php

/**
 * This is the model class for table "YEAR_N_PERIOD".
 *
 * The followings are the available columns in table 'YEAR_N_PERIOD':
 * @property integer $ID
 * @property string $SHORT_NAME
 * @property string $START_DATE
 * @property string $END_DATE
 * @property string $PERIOD_TYPE
 * @property integer $YNP_ID
 * @property integer $ENTITY_ID
 *
 * The followings are the available model relations:
 * @property ENTITYPERIOD[] $eNTITYPERIODs
 * @property ENTITY $eNTITY
 * @property YEAR_N_PERIOD $yNP
 * @property YEAR_N_PERIOD[] $yEARNPERIODs
 */
class YEAR_N_PERIOD extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return YEAR_N_PERIOD the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'YEAR_N_PERIOD';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
//			array('SHORT_NAME, START_DATE, END_DATE, PERIOD_TYPE, ENTITY_ID', 'required'),
			array('YNP_ID, ENTITY_ID', 'numerical', 'integerOnly'=>true),
			array('SHORT_NAME', 'length', 'max'=>50),
			array('PERIOD_TYPE', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, SHORT_NAME, START_DATE, END_DATE, PERIOD_TYPE, YNP_ID, ENTITY_ID', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'eNTITYPERIODs' => array(self::HAS_MANY, 'ENTITYPERIOD', 'YNP_ID'),
			'eNTITY' => array(self::BELONGS_TO, 'ENTITY', 'ENTITY_ID'),
			'yNP' => array(self::BELONGS_TO, 'YEAR_N_PERIOD', 'YNP_ID'),
			'yEARNPERIODs' => array(self::HAS_MANY, 'YEAR_N_PERIOD', 'YNP_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'SHORT_NAME' => 'Period Name',
			'START_DATE' => 'Start Date',
			'END_DATE' => 'End Date',
			'PERIOD_TYPE' => 'Period Type',
			'YNP_ID' => 'Ynp',
			'ENTITY_ID' => 'Organisation',
		);
	}
        
         public function beforeDelete()
          {
               foreach($this->yEARNPERIODs as $c)
                   $c->delete();
               return parent::beforeDelete();
           }
           

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.
                $entity_id=Yii::app()->session['P_Eu_Orgn_Code'];
		$criteria=new CDbCriteria;
		$criteria->compare('ID',$this->ID);
		$criteria->compare('SHORT_NAME',$this->SHORT_NAME,true);
		$criteria->compare('START_DATE',mb_strtoupper($this->START_DATE,'UTF-8'),true);
		$criteria->compare('END_DATE',  mb_strtoupper($this->END_DATE,'UTF-8'),true);
		$criteria->compare('PERIOD_TYPE',$this->PERIOD_TYPE,true);
		$criteria->compare('YNP_ID',$this->YNP_ID);
		$criteria->compare('ENTITY_ID',$this->ENTITY_ID);                
                $criteria->addInCondition('ENTITY_ID', array($entity_id));
                $criteria->addInCondition('PERIOD_TYPE', array('MAJOR'));
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}