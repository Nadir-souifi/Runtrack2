<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire GET avec Tableau</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
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

        <label for="ville">Ville :</label>
        <input type="text" name="ville" id="ville"><br><br>

        <input type="submit" value="Envoyer">
    </form>

    <?php
    if (!empty($_GET)) {
        echo "<h2>Arguments reçus :</h2>";
        echo "<table>";
        echo "<tr><th>Argument</th><th>Valeur</th></tr>";

        foreach ($_GET as $key => $value) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($key) . "</td>";
            echo "<td>" . htmlspecialchars($value) . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    }
    ?>

</body>
</html>
