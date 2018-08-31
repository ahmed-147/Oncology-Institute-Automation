
var boxcheck = document.getElementById("pass_show");

var pass = document.getElementById("password");

function show()
{
    if(boxcheck.checked)
        {
            pass.type = "text";
        }
    
    else{
        pass.type = "password";
    }
}

