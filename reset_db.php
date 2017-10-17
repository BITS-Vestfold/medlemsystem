<?php
  include_once 'include/dbtilkobling.php';

  $sql = "DROP TABLE `admin`, `gruppe`, `medlem`;";
  $dbLink->query($sql); // Alt databaseinnhold relatert til systemet skal nå være slettet

  include 'opprett-databasestruktur.php';   // Oppretter alle tabeller og felter

  // Under oppretter vi administratorbrukeren
  $passord = password_hash("admin", PASSWORD_DEFAULT);  // [BYTT PASSORD]
  $sql = "INSERT INTO admin VALUES ('admin','$passord','post@bits.forening','time()')"; // Legg til def. admin

  $dbLink->query($sql);
?>
