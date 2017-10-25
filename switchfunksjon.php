<?php

if (isset($_GET["funksjon"])) {

  $valgtFunksjon = $_GET["funksjon"];
  // Kopierer fra arrayverdien $_GET["funksjon"] over til en variabel
  // $_GET["funksjon"] får vi fra URL-en.

  switch ($valgtFunksjon) {
    // Kjører switch basert på valgt funksjon. Finner den ingen treff på inntastet URL,
    // skriver den ut feilmelding om dette. Ellers laster den inn forside hvis variabelen
    // ikke inneholder noe.

    case "registrer_medlem":
    include("reg_ny_medlem.php");
    break;

    case "registrer_admin":
    include("reg_ny_admin.php");
    break;

    case "nytt_nivaa":
    include("reg_nytt_brukernivaa.php");
    break;

    case "vis_alle_medlemmer":
    include("vis_medlemmer.php");
    break;

    case "vis_fakultet":
    include("vis_medlemmer.php");
    break;

    case "vis_aarskull":
    include("vis_medlemmer.php");
    break;

    case "vis_alle_admins":
    include("vis_admins.php");
    break;

    case "endre_medlem":
    include("endre_medlemsinfo.php");
    break;

    case "endre_admin":
    include("endre_admininfo.php");
    break;

    case "endre_tilhorighet":
    include("endre_tilhorighet.php");
    break;

    case "slett_medlem":
    include("slett_medlem.php");
    break;

    case "eksporter":
    include("eksporter_data.php");
    break;

    case "sok":
    include("dbsok.php");
    break;

    case "logg_ut":
    include("innlogging/logg_ut.php");
    break;

    default: // Inntreffer kun hvis man skriver inn URL manuelt og da med ?funksjon=noe_annet_enn_i_switchen
    print("Funksjonen du har valgt er ugyldig, vennligst bruk menyen over for å velge funksjon.");
  }
} else { // Slutt på $GET_["funksjon"]
  include("forside.php"); // Skriv ut en standard forside siden ingen funksjon er valgt.
}
?>
