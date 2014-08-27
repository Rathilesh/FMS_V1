<?php
require_once('general_class.php');
class Basic_definitionController extends Controller
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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','admin','update','Statusmessage','EntityBDFFunction','Savebasicdefinition','Deletebasicdefinition'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
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
		$model=new Basic_Definition;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Basic_definition']))
		{
			$model->attributes=$_POST['Basic_definition'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ID));
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

		if(isset($_POST['Basic_definition']))
		{
			$model->attributes=$_POST['Basic_definition'];
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
		$dataProvider=new CActiveDataProvider('Basic_definition');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Basic_definition;
		if(isset($_POST['Basic_definition']))
		{
			$model->attributes=$_POST['Basic_definition'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ID));
		}
$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Basic_definition the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Basic_definition::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
        
         public function actionSavebasicdefinition()
        {$getMessages=new Get_Message_Cls();
             $nID='';
           
             $def_type=$_POST['def_type'];
             
             if(isset($_POST['up_id'])){
             $up_id=$_POST['up_id'];}
             else{$up_id="";}
             if(isset($_POST['up_shortname'])){
             $up_shortname=$_POST['up_shortname'];}
             else{$up_shortname="";}
              if(isset($_POST['up_description'])){
              $up_description=$_POST['up_description'];}
               else{$up_description="";}
                if(isset($_POST['up_entity'])){
                $up_entity=$_POST['up_entity'];}
                 else{$up_entity="";}
                 if(isset($_POST['in_id'])){
             $in_id=$_POST['in_id'];}
             else{$in_id="";}
                 if(isset($_POST['in_shortname'])){
                 $in_shortname=$_POST['in_shortname'];}
                  else{$in_shortname="";}
                  if(isset($_POST['in_description'])){
                  $in_description=$_POST['in_description'];}
                   else{$in_description="";}
                  if(isset($_POST['in_entity'])){
                  $in_entity=$_POST['in_entity'];}
                   else{$in_entity="";}
                   $up_size=count($up_shortname);
                   $in_size=count($in_shortname);
                   if($up_shortname=="")
                       goto insert;
                   
 
  ////////////////////////Updation///////////////////////////
                      
                  for($i=0;$i<$up_size;$i++)
                  {
                      $vAction='U';
                      $vStatus='';
                     
                     if(!isset($up_entity[$i]))
                     {
                         $up_entity[$i]="";
                         
                     }
                      
                    if(trim($up_shortname[$i])!=="")
                    {
                      
                  
                     $Basic_Definition_Cmd = Yii::app()->db->createCommand ('call dml_basic_definition(:pnID,
                                                                                             :pvShort_name,
                                                                                             :pvDescription,
                                                                                             :pvEntity_id,
                                                                                             :pvDFCTG_Definition_type,
                                                                                             :pvAction,
                                                                                             :pvStatus                                                                                                
                                                                                           )'
                                                                     );
                           
                          
                            $Basic_Definition_Cmd->bindParam(":pnID",$up_id[$i],PDO::PARAM_STR, 15); // bind return  parameter must have enter size exc(10)
                            $Basic_Definition_Cmd->bindParam(":pvShort_name",$up_shortname[$i],PDO::PARAM_STR, 30); // bind parameter
                            $Basic_Definition_Cmd->bindParam(":pvDescription",$up_description[$i],PDO::PARAM_STR, 100); // bind parameter
                            $Basic_Definition_Cmd->bindParam(":pvEntity_id",$up_entity[$i],PDO::PARAM_STR, 30); // bind parameter
                            $Basic_Definition_Cmd->bindParam(":pvDFCTG_Definition_type",$def_type,PDO::PARAM_STR, 30); // bind parameter
                            $Basic_Definition_Cmd->bindParam(":pvAction",$vAction,PDO::PARAM_STR, 15); // bind parameter
                            $Basic_Definition_Cmd->bindParam(":pvStatus",$vStatus,PDO::PARAM_STR, 15); // bind parameter
                            $Basic_Definition_Cmd->execute(); 
                             
                          //echo $vStatus;
                            if($vStatus!=20001)
                            {
                               $this->actionStatusmessage($i+1, $vStatus,$def_type);
			
                               exit;
                            }
 
                            //echo "hi";  
                    }
                  
                 
                   }
                   
                        if($in_shortname=="")
                        {
                            echo $vStatus.Yii::app()->params['alertformat']."".Yii::app()->params['alertformat']."";
       
                           $message=$getMessages->Get_Message_Fnc("20001");
                         Yii::app()->user->setFlash('success',$message); 
                        exit;}
    ///////////////////////////Insertion//////////////////////////////////////////////////////////            
        
            insert:      
                   for($j=0;$j<$in_size;$j++)
                  {
                    //echo "hi";exit;
                     
                      $vAction1='I';
                      $vStatus1='';
                     
                     if(!isset($in_entity[$j]))
                     {
                         $in_entity[$j]="";
                         
                     }
                  

                    if(trim($in_shortname[$j])!=='')
                    {
                       
                 
                     $Basic_Definition_Ins_Cmd = Yii::app()->db->createCommand ('call dml_basic_definition(:pnID,
                                                                                             :pvShort_name,
                                                                                             :pvDescription,
                                                                                             :pvEntity_id,
                                                                                             :pvDFCTG_Definition_type,
                                                                                             :pvAction,
                                                                                             :pvStatus                                                                                                
                                                                                           )'
                                                                     );
                     
                   
                            $Basic_Definition_Ins_Cmd->bindParam(":pnID",$nID,PDO::PARAM_STR, 15); // bind return  parameter must have enter size exc(10)
                            $Basic_Definition_Ins_Cmd->bindParam(":pvShort_name",$in_shortname[$j],PDO::PARAM_STR, 30); // bind parameter
                            $Basic_Definition_Ins_Cmd->bindParam(":pvDescription",$in_description[$j],PDO::PARAM_STR, 100); // bind parameter
                            $Basic_Definition_Ins_Cmd->bindParam(":pvEntity_id",$in_entity[$j],PDO::PARAM_STR, 30); // bind parameter
                            $Basic_Definition_Ins_Cmd->bindParam(":pvDFCTG_Definition_type",$def_type,PDO::PARAM_STR, 30); // bind parameter
                            $Basic_Definition_Ins_Cmd->bindParam(":pvAction",$vAction1,PDO::PARAM_STR, 15); // bind parameter
                            $Basic_Definition_Ins_Cmd->bindParam(":pvStatus",$vStatus1,PDO::PARAM_STR, 15); // bind parameter
                           
                            $Basic_Definition_Ins_Cmd->execute(); 
                          
                             if($vStatus1!=20001)
                            {
                               $this->actionStatusmessage($up_size+$j+1, $vStatus1,$def_type);
			
                               exit;
                            }
                     
                  }
                 
        } 
        echo $vStatus1.Yii::app()->params['alertformat']."".Yii::app()->params['alertformat']."";
       
                   $message=$getMessages->Get_Message_Fnc("20001");
                     Yii::app()->user->setFlash('success',$message ); 
                    exit;
         
                  
                  ////////////////////////////////////////////////////////////////////////////////
                  
                     }
                     ///////////////Status messages for insert and update ///////////////////////////
                     public function actionStatusmessage($index,$status,$category)
                     {$getMessages=new Get_Message_Cls();
                    
                         if($status==20126)
                         {
                             echo $status.Yii::app()->params['alertformat'].$index.Yii::app()->params['alertformat'].$category;
                             //echo "Short name is empty in".$index."th row of".$category."Category";
                              $messsage=$getMessages->Get_DynamicMessage_Fnc(20128,$index,$category);
                              Yii::app()->user->setFlash('error',$message);
                             exit;
                         }
                         if($status==20127)
                         { 
                     echo $status.Yii::app()->params['alertformat'].$index.Yii::app()->params['alertformat'].$category;
                              $messsage=$getMessages->Get_DynamicMessage_Fnc(20129,$index,$category);

                             //echo "Description is empty in".$index."th row of".$category."Category";
                             Yii::app()->user->setFlash('error',$message);
                             exit;
                         }
                        
                          if($status==2004)
                         {    echo $status.Yii::app()->params['alertformat'].$index.Yii::app()->params['alertformat'].$category;
                              $messsage=$getMessages->Get_DynamicMessage_Fnc(20125,$index,$category);

                             //echo "Short name already exist for ".$index."th row of".$category."Category";
                              Yii::app()->user->setFlash('error',$message); 
                             exit;
                         }
                     }
                
               ///////////////////Delete basic definition ///////////////////////////////////
        public function actionDeletebasicdefinition()
        {$getMessages=new Get_Message_Cls();
            $nID=$_POST["id"];
            $in_shortname="";
            $in_description="";
            $in_entity="";
            $def_type="";                 
            $vAction='D';
            $vStatus="";

            $Basic_Definition_Ins_Cmd = Yii::app()->db->createCommand ('call dml_basic_definition(:pnID,
                                                                                             :pvShort_name,
                                                                                             :pvDescription,
                                                                                             :pvEntity_id,
                                                                                             :pvDFCTG_Definition_type,
                                                                                             :pvAction,
                                                                                             :pvStatus                                                                                                
                                                                                           )'
                                                                     );
                     
                   
                            $Basic_Definition_Ins_Cmd->bindParam(":pnID",$nID,PDO::PARAM_STR, 15); // bind return  parameter must have enter size exc(10)
                            $Basic_Definition_Ins_Cmd->bindParam(":pvShort_name",$in_shortname,PDO::PARAM_STR, 30); // bind parameter
                            $Basic_Definition_Ins_Cmd->bindParam(":pvDescription",$in_description,PDO::PARAM_STR, 100); // bind parameter
                            $Basic_Definition_Ins_Cmd->bindParam(":pvEntity_id",$in_entity,PDO::PARAM_STR, 30); // bind parameter
                            $Basic_Definition_Ins_Cmd->bindParam(":pvDFCTG_Definition_type",$def_type,PDO::PARAM_STR, 30); // bind parameter
                            $Basic_Definition_Ins_Cmd->bindParam(":pvAction",$vAction,PDO::PARAM_STR, 15); // bind parameter
                            $Basic_Definition_Ins_Cmd->bindParam(":pvStatus",$vStatus,PDO::PARAM_STR, 15); // bind parameter
                            $Basic_Definition_Ins_Cmd->execute(); 
             echo $vStatus;
              $message=$getMessages->Get_Message_Fnc("20130");
                
              Yii::app()->user->setFlash('success',$message ); 

            
           
            
        }
           
           ////for organisation autocomplete field  /////////////   
           public function actionEntityBDFFunction()
	{
           
         
                 $getPolicy = Yii::app()->db->createCommand()
                            ->select('ID,NAME AS LABEL')
                            ->from('ENTITY')
                            ->queryAll();
            

            $ret = array();
            foreach($getPolicy as $record) 
            {
                $ret[] = array(
                'label' => $record['LABEL'],
                'id' => $record['ID'],

                );
            }

            echo CJSON::encode($ret);
            Yii::app()->end();

        } 

	/**
	 * Performs the AJAX validation.
	 * @param Basic_definition $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='basic-definition-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
