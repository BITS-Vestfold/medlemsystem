<?php
  include_once('include/dbtilkobling.php');

  $sql = "DROP TABLE `admin`;";
  $sql .= "DROP TABLE `medlem`;";
  $sql .= "DROP TABLE `gruppe`;";

  // Slettingen feiler tidvis, en refresh så fungerer det. Forsøker multiquery for å se om det utgjør en forskjell.

  $dbLink->multi_query($sql); // Alt databaseinnhold relatert til systemet skal nå være slettet

  include 'opprett-databasestruktur.php';   // Oppretter alle tabeller og felter
  $naatid = time();
  // Under oppretter vi administratorbrukeren
  $admPassord = password_hash("adminPassord123", PASSWORD_DEFAULT);  // [BYTT PASSORD]
  $sql = "INSERT INTO admin (adminbrukernavn, passord, adminepost, laget_timestamp) VALUES ('admin','$admPassord','post@bits.forening',$naatid)" // Legg til def. admin
  or die("<div class=\"alert alert-danger\" role=\"alert\">Kunne ikke legge til default admin-bruker. Feil fra DBHS: " . $dbLink->error . "</div>");

  $sqlSvar = $dbLink->query($sql);
  if ($sqlSvar) {
    print("<br>Default adminbruker sannsynligvis opprettet. Bytt passord i produksjonsmiljø!");
  }
?>
