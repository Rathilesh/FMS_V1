<?php
require_once('general_class.php');  //including classes
class HrlabelController extends Controller
{
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout='//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(
            array('allow',  // allow all users to perform 'index' and 'view' actions Yii::app()->user->isGuest
                'actions'=>array('index','view'),
                'users'=>array('*'),
            ),
            array('allow',  // allow all users to perform 'index' and 'view' actions Yii::app()->user->isGuest
                'actions'=>array('index','view','create','update','admin','delete','theme_management'),
                'users'=>array('@'),
            ),
            array('deny',  // allow all users to perform 'index' and 'view' actions Yii::app()->user->isGuest
                'actions'=>array('create','update','admin','delete'),
                'users'=>array('*'),
            ),
//			array('allow', // allow admin user to perform 'admin' and 'delete' actions
//				'actions'=>array('admin','delete'),
//				'users'=>array('admin'),
//			),
//			array('deny',  // deny all users
//				'users'=>array('*'),
//			),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id)
    {
        $this->render('view',array(
            'model'=>$this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $GetlabelCount =new Get_Labelname_Cls();
        $GetMessage=new Get_Message_Cls();
        $model=new Hrlabel;
        // Uncomment the following line if AJAX validation is needed
        //$this->performAjaxValidation($model);
        if(isset($_POST['Hrlabel']))
        {
           // print_r($_POST); exit;
            $flg_save=0; 
            //flg_save=0 indicate defoult value
            //flg_save=3 indicate duplication found
            //flg_save=1 successfully save data
            if ($_POST['TotRowCount']=="") {
                $_POST['TotRowCount']=10;
            }
            $post_value=array();
            //first loop for checking any duplication on this save request
            for ($i=1;$i<$_POST['TotRowCount']+1; $i++)
            {

                if($_POST['Hrlabel'][$i]['TEXT_ID']<>'' && $_POST['Hrlabel'][$i]['TEXT']<>'' && $_POST['Hrlabel'][$i]['LANGUAGE']<>'')
                {
                    $revat = $GetlabelCount->
                        Get_LabelCount_Fnc($_POST['Hrlabel'][$i]['TEXT_ID'],$_POST['Hrlabel'][$i]['LANGUAGE']);
                    //Found any duplication goes control into if
                    if($revat !='')
                    {
                        $flg_save=3;
                        $post_value['Hrlabel'][]=$_POST['Hrlabel'][$i];
                        $model->attributes=$post_value;
                        $textid = $_POST['Hrlabel'][$i]['TEXT_ID'];
                        Yii::app()->user->setFlash('Error',"Label ID (".$textid.") already exist on database !" );
                    }

                }
            }
            //first loop for checking any duplication on this save request

            //This area execute only error free post ,do saving data into DB
            if($flg_save<>3)
            {
                for ($i=1;$i<$_POST['TotRowCount']+1; $i++)
                {
                    if($_POST['Hrlabel'][$i]['TEXT_ID']<>'' && $_POST['Hrlabel'][$i]['TEXT']<>'' && $_POST['Hrlabel'][$i]['LANGUAGE']<>'')
                    {
                $model=new Hrlabel;
                if(isset($_POST['Hrlabel'][$i]))
                   // print_r ($_POST['Hrlabel']); exit;
                $model->attributes=$_POST['Hrlabel'][$i];
                $model->COUNTER="1";
                $model->save();
                $flg_save=1;
                    }
                }
            }
            //This area execute only error free post ,do saving data into DB


            // Success message flash
            if($flg_save==1)
                {
                 Yii::app()->user->setFlash('success', "Data Saved");
                $this->redirect(array('hrlabel/create', 'id' => 1));
                }
        }

        $this->render('create',array(
            'model'=>$model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id)
    {
        $model=$this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Hrlabel']))
        {
            $model->attributes=$_POST['Hrlabel'];
            if($model->save())
                $GetlabelCount =new Get_Labelname_Cls();
                Yii::app()->user->setFlash('success', $GetlabelCount->Get_Labelname_Fnc("2024"));
                $this->redirect(array('admin'));
        }

        $this->render('update',array(
            'model'=>$model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id)
    {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if(!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        $dataProvider=new CActiveDataProvider('Hrlabel');
        $this->render('index',array(
            'dataProvider'=>$dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $model=new Hrlabel('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['Hrlabel']))
            $model->attributes=$_GET['Hrlabel'];

        $this->render('admin',array(
            'model'=>$model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Hrlabel the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model=Hrlabel::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Hrlabel $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='hrlabel-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }



        public function actionInlineUpdate()
        {
            Yii::import('bootstrap.widgets.TbEditableSaver');
            $es = new TbEditableSaver('hrlabel');
            $es->update();
        }
        
         

}
