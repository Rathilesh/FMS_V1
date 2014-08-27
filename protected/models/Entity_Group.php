<?php

/**
 * This is the model class for table "ENTITY_GROUP".
 *
 * The followings are the available columns in table 'ENTITY_GROUP':
 * @property integer $ID
 * @property string $SHORT_NAME
 * @property string $DESCRIPTION
 * @property string $GRP_FUNCTION
 * @property integer $ENTITY_ID
 *
 * The followings are the available model relations:
 * @property ENTITYCALENDER[] $eNTITYCALENDERs
 * @property ENTITY $eNTITY
 */
class Entity_Group extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Entity_Group the static model class
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
		return 'ENTITY_GROUP';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SHORT_NAME, DESCRIPTION, ENTITY_ID', 'required'),
			array('ENTITY_ID', 'numerical', 'integerOnly'=>true),
			array('SHORT_NAME, GRP_FUNCTION', 'length', 'max'=>30),
			array('DESCRIPTION', 'length', 'max'=>512),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, SHORT_NAME, DESCRIPTION, GRP_FUNCTION, ENTITY_ID', 'safe', 'on'=>'search'),
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
			'eNTITYCALENDERs' => array(self::HAS_MANY, 'ENTITYCALENDER', 'GRP_ID'),
			'eNTITY' => array(self::BELONGS_TO, 'ENTITY', 'ENTITY_ID'),
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
			'GRP_FUNCTION' => 'Grp Function',
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
		$criteria->compare('SHORT_NAME',$this->SHORT_NAME,true);
		$criteria->compare('DESCRIPTION',$this->DESCRIPTION,true);
		$criteria->compare('GRP_FUNCTION',$this->GRP_FUNCTION,true);
		$criteria->compare('ENTITY_ID',$this->ENTITY_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}