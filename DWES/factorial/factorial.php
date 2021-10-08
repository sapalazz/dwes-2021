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
    $numero = 5;
    echo "La factorial del número: $numero";

    function factorial($numero)
    {
        $total = 1;
        echo "<br>";

        for($i=$numero; $i>=1; $i--)
        {
            echo "*$i";
            $total = $numero * $i;
        }
        return $total;
    }

        echo "<table class='tabla'>";

    for($numero=1; $numero<3; $numero++)
    {
        echo "<tr>";
        for($col=1; $col<1; $col++)
        {
            echo "<td class='celdas'>"; 
            echo "factorial($numero)";
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    $resultado = factorial($numero);
    echo "<br>Da como resultado: " .$resultado;
    ?>
</body>
</html>