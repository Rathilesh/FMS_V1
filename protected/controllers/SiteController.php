<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
       return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha'=>array(
                            'class'=>'CCaptchaAction',
                            'backColor'=>0xFFFFFF,
                            ),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
                        'class'=>'CViewAction',
                         ),
                    );
	}
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
        // renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}
	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;
        $status=0;
		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
		// collect user input data
        if(isset($_POST['LoginForm']))
        {
            if($_POST['LoginForm']['username']<>"" && $_POST['LoginForm']['password']<>"") { 

                 $pvId= $_POST['LoginForm']['database'];

                        $ArGet_Db_Result = Yii::app()->db->createCommand()
                        ->select('*')
                        ->from("Get_Connection_Schema_Dtls({$pvId})")
                        ->queryAll();

                        $get_dbsname = $ArGet_Db_Result[0]['pvdb_name'];     
                        $get_dbuname = $ArGet_Db_Result[0]['pvdb_uname'] ;   
                        $get_dbpass  = $ArGet_Db_Result[0]['pvdb_password'];

               // echo "dbsname===".trim($get_dbsname)."username====".$get_dbuname."passworddddd====".$get_dbpass; exit; 
			try {
                    $component=Yii::createComponent(array(  
                    'class'            =>'CDbConnection',
                    'connectionString' => 'pgsql:host=localhost;dbname=FMS',
                    'username'         => $get_dbuname,
                    'password'         => $get_dbpass,
					));
					Yii::app()->setComponent('db',$component);
            	} 
	        catch (CDbException  $e) 
	            {
                   // echo "dbsname===".trim($get_dbsname)."username====".$get_dbuname."passworddddd====".$get_dbpass; exit; 
            		$this->redirect(Yii::app()->request->baseUrl.'/index.php/site/login?error=2');	
	            } 
                
            }
            $model->attributes=$_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if($model->validate()) 
                {
                
                    if($model->login()==1) 
                        {

                        Yii::app()->session['P_Eu_Orgn_Code']=1;
                        Yii::app()->user->setState('__db_username',$get_dbuname);
                        Yii::app()->user->setState('__db_password',$get_dbpass);
                        Yii::app()->user->setState('__db_name','FMS');
                        // Yii::app()->session['P_Eu_Orgn_Code']=1;
                        // Yii::app()->user->setState('__db_username',$get_dbuname);
                        // Yii::app()->user->setState('__db_password',$get_dbpass);
                        // Yii::app()->user->setState('__db_name',$get_dbsname);



                        //$this->redirect(Yii::app()->request->baseUrl.'/index.php/site/page?view=about');

                         $this->redirect(Yii::app()->request->baseUrl.'/index.php/hrmessage/create');


                        }
                }
                 else 
                     {
                    $get_all_error =$model->getErrors();
                        if (!empty($get_all_error))
                        {
                            if(!empty($get_all_error['password'][0])) 
                                {
                                    if(strtolower($get_all_error['password'][0])=="incorrect")
                                        {
                                            $this->redirect(Yii::app()->request->baseUrl.'/index.php/site/login?error=1');
                                        }
                                }
                        }
                        Yii::app()->user->setState('__db_username',Yii::app()->params['default_db_uname']);
                        Yii::app()->user->setState('__db_password',Yii::app()->params['default_db_password']);
                        Yii::app()->user->setState('__db_name',Yii::app()->params['default_db_name']);
                        Yii::app()->setComponent('db', array(
                                    'connectionString' => 'pgsql:host=localhost;dbname=HRMS30_CONNECTION',
                                    'username'         => 'postgres',
                                    'password'         => 'letmein',

                                                )           

                        );  
                     }
                
        }
        else 
            {  
                Yii::app()->user->setState('__db_username',Yii::app()->params['default_db_uname']);
                Yii::app()->user->setState('__db_password',Yii::app()->params['default_db_password']);
                Yii::app()->user->setState('__db_name',Yii::app()->params['default_db_name']);
                Yii::app()->setComponent('db', array(
                                    'connectionString' => 'pgsql:host=localhost;dbname=HRMS30_CONNECTION',
                                    'username'         => 'postgres',
                                    'password'         => 'letmein',
                                    //'tablePrefix'=>'tbl_'
                               

                )); 
            }
            $this->render('login',array('model'=>$model));
	}
	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{        
         Yii::app()->user->logout(); 

         Yii::app()->user->setState('__db_username',Yii::app()->params['default_db_uname']);
                Yii::app()->user->setState('__db_password',Yii::app()->params['default_db_password']);
                Yii::app()->user->setState('__db_name',Yii::app()->params['default_db_name']);
		$this->redirect(Yii::app()->homeUrl);


	}
}