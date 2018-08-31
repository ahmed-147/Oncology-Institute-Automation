var win;
     

document.getElementById('print1').onclick = function () {
    "use strict";
    document.getElementById("form2").classList.add("hide");
    document.getElementById("form1").classList.add("hide");
	document.getElementById("insert").classList.add("hide");
	document.getElementById("print1").classList.add("hide");
    window.print();
    document.getElementById("insert").classList.remove("hide");
	document.getElementById("print1").classList.remove("hide");
    document.getElementById("form1").classList.remove("hide");
    document.getElementById("form2").classList.remove("hide");
    
};



/*document.getElementById("insert").onclick = function () {
    "use strict";
   alert("Adding was done "); 
};*/
