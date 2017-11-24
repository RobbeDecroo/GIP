$(document).ready(function(){
  document.querySelector("#telnr").addEventListener("keypress", function(e){
    if(e.which < 48 || e.which > 57){
        e.preventDefault();
    }
  });

  document.querySelector("#voornaam").addEventListener("keypress", function(e){
    if(e.which > 48 || e.which < 57){
      e.preventDefault();
    }
  });

  document.querySelector("#achternaam").addEventListener("keypress", function(e){
    if(e.which > 48 || e.which < 57){
      e.preventDefault();
    }
  });

  document.querySelector("#land").addEventListener("keypress", function(e){
    if(e.which > 48 || e.which < 57){
      e.preventDefault();
    }
  });

  document.querySelector("#stad").addEventListener("keypress", function(e){
    if(e.which > 48 || e.which < 57){
      e.preventDefault();
    }
  });
});
