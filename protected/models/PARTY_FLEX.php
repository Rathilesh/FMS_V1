<?php

/**
 * This is the model class for table "PARTY_FLEX".
 *
 * The followings are the available columns in table 'PARTY_FLEX':
 * @property integer $ID
 * @property string $FLEX
 * @property string $FLEX_VALUE
 * @property string $REMARK
 * @property string $WEF
 * @property string $WET
 * @property integer $PARTY_ID
 *
 * The followings are the available model relations:
 * @property PARTY $pARTY
 */
class PARTY_FLEX extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PARTY_FLEX the static model class
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
		return 'PARTY_FLEX';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('FLEX, FLEX_VALUE, WEF', 'required'),
			array('PARTY_ID', 'numerical', 'integerOnly'=>true),
			array('FLEX', 'length', 'max'=>30),
			array('FLEX_VALUE, REMARK', 'length', 'max'=>1024),
			array('WET', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, FLEX, FLEX_VALUE, REMARK, WEF, WET, PARTY_ID', 'safe', 'on'=>'search'),
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
			'pARTY' => array(self::BELONGS_TO, 'PARTY', 'PARTY_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'FLEX' => 'Flex',
			'FLEX_VALUE' => 'Flex Value',
			'REMARK' => 'Remark',
			'WEF' => 'Wef',
			'WET' => 'Wet',
			'PARTY_ID' => 'Party',
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
		$criteria->compare('FLEX',$this->FLEX,true);
		$criteria->compare('FLEX_VALUE',$this->FLEX_VALUE,true);
		$criteria->compare('REMARK',$this->REMARK,true);
		$criteria->compare('WEF',$this->WEF,true);
		$criteria->compare('WET',$this->WET,true);
		$criteria->compare('PARTY_ID',$this->PARTY_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}