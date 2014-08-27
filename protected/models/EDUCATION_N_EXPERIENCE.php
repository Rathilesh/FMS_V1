<?php

/**
 * This is the model class for table "EDUCATION_N_EXPERIENCE".
 *
 * The followings are the available columns in table 'EDUCATION_N_EXPERIENCE':
 * @property integer $ID
 * @property string $RECORD_TYPE
 * @property integer $EDUCATION_ID
 * @property double $NO_OF_DAY
 * @property double $NO_OF_HR
 * @property double $RANK_OR_SCORE
 * @property integer $POST_ID
 *
 * The followings are the available model relations:
 * @property POSITION $pOST
 */
class EDUCATION_N_EXPERIENCE extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return EDUCATION_N_EXPERIENCE the static model class
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
		return 'EDUCATION_N_EXPERIENCE';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('POST_ID', 'required'),
			array('EDUCATION_ID, POST_ID', 'numerical', 'integerOnly'=>true),
			array('NO_OF_DAY, NO_OF_HR, RANK_OR_SCORE', 'numerical'),
			array('RECORD_TYPE', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, RECORD_TYPE, EDUCATION_ID, NO_OF_DAY, NO_OF_HR, RANK_OR_SCORE, POST_ID', 'safe', 'on'=>'search'),
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
			'pOST' => array(self::BELONGS_TO, 'POSITION', 'POST_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'RECORD_TYPE' => 'Record Type',
			'EDUCATION_ID' => 'Education',
			'NO_OF_DAY' => 'No Of Day',
			'NO_OF_HR' => 'No Of Hr',
			'RANK_OR_SCORE' => 'Rank Or Score',
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
		$criteria->compare('RECORD_TYPE',$this->RECORD_TYPE,true);
		$criteria->compare('EDUCATION_ID',$this->EDUCATION_ID);
		$criteria->compare('NO_OF_DAY',$this->NO_OF_DAY);
		$criteria->compare('NO_OF_HR',$this->NO_OF_HR);
		$criteria->compare('RANK_OR_SCORE',$this->RANK_OR_SCORE);
		$criteria->compare('POST_ID',$this->POST_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}