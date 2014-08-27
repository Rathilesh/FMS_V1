<?php

/**
 * This is the model class for table "HOLIDAY_CALENDAR".
 *
 * The followings are the available columns in table 'HOLIDAY_CALENDAR':
 * @property integer $ID
 * @property string $CALENDAR_NAME
 * @property integer $ENTITY_ID
 *
 * The followings are the available model relations:
 * @property ENTITY $eNTITY
 * @property ENTITYCALENDER[] $eNTITYCALENDERs
 * @property HOLIDAY[] $hOLIDAYs
 */
class Holiday_Calendar extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Holiday_Calendar the static model class
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
		return 'HOLIDAY_CALENDAR';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			
			array('ENTITY_ID', 'numerical', 'integerOnly'=>true),
			array('CALENDAR_NAME', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, CALENDAR_NAME, ENTITY_ID', 'safe', 'on'=>'search'),
                    
      
    
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
			'eNTITY_relation' => array(self::BELONGS_TO, 'ENTITY', 'ENTITY_ID'),
			'eNTITYCALENDERs' => array(self::HAS_MANY, 'ENTITYCALENDER', 'CALD_ID'),
			'hOLIDAYs' => array(self::HAS_MANY, 'HOLIDAY', 'CALD_ID'),
		);
	}
        
        
            public function beforeDelete()
          {
               foreach($this->hOLIDAYs as $c)
                   $c->delete();
               return parent::beforeDelete();
           }
           
        
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'CALENDAR_NAME' => 'Calendar Name',
			'ENTITY_ID' => 'Organisation',
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
                $entity_id=Yii::app()->session['P_Eu_Orgn_Code'];
		$criteria=new CDbCriteria;

		$criteria->compare('ID',$this->ID);
		$criteria->compare('CALENDAR_NAME',$this->CALENDAR_NAME,true);
		$criteria->compare('ENTITY_ID',$this->ENTITY_ID);
                $criteria->addInCondition('ENTITY_ID', array(null),'AND');
                $criteria->addInCondition('ENTITY_ID', array($entity_id),'OR');
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                    'pagination'=>array(
                             'pageSize'=>'10',
                        ),    
		));
	}
}