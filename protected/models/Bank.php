<?php

/**
 * This is the model class for table "BANK".
 *
 * The followings are the available columns in table 'BANK':
 * @property integer $ID
 * @property string $SHORT_NAME
 * @property string $NAME
 * @property string $ADDRESS1
 * @property string $ADDRESS2
 * @property string $ADDRESS3
 * @property string $ADDRESS4
 * @property string $COUNTRY
 * @property string $CONTACT_PERSON
 * @property string $TELEPHONE
 * @property string $FAX
 * @property string $EMAIL
 * @property string $URL
 * @property integer $BANK_ID
 *
 * The followings are the available model relations:
 * @property ENTITYBANK[] $eNTITYBANKs
 * @property BANKFLEX[] $bANKFLEXes
 * @property Bank $bANK
 * @property Bank[] $bANKs
 */
class Bank extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Bank the static model class
	 */
    
        //For auto complete branch
        public $ID,$LABEL,$ID1,$LABEL1,$BANK,$BRANCH;
        ////
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'BANK';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SHORT_NAME, NAME', 'required'),
			array('BANK_ID', 'numerical', 'integerOnly'=>true),
			array('SHORT_NAME, COUNTRY', 'length', 'max'=>30),
			array('NAME, EMAIL', 'length', 'max'=>120),
			array('ADDRESS1, ADDRESS2, ADDRESS3, ADDRESS4, CONTACT_PERSON, TELEPHONE, FAX', 'length', 'max'=>80),
			array('URL', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, SHORT_NAME, NAME, ADDRESS1, ADDRESS2, ADDRESS3, ADDRESS4, COUNTRY, CONTACT_PERSON, TELEPHONE, FAX, EMAIL, URL, BANK_ID', 'safe', 'on'=>'search'),
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
			'eNTITYBANKs' => array(self::HAS_MANY, 'ENTITYBANK', 'BANK_ID'),
			'bANKFLEXes' => array(self::HAS_MANY, 'BANKFLEX', 'BANK_ID'),
			'bANK' => array(self::BELONGS_TO, 'Bank', 'BANK_ID'),
			'bANKs' => array(self::HAS_MANY, 'Bank', 'BANK_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'SHORT_NAME' => 'Short Name',
			'NAME' => 'Name',
			'ADDRESS1' => 'Address1',
			'ADDRESS2' => 'Address2',
			'ADDRESS3' => 'Address3',
			'ADDRESS4' => 'Address4',
			'COUNTRY' => 'Country',
			'CONTACT_PERSON' => 'Contact Person',
			'TELEPHONE' => 'Telephone',
			'FAX' => 'Fax',
			'EMAIL' => 'Email',
			'URL' => 'Url',
			'BANK_ID' => 'Bank',
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
		$criteria->compare('SHORT_NAME',$this->SHORT_NAME,true);
		$criteria->compare('NAME',$this->NAME,true);
		$criteria->compare('ADDRESS1',$this->ADDRESS1,true);
		$criteria->compare('ADDRESS2',$this->ADDRESS2,true);
		$criteria->compare('ADDRESS3',$this->ADDRESS3,true);
		$criteria->compare('ADDRESS4',$this->ADDRESS4,true);
		$criteria->compare('COUNTRY',$this->COUNTRY,true);
		$criteria->compare('CONTACT_PERSON',$this->CONTACT_PERSON,true);
		$criteria->compare('TELEPHONE',$this->TELEPHONE,true);
		$criteria->compare('FAX',$this->FAX,true);
		$criteria->compare('EMAIL',$this->EMAIL,true);
		$criteria->compare('URL',$this->URL,true);
		$criteria->compare('BANK_ID',$this->BANK_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}