<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Variables PHP</title>
   
  </head>
  <body>
    <h1>Tableau des variables PHP</h1>

    <?php
   
    $bool = true;
    $entier = 42;
    $chaine = "Bonjour";
    $flottant = 3.14;

    $variables = [
        ['type' => gettype($bool), 'nom' => '$bool', 'valeur' => $bool ? 'true' : 'false'],
        ['type' => gettype($entier), 'nom' => '$entier', 'valeur' => $entier],
        ['type' => gettype($chaine), 'nom' => '$chaine', 'valeur' => $chaine],
        ['type' => gettype($flottant), 'nom' => '$flottant', 'valeur' => $flottant]
    ];
    ?>

    <table border="1">
    
      <thead>
        <tr>
          <th>Type</th>
          <th>Nom</th>
          <th>Valeur</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($variables as $var): ?>
        <tr>
          <td><?php echo $var['type']; ?></td>
          <td><?php echo htmlspecialchars($var['nom']); ?></td>
          <td><?php echo $var['valeur']; ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

  </body>
</html>
