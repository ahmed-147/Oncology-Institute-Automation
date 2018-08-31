

$(document).ready(function(){
    
    $('.search-box input[type="text"]').on("keyup input", function(){
        
        /* Get input value on change */
        
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search_operation.php", {term: inputVal}).done(function(data){
                
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
        
        $('.name').val(dataObject.name);
        $('.age').val(dataObject.age);
        $('.date').val(dataObject.Date);
        $('.room').val(dataObject.Operating_room);
        
        $('.d7_area').val(dataObject.Pre_diag);
        $('.d8_area').val(dataObject.post_diag);
        $('.d9_sel2').val(dataObject.Op_category);
        $('.d9_sel3').val(dataObject.Op_type);
        $('.d9_sel4').val(dataObject.Op_nature);
        $('.d10_sel').val(dataObject.Surgeon);
        $('.d11_sel1').val(dataObject.Ass1_Surgeon);
        $('.d11_sel2').val(dataObject.Ass2_Surgeon);
        $('.d11_sel3').val(dataObject.Ass3_Surgeon);
        $('.d11_sel4').val(dataObject.Ass4_Surgeon);
        $('.d12_sel1').val(dataObject.Anesth1);
        $('.d12_sel2').val(dataObject.Anesth2);
        $('.d13_sel1').val(dataObject.Scrub_nurse1);
        $('.d13_sel2').val(dataObject.Scrub_nurse2);
        $('.d14_sel1').val(dataObject.Circ_nurse1);
        $('.d14_sel2').val(dataObject.Circ_nurse2);
        
        
        if(dataObject.An_tech1 == -1){
        $('.tech1').prop('checked', true);
        }
        else{
        $('.tech1').prop('checked', false);
        }
        
        if(dataObject.An_tech2 == -1){
        $('.tech2').prop('checked', true);
        }
        else{
        $('.tech2').prop('checked', false);
        }
        
        if(dataObject.An_tech3 == -1){
        $('.tech3').prop('checked', true);
        }
        else{
        $('.tech3').prop('checked', false);
        }
        
        if(dataObject.An_tech4 == -1){
        $('.tech4').prop('checked', true);
        }
        else{
        $('.tech4').prop('checked', false);
        }
        
        if(dataObject.An_tech5 == -1){
        $('.tech5').prop('checked', true);
        }
        else{
        $('.tech5').prop('checked', false);
        }
        
        if(dataObject.An_tech6 == -1){
        $('.tech6').prop('checked', true);
        }
        else{
        $('.tech6').prop('checked', false);
        }
        
        if(dataObject.An_tech7 == -1){
        $('.tech7').prop('checked', true);
        }
        else{
        $('.tech7').prop('checked', false);
        }
        
        if(dataObject.An_tech8 == -1){
        $('.tech8').prop('checked', true);
        }
        else{
        $('.tech8').prop('checked', false);
        }
        
        if(dataObject.An_tech9 == -1){
        $('.tech9').prop('checked', true);
        }
        else{
        $('.tech9').prop('checked', false);
        }
        
        
        $('.d15_inp1').val(dataObject.An_begin);
        $('.d15_inp2').val(dataObject.An_end);
        $('.d16_inp1').val(dataObject.Op_begin);
        $('.d16_inp2').val(dataObject.Op_end);
        $('.d17_d1').val(dataObject.Wound_class);
        
        
        
        if(dataObject.Body_system1 == -1){
        $('.body1').prop('checked', true);
        }
        else{
        $('.body1').prop('checked', false);
        }
        
        if(dataObject.Body_system2 == -1){
        $('.body2').prop('checked', true);
        }
        else{
        $('.body2').prop('checked', false);
        }
        
        if(dataObject.Body_system3 == -1){
        $('.body3').prop('checked', true);
        }
        else{
        $('.body3').prop('checked', false);
        }
        
        if(dataObject.Body_system4 == -1){
        $('.body4').prop('checked', true);
        }
        else{
        $('.body4').prop('checked', false);
        }
        
        if(dataObject.Body_system5 == -1){
        $('.body5').prop('checked', true);
        }
        else{
        $('.body5').prop('checked', false);
        }
        
        if(dataObject.Body_system6 == -1){
        $('.body6').prop('checked', true);
        }
        else{
        $('.body6').prop('checked', false);
        }
        
        if(dataObject.Body_system7 == -1){
        $('.body7').prop('checked', true);
        }
        else{
        $('.body7').prop('checked', false);
        }
        
        if(dataObject.Body_system8 == -1){
        $('.body8').prop('checked', true);
        }
        else{
        $('.body8').prop('checked', false);
        }
        
        if(dataObject.Body_system9 == -1){
        $('.body9').prop('checked', true);
        }
        else{
        $('.body9').prop('checked', false);
        }
        
        if(dataObject.Body_system10 == -1){
        $('.body10').prop('checked', true);
        }
        else{
        $('.body10').prop('checked', false);
        }
        
        if(dataObject.Body_system11 == -1){
        $('.body11').prop('checked', true);
        }
        else{
        $('.body11').prop('checked', false);
        }
        
        if(dataObject.Body_system12 == -1){
        $('.body12').prop('checked', true);
        }
        else{
        $('.body12').prop('checked', false);
        }
        
        if(dataObject.Body_system13 == -1){
        $('.body13').prop('checked', true);
        }
        else{
        $('.body13').prop('checked', false);
        }
        
        if(dataObject.Body_system14 == -1){
        $('.body14').prop('checked', true);
        }
        else{
        $('.body14').prop('checked', false);
        }
        
        if(dataObject.Body_system15 == -1){
        $('.body15').prop('checked', true);
        }
        else{
        $('.body15').prop('checked', false);
        }
        
        if(dataObject.Body_system16 == -1){
        $('.body16').prop('checked', true);
        }
        else{
        $('.body16').prop('checked', false);
        }
        
        if(dataObject.Body_system17 == -1){
        $('.body17').prop('checked', true);
        }
        else{
        $('.body17').prop('checked', false);
        }
        
        if(dataObject.Body_system18 == -1){
        $('.body18').prop('checked', true);
        }
        else{
        $('.body18').prop('checked', false);
        }
        
        if(dataObject.Body_system19 == -1){
        $('.body19').prop('checked', true);
        }
        else{
        $('.body19').prop('checked', false);
        }
              
        $('.d19_sel1').val(dataObject.Blood_type1);
        $('.d19_inp').val(dataObject.Blood_units1);
        $('.d20_sel1').val(dataObject.Blood_type2);
        $('.d20_inp').val(dataObject.Blood_units2);
        
        
        $('.d21_inp').val(dataObject.Blood_loss);
        $('.d22_area').val(dataObject.Op_procedure_type);
        $('.d23_area').val(dataObject.Op_procedure_details);
        $('.d24_area').val(dataObject.Intra_op_comp);
        
        
         
    }
  }
  xmlhttp.open("GET","getuser_operation.php?q="+str,true);
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
