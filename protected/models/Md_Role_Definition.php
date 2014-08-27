<?php
include_once 'dynamic_db_connection.php';
/**
 * This is the model class for table "MD_ROLE_DEFINITION".
 *
 * The followings are the available columns in table 'MD_ROLE_DEFINITION':
 * @property integer $ID
 * @property string $SHORT_NAME
 * @property string $ROLE_NAME
 * @property string $DESCRIPTION
 * @property string $CREATOR_ID
 * @property string $CREATED_ON
 * @property string $MODIFIER_ID
 * @property string $MODIFIED_ON
 *
 * The followings are the available model relations:
 * @property MDROLEMENU[] $mDROLEMENUs
 */
class Md_Role_Definition extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Md_Role_Definition the static model class
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
		return 'MD_ROLE_DEFINITION';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SHORT_NAME', 'length', 'max'=>50),
			array('ROLE_NAME, DESCRIPTION', 'length', 'max'=>254),
			array('CREATOR_ID, MODIFIER_ID', 'length', 'max'=>30),
			array('CREATED_ON, MODIFIED_ON', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, SHORT_NAME, ROLE_NAME, DESCRIPTION, CREATOR_ID, CREATED_ON, MODIFIER_ID, MODIFIED_ON', 'safe', 'on'=>'search'),
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
			'mDROLEMENUs' => array(self::HAS_MANY, 'MDROLEMENU', 'MRD_ID'),
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
			'ROLE_NAME' => 'Role Name',
			'DESCRIPTION' => 'Description',
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
		$criteria->compare('SHORT_NAME',$this->SHORT_NAME,true);
		$criteria->compare('ROLE_NAME',$this->ROLE_NAME,true);
		$criteria->compare('DESCRIPTION',$this->DESCRIPTION,true);
		$criteria->compare('CREATOR_ID',$this->CREATOR_ID,true);
		$criteria->compare('CREATED_ON',$this->CREATED_ON,true);
		$criteria->compare('MODIFIER_ID',$this->MODIFIER_ID,true);
		$criteria->compare('MODIFIED_ON',$this->MODIFIED_ON,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}