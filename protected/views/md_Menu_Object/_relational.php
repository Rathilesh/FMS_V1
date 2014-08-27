<?php 
//echo Yii::app()->bootstrap->init();

class Md_Object_Param extends CActiveRecord
{
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Md_Object_Param the static model class
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
        return 'MD_OBJECT_PARAM';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('PARAM_VALUE, DESCRIPTION', 'length', 'max'=>254),
            array('DATA_TYPE', 'length', 'max'=>2),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('MMO_ID, PARAM_NAME, PARAM_VALUE, DESCRIPTION, DATA_TYPE', 'safe', 'on'=>'search'),
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
            'MMO_ID' => 'Mmo',
            'PARAM_NAME' => 'Param Name',
            'PARAM_VALUE' => 'Param Value',
            'DESCRIPTION' => 'Description',
            'DATA_TYPE' => 'Data Type',
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

        $criteria->compare('MMO_ID',$this->MMO_ID);
        $criteria->compare('PARAM_NAME',$this->PARAM_NAME,true);
        $criteria->compare('PARAM_VALUE',$this->PARAM_VALUE,true);
        $criteria->compare('DESCRIPTION',$this->DESCRIPTION,true);
        $criteria->compare('DATA_TYPE',$this->DATA_TYPE,true);
        $criteria->addCondition('MMO_ID='.$_GET['id']);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }
}
    Yii::app()->clientScript->scriptMap['jquery.js'] = FALSE;
    Yii::app()->clientScript->scriptMap['jquery.min.js'] = FALSE;
?>

    <script type="text/javascript">
        $(function() {
           // $( ".required" ).hide();
            $( "#yw0 table" ).removeClass("grid_insert_table");
            //return false;
                     });
    </script>
    <div style="width: 600px; height: auto; margin-top: 10px;">
<?php
//print_r(search()); exit;
//echo CHtml::tag('h5',array(),'RELATIONAL DATA EXAMPLE ROW : "'.$id.'"');
    $models=new Md_Object_Param();
    $this->widget('bootstrap.widgets.TbExtendedGridView', array(
        'type'=>'striped bordered',
    'dataProvider' =>$models->search(),
    //'template' => "{items}",
        //'filter'=>$model,
    'columns' => array(
    //    'MMO_ID',
    //    array(
    //                    'class'=>'CLinkColumn',
    //                    'label'=>'id_post_author',
    //                    'url'=>'users/view&id='.$model->id_post_author,
    //                    'header'=>'Author'
    //                    ),

        array(
            'name'=>'PARAM_NAME',
            'class' => 'bootstrap.widgets.TbEditableColumn',
            'headerHtmlOptions' => array('style' => 'width:150px'),
            'editable' => array(
                'url' => $this->createUrl('md_menu_object/InlineUpdate'),  //see InlineUpadte Function in Controller
                'type' => 'text',

            )),
        'PARAM_VALUE',
        'DESCRIPTION',
        'DATA_TYPE',
        array(
                    'class'=>'bootstrap.widgets.TbButtonColumn',
                    'headerHtmlOptions' => array('style' => 'width:30px'),
                    'template'=>'{updated}',
                            'buttons'=>array(
                                'updated'=>array(
                                    'label'=>'test',
                                    'url'=>'Yii::app()->createUrl("md_Menu_Object/doStuff", array("ID"=>$data->ID))',
                                    'options'=>array(
                                        'id'=>'\'button_for_id_\'.$data->ID',
                        ),
                    ),
                ),
                   ),

    //    array(
    //                'class'=>'bootstrap.widgets.TbButtonColumn',
    //                'headerHtmlOptions' => array('style' => 'width:30px'),
    //                'template'=>'{delete}',
    //                 ),
    ),



    ));
?>
</div>