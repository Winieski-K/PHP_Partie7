<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 7</title>
    </head>
    <body>
        <?php
        // Si aucune donnée n'est trouvée, affiche le formulaire
        if (empty($_GET)) {
            ?>
            <form action="index.php" method="GET">
                <select name="gender">
                    <option disabled selected>Select an option</option>
                    <option value="M">M</option>
                    <option value="Mme">Mme</option>
                </select>
                <label for="lastname">Your lastname : </label>
                <input type="text" name="lastname" id="lastname" />
                <label for="firstname">Your firstname : </label>
                <input type="text" name="firstname" id="firstname" />
                <label for="file">File : </label>
                <input type="file" name="file" id="file" />
                <input type="submit" value="Generate">
            </form>
            <?php
            // Si des données sont présentes, affiche leur valeur
        } else {
            ?>
            <div>
                <p>
                    <?php
                    // Vérifie que les variables ont bien une valeur
                    if (!empty($_GET['gender']) && !empty($_GET['lastname']) && !empty($_GET['firstname'])) {
                        // Récupère le nom du fichier et le stocke dans une variable
                        // pathinfo($_FILES['uploadFile']['name']); -----VERSION RECOMMANDEE--------
                        $fileName = strtolower(pathinfo($_GET['file'], PATHINFO_FILENAME));
                        // Récupère l'extension du fichier et la stocke dans une variable
                        // pathinfo($_FILES['uploadFile']['name']); -----VERSION RECOMMANDEE--------
                        $fileExtension = strtolower(pathinfo($_GET['file'], PATHINFO_EXTENSION));
                        echo $_GET['gender'] . ' ' . $_GET['lastname'] . ' ' . $_GET['firstname'];
                        ?>
                        <br />
                        <?php
                        // Vérifie si l'extension est pdf
                        if ($fileExtension == 'pdf') {
                            echo 'Your file is a pdf';
                            ?>
                            <br />
                            <?php
                        } else {
                            echo 'Your file is not a pdf';
                        }
                        ?>
                        <br />
                        <?php
                        echo 'File name : ' . $fileName;
                        ?>
                        <br />
                        <?php
                        echo 'file extension : ' . $fileExtension;
                    } else {
                        echo 'Missing data';
                    }
                    ?>
                </p>
            </div>
            <a href="index.php">Back</a>
            <?php
        }
        ?>
    </body>
</html>
