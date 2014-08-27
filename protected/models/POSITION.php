<?php

/**
 * This is the model class for table "POSITION".
 *
 * The followings are the available columns in table 'POSITION':
 * @property integer $ID
 * @property string $SHORT_NAME
 * @property string $POSITION
 * @property integer $MAX_HEAD_COUNT
 * @property integer $HEAD_COUNT
 * @property string $SP_REQUIRED
 * @property integer $NOTICE_PERIOD
 * @property integer $NOTICE_PERIOD_TOLERANCE
 * @property string $PROBATION
 * @property string $PROBATION_PERIOD_UOM
 * @property double $PROBATION_PERIOD
 * @property double $PROBATION_PERIOD_FOR_PC
 * @property integer $ENTITY_ID
 */
class POSITION extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return POSITION the static model class
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
		return 'POSITION';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SHORT_NAME, POSITION, MAX_HEAD_COUNT, HEAD_COUNT', 'required'),
			array('MAX_HEAD_COUNT, HEAD_COUNT, NOTICE_PERIOD, NOTICE_PERIOD_TOLERANCE, ENTITY_ID', 'numerical', 'integerOnly'=>true),
			array('PROBATION_PERIOD, PROBATION_PERIOD_FOR_PC', 'numerical'),
			array('SHORT_NAME, PROBATION, PROBATION_PERIOD_UOM', 'length', 'max'=>30),
			array('POSITION', 'length', 'max'=>100),
			array('SP_REQUIRED', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, SHORT_NAME, POSITION, MAX_HEAD_COUNT, HEAD_COUNT, SP_REQUIRED, NOTICE_PERIOD, NOTICE_PERIOD_TOLERANCE, PROBATION, PROBATION_PERIOD_UOM, PROBATION_PERIOD, PROBATION_PERIOD_FOR_PC, ENTITY_ID', 'safe', 'on'=>'search'),
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
			'SHORT_NAME' => 'Short Name',
			'POSITION' => 'Position',
			'MAX_HEAD_COUNT' => 'Max Head Count',
			'HEAD_COUNT' => 'Head Count',
			'SP_REQUIRED' => 'Sp Required',
			'NOTICE_PERIOD' => 'Notice Period',
			'NOTICE_PERIOD_TOLERANCE' => 'Notice Period Tolerance',
			'PROBATION' => 'Probation',
			'PROBATION_PERIOD_UOM' => 'Probation Period Uom',
			'PROBATION_PERIOD' => 'Probation Period',
			'PROBATION_PERIOD_FOR_PC' => 'Probation Period For Pc',
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
		$criteria->compare('POSITION',$this->POSITION,true);
		$criteria->compare('MAX_HEAD_COUNT',$this->MAX_HEAD_COUNT);
		$criteria->compare('HEAD_COUNT',$this->HEAD_COUNT);
		$criteria->compare('SP_REQUIRED',$this->SP_REQUIRED,true);
		$criteria->compare('NOTICE_PERIOD',$this->NOTICE_PERIOD);
		$criteria->compare('NOTICE_PERIOD_TOLERANCE',$this->NOTICE_PERIOD_TOLERANCE);
		$criteria->compare('PROBATION',$this->PROBATION,true);
		$criteria->compare('PROBATION_PERIOD_UOM',$this->PROBATION_PERIOD_UOM,true);
		$criteria->compare('PROBATION_PERIOD',$this->PROBATION_PERIOD);
		$criteria->compare('PROBATION_PERIOD_FOR_PC',$this->PROBATION_PERIOD_FOR_PC);
		$criteria->compare('ENTITY_ID',$this->ENTITY_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}