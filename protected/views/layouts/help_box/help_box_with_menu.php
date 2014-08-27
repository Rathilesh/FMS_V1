<?php
/**
 * Created by  ® ℛaThIlEsH ®
 * Date: 23/12/13
 * Time: 12:52 PM
 * To change this template use File | Settings | File Templates.
 */

?>          
<!-------Start Tree Menu Icon------>
                <div style="position: fixed;bottom: 0;top: 242px;right: 0; z-index:10">
                    <div class="link-wrap">
<!--                     <a href="" class="second">-->
                     <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/navigate_left.png" />
                    <!--</a>-->
                    </div>
                </div>
            <!-------End Start Tree Menu Icon------>
            <!------------Help Icon ------------->
                <div class="bottom-push">
                </div>
                 <?php //Allow drag for Help box1
                    $this->beginWidget('zii.widgets.jui.CJuiDraggable',array(
                        'options'=>array(
                            'scope'=>'wrapper',
                            'cursor' => 'move',
                        ),
                    ));
                ?>
<div class='Help_Box_Style1 ' id='Help_Box1' style="overflow-y: scroll">
    <!-----data of help ------->
    <div id="help_inner_content" >
        <?php 
            // $condition="upper(ABOUT)='".trim(strtoupper($modelname))."'";
            // $Help_Desc=  Help::model()->findAll($condition);
            // foreach ($Help_Desc as $key => $Help_val) {
            //    echo "<div id='".$Help_val->TAG."' class='help_box_section'>";
            //    echo "<span class='help_box_section_span'>".$Help_val->TITLE."</span>";
            //    echo $Help_val->DESCRIPTION;
            //    echo "</div>";
            // }
         
        ?>
<!--        <div id="content-1" class="content">
        <p id="c1">Consectetur adipiscing elit. Nulla consectetur libero consectetur quam consequat nec tincidunt massa feugiat. Donec egestas mi turpis. Fusce adipiscing dui eu metus gravida vel facilisis ligula iaculis. Cras a rhoncus massa. Donec sed purus eget nunc placerat consequat.</p>
        </div>-->
        </div>
    <!-----data of help end------->
</div>
<?php
$this->endWidget();
$this->beginWidget('zii.widgets.jui.CJuiDraggable',array(
    'options'=>array(
        'scope'=>'wrapper',
        //'revert' => 'invalid',
        'cursor' => 'move',
    ),
));
?>
<!----------2nd box----------->
<div class="Help_Box_Style2" id="Help_Box_2" >
    <table>
        <tr>
            <td align="right" style="text-align: right"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/Error-icon.png" id="clickid1" style="cursor: pointer"></td>
        </tr>
    </table>
    <table>
        <tr>
            <td style="background-color: #E8E8E8; color: #09f; text-align: center; font-weight: bold">
              Contents
            </td>
        </tr>
    </table>
    <ul>
         <?php 
         // foreach ($Help_Desc as $key => $Help_val) {  
         // if(trim($Help_val->TITLE)<>"" && trim($Help_val->TAG)<>"" ) {   
         ?>
        <li class="scroll_anchor">
            <a  href="#<?php// echo $Help_val->TAG ;?>"><?php// echo $Help_val->TITLE ;?></a>
            
        </li>
         <?php //} } ?>
    </ul>
</div>
<?php
$this->endWidget(); ?>
<script>
   
</script>