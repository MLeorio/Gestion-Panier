<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_GET['msg'])) {
        echo $_GET['msg'];
    } else {
    ?>
        <a href="pages/register.php">S'inscrire</a> <br>
        <a href="pages/login.php">Se connecter</a>
    <?php
    }
    ?>
</body>

</html>