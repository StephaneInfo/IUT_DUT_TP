<?php
include './php/BDD.php';

include_once "./php/listeProduit.php";

foreach ($produit1 as $p1) {
    INSERT INTO BDD(URI) VALUES($p1);
}

foreach ($produit2 as $p2) {
    INSERT INTO BDD(URI) VALUES($p2);
}

?>