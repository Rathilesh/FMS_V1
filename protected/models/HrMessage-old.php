<?php
include_once 'dynamic_db_connection.php';
/**
 * This is the model class for table "HRMESSAGE".
 *
 * The followings are the available columns in table 'HRMESSAGE':
 * @property integer $ID
 * @property string $TEXT
 * @property integer $USAGE_COUNT
 */
class HrMessage extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return HrMessage the static model class
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
		return 'HRMESSAGE';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('USAGE_COUNT', 'numerical', 'integerOnly'=>true),
			array('TEXT', 'length', 'max'=>2000),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, TEXT, USAGE_COUNT', 'safe', 'on'=>'search'),
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
			'TEXT' => 'Text',
			'USAGE_COUNT' => 'Usage Count',
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
		$criteria->compare('UPPER(TEXT)',strtoupper($this->TEXT),true);
		$criteria->compare('USAGE_COUNT',$this->USAGE_COUNT);

//		return new CActiveDataProvider($this, array(
//			'criteria'=>$criteria,
//		));
                return new CActiveDataProvider($this, 
                                               array( 'criteria'=>$criteria,
                                                      'pagination'=>array ( 
                                                                            'pageSize'=>15,
                                                                          ),
                                                        'sort'=>array(
                                                                    'defaultOrder'=>'ID DESC',
                                                                     )
                                                   
		                                     )
                                               );
	}
}