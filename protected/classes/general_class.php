<?php
/**
 * Created  By  : ® ℛaThIlEsH ®  
 * Created  On  : 2-Aug-2013
 * Modified By  : 23-Oct-2013
 * Modified On  :
 * Purpose      : General Class 
 */
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    //START USER DEFINED CLASSES
    class Get_Labelname_Cls
        {
        private static $pvLabelname=array();
        private static $pvLabelCount=array();
        public function Get_Labelname_Fnc($FvTextid)
            {
            $vTextid = $FvTextid;
            $vLabelname = Yii::app()->db->createCommand()
                ->select('*')
                ->from("HRLABEL")
                ->where('"TEXT_ID"=:TEXT_ID', array(':TEXT_ID'=>$vTextid))
                ->queryRow();

                //print_r($vLabelname); exit;
//            if(trim($vLabelname['TEXT'])=="") {
            return $vLabelname['TEXT'];
//            }
//            else                
//                return  $vTextid;
            }
    public function Get_LabelCount_Fnc($FvTextid,$FvLanguage)
        {
        $vTextid = $FvTextid;
        $vLaguage = $FvLanguage;
        $vLabelCont = Yii::app()->db->createCommand()
            ->select('TEXT')
            ->from("HRLABEL")
            ->where('TEXT_ID=:TEXT_ID and LANGUAGE=:LANGUAGE', array(':TEXT_ID'=>$vTextid,':LANGUAGE'=>$vLaguage))
            ->queryRow();
            return $vLabelCont['TEXT'];
        }
        }
    class change_date_format_Cls
         {
         public function Get_Converted_Date_Fnc($FvDate)
             {
             $newDate = date("d/M/Y", strtotime($FvDate));
             return $newDate;
             }
         }
         
        
        class Get_Message_Cls
        {
            private static $vTextname=array();
            public function Get_Message_Fnc($id)                
            {             
                $vid = $id;                
                $vTextname = Yii::app()->db->createCommand()
                    ->select('TEXT')
                    ->from("HRMESSAGE")
                    ->where('TEXTID=:ID', array(':ID'=>$vid))
                    ->queryRow();               
                return $vTextname['TEXT'];
            } 
            
            public function Get_DynamicMessage_Fnc($id,$paramstring)                
            {
               $delimiters=Yii::app()->params['alertformat'];
               $params=explode($delimiters,$paramstring);
               $message=$this->Get_Message_Fnc($id);
               foreach ($params as $key=>$value) 
               {
                    $replacestring="'^##".((int)($key)+1)."^'";
                    $message=str_replace($replacestring, $value, $message);
               }
               return $message;
            }                       
        }
        class Get_Generic_Flex_Cls
        {
             private static $GetGenericFlex=array();
             private static $GetGenericFlexWithJoin=array();
            
            public function Get_Generic_Flex_Fnc($TableId,$Canvas)
            {
                $VTableId=$TableId;
                $VCanvas= $Canvas;
                $sql="select  * from 
                GENERIC_FLEX,GENERIC_FLEX_VALUE
                where TABLE_ID = '$VTableId' and CANVAS = '$VCanvas'
                and  GENERIC_FLEX.ID = GENERIC_FLEX_VALUE.GFLEX_ID";
                return $GetGenericFlex=Yii::app()->db->createCommand($sql)->queryAll();
            }
            public function Get_Generic_Flex_Form_Fnc($TableId,$Canvas)
            {
                $VTableId=$TableId;
                $VCanvas= $Canvas;
                $sql="select  * from 
                GENERIC_FLEX
                where TABLE_ID = '$VTableId' and CANVAS = '$VCanvas' order by FIELD_SEQUENCE ASC ";
                return $GetGenericFlex=Yii::app()->db->createCommand($sql)->queryAll();
            }
            //created by Rathilesh
            public function Get_Generic_Flex_With_Left_Join_Fnc($TableId,$Canvas,$party_id)
            {
                
//                
//                   
                $VTableId=$TableId;
                $VCanvas= $Canvas;
                if($party_id<>"") {
                $sql="SELECT GF.ID as GENERIC_ID, GF.TABLE_ID ,GF.FIELD_TITLE,GF.CANVAS,GFV.GFLEX_ID,GFV.RECORD_ID,GFV.FLEX_VALUE,GFV.ID as GENERIC_VALUE_ID
                        from GENERIC_FLEX GF 
                        LEFT OUTER JOIN GENERIC_FLEX_VALUE GFV ON GF.ID = GFV.GFLEX_ID and RECORD_ID = {$party_id} 
                        where GF.TABLE_ID = '{$TableId}' 
                        and GF.CANVAS = '{$Canvas}'";
               // echo $sql; //exit;
                }
                else{
                    $sql="SELECT GENERIC_FLEX.ID as GENERIC_ID, GENERIC_FLEX.TABLE_ID ,GENERIC_FLEX.FIELD_TITLE,GENERIC_FLEX.CANVAS,GENERIC_FLEX_VALUE.GFLEX_ID,GENERIC_FLEX_VALUE.RECORD_ID,GENERIC_FLEX_VALUE.FLEX_VALUE,GENERIC_FLEX_VALUE.ID as GENERIC_VALUE_ID
                    from 
                GENERIC_FLEX
                LEFT OUTER JOIN GENERIC_FLEX_VALUE ON GENERIC_FLEX.ID = GENERIC_FLEX_VALUE.GFLEX_ID 
                where TABLE_ID = '{$TableId}' and CANVAS = '{$Canvas}'";
                }
                return $GetGenericFlex=Yii::app()->db->createCommand($sql)->queryAll();
            }
            
            
        }
        //Created By Archana Suresh on 20-Jan-2014
        class checkduplication
        {
                public function ArrayValueDuplCheck($ArrayValues,$count)
                {
                    
                    $DupFlg = 0;
                    for ($k=0; $k< $count; $k++) {                        // outer loop uses each item i at 0 through n
                        for ($l=$k+1; $l<$count; $l++) {              // inner loop only compares items j at i+1 to n
                            if (isset($ArrayValues[$k]) && isset($ArrayValues[$l]) && (string)$ArrayValues[$k]===(string)$ArrayValues[$l])
                            {                                
                               $DupFlg=$l+1;
                            }
                        }	
                    }
        
                    return $DupFlg;         
                    
                  }
          }

