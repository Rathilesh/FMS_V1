<?php

/**
 * This is the model class for table "VAULT_T".
 *
 * The followings are the available columns in table 'VAULT_T':
 * @property string $USERNAME
 * @property string $PASSWORD
 * @property string $DATABASE
 * @property string $CLIENT_NAME
 */
class Vault extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Vault the static model class
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
		return 'VAULT_T';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('USERNAME, DATABASE', 'length', 'max'=>32),
			array('PASSWORD', 'length', 'max'=>2048),
			array('CLIENT_NAME', 'length', 'max'=>254),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('USERNAME, PASSWORD, DATABASE, CLIENT_NAME', 'safe', 'on'=>'search'),
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
			'USERNAME' => 'Username',
			'PASSWORD' => 'Password',
			'DATABASE' => 'Database',
			'CLIENT_NAME' => 'Client Name',
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

		$criteria->compare('USERNAME',$this->USERNAME,true);
		$criteria->compare('PASSWORD',$this->PASSWORD,true);
		$criteria->compare('DATABASE',$this->DATABASE,true);
		$criteria->compare('CLIENT_NAME',$this->CLIENT_NAME,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}