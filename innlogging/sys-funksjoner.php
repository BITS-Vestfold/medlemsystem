<?php
// Fil som tar imot data fra skjemaet for innlogging
session_start();

function sjekkLogin($brukernavn, $passord, $dbConn) {
  // Foreløpig kun tilpasset adminbrukere
  $sql = "SELECT passord FROM admin WHERE adminbrukernavn='$brukernavn';";
  // Utfør spørring
  $sqlSvar = $dbConn->query($sql) OR die("Noe gikk feil.");
  $dbPassord = $sqlSvar->fetch_assoc();

  if (password_verify($passord, $dbPassord["passord"])) {
    print("<div class=\"alert alert-success\">Innlogging vellykket. <a href=\"../index.php\">Du blir nå vidersendt.</a></div>");
    //$mld["LoginOk"]
    echo('<META HTTP-EQUIV=REFRESH CONTENT="2;../index.php">');

    // Hvis innloggingen er vellykket, altså at passord_verify returnerer true,
    // setter vi $_SESSION-variabler som gjenspeiler dette.
    $_SESSION["brnavn"] = "$brukernavn";
    $_SESSION["loggetinn"] = "1";

    // Midlertidig blir sikkerhetenssjekken kun basert på session-variabler.
    // Det bør og kan legges på flere lag med sikring.

    //  $logginnTid = date("Y-m-d H:i:s", time());
    //  Fremtidig: logg innloggingen til databasen

  } else {
    print("<div class=\"alert alert-danger\">Dette gikk galt. Vennligst forsøk på ny.</div>");

    // Fremtidig funksjon bør se på brukernavn, og legge til funksjonalitet
    // for midlertidig utestengelse om n-antall mislykkede forsøk blir utført.
  }
}

?>
