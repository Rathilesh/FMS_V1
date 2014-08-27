<?php

/**
 * This is the model class for table "TEST_TABLE".
 *
 * The followings are the available columns in table 'TEST_TABLE':
 * @property string $NAME
 * @property double $AGE
 * @property string $ADDRESS
 * @property string $ADDRESS1
 * @property string $CITY
 * @property string $STATE
 */
class TESTFORM extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TESTFORM the static model class
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
		return 'TEST_TABLE';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('AGE', 'numerical'),
			array('NAME', 'length', 'max'=>30),
			array('ADDRESS, ADDRESS1', 'length', 'max'=>15),
			array('CITY, STATE', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('NAME, AGE, ADDRESS, ADDRESS1, CITY, STATE', 'safe', 'on'=>'search'),
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
			'NAME' => 'Name',
			'AGE' => 'Age',
			'ADDRESS' => 'Address',
			'ADDRESS1' => 'Address1',
			'CITY' => 'City',
			'STATE' => 'State',
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

		$criteria->compare('NAME',$this->NAME,true);
		$criteria->compare('AGE',$this->AGE);
		$criteria->compare('ADDRESS',$this->ADDRESS,true);
		$criteria->compare('ADDRESS1',$this->ADDRESS1,true);
		$criteria->compare('CITY',$this->CITY,true);
		$criteria->compare('STATE',$this->STATE,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}