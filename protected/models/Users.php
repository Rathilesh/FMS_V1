<?php

/**
 * This is the model class for table "USERS".
 *
 * The followings are the available columns in table 'USERS':
 * @property string $USR_ID
 * @property string $USR_NAME
 * @property string $USR_EU_ORGN_CODE
 * @property string $USR_PER_NO
 * @property string $USR_PASSWORD
 * @property string $USR_STATUS
 * @property string $USR_PWD_CHANGED_ON
 * @property string $USR_APP_USER_FLAG
 */
class Users extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Users the static model class
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
		return 'USERS';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('USR_ID, USR_NAME', 'required'),
			array('USR_NAME', 'length', 'max'=>30),
			array('USR_EU_ORGN_CODE', 'length', 'max'=>8),
			array('USR_PER_NO', 'length', 'max'=>10),
			array('USR_PASSWORD', 'length', 'max'=>50),
			array('USR_STATUS, USR_APP_USER_FLAG', 'length', 'max'=>1),
			array('USR_PWD_CHANGED_ON', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('USR_ID, USR_NAME, USR_EU_ORGN_CODE, USR_PER_NO, USR_PASSWORD, USR_STATUS, USR_PWD_CHANGED_ON, USR_APP_USER_FLAG', 'safe', 'on'=>'search'),
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
			'USR_ID' => 'Usr',
			'USR_NAME' => 'Usr Name',
			'USR_EU_ORGN_CODE' => 'Usr Eu Orgn Code',
			'USR_PER_NO' => 'Usr Per No',
			'USR_PASSWORD' => 'Usr Password',
			'USR_STATUS' => 'Usr Status',
			'USR_PWD_CHANGED_ON' => 'Usr Pwd Changed On',
			'USR_APP_USER_FLAG' => 'Usr App User Flag',
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

		$criteria->compare('USR_ID',$this->USR_ID,true);
		$criteria->compare('USR_NAME',$this->USR_NAME,true);
		$criteria->compare('USR_EU_ORGN_CODE',$this->USR_EU_ORGN_CODE,true);
		$criteria->compare('USR_PER_NO',$this->USR_PER_NO,true);
		$criteria->compare('USR_PASSWORD',$this->USR_PASSWORD,true);
		$criteria->compare('USR_STATUS',$this->USR_STATUS,true);
		$criteria->compare('USR_PWD_CHANGED_ON',$this->USR_PWD_CHANGED_ON,true);
		$criteria->compare('USR_APP_USER_FLAG',$this->USR_APP_USER_FLAG,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


	public function beforeSave() 
	{
		if ($this->isNewRecord) // <---- the difference
		$this->USR_PASSWORD =md5($this->USR_PASSWORD);
		return true;
 	}
}