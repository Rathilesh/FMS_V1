<?php

/**
 * This is the model class for table "ENTITY_CONTACT".
 *
 * The followings are the available columns in table 'ENTITY_CONTACT':
 * @property integer $ID
 * @property string $CONTACT_TYPE
 * @property string $LINE1
 * @property string $LINE2
 * @property string $LINE3
 * @property string $LINE4
 * @property string $LINE5
 * @property string $CITY
 * @property string $COUNTRY
 * @property string $MOBILE_PHONE
 * @property string $REGISTRED_MOBILE
 * @property string $TELEPHONE
 * @property string $FAX
 * @property string $EMAIL
 * @property string $REGISTRED_EMAIL
 * @property string $URL
 * @property string $WEF
 * @property string $WET
 * @property integer $ENTITY_ID
 * @property integer $PARTY_ID
 *
 * The followings are the available model relations:
 * @property ENTITY $eNTITY
 * @property PARTY $pARTY
 */
class Entity_Contact extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Entity_Contact the static model class
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
		return 'ENTITY_CONTACT';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CONTACT_TYPE, COUNTRY', 'required'),
			array('ENTITY_ID, PARTY_ID', 'numerical', 'integerOnly'=>true),
			array('CONTACT_TYPE, COUNTRY', 'length', 'max'=>30),
			array('LINE1, LINE2, LINE3, LINE4, LINE5', 'length', 'max'=>60),
			array('CITY, MOBILE_PHONE, FAX', 'length', 'max'=>50),
			array('REGISTRED_MOBILE', 'length', 'max'=>1),
			array('TELEPHONE, EMAIL, REGISTRED_EMAIL, URL', 'length', 'max'=>100),
			array('WEF, WET', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, CONTACT_TYPE, LINE1, LINE2, LINE3, LINE4, LINE5, CITY, COUNTRY, MOBILE_PHONE, REGISTRED_MOBILE, TELEPHONE, FAX, EMAIL, REGISTRED_EMAIL, URL, WEF, WET, ENTITY_ID, PARTY_ID', 'safe', 'on'=>'search'),
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
			'eNTITY' => array(self::BELONGS_TO, 'ENTITY', 'ENTITY_ID'),
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
			'CONTACT_TYPE' => 'Contact Type',
			'LINE1' => 'Line1',
			'LINE2' => 'Line2',
			'LINE3' => 'Line3',
			'LINE4' => 'Line4',
			'LINE5' => 'Line5',
			'CITY' => 'City',
			'COUNTRY' => 'Country',
			'MOBILE_PHONE' => 'Mobile Phone',
			'REGISTRED_MOBILE' => 'Registred Mobile',
			'TELEPHONE' => 'Telephone',
			'FAX' => 'Fax',
			'EMAIL' => 'Email',
			'REGISTRED_EMAIL' => 'Registred Email',
			'URL' => 'Url',
			'WEF' => 'Wef',
			'WET' => 'Wet',
			'ENTITY_ID' => 'Entity',
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
		$criteria->compare('CONTACT_TYPE',$this->CONTACT_TYPE,true);
		$criteria->compare('LINE1',$this->LINE1,true);
		$criteria->compare('LINE2',$this->LINE2,true);
		$criteria->compare('LINE3',$this->LINE3,true);
		$criteria->compare('LINE4',$this->LINE4,true);
		$criteria->compare('LINE5',$this->LINE5,true);
		$criteria->compare('CITY',$this->CITY,true);
		$criteria->compare('COUNTRY',$this->COUNTRY,true);
		$criteria->compare('MOBILE_PHONE',$this->MOBILE_PHONE,true);
		$criteria->compare('REGISTRED_MOBILE',$this->REGISTRED_MOBILE,true);
		$criteria->compare('TELEPHONE',$this->TELEPHONE,true);
		$criteria->compare('FAX',$this->FAX,true);
		$criteria->compare('EMAIL',$this->EMAIL,true);
		$criteria->compare('REGISTRED_EMAIL',$this->REGISTRED_EMAIL,true);
		$criteria->compare('URL',$this->URL,true);
		$criteria->compare('WEF',$this->WEF,true);
		$criteria->compare('WET',$this->WET,true);
		$criteria->compare('ENTITY_ID',$this->ENTITY_ID);
		$criteria->compare('PARTY_ID',$this->PARTY_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}