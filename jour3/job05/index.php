<<<<<<< HEAD
<?php

$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";


$dic = [
    "voyelles" => 0,
    "consonnes" => 0
];


$voyelles = "aeiouyAEIOUY";


for ($i = 0; $i < strlen($str); $i++) {
    $char = $str[$i];

    if (ctype_alpha($char)) { 
        if (strpos($voyelles, $char) !== false) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
}
?>


<h2 style="text-align:center;">Comptage des voyelles et consonnes</h2>

<table style="margin:auto; border-collapse: collapse; width: 40%; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
    <thead>
        <tr style="background-color:#4CAF50; color:white;">
            <th>Voyelles</th>
            <th>Consonnes</th>
        </tr>
    </thead>
    <tbody>
        <tr style="text-align:center;">
            <td style="border: 1px solid #ddd; padding: 10px;"><?php echo $dic["voyelles"]; ?></td>
            <td style="border: 1px solid #ddd; padding: 10px;"><?php echo $dic["consonnes"]; ?></td>
        </tr>
    </tbody>
</table>

=======
<?php

$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";


$dic = [
    "voyelles" => 0,
    "consonnes" => 0
];


$voyelles = "aeiouyAEIOUY";


for ($i = 0; $i < strlen($str); $i++) {
    $char = $str[$i];

    if (ctype_alpha($char)) { 
        if (strpos($voyelles, $char) !== false) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
}
?>


<h2 style="text-align:center;">Comptage des voyelles et consonnes</h2>

<table style="margin:auto; border-collapse: collapse; width: 40%; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
    <thead>
        <tr style="background-color:#4CAF50; color:white;">
            <th>Voyelles</th>
            <th>Consonnes</th>
        </tr>
    </thead>
    <tbody>
        <tr style="text-align:center;">
            <td style="border: 1px solid #ddd; padding: 10px;"><?php echo $dic["voyelles"]; ?></td>
            <td style="border: 1px solid #ddd; padding: 10px;"><?php echo $dic["consonnes"]; ?></td>
        </tr>
    </tbody>
</table>

>>>>>>> 78617c5b3e89e5b845e57d3cf52897477ffabedf
