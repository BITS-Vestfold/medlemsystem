<?php
// session_start();
// Plass for å inkludere filer som trengs for loginfunksjoner mm.
include("dbTilkobling.php"); // Fil som har informasjon om, og oppretter kobling til, databasen.
// Plass for å definere enkelte variabler som skal være tilgjengelige uansett underside.
?>
<!DOCTYPE html>
<html lang="no">
<head>
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
  <link href="css/jquery-ui.css" rel="stylesheet">
  <link href="css/jquery-ui.theme.css" rel="stylesheet">

</head>
<body>
  <!-- TODO: sette inn enkel navbar med korrekte liker, samt ID-er og klasser -->
  <div class="container">
    <?php
      include("switchfunksjon.php");
        // Inkluderer switch-statementet i egen filer
      $dbLink->close();
        // Lukker koblingen til databasen som ble opprettet i inkludert fil over.
    ?>
  </div>
</body>
</html>
