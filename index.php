<?php
session_start();
include_once('dbtilkobling.php'); // Fil som har informasjon om, og oppretter kobling til, databasen.

// session_start();
// Plass for å inkludere filer som trengs for loginfunksjoner mm.
// Plass for å definere enkelte variabler som skal være tilgjengelige uansett underside.
include_once('funksjoner/print_navbar.php');

?>
<!DOCTYPE html>
<html lang="no">
<head>
  <!-- Støtte for favicons på forskjellige systemer/browsere-->
  <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
  <link rel="manifest" href="/favicons/manifest.json">
  <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="/favicons/favicon.ico">
  <meta name="msapplication-config" content="/favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>BITS - Medlemsregistrering</title>
  <!-- CSS-filer (bruker CDN-utgave av bootstrap midlertidig, frontend-team gjør om ev.) -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet">

  <!-- jQuery må være med av diverse grunner (BS++) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

  <!-- JS-scripts skal egentlig bli lagt inn til slutt for å sikre raskest mulig sidelasting... -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link href="css/jquery-ui.css" rel="stylesheet">
  <link href="css/jquery-ui.theme.css" rel="stylesheet">

</head>
<body>
  <div class="container">
    <?php
      // Funksjon som skriver ut en navbar, HTML i egen fil for enkel tilpassing
      if($_SESSION["brukerniva"] === "2") {
        printAdminNav();
      } else {
        printNav();
      }
      // Inkluderer switch-statementet i egen fil for valg av funksjonalitet
      include("switchfunksjon.php");

      if($_SESSION) {
        print("Session_dump under om innlogget: <br>\n");
        var_dump($_SESSION);
      }

      $dbLink->close();
        // Lukker koblingen til databasen som ble opprettet i inkludert fil over.
    ?>
  </div>
<!-- JavaScript-filer bør inkluderes i bunnen for raskere lasting av siden. Gotta love that UX! -->
</body>
</html>
