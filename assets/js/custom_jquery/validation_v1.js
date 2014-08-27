/*
 * 
 * 
 * 
 * 
 */


/***************phone validation global***********/
function phonevalidation(tphone)
{
    var tphoneformat=/^[0-9]{11}(,|[0-9]{11})*/;

    if(!tphoneformat.test(tphone))
        { 
            
           return false;
           
        }
        else
            {
                return true;
            }
        
       
        
}
/***********************mobile validation end here*****/

/***************phone validation global***********/
function Standardphonevalidation(Mphone)
{
    var Mphoneformat=/^(\+91-|\+91|0)?\d{10}$/;

    if(!Mphoneformat.test(Mphone))
        { 
           return false;
           
        }
        
       
        
}
/***********************mobile validation end here*****/

/***************fax validation global***********/
function faxvalidation(fax)
{
    var tfaxformat=/^[0-9]{10}(,|[0-9]{10})*/;  //need to check

    if(!tfaxformat.test(fax))
        { 
          
           return false;
           
        }
        
       
        
}
/***********************fax validation end here*****/

/***************email validation global***********/
function emailvalidation(email)
{
    var eformat=/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;

    if(!eformat.test(email))
        { 
          
           return false;
           
        }
        
       
        
}
/***********************email validation end here*****/

/***************validation global***********/
function urlvalidation(url)
{
   // alert(url);
    var urlformat=/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i; 
    //
    //var urlformat=/(http|ftp|https):\/\/[\w\-_]+(\.[\w\-_]+)+([\w\-\.,@?^=%&amp;:/~\+#]*[\w\-\@?^=%&amp;/~\+#])?/;


    // Below regular expression can validate input URL with or without http:// etc 
   // var urlformat = new RegExp("^((http|https|ftp)\://)*([a-zA-Z0-9\.\-]+(\:[a-zA-Z0-9\.&amp;%\$\-]+)*@)*((25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9])\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[0-9])|([a-zA-Z0-9\-]+\.)*[a-zA-Z0-9\-]+\.(com|edu|gov|int|mil|net|org|biz|arpa|info|name|pro|aero|coop|museum|[a-zA-Z]{2}))(\:[0-9]+)*(/($|[a-zA-Z0-9\.\,\?\'\\\+&amp;%\$#\=~_\-]+))*$");
    //return pattern.test(urlToCheck);

//return true;
    if(!urlformat.test(url))
        {
         
           return false;
           
        }
        else
        {
          return true;
        }
     
        
}
/***********************validation end here*****/
function landformat(telephone) 
{
    var landformat=/^[0-9]\d{2,4}-\d{6,8}$/;
     if(!landformat.test(telephone))
        { 
          
           return false;
           
        }
}


/*****************datevalidation*************/
function ValidateDate(userdate)
{
    var dateformat = /^(\d{1,2})\/(\d{1,2})\/(\d{4})$/; // DD/MM/YYYY
    if(!dateformat.test(userdate))     
           return false;
    return true;            
}
/****************************special character validation*************/
function specialcharactervalidation(data)
{
    //test()--> Javascript function
   //  ^[a-zA-Z0-9,.\/\-]+$
    var spcharacter = /[^a-zA-Z0-9\_\' '\-]/;
    if(spcharacter.test(data))
        { 
           return false;
           
        }
        
       
        
}

function ValidateNumber(record)
{
    var recordformat=/^[0-9]*$/
    if (!recordformat.test(record))
        {
            return false;
        }
        return true;
}
//Created By Archana on March-13-2014............

//Parameters
//1. The item to be checked for uniqueness
//2. Wef Date
//3. Wet Date
//4. Index in the loop
function CheckDateDuplicates(datesarray)
{  
   var flag = 0;
   for (var k=0; k<datesarray.length; k++) {                        
        for (var l=k+1; l<datesarray.length; l++) {                     
            if(datesarray[k][0]===datesarray[l][0])
            {                             
               if(datesarray[k][2]!="")
               {
                    if((CompareDates(datesarray[l][1],datesarray[k][2])) && (CompareDates(datesarray[k][1],datesarray[l][2])))
                    {
                        flag= datesarray[l][3];
                        break;
                    }
               }
               else
               {
                    if(CompareDates(datesarray[k][1],datesarray[l][2]))
                    {
                        flag= datesarray[l][3];
                        break;
                    }
               }
            }
        }        
        if(flag!=0)
        {
            break;
        }
        
   }
   return flag;
}

function CompareDates(wef,wet)
{
    var wetDate = wet.split("/");
    var wefDate=  wef.split("/");
    userwetDate = new Date(wetDate[2], wetDate[1] -1, wetDate[0]); 
    userwefDate = new Date(wefDate[2], wefDate[1] -1, wefDate[0]); 
    if(userwefDate>userwetDate)    
       return false;
    else
        return true;
}
/////////////////////////////////////////////////