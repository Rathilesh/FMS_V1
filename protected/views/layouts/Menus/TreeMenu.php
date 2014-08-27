<?php
/**
 * Created by .
 * User: Rathilesh
 * Date: 8/8/13
 * Time: 12:04 PM
 * To change this template use File | Settings | File Templates.
 */

?>
<div id="sidetree">
<div class="treeheader">&nbsp;</div>
<div id="sidetreecontrol">
    <a  href="?#"><img src="<?php echo  Yii::app()->baseUrl;?>/images/collapse.png" style="padding: 2px; margin-top: -2px;" width="14px" height="14px">Collapse All</a> | <a  href="?#"><img src="<?php echo  Yii::app()->baseUrl;?>/images/expand.png" style="padding: 2px; margin-top: -2px;" width="14px" height="14px">Expand All</a></div>


<?php

  function category_list( $Category_Parent_ID = '' )
  {
      // build our category list only once
      //static $cats;
      
      static $MenuData;
       
       if ( ! is_array( $MenuData ) )
       {
            $Connection=Yii::app()->db;  
            //GET CURRENT USER ID

            $Cur_UserID=Yii::app()->user->getId(); 
             //if($Cur_UserID=="") { $Cur_UserID=1; }
            //GET CURRENT USER ID
            // assuming you have configured a "db" connection
            // If not, you may explicitly create a connection:
            // $connection=new CDbConnection($dsn,$username,$password);
            // $sql="select id, mmo_id, menu_prompt, mmd_id ,submenu_mmd_id, display_order
            //         from md_menu_definition
            //        where id in ( select mmd_id
            //                        from md_role_grant mrg
            //                       where mrg.mrd_id = (  select distinct mrd_id
            //                                               from md_user_role
            //                                              where usr_id = cast( $Cur_UserID as character varying)
            //                                       ---         and trunc(nvl(wef,sysdate)) <= trunc(sysdate)
            //                                        ---        and trunc(nvl(wet,sysdate)) >= trunc(sysdate)
            //                                           )
            //                         and ( mrg.mmo_id is null or mrg.mmo_id in ( select id
            //                                                                       from md_menu_object
            //                                                    ---                  where trunc(nvl(wef,sysdate)) <= trunc(sysdate)
            //                                                     ---                   and trunc(nvl(wet,sysdate)) >= trunc(sysdate)
            //                                                                   )
            //                            )
            //                    )
            //      order by mmd_id, display_order";






            $sql="select id, mmo_id, menu_prompt, mmd_id ,submenu_mmd_id, display_order
                    from md_menu_definition
                   where id in ( select mmd_id
                                   from md_role_grant mrg
                                  where mrg.mrd_id = (  select distinct mrd_id
                                                          from md_user_role
                                                         where usr_id = cast( $Cur_UserID as character varying)
                                                           and coalesce(wef,current_date) <= current_date
                                                           and coalesce(wet,current_date) >= current_date
                                                      )
                                    and ( mrg.mmo_id is null or mrg.mmo_id in ( select id
                                                                                  from md_menu_object
                                                                                 where coalesce(wef,current_date) <= current_date
                                                                                 and coalesce(wet,current_date) >= current_date
                                                                              )
                                       )
                               )
                 order by mmd_id, display_order";
            
            $Command=$Connection->createCommand($sql);
            // if needed, the SQL statement may be updated as follows:
            // $command->text=$newSQL;
            $MenuData=$Command->queryAll();
           // print_r($MenuData); exit;

       }

        // populate a list items array
        $MenuBuildHtml  = array();//list_items = array();

        foreach ( $MenuData as $Data )
        {
            // if not a match, move on
            if ( ( int ) $Data['mmd_id'] !== ( int ) $Category_Parent_ID )
            {
                continue;
            }
            //get link to mmo_id
            if($Data['mmo_id']<>'')
            {
                $Connection=Yii::app()->db;
                $Link=$Data['mmo_id'];
                $Sql='SELECT OBJECT_ID, DISPLAY_TITLE FROM MD_MENU_OBJECT WHERE ID='.$Link;
                $Command=$Connection->createCommand($Sql);
                // if needed, the SQL statement may be updated as follows:
                // $command->text=$newSQL;
                $LinkParam=$Command->queryAll();
                //print_r($link_param);
                $BaseUrl=Yii::app()->request->baseUrl;
                
                // special link for subentity
                if($LinkParam[0]['object_id']==="Subentity")
                {
                $Link_Name ="/index.php/entity/subentity";  
                }
                else {
                $Link_Name ="/index.php/".strtolower($LinkParam[0]['object_id'])."/create";
                }

                //                                    foreach ( $link_param as $cat1 )
                //                                    {
                //                                        $link_name=$cat1['OBJECT_ID'];
                //                                    }
                            //echo $link_param; exit;


            }
            else 
            {
                $BaseUrl="#";
                $Link_Name="";
                
            }
            //get link to mmo_id
            // open the list item
            if($Data['submenu_mmd_id']<>'') 
              {
                $MenuBuildHtml[] = '<li>';
                $MenuBuildHtml[] ='<div></div>';
              }
            if($Data['submenu_mmd_id']=='' && $Data['mmd_id']<>'') 
              {
                $MenuBuildHtml[] = '<li id="sub_node">';
                // $list_items[] ='<div class="hitarea expandable-hitarea"></div>';
              }
            if($Data['submenu_mmd_id']=='' && $Data['mmd_id']=='') 
              {
                $MenuBuildHtml[] = '<li>';
                $MenuBuildHtml[] ='<div></div>';
              }
            // construct the category link
       
            $MenuBuildHtml[] = '<a href="' .$BaseUrl. $Link_Name . '">';
            $MenuBuildHtml[] = $Data['menu_prompt'];//$LinkParam[0]['DISPLAY_TITLE'];
            $MenuBuildHtml[] = '</a>';

            // recurse into the child list
            if($Data['submenu_mmd_id']<>'')
               {
                 $MenuBuildHtml[] = category_list( $Data['submenu_mmd_id'] );
                //echo "here";
               }
            if($Data['submenu_mmd_id']=='') 
               {
                $MenuBuildHtml[] = category_list( $Data['id'] );
               }
            // close the list item
            $MenuBuildHtml[] = '</li>';

         }// corre

         // convert to a string
         $MenuBuildHtml = implode( '', $MenuBuildHtml );

         // if empty, no list items!
         if ( '' == trim( $MenuBuildHtml ) )
         {
            return '';
         }

        // ...otherwise, return the list
        return '<ul id="tree" style="padding-top:5px;">' . $MenuBuildHtml . '</ul>';

   }

  echo category_list();
  
?></div>