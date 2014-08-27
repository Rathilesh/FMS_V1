<?php
require_once('general_class.php');  //including classes
class Basic_Definition_CategoryController extends Controller
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
				'actions'=>array('create','update','admin','view','delete','index'),
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

	public function DefinitionType_DuplicationCheck($definition_type)
        {
              $model=new Basic_Definition_Category;
//              $definitionType = Yii::app()->db->createCommand()
//                                    ->select("DEFINITION_TYPE")
//                                    ->from("BASIC_DEFINITION_CATEGORY")
//                                    ->where('(UPPER(DEFINITION_TYPE)=UPPER(:DT))',array(":DT"=>$definition_type))
//                                    ->queryRow();
              $definitionType=BASIC_DEFINITION_CATEGORY::model()->find(array(
                                                 'select'=>'"DEFINITION_TYPE"',
                                                 'condition'=>'"DEFINITION_TYPE"=UPPER(:DT)',
                                                 'params'=>array(':DT'=>trim($definition_type))));

                                        //  echo $definitionType;exit;
            if ($definitionType  == '')
            {
                return 'Y';
                //$ReturnValue = 'Y';
            }  
            else
            {
                 return 'N';
            }
            
           //  return 'N';
        }
        
   
	public function actionCreate()
	{
             $model=new Basic_Definition_Category;
             $getMessages=new Get_Message_Cls();
             
             if(isset($_POST['Basic_Definition_Category']))
                {
               
                    $ArrayValuesPass=array();
                    $vFlgSave=0;
                    $vSaveflag=0; 
                    $vDupValueMsg = 0;
                    $count=$_POST['TotRowCount'];
                   for ($i=1;$i<=$count; $i++)
                   { 
                        
                         $definitiontype = trim($_POST['Basic_Definition_Category'][$i]['DEFINITION_TYPE']);
                         $ArrayValuesPass [] =trim($_POST['Basic_Definition_Category'][$i]['DEFINITION_TYPE']);
                         $description    = trim($_POST['Basic_Definition_Category'][$i]['DESCRIPTION']);
                         $records        = $_POST['Basic_Definition_Category'][$i]['NO_OF_RECORDS'];
                       
                 
                      if($definitiontype!="")
                        {
                           $definition = $this->DefinitionType_DuplicationCheck($definitiontype);
                           
                            
                            if($definition=='N')
                               {
                                 $vSaveflag=1;
//                                 $messageparams = array();
//                                 $messageparams[0]=$i;
                               //  $messsage=$getMessages->Get_DynamicMessage_Fnc("20063",$i);
                                 $message=$getMessages->Get_Message_Fnc("20063");
                                 Yii::app()->user->setFlash('Error',$message ."(" .$definitiontype.")" );
                                 break;
                               }
                          
                             if($description=="")
                              {
                                $vSaveflag=1;  
//                                $messageparams = array();
//                                $messageparams[0]=$i;
                                $messsage=$getMessages->Get_DynamicMessage_Fnc("20060",$i);
                                Yii::app()->user->setFlash('Error',$messsage);
                                break;
                              }
               
                        }
     
                        if($definitiontype=="" && $description!="" ) 
                        { 
                            $vSaveflag=1;
//                            $messageparams = array();
//                            $messageparams[0]=$i;
                            $messsage=$getMessages->Get_DynamicMessage_Fnc("20059",$i);
                            Yii::app()->user->setFlash('Error',$messsage );
                            break;
                           
                        } 
                        if($definitiontype=="" && $description=="")
                        {   
                            $vSaveflag=0;
                           //Yii::app()->user->setFlash('Error',"Description is null." );
                          //  break;
                        }
              
                   }
            
         $duplication_check = array_flip(array_filter( array_count_values($ArrayValuesPass), create_function('$x', 'return $x >= 1;')));
              
                if(isset($duplication_check[2])<>"") 
                    {  //print_r($d[2]);exit;
                        $vDupValueMsg = 1;
//                        $messageparams = array();
//                        $messageparams[0]=$i;
                        $message=$getMessages->Get_Message_Fnc("20064");
                     //   $messsage=$getMessages->Get_DynamicMessage_Fnc("20064",$i);
                        Yii::app()->user->setFlash('Error',$message." "."(".$duplication_check[2].")");
                     
                    }
                    
                else
                    {
                        $vDupValueMsg = 0;
                    }

             
         if(($vSaveflag==0) && ($vDupValueMsg == 0))
                 {   
                     
                    for ($i=1;$i<=$count; $i++)
                    {
                      
                        if(trim($_POST['Basic_Definition_Category'][$i]['DEFINITION_TYPE'])<>'')
                        {
                            $model->attributes=$_POST["Basic_Definition_Category"][$i];
                          
                            
                            $vDefinition_type=$model->DEFINITION_TYPE;
                            $vDescription=$model->DESCRIPTION;
                            $vIs_amend=$model->IS_AMEND; 
                            $vIs_display=$model->IS_DISPLAY; 
                            $vIs_universal=$model->IS_UNIVERSAL; 
                            $vIs_compulsory=$model->IS_COMPULSORY;
                            $nNo_of_records=$model->NO_OF_RECORDS; 
                            $vAction="I";
                            $vStatus="";        
                            $BC_insert_cmd = Yii::app()->db->createCommand('call DML_BASIC_DEFINITION_CATEGORY(
                                                                                                        :pvDefinition_type,
                                                                                                        :pvDescription,          
                                                                                                        :pvIs_amend,              
                                                                                                        :pvIs_display,             
                                                                                                        :pvIs_universal,           
                                                                                                        :pvIs_compulsory,          
                                                                                                        :pnNo_of_records,          
                                                                                                        :pvAction,                 
                                                                                                        :pvStatus                   
                                                                                                     )'
                                                                         );
                                    $BC_insert_cmd->bindParam(":pvDefinition_type",$vDefinition_type,PDO::PARAM_STR, 30); 
                                    $BC_insert_cmd->bindParam(":pvDescription",$vDescription,PDO::PARAM_STR, 100);
                                    $BC_insert_cmd->bindParam(":pvIs_amend",$vIs_amend,PDO::PARAM_STR, 1);
                                    $BC_insert_cmd->bindParam(":pvIs_display",$vIs_display,PDO::PARAM_STR, 1);
                                    $BC_insert_cmd->bindParam(":pvIs_universal",$vIs_universal,PDO::PARAM_STR, 1);
                                    $BC_insert_cmd->bindParam(":pvIs_compulsory",$vIs_compulsory,PDO::PARAM_STR, 1);
                                    $BC_insert_cmd->bindParam(":pnNo_of_records",$nNo_of_records,PDO::PARAM_STR, 5);
                                    $BC_insert_cmd->bindParam(":pvAction",$vAction,PDO::PARAM_STR, 15);
                                    $BC_insert_cmd->bindParam(":pvStatus",$vStatus,PDO::PARAM_STR, 15);
                                    $BC_insert_cmd->execute();
//                                    
//                                     $messageparams = array();
//                                     $messageparams[0]=$i;
                                $messsage=$getMessages->Get_DynamicMessage_Fnc($vStatus,$i);
//                              if($vStatus=="20057")
//                               {
//                                  Yii::app()->user->setFlash('success',$messsage ); 
//                                 // break;
//                               }
                               
                              if( $vStatus=="20054")  
                              {
                                  $vSaveflag=1;
                                  Yii::app()->user->setFlash('Error',$messsage);
                                  break;
                              }
//                               if( $vStatus=="20006")  
//                              {
//                                  $vSaveflag=0;
//                                  Yii::app()->user->setFlash('error',"Number Of Records Cannot be Null.");
//                                  break;
//                              }
                                    
                    
                        }
           
                 }
                
                 if($vSaveflag == 0)
                         {
                            $message=$getMessages->Get_Message_Fnc("20057");
                            Yii::app()->user->setFlash('success',$message ); 
                           
                         }
                         
                        $this->redirect(array('basic_definition_category/create'));
                 
              }   
            }
         
            $this->render('create',array('model'=>$model,));
			
		
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{      
    
		  $model=$this->loadModel($id);
                  $getMessages=new Get_Message_Cls();

		if(isset($_POST['Basic_Definition_Category']))
		{
                    
 
                       $Bdefinition=$_POST['Basic_Definition_Category'][1]['DEFINITION_TYPE'];
                       $Bdescription=$_POST['Basic_Definition_Category'][1]['DESCRIPTION'];
                       $amend=$_POST['Basic_Definition_Category'][1]['IS_AMEND'];
                       $display=$_POST['Basic_Definition_Category'][1]['IS_DISPLAY'];
                       $universal=$_POST['Basic_Definition_Category'][1]['IS_UNIVERSAL'];
                       $compulsary=$_POST['Basic_Definition_Category'][1]['IS_COMPULSORY'];
                       $records=$_POST['Basic_Definition_Category'][1]['NO_OF_RECORDS'];
                       
                    if($_POST['Basic_Definition_Category'][1]["DEFINITION_TYPE"]!="")
                    { 
                        $vDefinition_type=$Bdefinition;
                        $vDescription= $Bdescription;
                        $vIs_amend=$amend; 
                        $vIs_display=$display; 
                        $vIs_universal=$universal; 
                        $vIs_compulsory=$compulsary;
                        $nNo_of_records=$records; 
                        $vAction="U";
                        $vStatus="";
                        
                        $BC_Update_cmd = Yii::app()->db->createCommand('call DML_BASIC_DEFINITION_CATEGORY(
                                                                                                        :pvDefinition_type,
                                                                                                        :pvDescription,          
                                                                                                        :pvIs_amend,              
                                                                                                        :pvIs_display,             
                                                                                                        :pvIs_universal,           
                                                                                                        :pvIs_compulsory,          
                                                                                                        :pnNo_of_records,          
                                                                                                        :pvAction,                 
                                                                                                        :pvStatus                   
                                                                                                     )'
                                                                         );
                                    $BC_Update_cmd->bindParam(":pvDefinition_type",$vDefinition_type,PDO::PARAM_STR, 30); 
                                    $BC_Update_cmd->bindParam(":pvDescription",$vDescription,PDO::PARAM_STR, 100);
                                    $BC_Update_cmd->bindParam(":pvIs_amend",$vIs_amend,PDO::PARAM_STR, 1);
                                    $BC_Update_cmd->bindParam(":pvIs_display",$vIs_display,PDO::PARAM_STR, 1);
                                    $BC_Update_cmd->bindParam(":pvIs_universal",$vIs_universal,PDO::PARAM_STR, 1);
                                    $BC_Update_cmd->bindParam(":pvIs_compulsory",$vIs_compulsory,PDO::PARAM_STR, 1);
                                    $BC_Update_cmd->bindParam(":pnNo_of_records",$nNo_of_records,PDO::PARAM_STR, 5);
                                    $BC_Update_cmd->bindParam(":pvAction",$vAction,PDO::PARAM_STR, 15);
                                    $BC_Update_cmd->bindParam(":pvStatus",$vStatus,PDO::PARAM_STR, 15);
                                    $BC_Update_cmd->execute();
                    
              
                    }
  
                    if($vStatus=="20058")
                     { 
                         $message=$getMessages->Get_Message_Fnc("20058");
			 Yii::app()->user->setFlash('success',$message ); 
                         $this->redirect(array('admin','id'=>$model->DEFINITION_TYPE));
                     }
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
	     $getMessages=new Get_Message_Cls();
            
                 $p=$id;
                 $vDefinition_type="";
                 $vDescription="";
                 $vIs_amend=""; 
                 $vIs_display=""; 
                 $vIs_universal=""; 
                 $vIs_compulsory="";                
                 $nNo_of_records=""; 
                 $vAction="D";
                 $vStatus=""; 
                 
                 $getCount_BasicDefinition = Yii::app()->db->createCommand()
                                             ->select('COUNT(*) as BD')  
                                             ->from('BASIC_DEFINITION')
                                             ->where("DFCTG_DEFINITION_TYPE=:DDT",array(':DDT'=>$p))
                                             ->queryRow();
         
                 if($getCount_BasicDefinition['BD']>=1)
                 {
                    $message=$getMessages->Get_Message_Fnc("20056"); 
                    Yii::app()->user->setFlash('Error',$message);
//                    echo "<div class='error_red'> <div class='error_red_icon'></div><div class='error_red_msg'>Child Record Exist.Delete Not Allowed.</div></div>"; 
                 }
               
                else
                  
                  {
                    
                     $BC_delete_cmd = Yii::app()->db->createCommand('call DML_BASIC_DEFINITION_CATEGORY(
                                                                                                        :pvDefinition_type,
                                                                                                        :pvDescription,          
                                                                                                        :pvIs_amend,              
                                                                                                        :pvIs_display,             
                                                                                                        :pvIs_universal,           
                                                                                                        :pvIs_compulsory,          
                                                                                                        :pnNo_of_records,          
                                                                                                        :pvAction,                 
                                                                                                        :pvStatus                   
                                                                                                     )'
                                                                         );
                                    $BC_delete_cmd->bindParam(":pvDefinition_type",$vDefinition_type,PDO::PARAM_STR, 30); 
                                    $BC_delete_cmd->bindParam(":pvDescription",$vDescription,PDO::PARAM_STR, 100);
                                    $BC_delete_cmd->bindParam(":pvIs_amend",$vIs_amend,PDO::PARAM_STR, 1);
                                    $BC_delete_cmd->bindParam(":pvIs_display",$vIs_display,PDO::PARAM_STR, 1);
                                    $BC_delete_cmd->bindParam(":pvIs_universal",$vIs_universal,PDO::PARAM_STR, 1);
                                    $BC_delete_cmd->bindParam(":pvIs_compulsory",$vIs_compulsory,PDO::PARAM_STR, 1);
                                    $BC_delete_cmd->bindParam(":pnNo_of_records",$nNo_of_records,PDO::PARAM_STR, 5);
                                    $BC_delete_cmd->bindParam(":pvAction",$vAction,PDO::PARAM_STR, 15);
                                    $BC_delete_cmd->bindParam(":pvStatus",$vStatus,PDO::PARAM_STR, 15);
                                    $BC_delete_cmd->execute();
                          
                  }
         if ($vStatus=="20055")
              {
                $message=$getMessages->Get_Message_Fnc("20055");
                $this->loadModel($id)->delete();   
                Yii::app()->user->setFlash('success',$message);
//              echo "<div class='success_blue'> <div class='success_blue_icon'></div><div class='success_blue_msg'> Deleted Successfully.</div></div>";  
//              exit; 
               
             }
                
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
//		if(!isset($_GET['ajax']))
//			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Basic_Definition_Category');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Basic_Definition_Category('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Basic_Definition_Category']))
			$model->attributes=$_GET['Basic_Definition_Category'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Basic_Definition_Category the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
              // echo $_GET['id'];exit;
		$model=Basic_Definition_Category::model()->findByPk($id); 
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Basic_Definition_Category $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='basic--definition--category-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
    
        
//        public function ArrayValueDuplCheck($ArrayValues)
//        {
//            //  0 --> No Duplication
//            //  1 --> Duplication
//      //  print_r($ArrayValues);exit;
//           $DestArray=array(); 
//           
//           for ($i = 0; $i < count($ArrayValues); $i++) 
//            {
//                $DupFlg = 0;
//               //  print_r($ArrayValues[$i]);
//                for ($j = 0; $j < count($DestArray); $j++) 
//                {   
//                    if ($ArrayValues[$i] == $DestArray[$j])
//                        $DupFlg = 1;
//                   //print_r( $DestArray[$j]);exit; 
//                }
//
//                if (!$DupFlg) 
//                    $DestArray[] = $ArrayValues[$i];
//            }
//
////           print_r($DupFlg);
////            exit;
//            return $DupFlg;
            
 //  }
        
     
//          public function ArrayValueDuplCheck($ArrayValues,$count)
//                {
////$count=  count(array_filter($ArrayValues));
////echo $count; exit;
//      //  print_r($ArrayValues);
//        
//        if (in_array("Irix", $ArrayValues)) {
//    echo "Got Irix";
//}
//exit;
//                    $DupFlg = 0;
//                    for ($k=0; $k< $count; $k++) {                        // outer loop uses each item i at 0 through n
//                        for ($l=$k+1; $l<$count; $l++) {              // inner loop only compares items j at i+1 to n
//                           //  print_r($ArrayValues[$l]);exit;
////                            if(( empty($ArrayValues[$k])==false) && (empty($ArrayValues[$l])==false))
////                            {
////                               // echo $k.$l;
////                               // print_r($ArrayValues[$k]);
////                                if ((isset($ArrayValues[$k])==true) && (isset($ArrayValues[$l])==true) &&( $ArrayValues[$k]==$ArrayValues[$l]))
////                                {
////                                  // $DupFlg=$l+1;
////                                    echo $l+1;
////                                    return $l+1;
////                                }
////                            }
//                        }	
//                    }
//        
//                    return $DupFlg;         
//                    
//                  }
   
        
}
