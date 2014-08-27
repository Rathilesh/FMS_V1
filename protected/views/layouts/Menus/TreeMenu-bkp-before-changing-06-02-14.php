<?php
/**
 * Created by .
 * User: admin
 * Date: 8/8/13
 * Time: 12:04 PM
 * To change this template use File | Settings | File Templates.
 */

?>

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
            $sql="select id, mmo_id, menu_prompt, mmd_id ,submenu_mmd_id, display_order
                    from md_menu_definition
                   where id in ( select mmd_id
                                   from md_role_grant mrg
                                  where mrg.mrd_id = (  select distinct mrd_id
                                                          from md_user_role
                                                         where usr_id = $Cur_UserID
                                                           and trunc(nvl(wef,sysdate)) <= trunc(sysdate)
                                                           and trunc(nvl(wet,sysdate)) >= trunc(sysdate)
                                                      )
                                    and ( mrg.mmo_id is null or mrg.mmo_id in ( select id
                                                                                  from md_menu_object
                                                                                 where trunc(nvl(wef,sysdate)) <= trunc(sysdate)
                                                                                   and trunc(nvl(wet,sysdate)) >= trunc(sysdate)
                                                                              )
                                       )
                               )
                 order by mmd_id, display_order";
            
            $Command=$Connection->createCommand($sql);
            // if needed, the SQL statement may be updated as follows:
            // $command->text=$newSQL;
            $MenuData=$Command->queryAll();

       }

        // populate a list items array
        $MenuBuildHtml  = array();//list_items = array();

        foreach ( $MenuData as $Data )
        {
            // if not a match, move on
            if ( ( int ) $Data['MMD_ID'] !== ( int ) $Category_Parent_ID )
            {
                continue;
            }
            //get link to mmo_id
            if($Data['MMO_ID']<>'')
            {
                $Connection=Yii::app()->db;
                $Link=$Data['MMO_ID'];
                $Sql='SELECT OBJECT_ID FROM MD_MENU_OBJECT WHERE ID='.$Link;
                $Command=$Connection->createCommand($Sql);
                // if needed, the SQL statement may be updated as follows:
                // $command->text=$newSQL;
                $LinkParam=$Command->queryAll();
                //print_r($link_param);
                $BaseUrl=Yii::app()->request->baseUrl;
                $Link_Name ="/index.php/".strtolower($LinkParam[0]['OBJECT_ID'])."/admin";
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
            if($Data['SUBMENU_MMD_ID']<>'') 
              {
                $MenuBuildHtml[] = '<li  class="expandable" id="here">';
                $MenuBuildHtml[] ='<div class="hitarea expandable-hitarea"></div>';
              }
            if($Data['SUBMENU_MMD_ID']=='' && $Data['MMD_ID']<>'') 
              {
                $MenuBuildHtml[] = '<li id="sub_node">';
                // $list_items[] ='<div class="hitarea expandable-hitarea"></div>';
              }
            if($Data['SUBMENU_MMD_ID']=='' && $Data['MMD_ID']=='') 
              {
                $MenuBuildHtml[] = '<li id="main_node">';
                $MenuBuildHtml[] ='<div class="hitarea expandable-hitarea"></div>';
              }
            // construct the category link
       
            $MenuBuildHtml[] = '<a href="' .$BaseUrl. $Link_Name . '">';
            $MenuBuildHtml[] = $Data['MENU_PROMPT'];
            $MenuBuildHtml[] = '</a>';

            // recurse into the child list
            if($Data['SUBMENU_MMD_ID']<>'')
               {
                 $MenuBuildHtml[] = category_list( $Data['SUBMENU_MMD_ID'] );
                //echo "here";
               }
            if($Data['SUBMENU_MMD_ID']=='') 
               {
                $MenuBuildHtml[] = category_list( $Data['ID'] );
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
        return '<ul id="navigation" class="treeview">' . $MenuBuildHtml . '</ul>';

   }

  echo category_list();
  
?>