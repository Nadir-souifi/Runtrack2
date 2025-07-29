<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de Connexion</title>
</head>
<body>

    <h1>Connexion</h1>

    <form method="post" action="">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" name="username" id="username"><br><br>

        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password"><br><br>

        <input type="submit" value="Se connecter">
    </form>

    <?php
    if (!empty($_POST)) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username === "John" && $password === "Rambo") {
            echo "<p><strong>C’est pas ma guerre</strong></p>";
        } else {
            echo "<p><strong>Votre pire cauchemar</strong></p>";
        }
    }
    ?>

</body>
</html>
