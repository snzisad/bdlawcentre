$(document).ready(function()
{
    myFunction();
});

function myFunction() {
    // Get the snackbar DIV
    var x = document.getElementById("snackbar");
  
    // Add the "show" class to DIV
    x.className = "show";
  
    // After 5 seconds, remove the show class from DIV
    setTimeout(function(){ 
        x.className = x.className.replace("show", ""); 
    }, 5000);
  }