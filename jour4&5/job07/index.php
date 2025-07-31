<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Maison ASCII en PHP</title>
    <style>
        pre {
            font-family: monospace;
            white-space: pre;
        }
    </style>
</head>
<body>

<form method="post">
    <label>Largeur : <input type="number" name="largeur" min="3" required></label>
    <label>Hauteur : <input type="number" name="hauteur" min="1" required></label>
    <button type="submit">Afficher la maison</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $largeur = intval($_POST["largeur"]);
    $hauteur = intval($_POST["hauteur"]);

    if ($largeur < 3 || $hauteur < 1) {
        echo "<p>Largeur doit être ≥ 3 et hauteur ≥ 1.</p>";
    } else {
        echo "<pre>";

        $toitHauteur = floor($largeur / 2);

        // Toit bien centré
        for ($i = 0; $i < $toitHauteur; $i++) {
            $nbEspacesExt = $toitHauteur - $i;
            $nbEspacesInt = $largeur - 2 - 2 * ($nbEspacesExt - 1);
            $ligne = str_repeat(" ", $nbEspacesExt - 1) . "/" . str_repeat(" ", $nbEspacesInt) . "\\";

            echo $ligne . "\n";
        }

        // Base du toit
        echo "/" . str_repeat("_", $largeur - 2) . "\\" . "\n";

        // Murs
        for ($i = 0; $i < $hauteur - 1; $i++) {
            echo "|" . str_repeat(" ", $largeur - 2) . "|" . "\n";
        }

        // Sol
        echo "|" . str_repeat("_", $largeur - 2) . "|" . "\n";

        echo "</pre>";
    }
}
?>

</body>
</html>
