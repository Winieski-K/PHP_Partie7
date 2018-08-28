<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 6</title>
    </head>
    <body>
        <?php
        // Si aucune donnée n'est trouvée, affiche le formulaire
        if (empty($_POST)) {
            ?>
            <form action="index.php" method="POST">
                <select name="gender">
                    <option disabled selected>Select an option</option>
                    <option value="M">M</option>
                    <option value="Mme">Mme</option>
                </select>
                <label for="lastname">Your lastname : </label><input type="text" name="lastname" id="lastname" />
                <label for="firstname">Your firstname : </label><input type="text" name="firstname" id="firstname" />
                <input type="submit" value="Generate" />
            </form>
            <?php
            // Si des données sont présentes, affiche leur valeur
        } else {
            ?>
            <div>
                <p>
                    <?php
                    // Vérifie que les 3 variables existent et ont bien une valeur
                    if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['gender'])) {
                        // Affiche la valeur des variables d'url 
                        echo $_POST['gender'] . ' ' . $_POST['firstname'] . ' ' . $_POST['lastname'];
                    } else {
                        echo 'Missing data';
                    }
                    ?>
                </p>
                <a href="index.php">Back</a>
            </div>
            <?php
        }
        ?>
    </body>
</html>
