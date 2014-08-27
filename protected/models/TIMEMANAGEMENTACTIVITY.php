<?php

/**
 * This is the model class for table "TIME_MANAGEMENT_ACTIVITY".
 *
 * The followings are the available columns in table 'TIME_MANAGEMENT_ACTIVITY':
 * @property integer $ID
 * @property string $DESCRIPTION
 * @property string $ANALYSIS_FACTOR1
 * @property string $ANALYSIS_FACTOR2
 * @property string $ACTIVE
 * @property integer $TMA_ID
 *
 * The followings are the available model relations:
 * @property TIMEMANAGEMENTACTIVITY $tMA
 * @property TIMEMANAGEMENTACTIVITY[] $tIMEMANAGEMENTACTIVITies
 */
class TIMEMANAGEMENTACTIVITY extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TIMEMANAGEMENTACTIVITY the static model class
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
		return 'TIME_MANAGEMENT_ACTIVITY';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('TMA_ID', 'numerical', 'integerOnly'=>true),
			array('DESCRIPTION', 'length', 'max'=>1024),
			array('ANALYSIS_FACTOR1, ANALYSIS_FACTOR2', 'length', 'max'=>50),
			array('ACTIVE', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, DESCRIPTION, ANALYSIS_FACTOR1, ANALYSIS_FACTOR2, ACTIVE, TMA_ID', 'safe', 'on'=>'search'),
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
			'tMA' => array(self::BELONGS_TO, 'TIMEMANAGEMENTACTIVITY', 'TMA_ID'),
			'tIMEMANAGEMENTACTIVITies' => array(self::HAS_MANY, 'TIMEMANAGEMENTACTIVITY', 'TMA_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'DESCRIPTION' => 'Description',
			'ANALYSIS_FACTOR1' => 'Analysis Factor1',
			'ANALYSIS_FACTOR2' => 'Analysis Factor2',
			'ACTIVE' => 'Active',
			'TMA_ID' => 'Tma',
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
		$criteria->compare('DESCRIPTION',$this->DESCRIPTION,true);
		$criteria->compare('ANALYSIS_FACTOR1',$this->ANALYSIS_FACTOR1,true);
		$criteria->compare('ANALYSIS_FACTOR2',$this->ANALYSIS_FACTOR2,true);
		$criteria->compare('ACTIVE',$this->ACTIVE,true);
		$criteria->compare('TMA_ID',$this->TMA_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}