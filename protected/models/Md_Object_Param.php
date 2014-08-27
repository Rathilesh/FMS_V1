<?php

/**
 * This is the model class for table "MD_OBJECT_PARAM".
 *
 * The followings are the available columns in table 'MD_OBJECT_PARAM':
 * @property integer $MMO_ID
 * @property string $PARAM_NAME
 * @property string $PARAM_VALUE
 * @property string $DESCRIPTION
 * @property string $DATA_TYPE
 */
class Md_Object_Param extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Md_Object_Param the static model class
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
		return 'MD_OBJECT_PARAM';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PARAM_VALUE, DESCRIPTION', 'length', 'max'=>254),
			array('DATA_TYPE', 'length', 'max'=>2),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('MMO_ID, PARAM_NAME, PARAM_VALUE, DESCRIPTION, DATA_TYPE', 'safe', 'on'=>'search'),
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
			'MMO_ID' => 'Mmo',
			'PARAM_NAME' => 'Param Name',
			'PARAM_VALUE' => 'Param Value',
			'DESCRIPTION' => 'Description',
			'DATA_TYPE' => 'Data Type',
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

		$criteria->compare('MMO_ID',$this->MMO_ID);
		$criteria->compare('PARAM_NAME',$this->PARAM_NAME,true);
		$criteria->compare('PARAM_VALUE',$this->PARAM_VALUE,true);
		$criteria->compare('DESCRIPTION',$this->DESCRIPTION,true);
		$criteria->compare('DATA_TYPE',$this->DATA_TYPE,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}