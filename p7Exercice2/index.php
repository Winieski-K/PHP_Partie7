<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 2</title>
    </head>
    <body>
        <!-- Form utilisant la méthode POST  -->
        <form action="user.php" method="POST">
            <label for="lastname">Your lastname :</label>
            <input type="lastname" name="lastname" placeholder="Enter your lastname..." id="lastname" />
            <label for="firstname">Your firstname :</label>
            <input type="text" name="firstname" placeholder="Enter your firstname..." id="firstname" />
            <input type="submit" value="Generate" />
        </form>
    </body>
</html>
