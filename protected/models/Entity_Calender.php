<?php

/**
 * This is the model class for table "ENTITY_CALENDER".
 *
 * The followings are the available columns in table 'ENTITY_CALENDER':
 * @property integer $ID
 * @property string $WEF
 * @property string $WET
 * @property integer $CALD_ID
 * @property integer $GRP_ID
 * @property integer $SERVICE_ID
 * @property integer $OSTRU_ID
 *
 * The followings are the available model relations:
 * @property HOLIDAYCALENDAR $cALD
 * @property ENTITYGROUP $gRP
 * @property ORGANISATIONSTRUCTURE $oSTRU
 * @property PERSONNELSERVICEINITIATION $sERVICE
 */
class Entity_Calender extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Entity_Calender the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        public $CALENDARNAME;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ENTITY_CALENDER';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CALD_ID', 'required'),
			array('CALD_ID, GRP_ID, SERVICE_ID, OSTRU_ID', 'numerical', 'integerOnly'=>true),
			array('WET', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, WEF, WET, CALD_ID, GRP_ID, SERVICE_ID, OSTRU_ID', 'safe', 'on'=>'search'),
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
			'cALD' => array(self::BELONGS_TO, 'HOLIDAYCALENDAR', 'CALD_ID'),
			'gRP' => array(self::BELONGS_TO, 'ENTITYGROUP', 'GRP_ID'),
			'oSTRU' => array(self::BELONGS_TO, 'ORGANISATIONSTRUCTURE', 'OSTRU_ID'),
			'sERVICE' => array(self::BELONGS_TO, 'PERSONNELSERVICEINITIATION', 'SERVICE_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'WEF' => 'Wef',
			'WET' => 'Wet',
			'CALD_ID' => 'Cald',
			'GRP_ID' => 'Grp',
			'SERVICE_ID' => 'Service',
			'OSTRU_ID' => 'Ostru',
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
		$criteria->compare('WEF',$this->WEF,true);
		$criteria->compare('WET',$this->WET,true);
		$criteria->compare('CALD_ID',$this->CALD_ID);
		$criteria->compare('GRP_ID',$this->GRP_ID);
		$criteria->compare('SERVICE_ID',$this->SERVICE_ID);
		$criteria->compare('OSTRU_ID',$this->OSTRU_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}