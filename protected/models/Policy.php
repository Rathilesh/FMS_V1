<?php

/**
 * This is the model class for table "POLICY".
 *
 * The followings are the available columns in table 'POLICY':
 * @property integer $ID
 * @property string $SHORT_NAME
 * @property string $DESCRIPTION
 * @property string $WEF
 * @property string $WET
 * @property string $POLICY_FUNCTION
 *
 * The followings are the available model relations:
 * @property POLICYVALUE[] $pOLICYVALUEs
 */
class Policy extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Policy the static model class
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
		return 'POLICY';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SHORT_NAME, POLICY_FUNCTION', 'length', 'max'=>50),
			array('DESCRIPTION', 'length', 'max'=>2058),
			array('WEF, WET', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, SHORT_NAME, DESCRIPTION, WEF, WET, POLICY_FUNCTION', 'safe', 'on'=>'search'),
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
			'pOLICYVALUEs' => array(self::HAS_MANY, 'POLICYVALUE', 'POLICY_ID'),
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
			'DESCRIPTION' => 'Description',
			'WEF' => 'Wef',
			'WET' => 'Wet',
			'POLICY_FUNCTION' => 'Policy Function',
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
		$criteria->compare('DESCRIPTION',$this->DESCRIPTION,true);
		$criteria->compare('WEF',$this->WEF,true);
		$criteria->compare('WET',$this->WET,true);
		$criteria->compare('POLICY_FUNCTION',$this->POLICY_FUNCTION,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}