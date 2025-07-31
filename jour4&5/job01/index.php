<<<<<<< HEAD
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire GET</title>
</head>
<body>

    <h1>Formulaire de test (Méthode GET)</h1>

    <form method="get" action="">
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom"><br><br>

        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom"><br><br>

        <label for="email">Email :</label>
        <input type="text" name="email" id="email"><br><br>

        <input type="submit" value="Envoyer">
    </form>

    <?php
    if (!empty($_GET)) {
        echo "<h2>Résultats :</h2>";
        echo "Le nombre d'arguments GET envoyés est : " . count($_GET) . "<br><br>";

        foreach ($_GET as $key => $value) {
            echo "Clé : <strong>$key</strong> — Valeur : <strong>$value</strong><br>";
        }
    }
    ?>

</body>
</html>
=======
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire GET</title>
</head>
<body>

    <h1>Formulaire de test (Méthode GET)</h1>

    <form method="get" action="">
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom"><br><br>

        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom"><br><br>

        <label for="email">Email :</label>
        <input type="text" name="email" id="email"><br><br>

        <input type="submit" value="Envoyer">
    </form>

    <?php
    if (!empty($_GET)) {
        echo "<h2>Résultats :</h2>";
        echo "Le nombre d'arguments GET envoyés est : " . count($_GET) . "<br><br>";

        foreach ($_GET as $key => $value) {
            echo "Clé : <strong>$key</strong> — Valeur : <strong>$value</strong><br>";
        }
    }
    ?>

</body>
</html>
>>>>>>> 78617c5b3e89e5b845e57d3cf52897477ffabedf
