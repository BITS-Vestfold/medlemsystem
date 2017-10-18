<?php
// Fil som tar imot data fra skjemaet for innlogging


function sjekkLogin($brukernavn, $passord, $dbConn) {
  // Foreløpig kun tilpasset adminbrukere
  print("Forsøker...<br>");
  $sql = "SELECT passord FROM admin WHERE adminbrukernavn='$brukernavn';";
  // Utfør spørring
  $sqlSvar = $dbConn->query($sql);
  $dbPassord = $sqlSvar->fetch_assoc();
  var_dump($brukernavn);
  print("<br>");
  var_dump($passord);
  print("<br>");
  var_dump($dbPassord);
  print("<br>");
  if (password_verify($passord, $dbPassord)) {
    print("Yes");
  } else {
    print("ooops.");
  }
}

?>
