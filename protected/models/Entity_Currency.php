<?php

/**
 * This is the model class for table "ENTITY_CURRENCY".
 *
 * The followings are the available columns in table 'ENTITY_CURRENCY':
 * @property integer $ID
 * @property integer $CURRENCY_ID
 * @property string $IS_BASE_CURRENCY
 * @property string $IS_REPORTING_CURRENCY
 * @property string $WEF
 * @property string $WET
 * @property integer $ENTITY_ID
 *
 * The followings are the available model relations:
 * @property ENTITY $eNTITY
 */
class Entity_Currency extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Entity_Currency the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        public $CURRENCYNAME;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ENTITY_CURRENCY';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ENTITY_ID', 'required'),
			array('CURRENCY_ID, ENTITY_ID', 'numerical', 'integerOnly'=>true),
			array('IS_BASE_CURRENCY, IS_REPORTING_CURRENCY', 'length', 'max'=>1),
			array('WEF, WET', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, CURRENCY_ID, IS_BASE_CURRENCY, IS_REPORTING_CURRENCY, WEF, WET, ENTITY_ID', 'safe', 'on'=>'search'),
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
			'eNTITY' => array(self::BELONGS_TO, 'ENTITY', 'ENTITY_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'CURRENCY_ID' => 'Currency',
			'IS_BASE_CURRENCY' => 'Is Base Currency',
			'IS_REPORTING_CURRENCY' => 'Is Reporting Currency',
			'WEF' => 'Wef',
			'WET' => 'Wet',
			'ENTITY_ID' => 'Entity',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ID',$this->ID);
		$criteria->compare('CURRENCY_ID',$this->CURRENCY_ID);
		$criteria->compare('IS_BASE_CURRENCY',$this->IS_BASE_CURRENCY,true);
		$criteria->compare('IS_REPORTING_CURRENCY',$this->IS_REPORTING_CURRENCY,true);
		$criteria->compare('WEF',$this->WEF,true);
		$criteria->compare('WET',$this->WET,true);
		$criteria->compare('ENTITY_ID',$this->ENTITY_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}