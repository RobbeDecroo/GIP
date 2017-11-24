<?php

  include "../actions/connect.php";

  if(isset($_COOKIE["isRegistered"])){
    //Deze computer heeft al een account aangemaakt
  } else {

    //setcookie("isRegistered", true);
    $email = $_GET["email"];
    $pass = $_GET["pass"];
    $voornaam = $_GET["voornaam"];
    $achternaam = $_GET["achternaam"];
    $telnr = $_GET["telnr"];
    $land = $_GET["land"];
    $stad = $_GET["stad"];
    $straat = $_GET["straat"];

    $qry = $mysqli->prepare("INSERT INTO tblregistraties (registratienummer, email, wachtwoord, voornaam, achternaam, telefoonnummer, land, stad, straat) VALUES (NULL, ?, MD5(?), ?, ?, ?, ?, ?, ?);");
    $qry->bind_param("ssssssss", $email, $pass, $voornaam, $achternaam, $telnr, $land, $stad, $straat);

    if($qry->execute()){
      setcookie("isRegistered", true);
    }
  }

?>
