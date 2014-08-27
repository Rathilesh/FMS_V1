<?php ob_start(); ?>	<?php
    //if(isset($_POST['action'])){
		
		function checkname()
		{
		echo "hi";
		}
		/*switch($_REQUEST["action"]){
		
			case "checkname":
			$error_name='';
				if(!empty($name)){
					if(@eregi('^[A-Za-z0-9 .]{3,20}$',$name)){
					
						$error_name='';
					}
					/*else{
						
						$error_desig='You must Enter a valid name';
					}*/
				/*}
				else{
					
					$error_name='You must  Enter the name';
				}*/
				echo print_r($_POST);
			//break;
			//}
			
			//}?>