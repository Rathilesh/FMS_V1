<?php
include_once 'dynamic_db_connection.php';
/**
 * This is the model class for table "MD_ROLE_MENU".
 *
 * The followings are the available columns in table 'MD_ROLE_MENU':
 * @property integer $ID
 * @property integer $MRD_ID
 * @property integer $MMD_ID
 * @property string $DISPLAY_GROUP_NAME
 * @property integer $DISPLAY_ORDER
 *
 * The followings are the available model relations:
 * @property MDMENUDEFINITION $mMD
 * @property MDROLEDEFINITION $mRD
 */
class Md_Role_Menu extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Md_Role_Menu the static model class
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
		return 'MD_ROLE_MENU';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('MRD_ID, MMD_ID, DISPLAY_ORDER', 'numerical', 'integerOnly'=>true),
			array('DISPLAY_GROUP_NAME', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, MRD_ID, MMD_ID, DISPLAY_GROUP_NAME, DISPLAY_ORDER', 'safe', 'on'=>'search'),
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
			'DISPLAY_GROUP_NAME' => 'Display Group Name',
			'DISPLAY_ORDER' => 'Display Order',
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
		$criteria->compare('DISPLAY_GROUP_NAME',$this->DISPLAY_GROUP_NAME,true);
		$criteria->compare('DISPLAY_ORDER',$this->DISPLAY_ORDER);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}