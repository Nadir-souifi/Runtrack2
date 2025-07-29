<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Test de nombre pair ou impair</title>
</head>
<body>

    <h1>Vérifier si un nombre est pair ou impair</h1>

    <form method="get" action="">
        <label for="nombre">Entrez un nombre :</label>
        <input type="text" name="nombre" id="nombre">
        <input type="submit" value="Vérifier">
    </form>

    <?php
    if (isset($_GET['nombre'])) {
        $valeur = $_GET['nombre'];

        // Vérifier si c'est bien un nombre entier
        if (is_numeric($valeur) && intval($valeur) == $valeur) {
            if ($valeur % 2 == 0) {
                echo "<p><strong>Nombre pair</strong></p>";
            } else {
                echo "<p><strong>Nombre impair</strong></p>";
            }
        } else {
            echo "<p style='color:red;'>Veuillez entrer un nombre entier valide.</p>";
        }
    }
    ?>

</body>
</html>
