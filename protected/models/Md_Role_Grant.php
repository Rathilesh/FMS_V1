<?php

/**
 * This is the model class for table "MD_ROLE_GRANT".
 *
 * The followings are the available columns in table 'MD_ROLE_GRANT':
 * @property integer $ID
 * @property integer $MRD_ID
 * @property integer $MMD_ID
 * @property integer $MMO_ID
 * @property string $MENU_PROMPT
 * @property string $IS_CREATE
 * @property string $IS_EDIT
 * @property string $IS_REMOVE
 * @property string $CREATOR_ID
 * @property string $CREATED_ON
 * @property string $MODIFIER_ID
 * @property string $MODIFIED_ON
 *
 * The followings are the available model relations:
 * @property MDMENUDEFINITION $mMD
 * @property MDMENUOBJECT $mMO
 * @property MDROLEDEFINITION $mRD
 */
class Md_Role_Grant extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Md_Role_Grant the static model class
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
		return 'MD_ROLE_GRANT';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('MRD_ID, MMD_ID, MMO_ID', 'numerical', 'integerOnly'=>true),
			array('MENU_PROMPT', 'length', 'max'=>150),
			array('IS_CREATE, IS_EDIT, IS_REMOVE', 'length', 'max'=>1),
			array('CREATOR_ID, MODIFIER_ID', 'length', 'max'=>30),
			array('CREATED_ON, MODIFIED_ON', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, MRD_ID, MMD_ID, MMO_ID, MENU_PROMPT, IS_CREATE, IS_EDIT, IS_REMOVE, CREATOR_ID, CREATED_ON, MODIFIER_ID, MODIFIED_ON', 'safe', 'on'=>'search'),
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
			'mMD' => array(self::BELONGS_TO, 'MDMENUDEFINITION', 'MMD_ID'),
			'mMO' => array(self::BELONGS_TO, 'MDMENUOBJECT', 'MMO_ID'),
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
			'MMD_ID' => 'Mmd',
			'MMO_ID' => 'Mmo',
			'MENU_PROMPT' => 'Menu Prompt',
			'IS_CREATE' => 'Is Create',
			'IS_EDIT' => 'Is Edit',
			'IS_REMOVE' => 'Is Remove',
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
		$criteria->compare('MMD_ID',$this->MMD_ID);
		$criteria->compare('MMO_ID',$this->MMO_ID);
		$criteria->compare('MENU_PROMPT',$this->MENU_PROMPT,true);
		$criteria->compare('IS_CREATE',$this->IS_CREATE,true);
		$criteria->compare('IS_EDIT',$this->IS_EDIT,true);
		$criteria->compare('IS_REMOVE',$this->IS_REMOVE,true);
		$criteria->compare('CREATOR_ID',$this->CREATOR_ID,true);
		$criteria->compare('CREATED_ON',$this->CREATED_ON,true);
		$criteria->compare('MODIFIER_ID',$this->MODIFIER_ID,true);
		$criteria->compare('MODIFIED_ON',$this->MODIFIED_ON,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}