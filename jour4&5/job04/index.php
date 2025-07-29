<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire POST avec affichage</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #eee;
        }
    </style>
</head>
<body>

    <h1>Formulaire de test en POST</h1>

    <form method="post" action="">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom"><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom"><br><br>

        <label for="email">Email :</label>
        <input type="text" name="email" id="email"><br><br>

        <label for="ville">Ville :</label>
        <input type="text" name="ville" id="ville"><br><br>

        <input type="submit" value="Envoyer">
    </form>

    <?php
    // Vérifier si des données ont été envoyées en POST
    if (!empty($_POST)) {
        echo "<h2>Arguments POST reçus :</h2>";
        echo "<table>";
        echo "<tr><th>Argument</th><th>Valeur</th></tr>";

        // Parcourir tous les champs POST et les afficher dans le tableau
        foreach ($_POST as $argument => $valeur) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($argument) . "</td>";
            echo "<td>" . htmlspecialchars($valeur) . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    }
    ?>

</body>
</html>
