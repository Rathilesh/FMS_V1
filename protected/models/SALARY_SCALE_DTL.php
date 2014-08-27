<?php

/**
 * This is the model class for table "SALARY_SCALE_DTL".
 *
 * The followings are the available columns in table 'SALARY_SCALE_DTL':
 * @property integer $ID
 * @property double $NOTCH
 * @property integer $EFFECIENCY_BAR
 * @property double $STAGE_AMOUNT
 * @property double $SALDTL_INCREMENT
 * @property integer $SALARY_ID
 *
 * The followings are the available model relations:
 * @property SALARYSCALE $sALARY
 */
class SALARY_SCALE_DTL extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SALARY_SCALE_DTL the static model class
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
		return 'SALARY_SCALE_DTL';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('STAGE_AMOUNT, SALARY_ID', 'required'),
			array('EFFECIENCY_BAR, SALARY_ID', 'numerical', 'integerOnly'=>true),
			array('NOTCH, STAGE_AMOUNT, SALDTL_INCREMENT', 'numerical'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, NOTCH, EFFECIENCY_BAR, STAGE_AMOUNT, SALDTL_INCREMENT, SALARY_ID', 'safe', 'on'=>'search'),
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
			'sALARY' => array(self::BELONGS_TO, 'SALARYSCALE', 'SALARY_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'NOTCH' => 'Notch',
			'EFFECIENCY_BAR' => 'Effeciency Bar',
			'STAGE_AMOUNT' => 'Stage Amount',
			'SALDTL_INCREMENT' => 'Saldtl Increment',
			'SALARY_ID' => 'Salary',
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
		$criteria->compare('NOTCH',$this->NOTCH);
		$criteria->compare('EFFECIENCY_BAR',$this->EFFECIENCY_BAR);
		$criteria->compare('STAGE_AMOUNT',$this->STAGE_AMOUNT);
		$criteria->compare('SALDTL_INCREMENT',$this->SALDTL_INCREMENT);
		$criteria->compare('SALARY_ID',$this->SALARY_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}