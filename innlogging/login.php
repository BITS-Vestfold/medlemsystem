<?php
// Funksjonen under returnerer true hvis brukeren er logget inn, hvis ikke dreper den scriptet,
// etter at den videresender brukeren til siden for innlogging.
function sjekkInnlogget() {
  // Funksjonen er tenkt å ta imot et argument, som skal brukes til å vurdere brukernivået
  // for innlogget bruker er lik som er påkrevd for den aktuelle siden

  // Setter opp en sti, men vil ha en endret utgave der den henter sti fra for eks $_SERVER
  $sti = '/';

  if (!isset($_SESSION["loggetinn"]) && !isset($_SESSION["brnavn"]) ) {
    echo '<META HTTP-EQUIV=REFRESH CONTENT="3;' . $sti . 'innlogging/innlogging.php">';
    die("<div class=\"alert alert-danger\">Disse sidene er kun for innloggede brukere, <a href=\"login_sys/innlogging.php\">vennligst trykk her om du ikke blir videresendt.</a></div>");
    // For å sikre at brukeren ikke får se noe av sideinnholdet uten å være logget inn, dreper vi scriptet
    // her med tilhørende feilmelding.
  } elseif (!$_SESSION["loggetinn"] == "1") { // For ekstra sikkerhet sjekker vi at "innlogget" er satt til 1. Dette i et forsøk for å sikre imot session "hi-jacking".
    return false;  // Funksjonen returnerer hvis denne betingelsen inntreffer, noe den skal gjøre om en bruker er korrekt logget inn via systemet.
    die("<div class=\"alert alert danger\">En merkelig feil har oppstått! Kode 971</div>");
  } else {
    // Fremtidig skal det sjekkes for utestengelse.
    return true;
  }
}
?>
