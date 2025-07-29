<?php
// Valeur par défaut
$style = "style1";
if (isset($_POST['style']) && in_array($_POST['style'], ['style1', 'style2', 'style3'])) {
    $style = $_POST['style'];
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Choix de Style CSS</title>
    <link rel="stylesheet" href="<?= htmlspecialchars($style) ?>.css">
</head>
<body>

    <h1>Changer le style de la page</h1>

    <form method="post">
        <label for="style">Choisissez un style :</label>
        <select name="style" id="style">
            <option value="style1" <?= $style == 'style1' ? 'selected' : '' ?>>Style 1</option>
            <option value="style2" <?= $style == 'style2' ? 'selected' : '' ?>>Style 2</option>
            <option value="style3" <?= $style == 'style3' ? 'selected' : '' ?>>Style 3</option>
        </select>
        <button type="submit">Appliquer</button>
    </form>

</body>
</html>
