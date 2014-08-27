<?php

/**
 * This is the model class for table "BASIC_DEFINITION_CATEGORY".
 *
 * The followings are the available columns in table 'BASIC_DEFINITION_CATEGORY':
 * @property string $DEFINITION_TYPE
 * @property string $DESCRIPTION
 * @property string $IS_AMEND
 * @property string $IS_DISPLAY
 * @property string $IS_UNIVERSAL
 * @property string $IS_COMPULSORY
 * @property integer $NO_OF_RECORDS
 */
class Basic_Definition_Category extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Basic_Definition_Category the static model class
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
		return 'BASIC_DEFINITION_CATEGORY';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('DEFINITION_TYPE, DESCRIPTION, IS_AMEND, IS_DISPLAY, IS_UNIVERSAL, IS_COMPULSORY, NO_OF_RECORDS', 'required'),
			array('NO_OF_RECORDS', 'numerical', 'integerOnly'=>true),
			array('DEFINITION_TYPE', 'length', 'max'=>30),
			array('DESCRIPTION', 'length', 'max'=>100),
			array('IS_AMEND, IS_DISPLAY, IS_UNIVERSAL, IS_COMPULSORY', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('DEFINITION_TYPE, DESCRIPTION, IS_AMEND, IS_DISPLAY, IS_UNIVERSAL, IS_COMPULSORY, NO_OF_RECORDS', 'safe', 'on'=>'search'),
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
			'DEFINITION_TYPE' => 'Definition Type',
			'DESCRIPTION' => 'Description',
			'IS_AMEND' => 'Is Amend',
			'IS_DISPLAY' => 'Is Display',
			'IS_UNIVERSAL' => 'Is Universal',
			'IS_COMPULSORY' => 'Is Compulsory',
			'NO_OF_RECORDS' => 'No Of Records',
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

		$criteria->compare('DEFINITION_TYPE',$this->DEFINITION_TYPE,true);
		$criteria->compare('DESCRIPTION',$this->DESCRIPTION,true);
		$criteria->compare('IS_AMEND',$this->IS_AMEND,true);
		$criteria->compare('IS_DISPLAY',$this->IS_DISPLAY,true);
		$criteria->compare('IS_UNIVERSAL',$this->IS_UNIVERSAL,true);
		$criteria->compare('IS_COMPULSORY',$this->IS_COMPULSORY,true);
		$criteria->compare('NO_OF_RECORDS',$this->NO_OF_RECORDS);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}