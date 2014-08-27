<?php

/**
 * This is the model class for table "HOLIDAY".
 *
 * The followings are the available columns in table 'HOLIDAY':
 * @property integer $ID
 * @property string $HOLIDAY_DATE
 * @property string $DESCRIPTION
 * @property string $IS_COMPULSORY
 * @property string $IS_RESTRICTED
 * @property string $DECLARATION_REFERENCE
 * @property string $DATE_OF_DECLARATION
 * @property integer $CALD_ID
 *
 * The followings are the available model relations:
 * @property HOLIDAYCALENDAR $cALD
 */
class Holiday extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Holiday the static model class
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
		return 'HOLIDAY';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('HOLIDAY_DATE, DESCRIPTION, IS_COMPULSORY, IS_RESTRICTED, CALD_ID', 'required'),
			array('CALD_ID', 'numerical', 'integerOnly'=>true),
			array('DESCRIPTION, DECLARATION_REFERENCE', 'length', 'max'=>50),
			array('IS_COMPULSORY, IS_RESTRICTED', 'length', 'max'=>1),
			array('DATE_OF_DECLARATION', 'safe'),
                       
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, HOLIDAY_DATE, DESCRIPTION, IS_COMPULSORY, IS_RESTRICTED, DECLARATION_REFERENCE, DATE_OF_DECLARATION, CALD_ID', 'safe', 'on'=>'search,searchIncludingPermissions'),
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
			'cALD' => array(self::BELONGS_TO, 'HOLIDAY_CALENDAR', 'CALD_ID'),
		);
	}

       
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'HOLIDAY_DATE' => 'Holiday Date',
			'DESCRIPTION' => 'Description',
			'IS_COMPULSORY' => 'Is Compulsory',
			'IS_RESTRICTED' => 'Is Restricted',
			'DECLARATION_REFERENCE' => 'Declaration Reference',
			'DATE_OF_DECLARATION' => 'Date Of Declaration',
			'CALD_ID' => 'Cald',
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
		$criteria->compare('HOLIDAY_DATE',$this->HOLIDAY_DATE,true);
		$criteria->compare('DESCRIPTION',$this->DESCRIPTION,true);
		$criteria->compare('IS_COMPULSORY',$this->IS_COMPULSORY,true);
		$criteria->compare('IS_RESTRICTED',$this->IS_RESTRICTED,true);
		$criteria->compare('DECLARATION_REFERENCE',$this->DECLARATION_REFERENCE,true);
		$criteria->compare('DATE_OF_DECLARATION',$this->DATE_OF_DECLARATION,true);
		$criteria->compare('CALD_ID',$this->CALD_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function searchIncludingPermissions($parentID)
    {
        /* This function creates a dataprovider with RolePermission
        models, based on the parameters received in the filtering-model.
        It also includes related Permission models, obtained via the
        relPermission relation. */
        $criteria=new CDbCriteria;
        $criteria->with=array('cALD');
        //$criteria->together = true;
        $column='cALD.ID';
                $column_split_array = explode('.', $column);

            if(count($column_split_array) > 1)
            {

                    foreach ($column_split_array as $key => $column_split) {
                            $column_split_array[$key] = '"'.$column_split.'"';
                     } 
                    $column =  implode('.', $column_split_array);
            }
     
        $criteria->compare($column,$parentID,false); 
       
       // $criteria->compare('t.permission_id',$this->permission_id,true);
// $sort = new CSort;
//        $sort->attributes = array(
//            'permission_desc_param' => array(
//            'asc' => 'permission_desc',
//            'desc' => 'permission_desc DESC',
//            ), '*', /* Treat all other columns normally */
//        );
//        
        /* End: Sort on related Model's columns */
 
        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
            'pagination'=>array(
                             'pageSize'=>'5',
                        ),    
//            'sort'=>$sort, /* Needed for sort */
        ));
    }
}