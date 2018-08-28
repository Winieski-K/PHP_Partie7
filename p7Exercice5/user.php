<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>User page Exercice 5</title>
    </head>
    <body>
        <p>
            <?php
            // Vérifie que les variables ont une valeur
            if (isset($_GET['firstname']) && isset($_GET['lastname']) && isset($_GET['gender'])) {
                // Affiche la valeur des variables d'url concaténées
                echo $_GET['gender'] . ' ' . $_GET['firstname'] . ' ' . $_GET['lastname'];
            } else {
                echo 'Missing data';
            }
            ?>
        </p>
        <a href="index.php">Back</a>
    </body>
</html>
