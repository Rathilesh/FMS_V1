<?php

/**
 * This is the model class for table "MD_USER_ROLE".
 *
 * The followings are the available columns in table 'MD_USER_ROLE':
 * @property integer $ID
 * @property integer $MRD_ID
 * @property string $USR_ID
 * @property string $WEF
 * @property string $WET
 * @property string $CREATOR_ID
 * @property string $CREATED_ON
 * @property string $MODIFIER_ID
 * @property string $MODIFIED_ON
 *
 * The followings are the available model relations:
 * @property MDROLEDEFINITION $mRD
 */
class Md_User_Role extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Md_User_Role the static model class
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
		return 'MD_USER_ROLE';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('MRD_ID', 'numerical', 'integerOnly'=>true),
			array('USR_ID, CREATOR_ID, MODIFIER_ID', 'length', 'max'=>30),
			array('WEF, WET, CREATED_ON, MODIFIED_ON', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, MRD_ID, USR_ID, WEF, WET, CREATOR_ID, CREATED_ON, MODIFIER_ID, MODIFIED_ON', 'safe', 'on'=>'search'),
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
			'mRD' => array(self::BELONGS_TO, 'MDROLEDEFINITION', 'MRD_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'MRD_ID' => 'Mrd',
			'USR_ID' => 'Usr',
			'WEF' => 'Wef',
			'WET' => 'Wet',
			'CREATOR_ID' => 'Creator',
			'CREATED_ON' => 'Created On',
			'MODIFIER_ID' => 'Modifier',
			'MODIFIED_ON' => 'Modified On',
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
		$criteria->compare('MRD_ID',$this->MRD_ID);
		$criteria->compare('USR_ID',$this->USR_ID,true);
		$criteria->compare('WEF',$this->WEF,true);
		$criteria->compare('WET',$this->WET,true);
		$criteria->compare('CREATOR_ID',$this->CREATOR_ID,true);
		$criteria->compare('CREATED_ON',$this->CREATED_ON,true);
		$criteria->compare('MODIFIER_ID',$this->MODIFIER_ID,true);
		$criteria->compare('MODIFIED_ON',$this->MODIFIED_ON,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}