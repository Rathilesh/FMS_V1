
<div  id="patternDiv">
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
                                                    if( $modelaction == "create" )
															{
																echo  $Getlabelname->Get_Labelname_Fnc("284");
															}
												 	else 	{
																echo  "Manage Personnel";
															}
                                                    break;
													
													
                                                
                                                 case 'entity type':
                                                     echo  $Getlabelname->Get_Labelname_Fnc("280");
                                                    break;
													
                                                
                                                default :
                                                    echo "change label name ... Path :views/layouts/patterDivOnTop.php";
                                                
                                                
                                                
                                                
                                                
                                        }  } 