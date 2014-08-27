<?php

/**
 * This is the model class for table "EDUCATION_FOLIO".
 *
 * The followings are the available columns in table 'EDUCATION_FOLIO':
 * @property integer $ID
 * @property string $FOLIO
 *
 * The followings are the available model relations:
 * @property QUALIFICATIONEXPERIENCE[] $qUALIFICATIONEXPERIENCEs
 */
class EDUCATIONFOLIO extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return EDUCATION_FOLIO the static model class
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
		return 'EDUCATION_FOLIO';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('FOLIO', 'required'),
			array('FOLIO', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, FOLIO', 'safe', 'on'=>'search'),
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
			'qUALIFICATIONEXPERIENCEs' => array(self::HAS_MANY, 'QUALIFICATIONEXPERIENCE', 'EFLO_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'FOLIO' => 'Folio',
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
		$criteria->compare('FOLIO',$this->FOLIO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}