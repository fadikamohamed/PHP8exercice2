<?php
//Démarage de la session
session_start();
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

                <?php if (!empty($_SESSION['lastname']) && !empty($_SESSION['firstname']) && !empty($_SESSION['age'])) { ?>
                    <p> 
                        <?php echo $_SESSION['lastname'] . ' ' . $_SESSION['firstname'] . ' ' . $_SESSION['age'] . ' ans'; ?>
                    </p>
                    <?php
                } else {
                    echo 'Aucune donnée a afficher';
                }
                ?>
                <a href="index.php">Page 1</a>
            </div>
        </div>
    </body>
</html>
