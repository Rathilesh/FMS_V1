<?php
include_once 'dynamic_db_connection.php';
/**
 * Created  By  : ® ℛaThIlEsH ®  
 * Created  On  : 23-Aug-2013
 * Modified By  :
 * Modified On  :
 * Purpose      : Menu Defifnition 
 */
/**
 * This is the model class for table "MD_MENU_DEFINITION".
 *
 * The followings are the available columns in table 'MD_MENU_DEFINITION':
 * @property integer $ID
 * @property string $SHORT_NAME
 * @property string $MENU_PROMPT
 * @property string $DESCRIPTION
 * @property integer $MMO_ID
 * @property integer $SUBMENU_MMD_ID
 * @property integer $MMD_ID
 * @property string $CREATOR_ID
 * @property string $CREATED_ON
 * @property string $MODIFIER_ID
 * @property string $MODIFIED_ON
 * @property integer $DISPLAY_ORDER
 */
class Md_Menu_Definition extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Md_Menu_Definition the static model class
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
		return 'MD_MENU_DEFINITION';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('MMO_ID, SUBMENU_MMD_ID, MMD_ID, DISPLAY_ORDER', 'numerical', 'integerOnly'=>true),
			array('SHORT_NAME', 'length', 'max'=>50),
			array('MENU_PROMPT', 'length', 'max'=>150),
			array('DESCRIPTION', 'length', 'max'=>254),
			array('CREATOR_ID, MODIFIER_ID', 'length', 'max'=>30),
			array('CREATED_ON, MODIFIED_ON', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, SHORT_NAME, MENU_PROMPT, DESCRIPTION, MMO_ID, SUBMENU_MMD_ID, MMD_ID, CREATOR_ID, CREATED_ON, MODIFIER_ID, MODIFIED_ON, DISPLAY_ORDER', 'safe', 'on'=>'search'),
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
			'SHORT_NAME' => 'Short Name',
			'MENU_PROMPT' => 'Menu Prompt',
			'DESCRIPTION' => 'Description',
			'MMO_ID' => 'Menu Item',
			'SUBMENU_MMD_ID' => 'Submenu Mmd',
			'MMD_ID' => 'Menu Prompt',
			'CREATOR_ID' => 'Creator',
			'CREATED_ON' => 'Created On',
			'MODIFIER_ID' => 'Modifier',
			'MODIFIED_ON' => 'Modified On',
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
        $sort = new CSort();
        $sort->defaultOrder = 'ID DESC'; // for initial order
        
		$criteria=new CDbCriteria;

		$criteria->compare('ID',$this->ID);
		$criteria->compare('SHORT_NAME',$this->SHORT_NAME,true);
		$criteria->compare('MENU_PROMPT',$this->MENU_PROMPT,true);
		$criteria->compare('DESCRIPTION',$this->DESCRIPTION,true);
		$criteria->compare('MMO_ID',$this->MMO_ID);
		$criteria->compare('SUBMENU_MMD_ID',$this->SUBMENU_MMD_ID);
		$criteria->compare('MMD_ID',$this->MMD_ID);
		$criteria->compare('CREATOR_ID',$this->CREATOR_ID,true);
		$criteria->compare('CREATED_ON',$this->CREATED_ON,true);
		$criteria->compare('MODIFIER_ID',$this->MODIFIER_ID,true);
		$criteria->compare('MODIFIED_ON',$this->MODIFIED_ON,true);
		$criteria->compare('DISPLAY_ORDER',$this->DISPLAY_ORDER);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
            'sort'=>$sort,
		));
        
	}
}