// to print report in form2

document.getElementById("print_form2").onclick = function(){
    "use strict";
    document.getElementById("print_form2").classList.add("hide");
    window.print();
    
};