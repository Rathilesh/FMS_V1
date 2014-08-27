<?php

/**
 * This is the model class for table "PARTY".
 *
 * The followings are the available columns in table 'PARTY':
 * @property integer $ID
 * @property string $SALUTATION
 * @property string $FIRST_NAME
 * @property string $MIDDILE_NAME
 * @property string $LAST_NAME
 * @property string $PREFERED_NAME
 * @property string $GENDER
 * @property string $CONTACT_PERSON
 * @property string $DOB
 * @property string $NATIONAL_ID
 * @property string $V01
 * @property string $V02
 * @property string $V03
 * @property string $V04
 * @property string $V05
 * @property double $N01
 * @property double $N02
 * @property double $N03
 * @property double $N04
 * @property string $D01
 * @property string $D02
 * @property string $D03
 * @property string $D04
 * @property integer $ENTITY_ID
 *
 * The followings are the available model relations:
 * @property PARTYTYPE[] $pARTYTYPEs
 * @property ENTITY $eNTITY
 * @property ENTITYBANK[] $eNTITYBANKs
 * @property COURSEINSTRUCTOR[] $cOURSEINSTRUCTORs
 * @property ENTITYCONTACT[] $eNTITYCONTACTs
 * @property PARTYFLEX[] $pARTYFLEXes
 * @property PARTYRELATION[] $pARTYRELATIONs
 * @property PARTYIMAGE[] $pARTYIMAGEs
 * @property PERSONNEL $pERSONNEL
 */
class PARTY extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PARTY the static model class
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
		return 'PARTY';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PREFERRED_NAME, ENTITY_ID', 'required'),
			array('ENTITY_ID', 'numerical', 'integerOnly'=>true),
			array('N01, N02, N03, N04', 'numerical'),
			array('SALUTATION, GENDER', 'length', 'max'=>30),
			array('FIRST_NAME, MIDDLE_NAME, LAST_NAME', 'length', 'max'=>60),
			array('PREFERRED_NAME, CONTACT_PERSON, NATIONAL_ID', 'length', 'max'=>100),
			array('V01, V02, V03, V04, V05', 'length', 'max'=>512),
			array('DOB, D01, D02, D03, D04', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, SALUTATION, FIRST_NAME, MIDDLE_NAME, LAST_NAME, PREFERRED_NAME, GENDER, CONTACT_PERSON, DOB, NATIONAL_ID, V01, V02, V03, V04, V05, N01, N02, N03, N04, D01, D02, D03, D04, ENTITY_ID,COMPANY_TYPE', 'safe', 'on'=>'search'),
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
			'pARTYTYPEs' => array(self::HAS_MANY, 'PARTYTYPE', 'PARTY_ID'),
			'eNTITY' => array(self::BELONGS_TO, 'ENTITY', 'ENTITY_ID'),
			'eNTITYBANKs' => array(self::HAS_MANY, 'ENTITYBANK', 'PARTY_ID'),
			'cOURSEINSTRUCTORs' => array(self::HAS_MANY, 'COURSEINSTRUCTOR', 'PARTY_ID'),
			'eNTITYCONTACTs' => array(self::HAS_MANY, 'ENTITYCONTACT', 'PARTY_ID'),
			'pARTYFLEXes' => array(self::HAS_MANY, 'PARTYFLEX', 'PARTY_ID'),
			'pARTYRELATIONs' => array(self::HAS_MANY, 'PARTYRELATION', 'PARTY_ID'),
			'pARTYIMAGEs' => array(self::HAS_MANY, 'PARTYIMAGE', 'PARTY_ID'),
			'pERSONNEL' => array(self::HAS_ONE, 'PERSONNEL', 'PARTY_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'SALUTATION' => 'Salutation',
			'FIRST_NAME' => 'First Name',
			'MIDDLE_NAME' => 'Middle Name',
			'LAST_NAME' => 'Short Name',
			'PREFERRED_NAME' => 'Name',
			'GENDER' => 'Gender',
			'CONTACT_PERSON' => 'Contact Person',
			'DOB' => 'Enrollment Date',
			'NATIONAL_ID' => 'National ID',
			'V01' => 'V01',
			'V02' => 'V02',
			'V03' => 'V03',
			'V04' => 'V04',
			'V05' => 'V05',
			'N01' => 'N01',
			'N02' => 'N02',
			'N03' => 'N03',
			'N04' => 'N04',
			'D01' => 'D01',
			'D02' => 'D02',
			'D03' => 'D03',
			'D04' => 'D04',
			'ENTITY_ID' => 'Entity',
                        'COMPANY_TYPE'=>'Company Type',
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
		$criteria->compare('SALUTATION',$this->SALUTATION,true);
		$criteria->compare('FIRST_NAME',$this->FIRST_NAME,true);
		$criteria->compare('MIDDLE_NAME',$this->MIDDLE_NAME,true);
		$criteria->compare('LAST_NAME',$this->LAST_NAME,true);
		$criteria->compare('PREFERRED_NAME',$this->PREFERRED_NAME,true);
		$criteria->compare('GENDER',$this->GENDER,true);
		$criteria->compare('CONTACT_PERSON',$this->CONTACT_PERSON,true);
		$criteria->compare('DOB',$this->DOB,true);
		$criteria->compare('NATIONAL_ID',$this->NATIONAL_ID,true);
		$criteria->compare('V01',$this->V01,true);
		$criteria->compare('V02',$this->V02,true);
		$criteria->compare('V03',$this->V03,true);
		$criteria->compare('V04',$this->V04,true);
		$criteria->compare('V05',$this->V05,true);
		$criteria->compare('N01',$this->N01);
		$criteria->compare('N02',$this->N02);
		$criteria->compare('N03',$this->N03);
		$criteria->compare('N04',$this->N04);
		$criteria->compare('D01',$this->D01,true);
		$criteria->compare('D02',$this->D02,true);
		$criteria->compare('D03',$this->D03,true);
		$criteria->compare('D04',$this->D04,true);
		$criteria->compare('ENTITY_ID',$this->ENTITY_ID);
                $criteria->compare('COMPANY_TYPE',$this->COMPANY_TYPE,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,'pagination' => array('pageSize' => 13,)
		));
	}
}