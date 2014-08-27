<?php 
/*
 * Mordified By : Rathilesh ---@@@@ 09-JUN-2014 @@@@@@
 * Purpose	:
	---------	
	This is a common page that means it Inherits all pages
	 
	Details :
	-------	
	Componets , Modules  , DB connection , Gii , Application parameters  are implimenting on this page
*							
*/
	require_once(Yii::app()->basePath . '/Connection.php'); //Call the Connection Schema Page
	Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap'); //Add bootstrap CSS path
    //Bootstrap is a CSS Framework that used to be creating responsive web Design
        return array(
                       'basePath'          =>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
                       'name'              =>'eHorizon FMS', //Application Name 
                       'defaultController' => 'site/login', //Set Default Controller for application
                       // preloading 'log' component
                       'preload'           =>array('log'),
                       // autoloading model and component classes
                       'import'            =>array(
                       'application.models.*',
                       'application.components.*',
                       'application.classes.*',
                       'ext.giix-components.*', 
                           
                                                  ),
            //creating alias here
            'aliases' => array  (
                                ),
            'theme'=>'bootstrap',  //the name mension here
           
            'modules'=>array(
		       // uncomment the following to enable the Gii tool
			   // Gii is the graphical interphase for creating CRUD Files 
               'gii'=>array(
                            'class'          =>'system.gii.GiiModule',
                            'password'       =>'letmein',          //set password for gii login
                            'generatorPaths' => array   (
                            'ext.phpextjs'  // load phpextjs extension  //currently not using
                                                        ),
                            'ipFilters'      =>array($_SERVER['REMOTE_ADDR']), // Allowing ip address for Gii Login
                            ),
                            ),
            // application components
            'components'=>array(
                    'user'=>array(
                                  // enable cookie-based authentication
                                  'allowAutoLogin'=>true,
                                 ),
                    //Bootstrap Components,,, such as bootbox,toggle button   etc
                    'bootstrap'=>array(
                                 'class'=>'bootstrap.components.Bootstrap',
                                      ),
                    
                    // uncomment the following to enable URLs in path-format
                    'urlManager'=>array(
			                    'urlFormat'=>'path',
			                    'rules'=>array(
//				                         '<controller:\w+>/<id:\d+>'=>'<controller>/view',
//				                         '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				                         '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			                                  ),
		                             ),
		           // ORACLE DATABASE CONNECTION
                   // Get Connection.php Variable here
                    'db'=>array(  'connectionString' => 'pgsql:host=localhost;dbname=HRMS30_CONNECTION',
                                  'emulatePrepare' => true,
                                  'username'       => 'postgres',
                                  'password'       => 'letmein',
                                    //'tablePrefix'=>'tbl_'
                                ),
                    // 'db'=>array(
                    //             'connectionString'=>'pgsql:host='.$Host.'/'.$SID, 
                    //             'emulatePrepare' => true,
                    //             'username' => $ConnectionSchemaUserName,  
                    //             'password' => $ConnectionSchemaPassword,
                    //             'charset' => 'utf8',
		                  //     ),

                    'errorHandler'=>array(
                                        // use 'site/error' action to display errors
                                        'errorAction'=>'site/error',
                                         ),
                    'log'=>array(
                            'class'=>'CLogRouter',
                            'routes'=>array(
                                            array(
                                            'class'=>'CFileLogRoute',
                                            'levels'=>'error, warning',
                                                 ),
                    //CWebLogRoute for showing application error on browser										 
//                                          array(
//                                                    //'class'=>'CWebLogRoute',
//                                               ),
                                            ),
                                ),
                                ),
	// application-level parameters that can be accessed
	// using this code for getting parameter value .. Yii::app()->params['paramName'] 
    				  
                'params'=>array(
                               'adminEmail'=>'hrd@loksolutions.biz',
                               'defaultPageSize'=>15,
                               'alertformat'=>"*@",
                               'default_db_uname'=>'postgres',
                               'default_db_password'=>'letmein',
                               'default_db_name'=>"HRMS30_CONNECTION",
                               ),
                    );

        ?>

