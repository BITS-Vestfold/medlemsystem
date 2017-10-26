<?php

// function printBrukerNav() {}

function printNav() {
echo <<<'navbarHTML'
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1-collapse" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">BITS - medlemssystem</a>
    </div>

    <div class="collapse navbar-collapse" id="navbar1-collapse">
      <ul class="nav navbar-nav">
          <!-- Enkeltknapper -->
          <li><a href="innlogging/innlogging.php">Logg inn</a></li>
          <li><a href="index.php?funksjon=bruker_reg">Registrer deg</a></li>
      </ul>
    </div>
  </div>
</nav>
navbarHTML;
}

function printAdminNav() {
echo <<<'navbarHTML'
<nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1-collapse" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">BITS - medlemsregister</a>
      </div>

      <div class="collapse navbar-collapse" id="navbar1-collapse">
        <ul class="nav navbar-nav">

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registrering <span class="caret"></span></a>
            <ul class="dropdown-menu">

              <li><a href="index.php?funksjon=registrer_medlem">Nytt medlem</a></li>
              <li role="separator" class="divider"></li>

              <li><a href="?funksjon=registrer_admin">Ny admin</a></li>
            </ul>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Medlemsliste <span class="caret"></span></a>
            <ul class="dropdown-menu">

              <li><a href="?funksjon=vis_alle_medlemmer">Alle medlemmer</a></li>
              <li role="separator" class="divider"></li>

              <li><a href="?funksjon=vis_fakultet">Basert på fakultet</a></li>
              <li role="separator" class="divider"></li>

              <li><a href="?funksjon=vis_aarskull">Basert på årskull</a></li>
              <li role="separator" class="divider"></li>

              <li><a href="?funksjon=vis_alle_admins">Alle admins</a></li>
            </ul>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Endre data <span class="caret"></span></a>
            <ul class="dropdown-menu">

              <li><a href="?funksjon=endre_medlem">Endre medlemsinfo</a></li>
              <li role="separator" class="divider"></li>

              <li><a href="?funksjon=endre_admin">Endre adminkonto</a></li>
              <li role="separator" class="divider"></li>

              <li><a href="?funksjon=endre_tilhorighet">Endre tilhørighet</a></li>
              <li role="separator" class="divider"></li>

              <li><a href="?funksjon=slett_medlem">Slett medlem</a></li>
            </ul>
          </li>

          <!-- Enkeltknapper -->
          <li><a href="index.php?funksjon=eksporter">Eksporter</a></li>
          <li><a href="index.php?funksjon=sok">Søk</a></li>
          <li><a href="index.php?funksjon=logg_ut">Logg ut</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
navbarHTML;
}
?>
