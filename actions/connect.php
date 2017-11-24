<?php

$servername = "localhost";
$username = "robbedc";
$password = "dankmemes";

$mysqli = new mysqli($servername, $username, $password, "gohome");

if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

?>
