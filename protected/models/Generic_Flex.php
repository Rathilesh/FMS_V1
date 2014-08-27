<?php

/**
 * This is the model class for table "GENERIC_FLEX".
 *
 * The followings are the available columns in table 'GENERIC_FLEX':
 * @property integer $ID
 * @property string $TABLE_ID
 * @property integer $FILED_SEQUENCE
 * @property string $FILED_TITLE
 * @property string $DATA_TYPE
 * @property double $MAX_LENGTH
 * @property string $CANVAS
 * @property double $XCORDINATE
 * @property double $YCORDINATE
 * @property string $IS_REQUIRED
 *
 * The followings are the available model relations:
 * @property GENERICFLEXVALUE[] $gENERICFLEXVALUEs
 */
class Generic_Flex extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Generic_Flex the static model class
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
		return 'GENERIC_FLEX';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('TABLE_ID, FIELD_SEQUENCE, FIELD_TITLE, DATA_TYPE, MAX_LENGTH, IS_REQUIRED', 'required'),
			array('FILED_SEQUENCE', 'numerical', 'integerOnly'=>true),
			array('MAX_LENGTH, XCORDINATE, YCORDINATE', 'numerical'),
			array('TABLE_ID', 'length', 'max'=>50),
			array('FILED_TITLE', 'length', 'max'=>512),
			array('DATA_TYPE, IS_REQUIRED', 'length', 'max'=>1),
			array('CANVAS', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, TABLE_ID, FIELD_SEQUENCE, FIELD_TITLE, DATA_TYPE, MAX_LENGTH, CANVAS, XCORDINATE, YCORDINATE, IS_REQUIRED', 'safe', 'on'=>'search'),
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
			'gENERICFLEXVALUEs' => array(self::HAS_MANY, 'GENERICFLEXVALUE', 'GFLEX_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'TABLE_ID' => 'Table',
			'FIELD_SEQUENCE' => 'Sequence',
			'FIELD_TITLE' => 'Title',
			'DATA_TYPE' => 'Data Type',
			'MAX_LENGTH' => 'Max Length',
			'CANVAS' => 'Canvas',
			'XCORDINATE' => 'Xcordinate',
			'YCORDINATE' => 'Ycordinate',
			'IS_REQUIRED' => 'Required',
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
		$criteria->compare('TABLE_ID',$this->TABLE_ID,true);
		$criteria->compare('FIELD_SEQUENCE',$this->FIELD_SEQUENCE);
		$criteria->compare('FIELD_TITLE',$this->FIELD_TITLE,true);
		$criteria->compare('DATA_TYPE',$this->DATA_TYPE,true);
		$criteria->compare('MAX_LENGTH',$this->MAX_LENGTH);
		$criteria->compare('CANVAS',$this->CANVAS,true);
		$criteria->compare('XCORDINATE',$this->XCORDINATE);
		$criteria->compare('YCORDINATE',$this->YCORDINATE);
		$criteria->compare('IS_REQUIRED',$this->IS_REQUIRED,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}