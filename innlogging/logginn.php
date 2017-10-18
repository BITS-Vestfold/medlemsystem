<?php
  include_once('sys-funksjoner.php');
  include_once('../include/dbtilkobling.php'); // Gir oss tilgang til db via $dbLink

  $brukerFraSkjema = htmlspecialchars($dbLink->real_escape_string($_POST["brukernavn"]));
  $passordFraSkjema = htmlspecialchars($dbLink->real_escape_string($_POST["passord"]));

  trim($brukerFraSkjema);
  trim($passordFraSkjema);

  var_dump($brukerFraSkjema,$passordFraSkjema);
  print("<br>");

  sjekkLogin($brukerFraSkjema, $passordFraSkjema, $dbLink);
?>
