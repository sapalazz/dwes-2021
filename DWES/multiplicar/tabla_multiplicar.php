<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar de Sara</title>
    <style>
        .tabla
        {
            border: 1px solid black;
        }

        .celdas 
        {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php

    echo "<table class='tabla'>";

    for($fil=1; $fil<10; $fil++)
    {
        echo "<tr>";
        for($col=1; $col<10; $col++)
        {
            $resultado = $fil * $col;
            echo "<td class='celdas'>$fil * $col = $resultado</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>