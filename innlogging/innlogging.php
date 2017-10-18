<?php
?>
<!DOCTYPE html>
<html lang="no">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Innlogging - BITS</title>
  <!-- CSS-filer -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet">

  <!-- jQuery må være med av diverse grunner (BS++) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

  <!-- JS-scripts skal egentlig bli lagt inn til slutt for å sikre raskest mulig sidelasting... -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/confirm.js"></script>

</head>
<body>
  <div class="container">
    <!-- Her føler jeg for å kline inn i et nowdoc og echo'e det ut som en funksjon. Det kan være brukbart særlig i fremtidige tilpassinger. -->
    <div class="row well">
      <div class="col-xs-12">
        <div class="col-xs-3"></div>
        <div class="form-group form-login">
          <div class="col-xs-6">
            <h3>BITS - Innlogging</h3>
            <div class="alert alert-info" role="alert">
              <b>Sidene du forsøker å nå krever en innlogget bruker. Vennligst logg inn.</b>
            </div>
          <form id="loginSkjema" name="loginSkjema" method="POST" action="logginn.php">
            <!-- attributter med default verdier er utelatt-->
            <input type="text" id="brukernavn" name="brukernavn" class="form-control input-group" placeholder="Brukernavn">
            </br>
            <input type="password" id="passord" name="passord" class="form-control input-group" placeholder="Passordet">
            </br>
            <div class="wrapper">
              <span class="group-btn">
              <button type="submit" name="sendLogin" id="sendLogin" class="btn btn-success btn-md">Logg inn</button>
              </span>
              <span class="group-btn">
                <a href="glemt_passord.php" class="btn btn-info btn-md pull-right" role="button">Glemt passord?</a>
              </span>
            </div>
          </form>
      </div>
      <div class="col-xs-3"></div>
    </div>
  </div>
</div>
</div>
</body>
</html>
