<?php

/**
 * This is the model class for table "POLICY_VALUE".
 *
 * The followings are the available columns in table 'POLICY_VALUE':
 * @property integer $ID
 * @property string $POLICY_VALUE
 * @property string $DESCRIPTION
 * @property string $IS_DEFAULT
 * @property integer $POLICY_ID
 *
 * The followings are the available model relations:
 * @property POLICY $pOLICY
 */
class Policy_Value extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Policy_Value the static model class
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
		return 'POLICY_VALUE';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('POLICY_ID', 'required'),
			array('POLICY_ID', 'numerical', 'integerOnly'=>true),
			array('POLICY_VALUE', 'length', 'max'=>524),
			array('DESCRIPTION', 'length', 'max'=>2058),
			array('IS_DEFAULT', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, POLICY_VALUE, DESCRIPTION, IS_DEFAULT, POLICY_ID', 'safe', 'on'=>'search'),
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
			'pOLICY' => array(self::BELONGS_TO, 'POLICY', 'POLICY_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'POLICY_VALUE' => 'Policy Value',
			'DESCRIPTION' => 'Description',
			'IS_DEFAULT' => 'Is Default',
			'POLICY_ID' => 'Policy',
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
		$criteria->compare('POLICY_VALUE',$this->POLICY_VALUE,true);
		$criteria->compare('DESCRIPTION',$this->DESCRIPTION,true);
		$criteria->compare('IS_DEFAULT',$this->IS_DEFAULT,true);
		$criteria->compare('POLICY_ID',$this->POLICY_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}