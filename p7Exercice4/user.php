<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>User page Exercice 4</title>
    </head>
    <body>
        <p>
            <?php
            // Vérifie que les variables ont une valeur
            if (!empty($_POST['firstname']) && !empty($_POST['lastname'])) {
                // Affiche la valeur des variables d'url concaténées 
                echo $_POST['firstname'] . ' ' . $_POST['lastname'];
            } else {
                // Message en cas de données manquantes
                echo 'Missing data';
            }
            ?>
        </p>
        <a href="index.php">Back</a>
    </body>
</html>
