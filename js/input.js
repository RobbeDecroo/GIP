$(document).ready(function () {

  var map = {};
  onkeydown = onkeyup = function(e){
    e = e || event;
    map[e.keyCode] = e.type == 'keydown';

    if(map[16] && map[188]) e.preventDefault();
    if(map[49] && !map[16]) e.preventDefault();
  }
});
