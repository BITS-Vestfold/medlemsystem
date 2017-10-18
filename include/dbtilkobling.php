<?php
include_once('../innlogging/login.php');
sjekkInnlogget(1);
// [BYTT LOGIN-INFO VED FLYTTING]
// Tilpasset mildertidig utviklings-VPS

$tjener = "127.0.0.1";
$brukernavn = "bitssys";
$passord = "nKl178l";
$database = "bits";

$dbLink = new mysqli($tjener, $brukernavn, $passord, $database);
// Vi oppretter objektet $dbLink som en kobling mot sql-serveren

// try/catch-blokk i stedet, og bedre feilhåndtering på sikt (feilmld.conf-ish osv.)

if ($dbLink->connect_error) {
  die("<div class=\"alert alert-danger\" role=\"alert\">Fatal feil, kunne ikke koble til databasen: " . $dbLink->connect_error . "</div>");
    // Over sjekker vi om tilkoblingen til databasen er opprettet. Er den ikke det,
    // dør scriptet, og mysql skriver ut feilmelding.
}

$dbLink->set_charset("utf8");

?>
