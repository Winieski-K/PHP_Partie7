<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 7</title>
    </head>
    <body>
        <!-- Formulaire utilisant la fonction GET -->
        <form action="user.php" method="GET">
            <select name="gender">
                <option disabled selected>Select an option</option>
                <option value="M">M</option>
                <option value="Mme">Mme</option>
            </select>
            <label for="lastname">Your lastname :</label>
            <input type="lastname" name="lastname" value="" placeholder="Enter your lastname..." id="lastname" />
            <label for="firstname">Your firstname :</label>
            <input type="text" name="firstname" value="" placeholder="Enter your firstname..." id="firstname" />
            <label for="file">File : </label> 
            <input type="file" name="file" id="file" />
            <input type="submit" value="Generate" />
        </form>
    </body>
</html>
