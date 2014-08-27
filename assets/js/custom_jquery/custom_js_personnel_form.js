/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

     
    $(document).ready(function(){
        
    $('label[for="Personnel_V_ACTIVE"]').hide();
    $('label[for="Personnel_V_MARRIED"]').hide();
    $('label[for="Personnel_V_VERIFIED_BY_SELF"]').hide();
    $("#dob").mask("99/99/9999");
    //$('#datepicker').mask("99/99/9999",{placeholder:"-"}); 
    $( "#dob" ).datepicker({
    changeMonth: true,
    changeYear: true
    });
    $( "#dob" ).datepicker( "option", "showAnim", "bounce" );
    $( "#dob" ).datepicker( "option", "dateFormat", "dd/mm/yy" );
    /**************************bank wef****************/
    
    $("#wef_bank").mask("99/99/9999");
    //$('#datepicker').mask("99/99/9999",{placeholder:"-"}); 
    $( "#wef_bank" ).datepicker({
    changeMonth: true,
    changeYear: true
    });
    $( "#wef_bank" ).datepicker( "option", "showAnim", "bounce" );
    $( "#wef_bank" ).datepicker( "option", "dateFormat", "dd/mm/yy" );
    /***************bank wef end here********************/
    
    /**************************bank wet****************/
    
    $("#wet_bank").mask("99/99/9999");
    //$('#datepicker').mask("99/99/9999",{placeholder:"-"}); 
    $( "#wet_bank" ).datepicker({
    changeMonth: true,
    changeYear: true
    });
    $( "#wet_bank" ).datepicker( "option", "showAnim", "bounce" );
    $( "#wet_bank" ).datepicker( "option", "dateFormat", "dd/mm/yy" );
    /***************bank wet end here********************/
    
    
     /**************************service wef****************/
    
    $("#wef_service").mask("99/99/9999");
    //$('#datepicker').mask("99/99/9999",{placeholder:"-"}); 
    $( "#wef_service" ).datepicker({
    changeMonth: true,
    changeYear: true
    });
    $( "#wef_service" ).datepicker( "option", "showAnim", "bounce" );
    $( "#wef_service" ).datepicker( "option", "dateFormat", "dd/mm/yy" );
    /***************service wef end here********************/
    
    /**************************service wet****************/
    
    $("#wet_service").mask("99/99/9999");
    //$('#datepicker').mask("99/99/9999",{placeholder:"-"}); 
    $( "#wet_service" ).datepicker({
    changeMonth: true,
    changeYear: true
    });
    $( "#wet_service" ).datepicker( "option", "showAnim", "bounce" );
    $( "#wet_service" ).datepicker( "option", "dateFormat", "dd/mm/yy" );
    /***************service wet end here********************/
    /******************date for wef*****************/
    var addcount= $( "#addcount" ).val();
 
    for(var i=0;i<addcount;i++)
        {
            
       
/*****************country autocomplete direct coming************/


   $("#COUNTRY"+i).bind('focus',function(){
            $(this).autocomplete("search");
           
               
          });
 /****************************************************************/      
            
    $("#wef_datepicker"+i).mask("99/99/9999");
    //$('#datepicker').mask("99/99/9999",{placeholder:"-"}); 
    $( "#wef_datepicker"+i ).datepicker({
    changeMonth: true,
    changeYear: true
    });
    $( "#wef_datepicker"+i ).datepicker( "option", "showAnim", "bounce" );
    $( "#wef_datepicker0"+i ).datepicker( "option", "dateFormat", "dd/mm/yy" );
    
    
     /******************date for verification wet*****************/
    $("#wet_datepicker"+i).mask("99/99/9999");
    //$('#datepicker').mask("99/99/9999",{placeholder:"-"}); 
    $( "#wet_datepicker"+i).datepicker({
    changeMonth: true,
    changeYear: true
    });
    $( "#wet_datepicker"+i ).datepicker( "option", "showAnim", "bounce" );
    $( "#wet_datepicker"+i ).datepicker( "option", "dateFormat", "dd/mm/yy" );
    
        }
    $( "#tabs" ).tabs({show: { effect: "fade", duration: 800 }});
    $("#tabs li :last").addClass("last_li");
    $( "#accordion" ).accordion({
      collapsible: true 
    });
  
    $("#upload_b").on("click", function () {
      $("#PARTY_IMAGE_IMAGE").click(); 
          return false;   
    });
  
 
    });