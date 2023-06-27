<?php
session_start();

require_once "dbConfig.php";

if (isset($_POST['submit'])) {

    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];

    try {
        $query = $bdd->prepare("SELECT * FROM CLIENTS WHERE email=? AND motdepasse=?");
        $query->execute([$mail, $mdp]);

        $result = $query->fetch();

        if (!empty($result)) {
            // On stocke les informations du client dans la session et on lui creer un panier
            $_SESSION['id'] = $result['id'];
            $_SESSION['nom'] = $result['nom'];

            //Designation du panier composer du nom du client et d'un timestamp
            $designation = $_SESSION['nom'].'-'.time();

            try{
                $query = $bdd->prepare("INSERT INTO PANIERS(designation, refClient) VALUES(?, ?)");
                $query->execute([$designation, $_SESSION['id']]);
                $panier_id = $bdd->lastInsertId();
                $_SESSION['panier_id'] = $panier_id;
                
            }catch (Exception $e) {
                echo $e->getMessage();
            }

            header("Location:../pages/produits.php");
        }else {
            header("Location:../pages/login.php?msg=informations non valides");
        }
    } catch (Exception $e) {
        header("Location:../pages/login.php?msg=". $e->getMessage());
    }
}
