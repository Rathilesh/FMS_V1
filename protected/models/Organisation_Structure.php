<?php

/**
 * This is the model class for table "ORGANISATION_STRUCTURE".
 *
 * The followings are the available columns in table 'ORGANISATION_STRUCTURE':
 * @property integer $ID
 * @property integer $ENTITY_REPORT_TO
 * @property integer $ENTITY_REPORT
 * @property string $IS_ENTITY
 * @property string $IS_ORGANISATION
 * @property string $IS_POSITION
 * @property string $IS_DIRECT
 * @property string $WEF
 * @property string $WET
 * @property integer $ENTITY_ID
 * @property integer $POST_ID
 */
class Organisation_Structure extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Organisation_Structure the static model class
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
		return 'ORGANISATION_STRUCTURE';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('WEF', 'required'),
			array('ENTITY_REPORT_TO, ENTITY_REPORT, ENTITY_ID, POST_ID', 'numerical', 'integerOnly'=>true),
			array('IS_ENTITY, IS_ORGANISATION, IS_POSITION, IS_DIRECT', 'length', 'max'=>1),
			array('WET', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, ENTITY_REPORT_TO, ENTITY_REPORT, IS_ENTITY, IS_ORGANISATION, IS_POSITION, IS_DIRECT, WEF, WET, ENTITY_ID, POST_ID', 'safe', 'on'=>'search'),
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
			'ID' => 'ID',
			'ENTITY_REPORT_TO' => 'Entity Report To',
			'ENTITY_REPORT' => 'Entity Report',
			'IS_ENTITY' => 'Is Entity',
			'IS_ORGANISATION' => 'Is Organisation',
			'IS_POSITION' => 'Is Position',
			'IS_DIRECT' => 'Is Direct',
			'WEF' => 'Wef',
			'WET' => 'Wet',
			'ENTITY_ID' => 'Entity',
			'POST_ID' => 'Post',
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
		$criteria->compare('ENTITY_REPORT_TO',$this->ENTITY_REPORT_TO);
		$criteria->compare('ENTITY_REPORT',$this->ENTITY_REPORT);
		$criteria->compare('IS_ENTITY',$this->IS_ENTITY,true);
		$criteria->compare('IS_ORGANISATION',$this->IS_ORGANISATION,true);
		$criteria->compare('IS_POSITION',$this->IS_POSITION,true);
		$criteria->compare('IS_DIRECT',$this->IS_DIRECT,true);
		$criteria->compare('WEF',$this->WEF,true);
		$criteria->compare('WET',$this->WET,true);
		$criteria->compare('ENTITY_ID',$this->ENTITY_ID);
		$criteria->compare('POST_ID',$this->POST_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}