/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * 
 */
 
$(document).ready(function(){
$(".plus").click(function() { 

       
       /***************getting rel value and splitt to get table id and hidden id**************/
         var cloneval = $(this).attr('rel');
  
         var cloneid = cloneval.split("+");
       
     
          
            var count = $('#'+cloneid[0]+' tr').length;
         
           
            count=count-1;

            var $lastRow=$('#'+cloneid[0]+' tbody>tr:last').prev('tr');
         
          
            var RowIndex = $lastRow.index()+2;
            var newIDSuffix = "*";

            var cloned = $('#'+cloneid[0]+' tbody>tr:last').prev('tr').clone();
            var oldcount=$('#'+cloneid[1]).val();
         
            $('#'+cloneid[1]).val((parseInt(oldcount)+1)); 
            cloned.find("input").each(function() {
               
                var id = $(this).attr('id');
                var name = $(this).attr('name');
                name = name.replace(/[0-9]/, newIDSuffix);
                id = id.replace(/[0-9]/, newIDSuffix);
                name = name.replace(/[0-9]/g, "");
                id = id.replace(/[0-9]/g, "");
                name = name.replace(newIDSuffix, RowIndex);
                id = id.replace(newIDSuffix, RowIndex);
                //Creating new instance for datepicker
                if($(this).hasClass("hasDatepicker"))
                {   
                  $(this).removeClass('hasDatepicker').datepicker({dateFormat:'dd/mm/yy',minDate: 0});   
                }
                $(this).attr('id', id);
                $(this).attr('name', name);
                
                  if($(this).attr('rel')=="DependentAutocomplete")
                {   
                 id="dependent_name"+RowIndex;
                 name="["+RowIndex+"]"+"dependent_name"; 
                  $(this).autocomplete({                                            
                                       source: "<?php echo $this->createUrl('Personnel_V/DependentAutocomplete?val=Dependent') ?>",
                                       minLength: 0,                                       
                                       change:function(event,ui){
                                        if (!ui.item) {
                                            $(this).val("");                                                                       
                                         }
                                       },
                                      
                   });
                   $(this).focus(function(e) {
                        if(!e.isTrigger) {
                            $(this).autocomplete("search", "");
                        }
                        return false;
                    });                   
                }      
                


                
    });
           
            cloned.insertAfter($('#'+cloneid[0]+' tr:last').prev()).find( 'input:text' ).attr('value',''); 
            return false;
    });
});
 

