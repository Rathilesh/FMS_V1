<?php

/**
 * This is the model class for table "HELP".
 *
 * The followings are the available columns in table 'HELP':
 * @property integer $ID
 * @property integer $LANGUAGE
 * @property string $ABOUT
 * @property string $TITLE
 * @property string $DESCRIPTION
 * @property string $TAG
 */
class Help extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Help the static model class
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
		return 'HELP';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('LANGUAGE, ABOUT', 'required'),
			array('LANGUAGE', 'numerical', 'integerOnly'=>true),
			array('ABOUT, TITLE, TAG', 'length', 'max'=>100),
			array('DESCRIPTION', 'length', 'max'=>1024),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, LANGUAGE, ABOUT, TITLE, DESCRIPTION, TAG', 'safe', 'on'=>'search'),
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
			'LANGUAGE' => 'Language',
			'ABOUT' => 'About',
			'TITLE' => 'Title',
			'DESCRIPTION' => 'Description',
			'TAG' => 'Tag',
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
		$criteria->compare('LANGUAGE',$this->LANGUAGE);
		$criteria->compare('ABOUT',$this->ABOUT,true);
		$criteria->compare('TITLE',$this->TITLE,true);
		$criteria->compare('DESCRIPTION',$this->DESCRIPTION,true);
		$criteria->compare('TAG',$this->TAG,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}