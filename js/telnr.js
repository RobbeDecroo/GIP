$(document).ready(function(){
  document.querySelector("#telnr").addEventListener("keypress", function(e) {
    if(e.which < 48 || e.which > 57){
      e.preventDefault();
    }
  });
});
