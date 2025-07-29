<?php

$str = "Dans l'espace, personne ne vous entend crier";


$compteur = 0;


for ($i = 0; isset($str[$i]); $i++) {
    $compteur++;
}


echo "<h2 style='text-align:center;'>Nombre de caractères</h2>";
echo "<p style='text-align:center; font-size: 18px;'>La chaîne contient $compteur caractères.</p>";
?>
