<?php
include_once 'dynamic_db_connection.php';
/**
 * This is the model class for table "NATIONALITIES".
 *
 * The followings are the available columns in table 'NATIONALITIES':
 * @property integer $ID
 * @property string $NATIONALITY_CODE
 * @property string $NATIONALITY_NAME
 */
class Nationalities extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Nationalities the static model class
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
		return 'NATIONALITIES';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NATIONALITY_CODE, NATIONALITY_NAME', 'required'),
			array('NATIONALITY_CODE', 'length', 'max'=>30),
			array('NATIONALITY_NAME', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, NATIONALITY_CODE, NATIONALITY_NAME', 'safe', 'on'=>'search'),
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
			'NATIONALITY_CODE' => 'Nationality Code',
			'NATIONALITY_NAME' => 'Nationality Name',
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
		$criteria->compare('UPPER(NATIONALITY_CODE)',  strtoupper($this->NATIONALITY_CODE),true);
		$criteria->compare('UPPER(NATIONALITY_NAME)',strtoupper($this->NATIONALITY_NAME),true);

//		return new CActiveDataProvider($this, array(
//			'criteria'=>$criteria,
//		));
//                
                return new CActiveDataProvider($this, 
                                               array( 'criteria'=>$criteria,
                                                      'pagination'=>array ( 
                                                                            'pageSize'=>15,
                                                                          ),
                                                        'sort'=>array(
                                                                    'defaultOrder'=>'ID ASC',
                                                                     )
                                                   
		                                     )
                                               );
                
	}
}