<?php
class InndataValidator {

  public function saniterData($feltnavn,&$dbLink) {
    $returnData = trim(htmlspecialchars($dbLink->real_escape_string($_POST["$feltnavn"])));
    var_dump ($returnData);
    return $returnData;
  }

  public function __construct($datametode = "post") {
    if ($datametode !== strtolower("post")) {
      $this->metode = $datametode;

    }
  }
}
?>
