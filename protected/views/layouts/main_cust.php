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
    </head>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/login_style_v1.css" />
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jquery-1.4.1.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jQueryRotate.js"></script>
        <!-- Custom jquery scripts -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/custom_jquery.js" type="text/javascript"></script>
        <!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jquery.pngFix.pack.js" type="text/javascript"></script>
        <script type="text/javascript">
            //javascript code for Rotate Logo in Login Page
                $(document).ready(function()
                {
                $(document).pngFix( ); //call function , for png image fix in IE
            //code for Rotating Logo Image
                var angle = 0;
                setInterval(function()
                    {
                    angle+=3;
                    $("#image1").rotate(angle);
                    },50);
                }           );

            //End here, Code for Rotate Logo in Login Page

        </script>
        <body id="login-bg">
            <div id="left-cont-login" >
                <table width="860" border="0">
                    <tr>
                        <td class="left-cont-login-inner" width="416" align="center" >
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/login/rotate.png"  alt=""  id="image1" style="position:absolute; margin-top:32px; " />
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/login/l_hrms.png" width="250" height="106" alt="" id="image" align="center" />
                            <br />
                            <br />
                            <!---left content---->
                            <p>
                                eHORIZON HRMS delivers comprehensive HR capabilities, from workforce management to compensation and talent management. Extensive business process automation and rich self service capabilities enable HR teams to perform value added services while reducing operational costs. eHorizon HRMS comprise an array of features, and the powerful reporting and analysis capabilities that an organization needs to manage the workforce.</p><br />
                            <p>
                                The System transforms HR practices from administrative  to strategic.  It automates common  administrative tasks, and leverages industry best practices to enable strategic management, along with efficient administration.
                            </p><br />
                            <!---left content---->
                        </td>
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
<?php } else {

    ?>
    <?php
    
    
    $modelname = Yii::app()->controller->id;
     $modelaction = Yii::app()->controller->action->id;
     //echo "<h1>".$modelname."--------".$modelaction."</h1>";
    //Calling  Bootstrap CSS Framework
    echo Yii::app()->bootstrap->init();//Yii::app()->language = 'zh-cn';
    $this->widget('application.extensions.PNotify.PNotify',
            array( 
                'message'=>'Some Information Showing Here After Login'
                ),
            $_default_options=array(
            'width'=>'700px',
                   'title_escape'=>false,
                    'text'=>false,
                                )
    );
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
        <link id="change_theme" rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/theme_changer/<?php echo trim(Yii::app()->session['css_theme_rst']) ?>.css" /> </link> 
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.pageslide.css" /> </link>
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/tree/jquery.treeview.css"></link>
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>
    <style>
        .table { width: auto; float:left}
    </style>
        <body viewsource="no">
        <div id="top_menu_bar" style="display: none">
            <?php  
            require_once("menus/top_menu_bar.php"); 
            //Till not use top menu bar
            ?>
        </div>
        <div id="menu-wrapper">
            <!--- logo ---->
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/img/logo.png" width="115" height="100" style="float:left; padding: 5px;">  
            <!--ORGANIZATION Banner --->
            <div id="org_name_position" style="">
                <div id="slideshow_org_banner">
<!--                    <div>-->
<!--                    <img src="--><?php //echo Yii::app()->request->baseUrl; ?><!--/images/organization_banner/org1/banner1.jpg" alt="" class="active" />-->
<!--                    </div>-->
<!--                    <div>-->
<!--                    <img src="--><?php //echo Yii::app()->request->baseUrl; ?><!--/images/organization_banner/org1/banner2.jpg" alt="" />-->
<!--                    </div>-->
<!--                    <div>-->
<!--                    <img src="--><?php //echo Yii::app()->request->baseUrl; ?><!--/images/organization_banner/org1/banner3.jpg" alt="" />-->
<!--                    </div>-->
<!--                    <div>-->
<!--                        Pretty cool eh?-->
<!--                    </div>-->
                    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="468" height="75">
                        <param name="movie" value="<?php echo Yii::app()->request->baseUrl; ?>/images/flashvortex.swf" />
                        <param name="quality" value="best" />
                        <param name="menu" value="true" />
                        <param name="allowScriptAccess" value="sameDomain" />
                        <embed src="<?php echo Yii::app()->request->baseUrl; ?>/images/flashvortex.swf" quality="best" menu="true" width="468" height="75" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" allowScriptAccess="sameDomain" />
                    </object>
                </div>

            </div>

            <!---START TOP RIGHT  USER IMAGE-->
            <div id="menu">
                <div id="example_bottom" style="background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/images/prof_image1.jpg)">
                </div>
                
                <div id="u_menu_content">
                    <div class="arrow-up"></div>
                    <table id="inside_table_dmenu">
                        <tr>
                            <td class="title_td">My Account</td>
                            <td class="title_td" style="text-align: right"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/cross_orange.png" width="16" style="cursor: pointer; padding-right: 5px;" id="cross_myaccount"> </td>

                        </tr>
                        <tr class="d_menu_sub_tr">
                            <td class="dmenu_sub_td">Change Password</td><td  style="text-align: right" class="dmenu_sub_td"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/lock.png" style="padding-right: 5px;"> </td>

                        </tr>
                        <tr class="d_menu_sub_tr">
                            <td class="dmenu_sub_td"><a id="text_color" href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?site/logout">Logout</a> </td><td  style="text-align: right" class="dmenu_sub_td"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logout.png"  style="padding-right: 5px;"> </td>

                        </tr>

                    </table>
                </div>
            </div>
            <!-- END  USER IMAGE-->


            <!----start notification icons---->
            <div id="icons_div_on_top" style="margin-top: 13px !important; ">
                <div style="width: auto; height: auto; float: left; margin-top: 3px ; margin-right: 4px";>
                <img id="theme_selector" src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/theme-icon.png" width="25" height="25" align="right" title="Change Theme" style="cursor: pointer;">
                </div>
                
                <div id="u_theme_content">
                    <div class="arrow-up"></div>
                    <table id="inside_table_dmenu">
                        <tr>
                            <td class="title_td">Choose Any Theme</td>
                            <td class="title_td" style="text-align: right"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/cross_orange.png" width="16" style="cursor: pointer; padding-right: 5px;" id="cross_theme"> </td>

                        </tr>
                        <tr class="d_menu_sub_tr">
                            <td colspan="2" class="dmenu_sub_td">
                                <span class="theme_box" id="D371A7"><div id="box_D371A7"></div></span>
                                <span class="theme_box" id="green"><div id="box_green"></div></span>
                                <span class="theme_box" id="blue"><div id="box_blue"></div></span>
                                
                                <!--<span style="margin-right:5px; float: right;"><a href="#"  id="activate_theme" onclick="doSomething(); return false;" class="btn btn-info btn-mini"><i class="icon-white icon-thumbs-up"></i> Activate</a>-->
                               
                                <!--</span>-->
                                
                            </td>
                            <!--<td  style="text-align: right" class="dmenu_sub_td"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/lock.png" style="padding-right: 5px;"> </td>-->

                        </tr>
<!--                        <tr class="d_menu_sub_tr">
                            <td class="dmenu_sub_td"><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?site/logout">Logout</a> </td><td  style="text-align: right" class="dmenu_sub_td"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logout.png"  style="padding-right: 5px;"> </td>

                        </tr>-->

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
            <img class="vertical" src="<?php echo Yii::app()->request->baseUrl; ?>/images/calendar.png" width="25" height="25" align="right" style="cursor: pointer">
            <div style=" position: absolute;margin-left: 18px;">
                <span  style="font-size: 10px; color: white; padding: 2px; background-color: red; border-radius: 100%; cursor: pointer; font-weight: bold;">41</span>
            </div>
        </div>
        </div>

        <div style="width: auto; height: auto; float: left; margin-top: 0px; margin-right: 10px";>
        <div style="width: auto; height: auto; float: left; margin-top: 0px";>

        <!--                    <img rel='popover' src="--><?php //echo Yii::app()->request->baseUrl; ?><!--/images/user_small.png" width="20" height="20" align="right" style="cursor: pointer">-->
        </div>
        </div>

        </div>

        <!----end notification------->

        </div>
        <div id="bottom_menu_bar">
            <?php require_once("menus/bottom_menu_bar.php") ?>
             
            
        </div>
        <!-------Start Header--------->
        <div id="header-wrapper">
            <div id="header"></div>
        </div>
        <!----End Header----->
        <div id="wrapper">
            <div id="page">
                <?php require_once("help_box/help_box_with_menu.php"); ?>
                <div id="page-bgtop">
                    <div id="page-bgbtm">
                        <div id="contentnew">
                             <?php echo $content; ?>
                                <div style="clear: both;">&nbsp;</div>
                        </div>
                        <div id="sidebar2" style="visibility: hidden; position: absolute" >
                                <!---Start Here Tree menu [include js and css]-->
                                
                                <div id="modal">
                                    <img id="Navigate_Right_Icon" src="<?php echo Yii::app()->request->baseUrl; ?>/images/cross.png" onclick="js:$.pageslide.close()" style="position:absolute; cursor: pointer;left: -10px; top: -2%;" />
                                        <!----Including And Displaying Tree menu----->
                                        <!--<div id="treecontrol"><a href="?#">Collapse All</a> | <a href="?#">Expand All</a></div>-->
                                        <?php   include_once("menus/TreeMenu.php"); ?>
                                        <!----End here Including And Displaying Tree menu----->
                                    </div>
                       </div>
          
                  </div>
                        <div style="clear: both;">&nbsp;</div>
            </div>
                </div>
            </div>
        </div>
        <!-- BEGIN FOOTER -->
        <div id="footer">
            <p>Copyright &copy; <?php echo date('Y')?> <a href="http://www.loksolutions.biz/" target="_blank">LOK Solutions</a> Private Limited. All Rights Reserved.</p>
        </div>
        <!-- END FOOTER -->
    </body>
        <!---All Scripts Goes Here -->
        <!--<script src="<?php //echo Yii::app()->request->baseUrl; ?>/assets/Form_Wizard/formwizard.js" type="text/javascript"></script>-->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/SrollBar/jquery.mousewheel.js" type="text/javascript"></script>
        <!--<script src="<?php //echo Yii::app()->request->baseUrl; ?>/assets/SrollBar/perfect-scrollbar.js"></script>-->
        <!--<script type="text/javascript" src="<?php //echo Yii::app()->request->baseUrl; ?>/assets/js/jquery.wheelmenu.js"></script>-->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jquery.maskedinput.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/tree/jquery.cookie.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/tree/jquery.treeview.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/tree/demo.js"></script>    
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jquery.pageslide.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            //Call sliding tree menu div 
            $(".second").pageslide({ direction: "left", modal: false });
            //End sliding tree menu 
            //theme style sheet changer code -start
            $(".theme_box").click(function(){     
            var Theme_name=this.id;
            $.ajax(
                {
                url: "<?php echo Yii::app()->createUrl("ajax_request/theme_management"); ?>",
                //type: "POST",
                data: { THEME: Theme_name,PID:<?php echo Yii::app()->user->id ?>},
                success: function (result) 
                        {
                        location.reload();
                        }
                });         
                                             });
            //theme style sheet changer End
            //Add and Manage Icons Top
            $("#patternDiv").append("<div style='float:right; width:200px; height:25px; text-align:right'><a href='<?php echo Yii::app()->request->baseUrl."/index.php/".$modelname?>/create' data-toggle='tooltip' title='Create New' class='btn btn-success btn-mini' style='margin-right:5px;'><i class='icon-white icon-plus-sign'></i>Create</a><a href='<?php echo Yii::app()->request->baseUrl."/index.php/".$modelname?>/admin' data-toggle='tooltip' title='Manage' class='btn btn-success btn-mini'><i class='icon-white icon-cog'></i>Manage<a></div>");
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
            //tooltip end
            //code for slide show -- OrgBanner- Menu Wrapper Div
            $("#slideshow_org_banner > div:gt(0)").hide();
            setInterval(function() {
                $('#slideshow_org_banner > div:first')
                    .fadeIn(1000)
                    .next()
                    .fadeOut(1000)
                    .end()
                    .appendTo('#slideshow_org_banner');
            },  3000);

            //end slide show code  -- orgbanner

            //code for fixed header after scroll down--- start
            $(window).bind("scroll",function(e){
                if($(document).scrollTop() > 120) //
                {
                    $("#top_menu_bar").addClass("somecloass");
                    $("#bottom_menu_bar").addClass("somecloass_bottom");
                } else {
                    $("#top_menu_bar").removeClass("somecloass");
                    $("#bottom_menu_bar").removeClass("somecloass_bottom");
                }
            });
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
            $("#cross_theme").click(function(){
                $("#u_theme_content").fadeOut("1000");
            });
        //$("#example_bottom").popover({placement:'bottom',container:'#page-bgtop'});
        
        
        
         
        
        
        });  
        
       $("#activate_theme").click(function(event) {
            (event).preventDefaoult();
            alert("hai");
//            $.ajax({
//                    type: "POST",
//                    url: "some.php",
//                    data: { name: "John", location: "Boston" }
//                  })
//                    .done(function( msg ) {
//                      alert( "Data Saved: " + msg );
//                    });
        });
        
        
    </script>
</html>
<?php } ?>