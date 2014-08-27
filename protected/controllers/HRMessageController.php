  <?php
require_once('general_class.php');  //including classes
class HRMessageController extends Controller
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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','DeleteMessage'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
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
		$model=new HRMessage;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
        //exit;
		/*if(isset($_POST['messageid'])){
			echo "here"; exit;
		}*/
		if( isset($_POST['HRMessage']) || isset($_POST['messageid']) )
		{  
			
			/*
			  	This Code for Deleting Purpose
			*/
			
			if(isset($_POST['messageid'])) 
			{
			    $_POST['TotRowCount'] = 1;	
			}
			
			
			
		//print_r($_POST); exit;
		
            for($i=1;$i<=$_POST['TotRowCount'];$i++) 
            {
               //echo "here";
			   if(isset($_POST['HRMessage'])) 
			   {
			   	
	                $textid=$_POST['HRMessage'][$i]['TEXTID'];
	                $language=$_POST['HRMessage'][$i]['LANGUAGE'];
	                $text =$_POST['HRMessage'][$i]['TEXT'];
	                $usage_count =$_POST['HRMessage'][$i]['USAGE_COUNT'];
	                $getid =$_POST['id_basic'][$i];
	                if($getid<>"")
						{
							
		                 	$action="U";
							  
						}
						else 
						{
							$action = "I"   ;
							$getid  =  ""	;
						}
				
				}
				else {
					$action="D";
					$getid  =  $_POST['messageid'];
					$textid=1;
	                $language="dl_dummy_str";
	                $text ="Dummy_Text";
	                $usage_count =1;
				}
					  
                $command = Yii::app()->db->createCommand
                    ('call DML_HR_MESSAGE(:pnID,:pnText_ID,:pvLanguage,:pvText,:pnUsage_Count,:pvAction,:pvStatus)');// call the procedure
                $command->bindParam(":pnID",$getid,PDO::PARAM_INT,15); // bind parameter
                $command->bindParam(":pnText_ID",$textid,PDO::PARAM_INT,15); // bind parameter
                $command->bindParam(":pvLanguage",$language,PDO::PARAM_STR,100); // bind parameter
                $command->bindParam(":pvText",$text,PDO::PARAM_STR,1024); // bind parameter
                $command->bindParam(":pnUsage_Count",$usage_count,PDO::PARAM_INT,5); // bind parameter
                $command->bindParam(":pvAction",$action,PDO::PARAM_STR); // bind parameter
                $command->bindParam(":pvStatus",$pvStatus,PDO::PARAM_INT, 10); // bind return  parameter must have enter size exc(10)
                $command->execute(); // execute the cammand
                //echo $pvStatus; //exit;
                switch ($pvStatus) {
                    case 1000:
                            Yii::app()->user->setFlash('success', "Data Saved");
							echo "Datasaved".$i;
                        break;
						
					 case 20130:
							Yii::app()->user->setFlash('success', "Deleted Successfully");
							echo "20130";
							//echo "DataDeleted".$i;
                        break;
						
						
                    case 20008:

                           // Yii::app()->user->setFlash('error', "Duplication Error Found");
                        break;

                    default:
                        break;
                }
                    
                
                
            }
			
            }
		/*duplicationError:
           // echo "here"; exit;
            Yii::app()->user->setFlash('error', "Duplication Error Found");
             $this->redirect(array('create'));
            break;*/
        //}
       // echo "here" ; //exit;
	   
	   
	   $criteria = new CDbCriteria();
       //$criteria->condition = 'collumnName1 = :id';
       $criteria->order = '"TEXTID" DESC';
       //$criteria->params = array (':id'=>$id);
       
        $item_count = HRMessage::model()->count($criteria);   
        $pages = new CPagination($item_count);
        $pages->setPageSize(17);
        $pages->applyLimit($criteria);  // the trick is here!
        
         $this->render('create',array(
                'model'=> HRMessage::model()->findAll($criteria), // must be the same as $item_count
                'item_count'=>$item_count,
                'page_size'=>16,
                'items_count'=>$item_count,
                'pages'=>$pages,
        ));
	   
	   
	   
	   
	   
	   
		/*$this->render('create',array(
			'model'=>$model,
		));*/
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

		if(isset($_POST['HRMessage']))
		{
			$model->attributes=$_POST['HRMessage'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ID));
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
       // echo $messageid;
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
		$dataProvider=new CActiveDataProvider('HRMessage');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new HRMessage('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['HRMessage']))
			$model->attributes=$_GET['HRMessage'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return HRMessage the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=HRMessage::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param HRMessage $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='hrmessage-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
