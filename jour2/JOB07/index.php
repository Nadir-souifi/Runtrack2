<?php
echo "<pre>";

$hauteur = 5;

for ($i = 1; $i <= $hauteur; $i++) {
    // Espaces
    echo str_repeat(" ", $hauteur - $i);

    // Étoiles
    echo str_repeat("*", 2 * $i - 1);

    echo "\n";
}

echo "</pre>";
?>