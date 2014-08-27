<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<?php
 //Get Controller Action name 
    $action_ = Yii::app()->controller->action->id;
    if($action_=='login')
        {
            //If Login Page, below html are worked
?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
        <![endif]-->
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
            
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/login_style_v1.css" />
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jquery-1.4.1.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jQueryRotate.js"></script>
        <!-- Custom jquery scripts -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/custom_jquery.js" type="text/javascript"></script>
        <!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jquery.pngFix.pack.js" type="text/javascript"></script>
        
    </head>
        <script type="text/javascript">
            //javascript code for Rotate Logo in Login Page
            $(document).ready(function()
            {
                // code fot ajax login
                $("#log_sub").click(function()
                    {
                    var username    =   $("#LoginForm_username").val();
                    var password    =   $("#LoginForm_password").val();
                    if(username === "" && password === "")
                        {
                         //   alert("Are You Jocking");
                            return false;
                        }
                    else if(username !== "" && password === "")
                        {
                           alert("Please Provide a Password");
                           return false;
                        }
                    else if(password !== "" && username === "")
                        {
                           alert("Please Provide a Username");
                           return false;
                        }
                    else 
                        {   
                            $("#login-form").submit();
                        }   
                    });
                // code fot ajax login -- End
                
                $(document).pngFix( ); //call function , for png image fix in IE
                //code for Rotating Logo Image
                var angle = 0;
                setInterval(function()
                    {
                    angle+=3;
                    $("#image1").rotate(angle);
                    },50);
            });
            //End here, Code for Rotate Logo in Login Page
        </script>
        <body id="login-bg">
            <div id="left-cont-login" >
                <table width="860" border="0">
                    <tr>
                       <!--  <td class="left-cont-login-inner" width="416" align="center" >
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/login/rotate.png"  alt=""  id="image1" style="position:absolute; margin-top:32px; " />
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/login/l_hrms.png" width="250" height="106" alt="" id="image" align="center" />
                            <br />
                            <br />
                            <!---left content---->
                           <!--  <p>
                                eHORIZON HRMS delivers comprehensive HR capabilities, from workforce management to compensation and talent management. Extensive business process automation and rich self service capabilities enable HR teams to perform value added services while reducing operational costs. eHorizon HRMS comprise an array of features, and the powerful reporting and analysis capabilities that an organization needs to manage the workforce.</p><br />
                            <p>
                                The System transforms HR practices from administrative  to strategic.  It automates common  administrative tasks, and leverages industry best practices to enable strategic management, along with efficient administration.
                            </p><br /> -->
                            <!---left content---->
                        <!----</td> --->
                        <td width="434" align="center" valign="top">
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/login/stl-logo.png">
                            <div id="login-holder">
                            <div class="clear"></div>
                            <!--  START LOGIN BOX -->
                                <div id="loginbox">
                                    <div id="login-inner">
                                     <?php echo $content; ?>
                                    </div>
                                    <!--  end login-inner -->
                                    <div class="clear"></div>
                                    <!--<a href="" class="forgot-pwd">Forgot Password?</a>-->
                                </div>
                            <!--  END LOGIN BOX -->
                             </div>
                        </td>
                    </tr>
                </table>
            </div>
        </body>
</html>
<?php } 
else {
    include_once 'general_class.php';
    $modelname = Yii::app()->controller->id;
    $modelaction = Yii::app()->controller->action->id;
    //echo "<h1>".$modelname."--------".$modelaction."</h1>";
    //Calling  Bootstrap CSS Framework
    echo Yii::app()->bootstrap->init();//Yii::app()->language = 'zh-cn';    
    ?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />
        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" /> </link> 
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" /> </link> 
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" /> </link> 
        <![endif]-->      
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/pure-css-custom-form-elements/style.css"  /> </link> 
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/page_style_v1.css" />
        
        <?php 
        if(Yii::app()->session['css_theme_rst']<>"") {
        ?>
        <link id="change_theme" rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/theme_changer/<?php echo trim(Yii::app()->session['css_theme_rst']) ?>.css" /> </link> 
        <?php } 
        else {
        ?>
        <link id="change_theme" rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/theme_changer/blue.css" /> </link> 
        <?php } ?>

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.pageslide.css" /> </link>
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/tree/jquery.treeview.css"></link>
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/SrollBar/demo_files/jquery.mCustomScrollbar.css"></link>

        <!--<link rel="stylesheet" href="<?php //echo Yii::app()->request->baseUrl; ?>/assets/event_calendar/css/paragridma.css">-->
        <!-- Core CSS File. The CSS code needed to make eventCalendar works -->
        <!--<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/event_calendar/css/eventCalendar.css">-->
        <!-- Theme CSS file: it makes eventCalendar nicer -->
        <!--<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/event_calendar/css/eventCalendar_theme_responsive.css">-->
        <!--<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">-->
        
        <!----zebra dialog------>
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/zebra/public/css/default/zebra_dialog.css" type="text/css">
        <!----zebra dialog------>
        
        <!-------- Add Latest bootstrap CDN -------->
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css"></link>
        <!-------- Add Lates bootstrap CDN -------->
        
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>
    <style>
        /*   Add Some Inline Style {Written In Minifiered Version} */
        .table  { width: auto; float:left; }.ui-dialog .ui-dialog-title { padding: 0px !important; }.ui-dialog-title p { margin: 0 0 0px !important;}.jspDrag {background: #E7E7E7 !important;}.jspTrack { background: #FCFCFC !important;}.jspVerticalBar { width :10px !important; } .eventsCalendar-list-content { background: none repeat scroll 0 0 #FFFFFF; float: left; height: auto; width: 480px;}.eventsCalendar-slider { height: 237px !important;} .eventsCalendar-monthWrap { width: 492px !important; }.eventsCalendar-subtitle { width: 495px;}.eventsCalendar-currentTitle { line-height: 25px !important; background-color: #2B393C !important;outline: 1px solid #E1E4DE !important;border: none !important; border-width: 1px 0 !important;}.eventsCalendar-day-header {text-transform: none !important;font-weight: bold;} input { font-weight: normal !important; }
        select  { font-weight:normal !important}
        .pre-not-scrollable {  max-height:570px !important; min-height:570px !important;}
        body { margin-left:10px !important; margin-right:10px !important}
       .content-style { background-color: white}
       .table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td{padding: 3px !important;}
        .modal {left: 60% !important;width: 290px !important;}
        .modal {overflow-y: hidden!important;}
        .bootbox {height: 25% !important;}
        .modal.fade.in {top: 25% !important;}
        input,textarea
             {
              -webkit-box-shadow: inset 0 0px 0px rgba(0, 0, 0, 0.1) !important;
              box-shadow: inset 0 0px 0px rgba(0, 0, 0, 0.1) !important;
             }

        
    </style>
        <body viewsource="no">
        <!-----All hidden elements declare here------->
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/Theme.GIF" class="loading-indicator" style="display:none" />
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/Theme_Loading.GIF" class="loading-indicator" id="loading-indicator-please-wait" style="display:none" />
        <div id="maximiseddiv" style="width:900px;position:absolute;height:700px;z-index:90000;box-shadow:rgb(12, 53, 28) 0px 4px 11px 1px;background: whitesmoke;border-radius:5px;border-radborder: 3px solid #e8e8e8;display: none"></div>
        <!-----End Here------>
        <!----Header Section Start Here----->
        
        <div class="container-fluid" style="padding-left: 0px !important; padding-right:0px !important">
            <div class="col-lg-12" style="padding-left: 0px !important; padding-right:0px !important">
        <div id="top_menu_bar" style="display: none">
            <?php  
            // require_once("menus/top_menu_bar.php"); 
            //Till not use top menu bar if u need uncomment this
            ?>
        </div>
        <div id="menu-wrapper" class = "container-fluid">
            <!--- logo ---->
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/img/logo.png" width="115" height="100" style="float:left; padding: 5px;">  
            <!--ORGANIZATION Banner --->
            <div id="org_name_position" style="">
                <div id="slideshow_org_banner">
                    <div class="org_styling org_color">
                        <?php //$ArGetRult=Get_Org_Details::Find_Details('1');
                             // echo $ArGetRult[0]['NAME'];
                        ?> 
                    </div>
                </div>
            </div>
            <!---START TOP RIGHT  USER IMAGE-->
            <div id="menu">
                <div id="example_bottom" style="background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/images/manager_icon_small.png)"></div>
                    <div id="u_menu_content">
                        <div class="arrow-up"></div>
                            <div id="small_full_image_left">
                                <img class="img-circle" src="<?php echo Yii::app()->baseUrl;?>/images/prof_image3.jpg" width="100" height="119" style="padding:4px;" ></img>
                            </div>
                        <div id="small_contents_right">
                            <div id="inner_small_content">
                                <div style="  float: left; padding-top: 8px; color:rgb(133, 133, 133); font-size: 12px; font-weight: bold">
                                 <?php
                                 //Just for funny ####
                                    if(ucfirst(strtolower(Yii::app()->user->name))=="Rathilesh") 
                                        {
                                        ?>
                                            <img src="<?php echo Yii::app()->request->baseUrl;?>/css/images/star.png" style="margin-top:-4px">
                                            <?php echo ucfirst(strtolower(Yii::app()->user->name)); ?>

                                        <?php
                                        }
                                        else    {
                                                echo ucfirst(strtolower(Yii::app()->user->name));
                                                }
                                        ?>
                                </div>
                                <div style="  float: right; padding-top: 8px; color:rgb(133, 133, 133); font-size: 12px; font-weight: bold"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/cross_orange.png" width="16" style="cursor: pointer; padding-right: 5px; padding-right: 3px; margin-top: -6px;" id="cross_myaccount"></img></div>
                                <div style="padding-top: 2px; color:rgb(133, 133, 133);"><?php echo strtolower(Yii::app()->user->name);?>@loksolutions.biz</div>
<!--                                    <div id="view_account" style="margin-top: 17px;">
                                        View Profile
                                    </div>-->
                                <button type="button" class="btn btn-primary btn-mini">View Profile</button>
                            </div>
                        </div>
                        <div style="float: left; background-color: #f5f5f5; height: 31px; width: 100%;">
                            <a id="get_hover_signout" href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?site/logout" style="">
<!--                            <div id="sign_out_button">Sign Out</div>     -->
                                <button type="button" class=" pull-right btn btn-default btn-mini" style="margin-right:5px">Sign Out</button>
                            </a>
                        </div>
                    </div>
            </div>
            <!-- END  USER IMAGE-->
            <!----start notification icons---->
            <div id="icons_div_on_top" style="margin-top: 13px !important; ">
                <div style="width: auto; height: auto; float: left; margin-top: 3px ; margin-right: 4px";>
                    <img id="theme_selector" src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/theme-icon.png" width="25" height="25" align="right" title="Change Theme" style="cursor: pointer;">
                </div>
                <div id="u_theme_content" style="padding:6px;">
                    <div class="arrow-up"></div>
                    <table id="inside_table_dmenu">
                        <tr>
                            <td class="title_td">Choose Any Theme</td>
                            <td class="title_td" style="text-align: right"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/cross_orange.png" width="16" style="cursor: pointer; padding-right: 5px;" id="cross_theme"> </td>

                        </tr>
                        <tr class="d_menu_sub_tr">
                            <td colspan="2" class="dmenu_sub_td">
                                <?php 
                                 $get_theme_id="blue";
                                 $themebox_color="#4CA9D5";
                                    switch (Yii::app()->session['css_theme_rst']) {
                                       case "green":
                                           $get_theme_id="green";
                                           $themebox_color="#3DAC7D";
                                            break;
                                        case "black":
                                           $get_theme_id="black";
                                           $themebox_color="#B1B0B0";
                                            break;
                                        case "blue":
                                           $get_theme_id="blue";
                                           $themebox_color="#4CA9D5";
                                            break;
                                        case "D371A7":
                                           $get_theme_id="D371A7";
                                           $themebox_color="#D371A7";
                                            break;

                                        default:
                                            break;
                                    }
                                ?>
                                <div style="width: 280px;height: 150px; float:left">
                                    <div style="float: left; width: 100%; margin-bottom: 4px;"><span style="font-size:11px">Your Current Theme</span></div>
                                    <div class="theme_box" id="<?php echo $get_theme_id;?>" style="width:40px; height:33px; float:left; padding: 2px; border: 1px solid #DFDFDF; background-color:<?php echo $themebox_color;?>; -webkit-box-shadow: 0 8px 6px -6px black; -moz-box-shadow: 0 8px 6px -6px rgb(202, 197, 197); box-shadow: 0 8px 6px -6px rgb(111, 98, 98);">               
                                    </div>
                                    <div style="border-bottom:1px dashed #E8E8E8; padding-top:4px; float:left; width: 100%; padding-top:6px; padding-top: 7px; padding-bottom: 3px;"> </div>
                                    <div style="width:100%; float: left;height: 23px;"><span style="font-size:11px">More Available Themes</span></div>
                                    <?php if($get_theme_id<>"green") { ?>
                                    <div class="theme_box" id="green" style="width:40px; height:33px; float:left; padding: 2px; border: 1px solid #DFDFDF; background-color:#3DAC7D; -webkit-box-shadow: 0 8px 6px -6px black; -moz-box-shadow: 0 8px 6px -6px rgb(202, 197, 197); box-shadow: 0 8px 6px -6px rgb(111, 98, 98);">               
                                    </div>
                                    <?php }  if($get_theme_id<>"blue") { ?>
                                    <div class="theme_box" id="blue" style=" margin-left: 5px; width:40px; height:33px; float:left; padding: 2px; border: 1px solid #DFDFDF; background-color:#4CA9D5; -webkit-box-shadow: 0 8px 6px -6px black; -moz-box-shadow: 0 8px 6px -6px rgb(202, 197, 197); box-shadow: 0 8px 6px -6px rgb(111, 98, 98);">               
                                    </div>
                                    <?php } if($get_theme_id<>"black") { ?>
                                    <div class="theme_box" id="black" style=" margin-left: 5px; width:40px; height:33px; float:left; padding: 2px; border: 1px solid #DFDFDF; background-color:#B1B0B0; -webkit-box-shadow: 0 8px 6px -6px black; -moz-box-shadow: 0 8px 6px -6px rgb(202, 197, 197); box-shadow: 0 8px 6px -6px rgb(111, 98, 98);">               
                                    </div>
                                    <?php } if($get_theme_id<>"D371A7") { ?>
                                    <div class="theme_box" id="D371A7" style=" margin-left: 5px; width:40px; height:33px; float:left; padding: 2px; border: 1px solid #DFDFDF; background-color:#D371A7; -webkit-box-shadow: 0 8px 6px -6px black; -moz-box-shadow: 0 8px 6px -6px rgb(202, 197, 197); box-shadow: 0 8px 6px -6px rgb(111, 98, 98);">               
                                    </div>
                                    <?php } ?>
                                </div>           
                            </td>
                        </tr>
                    </table>
                </div>
                
                <div style="width: auto; height: auto; float: left; margin-top: 3px ; margin-right: 10px";>
                    <img class="bell" src="<?php echo Yii::app()->request->baseUrl; ?>/images/bell.png" width="25" height="25" align="right" style="cursor: pointer;">
                        <div style=" position: absolute; margin-left: 15px;">
                            <span style="font-size: 10px; color: white; padding: 2px; background-color: red; border-radius: 100%; cursor: pointer; font-weight: bold;">23</span>
                        </div>
                </div>

                <div style="width: auto; height: auto; float: left; margin-top: 0px; margin-right: 5px";>
                    <div style="width: auto; height: auto; float: left; margin-top: 3px";>
                            <img id="calendar_icon_small" class="vertical" src="<?php echo Yii::app()->request->baseUrl; ?>/images/calendar.png" width="25" height="25" align="right" style="cursor: pointer">
                        <div style=" position: absolute;margin-left: 18px;">
                            <span  style="font-size: 10px; color: white; padding: 2px; background-color: red; border-radius: 100%; cursor: pointer; font-weight: bold;">41</span>
                        </div>
                    </div>
                </div>

                <div style="width: auto; height: auto; float: left; margin-top: 0px; margin-right: 10px";>
                    <div style="width: auto; height: auto; float: left; margin-top: 0px";>
                    </div>
                </div>
            </div>
        <!------end notification------->
        </div>
        <div id="bottom_menu_bar" class = "container-fluid">
            <?php require_once("menus/bottom_menu_bar.php") ?>  
        </div>
        <!---Start Header--->   
        <!---New menu div--->
        <div id="MenuPageShow">
            <img id="MenuPageHide" src="<?php echo Yii::app()->request->baseUrl; ?>/images/cross.png" onclick="" style="position: absolute;cursor: pointer;top: 0%;right: 1px;" />
            <?php   include_once("menus/TreeMenu.php"); ?>
        </div>
        <!-- end--->
        <div id="header-wrapper">
            <div id="header"></div>
        </div>
        <!----End Header----->
        </div></div>
        <div class="container-fluid" style="margin-top:5px; padding-left: 0px !important; padding-right:0px !important; height: 40px !important">
           
            <div class="col-lg-12 content-style" style="padding-top:5px !important; height: 40px !important">
                <?php 
                $modelname_u_replace =str_replace('_', " ",$modelname);
                //echo $modelname_u_replace;
                 $Getlabelname=new Get_Labelname_Cls();
				 if($modelname_u_replace!= "bank view" ) {
				 	
				if($modelname_u_replace!= "bank branch view"){
					
				
                 if(($modelname_u_replace !== "site") ) {
				 	//echo "here"; exit;
                ?>
                <div  id="patternDiv" style="background-color: #FFFFFF !important; height: 25px">
                        <div class="note"> 
                           <div class="labelImage"></div>
                               <div class="LabelMsg">
                                    <p>
                                        <?php 
                                        
                                        if($modelaction=="subentity") {
                                           echo  $Getlabelname->Get_Labelname_Fnc("286");  
                                        } else {
                                        switch ($modelname_u_replace) {
                                            
                                               case 'entity':
                                                    //echo  $Getlabelname->Get_Labelname_Fnc("122");
													if( $modelaction == "create" )
															{
																echo  $Getlabelname->Get_Labelname_Fnc("122");
															}
													
												 	else 	{
																echo  $Getlabelname->Get_Labelname_Fnc("222");
															}
                                                    break;
                                            
                                                case 'party':
													
													if( $modelaction == "create" )
															{
																echo  $Getlabelname->Get_Labelname_Fnc("143");
															}
												 	else 	{
																echo  $Getlabelname->Get_Labelname_Fnc("213");
															}
                                                    break;
                                                 
                                                case 'entityOrganisation':
                                                    echo  $Getlabelname->Get_Labelname_Fnc("286");
                                                    break;
                                                
                                                case 'timemngt':
                                                    echo  $Getlabelname->Get_Labelname_Fnc("196");
                                                    break;
                                                
                                                case 'year n period':
												
													if( $modelaction == "create" )
															{
																echo  $Getlabelname->Get_Labelname_Fnc("197");
															}
												 	else 	{
																echo  $Getlabelname->Get_Labelname_Fnc("197");
															}
                                                    //echo  $Getlabelname->Get_Labelname_Fnc("197");
                                                    break;
                                               
                                                case 'qualification experience':
                                                   // echo  $Getlabelname->Get_Labelname_Fnc("221");
												   
												   if( $modelaction == "create" )
															{
																echo  $Getlabelname->Get_Labelname_Fnc("221");
															}
												 	else 	{
																echo  $Getlabelname->Get_Labelname_Fnc("219");
															}
												   
												   
                                                    break;
                                             
                                                case 'policy':
                                                    echo  $Getlabelname->Get_Labelname_Fnc("125");
                                                    break;
                                                
                                              
                                                
                                                case 'basic definition category':
												
												if( $modelaction == "create" )
															{
																echo  $Getlabelname->Get_Labelname_Fnc("221");
															}
												 	else {
															echo  $Getlabelname->Get_Labelname_Fnc("134");
														}
                                                    break;
                                                
                                                case 'hrlabel':
                                                    echo "HR Label";
                                                    break;
                                                
                                                case 'hrmessage':
                                                    echo "HR Message";
                                                    break;
                                                
                                                case 'basic definition':
                                                    echo  $Getlabelname->Get_Labelname_Fnc("133");
                                                    break;
                                                
                                                case 'holiday calendar':
                                                    if( $modelaction == "create" )
															{
																echo  $Getlabelname->Get_Labelname_Fnc("191");
															}
												 	else 	{
																echo  $Getlabelname->Get_Labelname_Fnc("191");
															}
                                                    break;
                                                
                                                case 'position':

													if( $modelaction == "create" )
															{
																echo  $Getlabelname->Get_Labelname_Fnc("284");
															}
												 	else 	{
																echo  $Getlabelname->Get_Labelname_Fnc("284");
															}
                                                   
                                                    break;
                                                
                                                case 'personnel v':
                                                    //$model=new Personnel_V;
                                                   
                                                    if( $modelaction == "create" )
															{
																echo "Personnel";
															}
                                                                                                                        if( $modelaction == "Edit" )
                                                                                                                        {
                                                                                                                            $id=$_REQUEST['id'];
                                               
                                                                                                                             $model=Personnel_V::model()->findByPk($id);
                                                                                                                             
                                                                                                                            
                                                                                                                           echo "Update  Personnel -".$model->SALUTATION."   ".$model->PREFERRED_NAME; ?>
     </p> 
<!--                                                                                                                            <script>
                                                                                                                            $('.note').hide();  
                                                                                                                            </script>-->
                                                                                                                        <?php }
												 	else if( ($modelaction != "create" )&&($modelaction != "Edit"))	{
																echo  "Manage Personnel";
															}
                                                    break;
													
													
                                                    
                                                 case 'entity type':
                                                     echo  $Getlabelname->Get_Labelname_Fnc("280");
                                                    break;
													
                                                
                                                default :
                                                    echo "User Roles";
                                                
                                                
                                                
                                                
                                                
                                        }  
										
										
										}  
										
										}  
										
										
										
										
										
										
										}
                                        
                                        ?>
                                    </p>
                                </div>
                        </div>
                </div>
				
				
				
            </div>
            <?php } ?>
            <div class="col-lg-12 content-style pre-not-scrollable" style="padding-top:5px !important;">
                        
                 <?php require_once("help_box/help_box_with_menu.php"); ?>   

                 <?php echo $content; ?>
                
                 <div id="sidebar2" style="visibility: hidden; position: absolute" >
                                <!---Start Here Tree menu [include js and css]-->   
                                <div id="modal">
                                    <img id="Navigate_Right_Icon" src="<?php echo Yii::app()->request->baseUrl; ?>/images/cross.png" onclick="js:$.pageslide.close()" style="position: absolute;cursor: pointer;top: 0%;right: 1px;" />
                                </div>
                </div>
            </div>     
        </div>
         <!-----Focus after popup-------->
        <input type="hidden" id="focus_object" value="">
        <!------------->
        <p id="getcontentonhelp" style="display:none"></p>
        
        <!-- BEGIN FOOTER -->
        
        
        <div id="footer">
      <div class="container-fluid">
        <!--<p>Copyright &copy; <?php echo date('Y')?> <a href="http://www.loksolutions.biz/" target="_blank"></a> Software Technologies Limited. All Rights Reserved.</p>-->
      </div>
    </div>
        
        
        
        
        
        
        
<!--        <div id="footer">
        <script type="text/javascript">
        //code for minimizable dialog box 
        //     $(function(){   
        //         // alert($("#button-maximize").is(":checked"));
        //          // click to open dialog
        //           $("#new-dialog").click(function(){
        //             //dialog options
        //             var dialogOptions = {
        //               "title" : "dialog@" + new Date().getTime(),
        //               "width" : 400,
        //               "height" : 300,
        //               "modal" : false,
        //               "resizable" : true,
        //               "draggable" : true,
        //               "close" : function(){
        //                 if(last[0] != this){
        //                   $(this).remove(); 
        //                 }
        //               }
        //             };
        //             if ( $("#button-cancel").is(":checked") ) {
        //               dialogOptions.buttons = { "Cancel" : function(){ $(this).dialog("close"); } };
        //             }
        //             // dialog-extend options
        //             var dialogExtendOptions = {
        //               "closable" : true,
        //               "maximizable" : true,
        //               "minimizable" : true,
        //               "minimizeLocation" : "right",
        //               // "collapsable" : true,
        //               // "dblclick" : $("#my-form [name=dblclick]:checked").val() || false,
        //               // "titlebar" : $("#my-form [name=titlebar]:checked").val() || false
        //             };
        //             $("#my-form [name=icon]").each(function(){
        //               if ( $(this).find("option:selected").html() != "(default)" ) {
        //                 dialogExtendOptions.icons = dialogExtendOptions.icons || {};
        //                 dialogExtendOptions.icons[$(this).attr("rel")] = $(this).val();
        //               }
        //             });
        //             // open dialog
        //             last = $("<div />").dialog(dialogOptions).dialogExtend(dialogExtendOptions);
        //           });
        //      });

         </script>
            <button type="button" id="new-dialog">New dialog</button> 
            <p>Copyright &copy; <?php echo date('Y')?> <a href="http://www.loksolutions.biz/" target="_blank"></a> Software Technologies Limited. All Rights Reserved.</p>
            -- click link for zebra  dialog -
            <a href="javascript:void(0)" id="example1">here</a>
        </div>-->
        <!-- END FOOTER -->
    </body>
        <!---All Scripts Goes Here -->
        <!--<script src="<?php //echo Yii::app()->request->baseUrl; ?>/assets/Form_Wizard/formwizard.js" type="text/javascript"></script>-->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/SrollBar/jquery.mousewheel.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/SrollBar/js/uncompressed/jquery.mCustomScrollbar.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jquery.mousewheel.js"></script> 
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jquery.maskedinput.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/tree/jquery.cookie.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/tree/jquery.treeview.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/tree/demo.js"></script>    
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jquery.pageslide.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jquery.nicescroll.min.js"></script>
        <!--<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/event_calendar/js/jquery.eventCalendar.js" type="text/javascript"></script>-->
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jquery.slimscroll.js"></script> 
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/custom_jquery/validation_v1.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jquery.dialogextend.js"></script>

        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/zebra/public/javascript/zebra_dialog.js"></script>
        
        <script type="text/javascript">
        var alertformat="*@"; // set special charactor for  seperate strings ... it use in alert message
        $(document).ready(function(){     
        //zebra dialog 
//         $('#example1').bind('click', function(e) {
//                e.preventDefault();
//                $.Zebra_Dialog('<strong>Zebra_Dialog</strong>, a small, compact and highly configurable dialog box plugin for jQuery');
//        });
        // end zebra
            
        $( "#events_calender_pop" ).draggable();       
            $('#calendar_icon_small').click(function ()
                {
                    $("#events_calender_pop").show();
                });
        //code for hide menu div on outside click
        $(document).mouseup(function (e)
        {
            var container   =   $("#MenuPageShow");
                if (!container.is(e.target) // if the target of the click isn't the container...
                        && container.has(e.target).length === 0) // ... nor a descendant of the container
                    {
                        container.fadeOut(1000);
//                           container.animate({right: "-400px",opacity:"0"}, 300);
//                           container.hide("1000"); 
                    }
        });
                //
        var GetInnerContent = $("#help_inner_content").html();  //get contents on help box ---- for get default order        
        //define jquery scroll for the class of scroll-pane   
        $(".scroll-pane").niceScroll({cursorborder:"#ff0",cursorcolor:"#DEDEDE",boxzoom:false,autohidemode:false,scrollspeed:150,cursorwidth:6}); 
        //declare tree menu 
        $("#tree").treeview({
				collapsed: true,
				animated: "medium",
				control:"#sidetreecontrol",
				persist: "location"
			});
        //code for showing tree menu div 
        $(".link-wrap").click(function(){  
            $("#MenuPageShow").show();
            $("#MenuPageShow").animate({right: "0px",opacity:"1"}, 300);
            });
        $("#MenuPageHide").click(function(){ 
            $("#MenuPageShow").animate({right: "-400px",opacity:"0"}, 300);
            $("#MenuPageShow").hide("1000"); 
            });
        //end tree menu outer div jquery code 
        //theme style sheet changer code -start
        $( ".theme_box" ).bind( "click", function() {  
        var Theme_name=this.id;
        $.ajax(
            {
                url: "<?php echo Yii::app()->createUrl("ajax_request/theme_management"); ?>",
                data: { THEME: Theme_name,UserID:<?php echo Yii::app()->user->id ?>},
                beforeSend:function (){
                $('.loading-indicator').show();
                },
                success: function (result) 
                        {
                        $('.loading-indicator').hide();
                        location.reload();
                        }
            });         
            });
            //theme style sheet changer End
            
            //Add and Manage Icons Top
            <?php
            if($modelname=="bank_view") {
            $create_link=Yii::app()->request->baseUrl."/index.php/".$modelname."/create";
            $admin_link=Yii::app()->request->baseUrl."/index.php/bank_branch_view/admin";   
            }
            elseif($modelname=="bank_branch_view") {
            $create_link=Yii::app()->request->baseUrl."/index.php/bank_view/create";
            $admin_link=Yii::app()->request->baseUrl."/index.php/bank_branch_view/admin"; 
            }
            elseif($modelname=="policy") {
            $create_link=Yii::app()->request->baseUrl."/index.php/policy/create";
            $admin_link=Yii::app()->request->baseUrl."/index.php/policy/create?manage=1"; 
            }

            elseif($modelname=="timemngt") {
            $create_link=Yii::app()->request->baseUrl."/index.php/timemngt/create";
            $admin_link=Yii::app()->request->baseUrl."/index.php/timemngt/create?manage=1"; 
            }

            else {
            $create_link=Yii::app()->request->baseUrl."/index.php/".$modelname."/create";
            $admin_link=Yii::app()->request->baseUrl."/index.php/".$modelname."/admin";
            }
            
            ?>
            $("#patternDiv").append("<div id='sss' style='float:right; width:215px; height:25px; text-align:right'>  <a href='#' onclick='js:history.go(-1); return false;' data-toggle='tooltip' title='Back' class='btn btn-info btn-mini' style='margin-right:5px;'><i style='padding-right:3px' class='icon-white icon-backward'></i><b>Back</b></a>  <a href='<?php echo $create_link; ?>' data-toggle='tooltip' title='Create New' class='btn btn-success btn-mini' style='margin-right:5px;'><i class='icon-white icon-plus-sign'></i><b>Create</b></a><a href='<?php echo $admin_link; ?>' data-toggle='tooltip' title='Manage' class='btn btn-success btn-mini'><i class='icon-white icon-cog'></i><b>Manage</b><a></div>");
            //tooltip code
            $("input[type=text]").dblclick(function()
            {
                var valueoftooltip =$(this).val();
                if(valueoftooltip!="")
                 {
                    $("#"+$(this).attr("id")).after("<div class=tooltip-style id=tooltip-"+$(this).attr("id")+" style=display:block;>"+$(this).val()+"<div id=tooltip-pointer></div></div>");
                    $("#tooltip-"+$(this).attr("id")).animate({opacity: 1.0}, 3000).fadeOut("slow");
                 }
            });

            //code for fixed header after scroll down--- start
//            $(window).bind("scroll",function(e){
//                if($(document).scrollTop() > 120) //
//                {
//                    $("#top_menu_bar").addClass("somecloass");
//                    $("#bottom_menu_bar").addClass("somecloass_bottom");
//                } else {
//                    $("#top_menu_bar").removeClass("somecloass");
//                    $("#bottom_menu_bar").removeClass("somecloass_bottom");
//                }
//            });
            //end
            
            
            //code for single dropdown menu - top 
            $("#example_bottom").click(function(){
            //alert("clicked");
                if ($('#u_menu_content').css('display') == 'none') {
            $("#u_menu_content").fadeIn("1000");
                }
                else {
                    $("#u_menu_content").fadeOut("1000");
                }

            });
            $("#cross_myaccount").click(function(){
                $("#u_menu_content").fadeOut("1000");
            });
            
            
            $("#theme_selector").click(function(){
            //alert("clicked");
                if ($('#u_theme_content').css('display') == 'none') {
            $("#u_theme_content").fadeIn("1000");
                }
                else {
                    $("#u_theme_content").fadeOut("1000");
                }

            });
            //theme selection div close code
            $("#cross_theme").click(function(){
                $("#u_theme_content").fadeOut("1000");
            });
            
            
            $('a[href*=#]:not([href=#]):not(".ui-tabs-anchor"):not(#sidetreecontrol a)').click(function(event){
            event.preventDefault();
            $("#Help_Box_2").show();
            $("#Help_Box1").show();
            var id=$(this).attr('href');
            $(".help_box_section").not(id).insertAfter(".help_box_section"+id);
            $('#Help_Box1').animate({scrollTop:0});
            return false;
        });
        
        
        
        
         $('#b0-link').click(function(){
//         alert(divClone); 
//         e.preventDefault();
        //$('#Help_Box1').animate({scrollTop:'#Shortname1'}, 500, 'linear');
        $('#Help_Box_2').fadeIn(1000);
        //$("#getcontentonhelp").text();
        $("#help_inner_content").html(GetInnerContent);
        $('#Help_Box1').fadeIn('slow');
       
//         $(".help_box_section").show();  
           return false;
        //$('#Help_Box1').animate({scrollTop:target_top}, 1500, 'easeInSine');
//       var id=$(".help_box_section:first").attr('id');
//       var target=$("#"+id).offset().top;
//       $('#Help_Box1').scrollTop(target);
//        $("#Help_Box1 body").animate({top:0},1000);
//      return false;
//                $($(this).attr('href')).get(0).scrollIntoView();
//                $("body").animate({top:0},1000);
//                return false; 
      
    });
    $('#clickid1').click(function(){
        
    
        $('#Help_Box_2').fadeOut(1000);
        $('#Help_Box1').fadeOut(1000);
//        var id=$(".help_box_section:first").attr('id');
//       $('#Help_Box1').scrollTop($("#"+id).offset().top);

    });
        //(function($) {
    $.fn.has_scrollbar = function() {
        $.fn.hasScrollBar = function() {
        return this.get(0).scrollHeight > this.height();
    }
    }
//})(jQuery);

   
//****REMOVE NAVIGATIONS IN iFRAME*****
   $('iframe').load(function() {
//     alert(this.id);
           $('iframe').contents().find('#menu-wrapper,.link-wrap,.breadcrumb_left-small,#bottom_menu_bar,#patternDiv,#footer').hide();  
         //  $('iframe').contents().find("#page").css("width","auto !important");
 //          Iframe.$('#page').style.width="auto !important";
     $('iframe').contents().find("#page")
           .append($("<style type='text/css'>  #page{width:auto !important;margin-top:0px !important}  </style>"));
        });
//************************************


      }); 
        


    function GetStaticAlert(id,action)
    {       
         $.ajax({  
               type: "POST",
                async: false,
               url: "<?php echo $this->createUrl('ajax_request/Get_Message_Fnc')?>", 
               data:{term:id},          

               success: function(msg){
                    if(action==null)
                        {
                        openalert(msg); 
                        returnValue=false;
                        }
                    else
                        {
                       openalert(msg,action); 
                       returnValue=false;
                        }
               },
           }); 
    return returnValue;    
    }
    
    function GetDynamicAlert(id,arg)
    {       
        $.ajax({  
           type: "POST",
           async: false,
           url: "<?php echo $this->createUrl('ajax_request/Get_DynamicMessage_Fnc')?>", 
           data:{term:id,param:arg},          
          
           success: function(msg){ 
      
                openalert(msg);
                returnValue=false;
           },
       });    
      return returnValue;
    }
 
    </script>
</html>
<?php } ?>