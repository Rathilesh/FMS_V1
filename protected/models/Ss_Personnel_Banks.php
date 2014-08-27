<?php

/**
 * This is the model class for table "SS_PERSONNEL_BANKS".
 *
 * The followings are the available columns in table 'SS_PERSONNEL_BANKS':
 * @property string $SPB_PER_EU_ORGN_CODE
 * @property double $SPB_ID
 * @property string $SPB_PER_NO
 * @property string $SPB_BANK_CODE
 * @property string $SPB_BANK_BRANCH_CODE
 * @property string $SPB_ACC_NATURE
 * @property string $SPB_ACC_NO
 * @property string $SPB_ACC_HOLDER_NAME
 * @property string $SPB_WEF_DATE
 * @property string $SPB_WET_DATE
 * @property string $SPB_SALARY_PAID_TAG
 * @property string $SPB_APPROVED_BY_PER_NO
 * @property string $SPB_APPROVED_DATE
 * @property string $SPB_APPROVED_TAG
 * @property string $SPB_RECORD_CREATED_FROM
 */
class Ss_Personnel_Banks extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Ss_Personnel_Banks the static model class
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
		return 'SS_PERSONNEL_BANKS';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SPB_PER_EU_ORGN_CODE, SPB_PER_NO, SPB_BANK_CODE, SPB_BANK_BRANCH_CODE, SPB_ACC_NATURE, SPB_ACC_NO, SPB_ACC_HOLDER_NAME, SPB_WEF_DATE', 'required'),
			array('SPB_PER_EU_ORGN_CODE, SPB_BANK_CODE, SPB_BANK_BRANCH_CODE', 'length', 'max'=>8),
			array('SPB_PER_NO, SPB_APPROVED_BY_PER_NO', 'length', 'max'=>10),
			array('SPB_ACC_NATURE, SPB_ACC_NO, SPB_APPROVED_TAG', 'length', 'max'=>20),
			array('SPB_ACC_HOLDER_NAME', 'length', 'max'=>40),
			array('SPB_SALARY_PAID_TAG', 'length', 'max'=>1),
			array('SPB_RECORD_CREATED_FROM', 'length', 'max'=>30),
			array('SPB_WET_DATE, SPB_APPROVED_DATE', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('SPB_PER_EU_ORGN_CODE, SPB_ID, SPB_PER_NO, SPB_BANK_CODE, SPB_BANK_BRANCH_CODE, SPB_ACC_NATURE, SPB_ACC_NO, SPB_ACC_HOLDER_NAME, SPB_WEF_DATE, SPB_WET_DATE, SPB_SALARY_PAID_TAG, SPB_APPROVED_BY_PER_NO, SPB_APPROVED_DATE, SPB_APPROVED_TAG, SPB_RECORD_CREATED_FROM', 'safe', 'on'=>'search'),
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
			'SPB_PER_EU_ORGN_CODE' => 'Spb Per Eu Orgn Code',
			'SPB_ID' => 'Spb',
			'SPB_PER_NO' => 'Spb Per No',
			'SPB_BANK_CODE' => 'Spb Bank Code',
			'SPB_BANK_BRANCH_CODE' => 'Spb Bank Branch Code',
			'SPB_ACC_NATURE' => 'Spb Acc Nature',
			'SPB_ACC_NO' => 'Spb Acc No',
			'SPB_ACC_HOLDER_NAME' => 'Spb Acc Holder Name',
			'SPB_WEF_DATE' => 'Spb Wef Date',
			'SPB_WET_DATE' => 'Spb Wet Date',
			'SPB_SALARY_PAID_TAG' => 'Spb Salary Paid Tag',
			'SPB_APPROVED_BY_PER_NO' => 'Spb Approved By Per No',
			'SPB_APPROVED_DATE' => 'Spb Approved Date',
			'SPB_APPROVED_TAG' => 'Spb Approved Tag',
			'SPB_RECORD_CREATED_FROM' => 'Spb Record Created From',
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

		$criteria->compare('SPB_PER_EU_ORGN_CODE',$this->SPB_PER_EU_ORGN_CODE,true);
		$criteria->compare('SPB_ID',$this->SPB_ID);
		$criteria->compare('SPB_PER_NO',$this->SPB_PER_NO,true);
		$criteria->compare('SPB_BANK_CODE',$this->SPB_BANK_CODE,true);
		$criteria->compare('SPB_BANK_BRANCH_CODE',$this->SPB_BANK_BRANCH_CODE,true);
		$criteria->compare('SPB_ACC_NATURE',$this->SPB_ACC_NATURE,true);
		$criteria->compare('SPB_ACC_NO',$this->SPB_ACC_NO,true);
		$criteria->compare('SPB_ACC_HOLDER_NAME',$this->SPB_ACC_HOLDER_NAME,true);
		$criteria->compare('SPB_WEF_DATE',$this->SPB_WEF_DATE,true);
		$criteria->compare('SPB_WET_DATE',$this->SPB_WET_DATE,true);
		$criteria->compare('SPB_SALARY_PAID_TAG',$this->SPB_SALARY_PAID_TAG,true);
		$criteria->compare('SPB_APPROVED_BY_PER_NO',$this->SPB_APPROVED_BY_PER_NO,true);
		$criteria->compare('SPB_APPROVED_DATE',$this->SPB_APPROVED_DATE,true);
		$criteria->compare('SPB_APPROVED_TAG',$this->SPB_APPROVED_TAG,true);
		$criteria->compare('SPB_RECORD_CREATED_FROM',$this->SPB_RECORD_CREATED_FROM,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}