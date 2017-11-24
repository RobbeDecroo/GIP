<!DOCTYPE html>
<html>
  <head>
    <title>GOHOME</title>
    <meta charset="UTF-8">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Eigen CSS -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Eigen JS -->
    <!-- Icon -->
    <link rel="icon" href="imgs/favicon.png">
  </head>

  <body>

    <div class="main">
      <div class="jumbotron">
        <div class="container">
          <div class="content-wrapper">
            <h1>GOHOME</h1>
            <h3>Zoek snel en eenvoudig naar een verblijfplaats voor tijdens je vakantie, onze leden kijken er naar uit om je te ontmoeten!</h3>
            <button class="button button-primary" onclick="getStarted()">Get started</button>
            <button class="button button-secondary">Meer informatie</button>
          </div>
        </div>
      </div>

      <div class="container" id="first-element">
        <center><h1>Vul iets in...</h1></center>
        <div class="row">
          <div class="col col-md-4">
            <div class="card">
              <div class="card-block">
                <h3 class="card-title">Wat is GoHome?</h3>
                <p class="card-text">GoHome is een programma waarop je kan zoeken naar een verblijfplaats voor tijdens jouw vakantie, MAAR wij bieden geen hotels aan! Onze gebruikers bieden hun eigen huis aan als onderdak voor u en uw gezin. GoHome is dus een toffe mannieer om nieuwe mensen en culturen te leren kennen.</p>
              </div>
            </div>
          </div>

          <div class="col col-md-4">
            <div class="card">
              <div class="card-block">
                <h3 class="card-title">Waarom ons?</h3>
                <p class="card-text">Waarom zou je nu voor ons kiezen als je ook comfortabel in een hotel kan slapen? Wel, bij ons leer je op een leuke mannier de cultuur van het land kennen en tegelijk ook interessante mensen met interessante verhalen. Het gebruik van onze services is volledig gratis en u kan ons 24/7 contacteren met uw vragen!</p>
              </div>
            </div>
          </div>

          <div class="col col-md-4">
            <div class="card">
              <div class="card-block">
                <h3 class="card-title">The cloud</h3>
                <p class="card-text">Onze diensten zijn overal beschikbaar op de cloud, wat betekent dat je zowel thuis als onderweg gebruik kan maken van onze website.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="colorflow" style="height:5em;"></div>

    <div class="main" id="dark">
      <div class="container" id="wide">

        <center><h1>Wat hebben we te bieden?</h1></center>

        <div class="row">
          <div class="col col-md-3">
            <div class="card">
              <div class="card-block">
                <h3 class="card-title">Kwaliteitsgarantie</h3>
                <p class="card-text">Door het gebruik van ons rating-systeem en het rapporteren van gebruikers kunnen wij u een 100% kwaliteitsgarantie bieden.</p>
              </div>
            </div>
          </div>

          <div class="col col-md-3">
            <div class="card">
              <div class="card-block">
                <h3 class="card-title">Volledig gratis</h3>
                <p class="card-text">Onze diensten zijn volledig gratis, maar u heeft wel de keuze om via PayPal een donatie te geven om verdere ontwikkeling te steunen.</p>
              </div>
            </div>
          </div>

          <div class="col col-md-3">
            <div class="card">
              <div class="card-block">
                <h3 class="card-title">Gebruiksvriendelijk</h3>
                <p class="card-text">Dankzij de gebruiksvriendelijkheid van onze website is het gebruik zowel op uw computer als uw smartphone even eenvoudig en snel in gebruik.</p>
              </div>
            </div>
          </div>

          <div class="col col-md-3">
            <div class="card">
              <div class="card-block">
                <h3 class="card-title">Altijd beschikbaar</h3>
                <p class="card-text">Dankzij de cloud zijn we altijd beschikbaar, of u nu thuis bent of op de bus zit.</p>
              </div>
            </div>
          </div>
        </div>

        <center><h1>GET STARTED</h1></center>
        <center><h3>Ben je overtuigd? Maak dan nu een gratis account!</h3></center>
        <center><button class="button button-primary" onclick="getStarted()">Maak een account</button></center>

        <div style="height:5em;"></div>
      </div>
    </div>

    <!-- POPUPS -->
    <div class="popup" data-popup="get-started">
      <div class="popup-inner">
        <h2>Maak nu je account</h2>
        <p class="popup-close" data-popup-close="get-started" href="/">x</p>
      </div>
    </div>

    <!-- Javascript -->
    <script>

      function getStarted(){
        this.window.location = "reg_pages/registreer.php";
      }

    </script>

    <div class="footer">
      <h5 class="pull-left">&copy; GOHOME - 2017</h5>
    </div>

  </body>
</html>
