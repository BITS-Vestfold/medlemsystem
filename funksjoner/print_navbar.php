<?php
//include_once("loginsys/sjekk.php");
//sjekkInnlogget("0"); // Brukernivå 0 påkreves (alle)

// Vi må bruke include_once i tilfelle noen kjører filene ved å skrive URL-en direkte i browseren.
// De ville dermed passert alle inkluderinger gjort på et høyere nivå.

function printNav() {
echo <<<'navbarHTML'
<div class="container-fluid">
  <nav class="navbar navbar-default">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#Navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Administratorpanel</a>
    </div>
    <div class="collapse navbar-collapse" id="Navbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php?funksjon=registrer_ny_bruker">Registrer bruker</a></li>
        <li><a href="index.php?funksjon=registerer_admin">Registrer admin</a></li>
        <li><a href="index.php?funksjon=endre_passord">Endre passord</a></li>
        <li><a href="#">Vis innlogginger</a></li>
        <li><a href="#">Logg ut</a></li>
      </ul>
    </div>
  </nav>
</div>
navbarHTML;
}
?>
