<?php
session_start();
?>
<!DOCTYPE html>
<html lang="no">
<head>
  <!-- Støtte for favicons på forskjellige systemer/browsere-->
  <link rel="apple-touch-icon" sizes="180x180" href="../favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../favicons/favicon-16x16.png">
  <link rel="manifest" href="../favicons/manifest.json">
  <link rel="mask-icon" href="../favicons/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="../favicons/favicon.ico">
  <meta name="msapplication-config" content="../favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>TESTING - TESTING - KUN TESTING</title>
  <!-- CSS-filer -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/login.css" rel="stylesheet">

  <!-- jQuery må være med av diverse grunner (BS++) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

  <!-- JS-scripts skal egentlig bli lagt inn til slutt for å sikre raskest mulig sidelasting... -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
  <div class="container">
    <?php include('skjema.html');?>
  </div>
</body>
</html>
<?php
if ($_POST) {
  //$nypost = 
  print("<h4>$nypost</h4>");
}
?>
