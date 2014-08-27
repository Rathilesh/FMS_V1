/**
 * Created with JetBrains PhpStorm.
 * Created By: Rathilesh
 * Date: 23/12/13
 * Time: 11:45 AM
 * To change this template use File | Settings | File Templates.
 */
$(document).ready(function(){
    //popover for user account
    $("[rel='popover']").popover({
        placement : 'bottom', // top, bottom, left or right
        title : 'My Settings  <a class="close" href="#");">&times;</a>',
        html: 'true',
        content : '<div class="msg" style="width:auto;"><table id="popovertable" style="margin-bottom:.1em !important ;"><tr><td>Change Password</td></tr><tr><td><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/logout">Logout</a></td></tr><table></div>'
    });
    $(document).click(function (e) {
        if ($(e.target).is('.close')) {
            $("[rel='popover']").popover('hide');
        }
    });

    //popover end
    //Add and Manage Icons Top
    $("#patternDiv").append("<div style='float:right; width:200px; height:36px; text-align:right'><a href='<?php echo Yii::app()->request->baseUrl."/index.php/".$modelname?>/create' data-toggle='tooltip' title='Create New'><img src=\"<?php echo Yii::app()->request->baseUrl; ?>/images/add_user.png\" width=\"32\" height=\"32\"></a><a href='<?php echo Yii::app()->request->baseUrl."/index.php/".$modelname?>/admin' data-toggle='tooltip' title='Manage'><img src=\"<?php echo Yii::app()->request->baseUrl; ?>/images/edit_user.png\" width=\"32\" height=\"32\" style=\"padding-left:10px;\"><a></div>");
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
    //start Add new Button [ OLD STYLE  BUT GOOD ANIMATION]
//            $(".wheel-button").wheelmenu({
//                trigger: "hover",
//                animation: "fly",
//                animationSpeed: "fast"
//            });
    //end Add new Button  [ OLD STYLE  BUT GOOD ANIMATION]
//code for slide show -- orgbanner
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
        if($(document).scrollTop() > 50) //
        {
            //alert("scroll downe...");
            //$("#Help_Box1").show();
            //$("#top_menu_bar").show(1000);
            $("#top_menu_bar").addClass("somecloass");
            $("#bottom_menu_bar").addClass("somecloass_bottom");
            //Set content B to header
        } else {
            $("#top_menu_bar").removeClass("somecloass");
            $("#bottom_menu_bar").removeClass("somecloass_bottom");
            //alert("Normal Position ");
            //$("#Help_Box1").hide();
            //$("#top_menu_bar").css({ position: "none",z-index: ""; })
            //Set content A to header
        }
    });
    //end

});

///add some animation on scroll

//        function scroll_to(div){
//            $('#Help_Box1').animate({
//                scrollTop: $(div).offset().top
//            },1000);
//        }
