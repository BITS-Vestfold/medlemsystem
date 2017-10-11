<?php

$tjener = "localhost";
$brukernavn = "";
$passord = "";
$database = "";

$dbLink = new mysqli($tjener, $brukernavn, $passord, $database);
// Vi oppretter objektet $dbLink som en kobling mot sql-serveren

if ($dbLink->connect_error) {
  die("<div class=\"alert alert-danger\" role=\"alert\">Fatal feil, kunne ikke koble til databasen: " . $dbLink->connect_error . "</div>");
    // Over sjekker vi om tilkoblingen til databasen er opprettet. Er den ikke det,
    // dør scriptet, og mysql skriver ut feilmelding.
}

$dbLink->set_charset("utf8");

?>
