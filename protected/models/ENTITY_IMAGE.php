<?php

/**
 * This is the model class for table "ENTITY_IMAGE".
 *
 * The followings are the available columns in table 'ENTITY_IMAGE':
 * @property integer $ID
 * @property string $IMAGE_TYPE
 * @property string $IMAGE
 * @property integer $PRQ_ID
 * @property integer $PARTY_ID
 * @property string $SCANNED_ON
 *
 * The followings are the available model relations:
 * @property PARTY $pARTY
 * @property PERSONNELQUALIFICATION $pRQ
 */
class ENTITY_IMAGE extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PARTY_IMAGE the static model class
	 */
    public $uploadedFile;
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

 
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ENTITY_IMAGE';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('WEF', 'required'),
			array('PRQ_ID, PARTY_ID', 'numerical', 'integerOnly'=>true),
			array('IMAGE_TYPE', 'length', 'max'=>30),
			//array('IMAGE', 'length', 'max'=>4000),
			array('WEF,WET', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, IMAGE_TYPE, IMAGE, PRQ_ID, PARTY_ID,  WEF, WET', 'safe', 'on'=>'search'),
                   array('IMAGE', 'file', 
        'types'=>'jpg, gif, png, bmp, jpeg',
            'maxSize'=>1024 * 1024 * 10, // 10MB
                'tooLarge'=>'The file was larger than 10MB. Please upload a smaller file.',
            'allowEmpty' => true
         ),
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
			'pARTY' => array(self::BELONGS_TO, 'PARTY', 'PARTY_ID'),
			'pRQ' => array(self::BELONGS_TO, 'PERSONNELQUALIFICATION', 'PRQ_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'IMAGE_TYPE' => 'Image Type',
			'IMAGE' => 'Image',
			'PRQ_ID' => 'Prq',
			'PARTY_ID' => 'Party',
			'WEF' => 'WEF',
			'WET' => 'WET',
			// 'SCANNED_ON' => 'Scanned On',
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
		$criteria->compare('IMAGE_TYPE',$this->IMAGE_TYPE,true);
		$criteria->compare('IMAGE',$this->IMAGE,true);
		$criteria->compare('PRQ_ID',$this->PRQ_ID);
		$criteria->compare('PARTY_ID',$this->PARTY_ID);
		//$criteria->compare('SCANNED_ON',$this->SCANNED_ON,true);
                $criteria->compare('WEF',$this->WEF,true);
                $criteria->compare('WET',$this->WET,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}