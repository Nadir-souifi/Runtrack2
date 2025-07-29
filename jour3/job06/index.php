<?php

$str = "Les choses que l'on possède finissent par nous posséder.";


$str_inverse = "";

for ($i = strlen($str) - 1; $i >= 0; $i--) {
    $str_inverse .= $str[$i];
}

echo "<h2 style='text-align:center;'>Chaîne inversée</h2>";
echo "<p style='text-align:center; font-size: 18px;'>$str_inverse</p>";
?>
