<!DOCTYPE html>
<html>
<head>
    <title>Parité des nombres</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f9f9f9;
        }

        table {
            border-collapse: collapse;
            width: 50%;
            margin: auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px 20px;
            text-align: center;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e0f7fa;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Parité des nombres</h2>

<table>
    <tr>
        <th>Nombre</th>
        <th>Parité</th>
    </tr>

    <?php
    $nombres = [200, 204, 173, 98, 171, 404, 459];

    foreach ($nombres as $nombre) {
        $parite = ($nombre % 2 == 0) ? "paire" : "impaire";
        echo "<tr><td>$nombre</td><td>$parite</td></tr>";
    }
    ?>

</table>

</body>
</html>
