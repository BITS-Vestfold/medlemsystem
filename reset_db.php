<?php
  include_once('include/dbtilkobling.php');
//  include_once('innlogging/login.php');
  session_start();
//  sjekkInnlogget(1);

//  $sql = "SET foreign_key_checks = 0;";
  $sql = "DROP TABLE admin,gruppe,medlem,tilhorighet;";
//  $sql .= "DROP TABLE medlem;";
//  $sql .= "DROP TABLE tilhorighet;";

  // Slettingen feiler tidvis, men mer stabilt enn multi_query.

  $dbLink->query($sql); // Alt databaseinnhold relatert til systemet skal nå være slettet

  include 'opprett-databasestruktur.php';   // Oppretter alle tabeller og felter
  $naatid = time();
  // Under oppretter vi administratorbrukeren
  $admPassord = password_hash("adminP123", PASSWORD_DEFAULT);  // [BYTT PASSORD]
  $sql = "INSERT INTO admin (adminbrukernavn, passord, adminepost, laget_timestamp) VALUES ('admin','$admPassord','post@bits.forening',$naatid)" // Legg til def. admin
  or die("<div class=\"alert alert-danger\" role=\"alert\">Kunne ikke legge til default admin-bruker. Feil fra DBHS: " . $dbLink->error . "</div>");

  $sqlSvar = $dbLink->query($sql);
  if ($sqlSvar) {
    print("<br>Default adminbruker sannsynligvis opprettet. Bytt passord i produksjonsmiljø!");
  }
?>
