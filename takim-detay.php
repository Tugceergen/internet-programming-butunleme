<?php

$takimId = (isset($_GET["takim_id"])) ? $_GET["takim_id"] : 0;

if ($takimId) {
    include_once("lib/db_connect.php");
    $voleybol = new Voleybol;
    $oyuncular =  $voleybol->getOyuncularByTakimId($takimId);
    print_r($oyuncular);
} else {
    echo "takim id belirtiniz.";
}
