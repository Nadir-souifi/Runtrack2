<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais.";


$longueur = strlen($str);

$str_modifiee = "";


for ($i = 1; $i < $longueur; $i++) {
    $str_modifiee .= $str[$i];
}


$str_modifiee .= $str[0];


echo "<h2 style='text-align:center;'>Chaîne décalée</h2>";
echo "<p style='text-align:center; font-size: 18px;'>$str_modifiee</p>";
?>
