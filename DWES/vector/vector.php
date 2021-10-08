<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function rellenarDeAleatorios()
    {
        $arrayNumeros = array();
        $max_num = 20;
        for($i=0; $i<$max_num; $i++)
        {
            $num_aleatorio = rand(1,99);
            array_push($arrayNumeros, $num_aleatorio);
        }

        for($i=0; $i<$max_num; $i++)
        {
            echo $arrayNumeros[$i] ."<br>";
            $menor = min($arrayNumeros);
            if($arrayNumeros[$i]==$menor)
            {
                echo "==El menor número del array es: $menor. Su posición es: " .$i ."==<br>";
            }
        }

        $menor2 = $arrayNumeros[0];
        $posicion = 0;
        for($i=1; $i<20; $i++)
        {
            if($arrayNumeros[$i]<$menor2)
            {
                $menor2 = $arrayNumeros[$i];
                $posicion = $i;
            }
        }
        echo "El menor del array es: " .$menor2 ." y su posición es: " .$posicion;
       
    }
    rellenarDeAleatorios();
    ?>
</body>
</html>