<?php

/**
 * This is the model class for table "QUALIFICATION_EXPERIENCE".
 *
 * The followings are the available columns in table 'QUALIFICATION_EXPERIENCE':
 * @property integer $ID
 * @property string $RECORD_TYPE
 * @property string $SHORT_NAME
 * @property string $DESCRIPTION
 * @property string $IS_PROFESSIONAL
 * @property string $IS_ACADEMIC
 * @property integer $EFLO_ID
 * @property integer $EDU_ID
 *
 * The followings are the available model relations:
 * @property PERSONNELQUALIFICATION[] $pERSONNELQUALIFICATIONs
 * @property EDUCATION $eDU
 * @property EDUCATIONFOLIO $eFLO
 * @property COURSECONTENT[] $cOURSECONTENTs
 * @property COURSEINSTRUCTOR[] $cOURSEINSTRUCTORs
 */
class QUALIFICATION_EXPERIENCE extends CActiveRecord
{
     public $Folio;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return QUALIFICATION_EXPERIENCE the static model class
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
		return 'QUALIFICATION_EXPERIENCE';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SHORT_NAME, DESCRIPTION', 'required'),
			array('EFLO_ID, EDU_ID', 'numerical', 'integerOnly'=>true),
			array('RECORD_TYPE, SHORT_NAME', 'length', 'max'=>30),
			array('DESCRIPTION', 'length', 'max'=>100),
			array('IS_PROFESSIONAL, IS_ACADEMIC', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, RECORD_TYPE, SHORT_NAME, DESCRIPTION, IS_PROFESSIONAL, IS_ACADEMIC, EFLO_ID, EDU_ID,Folio', 'safe', 'on'=>'search'),
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
			'pERSONNELQUALIFICATIONs' => array(self::HAS_MANY, 'PERSONNELQUALIFICATION', 'EQAL_ID'),
			'eDU' => array(self::BELONGS_TO, 'EDUCATION', 'EDU_ID'),
			'edFOLIO' => array(self::BELONGS_TO, 'EDUCATIONFOLIO', 'EFLO_ID'),
			'cOURSECONTENTs' => array(self::HAS_MANY, 'COURSECONTENT', 'EQAL_ID'),
			'cOURSEINSTRUCTORs' => array(self::HAS_MANY, 'COURSEINSTRUCTOR', 'EQAL_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'RECORD_TYPE' => 'Record Type',
			'SHORT_NAME' => 'Short Name',
			'DESCRIPTION' => 'Description',
			'IS_PROFESSIONAL' => 'Is Professional',
			'IS_ACADEMIC' => 'Is Academic',
			'EFLO_ID' => 'Eflo',
			'EDU_ID' => 'Edu',
                        'Folio'=>'Stream',
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
//               
                 if($this->Folio)
//                     
                $criteria->with = array('edFOLIO');
                $column='edFOLIO.FOLIO';
                $column_split_array = explode('.', $column);
//
            if(count($column_split_array) > 1)
            {

                    foreach ($column_split_array as $key => $column_split) {
                            $column_split_array[$key] = '"'.$column_split.'"';
                     } 
                    $column =  implode('.', $column_split_array);
            }
//////            
////                
                 $str=trim($this->Folio);
////                
//                
                 $criteria->compare($column, $str,true);
                
//                 $criteria->compare('edFOLIO.FOLIO',$this->edFOLIO->FOLIO,true);
//                 $criteria->with = array('edFOLIO');
//                 $criteria->together = true;
//                
                
                
		$criteria->compare('ID',$this->ID);
		$criteria->compare('UPPER(RECORD_TYPE)',strtoupper($this->RECORD_TYPE),true);
		$criteria->compare('UPPER(SHORT_NAME)',strtoupper($this->SHORT_NAME),true);
		$criteria->compare('UPPER(DESCRIPTION)',strtoupper($this->DESCRIPTION),true);
		$criteria->compare('IS_PROFESSIONAL',$this->IS_PROFESSIONAL,true);
		$criteria->compare('IS_ACADEMIC',$this->IS_ACADEMIC,true);
		$criteria->compare('EFLO_ID',$this->EFLO_ID);
		$criteria->compare('EDU_ID',$this->EDU_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                      //  'sort'=>array('defaultOrder'=>'SHORT_NAME'),
                        'pagination' => array('pageSize' => 13,)
		));
	}
}