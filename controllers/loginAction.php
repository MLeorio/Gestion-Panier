<?php
require_once "dbConfig.php";

if (isset($_POST['submit'])) {

    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];

    try {
        $query = $bdd->prepare("SELECT * FROM CLIENTS WHERE email=? AND motdepasse=?");
        $query->execute([$mail, $mdp]);

        $result = $query->fetch();

        if (!empty($result)) {
            header("Location:../index.php?msg=Bonjour ". $result['nom']);
        }else {
            header("Location:../pages/login.php?msg=informations non valides");
        }
    } catch (Exception $e) {
        header("Location:../pages/login.php?msg=". $e->getMessage());
    }
}
