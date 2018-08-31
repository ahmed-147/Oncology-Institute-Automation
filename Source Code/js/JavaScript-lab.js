
var hidden = document.getElementById("close") ,
    bar = document.getElementById("div1"),
    display = document.getElementById("menu"),
    data = document.getElementById("form1") ,
    t1 = document.getElementById("form2"),
    link1 = document.getElementById("a1"),
    link2 = document.getElementById("a2");
    
    


hidden.onclick = function (){
    "use strict";
    bar.classList.toggle("animation");
    data.classList.toggle("form_disp");
    t1.classList.toggle("ticket_disp");
	enter.classList.toggle("enter_display");
};


display.onclick = function (){
    "use strict";
    bar.classList.toggle("animation");
    data.classList.toggle("form_disp");
    t1.classList.toggle("ticket_disp");
	enter.classList.toggle("enter_display");
};


link1.onclick = function (){
    "use strict";
    
    data.classList.remove("data2");
    t1.classList.add("ticket2");
    
};


link2.onclick = function (){
    "use strict";
    data.classList.add("data2");
    t1.classList.remove("ticket2");
    
    
};




// to print ticket





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


