<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>User page Exercice 3</title>
    </head>
    <body>
        <p>
            <?php
            // Vérifie si les variables ont une valeur
            if (!empty($_GET['firstname']) && !empty($_GET['lastname'])) {
                // Affiche les variables d'url concaténées
                echo $_GET['firstname'] . ' ' . $_GET['lastname'];
            } else {
                // Message d'erreur en cas de donnée manquante
                echo 'Missing Data';
            }
            ?>
        </p>
        <a href="index.php">Back</a>
    </body>
</html>
