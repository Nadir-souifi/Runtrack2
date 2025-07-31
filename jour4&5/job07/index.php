<<<<<<< HEAD
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
    <label>Largeur : <input type="number" name="largeur" required></label>
    <label>Hauteur : <input type="number" name="hauteur" required></label>
    <button type="submit">Afficher la maison</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $largeur = intval($_POST["largeur"]);
    $hauteur = intval($_POST["hauteur"]);

    if ($largeur < 2 || $hauteur < 1 || $largeur % 2 !== 0) {
        echo "<p>Largeur doit être un nombre pair ≥ 2, et hauteur ≥ 1.</p>";
    } else {
        echo "<pre>";
        $demi = $largeur / 2;

        // Toit
        for ($i = 0; $i < $demi; $i++) {
            $espaces = str_repeat(" ", $demi - $i - 1);
            $interieur = str_repeat(" ", $i * 2);
            echo $espaces . "/" . $interieur . "\\" . "\n";
        }

        // Base du toit
        echo "/" . str_repeat("_", $largeur - 2) . "\\" . "\n";

        // Murs
        for ($i = 0; $i < $hauteur - 1; $i++) {
            echo "|" . str_repeat(" ", $largeur - 2) . "|" . "\n";
        }

        // Sol (fermeture)
        echo "|" . str_repeat("_", $largeur - 2) . "|" . "\n";

        echo "</pre>";
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
    <label>Largeur : <input type="number" name="largeur" required></label>
    <label>Hauteur : <input type="number" name="hauteur" required></label>
    <button type="submit">Afficher la maison</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $largeur = intval($_POST["largeur"]);
    $hauteur = intval($_POST["hauteur"]);

    if ($largeur < 2 || $hauteur < 1 || $largeur % 2 !== 0) {
        echo "<p>Largeur doit être un nombre pair ≥ 2, et hauteur ≥ 1.</p>";
    } else {
        echo "<pre>";
        $demi = $largeur / 2;

        // Toit
        for ($i = 0; $i < $demi; $i++) {
            $espaces = str_repeat(" ", $demi - $i - 1);
            $interieur = str_repeat(" ", $i * 2);
            echo $espaces . "/" . $interieur . "\\" . "\n";
        }

        // Base du toit
        echo "/" . str_repeat("_", $largeur - 2) . "\\" . "\n";

        // Murs
        for ($i = 0; $i < $hauteur - 1; $i++) {
            echo "|" . str_repeat(" ", $largeur - 2) . "|" . "\n";
        }

        // Sol (fermeture)
        echo "|" . str_repeat("_", $largeur - 2) . "|" . "\n";

        echo "</pre>";
    }
}
?>

</body>
</html>
>>>>>>> 78617c5b3e89e5b845e57d3cf52897477ffabedf
