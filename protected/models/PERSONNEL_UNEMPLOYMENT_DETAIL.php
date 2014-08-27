<?php

/**
 * This is the model class for table "PERSONNEL_UNEMPLOYMENT_DETAIL".
 *
 * The followings are the available columns in table 'PERSONNEL_UNEMPLOYMENT_DETAIL':
 * @property string $PUD_EU_ORGN_CODE
 * @property string $PUD_UNIT_CODE
 * @property string $PUD_PER_NO
 * @property string $PUD_FROM_MONTH
 * @property integer $PUD_FROM_YEAR
 * @property string $PUD_TO_MONTH
 * @property integer $PUD_TO_YEAR
 * @property string $PUD_ACTIVITY_DURING_PERIOD
 * @property string $PUD_NAME_OF_CONFIRMING_PARTY
 * @property string $PUD_ADDR_OF_CONFIRMING_PARTY
 * @property string $PUD_TELEPHONE_NO
 * @property string $PUD_EMAIL_ID
 * @property string $PUD_ENTERED_BY_PER_NO
 * @property string $PUD_ENTERED_DATE
 * @property string $PUD_APPROVED_BY_PER_NO
 * @property string $PUD_APPROVED_DATE
 */
class PERSONNEL_UNEMPLOYMENT_DETAIL extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PERSONNEL_UNEMPLOYMENT_DETAIL the static model class
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
		return 'PERSONNEL_UNEMPLOYMENT_DETAIL';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PUD_ACTIVITY_DURING_PERIOD, PUD_ADDR_OF_CONFIRMING_PARTY', 'length', 'max'=>1000),
			array('PUD_NAME_OF_CONFIRMING_PARTY, PUD_EMAIL_ID', 'length', 'max'=>100),
			array('PUD_TELEPHONE_NO', 'length', 'max'=>20),
			array('PUD_ENTERED_BY_PER_NO, PUD_APPROVED_BY_PER_NO', 'length', 'max'=>10),
			array('PUD_ENTERED_DATE, PUD_APPROVED_DATE', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('PUD_EU_ORGN_CODE, PUD_UNIT_CODE, PUD_PER_NO, PUD_FROM_MONTH, PUD_FROM_YEAR, PUD_TO_MONTH, PUD_TO_YEAR, PUD_ACTIVITY_DURING_PERIOD, PUD_NAME_OF_CONFIRMING_PARTY, PUD_ADDR_OF_CONFIRMING_PARTY, PUD_TELEPHONE_NO, PUD_EMAIL_ID, PUD_ENTERED_BY_PER_NO, PUD_ENTERED_DATE, PUD_APPROVED_BY_PER_NO, PUD_APPROVED_DATE', 'safe', 'on'=>'search'),
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
			'PUD_EU_ORGN_CODE' => 'Pud Eu Orgn Code',
			'PUD_UNIT_CODE' => 'Pud Unit Code',
			'PUD_PER_NO' => 'Pud Per No',
			'PUD_FROM_MONTH' => 'Pud From Month',
			'PUD_FROM_YEAR' => 'Pud From Year',
			'PUD_TO_MONTH' => 'Pud To Month',
			'PUD_TO_YEAR' => 'Pud To Year',
			'PUD_ACTIVITY_DURING_PERIOD' => 'Pud Activity During Period',
			'PUD_NAME_OF_CONFIRMING_PARTY' => 'Pud Name Of Confirming Party',
			'PUD_ADDR_OF_CONFIRMING_PARTY' => 'Pud Addr Of Confirming Party',
			'PUD_TELEPHONE_NO' => 'Pud Telephone No',
			'PUD_EMAIL_ID' => 'Pud Email',
			'PUD_ENTERED_BY_PER_NO' => 'Pud Entered By Per No',
			'PUD_ENTERED_DATE' => 'Pud Entered Date',
			'PUD_APPROVED_BY_PER_NO' => 'Pud Approved By Per No',
			'PUD_APPROVED_DATE' => 'Pud Approved Date',
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

		$criteria->compare('PUD_EU_ORGN_CODE',$this->PUD_EU_ORGN_CODE,true);
		$criteria->compare('PUD_UNIT_CODE',$this->PUD_UNIT_CODE,true);
		$criteria->compare('PUD_PER_NO',$this->PUD_PER_NO,true);
		$criteria->compare('PUD_FROM_MONTH',$this->PUD_FROM_MONTH,true);
		$criteria->compare('PUD_FROM_YEAR',$this->PUD_FROM_YEAR);
		$criteria->compare('PUD_TO_MONTH',$this->PUD_TO_MONTH,true);
		$criteria->compare('PUD_TO_YEAR',$this->PUD_TO_YEAR);
		$criteria->compare('PUD_ACTIVITY_DURING_PERIOD',$this->PUD_ACTIVITY_DURING_PERIOD,true);
		$criteria->compare('PUD_NAME_OF_CONFIRMING_PARTY',$this->PUD_NAME_OF_CONFIRMING_PARTY,true);
		$criteria->compare('PUD_ADDR_OF_CONFIRMING_PARTY',$this->PUD_ADDR_OF_CONFIRMING_PARTY,true);
		$criteria->compare('PUD_TELEPHONE_NO',$this->PUD_TELEPHONE_NO,true);
		$criteria->compare('PUD_EMAIL_ID',$this->PUD_EMAIL_ID,true);
		$criteria->compare('PUD_ENTERED_BY_PER_NO',$this->PUD_ENTERED_BY_PER_NO,true);
		$criteria->compare('PUD_ENTERED_DATE',$this->PUD_ENTERED_DATE,true);
		$criteria->compare('PUD_APPROVED_BY_PER_NO',$this->PUD_APPROVED_BY_PER_NO,true);
		$criteria->compare('PUD_APPROVED_DATE',$this->PUD_APPROVED_DATE,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}