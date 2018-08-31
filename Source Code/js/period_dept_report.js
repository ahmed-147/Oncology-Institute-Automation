
document.getElementById("butt2").onclick = function(){
    "use strict";
    document.getElementById("butt2").classList.add("hide");
	document.getElementById("butt1").classList.add("hide");
	document.getElementById("from").classList.add("hide");
	document.getElementById("to").classList.add("hide");
	document.getElementById("dept").classList.add("hide");
    document.getElementById("l1").classList.add("hide");
    document.getElementById("l2").classList.add("hide");
    document.getElementById("l3").classList.add("hide");
    window.print();
    
};