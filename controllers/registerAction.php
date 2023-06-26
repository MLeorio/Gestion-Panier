<?php
require_once "dbConfig.php";

if (isset($_POST['submit'])) {

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];

    try {
        $query = $bdd->prepare("INSERT INTO CLIENTS(nom, prenom, email, motdepasse) VALUES(?,?,?,?)");
        $query->execute([$nom, $prenom, $mail, $mdp]);
        header("Location:../pages/login.php");

    } catch (Exception $e) {
        header("Location:../pages/register.php?msg=". $e->getMessage());
    }

}
