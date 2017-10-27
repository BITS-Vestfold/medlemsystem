<?php
include_once("innlogging/login.php");
include_once("funksjoner/print_skjema.php");
session_start();
sjekkInnlogget(2);

skrivRegFakultetSkjema();
var_dump($_POST);
if (isset($_POST["regfakultetsubmit"])) {

  // Først sjekker vi om noen av feltene er utfylt
  if((!isset($_POST["regnyttfakultet"]) || ($_POST["regnyttfakultet"] == "")) && (!isset($_POST["regnyttaarskullvalg"]) || ($_POST["regnyttaarskullvalg"] == ""))) {
    print('<div class="alert alert-danger">Du må fylle inn minst ett av feltene for å kunne fortsette.</div>');
  }

  // Kjøre sjekk på om data som skal sendes inn allerede er registrert
}
?>
