<?php

/**
 * This is the model class for table "ENTITY_TYPE".
 *
 * The followings are the available columns in table 'ENTITY_TYPE':
 * @property integer $ID
 * @property string $ENTITY_TYPE
 * @property integer $ENTITY_LEVEL
 * @property string $IS_LOCATION
 * @property string $IS_ENTITY
 * @property string $IS_POSITION
 * @property integer $ENTITY_ID
 *
 * The followings are the available model relations:
 * @property ENTITYRELATION[] $eNTITYRELATIONs
 * @property ENTITY $eNTITY
 */
class Entity_Type extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Entity_Type the static model class
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
		return 'ENTITY_TYPE';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ENTITY_TYPE, ENTITY_LEVEL, ENTITY_ID', 'required'),
			array('ENTITY_LEVEL, ENTITY_ID', 'numerical', 'integerOnly'=>true),
			array('ENTITY_TYPE', 'length', 'max'=>50),
			array('IS_LOCATION, IS_ENTITY, IS_POSITION', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, ENTITY_TYPE, ENTITY_LEVEL, IS_LOCATION, IS_ENTITY, IS_POSITION, ENTITY_ID', 'safe', 'on'=>'search'),
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
			'eNTITYRELATIONs' => array(self::HAS_MANY, 'ENTITYRELATION', 'ENTYP_ID'),
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
			'ENTITY_TYPE' => 'Entity Type',
			'ENTITY_LEVEL' => 'Entity Level',
			'IS_LOCATION' => 'Is Location',
			'IS_FUNCTION' => 'Is Function',
			'IS_POSITION' => 'Is Position',
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
		$criteria->compare('ENTITY_TYPE',$this->ENTITY_TYPE,true);
		$criteria->compare('ENTITY_LEVEL',$this->ENTITY_LEVEL);
		$criteria->compare('IS_LOCATION',$this->IS_LOCATION,true);
		$criteria->compare('IS_FUNCTION',$this->IS_FUNCTION,true);
		$criteria->compare('IS_POSITION',$this->IS_POSITION,true);
		$criteria->compare('ENTITY_ID',$this->ENTITY_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}