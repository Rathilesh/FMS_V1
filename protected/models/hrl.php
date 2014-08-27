<?php

/**
 * This is the model class for table "HRLABEL".
 *
 * The followings are the available columns in table 'HRLABEL':
 * @property integer $ID
 * @property string $LANGUAGE
 * @property string $TEXT_ID
 * @property string $TEXT
 * @property double $COUNTER
 */
class hrl extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return hrl the static model class
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
		return 'HRLABEL';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('COUNTER', 'numerical'),
			array('LANGUAGE', 'length', 'max'=>100),
			array('TEXT_ID', 'length', 'max'=>1024),
			array('TEXT', 'length', 'max'=>2024),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, LANGUAGE, TEXT_ID, TEXT, COUNTER', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'LANGUAGE' => 'Language',
			'TEXT_ID' => 'Text',
			'TEXT' => 'Text',
			'COUNTER' => 'Counter',
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
		$criteria->compare('LANGUAGE',$this->LANGUAGE,true);
		$criteria->compare('TEXT_ID',$this->TEXT_ID,true);
		$criteria->compare('TEXT',$this->TEXT,true);
		$criteria->compare('COUNTER',$this->COUNTER);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}