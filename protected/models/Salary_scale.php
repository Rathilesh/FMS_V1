<?php

/**
 * This is the model class for table "SALARY_SCALE".
 *
 * The followings are the available columns in table 'SALARY_SCALE':
 * @property integer $ID
 * @property string $SHORT_NAME
 * @property double $START_AMOUNT
 * @property double $END_AMOUNT
 * @property string $WEF
 * @property string $WET
 * @property integer $POST_ID
 * @property integer $GRADE_ID
 */
class Salary_scale extends CActiveRecord
{
    public $scale;
    /**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Salary_scale the static model class
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
		return 'SALARY_SCALE';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID, SHORT_NAME, START_AMOUNT, WEF', 'required'),
			array('ID, POST_ID, GRADE_ID', 'numerical', 'integerOnly'=>true),
			array('START_AMOUNT, END_AMOUNT', 'numerical'),
			array('SHORT_NAME', 'length', 'max'=>30),
			array('WET', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, SHORT_NAME, START_AMOUNT, END_AMOUNT, WEF, WET, POST_ID, GRADE_ID,scale', 'safe', 'on'=>'search'),
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
			'START_AMOUNT' => 'Start Amount',
			'END_AMOUNT' => 'End Amount',
			'WEF' => 'Wef',
			'WET' => 'Wet',
			'POST_ID' => 'Post',
			'GRADE_ID' => 'Grade',
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
		$criteria->compare('START_AMOUNT',$this->START_AMOUNT);
		$criteria->compare('END_AMOUNT',$this->END_AMOUNT);
		$criteria->compare('WEF',$this->WEF,true);
		$criteria->compare('WET',$this->WET,true);
		$criteria->compare('POST_ID',$this->POST_ID);
		$criteria->compare('GRADE_ID',$this->GRADE_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}