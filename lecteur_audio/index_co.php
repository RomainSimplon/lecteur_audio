<?php
        session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php


        if (isset($_SESSION["user_name"])) {
            echo '<h3>Connexion réussie, Bienvenue ' . $_SESSION["user_name"] . '</h3>';
        } else {

        echo "<script type='text/javascript'>document.location.replace('index.php?message= connection fail, utilisateur inconnu');</script>";
        }
        ?>

<div class="link">
                <a class="button" href="login/process/logout.php">logout</a>
            </div>

</body>
</html>