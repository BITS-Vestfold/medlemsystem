<?php

include 'include/dbtilkobling.php';

$sql = "CREATE TABLE admin (
  adminid INT(3) PRIMARY KEY AUTO_INCREMENT,
  adminbrukernavn VARCHAR(32) NOT NULL,
  passord VARCHAR(255) NOT NULL,
  lastlogin TIMESTAMP NOT NULL
);";

if ($dbLink->query($sql)) { // Vi utfører spørringen, og skriver ut ev. feilmeldinger vi måtte få.
  print("Great success! Tabellen \"admin\"ble opprettet i databasen.\n<br>");
} else { // Ev. feilmelding blir skrevet ut. Vanlig feil her er at tabellen allerede eksisterer.
  die("Kritisk feil: Noe gikk galt ved registrering av tabell! Feil fra DBMS:" . mysqli_error($dbLink) . "<br>");
}

$sql = "CREATE TABLE gruppe (
  gruppeid INT(1), PRIMARY KEY AUTO_INCREMENT,
  gruppenavn VARCHAR(32),
  tilgangsnivaa VARCHAR(64)
);";

if ($dbLink->query($sql)) { // Vi utfører spørringen, og skriver ut ev. feilmeldinger vi måtte få.
  print("Great success! Tabellen \"gruppe\"ble opprettet i databasen.\n<br>");
} else { // Ev. feilmelding blir skrevet ut. Vanlig feil her er at tabellen allerede eksisterer.
  die("Kritisk feil: Noe gikk galt ved registrering av tabell og databasen er kun delvis opprettet.\nFeil fra DBMS:" . mysqli_error($dbLink) . "<br>");
}

$sql = "CREATE TABLE medlem (
  brukerid INT(6), PRIMARY KEY AUTO_INCREMENT,
  fornavn VARCHAR(32) NOT NULL,
  etternavn VARCHAR(64) NOT NULL,
  brukernavn VARCHAR(32) NOT NULL,
  studentnummer INT(6),
  epost VARCHAR(128) NOT NULL,
  telefonnummer INT(8),
  adresse VARCHAR(196),
  fakultet VARCHAR(32) NOT NULL,
  aarskull INT(4)
  betaltsemestavgift BOOLEAN NOT NULL,
  registreringstid INT(20) NOT NULL,
  bildesti VARCHAR(128),
  brukergruppe INT(1),
  FOREIGN KEY (brukergruppe) REFERENCES gruppe(gruppeid)
);";

if ($dbLink->query($sql)) { // Vi utfører spørringen, og skriver ut ev. feilmeldinger vi måtte få.
  print("Great success! Tabellen \"medlem\"ble opprettet i databasen.\n<br>");
} else { // Ev. feilmelding blir skrevet ut. Vanlig feil her er at tabellen allerede eksisterer.
  die("Kritisk feil: Noe gikk galt ved registrering av tabell og databasen er kun delvis opprettet.\nFeil fra DBMS:" . mysqli_error($dbLink) . "<br>");
}

?>
