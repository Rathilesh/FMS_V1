<?php

/**
 * This is the model class for table "PARTY_TYPE".
 *
 * The followings are the available columns in table 'PARTY_TYPE':
 * @property integer $ID
 * @property string $PARTY_TYPE
 * @property string $WEF
 * @property string $WET
 * @property integer $PARTY_ID
 *
 * The followings are the available model relations:
 * @property PARTY $pARTY
 */
class PARTY_TYPE extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PARTY_TYPE the static model class
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
		return 'PARTY_TYPE';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PARTY_ID', 'required'),
			array('PARTY_ID', 'numerical', 'integerOnly'=>true),
			array('PARTY_TYPE', 'length', 'max'=>50),
			array('WEF, WET', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, PARTY_TYPE, WEF, WET, PARTY_ID', 'safe', 'on'=>'search'),
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
			'PARTY_TYPE' => 'Party Type',
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
		$criteria->compare('PARTY_TYPE',$this->PARTY_TYPE,true);
		$criteria->compare('WEF',$this->WEF,true);
		$criteria->compare('WET',$this->WET,true);
		$criteria->compare('PARTY_ID',$this->PARTY_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}