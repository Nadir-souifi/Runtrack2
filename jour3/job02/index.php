<?php

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";


$longueur = strlen($str);


echo "<h2 style='text-align:center;'>Un caractère sur deux</h2>";
echo "<p style='text-align:center; font-size: 18px;'>";

for ($i = 0; $i < $longueur; $i += 2) {
    echo $str[$i];
}

echo "</p>";
?>
