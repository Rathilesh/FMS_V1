<?php
/**
 * Created by Â® â„›aThIlEsH Â®
 * User: mini
 * Date: 23/12/13
 * Time: 12:19 PM
 * To change this template use File | Settings | File Templates.
 */
?>
<div style="float: right; margin-right: 2px; font-size: 11px; color: rgb(167, 136, 136); line-height: 22px">
     <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/logout">Logout
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logout.png" height="12" width="12"  title="Logout" style="padding: 1px;">
     </a></div>
<div style="float: right; margin-right: 10px; font-size: 11px; color: rgb(167, 136, 136); line-height: 22px">Welcome : <b>
    
    <?php 
    //Just for funny ####
    if(ucfirst(strtolower(Yii::app()->user->name))=="Rathilesh") {
       ?>
        <img src="<?php echo Yii::app()->request->baseUrl;?>/css/images/star.png" style="margin-top:-4px">
        <?php echo ucfirst(strtolower(Yii::app()->user->name)); ?>
            
            <?php
    }
    else {
    echo ucfirst(strtolower(Yii::app()->user->name));
    }
    ?>
    </b></div>

<style>

</style>
<div id="bottom_menu_icon" style="float: right; width: auto; height: 23px; margin-right: 10px; vertical-align: top">
    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/favorites_icon/1.png"  alt="">
    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/favorites_icon/2.png" alt="">
    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/favorites_icon/3.png"  alt="">
    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/favorites_icon/4.png" alt="">
    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/favorites_icon/4.png"  alt="">
    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/favorites_icon/4.png"  alt="">
    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/favorites_icon/4.png" alt="">
    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/hint1.png"   title="Help" id="b0-link">
</div>
<ol class="breadcrumb_left-small">
    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/page?view=about"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/home.png"  height="14" width="14"  title="Home" style=" padding: 0px; margin-top: -2px;"> </a></li>
    <?php if($modelname<>"site") { ?>
    <li><a href="#"><?php
    $modelname_u_replace =str_replace('_', " ",$modelname);
    
    if($modelname_u_replace=="bank branch view" || $modelname_u_replace=="bank view")
        $modelname_u_replace="Bank - Branch";
     if($modelname_u_replace=="personnel v")
        $modelname_u_replace="Personnel";

if($modelname_u_replace=="timemngt") 
        $modelname_u_replace="Time Management Activity";

   
    echo ucwords($modelname_u_replace);
    ?></a></li>
    <?php  
    
    if(isset($_GET['manage'])=="1" || $modelaction=="admin")    
        $modelaction="Manage"; 
     if(isset($_GET['update'])=="1" || $modelaction=="update")    
        $modelaction="Edit"; 
    ?>
        <li class="current_btab"><a href="#"><?php echo ucfirst($modelaction); ?></a></li>
        <!--                <li class="current_btab"><a href="#">Options</a></li>-->
    <?php } ?>
</ol>