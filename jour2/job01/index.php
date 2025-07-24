<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Affichage de 0 à 1337</title>
  </head>
  <body>
    <h1>Affichage des nombres de 0 à 1337</h1>

    <?php
    for ($i = 0; $i <= 1337; $i++) {
        if ($i == 42) {
            echo "<b><u>$i</u></b><br />";
        } else {
            echo "$i<br />";
        }
    }
    ?>
    
  </body>
</html>
 