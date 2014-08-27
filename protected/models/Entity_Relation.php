<?php

/**
 * This is the model class for table "ENTITY_RELATION".
 *
 * The followings are the available columns in table 'ENTITY_RELATION':
 * @property integer $ID
 * @property string $WEF
 * @property string $WET
 * @property integer $POST_ID
 * @property integer $ENTITY_ID
 * @property integer $ENTYP_ID
 *
 * The followings are the available model relations:
 * @property ENTITY $eNTITY
 * @property ENTITYTYPE $eNTYP
 */
class Entity_Relation extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Entity_Relation the static model class
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
		return 'ENTITY_RELATION';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('WEF, ENTYP_ID', 'required'),
			array('POST_ID, ENTITY_ID, ENTYP_ID', 'numerical', 'integerOnly'=>true),
			array('WET', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, WEF, WET, POST_ID, ENTITY_ID, ENTYP_ID', 'safe', 'on'=>'search'),
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
			'eNTYP' => array(self::BELONGS_TO, 'ENTITYTYPE', 'ENTYP_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'WEF' => 'Wef',
			'WET' => 'Wet',
			'POST_ID' => 'Post',
			'ENTITY_ID' => 'Entity',
			'ENTYP_ID' => 'Entyp',
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
		$criteria->compare('WEF',$this->WEF,true);
		$criteria->compare('WET',$this->WET,true);
		$criteria->compare('POST_ID',$this->POST_ID);
		$criteria->compare('ENTITY_ID',$this->ENTITY_ID);
		$criteria->compare('ENTYP_ID',$this->ENTYP_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}