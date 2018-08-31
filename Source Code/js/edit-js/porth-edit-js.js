$(document).ready(function(){
    
    $('.search_box_enter input[type="text"]').on("keyup input", function(){
        
        /* Get input value on change */
        
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result_enter");
        if(inputVal.length){
            $.get("backend-search_porth.php", {term1: inputVal}).done(function(data){
                
                // Display the returned data in browser
                
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result_enter p", function(){
        $(this).parents(".search_box_enter").find('input[type="text"]').val($(this).text());
        
        $(this).parent(".result_enter").empty();
    });
});







