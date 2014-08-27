<?php

/**
 * This is the model class for table "ENTITY_POLICY".
 *
 * The followings are the available columns in table 'ENTITY_POLICY':
 * @property integer $ID
 * @property integer $SUB_ENTITY_ID
 * @property integer $ENTITY_STRUCTURE_ID
 * @property integer $GROUP_ID
 * @property integer $GRADE_ID
 * @property integer $POSITION_ID
 * @property integer $PERSONNEL_ID
 * @property integer $APPOINTMENT_ID
 * @property integer $POLICY_ID
 * @property string $POLICY_VALUE
 * @property string $WEF
 * @property string $WET
 * @property integer $ENTITY_ID
 *
 * The followings are the available model relations:
 * @property ENTITY $eNTITY
 */
class Entity_Policy extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Entity_Policy the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        public $POLICYNAME;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ENTITY_POLICY';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('POLICY_ID, ENTITY_ID', 'required'),
			array('SUB_ENTITY_ID, ENTITY_STRUCTURE_ID, GROUP_ID, GRADE_ID, POSITION_ID, PERSONNEL_ID, APPOINTMENT_ID, POLICY_ID, ENTITY_ID', 'numerical', 'integerOnly'=>true),
			array('POLICY_VALUE', 'length', 'max'=>512),
			array('WEF, WET', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, SUB_ENTITY_ID, ENTITY_STRUCTURE_ID, GROUP_ID, GRADE_ID, POSITION_ID, PERSONNEL_ID, APPOINTMENT_ID, POLICY_ID, POLICY_VALUE, WEF, WET, ENTITY_ID', 'safe', 'on'=>'search'),
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
			'SUB_ENTITY_ID' => 'Sub Entity',
			'ENTITY_STRUCTURE_ID' => 'Entity Structure',
			'GROUP_ID' => 'Group',
			'GRADE_ID' => 'Grade',
			'POSITION_ID' => 'Position',
			'PERSONNEL_ID' => 'Personnel',
			'APPOINTMENT_ID' => 'Appointment',
			'POLICY_ID' => 'Policy',
			'POLICY_VALUE' => 'Policy Value',
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
		$criteria->compare('SUB_ENTITY_ID',$this->SUB_ENTITY_ID);
		$criteria->compare('ENTITY_STRUCTURE_ID',$this->ENTITY_STRUCTURE_ID);
		$criteria->compare('GROUP_ID',$this->GROUP_ID);
		$criteria->compare('GRADE_ID',$this->GRADE_ID);
		$criteria->compare('POSITION_ID',$this->POSITION_ID);
		$criteria->compare('PERSONNEL_ID',$this->PERSONNEL_ID);
		$criteria->compare('APPOINTMENT_ID',$this->APPOINTMENT_ID);
		$criteria->compare('POLICY_ID',$this->POLICY_ID);
		$criteria->compare('POLICY_VALUE',$this->POLICY_VALUE,true);
		$criteria->compare('WEF',$this->WEF,true);
		$criteria->compare('WET',$this->WET,true);
		$criteria->compare('ENTITY_ID',$this->ENTITY_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}