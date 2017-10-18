<?php

// Kan hele $_POST sendes som argument til constructoren?

class Inndatavalidering {

  // Constructor)
  // Lage array med feilmeldinger med key=>value-par
  include 'include/sysmeldinger.php.inc'; // Endre siden, dele opp og inkludere alt i index for eks.

  public function validerEpostformat($epost) {
    // funksjon for å validere om epost-formatet er korrekt innskrevet med regex
  }

  public function sjekkTommeFelter() {
    // Kan ta imot uendelig med argumenter, og sjekker om de er tomme / is.empty eller ("")
  }
}

?>
