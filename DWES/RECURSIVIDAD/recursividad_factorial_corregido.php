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

    // Función que calcula factorial de manera iterativa
    function f($n)
    {
        $fact = 1;
        for($i=0; $i<=$n; $i++)
        {
            $fact *= $i;
        }
        return $fact;

    }

    // Función que calcula el factorial de manera recursiva
    function f2($n)
    {
        if($n==0) return 1;
        else return $n*f($n-1);

    }
    


    ?>
</body>
</html>