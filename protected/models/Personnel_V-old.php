<?php
$component=Yii::createComponent(array(  
        'class'=>'CDbConnection',
        'connectionString' =>'oci:dbname=localhost/hrms',
        'username' => trim(Yii::app()->session['dbuname']),
        'password' => trim(Yii::app()->session['dbpass']),
));
Yii::app()->setComponent('db',$component);
/**
 * This is the model class for table "PERSONNEL_V".
 *
 * The followings are the available columns in table 'PERSONNEL_V':
 * @property integer $PARTY_ID
 * @property string $PERSONAL_ID
 * @property string $SALUTATION
 * @property string $FIRST_NAME
 * @property string $MIDDILE_NAME
 * @property string $LAST_NAME
 * @property string $PREFERED_NAME
 * @property string $ALTERNATE_NAME
 * @property string $DOB
 * @property string $GENDER
 * @property string $RELIGION
 * @property string $BLOOD_GROUP
 * @property string $SUBCAST
 * @property string $FATHER
 * @property string $MOTHER
 * @property string $NATIONALITY
 * @property string $CASUAL
 * @property string $MARRIED
 * @property string $SECONDMENT
 * @property integer $SECONDMENT_ORG_ID
 * @property string $VERIFIED
 * @property string $ACTIVE
 * @property string $ADDRESS1
 * @property string $ADDRESS2
 * @property string $ADDRESS3
 * @property string $ADDRESS4
 * @property string $PHONE
 * @property string $EMAIL
 * @property integer $ENTITY_ID
 */
class Personnel_V extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Personnel_V the static model class
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
		return 'PERSONNEL_V';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PARTY_ID, PERSONAL_ID, SALUTATION, FIRST_NAME, PREFERED_NAME, NATIONALITY, CASUAL, MARRIED, SECONDMENT, VERIFIED, ACTIVE, ENTITY_ID,DEPENDENT', 'required'),
			array('PARTY_ID, SECONDMENT_ORG_ID, ENTITY_ID', 'numerical', 'integerOnly'=>true),
			array('PERSONAL_ID, SALUTATION, RELIGION, BLOOD_GROUP, SUBCAST, NATIONALITY', 'length', 'max'=>30),
			array('FIRST_NAME, MIDDILE_NAME, LAST_NAME', 'length', 'max'=>50),
			array('PREFERED_NAME, ALTERNATE_NAME, FATHER, ADDRESS1, ADDRESS2, ADDRESS3, ADDRESS4, PHONE, EMAIL', 'length', 'max'=>100),
			array('GENDER, CASUAL, MARRIED, SECONDMENT, VERIFIED, ACTIVE, DEPENDENT', 'length', 'max'=>1),
			array('MOTHER', 'length', 'max'=>110),
			array('DOB', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('PARTY_ID, PERSONAL_ID, SALUTATION, FIRST_NAME, MIDDILE_NAME, LAST_NAME, PREFERED_NAME, ALTERNATE_NAME, DOB, GENDER, RELIGION, BLOOD_GROUP, SUBCAST, FATHER, MOTHER, NATIONALITY, CASUAL, MARRIED, SECONDMENT, SECONDMENT_ORG_ID, VERIFIED, ACTIVE, ADDRESS1, ADDRESS2, ADDRESS3, ADDRESS4, PHONE, EMAIL, ENTITY_ID', 'safe', 'on'=>'search'),
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
			'PARTY_ID' => 'Party',
			'PERSONAL_ID' => 'Personal ID',
			'SALUTATION' => 'Salutation',
			'FIRST_NAME' => 'First Name',
			'MIDDILE_NAME' => 'Middile Name',
			'LAST_NAME' => 'Last Name',
			'PREFERED_NAME' => 'Prefered Name',
			'ALTERNATE_NAME' => 'Alternate Name',
			'DOB' => 'Date Of Birth',
			'GENDER' => 'Gender',
			'RELIGION' => 'Religion',
			'BLOOD_GROUP' => 'Blood Group',
			'SUBCAST' => 'Subcast',
			'FATHER' => 'Father',
			'MOTHER' => 'Mother',
			'NATIONALITY' => 'Nationality',
			'CASUAL' => 'Casual',
			'MARRIED' => 'Married',
			'SECONDMENT' => 'Secondment',
			'SECONDMENT_ORG_ID' => 'Secondment Organization',
			'VERIFIED' => 'Verified',
			'ACTIVE' => 'Active',
			'ADDRESS1' => 'Address1',
			'ADDRESS2' => 'Address2',
			'ADDRESS3' => 'Address3',
			'ADDRESS4' => 'Address4',
			'PHONE' => 'Phone',
			'EMAIL' => 'Email',
			'ENTITY_ID' => 'Entity',
            'DEPENDENT' => 'Dependent',
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

		$criteria->compare('PARTY_ID',$this->PARTY_ID);
		$criteria->compare('PERSONAL_ID',$this->PERSONAL_ID,true);
		$criteria->compare('SALUTATION',$this->SALUTATION,true);
		$criteria->compare('FIRST_NAME',$this->FIRST_NAME,true);
		$criteria->compare('MIDDILE_NAME',$this->MIDDILE_NAME,true);
		$criteria->compare('LAST_NAME',$this->LAST_NAME,true);
		$criteria->compare('PREFERED_NAME',$this->PREFERED_NAME,true);
		$criteria->compare('ALTERNATE_NAME',$this->ALTERNATE_NAME,true);
		$criteria->compare('DOB',$this->DOB,true);
		$criteria->compare('GENDER',$this->GENDER,true);
		$criteria->compare('RELIGION',$this->RELIGION,true);
		$criteria->compare('BLOOD_GROUP',$this->BLOOD_GROUP,true);
		$criteria->compare('SUBCAST',$this->SUBCAST,true);
		$criteria->compare('FATHER',$this->FATHER,true);
		$criteria->compare('MOTHER',$this->MOTHER,true);
		$criteria->compare('NATIONALITY',$this->NATIONALITY,true);
		$criteria->compare('CASUAL',$this->CASUAL,true);
		$criteria->compare('MARRIED',$this->MARRIED,true);
		$criteria->compare('SECONDMENT',$this->SECONDMENT,true);
		$criteria->compare('SECONDMENT_ORG_ID',$this->SECONDMENT_ORG_ID);
		$criteria->compare('VERIFIED',$this->VERIFIED,true);
		$criteria->compare('ACTIVE',$this->ACTIVE,true);
		$criteria->compare('ADDRESS1',$this->ADDRESS1,true);
		$criteria->compare('ADDRESS2',$this->ADDRESS2,true);
		$criteria->compare('ADDRESS3',$this->ADDRESS3,true);
		$criteria->compare('ADDRESS4',$this->ADDRESS4,true);
		$criteria->compare('PHONE',$this->PHONE,true);
		$criteria->compare('EMAIL',$this->EMAIL,true);
		$criteria->compare('ENTITY_ID',$this->ENTITY_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}