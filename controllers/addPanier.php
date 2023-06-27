<?php
session_start();

require_once "dbConfig.php";

$idProduit = $_GET['pdt'];

try {
    $querry = $bdd->prepare("INSERT INTO CONTENIR(refPanier, refProduit) VALUES(?,?)");
    $querry->execute($_SESSION['panier_id'] ,$idProduit);
    header('Location:../pages/produits.php');

} catch (Exception $e) {
    echo $e->getMessage();
}
