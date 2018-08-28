<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>User page Exercice 7</title>
    </head>
    <body>
        <p>
            <?php
            // Vérifie que les variables ont bien une valeur
            if (!empty($_GET['gender']) && !empty($_GET['lastname']) && !empty($_GET['firstname'])) {
                // Affiche la valeur des variables
                echo $_GET['gender'] . ' ' . $_GET['lastname'] . ' ' . $_GET['firstname'];
                ?>
                <br />
                <?php
                // Récupère le nom du fichier et l'affiche
                // pathinfo($_FILES['uploadFile']['name']); -----VERSION RECOMMANDEE--------
                echo 'File name : ' . strtolower(pathinfo($_GET['file'], PATHINFO_FILENAME));
                ?>
                <br />
                <?php
                // Récupère l'extension du fichier et l'affiche
                echo 'file extension : ' . strtolower(pathinfo($_GET['file'], PATHINFO_EXTENSION));
            } else {
                echo 'Missing data';
            }
            ?>
        </p>
        <a href="index.php">Back</a>
    </body>
</html>
