
var hidden = document.getElementById("close") ,
    bar = document.getElementById("div1"),
    display = document.getElementById("menu"),
    probility = document.getElementById("form1") ,
    manage = document.getElementById("form2"),
	add = document.getElementById("form3"),
    add1 = document.getElementById("form4"),
    add2 = document.getElementById("form5"),
    backup = document.getElementById("form6"),
    active = document.getElementById("form7"),
    link1 = document.getElementById("a1"),
    link2 = document.getElementById("a2"),
	link3 = document.getElementById("a3"),
    link4 = document.getElementById("a4"),
	link5 = document.getElementById("a5"),
    link6 = document.getElementById("a6"),
    link7 = document.getElementById("a7");


hidden.onclick = function (){
    "use strict";
    bar.classList.toggle("animation");
    probility.classList.toggle("probility_disp");
    manage.classList.toggle("control_disp");
	add.classList.toggle("add_disp");
    add1.classList.toggle("doctor_disp");
    add2.classList.toggle("nurse_disp");
    backup.classList.toggle("backup_disp");
    active.classList.toggle("active_disp");
};


display.onclick = function (){
    "use strict";
    bar.classList.toggle("animation");
    probility.classList.toggle("probility_disp");
    manage.classList.toggle("control_disp");
	add.classList.toggle("add_disp");
    add1.classList.toggle("doctor_disp");
    add2.classList.toggle("nurse_disp");
    active.classList.toggle("active_disp");
};


link1.onclick = function (){
    "use strict";
    
    probility.classList.remove("probility2");
    manage.classList.add("control2");
	add.classList.add("add2");
    add1.classList.add("doctor2");
    add2.classList.add("nurse2");
    backup.classList.add("backup2");
    active.classList.add("active2");
    
};


link2.onclick = function (){
    "use strict";

	probility.classList.add("probility2");
	add.classList.add("add2");
    add1.classList.add("doctor2");
    add2.classList.add("nurse2");
    manage.classList.remove("control2");
    backup.classList.add("backup2");
    active.classList.add("active2");
    
};

link3.onclick = function (){
    "use strict";

	probility.classList.add("probility2");
	add.classList.remove("add2");
    manage.classList.add("control2");
    add1.classList.add("doctor2");
    add2.classList.add("nurse2");
    backup.classList.add("backup2");
    active.classList.add("active2");
    
};

link4.onclick = function (){
    "use strict";

	probility.classList.add("probility2");
	add.classList.add("add2");
    manage.classList.add("control2");
    add2.classList.add("nurse2");
    add1.classList.remove("doctor2");
    backup.classList.add("backup2");
    active.classList.add("active2");
};


link5.onclick = function (){
    "use strict";

	probility.classList.add("probility2");
	add.classList.add("add2");
    manage.classList.add("control2");
    add2.classList.remove("nurse2");
    add1.classList.add("doctor2");
    backup.classList.add("backup2");
    active.classList.add("active2");
};


link6.onclick = function (){
    "use strict";

	probility.classList.add("probility2");
	add.classList.add("add2");
    manage.classList.add("control2");
    add2.classList.add("nurse2");
    add1.classList.add("doctor2");
    backup.classList.remove("backup2");
    active.classList.add("active2");
};


link7.onclick = function (){
    "use strict";

	probility.classList.add("probility2");
	add.classList.add("add2");
    manage.classList.add("control2");
    add2.classList.add("nurse2");
    add1.classList.add("doctor2");
    backup.classList.add("backup2");
    active.classList.remove("active2");
};



$(document).ready(function(){
    
    $('.search-box input[type="text"]').on("keyup input", function(){
        
        /* Get input value on change */
        
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search_admin.php", {term: inputVal}).done(function(data){
                
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
        
        $('.sel').val(dataObject.type);
        $('.form3_inp2').val(dataObject.username);
		$('.form3_inp3').val(dataObject.password);
        $('.form3_inp4').val(dataObject.salary);
        $('.form3_inp5').val(dataObject.serial);
    }
  }
  xmlhttp.open("GET","getuser_admin.php?q="+str,true);
  xmlhttp.send();
}





$(document).ready(function(){
    
    $('.search-box1 input[type="text"]').on("keyup input", function(){
        
        /* Get input value on change */
        
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result1");
        if(inputVal.length){
            $.get("backend-search_admin1.php", {term1: inputVal}).done(function(data){
                
                // Display the returned data in browser
                
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click",".result1 p", function(){
        $(this).parents(".search-box1").find('input[type="text"]').val($(this).text());
        if($(this).text().length>1)
            showUser1($(this).text());
        $(this).parent(".result1").empty();
    });
});


// set data when enter patient code

function showUser1(str1) {
  if (str1=="") {
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
        
        $('.form4_inp3').val(dataObject.salary);
        $('.form4_inp2').val(dataObject.code);
    }
  }
  xmlhttp.open("GET","getuser_admin1.php?q="+str1,true);
  xmlhttp.send();
}




$(document).ready(function(){
    
    $('.search-box2 input[type="text"]').on("keyup input", function(){
        
        /* Get input value on change */
        
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result2");
        if(inputVal.length){
            $.get("backend-search_admin2.php", {term2: inputVal}).done(function(data){
                
                // Display the returned data in browser
                
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click",".result2 p", function(){
        $(this).parents(".search-box2").find('input[type="text"]').val($(this).text());
        if($(this).text().length>1)
            showUser2($(this).text());
        $(this).parent(".result2").empty();
    });
});


// set data when enter patient code

function showUser2(str2) {
  if (str2=="") {
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
        
        $('.form5_inp3').val(dataObject.salary);
        $('.form5_inp2').val(dataObject.code);
    }
  }
  xmlhttp.open("GET","getuser_admin2.php?q="+str2,true);
  xmlhttp.send();
}



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
    $( "#dialog-message_form6" ).dialog({
      resizable: false,
      width : 400,
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


$( function() {
    $( "#dialog-confirm1" ).dialog({
      resizable: false,
      height: "auto",
      width: 500,
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



