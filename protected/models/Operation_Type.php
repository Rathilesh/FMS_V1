<?php

/**
 * This is the model class for table "OPERATION_TYPE".
 *
 * The followings are the available columns in table 'OPERATION_TYPE':
 * @property integer $ID
 * @property string $OPERATION_TYPE
 * @property string $WEF
 * @property string $WET
 * @property integer $ENTITY_ID
 *
 * The followings are the available model relations:
 * @property ENTITY $eNTITY
 */
class Operation_Type extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Operation_Type the static model class
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
		return 'OPERATION_TYPE';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ENTITY_ID', 'required'),
			array('ENTITY_ID', 'numerical', 'integerOnly'=>true),
			array('OPERATION_TYPE', 'length', 'max'=>50),
			array('WEF, WET', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, OPERATION_TYPE, WEF, WET, ENTITY_ID', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'OPERATION_TYPE' => 'Operation Type',
			'WEF' => 'Wef',
			'WET' => 'Wet',
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
		$criteria->compare('OPERATION_TYPE',$this->OPERATION_TYPE,true);
		$criteria->compare('WEF',$this->WEF,true);
		$criteria->compare('WET',$this->WET,true);
		$criteria->compare('ENTITY_ID',$this->ENTITY_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}