<?php

/**
 * This is the model class for table "GENERIC_FLEX_VALUE".
 *
 * The followings are the available columns in table 'GENERIC_FLEX_VALUE':
 * @property string $ID
 * @property string $RECORD_ID
 * @property string $FLEX_VALUE
 * @property integer $GFLEX_ID
 *
 * The followings are the available model relations:
 * @property GENERICFLEX $gFLEX
 */
class Generic_Flex_Value extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Generic_Flex_Value the static model class
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
		return 'GENERIC_FLEX_VALUE';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RECORD_ID, FLEX_VALUE, GFLEX_ID', 'required'),
			array('GFLEX_ID', 'numerical', 'integerOnly'=>true),
			array('RECORD_ID', 'length', 'max'=>50),
			array('FLEX_VALUE', 'length', 'max'=>512),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, RECORD_ID, FLEX_VALUE, GFLEX_ID', 'safe', 'on'=>'search'),
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
			'gFLEX' => array(self::BELONGS_TO, 'GENERICFLEX', 'GFLEX_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'RECORD_ID' => 'Record',
			'FLEX_VALUE' => 'Flex Value',
			'GFLEX_ID' => 'Gflex',
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

		$criteria->compare('ID',$this->ID,true);
		$criteria->compare('RECORD_ID',$this->RECORD_ID,true);
		$criteria->compare('FLEX_VALUE',$this->FLEX_VALUE,true);
		$criteria->compare('GFLEX_ID',$this->GFLEX_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}