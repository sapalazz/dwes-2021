<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table
        {
            border: 3px solid blue;
        }

        td
        {
            border: 1px solid blue;
        }
    </style>
</head>
<body>
    <?php

    function factorial($i)
    {
        for($j=$i; $j>=2; $j--)
        {
            $factorial = $factorial * $j;
            echo "*" .$j-1;
        }
        return $factorial;
    }

    $factorial = 1;
    $num = 5;

    echo "<table>";
    echo "<tr><td>Factorial</td>";
    echo "<td>Iterativo</td></tr>";
    echo "<tr>";
    for($i=1; $i<=$num; $i++)
    {
        echo "<td>$i!</td>";
        echo "<td>$i" .factorial($i) ."</td></tr>";
    }
    echo "</table>";
    ?>
</body>
</html>