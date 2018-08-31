
var hidden = document.getElementById("close") ,
    bar = document.getElementById("div1"),
    display = document.getElementById("menu"),
    diet = document.getElementById("form1") ,
    report = document.getElementById("form2"),
    link1 = document.getElementById("a1"),
    link2 = document.getElementById("a2");



hidden.onclick = function (){
    "use strict";
    bar.classList.toggle("animation");
    diet.classList.toggle("diet_disp");
    report.classList.toggle("report_disp");
};


display.onclick = function (){
    "use strict";
    bar.classList.toggle("animation");
    diet.classList.toggle("diet_disp");
    report.classList.toggle("report_disp");
};


link1.onclick = function (){
    "use strict";
    
    diet.classList.remove("diet2");
    report.classList.add("report2");
    
};


link2.onclick = function (){
    "use strict";

	diet.classList.add("diet2");
    report.classList.remove("report2");
    
};



$(document).ready(function(){
    
    $('.search-box input[type="text"]').on("keyup input", function(){
        
        /* Get input value on change */
        
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search_code_diet.php", {term: inputVal}).done(function(data){
                
                // Display the returned data in browser
                
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click",".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        if($(this).text().length>1)
            showUser($(this).text());
        $(this).parent(".result").empty();
    });
});


// set data when enter patient code

function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
        dataObject=JSON.parse(this.responseText);
        
        $('.name').val(dataObject.patient_name);
        $('.code').val(dataObject.patient_code);
		$('.ward').val(dataObject.ward);
		$('.diet_sel').val(dataObject.diet);
         
    }
  }
  xmlhttp.open("GET","getuser_diet_code.php?q="+str,true);
  xmlhttp.send();
}




// search in name input


$(document).ready(function(){
    
    $('.search-box1 input[type="text"]').on("keyup input", function(){
        
        /* Get input value on change */
        
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result1");
        if(inputVal.length){
            $.get("backend-search_name_diet.php", {term: inputVal}).done(function(data){
                
                // Display the returned data in browser
                
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result1 p", function(){
        $(this).parents(".search-box1").find('input[type="text"]').val($(this).text());
        if($(this).text().length>1)
            showUser1($(this).text());
        $(this).parent(".result1").empty();
    });
});



// set data when enter patient name 

function showUser1(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
        dataObject=JSON.parse(this.responseText);
        
        $('.name').val(dataObject.patient_name);
        $('.code').val(dataObject.patient_code);
		$('.ward').val(dataObject.ward);
		$('.diet_sel').val(dataObject.diet);
         
    }
  }
  xmlhttp.open("GET","getuser_diet_name.php?q="+str,true);
  xmlhttp.send();
}



//   Form 5  (Reports)

document.getElementById("men_surgery").onclick = function(){
	
	"use strict";
	
	window.open("diet_men_surgery_report.php");
	
};


document.getElementById("men_internal").onclick = function(){
	
	"use strict";
	
	window.open("diet_men_internal_report.php");
	
};

document.getElementById("women_surgery").onclick = function(){
	
	"use strict";
	
	window.open("diet_women_surgery_report.php");
	
};


document.getElementById("women_internal").onclick = function(){
	
	"use strict";
	
	window.open("diet_women_internal_report.php");
	
};


document.getElementById("children").onclick = function(){
	
	"use strict";
	
	window.open("diet_children_report.php");
	
};


document.getElementById("free").onclick = function(){
	
	"use strict";
	
	window.open("diet_free_report.php");
	
};


document.getElementById("intensive_care").onclick = function(){
	
	"use strict";
	
	window.open("diet_intensive_report.php");
	
};


document.getElementById("print").onclick = function(){
	
	"use strict";
	
	window.open("diet_print_report.php");
	
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


$( function() {
    $( "#dialog-confirm" ).dialog({
      resizable: false,
      height: "auto",
      width: 400,
      modal: true,
      buttons: {
        "تأكيد الحذف": function() {
          $( this ).dialog( "close" );
        },
        إلغاء: function() {
          $( this ).dialog( "close" );
        }
      }
    });
  } );