//Created By Anaswara          
        class Array_filter_duplicationcheck
        {
            public function Array_filter_duplication($ArrayValuesPass)
            {
                $duplication_check = array_flip(array_filter( array_count_values($ArrayValuesPass),
                                     create_function('$x', 'return $x >= 1;')));
            }
        }
        

//Created By Anaswara        
        class Title_Help
        {
            public function Get_Title_Help()
            {
               return "Click For Help"; 
            }
        }
        
        
//crated by Rathilesh 
        
        class Get_Org_Details
        {
            public function Find_Details($Get_E_ID)
            {
               $sql="select  NAME from 
                ENTITY
                where ID = '$Get_E_ID'";
                return $GetValues=Yii::app()->db->createCommand($sql)->queryAll();
            }
        }
        
          

//START USER DEFINED CLASSES
     
        
//       class Position_Flex_cls
//       {
//           public function POSITION_FLEX($nposition_id)
//           {
//                $SQL="SELECT PF.ID as POSITION_ID, PF.FLEX_VALUE ,PF.FLEX,BD.DESCRIPTION
//                                           from POSITION_FLEX PF 
//                                           LEFT OUTER JOIN BASIC_DEFINITION BD ON PF.FLEX = BD.DESCRIPTION  
//                                           WHERE PF.POST_ID = $nposition_id";
//                return $GetValues=Yii::app()->db->createCommand($SQL)->queryAll();
//           }
//       }
//        
//        
        
        
        class Position_Flex_cls
       {
           public function POSITION_FLEX($nposition_id)
           {
                $SQL="SELECT PF.ID as POSITION_ID,PF.POST_ID,PF.FLEX_VALUE as value,PF.FLEX,BD.DESCRIPTION,BD.DFCTG_DEFINITION_TYPE
                                           from BASIC_DEFINITION BD
                                           left JOIN POSITION_FLEX PF ON PF.FLEX = BD.DESCRIPTION AND PF.POST_ID=$nposition_id  
                                           WHERE BD.DFCTG_DEFINITION_TYPE = 'POSITION_FLEX' order by BD.DESCRIPTION ASC";
                return $GetValues=Yii::app()->db->createCommand($SQL)->queryAll();
           }
           
           public function POSITION_FLEX_STATIC()
           {
                $SQL="SELECT BD.DESCRIPTION,BD.DFCTG_DEFINITION_TYPE
                                           from BASIC_DEFINITION BD
                                           WHERE BD.DFCTG_DEFINITION_TYPE = 'POSITION_FLEX' order by BD.DESCRIPTION ASC";
                return $GetValues=Yii::app()->db->createCommand($SQL)->queryAll();
           }
           
           public function Responsibility($nposition_id)
           {
              
               $SQL="SELECT ID,RESPONSIBILITY,RESPONSIBILITY_TYPE
                                           from POSITION_RESPONSIBILITY
                                           WHERE POST_ID=$nposition_id order by UPPER(RESPONSIBILITY)";
                return $GetValues=Yii::app()->db->createCommand($SQL)->queryAll();
           }
           
            public function Edu_Exp($nposition_id)
           {
              
               $SQL="SELECT * from EDUCATION_N_EXPERIENCE
                                  WHERE POST_ID=$nposition_id order by UPPER(RECORD_TYPE)";
              return $GetValues=Yii::app()->db->createCommand($SQL)->queryAll();
           }
           
           public function Key_Compentency($nposition_id)
           {
              
               $SQL="SELECT * from KEY_COMPENTENCY
                                  WHERE POST_ID=$nposition_id";
              return $GetValues=Yii::app()->db->createCommand($SQL)->queryAll();
           }
           
           public function Position_Shortname($nposition_id)
           {
               $get_Name_Position ="SELECT SHORT_NAME,POSITION
                                        from POSITION
                                        WHERE ID=$nposition_id"; 
               return $GetValues=Yii::app()->db->createCommand($get_Name_Position)->queryAll();
                     
           }
           
       }
	   
	   class Get_Data_From_Basic_Definition_Cls {
	   		public function ArGet_Data_From_BasicDef($vDefinitionType) 
				{
					 
           // $SQL='SELECT "SHORT_NAME","DESCRIPTION","ENTITY_ID","ID"
           //                                 from "BASIC_DEFINITION" 
           //                                 WHERE "DFCTG_DEFINITION_TYPE" = "{LANGUAGE}" ORDER BY "DESCRIPTION" ASC';            
                $ArGetVal = Yii::app()->db->createCommand()
                    ->select("SHORT_NAME,DESCRIPTION,ENTITY_ID,ID")
                    ->from("BASIC_DEFINITION")
                    ->where('"DFCTG_DEFINITION_TYPE"=:TYPE', array(':TYPE'=>strtoupper($vDefinitionType)))
                    ->order("DESCRIPTION ASC")
                    ->queryAll();
                    //print_r($ArGetVal)  ; exit;             
                return $ArGetVal;

               // return $GetValues=Yii::app()->db->createCommand($SQL)->queryAll();
	   				
	   			}	
	   }
        
        
?>
