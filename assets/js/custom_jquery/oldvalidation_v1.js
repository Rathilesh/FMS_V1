/*
 * 
 * 
 * 
 * 
 */


/***************phone validation global***********/
function phonevalidation(tphone)
{
    var tphoneformat=/^[0-9]{10}(,|[0-9]{10})*/;

    if(!tphoneformat.test(tphone))
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
    var urlformat=/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i; 

    if(!urlformat.test(url))
        { 
         
           return false;
           
        }
        
       
        
}
/***********************validation end here*****/

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
    var spcharacter = /[^a-zA-Z0-9\_\' ']/;
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

