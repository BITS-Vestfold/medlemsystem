<?php
include 'inputvalidering.php';
include '../include/dbtilkobling.php';
include 'skjema.html'
$validering = new InndataValidator();

$validering->saniterData("$_POST["brukernavn"]", $dbLink);

?>
