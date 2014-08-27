<?php

/**
 * This is the model class for table "ENTITY_BANK".
 *
 * The followings are the available columns in table 'ENTITY_BANK':
 * @property integer $ID
 * @property string $ACCOUNT_NO
 * @property string $ACCOUNT_OWNER
 * @property string $ACCOUNT_TYPE
 * @property string $CURRENCY
 * @property string $NETPAY_CREDIT
 * @property string $WEF
 * @property string $WET
 * @property integer $PARTY_ID
 * @property integer $OSTRU_ID
 * @property integer $BANK_ID
 * @property integer $ENTITY_ID
 *
 * The followings are the available model relations:
 * @property BANK $bANK
 * @property ENTITY $eNTITY
 * @property ORGANISATIONSTRUCTURE $oSTRU
 * @property PARTY $pARTY
 */
class ENTITY_BANK extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ENTITY_BANK the static model class
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
		return 'ENTITY_BANK';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ACCOUNT_NO, WEF, BANK_ID', 'required'),
			array('PARTY_ID, OSTRU_ID, BANK_ID, ENTITY_ID', 'numerical', 'integerOnly'=>true),
			array('ACCOUNT_NO, ACCOUNT_TYPE, CURRENCY', 'length', 'max'=>30),
			array('ACCOUNT_OWNER', 'length', 'max'=>100),
			array('NETPAY_CREDIT', 'length', 'max'=>1),
			array('WET', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, ACCOUNT_NO, ACCOUNT_OWNER, ACCOUNT_TYPE, CURRENCY, NETPAY_CREDIT, WEF, WET, PARTY_ID, OSTRU_ID, BANK_ID, ENTITY_ID', 'safe', 'on'=>'search'),
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
			'bANK' => array(self::BELONGS_TO, 'BANK', 'BANK_ID'),
			'eNTITY' => array(self::BELONGS_TO, 'ENTITY', 'ENTITY_ID'),
			'oSTRU' => array(self::BELONGS_TO, 'ORGANISATIONSTRUCTURE', 'OSTRU_ID'),
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
			'ACCOUNT_NO' => 'Account No',
			'ACCOUNT_OWNER' => 'Account Owner',
			'ACCOUNT_TYPE' => 'Account Type',
			'CURRENCY' => 'Currency',
			'NETPAY_CREDIT' => 'Netpay Credit',
			'WEF' => 'Wef',
			'WET' => 'Wet',
			'PARTY_ID' => 'Party',
			'OSTRU_ID' => 'Ostru',
			'BANK_ID' => 'Bank',
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
		$criteria->compare('ACCOUNT_NO',$this->ACCOUNT_NO,true);
		$criteria->compare('ACCOUNT_OWNER',$this->ACCOUNT_OWNER,true);
		$criteria->compare('ACCOUNT_TYPE',$this->ACCOUNT_TYPE,true);
		$criteria->compare('CURRENCY',$this->CURRENCY,true);
		$criteria->compare('NETPAY_CREDIT',$this->NETPAY_CREDIT,true);
		$criteria->compare('WEF',$this->WEF,true);
		$criteria->compare('WET',$this->WET,true);
		$criteria->compare('PARTY_ID',$this->PARTY_ID);
		$criteria->compare('OSTRU_ID',$this->OSTRU_ID);
		$criteria->compare('BANK_ID',$this->BANK_ID);
		$criteria->compare('ENTITY_ID',$this->ENTITY_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}