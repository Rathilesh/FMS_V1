<?php
include_once 'dynamic_db_connection.php';
//echo "<h1>".Yii::app()->session['dbsname']."</h1>"; exit;

/**
 * This is the model class for table "MD_MENU_OBJECT".
 *
 * The followings are the available columns in table 'MD_MENU_OBJECT':
 * @property integer $ID
 * @property string $OBJECT_ID
 * @property string $OBJECT_TYPE
 * @property string $DESCRIPTION
 * @property string $MENU_PROMPT
 * @property string $WEF
 * @property string $WET
 * @property string $CREATOR_ID
 * @property string $CREATED_ON
 * @property string $MODIFIER_ID
 * @property string $MODIFIED_ON
 * @property string $DISPLAY_TITLE
 */
class Md_Menu_Object extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MDMENUOBJECT the static model class
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
		return 'MD_MENU_OBJECT';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('OBJECT_ID', 'length', 'max'=>50),
			array('OBJECT_TYPE', 'length', 'max'=>20),
			array('DESCRIPTION', 'length', 'max'=>254),
			array('MENU_PROMPT, DISPLAY_TITLE', 'length', 'max'=>150),
			array('CREATOR_ID, MODIFIER_ID', 'length', 'max'=>30),
			array('WEF, WET, CREATED_ON, MODIFIED_ON', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, OBJECT_ID, OBJECT_TYPE, DESCRIPTION, MENU_PROMPT, WEF, WET, CREATOR_ID, CREATED_ON, MODIFIER_ID, MODIFIED_ON, DISPLAY_TITLE', 'safe', 'on'=>'search'),
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
            'mDOBJECTPARAMs' => array(self::HAS_MANY, 'MDOBJECTPARAM', 'MMO_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'OBJECT_ID' => "Object",
			'OBJECT_TYPE' => "Object Type",
			'DESCRIPTION' => "Description ",
			'MENU_PROMPT' => "Menu Prompt ",
			'WEF' => "With Effect From ",
			'WET' => 'With Effect To ',
			'CREATOR_ID' => 'Creator',
			'CREATED_ON' => 'Created On',
			'MODIFIER_ID' => 'Modifier',
			'MODIFIED_ON' => 'Modified On',
			'DISPLAY_TITLE' => "Display Title",
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
        $sort = new CSort();
        $sort->defaultOrder = 'ID DESC'; // for initial order
//        $sort->attributes = array(
//            'created'
//            );
		$criteria=new CDbCriteria;

		$criteria->compare('ID',$this->ID);
		$criteria->compare('UPPER(OBJECT_ID)',  strtoupper($this->OBJECT_ID),true);
		$criteria->compare('UPPER(OBJECT_TYPE)',strtoupper($this->OBJECT_TYPE),true);
		$criteria->compare('UPPER(DESCRIPTION)',strtoupper($this->DESCRIPTION),true);
		$criteria->compare('MENU_PROMPT',$this->MENU_PROMPT,true);
		$criteria->compare('WEF',$this->WEF,true);
		$criteria->compare('WET',$this->WET,true);
		$criteria->compare('CREATOR_ID',$this->CREATOR_ID,true);
		$criteria->compare('CREATED_ON',$this->CREATED_ON,true);
		$criteria->compare('MODIFIER_ID',$this->MODIFIER_ID,true);
		$criteria->compare('MODIFIED_ON',$this->MODIFIED_ON,true);
		$criteria->compare('UPPER(DISPLAY_TITLE)',strtoupper($this->DISPLAY_TITLE),true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
            'sort'=>$sort,
		));
	}
}