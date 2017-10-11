<?php

function innlogget() {

  if (isset($_SESSION["innlogget"]) || isset($_SESSION["brukernavn"]) ) {
    return true;
  }
}

// Videre kode for å sjekke brukerlvl, og sette denne i $_SESSION
