<?php

/**
 * This is the model class for table "BASIC_DEFINITION".
 *
 * The followings are the available columns in table 'BASIC_DEFINITION':
 * @property string $ID
 * @property string $SHORT_NAME
 * @property string $DESCRIPTION
 * @property string $ENTITY_ID
 * @property string $DFCTG_DEFINITION_TYPE
 *
 * The followings are the available model relations:
 * @property BASICDEFINITIONCATEGORY $dFCTGDEFINITIONTYPE
 */
class Basic_Definition extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Basic_Definition the static model class
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
		return 'BASIC_DEFINITION';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID, SHORT_NAME, DESCRIPTION, DFCTG_DEFINITION_TYPE', 'required'),
			array('ID, ENTITY_ID', 'length', 'max'=>15),
			array('SHORT_NAME, DFCTG_DEFINITION_TYPE', 'length', 'max'=>30),
			array('DESCRIPTION', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, SHORT_NAME, DESCRIPTION, ENTITY_ID, DFCTG_DEFINITION_TYPE', 'safe', 'on'=>'search'),
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
			'dFCTGDEFINITIONTYPE' => array(self::BELONGS_TO, 'BASICDEFINITIONCATEGORY', 'DFCTG_DEFINITION_TYPE'),
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
			'DESCRIPTION' => 'Description',
			'ENTITY_ID' => 'Entity',
			'DFCTG_DEFINITION_TYPE' => 'Dfctg Definition Type',
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

		$criteria->compare('ID',$this->ID,true);
		$criteria->compare('SHORT_NAME',$this->SHORT_NAME,true);
		$criteria->compare('DESCRIPTION',$this->DESCRIPTION,true);
		$criteria->compare('ENTITY_ID',$this->ENTITY_ID,true);
		$criteria->compare('DFCTG_DEFINITION_TYPE',$this->DFCTG_DEFINITION_TYPE,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}