<?php

use Model\Abonne;

require_once 'autoload.php';

if (isset($_GET["id"])) {
    $abonne = Abonne::find($_GET["id"]);
    echo "<pre>";
    var_dump($abonne);
    echo "</pre>";
}
