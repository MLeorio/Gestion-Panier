<?php

require_once "dbConfig.php";


try {
    $querry = $bdd->prepare("SELECT * FROM PRODUITS WHERE quantite>0");
    $querry->execute();

    $result = $querry->fetchAll();
} catch (Exception $e) {
    echo $e->getMessage();
}
