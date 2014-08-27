<style>
    .err_stl
    {
        background-color: #FFD0D6;
        text-decoration: blink;
        color: #FF0000;
        float: left;
        font-weight: bold;
        position: absolute;
        width: 52%;
        padding: 3px;
        border-radius: 5px;
        margin-top: -27px;
        margin-left: -58px;
    }
</style>  
<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

if(isset($_GET['error']))
    {
    ?>
        <span style="" class="err_stl">
            <?php if($_GET['error']==1) {  echo "Incorrect Username Or Password"; }
                    elseif ($_GET['error']==2) { echo "User Connot Find This Database"; }

            ?>
        </span>

<?php } ?>
<div class="form">
    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'login-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
    )); ?>
	<style>
	#LoginForm_database { width: 207px; }
	</style>
<table border="0" cellpadding="0" cellspacing="0">
    <tr>
        <th>Username</th>
        <td><?php echo $form->textField($model,'username',array('class'=>'login-inp')); ?>

            <?php echo $form->error($model,'username'); ?>

        </td>
    </tr>
    <tr>
        <th>Password</th>
        <td>
            <?php echo $form->passwordField($model,'password',array('class'=>'login-inp')); ?>

            <?php echo $form->error($model,'password'); ?>

        </td>
    </tr>
	
	
	<tr>
        <th>Database</th>
        <td>
		<?php 
        
		$data = CHtml::listData(Vault::model()->findAll(), 'ID','CLIENT_NAME');
        //print_r($data);
        $htmlOptions =     array('size'=>1);//if required prompt add this include htmloptions 'prompt'=>'-- Select a DB --');
        echo $form->listBox($model,'database', $data, $htmlOptions);
        echo $form->error($model,'database');
		?>

        </td>
    </tr>
    <tr>
        <td colspan="2" align="right">
            <div style="width:75px; height:auto; float:left; padding-left:95px;">

                <?php echo CHtml::button('Login',array('class'=>'submit-login','id'=>'log_sub','value'=>'Login')); ?>
                <!--                    <input type="button" class="submit-login" value="Login"  />-->
            </div>
            <div style="width:75px; height:auto; float:left">

                <?php echo CHtml::button('Cancel',array('class'=>'submit-login','id'=>'cancel','value'=>'Cancel')); ?>

            </div>
        </td>

    </tr>
    <!-- <tr>
        <td colspan="2"> <span style="color:#989393"> Demo username : RATHILESH, Password : LETMEIN , Databese : Hrms5 Implimentation</span></td>
    </tr> -->
</table>
<?php $this->endWidget(); ?>
</div><!-- form -->
