
document.getElementById("enter_report_butt1").onclick = function(){
    "use strict";
    document.getElementById("enter_report_butt1").classList.add("hide");
	document.getElementById("enter_report_butt").classList.add("hide");
	document.getElementById("inp").classList.add("hide");
    window.print();
    
};

