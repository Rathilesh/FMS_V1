<?php

/**
 * This is the model class for table "ENTITY_PERIOD".
 *
 * The followings are the available columns in table 'ENTITY_PERIOD':
 * @property integer $ID
 * @property string $EP_FUNCTION
 * @property string $WEF
 * @property string $WET
 * @property integer $OSTRU_ID
 * @property integer $YNP_ID
 *
 * The followings are the available model relations:
 * @property ORGANISATIONSTRUCTURE $oSTRU
 * @property YEARNPERIOD $yNP
 */
class Entity_Period extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Entity_Period the static model class
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
		return 'ENTITY_PERIOD';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('WEF', 'required'),
			array('OSTRU_ID, YNP_ID', 'numerical', 'integerOnly'=>true),
			array('EP_FUNCTION', 'length', 'max'=>50),
			array('WET', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, EP_FUNCTION, WEF, WET, OSTRU_ID, YNP_ID', 'safe', 'on'=>'search'),
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
			'oSTRU' => array(self::BELONGS_TO, 'ORGANISATIONSTRUCTURE', 'OSTRU_ID'),
			'yNP' => array(self::BELONGS_TO, 'YEARNPERIOD', 'YNP_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'EP_FUNCTION' => 'Ep Function',
			'WEF' => 'Wef',
			'WET' => 'Wet',
			'OSTRU_ID' => 'Ostru',
			'YNP_ID' => 'Ynp',
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
		$criteria->compare('EP_FUNCTION',$this->EP_FUNCTION,true);
		$criteria->compare('WEF',$this->WEF,true);
		$criteria->compare('WET',$this->WET,true);
		$criteria->compare('OSTRU_ID',$this->OSTRU_ID);
		$criteria->compare('YNP_ID',$this->YNP_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}