<?php
if (isset($_GET["funksjon"])) {

  $valgtFunksjon = $_GET["funksjon"];
    // Kopierer fra arrayverdien $_GET["funksjon"] over til en variabel
    // $_GET["funksjon"] får vi fra URL-en.

  switch ($valgtFunksjon) {
    // Kjører switch basert på valgt funksjon. Finner den ingen treff på inntastet URL,
    // skriver den ut feilmelding om dette. Ellers laster den inn forside hvis variabelen
    // ikke inneholder noe.
    
    case "forside":
      include("forside.php");
      break;

    case "registrer":
        include("reg_ny_medlem.php");
        break;

    case "medlemmer":
        include("vis_medlemmer.php");
        break;

    case "endre":
        include("endre_medlem.php");
        break;

    case "sok":
      include("sok_i_database.php");
      break;

    case "logg_ut":
      include("logg_ut.php");
      break;

    default: // Inntreffer kun hvis man skriver inn URL manuelt og da med ?funksjon=noe_annet_enn_i_switchen
    print("Funksjonen du har valgt er ugyldig, vennligst bruk menyen over for å velge funksjon.");

  }
} else { // Slutt på $GET_["funksjon"]
  include("forside.php"); // Skriv ut en standard forside siden ingen funksjon er valgt.
}
?>
