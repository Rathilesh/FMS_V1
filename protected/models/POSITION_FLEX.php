<?php

/**
 * This is the model class for table "POSITION_FLEX".
 *
 * The followings are the available columns in table 'POSITION_FLEX':
 * @property integer $ID
 * @property string $FLEX
 * @property string $FLEX_VALUE
 * @property integer $POST_ID
 *
 * The followings are the available model relations:
 * @property POSITION $pOST
 */
class POSITION_FLEX extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return POSITION_FLEX the static model class
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
		return 'POSITION_FLEX';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('POST_ID', 'required'),
			array('POST_ID', 'numerical', 'integerOnly'=>true),
			array('FLEX', 'length', 'max'=>50),
			array('FLEX_VALUE', 'length', 'max'=>1024),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, FLEX, FLEX_VALUE, POST_ID', 'safe', 'on'=>'search'),
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
			'pOST' => array(self::BELONGS_TO, 'POSITION', 'POST_ID'),
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
			'POST_ID' => 'Post',
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
		$criteria->compare('POST_ID',$this->POST_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}