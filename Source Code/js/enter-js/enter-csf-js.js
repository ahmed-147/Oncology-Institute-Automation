
document.getElementById("print1").onclick = function(){
    "use strict";
    document.getElementById("form2").classList.add("hide");
	document.getElementById("insert").classList.add("hide");
	document.getElementById("print1").classList.add("hide");
    window.print();
    
};

document.getElementById("insert").onclick = function(){
    "use strict";
   alert("Adding was done "); 
};



//  Dialoge (if correct)

$( function() {
    $( "#dialog-message" ).dialog({
      modal: true,
      buttons: {
        اغلاق: function() {
          $( this ).dialog( "close" );
        }
      }
    });
  } );


