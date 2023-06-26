<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>

    <?php
    if (isset($_GET['msg'])) {
        echo $_GET['msg'];
    }
    ?>

    <form action="../controllers/registerAction.php" method="post">
        <h1>Inscrivez-vous</h1>

        <div>
            <label for="nom">Votre nom : </label>
            <input type="text" name="nom" id="nom" placeholder="Votre nom" required>
        </div>

        <div>
            <label for="prenom">Votre prenom : </label>
            <input type="text" name="prenom" id="prenom" placeholder="Votre prenom" required>
        </div>

        <div>
            <label for="mail">Votre mail : </label>
            <input type="email" name="mail" id="mail" placeholder="Votre mail" required>
        </div>

        <div>
            <label for="mdp">Votre mot de passe : </label>
            <input type="password" name="mdp" id="mdp" placeholder="Votre mot de passe" required>
        </div>

        <div>
            <input type="submit" name="submit" value="S'inscrire">
        </div>

    </form>
</body>

</html>