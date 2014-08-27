<?php

/**
 * This is the model class for table "ENTITY_FLEX".
 *
 * The followings are the available columns in table 'ENTITY_FLEX':
 * @property integer $ID
 * @property integer $FLEX
 * @property string $FLEX_VALUE
 * @property string $NOTE
 * @property string $WEF
 * @property string $WET
 * @property integer $ENTITY_ID
 *
 * The followings are the available model relations:
 * @property ENTITY $eNTITY
 */
class Entity_Flex extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Entity_Flex the static model class
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
		return 'ENTITY_FLEX';
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
			array('FLEX, ENTITY_ID', 'numerical', 'integerOnly'=>true),
			array('FLEX_VALUE', 'length', 'max'=>100),
			array('NOTE', 'length', 'max'=>512),
			array('WET', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, FLEX, FLEX_VALUE, NOTE, WEF, WET, ENTITY_ID', 'safe', 'on'=>'search'),
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
			'FLEX' => 'Flex',
			'FLEX_VALUE' => 'Flex Value',
			'NOTE' => 'Note',
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
		$criteria->compare('FLEX',$this->FLEX);
		$criteria->compare('FLEX_VALUE',$this->FLEX_VALUE,true);
		$criteria->compare('NOTE',$this->NOTE,true);
		$criteria->compare('WEF',$this->WEF,true);
		$criteria->compare('WET',$this->WET,true);
		$criteria->compare('ENTITY_ID',$this->ENTITY_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}