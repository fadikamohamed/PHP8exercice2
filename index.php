<?php
//Démarage de la session
session_start();
//Superglobale de session avec clé associative
$_SESSION['lastname'] = 'FADIKA';
$_SESSION['firstname'] = 'Mohamed';
$_SESSION['age'] = 30;
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
        <title>Exercice 2</title>
    </head>
    <body>
        <div class="container">
            <div class="text-center bg-dark text-white">
                <p><?php echo $_SESSION['lastname'] . ' ' . $_SESSION['firstname'] . ' ' . $_SESSION['age'] . ' ans'; ?></p>
                <a href="index2.php">Page 2</a>
            </div>
        </div>
    </body>
</html>
