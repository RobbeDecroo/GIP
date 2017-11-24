<!DOCTYPE html>
<html id="html">
  <head>
    <title>Maak nu je gratis account</title>
    <meta charset="UTF-8">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Eigen CSS
    <link rel="stylesheet" type="text/css" href="css/main.css"> -->
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Eigen JS -->
    <script src="../js/input.js"></script>
    <script src="../js/telnr.js"></script>
    <script src="../js/letters.js"></script>

    <style>
      /*custom font*/
      @import url(http://fonts.googleapis.com/css?family=Montserrat);

      /*basic reset*/
      * {margin: 0; padding: 0;}

      #html {
      outline: none;
      height: 100%;
      /*Image only BG fallback*/
      /*background: url(http://thecodeplayer.com/uploads/media/gs.png);*/
      /*background = gradient + image pattern combo*/
      background-image: url(../imgs/reg_pages/bg-step1.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      }

      body {
      font-family: montserrat, arial, verdana;
      background-color: rgba(0,0,0,0);
      }
      /*form styles*/
      #msform {
      width: 400px;
      margin: 50px auto;
      text-align: center;
      position: relative;
      }
      #msform fieldset {
      background: white;
      border: 0 none;
      border-radius: 3px;
      box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
      padding: 20px 30px;

      box-sizing: border-box;
      width: 80%;
      margin: 0 10%;

      /*stacking fieldsets above each other*/
      position: absolute;
      }
      /*Hide all except first fieldset*/
      #msform fieldset:not(:first-of-type) {
      display: none;
      }
      /*inputs*/
      #msform input, #msform textarea {
      padding: 15px;
      border: 1px solid #ccc;
      border-radius: 3px;
      margin-bottom: 10px;
      width: 100%;
      height: 100%;
      box-sizing: border-box;
      font-family: montserrat;
      color: #2C3E50;
      font-size: 13px;
      }

      .input-group{
        margin-bottom: 10px;
      }

      .form-control{
        margin-bottom: 0px !important;
        border-top-left-radius: 0px !important;
        border-bottom-left-radius: 0px !important;
      }

      .input-group-addon {
        padding: 15px;
        font-size: 13px;
      }

      /*buttons*/
      #msform .action-button {
      width: 100px;
      background: #27AE60;
      font-weight: bold;
      color: white;
      border: 0 none;
      border-radius: 1px;
      cursor: pointer;
      padding: 10px 5px;
      margin: 10px 5px;
      }
      #msform .action-button:hover, #msform .action-button:focus {
      box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
      }
      /*headings*/
      .fs-title {
      font-size: 15px;
      text-transform: uppercase;
      color: #2C3E50;
      margin-bottom: 10px;
      }
      .fs-subtitle {
      font-weight: normal;
      font-size: 13px;
      color: #666;
      margin-bottom: 20px;
      }
      /*progressbar*/
      #progressbar {
      margin-bottom: 30px;
      overflow: hidden;
      background-color: rgba(0,0,0,0);
      /*CSS counters to number the steps*/
      counter-reset: step;
      }
      #progressbar li {
      list-style-type: none;
      color: white;
      text-transform: uppercase;
      font-size: 9px;
      width: 25%;
      float: left;
      position: relative;
      }
      #progressbar li:before {
      content: counter(step);
      counter-increment: step;
      width: 20px;
      line-height: 20px;
      display: block;
      font-size: 10px;
      color: #333;
      background: white;
      border-radius: 3px;
      margin: 0 auto 5px auto;
      }
      /*progressbar connectors*/
      #progressbar li:after {
      content: '';
      width: 100%;
      height: 2px;
      background: white;
      position: absolute;
      left: -50%;
      top: 9px;
      z-index: -1; /*put it behind the numbers*/
      }
      #progressbar li:first-child:after {
      /*connector not needed before the first step*/
      content: none;
      }
      /*marking active/completed steps green*/
      /*The number of the step and the connector before it = green*/
      #progressbar li.active:before,  #progressbar li.active:after{
      background: #27AE60;
      color: white;
      }

      .error{
        border-color: red;
        background-color: rgba(188, 0, 0, 0.3);
        color: white;
      }

      @keyframes shake{
        10% { transform: translateX(0px); }
        45% { transform: translateX(20px); }
        90% { transform: translateX(-20px); }
        100% { transform: translateX(0px); }
      }

      .schud{
        animation: shake 0.5s 1;
      }

    </style>
  </head>

  <body>

    <!-- multistep form -->
    <form id="msform" method="post" action="create_account.php">
    	<!-- progressbar -->
    	<ul id="progressbar">
    		<li class="active">Accountsgegevens</li>
    		<li>Persoonlijke gegevens</li>
    		<li>Woonplaats</li>
        <li>Verifiëer</li>
    	</ul>
    	<!-- fieldsets -->
    	<fieldset>
    		<h2 class="fs-title">Maak je account</h2>
    		<h3 class="fs-subtitle">Met deze gegevens ga je aanmelden</h3>
    		<input type="text" name="email" id="email" maxlength="120" onfocus="checkError(this.id)" placeholder="Email" />
    		<input type="password" name="pass" id="pass" maxlength="50" onfocus="checkError(this.id)" placeholder="Wachtwoord" />
    		<input type="password" name="cpass" id="cpass" maxlength="50" onfocus="checkError(this.id)" placeholder="Bevestig wachtwoord" />
    		<input type="button" name="next" id="next" class="next action-button" value="Ga verder" />
    	</fieldset>
    	<fieldset>
    		<h2 class="fs-title">Persoonlijke gegevens</h2>
    		<h3 class="fs-subtitle">We willen graag weten wie u bent</h3>
    		<input type="text" name="voornaam" class="letters_only" maxlength="20" onfocus="checkError(this.id)" id="voornaam" placeholder="Voornaam" />
    		<input type="text" name="achternaam" class="letters_only" maxlength="30" onfocus="checkError(this.id)" id="achternaam" placeholder="Achternaam" />
        <div class="input-group">
          <span class="input-group-addon" id="telnr_addon">+32</span>
          <input type="text" class="form-control" aria-describedby="telnr_addon" name="telnr" maxlength="15" onfocus="checkError(this.id)" id="telnr" placeholder="Telefoonnummer" />
        </div>
    		<input type="button" name="previous" class="previous action-button" value="Ga terug" />
    		<input type="button" name="next" id="next" class="next action-button" value="Ga verder" />
    	</fieldset>
    	<fieldset>
    		<h2 class="fs-title">Woonplaats</h2>
    		<h3 class="fs-subtitle">We willen graag weten waar u woont</h3>
    		<input type="text" name="land" class="letters_only" maxlength="50" onfocus="checkError(this.id)" id="land" placeholder="Land" />
    		<input type="text" name="stad" class="letters_only" maxlength="50" onfocus="checkError(this.id)" id="stad" placeholder="Stad" />
    		<input type="text" name="straat" maxlength="50" onfocus="checkError(this.id)" id="straat" placeholder="Straat en nummer" />
    		<input type="button" name="previous" class="previous action-button" value="Ga terug" />
    		<input type="button" name="next" id="next" class="next action-button" value="Ga verder" />
    	</fieldset>
      <fieldset>
        <h2 class="fs-title">Akkoord</h2>
        <h3 class="fs-subtitle">Door op akkoord te klikken verifiëert u dat de ingevulde gegevens correct zijn en gaat u akkoord met de <a href="#">algemene gebruiksvoorwaarden</a></h3>
        <input type="button" name="previous" class="previous action-button" value="Ga terug" />
        <input type="button" name="submit" onclick="submitForm()" class="action-button" value="Akkoord">
      </fieldset>
    </form>

    <script>

      function submitForm(){

        var email = document.getElementById("email").value;
        var pass = document.getElementById("pass").value;
        var voornaam = document.getElementById("voornaam").value;
        var achternaam = document.getElementById("achternaam").value;
        var telnr = document.getElementById("telnr").value;
        var land = document.getElementById("land").value;
        var stad = document.getElementById("stad").value;
        var straat = document.getElementById("straat").value.split();

        var url = "create_account.php?email="+email+"&pass="+pass+"&voornaam="+voornaam+"&achternaam="+achternaam+"&telnr="+telnr+"&land="+land+"&stad="+stad+"&straat="+straat;
        window.location.href=url;
      }

    </script>

    <!-- jQuery -->
    <script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <!-- jQuery easing plugin -->
    <script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>

      <script>

      function checkError(click_id){
        var element = document.getElementById(click_id);
        if(element.classList.contains("error")){
          element.classList.remove("error");
        }
      }

      //jQuery time
      var current_fs, next_fs, previous_fs; //fieldsets
      var left, opacity, scale; //fieldset properties which we will animate
      var animating; //flag to prevent quick multi-click glitches
      var error = false;
      var current_nr = 1;

      $(".next").click(function(){
      if(animating) return false;
      animating = true;

      if(current_nr === 1){
        var email = document.getElementById("email");
        var pass  = document.getElementById("pass");
        var cpass = document.getElementById("cpass");

        if(email.value === "" || !(email.value.indexOf("@") >= 0)){ email.classList.add("error"); error = true; }
        if(pass.value === ""){ pass.classList.add("error"); error = true; }
        if(cpass.value !== pass.value || cpass.value === ""){ cpass.classList.add("error"); error = true; }

        if(error){ error = false; animating = false; return false; }
      }

      if(current_nr === 2){
        var voornaam = document.getElementById("voornaam");
        var achternaam = document.getElementById("achternaam");
        var telnr = document.getElementById("telnr");

        if(voornaam.value === ""){ voornaam.classList.add("error"); error = true; }
        if(achternaam.value === ""){ achternaam.classList.add("error"); error = true; }
        if(telnr.value === ""){ telnr.classList.add("error"); error = true; }

        if(error){ error = false; animating = false; return false; }
      }

      if(current_nr === 3){
        var land = document.getElementById("land");
        var stad = document.getElementById("stad");
        var straat = document.getElementById("straat");

        if(land.value === ""){ land.classList.add("error"); error = true }
        if(stad.value === ""){ stad.classList.add("error"); error = true }
        if(straat.value === ""){ straat.classList.add("error"); error = true }

        if(error){ error = false; animating = false; return false; }
      }

      current_fs = $(this).parent();
      next_fs = $(this).parent().next();

      //activate next step on progressbar using the index of next_fs
      $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

      //show the next fieldset
      next_fs.show();
      //hide the current fieldset with style
      current_fs.animate({opacity: 0}, {
        step: function(now, mx) {
          //as the opacity of current_fs reduces to 0 - stored in "now"
          //1. scale current_fs down to 80%
          scale = 1 - (1 - now) * 0.2;
          //2. bring next_fs from the right(50%)
          left = (now * 50)+"%";
          //3. increase opacity of next_fs to 1 as it moves in
          opacity = 1 - now;
          current_fs.css({'transform': 'scale('+scale+')'});
          next_fs.css({'left': left, 'opacity': opacity});
        },
        duration: 800,
        complete: function(){
          current_fs.hide();
          current_nr = current_nr + 1;
          animating = false;
        },
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
      });
      });

      $(".previous").click(function(){
      if(animating) return false;
      animating = true;

      current_nr = current_nr - 1;

      current_fs = $(this).parent();
      previous_fs = $(this).parent().prev();

      //de-activate current step on progressbar
      $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

      //show the previous fieldset
      previous_fs.show();
      //hide the current fieldset with style
      current_fs.animate({opacity: 0}, {
        step: function(now, mx) {
          //as the opacity of current_fs reduces to 0 - stored in "now"
          //1. scale previous_fs from 80% to 100%
          scale = 0.8 + (1 - now) * 0.2;
          //2. take current_fs to the right(50%) - from 0%
          left = ((1-now) * 50)+"%";
          //3. increase opacity of previous_fs to 1 as it moves in
          opacity = 1 - now;
          current_fs.css({'left': left});
          previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
        },
        duration: 800,
        complete: function(){
          current_fs.hide();
          animating = false;
        },
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
      });
      });

    </script>

  </body>
</html>
