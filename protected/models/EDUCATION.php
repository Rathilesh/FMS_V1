<?php

/**
 * This is the model class for table "EDUCATION".
 *
 * The followings are the available columns in table 'EDUCATION':
 * @property integer $ID
 * @property integer $EDUCATION_LEVEL
 * @property string $EDUCATION
 * @property string $MEAN_FOR
 *
 * The followings are the available model relations:
 * @property QUALIFICATIONEXPERIENCE[] $qUALIFICATIONEXPERIENCEs
 */
class EDUCATION extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return EDUCATION the static model class
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
		return 'EDUCATION';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('EDUCATION_LEVEL, EDUCATION', 'required'),
			array('EDUCATION_LEVEL', 'numerical', 'integerOnly'=>true),
			array('EDUCATION, MEAN_FOR', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, EDUCATION_LEVEL, EDUCATION, MEAN_FOR', 'safe', 'on'=>'search'),
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
			'qUALIFICATIONEXPERIENCEs' => array(self::HAS_MANY, 'QUALIFICATIONEXPERIENCE', 'EDU_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'EDUCATION_LEVEL' => 'Education Level',
			'EDUCATION' => 'Education',
			'MEAN_FOR' => 'Mean For',
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
		$criteria->compare('EDUCATION_LEVEL',$this->EDUCATION_LEVEL);
		$criteria->compare('EDUCATION',$this->EDUCATION,true);
		$criteria->compare('MEAN_FOR',$this->MEAN_FOR,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}