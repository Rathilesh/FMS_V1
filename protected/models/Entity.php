<?php

/**
 * This is the model class for table "ENTITY".
 *
 * The followings are the available columns in table 'ENTITY':
 * @property integer $ID
 * @property string $SHORT_NAME
 * @property string $NAME
 * @property string $VISION
 * @property string $MISSION
 * @property string $V01
 * @property string $V02
 * @property string $V03
 * @property string $V04
 * @property string $V05
 * @property double $N01
 * @property double $N02
 * @property double $N03
 * @property double $N04
 * @property string $D01
 * @property string $D02
 * @property string $D03
 * @property double $D04
 * @property string $REGISTRED_ON
 * @property string $DEACTIVATED_ON
 * @property integer $ENTITY_ID
 *
 * The followings are the available model relations:
 * @property ENTITYPOLICY[] $eNTITYPOLICies
 * @property HOLIDAYCALENDAR[] $hOLIDAYCALENDARs
 * @property ENTITYCURRENCY[] $eNTITYCURRENCies
 * @property PARTY[] $pARTies
 * @property EHORIZONUSER[] $eHORIZONUSERs
 * @property OPERATIONTYPE[] $oPERATIONTYPEs
 * @property Entity $eNTITY
 * @property Entity[] $eNTITies
 * @property GRADE[] $gRADEs
 * @property ENTITYCONTACT[] $eNTITYCONTACTs
 * @property ENTITYRELATION[] $eNTITYRELATIONs
 * @property BASICDEFINITION[] $bASICDEFINITIONs
 * @property ORGANISATIONSTRUCTURE[] $oRGANISATIONSTRUCTUREs
 * @property ENTITYGROUP[] $eNTITYGROUPs
 * @property ENTITYFLEX[] $eNTITYFLEXes
 * @property YEARNPERIOD[] $yEARNPERIODs
 * @property ENTITYTYPE[] $eNTITYTYPEs
 * @property CURRENCYRATE[] $cURRENCYRATEs
 */
class Entity extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Entity the static model class
	 */
	public $ENTITYID,$CODE,$ENTITYNAME,$RELATIONID,$ENTITYTYPEID,$ENTITYTYPE,$OSID,$PARENTNAME,$PARENTID,$WEF,$WET;
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ENTITY';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SHORT_NAME, NAME, REGISTRED_ON, DEACTIVATED_ON', 'required'),
			array('ENTITY_ID', 'numerical', 'integerOnly'=>true),
			array('N01, N02, N03, N04, D04', 'numerical'),
			array('SHORT_NAME', 'length', 'max'=>30),
			array('NAME', 'length', 'max'=>100),
			array('VISION, MISSION', 'length', 'max'=>2048),
			array('V01, V02, V03, V04, V05', 'length', 'max'=>256),
			array('D01, D02, D03', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, SHORT_NAME, NAME, VISION, MISSION, V01, V02, V03, V04, V05, N01, N02, N03, N04, D01, D02, D03, D04, REGISTRED_ON, DEACTIVATED_ON, ENTITY_ID', 'safe', 'on'=>'search'),
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
			'eNTITYPOLICies' => array(self::HAS_MANY, 'ENTITYPOLICY', 'ENTITY_ID'),
			'hOLIDAYCALENDARs' => array(self::HAS_MANY, 'HOLIDAYCALENDAR', 'ENTITY_ID'),
			'eNTITYCURRENCies' => array(self::HAS_MANY, 'ENTITYCURRENCY', 'ENTITY_ID'),
			'pARTies' => array(self::HAS_MANY, 'PARTY', 'ENTITY_ID'),
			'eHORIZONUSERs' => array(self::HAS_MANY, 'EHORIZONUSER', 'ENTITY_ID'),
			'oPERATIONTYPEs' => array(self::HAS_MANY, 'OPERATIONTYPE', 'ENTITY_ID'),
			'eNTITY' => array(self::BELONGS_TO, 'Entity', 'ENTITY_ID'),
			'eNTITies' => array(self::HAS_MANY, 'Entity', 'ENTITY_ID'),
			'gRADEs' => array(self::HAS_MANY, 'GRADE', 'ENTITY_ID'),
			'eNTITYCONTACTs' => array(self::HAS_MANY, 'ENTITYCONTACT', 'ENTITY_ID'),
			'eNTITYRELATIONs' => array(self::HAS_MANY, 'ENTITYRELATION', 'ENTITY_ID'),
			'bASICDEFINITIONs' => array(self::HAS_MANY, 'BASICDEFINITION', 'ENTITY_ID'),
			'oRGANISATIONSTRUCTUREs' => array(self::HAS_MANY, 'ORGANISATIONSTRUCTURE', 'ENTITY_ID'),
			'eNTITYGROUPs' => array(self::HAS_MANY, 'ENTITYGROUP', 'ENTITY_ID'),
			'eNTITYFLEXes' => array(self::HAS_MANY, 'ENTITYFLEX', 'ENTITY_ID'),
			'yEARNPERIODs' => array(self::HAS_MANY, 'YEARNPERIOD', 'ENTITY_ID'),
			'eNTITYTYPEs' => array(self::HAS_MANY, 'ENTITYTYPE', 'ENTITY_ID'),
			'cURRENCYRATEs' => array(self::HAS_MANY, 'CURRENCYRATE', 'ENTITY_ID'),
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
			'NAME' => 'Name',
			'VISION' => 'Vision',
			'MISSION' => 'Mission',
			'V01' => 'V01',
			'V02' => 'V02',
			'V03' => 'V03',
			'V04' => 'V04',
			'V05' => 'V05',
			'N01' => 'N01',
			'N02' => 'N02',
			'N03' => 'N03',
			'N04' => 'N04',
			'D01' => 'D01',
			'D02' => 'D02',
			'D03' => 'D03',
			'D04' => 'D04',
			'REGISTRED_ON' => 'Registred On',
			'DEACTIVATED_ON' => 'Deactivated On',
			'ENTITY_ID' => 'Entity',
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
		$criteria->compare('NAME',$this->NAME,true);
		$criteria->compare('VISION',$this->VISION,true);
		$criteria->compare('MISSION',$this->MISSION,true);
		$criteria->compare('V01',$this->V01,true);
		$criteria->compare('V02',$this->V02,true);
		$criteria->compare('V03',$this->V03,true);
		$criteria->compare('V04',$this->V04,true);
		$criteria->compare('V05',$this->V05,true);
		$criteria->compare('N01',$this->N01);
		$criteria->compare('N02',$this->N02);
		$criteria->compare('N03',$this->N03);
		$criteria->compare('N04',$this->N04);
		$criteria->compare('D01',$this->D01,true);
		$criteria->compare('D02',$this->D02,true);
		$criteria->compare('D03',$this->D03,true);
		$criteria->compare('D04',$this->D04);
		//$criteria->compare('REGISTRED_ON',$this->REGISTRED_ON,true);
		$criteria->compare('DEACTIVATED_ON',$this->DEACTIVATED_ON,true);
		$criteria->compare('ENTITY_ID',$this->ENTITY_ID);
		$criteria->addCondition('ENTITY_ID IS NULL');

		// return new CActiveDataProvider($this, array(
		// 	'criteria'=>$criteria,
		// ));

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'sort'=>array('defaultOrder'=>'UPPER(SHORT_NAME)'),
                        'pagination' => array('pageSize' => 13,)
              ));
	}
}